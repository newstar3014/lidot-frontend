function LoadBestReview(_grid) {
    let obj = new Object();

    var keyword = $('#searchValue').val();

    if (keyword) {
        obj.keyword = keyword;
    }

    $.ajax({
        url: SERVER_AP + '/review/v1/review-paging-best',
        type: 'post',
        cache: false,
        async: false,
        data: {
            page: 1,
            ppp: rppp,
            obj: obj,
            type: ViewType,
        },
        success: function (data) {
            console.log('LoadBestReview >>', data);

            $('.bestReview-wrapper').html('');

            if (data.rows.length == 0) {
                let str = `<div class="py-5 text-center">베스트 후기가 없습니다.</div>`;
                $('.bestReview-wrapper').append(str);
            } else {
                $.each(data.rows, function (i, v) {
                    let p_image;
                    let pr_pic;
                    console.log('확인 : ', v);
                    if (v.pr_pic) {
                        //리뷰등록시 이미지 올렸을경우, 포토리뷰
                        pr_pic = JSON.parse(v.pr_pic);
                    } else {
                        //리뷰등록시 이미지 안올렸을 경우 상품 이미지 노출
                        pr_pic = JSON.parse(v.p_image);
                    }

                    p_image = JSON.parse(v.p_image);

                    if (v.u_id) {
                        var u_id = v.u_id.slice(0, 4) + `***`;
                    }

                    if (v.pr_date) {
                        var pr_date = v.pr_date.slice(0, 10);
                    }

                    //                        data-toggle="modal" data-target="#reviewModal"
                    let colStr = 'col-md-4';
                    if (_grid == 2) {
                        colStr = 'col-md-6';
                    } else if (_grid == 4) {
                        //colStr = 'col-md-3';
                        colStr = 'col-md-2_4';
                    }

                    if ($(window).width() < 768) {
                        colStr = 'col-md-3';
                    }

                    let pd = '';
                    if ($(window).width() < 500) {
                        if (i % 2 == 0) {
                            pd = 'pr-1';
                        } else {
                            pd = 'pl-1';
                        }
                    }

                    v.pr_comments = v.pr_comments.replace(/<p><br><\/p>/g, '');

                    let ss = '';

                    if (pr_pic.length > 1) {
                        ss = `<svg class="widget_item_img_more" xmlns="http://www.w3.org/2000/svg" width="16.014" height="16.002" viewBox="0 0 16.014 16.002">
                          <path fill="#fff" d="M0 0H12V12H0z"></path>
                          <path fill="none" stroke="#fff" stroke-width="2px" d="M1441-559.716h12.068v-11.669" transform="translate(-1438.053 574.719)"></path>
                          <path fill="none" d="M0 0H16V16H0z"></path>
                      </svg>`;
                    }

                    var str = `<div class="col-6 ${colStr} mb-md-15 mb-3 ${pd}" onclick="openReviewModal(${
                        v.pr_seq
                    });">
                                    <div class="view_item position-relative review-border-wrap popUpOpenid" data-pr_seq="${
                                        v.pr_seq
                                    }" id="popUpOpenid">
                                      <div class="sq bg-option position-relative" style="background-image:url('${
                                          pr_pic[0]
                                      }')">
                                      ${ss}
                                      </div>
                                        <div class="view_ab view_review">
                                            <div class="border-top first"></div>

                                            <div class="d-flex">
                                              <div class="p-2">
                                                  <div class="product-image-style background-info" style="background:url('${
                                                      p_image[0]
                                                  }');"></div>
                                              </div>
                                              <div class="px-2 d-flex align-items-center">
                                                <span class="product-title-wrap">${
                                                    v.p_name
                                                }</span>
                                              </div>
                                            </div>

                                                <div class="border-top mx-2"></div>
                                                <div class="p-2">
                                                    <div class="">
                                                      <div class="text-left review-star-img mt-0">${star(
                                                          v.pr_star,
                                                      )}</div>
                                                        <div class=" review-title-wrap">${
                                                            v.pr_title
                                                        }</div>
                                                        <div class="mt-2 review-contents">${
                                                            v.pr_comments
                                                        }</div>
                                                        <div class="d-md-flex justify-content-between mt-2">
                                                            <div class="review-uid-date">${u_id} | ${pr_date}</div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                       <div>
                                    </div>
                                   </div>`;

                    $('.bestReview-wrapper').append(str);

                    function star(pr_star) {
                        let star = ``;
                        for (let i = 0; i < 5; i++) {
                            num = i + 1;

                            if (num <= pr_star) {
                                //star += `<img src="img/best-review/best-review-star-a.png" />`;
                                star += `<i class="best_star active fa-solid fa-star"></i>`;
                            } else {
                                //star += `<img src="img/best-review/best-review-star-b.png" />`;
                                star += `<i class="best_star fa-regular fa-star"></i>`;
                            }
                        }
                        return star;
                    }
                });
            }
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
}

function brClick(pr_seq) {
    location.href = '/bestreview_detail.php?pr_seq=' + pr_seq;
}
let methodsInstance;
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
            console.log('dddd', data);
            let imgArr = '';

            if (data[0].pr_pic) {
                imgArr = JSON.parse(data[0].pr_pic);
            } else {
                imgArr = JSON.parse(data[0].p_image);
            }

            let popImgArr = [];
            $.each(imgArr, function (i, v) {
                let imgObj = new Object();

                imgObj.src = v;
                imgObj.thumb = v;

                if ($('.img_height').height() > 700) {
                    $('.add_align').removeClass('align-items-center');
                    $('.add_align').addClass('align-items-start');
                } else {
                    $('.add_align').removeClass('align-items-start');
                }
                popImgArr.push(imgObj);
            });

            const lgContainer_m = document.getElementById('bg_wraap_m');
            const inlineGallery_m = lightGallery(lgContainer_m, {
                container: lgContainer_m,
                dynamic: true,
                // Turn off hash plugin in case if you are using it
                // as we don't want to change the url on slide change
                hash: false,
                // Do not allow users to close the gallery
                closable: false,
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
            inlineGallery_m.openGallery();
            methodsInstance = inlineGallery_m;
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

            let contstr = `<div>
            <div class="font-weight-bold review_pname pointer" onclick="location.href='/product_detail.php?p_seq=${
                data[0].p_seq
            }';">${data[0].p_name}</div>
            <hr />
            <div class="inner_scroll">
            <div> ${star(data[0].pr_star)} ${data[0].pr_star}</div>
            <div class="mt-2 inner_comment">${removeEmptyTags(data[0].pr_comments)}</div>
            <div class="py-3 text-secondary" style="font-size:12px;"><span class="text-dark mr-2">${name}</span> ${
                data[0].pr_date
            }</div>
            <div class="review_div">${goodBtn}</div>${answerDiv}</div></div>`;

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

function removeEmptyTags(input) {
    // 사용자 입력에서 <p><br></p> 문자열을 삭제합니다.
    var cleanedInput = input.replace(/<p><br><\/p>/g, '');

    return cleanedInput;
}

const $lgGalleryMethodsDemo = document.getElementById('bg_wraap_m');

$lgGalleryMethodsDemo.addEventListener('lgAfterOpen', () => {
    const previousBtn =
        '<button type="button" id="lg-prev-2" aria-label="Previous slide" class="lg-prev lg-icon">  </button>';
    const nextBtn =
        '<button type="button" id="lg-next-2" aria-label="Next slide" class="lg-next lg-icon">  </button>';

    // Append custom buttons to the lightGallery container
    const $lgContainer = document.querySelector('#bg_wraap_m .lg-content');
    $lgContainer.insertAdjacentHTML('beforeend', nextBtn);
    $lgContainer.insertAdjacentHTML('beforeend', previousBtn);

    // use lightGallery goToNextSlide and goToPrevSlide methods to
    // navigate to respective slides
    document.querySelector('.lg-next').addEventListener('click', () => {
        methodsInstance.goToNextSlide();
    });
    document.querySelector('.lg-prev').addEventListener('click', () => {
        methodsInstance.goToPrevSlide();
    });
});

$lgGalleryMethodsDemo.addEventListener('lgBeforeOpen', () => {
    let reviewTotal = document.querySelector(
        '#bg_wraap_m .lg-counter-all',
    ).innerText;

    let nowIndex = document.querySelector(
        '#bg_wraap_m .lg-counter-current',
    ).innerText;

    console.log('onBeforeOpen mobile');
    console.log('reviewTotal mobile : ', reviewTotal);
    console.log('nowIndex mobile : ', nowIndex);
    let dotStr = '';
    const tempDiv = document.createElement('div');
    tempDiv.id = 'dot_wrapper2';
    for (let i = 0; i < reviewTotal; i++) {
        if (i == 0) {
            dotStr += `<i class="review_dot fa-solid fa-circle active"></i>`;
        } else {
            dotStr += `<i class="review_dot fa-solid fa-circle"></i>`;
        }
    }
    tempDiv.innerHTML = dotStr;
    $lgGalleryMethodsDemo.append(tempDiv);
});

const lg = document.getElementById('bg_wrap');
lg.addEventListener('lgBeforeOpen', () => {
    let reviewTotal = document.querySelector(
        '#bg_wrap .lg-counter-all',
    ).innerText;

    let nowIndex = document.querySelector(
        '#bg_wrap .lg-counter-current',
    ).innerText;

    console.log('onBeforeOpen');
    console.log('reviewTotal : ', reviewTotal);
    console.log('nowIndex : ', nowIndex);
    let dotStr = '';
    const tempDiv = document.createElement('div');
    tempDiv.id = 'dot_wrapper';
    for (let i = 0; i < reviewTotal; i++) {
        if (i == 0) {
            dotStr += `<i class="review_dot fa-solid fa-circle active"></i>`;
        } else {
            dotStr += `<i class="review_dot fa-solid fa-circle"></i>`;
        }
    }
    tempDiv.innerHTML = dotStr;
    lg.append(tempDiv);
});

// custom event with useful plugin data
// lg.addEventListener('lgBeforeSlide', event => {
//     let { index, prevIndex } = event.detail;

//     console.log('index, prevIndex: ', index, prevIndex);
//     let dots = document.querySelectorAll('.review_dot');
//     dots.forEach(function (dot, dotIndex) {
//         dot.classList.toggle('active', dotIndex == index);
//     });
// });

$lgGalleryMethodsDemo.addEventListener('lgAfterSlide', event => {
    let { index, prevIndex } = event.detail;

    console.log('index, prevIndex: ', index, prevIndex);
    let dots = document.querySelectorAll('#dot_wrapper2 .review_dot');
    dots.forEach(function (dot, dotIndex) {
        dot.classList.toggle('active', dotIndex == index);
    });
});

lg.addEventListener('lgAfterSlide', event => {
    let { index, prevIndex } = event.detail;

    console.log('index, prevIndex: ', index, prevIndex);
    let dots = document.querySelectorAll('#dot_wrapper .review_dot');
    dots.forEach(function (dot, dotIndex) {
        dot.classList.toggle('active', dotIndex == index);
    });
});

$('.review-popup-close').click(function () {
    $('#bg-back').addClass('d-none');
    $('#review-popup').addClass('d-none');
});

function goodReview(pr_seq) {
    if (!user_info) {
        alert('로그인을 먼저 해주세요!');
        return;
    }

    $.ajax({
        url: SERVER_AP + '/product/review-good',
        type: 'post',
        cache: false,
        data: {
            pr_seq: pr_seq,
            u_seq: user_info.u_seq,
        },
        success: function (data) {
            //LoadReview();
            loadReview(pr_seq);
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
}

function badReview(pr_seq) {
    if (!user_info) {
        alert('로그인을 먼저 해주세요!');
        return;
    }

    $.ajax({
        url: SERVER_AP + '/product/review-bad',
        type: 'post',
        cache: false,
        data: {
            pr_seq: pr_seq,
            u_seq: user_info.u_seq,
        },
        success: function (data) {
            //LoadReview();
            loadReview(pr_seq);
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
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
