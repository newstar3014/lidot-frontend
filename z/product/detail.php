<? include_once $_SERVER["DOCUMENT_ROOT"].'/_header.php'; ?>

<style>
    .hide-detail{
        display: none;
    }
    .tf-product-media-wrap video {
        height: 100%;
        aspect-ratio: auto;
    }
    #product-detail-contents{
        text-align: center;
    }

iframe[src*="youtube.com"] {
  width: 100% !important;
  aspect-ratio: 16 / 9;
  height: auto !important;
  display: block;       /* inline 요소 간격 제거 */
  border: 0;            /* 프레임 보더 제거 */
}
</style>

<div class="container preview d-none">
    <div class="alert alert-danger mb-0 mt-3" role="alert">
        <i class="bi bi-eye"></i> 관리자 미리보기 화면입니다
    </div>
</div>

<!-- breadcrumb -->
<div class="tf-breadcrumb">
    <div class="container">
        <div class="tf-breadcrumb-wrap d-flex justify-content-between flex-wrap align-items-center">
            <div id="product-detail-breadcrumb" class="tf-breadcrumb-list"></div>
        </div>
    </div>
</div>
<!-- /breadcrumb -->
<!-- default -->
<section class="flat-spacing-4 pt_0 pb-5">
    <div class="tf-main-product section-image-zoom">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="tf-product-media-wrap sticky-top">
                        <div class="thumbs-slider">
                            <div dir="ltr" class="swiper tf-product-media-thumbs other-image-zoom" data-direction="vertical">
                                <div id="product-swiper1" class="swiper-wrapper stagger-wrap"></div>
                            </div>
                            <div dir="ltr" class="swiper tf-product-media-main" id="gallery-swiper-started">
                                <div id="product-swiper2" class="swiper-wrapper"></div>
                                <div class="swiper-button-next button-style-arrow thumbs-next"></div>
                                <div class="swiper-button-prev button-style-arrow thumbs-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="tf-product-info-wrap position-relative">
                        <div class="tf-zoom-main"></div>
                        <div id="product-detail-info" class="tf-product-info-list other-image-zoom"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /default -->
<!-- accordion -->
<section class="flat-spacing-12 pt_0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="widget-tabs style-two-col">
                    <ul class="widget-menu-tab">
                        <li class="item-title active">
                            <span class="inner">DETAIL</span>
                        </li>
                        <li class="item-title">
                            <span class="inner">SPECS</span>
                        </li>
                        <li class="item-title">
                            <span class="inner">REVIEW</span>
                        </li>
                        <li class="item-title">
                            <span class="inner">Q&A</span>
                        </li>
                        <li class="item-title">
                            <span class="inner">TERMS</span>
                        </li>
                    </ul>
                    <div class="widget-content-tab">
                        <div id="product-detail-contents" class="widget-content-inner active"></div>
                        <div class="widget-content-inner">
                            <table class="tf-pr-attrs">
                                <tbody>
                                    <tr>
                                        <th>상품번호</th>
                                        <td>상세페이지 참조</td>
                                    </tr>
                                    <tr>
                                        <th>상품상태</th>
                                        <td>상세페이지 참조</td>
                                    </tr>
                                    <tr>
                                        <th>품명</th>
                                        <td>상세페이지 참조</td>
                                    </tr>
                                    <tr>
                                        <th>KC 인증 필 유무</th>
                                        <td>상세페이지 참조</td>
                                    </tr>
                                    <tr>
                                        <th>색상</th>
                                        <td>상세페이지 참조</td>
                                    </tr>
                                    <tr>
                                        <th>구성품</th>
                                        <td>상세페이지 참조</td>
                                    </tr>
                                    <tr>
                                        <th>주요소재</th>
                                        <td>상세페이지 참조</td>
                                    </tr>
                                    <tr>
                                        <th>제조자/수입자</th>
                                        <td>상세페이지 참조</td>
                                    </tr>
                                    <tr>
                                        <th>제조국</th>
                                        <td>상세페이지 참조</td>
                                    </tr>
                                    <tr>
                                        <th>크기</th>
                                        <td>상세페이지 참조</td>
                                    </tr>
                                    <tr>
                                        <th>배송/설치비용</th>
                                        <td>상세페이지 참조</td>
                                    </tr>
                                    <tr>
                                        <th>품질보증기준</th>
                                        <td>상세페이지 참조</td>
                                    </tr>
                                    <tr>
                                        <th>A/S 책임자 전화번호</th>
                                        <td>상세페이지 참조</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="widget-content-inner">
                            <div class="tab-reviews write-cancel-review-wrap">
                                <div class="tab-reviews-heading">
                                    <div class="top">
                                        <div class="text-center">
                                            <h1 class="review-score-h1 number fw-4">4.8점</h1>
                                            <div class="list-star">
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                                <i class="icon icon-star"></i>
                                            </div>
                                            <p>(5점 만점)</p>
                                        </div>
                                        <div class="rating-score">
                                            <div class="item">
                                                <div class="number-1 text-caption-1">5</div>
                                                <i class="icon icon-star"></i>
                                                <div class="line-bg">
                                                    <div style="width: 94.67%;"></div>
                                                </div>
                                                <div class="number-2 text-caption-1">59</div>
                                            </div>
                                            <div class="item">
                                                <div class="number-1 text-caption-1">4</div>
                                                <i class="icon icon-star"></i>
                                                <div class="line-bg">
                                                    <div style="width: 60%;"></div>
                                                </div>
                                                <div class="number-2 text-caption-1">46</div>
                                            </div>
                                            <div class="item">
                                                <div class="number-1 text-caption-1">3</div>
                                                <i class="icon icon-star"></i>
                                                <div class="line-bg">
                                                    <div style="width: 0%;"></div>
                                                </div>
                                                <div class="number-2 text-caption-1">0</div>
                                            </div>
                                            <div class="item">
                                                <div class="number-1 text-caption-1">2</div>
                                                <i class="icon icon-star"></i>
                                                <div class="line-bg">
                                                    <div style="width: 0%;"></div>
                                                </div>
                                                <div class="number-2 text-caption-1">0</div>
                                            </div>
                                            <div class="item">
                                                <div class="number-1 text-caption-1">1</div>
                                                <i class="icon icon-star"></i>
                                                <div class="line-bg">
                                                    <div style="width: 0%;"></div>
                                                </div>
                                                <div class="number-2 text-caption-1">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="reply-comment cancel-review-wrap">
                                    <div class="d-flex mb_24 gap-20 align-items-center justify-content-between flex-wrap">
                                        <h5 class="">구매자 리뷰 2개</h5>
                                    </div>
                                    <div class="reply-comment-wrap">
                                        <div class="reply-comment-item">
                                            <div class="user">
                                                <div>
                                                    <h6>
                                                        <a href="#" class="link"><i class="bi bi-person-circle"></i> ljh2****</a>
                                                    </h6>
                                                    <div class="day text_black-2">2025-02-27</div>
                                                </div>
                                            </div>
                                            <div class="reply-comment-img-wrap">
                                                <div style="background-image:url('https://lidot-s3.s3.ap-northeast-2.amazonaws.com/images/2023-03-23%2012%3A19%3A41product_review/20230323121949TFAC7100B%EC%83%81%EC%84%B8%EC%83%B7.jpg')"></div>
                                                <div style="background-image:url('https://lidot-s3.s3.ap-northeast-2.amazonaws.com/images/review/20231004174547TFAC7100B1.jpg')"></div>
                                            </div>
                                            <p class="text_black-2">혼자 자가설치했어요. 설명서 보고 하니깐 별로 어렵지 않네요. 설치해놓으니깐 저희집 욕실과 찰떡이네요!! 너무 맘에 들어요!! 세면수전과 샤워수전도 니켈로 바꾸고 싶어요. 질문이 많았는데 친절한 상담 감사합니다.</p>
                                        </div>
                                        <div class="reply-comment-item type-reply">
                                            <div class="user">
                                                <div class="image">
                                                    <img src="/img/symbol.png" alt="">
                                                </div>
                                                <div>
                                                    <h6>
                                                        <a href="#" class="link">디자인리닷</a>
                                                    </h6>
                                                    <div class="day text_black-2">2025-02-27</div>
                                                </div>
                                            </div>
                                            <p class="text_black-2">고객님 욕실이 환해지셨네요!! 너무 잘 어울립니다. 한달뒤 사용후기 또 남겨주세요!!!</p>
                                        </div>
                                        <div class="reply-comment-item">
                                            <div class="user">
                                                <div>
                                                    <h6>
                                                        <a href="#" class="link"><i class="bi bi-person-circle"></i> abcd****</a>
                                                    </h6>
                                                    <div class="day text_black-2">2025-02-24</div>
                                                </div>
                                            </div>
                                            <div class="reply-comment-img-wrap">
                                                <div style="background-image:url('https://lidot-s3.s3.ap-northeast-2.amazonaws.com/images/2023-04-11%2016%3A14%3A36product_review/20230411161436%EB%8B%A4%EC%9A%B4%EB%A1%9C%EB%93%9C10.jpg')"></div>
                                            </div>
                                            <p class="text_black-2">타공사이즈 구애없이 자가설치했네요. 디자인도 깔끔하고 무엇보다 초록불이 있어서 환풍기가 켜져있는지 확인할수 있어서 좋습니다.잘 쓸께요!!!!</p>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="widget-content-inner">
                            <table class="tf-pr-attrs">
                                <thead>
                                    <tr>
                                        <th style="width:10%;">No.</th>
                                        <th style="width:90%;">문의내용</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td>오늘 주문하면 상품 받기까지 얼마나 걸리나요?</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>설치는 어떻게 해야하는지 궁금합니다</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="widget-content-inner">
                            <div class="tf-page-privacy-policy"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /accordion -->
<!-- product -->
<section class="flat-spacing-1 pt_0">
    <div class="container">
        <div class="flat-title">
            <span class="title">이런 상품들은 어떠세요?</span>
        </div>
        <div class="hover-sw-nav hover-sw-2">
            <div dir="ltr" class="swiper tf-sw-product-relate wrap-sw-over" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="15" data-pagination="2" data-pagination-md="3" data-pagination-lg="3">
                <div id="product-relate-wrap" class="swiper-wrapper"></div>
            </div>
            <div class="nav-sw nav-next-slider nav-next-product box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
            <div class="nav-sw nav-prev-slider nav-prev-product box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
        </div>
    </div>
</section>
<!-- /product -->



<script>

    var seq = '<? echo $_GET["seq"]; ?>';
    if(!seq) wrongPage();
    var preview = '<? echo $_GET["preview"]; ?>';
    let sc2 = 0;

    $(function() {
        console.log('ㅡ PAGE READY');

        if(preview == 'Y') $('.preview').removeClass('d-none');

        dataLoad();

        $('#product-swiper2').on('click', 'a', function(e) {
            e.preventDefault(); // 기본 동작(팝업)을 막기
        });
    });

    function dataLoad(){
        ajaxCall('/product/list', { ppp: 1, page:1, seq}, function(data) {
            let v = data.rows[0];
            console.log(v);
            setBreadcrumb(v.category);

            let text = cfLoad('name', '상품상세');
            
            $('.tf-page-privacy-policy').html(text[0].value);

            if(v.mp4){
                let mp4Array = JSON.parse(v.mp4);
                if(mp4Array.length > 0){
                    let str = `
                        <div class="swiper-slide stagger-item">
                            <div class="item">
                                <video autoplay muted loop>
                                    <source src="${mp4Array[0]}" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    `;
                    $('#product-swiper1').append(str);
                    let str2 = `
                        <div class="swiper-slide">
                            <a href="#" target="_blank" class="item">
                                <video autoplay muted loop>
                                    <source src="${mp4Array[0]}" type="video/mp4">
                                </video>
                            </a>
                        </div>
                    `;
                    $('#product-swiper2').append(str2);
                }
            }

            setProductSlider(v.img);

            $('#product-detail-info').html(makeProductInfoStr(v, 'detail'));

            let brand_img_top = v.brand_img_top;
            if(brand_img_top){
                brand_img_top = JSON.parse(brand_img_top);
                $.each(brand_img_top, function(ii, vv){
                    $('#product-detail-contents').append(`<img src="${vv.url}" class="mb-5">`);
                });
            }

            $.each(v.category, function(ii, vv){
                let cate_img = vv.img;
                if(cate_img){
                    cate_img = JSON.parse(cate_img);
                    $.each(cate_img, function(iii, vvv){
                        $('#product-detail-contents').append(`<img src="${vvv}" class="mb-5">`);
                    });
                }
            });

            $('#product-detail-contents').append(v.contents);

            const hasSeq40 = v.category.some(item => item.seq === 40);
            if (hasSeq40) {
                console.log('seq 40이 존재합니다.');
            }else{
                console.log('seq 40이 존재하지 않음');
            }
            

            let brand_img_bottom = v.brand_img_bottom;
            if(brand_img_bottom){
                brand_img_bottom = JSON.parse(brand_img_bottom);
                $.each(brand_img_bottom, function(ii, vv){
                    $('#product-detail-contents').append(`<img src="${vv.url}" class="mt-5">`);
                });
            }

            relateLoad();
        });
    }

    function setProductSlider(img){
        let imgArray = JSON.parse(img);
            
        $.each(imgArray, function(ii, vv){
            let str = `
                <div class="swiper-slide stagger-item">
                    <div class="item">
                        <img class="lazyload" data-src="${vv}" src="${vv}" alt="img-product">
                    </div>
                </div>
            `;
            $('#product-swiper1').append(str);
            let str2 = `
                <div class="swiper-slide">
                    <a href="${vv}" target="_blank" class="item">
                        <img class="tf-image-zoom lazyload" data-zoom="${vv}" data-src="${vv}" src="${vv}" alt="">
                    </a>
                </div>
            `;
            $('#product-swiper2').append(str2);
        });
    }

    function setBreadcrumb(v){
        if(v){
            let cateArray = v.reverse();
            let cateStr = ``;
            cateArray.forEach((cate, index) => {
                let isLast = index === cateArray.length - 1; // 마지막 요소인지 확인
                cateStr += `<a href="/z/product/list?c_seq=${cate.seq}" class="text">${cate.name}</a>`;
                if (!isLast) {
                    cateStr += ` <i class="icon icon-arrow-right"></i> `;
                }
            });
            $('#product-detail-breadcrumb').html(cateStr);
        }
    }

    function relateLoad(){
        ajaxCall('/product/list', { 
            ppp: DEFAULT_PPP, page:1, main:'relate'
        }, function(data) {
            console.log('best data : ', data);
            
            $.each(data.rows, function(i, v){
                itemDrawSlide(v, 'product-relate-wrap');
            });
            setSliderRelate();
        });
    }

    //테스트 케이스용
    function testRecommend(c_seq) {
        ajaxCall('/product/list', { 
            ppp: 12,
            page: 1,
            main: 'relate',
            c_seq: c_seq
        }, function(data) {
            console.log('▶ 추천 상품 테스트 결과');
            console.table(data.rows.map(v => ({
                seq: v.seq,
                name: v.name,
                c_seq: v.c_seq,
                best_yn: v.best_yn
            })));
        });
    }

    function itemDrawSlide(v, target){
        let itemStr = `<div class="swiper-slide" lazy="true">`;
        itemStr += makeProductItemStr(v);
        itemStr += `</div>`;
        $(`#${target}`).append(itemStr);
    }

    function setSliderRelate(){

        var preview = $(".tf-sw-product-relate").data("preview");
        var tablet = $(".tf-sw-product-relate").data("tablet");
        var mobile = $(".tf-sw-product-relate").data("mobile");
        var spacingLg = $(".tf-sw-product-relate").data("space-lg");
        var spacingMd = $(".tf-sw-product-relate").data("space-md");
        var swiper = new Swiper(".tf-sw-product-relate", {
            autoplay: {
                delay: 3000, // 3초마다 자동 슬라이드
                disableOnInteraction: false, // 사용자가 슬라이드해도 자동 재생 계속
                pauseOnMouseEnter: true,
            },
            slidesPerView: mobile,
            spaceBetween: spacingMd,
            speed: 1000,
            loop: true, // 무한 슬라이드
            slidesPerGroup: 1,
            navigation: {
                clickable: true,
                nextEl: ".nav-prev-product",
                prevEl: ".nav-next-product",
            },
            breakpoints: {
                768: {
                    slidesPerView: tablet,
                    spaceBetween: spacingLg,
                    slidesPerGroup: 1,
                },
                1150: {
                    slidesPerView: preview,
                    spaceBetween: spacingLg,
                    slidesPerGroup: 1,
                },
            }
        });

    }
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>