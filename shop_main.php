<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header_back.php'; ?>

<!-- CSS -->
<link rel="stylesheet" href="css/pages/shop_main/shop_main.css">
<style media="screen">
.main-slide-img {
    height: 110vw;
    max-height: 510px;
}

.bgsetting {
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
}

.productWrap-titleWrap {
    border-bottom: 1px solid #dee2e6;
}

.productWrap,
.productWrap-btnWrap,
.productWrap-titleWrap,
.productWrap-img {
    transition: 0.3s;
}

.productWrap-img {
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: 100% !important;
}

.hashtag-img {
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: 100% !important;
    padding-bottom: 70%;
    width: 100%;
}

.hashtag-img:after {
    display: block;
    clear: both;
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    background: rgba(255, 255, 255, 0.5);
    width: 100%;
    height: 100%;
}

.hashtag-col span {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 20px;
    font-weight: bold;
}

.hashtag-col span:hover {
    text-decoration: underline;
}

.productWrap:hover .productWrap-btnWrap {
    opacity: 1;
}

.productWrap:hover .productWrap-titleWrap {
    border-bottom: 1px solid #555;
}

/* .productWrap:hover .productWrap-img{
        background-size: 107% !important;
    } */
.hoverimage {
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
    opacity: 0;
}

.productWrap:hover .hoverimage {
    transition: 0.3s;
    opacity: 1;
}


.productWrap-btnWrap {
    opacity: 0;
}

.disprice {
    text-decoration: line-through;
    color: #999 !important;
}

.slick-prev {
    z-index: 999;
    left: 30px;
}

.slick-next {
    right: 50px;
}

/* .slick-prev:before, .slick-next:before {
        font-size: 40px;
    } */
.slick-dots {
    bottom: 10px;
}

#slide-arw-wrap {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 99;
}

.main-slide-prev,
.main-slide-next {
    position: absolute;
    cursor: pointer;
    opacity: 0.7;
    transition: all 0.2s;
}

.main-slide-prev {
    left: 0;
}

.main-slide-next {
    right: 0;
}

.main-slide-prev:hover,
.main-slide-next:hover {
    opacity: 1;
}

@media (max-width:950px) {
    .banner-wrap2-order {
        order: 2;
    }
}
</style>
<script type="text/javascript" src="https://static.nid.naver.com/js/naverLogin_implicit-1.0.3.js" charset="utf-8">
</script>

<!-- Welcome Slides Area -->
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
<section class="welcome_area overflow-hidden position-relative">
    <div class="" id="main-top-slide">
        <!-- Single Slide -->
        <!-- <div class="single_slide bg-img bg-overlay" style="background-image: url(img/bg-img/1.jpg);">
                <div class="h-100 banner_bg">
                    <div class="d-flex h-100 align-items-center">
                        <div class="col-12 main_b_img" style="background-image: url(img/page/test_img/testbanner_img1.jpg);"></div>
                    </div>
                </div>
            </div>

            <div class="single_slide bg-img bg-overlay" style="background-image: url(img/bg-img/1.jpg);">
                <div class="h-100 banner_bg">
                    <div class="d-flex h-100 align-items-center">
                        <div class="col-12 main_b_img" style="background-image: url(img/page/test_img/testbanner_img2.jpg);"></div>
                    </div>
                </div>
            </div> -->

        <!-- <div class="">
                <div class="main-slide-img" style="background-image: url(img/page/test_img/testbanner_img2.jpg);"></div>
            </div>
            <div class="">
                <div class="main-slide-img" style="background-image: url(img/page/test_img/testbanner_img2.jpg);"></div>
            </div> -->
    </div>
    <div class="container w-100" id="slide-arw-wrap">
        <div class="main-slide-prev">
            <img src="/img/banner/dashicons_arrow-right-alt2.png" alt="" style="width:30px;">
        </div>
        <div class="main-slide-next">
            <img src="/img/banner/dashicons_arrow-left-alt2.png" alt="" style="width:30px;">
        </div>
    </div>
</section>
<!-- Welcome Slides Area -->

<!-- Catagories Area -->
<section class="catagories_area home-3">
    <div class="container">



    </div>
</section>
<!-- Catagories Area -->



<!-- Popular Items Area -->
<div class="popular_items_area home-3 section_padding_0_70 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="popular_section_heading mb-50 text-center">
                    <h5>BEST PRODUCT</h5>
                    <p>리닷에서 선정한 인기상품들을 만나보세요!</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="best_product_wrap row">
                    <!-- popular_items_slides owl-carousel -->
                    <!-- <div class="single_popular_item">
                            <div class="product_image">
                                <img class="first_img" src="img/product-img/popular-1.jpg" alt="">
                                <img class="hover_img" src="img/product-img/popular-1-back.jpg" alt="">
                                <div class="product_badge badge_red">
                                    <span class="badge-offer ">세일</span>
                                </div>
                                <div class="product_wishlist">
                                    <a href="wishlist.php" target="_blank"><i class="fas fa-heart"></i></a>
                                </div>
                                <div class="product_add_to_cart">
                                    <a href="#"><i class="fas fa-shopping-cart"></i> 장바구니 담기</a>
                                </div>
                            </div>
                            <div class="product_description">
                                <h5><a href="#">상품1</a></h5>
                                <h6>1,000원 <span>2,000원</span></h6>
                            </div>
                        </div> -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Popular Items Area -->


<!-- New Arrivals Area -->
<div class="new_arrival home-3" style="padding-bottom:70px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="popular_section_heading mb-50 text-center">
                    <h5>New Arrivals</h5>
                    <p>새로 출시된 상품들을 만나보세요!</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-start new_product">
            <!-- <div class="col-9 col-sm-6 col-md-4 col-lg-3">
                    <div class="single_popular_item">
                        <div class="product_image">
                            <img class="first_img" src="img/product-img/new-arrivals-1.jpg" alt="">
                            <img class="hover_img" src="img/product-img/new-arrivals-1-back.jpg" alt="">
                            <div class="product_badge badge_brown">
                                <span>신규</span>
                            </div>
                            <div class="product_wishlist">
                                <a href="wishlist.php" target="_blank"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="product_add_to_cart">
                                <a href="#"><i class="fas fa-shopping-cart"></i> 장바구니 담기</a>
                            </div>
                        </div>
                        <div class="product_description">
                            <h5><a href="#">상품명1</a></h5>
                            <h6>2,000원 <span>3,000원</span></h6>
                        </div>
                    </div>
                </div> -->
        </div>
    </div>
</div>
<!-- New Arrivals Area -->

<!-- hashtag Area -->
<div class="new_arrival home-3" style="padding-bottom:70px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="popular_section_heading mb-50 text-center">
                    <h5>인기 키워드</h5>
                    <p>인기 키워드로 검색해보세요!</p>
                </div>
            </div>
        </div>

        <div class="row" id="hashtag-wrap">

        </div>
    </div>
</div>
<!-- hashtag Area -->

<!-- best review Area -->
<div class="new_arrival home-3" style="padding-bottom:70px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="popular_section_heading mb-50 text-center">
                    <h5>BEST REVIEW</h5>
                    <p>리닷에서 선정한 리뷰들을 만나보세요!</p>
                </div>
            </div>
        </div>

        <div id="bestReview-wrap">
            <div class="bestReview-wrapper">

            </div>

            <link rel="stylesheet" type="text/css"
                href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js">
            </script>

            <!-- <div class="col-9 col-sm-6 col-md-4 col-lg-3">
                    <div class="single_popular_item">
                        <div class="product_image">
                            <img class="first_img" src="img/product-img/new-arrivals-1.jpg" alt="">
                            <img class="hover_img" src="img/product-img/new-arrivals-1-back.jpg" alt="">
                            <div class="product_badge badge_brown">
                                <span>신규</span>
                            </div>
                            <div class="product_wishlist">
                                <a href="wishlist.php" target="_blank"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="product_add_to_cart">
                                <a href="#"><i class="fas fa-shopping-cart"></i> 장바구니 담기</a>
                            </div>
                        </div>
                        <div class="product_description">
                            <h5><a href="#">상품명1</a></h5>
                            <h6>2,000원 <span>3,000원</span></h6>
                        </div>
                    </div>
                </div> -->
        </div>
    </div>
</div>
<!-- best review Area -->

<!-- Special Featured Area -->
<section class="special_feature_area pt-5">
    <div class="container">
        <div class="row">
            <!-- Single Feature Area -->
            <div class="col-12 mb-2">
                <h5>리닷 안내</h5>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single_feature_area mb-5 d-flex align-items-center">
                    <div class="feature_icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <div class="feature_content">
                        <h6>무료 배송</h6>
                    </div>
                </div>
            </div>

            <!-- Single Feature Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single_feature_area mb-5 d-flex align-items-center">
                    <div class="feature_icon">
                        <i class="fas fa-box"></i>
                    </div>
                    <div class="feature_content">
                        <h6>환불</h6>
                        <p>7일이내 환불</p>
                    </div>
                </div>
            </div>

            <!-- Single Feature Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single_feature_area mb-5 d-flex align-items-center">
                    <div class="feature_icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <div class="feature_content">
                        <h6>100% 환불</h6>
                        <p>※상품 파손시 불가</p>
                    </div>
                </div>
            </div>

            <!-- Single Feature Area -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single_feature_area mb-5 d-flex align-items-center">
                    <div class="feature_icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="feature_content">
                        <h6>상담 지원</h6>
                        <p>연중무휴 상담지원</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Special Featured Area -->

<script src="/js/pages/shop_main/shop_main.js"></script>
<script src="/js/pages/shop_main/shop_main_bestreview.js"></script>
<script src="/js/pages/shop_main/shop_main_banner.js"></script>
<script src="/js/pages/shop_main/shop_main_hashtag.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    location.href = 'https://lidot.co.kr/'
})
</script>


<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>