
<?

session_start();
$isLogin = 'N';
if ($_SESSION['my_port'] == "shop") {
    $isLogin = 'Y';
    $my_obj = addslashes(json_encode($_SESSION["json"] ?? []));
}

function getClientIp() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // 여러 개일 경우 첫 번째 IP (실제 사용자 IP)
        $ipList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        return trim($ipList[0]);
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

$ip = getClientIp();
$now_url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>디자인리닷</title>

    <meta name="author" content="lidot.co.kr">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="/img/symbol.png">
    <link rel="apple-touch-icon-precomposed" href="/img/symbol.png">

    <!-- CSS -->
    <link rel="stylesheet" href="/fonts/fonts.css">
    <link rel="stylesheet" href="/fonts/font-icons.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet"type="text/css" href="/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet"type="text/css" href="/common.css?ver=1.3">

    <!-- Javascript -->
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="/common.js?ver=1.2"></script>

</head>

<body class="preload-wrapper color-primary-main" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
    <!-- preload -->
    <div class="preload preload-container">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->
    <div id="wrapper">

        <!-- Announcement Bar -->
        <div id="header-topbar" class="announcement-bar bg_dark d-none">
            <div class="wrap-announcement-bar">
                <div id="header-topbar-item-wrap" class="box-sw-announcement-bar speed-1"><div class="announcement-bar-item"><p>디자인리닷에 오신것을 환영합니다, </p></div></div>
            </div>
            <span class="icon-close close-announcement-bar"></span>
        </div>
        <!-- /Announcement Bar -->


        <!-- Header -->
        <header id="header" class="header-default header-style-2">
            <div class="main-header line">
                <div class="container-full px_15 lg-px_40">
                    <div class="row wrapper-header align-items-center">
                        <div class="col-xl-5 tf-md-hidden">
                            <div class="tf-cur">
                                <div class="tf-languages">
                                    <select class="image-select center style-default type-languages" id="fastMenu">
                                        <option>빠른메뉴</option>
                                        <option>장바구니</option>
                                        <option>주문조회</option>
                                        <option>메인화면</option>
                                        <option value="notice">공지사항</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-3 tf-lg-hidden">
                            <a href="#mobileMenu" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                                    <path d="M2.00056 2.28571H16.8577C17.1608 2.28571 17.4515 2.16531 17.6658 1.95098C17.8802 1.73665 18.0006 1.44596 18.0006 1.14286C18.0006 0.839753 17.8802 0.549063 17.6658 0.334735C17.4515 0.120408 17.1608 0 16.8577 0H2.00056C1.69745 0 1.40676 0.120408 1.19244 0.334735C0.978109 0.549063 0.857702 0.839753 0.857702 1.14286C0.857702 1.44596 0.978109 1.73665 1.19244 1.95098C1.40676 2.16531 1.69745 2.28571 2.00056 2.28571ZM0.857702 8C0.857702 7.6969 0.978109 7.40621 1.19244 7.19188C1.40676 6.97755 1.69745 6.85714 2.00056 6.85714H22.572C22.8751 6.85714 23.1658 6.97755 23.3801 7.19188C23.5944 7.40621 23.7148 7.6969 23.7148 8C23.7148 8.30311 23.5944 8.59379 23.3801 8.80812C23.1658 9.02245 22.8751 9.14286 22.572 9.14286H2.00056C1.69745 9.14286 1.40676 9.02245 1.19244 8.80812C0.978109 8.59379 0.857702 8.30311 0.857702 8ZM0.857702 14.8571C0.857702 14.554 0.978109 14.2633 1.19244 14.049C1.40676 13.8347 1.69745 13.7143 2.00056 13.7143H12.2863C12.5894 13.7143 12.8801 13.8347 13.0944 14.049C13.3087 14.2633 13.4291 14.554 13.4291 14.8571C13.4291 15.1602 13.3087 15.4509 13.0944 15.6653C12.8801 15.8796 12.5894 16 12.2863 16H2.00056C1.69745 16 1.40676 15.8796 1.19244 15.6653C0.978109 15.4509 0.857702 15.1602 0.857702 14.8571Z" fill="currentColor"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="col-xl-2 col-md-4 col-6 text-center">
                            <a href="/" class="logo-header">
                                <img src="/img/logo.png" alt="logo" class="logo">
                            </a>
                        </div>

                        <div class="col-xl-5 col-md-4 col-3">
                            <ul class="nav-icon d-flex justify-content-end align-items-center gap-20">
                                <li class="nav-search">
                                    <a href="#canvasSearch" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="nav-icon-item"><i class="icon icon-search"></i></a>
                                </li>
                                <li class="nav-account"><a href="javascript:openLogin()" class="nav-icon-item"><i class="icon icon-account"></i></a></li>
                                <li class="nav-cart"><a href="#shoppingCart" data-bs-toggle="modal" class="nav-icon-item"><i class="icon icon-bag"></i><span class="count-box cart-count"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom line tf-md-hidden">
                <div class="container-full px_15 lg-px_40">
                    <div class="wrapper-header d-flex justify-content-center align-items-center">
                        <nav class="box-navigation text-center">
                            <ul id="menu-pc-wrap" class="box-nav-ul d-flex align-items-center justify-content-center gap-30"></ul>
                        </nav>
                    </div>
                </div>
            </div>

        </header>
        <!-- /Header -->
         
<script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>
<script src="https://static.nid.naver.com/js/naveridlogin_js_sdk_2.0.2.js" type="text/javascript"></script>


<script>
    Kakao.init('cfb248c5db4045e47574e743c6699b8e');
    const my_ip = '<? echo $ip; ?>';
    var my_obj = { seq : 0 };
    var isLogin = '<? echo $isLogin; ?>';
    var guest_uuid;
    if(isLogin == 'Y') {
        isLogin = true;
        my_obj = JSON.parse('<? echo $my_obj; ?>');
    }else{
        isLogin = false;
        guest_uuid = localStorage.getItem('guest_uuid');
        if(!guest_uuid) {
            guest_uuid = crypto.randomUUID();
            localStorage.setItem('guest_uuid', guest_uuid);
        }       
    }
    
    const now_url = '<? echo $now_url; ?>';

    let menuData;
    ajaxCall('/category/menu', {}, function(data) {
        menuData = data;
    });

    $(function() {
        console.log('ㅡㅡ HEADER READY');
        setHeaderTopbar();
        setHeaderCartCount();
    });

    $('#fastMenu').change(function(){

        switch ($(this).val()) {
            case `notice`:

                location.href=`/z/notice/list.php`;
                
                break;
        
            default:
                break;
        }
    });

</script>
<script type="text/javascript" src="/header.js?ver=1.1"></script>
<script type="text/javascript" src="/shop.js?ver=1.8"></script>