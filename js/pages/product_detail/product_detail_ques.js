$(function () {
    $('#pq_comments').summernote({
        toolbar: [
            // [groupName, [list of button]]
            ['fontname', []],
            ['fontsize', []],
            ['style', []],
            ['color', []],
            ['table', []],
            ['para', []],
            ['height', ['height']],
            ['insert', ['picture', 'link', 'video']],
            ['view', []],
        ],
        fontNames: [
            'Arial',
            'Arial Black',
            'Comic Sans MS',
            'Courier New',
            '맑은 고딕',
            '궁서',
            '굴림체',
            '굴림',
            '돋움체',
            '바탕체',
        ],
        fontSizes: [
            '8',
            '9',
            '10',
            '11',
            '12',
            '14',
            '16',
            '18',
            '20',
            '22',
            '24',
            '28',
            '30',
            '36',
            '50',
            '72',
        ],
    });
});

function addQues() {
    if (!user_info) {
        alert('로그인을 먼저 해주세요.');
    } else {
        // if(!$("#pq_title").val()){
        //     alert("제목을 입력해주세요")
        // }else
        if (!hasSummernoteContent()) {
            alert('내용을 입력해주세요');
        } else if (confirm('문의를 작성하시겠습니까?')) {
            var filterStrings = ['씨발', '개새끼', '병신'];
            var texts = $('#pq_coments').summernote('code');

            var filterStr = '*';
            const starLeng = str => {
                var word = '';
                $.each(str.split(''), function (i, v) {
                    word += '*';
                });
                return word;
            };
            $.each(filterStrings, function (i, v) {
                if (texts.indexOf(v) !== -1) {
                    texts = texts.replace(v, starLeng(v));
                }
            });

            var obj = new Object();
            obj.p_seq = p_seq;
            obj.u_seq = user_info.u_seq;
            //obj.pq_title = $("#pq_title").val();
            obj.pq_coments = texts;
            obj.pq_date = currentDate();
            ques_picture_arr.length == 0 ||
                (obj.pq_pic = JSON.stringify(ques_picture_arr));
            //obj.pq_pass = $('#pq_pass').val();
            if ($('#pq_secret').prop('checked') == true) {
                obj.pq_secret = 'Y';
            }

            $.ajax({
                url: SERVER_AP + '/admin/common/insert',
                type: 'post',
                cache: false,
                data: {
                    table: 'product_question',
                    obj: obj,
                },
                success: function (data) {
                    location.reload();
                },
                error: function (request, status, error) {
                    console.log(error);
                },
            });
        }
    }
}

function hasSummernoteContent() {
    // Summernote 에디터의 내용을 가져옵니다.
    var summernoteContent = $('#pq_coments').summernote('code');

    // HTML 태그와 공백을 제거합니다.
    var strippedContent = summernoteContent
        .replace(/<[^>]+>/g, '')
        .replace(/\s/g, '');

    // 제거한 후의 텍스트 길이가 0보다 큰지 확인합니다.
    return strippedContent.length > 0;
}

function LoadQues() {
    $.ajax({
        url: SERVER_AP + '/product/ques-list',
        type: 'post',
        cache: false,
        data: {
            p_seq: p_seq,
            page: q_page,
            ppp: q_ppp,
            user_info: user_info,
        },
        success: function (data) {
            //console.log("data >>",data);
            $('.quesnum').text(data.totalCount);
            $('#question-wrap').html('');
            if (data.totalCount == 0) {
                var nstr = `<tr>
                                <td colspan="10" class="py-5">등록된 상품문의가 없습니다.</td>
                            </tr>`;
                $('#question-wrap').append(nstr);
            } else {
                $.each(data.rows, function (i, v) {
                    var name = '';
                    if (v.u_id) {
                        // var username = v.u_id;
                        // if (v.u_id.length > 2) {
                        //     name = username.slice(0, 1);
                        //     for (var j = 0; j < username.length -2; j++)
                        //         name += '*';
                        //     name += username.slice(-1);
                        // } else {
                        //     name = username.slice(0, 1);
                        //     name += username.length > 1 ? '*' : '';
                        // }
                        let maskLen = v.u_id.slice(4, v.u_id.length).length;
                        let mask = ``;
                        for (var j = 0; j < maskLen; j++) mask += '*';
                        name = v.u_id.slice(0, 4) + mask;
                    } else {
                        name = '홍길동';
                    }

                    let delbtn = ``;
                    if (user_info && user_info.u_seq == v.u_seq) {
                        delbtn = `<span class="text-danger pointer" onclick=quesDel(${v.pq_seq})>삭제</span>`;
                    }

                    var imgarr = JSON.parse(v.pq_pic);
                    var picstr = ``;
                    $('#pq_pic_wrap').html('');
                    $.each(imgarr, function (ii, vv) {
                        picstr += `<div class="col-6 col-md-3 rv_square"><div onclick="reviewimgMoreClick('${vv}',event)" class="pointer review_img qa_img" style="background:url('${vv}')" data-img="${vv}"></div>`;
                    });

                    picstr = `<div class="row">${picstr}</div>`;

                    console.log('dd', picstr);

                    let answerState = '';
                    let answerText = '';
                    if (!v.pq_answear) {
                        answerState = '대기중';
                    } else {
                        answerState = '답변완료';
                        answerText =
                            `<div class="border my-3 p-2 d-flex" style="background:#fafafa; align-items: baseline;">
                                            <i class="fa-solid fa-turn-up ml-2 mr-1"></i>
                                            <span class="answertag mr-2">답변</span>
                                            <pre class="mb-0 d-inline-block">` +
                            v.pq_answear +
                            `</pre>
                                        </div>`;
                    }

                    let rock = '';
                    let question_title = `question_title`;
                    if (v.pq_secret == 'Y' && v.u_seq != user_info.u_seq) {
                        v.pq_title = '비밀글 입니다.';
                        v.pq_coments = '비밀글 입니다.';
                        v.pq_answear = '비밀글 입니다.';
                        rock = '<i class="fa-solid fa-lock ml-1"></i>';
                        question_title = ``;
                    }

                    // var str = `<div class="">
                    //                 <details>
                    //                     <summary><h6 class="d-inline-block">Q. `+v.pq_title+`</h6></summary>
                    //                     <div class="">
                    //                         <span>by `+name+` on `+v.pq_date+`</span>
                    //                     </div>
                    //                     <div class="border my-3 p-2">
                    //                         `+v.pq_coments+`
                    //                     </div>
                    //                 </details>
                    //                 <p>A. `+v.pq_answear+`</p>
                    //                 ${delbtn}
                    //             </div>`;
                    // console.log("v.pq_coments >>",v.pq_coments);
                    // console.log("$(v.pq_coments).find('p') >>",$(v.pq_coments).find('p').text());
                    // $.each($(v.pq_coments).find('p'), function(ii,vv){
                    //     console.log("vv >>",vv);
                    // })
                    var str =
                        `<tr>
                                    <td>${answerState}</td>
                                    <td class="text-left">
                                        <details>
                                            <summary>
                                                <h6 class="d-inline-block mb-0" style="font-size:13px;">
                                                <div class="d-flex align-items-center">
                                                    Q. <div class="${question_title}">
                                                            ${v.pq_coments.replace(
                                                                /<(\/)?([a-zA-Z]*)(\s[a-zA-Z]*=[^>]*)?(\s)*(\/)?>/gi,
                                                                '',
                                                            )}
                                                        </div>
                                                        ${rock}
                                                </div>
                                                <span class="pc-none">/ ${name} / ${
                            v.pq_date
                        }</span></h6>
                                            </summary>
                                            <div class="border my-3 p-2" style="background:#fafafa;">
                                                ` +
                        v.pq_coments +
                        picstr +
                        `
                                            </div>
                                            ${answerText}
                                        </details>
                                    </td>
                                    <td class="m-none">${name}</td>
                                    <td class="m-none">${v.pq_date}</td>
                                </tr>`;
                    $('#question-wrap').append(str);
                });

                drawPagingQuse(data.totalPage);
            }
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
}

function quesDel(pq_seq) {
    if (confirm('해당 문의글을 삭제 하시겠습니까?')) {
        $.ajax({
            url: SERVER_AP + '/admin/common/delete',
            type: 'post',
            cache: false,
            async: false,
            data: {
                table: 'product_question',
                field: 'pq_seq',
                seq: pq_seq,
            },
            success: function (data) {
                alert('삭제 되었습니다!');
                location.reload();
            },
            error: function (request, status, error) {
                console.log(error);
            },
        });
    }
}

function drawPagingQuse(totalPage, _maxPerPage) {
    var maxPerPage;
    if (_maxPerPage) {
        maxPerPage = _maxPerPage;
    } else {
        maxPerPage = 10;
    }

    $('#ques-paged-wrap').removeClass('d-none');
    var pagedStr1 =
        '<li class="page-item">\
        <a class="page-link text-dark btn btn-sm btn-arrow" href="javascript:void(0);" aria-label="Previous" onclick="QuesgoPage(1);">\
            <span aria-hidden="true"><i class="fas fa-angle-double-left"></i></span>\
        </a>\
    </li><li class="page-item">\
        <a class="page-link text-dark btn btn-sm btn-arrow" href="javascript:void(0);" aria-label="Previous" onclick="QuesgoPage(\'prev\');">\
            <span aria-hidden="true"><i class="fas fa-angle-left"></i></span>\
        </a>\
    </li>';
    var pagedStr3 =
        '<li class="page-item">\
        <a class="page-link text-dark btn btn-sm btn-arrow" href="javascript:void(0);" aria-label="Next" onclick="QuesgoPage(\'next\');">\
            <span aria-hidden="true"><i class="fas fa-angle-right"></i></span>\
        </a>\
    </li><li class="page-item">\
        <a class="page-link text-dark btn btn-sm btn-arrow" href="javascript:void(0);" aria-label="Next" onclick="QuesgoPage(' +
        totalPage +
        ');">\
            <span aria-hidden="true"><i class="fas fa-angle-double-right"></i></span>\
        </a>\
    </li>';

    var pagedStr2 = '';
    var count = 0;

    var start_paged;
    if (q_page <= maxPerPage) {
        start_paged = 1;
    } else {
        start_paged = q_page;
        var paged_minus = (page % maxPerPage) - 1;

        if (paged_minus < 0) {
            start_paged = q_page - (maxPerPage - 1);
        } else {
            start_paged -= paged_minus;
        }
    }
    var end_page = start_paged + (maxPerPage - 1);

    for (var i = start_paged; i <= end_page; i++) {
        count++;
        if (i <= totalPage) {
            if (count <= 10) {
                var activeStr = '';
                if (i == q_page) {
                    activeStr = ' active';
                }
                pagedStr2 +=
                    '<li class="page-item' +
                    activeStr +
                    '"><a class="page-link text-dark btn btn-sm" href="javascript:void(0);" onclick="QuesgoPage(' +
                    i +
                    ');">' +
                    i +
                    '</a></li>';
            }
        }
    }

    if (q_page == 1) {
        pagedStr1 = '';
    }
    if (q_page == totalPage) {
        pagedStr3 = '';
    }
    $('#ques-paged-content').html(pagedStr1 + pagedStr2 + pagedStr3);
}

function QuesgoPage(_page) {
    if (_page == 'prev') {
        q_page = q_page * 1 - 1;
    } else if (_page == 'next') {
        q_page = q_page * 1 + 1;
    } else {
        q_page = _page;
    }
    LoadQues();
}

var ques_picture_arr = [];

//이미지등록
$('#pq_pic').change(function () {
    var dir = currentDate() + 'product_review'; //파일경로
    var fileSize = this.files[0].size; // 파일의 크기를 바이트 단위로 가져옵니다.
    var maxSize = 20 * 1024 * 1024; // 10MB를 바이트 단위로 설정합니다.
    if (fileSize > maxSize) {
        alert('20MB 이하의 파일만 업로드 가능합니다.');
        this.value = null; // 파일 선택을 초기화합니다.
        return;
    }
    makeFormData_productReview(this, dir);
    $(this).val('');
});

function makeFormData_productReview(input, dir) {
    var file = input.files;
    console.log('file', file);
    $.each(file, function (i, v) {
        var formData = new FormData();
        formData.append('dir', dir);
        formData.append('img', v);

        if (ques_picture_arr.length > 5) {
            alert('이미지는 최대 6개까지 등록가능합니다.');
            return false;
        }

        var c_img = fileUpload(formData, dir);
        console.log('ccc', c_img);
        if (v.type.includes('video')) {
            var str = `<div class="col-6 col-md-3 rv_square"><div class="review_img qa_img"  data-img="${c_img}">
                    <video controls width="100%">
                      <source src="${c_img}" type="${v.type}">
                    </video>
                      <div class="reviewimgWrap"><i class="far fa-times-circle reviewimgClose"></i></div>   
                  </div></div>`;
            $('#pq_pic_div').append(str);
        } else {
            var str = `<div class="col-6 col-md-3 rv_square"><div class="review_img qa_img" style="background:url('${c_img}')" data-img="${c_img}">
                        <div class="reviewimgWrap">
                        <i class="fas fa-search-plus reviewimgMore" onclick="reviewimgMoreClick('${c_img}',event)"></i>
                          <i class="far fa-times-circle reviewimgClose"></i>
                        </div>
                    </div></div>`;
            $('#pq_pic_div').append(str);
        }

        //$("#pq_pic_div > label").remove();

        //사진변경해달라하면넣기
        // <label for="review-image-change'+i+'"><i class="fas fa-sync-alt reviewimgChange"></i></label>\
        // <input type="file" name="" value="" class="d-none review-image-change" id="review-image-change'+i+'">\

        // $.each($(".review_img"),function(ii,vv){
        //     $(vv).attr('data-target',ii)
        // })

        ques_picture_arr.push(c_img);
    });
}

$(document).on('click', '.reviewimgClose', function () {
    var thisval = $(this).closest('div').attr('data-img');
    for (var i = 0; i < ques_picture_arr.length; i++) {
        if (ques_picture_arr[i] == thisval) {
            ques_picture_arr.splice(i, 1);
            i--;
        }
    }
    $(this).closest('.review_img').remove();
});

//이미지 자세히보기
function reviewimgMoreClick(src, e) {
    $('#qna_bg_wrap').html('');
    e.preventDefault();
    console.log('src : ', src);

    //     let qna_mstr = `<div style="width:350px;height:700px;" class="mx-5">
    //     <div class=" w-100 review_img"  style="overflow-y:auto">
    //         <div class="d-flex h-100 add_align align-items-center">
    //             <img class="w-100 img_height" src="${src}" />
    //         </div>
    //     </div>
    // </div>`;
    //     $('.qna_bg_wraap_m').append(qna_mstr);
    //     if ($('.img_height').height() > 700) {
    //         $('.add_align').removeClass('align-items-center');
    //         $('.add_align').addClass('align-items-start');
    //     } else {
    //         $('.add_align').removeClass('align-items-start');
    //     }
    //     $('.qna_bg_wraap_m').slick({
    //         // slide: 'div',
    //         slidesToShow: 1,
    //         slidesToScroll: 1,
    //         arrows: false,
    //         nextArrow: $('.bg_right_arr'),
    //         prevArrow: $('.bg_left_arr'),
    //         fade: true,
    //         dots: true,
    //     });

    const lgContainer = document.getElementById('qna_bg_wrap');
    console.log('lgContainer: ', lgContainer);
    const inlineGallery = lightGallery(lgContainer, {
        container: lgContainer,
        dynamic: true,
        // Turn off hash plugin in case if you are using it
        // as we don't want to change the url on slide change
        hash: false,
        // Do not allow users to close the gallery
        closable: false,
        thumbnail: true,
        // Add maximize icon to enlarge the gallery
        showMaximizeIcon: true,
        // Append caption inside the slide item
        // to apply some animation for the captions (Optional)
        appendSubHtmlTo: '.lg-item',
        // Delay slide transition to complete captions animations
        // before navigating to different slides (Optional)
        // You can find caption animation demo on the captions demo page
        slideDelay: 400,
        dynamicEl: [{ src: src, thumb: src }],
        thumbWidth: 60,
        thumbHeight: '40px',
        thumbMargin: 4,
    });

    //console.log('inlineGallery : ', inlineGallery);

    // Since we are using dynamic mode, we need to programmatically open lightGallery
    inlineGallery.openGallery();

    $('#bg-back').removeClass('d-none');
    $('#qna-popup').removeClass('d-none');
}

$('.qna-popup-close').click(function () {
    $('#bg-back').addClass('d-none');
    $('#qna-popup').addClass('d-none');
    //$('.qna_bg_wraap_m').slick('unslick');
});

//이미지 자세히보기
function reviewimgMoreClickLoaded(src, e, pr_seq) {
    e.preventDefault();

    if ($('#mdoal-img-wrap').hasClass('slick-initialized')) {
        $('#mdoal-img-wrap').slick('unslick'); //슬릭해제
    }

    $.ajax({
        url: SERVER_AP + '/product/review-condition',
        type: 'post',
        cache: false,
        async: false,
        data: {
            table: 'product_review',
            pr_seq: pr_seq,
        },
        success: function (data) {
            $('#modal-img-more').remove();

            $('#mdoal-img-wrap, #mdoal-img-wrap-cont').html('');

            let imgArr = JSON.parse(data[0].pq_pic);
            $.each(imgArr, function (i, v) {
                let str = `<div><img src="${v}" class="w-100" /></div>`;
                $('#mdoal-img-wrap').append(str);
            });

            $('#mdoal-img-wrap').slick({
                slide: 'div',
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                dots: true,
            });

            let imgIndex = imgArr.indexOf(src);
            $('#mdoal-img-wrap').slick('slickGoTo', imgIndex);

            var name = '';
            if (data[0].u_id) {
                let username = data[0].u_id;
                let username_rear = data[0].u_id.slice(4, data[0].u_id.length);
                let masking = '';
                for (let i = 0; i < username_rear.length; i++) {
                    masking += '*';
                }
                name = data[0].u_id.substr(0, 4) + masking;
            } else {
                name = '홍길동';
            }

            let goodBtn = ``;
            // if(data[0].pr_user){
            //     let arr = JSON.parse(data[0].pr_user)
            //     if(arr.includes(user_info.u_seq)){
            //         goodBtn = `<div class="pointer good_review ml-auto d-inline-block active" onclick=badReview(${data[0].pr_seq})>좋아요 <span>${data[0].pr_good}</span></div>`
            //     }else{
            //         goodBtn = `<div class="pointer good_review ml-auto d-inline-block" onclick=goodReview(${data[0].pr_seq})>좋아요 <span>${data[0].pr_good}</span></div>`
            //     }
            // }else{
            //     goodBtn = `<div class="pointer good_review ml-auto d-inline-block" onclick=goodReview(${data[0].pr_seq})>좋아요 <span>${data[0].pr_good}</span></div>`
            // }

            let contstr = `<div class="mt-3">
                                <div>${data[0].pr_options} ${star(
                data[0].pr_star,
            )}</div>
                                <div class="mt-2 text-secondary" style="font-size:12px;">${name} ${
                data[0].pr_date
            }</div>
                                <div class="mt-2">${data[0].pr_comments}</div>
                                <div class="mt-2 d-flex">${goodBtn}</div>
                            </div>`;

            function star(pr_star) {
                var star = ``;
                for (let i = 0; i < pr_star; i++) {
                    star += `<i class="fa fa-star" aria-hidden="true" style="color:#ede661"></i>`;
                }
                return star;
            }

            $('#mdoal-img-wrap-cont').append(contstr);
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
    $('#img-modal').modal('show');
}
////////
/////////////////////////////메인이미지 변경

$(document).on('change', '.review-image-change', function () {
    var dir = currentDate() + 'product'; //파일경로
    makeFormDataReviewChange(this, dir);
});

function makeFormDataReviewChange(input, dir) {
    var file = input.files;

    $.each(file, function (i, v) {
        var formData = new FormData();
        formData.append('dir', dir);
        formData.append('img', v);

        var c_img = fileUpload(formData, dir);

        var index = $(input).closest('.review_img').attr('data-target') * 1;
        console.log('index', index);
        $(input)
            .closest('.review_img')
            .css('background', 'url(' + c_img + ')');
        ques_picture_arr[index] = c_img;
    });
}
