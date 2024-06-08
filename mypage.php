<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>

<style media="screen">

</style>
<link href="/css/orderlist.css" rel="stylesheet">
<link href="/css/mypage.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
<style>

.row-item{
    width: 100%;
    margin-left: 0;
}

.table-item{
    width: 100%;
}
.table-item > tbody > tr{
    border-bottom: 1px solid #eee;
}
.table-item > tbody > tr:last-child{
    border-bottom: none;
}
.table-item > tbody > tr > th{
    background: white;
    text-align: center;
    width: 25%;
}

.table-item td{
    border: none;
}

.table-item-inner{

}

.table-item-inner > tbody > tr > th{
    background: white;
}

.item-mobile{
    border-bottom: 1px solid lightgray;
    padding: 10px 5px;
}

.time-mobile{
    border-bottom: 1px solid lightgray;
    padding: 10px 5px;
}

.post-mobile{
    border-bottom: 1px solid lightgray;
    padding: 10px 0 15px 0;
}

.pr_comments_m p{
    max-width: 100%;
}
.pr_comments_m img{
    width: 100% !important;
}


@media (max-width: 769px){
    .table_order {
        min-width: 100%;
    }
}


</style>

<!-- Breadcumb Area -->
<div class="breadcrumb-wrap">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <ol class="breadcrumb mt-2 bg-white">
                    <li class="breadcrumb-item"><a href="/">홈</a></li>
                    <li class="breadcrumb-item"><a href="mypage.php">마이페이지</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Message Now Area -->
<div class="message_now_area" id="contact">
    <div class="container mb-50">
        <h4 class="page-title text-dark text-center mb-4 font-weight-bold">MY PAGE</h4>
        <div class="sub_mypage_menu_div">
            <div class="pointer" onclick="openCheck(1)">
                정보수정
            </div>
            <div class="gray_bar"></div>
            <div class="pointer" onclick="location.href='order_list.php'">
                주문내역
            </div>
            <div class="gray_bar"></div>
            <div class="pointer" onclick="location.href='point.php'">
                적립금 내역
            </div>
            <div class="gray_bar"></div>
            <div class="pointer" onclick="location.href='wishlist.php'">
                관심상품
            </div>
            <div class="gray_bar"></div>
            <div class="pointer" onclick="location.href='coupon.php'">
                할인쿠폰
            </div>
            <div class="gray_bar"></div>
            <div class="pointer" onclick="location.href='mypost.php'">
                내가쓴게시물
            </div>
            <div class="gray_bar"></div>
            <div class="pointer" onclick="location.href='address.php'">
                배송주소록
            </div>
        </div>

        <div class="u_wrap mt-4 bg_f4">
            <div class="give_info ">
                <div class="wrap_div_my w-100 d-flex align-items-center p-3 p-md-4">
                    <div class="px-md-3 px-2 py-md-4 py-2 w-100 w-md-50 ">
                        <p class="text-black mb-0"><span class="u_name font-weight-bold"></span> 회원님은 <span
                                class="font-weight-bold">[</span><span class="u_rank font-weight-bold"></span><span
                                class="font-weight-bold">]</span> 등급 회원이십니다.</p>
                    </div>

                    <div
                        class="px-0 px-md-3 py-2 py-md-4 d-flex align-items-center w-100 w-md-50 justify-content-center">
                        <div class="text-center pr-2 pointer" onclick="location.href='/order_list'">
                            <div>
                                <span style="font-size:60px" class="material-symbols-outlined">
                                    download
                                </span>
                            </div>
                            <div class="fs-11">
                                총 주문금액
                            </div>
                            <span class="full_buy_price number_text font-weight-bold"></span>원
                        </div>
                        <div class="gray_bar  mx-2 mx-md-5">
                        </div>
                        <div class="text-center px-2 pointer" onclick="location.href='/point'">
                            <div>
                                <span style="font-size:60px" class="material-symbols-outlined">
                                    payments
                                </span>
                            </div>
                            <div class="fs-11">
                                가용적립금
                            </div>
                            <span class="u_point number_text font-weight-bold"></span>원
                        </div>
                        <div class="gray_bar  mx-2 mx-md-5">
                        </div>
                        <div class="text-center pl-2 pointer" onclick="location.href='/coupon'">
                            <div>
                                <span style="font-size:60px" class="material-symbols-outlined">
                                    money_off
                                </span>
                            </div>
                            <div class="fs-11">
                                쿠폰
                            </div>
                            <span class="u_coupon number_text font-weight-bold"></span>개
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="d-md-flex justify-content-between">
            <div>
                <p class="text-black mb-0">환영합니다. <span class="font-weight-bold text-black u_name"></span> 회원님</p>
                <div class="top_wrap my-4">
                    <span class="text-black pointer" onclick="location.href='order_list.php'">주문내역</span>
                    <span>·</span>
                    <span class="text-black pointer" onclick="location.href='order_list.php'">배송관리</span>
                    <span>·</span>
                    <span class="text-black pointer" onclick="location.href='cart.php'">장바구니 <span
                            class="cnt_wrap cart_quantity"></span></span>
                    <span>·</span>
                    <span class="text-black pointer" onclick="location.href='wishlist.php'">관심상품 <span
                            class="cnt_wrap wish_quantity"></span></span>
                    <span>·</span>
                    <span class="text-black pointer" onclick="location.href='mypost.php'">내가 쓴 글</span>
                </div>
            </div>

        </div> -->

        <!-- <div class="d-flex border mb-3">
            <div class="py-3">
                <div class="px-md-3 px-4 border-right">
                    <p class="mb-1 text-black">총 주문</p>
                    <p class="mb-0 text-black font-weight-bold">0원 <span
                            class="font-weight-normal text-secondary">(0회)</span></p>
                </div>
            </div>

            <div class="py-3">
                <div class="px-md-3 px-4 border-right">
                    <p class="mb-1 text-black">포인트</p>
                    <p class="mb-0 text-black font-weight-bold"><span id="u_point"></span>P</p>
                </div>
            </div>

        </div> -->



        <div class="my-3">
            <p class="text-black mb-1"><img src="img/mypage/order.png" /> 주문처리 현황 <span class="ml-2 text-secondary">(최근
                    3개월)</span></p>
            <div class="d-flex justify-content-between flex-wrap">
                <div
                    class="fs-xl-12 px-md-5 first_date_div px-3 border d-flex align-items-center justify-content-between">
                    <div class="pointer" onclick="LoadProduct('상품준비중')">
                        <p class="mb-1 text-black">상품준비중</p>
                        <p class="font-weight-bold mb-0 text-black text-center f-25 ready_num" id="ready_num">0</p>
                    </div>
                    <i class="xi-angle-right ing_arr"></i>
                    <div class="pointer" onclick="LoadProduct('출고')">
                        <p class="mb-1 text-black">출고</p>
                        <p class="font-weight-bold mb-0 text-black text-center f-25" id="out_num">0</p>
                    </div>
                    <i class="xi-angle-right ing_arr"></i>
                    <div class="pointer" onclick="LoadProduct('배송중')">
                        <p class="mb-1 text-black">배송중</p>
                        <p class="font-weight-bold mb-0 text-black text-center f-25" id="ing_num">0</p>
                    </div>
                    <i class="xi-angle-right ing_arr"></i>
                    <div class="pointer" onclick="LoadProduct('배송완료')">
                        <p class="mb-1 text-black">배송완료</p>
                        <p class="font-weight-bold mb-0 text-black text-center f-25" id="complete_num">0</p>
                    </div>
                </div>
                <div onclick="" class="fs-xl-12 px-md-4 second_date_div px-3 py-2 py-md-5  border position-relative"
                    style="border-left:none;">

                    <div class="d-none d-md-block">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="text-black mb-0">취소 :</p>
                            <p class="o_cancel text-black font-weight-bold mb-0">0</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="text-black mb-0">교환 :</p>
                            <p class="o_exchange text-black font-weight-bold mb-0">0</p>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="text-black mb-0">반품 :</p>
                            <p class="o_resend text-black font-weight-bold mb-0">0</p>
                        </div>
                    </div>
                    <div class="d-md-none row">
                        <div class="col-3">
                            <p class="text-black mb-0">취소 : <span class="o_cancel text-black font-weight-bold mb-0">0</span></p>
                        </div>
                        <div class="col-3">
                            <p class="text-black mb-0">교환 : <span class="o_exchange text-black font-weight-bold mb-0">0</span></p>
                        </div>
                        <div class="col-3">
                            <p class="text-black mb-0">반품 : <span class="o_resend text-black font-weight-bold mb-0">0</span></p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center cancel_more pointer"
                        onclick="location.href='order_list.php?orderSet=refund'">
                        더보기 <i class="ml-1 df-cnb-item-subicon"></i></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="mb-3">
            <div class="d-flex justify-content-between align-items-center  mb-2">
                <p class="text-black mb-1"><img src="img/mypage/folder.png" /> 주문 상품 정보</p>
                <!-- <p class="pointer text-black mb-1" onclick="location.href='order_list.php';">더보기 <img
                        src="img/mypage/mini_arr.png" /> </p> -->
                <span class="d-flex align-items-center pointer border pl-2 pr-1 fs-12"
                    onclick="location.href='order_list.php';">더보기 <i class="ml-1 df-cnb-item-subicon"></i></span>
            </div>
            <div class="d-none d-md-block w-100 table_div table_order">
                <table class="table table_order text-center mb-0">
                    <thead>
                        <tr>
                            <th style="min-width:200px">주문일자<br>[주문번호]</th>
                            <th>이미지</th>
                            <th style="min-width:500px">상품정보</th>
                            <th>수량</th>
                            <th>상품구매금액</th>
                            <th style="min-width:100px">주문처리상태</th>
                        </tr>
                    </thead>
                    <tbody id="order-list-tbody"></tbody>
                </table>
            </div>
            <div class="d-md-none w-100 table_div table_order" id="order-list-tbody_m">
            </div>

            <div id="order-no-data" class="d-none nodata_wrap py-5 text-center">
                <p class="mb-0">주문 내역이 없습니다.</p>
            </div>
        </div>


        <!-- <div class="mb-3">
            <div class="d-flex justify-content-between align-items-center">
                <p class="text-black mb-1"><img src="img/mypage/cupon.png" /> 내 쿠폰 목록</p>
                <p class="pointer text-black mb-1" onclick="location.href='coupon.php';">더보기 <img
                        src="img/mypage/mini_arr.png" /> </p>
            </div>

            <table class="table text-center mb-0">
                <thead>
                    <tr>
                        <th>번호</th>
                        <th>쿠폰</th>
                        <th>사용기간</th>
                    </tr>
                </thead>
                <tbody id="cupon-list-tbody"></tbody>
            </table>
            <div id="cupon-no-data" class="d-none nodata_wrap py-5 text-center">
                <p class="mb-0">사용가능 쿠폰이 없습니다.</p>
            </div>
        </div> -->

        <div class="mb-3">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <p class="text-black mb-1"><img src="img/mypage/time.png" /> 최근 본 상품</p>
                <span class="d-flex align-items-center pointer border pl-2 pr-1 fs-12"
                    onclick="location.href='/myrecent.php';">더보기 <i class="ml-1 df-cnb-item-subicon"></i></span>
            </div>

            <div class="d-none d-md-block w-100 table_div table_order">
                <table class="table text-center mb-0">
                    <thead>
                        <tr>
                            <th class="font-weight-normal">이미지</th>
                            <th class="font-weight-normal">상품명</th>
                            <th class="font-weight-normal">판매가</th>
                            <th class="font-weight-normal">주문</th>
                        </tr>
                    </thead>
                    <tbody id="time-list-tbody"></tbody>
                </table>
            </div>
            <div class="d-md-none w-100 table_div table_order" id="time-list-tbody_m">
            </div>

            <div id="time-no-data" class="d-none nodata_wrap py-5 text-center">
                <p class="mb-0">최근 본 상품이 없습니다.</p>
            </div>
        </div>

        <div class="mb-3">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <p class="text-black mb-1"><img src="img/mypage/post.png" /> 내가 쓴 게시글</p>

                <span class="d-flex align-items-center pointer border pl-2 pr-1 fs-12"
                    onclick="location.href='mypost.php';">더보기
                    <i class="ml-1 df-cnb-item-subicon"></i></span>
            </div>
            <div class="d-none d-md-block table_div w-100">
                <table class="table text-center mb-0 table_order">
                    <thead>
                        <tr>
                            <th class="font-weight-normal">분류</th>
                            <th class="font-weight-normal">이미지</th>
                            <th class="font-weight-normal">제목</th>
                            <th class="font-weight-normal">작성일</th>
                            <th class="font-weight-normal">조회수</th>
                        </tr>
                    </thead>
                    <tbody id="post-list-tbody"></tbody>
                </table>
            </div>
            <div class="d-md-none table_div w-100" id="post-list-tbody_m">
            </div>

            <div id="post-no-data" class="d-none nodata_wrap py-5 text-center">
                <p class="mb-0">게시물이 없습니다.</p>
            </div>
        </div>


        <div class="d-none contact_from mb-50">

            <div class="d-flex bg-dark my_page_intro py-5 pc-none mb-50">
                <div class="w-100 text-center ">
                    <div class="">
                        안녕하세요!
                    </div>
                </div>
                <div class="w-100 text-center ">
                    <div class="fs-15">
                        등급
                    </div>
                    <span class="font-weight-bold" id="u_rank"></span>
                </div>
            </div>

            <div class="m-none">
                <div class="row bg-dark my_page_intro mb-50  py-4">
                    <div class="w-100 text-center col-4">
                        <div class="fs-15">
                            등급
                        </div>
                        <div class="fs-15">
                            <span class="coupon_cnt fs-25" id="u_rank">0</span>
                        </div>
                    </div>
                    <div class="w-100 text-center col-4">
                        <div class="fs-15">
                            사용가능쿠폰
                        </div>
                        <div class="fs-15">
                            <span class="coupon_cnt fs-25" id="u_coupon">0</span> 장
                        </div>
                    </div>
                    <div class="w-100 text-center col-4">
                        <div class="fs-15">
                            포인트
                        </div>
                        <div class="fs-15">
                            <span class="fs-25" id="u_point"></span> P
                        </div>
                    </div>
                </div>

            </div>





            <div class="d-flex border mb-50">
                <div class="mypage_menu_box">
                    <div class="mypage_menu_head">
                        MY
                    </div>
                    <div class="mypage_menu_list">
                        <div class="pointer" onclick="location.href='wishlist.php'">
                            관심 상품 <span class="wish_quantity">0</span>
                        </div>
                        <div class="pointer" onclick="location.href='cart.php'">
                            장바구니 <span class="cart_quantity">0</span>
                        </div>
                        <div class="pointer" onclick="location.href='review.php'">
                            리뷰관리
                        </div>
                        <div class="pointer" onclick="location.href='order_ask.php'">
                            문의관리
                        </div>
                        <div class="pointer" onclick="location.href='qna_ask.php'">
                            상품 Q&A
                        </div>
                    </div>
                </div>


                <div class="mypage_menu_box">
                    <div class="mypage_menu_head">
                        나의 활동
                    </div>
                    <div class="mypage_menu_list">
                        <div class="pointer" onclick="location.href='coupon.php'">
                            쿠폰내역 <span class="coupon_quantity">0</span>
                        </div>

                        <div class="pointer" onclick="location.href='point.php'">
                            포인트내역
                        </div>

                        <div class="pointer" onclick="location.href='order_list.php'">
                            주문내역
                        </div>

                        <div class="pointer" onclick="location.href='exchange.php'">
                            반품/교환 내역
                        </div>

                    </div>
                </div>
                <!--
                    <div class="mypage_menu_box">
                        <div class="mypage_menu_head">
                            쇼핑 혜택
                        </div>
                        <div class="mypage_menu_list">
                            <div class="">
                                내 문의글 보기
                            </div>
                            <div class="">
                                상품  Q&A
                            </div>
                            <div class="">
                                재고 및 배송문의
                            </div>
                            <div class="">
                                A/S및 1:1 문의
                            </div>
                        </div>
                    </div> -->
                <div class="mypage_menu_box">
                    <div class="mypage_menu_head">
                        정보관리
                    </div>

                    <div class="mypage_menu_list">
                        <div class="pointer edit_info_btn sns_none" onclick="openCheck(1)">
                            회원정보수정
                        </div>
                        <div class="pointer" onclick="openCheck(2)">
                            회원탈퇴
                        </div>

                    </div>
                </div>

            </div>

            <!-- <table class="table border mx-auto text-center">
                    <tr>
                        <th scope="row" class="text-center">등급</th>
                        <td id="u_rank"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">이메일</th>
                        <td id="u_email"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">휴대전화</th>
                        <td id="u_phone"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">기본 배송지</th>
                        <td id="">
                            <div class="order_whter border p-2 font-14">
                                <div class="">
                                    <div class="where_addr row m-0">
                                        <div class="col-10 p-0 text-left">
                                            배송지 명 : <span id="buyer_title"></span><br>
                                            주소 : <span id="buyer_addr"></span>
                                        </div>
                                        <div class="col-2 p-0 text-right">
                                            <span onclick="changeAddr();" class="font-10 pointer font-weight-bold">변경</span>
                                        </div>
                                    </div>
                                    <div class="text-secondary text-left where_detail_addr">
                                        이름 : <span id="buyer_name"></span>
                                        번호 : <span id="buyer_tel"></span>
                                    </div>
                                    <div class="text-left">
                                         배송시 요청사항 : <span class="dl_request"></span>
                                    </div>

                                </div>
                            </div>
                        </td>
                    </tr>
                </table> -->
        </div>

        <div class="my-5 d-none">
            <h6>나의 주문처리 현황</h6>
            <div class="row mt-3 align-items-center w-100" style="margin:0 auto;">
                <div class="col-md col text-center py-4 px-1 " onclick="LoadProduct('상품준비중')">
                    <i class="fa-solid fa-arrows-rotate" style="font-size:30px"></i>
                    <div class="my-2">
                        상품준비중
                    </div>
                    <div class="ready_num" style="font-size:25px" id="ready_num">
                        0
                    </div>
                </div>
                <div class="one_height_line">

                </div>
                <div class="col-md col text-center py-4 px-1" onclick="LoadProduct('출고')">
                    <i class="fa-solid fa-truck-ramp-box" style="font-size:30px"></i>
                    <div class="my-2">
                        출고
                    </div>
                    <div class="" style="font-size:25px" id="out_num">
                        0
                    </div>
                </div>
                <div class="one_height_line">
                </div>
                <div class="col-md col text-center py-4 px-1 " onclick="LoadProduct('배송중')">
                    <i class="fa-solid fa-truck" style="font-size:30px"></i>
                    <div class="my-2">
                        배송중
                    </div>
                    <div class="" style="font-size:25px" id="ing_num">
                        0
                    </div>
                </div>
                <div class="one_height_line">
                </div>
                <div class="col-md col text-center py-4 px-1 " onclick="LoadProduct('배송완료')">
                    <i class="fa-solid fa-circle-check" style="font-size:30px"></i>
                    <div class="my-2">
                        배송완료
                    </div>
                    <div class="" style="font-size:25px" id="complete_num">
                        0
                    </div>
                </div>
                <!-- <div class="col-md col text-center py-4 border">
                        <i class="fa-solid fa-ban" style="font-size:30px"></i>
                        <div class="my-2">
                            주문취소
                        </div>
                        <div class="" style="font-size:25px" id="cancel_num">
                            0
                        </div>
                    </div> -->
            </div>
        </div>
        <div class="d-none">
            <h5 class="mb-3">주문목록</h5>
            <div class="mb-3 d-flex align-items-center col-md-6 p-0">
                <span class="min-50">기간</span>
                <span class="btn btn-sm btn-primary daybtn" data-target="today">오늘</span>
                <span class="btn btn-sm btn-primary daybtn" data-target="week">1주일</span>
                <span class="btn btn-sm btn-primary daybtn" data-target="month1">1개월</span>
                <span class="btn btn-sm btn-primary daybtn" data-target="month3">3개월</span>
                <span class="btn btn-sm btn-primary daybtn" data-target="year">5년</span>
            </div>

            <div class="mb-3">
                <div class="d-flex align-items-center col-md-6 p-0">
                    <span class="min-50">상품명</span>
                    <input autocomplete=”off” placeholder="상품명을 입력하세요." id="search_val" class="form-control-sm w-100"
                        type="text">
                    <span class="btn btn-sm btn-secondary ml-2 m-w-100" style="height: 31px; line-height: 31px;"
                        onclick="LoadProduct()">검색</span>
                </div>
                <div class="d-none align-items-center col-md-5 p-0">
                    <input type="date" name="" value="" class="form-control form-control-sm m-w-30" id="sday"> <span
                        class="mx-2">~</span> <input type="date" name="" value=""
                        class="form-control form-control-sm m-w-30" id="eday">
                    <span class="btn btn-sm btn-secondary ml-2 m-w-100" style="height: 31px; line-height: 31px;"
                        onclick="LoadProduct()">검색</span>
                </div>
            </div>
        </div>
    </div>


    <!-- <div id="paged-wrap" class="mt-3">
        <nav aria-label="Page navigation example">
            <ul id="paged-content" class="pagination justify-content-center"></ul>
        </nav>
    </div> -->
</div>
<!-- Message Now Area -->

<style media="screen">
@media (min-width: 576px) {
    .modal-dialog {
        max-width: 1160px;
    }
}
</style>
<div class="modal" tabindex="-1" role="dialog" id="ordermodal">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5>
                        <div class="d-flex align-items-end font-weight-bold text-dark">
                            <div id="ordermodal-date"></div>
                            <div style="font-size:13px;" class="ml-2 in_day font-weight-bold"></div>
                            <span style="font-size:13px;">도착예정</span>
                        </div>

                    </h5>

                    <h5 class="modal-title font-weight-light">주문번호 : <span class="ordermodal-title"></span></h5>
                </div>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table border text-center pc-none">
                    <tr>
                        <th style="width:5%">#</th>
                        <th>이미지</th>
                        <th>상품명</th>
                        <th>수량</th>
                        <th>가격</th>
                        <th>배송비</th>
                        <th style="width:15%"></th>
                    </tr>
                    <tbody id="ordermodal-tbody">

                    </tbody>
                </table>
                <div class="order_detail_list m-none">

                </div>


                <h5 class="mt-5 mb-3 text-dark">받는 사람 정보</h5>
                <table class="table">
                    <tr>
                        <th id="f_td">받는사람</th>
                        <td id="r_name"></td>
                    </tr>
                    <tr>
                        <th>연락처</th>
                        <td id="r_phone"></td>
                    </tr>
                    <tr>
                        <th>받는주소</th>
                        <td id="r_address"></td>
                    </tr>
                    <tr>
                        <th>배송요청사항</th>
                        <td id="r_text"></td>
                    </tr>
                    <tr class="delivery_wrap d-none">
                        <th>배송조회</th>
                        <td id="del_td"></td>
                    </tr>
                </table>

                <div class="pc-none cancel_remove">
                    <h5 class="mt-5 mb-3 text-dark">주문/결제 금액 정보</h5>
                    <table class="table more-credit-table">
                        <tr>
                            <td>
                                <p class="font-weight-bold text-dark">최초 주문금액</p>
                                <div class="d-flex align-items-center justify-content-between mb-1">
                                    <span>상품금액</span>
                                    <span><span class="credit-totalprice">0</span> 원</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between  mb-1">
                                    <span>배송비</span>
                                    <span><span class="credit-delprice">0</span> 원</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between  mb-1">
                                    <span>쿠폰할인</span>
                                    <span>- <span class="credit-coupon">0</span></span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between  mb-1">
                                    <span>포인트사용</span>
                                    <span>- <span class="credit-point">0</span></span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark">결제상세</p>
                                <div class="d-flex align-items-center justify-content-between  mb-1">
                                    <div class="">
                                        <!-- <span class="credit-pay_method">결제방법</span> -->
                                        <span class="credit-vbank_name">결제방법</span>
                                        <span class="credit-vbank_num">결제방법</span>
                                        <span class="credit-bank_name">결제방법</span>
                                    </div>
                                    <span class="cancelCheck"><span class="credit-totalprice-all">0</span> 원</span>
                                </div>
                            </td>
                            <td style="background:#f8f8f8;">
                                <div class="d-flex align-items-center justify-content-between font-weight-bold">
                                    <span>주문금액</span>
                                    <span class="cancelCheck"><span style="font-size:20px"
                                            class="credit-totalprice-all"></span>
                                        원</span>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="m-none cancel_remove">
                    <h5 class="mt-5 mb-3">주문/결제 금액 정보</h5>
                    <div class="px-1 py-3 my-2 border-top">
                        <p class="font-weight-bold">최초 주문금액</p>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>상품금액</span>
                            <span><span class="credit-totalprice">0</span> 원</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between  mb-1">
                            <span>배송비</span>
                            <span><span class="credit-delprice">0</span> 원</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between  mb-1">
                            <span>쿠폰할인</span>
                            <span>- <span class="credit-coupon">0</span></span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between  mb-1">
                            <span>포인트사용</span>
                            <span>- <span class="credit-point">0</span></span>
                        </div>
                    </div>
                    <div class="px-1 py-3 my-2 border-top">
                        <p class="font-weight-bold">결제상세</p>
                        <div class="d-flex align-items-center justify-content-between  mb-1">
                            <div class="">
                                <!-- <span class="credit-pay_method">결제방법</span> -->
                                <span class="credit-vbank_name">결제방법</span>
                                <span class="credit-vbank_num">결제방법</span>
                                <span class="credit-bank_name">결제방법</span>
                            </div>
                            <span class="cancelCheck"><span class="credit-totalprice-all">0</span> 원</span>
                        </div>
                    </div>
                    <div class="px-2 py-3 my-2" style="background:#f8f8f8;">
                        <div class="d-flex align-items-center justify-content-between font-weight-bold">
                            <span>주문금액</span>
                            <span class="cancelCheck"><span style="font-size:20px" class="credit-totalprice-all"></span>
                                원</span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>


<div class="modal" tabindex="-1" role="dialog" id="change-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">반품/교환 사유</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <select class="form-control form-control-sm mb-3" name="" id="change_type">
                    <option value="">선택</option>
                    <option value="반품">반품</option>
                    <option value="교환">교환</option>
                </select>
                <div class="form-group">
                    <label class="pointer text-primary mb-0" for="pr_pic">사진을 첨부하시려면 클릭해주세요.</label>
                    <input type="file" name="" value="" id="pr_pic" class="d-none" multiple>
                    <div class="px-2 mt-2" id="pr_pic_div">
                    </div>
                </div>
                <div class="" id="change_note"></div>
            </div>
            <div class="modla-footer px-3 mb-3 text-center">
                <span class="btn btn-primary" id="change-modal-btn">신청</span>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="deleteModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input class="form-control" type="text" placeholder="탈퇴 사유를 입력해주세요." name="" value="">
            </div>
            <div class="modla-footer px-3 mb-3 text-center">
                <span class="btn btn-primary" onclick="deleteReal()" id="">탈퇴</span>
                <span class="btn btn-danger rounded-0" onclick="$('#deleteModal').modal('hide');" id="">취소</span>
            </div>
        </div>
    </div>
</div>


<div class="modal" tabindex="-1" role="dialog" id="openCheck">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="">
                    비밀번호를 입력해주세요.
                </div>
                <input class="form-control" type="password" id="loginPs" placeholder="비밀번호를 입력해주세요." name="" value="">
            </div>
            <div class="modla-footer px-3 mb-3 text-center">
                <span class="btn btn-primary" onclick="$('#openCheck').modal('hide');" id="">취소</span>
                <span class="btn btn-secondary" onclick="checkLogin();" id="">확인</span>
            </div>
        </div>
    </div>
</div>


<!-- 이미지 자세히보기 모달 공용 -->
<div class="modal" tabindex="-1" role="dialog" id="img-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="" alt=" " id="modal-img-more" class="w-100">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">닫기</button>
            </div>
        </div>
    </div>
</div>



<div class="modal" tabindex="-1" role="dialog" id="askModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="max-width:700px;">
            <div class="modal-header text-center justify-content-center">
                <div class="font-weight-bold " style="font-size:20px;">
                    판매자에게 Q&A등록
                </div>

                <button type="button" class="close ml-0 ask-close-Btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tr>
                        <th scope="row" class="text-center">주문번호</th>
                        <td class="ordermodal-title"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">상품/옵션</th>
                        <td class="product_name"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center ">문의유형</th>
                        <td class="">
                            <select name="" class="form-control" id="oa_type">
                                <option value="">문의유형 선택</option>
                                <option value="상품">상품</option>
                                <option value="배송">배송</option>
                                <option value="반품">반품</option>
                                <option value="교환">교환</option>
                                <option value="환불">환불</option>
                                <option value="기타">기타</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">제목</th>
                        <td>
                            <input id="oa_title" class=" form-control" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">내용</th>
                        <td>
                            <textarea id="oa_text" class=" form-control">
                            </textarea>
                        </td>
                    </tr>

                </table>

            </div>
            <div class="modla-footer px-3 mb-3 text-center">
                <span class="btn btn-primary" onclick="$('#askModal').modal('hide');" id="">취소</span>
                <span class="btn btn-primary" id="goAsk">확인</span>
            </div>
        </div>
    </div>
</div>

<!-- <script type="text/javascript" src="/admin/js/common.js"></script> -->
<script src="/js/pages/wishlist/wishlist.js"></script>
<script type="text/javascript">
var ppp = 30;
var page = 1;

var ready_num = 0
var out_num = 0
var ing_num = 0
var complete_num = 0
var cancel_num = 0

$(function() {

    if (!user_info) {
        location.href = '/'
    }

    if (user_info.u_type == '사업자회원') {
        $('.com_text_add').html('(사업자회원)')
    }

    if (windowWidth < 760) {
        $('.pc-none').remove();
        // ppp = 3;
    } else {
        $('.m-none').remove();

    }

    var fontList = ['맑은 고딕', '돋움체', '굴림체', '바탕체', '궁서체', '나눔고딕', '나눔명조', '나눔바른고딕', '가는 나눔바른고딕'];

    $('#change_note').summernote({
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





    $('#oa_text').summernote({
        toolbar: [
            ['picture', ['picture']],
        ],
        height: 150, // set editor height
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
    loadMydata()
    LoadProduct()
    LoadMyCouponlist()
    loadHistoryData();


    orderCount('주문취소', '.o_cancel');
    orderCount('교환', '.o_exchange');
    orderCount('반품', '.o_resend');
    drawMyPost();
    //최근 본 상품
    drawRecentProduct();

    //내가 쓴 게시글


    if (user_info.u_type == '네이버계정' || user_info.u_type == '카카오계정') {
        //$('.sns_none').addClass('d-none');
        $(".edit_info_btn").attr('onclick', `location.href='/myPageEdit.php?seq=${user_info.u_seq}'`)
    }

    //총 주문 금액
    $('.full_buy_price').text(comma(getTotalPrice()));

    console.log('ㅡㅡㅡ DONE ㅡㅡㅡ');
})

function loadMydata() {
    var obj = new Object();
    obj.u_seq = user_info.u_seq;
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        data: {
            table: 'user',
            common: obj,
        },
        success: function(data) {
            $(".u_name").text(data[0].u_name)
            $(".u_rank").text(data[0].u_rank)
            $("#u_email").text(data[0].u_email)
            $("#u_phone").text(hyphen(data[0].u_phone))
            $("#u_point").text(comma(data[0].u_point))
            $('.u_point').text(comma(data[0].u_point));
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

//배송 갯수 세팅 최근 3개월기준
function loadHistoryData() {
    $.ajax({
        url: SERVER_AP + '/order/history',
        type: "post",
        cache: false,
        async: false,
        data: {
            u_seq: user_info.u_seq
        },
        success: function(data) {
            let v = data.rows[0];
            $('.ready_num').html(v.상품준비중)
            $('#out_num').html(v.출고)
            $('#ing_num').html(v.배송중)
            $('#complete_num').html(v.배송완료)
            $.each(data.rows, function(i, v) {

            })
        },
        error: function(request, status, error) {
            console.log(error);
        }
    })

}


//총 구매 금액
function getTotalPrice() {
    let totalSum = 0;
    $.ajax({
        url: SERVER_AP + '/order/myTotalPrice',
        type: "post",
        cache: false,
        async: false,
        data: {
            u_seq: user_info.u_seq
        },
        success: function(data) {
            console.log('data : ', data)
            $.each(data.rows, function(i, v) {
                totalSum += v.price * 1;
            })
        },
        error: function(request, status, error) {
            console.log(error);
        }
    })

    return totalSum;

}


//주문 상품 정보 처리
function LoadProduct(scType) {
    ready_num = 0
    out_num = 0
    ing_num = 0
    complete_num = 0
    cancel_num = 0

    let endPoint = `/order/order-paging`;
    // if (windowWidth > 768) {
    //     endPoint = `/order/order-paging`
    // } else {
    //     endPoint = `/order/order-detail-paging`
    // }

    $.ajax({
        url: SERVER_AP + endPoint,
        type: "post",
        cache: false,
        async: false,
        data: {
            page: page,
            ppp: 10,
            order: 'o_date desc',
            sday: $("#sday").val(),
            eday: currentDateEnd($("#eday").val()),
            u_seq: user_info.u_seq,
            search: $('#search_val').val(),
            scType: scType,
        },
        success: function(data) {
            console.log('DATA', data);
            $("#order-list-tbody, #order-list-tbody_m, .order_m_go").html('');
            $('#order-no-data').addClass('d-none');
            if (data.totalCount == 0) {
                $('#order-no-data').removeClass('d-none');
                $("#paged-wrap").addClass('d-none')
            } else {
                let makeArr = [];
                let makeObj = new Object();
                let preValue = '';
                $.each(data.rows, function(i, v) {

                    // if (windowWidth > 768) {
                    //     if (v.o_state == '상품준비중') {
                    //         ready_num++
                    //     }
                    //     if (v.o_state == '출고') {
                    //         out_num++;
                    //     }
                    //     if (v.o_state == '주문취소') {
                    //         cancel_num++
                    //     }
                    //     if (v.o_state == '배송중') {
                    //         ing_num++
                    //     }
                    //     if (v.o_state == '배송완료') {
                    //         complete_num++
                    //     }
                    // }

                    let new_o_num = v.o_num.substr(3);


                    var number = (page * ppp) - ppp + (i + 1) //1부터 시작


                    let dateStr = ''
                    let thisdate = v.o_date.substr(0, 10)

                    let exchangeState = exchangeList(v.o_seq, v.p_seq_new)
                    let reviewStr =
                        ``
                    let stateStr = v.o_state;
                    if (exchangeState.length != 0) {
                        if (exchangeState[0].e_state == 0) {
                            stateStr = '반품/교환 신청 대기중'
                        } else if (exchangeState[0].e_state == 1) {
                            stateStr = '반품/교환 신청 승인'

                        } else if (exchangeState[0].e_state == -1) {
                            stateStr = '반품/교환 신청 거절'
                        } else if (exchangeState[0].e_state == 2) {
                            stateStr = '택배사출발'
                        } else if (exchangeState[0].e_state == 3) {
                            stateStr = '반품/교환완료'
                        }
                    }
                    let trackStr = ''
                    let orderStr = `<div style="margin-top:2px;" class="">
                                <div id="order-num-${v.o_seq}" class="pointer" style="">[${new_o_num}]</div>
                            </div>`;
                    let returnStr = ``

                    if (v.o_state == '배송완료') {
                        if (findReview(v.o_seq)) {
                            if (exchangeState.length != 0) {
                                if (exchangeState[0].e_state != 0) {
                                    reviewStr =
                                        `<div onclick='location.href="review-insert.php?pr_seq=${findReview(v.o_seq)}&&o_seq=${v.o_seq}&p_seq=${v.p_seq_new}&po_seq=${v.po_seq}"' style="border-top:1px solid black; cursor:pointer;">후기수정</div>`
                                }
                            }

                        } else {
                            if (exchangeState.length != 0) {
                                if (exchangeState[0].e_state != 0) {
                                    reviewStr =
                                        `<div onclick='location.href="review-insert.php?p_seq=${v.p_seq_new}&&o_seq=${v.o_seq}&po_seq=${v.po_seq}"' style="border-top:1px solid black; cursor:pointer;">구매후기</div>`
                                }
                            }


                        }

                        orderStr = `<div style="margin-top:2px;">
                                    <div id="order-num-${v.o_seq}" class="pointer" style="">${new_o_num}</div>
                                    ${returnStr}
                                </div>`;
                    }

                    if (v.o_state == '상품준비중') {
                        trackStr = `<div style="border:1px solid black;">
                                <div onclick="goCart(${v.p_seq_new},${v.po_seq});" style="border-top:1px solid black; cursor:pointer;">장바구니</div>
                            </div>`
                    }
                    if (v.o_tackbea && v.o_tracknum) {
                        trackStr = `<div>${v.o_tackbea}</div>
                                <div style="border:1px solid black;">
                                    <div style="color:#5f5f5f" class=" pointer" onclick="clickDelivery('${v.o_tracknum}', '${v.o_tackcode}')">${v.o_tracknum}</div>
                                    ${reviewStr}
                                </div>`;
                    }
                    let optionStr = '';
                    if (v.po_option1) {
                        optionStr =
                            `<br/><span style="color:#A8A8A8">[${v.po_option1} : ${v.po_option2}]</span>`;
                    }


                    if (v.o_tracknum && v.o_tackcode) {

                        if (v.o_state != '배송완료') {
                            let deliveryState = checkDelivery(v.o_tracknum, v.o_tackcode)
                            if (deliveryState.lastDetail) {
                                if (deliveryState.lastDetail.kind == '배달완료') {
                                    deliveryState.lastDetail.kind = '배송완료'
                                    updateComplete(v.o_seq);
                                }
                                v.o_state = deliveryState.lastDetail.kind
                            } else {
                                v.o_state = v.o_state
                            }
                        } else {
                            v.o_state = v.o_state
                        }
                    }
                    let colspanStr =
                        `<td class="pointer fs-12 row-td order_${v.o_num}" data-o_num="${v.o_num}">${thisdate}${orderStr}</td>`

                    let p_Image = ''
                    let imgStr = ''
                    let priceMoney = comma(v.p_price)
                    if (priceMoney == 'null') {
                        priceMoney = `삭제된 상품입니다.`
                    }
                    if (v.p_image) {
                        p_Image = JSON.parse(v.p_image)[0]
                        imgStr = `      <img
                                    onclick="location.href='/product_detail.php?p_seq=${v.p_seq_new}'"
                                    src="${ p_Image }" width="100px"/>`

                    } else {
                        imgStr = `삭제된 상품입니다.`
                    }

                    if (v.o_state == '입금대기') {
                        trackStr = `<div>
                                        ${v.vbank_name}(${v.vbank_num})
                                    </div>`
                    }

                    //     ${trackStr} 이거 추가해주면됨
                    let str = `<tr>
                            ${colspanStr}
                            <td>
                                ${imgStr}
                            </td>
                            <td onclick="location.href='/product_detail.php?p_seq=${v.p_seq_new}'" class=" text-dark text-left fs-17 pointer">
                            ${v.p_name || '삭제된 상품입니다.'}${optionStr}</td>
                            <td class="">${v.p_cnt}</td>
                            <td class="">${ priceMoney }</td>
                            <td class="">
                                <div class="">${v.o_state}</div>
                            </td>
                        </tr>`;

                    $('#order-list-tbody').append(str);




                    var str2 = `<div class="order_box_re mx-auto">
                            <div id="m-order-num-${v.o_seq}" class="d-flex justify-content-between align-items-end order_title">
                                <div class="order_date_re">
                                    <span class="font-weight-bold">${thisdate}</span> <span>(${v.o_num})</span>
                                </div>
                                <div class=" order_detail_text  pointer">
                                    상세보기 >
                                </div>
                            </div>
                            <div class="order_box_inner name_${v.o_num}">
                            </div>
                        </div>`

                    var str_m = `
                        <div class="item-mobile">
                            <div class="row row-item">
                                <div class="col-4">
                                    ${imgStr}
                                </div>
                                <div class="col-8">
                                    <div class="p_name" onclick="location.href='/product_detail.php?p_seq=${v.p_seq_new}'">
                                        ${v.p_name || '삭제된 상품입니다.'}${optionStr}
                                    </div>
                                    주문일 : ${thisdate}<br>
                                    주문번호 : <span id="m-order-num-${v.o_seq}">${v.o_num}</span><br>
                                    수량 : ${v.p_cnt} | 금액 : ${ priceMoney }원<br>
                                    처리상태 : ${v.o_state}
                                </div>
                            </div>
                        </div>
                    `;

                    $('#order-list-tbody_m').append(str_m);

                    const elements = document.querySelectorAll('.order_' + preValue);



                    preValue = v.o_num;


                    // makeArr.push(v.p_seq);
                    $(`#order-num-${v.o_seq}`).attr('onclick',
                        `modalOpen( "${v.o_num}", "${v.o_state}", ${v.o_seq}, '${thisdate}')`
                    )
                    $(`#m-order-num-${v.o_seq}`).attr('onclick',
                        `modalOpen( "${v.o_num}", "${v.o_state}", ${v.o_seq},'${thisdate}')`
                    )

                })


                let now_num = '';
                console.log('length : ', $(`.row-td`).length)
                $(`.row-td`).each(function(ii, vv) {
                    let rowSpan = 0;

                    $(`.row-td`).each(function(iii, vvv) {
                        if ($(vv).attr('data-o_num') == $(vvv).attr(
                                'data-o_num')) {
                            rowSpan = rowSpan + 1;
                        }
                    })

                    $(`.order_${$(vv).attr('data-o_num')}`).eq(0).attr('rowspan',
                        rowSpan);


                })


                $(`.row-td`).each(function(ii, vv) {
                    if (!$(vv).attr('rowspan')) {
                        $(vv).remove();
                    }
                })


                if (windowWidth < 768) {
                    darwProductMobile(data.rows2, scType);
                }


                $("#paged-wrap").removeClass('d-none')
                drawPaging(data.totalPage);




            }

            // if (!scType) {
            //     $(".ready_num").html(ready_num)
            //     $("#out_num").text(out_num)
            //     $("#ing_num").text(ing_num)
            //     $("#complete_num").text(complete_num)
            //     $("#cancel_num").text(cancel_num)
            // }

        },
        beforeSend: function() {
            Loading()
        },
        complete: function() {
            $("#div_ajax_load_image").remove();
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}


function darwProductMobile(data, scType) {
    console.log('durl');
    $.each(data, function(i, v) {
        // if (v.o_state == '상품준비중') {
        //     ready_num++
        // }
        // if (v.o_state == '출고') {
        //     out_num++;
        // }
        // if (v.o_state == '주문취소') {
        //     cancel_num++
        // }
        // if (v.o_state == '배송중') {
        //     ing_num++
        // }
        // if (v.o_state == '배송완료') {
        //     complete_num++
        // }

        let p_Image = ''
        let imgStr = ''
        let priceMoney = comma(v.p_price)
        if (priceMoney == 'null') {
            priceMoney = `삭제된 상품입니다.`
        }

        if (v.p_image) {
            p_Image = JSON.parse(v.p_image)[0]
            imgStr = `      <img
                                    onclick="location.href='/product_detail.php?p_seq=${v.p_seq_new}'"
                                    src="${ p_Image }" width="100px"/>`

        } else {
            imgStr = `삭제된 상품입니다.`
        }
        let exchangeState = exchangeList(v.o_seq, v.p_seq_new)


        let stateStr = v.o_state;
        if (exchangeState.length != 0) {
            if (exchangeState[0].e_state == 0) {
                stateStr = '반품/교환 신청 대기중'
            } else if (exchangeState[0].e_state == 1) {
                stateStr = '반품/교환 신청 승인'

            } else if (exchangeState[0].e_state == -1) {
                stateStr = '반품/교환 신청 거절'
            } else if (exchangeState[0].e_state == 2) {
                stateStr = '택배사출발'
            } else if (exchangeState[0].e_state == 3) {
                stateStr = '반품/교환완료'
            }
        }

        if (v.o_tracknum && v.o_tackcode) {
            if (windowWidth > 768) {
                if (v.o_state != '배송완료') {
                    console.log('xklxkxkx');
                    let deliveryState = checkDelivery(v.o_tracknum, v.o_tackcode)
                    console.log('deliveryState', deliveryState);
                    if (deliveryState.lastDetail) {
                        if (deliveryState.lastDetail.kind == '배달완료') {
                            deliveryState.lastDetail.kind = '배송완료'
                            updateComplete(v.o_seq);
                        }
                        v.o_state = deliveryState.lastDetail.kind
                    } else {
                        v.o_state = v.o_state
                    }
                } else {
                    v.o_state = v.o_state
                }
            }

        }
        let mobileStr = ``;
        let textStyle = ''
        let dateStr_m = ''
        let btnStr_m = `
                    <div onclick="goCart(${v.p_seq_new},${v.po_seq});" class="order_list_btn fs-10-m">
                        장바구니
                    </div>`
        let btn = ``;

        let mbtn = ``;
        if (v.o_state == '상품준비중') {
            btn =
                `<span class="btn btn-sm btn-secondary" onclick="orderCancel(${v.o_seq})">주문취소</span>`
            btnStr_m +=
                `<div class="order_list_btn" onclick="alert('상품 준비 중입니다.')">배송조회</div>`

        }
        if (v.o_state == '출고') {
            btn = `-`;
            mbtn = `-`;

            btnStr_m +=
                `
            <div class="order_list_btn" onclick="clickDelivery('${v.o_tracknum}', '${v.o_tackcode}')">배송조회</div>`

        }
        if (v.o_state == '주문취소') {
            btn = `주문취소 신청중`;
            mbtn = `주문취소 신청중`;
        }
        if (v.o_state == '배송중') {

            btnStr_m +=
                `
            <div class="order_list_btn" onclick="clickDelivery('${v.o_tracknum}', '${v.o_tackcode}')">배송조회</div>`

        }
        if (v.o_state == '배송완료') {
            // <div class="order_list_btn" onclick="changeAccept(${v.o_seq}, ${v.p_seq_new}, ${v.po_seq})">교환, 반품 신청</div>
            btnStr_m +=
                `
            <div class="order_list_btn "><a href="review-insert.php?p_seq=${v.p_seq_new}&po_seq=${v.po_seq}">후기작성</a></div>`

        }
        if (v.o_state == '입금대기') {
            stateStr = `${v.o_state}<div>${v.vbank_name}(${v.vbank_num})</div>`
        }



        mobileStr += `<div class="buy_wrap " style="flex-wrap:wrap">
                        <div class="  inner_box_1" style="gap:5px; flex:1;">
                            <div class="d-flex align-items-center" style="gap:5px">
                                <div class="order_comp_text ${textStyle}">${status}</div>
                                ${dateStr_m}
                            </div>
                            <div class=" d-flex">
                                <div onclick="location.href='/product_detail.php?p_seq=${v.p_seq_new}'" class="">
                                    <img src="${p_Image}" width="64" class="h-100" alt="">
                                </div>
                                <div class="ml-3" style="flex:1;">
                                    <div class="mb-2">${v.p_name || '삭제된 상품입니다.'}</div>
                                    <div class="d-flex order_money_wrap">
                                        <div class="">
                                            <span>${comma(v.p_price)} </span>원
                                            <span class="order_point"></span>
                                            <span>${v.p_cnt} </span>개
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-w-1002">
                            <div class="border-left p-2 d-flex  align-items-center justify-content-between h-100" >
                                <div class="font-weight-bold text-center" style="font-size:12px;">
                                    ${stateStr}
                                </div>
                                <div class="d-flex" style="gap:10px;">
                                    ${btnStr_m}
                                </div>
                            </div>
                        </div>
                    </div>`
        $('.name_' + v.o_num).append(mobileStr)

    })


    console.log('ㅌ타냐냔냐냐, ', ready_num);
    $(".ready_num").html(ready_num)
    $("#out_num").text(out_num)
    $("#ing_num").text(ing_num)
    $("#complete_num").text(complete_num)
    $("#cancel_num").text(cancel_num)

}

function goPage(_page) {
    if (_page == 'prev') {
        page = (page * 1) - 1;
    } else if (_page == 'next') {
        page = (page * 1) + 1;
    } else {
        page = _page;
    }
    LoadProduct()
}


function modalOpen(o_num, o_state, o_seq, o_date) {
    let inday = calcDay(o_date)
    let cancelCheck = ``
    $(".ordermodal-title").text(o_num || '-')
    $("#ordermodal-date").text(o_date)
    $('.in_day').html(inday)
    $("#ordermodal-tbody").html('')
    $(".order_detail_list").html('')
    let alltotalprice = 0;
    let minusPrice = 0;

    $.ajax({
        url: SERVER_AP + "/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'order_list',
            common: {
                o_num: o_num
            },
        },
        success: function(data) {
            console.log('xxxx', data);
            $.each(data, function(i, v) {
                cancelCheck = ``;
                let proinfo = proInfo(v.p_seq_new)
                console.log(';dd', proinfo);
                if (proinfo.length != 0) {
                    let optionPrice = 0;
                    let optionName = "";
                    if (v.po_seq) {
                        let opinfo = opInfo(v.po_seq)
                        optionPrice = opinfo.price * 1
                        optionName = opinfo.name;
                    }

                    var number = (page * ppp) - ppp + (i + 1) //1부터 시작

                    var mainimg = JSON.parse(proinfo.img);

                    let exchangeState = exchangeList(v.o_seq, v.p_seq_new)

                    ///////////////////////////배송비///////////////////////
                    let thisdelPrice_each = 0;
                    let dell_each = LoadDel(proinfo.dt_seq)
                    let datatype_each = $(dell_each).attr("data-type")
                    let condition_each = $(dell_each).attr("data-condition") * 1
                    let price_each = $(dell_each).attr("data-del") * 1
                    let data_clac = $(dell_each).attr("data-dt_calc")

                    let proprice_each = (proinfo.price * 1 + optionPrice) * v.p_cnt * 1

                    alltotalprice += (proinfo.price * 1 + optionPrice) * v.p_cnt * 1


                    let quantynum_each = v.p_cnt * 1

                    if (condition_each) {
                        if (datatype_each == '원 이하') {
                            if (condition_each >= proprice_each) {
                                thisdelPrice_each = price_each
                            } else {
                                thisdelPrice_each = 0
                            }
                        } else if (datatype_each == '개당') {
                            thisdelPrice_each = (parseInt((quantynum_each - 1) /
                                        condition_each) +
                                    1) *
                                price_each
                        }
                    } else {
                        if (isNaN(price_each)) {
                            thisdelPrice_each = 0
                        } else {
                            thisdelPrice_each = price_each
                        }
                    }
                    ///////////////////////////배송비///////////////////////
                    let trackStr = ''
                    if (v.o_tackbea && v.o_tracknum) {
                        $('.delivery_wrap').removeClass('d-none');
                        trackStr = `
                                <div class="pointer" onclick="clickDelivery('${v.o_tracknum}', '${v.o_tackcode}')">
                                    <div>${v.o_tackbea}</div>
                                    <div>
                                        <div style="color:#5f5f5f" class=" pointer">${v.o_tracknum}</div>
                                    </div>
                                </div>
                               `;

                        $('#del_td').html(trackStr)
                    } else {
                        $('.delivery_wrap').addClass('d-none');
                    }


                    var str = '<tr>\
                                  <td>' + number + '</td>\
                                  <td>\
                                    <div class="pro-thumnail pointer mx-auto" style="background:url(\'' + mainimg[0] +
                        '\')" onclick="location.href=`product_detail.php?p_seq=' + v.p_seq_new + '`"></div>\
                                  </td>\
                                  <td><div onclick="location.href=`product_detail.php?p_seq=' + v.p_seq_new +
                        '`" class="dots pointer product_name' + v.o_seq + '">' + proinfo.name +
                        ' ' +
                        optionName + '</div></td>\
                                  <td>' + v.p_cnt + '</td>\
                                  <td>' + comma(proinfo.price * 1 + optionPrice * v.p_cnt) + ' 원</td>\
                                  <td>' + comma(thisdelPrice_each) + ' 원</td>\
                                  <td id="review-td-' + v.p_seq_new + '">\
                                    <span onclick="askOrder(' + v.o_seq + ',' + v.p_seq_new + ')" class="btn btn-sm btn-secondary ">Q&A등록</span>\
                                  </td>\
                                </tr>';
                    var mstr = `<div class="border p-3">
                                        <div class="d-flex pt-3">
                                            <div class="mr-2">
                                                <img src="${mainimg[0]}" style="width:64px;height:64px;" />
                                            </div>
                                            <div class="pro_info_m_box">
                                                <div class="">
                                                    <span class="pro_name_elipsis product_name${v.o_seq}" >` +
                        proinfo.name + ` ` +
                        optionName + `  </span>,` + v.p_cnt + ` 개
                                                </div>
                                                <div class="">
                                                    <span class="">총 금액 : </span>` + comma((proinfo.price * 1 +
                            optionPrice) * v.p_cnt) + ` 원
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-100 ">
                                            <div class="text-center d-flex" id="m-review-td-` + v.p_seq_new + `">
                                                <span onclick="askOrder(${v.o_seq},${v.p_seq_new});" class="btn w-50 btn-sm btn-secondary">Q&A등록</span>
                                            </div>
                                        </div>
                                    </div>`
                    $("#ordermodal-tbody").append(str);


                    $('.order_detail_list').append(mstr);

                    if (v.o_state != '상품준비중') {
                        // $("#review-td-" + v.p_seq_new).html('')
                        // $("#m-review-td-" + v.p_seq_new).html('')

                        if (exchangeState.length == 0) {
                            if (v.o_state == '배송완료') {
                                $("#review-td-" + v.p_seq_new).append(
                                    '<a class="btn btn-sm btn-info rounded-0" href="review-insert.php?p_seq=' +
                                    v.p_seq_new + '&po_seq=' + v.po_seq + '">후기작성</a>')
                                $("#review-td-" + v.p_seq_new).append(
                                    `<span class="btn btn-sm btn-secondary" onclick="changeAccept(${v.o_seq}, ${v.p_seq_new}, ${v.po_seq})">반품/교환 신청</span>`
                                )

                                $("#m-review-td-" + v.p_seq_new).append(
                                    '<a class="btn  btn-sm btn-info w-100 rounded-0" href="review-insert.php?p_seq=' +
                                    v.p_seq_new + '&po_seq=' + v.po_seq + '">후기작성</a>')
                                $("#m-review-td-" + v.p_seq_new).append(
                                    `<span class="btn btn-sm btn-secondary w-100" onclick="changeAccept(${v.o_seq}, ${v.p_seq_new}, ${v.po_seq})">반품/교환 신청</span>`
                                )
                            } else if (v.o_state == '주문취소') {
                                cancelCheck = `주문취소`
                                $("#review-td-" + v.p_seq_new).html(
                                    '<a class=" ml-3" >주문 취소 한 상품입니다.</a>');
                                $("#m-review-td-" + v.p_seq_new).html(
                                    '<a class=" ml-3" >주문 취소 한 상품입니다.</a>')

                                minusPrice = (proinfo.price * 1 + optionPrice) * v.p_cnt * 1
                            }
                        } else {
                            cancelCheck = `반품/교환`
                            if (exchangeState[0].e_state == 0) {
                                $("#review-td-" + v.p_seq_new).append(
                                    '<span class="text-primary btn btn-primary w-100">반품/교환 신청 대기중</span>'
                                )
                                $("#m-review-td-" + v.p_seq_new).append(
                                    '<span class="text-primary btn btn-primary w-100">반품/교환 신청 대기중</span>'
                                )
                            } else if (exchangeState[0].e_state == 1) {
                                $("#review-td-" + v.p_seq_new).append(
                                    '<span class="text-success  btn btn-primary w-100">반품/교환 신청 승인</span>'
                                )
                                $("#m-review-td-" + v.p_seq_new).append(
                                    '<span class="text-success btn-sm  btn btn-primary w-100">반품/교환 신청 승인</span>'
                                )
                            } else if (exchangeState[0].e_state == -1) {
                                $("#review-td-" + v.p_seq_new).append(
                                    '<span class="text-danger  btn btn-primary w-100">반품/교환 신청 거절</span>'
                                )
                                $("#m-review-td-" + v.p_seq_new).append(
                                    '<span class="text-danger  btn btn-primary w-100">반품/교환 신청 거절</span>'
                                )
                            } else if (exchangeState[0].e_state == 2) {
                                $("#review-td-" + v.p_seq_new).append(
                                    '<span class="text-info  btn btn-primary w-100">택배사출발</span>'
                                )
                                $("#m-review-td-" + v.p_seq_new).append(
                                    '<span class="text-info  btn btn-primary w-100">택배사출발</span>'
                                )
                            } else if (exchangeState[0].e_state == 3) {
                                $("#review-td-" + v.p_seq_new).append(
                                    '<span class="text-danger  btn btn-primary w-100">반품/교환완료</span>'
                                )
                                $("#m-review-td-" + v.p_seq_new).append(
                                    '<span class="text-danger  btn btn-primary w-100">반품/교환완료</span>'
                                )
                            }

                        }
                    } else if (v.o_state == '상품준비중') {
                        $("#review-td-" + v.p_seq_new).html(

                            ` <span onclick="askOrder(${v.o_seq},${v.p_seq_new});" class="btn btn-sm btn-secondary">Q&A등록</span>
                        <span class="btn btn-sm btn-secondary" onclick="orderCancel(${v.o_seq})">주문취소</span>`
                        )
                        $("#m-review-td-" + v.p_seq_new).html(
                            ` <span onclick="askOrder(${v.o_seq},${v.p_seq_new});" class="btn w-100 btn-sm btn-secondary">Q&A등록</span>
                        <span class="btn btn-sm btn-secondary w-100" onclick="orderCancel(${v.o_seq})">주문취소</span>`
                        )
                    }
                }

            })

            $(".credit-totalprice").text(comma(alltotalprice))
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });


    let obj = {
        o_seq: o_seq,
    }

    $.ajax({
        url: SERVER_AP + "/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'order_list',
            common: obj,
        },
        success: function(data) {
            if (cancelCheck) {
                $(".cancelCheck").html(cancelCheck)
            } else {
                $(".credit-totalprice-all").text(comma(data[0].o_total_price * 1 + data[0].o_del_price * 1 -
                    data[0].o_point * 1 - data[0].o_coupon * 1))
            }

            $(".credit-delprice").text(comma(data[0].o_del_price))
            if (data[0].pay_method == 'vbank') {
                data[0].pay_method = '무통장입금'

                $(".credit-vbank_name").text(data[0].vbank_name || '')
                $(".credit-bank_name").text(data[0].bank_name || '')
                $(".credit-vbank_num").text(data[0].vbank_num ? '(' + data[0].vbank_num + ')' : '')
                $(".credit-bank_name").addClass('d-none');
            } else {

                $(".credit-vbank_name").text(data[0].card_name || '')
                $(".credit-bank_name").text(data[0].card_number || '')
                $(".credit-vbank_num").text(data[0].vbank_num ? '(' + data[0].vbank_num + ')' : '')
                $(".credit-bank_name").removeClass('d-none');
            }
            if (data[0].pay_method == 'point') {
                data[0].card_name = '카카오페이'
            }
            $(".credit-pay_method").text(data[0].pay_method || '-')

            $(".credit-point").text(comma(data[0].o_point))
            $(".credit-coupon").text(comma(data[0].o_coupon))

            let delinfo = loadHomedataArr()
            $("#r_name").text(data[0].o_nonuser_name || delinfo.dl_person)
            $("#r_phone").text(data[0].o_phone ? hyphen(data[0].o_phone) : hyphen(delinfo.dl_phone))
            $("#r_address").text(data[0].o_nonuser_address ? (data[0].o_nonuser_address + ' ' + data[0]
                .o_nonuser_address2) : (delinfo.dl_address + ' ' + delinfo.dl_address_detail))
            $("#r_text").text(data[0].o_request || delinfo.dl_request)
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });

    $("#ordermodal").modal('show')
}

//////////////////////////////////////////////////////////


function proInfo(p_seq) {
    var info = [];
    var obj = new Object();
    obj.p_seq = p_seq;
    $.ajax({
        url: SERVER_AP + "/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'product',
            common: obj,
        },

        success: function(data) {

            if (data.length != 0) {
                info = {
                    stock: data[0].p_stock,
                    name: data[0].p_name,
                    img: data[0].p_image,
                    price: (data[0].p_wholesale && user_info.u_type == '사업자회원' && user_info
                            .u_status ==
                            1) ?
                        data[0].p_wholesale : data[0].p_price,
                    dt_seq: (data[0].dt_seq_up && user_info.u_type == '사업자회원' && user_info
                            .u_status ==
                            1) ?
                        data[0].dt_seq_up : data[0].dt_seq,
                    p_purchase: data[0].p_purchase,
                    p_option: data[0].p_option
                }
            }

        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    return info;
}

function opInfo(po_seq) {
    var info = [];
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
            info = {
                p_seq: data[0].p_seq,
                stock: data[0].po_stock,
                name: data[0].po_option1 + ' ' + data[0].po_option2,
                price: data[0].po_price
            }
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    return info;
}
//////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function orderCancel(o_seq) {
    if (confirm("주문 취소신청하시겠습니까?")) {
        var obj = new Object();
        obj.o_state = '주문취소'
        $.ajax({
            url: SERVER_AP + "/admin/common/update",
            type: "post",
            cache: false,
            async: false,
            data: {
                table: 'order_list',
                whereField: "o_seq",
                whereValue: o_seq,
                obj: obj,
            },
            success: function(data) {
                location.reload()
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }
}

function orderComplete(o_seq) {
    if (confirm("배송완료 처리하시겠습니까?")) {
        var obj = new Object();
        obj.o_state = '배송완료'
        $.ajax({
            url: SERVER_AP + "/admin/common/update",
            type: "post",
            cache: false,
            async: false,
            data: {
                table: 'order_list',
                whereField: "o_seq",
                whereValue: o_seq,
                obj: obj,
            },
            success: function(data) {
                location.reload()
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }
}

function changeAccept(o_seq, p_seq, po_seq) {
    $("#change-modal").modal("show")
    $("#change-modal-btn").attr('onclick', `changeAcceoptClick(${o_seq}, ${p_seq}, ${po_seq})`)
}

function changeAcceoptClick(o_seq, p_seq, po_seq) {
    if (!$("#change_type").val()) {
        alert("반품/교환을 선택해주세요.")
        return
    }
    if ($("#change_note").summernote('isEmpty')) {
        alert("내용을 입력해주세요.")
        return
    }
    if (confirm("반품/교환 신청 하시겠습니까?")) {
        var obj = new Object();
        obj.o_seq = o_seq;
        obj.p_seq = p_seq;
        obj.po_seq = po_seq;
        obj.e_text = $("#change_note").summernote('code');
        obj.e_type = $("#change_type").val()
        obj.e_date = currentDate();
        obj.u_seq = user_info.u_seq;
        return_picture_arr.length == 0 || (obj.e_pic = JSON.stringify(return_picture_arr));

        $.ajax({
            url: SERVER_AP + "/admin/common/insert",
            type: "post",
            cache: false,
            async: false,
            data: {
                table: 'exchange',
                obj: obj,
            },
            success: function(data) {
                updateType(o_seq)
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }
}

function updateType(o_seq) {
    let obj = new Object();
    obj.o_state = $("#change_type").val()
    $.ajax({
        url: SERVER_AP + "/admin/common/insert",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'order_list',
            whereField: "o_seq",
            whereValue: o_seq,
            obj: obj,
        },
        success: function(data) {

            location.reload()
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

function exchangeList(o_seq, p_seq) {
    var result = [];

    var obj = new Object();
    obj.o_seq = o_seq;
    obj.p_seq = p_seq;
    $.ajax({
        url: SERVER_AP + "/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'exchange',
            common: obj,
        },
        success: function(data) {
            result = data
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    return result;
}

function deleteUser() {
    $("#openCheck").modal('hide');
    $('#deleteModal').modal('show');



    // var obj = new Object();
    // obj.u_delete = 'Y'
    // obj.u_id = "";
    // obj.u_delete_reason = "";
    // $.ajax({
    //     url: SERVER_AP+"/common/update",
    //     type: "post",
    //     cache: false,
    //     async:false,
    //     data:{
    //         table : 'user',
    //         whereField:"u_seq",
    //         whereValue:user_info.u_seq,
    //         obj:obj,
    //     },
    //     success: function(data){
    //         alert('정상적으로 탈퇴되었습니다.')
    //         location.href='/logout.php';
    //     },
    //     error: function (request, status, error){
    //         console.log(error);
    //     }
    // });

}

function deleteReal() {
    if (confirm('정말 탈퇴하시겠습니까?')) {
        var obj = new Object();
        obj.u_delete = 'Y'
        obj.u_id = "";
        obj.u_delete_reason = "";
        $.ajax({
            url: SERVER_AP + "/common/update",
            type: "post",
            cache: false,
            async: false,
            data: {
                table: 'user',
                whereField: "u_seq",
                whereValue: user_info.u_seq,
                obj: obj,
            },
            success: function(data) {
                alert('정상적으로 탈퇴되었습니다.')
                location.href = '/logout.php';
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }
}

function checkLogin() {
    var user_info2 = {
        u_id: user_info.u_id,
        u_pw: $('#loginPs').val(),
    };

    $.ajax({
        type: "POST",
        url: SERVER_AP + '/user/login',
        cache: false,
        dataType: 'json',
        data: {
            obj: user_info2
        },
        success: function(data) {
            if (data.result == 'not_found') {
                // alert('존재하지 않는 아이디 입니다.');
                console.log('qlqlfjkdjfi');

            } else if (data.result == 'wrong_pwd') {
                alert('비밀번호를 확인해 주세요.')
            } else {
                if (goCheckType == 1) {
                    location.href = 'myPageEdit.php?seq=' + user_info.u_seq + ''
                } else {
                    deleteUser();
                }

            }
        },
        error: function(request, status, error) {
            console.log("code:" + request.status + "\n" + "message:" + request.responseText + "\n" +
                "error:" + error);
        },
    });
}

var goCheckType = ""

function openCheck(check) {
    if (check == 1) {
        location.href = 'myPageEdit.php?seq=' + user_info.u_seq + ''
    } else {
        $('#openCheck').modal('show');
    }

    goCheckType = check;

}


function LoadMyCouponlist() {
    $.ajax({
        url: SERVER_AP + "/admin/coupon/my-coupon-N",
        type: "post",
        cache: false,
        data: {
            u_seq: user_info.u_seq,
        },
        success: function(data) {
            console.log('쿠폰 리스트 : ', data)
            $(".u_coupon").text(data.length)
            if (data.length == 0) {
                $('#cupon-no-data').removeClass('d-none');
            } else {
                $('#cupon-no-data').addClass('d-none');
                $.each(data, function(i, v) {
                    let str = `<tr>
                        <td>${i+1}</td>
                        <td><img src="${v.c_img}" /></td>
                        <td>${cuponExp(v.c_seq)}</td>
                    </tr>`;
                    $('#cupon-list-tbody').append(str);
                })
            }

        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

function cuponExp(_target) {
    let result = '';
    var obj = new Object();
    obj.c_seq = _target;

    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'coupon',
            common: obj,
        },
        success: function(data) {
            result = data[0].c_eday;
            if (!result) {
                result = '-';
            } else {
                result = result + '까지';
            }
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    return result;
}


function orderCount(_target, _el) {
    let result = '';
    var obj = new Object();
    obj.o_state = _target;
    obj.u_seq = user_info.u_seq

    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        data: {
            table: 'order_list',
            common: obj,
        },
        success: function(data) {
            $('.o_cancel').attr('onclick', `location.href='order_list.php?orderSet=cancel'`)
            $(_el).text(data.length);

        },
        error: function(request, status, error) {
            console.log(error);
        }
    });

}


function loadHomedataArr() {
    let result = []
    var obj = new Object();
    obj.dl_useq = user_info.u_seq;
    obj.dl_check = 'Y'
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'delivery_location',
            common: obj,
        },
        success: function(data) {
            result = data[0]
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    return result;
}



function trackShow() {
    alert('준비중')
    //
    // $.ajax({
    //     url: 'http://info.sweettracker.co.kr/api/v1/companylist'
    //     type: "post",
    //     cache: false,
    //     async:false,
    //     data:{
    //         table: 'delivery_location',
    //         common:obj,
    //     },
    //     success: function(data){
    //         result = data[0]
    //     },
    //     error: function (request, status, error){
    //         console.log(error);
    //     }
    // });
}



$(".daybtn").click(function() {
    $(".daybtn").addClass("btn-primary")
    $(".daybtn").removeClass("btn-secondary")
    $(this).removeClass("btn-primary")
    $(this).addClass("btn-secondary")

    let target = $(this).attr('data-target')
    let today = currentDate().substr(0, 10)

    let year = today.split('-')[0]
    let month = today.split('-')[1]
    let day = today.split('-')[2]
    // console.log('dd', today);
    // console.log('df', lastMonth(today));
    if (target == 'today') {
        $("#sday").val(today)
        $("#eday").val(today)
    } else if (target == 'week') {
        $("#sday").val(lastWeek(today))
        $("#eday").val(today)
    } else if (target == 'month1') {
        $("#sday").val(lastMonth(today))
        $("#eday").val(today)
    } else if (target == 'month3') {
        $("#sday").val(lastMonth3(today))
        $("#eday").val(today)
    } else if (target == 'year') {
        $("#sday").val(lastYear(today))
        $("#eday").val(today)
    }

    LoadProduct()
})

function getDateStr(myDate) {
    var year = myDate.getFullYear();
    var month = myDate.getMonth() + 1;
    month = month < 10 ? '0' + month.toString() : month.toString();
    var day = myDate.getDate();
    day = day < 10 ? '0' + day.toString() : day.toString();

    return (year + '-' + month + '-' + day)
}

function lastWeek() {
    var d = new Date()
    var dayOfMonth = d.getDate()
    d.setDate(dayOfMonth - 7)
    return getDateStr(d)
}

function lastMonth() {
    var d = new Date()
    var monthOfYear = d.getMonth()
    d.setMonth(monthOfYear - 1)
    return getDateStr(d)
}

function lastMonth3() {
    var d = new Date()
    var monthOfYear = d.getMonth()
    d.setMonth(monthOfYear - 3)
    return getDateStr(d)
}

function lastYear() {
    var d = new Date()
    var monthOfYear = d.getMonth()
    d.setMonth(monthOfYear - 60)
    return getDateStr(d)
}





function currentDateEnd(endday) {
    // 선택한 날짜를 Date 객체로 변환하기
    const selectedDate = new Date(endday);

    // 하루를 더한 날짜 계산하기
    const oneDay = 24 * 60 * 60 * 1000; // milliseconds
    const newDate = new Date(selectedDate.getTime() + oneDay);

    // 새로운 날짜를 yyyy-mm-dd 형식의 문자열로 변환하기
    const year = newDate.getFullYear();
    const month = ('0' + (newDate.getMonth() + 1)).slice(-2); // 0부터 시작하므로 1을 더함
    const day = ('0' + newDate.getDate()).slice(-2);
    const newDateString = `${year}-${month}-${day}`;

    return year + "-" + month + "-" + day;
}

var return_picture_arr = [];

//이미지등록
$('#pr_pic').change(function() {
    var dir = currentDate() + 'product_review'; //파일경로
    makeFormData_productReview(this, dir);
});

function makeFormData_productReview(input, dir) {
    var file = input.files;

    $.each(file, function(i, v) {
        var formData = new FormData();
        formData.append('dir', dir);
        formData.append('img', v);

        if (return_picture_arr.length > 5) {
            alert('이미지는 최대 6개까지 등록가능합니다.')
            return false;
        }

        var c_img = fileUpload(formData, dir);

        //$("#pr_pic_div > label").remove();
        var str = '<div class="position-relative d-inline-block mr-2 review_img" style="background:url(\'' +
            c_img + '\')" data-img="' + c_img + '">\
                        <i class="far fa-times-circle reviewimgClose"></i>\
                        <i class="fas fa-search-plus reviewimgMore" onclick="reviewimgMoreClick(\'' + c_img + '\',event)"></i>\
                    </div>';
        $("#pr_pic_div").append(str);

        //사진변경해달라하면넣기
        // <label for="review-image-change'+i+'"><i class="fas fa-sync-alt reviewimgChange"></i></label>\
        // <input type="file" name="" value="" class="d-none review-image-change" id="review-image-change'+i+'">\

        // $.each($(".review_img"),function(ii,vv){
        //     $(vv).attr('data-target',ii)
        // })

        return_picture_arr.push(c_img)
    });
}

$(document).on("click", ".reviewimgClose", function() {
    var thisval = $(this).closest("div").attr('data-img');
    for (var i = 0; i < return_picture_arr.length; i++) {
        if (return_picture_arr[i] == thisval) {
            return_picture_arr.splice(i, 1);
            i--;
        }
    }
    $(this).closest(".review_img").remove();
})

//이미지 자세히보기
function reviewimgMoreClick(src, e) {
    e.preventDefault()
    $("#modal-img-more").attr("src", src)
    $("#img-modal").modal("show");
}


//이미지 자세히보기
function reviewimgMoreClickLoaded(src, e, pr_seq) {
    e.preventDefault()

    if ($('#mdoal-img-wrap').hasClass('slick-initialized')) {
        $('#mdoal-img-wrap').slick('unslick'); //슬릭해제
    }

    $.ajax({
        url: SERVER_AP + "/product/review-condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'product_review',
            pr_seq: pr_seq,
        },
        success: function(data) {

            $("#modal-img-more").remove()

            $('#mdoal-img-wrap, #mdoal-img-wrap-cont').html('')

            let imgArr = JSON.parse(data[0].pr_pic)
            $.each(imgArr, function(i, v) {
                let str = `<div><img src="${v}" class="w-100" /></div>`;
                $('#mdoal-img-wrap').append(str)
            })

            $('#mdoal-img-wrap').slick({
                slide: 'div',
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                dots: true,
            });

            let imgIndex = imgArr.indexOf(src)
            $('#mdoal-img-wrap').slick('slickGoTo', imgIndex);

            var name = '';
            if (data[0].u_id) {
                let username = data[0].u_id
                let username_rear = data[0].u_id.slice(4, data[0].u_id.length)
                let masking = ''
                for (let i = 0; i < username_rear.length; i++) {
                    masking += '*'
                }
                name = data[0].u_id.substr(0, 4) + masking
            } else {
                name = '홍길동'
            }

            let goodBtn = ``
            // if(data[0].pr_user){
            //     let arr = JSON.parse(data[0].pr_user)
            //     if(arr.includes(user_info.u_seq)){
            //         goodBtn = `<div class="pointer good_review ml-auto d-inline-block active" onclick=badReview(${data[0].pr_seq})>좋아요 <span>${data[0].pr_good}</span></div>`
            //     }else{
            //         goodBtn = `<div class="pointer good_review ml-auto d-inline-block" onclick=goodReview(${data[0].pr_seq})>좋아요 <span>${data[0].pr_good}</span></div>`
            //     }
            // }else{
            //     goodBtn = `<div class="pointer good_review ml-auto d-inline-block" onclick=goodReview(${data[0].pr_seq})>좋아요 <span>${data[0].pr_good}</span></div>`
            // }

            let contstr = `<div class="mt-3">
                                <div>${data[0].pr_options} ${star(data[0].pr_star)}</div>
                                <div class="mt-2 text-secondary" style="font-size:12px;">${name} ${data[0].pr_date}</div>
                                <div class="mt-2">${data[0].pr_comments}</div>
                                <div class="mt-2 d-flex">${goodBtn}</div>
                            </div>`

            function star(pr_star) {
                var star = ``
                for (let i = 0; i < pr_star; i++) {
                    star += `<i class="fa fa-star" aria-hidden="true" style="color:#ede661"></i>`;
                }
                return star
            }


            $('#mdoal-img-wrap-cont').append(contstr)
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    $("#img-modal").modal("show");
}
////////
/////////////////////////////메인이미지 변경

$(document).on("change", ".review-image-change", function() {
    var dir = currentDate() + 'product'; //파일경로
    makeFormDataReviewChange(this, dir);
})

function makeFormDataReviewChange(input, dir) {
    var file = input.files;

    $.each(file, function(i, v) {
        var formData = new FormData();
        formData.append('dir', dir);
        formData.append('img', v);

        var c_img = fileUpload(formData, dir);

        var index = $(input).closest(".review_img").attr('data-target') * 1;
        $(input).closest('.review_img').css("background", "url(" + c_img + ")")
        return_picture_arr[index] = c_img;
    });
}

function calcDay(day) {
    // 입력받은 날짜를 Date 객체로 변환
    const date = new Date(day);

    // 2일 후 날짜 객체 생성
    const futureDate = new Date(date.getTime() + (2 * 24 * 60 * 60 * 1000));

    const weekdays = ['일', '월', '화', '수', '목', '금', '토'];
    let finalDay = ``;

    // 2일 후 날짜가 주말인 경우, 다음 평일의 날짜와 요일 출력
    if (futureDate.getDay() === 0) { // 일요일인 경우
        futureDate.setDate(futureDate.getDate() + 1); // 다음날로 변경
        finalDay = futureDate.toLocaleDateString() + '(' + weekdays[futureDate.getDay()] + ')'
    } else if (futureDate.getDay() === 6) { // 토요일인 경우
        futureDate.setDate(futureDate.getDate() + 2); // 다다음날로 변경
        finalDay = futureDate.toLocaleDateString() + '(' + weekdays[futureDate.getDay()] + ')'
    } else { // 평일인 경우
        finalDay = futureDate.toLocaleDateString() + '(' + weekdays[futureDate.getDay()] + ')'
    }

    return finalDay;
}

function askOrder(seq, p_seq) {
    let name = $('.product_name' + seq).text();
    $('.product_name').html(name)

    $('#ordermodal').modal('hide');
    $('#askModal').modal('show');
    $('#goAsk').attr('onclick', 'goAsk(' + seq + ',' + p_seq + ')')
}

function goAsk(seq, p_seq) {
    let obj = new Object();
    obj.u_seq = user_info.u_seq;
    obj.o_seq = seq;


    obj.oa_type = $('#oa_type').val();
    obj.oa_title = $('#oa_title').val();
    obj.oa_text = $('#oa_text').val();
    obj.oa_p_seq = p_seq;

    if (!obj.oa_type) {
        alert('문의 유형을 선택해주세요.')

        return false;
    }

    if (!obj.oa_title) {
        alert('문의 제목을 입력해주세요.')

        return false;
    }

    if (!obj.oa_text) {
        alert('문의 내용을 입력해주세요.')

        return false;
    }
    obj.oa_date = currentDate();
    $.ajax({
        url: SERVER_AP + "/admin/common/insert",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'order_ask',
            obj: obj,
        },
        success: function(data) {
            alert("상품 문의가 등록되었습니다.")
            location.reload();
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}


function updateComplete(seq) {
    let obj = new Object();
    obj.o_state = '배송완료';

    $.ajax({
        url: SERVER_AP + "/admin/common/update",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'order_list',
            obj: obj,
            whereField: 'o_seq',
            whereValue: seq,
        },
        success: function(data) {

        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}


function drawRecentProduct() {
    if (getCookie('img')) {
        let img_cookies = JSON.parse(getCookie('img'))
        if (img_cookies.length > 5) {
            img_cookies.pop();
        }
        $.each(img_cookies, function(i, v) {
            if (img_cookies[i].p_price) {
                let str = `<tr class="recent${v.p_seq}">
                <td style="max-width:60px;"><img onclick="location.href='/product_detail.php?p_seq=${v.p_seq}'" class="w-100" src="${v.img}" /></td>
                <td><span class="pointer" onclick="location.href='/product_detail.php?p_seq=${v.p_seq}'">${v.p_name}</span></td>
                <td>${img_cookies[i].p_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")} 원</td>
                <td style="max-width:100px;" class="position-relative">
                    <div>
                        <div class="pointer border py-1 px-2 fs-12 mb-1 w-50 mx-auto" onclick="location.href='/product_detail.php?p_seq=${v.p_seq}';" style="min-width:60px;">주문하기</div>
                        <span class="close_btn pointer"  onclick="removeRecent(${v.p_seq});">
                        <i class="fa-solid fa-xmark"></i>
                        </span>
                    </div>
                </td>
            </tr>`;
                $('#time-list-tbody').append(str);

                let str_m = `<div class="time-mobile">
                    <div class="row row-item">
                        <div class="col-4">
                            <img onclick="location.href='/product_detail.php?p_seq=${v.p_seq}'" class="w-100" src="${v.img}" />
                        </div>
                        <div class="col-8">
                            <div class="p_name mt-2">
                                <span class="pointer" onclick="location.href='/product_detail.php?p_seq=${v.p_seq}'">${v.p_name}</span>
                            </div>
                            판매가 : ${img_cookies[i].p_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")} 원<br>
                            <div class="mt-2">
                                <span class="border py-1 px-2 fs-12" onclick="location.href='/product_detail.php?p_seq=${v.p_seq}';" style="min-width:60px;">주문하기</span>
                                <span class="close_btn pointer"  onclick="removeRecent(${v.p_seq});">
                                <i class="fa-solid fa-xmark"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>`;
                $('#time-list-tbody_m').append(str_m);
            }

        })

    } else {
        $('#time-no-data').removeClass('d-none');
    }
}

function removeRecent(_target) {
    let img_cookies = JSON.parse(getCookie('img'))
    let temp = img_cookies.filter(v => v.p_seq != _target)
    $(`.recent${_target}`).remove();
    setCookie('img', JSON.stringify(temp), 1);
}


//내가쓴 게시글 라인
function drawMyPost() {
    $.ajax({
        url: SERVER_AP + "/api/myPost",
        type: "post",
        cache: false,
        async: false,
        data: {
            u_seq: user_info.u_seq,
        },
        success: function(data) {
            if (!data.isLng) {
                $('#post-no-data').removeClass('d-none');
            } else {
                $('#post-no-data').addClass('d-none');
                let imgStr = ``
                $.each(data.review, function(i, v) {
                    console.log('ddd', v);
                    let pic = '<div class="width:60px;height:60px;background:#ddd;"></div>';

                    if (v.p_image) {
                        p_Image = JSON.parse(v.p_image)[0]
                        imgStr = `      <img class="pointer"
                                    onclick="location.href='/product_detail.php?p_seq=${v.p_seq}'"
                                    src="${ p_Image }" width="100px"/>`

                    } else {
                        imgStr = `삭제된 상품입니다.`
                    }
                    let str = `<tr>
                        <td class="fr_td">상품후기</td>
                        <td style="max-width:60px;">
                        ${imgStr}
                        </td>
                        <td class="td_p_" onclick='location.href="review-insert.php?pr_seq=${v.pr_seq}&p_seq=${v.p_seq}&po_seq=${v.po_seq}"'>
                            <div>
                                <div>
                                    <span class="truncate-text">${v.pr_comments}</span>
                                </div>
                            </div>
                        </td>
                        <td class="fr_td">${v.pr_date.slice(0,11)}</td>
                        <td class="position-relative">
                        ${v.pr_cnt}
                        <span class="close_btn pointer" style="top:0;" onclick="deletePost(${v.pr_seq},'product_review');">
                            <i class="fa-solid fa-xmark"></i>
                            </span>
                        </td>
                    </tr>`;

                    $('#post-list-tbody').append(str);

                    let str_m = `<div class="post-mobile">
                        <div class="row row-item">
                            <div class="col-4">
                                ${imgStr}
                            </div>
                            <div class="col-8 position-relative">
                                <div class="p_name mt-2">
                                    <span class="tag">상품후기</span>
                                </div>
                                <div class="mb-2">작성일 : ${v.pr_date.slice(0,11)}</div>
                                <div class="td_p_" onclick='location.href="review-insert.php?pr_seq=${v.pr_seq}&p_seq=${v.p_seq}&po_seq=${v.po_seq}"'>
                                    <div>
                                        <div>
                                            <span class="truncate-text pr_comments_m">${v.pr_comments}</span>
                                        </div>
                                    </div>
                                </div>
                                <span class="close_btn pointer" style="top:0;" onclick="deletePost(${v.pr_seq},'product_review');">
                                    <i class="fa-solid fa-xmark"></i>
                                    </span>
                            </div>
                        </div>
                    </div>`;
                    $('#post-list-tbody_m').append(str_m);
                })

                $.each(data.ask, function(i, v) {
                    console.log(v);
                    if (v.p_image) {
                        p_Image = JSON.parse(v.p_image)[0]
                        imgStr = `      <img class="pointer"
                                    onclick="location.href='/product_detail.php?p_seq=${v.oa_p_seq}'"
                                    src="${ p_Image }" width="100px"/>`

                    } else {
                        imgStr = `삭제된 상품입니다.`
                    }
                    let view_cnt = 1;
                    let answerStr = ``;
                    if (v.oa_answer) {
                        view_cnt = 2;
                        answerStr = `<span class="tag answer">답변완료</span>`;
                    }
                    let pic = '<div class="width:60px;height:60px;background:#ddd;"></div>';
                    let str = `<tr>
                        <td class="fr_td">상품문의</td>
                        <td style="max-width:60px;">
                            ${imgStr}
                        </td>
                        <td class="td_p_">
                            <div class="title_wrap_div">
                                <div onclick="showAskModal(${v.oa_seq})">
                                    <span class="truncate-text">${v.oa_title}</span>
                                </div>
                            </div>
                        </td>
                        <td class="fr_td">${v.oa_date.slice(0,11)}</td>
                        <td class="position-relative">
                        ${view_cnt}
                            <span class="close_btn pointer" style="top:0" onclick="deletePost(${v.oa_seq},'order_ask');">
                            <i class="fa-solid fa-xmark"></i>
                            </span>
                        </td>
                    </tr>`;

                    $('#post-list-tbody').append(str);


                    let str_m = `<div class="post-mobile">
                        <div class="row row-item">
                            <div class="col-4">
                                ${imgStr}
                            </div>
                            <div class="col-8 position-relative">
                                <div class="p_name mt-2">
                                    <span class="tag">상품문의</span>${answerStr}
                                </div>
                                <div class="mb-2">작성일 : ${v.oa_date.slice(0,11)}</div>
                                <div class="td_p_">
                                    <div class="">
                                        <div onclick="showAskModal(${v.oa_seq})">
                                            <span class="truncate-text">${v.oa_title}</span>
                                        </div>
                                    </div>
                                </div>
                                <span class="close_btn pointer" style="top:0" onclick="deletePost(${v.oa_seq},'order_ask');">
                                <i class="fa-solid fa-xmark"></i>
                                </span>
                            </div>
                        </div>
                    </div>`;
                    $('#post-list-tbody_m').append(str_m);
                })
            }
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}


function deletePost(seq, table) {
    let fieldStr = ''

    if (table == 'product_review') {
        fieldStr = 'pr_seq'
    } else if (table == 'order_ask') {
        fieldStr = 'oa_seq'
    } else {
        fieldStr = 'c_seq'
    }

    if (confirm("해당 항목을 삭제하시겠습니까?")) {
        $.ajax({
            url: SERVER_AP + "/common/delete",
            type: "post",
            cache: false,
            data: {
                table: table,
                field: fieldStr,
                seq: seq,
            },
            success: function(data) {
                location.reload()
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }
}

var openWin;

// 배송지 변경 버튼 새창 띄워짐
function changeAddr() {
    if (openWin != null) openWin.close();
    var _url = '/ordermanage.php';
    var _width = '500';
    var _height = '700';
    var _left = Math.ceil((window.screen.width - _width) / 2);
    var _top = Math.ceil((window.screen.width - _height) / 2);

    openWin = window.open(_url, 'ORDER', 'width=' + _width + ', height=' + _height + ', left=' + _left + ', top=' +
        _top);
}

function findReview(seq) {
    let info = ''
    var obj = new Object();
    obj.o_seq = seq;
    obj.u_seq = user_info.u_seq;
    $.ajax({
        url: SERVER_AP + "/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'product_review',
            common: obj,
        },
        success: function(data) {
            if (data.length != 0) {
                info = data[0].pr_seq
            }


        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    return info;
}


function showAskModal(seq) {

    location.href=`/order_ask_view.php?oa_seq=${seq}`;

    // $.ajax({
    //     url: SERVER_AP + "/api/loadAsk",
    //     type: "post",
    //     cache: false,
    //     async: false,
    //     data: {
    //         oa_seq: seq,
    //     },
    //     success: function(data) {
    //         console.log('ass', data);
    //         let v = data.review[0]
    //         $('#askModal').modal('show');
    //
    //         $('.ordermodal-title').html(v.o_num);
    //         $('.product_name').html(v.p_name);
    //         $("#oa_type").val(v.oa_type);
    //         $("#oa_title").val(v.oa_title)
    //         $("#oa_type").val(v.oa_type)
    //         $('#oa_text').summernote('pasteHTML', v.oa_text);
    //         $('#goAsk').attr('onclick', `updateAsk(${v.oa_seq})`)
    //     },
    //     error: function(request, status, error) {
    //         console.log(error);
    //     }
    // });
}

function updateAsk(seq) {
    let obj = new Object();
    obj.oa_type = $('#oa_type').val();
    obj.oa_title = $('#oa_title').val();
    obj.oa_text = $('#oa_text').val();

    if (!obj.oa_type) {
        alert('문의 유형을 선택해주세요.')

        return false;
    }

    if (!obj.oa_title) {
        alert('문의 제목을 입력해주세요.')

        return false;
    }

    if (!obj.oa_text) {
        alert('문의 내용을 입력해주세요.')

        return false;
    }
    $.ajax({
        url: SERVER_AP + "/admin/common/update",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'order_ask',
            whereField: "oa_seq",
            whereValue: seq,
            obj: obj,
        },
        success: function(data) {
            alert("상품 문의가 수정되었습니다.")
            location.reload();
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}
</script>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
