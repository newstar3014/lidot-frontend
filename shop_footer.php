<style media="screen">
* {
    word-break: keep-all;
}

.productWrap-titleWrap {
    width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
}

.breadcumb_area {
    margin-top: 80px;
}

.contact_from {
    z-index: 0;
}

.pc_none {
    display: none;
}

.m_none {
    display: block;
}

.productWrap-titleWrap {
    /* height: 24px; */
    text-align: left;
}

.onetext {
    text-overflow: ellipsis;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;

}

@media (max-width:768px) {
    .productWrap:hover .productWrap-btnWrap {
        opacity: 1;
    }

    .productWrap:hover .productWrap-titleWrap {
        border-bottom: 1px solid #555;
    }

    .productWrap-btnWrap {
        opacity: 0;
    }

    .productWrap:hover .productWrap-img {
        background-size: 107% !important;
    }

    .pc_none {
        display: block;

    }

    .m_none {
        display: none;
    }

    .productWrap-titleWrap {
        /* height: 49px; */
        -webkit-line-clamp: 2;
    }

    .section_padding_100_50 {
        padding-top: 0px;
    }

    .like_wrap {
        position: absolute;
        top: 117px;
        right: 0px;
        z-index: 10;
    }

    .footer_top_box {
        font-size: 11px;
    }

    .m_size {
        width: 24px;
    }

    .m_logo {
        width: auto !important;
        height: auto !important;
    }

    .tel_info {
        width: auto !important;
        height: auto !important;
    }

    .re_logo {
        width: 24px !important;
    }
}

.special_feature_area {
    display: none;
}

/* .like_wrap{
        position: absolute;
        right: 0;
        z-index: 10;
        bottom: 12px;
    } */
.flex {
    display: flex;
}

.pb_text p {
    color: #4b4f52;
    margin-bottom: 0px;
    font-size: 12px;
}
</style>
<link rel="stylesheet" href="css/shop_footer.css">
<footer>
    <!-- 팝업용으로 넣어둔거 -->
    <form class="d-none" action="https://info.sweettracker.co.kr/tracking/5" id="actionSweet" method="post"
        target="_blank">
        <div class="form-group">
            <label for="t_key">API key</label>
            <input type="text" class="form-control" id="t_key" value="dmKtsVwrsji8TORGLqv9HA" name="t_key"
                placeholder="제공받은 APIKEY">
        </div>
        <div class="form-group">
            <label for="t_code">택배사 코드</label>
            <input type="text" class="form-control" name="t_code" id="t_code" placeholder="택배사 코드">
        </div>
        <div class="form-group">
            <label for="t_invoice">운송장 번호</label>
            <input type="text" class="form-control" name="t_invoice" id="t_invoice" placeholder="운송장 번호">
        </div>
        <button onclcik="openPopup();" class="btn btn-default">조회하기</button>
    </form>

    <div class="border-top border-bottom">
        <div class="container d-flex py-2 justify-content-between align-items-center">
            <div class="footer_top_box">
                <span class="mr-3" onclick="location.href='/introduce.php'">회사소개</span>
                <span class="mr-3" onclick="goSite(1);">이용약관</span>
                <span class="mr-3" onclick="goSite(2);">개인정보처리방침</span>
                <!-- <span class="mr-3" onclick="goSite(3);">이용안내</span> -->
                <span onclick="goSite(4);">입점문의</span>
            </div>
            <div class="">
                <img class="m_size" src="img/footer/Instagram.png"
                    onclick="window.open('https://www.instagram.com/design_lidot/')" />
            </div>
        </div>
    </div>
    <div class="container py-4">
        <div class="pb_text row">
            <div class="col-md-3 col-6">
                <img class="m_logo" src="img/footer/logo.png" style="width:150px;height:42px;" />
            </div>
            <div class="col-md-3 col-6">
                <img class="tel_info" src="img/footer/tel_info.png" style="width:220px;height:137px;" />
            </div>

            <div class="col-md-3  col-6 pb_text mt-md-0 mt-3">
                <p class="font-weight-bold mb-md-4 mb-2">FAVORITE MENU</p>
                <?php
                if($user_info){
                ?>
                <p class="pointer" onclick="location.href='/wishlist.php';">관심상품</p>
                <p class="pointer" onclick="location.href='/cart.php';">장바구니</p>
                <p class="pointer" onclick="location.href='/order_list.php';">주문조회</p>
                <p class="pointer" onclick="location.href='/mypage.php';">마이페이지</p>
                <?php
                }else{
                ?>
                <p class="pointer" onclick="location.href='/login.php';">로그인 / 회원가입</p>
                <p class="pointer" onclick="alert('로그인 후 이용가능합니다.');">관심상품</p>
                <p class="pointer" onclick="alert('로그인 후 이용가능합니다.');">장바구니</p>
                <p class="pointer" onclick="alert('로그인 후 이용가능합니다.');">주문조회</p>
                <p class="pointer" onclick="alert('로그인 후 이용가능합니다.');">마이페이지</p>
                <?php
                }
                ?>

            </div>

            <div class="col-md-3  col-6 pb_text  mt-md-0 mt-3">
                <p class="font-weight-bold  mb-md-4 mb-2">RETURN / EXCHANGE</p>
                <p>수원시 권선구 서수원로 523번길 20-1</p>
                <p>자세한 교환·반품절차 안내는 문의란 및 공지사항을 참고해주세요</p>
                <div class="d-flex mt-2" style="gap:10px;">
                    <img class="re_logo pointer" src="img/footer/re_1.png" onclick="location.href='/community.php';" />
                    <img class="re_logo pointer" src="img/footer/re_2.png" onclick="location.href='/mypage.php';" />
                    <!-- <img class="re_logo pointer" src="img/footer/re_3.png" onclick="location.href='/mypage.php';"  /> -->
                    <img class="re_logo pointer" src="img/footer/re_4.png" onclick="location.href='/order_list.php';" />
                    <!-- <img class="re_logo pointer" src="img/footer/re_5.png" /> -->
                </div>
            </div>
        </div>


    </div>
    <!-- <div class="py-3" style="background:#eaeaea"></div> -->
    <div class="b_footer">
        <div class="d-md-flex justify-content-between container pt-4 pb-5">
            <div>
                <div class="mb-4">
                    <p>상호명 : 집앤바스 | 대표자 : 김신애, 김인애</p>
                    <p>대표전화 : 031-891-0610 | 개인정보보고관리책임자 : 김신애 | 대표메일 : lidot.official@gmail.com</p>
                    <p>주소 : 수원시 권선구 서수원로 523번길 20-1</p>
                    <p>사업자등록번호 : 258-58-00309 | 통신판매번호 : 2019-수원권선-0503호</p>
                </div>

                <p>COPYRIGHT(C) LIDOT ALL RIGHTS RESERVED.</p>
            </div>
            <div class="text-left mt-md-0 mt-4">
                <img src="img/footer/ini.png" style="width:302px;height:102px;" />
            </div>
        </div>
    </div>
</footer>

</body>

</html>



<script src="js/temp/js/popper.min.js"></script>
<script src="js/temp/js/bootstrap.min.js"></script>
<script src="js/temp/js/jquery.easing.min.js"></script>
<script src="js/temp/js/default/classy-nav.min.js"></script>
<script src="js/temp/js/owl.carousel.min.js"></script>
<script src="js/temp/js/waypoints.min.js"></script>
<script src="js/temp/js/jquery.countdown.min.js"></script>
<script src="js/temp/js/jquery.counterup.min.js"></script>
<script src="js/temp/js/jquery-ui.min.js"></script>
<script src="js/temp/js/jarallax.min.js"></script>
<script src="js/temp/js/jarallax-video.min.js"></script>
<script src="js/temp/js/jquery.magnific-popup.min.js"></script>
<!-- <script src="js/temp/js/jquery.nice-select.min.js"></script> -->
<script src="js/temp/js/wow.min.js"></script>
<script src="js/temp/js/default/active.js"></script>

<script type="text/javascript">
$(function() {
    console.log('ㅡ footer READY');
});



function goSite(num) {
    if (num == 1) {
        // 이용약관, 개인정보처리방침 페이지를 비앤코와 코드비 같이 사용하나요??
        location.href = "terms.php";
    } else if (num == 2) {
        // 이용약관, 개인정보처리방침 페이지를 비앤코와 코드비 같이 사용하나요??
        location.href = "privacy_policy.php";
    } else if (num == 3) {
        // location.href = "contact.php";
    } else if (num == 4) {
        location.href = "contact.php";
    }
}

function openPopDelivery() {
    const form = document.getElementById('actionSweet');
    const width = 800;
    const height = 1000;;
    const left = window.screenLeft + (window.outerWidth - width) / 2;
    const top = window.screenTop + (window.outerHeight - height) / 2;



    const options = `width=${800},height=${1000},left=${left},top=${top}`;
    const popup = window.open('', 'mypopup', options);
    form.target = 'mypopup';
    form.submit();
}
</script>
