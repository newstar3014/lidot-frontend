<?
session_start();
if (isset($_SESSION['user_info'])):
    $isLogin = 1;
    $user_info = $_SESSION['user_info'];
endif;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="naver-site-verification" content="d72e7ca31482254372fb3aa5bebdd85b9a1aa570" />
    <meta property="og:title" content="라이프스타일 플랫폼, 리닷">
    <meta property="og:description" content="라이프스타일 플랫폼, 리닷">
    <meta property="og:image" content="https://lidot.co.kr/img/page/header/logo02.png">
    <meta property="og:url" content="https://lidot.co.kr">
    <title>라이프스타일 플랫폼, 리닷</title>

    <!-- Favicon  -->
    <script src="/js/pages/shop_header/shop_header.js"></script>
    <link rel="icon" href="img/common/bncofavicon.png">

    <!-- CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font.css" rel="stylesheet">
    <link href="/css/common.css?v=1.2" rel="stylesheet">
    <link href="/css/header.css?v=1.2" rel="stylesheet">
    <link href="/css/new_header.css?v=1.4" rel="stylesheet">
    <link href="/css/footer.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="/slick/slick.css" />
    <link rel="stylesheet" href="/slick/slick-theme.css">
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/slick/slick.min.js"></script>
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script src="/js/all.js"></script>
    <script src="/js/common.js"></script>
    <link rel="stylesheet" href="css/temp/style.css">
    <link rel="stylesheet" href="css/common.css?v=1.1">
    <link rel="stylesheet" href="css/temp/css/index/index.css?v=10">
    <link rel="stylesheet" href="css/pages/shop_header/common.css?v=1.2">
    <!-- JS -->

    <link href="/summernote/summernote.min.css" rel="stylesheet">
    <script src="/summernote/summernote.min.js"></script>

    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<style media="screen">
/* * {
    font-size: 12px;
} */

/* .hover_text:hover{
        font-weight: bold;
        font-size: 16px !important;
        text-decoration: none;
    } */
.flexcenter {
    display: flex;
    align-items: center;

}

/* body {
    margin-top: 180px;
} */

.w-1px {
    width: 1px !important;
}

.bg-0 {
    background: rgba(0, 0, 0, 0);
}

.border-0 {
    border: 0;
}

.opa-0 {
    opacity: 0
}

a {
    -webkit-transition-duration: 500ms;
    -o-transition-duration: 500ms;
    transition-duration: 500ms;
    outline: none;
    color: #000000;
    text-decoration: none;
    font-weight: normal;
}

a:hover,
a:focus {
    text-decoration: none !important;
    outline: none !important;
    font-weight: 700 !important;
    color: black;
}

.largesortli {
    border-bottom: 1px solid #ededed;
}

.smallsortdiv {
    position: absolute;
    overflow: hidden;
}

.middlesortdiv li:hover .smallsortdiv {
    display: block;
}

.btn-primary {
    border: 1px solid #dee2e6 !important;
    background: white;
    color: black;
    font-weight: normal;
    border-radius: 0;
}

.btn-secondary {
    border: 1px solid #dee2e6 !important;
    background: #555;
    color: white;
    font-weight: normal;
    border-radius: 0;
}

.btn-primary:hover {
    background: white;
    color: black;
}

.btn-secondary:hover {
    background: #555;
    color: white;
}

.classycloseIcon .cross-wrap {}

#menu-M {
    display: none;
}

#m_he_img {
    display: none;
}

#bigshopNav {
    justify-content: space-between;
}

#recent_product {
    position: fixed;
    right: 40px;
    z-index: 21;
    bottom: 100px;
}

.close_btn_recent {
    position: absolute;
    top: 6px;
    right: 10px;
    color: #c4c4c4;
    font-size: 20px;
}

#recent_product .img_list {
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
    padding-bottom: 100% !important;
}

#popup {
    position: fixed;
    left: 40px;
    bottom: 100px;
    width: 200px;
    z-index: 10;
}

#popup .img_list {
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
    width: 100%;
    /* border-radius: 50%; */
}

.popup_bottom {
    font-size: 12px;
    color: #666;
}

@media (max-width:950px) {

    #search-wrap,
    #menu-PC {
        display: none !important;
    }

    #menu-M {
        display: block;
    }

    #pc_he_img {
        display: none;
    }

    #m_he_img {
        display: block;
    }

    .pmark {
        width: 30px !important;
    }
}

@media (max-width:540px) {

    #recent_product,
    #popup {
        display: none;
    }
}

/* 모바일 화면 */
@media (max-width:767px) {

    #kakao-talk-channel-chat-button,
    #kakao-talk-channel-chat-button-m {
        position: fixed;
        z-index: 999;
        right: 15px;
        /* 화면 오른쪽으로부터의 거리, 원하시는대로 숫자를 변경하세요 */
        bottom: 30px;
        /* 화면 오른쪽으로부터의 거리, 원하시는대로 숫자를 변경하세요 */
    }

    #scrollUp {
        display: none !important;
    }
}

#scrollUp {
    bottom: 40px;
    /* color: #ffffff; */
    font-size: 16px;
    height: 40px;
    line-height: 40px;
    right: 40px;
    background: #fff;
    text-align: center;
    width: 103px;
    border: 1px solid #eaeaea;
    -webkit-transition-duration: 500ms;
    -o-transition-duration: 500ms;
    transition-duration: 500ms;
}

.draw_cate_title {
    padding: 0 15px;

    line-height: 45px;
    display: flex;
    justify-content: space-between;
}

.textDeco {
    padding: 0 15px;

    line-height: 45px;
}
</style>

<style media="screen">
#menu-category {
    position: relative;
    cursor: pointer;
    font-size: 15px;
    display: inline-flex;
}

#menu-category:hover {
    text-decoration: none;
    outline: none;
    font-weight: 700;
}

#menu-category-menu {
    position: absolute;
    top: 34px;
    left: 0;
    z-index: 9999;
    /* width: 300px; */
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    background: white;
    /* display: none; */
    font-weight: normal;
    font-size: 17px;
}

.menu-category:hover .menu-category-menu {
    display: block;
}

#sort_menu-wrap>div {
    font-size: 20px;
}

.menu-category-menu-menu-menu {
    display: none;
    position: absolute;
    z-index: 9999;
    top: 45px;
    left: 10px;
    /* width: 300px; */
    background: white;
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
}


.menu-category-menu:hover .menu-category-menu-menu-menu {
    display: block;
    background: white;
}

.menu-category-menu-menu-menu>div:hover {
    background: #f8f8ff;
}

.fa-heart {
    margin-right: 15px;
}

#body_cover {
    position: fixed;
    width: 100vw;
    height: 100vh;
    z-index: 9998;
    background-color: rgba(0, 0, 0, 0.5);
    top: 0;
    left: 0;
}

/* #sort_menu-wrap > div:hover{
        color: #f8f8ff;
    } */

.head_Box:hover {
    transition: 0.2s;
    background: white !important;
}

.cart-area {
    position: relative;
    z-index: 2;
}

.cart-area .cart--btn {
    -webkit-transition-duration: 500ms;
    -o-transition-duration: 500ms;
    transition-duration: 500ms;
    position: relative;
    z-index: 1;
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    border-radius: 50%;
    cursor: pointer;
    margin-right: 15px;
    font-size: 16px;
}

.cart-area .cart--btn .cart_quantity {
    -webkit-transition-duration: 500ms;
    -o-transition-duration: 500ms;
    transition-duration: 500ms;
    background-color: #0f99f3;
    border-radius: 50%;
    color: #ffffff;
    font-size: 10px;
    height: 20px;
    line-height: 20px;
    position: absolute;
    right: -5px;
    text-align: center;
    top: -10px;
    width: 20px;
    z-index: 2;
    font-weight: 700;
}

#sk {
    /* box-shadow: 2px 2px 5px 0px rgba(0, 0, 0, 0.75);
    -webkit-box-shadow: 2px 2px 5px 0px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 2px 2px 5px 0px rgba(0, 0, 0, 0.75); */
    transition: 0.4s;
}

/* 최근 본 상품 팝업 */
.rec-product-pop-img {
    height: 100px;
    width: 100px;
}

.rec-product-pop-title {
    vertical-align: top;
    padding-left: 20px;
    width: 420px;
}

.rec-product-pop-price {
    vertical-align: bottom;
    padding-left: 20px;
    width: 420px;
}

.rec-product-pop-td-btn {}

.rec-product-pop-span-btn {
    border: 1px solid #EBECEF;
    padding: 6px 20px 6px 20px;
    border-radius: 10px;
    cursor: pointer;
    text-align: center;
    width: 75%;
    margin: 0 auto;
}

#sk {
    padding-right: 30px;
}

.cart_quantity,
.wish_quantity,
.coupon_quantity {
    background-color: #0f99f3;
    border-radius: 50%;
    color: #ffffff;
    font-size: 10px;
    height: 20px;
    line-height: 20px;
    text-align: center;
    width: 20px;
    font-weight: 700;
    display: inline-block;
    position: relative;
    top: 0px;
}

.nowrap {
    white-space: nowrap;
}

.truncate-text p,
.truncate-text span {
    width: 550px;
    display: -webkit-box;
    -webkit-line-clamp: 4;
    /* Limit number of lines */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    word-break: normal;
    text-align: left;
    font-size: 12px !important;
    font-family: "NEXON Lv2 Gothic" !important;
    /* Additional styles for appearance */
}

/* .fa-heart{
        color: #d31c0c !important;
    } */
</style>

<body>
    <div class="head_Box ">
        <header class="mx-auto container pt-0">
            <div class="fixed_box">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-between" style="height:50px;">
                        <div class="login_wrap">
                            <div class="loginText pointer d-none" onclick="location.href='/login.php'">
                                로그인
                            </div>
                            <div class="login_none pointer joinText d-none" onclick="location.href='/registerType.php'">
                                회원가입
                            </div>
                            <div class="login_none2 d-none d-flex align-items-center pointer justify-content-center"
                                onclick="location.href='/cart.php'">
                                장바구니<div class="ml-1 cart_quantity cart_number_div "></div>
                            </div>
                            <!-- <div class="login_none2 d-none">
                                주문조회
                            </div> -->
                            <div onclick="gomypage()" class="login_none2 pointer d-none">
                                마이페이지
                            </div>
                        </div>
                        <div class="login_wrap">
                            <div class="pointer" onclick="location.href='community.php';">
                                공지사항
                            </div>
                            <!-- <div class="">
                                상품문의
                            </div>
                            <div class="">
                                상품후기
                            </div> -->
                            <!-- <div class="pointer" onclick="location.href='as.php';"> -->
                            <div class="pointer" onclick="alert('준비중입니다.');">
                                A/S안내
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="logo_box_new position-relative">
                <div class="text-center mb-2 w-100">
                    <img src="img/page/header/logo02.png" alt="logo" class="pointer mx-auto"
                        onclick="location.href='/'">
                </div>

                <div class="d-flex align-itme-center justify-content-between">
                    <img class="pointer" onclick="window.open('https://www.instagram.com/design_lidot/')"
                        src="img/icon/Instagram.svg" alt="">
                    <div class="position-relative" style="max-width:250px">
                        <input type="search" class="form-control " id="sk" onkeyup="enterkey()">
                        <img src="img/icon/search-line.png" alt="logo" class="pointer search_icon mx-auto"
                            onclick="Search()">
                    </div>
                </div>
                <div class="border bg-white  recente_search_wrap d-none">
                    <div class="pt-3 px-3 pb-0">
                        <div>
                            최근검색어
                        </div>
                        <div class="recent_text_wrap">
                            <div class="my-3">
                                최근검색어가 없습니다.
                            </div>

                            <!-- <div class="my-3 d-flex align-items-center">
                                <img src="img/icon/search-line.png" alt="logo" class="pointer" onclick="Search()">
                                <div class="mx-3">
                                    123
                                </div>
                                <i class="fa-solid fa-xmark"></i>
                            </div> -->
                        </div>

                    </div>

                    <div onclick="closeRecent()"
                        class="px-3 py-2 pointer border-top text-right d-flex justify-content-end search_wrap_footer">
                        닫기
                    </div>
                </div>
            </div>


            <ul class="flexcenter">
                <!-- <li class="search_btn_icon">
                    <span><i class="fas fa-search"></i></span>
                </li> -->
                <!-- <li class="search_list_wrap pl-0">
                    <div class="search-form d-flex align-items-center" id="search-wrap" style="position:relative;">
                        <input type="search" class="form-control bg-0 w-1px border-0 opa-0" placeholder="검색어를 입력해보세요"
                            id="sk" onkeyup="enterkey()"
                            style="border-radius:1.25rem; padding-left:20px; transition:0.4s;">
                        <div class="search-btn form-control col-2 text-center bg-0 border-0"
                            style="position:absolute; top:0; right:0; border-radius:0 1.25rem 1.25rem 0; transition:0.4s;">
                            <i class="fas fa-search pointer" style="font-size:20px" onclick="Search();"></i>
                        </div>
                    </div>
                </li> -->
                <!-- <li><span onclick="location.href='/introduce.php'">COMPANY</span></li>
              <li><span onclick="goShop();">SHOP</span></li>
              <li><span onclick="location.href='/contact.php'">CONTACT US</span></li> -->
            </ul>
        </header>

        <div class=" fixCheck">
            <div class="sub_header container">
                <div class="sub_border">
                    <div id="menu-PC" class="position-relative">
                        <img id="hamberger_new" class="menu_btn_new" src="img/icon/hamberger_new.png" alt="">
                        <img id="close_new" class="menu_btn_new d-none" src="img/icon/new_close.png" alt="">
                    </div>
                </div>

                <div class="m_none  border_top new_menu_box container pr-0" style="display:none;">
                    <div class="">
                        <div class="d-flex justify-content-between">
                            <div class="w-100">
                                <div class="d-flex  p-3 draw_new_cate w-100">

                                </div>

                                <div class="d-flex  p-3 draw_new_cate_2 w-100">




                                </div>


                            </div>


                            <div class="right-menu">
                                <div class="cate_comunity h-100 pt-3">
                                    <div class="mb-5">
                                        <div class="comu_cate_title border_bottom pb-2 pl-3">
                                            커뮤니티
                                        </div>

                                        <div class="mt-2">
                                            <div class="pl-3 comu_cate_title pointer"
                                                onclick="location.href='/community.php';">
                                                공지사항
                                            </div>

                                            <div class="pl-3 comu_cate_title  pointer"
                                                onclick="location.href='/exhibition.php?active=EVENT';">
                                                이벤트
                                            </div>
                                            <!--
                                            <div class="pl-3 comu_cate_title" onclick="location.href='/community';">
                                                상품문의
                                            </div>

                                            <div class="pl-3 comu_cate_title" onclick="location.href='/community';">
                                                상품후기
                                            </div> -->

                                            <div class="pl-3 comu_cate_title pointer"
                                                onclick="location.href='/as.php';">
                                                A/S문의
                                            </div>

                                        </div>
                                    </div>
                                    <div class="mb-5">
                                        <div class="comu_cate_title border_bottom pb-2 pl-3">
                                            쇼핑몰 정보
                                        </div>
                                        <div class="mt-2">
                                            <div class="pl-3 comu_cate_title  pointer"
                                                onclick='location.href = "/introduce.php";'>
                                                회사소개
                                            </div>

                                            <div class="pl-3 comu_cate_title  pointer"
                                                onclick='location.href = "/terms.php";'>
                                                이용약관
                                            </div>

                                            <div class="pl-3 comu_cate_title  pointer"
                                                onclick='location.href = "/privacy_policy.php";'>
                                                개인정보 처리방침
                                            </div>

                                            <div class="pl-3 comu_cate_title  pointer"
                                                onclick='location.href = "/contact.php";'>
                                                이용안내
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>


    <div class="bigshop-main-menu pc_none">
        <div class="container px-0">
            <?php
            if ($isLogin != 1) {
                ?>
            <div class="pl-3 pr-3 classy-nav-container breakpoint-off">
                <div class="d-flex py-3 s align-items-center justify-content-end" style="gap:3%">
                    <div class="loginText d-none" onclick="location.href='/login.php'">
                        로그인
                    </div>
                    <div class="login_none joinText d-none" onclick="location.href='/registerType.php'">
                        회원가입
                    </div>
                    <div class="login_none2 pointer d-none" onclick="location.href='/cart.php';">
                        장바구니<div class="ml-1 cart_quantity cart_number_div "></div>
                    </div>
                    <div class="login_none2 d-none" onclick="location.href='/order_list.php';">
                        주문조회
                    </div>
                    <div onclick="gomypage()" class="login_none2 d-none">
                        마이페이지
                    </div>
                </div>
            </div>
            <div class="w-100 border_bottom"></div>
            <?php
            }
            ?>

            <div class="pl-3 pr-3 classy-nav-container breakpoint-off border_bottom">
                <nav class="classy-navbar" id="bigshopNav">

                    <!-- Toggler -->


                    <!-- Nav Brand -->
                    <a href="/" class="" id="m_he_img"><img src="img/icon/m_logo.png" alt="logo"
                            style="width: 100px;"></a>

                    <div class="d-flex align-items-center">
                        <div id="body_cover" class="d-none"></div>
                        <!-- Menu -->
                        <div class="classy-menu ml-auto" id="menu-M-wrap">
                            <!-- Close -->
                            <div class="classycloseIcon my-3" style="padding:0 15px;">
                                <img src="img/page/header/logo02.png" onclick="location.href='/'" alt="menu1"
                                    style="margin-right:auto;">
                                <!-- <div class="cross-wrap d-inline-block"><span class="top"></span><span
                                        class="bottom"></span></div> -->
                            </div>

                            <div class="classynav" id="menu-M">
                                <ul>
                                    <!-- <li id="search-wrap-li" class="p-2">

                                    </li> -->
                                    <div class="d-flex align-items-center py-2"
                                        style="padding-left:15px;padding-right:15px;">
                                        <img src="/img/login_icon.png" alt="" style="width:30%;" class="login_none"
                                            onclick="location.href='login.php'">
                                        <img src="/img/signup_icon.png" alt="" style="width:30%;" class="login_none"
                                            onclick="location.href='register.php'">
                                        <img src="/img/mypage_icon.png" alt="" style="width:30%;" class="login_none2"
                                            onclick="location.href='mypage.php'">
                                    </div>


                                    <hr class="mt-1">

                                    <!-- <li class="">
                                        <a class="d-flex justify-content-between">
                                            <span>고객센터 031-891-0610</span>
                                            <img src="/img/phone_icon.png" alt="">
                                        </a>
                                    </li> -->

                                    <div class="" id="sort_menu-wrap-M">

                                    </div>

                                    <div class="" id="menu-M-menu">

                                    </div>
                                    <hr class="mt-1">
                                    <div class="text-right px-3 fs-12" onclick="location.href='/logout.php';">LOGOUT
                                    </div>
                                    <!-- <li><a class="bg-white" href="exhibition.php">EVENT</a></li>
                                    <li><a class="bg-white" href="contact.php">입점문의</a></li>
                                    <li><a class="bg-white" href="communitiy.php">공지사항</a></li> -->
                                    <!-- <li><a href="/">메인페이지이동</a></li> -->
                                </ul>
                            </div>
                        </div>

                        <style>
                        .classy-navbar-toggler .navbarToggler span {
                            height: 2px !important;
                        }

                        .classy-navbar-toggler .navbarToggler.active span:nth-of-type(1) {
                            transform: none !important;
                            top: 0 !important
                        }

                        .classy-navbar-toggler .navbarToggler.active span:nth-of-type(2) {
                            transform: none !important;
                            opacity: 1 !important;
                        }

                        .classy-navbar-toggler .navbarToggler.active span:nth-of-type(3) {
                            transform: none !important;
                            top: 0 !important;
                        }
                        </style>
                        <div class="d-flex text-right" style="min-width:29px">
                            <img width="27px" onclick="$('#search_modal').modal('show')"
                                src="img/icon/search-line_m.png?v=1.1" alt="" class="mr-2">
                            <div class="classy-navbar-toggler mr-0" style="margin-top:2px;">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>
                        </div>

                        <style>
                        .hero_meta_area {
                            position: fixed;
                            right: 10px;
                            bottom: 10%;
                        }
                        </style>

                        <div class="hero_meta_area ml-md-5 align-items-center pl-3 justify-content-end">
                            <!-- Search -->
                            <? if (isset($_SESSION['user_info'])): ?>
                            <!-- Wishlist -->
                            <div class="wishlist-area" style="margin-bottom:13px;">
                                <div class="wishlist-btn position-relative" onclick="location.href='/wishlist.php'"><i
                                        class="fas fa-heart mr-0"></i><span class="wish_quantity">0</span></div>
                            </div>

                            <!-- Cart -->
                            <div class="cart-area" style="margin-bottom:13px;">
                                <div class="cart--btn" onclick="location.href='/cart.php'"><i
                                        class="fas fa-shopping-cart"></i> <span class="cart_quantity">0</span></div>

                                <!-- Cart Dropdown Content -->
                                <!-- <div class="cart-dropdown-content">
                                    <ul class="cart-list">
                                        <li>
                                            <div class="cart-item-desc">
                                                <a href="#" class="image">
                                                    <img src="img/product-img/top-1.png" class="cart-thumb" alt="">
                                                </a>
                                                <div>
                                                    <a href="#">가구1</a>
                                                    <p>1 x - <span class="price">20,000원</span></p>
                                                </div>
                                            </div>
                                            <span class="dropdown-product-remove"><i class="far fa-trash-alt"></i></span>
                                        </li>
                                        <li>
                                            <div class="cart-item-desc">
                                                <a href="#" class="image">
                                                    <img src="img/product-img/best-4.png" class="cart-thumb" alt="">
                                                </a>
                                                <div>
                                                    <a href="#">가구2</a>
                                                    <p>2x - <span class="price">50,000원</span></p>
                                                </div>
                                            </div>
                                            <span class="dropdown-product-remove"><i class="far fa-trash-alt"></i></span>
                                        </li>
                                    </ul>
                                    <div class="cart-pricing my-4">
                                        <ul>
                                            <li>
                                                <span>상품가격:</span>
                                                <span>70,000원</span>
                                            </li>
                                            <li>
                                                <span>배송비:</span>
                                                <span>10,000원</span>
                                            </li>
                                            <li>
                                                <span>전체금액:</span>
                                                <span>80,000원</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cart-box">
                                        <a href="checkout-1.html" class="btn btn-primary d-block">Checkout</a>
                                    </div>
                                </div> -->
                            </div>
                            <? endif; ?>
                            <!-- Account -->
                            <div class="account-area d-none">
                                <div class="user-thumbnail" onclick="location.href='/mypage.php'">
                                    <i class="fas fa-user"></i>
                                    <!-- <img src="img/bg-img/user.png" alt=""> -->
                                </div>
                                <!-- <ul class="user-meta-dropdown">
                                    <li class="user-title login font-weight-normal">
                                        <span class="font-weight-bold user_name"></span>님을 환영합니다.
                                    </li>
                                    <li class="login"><a href="#" onclick="location.href='mypage.php'">마이페이지</a></li>
                                    <li class="login"><a href="/wishlist.php">관심상품</a></li>
                                    <li class="login"><a href="/cart.php">장바구니</a></li>
                                    <li class=""><a class="loginChange" href="login.php"><i class="icofont-logout"></i>
                                            <spna class="loginText">Login</span>
                                        </a>
                                    </li>
                                    <li class="login mt-2" id="kakaoOut">
                                        <span class="pointer font-weight-bold" onclick="unlinkApp()"
                                            style="color:#888">카카오계정 탈퇴</span>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                        <!--
                        <div class="py-3 container">

                        </div> -->

                    </div>


                </nav>

                <style media="screen">
                /* #menu-category{
                        font-weight: bold;
                        position: relative;
                        font-size: 20px;
                    }
                    #menu-category a{
                        font-weight: normal;
                    }
                    #menu-category:hover{
                        background: #f8f8ff;
                    }
                    #menu-category-menu{
                        position: absolute;
                        top: 62px;
                        left: 0;
                        z-index: 9999;
                        width: 300px;
                        box-shadow: 1px 1px 1px rgba(0,0,0,0.1);
                        background: white;
                        display: none;
                        font-weight: normal;
                        font-size: 17px;
                    }
                    #menu-category:hover #menu-category-menu{
                        display: block;
                    }
                    #sort_menu-wrap > div{
                        font-size: 20px;
                    }

                    .menu-category-menu-menu-menu{
                        display: none;
                        position: absolute;
                        z-index: 9999;
                        top: 0;
                        left: 300px;
                        width: 300px;
                        background: white;
                        box-shadow: 1px 1px 1px rgba(0,0,0,0.1);
                    }

                    .menu-category-menu-menu:hover{
                        background: #f8f8ff;
                    }
                    .menu-category-menu-menu:hover .menu-category-menu-menu-menu{
                        display: block;
                        background: white;
                    }

                    .menu-category-menu-menu-menu > div:hover{
                        background: #f8f8ff;
                    } */

                /* #sort_menu-wrap > div:hover{
                        color: #f8f8ff;
                    } */
                </style>


            </div>
            <!-- 모바일 헤더 밑에 메뉴 -->
            <div class="pl-3 pr-0 border_top border-bottom head_1_wrap d-none" style="background:#fff;height:53px">
                <div class="new_menu_header">
                    <div class="font-weight-bold" onclick="location.href='/store.php?active=ALL'">
                        ALL
                    </div>
                </div>
            </div>


            <div class="pl-3 pr-0 border_top border-bottom head_2_wrap d-none" style="background:#fff;height:53px">
                <div class="new_menu_header_2">
                    <div>
                        메뉴 모아보기
                    </div>
                    <div>
                        <img onclick="openDownNew()" src="/img/icon/up_menu.png" alt="">
                    </div>

                </div>
            </div>

            <div class="new_menu_mobile pl-3 pr-3" style="background:#fff; display:none;">
                <div class="py-3">
                    <div class="fs-10 font-weight-bold">
                        <div class=" pb-2">
                            카테고리
                        </div>
                        <div class="cate_one_draw mb-2">
                            <div onclick="location.href='/store.php?active=ALL'" class="font-weight-bold py-2 border">
                                ALL
                            </div>
                        </div>
                        <div class="cate_one_draw2">

                        </div>
                    </div>

                    <div class="fs-10 mt-3 font-weight-bold">
                        <div class=" pb-2">
                            커뮤니티
                        </div>
                        <div class="cate_one_draw_comu mb-2">
                            <div onclick="location.href='/exhibition.php'" class="py-2 border">
                                EVENT
                            </div>
                            <div onclick="location.href='/contact.php'" class="py-2 border">
                                입점문의
                            </div>
                            <div onclick="location.href='/bestreview.php'" class="py-2 border">
                                베스트 리뷰
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="pc_none" style="height:110px;"></div> -->
    <!--
  <div id="mobileHeader">
    <svg xmlns="https://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list haamburger" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
    </svg>
    <i class="fa-solid fa-xmark closebtn mr-1 d-none" style="font-size:30px"></i>
  </div>
  <div id="mobileHeaderMenu">
    <ul class="p-0 text-center" id="sort_menu-wrap_m">
    </ul>
  </div>
  <div id="bodyCover" class="d-none"></div> -->

    <div class="d-none" id="popup">
        <div class="" id="popup_body">

        </div>
        <div class="bg-gray d-flex p-1 justify-content-between align-items-center popup_bottom">
            <div class="d-flex align-items-center">
                <input type="checkbox" name="" value="" id="day-ck" style="top:0px;">
                <label for="day-ck" class="mb-0 pointer ml-1">오늘하루 보지않기</label>
            </div>
            <span class="pointer" onclick="popupClose()">닫기</span>
        </div>
    </div>

    <!-- 사이드 따라다니는 메뉴 -->
    <style media="screen">
    .tooltip-inner {
        color: white;
        background-color: #747794;
    }

    .tooltip.bs-tooltip-top .arrow:before {
        border-top-color: #747794;
    }

    .tooltip.bs-tooltip-right .arrow:before {
        border-right-color: #747794;
    }

    .tooltip.bs-tooltip-bottom .arrow:before {
        border-bottom-color: #747794;
    }

    .tooltip.bs-tooltip-left .arrow:before {
        border-left-color: #747794;
    }

    #sidemenu-wrap {
        position: fixed;
        right: 0;
        bottom: 100px;
        background-color: white;
        z-index: 99999999;
        margin-top: -175px;
        border-top: 1px solid #EBECEF;
        border-left: 1px solid #EBECEF;
        border-bottom: 1px solid #EBECEF;
    }

    .sidemenu-item {
        width: 50px;
        height: 50px;
        text-align: center;
        padding-top: 9px;
    }

    .sidemenu-item.delivery {
        padding-top: 11px;
    }

    .sidemenu-item.border-bottom-1 {
        border-bottom: 1px solid #EBECEF;
    }

    .sidemenu-item img:hover {
        filter: none;
        -webkit-filter: grayscale(100%);
    }

    @media (max-width: 768px) {
        #sidemenu-wrap {
            display: none;
        }
    }

    .breadcrumb {
        float: right;
        padding-right: 0;
        margin-right: -10px;
    }

    .breadcrumb-item a {
        color: #999999;
    }

    .breadcrumb-item+.breadcrumb-item::before {
        content: ">";
    }

    .page-title {
        border-bottom: 1px solid #EBECEF;
        padding-bottom: 30px;
    }

    .review-popup-close {
        color: #fff;
        font-size: 22px;
        font-weight: bold;
        position: absolute;
        right: 10px;
        top: -35px;
        cursor: pointer;

    }

    .search_input_m {
        background: transparent;
        border: 0;
        border-bottom: 1px solid white;
        border-radius: 0;
        color: #fff;
        font-size: 15px !important;
    }

    .search_input_m::-webkit-input-placeholder {
        color: #fff;
    }

    .search_input_m:-ms-input-placeholder {
        color: #fff;
    }

    .search_input_m:focus {
        background: transparent;
        color: #fff;
        border-bottom: 1px solid white;
    }

    .menu_btns {
        display: none !important;
    }

    .menu_btns.show {
        display: inline-block !important;
    }

    .table_order th {
        border: 0 !important;
        border-top: 1px solid #000 !important;
        border-bottom: 1px solid #ddd !important;
        color: #000 !important;
        font-size: 12px !important;
        font-weight: 500 !important;
    }

    .table_order td {
        border: 0 !important;
        border-bottom: 1px solid #ddd !important;
    }

    .nodata_wrap {
        border: 0 !important;
    }
    </style>
    <div id="sidemenu-wrap">
        <!-- <div class="sidemenu-item border-bottom-1" data-btn="1" data-toggle="tooltip" data-placement="left" title="검색">
            <a href="#" onclick="focusSearch();">
                <img class="item-normal" src="/img/sidemenu/search-line.png">
                <img class="item-hover d-none" src="/img/sidemenu/search-line2.png">
            </a>
        </div>
        <div class="sidemenu-item border-bottom-1" data-btn="2" data-toggle="tooltip" data-placement="left"
            title="장바구니">
            <?php
            if ($isLogin == 1) {
                ?>
            <a href="/cart.php">
                <?php
            } else {
                ?>
                <a href="#" onclick="alert('로그인 후 이용가능합니다.');">
                    <?php
            }
            ?>
                    <img class="item-normal" src="/img/sidemenu/fa-solid_shopping-cart.png">
                    <img class="item-hover d-none" src="/img/sidemenu/fa-solid_shopping-cart2.png">
                </a>
        </div>
        <div class="sidemenu-item delivery border-bottom-1" data-btn="3" data-toggle="tooltip" data-placement="left"
            title="주문/배송 조회">
            <?php
            if ($isLogin == 1) {
                ?>
            <a href="/order_list.php">
                <?php
            } else {
                ?>
                <a href="/find_order.php">
                    <?php
            }
            ?>

                    <img class="item-normal" src="/img/sidemenu/mdi_truck-delivery.png">
                    <img class="item-hover d-none" src="/img/sidemenu/mdi_truck-delivery2.png">
                </a>
        </div>
        <div class="sidemenu-item border-bottom-1" data-btn="4" data-toggle="tooltip" data-placement="left"
            title="최근 본 상품">
            <a href="javascript:recentProductClick();">
                <img class="item-normal" src="/img/sidemenu/bx_time.png">
                <img class="item-hover d-none" src="/img/sidemenu/bx_time2.png">
            </a>
        </div> -->
        <div class="sidemenu-item border-bottom-1" data-btn="4" data-toggle="tooltip" data-placement="left"
            title="최근 본 상품">
            <a href="javascript:recentProductClick();">
                <img class="item-normal" src="/img/sidemenu/bx_time.png">
                <img class="item-hover d-none" src="/img/sidemenu/bx_time2.png">
            </a>
        </div>
        <div class="sidemenu-item border-bottom-1" data-btn="5" data-toggle="tooltip" data-placement="left"
            title="카카오톡 상담">
            <a href="#" id="kakao-talk-channel-chat-button"></a>
        </div>
        <div class="side_arrow side_top_btn sidemenu-item d-none" data-btn="6">
            <a href="javascript:goToTop();">
                <img class="item-normal" src="/img/sidemenu/mingcute_up-fill.png">
                <img class="item-hover d-none" src="/img/sidemenu/mingcute_up-fill2.png">
            </a>
        </div>
        <div class="side_arrow side_bottom_btn sidemenu-item" data-btn="7">
            <a href="javascript:goToBottom();">
                <img class="item-normal" src="/img/sidemenu/mingcute_down-fill.png">
                <img class="item-hover d-none" src="/img/sidemenu/mingcute_down-fill2.png">
            </a>
        </div>
    </div>

    <!-- 최근 본 상품 팝업 -->
    <style media="screen">
    #recent_product {
        width: 740px;
        border-radius: 10px;
        background: white;
        border: 1px solid #EBECEF;
    }
    </style>
    <!-- 	<div class="d-none" id="recent_product">
        <h6 class="jingray">최근 본 상품</h6>
        <div class="" id="recent_product_body"></div>
    </div>  -->

    <div class="d-none" id="recent_product">
        <!-- <h6 class="jingray">최근 본 상품</h6> -->

        <!-- 이미지로 교체 해야 됩니다  -->
        <div style="display: flex; padding-left:20px;">
            <!--<h6 style="font-size: 20px; font-weight: 900; padding-left: 20px; padding-top: 25px;">|</h6> -->
            <h6 style="font-size: 20px; font-weight: 900; padding : 25px 0 0 20px;">|</h6>
            <!-- <h4 class="jingray" style="padding-left : 5px; padding-top: 25px;">최근 본 상품</h4> -->
            <h4 class="jingray" style="padding : 25px 0 0 5px;">최근 본 상품</h4>
            <!-- <h6 style="padding-top: 25px; padding-left: 70%;"> -->
            <h6 style="padding : 25px 0 0 70%;">
                <span id="closeMarkBtn" style="font-size: 25px; font-weight: 900; cursor:pointer;">X</span>
            </h6>
        </div>
        <hr />
        <div style="margin: 0 0 20px 45px;" class="" id="recent_product_body"></div>
    </div>

    <div class="modal fade" id="search_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="margin:0 auto;">
            <div class="modal-content border-0" style="background:transparent">
                <div class="review-popup-close" style="right:1rem;top:-30px; color:#fff; position:absolute"
                    onclick="$('#search_modal').modal('hide')">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-center justify-content-center">
                        <input type="text" class="form-control sk_m search_input_m" id="sk_m" placeholder="검색어를 입력해보세요">
                        <i class="fas fa-search ml-2" style="font-size:17px; color:#fff;" onclick="Search()"></i>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
    <script type="text/javascript">
    var user_info = '<?php echo $user_info; ?>'; //로그인 유저 정보
    var active = '<?php echo $_GET['active']; ?>';

    var windowWidth = $(window).width();
    var img_cookies = [];

    function recentProductClick() {
        if ($('#recent_product').hasClass('d-none')) {
            $('#recent_product').removeClass('d-none');
        } else {
            $('#recent_product').addClass('d-none');
        }
    }

    function goToTop() {
        $([document.documentElement, document.body]).animate({
            scrollTop: 0
        }, 1000);
    }

    function goToBottom() {
        $([document.documentElement, document.body]).animate({
            scrollTop: document.body.scrollHeight
        }, 1000);
    }

    $(function() {
        $('.login').hide();

        if (user_info) {
            user_info = JSON.parse(user_info);
            loadSearch();
            $('.account-area').removeClass('d-none');
            $('.login').show();
            $('.user_name').html(user_info.u_name)
            $('.loginText').attr('onclick', "location.href='/logout.php'");
            $('.loginText').html('LOGOUT');
            $('.login_none2').removeClass('d-none');
            if (user_info.u_type != '카카오계정') {
                $("#kakaoOut").remove()
            }
            if (user_info.u_type == '네이버계정') {

            }
            $('.login_none').addClass('d-none');
        } else {
            $(".joinText").removeClass('d-none');
            $('.login_none2').remove();
        }



        $('.loginText').removeClass('d-none');

        if ($(window).width() < 950) {
            $("#search-wrap").remove();
            var str = `<div class="search-form d-flex align-items-center">
                            <input type="search" class="form-control form-control-sm sk_m" placeholder="검색어를 입력해보세요" id="sk_m" onkeyup="enterkey()">
                            <div class="search-btn text-center p-3 pointer" onclick="Search();">
                            <i class="fas fa-search" style="font-size:18px;"></i></div>
                        </div>`;
            //$("#search-wrap-li").append(str);
        } else {
            $("#menu-M-wrap").remove()
        }

        // console.log('ㅡㅡㅡ header READY');

        sortList();

        if (!getCookie('popup')) {
            $("#popup").removeClass('d-none')
            popupLoad()
        }

        if (user_info) {
            cartNum()
            wishNum()
            couponNum()
        }

        // console.log("sadfsda fsdaf s>>", window.location.href);
        setTimeout(function() {
            $.each($(".menu_btns"), function(i, v) {
                if ($(v).children('a').text() == active) {
                    $(v).children('a').addClass('font-weight-bold')
                }
            })
        }, 300)

        ///////cookie//////////////
        if (getCookie('img')) {
            img_cookies = JSON.parse(getCookie('img'))
        }


        $("#recent_product_body").html('');

        if (img_cookies.length == 0) {
            var imgStr = `<div class="" style="text-align: center; color: black;"><h6>조회한 상품이 없습니다</h6></div>`;
            $("#recent_product_body").append(imgStr);
        }

        if (img_cookies) {
            if (img_cookies.length > 5) {
                img_cookies.pop()
            }
            //최근 본 상품 그리는 부분
            for (let i = 0; i < img_cookies.length; i++) {

                if (img_cookies[i].p_name) {
                    let imgStr =
                        //                    `<div class="img_list pointer border my-1" onclick="location.href='/product_detail.php?p_seq=${img_cookies[i].p_seq}'" style="background-image: url('${img_cookies[i].img}')"></div>`;
                        `<table class="recente_table${img_cookies[i].p_seq} position-relative mt-3 w-100">
                    <tbody>
                        <tr>
                            <td class="position-relative" style="height:34px;" colspan="3">
                                <div class="pointer close_btn_recent" onclick="deleteRecent(${img_cookies[i].p_seq});">
                                    <i class="fa-solid fa-xmark"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center" rowspan="2"><img class="rec-product-pop-img" src='${img_cookies[i].img}' /></td>
                            <td class="rec-product-pop-title">${img_cookies[i].p_name}
                                <div>
                                    ${img_cookies[i].p_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")} 원
                                </div>
                            </td>
                            <td class="rec-product-pop-td-btn text-center">
                                <div class="rec-product-pop-span-btn mb-1" onclick="location.href='/product_detail.php?p_seq=${img_cookies[i].p_seq}'">상세보기</div>
                                <div class="rec-product-pop-span-btn" onclick="window.open('/product_detail.php?p_seq=${img_cookies[i].p_seq}')">새창보기</div>
                            </td>
                        </tr>
                    </tbody>
                    </table>`;
                    $("#recent_product_body").append(imgStr)
                }


            }
        } else {
            $("#recent_product").addClass('d-none')
        }
        ///////cookie end//////////////

    });


    $("#closeMarkBtn").on("click", function() {
        $('#recent_product').addClass('d-none');
    });

    $("#mobileHeader").on("click", function() {
        if (!$("#mobileHeaderMenu").hasClass("on")) {
            $("#mobileHeaderMenu").addClass("on")
            $("#bodyCover").removeClass("d-none")
        } else {
            $("#mobileHeaderMenu").removeClass("on")
            $("#bodyCover").addClass("d-none")
        }
    })

    function Ready() {
        alert("준비중..")
    }

    function goCompany() {
        // location.href="/company.php";
        alert('준비중..');
    }

    //최근본상품 삭제
    function deleteRecent(seq) {
        if (confirm('최근보신 상품을 지우겠습니까?')) {
            $('.recente_table' + seq).remove();
            const seqInt = parseInt(seq, 10);

            const filteredData = img_cookies.filter(item => parseInt(item.p_seq, 10) !== seqInt);

            if (filteredData.length == 0) {
                let noStr = `<div class="" style="text-align: center; color: black;"><h6>조회한 상품이 없습니다</h6></div>`
                $("#recent_product_body").html(noStr);
            }
            setCookie('img', JSON.stringify(filteredData), 1);
        }

    }

    function goShop() {
        location.href = "/shop_main.php";
    }

    function goIndex() {
        location.href = "/index.php";
    }

    function gomypage() {
        if (!user_info.u_seq) {
            location.href = "/login.php";
        } else {
            location.href = "/mypage.php";
        }
    }
    //메인 카테고리 그리눈 부분
    function sortList() {
        $.ajax({
            url: SERVER_AP + "/admin/common/sort",
            type: "post",
            cache: false,
            async: false,
            data: {
                table: 'sort',
            },
            success: function(data) {
                //console.log('BEST, NEW,  SALE 그리는 부분')
                $.each(data, function(i, v) {
                    if (i == 0) {
                        var str =
                            `<div class="py-2 pl-2 pr-4 d-inline-block menu_btns"><a style="font-size:15px; color:black"
                            class="pointer hover_text" onclick="sortBtn(${v.st_seq}, '${v.st_name}')">${v.st_name}</a></div>`;

                        var str2 = `
                            <div>
                                <div  onclick="sortBtn(${v.st_seq},'${v.st_name}')" class="cate_title pointer">
                                ${v.st_name}
                                </div>
                            </div>
                           `

                    } else {
                        var str =
                            `<div class="py-2 px-4 d-inline-block menu_btns">
                                <a style="font-size:15px; color:black" class="pointer hover_text" onclick="sortBtn(${v.st_seq},
                                    '${v.st_name}')">${v.st_name}</a>
                            </div>`;
                        var str2 = `
                            <div>
                                <div  onclick="sortBtn(${v.st_seq},'${v.st_name}')" class="cate_title pointer">
                                ${v.st_name}
                                </div>
                            </div>
                           `
                    }

                    $("#menu-PC").append(str)
                    $(".draw_new_cate").append(str2)
                    var mstr =
                        `<li><a onclick="sortBtn(${v.st_seq}, '${v.st_name}')">${v.st_name}</a></li>`
                    $("#sort_menu-wrap-M").append(mstr)

                    var mstr_new =
                        `<div class="border font-weight-bold py-2" onclick="sortBtn(${v.st_seq}, '${v.st_name}')">${v.st_name}</div>`
                    $(".cate_one_draw").append(mstr_new)


                    var mstr_new2 =
                        `<div  onclick="sortBtn(${v.st_seq}, '${v.st_name}')" class="font-weight-bold">
                            ${v.st_name}
                        </div>`
                    $(".new_menu_header").append(mstr_new2)

                    var mstr2 =
                        `<li class="py-3"><span onclick="sortBtn(${v.st_seq}, '${v.st_name}')">${v.st_name}</span></li>`
                    $("#sort_menu-wrap_m").append(mstr2)
                })

                LargeSortM();
                LargeSort();
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }

    function sortBtn(st_seq, st_name) {
        if (st_name == 'NEW') {
            location.href = '/store.php?type=' + st_name + '&active=' + st_name + ''
        } else {
            location.href = '/store.php?st_seq=' + st_seq + '&active=' + st_name + ''
        }
    }

    $('.search_btn_icon').click(function() {
        $('.search_list_wrap').toggleClass('d-none');
        $('.search_btn_icon').addClass('d-none');
    })


    function Search() {
        if ($("#sk").hasClass('w-1px')) {
            $("#sk, .search-btn").removeClass('bg-0 border-0 w-1px opa-0')
            $("#sk").focus()
        } else {
            if ($(window).width() < 768) {
                if (!$("#sk_m").val()) {
                    alert("검색어를 입력해주세요.")
                } else {
                    if (user_info) {
                        insertSearch();
                    } else {
                        location.href = '/store.php?sk=' + $("#sk_m").val()
                    }

                }


            } else {
                if (!$("#sk").val()) {
                    alert("검색어를 입력해주세요.")
                } else {
                    if (user_info) {
                        insertSearch();
                    } else {
                        location.href = '/store.php?sk=' + $("#sk").val()
                    }

                }
            }

        }
    }

    function insertSearch() {
        let obj = new Object();
        obj.text = $("#sk").val();
        obj.date = currentDate();
        obj.u_seq = user_info.u_seq;
        $.ajax({
            url: SERVER_AP + "/admin/common/insert",
            type: "post",
            cache: false,
            data: {
                table: 'search',
                obj: obj,
            },
            success: function(data) {
                //location.href = "/wishlist.php"
                location.href = '/store.php?sk=' + $("#sk").val()
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }

    function Search2(txt) {
        location.href = '/store.php?sk=' + txt
    }

    function loadSearch() {

        $.ajax({
            url: SERVER_AP + "/admin/common/recent_search",
            type: "post",
            cache: false,
            data: {
                u_seq: user_info.u_seq,
            },
            success: function(data) {
                console.log('ddd', data);
                if (data.length != 0) {
                    $('.recent_text_wrap').html('');
                    $.each(data, function(i, v) {
                        let str = `
                                <div class="my-3 d-flex align-items-center">
                                    <img src="img/icon/search-line.png" alt="logo" class="pointer" onclick="Search2('${v.text}')">
                                    <div class="mx-3">
                                        ${v.text}
                                    </div>
                                    <i onclick="deleteSearch(${v.seq})" class="fa-solid pointer fa-xmark ml-auto"></i>
                                </div>
                                `
                        $('.recent_text_wrap').append(str);
                    })
                }

            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }


    function deleteSearch(dseq) {
        if (confirm('최근 검색어를 지우시겠습니까?')) {
            $.ajax({
                url: SERVER_AP + "/admin/common/delete",
                type: "post",
                cache: false,
                data: {
                    field: 'seq',
                    seq: dseq,
                    table: 'search'
                },
                success: function(data) {
                    loadSearch();

                },
                error: function(request, status, error) {
                    console.log(error);
                }
            });
        }

    }
    Kakao.init('f4a147eb3472a6ed818e355288e4d0c4');

    function enterkey() {

        $('.recente_search_wrap').removeClass('d-none');
        if (window.event.keyCode == 13) {
            Search()
        }
    }

    // $("#sk").focusout(function() {
    //     setTimeout(() => {
    //         if (!$("#sk").hasClass('w-1px')) {
    //             $("#sk").addClass('border-0 w-1px bg-0 opa-0')
    //             $(".search-btn").addClass('bg-0 border-0')
    //         }
    //     }, 100)
    // })

    function setCookie(name, value, exp) {
        var date = new Date();
        date.setTime(date.getTime() + exp * 24 * 60 * 60 * 1000);
        document.cookie = name + '=' + value + ';expires=' + date.toUTCString() + ';path=/';
    }

    function getCookie(name) {
        var value = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
        return value ? value[2] : null;
    }

    function popupLoad() {
        $.ajax({
            url: SERVER_AP + "/main/popup",
            type: "post",
            cache: false,
            data: {},
            success: function(data) {
                $.each(data, function(i, v) {
                    var str =
                        `<div class="img_list img_list_${v.b_seq}" style="background-image: url('${v.b_img}'); height:200px"></div>`;
                    $("#popup_body").append(str)

                    if (v.b_link) {
                        $(`.img_list_${v.b_seq}`).addClass("pointer")
                        $(`.img_list_${v.b_seq}`).attr("onclick", `location.href='${v.b_link}'`)
                    }
                })

                $('#popup_body').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    draggable: true,
                });
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }

    function popupClose() {
        if ($("input[id=day-ck]").prop('checked') === true) {
            setCookie('popup', true, 1);
        }
        $('#popup').remove()
    }

    Kakao.Channel.createChatButton({
        container: '#kakao-talk-channel-chat-button',
        channelPublicId: '_szgExj' // 카카오톡 채널 홈 URL에 명시된 id로 설정합니다.
    });
    $("#kakao-talk-channel-chat-button").find('img').attr('src', '/img/sidemenu/ri_kakao-talk-fill.png');
    $("#kakao-talk-channel-chat-button").find('img').mouseover(function() {
        $("#kakao-talk-channel-chat-button").find('img').attr('src', '/img/sidemenu/ri_kakao-talk-fill2.png');
    });
    $("#kakao-talk-channel-chat-button").find('img').mouseleave(function() {
        $("#kakao-talk-channel-chat-button").find('img').attr('src', '/img/sidemenu/ri_kakao-talk-fill.png');
    });
    // 카카오톡 채널 1:1채팅 버튼을 생성합니다.
    // if ($(window).width() > 768) {
    //     Kakao.Channel.createChatButton({
    //         container: '#kakao-talk-channel-chat-button',
    //         channelPublicId: '_szgExj' // 카카오톡 채널 홈 URL에 명시된 id로 설정합니다.
    //     });
    // } else {
    //     Kakao.Channel.createChatButton({
    //         container: '#kakao-talk-channel-chat-button-m',
    //         channelPublicId: '_szgExj' // 카카오톡 채널 홈 URL에 명시된 id로 설정합니다.
    //     });
    //     $("#kakao-talk-channel-chat-button-m").find('img').attr('src', '/img/kakaok_chat.png')
    //     $("#kakao-talk-channel-chat-button-m").find('img').css({
    //         "width": "40px"
    //     })
    // }

    function LargeSort() {
        $.ajax({
            url: SERVER_AP + "/admin/common/all-ls",
            type: "post",
            cache: false,
            data: {
                table: 'large_sort',
            },
            success: function(data) {
                //console.log('KITCHEN, BATH 그리는 부분')
                var str =
                    `<div class="p-3 py-3 pl-4 menu-category-menu-menu menu_btns"><a href="/store.php?active=ALL">ALL</a></div>`;
                var mstr2 =
                    `<li class="py-3"><span onclick="location.href="/store.php?active=ALL"">ALL</span></li>`


                $("#sort_menu-wrap_m").append(mstr2);


                //console.log('ALL 그리는 부분')
                $("#menu-PC").append(str)
                $.each(data, function(i, v) {
                    var str = `<div class="p-3 py-3 pl-4 menu-category-menu position-relative menu_btns">
                                    <a href="/store.php?ls_seq=${v.ls_seq}&active=${v.ls_name}">${v.ls_name}</a>
                                    <div class="menu-category-menu-menu-menu menu-category-menu-menu-menu${v.ls_seq}">
                                    </div>
                                </div>`;
                    $("#menu-PC").append(str)

                    var str2 = `
                            <div>
                                <div class="cate_title">
                                    <a href="/store.php?ls_seq=${v.ls_seq}&active=${v.ls_name}">${v.ls_name}</a>
                                </div>
                                <div class="mt-2 menu-category-menu-menu-menu-new${v.ls_seq}">
                                </div>
                            </div>
                    `

                    var str2 = `
                            <div>
                                <div class="cate_title">
                                    <a href="/store.php?ls_seq=${v.ls_seq}&active=${v.ls_name}">${v.ls_name}</a>
                                </div>
                                <div class="mt-2 menu-category-menu-menu-menu-new${v.ls_seq}">
                                </div>
                            </div>
                    `

                    var new_str_menu_m =
                        `<div onclick="location.href="/store.php?active=?ls_seq=${v.ls_seq}&active=${v.ls_name}"" class="font-weight-bold py-2 border">
                        ${v.ls_name}
                    </div>`
                    if (i < 2) {
                        $(".draw_new_cate").append(str2)
                    } else {
                        $(".draw_new_cate_2").append(str2)
                    }


                    MiddleSort(v.ls_seq, v.ls_name)
                })


                var mstr22 =
                    `<li class="py-3"><span onclick="location.href='/login.php'">LOGIN</span></li>
                        <li class="py-3"><span onclick="location.href='/registerType.php'">JOIN</span></li>
                        <li class="py-3"><span onclick="location.href='/exhibition.php?active=EVENT'">EVENT</span></li>
                        <li class="py-3"><span onclick="location.href='/contact.php?active=입점문의'">입점문의</span></li>
                        <li class="py-3"><span onclick="location.href='/bestreview.php?active=베스트리뷰'">베스트리뷰</span></li>`
                $("#sort_menu-wrap_m").append(mstr22)

                var menustr =

                    `<div class="d-inline-block py-2 px-4 af-show menu_btns d-none" style="font-size:15px;"><a style="color:black;" href="exhibition.php?active=EVENT" class=" hover_text">EVENT</a></div>
                <div class="d-inline-block py-2 px-4 af-show menu_btns d-none" style="font-size:15px;"><a style="color:black;" href="contact.php?active=입점문의" class=" hover_text">입점문의</a></div>
                <div class="d-inline-block py-2 px-4 af-show menu_btns d-none" style="font-size:15px;"><a style="color:black;" href="bestreview.php?active=베스트리뷰" class=" hover_text">베스트리뷰</a></div>`;

                $('#menu-PC').append(menustr);

                console.log('EVENT, 입점문의, 베스트리뷰 그리는 부분')
                $('.menu_btns').addClass('show');
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }

    function MiddleSort(ls_seq, ls_name) {
        var obj = new Object();
        obj.ls_seq = ls_seq;
        $.ajax({
            url: SERVER_AP + "/admin/common/condition",
            type: "post",
            cache: false,
            data: {
                table: 'middle_sort',
                common: obj,
            },
            success: function(data) {
                //console.log('좌측메뉴 눌렀을때 나오는 서브 메뉴 그리는 부분 ')
                $.each(data, function(i, v) {
                    var str =
                        `
                        <div class="p-3 py-3 pl-4">
                            <a href="/store.php?ls_seq=${ls_seq}&&ms_seq=${v.ms_seq}&&active=${ls_name}">${v.ms_name}</a>
                        </div>
                        `;
                    var str2 =
                        `
                        <div class="menu_li_">
                            <a href="/store.php?ls_seq=${ls_seq}&&ms_seq=${v.ms_seq}&&active=${ls_name}">${v.ms_name}</a>
                            <i class="fa-solid item_arrow item_1 fa-chevron-right"></i>
                            <div class=" item_arrow item_2 t"> ㅡ </div>
                        </div>
                        `;

                    $(".menu-category-menu-menu-menu-new" + v.ls_seq).append(str2);
                    $(".menu-category-menu-menu-menu" + v.ls_seq).append(str);
                })
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }

    function LargeSortM() {
        $.ajax({
            url: SERVER_AP + "/admin/common/all-ls",
            type: "post",
            cache: false,
            async: false,
            data: {
                table: 'large_sort',
            },
            success: function(data) {
                $.each(data, function(i, v) {
                    if (i == 0) {
                        var str11 =
                            `<li><a class="bg-white" href="/store.php?active=ALL">ALL</a></li>`
                        $("#menu-M-menu").prepend(str11);
                    }
                    var str = //html
                        `<a href="/store.php?ls_seq=${v.ls_seq}&active=${v.ls_name}">
                            <div class="draw_cate_title menu_active${v.ls_seq}">
                                <span class="down_cate clickcate${v.ls_seq} w-100" data-val="${v.ls_seq}">${v.ls_name}</span>
                            </div>
                            <div class="draw_ms_data${v.ls_seq} textDeco"></div>
                        </a>`;

                    let new_mobile_str = `
                            <div onclick="location.href="/store.php?ls_seq=${v.ls_seq}&active=${v.ls_name}"" class="py-2 border">
                                ${v.ls_name}
                            </div>`

                    let new_mobile_str2 = `
                            <div onclick="location.href="/store.php?ls_seq=${v.ls_seq}&active=${v.ls_name}"" class="font-weight-bold">
                                ${v.ls_name}
                            </div>`


                    $('.new_menu_header').append(new_mobile_str2)
                    $('.cate_one_draw2').append(new_mobile_str)
                    $("#menu-M-menu").append(str);

                    if (data.length == i + 1) {
                        var str22 = /*html*/`
                            <li><a class="bg-white" href="exhibition.php">EVENT</a></li>
                            <li><a class="bg-white" href="contact.php">입점문의</a></li>
                            <li><a class="bg-white" href="bestreview.php">베스트리뷰</a></li>
                        `;

                        $("#menu-M-menu").append(str22);
                    }
                    MiddleSortM(v.ls_seq)
                })

                let lastImgStr = `<img onclick="openDownNew()" src="/img/icon/down_menu.png" alt="">`
                $('.new_menu_header').append(lastImgStr)
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }

    function MiddleSortM(ls_seq) {
        var obj = new Object();
        obj.ls_seq = ls_seq;
        $.ajax({
            url: SERVER_AP + "/admin/common/condition",
            type: "post",
            cache: false,
            async: false,
            data: {
                table: 'middle_sort',
                common: obj,
            },
            success: function(data) {

                if (data.length == 0) {
                    $('.clickcate' + ls_seq).attr('onclick', 'location.href="/store.php?ls_seq=' + ls_seq +
                        '"')
                } else {
                    $.each(data, function(i, v) {
                        var str = '<div class="pl-3"><a class="menu_active_ms' + v.ms_seq +
                            '" href="/store.php?ls_seq=' + ls_seq + '&&ms_seq=' + v.ms_seq + '">' +
                            v.ms_name + '</a></div>';
                        $(".draw_ms_data" + v.ls_seq).append(str);
                        var dd =
                            `<i class="fa-sharp fa-solid fa-angle-down change_arrow${v.ls_seq}"></i>`
                        if (i == 1) {
                            $('.add_arrow' + v.ls_seq).append(dd);
                        }

                    })
                }
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }

    $("body").on("mousewheel", function(e) {
        var wheel = e.originalEvent.wheelDelta;

        if (jQuery(window).scrollTop() == 0) {
            //$('.head_Box').removeClass('opaWhite');
        } else {
            //$('.head_Box').addClass('opaWhite');
        }
    });

    $('#bodyCover').click(function() {
        $('#bodyCover').addClass('d-none');
        $('#mobileHeaderMenu').removeClass('on');
    })
    $('.haamburger').click(function() {
        console.log('탐?');
        $(this).addClass('d-none');
        $('.closebtn').removeClass('d-none');
    })

    $('.closebtn').click(function() {
        $(this).addClass('d-none');
        $('.haamburger').removeClass('d-none');
    })


    $(document).on("click", ".navbarToggler", function() {
        $("#body_cover").removeClass("d-none")
    })

    $(document).on("click", ".cross-wrap", function() {
        $("#body_cover").addClass("d-none")
    })

    $(document).on("click", "#body_cover", function() {
        $(".classy-menu").removeClass("menu-on")
        $(".navbarToggler").removeClass("active")
        $("#body_cover").addClass("d-none")
    })

    // $(document).on('click','.down_cate', function(){
    // 	var seq = $(this).attr('data-val');
    // 	if($('.change_arrow'+seq).hasClass('fa-angle-down')){
    // 		$('.change_arrow'+seq).addClass('fa-angle-up')
    // 		$('.change_arrow'+seq).removeClass('fa-angle-down')
    // 	}else{
    // 		$('.change_arrow'+seq).addClass('fa-angle-down')
    // 		$('.change_arrow'+seq).removeClass('fa-angle-up')
    // 	}
    // 	$('.add_arrow'+seq).toggleClass()
    //
    // 	$('.draw_ms_data'+seq).toggleClass('d-none');
    // })


    function wishNum() {
        $.ajax({
            url: SERVER_AP + '/wishlist/list',
            type: "post",
            cache: false,
            data: {
                u_seq: user_info.u_seq,
            },
            success: function(data) {
                $(".wish_quantity").text(data.length)
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }

    function cartNum() {
        var obj = new Object();
        obj.u_seq = user_info.u_seq;
        $.ajax({
            url: SERVER_AP + "/common/condition",
            type: "post",
            cache: false,
            data: {
                table: 'cart',
                common: obj,
            },
            success: function(data) {
                $(".cart_quantity").text(data.length)
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }

    function couponNum() {
        var obj = new Object();
        obj.u_seq = user_info.u_seq;
        $.ajax({
            url: SERVER_AP + "/common/condition",
            type: "post",
            cache: false,
            data: {
                table: 'user_coupon',
                common: obj,
            },
            success: function(data) {
                $(".coupon_quantity").text(data.length)
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }


    const hambergerImage = document.getElementById('hamberger_new');
    const closeImage = document.getElementById('close_new');

    hambergerImage.addEventListener('click', () => {
        hambergerImage.classList.add('d-none');
        hambergerImage.classList.add('fade-out');
        closeImage.classList.remove('d-none');
        closeImage.classList.add('fade-in');
        $('.new_menu_box').slideToggle();
    });

    closeImage.addEventListener('click', () => {
        closeImage.classList.remove('fade-in');
        closeImage.classList.add('d-none');
        hambergerImage.classList.remove('fade-out');
        hambergerImage.classList.remove('d-none');
        $('.new_menu_box').slideToggle();
    });

    function checkVisible(element, check = 'above') {
        const viewportHeight = $(window).height(); // Viewport Height
        const scrolltop = $(window).scrollTop(); // Scroll Top
        const y = $(element).offset().top;
        const elementHeight = $(element).height();

        if (scrolltop > elementHeight) {
            $('.fixCheck').addClass('fixed_box_2')
        } else {
            $('.fixCheck').removeClass('fixed_box_2')
        }
    }

    // 리소스가 로드 되면 함수 실행을 멈출지 말지 정하는 변수
    let isVisible = false;

    // 이벤트에 등록할 함수
    const func = function() {
        if (!isVisible && checkVisible('.fixCheck')) {
            alert("엘리먼트 보임 !!");

            isVisible = true;
        }

    }

    // 스크롤 이벤트 등록
    window.addEventListener('scroll', func);

    function openDownNew() {
        $(".new_menu_mobile").slideToggle();
        $('.head_1_wrap').toggleClass('d-none');
        $('.head_2_wrap').toggleClass('d-none');
    }

    $('.sidemenu-item').mouseover(function() {
        var e = $(this);
        $(e).find('.item-normal').addClass('d-none');
        $(e).find('.item-hover').removeClass('d-none');
    });
    $('.sidemenu-item').mouseleave(function() {
        var e = $(this);
        $(e).find('.item-normal').removeClass('d-none');
        $(e).find('.item-hover').addClass('d-none');
    });

    function focusSearch() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
        $('#sk').focus();
    }
    let prevScrollPos = $(window).scrollTop();
    $(window).scroll(function() {
        // Do something when the user scrolls
        const currentScrollPos = $(window).scrollTop();
        const windowHeight = $(window).height();
        const documentHeight = $(document).height();

        let scrollCheck = false;
        if (currentScrollPos === 0) {
            // User scrolled to the top
            $('.side_top_btn').addClass('d-none');
            scrollCheck = true;
        }

        if (currentScrollPos + windowHeight === documentHeight) {
            // User scrolled to the bottom
            $('.side_bottom_btn').addClass('d-none');
            scrollCheck = true;
        }

        if (!scrollCheck) {
            $('.side_arrow').removeClass('d-none');
        }


        prevScrollPos = currentScrollPos;
    });

    function closeRecent() {
        $('.recente_search_wrap').addClass('d-none');
    }

    $('body').click(function(el) {

        if ($(el.target).closest('#sk').length > 0) {
            // If the clicked element or any of its parents have the id 'sk'
            // do nothing
        } else {
            $('.recente_search_wrap').addClass('d-none');
        }

        if ($(el.target).closest('#recent_product').length > 0) {
            // If the clicked element or any of its parents have the id 'recent_product'
            // do nothing
        } else {
            $('#recent_product').addClass('d-none');
        }
    })
    </script>