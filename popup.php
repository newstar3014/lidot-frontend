<style>
#common-popup {
    position: fixed;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    z-index: 99999999;
    background: #fff;
    max-width: 1100px;
    width: 70%;
    height: 700px;
}

.common-popup-close {
    color: #fff;
    font-size: 22px;
    font-weight: bold;
    position: absolute;
    right: 10px;
    top: -35px;
    cursor: pointer;
}

#common-bg-back {
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.7);
    z-index: 9999999;
}

#common-popup .lg-maximize {
    display: none;
}

@media (max-width: 768px) {
    #common-popup {
        width: 85%;
        height: 70vh;
    }

    .lg-show-in .lg-next {
        opacity: 1;
    }
}
</style>

<div id="common-bg-back" class="d-none"></div>
<div id="common-popup" class="d-none">
    <div class="common-popup-close">
        <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="poisition-relative h-100">
        <i class="fas fa-chevron-left rv-arrow left d-none"></i>
        <!-- <img class=" rv-arrow left d-none" src="img/mypage/arrow.png"> -->

        <div class="h-100">
            <div class="row mx-0 h-100">
                <div class="px-0 col-12 bg_wrap" id="common_bg_wrap"></div>
            </div>

        </div>

        <!-- <div class="d-block d-md-none">
            <div>
                <div class="px-0  bg_wrap qna_bg_wraap_m "></div>
            </div>




        </div> -->




        <i class="fas fa-chevron-right  rv-arrow right  d-none"></i>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js"
    integrity="sha512-jEJ0OA9fwz5wUn6rVfGhAXiiCSGrjYCwtQRUwI/wRGEuWRZxrnxoeDoNc+Pnhx8qwKVHs2BRQrVR9RE6T4UHBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lightgallery.min.css"
    integrity="sha512-F2E+YYE1gkt0T5TVajAslgDfTEUQKtlu4ralVq78ViNxhKXQLrgQLLie8u1tVdG2vWnB3ute4hcdbiBtvJQh0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<script>
$('.common-popup-close').click(function() {
    $('#common-bg-back').addClass('d-none');
    $('#common-popup').addClass('d-none');
});
</script>