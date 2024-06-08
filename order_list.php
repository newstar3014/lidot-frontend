<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>

<style media="screen">
.btn-primary {
    max-width: 100px;
    margin: 0 auto;
    cursor: pointer;
    color: #666769;
}

.datepicker {
    bottom: 0 !important;
    top: auto !important;
}

.fa-calendar {
    position: absolute;
    right: 6px;
    color: gray;
    top: 8px;
}


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

#order-list-tbody_m{
    border-top: 1px solid lightgray;
    margin-top: 50px;
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

.tag{
    padding: 5px 10px;
    border-radius: 10px;
    background: dimgray;
    color: white;
    display: inline-block;
    margin-bottom: 10px;
}

@media (max-width: 769px){
    .table_order {
        min-width: 100%;
    }
}


</style>
<link href="/css/order.css" rel="stylesheet">
<link href="/css/mypage.css" rel="stylesheet">
<!-- Breadcumb Area -->
<div class="breadcrumb-wrap">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <ol class="breadcrumb mt-2 bg-white">
                    <li class="breadcrumb-item"><a href="/">홈</a></li>
                    <li class="breadcrumb-item"><a href="mypage.php">마이페이지</a></li>
                    <li class="breadcrumb-item"><a href="order_list.php">주문조회</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb Area -->

<!-- Message Now Area -->
<div class="message_now_area " id="contact">
    <div class="container mb-50">
        <h4 class="page-title text-dark text-center mb-4 font-weight-bold">ORDER</h4>
        <div class="sub_mypage_menu_div border-bottom pb-4">
            <div class="pointer" onclick="openCheck(1)">
                정보수정
            </div>
            <div class="gray_bar"></div>
            <div class="pointer on" onclick="location.href='order_list.php'">
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

        <div class="mt-5 nav_wrap">
            <div class="nav_line">

            </div>
            <div class="tab_wrap">
                <div data-val="order" class="on tab_one">
                    주문내역조회(<span class="cnt_all"></span>)
                </div>
                <div data-val="refund_cancel" class="tab_one">
                    취소/반품/교환 내역(<span class="cnt_refund">0</span>)
                </div>
            </div>
        </div>


        <div class="border mt-4   p-3 mb-3 d-md-flex align-items-center justify-content-center" style="gap:14px;">

            <div class="d-flex align-items-center justify-content-end">
                <span class="btn btn-sm btn-primary daybtn" data-target="today">오늘</span>
                <span class="btn btn-sm btn-primary daybtn" data-target="week">1주일</span>
                <span class="btn btn-sm btn-primary daybtn" data-target="month1">1개월</span>
                <span class="btn btn-sm btn-secondary daybtn" data-target="month3">3개월</span>
                <span class="btn btn-sm btn-primary daybtn" data-target="month6">6개월</span>
                <!-- <span class="btn btn-sm btn-primary daybtn" data-target="year">1년</span> -->
            </div>


            <div>
                <div
                    class="d-flex align-items-center justify-content-md-start justify-content-end col-md-5 p-0 mt-2 mt-md-0">
                    <div class="position-relative">
                        <input readonly type="text" name="" value="" style="min-width:116px"
                            class="form-control form-control-sm m-w-30" id="sday">
                        <label class="mb-0 d-flex" for="sday">
                            <i class="fa-regular fa-calendar"></i>
                        </label>

                    </div>
                    <span class="mx-2">~</span>

                    <div class="position-relative">
                        <input readonly type="text" name="" style="min-width:116px" value=""
                            class="form-control form-control-sm m-w-30" id="eday">
                        <label class="mb-0 d-flex" for="eday">
                            <i class="fa-regular fa-calendar"></i>
                        </label>
                    </div>
                    <span class="btn btn-sm btn-primary ml-2 m-w-100" style="height: 31px; line-height: 31px;"
                        onclick="LoadProduct()">조회</span>
                </div>
            </div>
        </div>


        <ul class="fs-12 mb-3">
            <li>·기본적으로 최근 3개월간의 자료가 조회되며, 기간 검색시 지난 주문내역을 조회하실 수 있습니다.</li>
            <li>·주문번호를 클릭하시면 해당 주문에 대한 상세내역을 확인하실 수 있습니다.</li>
            <li>·취소/교환/반품 신청은 주문 완료일 기준 30일까지 가능합니다.</li>
        </ul>

        <div class="d-none d-md-block table-wrap ">
            <table class="table text-center table_order">
                <tr>
                    <th style="min-width:200px">주문일자<br>[주문번호]</th>
                    <th>이미지</th>
                    <th>상품정보</th>
                    <th>수량</th>
                    <th>상품구매금액</th>
                    <th>주문처리 상태</th>
                </tr>
                <tbody id="order-list-tbody">

                </tbody>
            </table>
        </div>
        <div class="d-md-none w-100 table_div table_order" id="order-list-tbody_m">
        </div>
    </div>
    <div class="order_go ">

    </div>


    <div class="order_m_go m-none">

    </div>

    <div id="paged-wrap" class="my-5">
        <nav aria-label="Page navigation example">
            <ul id="paged-content" class="pagination justify-content-center"></ul>
        </nav>
    </div>
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
                        <th></th>
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
                </table>

                <div class="pc-none">
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
                                    <span><span class="credit-totalprice-all">0</span> 원</span>
                                </div>
                            </td>
                            <td style="background:#f8f8f8;">
                                <div class="d-flex align-items-center justify-content-between font-weight-bold">
                                    <span>주문금액</span>
                                    <span><span style="font-size:20px" class="credit-totalprice-all"></span> 원</span>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="m-none">
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
                            <span><span class="credit-totalprice-all">0</span> 원</span>
                        </div>
                    </div>
                    <div class="px-2 py-3 my-2" style="background:#f8f8f8;">
                        <div class="d-flex align-items-center justify-content-between font-weight-bold">
                            <span>주문금액</span>
                            <span><span style="font-size:20px" class="credit-totalprice-all"></span> 원</span>
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
                <span class="btn btn-danger" onclick="$('#deleteModal').modal('hide');" id="">취소</span>
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

<div class="modal" tabindex="-1" role="dialog" id="askModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="max-width:700px;">
            <div class="modal-header text-center justify-content-center">
                <div class="font-weight-bold " style="font-size:20px;">
                    판매자Q&A등록
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

<!-- jQuery UI CSS -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- jQuery UI JS -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="/admin/js/common.js"></script>
<script src="/js/pages/wishlist/wishlist.js"></script>
<script type="text/javascript">
var ppp = 30;
var page = 1;
var orderSet = '<?php echo $_GET['orderSet']; ?>';
var ready_num = 0
var out_num = 0
var ing_num = 0
var complete_num = 0
var cancel_num = 0
var change_num = 0
var return_num = 0
var windowWidth = $(window).width();
$(function() {

    if (!user_info) {
        location.href = '/'
    }
    $.datepicker.setDefaults({
        prevText: '이전 달',
        nextText: '다음 달',
        monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
        monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
        dayNames: ['일', '월', '화', '수', '목', '금', '토'],
        dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
        dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
        showMonthAfterYear: true,
        yearSuffix: '년',
    });

    $('#sday').datepicker({
        dateFormat: 'yy-mm-dd', // 날짜 형식 지정
    });

    $('#eday').datepicker({
        dateFormat: 'yy-mm-dd',
    });


    loadHomedata()
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
    let today = currentDate().substr(0, 10)
    $("#sday").val(lastMonth3(today))
    $("#eday").val(today)

    loadMydata()
    LoadProduct()
    loadHistoryData()
    loadCancelData();
    LoadMyCouponlist()

    if (user_info.u_type == '네이버계정' || user_info.u_type == '카카오계정') {
        //$('.sns_none').addClass('d-none');
        $(".edit_info_btn").attr('onclick', `location.href='/myPageEdit.php?seq=${user_info.u_seq}'`)
    }

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
            $("#u_name").text(data[0].u_name)
            $("#u_rank").text(data[0].u_rank)
            $("#u_email").text(data[0].u_email)
            $("#u_phone").text(hyphen(data[0].u_phone))
            $("#u_point").text(comma(data[0].u_point))
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

function loadHistoryData() {
    $.ajax({
        url: SERVER_AP + '/order/history',
        type: "post",
        cache: false,
        async: false,
        data: {
            u_seq: user_info.u_seq,
            sday: $("#sday").val(),
            eday: currentDateEnd($("#eday").val()),
            type: 'all'
        },
        success: function(data) {
            console.log('data22 : ', data)
            let v = data.rows[0];
            $('.ready_num').html(v.상품준비중)
            $('#out_num').html(v.출고)
            $('#ing_num').html(v.배송중)
            $('#complete_num').html(v.배송완료)
            $('.cnt_all').html(v.total)
        },
        error: function(request, status, error) {
            console.log(error);
        }
    })

}


function loadCancelData() {
    $.ajax({
        url: SERVER_AP + '/order/cancelHistory',
        type: "post",
        cache: false,
        async: false,
        data: {
            u_seq: user_info.u_seq,
            sday: $("#sday").val(),
            eday: currentDateEnd($("#eday").val()),
            type: 'all'
        },
        success: function(data) {
            console.log('ccc', data);
            if (data.rows) {
                let v = data.rows[0];
                $('.cnt_refund').html(v.total)
            }


        },
        error: function(request, status, error) {
            console.log(error);
        }
    })

}

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
            $("#order-list-tbody, .order_m_go").html('');
            if (data.totalCount == 0) {
                console.log('없음')
                let str = `<tr class="py-3 text-center"><td colspan="6"><div class="no-product">주문하신 상품 정보가 존재하지 않습니다.</div></td></tr>`;
                $("#order-list-tbody, #order-list-tbody_m").html(str);
                $("#paged-wrap").addClass('d-none')
            } else {
                let makeArr = [];
                let makeObj = new Object();
                let preValue = '';
                $.each(data.rows, function(i, v) {

                    console.log('오더리스트');
                    console.log(v);

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

                    $('#order-list-tbody').append(str);

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

//주문목록 그리는 쪽
// function LoadProduct(scType) {
//     ready_num = 0
//     out_num = 0
//     ing_num = 0
//     complete_num = 0
//     cancel_num = 0

//     let endPoint = ``;

//     // if (orderSet == 'refund') {
//     //     endPoint = "/order/return-paging"
//     // } else if (orderSet == 'cancel') {
//     //     endPoint = "/order/cancel-paging"
//     // } else {
//     //     if (windowWidth > 768) {
//     //         endPoint = `/order/order-paging`
//     //     } else {
//     //         endPoint = `/order/order-detail-paging`
//     //     }
//     // }

//     if (windowWidth > 768) {
//         endPoint = `/order/order-paging`
//     } else {
//         endPoint = `/order/order-detail-paging`
//     }

//     $.ajax({
//         url: SERVER_AP + endPoint,
//         type: "post",
//         cache: false,
//         async: false,
//         data: {
//             page: page,
//             ppp: 10,
//             order: 'o_date desc',
//             sday: $("#sday").val(),
//             eday: currentDateEnd($("#eday").val()),
//             u_seq: user_info.u_seq,
//             search: $('#search_val').val(),
//             scType: scType,
//         },
//         success: function(data) {
//             console.log('DATA', data);
//             $("#order-list-tbody, .order_m_go").html('');
//             $('#order-no-data').addClass('d-none');

//             if (data.totalCount == 0) {
//                 $('#order-no-data').removeClass('d-none');
//                 $("#paged-wrap").addClass('d-none')
//             } else {
//                 let makeArr = [];
//                 let makeObj = new Object();
//                 let preValue = '';
//                 $.each(data.rows, function(i, v) {

//                     // if (windowWidth > 768) {
//                     //     if (v.o_state == '상품준비중') {
//                     //         ready_num++
//                     //     }
//                     //     if (v.o_state == '출고') {
//                     //         out_num++;
//                     //     }
//                     //     if (v.o_state == '주문취소') {
//                     //         cancel_num++
//                     //     }
//                     //     if (v.o_state == '배송중') {
//                     //         ing_num++
//                     //     }
//                     //     if (v.o_state == '배송완료') {
//                     //         complete_num++
//                     //     }
//                     // }

//                     let new_o_num = removeORD(v.o_num);


//                     var number = (page * ppp) - ppp + (i + 1) //1부터 시작


//                     let dateStr = ''
//                     let thisdate = v.o_date.substr(0, 10)

//                     let exchangeState = exchangeList(v.o_seq, v.p_seq_new)
//                     let reviewStr =
//                         ``
//                     let stateStr = v.o_state;
//                     if (exchangeState.length != 0) {
//                         if (exchangeState[0].e_state == 0) {
//                             v.o_state = `${exchangeState[0].e_type} 신청 대기중`
//                         } else if (exchangeState[0].e_state == 1) {
//                             v.o_state = `${exchangeState[0].e_type} 신청 승인`

//                         } else if (exchangeState[0].e_state == -1) {
//                             v.o_state = `${exchangeState[0].e_type} 신청 거절`
//                         } else if (exchangeState[0].e_state == 2) {
//                             v.o_state = `택배사출발`
//                         } else if (exchangeState[0].e_state == 3) {
//                             v.o_state = `${exchangeState[0].e_type}완료`

//                             if (v.o_state == '교환완료') {}
//                         }
//                     }
//                     let trackStr = ''
//                     let orderStr = `<div style="margin-top:2px;" class="">
//                                 <div id="order-num-${v.o_seq}" class="pointer" style="">${new_o_num}
//                                 </div>
//                             </div>`;
//                     let returnStr = ``

//                     if (v.o_state == '배송완료' || v.o_state == '교환완료') {
//                         if (findReview(v.o_seq)) {

//                             reviewStr =
//                                 `<div onclick='location.href="review-insert.php?pr_seq=${findReview(v.o_seq)}&&o_seq=${v.o_seq}&p_seq=${v.p_seq_new}&po_seq=${v.po_seq}"'
//                                              class="btn-primary pointer btn-sm">후기수정 <i class="fa-solid fa-chevron-right"></i></div>`


//                         } else {
//                             reviewStr =
//                                 `<div onclick='location.href="review-insert.php?p_seq=${v.p_seq_new}&&o_seq=${v.o_seq}&po_seq=${v.po_seq}"'
//                                          class="btn-primary btn-sm" style="border-top:1px solid black; cursor:pointer;">구매후기 <i class="fa-solid fa-chevron-right"></i></div>`
//                         }


//                         trackStr = `<div style="">
//                                 <div onclick="goCart(${v.p_seq_new},${v.po_seq});"class="btn-primary btn-sm">장바구니 <i class="fa-solid fa-chevron-right"></i></div>
//                             </div>`
//                         let poCancel = ''
//                         if (v.po_seq) {
//                             poCancel = v.po_seq
//                         } else {
//                             poCancel = 0;
//                         }


//                         let cancelStr =

//                             `  <div onclick="changeAccept(${v.o_seq}, ${v.p_seq_new}, ${poCancel},'change')"class="btn-primary btn-sm mt-1">교환신청 <i class="fa-solid fa-chevron-right"></i></div>
//                             <div onclick="changeAccept(${v.o_seq}, ${v.p_seq_new}, ${poCancel},'refund')" class="btn-primary btn-sm mt-2">반품신청 <i class="fa-solid fa-chevron-right"></i></div>
//                             `

//                         orderStr = `<div style="margin-top:2px;">
//                                     <div id="order-num-${v.o_seq}" class="pointer" style="">${new_o_num}</div>
//                                     ${cancelStr}
//                                 </div>`;
//                     }

//                     if (v.o_state == '상품준비중') {
//                         trackStr = `<div style="">
//                                 <div onclick="goCart(${v.p_seq_new},${v.po_seq});"class="btn-primary btn-sm">장바구니 <i class="fa-solid fa-chevron-right"></i></div>
//                             </div>`

//                         let poCancel = ''
//                         if (v.po_seq) {
//                             poCancel = v.po_seq
//                         } else {
//                             poCancel = 0;
//                         }


//                         let cancelStr =
//                             `  <div onclick="orderCancel(${v.o_seq});"class="btn-primary btn-sm mt-2">주문취소 <i class="fa-solid fa-chevron-right"></i></div>
//                             <div onclick="changeAccept(${v.o_seq}, ${v.p_seq_new}, ${poCancel},'change')"class="btn-primary btn-sm mt-1">교환신청 <i class="fa-solid fa-chevron-right"></i></div>`

//                         orderStr = `<div style="margin-top:2px;">
//                                     <div id="order-num-${v.o_seq}" class="pointer" style="">${new_o_num}</div>
//                                     ${cancelStr}
//                                 </div>`;

//                     }

//                     //송장번호있으면 배송상태 조회
//                     //clickDelivery() common.js 안에
//                     if (v.o_tackbea && v.o_tracknum) {
//                         if (v.o_state == '배송완료' || v.o_state == '교환완료' || v.o_state == '배송중') {
//                             trackStr = `<div>${v.o_tackbea}</div>
//                                 <div style="">
//                                     <div style="color:#5f5f5f" class=" pointer" onclick="clickDelivery('${v.o_tracknum}', '${v.o_tackcode}')">[${v.o_tracknum}]</div>
//                                     ${reviewStr}
//                                 </div>`;
//                         } else {
//                             trackStr = ``;
//                         }

//                     }
//                     let optionStr = '';
//                     if (v.po_option1) {
//                         optionStr =
//                             `<br/><span style="color:#A8A8A8">[${v.po_option1} : ${v.po_option2}]</span>`;
//                     }

//                     //checkDelivery() 함수 common.js 안에 현재 배송상태 조회 후 값 바꿔줌

//                     if (v.o_tracknum && v.o_tackcode) {

//                         if (v.o_state != '배송완료') {
//                             let deliveryState = checkDelivery(v.o_tracknum, v.o_tackcode)
//                             if (deliveryState.lastDetail) {
//                                 if (deliveryState.lastDetail.kind == '배달완료') {
//                                     deliveryState.lastDetail.kind = '배송완료'
//                                     updateComplete(v.o_seq);
//                                 }
//                                 v.o_state = deliveryState.lastDetail.kind
//                             } else {
//                                 v.o_state = v.o_state
//                             }
//                         } else {
//                             v.o_state = v.o_state
//                         }


//                     }
//                     let colspanStr =
//                         `<td class="pointer fs-12 order_${v.o_num}">${thisdate}${orderStr}</td>`

//                     let p_Image = ''
//                     let imgStr = ''
//                     let priceMoney = comma(v.p_price)
//                     if (priceMoney == 'null') {
//                         priceMoney = `삭제된 상품입니다.`
//                     }
//                     if (v.p_image) {
//                         p_Image = JSON.parse(v.p_image)[0]
//                         imgStr = `      <img
//                                     onclick="location.href='/product_detail.php?p_seq=${v.p_seq_new}'"
//                                     src="${ p_Image }" width="100px"/>`

//                     } else {
//                         imgStr = `삭제된 상품입니다.`
//                     }

//                     if (v.o_state == '입금대기') {
//                         trackStr = `<div>
//                                         ${v.vbank_name}(${v.vbank_num})
//                                     </div>`
//                     }



//                     let str = `<tr>
//                             ${colspanStr}
//                             <td>
//                                 ${imgStr}
//                             </td>
//                             <td  onclick="location.href='/product_detail.php?p_seq=${v.p_seq_new}'" class=" text-dark text-left fs-17 pointer">
//                             ${v.p_name || '삭제된 상품입니다.'}${optionStr}</td>
//                             <td class="">${v.p_cnt}</td>
//                             <td class="">${ priceMoney }</td>
//                             <td class="">
//                                 <div class="">${v.o_state}${trackStr}</div>
//                             </td>
//                         </tr>`;




//                     //기존 꺼 (안씀)

//                     // var str2 = `<div class="order_box_re mx-auto">
//                     //         <div id="m-order-num-${v.o_seq}" class="d-flex justify-content-between align-items-end order_title">
//                     //             <div class="order_date_re">
//                     //                 <span class="font-weight-bold">${thisdate}</span> <span>(${v.o_num})</span>
//                     //             </div>
//                     //             <div class=" order_detail_text  pointer">
//                     //                 상세보기 >
//                     //             </div>
//                     //         </div>
//                     //         <div class="order_box_inner name_${v.o_num}">
//                     //         </div>
//                     //     </div>`

//                     $('#order-list-tbody').append(str);

//                     //묶음배송 묶는 부분
//                     // const elements = document.querySelectorAll('.order_' + preValue);


//                     // for (let i = 1; i < elements.length; i++) {
//                     //     elements[i].parentNode.removeChild(elements[i]);
//                     // }
//                     // const count = elements.length;
//                     // if (preValue == v.o_num) {
//                     //     $('.order_' + preValue).attr('rowspan', count)
//                     // }
//                     // 여기까지
//                     preValue = v.o_num;


//                     // makeArr.push(v.p_seq);
//                     $(`#order-num-${v.o_seq}`).attr('onclick',
//                         `modalOpen( "${v.o_num}", "${v.o_state}", ${v.o_seq}, '${thisdate}')`
//                     )
//                     $(`#m-order-num-${v.o_seq}`).attr('onclick',
//                         `modalOpen( "${v.o_num}", "${v.o_state}", ${v.o_seq},'${thisdate}')`
//                     )

//                 })

//                 // if (windowWidth < 768) {
//                 //     darwProductMobile(data.rows2, scType);
//                 // }


//                 $("#paged-wrap").removeClass('d-none')
//                 drawPaging(data.totalPage);




//             }

//             // if (!scType) {
//             //     $(".ready_num").html(ready_num)
//             //     $("#out_num").text(out_num)
//             //     $("#ing_num").text(ing_num)
//             //     $("#complete_num").text(complete_num)
//             //     $("#cancel_num").text(cancel_num)
//             // }

//         },
//         beforeSend: function() {
//             Loading()
//         },
//         complete: function() {
//             $("#div_ajax_load_image").remove();
//         },
//         error: function(request, status, error) {
//             console.log(error);
//         }
//     });
// }
//모바일 따로 그렸었는데 지금 안씀
function darwProductMobile(data, scType) {
    console.log('durl22', data);
    $.each(data, function(i, v) {
        console.log('vv', v.o_num);
        if (v.o_state == '상품준비중') {
            ready_num++
        }
        if (v.o_state == '출고') {
            out_num++;
        }
        if (v.o_state == '주문취소') {
            cancel_num++
        }
        if (v.o_state == '배송중') {
            ing_num++
        }
        if (v.o_state == '배송완료') {
            complete_num++
        }

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
                                    src="${ p_Image }" width="50px"/>`

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

    if (!scType) {

        $("#ready_num").text(ready_num)
        $("#out_num").text(out_num)
        $("#ing_num").text(ing_num)
        $("#complete_num").text(complete_num)
        $("#cancel_num").text(cancel_num)
    }
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

//주문 번호 눌렀을때 나오는 모달 창
function modalOpen(o_num, o_state, o_seq, o_date) {
    let inday = calcDay(o_date)
    let cancelCheck = ``
    $(".ordermodal-title").text(removeORD(o_num) || '-')
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
                    console.log('AD', v);

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
                                let poCancel = ''
                                if (v.po_seq) {
                                    poCancel = v.po_seq
                                } else {
                                    poCancel = 0;
                                }


                                $("#review-td-" + v.p_seq_new).append(
                                    `<span class="btn btn-sm btn-secondary" onclick="changeAccept(${v.o_seq}, ${v.p_seq_new}, ${poCancel})">반품/교환 신청</span>`
                                )

                                $("#m-review-td-" + v.p_seq_new).append(
                                    '<a class="btn  btn-sm btn-info w-100 rounded-0" href="review-insert.php?p_seq=' +
                                    v.p_seq_new + '&po_seq=' + v.po_seq + '">후기작성</a>')
                                $("#m-review-td-" + v.p_seq_new).append(
                                    `<span class="btn btn-sm btn-secondary w-100" onclick="changeAccept(${v.o_seq}, ${v.p_seq_new}, ${poCancel})">반품/교환 신청</span>`
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

                            //상태별 처리
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
                $(".credit-totalprice-all").text(comma(data[0].o_total_price * 1 + data[0].o_del_price * 1))
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
            info = {
                stock: data[0].p_stock,
                name: data[0].p_name,
                img: data[0].p_image,
                price: (data[0].p_wholesale && user_info.u_type == '사업자회원' && user_info.u_status == 1) ?
                    data[0].p_wholesale : data[0].p_price,
                dt_seq: (data[0].dt_seq_up && user_info.u_type == '사업자회원' && user_info.u_status == 1) ?
                    data[0].dt_seq_up : data[0].dt_seq,
                p_purchase: data[0].p_purchase,
                p_option: data[0].p_option
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

//주문 취소할경우 관리자에 바뀜 관리자에서 확인후 주문취소하면 환불 처리

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

function changeAccept(o_seq, p_seq, po_seq, cType) {
    $("#change-modal").modal("show")

    if (cType) {
        if (cType == 'refund') {
            $('#change_type').val('반품')
        } else {
            $('#change_type').val('교환')
        }

    }

    $("#change-modal-btn").attr('onclick', `changeAcceoptClick(${o_seq}, ${p_seq}, ${po_seq})`)
}

function changeAcceoptClick(o_seq, p_seq, po_seq) {
    if (po_seq == 0) {
        po_seq = "";
    }
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
//LargeSort();

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
                `<div class="p-3 py-3 pl-4 menu-category-menu-menu"><a href="/store.php">ALL</a></div>`;
            var mstr2 = `<li class="py-3"><span onclick="location.href="/store.php"">ALL</span></li>`
            $("#sort_menu-wrap_m").append(mstr2);



            $("#menu-category").append(str)
            $.each(data, function(i, v) {
                var str = `<div class="p-3 py-3 pl-4 menu-category-menu position-relative">
                                <a href="/store.php?ls_seq=${v.ls_seq}">${v.ls_name}</a>
                                <div class="menu-category-menu-menu-menu menu-category-menu-menu-menu${v.ls_seq}">
                                </div>
                            </div>`;
                $("#menu-category").append(str)
                MiddleSort(v.ls_seq)
            })


            var mstr22 =
                `<li class="py-3"><span onclick="location.href='/login.php'">LOGIN</span></li>
                    <li class="py-3"><span onclick="location.href='/registerType.php'">JOIN</span></li>
                    <li class="py-3"><span onclick="location.href='/exhibition.php'">EVENT</span></li>
                    <li class="py-3"><span onclick="location.href='/contact.php'">입점문의</span></li>
                    <li class="py-3"><span onclick="location.href='/bestreview.php?active=베스트리뷰'">베스트리뷰</span></li>`
            $("#sort_menu-wrap_m").append(mstr22)

            var menustr =
                `<div class="d-inline-block py-2 px-4 af-show d-none" style="font-size:15px;"><a style="color:black;" href="exhibition.php" class=" hover_text">EVENT</a></div>
            <div class="d-inline-block py-2 px-4 af-show d-none" style="font-size:15px;"><a style="color:black;" href="contact.php" class=" hover_text">입점문의</a></div>
            <div class="d-inline-block py-2 px-4 af-show menu_btns d-none" style="font-size:15px;"><a style="color:black;" href="bestreview.php?active=베스트리뷰" class=" hover_text">베스트리뷰</a></div>`;

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
                    `<div class="p-3 py-3 pl-4" ><a href="/store.php?ls_seq=${ls_seq}&ms_seq=${v.ms_seq}">${v.ms_name}</a></div>`;
                $(".menu-category-menu-menu-menu" + v.ls_seq).append(str);
            })
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

// function LargeSortM() {
//     $.ajax({
//         url: SERVER_AP + "/admin/common/all-ls",
//         type: "post",
//         cache: false,
//         data: {
//             table: 'large_sort',
//         },
//         success: function(data) {

//             $.each(data, function(i, v) {
//                 if (i == 0) {
//                     var str11 = `<li><a class="bg-white" href="/store.php">ALL</a></li>`
//                     $("#menu-M-menu").prepend(str11);
//                 }
//                 var str = `<div class="draw_cate_title">
//                 <span class="down_cate clickcate${v.ls_seq} w-100" data-val="${v.ls_seq}">${v.ls_name}</span>
//                 <div class="add_arrow${v.ls_seq}"></div>
//               </div>
//               <div class="draw_ms_data${v.ls_seq} textDeco d-none"></div>`;
//                 $("#menu-M-menu").append(str);

//                 if (data.length == i + 1) {
//                     var str22 = `<li><a class="bg-white" href="exhibition.php">EVENT</a></li>
//                   <li><a class="bg-white" href="contact.php">입점문의</a></li>
//                   <li><a class="bg-white" href="bestreview.php">베스트리뷰</a></li>`

//                     $("#menu-M-menu").append(str22);

//                 }
//                 MiddleSortM(v.ls_seq)
//             })
//         },
//         error: function(request, status, error) {
//             console.log(error);
//         }
//     });
// }


// function MiddleSortM(ls_seq) {
//     var obj = new Object();
//     obj.ls_seq = ls_seq;
//     $.ajax({
//         url: SERVER_AP + "/admin/common/condition",
//         type: "post",
//         cache: false,
//         data: {
//             table: 'middle_sort',
//             common: obj,
//         },
//         success: function(data) {

//             if (data.length == 0) {
//                 $('.clickcate' + ls_seq).attr('onclick', 'location.href="/store.php?ls_seq=' + ls_seq + '"')
//             } else {
//                 $.each(data, function(i, v) {
//                     var str = '<div><a href="/store.php?ls_seq=' + ls_seq + '&ms_seq=' + v.ms_seq +
//                         '">' + v.ms_name + '</a></div>';
//                     $(".draw_ms_data" + v.ls_seq).append(str);
//                     var dd =
//                         `<i class="fa-sharp fa-solid fa-angle-down change_arrow${v.ls_seq}"></i>`
//                     if (i == 1) {
//                         $('.add_arrow' + v.ls_seq).append(dd);
//                     }

//                 })
//             }

//         },
//         error: function(request, status, error) {
//             console.log(error);
//         }
//     });
// }





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
            $("#u_coupon").text(data.length)
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
    } else if (target == 'month6') {
        $("#sday").val(lastMonth6(today))
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


function lastMonth6() {
    var d = new Date()
    var monthOfYear = d.getMonth()
    d.setMonth(monthOfYear - 6)
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
        console.log("index", index);
        $(input).closest('.review_img').css("background", "url(" + c_img + ")")
        return_picture_arr[index] = c_img;
    });
}

function loadHomedata() {
    var obj = new Object();
    obj.dl_useq = user_info.u_seq;
    obj.dl_check = 'Y'
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        data: {
            table: 'delivery_location',
            common: obj,
        },
        success: function(data) {
            var address = data[0].dl_address + " " + data[0].dl_address_detail
            $('#buyer_addr').html(address)
            $('#buyer_title').html(data[0].dl_title)
            $('#buyer_name').html(data[0].dl_person)
            $('#buyer_tel').html(hyphen(data[0].dl_phone))
            $('.dl_request').html(data[0].dl_request)
        },
        error: function(request, status, error) {
            console.log(error);
        }
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


function askOrder(seq) {
    console.log('seq', seq);
    let name = $('.product_name' + seq).text();
    console.log('ddd', name);
    $('.product_name').html(name)

    $('#ordermodal').modal('hide');
    $('#askModal').modal('show');
    $('#goAsk').attr('onclick', 'goAsk(' + seq + ')')
}


function goAsk(seq) {
    let obj = new Object();
    obj.u_seq = user_info.u_seq;
    obj.o_seq = seq;

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
    obj.oa_date = currentDate();
    console.log('obj', obj);
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

$('.tab_one').click(function() {
    $('.tab_one').removeClass('on');
    $(this).addClass('on');
    let scType = ''
    let val = $(this).attr('data-val')
    if (val == 'refund_cancel') {
        scType = 'allCancel'
    } else {
        scType = ''
    }
    LoadProduct(scType)

})

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

var openWin;

function changeAddr() {
    if (openWin != null) openWin.close();
    var _url = '/ordermanage.php';
    var _width = '500';
    var _height = '700';
    var _left = Math.ceil((window.screen.width - _width) / 2);
    var _top = Math.ceil((window.screen.width - _height) / 2);

    window.name = "parentForm";

    openWin = window.open(_url, 'ORDER', 'width=' + _width + ', height=' + _height + ', left=' + _left + ', top=' +
        _top);
}
</script>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
