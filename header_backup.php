<?
session_start();
if(isset($_SESSION['user_info'])):
	$isLogin = 1;
	$user_info = $_SESSION['user_info'];
endif;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>라이프스타일 플랫폼, 리닷</title>

    <!-- Favicon  -->
    <script src="/js/pages/shop_header/shop_header.js"></script>
    <link rel="icon" href="img/common/bncofavicon.png">

    <!-- CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/common.css" rel="stylesheet">
    <link href="/css/header.css" rel="stylesheet">
    <link href="/css/footer.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script src="/js/all.js"></script>
    <script src="/js/common.js"></script>
    <link rel="stylesheet" href="css/temp/style.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/temp/css/index/index.css">
    <link rel="stylesheet" href="css/pages/shop_header/common.css">
    <!-- JS -->

    <script type="text/javascript">
    // 안드로이드 우측 버튼 비활성
    $(document).bind("contextmenu", function(e) {
        return false;
    });
    </script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

</head>
<style media="screen">
/* .hover_text:hover{
		font-weight: bold;
		font-size: 16px !important;
		text-decoration: none;
	} */

body {
    -webkit-touch-callout: none;
}

.flexcenter {
    display: flex;
    align-items: center;

}

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

.classycloseIcon .cross-wrap {
    top: 10px;
    float: right;
}

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
    padding-bottom: 100% !important;
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
}

@media (max-width:540px) {

    #recent_product,
    #popup {
        display: none;
        ㅁ
    }
}

/* 모바일 화면 */
@media (max-width:767px) {

    #kakao-talk-channel-chat-button,
    #kakao-talk-channel-chat-button-m {
        position: fixed;
        z-index: 11;
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
    width: 300px;
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
    width: 300px;
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
</style>

<body>
    <div class="head_Box">
        <header>
            <img src="img/page/header/logo02.png" alt="logo" class="pointer" onclick="location.href='/'">
            <ul class="flexcenter">
                <li><span class="loginText" onclick="location.href='/login.php'">LOGIN</span></li>
                <li class="login_none"><span onclick="location.href='/registerType.php'">JOIN</span></li>
                <li class="login_none2 d-none"><span onclick="gomypage()">MYPAGE</span></li>
                <li class="login_none2 d-none cart-area pr-1">
                    <div class="cart--btn" onclick="location.href='/cart.php'"><i class="fas fa-shopping-cart"></i>
                        <span class="cart_quantity">0</span></div>
                </li>
                <!-- <li class="search_btn_icon">
					<span><i class="fas fa-search"></i></span>
				</li> -->
                <li class="search_list_wrap pl-0">
                    <div class="search-form d-flex align-items-center" id="search-wrap" style="position:relative;">
                        <input type="search" class="form-control bg-0 w-1px border-0 opa-0" placeholder="검색어입력" id="sk"
                            onkeyup="enterkey()" style="border-radius:1.25rem; padding-left:20px; transition:0.4s;">
                        <div class="search-btn form-control col-2 text-center bg-0 border-0"
                            style="position:absolute; top:0; right:0; border-radius:0 1.25rem 1.25rem 0; transition:0.4s;">
                            <i class="fas fa-search pointer" onclick="Search();"></i></div>
                    </div>
                </li>
                <!-- <li><span onclick="location.href='/introduce.php'">COMPANY</span></li>
			  <li><span onclick="goShop();">SHOP</span></li>
			  <li><span onclick="location.href='/contact.php'">CONTACT US</span></li> -->
            </ul>
        </header>
        <div class="sub_header">
            <div class="sub_border">
                <div id="menu-PC" style="height:70.5px;">

                    <div class="d-inline-block" id="sort_menu-wrap">
                        <!-- <div class="py-2 px-4 d-inline-block">신상품</div> -->
                    </div>
                    <div class=" py-2  mr-2" style="font-size:15px;" id="menu-category"></div>


                    <!-- <div class="d-inline-block py-2 px-4" style="font-size:20px;"><a href="/" class="font-weight-normal">메인페이지이동</a></div> -->
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="bigshop-main-menu pc_none">
        <div class="container px-0">
            <div class="pl-3 classy-nav-container breakpoint-off">
                <nav class="classy-navbar" id="bigshopNav">

                    <!-- Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Nav Brand -->
                    <a href="/" class="nav-brand d-none" id="m_he_img"><img src="img/page/header/logo01.png" alt="logo"
                            style="width: 45px;"></a>

                    <div class="d-flex align-items-center">
                        <div id="body_cover" class="d-none"></div>
                        <!-- Menu -->
                        <div class="classy-menu ml-auto" id="menu-M-wrap">
                            <!-- Close -->
                            <div class="classycloseIcon" style="width:90%; overflow:hidden;">
                                <img src="img/page/header/logo02.png" onclick="location.href='/'" alt="menu1">
                                <div class="cross-wrap d-inline-block"><span class="top"></span><span
                                        class="bottom"></span></div>
                            </div>

                            <div class="classynav" id="menu-M">
                                <ul>
                                    <li id="search-wrap-li" class="p-2">

                                    </li>
                                    <div class="d-flex align-items-center justify-content-center py-2 px-4">
                                        <img src="/img/login_icon.png" alt="" style="width:30%;" class="login_none"
                                            onclick="location.href='login.php'">
                                        <img src="/img/signup_icon.png" alt="" style="width:30%;" class="login_none"
                                            onclick="location.href='register.php'">
                                        <img src="/img/mypage_icon.png" alt="" style="width:30%;" class="login_none2"
                                            onclick="location.href='mypage.php'">
                                    </div>

                                    <hr>

                                    <li>
                                        <a class="d-flex justify-content-between">
                                            <span>고객센터 031-891-0610</span>
                                            <img src="/img/phone_icon.png" alt="">
                                        </a>
                                    </li>

                                    <div class="" id="sort_menu-wrap-M">

                                    </div>

                                    <div class="" id="menu-M-menu">

                                    </div>
                                    <!-- <li><a class="bg-white" href="exhibition.php">EVENT</a></li>
									<li><a class="bg-white" href="contact.php">입점문의</a></li>
									<li><a class="bg-white" href="communitiy.php">공지사항</a></li> -->
                                    <!-- <li><a href="/">메인페이지이동</a></li> -->
                                </ul>
                            </div>
                        </div>

                        <div class="hero_meta_area ml-md-5 d-flex align-items-center pl-3 justify-content-end">
                            <!-- Search -->
                            <div class="search-area">

                            </div>
                            <div class="wishlist-area">
                                <div class="login_none position-relative mr-3" onclick="location.href='/login.php'">
                                    LOGIN</div>
                            </div>

                            <div class="wishlist-area">
                                <div class="login_none position-relative mr-3"
                                    onclick="location.href='/registerType.php'">JOIN</div>
                            </div>
                            <? if(isset($_SESSION['user_info'])): ?>
                            <!-- Wishlist -->
                            <div class="wishlist-area">
                                <div class="wishlist-btn position-relative" onclick="location.href='/wishlist.php'"><i
                                        class="fas fa-heart mr-0"></i><span class="wish_quantity">0</span></div>
                            </div>

                            <!-- Cart -->
                            <div class="cart-area">
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
                            <div class="account-area pr-2 d-none">
                                <div class="user-thumbnail">
                                    <i class="fas fa-user"></i>
                                    <!-- <img src="img/bg-img/user.png" alt=""> -->
                                </div>
                                <ul class="user-meta-dropdown">
                                    <li class="user-title login font-weight-normal">
                                        <span class="font-weight-bold user_name"></span>님을 환영합니다.
                                    </li>
                                    <li class="login"><a href="#" onclick="location.href='mypage.php'">마이페이지</a></li>
                                    <!-- <li class="login"><a href="#" onclick="alert('준비중 입니다')">My Account</a></li>
									<li class="login"><a href="#" onclick="alert('준비중 입니다')">Orders List</a></li> -->
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
                                </ul>
                            </div>
                        </div>

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
        </div>
    </div>
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

    <div class="text-center" id="recent_product">
        <h6 class="jingray">최근본상품</h6>
        <div class="" id="recent_product_body">

        </div>
        <div class="mt-3" id="kakao-talk-channel-chat-button"></div>
    </div>

    <div class="" id="kakao-talk-channel-chat-button-m"></div>

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

    <script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
    <script type="text/javascript">
    var user_info = '<?php echo $user_info; ?>'; //로그인 유저 정보
    var img_cookies = []
    $(function() {
        $('.login').hide();
        if (user_info) {
            user_info = JSON.parse(user_info);
            console.log(user_info);
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
            $('.login_none2').remove();
        }

        if ($(window).width() < 950) {
            $("#search-wrap").remove();
            var str = `<div class="search-form d-flex align-items-center">
							<input type="search" class="form-control form-control-sm" placeholder="검색어입력" id="sk" onkeyup="enterkey()">
							<div class="search-btn text-center p-3 pointer" onclick="Search();"><i class="fas fa-search"></i></div>
						</div>`;
            $("#search-wrap-li").append(str);
        } else {
            $("#menu-M-wrap").remove()
        }

        // console.log('ㅡㅡㅡ header READY');

        sortList();

        if (!getCookie('popup')) {
            $("#popup").removeClass('d-none')
            popupLoad()
        }

        ///////cookie//////////////
        if (getCookie('img')) {
            img_cookies = JSON.parse(getCookie('img'))
        }
        if (img_cookies) {
            if (img_cookies.length > 3) {
                img_cookies.pop()
            }
            for (let i = 0; i < img_cookies.length; i++) {
                let imgStr =
                    `<div class="img_list pointer border my-1" onclick="location.href='/product_detail.php?p_seq=${img_cookies[i].p_seq}'" style="background-image: url('${img_cookies[i].img}')"></div>`;
                $("#recent_product_body").append(imgStr)
            }
        } else {
            $("#recent_product").addClass('d-none')
        }
        ///////cookie end//////////////
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
                $.each(data, function(i, v) {
                    if (i == 0) {
                        var str =
                            `<div class="py-2 pl-2 pr-4 d-inline-block"><a style="font-size:15px; color:black" class="pointer hover_text" onclick="sortBtn(${v.st_seq}, '${v.st_name}')">${v.st_name}</a></div>`;

                    } else {
                        var str =
                            `<div class="py-2 px-4 d-inline-block"><a style="font-size:15px; color:black" class="pointer hover_text" onclick="sortBtn(${v.st_seq}, '${v.st_name}')">${v.st_name}</a></div>`;
                    }

                    $("#sort_menu-wrap").append(str)

                    var mstr = `<li><a onclick="sortBtn(${v.st_seq})">${v.st_name}</a></li>`
                    $("#sort_menu-wrap-M").append(mstr)
                    var mstr2 =
                        `<li class="py-3"><span onclick="sortBtn(${v.st_seq})">${v.st_name}</span></li>`
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
        location.href = '/store.php?st_seq=' + st_seq + '&active=' + st_name + ''
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
            if (!$("#sk").val()) {
                alert("검색어를 입력해주세요.")
            } else {
                location.href = '/store.php?sk=' + $("#sk").val()
            }
        }
    }
    Kakao.init('f4a147eb3472a6ed818e355288e4d0c4');

    function enterkey() {
        if (window.event.keyCode == 13) {
            Search()
        }
    }

    $("#sk").focusout(function() {
        setTimeout(() => {
            if (!$("#sk").hasClass('w-1px')) {
                $("#sk").addClass('border-0 w-1px bg-0 opa-0')
                $(".search-btn").addClass('bg-0 border-0')
            }
        }, 100)
    })

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
                        `<div class="img_list img_list_${v.b_seq}" style="background-image: url('${v.b_img}')"></div>`;
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

    // 카카오톡 채널 1:1채팅 버튼을 생성합니다.
    if ($(window).width() > 768) {
        Kakao.Channel.createChatButton({
            container: '#kakao-talk-channel-chat-button',
            channelPublicId: '_szgExj' // 카카오톡 채널 홈 URL에 명시된 id로 설정합니다.
        });
    } else {
        Kakao.Channel.createChatButton({
            container: '#kakao-talk-channel-chat-button-m',
            channelPublicId: '_szgExj' // 카카오톡 채널 홈 URL에 명시된 id로 설정합니다.
        });
        $("#kakao-talk-channel-chat-button-m").find('img').attr('src', '/img/kakaok_chat.png')
        $("#kakao-talk-channel-chat-button-m").find('img').css({
            "width": "40px"
        })
    }

    function LargeSort() {
        $.ajax({
            url: SERVER_AP + "/admin/common/all-ls",
            type: "post",
            cache: false,
            data: {
                table: 'large_sort',
            },
            success: function(data) {
                var str =
                    `<div class="p-3 py-3 pl-4 menu-category-menu-menu"><a href="/store.php?active=ALL">ALL</a></div>`;
                var mstr2 = `<li class="py-3"><span onclick="location.href="/store.php"">ALL</span></li>`
                $("#sort_menu-wrap_m").append(mstr2);



                $("#menu-category").append(str)
                $.each(data, function(i, v) {
                    var str = `<div class="p-3 py-3 pl-4 menu-category-menu position-relative">
									<a href="/store.php?ls_seq=${v.ls_seq}&active=${v.ls_name}">${v.ls_name}</a>
									<div class="menu-category-menu-menu-menu menu-category-menu-menu-menu${v.ls_seq}">
									</div>
								</div>`;
                    $("#menu-category").append(str)
                    MiddleSort(v.ls_seq)
                })


                var mstr22 = `<li class="py-3"><span onclick="location.href='/login.php'">LOGIN</span></li>
						<li class="py-3"><span onclick="location.href='/registerType.php'">JOIN</span></li>
						<li class="py-3"><span onclick="location.href='/exhibition.php'">EVENT</span></li>
						<li class="py-3"><span onclick="location.href='/contact.php'">입점문의</span></li>
						<li class="py-3"><span onclick="location.href='/community.php'">공지사항</span></li>`
                $("#sort_menu-wrap_m").append(mstr22)

                var menustr =
                    `<div class="d-inline-block py-2 px-4 af-show d-none" style="font-size:15px;"><a style="color:black;" href="exhibition.php?active=EVENT" class=" hover_text">EVENT</a></div>
				<div class="d-inline-block py-2 px-4 af-show d-none" style="font-size:15px;"><a style="color:black;" href="contact.php?active=입점문의" class=" hover_text">입점문의</a></div>
				<div class="d-inline-block py-2 px-4 af-show d-none" style="font-size:15px;"><a style="color:black;" href="community.php?active=공지사항" class=" hover_text">공지사항</a></div>`;

                $('#menu-PC').append(menustr);
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }

    function MiddleSort(ls_seq) {
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
                $.each(data, function(i, v) {
                    var str =
                        `<div class="p-3 py-3 pl-4"><a href="/store.php?ls_seq=${ls_seq}&&ms_seq=${v.ms_seq}">${v.ms_name}</a></div>`;
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
            data: {
                table: 'large_sort',
            },
            success: function(data) {
                $.each(data, function(i, v) {

                    if (i == 0) {
                        var str11 = `<li><a class="bg-white" href="/store.php">ALL</a></li>`
                        $("#menu-M-menu").prepend(str11);
                    }
                    var str = `<div class="draw_cate_title">
					<span class="down_cate clickcate${v.ls_seq} w-100" data-val="${v.ls_seq}">${v.ls_name}</span>
					<div class="add_arrow${v.ls_seq}"></div>
				  </div>
				  <div class="draw_ms_data${v.ls_seq} textDeco d-none"></div>`;
                    $("#menu-M-menu").append(str);

                    if (data.length == i + 1) {
                        var str22 = `<li><a class="bg-white" href="exhibition.php">EVENT</a></li>
					  <li><a class="bg-white" href="contact.php">입점문의</a></li>
					  <li><a class="bg-white" href="community.php">공지사항</a></li>`

                        $("#menu-M-menu").append(str22);

                    }
                    MiddleSortM(v.ls_seq)
                })
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
                        var str = '<div><a href="/store.php?ls_seq=' + ls_seq + '&&ms_seq=' + v
                            .ms_seq + '">' + v.ms_name + '</a></div>';
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
            $('.head_Box').removeClass('opaWhite');
        } else {
            $('.head_Box').addClass('opaWhite');
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

    $(document).on('click', '.down_cate', function() {
        var seq = $(this).attr('data-val');
        if ($('.change_arrow' + seq).hasClass('fa-angle-down')) {
            $('.change_arrow' + seq).addClass('fa-angle-up')
            $('.change_arrow' + seq).removeClass('fa-angle-down')
        } else {
            $('.change_arrow' + seq).addClass('fa-angle-down')
            $('.change_arrow' + seq).removeClass('fa-angle-up')
        }
        $('.add_arrow' + seq).toggleClass()

        $('.draw_ms_data' + seq).toggleClass('d-none');
    })


    function wishNum() {
        var obj = new Object();
        obj.u_seq = user_info.u_seq;
        $.ajax({
            url: SERVER_AP + "/common/condition",
            type: "post",
            cache: false,
            data: {
                table: 'wishlist',
                common: obj,
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
    </script>