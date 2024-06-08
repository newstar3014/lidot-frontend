<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php';
    $ls_seq = $_GET['ls_seq'];
    $ms_seq = $_GET['ms_seq'];
    $active = $_GET['active'];
    $ss_seq = $_GET['ss_seq'];
    $st_seq = $_GET['st_seq'];
    $e_seq = $_GET['e_seq'];
    $type = $_GET['type'];
    $sk = $_GET['sk'];
    $orderType = $_GET['orderType'];
?>
<style media="screen">
.wholeBtn,
.middleBtn,
.smallBtn {
    text-align: left;
}

.middleBtn.active {
    background: #f1f1f1;
}

.middleBtn:hover {
    background: #f1f1f1;
    transition: 0.3s;
}

.smallBtn.active {
    background: #f1f1f1;
}

.smallBtn:hover {
    background: #f1f1f1;
    transition: 0.3s;
}

.wholeBtn.active {
    background: #f1f1f1;
}

.wholeBtn:hover {
    background: #f1f1f1;
    transition: 0.3s;
}

.wholeAllBtn.active {
    background-color: #6c757d;
    color: white;
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
        margin-top: 130px !important;
    }

    .productWrap-titleWrap {
        height: 47px !important;
        font-size: 13px;
        -webkit-line-clamp: 2;
        max-width: 90%;
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

    .like_wrap {
        top: 40px !important;
        right: 5px !important;
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
}

.productWrap:hover .hoverimage {
    transition: 0.5s;
    transform: scale(1.1);
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
    width: 30px;
    height: 30px;
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
</style>
<div class="container mt-5 mobile_mt">
    <h5 id="largename" class="font-weight-bold text-black"></h5>

    <section class="my-4" id="searchbtnSection">
        <div class="row" id="wholeBtnWrap">
            <!-- <div class="col-4 col-md-2 px-1">
                <div class="border py-2 fs-14 pointer text-center wholeAllBtn active">전체보기</div>
            </div> -->
        </div>
        <div class="" id="middleBtnWrap">
            <!-- <div class="col px-1">
                <div class="border py-2 fs-14 pointer text-center middleBtn active">
                    중분류1
                </div>
            </div> -->
        </div>
        <div class="d-flex d-none" id="middleTextWrap">

        </div>
        <!-- <div class="row mt-3" id="smallBtnWrap">
            <div class="col px-1">
                <div class="border py-2 fs-14 pointer text-center middleBtn active">
                    중분류1
                </div>
            </div>
        </div> -->
    </section>

    <div class="mb-4" id="exhibition-banner-wrap">
        <h5 id="exhibition-banner-title"></h5>
        <p id="exhibition-banner-text"></p>
        <div class="" id="exhibition-banner"></div>
        <div class="wishlist-table section_padding_100 clearfix">
            <div class=" draws_coupon">

            </div>

            <div class=" text-center" id="c_con">



            </div>


        </div>
    </div>

    <div class="d-flex e_section" style="justify-content:space-between; align-items:center;">
        <div class="">
            <span class="fs-14 font-weight-bold" id="pronumber">0</span> <span class="fs-12">items</span>
        </div>

        <div class="d-flex" style="align-items:center;">

            <!-- 그리드 아이콘 HTML 부분 시작 -->
            <div id="grid-search" class="pc-none grid-wrap" data-type="search">
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

            <div class="d-flex align-itmes-center ml-3 fs-12">
                <span data-target="sold" class="pointer listupSel">판매순위순</span>
                <span class="mx-2">|</span>
                <span data-target="new" class="pointer listupSel">최신순</span>
                <span class="mx-2">|</span>
                <span data-target="low" class="pointer listupSel">낮은가격순</span>
            </div>
            <div class="ml-2">

                <div class="comp_btnb d-none d-md-flex align-items-center pointer" onclick="comparisonFn();">
                    <img width="20px;" src="/img/checks_off.png" alt="">
                    상품 비교
                </div>
            </div>
        </div>
    </div>
    <div class="mt-2">

        <div class="comp_btnb ml-auto d-flex d-md-none align-items-center pointer" style="width:88px;"
            onclick="comparisonFn();">
            <img width="20px;" src="/img/checks_off.png" alt="">
            상품 비교
        </div>
    </div>
    <hr class="e_section">

    <section class="e_section">
        <div class="row mb-lg-5 mb-0" id="productlist-Wrap">
            <!-- <div class="col-12 col-md-4">
                <div class="productWrap pointer fs-14">
                    <div class="productWrap-img"></div>
                    <div class="py-2 font-weight-bold productWrap-titleWrap">국산 샤워기</div>
                    <div class="py-2">
                        <div class="mb-2">판매가 : <span>700000원</span></div>
                        <div class="">배송비 : <span>700000원</span></div>
                    </div>
                    <div class="pt-3 pb-2 text-secondary productWrap-btnWrap">
                        <span>보러가기</span>
                        <span>찜하기</span>
                        <span>공유하기</span>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <div id="paged-wrap" class="my-5">
        <nav aria-label="Page navigation example">
            <ul id="paged-content" class="pagination justify-content-center"></ul>
        </nav>
    </div>

</div>

<!-- Special Featured Area -->
<section class="special_feature_area pt-5">
    <div class="container">
        <div class="row">
            <!-- Single Feature Area -->
            <div class="col-12 mb-2">
                <h5>비앤코 안내</h5>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="single_feature_area mb-5 d-flex align-items-center">
                    <div class="feature_icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <div class="feature_content">
                        <h6>무료 배송</h6>
                        <p>100,000원 이상 결제시 무료배송</p>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-rwdImageMaps/1.6/jquery.rwdImageMaps.js"
    integrity="sha512-uuJ11zLzMOzMmKdOkuYiR+KZEWwFx4x2eeNyRvcvNaDiYJPycvjg8nM8d9QMQMFP1+K4oGBppE97Siba2Ho1jA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
var ls_seq = '<?php echo $ls_seq; ?>';
var ms_seq = '<?php echo $ms_seq; ?>';
var ss_seq = '<?php echo $ss_seq; ?>';
var activeStr = '<?php echo $active; ?>';
var st_seq = '<?php echo $st_seq; ?>';

var e_seq = '<?php echo $e_seq; ?>';

var type = '<?php echo $type; ?>';

var sk = '<?php echo $sk; ?>';

var orderType = '<?php echo $orderType; ?>';


var wholeBtnArr = []

var page = 1;
var ppp = 16;

var list_count = '';

$(function() {

    loadListCount()
    if (ls_seq) {
        $('.menu_active' + ls_seq).addClass('font-weight-bold')
    }
    if (ms_seq) {
        $('.menu_active' + ls_seq).removeClass('font-weight-bold')
        $('.menu_active_ms' + ms_seq).addClass('font-weight-bold')
    }

    if (!st_seq) {
        if (sk) {
            $("#searchbtnSection").remove();
        }

        if (ls_seq) {
            $("#wholeBtnWrap").remove()
            LargeName()
        }

        if (ms_seq) {
            $("#wholeBtnWrap, #middleBtnWrap").remove()
            $("#middleTextWrap").removeClass('d-none')
            MiddleName()
            SmallText()
        }

        if (!ls_seq && !ms_seq && !ss_seq) {
            LoadWholeBtn()
        }
    } else {
        $("#wholeBtnWrap").remove()
    }

    if (e_seq) {
        $("#searchbtnSection").remove();
        $("#wholeBtnWrap").remove()
        $("#wholeBtnWrap").remove()
        LoadExhibitionData()
    } else {
        $("#exhibition-banner-wrap").remove()
    }

    if (type) $("#paged-wrap, #searchbtnSection, #listupSel").remove()

    if (orderType) {
        $.each($(".listupSel"), function(i, v) {
            if ($(v).attr('data-target') == orderType) $(v).addClass('font-weight-bold')
        })
    }

    LoadProductList(3)
})

$(document).on('click', '.wholeAllBtn', function() {
    wholeBtnArr = []
    $(".wholeBtn").removeClass("active")
    $(".wholeAllBtn").addClass("active")
    page = 1;
    LoadProductList(3)
})

function LoadExhibitionData() {
    var obj = new Object();
    obj.e_seq = e_seq;
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        data: {
            table: 'exhibition',
            common: obj,
        },
        success: function(data) {
            let img = ``;
            if ($(window).width() > 768) {
                img = data[0].e_banner
            } else {
                img = data[0].e_banner_m
            }

            //$("#exhibition-banner").css({"background":"url('"+img+"')"})
            let str = `<img src="${img}" alt="" class="banner_img">`

            if (e_seq == 4) {
                str = `<img src="${img}" usemap="#image-map">
                            <map name="image-map">
                                <area onclick="openPopup()" alt="이벤트" title="이벤트" href="#" coords="653,1442,148,1375" shape="rect">
                            </map>`
            }

            $("#exhibition-banner").append(str)
            $("#exhibition-banner-title").text(data[0].e_title)
            $("#exhibition-banner-text").text(data[0].e_text)
            $('img[usemap]').rwdImageMaps();


            if (!data[0].e_p_seq) {
                $(".e_section").remove()
            }

            if (data[0].e_banner_link) {
                $(".banner_img").addClass('pointer')
                $(".banner_img").attr('onclick', `location.href='${data[0].e_banner_link}'`)

            }

            if (data[0].e_coupon_use == 'Y') {
                loadCoupon()
                checkCoupon();

                let str = `    <div class="coupon_box text-center">
                            <div class="btn btn-secondary" onclick="allCoupon()">
                                모두 다운로드
                            </div>
                        </div>`

                $('.draws_coupon').html(str);
            }
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

function openPopup() {
    var w = 500; // 팝업창 가로 크기
    var h = 800; // 팝업창 세로 크기
    var left = (screen.width - w) / 2; // 팝업창 왼쪽 위치
    var top = (screen.height - h) / 2; // 팝업창 상단 위치
    window.open('http://pf.kakao.com/_wxlUxkb', 'popup', 'width=' + w + ', height=' + h + ', left=' + left + ', top=' +
        top);
}
// $(document).on("click",".wholeBtn",function(){
//     wholeBtnArr = []
//
//     $(".wholeAllBtn").removeClass("active")
//
//     if($(this).hasClass("active")){
//         $(this).removeClass("active")
//     }else{
//         $(this).addClass("active")
//     }
//
//     $.each($(".wholeBtn"),function(i,v){
//         if($(v).hasClass("active")){
//             wholeBtnArr.push($(v).attr("data-target"))
//         }
//     })
//
//     if(wholeBtnArr.length == 0){
//         $(".wholeAllBtn").addClass("active")
//     }
//     page = 1;
//     LoadProductList()
// })

$(document).on("click", ".df-prl-viewtype-btn > div", function() {
    $(".df-prl-viewtype-btn > div").removeClass("selected")
    $(this).addClass("selected")
    list_count = $(this).attr("data-target");
    ppp = $(this).attr('data-ppp');
    page = 1;
    LoadProductList();
})

function LoadWholeBtn() {
    $.ajax({
        url: SERVER_AP + "/admin/common/all-ls",
        type: "post",
        cache: false,
        data: {
            table: 'large_sort',
        },
        success: function(data) {
            //console.log("data >>",data);
            let wstr = `<div class="col-4 col-md-2 px-1">
                                <div class="border py-2 fs-14 pointer text-center wholeAllBtn active">전체보기</div>
                            </div>`
            $("#wholeBtnWrap").append(wstr);
            $.each(data, function(i, v) {
                var str = `<div class="col-4 col-md-2 mb-2 mb-md-0 px-1">\
                                    <div class="border py-2 fs-14 pointer text-center wholeBtn" data-target="${v.ls_seq}" onClick="location.href='store.php?ls_seq=${v.ls_seq}&active=${v.ls_name}'">${v.ls_name}</div>\
                                </div>`;
                $("#wholeBtnWrap").append(str);
            })
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

function LargeName() {
    var obj = new Object();
    obj.ls_seq = ls_seq;
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        data: {
            table: 'large_sort',
            common: obj,
        },
        success: function(data) {
            $("#largename").text(data[0].ls_name)
            MiddleBtn()
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

function MiddleName() {
    var obj = new Object();
    obj.ms_seq = ms_seq;
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        data: {
            table: 'middle_sort',
            common: obj,
        },
        success: function(data) {
            //$("#largename").text(data[0].ms_name)
            $("#largename").text($("#largename").text() + ' > ' + data[0].ms_name)
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

function MiddleBtn() {
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
            if (ms_seq) {
                var astr = '<div class="col-4 col-md-2 px-1 mb-2">\
                                    <div class="border py-2 fs-14 pointer text-center bg-secondary text-white" onClick="allBtn()">전체보기</div>\
                                </div>';
                $("#middleBtnWrap").append(astr);
            }
            $.each(data, function(i, v) {
                // var str = '<div class="col-4 col-md-2 px-1 mb-2">\
                //                 <select class="border py-2 fs-14 pointer text-center middleBtn w-100 h-100 middleBtn'+v.ms_seq+'">\
                //                     <option value="">선택</option>\
                //                     <option value="'+v.ms_seq+'" data-target="me">'+v.ms_name+'</option>\
                //                 </select>\
                //             </div>';
                // $("#middleBtnWrap").append(str);

                var str =
                    `<div class="pointer d-inline-block mb-3 ml-4 font-weight-bold text-center" onClick="location.href='/store.php?ls_seq=${ls_seq}&&ms_seq=${v.ms_seq}'">${v.ms_name}</div>`;
                $("#middleBtnWrap").append(str);

                SmallBtn(v.ms_seq)
            })

            // if(ms_seq){
            //     $(".middleBtn"+ms_seq).addClass("active")
            // }

        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

function allBtn() {
    location.href = '/store.php?ls_seq=' + ls_seq;
}

function withMiddleBtn(ms_seq) {
    location.href = '/store.php?ls_seq=' + ls_seq + '&ms_seq=' + ms_seq;
}


function SmallText() {
    var obj = new Object();
    obj.ms_seq = ms_seq;

    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'small_sort',
            common: obj,
        },
        success: function(data) {
            $.each(data, function(i, v) {
                var str2 =
                    `<div class="mr-2 pointer ${v.ss_seq==ss_seq && 'font-weight-bold'}" onClick="location.href='/store.php?ls_seq=${ls_seq}&ms_seq=${ms_seq}&ss_seq=${v.ss_seq}'">${v.ss_name}</div>`;
                $("#middleTextWrap").append(str2);
            })
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}


function SmallBtn(seq) {

    if (ms_seq) {
        $("#smallBtnWrap").attr("class", "row mt-3 border-top border-bottom py-2")
    }

    //$(".middleBtn"+seq).attr('onchange', 'withSmallBtn2('+seq+', this)');

    var obj = new Object();
    obj.ms_seq = seq;

    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'small_sort',
            common: obj,
        },
        success: function(data) {
            $.each(data, function(i, v) {
                var str2 = '<option value="' + v.ss_seq + '">' + v.ss_name + '</option>';
                $(".middleBtn" + seq).append(str2);
            })

            if ($(".middleBtn" + seq).hasClass('active')) {
                if (ss_seq) {
                    $(".middleBtn" + seq).val(ss_seq).prop('selected', true);
                } else {
                    $(".middleBtn" + seq + " option").eq(1).prop('selected', true);
                }
            }
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

function withSmallBtn(ss_seq) {
    location.href = '/store.php?ls_seq=' + ls_seq + '&ms_seq=' + ms_seq + '&ss_seq=' + ss_seq;
}

function withSmallBtn2(seq, e) {
    if ($(e).find("option:selected").attr('data-target')) {
        location.href = '/store.php?ls_seq=' + ls_seq + '&ms_seq=' + $(e).val();
    } else {
        location.href = '/store.php?ls_seq=' + ls_seq + '&ms_seq=' + seq + '&ss_seq=' + $(e).val();
    }
}




function LoadProductList(_grid) {

    //var order;
    // if($(".listupSel").hasClass('font-weight-bold').attr('data-target')){
    //     order = $(".listupSel").hasClass('font-weight-bold').attr('data-target')
    // }

    $.ajax({
        url: SERVER_AP + "/product/list-paging",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'product',
            page: page,
            ppp: ppp,
            order: orderType,
            ls_seq: ls_seq,
            ms_seq: ms_seq,
            ss_seq: ss_seq,
            wholeBtnArr: wholeBtnArr,
            sk: sk,
            st_seq: st_seq,
            e_seq: e_seq,
            type: type,
        },
        success: function(data) {
            console.log('ddddd', data);
            $("#pronumber").text(data.totalCount)
            $("#productlist-Wrap").html('');
            if (data.rows.length == 0) {
                var nstr = '<div class="col py-5 text-center">상품이 없습니다.</div>';
                $("#productlist-Wrap").append(nstr);
                $("#paged-wrap").addClass('d-none')
            } else {
                $.each(data.rows, function(i, v) {
                    ////////////// 사업자회원시 도매가 가격 적용 ////////////////////
                    if (v.p_wholesale && user_info.u_type == '사업자회원' && user_info.u_status == 1) {
                        v.p_price = v.p_wholesale
                        v.dt_seq = v.dt_seq_up
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

                    // 기존 뱃지마크
                    // <div class="product_badge product_badge'+v.p_seq+'">\
                    //     <div style="background:'+pmark.bgcolor+'">'+pmark.text+'<span style="color:'+pmark.bgcolor+'; border-color:'+pmark.bgcolor+' transparent '+pmark.bgcolor+' '+pmark.bgcolor+';"></span></div>\
                    // </div>\

                    var imgarr = JSON.parse(v.p_image);

                    var h_img;
                    if (v.p_hover == null) {
                        h_img = '/img/common/hover_bg.png';
                    } else {
                        h_img = v.p_hover;
                    }

                    var pmark
                    // if(v.p_mark){
                    //     pmark = JSON.parse(v.p_mark);
                    // }else{
                    //     pmark = '';
                    // }
                    if (v.pm_seq) {
                        pmark = marktemImg(v.pm_seq);
                    }


                    var sticker
                    if (v.p_sticker) {
                        sticker = v.p_sticker
                    } else {
                        sticker = ''
                    }

                    var disprice = -(((v.p_price * 1 - v.p_consume_price * 1) / v.p_price) * 100);

                    var mainimgArr = JSON.parse(v.p_image);

                    var checkBookData = checkBook(v.p_seq);

                    var onclickVal
                    var colorYellow

                    if (checkBookData) {
                        onclickVal = `deleteWist(${v.p_seq})`;
                        colorYellow = 'color:#d31c0c';
                    } else {
                        onclickVal = `Wishlist(${v.p_seq})`;
                    }

                    var markNone
                    if (!pmark) {
                        markNone = 'd-none';
                    }
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
                    let margin_text = 'mt-2'
                    if (!v.p_onetext) {
                        margin_text = ''
                    }

                    let colStr = 'col-md-4';
                    if (_grid == 2) {
                        colStr = 'col-md-6';
                    } else if (_grid == 4) {
                        colStr = 'col-md-3';
                    }

                    let typeStr = `
                    <div class="pointer mt-2 text-secondary" onclick = ${onclickVal}>\
                        <i class="fa-solid fa-heart" style="${colorYellow}"></i>
                    </div>
                    `

                    if (user_info.u_type == '사업자회원' && user_info.u_status == 1) {
                        typeStr = `
                            <div class="text-secondary">
                                재고 : ${comma(v.p_stock)}
                            </div>
                        `
                    }

                    var str = `<div class="${colStr} col-6 pointer mb-md-5 mb-3">\
                                        <div class="productWrap fs-14 position-relative view_item">\
                                            <div  onclick="location.href='/product_detail.php?p_seq=` + v.p_seq +
                        `'" class="productWrap-img position-relative" style="background:url('` +
                        mainimgArr[0] + `'); width:100%; padding-bottom:100%;">\
                                                <img class="${markNone} pmark" src="${pmark}" alt="" style="width:50px; position:absolute; top:10px; left:0; z-index:10;"/>\
                                            </div>\
                                            <div class="hoverimage pointer" style="background:url('` + mainimgArr[0] +
                        `'); width:100%; padding-bottom:100%; position:absolute; top:0; left:0;" onclick="location.href='/product_detail.php?p_seq=` +
                        v.p_seq + `'"></div>
                                            <div  class="view_ab view_search">
                                                <div class="px-2 my-2 my-md-2 font-weight-bold productWrap-titleWrap ">${v.p_name}</div>\
                                                <div class="productWrap-border_bottom w-100"></div>
                                                <div class="px-2 d-flex justify-content-between">
                                                    <div class="com_check_div">
                                                        <input type="checkbox" class="comCheck" value="${v.p_seq}" />
                                                    </div>
                                                    <div class="${margin_text} onetext">${v.p_onetext || ''}</div>\
                                                    <div class="like_wrap mt-2 fs-10">
                                                        ${typeStr}
                                                    </div>
                                                </div>
                                                <div class="px-2 py-2">\
                                                    ${proTextStr}
                                                </div>\
                                            </div>
                                        </div>\
                                    </div>`;



                    $("#productlist-Wrap").append(str);

                })

                $(".productWrap-img").css({
                    "height": $(".productWrap-img").width()
                });

                drawPaging(data.totalPage);
                $("#paged-wrap").removeClass('d-none')
            }
        },
        beforeSend: function() {
            // Loading()
        },
        complete: function() {
            // $("#div_ajax_load_image").remove();
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

function marktemImg(seq) {
    var marktemimg;
    var obj = new Object();
    obj.pm_seq = seq;
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'product_mark',
            common: obj,
        },
        success: function(data) {
            marktemimg = data[0].pm_img;
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    return marktemimg;
}

function ProClick(p_seq) {
    location.href = '/product_detail.php?p_seq=' + p_seq;
}

// function Zzim(p_seq, e){
//     e.preventDefault();
//     if(!user_info){
//         alert('로그인을 먼저 해주세요.');
//         location.href="login.php";
//     }else{
//         if(confirm("관심상품으로 등록하시겠습니까?")){
//             $.ajax({
//                 url: SERVER_AP+"/wishlist/dupli",
//                 type: "post",
//                 cache: false,
//                 data:{
//                     p_seq:p_seq,
//                     u_seq:user_info.u_seq,
//                 },
//                 success: function(data){
//                     if(data.w_cnt == 0){
//                         var obj = new Object();
//                         obj.p_seq = p_seq;
//                         obj.u_seq = user_info.u_seq;
//                         obj.w_date = currentDate();
//                         $.ajax({
//                             url: SERVER_AP+"/admin/common/insert",
//                             type: "post",
//                             cache: false,
//                             data:{
//                                 table: 'wishlist',
//                                 obj:obj,
//                             },
//                             success: function(data){
//                                 location.href="/wishlist.php"
//                             },
//                             error: function (request, status, error){
//                                 console.log(error);
//                             }
//                         });
//                     }else{
//                         alert("이미 관심상품으로 등록된 상품입니다.")
//                     }
//                 },
//                 error: function (request, status, error){
//                     console.log(error);
//                 }
//             });
//         }
//     }
// }


function goPage(_page) {
    if (_page == 'prev') {
        page = (page * 1) - 1;
    } else if (_page == 'next') {
        page = (page * 1) + 1;
    } else {
        page = _page;
    }
    LoadProductList()
}

////////////////////////////////////관심상품
function Wishlist(p_seq) {
    if (!user_info) {
        alert('로그인을 먼저 해주세요.');
    } else {
        if (confirm("관심상품으로 등록하시겠습니까?")) {
            $.ajax({
                url: SERVER_AP + "/wishlist/dupli",
                type: "post",
                cache: false,
                data: {
                    p_seq: p_seq,
                    u_seq: user_info.u_seq,
                },
                success: function(data) {
                    if (data.w_cnt == 0) {
                        var obj = new Object();
                        obj.p_seq = p_seq;
                        obj.u_seq = user_info.u_seq;
                        obj.w_date = currentDate();
                        $.ajax({
                            url: SERVER_AP + "/admin/common/insert",
                            type: "post",
                            cache: false,
                            data: {
                                table: 'wishlist',
                                obj: obj,
                            },
                            success: function(data) {
                                // location.href="/wishlist.php"
                                LoadProductList();
                            },
                            error: function(request, status, error) {
                                console.log(error);
                            }
                        });
                    } else {
                        alert("이미 관심상품으로 등록된 상품입니다.")
                    }
                },
                error: function(request, status, error) {
                    console.log(error);
                }
            });
        }
    }
}

function checkBook(pseq) {
    var obj = new Object();
    obj.p_seq = pseq;
    obj.u_seq = user_info.u_seq;
    var bookOk = ""
    $.ajax({
        url: SERVER_AP + "/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'wishlist',
            common: obj,

        },
        success: function(data) {

            if (user_info) {
                if (data.length != 0) {
                    bookOk = 'Y';
                }
            } else {
                bookOk = "";
            }

        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    return bookOk;
}

function deleteWist(pseq) {
    var obj = new Object();
    obj.p_seq = pseq;
    obj.u_seq = user_info.u_seq;
    var bookOk = ""
    if (confirm('관심상품에서 삭제하시겠습니까?')) {
        $.ajax({
            url: SERVER_AP + "/product/deleteWish",
            type: "post",
            cache: false,
            async: false,
            data: {
                table: 'wishlist',
                useq: user_info.u_seq,
                pseq: pseq,
            },
            success: function(data) {
                LoadProductList();
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }

}

$(".listupSel").click(function() {
    let order = $(this).attr('data-target')
    let url = window.location.href
    if (url.includes('&orderType=')) {
        url = url.split('&orderType=')[0]
    }
    location.href = url + '&orderType=' + order
})

function loadListCount() {
    var obj = new Object();
    obj.lc_seq = 1;
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'list_count',
            common: obj,
        },
        success: function(data) {
            console.log('data', data);
            list_count = data[0].type
            $.each($(".df-prl-viewtype-btn > div"), function(i, v) {
                if (data[0].type == $(v).attr('data-target')) $(v).addClass("selected")
            })
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}


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
        _target.find('.productWrap-titleWrap').css('border-bottom', '0');
    }
})

$(document).on('mouseout', '.view_item', function() {
    let _target = $(this).find('.view_ab');
    if (_target.hasClass('active')) {
        _target.removeClass('op');
        _target.find('.productWrap-titleWrap').css('border-bottom', '0');
    }
})

function setGrid(type, btn) {
    console.log(type + ' 영역 ' + btn + ' 버튼 켜짐');
    let gridType = btn.replace('grid', '');
    LoadProductList(gridType)

}


function comparisonFn() {

    if ($(`.comCheck:checked`).length != 2) {
        alert("비교할 상품은 2개만 체크 해주세요");
        return false;
    }

    var p_seq_first = ``;
    var p_seq_second = ``;

    for (var i = 0; i < $(`.comCheck:checked`).length; i++) {
        var v = $(`.comCheck:checked`)[i];
        var values = $(v).val();

        if (i == 0) {
            p_seq_first = values;
        }

        if (i == 1) {
            p_seq_second = values;
        }
    }

    if (p_seq_first && p_seq_second) {
        location.href = `/comparison.php?p_seq_first=${p_seq_first}&p_seq_second=${p_seq_second}`;
    }
}
</script>

<script src="/js/pages/coupon.js"></script>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
