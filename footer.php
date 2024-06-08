<style media="screen">
.productWrap-titleWrap {
    width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    height: 28px;
}

.breadcumb_area {
    margin-top: 80px;
}

.contact_from {
    z-index: 0;
}

@media (min-width:768px) {
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

    .section_padding_100_50 {
        padding-top: 0px;
    }
}
</style>

<footer>

    <form class="d-none" action="https://info.sweettracker.co.kr/tracking/5" id="actionSweet" method="post">
        <div class="form-group">
            <label for="t_key">API key</label>
            <input type="text" class="form-control" id="t_key" value="YClAfaqpWuyxRysUuyQN0w" name="t_key"
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
        <button type="submit" class="btn btn-default">조회하기</button>
    </form>



    <div class="border-top border-bottom">
        <div class="container d-flex py-2 justify-content-between align-items-center">
            <div class="footer_top_box">
                <span>HOME</span>
                <span class="ml-3" onclick="location.href='/introduce.php'">회사소개</span>
                <span class="mx-3" onclick="goSite(1);">이용약관</span>
                <span onclick="goSite(2);">개인정보처리방침</span>
            </div>
            <div class="">
                <i class="fa-brands fa-square-instagram pointer" style="font-size:25px;"
                    onclick="window.open('https://www.instagram.com/design_lidot/')"></i>
            </div>
        </div>
    </div>
    <div class="container py-4">
        <div class="pc_none " style="font-size:12px;">
            <div class="mb-2 font-weight-bold">COMPANY INFO</div>
            <p>상호명 : 집앤바스 <br> 대표이사 : 김신애, 김인애 <br> 대표전화 : 031-891-0610 <br> 개인정보관리책임자 : 김신애 <br> 대표메일 :
                lidot.official@gmail.com</p>
            <p>물류 : 대한통운 <br> 사업자등록번호 : 258-58-00309 <br> 통신판매번호 : 2019-수원권선-0503</p>
            <p>COPYRIGHT(C) RIDOT ALL RIGHTS RESERVED.</p>
        </div>

        <div>
            <div class="mb-2 font-weight-bold m_none">COMPANY INFO</div>
            <p>상호명 : 집앤바스 대표이사 : 김신애, 김인애 대표전화 : 031-891-0610 개인정보관리책임자 : 김신애 대표메일 : lidot.official@gmail.com</p>
            <p>물류 : 대한통운 사업자등록번호 : 258-58-00309 통신판매번호 : 2019-수원권선-0503</p>
            <p>COPYRIGHT(C) RIDOT ALL RIGHTS RESERVED.</p>
        </div>
    </div>
    <!-- <div class="py-3" style="background:#eaeaea"></div> -->
</footer>

</body>

</html>



<script src="js/temp/js/popper.min.js"></script>
<script src="js/temp/js/bootstrap.min.js"></script>
<script src="js/temp/js/jquery.easing.min.js"></script>
<script src="js/temp/js/default/classy-nav.min.js"></script>
<script src="js/temp/js/owl.carousel.min.js"></script>
<script src="js/temp/js/default/scrollup.js"></script>
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
        location.href = "privacy_policy.php?";
    }
}
</script>