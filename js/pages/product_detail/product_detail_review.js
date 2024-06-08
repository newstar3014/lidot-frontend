var product_review_picture_arr = [];

//이미지등록
$('#pr_pic').change(function () {
    var dir = currentDate() + 'product_review'; //파일경로
    var fileSize = this.files[0].size; // 파일의 크기를 바이트 단위로 가져옵니다.
    var maxSize = 20 * 1024 * 1024; // 10MB를 바이트 단위로 설정합니다.
    if (fileSize > maxSize) {
        alert('20MB 이하의 파일만 업로드 가능합니다.');
        this.value = null; // 파일 선택을 초기화합니다.
        return;
    }
    makeFormData_productReview(this, dir);
});

function makeFormData_productReview(input, dir) {
    var file = input.files;
    $.each(file, function (i, v) {
        var formData = new FormData();
        formData.append('dir', dir);
        formData.append('img', v);
        console.log('vv', v.type);
        if (product_review_picture_arr.length > 10) {
            alert('이미지는 최대 10개까지 등록가능합니다.');
            return false;
        }

        var c_img = fileUpload(formData, dir);

        if (v.type.includes('video')) {
            var str = `<div class="position-relative d-inline-block mr-2 review_img"  data-img="${c_img}">
                    <video controls width="100%">
                      <source src="${c_img}" type="${v.type}">
                    </video>
                      <i class="far fa-times-circle reviewimgClose"></i>\
                  </div>`;
            $('#pr_pic_div').append(str);
        } else {
            var str =
                '<div class="position-relative d-inline-block mr-2 review_img" style="background:url(\'' +
                c_img +
                '\')" data-img="' +
                c_img +
                '">\
                        <i class="far fa-times-circle reviewimgClose"></i>\
                        <i class="fas fa-search-plus reviewimgMore" onclick="reviewimgMoreClick(\'' +
                c_img +
                '\',event)"></i>\
                    </div>';
            $('#pr_pic_div').append(str);
        }

        //사진변경해달라하면넣기
        // <label for="review-image-change'+i+'"><i class="fas fa-sync-alt reviewimgChange"></i></label>\
        // <input type="file" name="" value="" class="d-none review-image-change" id="review-image-change'+i+'">\

        // $.each($(".review_img"),function(ii,vv){
        //     $(vv).attr('data-target',ii)
        // })

        product_review_picture_arr.push(c_img);
    });
}

$(document).on('click', '.reviewimgClose', function () {
    var thisval = $(this).closest('div').attr('data-img');
    for (var i = 0; i < product_review_picture_arr.length; i++) {
        if (product_review_picture_arr[i] == thisval) {
            product_review_picture_arr.splice(i, 1);
            i--;
        }
    }
    $(this).closest('.review_img').remove();
});

//이미지 자세히보기
function reviewimgMoreClick(src, e) {
    e.preventDefault();
    $('#modal-img-more').attr('src', src);
    $('#img-modal').modal('show');
}

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

            let imgArr = JSON.parse(data[0].pr_pic);
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
        product_review_picture_arr[index] = c_img;
    });
}
///////////////////////////////////////////////

function addReview() {
    if (!user_info) {
        alert('로그인을 먼저 해주세요.');
    }
    // else if(!reviewtoggle){
    //     alert('상품을 먼저 구매해주세요.');
    // }
    else {
        if ($('input[name=pr_star]:checked').length == 0) {
            alert('평점을 입력해주세요');
        } else if (!$('#pr_comments').summernote('code')) {
            alert('내용을 입력해주세요');
        } else if (confirm('후기를 작성하시겠습니까?')) {
            var obj = new Object();
            obj.p_seq = p_seq;
            obj.po_seq = po_seq;
            obj.u_seq = user_info.u_seq;
            obj.pr_star = $('input[name=pr_star]:checked').val();
            obj.pr_options = $('#pr_options').val();
            obj.pr_comments = $('#pr_comments').summernote('code');
            product_review_picture_arr.length == 0 ||
                (obj.pr_pic = JSON.stringify(product_review_picture_arr));
            obj.pr_date = currentDate();
            $.ajax({
                url: SERVER_AP + '/admin/common/insert',
                type: 'post',
                cache: false,
                data: {
                    table: 'product_review',
                    obj: obj,
                },
                success: function (data) {
                    console.log('data', data.insertId);
                    updateOrderReview(data.insertId);
                    // history.back();
                },
                error: function (request, status, error) {
                    console.log(error);
                },
            });
        }
    }
}
function updateOrderReview(iddd) {
    console.log('iddd', iddd);
    let obj = new Object();
    obj.o_review_ck = iddd;
    $.ajax({
        url: SERVER_AP + '/common/update',
        type: 'post',
        cache: false,
        data: {
            table: 'order_list',
            obj: obj,
            whereField: 'o_seq',
            whereValue: o_seq,
        },
        success: function (data) {
            console.log('data', data);
            history.back();
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
}

function openReviewModal(_target, _prev, _next) {
    console.log('openReviewModal start');
    console.log('_target : ', _target);
    console.log('_prev : ', _prev);
    console.log('_next : ', _next);
    console.log('openReviewModal end ');
    $('#bg-back').removeClass('d-none');
    $('#review-popup').removeClass('d-none');

    if (_next != 0) {
        $('.rv-arrow.right').removeClass('d-none');
        $('.rv-arrow.right').attr('data-seq', _next);
    } else {
        $('.rv-arrow.right').addClass('d-none');
        $('.rv-arrow.right').attr('data-seq', _next);
    }

    if (_prev != 0) {
        $('.rv-arrow.left').removeClass('d-none');
        $('.rv-arrow.left').attr('data-seq', _prev);
    } else {
        $('.rv-arrow.left').addClass('d-none');
        $('.rv-arrow.left').attr('data-seq', _prev);
    }

    $.ajax({
        url: SERVER_AP + '/product/review-condition',
        type: 'post',
        cache: false,
        async: false,
        data: {
            table: 'product_review',
            pr_seq: _target,
        },
        success: function (data) {
            $('.bg_wrap, .content_wrap').html('');
            $('#review-popup .bg_wrap').addClass('col-8');
            $('#review-popup .bg_wrap').removeClass('col-12');
            $('#review-popup .right_side').removeClass('d-none');

            console.log('dddd', data);
            let imgArr = '';

            if (data[0].pr_pic) {
                imgArr = JSON.parse(data[0].pr_pic);
            } else {
                imgArr = JSON.parse(data[0].p_image);
            }

            console.log('openReviewModal imgage : ', imgArr);

            let popImgArr = [];
            $.each(imgArr, function (i, v) {
                let imgObj = new Object();

                imgObj.src = v;
                imgObj.thumb = v;
                let str = `<div style="width:350px;height:700px;" class="mx-5">
                  <div class=" w-100 review_img"  style="overflow-y:auto">
                      <div class="d-flex h-100 add_align align-items-center">
                          <img class="w-100 img_height" src="${v}" />
                      </div>
                  </div>
              </div>`;
                $('.bg_wraap_m').append(str);
                console.log('123123', $('.img_height').height());
                if ($('.img_height').height() > 700) {
                    $('.add_align').removeClass('align-items-center');
                    $('.add_align').addClass('align-items-start');
                } else {
                    $('.add_align').removeClass('align-items-start');
                }
                popImgArr.push(imgObj);
            });
            $('.bg_wraap_m').slick({
                // slide: 'div',
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                nextArrow: $('.bg_right_arr'),
                prevArrow: $('.bg_left_arr'),
                fade: true,
                dots: true,
            });

            // $(".bg_wrap").lightGallery();
            // let imgIndex = popImgArr.indexOf(src);
            // $('.bg_wrap').slick('slickGoTo', imgIndex);
            console.log('popImgArr', popImgArr);
            const lgContainer = document.getElementById('bg_wrap');
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
                dynamicEl: popImgArr,
                thumbWidth: 60,
                thumbHeight: '40px',
                thumbMargin: 4,
            });

            // Since we are using dynamic mode, we need to programmatically open lightGallery
            inlineGallery.openGallery();

            // let imgIndex = imgArr.indexOf(src);
            // $('.bg_wrap').slick('slickGoTo', imgIndex);

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
            if (data[0].pr_user) {
                let arr = JSON.parse(data[0].pr_user);
                if (arr.includes(user_info.u_seq)) {
                    goodBtn = `<div class="pointer good_review ml-auto d-inline-block active" onclick=badReview(${data[0].pr_seq})>
                            <span class="good_cnt">${data[0].pr_good}</span>명에게 리뷰가 도움이 됐어요!
                        </div>`;
                } else {
                    goodBtn = `<div class="pointer good_review ml-auto d-inline-block" onclick=goodReview(${data[0].pr_seq})>
                            <span class="good_cnt">${data[0].pr_good}</span>명에게 리뷰가 도움이 됐어요!
                        </div>`;
                }
            } else {
                goodBtn = `<div class="pointer good_review ml-auto d-inline-block" onclick=goodReview(${data[0].pr_seq})>
                        <span class="good_cnt">${data[0].pr_good}</span>명에게 리뷰가 도움이 됐어요!
                    </div>`;
            }
            let answerDiv = ``;
            if (data[0].pr_answer) {
                answerDiv = `
                  <div class="mt-4 pr_answer_div p-2">
                      ${data[0].pr_answer}
                  </div>`;
            }
            let contstr = `<div class="">
      <div class="font-weight-bold review_pname pointer" onclick="location.href='/product_detail.php?p_seq=${
          data[0].p_seq
      }';">${data[0].p_name}</div>
      <hr />
      <div> ${star(data[0].pr_star)} ${data[0].pr_star}</div>
      <div class="mt-2">${data[0].pr_comments}</div>
      <div class="py-3 text-secondary" style="font-size:12px;">${name} ${
                data[0].pr_date
            }</div>
    </div>
    <div class="review_div">${goodBtn}</div>
    ${answerDiv}
  `;

            function star(pr_star) {
                var star = ``;
                for (let i = 0; i < pr_star; i++) {
                    star += `<i class="fa fa-star" aria-hidden="true" style="color:#FE9638;"></i>`;
                }
                return star;
            }

            $('.content_wrap').append(contstr);
            //$('.review_pname').text($('.p_name_side').text());
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
}

$('.review-popup-close').click(function () {
    $('#bg-back').addClass('d-none');
    $('#review-popup').addClass('d-none');
    $('.bg_wraap_m').slick('unslick');
});

$(document).on('click', '.rv-arrow.left', function () {
    $('.bg_wraap_m').slick('unslick');
    let target_seq = $(this).attr('data-seq');
    let _next = $(`.rv-box${target_seq}`).attr('data-next');
    let _prev = $(`.rv-box${target_seq}`).attr('data-prev');

    openReviewModal(target_seq, _prev, _next);
});

$(document).on('click', '.rv-arrow.right', function () {
    $('.bg_wraap_m').slick('unslick');
    let target_seq = $(this).attr('data-seq');
    let _next = $(`.rv-box${target_seq}`).attr('data-next');
    let _prev = $(`.rv-box${target_seq}`).attr('data-prev');

    openReviewModal(target_seq, _prev, _next);
});

function LoadReview() {
    $.ajax({
        url: SERVER_AP + '/product/review-list',
        type: 'post',
        cache: false,
        data: {
            p_seq: p_seq,
            page: r_page,
            ppp: r_ppp,
        },
        success: function (data) {
            console.log('LoadReview >>', data);
            $('.reviewnum').text(data.totalCount);
            $('#review-wrap-top').html('');
            $('#review-wrap').html('');
            let avgstar = 0;

            if (data.totalCount == 0) {
                // var nstr = `<div class="py-5 text-center">
                //                 리뷰 작성시 <span class="font-weight-bold">최대 5,000원</span>을 드립니다. <br>
                //                 첫번째 리뷰를 작성해보세요.
                //             </div>`;
                var nstr = `<img src="/img/review_none.jpg" />`;
                $('#review-wrap').append(nstr);
                $('#review-wrap').addClass('text-center');
            } else {
                $.each(data.rows, function (i, v) {
                    avgstar += v.pr_star * 1;

                    var name = '';
                    if (v.u_id) {
                        let username = v.u_id;
                        let username_rear = v.u_id.slice(4, v.u_id.length);
                        let masking = '';
                        for (let i = 0; i < username_rear.length; i++) {
                            masking += '*';
                        }
                        name = v.u_id.substr(0, 4) + masking;
                    } else {
                        name = '홍길동';
                    }

                    let goodBtn = ``;
                    if (v.pr_user) {
                        let arr = JSON.parse(v.pr_user);
                        if (arr.includes(user_info.u_seq)) {
                            goodBtn = `<div class="py-2 pointer good_review_wrap text-primary align-items-center d-flex" onclick="badReview(${v.pr_seq})">
                                <i class="mr-2 fa-regular fa-thumbs-up"></i>
                                유용해요
                                <div class="text-black review_likecnt ml-2">${arr.length}</div>
                            </div>`;
                        } else {
                            goodBtn = `<div class="py-2 pointer good_review_wrap text-secondary align-items-center d-flex" onclick="goodReview(${v.pr_seq})">
                                <i class="mr-2 fa-regular fa-thumbs-up"></i>
                                유용해요
                                <div class="text-black review_likecnt ml-2">${v.pr_good}</div>
                            </div>`;
                        }
                    } else {
                        goodBtn = `<div class="py-2 pointer good_review_wrap text-secondary align-items-center d-flex" onclick="goodReview(${v.pr_seq})">
                        <i class="mr-2 fa-regular fa-thumbs-up"></i>
                        유용해요
                        <div class="text-black review_likecnt ml-2">${v.pr_good}</div>
                    </div>`;
                    }

                    let answer = ``;
                    if (v.pr_answer) {
                        answer = `<div class="mb-5 p-3" style="background:#f0f0f0">
                                    <div>관리자 답글</div>
                                    <hr>
                                    <div class="p_mb-0">
                                      ${v.pr_answer}
                                    </div>
                                </div>`;
                    }

                    let best = ``;
                    if (v.pr_good > 10) {
                        best = `<span class="font-weight-bold besttag mr-1">BEST</span>`;
                    }

                    let pr_user = v.pr_user;
                    if (pr_user) {
                        if (JSON.parse(pr_user)) {
                            pr_user = JSON.parse(pr_user).length;
                        }
                    } else {
                        pr_user = 0;
                    }

                    let starArr = [
                        '불만족',
                        '미흡',
                        '보통',
                        '만족',
                        '아주만족',
                    ];
                    let optionStr = `
          <div class="text-secondary mr-2 font-weight-bold fs-12">구매옵션</div>
          <div class="font-weight-bold fs-12">${v.po_option1}
              ${v.po_option2}(+${comma(v.po_price)}원)
          </div>`;

                    if (!v.po_option1) {
                        optionStr = ``;
                    }

                    let mdBtn = `
                <div class="md_pick_btn mb-2">
                MD PICK
                </div>
          `;

                    if (v.pr_best != 'Y') {
                        mdBtn = ``;
                    }

                    var imgarr = [];
                    v.pr_pic && (imgarr = JSON.parse(v.pr_pic));
                    var imageDivCount = 0;
                    console.log('imgarr :', imgarr);

                    if (imgarr) {
                        if (imgarr[0]) {
                            const rvArr = data.rows.filter(r => r.pr_pic);
                            let prev_seq = 0;
                            let next_seq = 0;
                            $.each(rvArr, function (ii, vv) {
                                if (vv.pr_seq == v.pr_seq) {
                                    if (rvArr[ii - 1]) {
                                        prev_seq = rvArr[ii - 1].pr_seq;
                                    }

                                    if (rvArr[ii + 1]) {
                                        next_seq = rvArr[ii + 1].pr_seq;
                                    }
                                }
                            });
                            console.log('rvArr: ', rvArr);
                            imageDivCount++;
                            var str = `<div class="col-6 col-md-3">
                            <div data-prev="${prev_seq}" data-next="${next_seq}" class="border pointer rv-box rv-box${
                                v.pr_seq
                            }" data-seq="${
                                v.pr_seq
                            }" onclick="openReviewModal(${
                                v.pr_seq
                            },${prev_seq},${next_seq});">
                            <div class="bg-option" style="height:250px;background-image:url('${
                                imgarr[0]
                            }')"></div>
                          <div class="p-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex">
                                <div class="review-rating review-rating${
                                    v.pr_seq
                                } d-inline-block"></div>
                                    <div class="font-weight-bold ml-2">
                                    ${starArr[v.pr_star - 1]}
                                    </div>
                                </div>
                            </div>
                            <div class="elip comment comment15 text-black">${
                                v.pr_comments
                            }</div>
                            <div class="text-secondary py-1 fs-13">
                            ${name} ${v.pr_date.substr(0, 10)}
                            </div>
                          </div>
                            </div>
                        </div>`;
                        } else {
                            var str = `<div class="review_box">
                                <div class="border-top border-bottom single_user_review d-flex mb-15 border-bottom my-5">
                                    <div class="review-details py-4 px-3 mr-5 reivew_in_wrap">
                                        ${mdBtn}
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="d-flex">
                                            <div class="review-rating review-rating${
                                                v.pr_seq
                                            } d-inline-block"></div>
                                                <div class="font-weight-bold ml-2">
                                                ${starArr[v.pr_star - 1]}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="font-weight-bold text-black u_name${
                                                v.pr_seq
                                            }">
                                              ${name}
                                              <div class="font-weight-bold text-secondary fs-12"> ${v.pr_date.substr(
                                                  0,
                                                  10,
                                              )}</div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-4 align-items-center">
                                            ${optionStr}
                                        </div>
                                    </div>
                                    <div class="position-relative reivew_in_wrap py-4 px-3 w-100">
                                        <div class="comment comment15 text-black com_${
                                            v.pr_seq
                                        }">
                                          ${v.pr_comments}
                                        </div>

                                        ${goodBtn}

                                        <div class="modi_btn_wrap modi_btn_wrap${
                                            v.u_seq
                                        } d-none">
                                              <span class="pointer" onclick="modifyReview(${
                                                  v.pr_seq
                                              });">수정하기</span>
                                              <span class="pointer" onclick="deleteReview(${
                                                  v.pr_seq
                                              });">삭제하기</span>
                                        </div>
                                    </div>

                                </div>
                                <div class=" d-flex">
                                    <div class=" py-4 px-3 mr-5 " style="width:250px">

                                    </div>
                                    ${answer}
                                </div>
                            </div>
                      `;
                        }
                    } else {
                        var str = `<div class="review_box">
                              <div class="border-top border-bottom single_user_review d-flex mb-15 border-bottom my-5">
                                  <div class="review-details py-4 px-3 mr-5 reivew_in_wrap">
                                      ${mdBtn}
                                      <div class="d-flex justify-content-between align-items-center">
                                          <div class="d-flex">
                                          <div class="review-rating review-rating${
                                              v.pr_seq
                                          } d-inline-block"></div>
                                              <div class="font-weight-bold ml-2">
                                              ${starArr[v.pr_star - 1]}
                                              </div>
                                          </div>
                                      </div>
                                      <div class="d-flex justify-content-between align-items-center">
                                          <div class="font-weight-bold text-black u_name${
                                              v.pr_seq
                                          }">
                                            ${name}
                                            <div class="font-weight-bold text-secondary fs-12"> ${v.pr_date.substr(
                                                0,
                                                10,
                                            )}</div>
                                          </div>
                                      </div>
                                      <div class="d-flex mt-4 align-items-center">
                                          ${optionStr}
                                      </div>
                                  </div>
                                  <div class="reivew_in_wrap py-4 px-3">
                                      <div class="comment comment15 text-black mb-3">
                                          ${v.pr_comments}
                                      </div>

                                      ${goodBtn}
                                  </div>

                              </div>
                              <div class=" d-flex">
                                  <div class=" py-4 px-3 mr-5 " style="width:250px">

                                  </div>
                                  ${answer}
                              </div>
                          </div>
                    `;
                    }

                    var mstr = `
                                <div class="single_user_review mb-15 border-bottom my-5">
                                    <div class="review-details">
                                        <p>작성자 <span class="font-weight-bold text-black u_name${
                                            v.pr_seq
                                        }">${name}</span>
                                        <span>${v.pr_date.substr(
                                            0,
                                            10,
                                        )}</span></p>
                                    </div>
                                    <div>
                                      <div class="d-flex justify-content-between align-items-center">
                                          <div>
                                              ${best}
                                            <div class="review-rating review-rating${
                                                v.pr_seq
                                            } d-inline-block"></div>
                                          </div>
                                          ${goodBtn}
                                      </div>
                                      <div id='pr_pic${
                                          v.pr_seq
                                      }' class='my-3'></div>
                                      <div class="comment comment${v.pr_seq}">${
                        v.pr_comments
                    }</div>
                                    </div>
                                    ${answer}
                                </div>`;
                    if (windowWidth < 760) {
                        $('#review-wrap').append(mstr);
                    } else {
                        if (imgarr) {
                            if (imgarr[0]) {
                                if (imageDivCount < 6) {
                                    $('#review-wrap-top').append(str);

                                    // $(`.rv-box`).each(function(i,v){
                                    //   let prev_seq = 0;
                                    //   let next_seq = 0;
                                    //   $(v)
                                    // })
                                }
                            } else {
                                $('#review-wrap').append(str);
                            }
                        } else {
                            $('#review-wrap').append(str);
                        }
                    }

                    for (let i = 0; i < v.pr_star; i++) {
                        var star = `<i class="fa fa-star mr-1" aria-hidden="true" style="color:#FE9638;"></i>`;
                        $('.review-rating' + v.pr_seq).append(star);
                    }

                    //       $.each(imgarr, function (ii, vv) {
                    //           console.log('vv', vv);
                    //           if (vv.includes('mp4')) {
                    //               var picstr = `<video controls class=" d-inline-block mr-2 mt-md-0 mt-2 review_img">
                    // <source src="${vv}" type="video/mp4">
                    // </video>`;
                    //           } else {
                    //               var picstr =
                    //                   '<div class=" d-inline-block mr-2 mt-md-0 mt-2 review_img"  style="background:url(\'' +
                    //                   vv +
                    //                   '\')"></div>';
                    //           }

                    //           $('#pr_pic' + v.pr_seq).append(picstr);
                    //       });

                    if ($(`.comment${v.pr_seq}`).height() > 100) {
                        $(`.comment${v.pr_seq}`).addClass('more');
                        let str = `<div class="text-right mt-2 md-mt-0"><span class="pointer more_btn more_btn${v.pr_seq} text-secondary" onclick="moreClick(${v.pr_seq})">더보기 ></span></div>`;
                        $(`.comment${v.pr_seq}`).after(str);
                    }
                });

                $('#reviewStar').text((avgstar / data.totalCount).toFixed(1));
                drawPagingReview(data.totalPage);
                if (user_info) {
                    $(`.modi_btn_wrap${user_info.u_seq}`).removeClass('d-none');
                }
            }
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
}

function moreComments(pr_seq) {
    $('.pr_co_' + pr_seq).removeClass('dots');
    $('.pr_co_' + pr_seq + '_2').remove();
}

function modifyReview(pr_seq) {
    location.href = `/review-insert.php?pr_seq=${pr_seq}&p_seq=${p_seq}`;
}

function deleteReview(pr_seq) {
    $.ajax({
        url: SERVER_AP + '/common/delete',
        type: 'post',
        cache: false,
        data: {
            table: 'product_review',
            field: 'pr_seq',
            seq: pr_seq,
        },
        success: function (data) {
            alert('정상적으로 삭제되었습니다.');
            location.reload();
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
}

function goodReview(pr_seq) {

    console.log(pr_seq);

    if (!user_info) {
        alert('로그인을 먼저 해주세요!');
        return;
    }

    if (confirm('해당 리뷰에 좋아요를 하시겠습니까?')) {
        $.ajax({
            url: SERVER_AP + '/product/review-good',
            type: 'post',
            cache: false,
            data: {
                pr_seq: pr_seq,
                u_seq: user_info.u_seq,
            },
            success: function (data) {
                console.log(data);
                LoadReview(pr_seq);
            },
            error: function (request, status, error) {
                console.log(error);
            },
        });
    }
}

function badReview(pr_seq) {
    if (!user_info) {
        alert('로그인을 먼저 해주세요!');
        return;
    }

    if (confirm('해당 리뷰에 좋아요를 취소하시겠습니까?')) {
        $.ajax({
            url: SERVER_AP + '/product/review-bad',
            type: 'post',
            cache: false,
            data: {
                pr_seq: pr_seq,
                u_seq: user_info.u_seq,
            },
            success: function (data) {
                LoadReview(pr_seq);
            },
            error: function (request, status, error) {
                console.log(error);
            },
        });
    }
}

function drawPagingReview(totalPage, _maxPerPage) {
    var maxPerPage;
    if (_maxPerPage) {
        maxPerPage = _maxPerPage;
    } else {
        maxPerPage = 10;
    }

    $('#review-paged-wrap').removeClass('d-none');
    var pagedStr1 =
        '<li class="page-item">\
        <a class="page-link text-dark btn btn-sm btn-arrow" href="javascript:void(0);" aria-label="Previous" onclick="ReviewgoPage(1);">\
            <span aria-hidden="true"><i class="fas fa-angle-double-left"></i></span>\
        </a>\
    </li><li class="page-item">\
        <a class="page-link text-dark btn btn-sm btn-arrow" href="javascript:void(0);" aria-label="Previous" onclick="ReviewgoPage(\'prev\');">\
            <span aria-hidden="true"><i class="fas fa-angle-left"></i></span>\
        </a>\
    </li>';
    var pagedStr3 =
        '<li class="page-item">\
        <a class="page-link text-dark btn btn-sm btn-arrow" href="javascript:void(0);" aria-label="Next" onclick="ReviewgoPage(\'next\');">\
            <span aria-hidden="true"><i class="fas fa-angle-right"></i></span>\
        </a>\
    </li><li class="page-item">\
        <a class="page-link text-dark btn btn-sm btn-arrow" href="javascript:void(0);" aria-label="Next" onclick="ReviewgoPage(' +
        totalPage +
        ');">\
            <span aria-hidden="true"><i class="fas fa-angle-double-right"></i></span>\
        </a>\
    </li>';

    var pagedStr2 = '';
    var count = 0;

    var start_paged;
    if (r_page <= maxPerPage) {
        start_paged = 1;
    } else {
        start_paged = r_page;
        var paged_minus = (page % maxPerPage) - 1;

        if (paged_minus < 0) {
            start_paged = r_page - (maxPerPage - 1);
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
                if (i == r_page) {
                    activeStr = ' active';
                }
                pagedStr2 +=
                    '<li class="page-item' +
                    activeStr +
                    '"><a class="page-link text-dark btn btn-sm" href="javascript:void(0);" onclick="ReviewgoPage(' +
                    i +
                    ');">' +
                    i +
                    '</a></li>';
            }
        }
    }

    if (r_page == 1) {
        pagedStr1 = '';
    }
    if (r_page == totalPage) {
        pagedStr3 = '';
    }
    $('#review-paged-content').html(pagedStr1 + pagedStr2 + pagedStr3);
}

function ReviewgoPage(_page) {
    if (_page == 'prev') {
        r_page = r_page * 1 - 1;
    } else if (_page == 'next') {
        r_page = r_page * 1 + 1;
    } else {
        r_page = _page;
    }
    LoadReview();
}

function moreClick(pr_seq) {
    $(`.comment${pr_seq}`).removeClass('more');
    $(`.more_btn${pr_seq}`).text('< 닫기');
    $(`.more_btn${pr_seq}`).attr('onclick', 'closeClick(' + pr_seq + ')');
}

function closeClick(pr_seq) {
    $(`.comment${pr_seq}`).addClass('more');
    $(`.more_btn${pr_seq}`).text('더보기 >');
    $(`.more_btn${pr_seq}`).attr('onclick', 'moreClick(' + pr_seq + ')');
}


function loadReview(pr_seq) {
    var obj = new Object();
    obj.pr_seq = pr_seq;
    $.ajax({
        url: SERVER_AP + '/common/condition',
        type: 'post',
        cache: false,
        async: false,
        data: {
            table: 'product_review',
            common: obj,
        },

        success: function (data) {
            console.log('dd', data);

            let v = data[0];
            let goodBtn = ``;
            if (v.pr_user) {
                let arr = JSON.parse(v.pr_user);
                if (arr.includes(user_info.u_seq)) {
                    goodBtn = `<div class="pointer good_review ml-auto d-inline-block active" onclick=badReview(${v.pr_seq})>
                          <span class="good_cnt">${v.pr_good}</span>명에게 리뷰가 도움이 됐어요!
                      </div>`;
                } else {
                    goodBtn = `<div class="pointer good_review ml-auto d-inline-block" onclick=goodReview(${v.pr_seq})>
                          <span class="good_cnt">${v.pr_good}</span>명에게 리뷰가 도움이 됐어요!
                      </div>`;
                }
            } else {
                goodBtn = `<div class="pointer good_review ml-auto d-inline-block" onclick=goodReview(${v.pr_seq})>
                      <span class="good_cnt">${v.pr_good}</span>명에게 리뷰가 도움이 됐어요!
                  </div>`;
            }
            $('.review_div').html(goodBtn);
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
}
