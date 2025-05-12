<? include_once $_SERVER["DOCUMENT_ROOT"].'/_header.php'; ?>

<style>

.banner-parallax {
    margin-top: 50px;
    margin-bottom: 50px;
}

.wrap-carousel .sw-dots.sw-pagination-gallery {
    display: flex;
    margin-top: 15px;
}

.swiper-button-next, .swiper-button-prev{
    color: rgba(255,255,255,0.7);
}


.wrap-slider .container{
    text-align: center;
}



@media only screen and (min-width: 1150px) {
    .swiper-button-prev{
        left: 30px;
    }
    .swiper-button-next{
        right: 30px;
    }
}

@media only screen and (max-width: 1149px) {

    .testimonial-item.style-row .image {
        margin-left: 0;
        margin-right: 0;
    }
    .testimonial-item.style-row .image {
        width: 100%;
    }
    .testimonial-item.style-row .image img {
        height: 200px;
    }
}

</style>

<!-- Slider -->
<section class="tf-slideshow slider-effect-fade position-relative">

    <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1" data-centered="false" data-space="0">
        <div class="swiper-wrapper">
            <div class="swiper-slide" lazy="true">
                <div class="wrap-slider">
                    <img class="lazyload" data-src="/img/main-bg2.jpg" src="/img/main-bg2.jpg" alt="swm-slideshow">
                    <div class="box-content">
                        <div class="container">
                            <h1 class="fade-item fade-item-1 text-white heading font-libre-baskerville">감성 인테리어</h1>
                            <p class="fade-item fade-item-2 text-white">리닷이 추천하고 모두가 좋아하는 핫템들<br>인테리어도 이제는 감성을 챙겨보세요</p>
                            <a href="/z/product/list" class="fade-item fade-item-3 tf-btn btn-fill animate-hover-btn rounded-0"><span>보러가기</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" lazy="true">
                <div class="wrap-slider">
                    <img class="lazyload" data-src="/img/main-bg1.jpg" src="/img/main-bg1.jpg" alt="swm-slideshow">
                    <div class="box-content">
                        <div class="container">
                            <h1 class="fade-item fade-item-1 text-white heading font-libre-baskerville">북유럽 기획전</h1>
                            <p class="fade-item fade-item-2 text-white">품격과 가심비를 다 잡은 화제의 아이템<br>직접 써보면 깜짝 놀라실거에요</p>
                            <a href="/z/product/list" class="fade-item fade-item-3 tf-btn btn-fill animate-hover-btn rounded-0"><span>보러가기</span></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="wrap-pagination pos2">
        <div class="container">
            <!-- <div class="sw-dots sw-pagination-slider rectangle-pagination rectangle-white justify-content-center"></div> -->
            <div class="sw-dots line-white-pagination sw-pagination-slider justify-content-center swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"></div>
        </div>
    </div>

</section>
<!-- /Slider -->



<!-- 베스트 -->
<section class="flat-spacing-12">
    <div class="container">
        <div class="flat-title wow fadeInUp" data-wow-delay="0s">
            <span class="title">BEST SELLER</span>
            <div class="d-flex gap-16 align-items-center">
                <div class="nav-sw-arrow nav-next-slider nav-next-product"><span class="icon icon-arrow1-left"></span></div>
                <a href="/z/product/list?target=best" class="tf-btn btn-line fs-12 fw-6">전체보기</a>
                <div class="nav-sw-arrow nav-prev-slider nav-prev-product"><span class="icon icon-arrow1-right"></span></div>
            </div>
        </div>
        <div class="hover-sw-nav hover-sw-2">
            <div dir="ltr" class="swiper tf-sw-product-sell wrap-sw-over" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="15" data-pagination="2" data-pagination-md="3" data-pagination-lg="3">
                <div id="main-best-wrap" class="swiper-wrapper"></div>
            </div>
            <div class="nav-sw nav-next-slider nav-next-product box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
            <div class="nav-sw nav-prev-slider nav-prev-product box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
        </div>
    </div>
</section>
<!-- /베스트 -->



<!-- 브랜드 -->
<section class="flat-spacing-4">
    <div class="container-full">
        <div class="masonry-layout style-2  wow fadeInUp" data-wow-delay="0s">
            <div class="item-1 collection-item large hover-img">
                <div class="collection-inner">
                    <a href="/z/product/list?sk=힘펠" class="collection-image img-style rounded-0">
                        <img class="lazyload" data-src="/img/brand1.jpg" src="/img/brand1.jpg" alt="collection-img">
                    </a>
                    <div class="collection-content">
                        <a href="/z/product/list?sk=힘펠" class="tf-btn collection-title hover-icon rounded-0 text-14"><span>힘펠</span><i class="icon icon-arrow1-top-left"></i></a>
                    </div>
                </div>
            </div>
            <div class="item-2 collection-item large hover-img">
                <div class="collection-inner">
                    <a href="/z/product/list?sk=폰타나" class="collection-image img-style rounded-0">
                        <img class="lazyload" data-src="/img/brand2.jpg" src="/img/brand2.jpg" alt="collection-img">
                    </a>
                    <div class="collection-content">
                        <a href="/z/product/list?sk=폰타나" class="tf-btn collection-title hover-icon rounded-0 text-14"><span>폰타나</span><i class="icon icon-arrow1-top-left"></i></a>
                    </div>
                </div>
            </div>
            <div class="item-3 collection-item large hover-img">
                <div class="collection-inner">
                    <a href="/z/product/list?sk=아이녹스" class="collection-image img-style rounded-0">
                        <img class="lazyload" data-src="/img/brand3.jpg" src="/img/brand3.jpg" alt="collection-img">
                    </a>
                    <div class="collection-content">
                        <a href="/z/product/list?sk=아이녹스" class="tf-btn collection-title hover-icon rounded-0 text-14"><span>아이녹스</span><i class="icon icon-arrow1-top-left"></i></a>
                    </div>
                </div>
            </div>
            <div class="item-4 collection-item large hover-img">
                <div class="collection-inner">
                    <a href="/z/product/list?sk=JCL" class="collection-image img-style rounded-0">
                        <img class="lazyload" data-src="/img/brand4.jpg" src="/img/brand4.jpg" alt="collection-img">
                    </a>
                    <div class="collection-content">
                        <a href="/z/product/list?sk=JCL" class="tf-btn collection-title hover-icon rounded-0 text-14"><span>JCL Industry</span><i class="icon icon-arrow1-top-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /브랜드 -->



<!-- 신상품 -->
<section class="flat-spacing-4">
    <div class="container">
        <div class="flat-title mb_1 gap-14">
            <span class="title wow fadeInUp" data-wow-delay="0s">NEW ARRIVALS</span>
            <p class="sub-title wow fadeInUp" data-wow-delay="0s">요즘 핫한 디자인리닷의 신상품 라인업을 확인해보세요!</p>
        </div>
        <div id="main-new-wrap" class="grid-layout" data-grid="grid-4"></div>
    </div>
</section>
<!-- /신상품 -->




<!-- 프로젝트 -->
<section id="main-project-wrap" class="banner-hero-collection-wrap banner-parallax"></section>
<!-- /프로젝트 -->


<!-- 카테고리목록 -->
<section class="flat-spacing-4">
    <div class="container">
        <div class="flat-title flex-row justify-content-between px-0">
            <span class="title wow fadeInUp" data-wow-delay="0s">CATEGORIES</span>
            <div class="box-sw-navigation">
                <div class="nav-sw nav-next-slider nav-next-collection"><span
                        class="icon icon-arrow-left"></span></div>
                <div class="nav-sw nav-prev-slider nav-prev-collection"><span
                        class="icon icon-arrow-right"></span></div>
            </div>
        </div>
        <div dir="ltr" class="swiper tf-sw-collection sw-wrapper-right" data-preview="4.5" data-tablet="2.4"
            data-mobile="2.4" data-space-lg="30" data-space-md="30" data-space="15" data-loop="false"
            data-auto-play="false">
            <div class="swiper-wrapper">
                <div class="swiper-slide" lazy="true">
                    <div class="collection-item-v3 hover-img">
                        <a href="/z/product/list?sc=1" class="collection-image img-style">
                            <img class="lazyload" data-src="/img/cate1.jpg" alt="collection-img">
                            <span class="box-icon">
                                <i class="icon-icon icon-arrow1-top-left"></i>
                            </span>
                        </a>
                        <div class="collection-content">
                            <a href="/z/product/list?sc=1" class="link title fw-5">KITCHEN</a>
                            <div class="count">14 items </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" lazy="true">
                    <div class="collection-item-v3 hover-img">
                        <a href="/z/product/list?sc=2" class="collection-image img-style">
                            <img class="lazyload" data-src="/img/cate2.jpg" alt="collection-img">
                            <span class="box-icon">
                                <i class="icon-icon icon-arrow1-top-left"></i>
                            </span>
                        </a>
                        <div class="collection-content">
                            <a href="/z/product/list?sc=2" class="link title fw-5">BATH</a>
                            <div class="count">23 items </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" lazy="true">
                    <div class="collection-item-v3 hover-img">
                        <a href="/z/product/list?sc=5" class="collection-image img-style">
                            <img class="lazyload" data-src="/img/cate4.jpg" alt="collection-img">
                            <span class="box-icon">
                                <i class="icon-icon icon-arrow1-top-left"></i>
                            </span>
                        </a>
                        <div class="collection-content">
                            <a href="/z/product/list?sc=5" class="link title fw-5">도기</a>
                            <div class="count">21 items </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" lazy="true">
                    <div class="collection-item-v3 hover-img">
                        <a href="/z/product/list?sc=6" class="collection-image img-style">
                            <img class="lazyload" data-src="/img/cate5.jpg" alt="collection-img">
                            <span class="box-icon">
                                <i class="icon-icon icon-arrow1-top-left"></i>
                            </span>
                        </a>
                        <div class="collection-content">
                            <a href="/z/product/list?sc=6" class="link title fw-5">수납용품</a>
                            <div class="count">31 items </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" lazy="true">
                    <div class="collection-item-v3 hover-img">
                        <a href="/z/product/list?sc=20" class="collection-image img-style">
                            <img class="lazyload" data-src="/img/cate6.jpg" alt="collection-img">
                            <span class="box-icon">
                                <i class="icon-icon icon-arrow1-top-left"></i>
                            </span>
                        </a>
                        <div class="collection-content">
                            <a href="/z/product/list?sc=20" class="link title fw-5">주방쓰리홀수전</a>
                            <div class="count">14 items </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /카테고리목록 -->



<!-- 해시태그 -->
<section class="flat-spacing-4">
    <div class="container">
        <div class="flat-title mb_1 gap-14">
            <span class="title wow fadeInUp" data-wow-delay="0s">WEEKLY HASHTAG</span>
            <p class="sub-title wow fadeInUp" data-wow-delay="0s">이번주 인기태그를 확인해보세요!</p>
        </div>
        <div id="main-weekly-wrap" class="grid-layout" data-grid="grid-4"></div>
    </div>
</section>
<!-- /해시태그 -->



<!-- Testimonial -->
<section class="flat-spacing-4">
    <div class="container">
        <div class="flat-title wow fadeInUp" data-wow-delay="0s">
            <span class="title">BEST REVIEW</span>
            <p class="sub-title">후기로 증명된 제품, 이제 믿고 구매하세요!</p>
        </div>
        <div class="wrap-carousel">
            <div dir="ltr" class="swiper tf-sw-testimonial" data-preview="4" data-tablet="3" data-mobile="1" data-space-lg="30" data-space-md="15">
                <div id="main-review-wrap" class="swiper-wrapper"></div>
            </div>
            <div class="nav-sw nav-next-slider nav-next-testimonial box-icon w_46 round"><span class="icon icon-arrow-left"></span></div>
            <div class="nav-sw nav-prev-slider nav-prev-testimonial box-icon w_46 round"><span class="icon icon-arrow-right"></span></div>
        </div>
    </div>
</section>
<!-- /Testimonial -->





<!-- Shop Gram -->
<section class="flat-spacing-4">
    <div class="container">
        <div class="flat-title wow fadeInUp" data-wow-delay="0s">
            <span class="title">SNS GALLERY</span>
            <p class="sub-title">@design_lidot</p>
        </div>
        <div class="wrap-carousel wrap-shop-gram">
            <div dir="ltr" class="swiper tf-sw-shop-gallery" data-preview="5" data-tablet="3" data-mobile="2" data-space-lg="7" data-space-md="7">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="javascript:under()">
                        <div class="gallery-item hover-img wow fadeInUp" data-wow-delay="0s">
                            <div class="img-style">
                                <img class="lazyload img-hover" data-src="/img/sns1.jpg" src="/img/sns1.jpg" alt="image-gallery">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="javascript:under()">
                        <div class="gallery-item hover-img wow fadeInUp" data-wow-delay="0s">
                            <div class="img-style">
                                <img class="lazyload img-hover" data-src="/img/sns2.jpg" src="/img/sns2.jpg" alt="image-gallery">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="javascript:under()">
                        <div class="gallery-item hover-img wow fadeInUp" data-wow-delay="0s">
                            <div class="img-style">
                                <img class="lazyload img-hover" data-src="/img/sns3.jpg" src="/img/sns3.jpg" alt="image-gallery">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="javascript:under()">
                        <div class="gallery-item hover-img wow fadeInUp" data-wow-delay="0s">
                            <div class="img-style">
                                <img class="lazyload img-hover" data-src="/img/sns4.jpg" src="/img/sns4.jpg" alt="image-gallery">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="javascript:under()">
                        <div class="gallery-item hover-img wow fadeInUp" data-wow-delay="0s">
                            <div class="img-style">
                                <img class="lazyload img-hover" data-src="/img/sns5.jpg" src="/img/sns5.jpg" alt="image-gallery">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="javascript:under()">
                        <div class="gallery-item hover-img wow fadeInUp" data-wow-delay="0s">
                            <div class="img-style">
                                <img class="lazyload img-hover" data-src="/img/sns6.jpg" src="/img/sns6.jpg" alt="image-gallery">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            </div>
            <div class="sw-dots sw-pagination-gallery justify-content-center"></div>
        </div>
    </div>
</section>
<!-- /Shop Gram -->



<script type="text/javascript" src="index.js"></script>
<script type="text/javascript">
    $(function() {
        console.log('ㅡ PAGE READY');
        
        productBestLoad();
        productNewLoad();
        projectLoad();
        productWeeklyLoad();
        reviewBestLoad();

        setSlider();
    });

    function reviewBestLoad(){
        ajaxCall('/review/list', { 
            ppp: 99, page:1, best:'Y'
        }, function(data) {
            
            $.each(data.rows, function(i, v){
                reviewDraw(v);
            });
        });
    }

    function reviewDraw(v){

        let cleanText = v.contents.replace(/<[^>]*>/g, '');
        if(cleanText.length > 45){
            cleanText = cleanText.substr(0, 45) + '···';
        }

        let imgArray = JSON.parse(v.img);
        let productImgArray = JSON.parse(v.product_img);

        let product_name = v.product_name;
        if(product_name.length > 33){
            product_name = product_name.substr(0, 33) + '···';
        }

        let product_url = `/z/product/detail?seq=${v.product_seq}`;

        let itemStr = `
            <div class="swiper-slide">
                <div class="testimonial-item style-column wow fadeInUp" data-wow-delay="0s">
                    <div class="main-review-img" style="background-image:url('${imgArray[0]}')"></div>
                    <div class="rating">
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                    </div>
                    <div class="text">
                        ${cleanText}
                    </div>
                    <div class="author">
                        <div class="name"><i class="bi bi-person-circle"></i> ${v.login_id}</div>
                        <div class="metas">${v.idt.substr(0, 10)}</div>
                    </div>
                    <div class="product">
                        <div class="image">
                            <a href="${product_url}">
                                <img class="lazyload" data-src="${productImgArray[0]}" src="${productImgArray[0]}" alt="">
                            </a>
                        </div>
                        <div class="content-wrap">
                            <div class="product-title">
                                <a href="${product_url}">${product_name}</a>
                            </div>
                        </div>
                        <a href="${product_url}" class=""><i class="icon-arrow1-top-left"></i></a>
                    </div>
                </div>
            </div>
        `;
        $('#main-review-wrap').append(itemStr);
    }

    function projectLoad(){
        let v = getSeq('project', 1);
        let str = `
            <div class="box-content">
                <div class="container">
                    <a href="javascript:under()" class="card-box text-md-start text-center rounded-0">
                        <p class="subheading">LIDOT'S PROJECT</p>
                        <h3 class="heading">${v.title}</h3>
                        <p class="text">${v.oneline}</p>
                        <div class="wow fadeInUp" data-wow-delay="0s">
                            <button class="tf-btn style-2 btn-fill animate-hover-btn"><span>프로젝트 보기</span></button>
                        </div>
                    </a>
                </div>
            </div>
        `;
        $('#main-project-wrap').css('background-image', `url('${v.img}')`);
        $('#main-project-wrap').html(str);
    }

    function productWeeklyLoad(){
        ajaxCall('/product/list', { 
            ppp: 8, page:1
        }, function(data) {
            $.each(data.rows, function(i, v){
                $('#main-weekly-wrap').append(makeProductItemStr(v));
            });
        });
    }

    function productNewLoad(){
        ajaxCall('/product/list', { 
            ppp: DEFAULT_PPP, page:1, main:'new'
        }, function(data) {
            $.each(data.rows, function(i, v){
                $('#main-new-wrap').append(makeProductItemStr(v));
            });
        });
    }

    function productBestLoad(){
        ajaxCall('/product/list', { 
            ppp: DEFAULT_PPP, page:1, main:'best'
        }, function(data) {
            $.each(data.rows, function(i, v){
                itemDrawSlide(v, 'main-best-wrap');
            });
        });
    }

    function itemDrawSlide(v, target){
        let itemStr = `<div class="swiper-slide" lazy="true">`;
        itemStr += makeProductItemStr(v);
        itemStr += `</div>`;
        $(`#${target}`).append(itemStr);
    }

    function setSlider(){
        // 슬라이더 셋팅함수들은 /index.js 에 있음
        setSliderMain();
        setSliderBest();
        setSliderCate();
        setSliderSns();
        setSliderReview();
    }
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>