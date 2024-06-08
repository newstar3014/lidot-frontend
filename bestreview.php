<!-- Style CSS -->
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php';
    $p_seq = $_GET['p_seq'];
?>




<script src="https://cdnjs.cloudflare.com/ajax/libs/fslightbox/3.4.1/index.js"
    integrity="sha512-jrYR1cG7wwq2l+uNH+XXF18hjN+j8MBjM2PK2+fV/nAIHKxqpg479rOWFOxTpCnyPMZeGAi+eDAxHyrzTzkyRg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="css/review.css">

<style>
.best_star {
    opacity: 1 !important;
    color: #ddd;
}

.best_star.active {
    color: #FF972C;
}

.col-md-2_4 {
    -ms-flex: 0 0 20%;
    flex: 0 0 20%;
    max-width: 20%;
}

.product-image-style {
    width: 45px;
    height: 45px;
    border: 1px solid #D9D9D9;
}

@media (max-width: 576px) {
    #grid-wrapper {
        justify-content: end !important;
    }
}
</style>
<!-- Header Area End -->
<!-- Wishlist Table Area -->
<div class="container">
    <!-- Tabs end -->
    <div class="small-title-div">
        <span class="small-title-wrap">홈 <span> > </span>베스트 리뷰</span>
    </div>
    <div class="pt-2 pb-2">
        <header class="best-hearder">베스트 리뷰</header>
    </div>

    <!-- Tabs -->
    <ul class="nav nav-tabs border-0 mb-md-5 mb-3 text-center w-100 d-flex" role="tablist">
        <li class="w-50 border active" data-type="font">
            <a href="#description" class="nav-link font-weight-normal" data-toggle="tab" role="tab">베스트후기</a>
        </li>
        <li class="w-50 border" data-type="photo">
            <a href="#reviews" class="nav-link font-weight-normal" data-toggle="tab" role="tab">베스트 포토후기</a>
        </li>
    </ul>
    <!-- Tabs end -->


    <div id="grid-wrapper" class="d-flex justify-content-between">
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

        <div class="position-relative d-flex">
            <label style="
                font-family: NEXON Lv2 Gothic;
                font-size: 12px;
                font-weight: 400;
                line-height: 14px;
                letter-spacing: 0em;
                text-align: center;
                color : #000000;
                padding-right: 10px;
                padding-top: 10px;">상품 검색</label>
            <input type="serch" style="width: 250px; height: 30px; border: 1px solid #999999; border-radius: 0px;"
                id="searchValue" class="form-control" />
            <div class="d-flex align-items-center justify-content-center"
                style="background-color: #747794; width: 30px; height: 30px;">
                <img src="img/best-review/best-review-search-line.png" onclick="LoadBestReview(4);" alt="logo"
                    class="pointer mx-auto" style="width:20px; height:20px;">
            </div>
        </div>
    </div>
    <!-- 그리드 아이콘 HTML 부분 끝 -->

    <hr />
    <div>
        <div id="bestReview-wrap">
            <div class="bestReview-wrapper row text-center">

            </div>

        </div>
        <div style="height:50px;"></div>
    </div>


    <!-- &times; -->

    <!-- Modal -->
    <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" style="max-width:500px;">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="reviewModalLabel"></h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="border d-flex w-100 p-1">
                            <div class="border d-flex m-2" style="width: 70px; height: 70px;">
                                <img id="pop_imge_one" class="w-100" src="" />
                            </div>
                            <div class="m-2">
                                <div>
                                    <span id="productTitle" class="pop-best-review-product">제목</span>
                                </div>
                                <div>
                                    <span id="productPrice" class="pop-best-review-product">가격</span><span
                                        class="pop-best-review-product">원</span>
                                </div>
                                <div id="pop_rink" class="border mt-2"
                                    style="text-align: center; width: 130px; height: 20px; cursor:pointer;">
                                    <span class="pop-best-review-view">상세 보기</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="position-relative">
                        <div>
                            <div class="border pop_imge_two">
                            </div>
                        </div>

                        <div class="border">
                            <div class="pl-2 m-2">
                                <span id="userid" class="pop-best-review-id"></span><span class="pop-best-review-id"> |
                                </span>
                                <span id="reviewDateid" class="pop-best-review-id">
                                </span><span class="pop-best-review-id"> | </span>
                                <span id="reviewCntid" class="pop-best-review-id"></span>
                                <span class="mt-md-0 mt-2 float-right pr-2" id="starid"></span>
                            </div>
                            <div class="border"></div>
                            <div class="pl-2 m-3">
                                <div id="rpop_title" class="pop-best-reivew-title">
                                </div>
                                <div class="pop-best-review-content mt-2" id="rpop_content">
                                    <!-- <span id="">내용</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
        </div>
    </div>
</div>

<!-- //modal 영역 -->
</div>




<!-- 닫는태그 -->
<!-- JS -->


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


<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- CSS 파일 (cdnjs.com의 CDN을 사용) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js"
    integrity="sha512-jEJ0OA9fwz5wUn6rVfGhAXiiCSGrjYCwtQRUwI/wRGEuWRZxrnxoeDoNc+Pnhx8qwKVHs2BRQrVR9RE6T4UHBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lightgallery.min.css"
    integrity="sha512-F2E+YYE1gkt0T5TVajAslgDfTEUQKtlu4ralVq78ViNxhKXQLrgQLLie8u1tVdG2vWnB3ute4hcdbiBtvJQh0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="/js/pages/shop_main/shop_main_bestreview.js"></script>
<script>
let ViewType = 'font';
let _grid = 4;
let rppp = 100;
//type: type,
$(function() {
    LoadBestReview(_grid)
})

$(document).on('keyup', '#searchValue', function(key) {
    if (key.keyCode == 13) {
        LoadBestReview(_grid);
    }
});

$('li').click(function() {
    $('li').removeClass('active')
    $(this).addClass('active')
    ViewType = $(this).attr('data-type');
    LoadBestReview(_grid)
})


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

function setGrid(type, btn) {
    console.log(type + ' 영역 ' + btn + ' 버튼 켜짐');
    let gridType = btn.replace('grid', '');
    LoadBestReview(gridType);
}
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
