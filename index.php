<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>
<link href="/css/index.css" rel="stylesheet">
<link rel="stylesheet" href="css/pages/shop_main/shop_main.css">
<link rel="stylesheet" href="css/review.css">
<style media="screen">
.grid-wrap img {
    margin-right: 5px;
    cursor: pointer;
}

.grid-wrap img.divider {
    cursor: auto;
}

.bottom_100 {
    bottom: 100px;
}
</style>


<style>
.bg-option {
    background-size: cover !important;
    background-repeat: no-repeat !important;
    background-position: center !important;
}

.review-title-wrap {
    font-family: NEXON Lv2 Gothic;
    font-size: 18px;
    font-weight: 700;
    line-height: 28px;
    letter-spacing: 0em;
    color: #000000;
    text-align: left;
}

.review-uid-date {
    font-size: 12px;
    font-weight: 400;
    line-height: 14px;
    letter-spacing: 0em;
    text-align: left;
    color: #999999;
}

.product-image-style {
    width: 45px;
    height: 45px;
    border: 1px solid #D9D9D9;
}

.product-title-wrap {
    font-size: 12px;
    font-weight: 400;
    line-height: 14px;
    letter-spacing: 0em;
    text-align: left;
    color: #000000;
}

.background-info {
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
}

.review-star-img {
    font-size: 15px;
}

div.review-contents {
    height: 42px;
    overflow: hidden;
    vertical-align: top;
    text-overflow: ellipsis;
    word-break: break-all;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3;
    text-align: left;
}

.review-border-wrap {
    cursor: pointer;
    border: 1px solid #D9D9D9;
}

.view_ab.active .border-top.first {
    border: 0 !important;
}

.view_ab.active .product-title-wrap,
.view_ab.active .review-title-wrap,
.view_ab.active .review-contents p,
.view_ab.active .review-contents span,
.view_ab.active .review-uid-date {
    color: #fff !important;
}

.productWrap-titleWrap {
    height: 18px;
}

.productWrap-border_bottom {
    border-bottom: 1px solid #dee2e6;

}

.productWrap,
.productWrap-btnWrap,
.productWrap-titleWrap,
.productWrap-img {
    transition: 0.3s;
}

.productWrap-titleWrap {
    height: 18px;
}

.productWrap-border_bottom {
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

.productWrap:hover .productWrap-btnWrap {
    opacity: 1;
}

/* .productWrap:hover .productWrap-border_bottom {
    border-bottom: 1px solid #555;
} */

.productWrap-btnWrap {
    opacity: 0;
}


#exhibition-banner {
    /* background-position: center !important;
        background-repeat: no-repeat !important;
        background-size: cover !important; */
    /* padding-bottom: 100%; */
    text-align: center;
}


.df-prl-viewtype-btn {
    display: inline-block;
    text-align: center;
    position: relative;
    font-size: 0;
    line-height: 0;
    letter-spacing: -4px;
}

.df-prl-viewtype-btn .selected {
    cursor: default;
}

.df-prl-viewtype-btn .selected>span {
    background: #606060;
}

.df-prl-viewtype-btn>div {
    display: inline-block;
    width: 29px;
    height: 29px;
    letter-spacing: 0px;
    box-sizing: border-box;
    background: #fff;
    cursor: pointer;
}

.df-prl-viewtype-btn-grid_3>span {
    float: left;
    width: 5px;
    height: 5px;
    margin-left: 2px;
    margin-top: 2px;
}

.df-prl-viewtype-btn>div>span {
    display: block;
    background: #c1c1c1;
}

.df-prl-viewtype-btn-grid_3 {
    padding: 3px;
}

.df-prl-viewtype-btn-grid_4>span {
    float: left;
    width: 4px;
    height: 4px;
    margin-left: 1px;
    margin-top: 1px;
}

.df-prl-viewtype-btn-grid_4 {
    padding: 4px;
}

.onetext {
    font-size: 12px;
    color: #666;
    text-align: left;
}

.twoline {
    width: 100%;
    text-overflow: ellipsis;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}

.disprice {
    text-decoration: line-through;
    color: #999;
}

select {
    outline: none;
}

.off_down {
    background: #c4c4c4;
    color: #fff;
    font-size: 35px;
    text-align: center;
    padding: 20px 0px;
    cursor: pointer;
}

.all_coubon_btn {
    background: #333;
    color: #fff;
    font-size: 35px;
    text-align: center;
    padding: 20px 0px;
    cursor: pointer;
}

.com_check_div {
    position: absolute;
    bottom: 137px;
    right: 0px;
}

@media (max-width:768px) {
    .df-prl-viewtype-btn {
        display: none;
    }

    .com_check_div {
        position: absolute;
        top: 0px;
        right: 0px;
    }

    .mobile_mt {
        margin-top: 60px !important;
    }

    .productWrap-titleWrap {
        height: 47px !important;
        font-size: 13px;
        -webkit-line-clamp: 2;
    }

    .off_down {
        background: #c4c4c4;
        color: #fff;
        font-size: 17px;
        text-align: center;
        padding: 9px 0px;
        cursor: pointer;
    }

    .all_coubon_btn {
        background: #333;
        color: #fff;
        text-align: center;
        padding: 9px 0px;
        cursor: pointer;
    }

    .sq {
        width: 100%;
        /* padding-bottom: 55%; */
    }

    .modal-dialog {
        width: 80%;
    }
}

@media (min-width:768px) {
    .productWrap:hover .productWrap-img {
        background-size: 107% !important;
    }
}

.coupon_box {
    width: 500px;
    margin: 90px auto;
}



@media (max-width:780px) {
    .coupon_box {
        width: 100%;
    }

    .all_coubon_btn {
        font-size: 15px;
    }

    .productWrap-titleWrap {
        height: auto !important;
    }
}

.hoverimage {
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
    /* opacity: 0; */
}

.productWrap:hover .hoverimage {
    transition: 0.5s;
    transform: scale(1.1);
    /* opacity: 1; */
}

.grid-wrap img {
    margin-right: 5px;
    cursor: pointer;
}

.grid-wrap img.divider {
    cursor: auto;
}

.view_ab.active {
    position: absolute;
    bottom: 0;
    width: 100%;
    opacity: 0;
    color: #fff;
}

.view_ab.active .fa-solid {
    color: #fff;
}

.view_ab.active .onetext {
    color: #fff;
}

.view_ab.active.op {
    opacity: 1;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, #000000 120%);
}

input[type="checkbox"] {
    margin-top: -1px;
    width: 25px;
    height: 25px;
    border: 0;
    cursor: pointer;
    border-radius: 50%;
    background: url('/img/checks_off.png') no-repeat 0 0;
    background-size: 100% 100%;
    -webkit-appearance: none;
    -moz-appearance: none;
    image-rendering: -webkit-optimize-contrast;
}

input[type="checkbox"]:checked {
    background-image: url('/img/checks_on.png');
    -webkit-appearance: none;
    -moz-appearance: none;
}

.comp_btnb {
    color: #555;
    background: #fff;
    border: 1px solid #dfdfdf;
    padding: 0 10px;
    font-size: 12px;
    height: 30px;
    line-height: 28px;
    margin-left: 1px;
}

.col-md-2_4 {
    -ms-flex: 0 0 20%;
    flex: 0 0 20%;
    max-width: 20%;
}

.best_star {
    opacity: 1 !important;
    color: #ddd;
}

.best_star.active {
    color: #FF972C;
}
</style>

<div class="mainbanner_slide">
    <div class="bg-white w-100" style="height:100vh;"></div>
</div>

<div class="mainbanner_slide_m mb-4">
    <div class="bg-white w-100" style="height:100vh"></div>
</div>

<section id="section6" class="pb-0">
    <!-- <div class="container">
        <img class="w-100" src="/img/landingpage/main_banner.png" alt="">
    </div> -->
    <div class="container">
        <div class="" id="main-top-slide3">
        </div>
    </div>

</section>

<section id="section4">
    <div class="container text-center">
        <div class="popular_section_heading text-center">
            <h5>BRAND</h5>
            <p class="sub_title mb-3"># 국내외 유명한 검증된 브랜드를 소개합니다.</p>
        </div>

        <!-- 그리드 아이콘 HTML 부분 시작 -->
        <div id="grid-brand" class="pc-none grid-wrap" data-type="brand">
            <img class="grid-btn grid grid2 normal" data-grid="grid2" src="/img/grid/grid2.png">
            <img class="grid-btn grid grid2 select d-none" data-grid="grid2" src="/img/grid/grid2s.png">
            <img class="grid-btn grid grid3 normal d-none" data-grid="grid3" src="/img/grid/grid3.png">
            <img class="grid-btn grid grid3 select" data-grid="grid3" src="/img/grid/grid3s.png">
            <img class="grid-btn grid grid4 normal" data-grid="grid4" src="/img/grid/grid4.png">
            <img class="grid-btn grid grid4 select d-none" data-grid="grid4" src="/img/grid/grid4s.png">
        </div>
        <!-- 그리드 아이콘 HTML 부분 끝 -->


        <div class="position-relative pt-2">
            <div class="shopslick text-left mt-md-5 mt-0"></div>
        </div>

        <div class="position-relative marginTop d-none">
            <div class="shopslick2 text-left mt-5"></div>
            <span id="slick-prev2" class="slickarrow slickarrow2"><i class="fas fa-chevron-left"></i></span>
            <span id="slick-next2" class="slickarrow slickarrow2"><i class="fas fa-chevron-right"></i></span>
        </div>
    </div>
</section>

<section class="welcome_area overflow-hidden position-relative container pt-0">
    <div class="" id="main-top-slide">
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


<section class="pt-0 pb-0">
    <div class="container text-center">
        <div class="popular_section_heading text-center">
            <h5>BEST PRODUCT</h5>
            <p class="sub_title mb-0"># 리닷에서 이번주에 제일 잘 나간</p>
            <p class="sub_title mb-3 mt-0">인기상품을 만나보세요!</p>
        </div>

        <!-- 그리드 아이콘 HTML 부분 시작 -->
        <div id="grid-product" class="pc-none grid-wrap" data-type="product">
            <img class="grid-btn toggle normal" data-grid="toggle" src="/img/grid/toggle.png">
            <img class="grid-btn toggle select d-none" data-grid="toggle" src="/img/grid/toggles.png">
            <img class="divider" src="/img/grid/divider.png">
            <img class="grid-btn grid grid2 normal" data-grid="grid2" src="/img/grid/grid2.png">
            <img class="grid-btn grid grid2 select d-none" data-grid="grid2" src="/img/grid/grid2s.png">
            <img class="grid-btn grid grid3 normal d-none" data-grid="grid3" src="/img/grid/grid3.png">
            <img class="grid-btn grid grid3 select" data-grid="grid3" src="/img/grid/grid3s.png">
            <img class="grid-btn grid grid4 normal" data-grid="grid4" src="/img/grid/grid4.png">
            <img class="grid-btn grid grid4 select d-none" data-grid="grid4" src="/img/grid/grid4s.png">
        </div>
        <!-- 그리드 아이콘 HTML 부분 끝 -->


        <div class="best_product_wrap row mt-3 px-3 px-md-0"></div>
    </div>
</section>


<section class="welcome_area overflow-hidden position-relative container">
    <div class="" id="main-top-slide2">
    </div>
    <div class="container w-100" id="slide-arw-wrap2">
        <div class="main-slide-prev">
            <img src="/img/banner/dashicons_arrow-right-alt2.png" alt="" style="width:30px;">
        </div>
        <div class="main-slide-next">
            <img src="/img/banner/dashicons_arrow-left-alt2.png" alt="" style="width:30px;">
        </div>
    </div>
</section>


<section class="pt-0">
    <div class="container text-center">
        <div class="popular_section_heading text-center">
            <h5>NEW ARRIVALS</h5>
            <p class="sub_title">#처음 뵙겠습니다.</p>
            <p class="sub_title mt-0 mb-3">따끈따끈 신상품을 확인하세요!</p>
        </div>

        <!-- 그리드 아이콘 HTML 부분 시작 -->
        <div id="grid-arrivals" class="pc-none grid-wrap" data-type="arrivals">
            <img class="grid-btn toggle normal" data-grid="toggle" src="/img/grid/toggle.png">
            <img class="grid-btn toggle select d-none" data-grid="toggle" src="/img/grid/toggles.png">
            <img class="divider" src="/img/grid/divider.png">
            <img class="grid-btn grid grid2 normal" data-grid="grid2" src="/img/grid/grid2.png">
            <img class="grid-btn grid grid2 select d-none" data-grid="grid2" src="/img/grid/grid2s.png">
            <img class="grid-btn grid grid3 normal d-none" data-grid="grid3" src="/img/grid/grid3.png">
            <img class="grid-btn grid grid3 select" data-grid="grid3" src="/img/grid/grid3s.png">
            <img class="grid-btn grid grid4 normal" data-grid="grid4" src="/img/grid/grid4.png">
            <img class="grid-btn grid grid4 select d-none" data-grid="grid4" src="/img/grid/grid4s.png">
        </div>
        <!-- 그리드 아이콘 HTML 부분 끝 -->


        <div class="position-relative pt-2">
            <div class="row justify-content-start new_product mt-3 px-3 px-md-0"></div>
        </div>

    </div>
</section>


<section class="pt-0">
    <div class="container text-center">
        <div class="popular_section_heading text-center">
            <h5>WEEKLY HASHTAG</h5>
            <p class="sub_title mb-4">#이번주 인기태그를 확인해보세요!</p>
            <p class="d-flex align-items-center justify-content-center mb-50" style="flex-wrap:wrap;" id="hashtag-wrap">
            </p>
        </div>

        <!-- 그리드 아이콘 HTML 부분 시작 -->
        <div id="grid-hashtag" class="pc-none grid-wrap" data-type="hashtag">
            <img class="grid-btn toggle normal" data-grid="toggle" src="/img/grid/toggle.png">
            <img class="grid-btn toggle select d-none" data-grid="toggle" src="/img/grid/toggles.png">
            <img class="divider" src="/img/grid/divider.png">
            <img class="grid-btn grid grid2 normal" data-grid="grid2" src="/img/grid/grid2.png">
            <img class="grid-btn grid grid2 select d-none" data-grid="grid2" src="/img/grid/grid2s.png">
            <img class="grid-btn grid grid3 normal d-none" data-grid="grid3" src="/img/grid/grid3.png">
            <img class="grid-btn grid grid3 select" data-grid="grid3" src="/img/grid/grid3s.png">
            <img class="grid-btn grid grid4 normal" data-grid="grid4" src="/img/grid/grid4.png">
            <img class="grid-btn grid grid4 select d-none" data-grid="grid4" src="/img/grid/grid4s.png">
        </div>
        <!-- 그리드 아이콘 HTML 부분 끝 -->


        <div class="position-relative pt-2">
            <div class="row justify-content-start mt-md-3 mt-0 px-3 px-md-0" id="productlist-Wrap"></div>
        </div>

    </div>
</section>


<!-- <section class="welcome_area overflow-hidden position-relative container">
    <div class="" id="main-top-slide3">
    </div>
    <div class="container w-100" id="slide-arw-wrap3">
        <div class="main-slide-prev">
            <img src="/img/banner/dashicons_arrow-right-alt2.png" alt="" style="width:30px;">
        </div>
        <div class="main-slide-next">
            <img src="/img/banner/dashicons_arrow-left-alt2.png" alt="" style="width:30px;">
        </div>
    </div>
</section> -->

<section class="pt-0">
    <div class="container text-center">
        <div class="popular_section_heading text-center">
            <h5>BEST REVIEW</h5>
            <p class="sub_title mb-3">#후기로 증명된 제품. 이제 믿고 구매하세요!</p>
        </div>

        <!-- 그리드 아이콘 HTML 부분 시작 -->
        <div id="grid-review" class="pc-none grid-wrap" data-type="review">
            <img class="grid-btn toggle normal" data-grid="toggle" src="/img/grid/toggle.png">
            <img class="grid-btn toggle select d-none" data-grid="toggle" src="/img/grid/toggles.png">
            <img class="divider" src="/img/grid/divider.png">
            <img class="grid-btn grid grid2 normal" data-grid="grid2" src="/img/grid/grid2.png">
            <img class="grid-btn grid grid2 select d-none" data-grid="grid2" src="/img/grid/grid2s.png">
            <img class="grid-btn grid grid3 normal" data-grid="grid3" src="/img/grid/grid3.png">
            <img class="grid-btn grid grid3 select d-none" data-grid="grid3" src="/img/grid/grid3s.png">
            <img class="grid-btn grid grid4 normal d-none" data-grid="grid4" src="/img/grid/grid4.png">
            <img class="grid-btn grid grid4 select" data-grid="grid4" src="/img/grid/grid4s.png">
        </div>
        <!-- 그리드 아이콘 HTML 부분 끝 -->


        <div id="bestReview-wrap">
            <div class="bestReview-wrapper row pt-4 pt-lg-5 text-center">

            </div>

        </div>

    </div>
</section>

<div class="modal" style="overflow-y:hidden" tabindex="-1" id="banner_modal" role="dialog">
    <div class="modal-dialog" role="document" style=" position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);">
        <div class="modal-content" style="background:transparent">
            <div class="modal-body p-0">
                <div class="modal_banner_body">
                </div>
            </div>
            <div class="modal-footer border-top-0 bg-gray justify-content-between">
                <div class="d-flex align-items-center">
                    <input type="checkbox" name="" value="" id="day-ck-modal" style="top:0px;">
                    <label for="day-ck-modal" class="mb-0  pointer ml-1">오늘하루 보지않기</label>
                </div>
                <div class=" pointer" onclick="popupCloseModalBanner()" data-dismiss="modal">닫기</div>
            </div>
        </div>
    </div>
</div>

<div id="test_wrap"></div>

<section id="section5" class="pt-0">
    <div class="container text-center">
        <div class="popular_section_heading text-center">
            <h5>PROJECT</h5>
            <p class="sub_title">#리닷에서 진행한 다양한 프로젝트를 만나보세요!</p>
        </div>
        <div class="row pt-4 pt-lg-5" id="project_section">
        </div>
        <div class="d-flex mt-5" id="project_section_arrow">

        </div>
    </div>
</section>


<section id="section7" class="pt-0">

</section>


<div id="bg-back" class="d-none"></div>
<div id="review-popup" class="d-none">
    <div class="review-popup-close">
        <i class="fa-solid fa-xmark d-none d-md-block"></i>
        <i class="fa-solid fa-circle-xmark d-block d-md-none"></i>
    </div>
    <div class="poisition-relative h-100">
        <!-- <i class="fas fa-chevron-left rv-arrow left d-none"></i> -->

        <div class="d-none d-md-block h-100">
            <div class="row mx-0 h-100">
                <div class="px-0 col-8 bg_wrap" id="bg_wrap"></div>
                <div class="col-4 px-0">
                    <div id="content_wrap" class="p-3 content_wrap">

                    </div>
                </div>
            </div>

        </div>

        <div class="d-block d-md-none h-100">
            <div class="h-100">
                <div class="px-0  bg_wrap bg_wraap_m h-50" id="bg_wraap_m"></div>
                <div class="w-100 px-0 cotent_wrap_m_div h-50">
                    <div id="content_wrap_mm" class="p-3 content_wrap w-100 h-100">

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



</script>

<!-- CSS 파일 (cdnjs.com의 CDN을 사용) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js"
    integrity="sha512-jEJ0OA9fwz5wUn6rVfGhAXiiCSGrjYCwtQRUwI/wRGEuWRZxrnxoeDoNc+Pnhx8qwKVHs2BRQrVR9RE6T4UHBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lightgallery.min.css"
    integrity="sha512-F2E+YYE1gkt0T5TVajAslgDfTEUQKtlu4ralVq78ViNxhKXQLrgQLLie8u1tVdG2vWnB3ute4hcdbiBtvJQh0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<script type="text/javascript">
var list_count = 3;
var ViewType = 'photo';
var rppp = 10;
$(function() {
    console.log('ㅡㅡ index READY');

    if (!getCookie('modal_popup')) {
        loadMainModalBanner();
    }

    if ($(window).width() < 780) {
        $('.mainbanner_slide').remove()
        MainSlideMLoad()
    } else {
        $('.mainbanner_slide_m').remove()
        MainSlideLoad()
    }

    if (user_info) {
        cartNum()
        wishNum()
    }


    loadInsta2()
    loadProject()

    //브랜드
    MainOneSlideLoad(3)
    //베스트상품
    //loadBestProduct(3);

    fadeInOutLoad();



});

function loadBestProduct(_grid) {

    console.log('loadBestProduct start')


    $.ajax({
        type: "POST",
        url: SERVER_AP + '/product/allCateProduct',
        cache: false,
        success: function(data) {

            // 인기상품
            $('.best_product_wrap').html('');
            $.each(data[1], function(i, v) {
                var h_img;
                if (v.p_hover == null) {
                    h_img = '/img/common/hover_bg.png';
                } else {
                    h_img = v.p_hover;
                }

                var sticker
                if (v.p_sticker) {
                    sticker = v.p_sticker
                } else {
                    sticker = ''
                }

                ////////////// 사업자회원시 도매가 가격 적용 ////////////////////
                if (v.p_wholesale && user_info.u_type == '사업자회원') {
                    v.p_price = v.p_wholesale
                }
                ////////////// 사업자회원시 도매가 가격 적용 END ////////////////////

                var pmark
                // if(v.p_mark){
                //     pmark = JSON.parse(v.p_mark);
                // }else{
                //     pmark = '';
                // }
                if (v.pm_seq) {
                    pmark = marktemImg(v.pm_seq);
                }

                // v.p_name.length > 25 && (v.p_name = v.p_name.substr(0,25)+'...')

                var disprice = -(((v.p_price * 1 - v.p_consume_price * 1) / v.p_price) * 100);

                var mainimgArr = JSON.parse(v.p_image);

                // var bestStr = `<div class="single_popular_item pointer col-md-3 col-6" onclick="location.href='/product_detail.php?p_seq=`+v.p_seq+`'">
                //     <div class="product_image">
                //         <div class="first_img" style="width:100%; max-height: 330px; height:22.5vw; background:url('`+mainimgArr[0]+`') no-repeat center; background-size:cover;"></div>
                //         <div class="hover_img" style="width:100%; max-height: 330px; height:22.5vw; background:url('`+h_img+`') no-repeat center; background-size:cover;" ></div>
                //
                //             <img src="${pmark}" alt="" style="width:50px; position:absolute; top:10px; left:0;"/>
                //
                //         <div class="product_wishlist product_wishlist`+v.p_seq+`">
                //             <img class="" src="`+sticker+`" alt="" style="width:50px; height:50px;">
                //         </div>
                //
                //     </div>
                //     <div class="product_description text-left">
                //         <h5 class="${v.p_seq}"><a href="/product_detail.php?p_seq=`+v.p_seq+`">`+v.p_name+`</a></h5>
                //         <h6><span class="disprice">${comma(v.p_consume_price)}원</span></h6>
                //         <h6><span class="text-danger mt-1" style="font-size:110%;">${Math.floor(disprice)}%</span> `+comma(v.p_price)+`원</h6>
                //     </div>
                // </div>`;


                var checkBookData = checkBook(v.p_seq);

                var onclickVal
                var colorYellow
                if (user_info) {
                    if (checkBookData) {
                        onclickVal = `deleteWist(${v.p_seq})`;
                        colorYellow = 'color:#d31c0c';
                    } else {
                        onclickVal = `Wishlist(${v.p_seq})`;
                    }
                }
                var markNone
                if (!pmark) {
                    markNone = 'd-none';
                }

                //var delprice = LoadDel(v.dt_seq);
                let proTextStr = ``
                if ($(window).width() > 768) {
                    proTextStr = `
                                        <div class=" d-flex justify-content-between align-items-center">
                                            <div>
                                                <span class="font-weight-bold">
                                                    ${comma(v.p_price)}원
                                                </span>
                                                <span class="ml-2" style="text-decoration: line-through; color:#ccc;">
                                                    ${comma(v.p_consume_price)}원
                                                </span>
                                            </div>
                                            <span class="text-danger ml-2 p-1" style="font-size:13px; border:1px solid red;">${Math.floor(disprice)}%</span>
                                        </div>`
                } else {
                    proTextStr = `<div class=" d-flex justify-content- align-items-center">
                                            <span class="font-weight-bold">${comma(v.p_price)}원</span>
                                            <span class="text-danger ml-2" style="font-size:13px;">${Math.floor(disprice)}%</span>
                                        </div>`
                }
                let colStr = 'col-md-4';
                if (_grid == 2) {
                    colStr = 'col-md-6';
                } else if (_grid == 4) {
                    colStr = 'col-md-3';
                }

                var str = `<div class="${colStr} col-6 pointer mb-md-5 mb-3">\
                                    <div class="productWrap fs-14 position-relative">\
                                        <div  onclick="location.href='/product_detail.php?p_seq=` + v.p_seq +
                    `'" class="productWrap-img position-relative" style="background:url('` +
                    mainimgArr[0] + `'); width:100%; padding-bottom:100%;">\
                                            <img class="${markNone} pmark" src="${pmark}" alt="" style="width:50px; position:absolute; top:10px; left:0; z-index:10;"/>\
                                        </div>\
                                        <div class="hoverimage pointer" style="background:url('` + h_img +
                    `'); width:100%; padding-bottom:100%; position:absolute; top:0; left:0;" onclick="location.href='/product_detail.php?p_seq=` +
                    v.p_seq + `'"></div>
                                        <div>
                                            <div class="font-weight-bold productWrap-titleWrap">${v.p_name}</div>
                                            <div class="d-flex justify-content-between">
                                                <div class="mt-2 onetext">${v.p_onetext || ''}</div>
                                                <div class="like_wrap">
                                                    <div class="pointer mt-2 text-secondary" onclick = ${onclickVal}>
                                                        <i class="fa-solid fa-heart" style="${colorYellow}"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-2">
                                                ${proTextStr}
                                            </div>
                                        </div>
                                    </div>
                                </div>`;

                if (i < 8) {
                    $('.best_product_wrap').append(str);
                }

            })

            $(".productWrap-img").css({
                "height": $(".productWrap-img").width()
            });
        },
        beforeSend: function() {
            // Loading()
        },
        complete: function() {
            //$("#div_ajax_load_image").remove();
        },
        error: function(request, status, error) {
            console.log("code:" + request.status + "\n" + "message:" + request.responseText + "\n" +
                "error:" + error);
        },
    });
}

//
// function LoadHashtag(){
//     $.ajax({
//         url: SERVER_AP+"/main/hashtag-list-main",
//         type: "post",
//         cache: false,
//         data:{table:"hashtag"},
//         success: function(data){
//             $("#hashtag-wrap").html('');
//             if(data.length == 0){
//                 var nstr = `<div class='py-5 text-center'>금주의 해쉬태그가 없습니다.</div>`;
//                 $("#hashtag-wrap").append(nstr);
//             }else{
//                 $.each(data,function(i,v){
//                     var str = `<div class="position-relative px-3 py-1 mx-1 my-2 border hashtag pointer" onclick="brClickMain('${v.h_name}')">
//                                 <span class="">#${v.h_name}</span>
//                             </div>`;
//                     $("#hashtag-wrap").append(str);
//
//
//                     loadHash(v.h_name);
//
//                 })
//             }
//         },
//         error: function (request, status, error){
//             console.log(error);
//         }
//     });
// }

function brClickMain(h_name) {
    location.href = '/store.php?sk=' + h_name;
}


////////탑 슬라이드
function MainSlideLoad() {
    $.ajax({
        url: SERVER_AP + "/main/mainbanner-slide-main",
        type: "post",
        cache: false,
        async: false,
        success: function(data) {
            $(".mainbanner_slide").html('')

            let dataArr = shuffle(data)
            $.each(dataArr, function(i, v) {

                var str =
                    `<img src="${v.b_img}" alt="" style="width: 100%;" id="banner-pc-${v.b_seq}">`;
                $(".mainbanner_slide").append(str)

                if (v.b_link) {
                    $("#banner-pc-" + v.b_seq).attr('onclick', `bannerLink(\'${v.b_link}\')`)
                    $("#banner-pc-" + v.b_seq).addClass("pointer")
                }
            })

            $('.mainbanner_slide').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                draggable: true,
                autoplay: 3000,
                fade: true,
                dots: true,
                arrows: false,
            });
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

function shuffle(array) {
    array.sort(() => Math.random() - 0.5);

    return array;
}

function bannerLink(b_link) {
    location.href = b_link
}

function MainSlideMLoad() {
    $.ajax({
        url: SERVER_AP + "/main/mainbanner-slide-m-main",
        type: "post",
        cache: false,
        data: {},
        success: function(data) {
            $(".mainbanner_slide_m").html('')
            $.each(data, function(i, v) {

                var str =
                    `<img src="${v.b_img}" alt="" style="width: 100%;" id="banner-m-${v.b_seq}">`;
                $(".mainbanner_slide_m").append(str)

                if (v.b_link) {
                    $("#banner-m-" + v.b_seq).attr('onclick', `bannerLink(\'${v.b_link}\')`)
                    $("#banner-m-" + v.b_seq).addClass("pointer")
                }
            })

            $('.mainbanner_slide_m').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                draggable: true,
                autoplay: 3000,
                dots: false,
                fade: true,
            });
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}


var chkBlean = false;
var listNum = 3;
var contentInfo = "";

var aaBlean = true;

$(document).on("click", ".df-prl-viewtype-btn > div", function() {

    list_count = $(this).attr("data-target");

    var pppCount = $(this).attr('data-ppp');

    contentInfo = $(this).attr('data-content');


    if (contentInfo == 'brand') {

        chkBlean = false;

        if (list_count != 1) {
            $(".brand_btn_b").removeClass("selected");
            $(this).addClass("selected");

            $('.shopslick').slick('unslick');
            $('.shopslick').html('');

            listNum = list_count;
        }

        if (pppCount == 1) {

            if ($('.brand_btn_a').hasClass("selected")) {

                $(".brand_btn_a").removeClass("selected");
                $('.shopslick').slick('unslick');
                $('.shopslick').html('');

                chkBlean = false;

            } else {

                $('.shopslick').slick('unslick');
                $('.shopslick').html('');
                $('.brand_btn_a').addClass("selected");

                chkBlean = true;
            }

        } else {

            if ($('.brand_btn_a').hasClass("selected")) {
                chkBlean = true;
            }

        }



        MainOneSlideLoad();

    } else if (contentInfo == 'best') {

        if (list_count != 1) {
            $(".best_btn_b").removeClass("selected");
            $(this).addClass("selected");
        }

        if (pppCount == 1) {

            if ($('.best_btn_a').hasClass("selected")) {
                $(".best_btn_a").removeClass("selected");
                chkBlean = false;

            } else {
                $('.best_btn_a').addClass("selected");
                chkBlean = true;
            }

        }

        //loadProduct();

    }
});


/* BRAND INFO */
function MainOneSlideLoad(_grid) {
    $.ajax({
        url: SERVER_AP + "/main/mainbanner-slide-main-one",
        type: "post",
        cache: false,
        data: {},
        success: function(data) {
            $.each(data, function(i, v) {
                var mt = ``;
                if (v.b_dateyn == 'Y') {
                    mt = `<p class="${mt}">${v.b_date}</p>`
                }


                var str = `<div class="mx-3 pointer" id="banner-one-${v.b_seq}" onclick="location.href='/store.php?sk=${v.b_link}'">
                                    <div class="section4ImgDiv" style="background:url('${v.b_img}')">
                                        <div class="section4ImgText text-center p-3 pb-0"><p class="mb-0">${v.b_name}</p>${mt}</div>
                                    </div>
                                </div>`
                $(".shopslick").append(str);


            });



            $('.shopslick').slick({
                slidesToShow: _grid,
                slidesToScroll: 1,
                // autoplay : 3000,
                dots: true,
                arrows: false,
                draggable: false,
                nextArrow: $('#slick-next'),
                prevArrow: $('#slick-prev'),
                responsive: [ // 반응형 웹 구현 옵션
                    {
                        breakpoint: 769, //화면 사이즈 960px
                        settings: {
                            //위에 옵션이 디폴트 , 여기에 추가하면 그걸로 변경
                            slidesToShow: 1
                        }
                    },
                ]
            });

            if (_grid == 2) {
                $('.shopslick .slick-list').addClass('two');
            } else {
                $('.shopslick .slick-list').removeClass('two');
            }


            /* 슬릭 휠 */
            $('.shopslick').on('wheel', function(e) {
                e.preventDefault();

                if (e.originalEvent.deltaY < 0) {
                    $(this).slick('slickPrev');
                } else {
                    $(this).slick('slickNext');
                }
            });
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}


function MainTwoSlideLoad() {
    $.ajax({
        url: SERVER_AP + "/main/mainbanner-slide-main-two",
        type: "post",
        cache: false,
        data: {},
        success: function(data) {
            $.each(data, function(i, v) {
                var mt = ``;
                if (v.b_dateyn == 'Y') {
                    mt = `<p class="${mt}">${v.b_date}</p>`
                }
                var str = `<div class="mx-3 pointer" id="banner-two-${v.b_seq}" onclick="location.href='/store.php?sk=${v.b_link}'">
                                    <div class="section4ImgDiv" style="background: url('${v.b_img}');"></div>
                                    <div class="section4ImgText text-center p-3"><p>${v.b_name}</p>${mt}</div>
                                </div>`
                $(".shopslick2").append(str)
            })

            $('.shopslick2').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true,
                arrows: true,
                draggable: false,
                nextArrow: $('#slick-next2'),
                prevArrow: $('#slick-prev2'),
                responsive: [ // 반응형 웹 구현 옵션
                    {
                        breakpoint: 769, //화면 사이즈 960px
                        settings: {
                            //위에 옵션이 디폴트 , 여기에 추가하면 그걸로 변경
                            slidesToShow: 1
                        }
                    },
                ]
            });
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}



function loadInsta2() {
    var winwidth = $(window).width()
    var obj = new Object();
    obj.i_type = winwidth > 768 ? 'PC' : 'M'
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        data: {
            table: 'insta',
            common: obj,
        },
        success: function(data) {
            $("#instaWrap").html('');
            if (data.length == 0) {
                let str = `<div class="mx-auto">
                                    <p>진행중인 프로젝트가 없습니다.</p>
                                </div>`;
                $("#project_section").append(str);
            } else {
                let str = `<div class="container text-center">
                                    <div class="popular_section_heading mb-50 text-center">
                                        <h5><i class="fa-brands fa-instagram"></i> INSTAGRAM</h5>
                                        <p class="pointer sub_title" onclick="window.open('https://www.instagram.com/design_lidot/')">@design_lidot</p>
                                    </div>
                                    <div class="row mt-4 px-3 px-md-0" id="instaWrap"></div>
                                </div>`;
                $("#section7").append(str)

                $.each(data, function(i, v) {
                    // let col = `<div class="col-6 col-md-3 mb-4">
                    //                 <div class="instacol" style="background:url('${v.i_img}')"></div>
                    //             </div>`;
                    let col = `<img src="${v.i_img}" alt="">`;
                    $("#instaWrap").append(col)
                })
            }
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}


function loadProject() {
    var winwidth = $(window).width()
    $.ajax({
        url: SERVER_AP + "/admin/common/all",
        type: "post",
        cache: false,
        data: {
            table: 'project',
        },
        success: function(data) {
            $("#project_section").html('');
            if (data.length == 0) {
                let str = `<div class="mx-auto">
                                    <p>진행중인 프로젝트가 없습니다.</p>
                                </div>`;
                $("#project_section").append(str);
            } else {
                if (data.length > 3) {
                    let astr =
                        `<span class="text-secondary ml-auto pointer" onclick="location.href='project_list.php'">더보기 ></span>`
                    $("#project_section_arrow").append(astr);
                }
                $.each(data, function(i, v) {
                    if (i < 3) {
                        let img = winwidth > 768 ? v.p_img : v.p_img_m

                        // let str = `
                        //         <div class="mx-3 pointer" id="banner-one-${v.b_seq}" onclick="location.href='/store.php?sk=${v.b_link}'">
                        //             <div class="section4ImgDiv" style="background:linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, #000000 100%), url('${v.b_img}');">
                        //                 <div class="section4ImgText text-center p-3 pb-0"><p class="mb-0">${v.b_name}</p>${mt}</div>
                        //             </div>
                        //         </div>
                        // `

                        let str = `
                                <div class="mb-3 pointer col-12 pro_img_${v.p_seq} col-lg-4 ${v.p_comming_soon == 'Y' ? 'comingsoon' : 'pointer'}" >
                                    <div class="section4ImgDiv" style="background:linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, #000000 100%), url('${img}');">
                                        <div class="section4ImgText top text-center p-3 pb-0">
                                            <p class="mb-3 text-left" style="font-size:14px">${v.p_title}</p>
                                            <div class="text-left text_2_line text-white">${v.p_text}</div>
                                        </div>
                                    </div>
                                </div>

                               `;
                        $("#project_section").append(str);

                        if (v.p_comming_soon != 'Y') {
                            $(`.pro_img_${v.p_seq}`).attr('onclick',
                                `location.href="/project_detail.php?p_seq=${v.p_seq}"`)
                        }
                    }
                })
            }
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

function fadeInOutLoad() {
    $.ajax({
        url: SERVER_AP + "/main/mainbanner-fade",
        type: "post",
        cache: false,
        data: {},
        success: function(data) {
            $(".animationImg1").attr('src', data[0].b_img)
            $(".animationImg2").attr('src', data[1].b_img)
            $(".animationImg3").attr('src', data[2].b_img)
            $(".animationImg4").attr('src', data[3].b_img)
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}


function ProClick(p_seq) {
    location.href = '/product_detail.php?p_seq=' + p_seq;
}



//
// ★ 목록 위 그리드버튼 영역 제어하는 공통 코드
//
$('.grid-btn').click(function(e) {
    var type = $(this).parent().data('type');
    var btn = $(this).data('grid');
    var toggleState = false;

    if (btn == 'toggle') {
        if ($(this).hasClass('normal')) {
            toggleState = true;
            $('#grid-' + type + ' .' + btn + '.normal').addClass('d-none');
            $('#grid-' + type + ' .' + btn + '.select').removeClass('d-none');
        } else {
            $('#grid-' + type + ' .' + btn + '.normal').removeClass('d-none');
            $('#grid-' + type + ' .' + btn + '.select').addClass('d-none');
        }

        // 맨앞 토글버튼 처리
        if (type == 'brand') {
            // 브랜드영역 처리
            if (toggleState) {
                // 토글 켜짐
                console.log('브랜드 영역 토글 켜짐');
            } else {
                // 토글 꺼짐
                console.log('브랜드 영역 토글 꺼짐');
            }
        } else if (type == 'product') {
            if (toggleState) {
                console.log('테스트 영역 토글 켜짐');
            } else {
                console.log('테스트 영역 토글 꺼짐');
            }
        }


        $(`.view_${type}`).toggleClass('active');

    } else {
        $('#grid-' + type + ' .grid.normal').removeClass('d-none');
        $('#grid-' + type + ' .grid.normal.' + btn).addClass('d-none');
        $('#grid-' + type + ' .grid.select').addClass('d-none');
        $('#grid-' + type + ' .grid.select.' + btn).removeClass('d-none');
        setGrid(type, btn);
    }
});

$(document).on('mouseover', '.view_item', function() {
    let _target = $(this).find('.view_ab');
    if (_target.hasClass('active')) {
        _target.addClass('op');
        _target.find('.productWrap-titleWrap').css('border-bottom', '1px solid #fff');
    } else {
        _target.find('.fa-solid').addClass('on');
    }
})

$(document).on('mouseout', '.view_item', function() {
    let _target = $(this).find('.view_ab');
    if (_target.hasClass('active')) {
        _target.removeClass('op');
        _target.find('.productWrap-titleWrap').css('border-bottom', '1px solid #dee2e6');
    } else {
        _target.find('.fa-solid').removeClass('on');
    }
})






function setGrid(type, btn) {
    console.log(type + ' 영역 ' + btn + ' 버튼 켜짐');
    let gridType = btn.replace('grid', '');
    if (type == 'brand') {
        $('.shopslick').slick('unslick');
        $('.shopslick').html('');
        MainOneSlideLoad(gridType);
    } else if (type == 'product') {
        loadProduct(3, gridType);
    } else if (type == 'arrivals') {
        loadProduct(gridType, 3);
    } else if (type == 'hashtag') {
        countHash = 0;
        LoadHashtag(gridType);
    } else if (type == 'review') {
        LoadBestReview(gridType);
    }

}

function loadMainModalBanner() {
    let obj = new Object();
    obj.b_location = 18;
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'banner',
            common: obj,
        },
        success: function(data) {
            console.log('ddd', data);
            if (data.length != 0) {

                $.each(data, function(i, v) {
                    let str = `
                            <img src="${v.b_img}" />
                            `
                    $('.modal_banner_body').append(str);
                })

                $('#banner_modal').modal('show')
            }

        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

function popupCloseModalBanner() {
    if ($("input[id=day-ck-modal]").prop('checked') === true) {
        setCookie('modal_popup', true, 1);
    }
    $('#banner_modal').modal('hide')
}
</script>
<script src="/js/pages/shop_main/shop_main.js"></script>
<script src="/js/pages/shop_main/shop_main_bestreview.js"></script>
<script src="/js/pages/shop_main/shop_main_banner.js"></script>
<!-- <script src="/js/pages/shop_main/shop_main_hashtag.js"></script> -->

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
