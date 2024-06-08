<!-- Style CSS -->
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php';
$p_seq = $_GET['p_seq'];
?>
<script type="text/JavaScript" src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>


<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<style media="screen">
.title-discount {
    /* position: absolute;
    right: 0; */
    border: 1px solid #dc3545;
    font-size: 13px;
    height: 33px;
    min-width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;

}



#hashtagTd {
    margin-bottom: 20px;
}

#hashtagTd a {
    border: 1px solid #EBECEF;
    padding: 3px 5px;
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

.p_name2 .title-discount {
    display: none;
}

.text-jaego {
    display: none;
}

.drawdiv.on {
    border: 1px solid #000 !important;
}

.bg-option {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.elip {
    width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}

/* 이미지 확대 css  start*/

#qna-popup .lg-maximize {
    display: none;
}

@keyframes moveleft {
  from {left: 0px;}
  to {left: -452px;}
}
.go-left {
    animation: moveleft 1s;
    animation-fill-mode: forwards;
}
@keyframes moveright {
  from {left: -452px;}
  to {left: 0px;}
}
.go-right {
    animation: moveright 1s;
    animation-fill-mode: forwards;
}

@keyframes moveleft2 {
  from {left: 452px;}
  to {left: 0px;}
}
.go-left2 {
    animation: moveleft2 1s;
    animation-fill-mode: forwards;
}
@keyframes moveright2 {
  from {left: 0px;}
  to {left: 452px;}
}
.go-right2 {
    animation: moveright2 1s;
    animation-fill-mode: forwards;
}

/* 이미지 확대 css end */

.product-img{
    width: 62px;
    height: 62px;
}

</style>
<!-- CSS -->
<link rel="stylesheet" href="css/pages/product_detail/product_detail.css">
<!-- Header Area End -->

<!-- Breadcumb Area -->
<div class="breadcrumb-wrap">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <!-- <h5>상품 상세페이지</h5>
                    <ol class="breadcrumb mt-4">
                        <li class="breadcrumb-item"><a href="/shop_main.php">HOME</a></li>
                        <li class="breadcrumb-item">SHOP</li>
                        <li class="breadcrumb-item">상품 상세페이지</li>
                    </ol> -->
                <ol class="breadcrumb mt-2 bg-white">
                    <li class="breadcrumb-item" id="large_sort"></li>
                    <li class="breadcrumb-item" id="middle_sort"></li>
                    <li class="breadcrumb-item" id="small_sort"></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb Area -->



<!-- Single Product Details Area -->
<section class="single_product_details_area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="single_product_thumb">
                    <div id="product_details">

                        <!-- Carousel Inner -->
                        <div id="mainImgSliderFor" class="overflow-hidden position-relative"></div>
                        <div id="mainImgSliderNav" class="mt-4 overflow-hidden"></div>

                        <!-- <div class="carousel js-flickity"
                                  data-flickity='{ "contain": true, "prevNextButtons": false, "pageDots": false, "wrapAround": true, "initialIndex": 0, "cellAlign": "left"  }'>
                                <a class="carousel-cell"><p>1</p></a>
                                <a class="carousel-cell"><p>2</p></a>
                                <a class="carousel-cell"><p>3</p></a>
                                <a class="carousel-cell"><p>4</p></a>
                                <a class="carousel-cell"><p>5</p></a>
                                <a class="carousel-cell"><p>6</p></a>
                                <a class="carousel-cell"><p>7</p></a>
                            </div> -->
                    </div>
                </div>
                <div class="reviewnum_wrap d-none">
                    리뷰수 <span class="fw-bold reviewnum" style="font-size:25px">0</span> ·
                    사용자 총 평점 <span class="fw-bold ml-1" style="font-size:25px"><span id="reviewStar">0</span> /
                        <span>5</span></span>
                </div>
            </div>

            <div class="col-12 col-lg-1 px-0"></div>
            <!-- Single Product Description -->
            <div class="col-12 col-lg-5 px-1">
                <div class="bg-white px-0 px-md-2 pb-3" id="quick_menu" style="border-top:2px solid black;">
                    <h5 style="font-size:16px"
                        class="d-flex title py-3 mb-0 this_pp p_name justify-content-between font-weight-bold text-dark">
                        <span class="dicPer font-weight-light text-danger"></span>
                    </h5>
                    <div style="padding-left:9px;">
                        <div class="p_onetext pb-2 text-secondary"></div>
                        <div id="hashtagWrap" class="d-none">
                            <div id="hashtagTd"></div>
                        </div>
                    </div>
                    <hr class="my-0">
                    <table class="table my-2 rightside mb-0" style="font-size:12px;">
                        <tr>
                            <td style="width:25%;">판매가</td>
                            <td style="font-size:14px;">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="">
                                        <span id="p_price" class="font-weight-bold disprice"></span> 원
                                    </div>
                                    <i class="fa-solid fa-share-nodes" style="font-size:20px; color:#ddd;"
                                        onclick="share()"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td id="soldPriceName">할인판매가</td>
                            <td style="font-size:20px;"><span id="p_consume_price"
                                    class="font-weight-bold text-danger"></span> 원
                                <span style="font-size:14px;">(<span id="diffprice">0</span>원 할인)</span>
                            </td>
                        </tr>
                        <tr>
                            <td>배송방법</td>
                            <td id="dt_del">택배</td>
                        </tr>
                        <tr>
                            <td>배송비</td>
                            <td id="dt_del_price"></td>
                        </tr>
                    </table>
                    <hr class="my-0">

                    <div class="py-3" style="font-size:12px;padding-left:10px;">최소주문수량 1개 이상</div>

                    <div class="mb-3 pr-3 d-flex" id="optionDiv" style="font-size:12px;padding-left:10px;">
                        <div class="option_list w-100">

                        </div>
                        <!-- <span>> 옵션</span>
                            <select class="form-control form-control-sm d-inline-block ml-auto" name="" style="font-size:12px; width:75%;" id="optionSel">
                                <option value="">-옵션을 선택해주세요-</option>
                            </select> -->
                    </div>

                    <div class="" id="additionalDiv">
                        <div class="px-3 py-2 d-flex border"
                            style="background:#fafafa; justify-content:space-between; align-items:center;">
                            <div class="">
                                <span class="font-weight-bold" style="font-size:13px;">추가구성상품</span> <span
                                    style="font-size:12px;">추가구매를 원하시면 선택해주세요.</span>
                            </div>
                            <div class="border bg-white p-1 px-2 pointer" style="font-size:12px;" id="additionalOpen">
                                <i class="fas fa-chevron-up"></i>
                            </div>
                        </div>
                        <div class="" id="more-product-wrap">

                        </div>
                    </div>

                    <hr id="pro-wrap-hr">

                    <div class="d-flex" id="pro-wrap"
                        style="font-size:12px; justify-content:space-between; align-items:center;">
                        <span class="p_name p_name2 w-75"></span>
                        <div class="d-flex align-items-center">
                            <input type="number" name="pronum" value="1" class="form-control form-control-sm procnttt"
                                style="width:52px; font-size:12px;" min="0" id="p_stock">
                            <div class="ml-1 admin_class text-jaego" style="width:50px;"></div>
                        </div>
                        <span class="font-weight-bold text-right" style="font-size:14px; width:30%;"><span
                                id="p_price_c"></span>원</span>
                    </div>

                    <hr class="mb-0">

                    <div class="mt-3" id="add-option-wrap">
                        <div class="option_1_draw">

                        </div>

                        <div class="option_2_draw">

                        </div>


                    </div>

                    <div class="" id="add-addoption-wrap">
                        <!-- <div class="py-2 d-flex add-option-box" style="font-size:12px; justify-content:space-between; align-items:center;">
                                <div class="">
                                    <span class="mb-2 mb-md-0 d-inline-block">asdfsadfdsfdsfdsf</span>
                                    <span class="add-option-name mb-1 mb-md-0 d-inline-block">asdfsadfdsfdsfdsfasdfasdfsafdsafsafsfs</span>
                                    <img src="/img/product-img/btn_price_delete.gif" alt=" " class="pointer add-option-delbtn">
                                </div>
                                <input type="number" name="" value="1" class="form-control form-control-sm ml-2 ml-md-0" style="width:52px; font-size:12px;">
                                <span class="font-weight-bold ml-2" style="font-size:14px;">70,000원</span>
                            </div> -->
                    </div>


                    <div class="d-flex my-4 col">
                        <div class="ml-auto">
                            <span style="font-size:14px;" class="font-weight-bold">총상품금액 : </span><span
                                style="font-size:25px;" class="font-weight-bold"><span
                                    id="totalPrice"></span>원</span><span style="font-size:12px;"> (<span
                                    id="totalNum">0</span>개)</span>
                        </div>
                    </div>

                    <div class="d-flex mb-2" style="font-size:14px;">
                        <div class="col-12 px-1">
                            <div class="text-center py-3 border pointer stockckBtn text-white" onclick="Buy()"
                                style="background-color:#333333">바로구매</div>
                        </div>
                    </div>

                    <div class="d-flex" style="font-size:14px;">
                        <div class="col-6 px-1">
                            <div class="text-center py-3 border pointer" onclick="Wishlist()">관심상품</div>
                        </div>
                        <div class="col-6 px-1">
                            <div class="text-center py-3 border pointer stockckBtn" onclick="Cart()">장바구니</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <style>
    .product_details_tab>ul>li {}

    .text-gray {
        color: #EBECEF;
    }

    .nav-tabs .nav-link.active,
    .nav-tabs .nav-link:hover,
    .nav-tabs .nav-link:visited,
    .nav-tabs .nav-link:link {
        border: none !important;
        background: none !important;
    }

    .nav-tabs li:hover {
        background: none !important;
    }

    .nav-tabs li:focus-visible {
        outline: none !important;
    }



    .text-count {
        background: #747794;
        color: white;
        padding: 3px 7px;
        border-radius: 3px;
    }

    .product-tab{
        margin-top: 0 !important;
    }
    </style>

    <div class="container" id="tab_boxs">
        <div class="row">
            <div class="col-12">
                <div class="product_details_tab clearfix border-0">
                    <!-- Tabs -->
                    <ul class="nav nav-tabs d-block border-0 mb-3 mb-md-5 text-center w-100 product-tab" role="tablist"
                        id="product-details-tab">
                        <li class="d-inline-block b_bottom">
                            <a href="#description" class="nav-link font-weight-bold" data-toggle="tab" role="tab"
                                style="color: #000 !important;">상세정보</a>
                        </li><span class="text-gray">|</span>
                        <li class="d-inline-block">
                            <a href="#reviews" class="nav-link font-weight-normal" data-toggle="tab" role="tab"
                                style="color: #000 !important;">리뷰 <span class="text-count"><span
                                        class="reviewnum">0</span></span></a>
                        </li><span class="text-gray">|</span>
                        <li class="d-inline-block">
                            <a href="#refund" class="nav-link font-weight-normal" data-toggle="tab" role="tab"
                                style="color: #000 !important;">Q&A <span class="text-count"><span
                                        class="quesnum">0</span></span></a>
                        </li><span class="text-gray">|</span>
                        <li class="d-inline-block">
                            <a href="#rebuy" class="nav-link font-weight-normal" data-toggle="tab" role="tab"
                                style="color: #000 !important;">반품/교환정보</a>
                        </li>
                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content" style="font-family:'nanum gothic'">
                        <div role="tabpanel" class="tab-pane active" id="description">

                            <div class="p_text text-center"></div>
                            <div class="my-5 text-center" id="banner"></div>
                            <div class="description_area">
                                <h5 class="text-center">상품상세정보</h5>
                                <table class="table mt-5" style="font-size:12px;">
                                    <tbody>
                                        <tr>
                                            <td>상품번호</td>
                                            <td id="pi_num"></td>
                                        </tr>
                                        <tr>
                                            <td>상품상태</td>
                                            <td id="pi_status"></td>
                                        </tr>
                                        <tr class="buisnessman">
                                            <td>부가세 면세여부</td>
                                            <td id="pi_dutyfree"></td>
                                        </tr>
                                        <tr>
                                            <td>영수증발행</td>
                                            <td id="pi_bill"></td>
                                        </tr>
                                        <tr class="buisnessman">
                                            <td>사업자 구분</td>
                                            <td id="pi_gubun"></td>
                                        </tr>
                                        <tr>
                                            <td>원산지</td>
                                            <td id="pi_origin"></td>
                                        </tr>
                                        <tr>
                                            <td>품명</td>
                                            <td id="pi_name"></td>
                                        </tr>
                                        <tr>
                                            <td>KC 인증 필 유무</td>
                                            <td id="pi_kccheck"></td>
                                        </tr>
                                        <tr>
                                            <td>색상</td>
                                            <td id="pi_color"></td>
                                        </tr>
                                        <tr>
                                            <td>구성품</td>
                                            <td id="pi_component"></td>
                                        </tr>
                                        <tr>
                                            <td>주요소재</td>
                                            <td id="pi_make"></td>
                                        </tr>
                                        <tr>
                                            <td>제조자/수입자</td>
                                            <td id="pi_importer"></td>
                                        </tr>
                                        <tr>
                                            <td>제조국</td>
                                            <td id="pi_country"></td>
                                        </tr>
                                        <tr>
                                            <td>크기</td>
                                            <td id="pi_size"></td>
                                        </tr>
                                        <tr>
                                            <td>배송/설치비용</td>
                                            <td id="pi_delprice"></td>
                                        </tr>
                                        <tr>
                                            <td>품질보증기준</td>
                                            <td id="pi_pomjil"></td>
                                        </tr>
                                        <tr>
                                            <td>A/S 책임자 전화번호</td>
                                            <td id="pi_as_tel"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane  fade" id="reviews">
                            <div id="review-wrap-top" class="row"></div>
                            <div class="reviews_area">
                                <ul>
                                    <li id="review-wrap">

                                    </li>
                                </ul>
                            </div>
                            <div id="review-paged-wrap" class="mb-5" style="margin-top:100px;">
                                <nav aria-label="Page navigation example">
                                    <ul id="review-paged-content" class="pagination justify-content-center"></ul>
                                </nav>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="refund">
                            <div class="refund_area">
                                <div class="mb-4">
                                    <table class="table text-center question-table">
                                        <tr>
                                            <th>답변상태</th>
                                            <th class="">내용</th>
                                            <th class="m-none">작성자</th>
                                            <th class="m-none">작성일</th>
                                        </tr>
                                        <tbody id="question-wrap">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="ques-paged-wrap" class="mb-5">
                                <nav aria-label="Page navigation example">
                                    <ul id="ques-paged-content" class="pagination justify-content-center"></ul>
                                </nav>
                            </div>
                            <div class="d-flex">
                                <!-- <div class="form-group" style="flex:1;">
                                        <label for="pq_title">문의제목</label>
                                        <input type="text" name="" value="" class="form-control w-100" id="pq_title">
                                    </div> -->
                                <!-- <div class="form-group ml-4 d-none pq_pass_wrap">
                                        <label for="pq_pass">비밀번호</label>
                                        <input type="password" name="" value="" class="form-control" id="pq_pass">
                                    </div> -->
                            </div>

                            <div class="text-right">
                                <div class="qa_text_wrap pointer" onclick="toggleWrite();">
                                    상품 Q&A
                                    작성하기
                                </div>
                            </div>

                            <div id="qna_write_wrap" class="d-none">
                                <div class="form-group">

                                    <label for="pq_coments">문의내용</label>
                                    <div class="form-group">

                                        <label class="btn btn-light btn-sm " for="pq_pic">사진 / 동영상 첨부하기</label>
                                        <input type="file" name="" value="" id="pq_pic" class="d-none" multiple>
                                        <div class="px-2 mt-2 row" id="pq_pic_div">

                                        </div>
                                    </div>

                                    <div id="pq_coments"></div>

                                    <div class="my-3 fs-12">
                                        *문의하신 내용에 대한 답변은 '마이페이지>상품 Q&A'에서 확인하실 수 있습니다.
                                    </div>
                                </div>
                                <div class="py-2">
                                    <label for="pq_secret" class="mb-0 pointer"><input type="checkbox" name="" value="Y"
                                            id="pq_secret"> 비밀글</label>
                                </div>
                                <div class="my-4 pb-lg-0 pb-2 d-flex">
                                    <span class="pointer px-3 py-2 border" onclick="addQues()">문의작성</span>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="rebuy">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Single Product Details Area End -->



<!-- 이미지 자세히보기 모달 공용 -->
<div class="modal" tabindex="-1" role="dialog" id="img-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="" alt=" " id="modal-img-more" class="w-100">
                <div class="" id="mdoal-img-wrap">

                </div>
                <div class="" id="mdoal-img-wrap-cont">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="share-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="p-4 share_icon_box">

                    <span>
                        <script type="text/javascript" src="https://ssl.pstatic.net/share/js/naver_sharebutton.js">
                        </script>
                        <script type="text/javascript">
                        new ShareNaver.makeButton({
                            "type": "f"
                        });
                        </script>
                    </span>
                    <span class="band_img">
                        <script type="text/javascript" src="//developers.band.us/js/share/band-button.js?v=15092022">
                        </script>
                        <script type="text/javascript">
                        new ShareBand.makeButton({
                            "lang": "ko-KR",
                            "type": "d"
                        });
                        </script>
                    </span>
                    <a id="kakaotalk-sharing-btn" onclick="sendLinkDefault()">
                        <img width="68px"
                            src="https://developers.kakao.com/assets/img/about/logos/kakaotalksharing/kakaotalk_sharing_btn_medium.png"
                            alt="카카오톡 공유 보내기 버튼" />
                    </a>
                    <img width="68px" onclick="sendNaverLine()" src="img/line.png?v=2" alt="네이버라인" />
                </div>
                <div class="px-4 pb-4 pt-0 share_icon_box">
                    <img width="68px" onclick="shareFacebook()" src='img/facebook_icon.png' class=" " />
                    <img width="68px" onclick="shareTwitter()" src='img/twitter.png' class=" " />
                    <img width="68px" style="opacity:0;" onclick="shareTwitter()" src='img/twitter.png' class=" " />
                    <img width="68px" style="opacity:0;" onclick="shareTwitter()" src='img/twitter.png' class=" " />
                </div>
                <div class="d-flex align-items-center">
                    <input type="text" name="" value="" class="form-control form-control-sm" id="share-input">
                    <span class="btn btn-sm btn-primary ml-2" style="width:100px" onclick="shareLink()">URL복사</span>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
#side_buy {
    position: fixed;
    left: 0;
    bottom: 0;
    box-shadow: 1px 0px 4px rgba(135, 135, 135, 0.19);
    -o-transition: left .5s ease;
    -ms-transition: left .5s ease;
    -moz-transition: left .5s ease;
    -webkit-transition: left .5s ease;
    transition: left .5s ease;
    width: 452px;
    background: #fff;
    border-radius: 2px;
    z-index: 1111;
    /* max-height: 305px; */
}

#side_buy .title {
    font-size: 16px;
}

#side_buy .d_title {
    width: 75px;
    display: inline-block;
}

.fold_btn {
    position: fixed;
    left: 452px;
    bottom: 0;
    border-radius: 0 3px 3px 0;
    background: #bbb;
    color: #fff;
    z-index: 1111;
    width: 34px;
    text-align: center;

}

.fold_btn i {
    color: #fff;
}

.side_width {
    width: 200px;
}

#m_nav {
    color: #fff;
    background: #333333;
    position: fixed;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1111;
}

#side_back {
    position: fixed;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    background: rgba(0, 0, 0, 0.3);
    z-index: 111;
}

#side_buy_close {
    position: fixed;
    right: 12px;
    font-weight: bold;
    color: #fff;
    font-size: 18px;
    cursor: pointer;
}

.dont{
    display: none;
}

.show_modal{
    display: block;
    position: fixed;
    top: 0;
    left: 0;
    background: white;
    height: 100vh;
    z-index: 999999;
    width: 100%;
    padding: 20px;
    overflow: auto;
}

#modal-side > div{
    height: 100%;
}

#modal-side table{
    height: 100%;
}

#btn-modal-close{
    position: fixed;
    top: 10px;
    right: 10px;
    color: #c4c4c4;
    font-size: 20px;
}

@media (max-width : 768px) {
    #side_buy {
        width: 100%;
    }
}
</style>
<div id="side_back" class="d-none"></div>
<div id="m_nav" class="py-3 text-center d-none">구매하기</div>
<div class="fold_btn py-2 pointer d-none">
    <div>옵</div>
    <div>션</div>
    <div>보</div>
    <div>기</div>
    <i class="fa-solid fa-chevron-left pointer"></i>
    <i class="fa-solid fa-chevron-right pointer d-none"></i>
</div>
<div id="side_buy" class="pt-2 pb-3 px-3 d-none">
    <div id="side_buy_close" class="d-none">X</div>
    <div id="side_buy_wrap">
        <div class="border-bottom pb-2">
            <p class="title mb-0 text-black p_name_side"></p>
        </div>
        <div>
            <div class="px-2 pb-0 pt-2">
                <span class="d_title">판매가</span>
                <span id="p_consume_price_side"></span>원
            </div>
            <div class="p-2 d-flex">
                <span class="d_title">배송비</span>
                <div id="dt_del_price_side"></div>
            </div>

            <div class="option_list_side pl-2"></div>
            <div id="side_add"></div>
        </div>

        <div id="pro-wrap_side" class="border-top d-flex justify-content-between py-2 align-items-center"
            style="gap:10px;">
            <div class="p_name_side fs-12"></div>
            <div class="d-flex align-items-center right_width">
                <input id="totalNum_side" min="1" class="mr-4 form-control form-control-sm" type="number" value="1"
                    style="width:52px;font-size:12px;">
                <div class="d-flex align-items-center justify-content-end" style="width:70px;">
                    <p id="p_price_c_side" class="mb-0 text-black font-weight-bold">0</p>
                    <span class="text-black font-weight-bold">원</span>
                </div>
            </div>
        </div>

        <div id="side-addoption-wrap">

        </div>

        <div class="border-top py-2">
            <div class="text-right">
                <span class="font-weight-bold" style="margin-top:-3px;">TOTAL :</span>
                <h5 id="totalPrice_side" class="mb-1 d-inline text-black">0</h5>
                <span class="font-weight-bold">원</span>
            </div>
        </div>

        <div class="d-flex justify-content-between" style="gap:10px;">
            <div class="py-2 border pointer text-white w-100 text-center" style="background:#333;" onclick="Buy();">바로구매
            </div>
            <div class="py-2 border pointe w-100 text-center" onclick="Cart();">장바구니</div>
            <div class="py-2 border pointe w-100 text-center" onclick="Wishlist();">관심상품</div>
        </div>

    </div>
</div>


<div id="modal-side" class="dont">
    <div class="position-relative">
        <div id="btn-modal-close"><i class="fa-solid fa-xmark"></i></div>
        <table class="w-100">
            <tr>
                <td>

                    <div class="border-bottom pb-2">
                        <p class="title mb-0 text-black p_name_side"></p>
                    </div>
                    <div>
                        <div class="px-2 pb-0 pt-2">
                            <span class="d_title">판매가</span>
                            <span id="p_consume_price_side"></span>원
                        </div>
                        <div class="p-2 d-flex">
                            <span class="d_title">배송비</span>
                            <div id="dt_del_price_side"></div>
                        </div>

                        <div class="option_list_side pl-2"></div>
                        <div id="side_add"></div>
                    </div>

                    <div id="pro-wrap_side" class="border-top d-flex justify-content-between py-2 align-items-center"
                        style="gap:10px;">
                        <div class="p_name_side fs-12"></div>
                        <div class="d-flex align-items-center right_width">
                            <input id="totalNum_side" min="1" class="mr-4 form-control form-control-sm" type="number" value="1"
                                style="width:52px;font-size:12px;">
                            <div class="d-flex align-items-center justify-content-end" style="width:70px;">
                                <p id="p_price_c_side" class="mb-0 text-black font-weight-bold">0</p>
                                <span class="text-black font-weight-bold">원</span>
                            </div>
                        </div>
                    </div>

                    <div id="side-addoption-wrap">

                    </div>

                    <div class="border-top py-2">
                        <div class="text-right">
                            <span class="font-weight-bold" style="margin-top:-3px;">TOTAL :</span>
                            <h5 id="totalPrice_side" class="mb-1 d-inline text-black">0</h5>
                            <span class="font-weight-bold">원</span>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mb-3" style="gap:10px;">
                        <div class="py-2 border pointer text-white w-100 text-center" style="background:#333;" onclick="Buy();">바로구매
                        </div>
                        <div class="py-2 border pointe w-100 text-center" onclick="Cart();">장바구니</div>
                        <div class="py-2 border pointe w-100 text-center" onclick="Wishlist();">관심상품</div>
                    </div>

                </td>
            </tr>
        </table>
    </div>

</div>


<style>
#bg-back {
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.7);
    z-index: 1112;
}


.comment textarea {

    width: 100%;
    border: none;
    overflow: auto;
    outline: none;

    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;

    resize: none;
    /*remove the resize handle on the bottom right*/
}

.one_line {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 190px;
}
</style>
<link rel="stylesheet" href="css/review.css">
<div id="bg-back" class="d-none"></div>
<div id="review-popup" class="d-none">
    <div class="review-popup-close">
        <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="poisition-relative h-100">
        <i class="fas fa-chevron-left rv-arrow left d-none"></i>
        <!-- <img class=" rv-arrow left d-none" src="img/mypage/arrow.png"> -->

        <div class="d-none d-md-block h-100">
            <div class="row mx-0 h-100">
                <div class="px-0 col-8 bg_wrap" id="bg_wrap"></div>
                <div class="col-4 px-0 right_side">
                    <div id="content_wrap" class="p-3 content_wrap">

                    </div>
                </div>
            </div>

        </div>

        <div class="d-block d-md-none">
            <div>
                <div class="px-0  bg_wrap bg_wraap_m "></div>
                <div class="w-100 px-0 cotent_wrap_m_div">
                    <div id="content_wrap_mm" class="p-3 content_wrap  w-100">

                    </div>
                </div>
            </div>




        </div>



        <i class="fas fa-chevron-right  rv-arrow right  d-none"></i>
    </div>
</div>


<div id="qna-popup" class="d-none">
    <div class="qna-popup-close">
        <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="poisition-relative h-100">
        <i class="fas fa-chevron-left rv-arrow left d-none"></i>
        <!-- <img class=" rv-arrow left d-none" src="img/mypage/arrow.png"> -->

        <div class="h-100">
            <div class="row mx-0 h-100">
                <div class="px-0 col-12 bg_wrap" id="qna_bg_wrap"></div>
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



<script src="/js/zoom-image.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.min.js"
    integrity="sha512-m5kAjE5cCBN5pwlVFi4ABsZgnLuKPEx0fOnzaH5v64Zi3wKnhesNUYq4yKmHQyTa3gmkR6YeSKW1S+siMvgWtQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- JS -->
<script src="/js/pages/product_detail/product_detail_load.js?V=3.1"></script>
<script src="/js/pages/product_detail/product_detail_review.js?V=3.1"></script>
<script src="/js/pages/product_detail/product_detail_ques.js?V=3.1"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js"
    integrity="sha512-jEJ0OA9fwz5wUn6rVfGhAXiiCSGrjYCwtQRUwI/wRGEuWRZxrnxoeDoNc+Pnhx8qwKVHs2BRQrVR9RE6T4UHBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lightgallery.min.css"
    integrity="sha512-F2E+YYE1gkt0T5TVajAslgDfTEUQKtlu4ralVq78ViNxhKXQLrgQLLie8u1tVdG2vWnB3ute4hcdbiBtvJQh0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


<script type="text/javascript">
var p_seq = '<?php echo $p_seq; ?>';


var po_seq_arr = [];

var r_page = 1;
var r_ppp = 5;
var q_page = 1;
var q_ppp = 5;
var shareImg = "";
var shareTitle = "";
var shareMoney = "";
var shareDc = "";
var reviewtoggle;

var totalPrice = 0;
var delivery_condition;
var delivery_type;
var delivery_price = 0;

var product_price = 0;

var isOption = false

$(function() {

    ////////////// 사업자회원시 도매가 가격 적용 ////////////////////
    if (user_info.u_type == '사업자회원' && user_info.u_status == 1) {
        $("#soldPriceName").text('사업자판매가')
    }
    ////////////// 사업자회원시 도매가 가격 적용 END ////////////////////

    if (user_info.u_type != '사업자회원') {
        $(".buisnessman").remove();
    }

    LoadProcut();

    LoadRebuyData();
    loadOpgitonGroup();

    var fontList = ['맑은 고딕', '돋움체', '굴림체', '바탕체', '궁서체', '나눔고딕', '나눔명조', '나눔바른고딕', '가는 나눔바른고딕'];
    $('#pr_comments').summernote({
        toolbar: [
            // ['style', ['style']],
            // ['fontsize', ['fontsize']],
            // ['font', ['bold', 'italic', 'underline', 'clear']],
            // ['fontname', ['fontname']],
            // ['color', ['color']],
            // ['para', ['ul', 'ol', 'paragraph']],
            // ['height', ['height']],
            // // ['insert', ['picture', 'hr','video','link']],
            // ['table', ['table']]
        ],
        height: 300, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        lang: 'ko-KR', // 기본 메뉴언어 US->KR로 변경
        fontNames: fontList,
        fontNamesIgnoreCheck: fontList,
        callbacks: {
            onImageUpload: function(files, editor, welEditable) {
                for (var i = files.length - 1; i >= 0; i--) {
                    fileUploadSummernote(files[i], this);
                }
            }
        }
    });

    // $('#pq_coments').summernote({
    //     toolbar: [
    //         ['insert', ['picture', 'video']],
    //     ],
    //     height : 300, // set editor height
    //     minHeight : null, // set minimum height of editor
    //     maxHeight : null, // set maximum height of editor
    //     lang : 'ko-KR', // 기본 메뉴언어 US->KR로 변경
    //     fontNames: fontList, fontNamesIgnoreCheck: fontList,
    //     callbacks: {
    // 		onImageUpload: function(files, editor, welEditable) {
    //             for (var i = files.length - 1; i >= 0; i--) {
    //             	fileUploadSummernote(files[i], this);
    //             }
    //         }
    // 	}
    // });

    $('#pq_coments').summernote({
        toolbar: [
            // ['style', ['style']],
            // ['fontsize', ['fontsize']],
            // ['font', ['bold', 'italic', 'underline', 'clear']],
            // ['fontname', ['fontname']],
            // ['color', ['color']],
            // ['para', ['ul', 'ol', 'paragraph']],
            // ['height', ['height']],
            // // ['insert', ['picture', 'hr','video','link']],
            // ['table', ['table']]
        ],
        height: 300, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        lang: 'ko-KR', // 기본 메뉴언어 US->KR로 변경
        fontNames: fontList,
        fontNamesIgnoreCheck: fontList,
        placeholder: '문의하실 내용을 입력하세요',
        callbacks: {
            onImageUpload: function(files, editor, welEditable) {
                for (var i = files.length - 1; i >= 0; i--) {
                    fileUploadSummernote(files[i], this);
                }
            }
        }
    });

    LoadReview()
    LoadQues()
    bannerLoad()
})

function CalcTotalPrice() {
    var optionPrice = 0;
    var additionalPrice = 0;

    var totalnum = 0;

    $.each($(".op-price"), function(i, v) {
        optionPrice += $(v).attr("data-price") * 1
    })

    $.each($(".addop-price"), function(i, v) {
        additionalPrice += $(v).attr("data-price") * 1
    })

    $.each($("input[name=pronum]"), function(i, v) {
        totalnum += $(v).val() * 1
    })
    $("#totalNum").text(totalnum)

    totalPrice = $('#p_price_c').attr("data-price") * 1 + optionPrice + additionalPrice;
    $('#totalPrice').text(comma(totalPrice))
    $('#totalPrice_side').text(comma(totalPrice))
}

$("#p_stock").on("change", function() {
    var product_price_total = $(this).val() * product_price;
    $('#p_price_c').attr("data-price", product_price_total)
    $('#p_price_c').text(comma(product_price_total))
    $('#p_price_c_side').attr("data-price", product_price_total)
    $('#p_price_c_side').text(comma(product_price_total))
    $('#totalNum_side').val($(this).val())
    CalcTotalPrice()
})

$("#totalNum_side").on("change", function() {
    var product_price_total = $(this).val() * product_price;
    $('#p_price_c').attr("data-price", product_price_total)
    $('#p_price_c').text(comma(product_price_total))
    $('#p_price_c_side').attr("data-price", product_price_total)
    $('#p_price_c_side').text(comma(product_price_total))
    $('#p_stock').val($(this).val())
    CalcTotalPrice()
})


////////////////////////////////////////////////////////옵션div 추가
var opArr = [];
$(document).on("click", '.drawdiv', function() {
    $('.drawdiv').removeClass('on');
    $(this).addClass('on');
    var po_seq = $(this).attr('data-target');
    console.log('po_seq : ', po_seq)
    var op_name = $(this).attr('data-name');
    if (!po_seq_arr.includes(po_seq)) {
        po_seq_arr.push(po_seq)
    }

    var obj = new Object();
    obj.po_seq = po_seq;

    $.ajax({
        url: SERVER_AP + "/admin/common/load_option",
        type: "post",
        cache: false,
        data: {
            table: 'product_option',
            common: obj,
        },
        success: function(data) {
            console.log('op_name', op_name);
            var v = data[0]
            let isSul = true
            console.log('vv', v);
            if (v) {

                if (v.po_option1 == '설치방법') {
                    $.each($("#add-option-wrap .add-option-box"), function(i, v) {
                        if ($(v).attr('data-type') == '설치방법') {
                            // isSul = false
                        }
                    })
                }


                opArr.push(v.po_seq)
                var toopprice = 0
                var disabledToggle = ''

                let isOnlySul = true
                $.each($(".optiontitle"), function(i, v) {
                    if (!$(v).hasClass('d-none')) {
                        if ($(v).attr('data-name') != '설치방법') isOnlySul = false
                    }
                })

                if (v.po_option1 != '설치방법') {
                    toopprice = product_price * 1 + v.po_price * 1
                } else if (v.po_option1 == '설치방법') {
                    if (v.po_price * 1 == 0) {
                        if (isOnlySul) {
                            toopprice = 0 + product_price
                        } else {
                            disabledToggle = 'disabled'
                            toopprice = 0
                        }
                    } else {
                        toopprice = v.po_price * 1
                    }
                }
                let optionCntStr = ''
                if (user_info.u_type) {
                    optionCntStr =
                        '<div class="ml-1 text-jaego" style="width:50px;"> / <span class="text-primary ml-1">' +
                        v.po_stock + '</span></div>'
                }



                var str =
                    `
                    <div class="py-4 border-bottom row add-option-box box_${v.po_seq} mx-auto" style="font-size:12px;" data-target="${v.po_seq}" data-type="${v.po_option1}">
                        <div class="col-6">
                            <div class="one_line font-weight-bold">
                                ${v.p_name}
                            </div>
                            <span class="text-secondary mb-1 mb-md-0 d-inline-block"> - ${v.po_option1} ${v.po_option2}</span>
                        </div>
                        <div class="col-2 text-center d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <input type="number" name="pronum" value="1" class="form-control form-control-sm mx-auto proOption${v.po_seq} procnttt"
                                style="width:52px; font-size:12px;"data-max="${v.po_stock}" data-max="${v.po_stock}" min="1"
                                onchange="ChangeOpNum(this,${toopprice},${v.po_seq})" ${disabledToggle}>
                                ${optionCntStr}
                            </div>
                        </div>
                        <div class="font-weight-bold text-center op_price_tag col-4">
                                <div>
                                    <span class="font-weight-bold op-price"
                                    data-price="${toopprice}">${comma(toopprice)}</span>원
                                </div>

                                <i class="fa-solid fa-xmark  add-option-delbtn pointer " style="color:#c4c4c4; font-size:20px;"></i>
                        </div>
                    </div>`;


                var side_str =
                    '<div class="py-2 d-flex add-option-box_side side_box_' + v.po_seq +
                    ' row" style="font-size:12px;" data-target="' +
                    v.po_seq + '" data-type="' + v.po_option1 + '">\
                                        <div class="col-7">\
                                            <span class="add-option-name mb-1 mb-md-0 d-inline-block"> ' + v
                    .po_option1 + ' ' + v.po_option2 + ' (+' + comma(v.po_price) +
                    '원)</span>\
                                            <img src="/img/product-img/btn_price_delete.gif" alt=" " class="pointer add-option-delbtn">\
                                        </div>\
                                        <div class="col-5 d-flex align-items-center justify-content-between text-right">\
                                        <div class="d-flex align-items-center">\
                                            <input type="number" name="pronum_side" value="1" class="form-control form-control-sm ml-2 ml-md-0 side_proOption' +
                    v.po_seq +
                    ' procnttt" style="width:52px; font-size:12px;"data-max="' + v.po_stock +
                    '" data-max="' + v.po_stock + '" min="1" onchange="ChangeOpNum2(this, ' +
                    toopprice + ', ' + v.po_seq + ')" ' + disabledToggle + '>\
                                            ' + optionCntStr +
                    '\
                                        </div>\
                                        <span class="text-black font-weight-bold text-right ml-2 op_price_tag" style="width:auto;"><span class="text-black op-price_side" data-price="' +
                    toopprice + '">' + comma(toopprice) + '</span>원</span>\
                                    </div>\
                                    </div>';


                if (v.po_option1 != '설치방법') {
                    if ($('.add-option-box').hasClass(`box_${po_seq}`)) {

                    } else {
                        $(".option_1_draw").append(str)
                    }

                } else {
                    $(".option_2_draw").html(str)
                }

                if ($('.add-option-box_side').hasClass(`side_box_${po_seq}`)) {

                } else {
                    $("#side-addoption-wrap").append(side_str);
                }


                //$("#add-option-wrap").attr('class',"border-bottom py-1 mb-3")

            } else {
                if (v.po_option1 != '설치방법') {
                    $(".option_1_draw").html('')
                } else {
                    $(".option_2_draw").html('')
                }


            }


            CalcTotalPrice()

            //$("#optionSel option:eq(0)").prop("selected",true)
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
});
$(document).on("change", '.drawoptiongo', function() {
    var po_seq = $(this).val();
    var op_name = $(this).attr('data-name');
    if (!po_seq_arr.includes(po_seq)) {
        po_seq_arr.push(po_seq)
    }

    var obj = new Object();
    obj.po_seq = po_seq;

    $.ajax({
        url: SERVER_AP + "/admin/common/load_option",
        type: "post",
        cache: false,
        data: {
            table: 'product_option',
            common: obj,
        },
        success: function(data) {
            console.log('op_name', op_name);
            var v = data[0]
            let isSul = true
            console.log('vv', v);
            if (v) {
                if (v.po_option1 == '설치방법') {
                    $.each($("#add-option-wrap .add-option-box"), function(i, v) {
                        if ($(v).attr('data-type') == '설치방법') {
                            // isSul = false
                        }
                    })
                }


                opArr.push(v.po_seq)
                var toopprice = 0
                var disabledToggle = ''

                let isOnlySul = true
                $.each($(".optiontitle"), function(i, v) {
                    if (!$(v).hasClass('d-none')) {
                        if ($(v).attr('data-name') != '설치방법') isOnlySul = false
                    }
                })

                if (v.po_option1 != '설치방법') {
                    toopprice = product_price * 1 + v.po_price * 1
                } else if (v.po_option1 == '설치방법') {
                    if (v.po_price * 1 == 0) {
                        if (isOnlySul) {
                            toopprice = 0 + product_price
                        } else {
                            disabledToggle = 'disabled'
                            toopprice = 0
                        }
                    } else {
                        toopprice = v.po_price * 1
                    }
                }
                let optionCntStr = ''
                if (user_info.u_type) {
                    optionCntStr =
                        '<div class="ml-1 text-jaego" style="width:50px;"> / <span class="text-primary ml-1">' +
                        v.po_stock + '</span></div>'
                }

                console.log('undefined 찾기 : ', v)

                var str =
                    `
                    <div class="py-4 border-bottom row add-option-box mx-auto" style="font-size:12px;" data-target="${v.po_seq}" data-type="${v.po_option1}">
                        <div class="col-6">
                            <div class="one_line font-weight-bold">
                                [${v.p_name}]
                            </div>
                            <span class="text-secondary mb-1 mb-md-0 d-inline-block"> - ${v.po_option1} ${v.po_option2}</span>
                        </div>
                        <div class="col-2 text-center d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <input type="number" name="pronum" value="1" class="form-control form-control-sm mx-auto proOption${v.po_seq} procnttt"
                                style="width:52px; font-size:12px;"data-max="${v.po_stock}" data-max="${v.po_stock}" min="1"
                                onchange="ChangeOpNum(this,${toopprice},${v.po_seq})" ${disabledToggle}>
                                ${optionCntStr}
                            </div>
                        </div>
                        <div class="font-weight-bold text-center op_price_tag col-4">
                                <div>
                                    <span class="font-weight-bold op-price"
                                    data-price="${toopprice}">${comma(toopprice)}</span>원
                                </div>

                                <i class="fa-solid fa-xmark  add-option-delbtn pointer " style="color:#c4c4c4; font-size:20px;"></i>
                        </div>
                    </div>`;



                var side_str =
                    '<div class="py-2 d-flex add-option-box_side row" style="font-size:12px;" data-target="' +
                    v.po_seq + '" data-type="' + v.po_option1 + '">\
                                        <div class="col-7">\
                                            <span class="add-option-name mb-1 mb-md-0 d-inline-block"> ' + v
                    .po_option1 + ' ' + v.po_option2 + ' (+' + comma(v.po_price) +
                    '원)</span>\
                                            <img src="/img/product-img/btn_price_delete.gif" alt=" " class="pointer add-option-delbtn">\
                                        </div>\
                                        <div class="col-5 d-flex align-items-center justify-content-between text-right">\
                                        <div class="d-flex align-items-center">\
                                            <input type="number" name="pronum_side" value="1" class="form-control form-control-sm ml-2 ml-md-0 side_proOption' +
                    v.po_seq +
                    ' procnttt" style="width:52px; font-size:12px;"data-max="' + v.po_stock +
                    '" data-max="' + v.po_stock + '" min="1" onchange="ChangeOpNum2(this, ' +
                    toopprice + ', ' + v.po_seq + ')" ' + disabledToggle + '>\
                                            ' + optionCntStr +
                    '\
                                        </div>\
                                        <span class="text-black font-weight-bold text-right ml-2 op_price_tag" style="width:auto;"><span class="text-black op-price_side" data-price="' +
                    toopprice + '">' + comma(toopprice) + '</span>원</span>\
                                    </div>\
                                    </div>';


                if (v.po_option1 != '설치방법') {
                    $(".option_1_draw").append(str)
                } else {
                    $(".option_2_draw").html(str)
                }

                $("#side-addoption-wrap").append(side_str);

                //$("#add-option-wrap").attr('class',"border-bottom py-1 mb-3")

            } else {
                if (v.po_option1 != '설치방법') {
                    $(".option_1_draw").html('')
                } else {
                    $(".option_2_draw").html('')
                }


            }


            CalcTotalPrice()

            //$("#optionSel option:eq(0)").prop("selected",true)
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
})

function ChangeOpNum(e, price, po_seq) {
    var copval = $(e).val() * price
    $(e).closest(".add-option-box").find(".op-price").text(comma(copval))
    $(e).closest(".add-option-box").find(".op-price").attr("data-price", copval)


    $('.side_proOption' + po_seq).closest(".add-option-box_side").find(".op-price_side").text(comma(copval))
    $('.side_proOption' + po_seq).closest(".add-option-box_side").find(".op-price_side").attr("data-price", copval)


    $('.side_proOption' + po_seq).val($(e).val())


    CalcTotalPrice()
}

function ChangeOpNum2(e, price, po_seq) {

    var copval = $(e).val() * price
    $(e).closest(".add-option-box").find(".op-price").text(comma(copval))
    $(e).closest(".add-option-box").find(".op-price").attr("data-price", copval)

    $('.proOption' + po_seq).closest(".add-option-box").find(".op-price").text(comma(copval))
    $('.proOption' + po_seq).closest(".add-option-box").find(".op-price").attr("data-price", copval)


    $('.proOption' + po_seq).val($(e).val())
    CalcTotalPrice()
}

$(document).on("click", ".add-option-delbtn", function() {
    var thisval = $(this).closest(".add-option-box").attr("data-target");
    var sideCheck = false;
    if (!thisval) {
        thisval = $(this).closest(".add-option-box_side").attr("data-target");
        sideCheck = true;
    }
    console.log('thisval : ', thisval)
    for (var i = 0; i < opArr.length; i++) {
        if (opArr[i] == thisval) {
            opArr.splice(i, 1);
            i--;
        }
    }

    for (var i = 0; i < po_seq_arr.length; i++) {
        if (po_seq_arr[i] == thisval) {
            po_seq_arr.splice(i, 1);
            i--;
        }
    }
    if (sideCheck) {
        $(this).closest(".add-option-box_side").remove()
        $('.add-option-box').each(function(i, v) {
            if ($(v).attr('data-target') == thisval) {
                $(v).remove();
            }
        })
    } else {
        $(this).closest(".add-option-box").remove()
        $('.add-option-box_side').each(function(i, v) {
            if ($(v).attr('data-target') == thisval) {
                $(v).remove();
            }
        })
    }

    CalcTotalPrice()
})


function toggleWrite() {
    var $qnaWriteWrap = $('#qna_write_wrap');
    var offset = $("#question-wrap").offset();

    $('#question-wrap details').fadeOut();

    // Check if the element is visible
    if ($qnaWriteWrap.is(':visible')) {
        $qnaWriteWrap.addClass('d-none'); // Hide the element
    } else {
        $qnaWriteWrap.removeClass('d-none'); // show_modal the element


        // Always scroll to the specified offset
        $("html, body").animate({
            scrollTop: offset.top
        }, 400);
    }

}

////////////////////////////////////////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////추가구성상품div 추가
var addopArr = [];
$(document).on("change", ".addoption", function() {
    var whatop = $(this).attr('data-target');

    var table = '';

    var obj = new Object();

    if (whatop == 'N') {
        table = 'product'
        obj.p_seq = $(this).val();
    } else {
        table = 'product_option';
        obj.po_seq = $(this).val();
    }

    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        data: {
            table: table,
            common: obj,
        },
        success: function(data) {
            var v = data[0];


            ////////////// 사업자회원시 도매가 가격 적용 ////////////////////
            if (v.p_wholesale && user_info.u_type == '사업자회원' && user_info.u_status == 1) {
                v.p_price = v.p_wholesale
                v.dt_seq = v.dt_seq_up
            }
            ////////////// 사업자회원시 도매가 가격 적용 END ////////////////////

            var addtionalPrice;
            var addtionalName;
            var toapPrice;
            var seq = '';
            var stock = '';
            var name = '';
            if (whatop == 'N') {
                seq = v.p_seq;
                stock = v.p_stock
                addtionalPrice = v.p_price;
                addtionalName = v.p_name;
                toapPrice = v.p_price;
                name = comma(v.p_price) + '원'
            } else {
                seq = v.po_seq
                stock = v.po_stock
                addtionalPrice = LoadAddPrice(v.p_seq);
                addtionalName = LoadAddName(v.p_seq);
                console.log('addtionalPrice', addtionalPrice);
                toapPrice = (addtionalPrice * 1) + (v.po_price * 1);
                name = v.po_option1 + ' ' + v.po_option2 + ' (+' + comma(v.po_price) + '원)'
            }

            if ($.inArray(seq, addopArr) == -1) {
                addopArr.push(seq)
                var str =
                    `
                <div class="py-4 border-bottom row add-option-box mx-auto" style="font-size:12px;" data-target="${seq}" data-type="${v.po_option1}">
                    <div class="pl-0 col-4">
                        <div class="one_line font-weight-bold">
                            ${addtionalName}
                        </div>
                        <span class="text-secondary mb-1 mb-md-0 d-inline-block"> - ${name}</span>
                    </div>
                    <div class="pr-0 col-4  text-center">
                        <div class="text-center">
                        <input type="number" name="pronum" value="1" class="form-control form-control-sm mx-auto proOption${seq} procnttt"
                            style="width:52px; font-size:12px;"
                            data-max="${stock}" min="1" onchange="ChangeAddOpNum(this, ${toapPrice})">
                        </div>
                    </div>
                    <div class="font-weight-bold text-center op_price_tag col-4">
                            <div>
                                <span class="addop-price" data-price="${toapPrice}">${comma(toapPrice)}</span>원
                            </div>

                            <i class="fa-solid fa-xmark  add-option-delbtn pointer " style="color:#c4c4c4; font-size:20px;"></i>
                    </div>
                </div>
                `;


                var side_str = `<div class="py-2 border-top row add-option-box_side" data-target="${seq}">
                    <div class="fs-12 col-7"><span class="mb-1 d-block font-weight-bold">${addtionalName}</span><span class="add-option-name_side">${name}</span> <img src="/img/product-img/btn_price_delete.gif" alt=" " class="pointer add-addoption-delbtn"></div>
                    <div class="col-5 d-flex align-items-center side_width justify-content-between text-right">
                        <div><input class="form-control form-control-sm side_option_input${seq}" style="width:52px;font-size:12px;"  data-max="${stock}" min="1" class="" type="number" value="1" onchange="ChangeAddOpNum2('.proOption${seq}', this ,${toapPrice})"/></div>
                        <p class="text-black mb-0 font-weight-bold addop-price${seq}" data-price="${toapPrice}" style="width:70px;">${comma(toapPrice)}원</p>
                    </div>

                </div>`;
                $("#side-addoption-wrap").append(side_str);
                $("#add-addoption-wrap").append(str);
                //$("#add-addoption-wrap").attr('class',"border-bottom mb-3 py-1")

                //$("#add-option-wrap").attr('class',"border-bottom py-1")
            }

            CalcTotalPrice()
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
})

$(document).on("change", ".side_addoption", function() {
    var whatop = $(this).attr('data-target');
    console.log('whatop : ', whatop)
    console.log('value : ', $(this).val())
    var table = '';

    var obj = new Object();

    if (whatop == 'N') {
        table = 'product'
        obj.p_seq = $(this).val();
    } else {
        table = 'product_option';
        obj.po_seq = $(this).val();
    }

    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        data: {
            table: table,
            common: obj,
        },
        success: function(data) {
            var v = data[0]
            console.log('v : ', v)
            ////////////// 사업자회원시 도매가 가격 적용 ////////////////////
            if (v.p_wholesale && user_info.u_type == '사업자회원' && user_info.u_status == 1) {
                v.p_price = v.p_wholesale
                v.dt_seq = v.dt_seq_up
            }
            ////////////// 사업자회원시 도매가 가격 적용 END ////////////////////
            console.log('next')
            var addtionalPrice;
            var addtionalName;
            var toapPrice;
            var seq = '';
            var stock = '';
            var name = '';

            if (whatop == 'N') {
                seq = v.p_seq;
                stock = v.p_stock
                addtionalPrice = v.p_price;
                addtionalName = v.p_name;
                toapPrice = v.p_price;
                name = comma(v.p_price) + '원'
            } else {
                seq = v.po_seq
                stock = v.po_stock
                addtionalPrice = LoadAddPrice(v.p_seq);
                addtionalName = LoadAddName(v.p_seq);
                console.log('addtionalPrice', addtionalPrice);
                toapPrice = (addtionalPrice * 1) + (v.po_price * 1);
                name = v.po_option1 + ' ' + v.po_option2 + ' (+' + comma(v.po_price) + '원)'
            }

            if ($.inArray(seq, addopArr) == -1) {
                addopArr.push(seq)
                var str =
                    '<div class="py-1 row add-option-box" style="font-size:12px;" data-target="' +
                    seq + '">\
                                    <div class="col-7">\
                                        <span class="mb-1 d-block font-weight-bold">' + addtionalName + '</span>\
                                        - <span class="add-option-name mb-1 mb-md-0 d-inline-block">' + name +
                    '</span>\
                                        <img src="/img/product-img/btn_price_delete.gif" alt=" " class="pointer add-addoption-delbtn">\
                                    </div>\
                                    <div  class="col-5 d-flex align-items-center justify-content-between">\
                                    <div>\
                                        <input type="number" name="pronum" value="1" class="form-control form-control-sm ml-2 ml-md-0 proOption' +
                    seq +
                    ' procnttt" style="width:52px; font-size:12px;" data-max="' + stock +
                    '" min="1" onchange="ChangeAddOpNum(this, ' + toapPrice +
                    ')">\
                                         <div class="ml-1 text-jaego" style="width:50px;"> / <span class="text-primary ml-1">' +
                    stock +
                    '</span></div>\
                                    </div>\
                                    <span class="font-weight-bold text-right ml-2 op_price_tag"><span class="addop-price" data-price="' +
                    toapPrice + '">' + comma(toapPrice) + '</span>원</span></div>\
                                </div>';


                var side_str = `<div class="py-2 border-top row add-option-box_side"  data-target="${seq}">
                    <div class="fs-12 col-7"><span class="mb-1 d-block font-weight-bold">${addtionalName}</span><span class="add-option-name_side">${name}</span> <img src="/img/product-img/btn_price_delete.gif" alt=" " class="pointer add-addoption-delbtn"></div>
                    <div class="col-5 d-flex align-items-center justify-content-between text-right">
                        <div><input class="form-control form-control-sm side_option_input${seq}" style="width:52px;font-size:12px;"  data-max="${stock}" min="1" class="" type="number" value="1" onchange="ChangeAddOpNum2('.proOption${seq}', this ,${toapPrice})"/></div>
                        <p class="text-black mb-0 font-weight-bold addop-price${seq}" data-price="${toapPrice}" style="width:70px;">${comma(toapPrice)}원</p>
                    </div>

                </div>`;
                $("#side-addoption-wrap").append(side_str);
                $("#add-addoption-wrap").append(str);
                //$("#add-addoption-wrap").attr('class',"border-bottom mb-3 py-1")

                //$("#add-option-wrap").attr('class',"border-bottom py-1")
            }

            CalcTotalPrice()
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
})

function ChangeAddOpNum(e, price) {
    var copval = $(e).val() * price
    $(e).closest(".add-option-box").find(".addop-price").text(comma(copval))
    $(e).closest(".add-option-box").find(".addop-price").attr("data-price", copval)
    let op = $(e).closest(".add-option-box").attr('data-target');
    $(`.addop-price${op}`).text(comma(copval) + '원');
    $(`.side_option_input${op}`).val($(e).val())

    CalcTotalPrice()
}

function ChangeAddOpNum2(e, tr, price) {
    var copval = $(tr).val() * price
    $(e).closest(".add-option-box").find(".addop-price").text(comma(copval))
    $(e).closest(".add-option-box").find(".addop-price").attr("data-price", copval)
    let op = $(e).closest(".add-option-box").attr('data-target');
    $(`.addop-price${op}`).text(comma(copval) + '원');
    $(e).val($(tr).val())

    CalcTotalPrice()
}

$(document).on("click", ".add-addoption-delbtn", function() {
    var thisval = $(this).closest(".add-option-box").attr("data-target")
    var sideCheck = false;
    if (!thisval) {
        thisval = $(this).closest(".add-option-box_side").attr("data-target");
        sideCheck = true;
    }
    for (var i = 0; i < addopArr.length; i++) {
        if (addopArr[i] == thisval) {
            addopArr.splice(i, 1);
            i--;
        }
    }

    if (sideCheck) {
        $(this).closest(".add-option-box_side").remove()
        $(".add-option-box").each(function(i, v) {
            if ($(v).attr('data-target') == thisval) {
                $(v).remove();
            }
        })
    } else {
        $(this).closest(".add-option-box").remove()
        $(".add-option-box_side").each(function(i, v) {
            if ($(v).attr('data-target') == thisval) {
                $(v).remove();
            }
        })
    }

    CalcTotalPrice()
})



function LoadAddPrice(p_seq) {
    var paPrice = 0;
    var obj = new Object();
    obj.p_seq = p_seq;
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'product',
            common: obj,
        },
        success: function(data) {
            ////////////// 사업자회원시 도매가 가격 적용 ////////////////////
            if (data[0].p_wholesale && user_info.u_type == '사업자회원' && user_info.u_status == 1) {
                data[0].p_price = data[0].p_wholesale
            }
            ////////////// 사업자회원시 도매가 가격 적용 END ////////////////////
            paPrice = data[0].p_price
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    return paPrice;
}

function LoadAddName(p_seq) {
    var paName = '';
    var obj = new Object();
    obj.p_seq = p_seq;
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'product',
            common: obj,
        },
        success: function(data) {
            paName = data[0].p_name
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    return paName;
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////구매
function Buy() {
    let isStock = true;
    let optionCheck = false;
    $.each($("#add-option-wrap .add-option-box"), function(i, v) {
        console.log('buy', $(v).attr('data-target'));
        if (buyCheckOp($(v).attr('data-target'))) {
            isStock = false
        }
    })

    if (buyCheck(p_seq)) {
        isStock = false
    }
    console.log('buyCheck', buyCheck(p_seq));
    console.log('isStock', isStock);
    if (!isStock) {
        console.log('여안탐?');
        alert("품절된 상품이 있습니다.")
        return false;
    }

    let equipnum = 0
    let nonequipnum = 0

    let checkArr = [];
    let checkArr2 = [];
    $.each($(".onOption"), function(i, v) {
        checkArr.push($(v).attr('data-name'));
    })

    $.each($(".add-option-box"), function(i, v) {
        if ($(v).attr('data-type') != null) {
            checkArr2.push($(v).attr('data-type'))
        }
    })

    if (JSON.stringify(checkArr) || JSON.stringify(checkArr2) == '[null]') {
        optionCheck = true;
    } else {
        optionCheck = false;
    }

    console.log('checkArr', JSON.stringify(checkArr));
    console.log('optionCheck', JSON.stringify(checkArr2));

    if (!optionCheck) {

        alert('옵션을 선택해주세요.');


    } else {
        var totalnum = 0;
        $.each($("input[name=pronum]"), function(i, v) {
            totalnum += $(v).val() * 1
        })
        if (totalnum == 0) {
            alert("상품을 한개이상 선택해주세요.")
            return false;
        } else {
            if (confirm("바로구매 하시겠습니까?")) {
                if (!user_info) {
                    let randomseq = Math.random().toString(16).substr(2, 9)
                    //ProductSetting('buy', randomseq)
                    // location.href="/buy.php"

                    ProductSetting('cart', randomseq)
                    //location.href = "/login.php?buyon=Y"
                    /* 로그인화면 갔다가 이동하는게 비효율적인것같아서 바로 이동하도록 변경 */
                    location.href = "/cart.php";


                    // $.ajax({
                    //     url: SERVER_AP+"/cart/dupli",
                    //     type: "post",
                    //     cache: false,
                    //     data:{
                    //         p_seq:p_seq,
                    //         u_seq:randomseq,
                    //         po_seq_arr:po_seq_arr,
                    //     },
                    //     success: function(data){
                    //         if(data.c_cnt == 0){
                    //             ProductSetting('cart', randomseq)
                    //             location.href="/login.php?buyon=Y"
                    //         }else{
                    //             alert("이미 장바구니에 등록된 상품이 있습니다.")
                    //         }
                    //     },
                    //     error: function (request, status, error){
                    //         console.log(error);
                    //     }
                    // });

                } else {
                    let randomseq = Math.random().toString(16).substr(2, 9)
                    ProductSetting('buy', randomseq);
                    location.href = "/order.php?buy=direct"

                    // $.ajax({
                    //     url: SERVER_AP+"/cart/dupli",
                    //     type: "post",
                    //     cache: false,
                    //     data:{
                    //         p_seq:p_seq,
                    //         u_seq:user_info.u_seq,
                    //         po_seq_arr:po_seq_arr,
                    //     },
                    //     success: function(data){
                    //         if(data.c_cnt == 0){
                    //             ProductSetting('cart');
                    //             location.href="/cart.php"
                    //         }else{
                    //             alert("이미 장바구니에 등록된 상품입니다.")
                    //         }
                    //     },
                    //     error: function (request, status, error){
                    //         console.log(error);
                    //     }
                    // });
                }
            }
        }
    }
}


//////////////////////////////////////////장바구니
function Cart() {
    let isStock = true;
    let optionCheck = false;

    $.each($("#add-option-wrap .add-option-box"), function(i, v) {
        if (buyCheckOp(opseqGOpseq($(v).attr('data-target')))) {
            isStock = false
        }
    })

    if (buyCheck(p_seq)) {
        isStock = false
    }

    if (!isStock) {
        alert("품절된 상품이 있습니다.")
        return
    }

    let equipnum = 0
    let nonequipnum = 0
    $.each($("#add-option-wrap .add-option-box"), function(i, v) {
        if ($(v).attr('data-type') != '설치방법') {
            nonequipnum++;
        } else {
            equipnum++;
        }
    })

    let checkArr = [];
    let checkArr2 = [];
    $.each($(".onOption"), function(i, v) {
        checkArr.push($(v).attr('data-name'));
    })

    $.each($(".add-option-box"), function(i, v) {
        if ($(v).attr('data-type') != null) {
            checkArr2.push($(v).attr('data-type'))
        }
    })

    if (JSON.stringify(checkArr) == JSON.stringify(checkArr2)) {
        optionCheck = true;
    } else {
        optionCheck = false;
    }
    // 기본 있던거
    // isOption && equipnum && nonequipnum

    if (!user_info) {
        alert('로그인을 먼저 해주세요.');
        location.href = 'login.php'
    } else if (!optionCheck) {
        alert('옵션을 선택해주세요.');
    } else {
        var totalnum = 0;
        $.each($("input[name=pronum]"), function(i, v) {
            totalnum += $(v).val() * 1
        })

        if (totalnum == 0) {
            alert("상품을 한개이상 선택해주세요.")
            return false;
        } else {
            if (confirm("장바구니에 담으시겠습니까?")) {
                $.ajax({
                    url: SERVER_AP + "/cart/dupli",
                    type: "post",
                    cache: false,
                    data: {
                        p_seq: p_seq,
                        u_seq: user_info.u_seq,
                        po_seq_arr: JSON.stringify(po_seq_arr),
                    },
                    success: function(data) {
                        if (data.c_cnt == 0) {
                            ProductSetting('cart');
                            if (confirm("장바구니에 등록되었습니다. 장바구니로 이동하시겠습니까?")) {
                                location.href = "/cart.php"
                            }
                        } else {
                            addCartCnt(data.c_cnt, data.c_seq);
                            if (confirm("장바구니에 등록되었습니다. 장바구니로 이동하시겠습니까?")) {
                                location.href = "/cart.php"
                            }
                        }
                    },
                    error: function(request, status, error) {
                        console.log(error);
                    }
                });
            }
        }
    }
}

//////// 상품 정보 셋팅
function ProductSetting(type, randomseq) {
    var obj = new Object()
    //obj.p_seq = p_seq;
    if (user_info.u_seq) {
        obj.u_seq = user_info.u_seq;
    } else {
        obj.u_seq = randomseq;
    }
    ///////////////////////////////// 상품정보
    if ($("#pro-wrap").find('input[name=pronum]').val() != 0) {
        var proArr = {
            'randomseq': randomseq,
            'p_seq': p_seq,
            'cnt': $("#pro-wrap").find('input[name=pronum]').val(),
        };
        obj.os_pro_data = JSON.stringify(proArr)
        obj.p_seq = p_seq;
    }

    var optionArr = []; ////////////////////////// 옵션 정보
    let isEquip = false
    let equipNum = 0;
    let nonequipNum = 0;
    $.each($("#add-option-wrap .add-option-box"), function(i, v) {
        if ($(v).attr('data-type') != '설치방법') {
            var arr = {
                'randomseq': randomseq,
                'p_seq': opseqGOpseq($(v).attr('data-target')),
                'op_seq': $(v).attr('data-target'),
                'cnt': $(v).find('input[name=pronum]').val(),
            }
            optionArr.push(arr)
            nonequipNum++;
        } else {
            isEquip = $(v).attr('data-target')
            equipNum++
        }
    })


    $.each($("#add-option-wrap .add-option-box"), function(i, v) {
        if (nonequipNum == 0 && equipNum != 0) {
            var arr = {
                'randomseq': randomseq,
                'p_seq': opseqGOpseq($(v).attr('data-target')),
                'op_seq': $(v).attr('data-target'),
                'cnt': $(v).find('input[name=pronum]').val(),
            }
            optionArr.push(arr)
        }
    })
    $.each($("#add-option-wrap .add-option-box"), function(i, v) {
        if ($(v).attr('data-type') == '설치방법') {
            isEquip = $(v).attr('data-target')
        }
    })
    $.each(optionArr, function(i, v) {
        if (isEquip) {
            v.c_equip = isEquip
        }
    })

    if (optionArr.length != 0) {
        obj.os_option_data = JSON.stringify(optionArr);
    }

    var addoptionArr = []; ////////////////////////// 추가구성상품옵션 정보
    console.log('여기까진 ok');
    $.each($("#add-addoption-wrap .add-option-box"), function(i, v) {
        var arr = {
            'randomseq': randomseq,
            'p_seq': opseqGOpseq($(v).attr('data-target')),
            'addop_seq': $(v).attr('data-target'),
            'cnt': $(v).find('input[name=pronum]').val(),
        }
        addoptionArr.push(arr)
    })
    if (addoptionArr.length != 0) {
        obj.os_addoption_data = JSON.stringify(addoptionArr);
    }

    if (delivery_condition) {
        if (delivery_type == '원 이하') {
            if (delivery_condition >= totalPrice) { ////////배송비
                obj.os_delivery_price = delivery_price
            } else {
                obj.os_delivery_price = 0
            }
        } else if (delivery_type == '개당') {
            var num = 0;
            $.each($(".add-option-box"), function(oi, ov) {
                num += $(ov).find('input[name=pronum]').val() * 1
            })
            obj.os_delivery_price = (parseInt((num - 1) / delivery_condition) + 1) * delivery_price
        }
    } else {
        obj.os_delivery_price = delivery_price
    }

    if (type == 'buy') {
        obj.p_seq = p_seq;
        obj.os_totalprice = totalPrice;
        obj.u_seq = randomseq;
        sessionStorage.setItem("product", JSON.stringify(obj));

        $.ajax({
            url: SERVER_AP + "/cart/cart-insert",
            type: "post",
            cache: false,
            async: false,
            data: {
                obj: obj,
            },
            success: function(data) {},
            error: function(request, status, error) {
                console.log(error);
            }
        });
    } else if (type == 'cart') {
        obj.os_date = currentDate();

        sessionStorage.setItem("product", JSON.stringify(obj));

        $.ajax({
            url: SERVER_AP + "/cart/cart-insert",
            type: "post",
            cache: false,
            async: false,
            data: {
                obj: obj,
            },
            success: function(data) {},
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }
}

function addCartCnt(ccnt, seq) {

    var obj = new Object();
    obj.c_cnt = ccnt * 1 + 1;

    $.ajax({
        url: SERVER_AP + "/common/update",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'cart',
            obj: obj,
            whereField: "c_seq",
            whereValue: seq,
        },
        success: function(data) {
            p_seq = data[0].p_seq
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

////////////////////////////////////관심상품
function Wishlist() {
    if (!user_info) {
        alert('로그인을 먼저 해주세요.');
        location.href = 'login.php'
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
                                location.href = "/wishlist.php"
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


//옵션의상품seq 얻기
function opseqGOpseq(po_seq) {
    var p_seq;
    var obj = new Object();
    obj.po_seq = po_seq;
    $.ajax({
        url: SERVER_AP + "/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'product_option',
            common: obj,
        },
        success: function(data) {
            p_seq = data[0].p_seq
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    return p_seq;
}


function share() {
    $("#share-input").val(location.href)
    $("#share-modal").modal('show_modal')
}

$("#share-input").click(function() {
    $(this).select()
    document.execCommand('copy');
    alert("클립보드에 복사되었습니다!");
})

function shareLink() {
    $("#share-input").select()
    document.execCommand('copy');
    alert("클립보드에 복사되었습니다!");
}

function shareNaver() {
    var url = encodeURI(encodeURIComponent(myform.url.value));
    var title = encodeURI(myform.title.value);
    var shareURL = "https://share.naver.com/web/shareView?url=" + url + "&title=" + title;
    document.location = shareURL;
}


function sendNaverLine() {
    var sns_br = "\n"
    var sns_summary = $('.p_name').text();
    var sns_link = location.href;
    var url = "http://line.me/R/msg/text/?" + encodeURIComponent('리닷' + sns_br + sns_summary + sns_br + sns_link);

    window.open(url);
}



var sendUrl = location.href;

function shareFacebook() {
    var url = location.href;
    window.open("https://www.facebook.com/sharer/sharer.php?=" + url + "" + encodeURIComponent(window.location
            .href),
        "_blank", "width=600,height=400");
}

function shareTwitter() {
    var sendText = "리닷";
    window.open("https://twitter.com/intent/tweet?text=" + sendText + "&url=" + sendUrl);
}


try {
    function sendLinkDefault() {
        Kakao.init('64eb9eefb60d00d44cfde27c48e1f2ca')
        Kakao.Link.sendDefault({
            objectType: 'commerce',
            content: {
                title: '깐깐한 안목, 끊임없는 노력, 타협하지 않는 고집의 LIDOT입니다. ',
                imageUrl: shareImg,
                link: {
                    mobileWebUrl: sendUrl,
                    webUrl: sendUrl,
                },
            },
            commerce: {
                productName: shareTitle,
                regularPrice: shareDc,
                discountPrice: shareMoney
            },
            buttons: [{
                    title: '구매하기',
                    link: {
                        mobileWebUrl: sendUrl,
                        webUrl: sendUrl,
                    },
                },
                {
                    title: '공유하기',
                    link: {
                        mobileWebUrl: sendUrl,
                        webUrl: sendUrl,
                    },
                },
            ],
        })
    };
    window.kakaoDemoCallback && window.kakaoDemoCallback()
} catch (e) {
    window.kakaoDemoException && window.kakaoDemoException(e)
}


// function tabClick(type){
//     let hei = $(`#${type}`).offset().top
//     $(window).scrollTop(hei - 270)
// }
// $('#pq_secret').click(function(){
//     $('.pq_pass_wrap').toggleClass('d-none');
// })

$("#product-details-tab > li").click(function() {
    $("#product-details-tab > li").removeClass('b_bottom')
    $(this).addClass('b_bottom')

    $("#product-details-tab > li > a").removeClass('font-weight-bold')
    $(this).find('a').addClass('font-weight-bold')
})




function buyCheck(seq) {
    let result = ``
    let obj = new Object();
    obj.p_seq = seq;
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'product',
            common: obj,
        },
        success: function(data) {
            if (data[0].p_stock == 0) {
                result = true
            } else {
                result = false
            }
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    return result
}

//구매 개수 체크
function buyCheckOp(poseq) {
    let result = ``
    let obj = new Object();
    console.log('poseq', poseq);
    obj.po_seq = poseq;
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'product_option',
            common: obj,
        },
        success: function(data) {
            console.log('dd', data);
            if (data[0].po_stock == 0) {
                result = true
            } else {
                result = false
            }
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    return result
}


let closeReal = 'N'

$(window).scroll(function() {
    // Do something when the user scrolls
    const currentScrollPos = $(window).scrollTop();
    const windowHeight = $(window).height();
    const documentHeight = $(document).height();
    const windowWidth = $(window).width();

    if (windowWidth > 768) {
        $('#modal-side').remove();
        if (currentScrollPos > 768) {
            $('.fold_btn').removeClass('d-none');
            $('#side_buy').removeClass('d-none');
        } else {
            $('.fold_btn').addClass('d-none');
            $('#side_buy').addClass('d-none');
        }
    } else {
        $('#side_buy').remove();
        if (currentScrollPos > 1200) {
            $('#m_nav').removeClass('d-none');
        } else {
            $('#m_nav').addClass('d-none');
        }
    }

});

$('#m_nav').click(function() {
    // $('#side_buy').removeClass('d-none');
    // $('#side_back').removeClass('d-none');
    //
    // $('#side_buy_close').css('bottom', `${$('#side_buy').height()*1 + 30}px`)
    //
    // $('#side_buy_close').removeClass('d-none');

    $('#modal-side').addClass('show_modal');
})

$('#side_buy_close').click(function() {
    $('#side_buy').addClass('d-none');
    $('#side_back').addClass('d-none');
    $('#side_buy_close').addClass('d-none');
})

$('.fold_btn').click(function() {
    if ($(this).find('.fa-chevron-right').hasClass('d-none')) {
        // $(this).css('left', 0);
        $(this).addClass('go-left2');
        $(this).removeClass('go-right2');
        $(this).find('.fa-chevron-left').addClass('d-none');
        $(this).find('.fa-chevron-right').removeClass('d-none');
    } else {
        // $(this).css('left', '452px');
        $(this).addClass('go-right2');
        $(this).removeClass('go-left2');
        $(this).find('.fa-chevron-right').addClass('d-none');
        $(this).find('.fa-chevron-left').removeClass('d-none');
    }

    // if ($('#side_buy').hasClass('d-none')) {
    //     closeReal = 'N'
    // } else {
    //     closeReal = 'Y'
    // }
    // $('#side_buy').toggleClass('d-none');

    if ($('#side_buy').hasClass('go-left')) {
        $('#side_buy').removeClass('go-left');
        $('#side_buy').addClass('go-right');
    } else {
        $('#side_buy').removeClass('go-right');
        $('#side_buy').addClass('go-left');
    }

})

$('#btn-modal-close').click(function(){
    $('#modal-side').removeClass('show_modal');
});
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
