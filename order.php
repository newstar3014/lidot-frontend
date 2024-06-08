<!-- Style CSS -->
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>

<!-- CSS -->
<style media="screen">
.table-account {
    font-weight: normal;
}

.table-account span {
    font-weight: bold;
}

.table-account span:last-child {
    font-size: 18px;
}

.qcbtn {
    font-weight: normal;
    cursor: pointer;
    margin-left: 10px;
    width: 70px;
    display: inline-block;
}

.delinfobox {
    background: white;
    margin-right: 5px;
    opacity: 0;
    transition: 0.3s;
    font-weight: normal !important;
    font-size: 12px !important;
}

.delinfobox.on {
    opacity: 1;
}

/* .border-bold-top {
    border-top: 2px solid black !important;
} */

@media (max-width:760px) {
    .mobile {
        display: none;
    }

    .qty-text {
        display: block;
    }

    .qcbtn {
        margin-left: 0;
        display: block;
        margin-top: 10px;
    }

    .dots {
        /* width: 200px; */

        /* 특정 단위로 텍스트를 자르기 위한 구문 */
        white-space: normal;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        /* 텍스트를 자를 때 원하는 단위 ex) 3줄 */
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .cart-table tbody img {
        max-width: 100px;
    }

    /* .deltem-table{
            min-width: 1000px;
        } */

    .deltem-table,
    .deltem-table td,
    .deltem-table th {
        font-size: 12px;
    }

}

.fs-10 {
    font-size: 10px;
}

.borderOne {
    border: 1px solid #dee2e6;
    background-color: #f8f8ff;
    padding: 30px 0px;
    font-weight: bold;
    display: flex;
    justify-content: center;
    align-items: center;
}

.borderOne:nth-child(even) {
    border-right: 0px !important;
    border-left: 0px !important;
}

.borderTwo {
    border: 1px solid #dee2e6;
    padding: 30px 10px;
    font-weight: bold;
    display: flex;
    justify-content: center;
    align-items: center;
    border-top: 0px !important;
    border-bottom: 0px !important;
}

.borderTwo:nth-child(even) {
    border-right: 0px !important;
    border-left: 0px !important;
}

.choice_title {
    font-size: 20px;
    font-weight: bold;
}

.choice_btn_wrap {
    align-items: flex-end;
}

.loca_list_title {
    background: #c4c4c4;
    color: #000;
    padding: 10px;
    min-width: 116.64px;
    border-bottom: 1px solid #c4c4c4;
}

.loca_list_title:nth-child(odd) {
    border-bottom: 1px solid white;
}

.loca_list_title:nth-child(even) {
    border-bottom: 1px solid white;
}

.loca_list_title:last-child {
    border: 0;
}

.loca_list_content {
    padding: 10px;
}

.loca_list_content:nth-child(odd) {
    border-bottom: 1px solid white;
}

.loca_list_content:nth-child(even) {
    border-bottom: 1px solid white;
}

.loca_list_content:last-child {
    border: 0;
}

.f_td {
    width: 15%;
}

@media (max-width:768px) {

    .time-mobile{
        border-bottom: 1px solid lightgray;
        padding: 10px 5px;
    }

    .f_td {
        width: 30%;
    }

    .td-width {
        width: 100px !important;
    }

    .ok-text-center {
        text-align: left !important;
    }

    .delTd {
        position: relative !important;
        right: auto !important;
        top: auto !important;
    }
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

.page-title {
    border-bottom: 1px solid #EBECEF;
    padding-bottom: 30px;
}

.btn-khaki {
    background: #747794 !important;
    color: #fff;
}

.coupon-detail {
    padding: 10px;
}

.coupon-detail li {
    margin-bottom: 10px;
}

.coupon-detail li:last-child {
    margin-bottom: 0;
}

.pr_comments p {
    margin-bottom: 0;
    max-width: 900px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.ell {
    width: 300px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.fr_td {
    width: 200px;
}

#board-search-wrap select {
    padding: 3px;
    border-color: #ebebeb;
}

#board-search-wrap #board-sk {
    padding: 1px;
    border: 1px solid #ebebeb;
    outline: none;
}

.btn-search {
    background: #84868B;
    color: white;
    padding: 5px 20px;
    border-radius: 3px;
}

.nodata_wrap {
    /* padding: */
    border: 1px solid #EBECEF;
    border-top: 0;
}

.searh_btn {
    height: 38px;
    display: inline-flex;
    align-items: center;
}

.req {
    color: #DD3D4C;
}

.phone-input {
    max-width: 100px;
}

.delTd {
    /* position: absolute;
    right: 10px;
    top: 10px; */
}

.pay_wrap p {
    border: 1px solid #dee2e6;
    margin-bottom: 0;
    font-weight: bold;
    color: #000;

}

.pay_wrap p:first-child {
    border-bottom: 0;
}

.pay_wrap p.on {
    border: 1px solid #3D8EDD;
    color: #3D8EDD;
}

.bar {
    background: #EBECEF;
    height: 1px;
    margin: 20px 0;
}

.td-width {
    width: 200px;

}

.ok-text-center {
    text-align: center;
}

.searh_btn {
    min-width: 75px;
}

.text_del_s {
    font-size: 11px;
}

.text-black {
    font-size: 13px
}
</style>
<!-- Header Area End -->

<!-- Breadcumb Area -->
<div class="breadcrumb-wrap">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <ol class="breadcrumb mt-2 bg-white">
                    <li class="breadcrumb-item"><a href="/">홈</a></li>
                    <li class="breadcrumb-item"><a href="order.php">주문/결제</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb Area -->

<!-- Wishlist Table Area -->
<div class="wishlist-table  clearfix">
    <div class="container mt-md-5">
        <h4 class="page-title text-dark text-center mb-4 font-weight-bold">ORDER</h4>

        <div class="d-flex choice_btn_wrap mb-2">
            <div class="choice_title">주문상품 </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="d-none d-md-block cart-table wishlist-table">
                    <div class="table-responsive " id="cart-table-list">
                    </div>
                </div>
                <div class="d-md-none cart-table wishlist-table">
                    <div class="table-responsive " id="cart-table-list_m">
                    </div>
                </div>

                <div class="d-flex mt-4 choice_btn_wrap mb-2 justify-content-between">
                    <div class="choice_title">배송 정보 </div>
                    <div class="d-flex align-items-center">
                        <i class="fa-solid fa-check text-danger mr-1"></i>
                        필수입력사항
                    </div>
                </div>

                <div class="div_none d-none">
                    <div class="p-3 " style="border-bottom:0 !important;">
                        <div class="row mb-2 pb-2 border-bottom">
                            <div class="col-md-1 pl-0 d-flex align-items-center">
                                <p class="text-black mb-0">배송지 선택 <i class="fa-solid fa-check text-danger mr-1"></i></p>
                            </div>
                            <div class="col-md-5 col-12">
                                <div class="d-flex pb-2 align-items-center">
                                    <label for="del_1" class="pointer d-flex mb-0 mr-2"> <input id="del_1" type="radio"
                                            name="del-radio" value="default" checked> <span class="ml-1">기본 배송지</span></label>
                                    <label for="del_2" class="pointer d-flex mb-0"> <input id="del_2" type="radio"
                                            name="del-radio" value="new"> <span class="ml-1">새로운 배송지</span></label>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-2 pb-2 border-bottom">
                            <div class="col-md-1 pl-0 d-flex align-items-center">
                                <p class="text-black mb-0">받는사람 <i class="fa-solid fa-check text-danger mr-1"></i></p>
                            </div>
                            <div class="col-md-5 col-12">
                                <input id="buyer_name" class="del_input form-control" type="text" />
                            </div>
                        </div>
                        <div class="row mb-2 pb-2 border-bottom">
                            <div class="col-md-1 pl-0 d-flex align-items-center">
                                <p class="text-black mb-0">주소 <i class="fa-solid fa-check text-danger mr-1"></i></p>
                            </div>
                            <div class="col-md-5 col-12 ">
                                <div class="d-flex align-items-center">
                                    <input id="buyer_addr" class="del_input form-control w-md-50 w-100 d-inline-block"
                                        type="text" readonly />
                                    <span class="btn pointer border ml-2 searh_btn" onclick="addressAdd();">검색</span>
                                    <span class="ml-2 mt-2 text_del_s">기본주소</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <input id="buyer_addr_d" class="del_input mt-2 form-control" type="text" />
                                    <span class="ml-2 mt-2 text_del_s">상세주소</span>
                                </div>

                            </div>
                        </div>

                        <div class="row mb-2 pb-2 border-bottom">
                            <div class="col-md-1 pl-0 d-flex align-items-center">
                                <p class="text-black mb-0">휴대전화 <i class="fa-solid fa-check text-danger mr-1"></i></p>
                            </div>
                            <div class="col-md-5 col-12"><input id="buyer_tel" class="del_input form-control" type="number"
                                    oninput="maxLengthCheck(this)" maxLength="11" /></div>
                        </div>
                        <div class="row mb-2 pb-2 border-bottom">
                            <div class="col-md-1 pl-0 d-flex align-items-center">
                                <p class="text-black mb-0">배송메시지</p>
                            </div>
                            <div class="col-md-5 col-12">
                                <select id="dl_request" class="del_input form-control mb-2" id="">
                                    <option value="">메세지 선택(선택사항)</option>
                                    <option value="문앞에 놓아주세요.">문앞에 놓아주세요.</option>
                                    <option value="경비실에 맡겨주세요.">경비실에 맡겨주세요.</option>
                                    <option value="직접입력">직접입력</option>
                                </select>
                                <input class="d-none form-control" id="dl_request_direct_input" type="text" />
                            </div>

                        </div>
                        <div class="del_wrap d-none ">
                            <div class="d-flex justify-content-end mt-3">
                                <span class="btn btn-secondary btn-sm" onclick="setDeliveryInfo();">기본 배송지로 저장</span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-12 px-0 ml-auto mt-1 d-none" id="nonuserdiv">
                    <table class="table border" style="white-space:nowrap;">
                        <tr>
                            <th class="f_td">받으시는분 이름 <i class="fa-solid fa-check text-danger ml-1"></i></th>
                            <td>
                                <input type="text" name="" value="" class="form-control form-control-sm"
                                    id="o_nonuser_name">
                            </td>
                        </tr>
                        <tr>
                            <th>번호 <i class="fa-solid fa-check text-danger ml-1"></i></th>
                            <td>
                                <div class="d-flex">
                                    <select class="form-control form-control-sm" name="" style="width:70px;"
                                        id="u_phone_1">
                                        <option value="010">010</option>
                                        <option value="011">011</option>
                                        <option value="016">016</option>
                                        <option value="017">017</option>
                                        <option value="018">018</option>
                                        <option value="019">019</option>
                                    </select>
                                    <span class="mx-1">-</span>
                                    <input type="number" class="form-control form-control-sm" id="u_phone" maxlength="8"
                                        placeholder="휴대전화(나머지 8자리 '-'제외)" oninput="maxLengthCheck(this)">
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <th>이메일 <i class="fa-solid fa-check text-danger ml-1"></i></th>
                            <td>
                                <input type="email" name="" value="" class="form-control form-control-sm"
                                    placeholder="e-mail" id="o_nonuser_email">
                            </td>
                        </tr>
                        <tr>
                            <th>주소 <i class="fa-solid fa-check text-danger ml-1"></i></th>
                            <td>
                                <input type="text" name="" value="" class="form-control form-control-sm" readonly
                                    placeholder="클릭하여 주소를 입력해주세요." onclick="addressAdd()" id="o_nonuser_address">
                            </td>
                        </tr>
                        <tr>
                            <th>상세 주소 <i class="fa-solid fa-check text-danger ml-1"></i></th>
                            <td>
                                <input type="text" name="" value="" class="form-control form-control-sm"
                                    id="o_nonuser_address2">
                            </td>
                        </tr>
                        <tr>
                            <th>비밀번호 <i class="fa-solid fa-check text-danger ml-1"></i></th>
                            <td>
                                <input type="password" name="" value="" maxlength="20"
                                    class="form-control form-control-sm" id="o_pass">
                            </td>
                        </tr>

                        <tr>
                            <th>
                                비밀번호 확인 <i class="fa-solid fa-check text-danger ml-1"></i>
                                <div class="text-danger pass_text fs-10">
                                    비밀번호가 일치하지 않습니다.
                                </div>
                            </th>
                            <td>
                                <input type="password" name="" value="" maxlength="20"
                                    class="form-control form-control-sm" id="o_pass2">
                            </td>
                        </tr>
                    </table>
                </div>


                <div class="ml-auto my-3 d-none">
                    <div class="p-3 border">
                        <h6>쿠폰/포인트 적용</h6>
                        <hr>
                    </div>
                </div>


                <div class="d-none cart-footer text-right my-4">
                    <div class="back-to-shop">
                        <span class="border py-3 text-center pointer d-inline-block btn-secondary"
                            onclick="goBuy('card')" style="width:150px;">결제하기</span>
                        <span class="border py-3 text-center pointer d-inline-block btn-secondary"
                            onclick="goBuy('vbank')" style="width:150px;">무통장입금</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex choice_btn_wrap mb-2">
            <div class="choice_title">할인/부가 결제</div>
        </div>

        <div>
            <div id="coupon_div" class="justify-content-between d-none">
                <p class="mb-0 text-black nowrap">쿠폰 할인</p>
                <div>
                    <div class="text-right">
                        <p class="mb-0 text-black font-weight-bold"><span class="use_coupon">0</span>원</p>
                        <!-- <span class="border pointer px-3 py-1" style="display:inline-flex;"
                            onclick="$('#coupon-modal').modal('show');">쿠폰확인</span> -->

                        <select class="form-control form-control-sm" name="" id="coupon_select">
                            <option value="">-</option>
                        </select>
                    </div>
                    <p class="text-right mb-0 my-2 text-black fs-12">보유쿠폰 <span class="text-danger"
                            id="coupon_count">0</span>개</p>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <p class="mb-0 text-black">적립금</p>
                <div>
                    <div class="text-right">
                        <input type="number" class="form-control form-control-sm d-inline-block" value="0" min="0"
                            style="width:100px;" id="point_input" />
                        <!-- <span class="border pointer px-3 py-1" style="display:inline-flex;">적립금사용</span> -->
                    </div>
                    <p class="text-right mb-0 my-2 text-right text-black fs-12">사용가능 적립금 <span class="text-danger"
                            id="point_input_p">0</span>P</p>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <p class="mb-0 text-black font-weight-bold">적용금액</p>
                <p class="mb-0 text-black font-weight-bold">
                    <span class="text-danger">-</span><span class="text-danger use_coupon dc_money">0</span>원
                </p>
            </div>
        </div>
        <div class="bar"></div>
        <div class="d-flex choice_btn_wrap mb-2">
            <div class="choice_title">결제정보 </div>
        </div>

        <div>
            <div class="d-flex justify-content-between">
                <p class="mb-0 text-black">주문 상품</p>
                <p class="mb-0 text-black font-weight-bold" id="all-pro-price"></p>
            </div>
            <div class="d-flex justify-content-between">
                <p class="mb-0 text-black">배송비(착불 상품 포함)</p>
                <p class="mb-0 text-black font-weight-bold" id="all-pro-del-price"></p>
            </div>
            <div class="d-flex justify-content-between">
                <p class="mb-0 text-black">할인금액</p>
                <p class="mb-0 text-black font-weight-bold" id=""><span
                        class="font-weight-bold text-danger">-</span><span
                        class="font-weight-bold text-danger use_coupon dc_money">0</span>원</p>
            </div>

            <div class="d-flex justify-content-between">
                <p class="mb-0 text-black font-weight-bold">적용금액</p>
                <p class="mb-0 text-black font-weight-bold" id="account-price"></p>
            </div>
        </div>
        <div class="bar"></div>
        <div class="d-flex choice_btn_wrap mb-2">
            <div class="choice_title">결제수단</div>
        </div>

        <div>
            <p class="text-black mb-1">결제수단 선택</p>

            <div class="pay_wrap">
                <p class="p-md-3 p-2 on pointer" data-type="vbank">무통장입금</p>
                <p class="p-md-3 p-2 pointer" data-type="card">카드결제</p>
            </div>
        </div>

        <div class="bar"></div>

        <div class="d-flex choice_btn_wrap mb-2">
            <div class="choice_title">구매조건 확인 및 결제진행 동의</div>
        </div>

        <div class="ok-text-center mb-3">
            <label for="pay_ok" class="mb-0"><input id="pay_ok" class="mr-2" type="checkbox"
                    style="vertical-align:middle;" /> 주문 내용을 확인하였으며 약관에 동의합니다.</label>
        </div>

        <div class="text-center py-2 mb-3 pointer" style="background:#747794;">
            <h5 class="text-white" onclick="goIni();">결제하기</h5>
        </div>

        <div>
            <p class="text-black fs-12 mb-1">- 무이자할부가 적용되지 않은 상품과 무이자할부가 가능한 상품을 동시에 구매할 경우 전체 주문 상품 금액에 대해 무이자할부가 적용되지
                않습니다. 무이자할부를 원하시는 경우 장바구니에서 무이자할부 상품만 선택하여 주문하여 주시기 바랍니다.</p>
            <p class="text-black fs-12">- 최소 결제 가능 금액은 결제금액에서 배송비를 제외한 금액입니다.</p>
        </div>
    </div>
</div>


<div id="coupon-modal" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">쿠폰 선택</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <select class="form-control form-control-sm" name="" id="coupon_select"></select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal();">닫기</button>
                <button type="button" class="btn btn-primary" onclick="useCoupon();">적용</button>
            </div>
        </div>
    </div>
</div>


<!-- JS  -->
<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script type="text/javascript" src="https://cdn.iamport.kr/js/iamport.payment-1.2.0.js"></script>
<script type="text/javascript">
var totalPrice = 0;
var totalPrice_tmp = 0;
var delivery_price = 0;
var proObjarr = []
var proObjFinalarr = []
var proObjRealFinalarr = []
var tmpObjarr = []
var pname = [];

var coupon_dis = 0;
var uc_seq = '';

var buytype = '<? echo $_GET["buy"]; ?>';

var ccseq = '<? echo $_GET["seq"]; ?>';

var randomseq;

var regPass = /^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,25}$/;

var IMP = window.IMP; // 생략 가능

var pay_type = 'vbank';
IMP.init("imp20004137"); // 예: imp00000000

function testData() {
    $('#o_nonuser_name').val('김수빈');
    $('#u_phone').val('50385658');
    $('#o_nonuser_email').val('vnfmspt3127@gmail.com');
    $('#o_nonuser_address').val('국회의사당역 1번출구');
    $('#o_nonuser_address2').val('1234');
    $('#o_pass').val('tnqlstnqls1!');
    $('#o_pass2').val('tnqlstnqls1!');
    $('.pass_text').html('비밀번호가 일치합니다.');
    $('.pass_text').removeClass('text-danger');
    $('.pass_text').addClass('text-primary');
}

$(function() {
    if (!user_info.u_seq) {

        //비회원 구매 부분 randomseq가 무엇인지는 모르겠습니다.

        $("#nonuserdiv2").remove()
        $("#nonuserdiv").removeClass('d-none')
        var product = JSON.parse(sessionStorage.getItem("product"));
        //console.log('product', product);
        if (product.os_pro_data) {
            let parr = JSON.parse(product.os_pro_data)
            randomseq = parr.randomseq
        }
        if (product.os_option_data) {
            let parr2 = JSON.parse(product.os_option_data)
            for (let i = 0; i < parr2.length; i++) {
                randomseq = parr2[i].randomseq
            }
        }
        if (product.os_addoption_data) {
            let parr3 = JSON.parse(product.os_addoption_data)
            for (let i = 0; i < parr3.length; i++) {
                randomseq = parr3[i].randomseq
            }
        }
    } else {
        $("#nonuserdiv").remove()
        couponLength();
        loadPointData()
        LoadMyCouponlist()

        $('#user_name').html(user_info.u_name);
        $('#user_phone').html(phoneHyphen(user_info.u_phone))
        $('.div_none').removeClass('d-none')
    }


    if (buytype == 'direct') {
        var product = JSON.parse(sessionStorage.getItem("product"));


        if (product.os_pro_data) {
            let parr = JSON.parse(product.os_pro_data)
            randomseq = parr.randomseq
        }
        if (product.os_option_data) {
            let parr2 = JSON.parse(product.os_option_data)
            for (let i = 0; i < parr2.length; i++) {
                randomseq = parr2[i].randomseq
            }
        }
        if (product.os_addoption_data) {
            let parr3 = JSON.parse(product.os_addoption_data)
            for (let i = 0; i < parr3.length; i++) {
                randomseq = parr3[i].randomseq
            }
        }

        LoadMyCart();
    } else {
        LoadMyCart();
    }
    loadHomedata()

})

$('.pay_wrap p').click(function() {
    $('.pay_wrap p').removeClass('on');
    $(this).addClass('on');
    pay_type = $(this).data('type');
})

function goIni() {
    if ($('#pay_ok').is(':checked')) {
        goBuy(pay_type);
    } else {
        alert('약관에 동의해주세요.');
    }

}

$(document).on({
    mouseenter: function() {
        $(this).closest(".deltem-table").find('.delinfobox').addClass('on')
    },
    mouseleave: function() {
        $(this).closest(".deltem-table").find('.delinfobox').removeClass('on')
    }
}, ".fa-question-circle");

function useCoupon() {
    $('.use_coupon').text(comma(viewCouponPrice));
    $('#coupon-modal').modal('hide');
    calcData();
}

function closeModal() {
    $('#coupon_select').val('').trigger('change');
    $('#coupon-modal').modal('hide');
    calcData();
}

//카트 테이블 정보 가져와서 주문상품 그려줌

function LoadMyCart() {
    var u_seq = user_info.u_seq;

    if (buytype == 'direct' || !user_info) {
        u_seq = randomseq
    }

    $.ajax({
        url: SERVER_AP + "/cart/list-ck",
        type: "post",
        cache: false,
        async: false,
        data: {
            u_seq: u_seq || randomseq,
            c_seq: ccseq
        },
        success: function(data) {

            $("#cart-table-list, #cart-table-list_m").html('');

            if (data.rows.length == 0) {
                var nstr = `<div class="py-5 text-center">등록된 장바구니가 없습니다</div>`;
                $("#cart-table-list, #cart-table-list_m").append(nstr);
                $("#nonuserdiv, #nonuserdiv2").remove()
                $(".cart-footer").remove();
                $("#account-div").remove();
            }

            var uniqueDelArr = [];
            var delTemArr = [];
            $.each(data.rows, function(ci, cv) {

                ////////////// 사업자회원시 도매가 가격 적용 ////////////////////
                if (cv.dt_seq_up && user_info.u_type == '사업자회원' && user_info.u_status == 1) {
                    cv.dt_seq = cv.dt_seq_up
                    cv.deltem = cv.deltem_up
                }
                ////////////// 사업자회원시 도매가 가격 적용 END ////////////////////

                delTemArr.push(cv.dt_seq)
                var set = new Set(delTemArr);
                uniqueDelArr = [...set];
            })

            $.each(uniqueDelArr, function(dti, dtv) { //먼저 탬플릿마다 테이블그리기
                var delteminfo = delTemInfo(dtv);
                var str =
                    `<table class="table table-bordered border-bold-top mb-0 deltem-table deltem-table` +
                    dtv + `">\
                                    <thead class="">\
                                        <tr>\
                                            <th style="width:100px">
                                                상품이미지</th>
                                            <th  style="width:50%">상품정보</th>
                                            <th style="width:130px">판매가</th>
                                            <th  style="width:80px">수량</th>
                                            <th  style="width:80px">적립금</th>
                                            <th style="width:80px">배송비</th>
                                            <th style="width:130px">합계</th>
                                        </tr>\
                                    </thead>\
                                    <tbody class="cart-tbody` + dtv + `"></tbody>\
                                </table>`;

                var str_m =
                    `<table class="table table-bordered border-bold-top mb-0 deltem-table deltem-table` +
                    dtv + `">\
                                    <thead class="">\
                                        <tr>\
                                            <th style="width:100px">
                                                상품이미지</th>
                                            <th>상품정보</th>
                                        </tr>\
                                    </thead>\
                                    <tbody class="cart-tbody` + dtv + `"></tbody>\
                                </table>`;

                if($(window).width() > 768){
                    $("#cart-table-list").append(str);
                }else{
                    $("#cart-table-list_m").append(str_m);
                }
            })
            ////////////////////////////////////////////////////////////////////////
            $.each(data.rows, function(ci, cv) {
                ////////////// 사업자회원시 도매가 가격 적용 ////////////////////
                if (cv.dt_seq_up && user_info.u_type == '사업자회원' && user_info.u_status == 1) {
                    cv.dt_seq = cv.dt_seq_up
                    cv.deltem = cv.deltem_up
                }
                ////////////// 사업자회원시 도매가 가격 적용 END ////////////////////

                let tmpObjarr = new Object()
                if (cv.po_seq) {
                    var opinfo = opInfo(cv.po_seq)
                    var proinfo = proInfo(opinfo.p_seq)
                    opimg = JSON.parse(proinfo.img)

                    let equip = ''
                    let equip_price = 0
                    if (cv.c_equip) {
                        equip = ` / ${opInfo(cv.c_equip).name}`
                        equip_price = opInfo(cv.c_equip).price * 1
                    }

                    //기존에 그리던 부분

                    // var opstr = `<tr class="check_tr  position-relative" data-dt=` + proinfo
                    //     .dt_seq + `>\
                    //                     <td class="td-width">
                    //                         <img src="` + opimg[0] +
                    //     `" alt="Product" onclick="location.href='/product_detail.php?p_seq=` +
                    //     opinfo.p_seq + `'" class="pointer">
                    //                     </td>\
                    //                     <td class="text-left">\
                    //                         <div class="dots">` + proinfo.name + ` / ` + opinfo.name + ` ${equip}</div>\
                    //                         <div>\
                    //                                 <span>수량 : ${cv.c_cnt}개</span>
                    //                         </div>\
                    //                         <div class="mt-2">
                    //                         <span class="price-info price-info-` + cv.c_seq + `" data-c_check="` + cv
                    //     .c_check + `" data-default='` + (opinfo.price * 1 + proinfo.price * 1) +
                    //     equip_price + `' data-price='` + ((opinfo.price * 1 + proinfo.price * 1) *
                    //         cv.c_cnt * 1 + equip_price) + `'>금액 : ` + comma((opinfo.price * 1 +
                    //         proinfo
                    //         .price * 1) * cv.c_cnt * 1 + equip_price) + `</span>원
                    //                         </div>
                    //                         <div class="delTd delTd` + cv.dt_seq + ` delTd-cseq` + cv.c_seq +
                    //     `" data-c_check="` + cv.c_check + `"></div>
                    //                     </td>\
                    //                 </tr>`;


                    //수정된 그리는 부분
                    var opstr = `
                    <tr>
                        <td>
                            <img src="${opimg[0]}" alt="Product"
                                onclick="location.href='/product_detail.php?p_seq=${opinfo.p_seq}'" class="pointer">
                        </td>
                        <td>
                            ${proinfo.name} / ${opinfo.name} ${equip}
                        </td>
                        <td>
                            ${comma(opinfo.price * 1 + proinfo.price * 1)}원
                        </td>
                        <td>
                            ${cv.c_cnt}
                        </td>
                        <td>
                            ${comma(((opinfo.price * 1 + proinfo.price * 1) * cv.c_cnt) * 0.01)}원
                        </td>
                        <td>
                            <div class="delTd delTd` + cv.dt_seq + ` delTd-cseq` + cv.c_seq +
                        `" data-c_check="` + cv.c_check + `"></div>
                            </td>
                        <td>
                            <span class="price-info price-info-${cv.c_seq}"
                            data-c_check="${cv.c_check}" data-default='${(opinfo.price * 1 + proinfo.price * 1) + equip_price}'
                            data-price='${((opinfo.price * 1 + proinfo.price * 1) * cv.c_cnt * 1 + equip_price)}'>
                           ${comma((opinfo.price * 1 +proinfo.price * 1) * cv.c_cnt * 1 + equip_price)}원</span>
                        </td>
                    </tr>`

                    var opstr_m = `<tr>
                        <td>
                            <img src="${opimg[0]}" alt="Product"
                                onclick="location.href='/product_detail.php?p_seq=${opinfo.p_seq}'" class="pointer">
                        </td>
                        <td class="text-left">
                            ${proinfo.name} / ${opinfo.name} ${equip}<br>
                            판매가 : ${comma(opinfo.price * 1 + proinfo.price * 1)}원<br>
                            수량 : ${cv.c_cnt}<br>
                            적립금 : ${comma(((opinfo.price * 1 + proinfo.price * 1) * cv.c_cnt) * 0.01)}원<br>
                            배송비 : <span class="delTd delTd` + cv.dt_seq + ` delTd-cseq` + cv.c_seq +
                        `" data-c_check="` + cv.c_check + `"></span><br>
                            합계 : <span class="price-info price-info-${cv.c_seq}"
                            data-c_check="${cv.c_check}" data-default='${(opinfo.price * 1 + proinfo.price * 1) + equip_price}'
                            data-price='${((opinfo.price * 1 + proinfo.price * 1) * cv.c_cnt * 1 + equip_price)}'>
                           ${comma((opinfo.price * 1 +proinfo.price * 1) * cv.c_cnt * 1 + equip_price)}원</span>
                        </td>
                    </tr>
                    `;

                    pname.push(proinfo.name)

                    if (cv.c_check) {
                        if($(window).width() > 768){
                            $(".cart-tbody" + proinfo.dt_seq).append(opstr);
                        }else{
                            $(".cart-tbody" + proinfo.dt_seq).append(opstr_m);
                        }
                    }


                    if (!user_info) {
                        $(`.qty-text-${cv.c_seq}`).attr('disabled', true)
                    }

                    tmpObjarr.tack = loadTackbea(cv.p_seq)
                    tmpObjarr.p_seq = cv.p_seq
                    tmpObjarr.po_seq = cv.po_seq
                    tmpObjarr.cnt = cv.c_cnt
                    tmpObjarr.c_equip = cv.c_equip
                    tmpObjarr.totalprice = (opinfo.price * 1 + proinfo.price * 1) * cv.c_cnt * 1
                    tmpObjarr.dt_calc = loadTackbeaCalc(cv.p_seq)
                    tmpObjarr.p_purchase = proinfo.p_purchase * 1

                    // for(let i=0; i<cv.deltem.length; i++){
                    //     for(let key in proObjFinalarr){
                    //         if(cv.deltem[i].dt_calc == key){
                    //             proObjFinalarr[key].push({
                    //                 p_seq:cv.p_seq,
                    //                 po_seq:cv.po_seq,
                    //                 cnt:cv.c_cnt,
                    //             })
                    //         }
                    //     }
                    // }

                } else {
                    var proinfo = proInfo(cv.p_seq)
                    var proimg = JSON.parse(proinfo.img);


                    // var prostr = `<tr class="check_tr  position-relative" data-dt=` + proinfo
                    //     .dt_seq + `>\
                    //                     <td class="td-width">\
                    //                         <img src="` + proimg[0] +
                    //     `" alt="Product" onclick="location.href='/product_detail.php?p_seq=` + cv
                    //     .p_seq + `'" class="pointer">\
                    //                     </td>\
                    //                     <td class="text-left">\
                    //                         <div class="dots">` + proinfo.name + `</div>\
                    //                         <div>\
                    //                                 <span>수량 : ${cv.c_cnt}개</span>
                    //                         </div>\
                    //                         <div class="mt-2">
                    //                         <span class="price-info price-info-` + cv.c_seq + `" data-default="` +
                    //     proinfo.price * 1 + `" data-c_check="` + cv.c_check + `" data-price='` + (
                    //         proinfo.price * 1 * cv.c_cnt * 1) + `'>금액 : ` + comma(proinfo.price *
                    //         1 * cv
                    //         .c_cnt * 1) + `</span>원
                    //                         </div>
                    //                         <div  class="delTd delTd` + cv.dt_seq + ` delTd-cseq` + cv.c_seq +
                    //     `" data-c_check="` + cv.c_check + `"></div>
                    //                     </td>\
                    //                 </tr>`;


                    var prostr = `
                    <tr>
                        <td>
                            <img src="${proimg[0]}" alt="Product"
                                onclick="location.href='/product_detail.php?p_seq=${proinfo.p_seq}'" class="pointer">
                        </td>
                        <td>
                            ${proinfo.name}
                        </td>
                        <td>
                            ${comma( proinfo.price * 1)}원
                        </td>
                        <td>
                            ${cv.c_cnt}
                        </td>
                        <td>
                            ${comma(( proinfo.price * 1 * cv.c_cnt) * 0.01)}원
                        </td>
                        <td>
                            <div class="delTd delTd` + cv.dt_seq + ` delTd-cseq` + cv.c_seq +
                        `" data-c_check="` + cv.c_check + `"></div>
                            </td>
                        <td>
                            <span class="price-info price-info-${cv.c_seq}"
                            data-c_check="${cv.c_check}" data-default='${proinfo.price}'
                            data-price='${proinfo.price * 1 * cv.c_cnt * 1}'>
                           ${comma(proinfo.price * 1 * cv.c_cnt * 1)}원</span>
                        </td>
                    </tr>
                    `;

                    var prostr_m = `<tr>
                        <td>
                            <img src="${proimg[0]}" alt="Product"
                                onclick="location.href='/product_detail.php?p_seq=${proinfo.p_seq}'" class="pointer">
                        </td>
                        <td class="text-left">
                            ${proinfo.name}<br>
                            판매가 : ${comma( proinfo.price * 1)}원<br>
                            수량 : ${cv.c_cnt}<br>
                            적립금 : ${comma(( proinfo.price * 1 * cv.c_cnt) * 0.01)}원<br>
                            배송비 : <span class="delTd delTd` + cv.dt_seq + ` delTd-cseq` + cv.c_seq +
                        `" data-c_check="` + cv.c_check + `"></span><br>
                            합계 : <span class="price-info price-info-${cv.c_seq}"
                            data-c_check="${cv.c_check}" data-default='${proinfo.price}'
                            data-price='${proinfo.price * 1 * cv.c_cnt * 1}'>
                           ${comma(proinfo.price * 1 * cv.c_cnt * 1)}원</span>
                        </td>
                    </tr>
                    `;

                    pname.push(proinfo.name)

                    if (cv.c_check) {
                        if($(window).width() > 768){
                            $(".cart-tbody" + cv.dt_seq).append(prostr);
                        }else{
                            $(".cart-tbody" + cv.dt_seq).append(prostr_m);
                        }
                    }

                    if (!user_info) {
                        $(`.qty-text-${cv.c_seq}`).attr('disabled', true)
                    }

                    tmpObjarr.tack = loadTackbea(cv.p_seq)
                    tmpObjarr.p_seq = cv.p_seq
                    tmpObjarr.po_seq = cv.po_seq
                    tmpObjarr.cnt = cv.c_cnt
                    tmpObjarr.totalprice = proinfo.price * 1 * cv.c_cnt * 1
                    tmpObjarr.dt_calc = loadTackbeaCalc(cv.p_seq)
                    tmpObjarr.p_purchase = proinfo.p_purchase * 1
                }
                /////////////////////////////////////////////////////
                ///////////////////////////////////////////////배송비
                var thisdelPrice_each = 0;
                var dell_each = LoadDel(cv.dt_seq)
                var datatype_each = $(dell_each).attr("data-type")
                var condition_each = $(dell_each).attr("data-condition") * 1
                var price_each = $(dell_each).attr("data-del") * 1
                var data_clac = $(dell_each).attr("data-dt_calc")

                var proprice_each = $(".delTd-cseq" + cv.c_seq).closest('tr').find(".price-info")
                    .attr('data-price') * 1
                var quantynum_each = $(".delTd-cseq" + cv.c_seq).closest('tr').find(
                    "input[name=quantity]").val()

                if (condition_each) {
                    if (datatype_each == '원 이하') {
                        if (condition_each >= proprice_each) {
                            thisdelPrice_each = price_each
                        } else {
                            thisdelPrice_each = 0
                        }
                    } else if (datatype_each == '개당') {
                        thisdelPrice_each = (parseInt((quantynum_each - 1) / condition_each) + 1) *
                            price_each
                    }
                } else {
                    thisdelPrice_each = price_each
                }

                if (thisdelPrice_each != 0) {
                    if (isNaN(thisdelPrice_each)) {
                        thisdelPrice_each = 0;
                    }
                    $(".delTd-cseq" + cv.c_seq).text(comma(thisdelPrice_each) + '원')
                }

                $(".delTd-cseq" + cv.c_seq).attr('data-price', thisdelPrice_each * 1)
                $(".delTd-cseq" + cv.c_seq).attr('data-dt_calc', data_clac)

                $(".delTd-cseq" + cv.c_seq).text(comma(thisdelPrice_each) + '원')
                var alldelp = 0;
                $.each($(".deltem-table" + cv.dt_seq), function(i, v) {
                    $.each($(v).find(".delTd"), function(ii, vv) {
                        if ($(vv).attr('data-c_check') == 1) {
                            alldelp += $(vv).attr('data-price') * 1
                        }
                    })
                })
                if (thisdelPrice_each != 0) {
                    $(".del-all-span" + cv.dt_seq).text(comma(alldelp) + '원')
                }

                $(".del-all-span" + cv.dt_seq).attr('data-price', alldelp * 1)
                $(".del-all-span" + cv.dt_seq).attr('data-dt_calc', data_clac)

                /////////////////////////
                tmpObjarr.delprice = thisdelPrice_each
                if (cv.c_check) {
                    proObjFinalarr.push(tmpObjarr)
                }

                $.each(cv.deltem, function(di, dv) { /////////////////묶음배송비일때
                    if (dv.dt_calc == 'Y') {
                        $(".delTd" + dv.dt_seq).not($(".delTd" + dv.dt_seq).first())
                            .remove();
                        $(".delTd" + dv.dt_seq).attr('rowspan', $(".cart-tbody" + dv.dt_seq)
                            .find('tr').length)

                        var thisdelPrice = 0;
                        var dell = LoadDel(dv.dt_seq)
                        var datatype = $(dell).attr("data-type")
                        var condition = $(dell).attr("data-condition") * 1
                        var price = $(dell).attr("data-del") * 1
                        var proprice = 0;

                        $.each($(".deltem-table" + dv.dt_seq), function(i, v) {
                            $.each($(v).find(".price-info"), function(ii, vv) {
                                if ($(vv).attr('data-c_check') == 1) {
                                    proprice += $(vv).attr('data-price') * 1
                                }
                            })
                        })

                        var quantynum = 0;
                        $.each($(".deltem-table" + dv.dt_seq), function(i, v) {
                            $.each($(v).find("input[name=quantity]"), function(ii,
                                vv) {
                                quantynum += $(vv).val() * 1
                            })
                        })

                        if (condition) {
                            if (datatype == '원 이하') {
                                if (condition >= proprice) {
                                    thisdelPrice = price
                                } else {
                                    thisdelPrice = 0
                                }
                            } else if (datatype == '개당') {
                                thisdelPrice = (parseInt((quantynum - 1) / condition) + 1) *
                                    price
                            }
                        } else {
                            thisdelPrice = price
                        }

                        if (thisdelPrice == NaN) {
                            thisdelPrice = 0;
                        }

                        if (thisdelPrice != 0) {
                            $(".delTd" + dv.dt_seq).text(comma(thisdelPrice) +
                                '원')
                        }


                        $(".delTd" + dv.dt_seq).attr('data-price', thisdelPrice * 1)
                        if (thisdelPrice != 0) {
                            $(".del-all-span" + dv.dt_seq).text(comma(
                                thisdelPrice) + '원')
                        }

                        $(".del-all-span" + dv.dt_seq).attr('data-price', thisdelPrice * 1)
                    }
                })
                ///////////////////////////////////////////////////
                //////////////////////////////////////////////////배송비끝

                //상품가격
                var dellallprice = 0;
                $.each($(".deltem-table" + cv.dt_seq), function(i, v) {
                    $.each($(v).find(".price-info"), function(ii, vv) {
                        if ($(vv).attr('data-c_check') == 1) {
                            dellallprice += $(vv).attr('data-price') * 1
                        }
                    })
                })
                $(".totalprice-span" + cv.dt_seq).text(comma(dellallprice))
                $(".totalprice-span" + cv.dt_seq).attr('data-price', dellallprice)
                //$(".totalprice-span"+cv.dt_seq).attr('data-check', cv.c_check)

                $(".totalprice-all-span" + cv.dt_seq).text(comma(dellallprice + $(".del-all-span" +
                    cv.dt_seq).attr('data-price') * 1))
            })

            //맨밑에 총정산 테이블계산////////////////////////
            var allproPrice = 0
            $.each($(".price-info"), function(i, v) {
                allproPrice += $(v).attr('data-price') * 1
            })

            $("#all-pro-price").text(comma(allproPrice) + '원')
            totalPrice = allproPrice;
            totalPrice_tmp = allproPrice;

            var alldelPrice = 0
            $.each($(".delTd"), function(i, v) {
                alldelPrice += $(v).attr('data-price') * 1
            })
            $("#all-pro-del-price").text(comma(alldelPrice) + '원')
            $("#all-pro-del-price").attr('data-money', alldelPrice);
            delivery_price = alldelPrice;

            //c최종금액
            $("#account-price").text(comma(allproPrice + alldelPrice) + '원')
            //////////////////////////////////////////////////


            ////////////////////////////////////////// 같은 택배사일경우 묶음설정
            let teackObj = new Object()
            let priceArr = []
            let bind_total_price = 0

            for (let i = 0; i < data.rows.length; i++) {

                if (data.rows[i].deltem[0]) {
                    teackObj[data.rows[i].deltem[0].dt_del_company] = []
                }

            }

            for (let i = 0; i < data.rows.length; i++) {
                for (let key in teackObj) {
                    if (data.rows[i].deltem[0].dt_del_company == key && data.rows[i].deltem[0].dt_calc ==
                        'Y') {
                        teackObj[key].push(data.rows[i])
                    }
                }
            }



            bind_number = 0;
            for (let key in teackObj) {
                if (teackObj[key].length > 1) {
                    bind_number++;
                }
            }

            //배송비계산

            if (data.rows.filter((v) => v.deltem && v.deltem[0] && v.deltem[0].dt_calc == 'Y').length > 0 &&
                bind_number > 0) {
                for (let key in teackObj) {
                    for (let i = 0; i < teackObj[key].length; i++) {
                        //console.log("teackObj[key][i] >>",teackObj[key][i]);
                        if (teackObj[key][i].c_check) {
                            let delarr = teackObj[key][i].deltem[0]
                            if (delarr.dt_type == '유료') {
                                priceArr.push(delarr.dt_type_text * 1)
                            } else if (delarr.dt_type == '무료') {
                                priceArr.push(0)
                            } else if (delarr.dt_type == '조건부배송비') {
                                if (delarr.dt_type_text == '원 이하') {
                                    if ($(".price-info-" + teackObj[key][i].c_seq).attr('data-price') * 1 >=
                                        delarr.dt_type_first) {
                                        priceArr.push(0)
                                    } else {
                                        priceArr.push(delarr.dt_type_second * 1)
                                    }
                                } else if (delarr.dt_type_text == '개당') {
                                    let price = (parseInt((teackObj[key][i].c_cnt * 1 - 1) / delarr
                                        .dt_type_first * 1) + 1) * delarr.dt_type_second * 1
                                    priceArr.push(price)
                                }
                            }
                        }
                    }
                }


                bind_total_price = Math.max(...priceArr)
                for (let i = 0; i < priceArr.length; i++) {
                    if (priceArr[i] === 0) {
                        bind_total_price = 0
                    }
                }

                if (priceArr.length == 0) {
                    bind_total_price = 0
                }

                $.each($(".del-all-span"), function(i, v) {
                    // if($(v).attr('data-dt_calc') == 'N'){
                    //     bind_total_price += $(v).attr('data-price')*1
                    // }
                    bind_total_price += $(v).attr('data-price') * 1
                })

                //결제정보 배송비 찍어주는 부분
                $("#all-pro-del-price").text(comma(bind_total_price) + '원')
                $("#all-pro-del-price").attr('data-money', bind_total_price);
                $("#account-price").text(comma(allproPrice + bind_total_price) + '원')
            }







            // ////////////////////////////////////////////////////////////////

            let tmpArr = [];
            const groupHandler = (resp, key, str = "") => {
                const groupByName = resp.reduce((acc, obj) => {
                    acc[obj[key] + str] = acc[obj[key] + str] ?? [];
                    acc[obj[key] + str].push(obj);
                    return acc;
                }, {});

                return groupByName;
            };
            const tackGroup = groupHandler(proObjFinalarr, 'tack');

            for (let k in tackGroup) {
                $.each(tackGroup[k], function(ii, kk) {
                    if (kk.dt_calc === 'N') {
                        tmpArr.push(kk)
                    }
                })

                let calcGroup = groupHandler(tackGroup[k], 'dt_calc');

                for (let j in calcGroup) {
                    if (j === 'Y') {

                        tmpArr.push(calcGroup[j])
                    }
                }
            }

            tt(tmpArr)
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

let insertArr = [];

let atmp = []

function tt(tmpArr) {

    $.each(tmpArr, function(i, v) {
        let tmp = new Object()

        if (!Array.isArray(v)) {
            let obj = {
                p_seq: v.p_seq,
                po_seq: v.po_seq,
                cnt: v.cnt,
                c_equip: v.c_equip,
                p_purchase: v.p_purchase,
                totalprice: v.totalprice,
                delprice: v.delprice,
                tack: v.tack,
            }

            atmp.push(obj)
            obj.default = JSON.stringify(atmp);
            insertArr.push(obj);
            tmp.p_seq = atmp
            tmp.totalprice = v.totalprice
            tmp.delprice = v.delprice
            tmp.tack = v.tack
            tmp.p_purchase = v.p_purchase


        } else {

            let totalprice = 0;
            let delprice = 0;
            let total_purchase = 0;
            let dptmp = []

            for (let i = 0; i < v.length; i++) {
                dptmp.push(v[i].delprice)
            }
            delprice = Math.max(...dptmp)

            for (let i = 0; i < dptmp.length; i++) {
                if (dptmp[i] == 0) {
                    delprice = 0
                }
            }
            for (let i = 0; i < v.length; i++) {
                let obj = {
                    p_seq: v[i].p_seq,
                    po_seq: v[i].po_seq,
                    cnt: v[i].cnt,
                    c_equip: v[i].c_equip,
                }
                atmp.push(obj)
            }

            for (let i = 0; i < v.length; i++) {

                totalprice += v[i].totalprice
                total_purchase += v[i].p_purchase
                let obj = {
                    p_seq: v[i].p_seq,
                    po_seq: v[i].po_seq,
                    cnt: v[i].cnt,
                    c_equip: v[i].c_equip,
                    totalprice: totalprice,
                    tack: v[0].tack,
                    p_purchase: total_purchase,
                    delprice: delprice,
                    default: JSON.stringify(atmp),
                }


                insertArr.push(obj);
            }
            tmp.p_seq = JSON.stringify(atmp);
            tmp.totalprice = totalprice
            tmp.delprice = delprice
            tmp.tack = v[0].tack
            tmp.p_purchase = total_purchase
        }

        proObjRealFinalarr.push(tmp)
    })
}

//상품 정보 가져오는거
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
            console.log('dfadta', data);
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

function delTemInfo(dt_seq) {
    var info = [];
    var obj = new Object();
    obj.dt_seq = dt_seq;
    $.ajax({
        url: SERVER_AP + "/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'delivery_template',
            common: obj,
        },
        success: function(data) {

            if (data.length != 0) {
                var v = data[0]
                var type;
                if (v.dt_calc == 'Y') {
                    type = '묶음상품으로 배송비 설정'
                } else {
                    type = '개별상품으로 배송비 설정'
                }

                if (v.dt_type == '유료') {
                    info = `${v.dt_del_company} / ` + type + " ( " + comma(v.dt_type_text) + "원 )";
                } else if (v.dt_type == '무료') {
                    info = `${v.dt_del_company} / ` + type + "( 무료 )";
                } else if (v.dt_type == '조건부배송비') {
                    info = `${v.dt_del_company} / ` + type + " ( " + comma(v.dt_type_first) + v
                        .dt_type_text +
                        ' ' + comma(v.dt_type_second) + '원 )';
                }
            }

        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    return info;
}

//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////

function changeQuantityonchange(c_seq, e) {
    var obj = new Object();
    obj.c_cnt = $(e).val();
    $.ajax({
        url: SERVER_AP + "/common/update",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'cart',
            whereField: 'c_seq',
            whereValue: c_seq,
            obj: obj,
        },
        success: function(data) {
            //location.reload();
            //LoadMyCart()
            calcData();
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

function chooseDel() {
    if ($('input[name="tr-ck"]:checked').length == 0) {
        alert("상품을 한개이상 선택해주세요.")
    } else {
        if (confirm("선택하신 상품을 삭제하시겠습니까?")) {
            $.each($('input[name="tr-ck"]:checked'), function(i, v) {
                $.ajax({
                    url: SERVER_AP + "/cart/delete",
                    type: "post",
                    cache: false,
                    async: false,
                    data: {
                        seq: $(v).val()
                    },
                    success: function(data) {
                        location.reload()
                    },
                    error: function(request, status, error) {
                        console.log(error);
                    }
                });
            })
        }
    }
}

/////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////

function goBuy(method) {

    if (!user_info.u_seq && !$("#o_nonuser_name").val()) {
        alert("받으시는분 이름을 입력해주세요.")
        return
    }

    if (!user_info.u_seq && !$("#u_phone").val()) {
        alert("핸드폰번호를 입력해주세요.")
        return
    }

    if (!user_info.u_seq && !$("#o_nonuser_email").val()) {
        alert("이메일을 입력해주세요.")
        return
    }

    if (!user_info.u_seq && !$("#o_nonuser_address").val()) {
        alert("주소를 입력해주세요.")
        return
    }

    if (!user_info.u_seq && !$("#o_nonuser_address2").val()) {
        alert("상세주소를 입력해주세요.")
        return
    }

    if (!user_info.u_seq && !$("#o_pass").val()) {
        alert("비밀번호를 입력해주세요.")
        return
    }

    if (!user_info.u_seq && !regPass.test($("#o_pass").val())) {
        alert("영문, 숫자, 특수기호 조합으로 8-20자리 이상 입력해주세요.")
        return
    }

    if (!user_info.u_seq && $("#o_pass").val() != $("#o_pass2").val()) {
        alert("비밀번호확인을 동일하게 입력해주세요.")
        return
    }


    if (confirm("결제 하시겠습니까?")) {
        let date = new Date();
        let ordernum =
            `${date.getFullYear()}${date.getMonth()}${date.getDay()}${date.getHours()}${date.getMinutes()}-${Math.random().toString(16).substr(2, 9)}`

        let person = ``
        let phone = ``
        let address = ``
        let request = ``


        if (user_info) {
            person = delinfoArr.dl_person
            phone = delinfoArr.dl_phone
            address = delinfoArr.dl_address + ' ' + delinfoArr.dl_address_detail
            request = delinfoArr.dl_request
        } else {
            person = $("#o_nonuser_name").val()
            phone = $('#u_phone_1').val() + $('#u_phone').val()
            address = $("#o_nonuser_address").val() + $("#o_nonuser_address2").val()
        }


        let m_info_obj = {
            o_num: ordernum,
            p_seq: JSON.stringify(atmp),
            u_seq: user_info.u_seq || ' ',
            o_total_price: totalPrice,
            o_del_price: delivery_price,
            o_date: currentDate(),
            o_nonuser_name: $("#o_nonuser_name").val(),
            o_nonuser_address: $("#o_nonuser_address").val(),
            o_nonuser_address2: $("#o_nonuser_address2").val(),
            o_phone: phone,
            o_nonuser_email: $('#o_nonuser_email').val(),
            o_password: $('#o_pass').val(),
            o_request: request,
            point: $("#point_input").val(),
            coupon_dis: coupon_dis,
            proObjRealFinalarr: JSON.stringify(proObjRealFinalarr),
            uc_seq: uc_seq,
            insertArr: insertArr,

        }
        sessionStorage.setItem('m_info_obj', JSON.stringify(m_info_obj));




        // IMP.request_pay(param, callback) 결제창 호출
        IMP.request_pay({ // param
            pg: "html5_inicis.MOIlidot88",
            pay_method: method,
            merchant_uid: ordernum,
            name: pname.length == 1 ? pname[0] : pname[0] + `외 ${pname.length-1}건`,
            amount: totalPrice + delivery_price - setDcMoney,
            //amount: 101,
            buyer_email: user_info.u_email || $("#o_nonuser_email").val(),
            buyer_name: person,
            buyer_tel: phone,
            buyer_addr: address,
            buyer_postcode: "01181",
            m_redirect_url: "https://lidot.co.kr:90/payment_m.php", // 예: https://www.myservice.com/payments/complete/mobile
        }, function(rsp) { // callback


            if (rsp.success) { // 결제 성공 시: 결제 승인 또는 가상계좌 발급에 성공한 경우
                // console.log("rsp >>>",rsp);
                // jQuery로 HTTP 요청

                $.each(insertArr, function(i, v) {
                    $.ajax({
                        url: SERVER_AP + "/order/payments",
                        type: "POST",
                        async: false,
                        data: {
                            imp_uid: rsp.imp_uid,
                            merchant_uid: rsp.merchant_uid,
                            amount: rsp.paid_amount,
                            o_num: ordernum,
                            p_seq: JSON.stringify(atmp),
                            u_seq: user_info.u_seq || ' ',
                            o_total_price: totalPrice,
                            o_del_price: delivery_price,
                            o_date: currentDate(),
                            o_nonuser_name: $("#o_nonuser_name").val(),
                            o_nonuser_address: $("#o_nonuser_address").val(),
                            o_nonuser_address2: $("#o_nonuser_address2").val(),
                            o_phone: phone,
                            o_nonuser_email: $('#o_nonuser_email').val(),
                            o_password: $('#o_pass').val(),
                            o_request: request,
                            point: $("#point_input").val(),
                            coupon_dis: coupon_dis,
                            proObjRealFinalarr: JSON.stringify(proObjRealFinalarr),
                            apply_num: rsp.apply_num,
                            bank_name: rsp.bank_name,
                            card_name: rsp.card_name,
                            card_number: rsp.card_number,
                            card_quota: rsp.card_quota,
                            currency: rsp.currency,
                            pay_method: rsp.pay_method,
                            pg_type: rsp.pg_type,
                            vbank_date: rsp.vbank_date,
                            vbank_holder: rsp.vbank_holder,
                            vbank_name: rsp.vbank_name,
                            vbank_num: rsp.vbank_num,
                            p_seq_new: v.p_seq,
                            po_seq: v.po_seq,
                            p_cnt: v.cnt,
                            c_equip: v.c_equip,
                            u_type: user_info.u_type,

                        },
                        success: function(data) {

                            if (data.status === "success" || data.status ===
                                "vbankIssued") {

                                $.ajax({
                                    url: SERVER_AP + "/admin/common/deleteCart",
                                    type: "post",
                                    cache: false,
                                    async: false,
                                    data: {
                                        table: 'cart',
                                        field: 'p_seq',
                                        seq: v.p_seq || randomseq,
                                    },
                                    success: function(data) {
                                        goKaKao(phone, currentDate(), person,
                                            ordernum);

                                        //몇개 구매했는지 업데이트 시켜주는 함수 왜있는지는 모르겠음

                                        userNumberUpdate(user_info.u_seq,
                                            'u_buy')


                                        //사용한 쿠폰 사용처리
                                        let obj_coupon = new Object();
                                        obj_coupon.uc_use = 'Y';
                                        $.ajax({
                                            url: SERVER_AP +
                                                "/common/update",
                                            type: "post",
                                            cache: false,
                                            async: false,
                                            data: {
                                                table: 'user_coupon',
                                                whereField: 'uc_seq',
                                                whereValue: uc_seq,
                                                obj: obj_coupon,
                                            },
                                            success: function(data) {},
                                            error: function(request,
                                                status, error) {
                                                console.log(error);
                                            }
                                        });


                                    },
                                    error: function(request, status, error) {
                                        console.log('123123', error);
                                    }
                                });
                            } else if (data.status === "forgery") {
                                alert("위조된 결제시도입니다!")
                                //location.href = "/"
                            }
                        },
                        error: function(request, status, error) {
                            console.log(',123', error);
                        }
                    })

                })

                if (user_info.u_seq) {
                    location.href = `/order_end.php?num=${ordernum}`
                } else {
                    location.href = `/order_end.php?num=${ordernum}`
                }



            } else {
                alert("결제에 실패하였습니다. 에러 내용: " + rsp.error_msg);
            }
        });
    }
}

// $(window).on("beforeunload", callback);
// function callback(){
//     if(!user_info.u_seq){
//         $.ajax({
//             url: SERVER_AP+"/admin/common/delete",
//             type: "post",
//             cache: false,
//             data:{
//                 table: 'cart',
//                 field:'u_seq',
//                 seq:randomseq,
//             },
//             success: function(data){},
//             error: function (request, status, error){
//                 console.log(error);
//             }
//         });
//     }
// }


function addressAdd() {
    new daum.Postcode({
        oncomplete: function oncomplete(data) {
            // console.log('zonecode is: ', data.zonecode);
            var strAddr = "(" + data.zonecode + ") " + data.address;
            $("#buyer_addr").val(strAddr)
            $("#o_nonuser_address").val(strAddr)

            checkCity(data.zonecode)
        }
    }).open();
}

function addressAdd2() {
    new daum.Postcode({
        oncomplete: function oncomplete(data) {
            // console.log('zonecode is: ', data.zonecode);
            var strAddr = "(" + data.zonecode + ") " + data.address;
            $("#direct_address").val(strAddr)

        }
    }).open();
}

//배송지정보있는지확인
function isdelLocation() {
    var num = 0;
    var obj = new Object();
    obj.dl_useq = user_info.u_seq;
    obj.dl_check = 'Y';
    $.ajax({
        url: SERVER_AP + "/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'delivery_location',
            common: obj,
        },
        success: function(data) {
            num = data.length
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    return num;
}


function goKaKao(phone, order_date, name, order_num) {

    var to = phone;
    var order_date = order_date;
    var name = name;
    var order_num = order_num;

    $.ajax({
        type: "POST",
        cache: false,
        url: SERVER_AP + '/kakao/allimtalk2',
        data: {
            to: to,
            order_date: order_date,
            name: name,
            order_num: order_num,
        },
        success: function(data) {
            console.log(data);
        },
        error: function(request, status, error) {
            console.log("code:" + request.status + "\n" + "message:" + request.responseText + "\n" +
                "error:" + error);
        },
    });
}
$('#o_pass').keyup(function() {
    //regPass.test($("#o_pass").val()
    if ($('#o_pass').val()) {
        if ($('#o_pass').val() == $('#o_pass2').val()) {
            if (regPass.test($("#o_pass").val())) {
                $('.pass_text').html('비밀번호가 일치합니다.');
                $('.pass_text').removeClass('text-danger');
                $('.pass_text').addClass('text-primary');
            } else {
                $('.pass_text').html('<div>영문, 숫자, 특수기호 조합으로</div><div>8-20자리 이상 입력해주세요.</div>');
                $('.pass_text').addClass('text-danger');
                $('.pass_text').removeClass('text-primary');
            }

        } else {
            $('.pass_text').html('비밀번호가 일치하지 않습니다.');
            $('.pass_text').addClass('text-danger');
            $('.pass_text').removeClass('text-primary');
        }

    }

});

$('#o_pass2').keyup(function() {
    if ($('#o_pass').val()) {
        if ($('#o_pass').val() == $('#o_pass2').val()) {
            $('.pass_text').html('비밀번호가 일치합니다.');
            $('.pass_text').removeClass('text-danger');
            $('.pass_text').addClass('text-primary');
            if (regPass.test($("#o_pass").val())) {
                $('.pass_text').html('비밀번호가 일치합니다.');
                $('.pass_text').removeClass('text-danger');
                $('.pass_text').addClass('text-primary');
            } else {
                $('.pass_text').html('<div>영문, 숫자, 특수기호 조합으로</div><div>8-20자리 이상 입력해주세요.</div>');
                $('.pass_text').addClass('text-danger');
                $('.pass_text').removeClass('text-primary');
            }
        } else {
            $('.pass_text').html('비밀번호가 일치하지 않습니다.');
            $('.pass_text').addClass('text-danger');
            $('.pass_text').removeClass('text-primary');
        }

    }

});

function maxLengthCheck(object) {
    if (object.value.length > object.maxLength) {
        object.value = object.value.slice(0, object.maxLength);
    }
}



function couponLength() {
    $.ajax({
        url: SERVER_AP + "/admin/coupon/my-coupon-N",
        type: "post",
        cache: false,
        data: {
            u_seq: user_info.u_seq,
        },
        success: function(data) {
            $('#coupon_count').text(data.length)
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
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
            $("#coupon_select").html('');
            if (data.length == 0) {
                var str2 = '<option value="">쿠폰을 선택해주세요.</option>';
                $("#coupon_select").append(str2);

                var nstr = '<option value="">사용가능한 쿠폰이 없습니다.</option>';
                $("#coupon_select").append(nstr);
            } else {
                $('#coupon_div').addClass('d-flex');

                var str1 = '<option value="">쿠폰을 선택해주세요.</option>';
                $("#coupon_select").append(str1);
                $.each(data, function(i, v) {
                    var content = '';
                    if (v.c_type == 1) {
                        content = '<span>' + comma(v.c_money) + '원 이상 구매시 ' + v.c_percent +
                            '%할인 최대 ' + comma(v.c_maxmoney) + '원 까지 적용</span>';
                    } else {
                        content = '<span>' + comma(v.c_money2) + '원 이상 구매시 ' + comma(v.c_discount) +
                            '원 할인</span>';
                    }

                    var str = '<option ' + ((v.c_money > totalPrice_tmp || v.c_money2 >
                            totalPrice_tmp) && 'disabled') + ' value="' + v.uc_seq + '"\
                        data-c_type="' + v.c_type + '" data-c_money="' + v.c_money + '" data-c_percent="' + v
                        .c_percent + '"\
                        data-c_maxmoney="' + v.c_maxmoney + '" data-c_money2="' + v.c_money2 + '" data-c_discount="' +
                        v.c_discount + '">' + content + '' + ((v.c_money > totalPrice_tmp || v
                            .c_money2 > totalPrice_tmp) ? ' (선택불가)' : '') + '</option>';
                    $("#coupon_select").append(str);
                });
            }
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

$("#point_input").on('change', function() {

    var val = $(this).val();

    if(val < 5000){
        alert('적립금은 최소 5000P 부터 사용 가능합니다.');
        $(this).val('0');
        return;
    }

    if(val % 1000 != 0){
        alert('적립금은 최소 1000P 단위로 사용 가능합니다.');
        $(this).val('0');
        return;
    }



    if ($(this).val() * 1 > $(this).attr('max') * 1) {
        $(this).val($(this).attr('max') * 1)
    }
    if ($(this).val() * 1 > totalPrice_tmp) {
        $(this).val(totalPrice_tmp)
    }
    if (totalPrice_coupon != 0) {
        totalPrice = totalPrice_coupon
        $("#point_input_p").text(comma(user_info.u_point * 1 - $(this).val() * 1))
        $("#account-price").text(comma(totalPrice + delivery_price) + '원')
    } else {
        totalPrice = totalPrice_tmp
        $("#point_input_p").text(comma(user_info.u_point * 1 - $(this).val() * 1))
        $("#account-price").text(comma(totalPrice + delivery_price) + '원')
    }
    calcData()
});

var totalPrice_coupon = 0;
var viewCouponPrice = 0;

//쿠폰 입력시 계산처리
$(document).on("change", "#coupon_select", function() {
    totalPrice = totalPrice_tmp

    uc_seq = $(this).val()


    if ($(this).val()) {
        let c_type = $(this).find(':selected').attr('data-c_type')
        let c_money = $(this).find(':selected').attr('data-c_money')
        let c_percent = $(this).find(':selected').attr('data-c_percent')
        let c_maxmoney = $(this).find(':selected').attr('data-c_maxmoney')
        let c_money2 = $(this).find(':selected').attr('data-c_money2')
        let c_discount = $(this).find(':selected').attr('data-c_discount')
        viewCouponPrice = c_discount;
        if (c_type == 1) {
            if (totalPrice >= c_money) {
                if (totalPrice - totalPrice * c_percent / 100 >= c_maxmoney) {
                    coupon_dis = c_maxmoney
                } else {
                    coupon_dis = totalPrice * c_percent / 100
                }
            }
        } else if (c_type == 2) {
            if (totalPrice >= c_money2) {
                coupon_dis = c_discount
            }
        }

        totalPrice_coupon = totalPrice
    } else {
        coupon_dis = 0
        totalPrice_coupon = 0
    }

    if (coupon_dis != 0) {
        $('.use_coupon').html(comma(coupon_dis))
    }

    calcData()
})

$(function() {
    $.each($('.deltem-table'), function(i, v) {
        if ($(v).find('input[name=tr-ck]').length == $(v).find('input[name=tr-ck]:checked').length) {
            $(v).find('input[class=all-ck]').prop("checked", true)
        } else {
            $(v).find('input[class=all-ck]').prop("checked", false)
        }
    })
})

// $(document).on("click",".all-ck",function(){
//     $(this).closest('table').find('.tr-ck').prop("checked",$(this).prop("checked"))
//
//     $.each($(this).closest('table').find('.tr-ck'), function(i,v){
//         console.log('$(this).prop("checked") >>',$(this).prop("checked"));
//         var obj = new Object();
//         obj.c_check = $(this).prop("checked");
//         console.log("obj >>",obj);
//         console.log("$(v).val()>>",$(v).val());
//         console.log("@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@");
//         $.ajax({
//             url: SERVER_AP+"/common/update",
//             type: "post",
//             cache: false,
//             async:false,
//             data:{
//                 table: 'cart',
//                 whereField:'c_seq',
//                 whereValue:$(v).val(),
//                 obj:obj,
//             },
//             success: function(data){},
//             error: function (request, status, error){
//                 console.log(error);
//             }
//         });
//     })
//
//     //location.reload();
// })

$(document).on("click", ".tr-ck", function() {
    var obj = new Object();

    let val = ''
    if ($(this).attr('data-check') == 1) {
        val = 0
    } else {
        val = 1
    }

    obj.c_check = val;
    $.ajax({
        url: SERVER_AP + "/common/update",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'cart',
            whereField: 'c_seq',
            whereValue: $(this).val(),
            obj: obj,
        },
        success: function(data) {
            // location.reload();
            // LoadMyCart()
            calcData();
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
})


if ($(window).width() < 780) {} else {
    $('.pc_none').remove();
}

$(window).resize(function() {
    if ($(window).width() < 780) {} else {
        $('.pc_none').remove();
    }
});


function loadTackbea(p_seq) {
    let result = ``
    $.ajax({
        url: SERVER_AP + "/order/product-t",
        type: "post",
        cache: false,
        async: false,
        data: {
            p_seq: p_seq,
        },
        success: function(data) {
            var obj = new Object();
            obj.dt_seq = data;
            $.ajax({
                url: SERVER_AP + "/admin/common/condition",
                type: "post",
                cache: false,
                async: false,
                data: {
                    table: 'delivery_template',
                    common: obj,
                },
                success: function(data2) {
                    if (data2.length != 0) {
                        console.log('data2', data2);
                        var v = data2[0]
                        result = v.dt_del_company
                    }

                },
                error: function(request, status, error) {
                    console.log(error);
                }
            });
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    return result
}


function loadTackbeaCalc(p_seq) {
    let result = ``
    $.ajax({
        url: SERVER_AP + "/order/product-t",
        type: "post",
        cache: false,
        async: false,
        data: {
            p_seq: p_seq,
        },
        success: function(data) {
            var obj = new Object();
            obj.dt_seq = data;
            $.ajax({
                url: SERVER_AP + "/admin/common/condition",
                type: "post",
                cache: false,
                async: false,
                data: {
                    table: 'delivery_template',
                    common: obj,
                },
                success: function(data2) {
                    if (data2.length != 0) {
                        var v = data2[0]
                        result = v.dt_calc
                    }

                },
                error: function(request, status, error) {
                    console.log(error);
                }
            });
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    return result
}


var delinfoArr = []

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

            $('#buyer_addr').val(data[0].dl_address);
            $('#buyer_addr_d').val(data[0].dl_address_detail);


            $('#buyer_title').val(data[0].dl_title)
            $('#buyer_name').val(data[0].dl_person)
            let dl_phone = data[0].dl_phone;

            $('#buyer_tel').val(data[0].dl_phone)
            if (data[0].dl_request_direct == 'N') {
                $('#dl_request').val(data[0].dl_request)
            } else {
                $('#dl_request').val('직접입력')
                $('#dl_request_direct_input').val(data[0].dl_request)
            }
            //도서산간 지역 체크
            checkCity(data[0].dl_num)
            delinfoArr = data[0]
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
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




//
// $(function(){
//     loadBeelKey()
// })
// function loadBeelKey(){
//     $.ajax({
//         url: 'https://stdpay.inicis.com/stdjs/INIStdPay.js',
//         type: "post",
//         cache: false,
//         data:{},
//         success: function(data){
//             console.log("data >>",data);
//         },
//         error: function (request, status, error){
//             console.log(error);
//         }
//     });
// }


//도서산간 체크

function checkCity(num) {
    let add_money = 0;
    var obj = new Object();
    obj.da_num = num;
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'delivery_area',
            common: obj,
        },
        success: function(data) {
            console.log('도서산간 체ㅐ크', data);
            if (data.length != 0) {
                add_money = data[0].da_addmoney;
                let lastMoney = 0;
                let totalPrice2 = 0;
                let money = $('#all-pro-del-price').attr('data-money');
                lastMoney = money * 1 + add_money * 1
                delivery_price = delivery_price * 1 + lastMoney;

                totalPrice2 = totalPrice * 1 + lastMoney


                if (add_money != 0) {
                    $('#all-pro-del-price').html('도서산간지역 + ' + comma(lastMoney) + '원')
                } else {
                    $('#all-pro-del-price').html(comma(lastMoney) + '원')
                }
                $('#account-price').html(comma(totalPrice2) + '원')

            } else {
                let lastMoney = 0;
                let totalPrice2 = 0;
                let money = $('#all-pro-del-price').attr('data-money');
                lastMoney = money * 1 + add_money * 1
                delivery_price = delivery_price * 1;
                totalPrice2 = totalPrice * 1 + lastMoney

                if (add_money != 0) {
                    $('#all-pro-del-price').html('도서산간지역 + ' + comma(lastMoney) + '원')
                } else {
                    $('#all-pro-del-price').html(comma(lastMoney) + '원')
                }
                $('#account-price').html(comma(totalPrice2) + '원')
            }
            console.log('delivery_price', delivery_price);
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });

    return add_money;
}

$('input[name="del-radio"]').click(function() {
    if ($(this).val() == 'new') {
        $('.del_input').val('');
        $('.del_wrap').removeClass('d-none');
    } else {
        loadHomedata();
        $('.del_wrap').addClass('d-none');
    }
})

$('#dl_request').change(function() {
    if ($(this).val() == '직접입력') {
        $('#dl_request_direct_input').removeClass('d-none');
    } else {
        $('#dl_request_direct_input').addClass('d-none');
    }
})


//맨처음 들어왔을경우 배송지역 세팅
function setDeliveryInfo() {

    var obj = new Object();
    obj.dl_address = $('#buyer_addr').val();
    obj.dl_address_detail = $('#buyer_addr_d').val();
    obj.dl_title = $('#buyer_title').val();
    obj.dl_person = $('#buyer_name').val();
    obj.dl_phone = $('#buyer_tel').val();

    if ($('#dl_request').val() == '직접입력') {
        obj.dl_request = $('#dl_request_direct_input').val()
        obj.dl_request_direct = 'Y';
    } else {
        obj.dl_request = $('#dl_request').val();
        obj.dl_request_direct = 'N';
    }
    console.log('obj : ', obj)
    $.ajax({
        url: SERVER_AP + '/api/update',
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'delivery_location',
            obj: obj,
            field: 'dl_seq',
            id: delinfoArr.dl_seq
        },

        success: function(data) {
            console.log('data : ', data)
            alert('기본 배송지로 설정되었습니다.');
            location.reload();
        },
        error: function(xhr, textStatus, errorThrown) {
            console.log(xhr, textStatus, errorThrown);
        }
    });
}

function loadPointData() {
    var obj = new Object();
    obj.u_seq = user_info.u_seq;
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'user',
            common: obj,
        },
        success: function(data) {
            let v = data[0];
            $("#point_input").attr('max', v.u_point)
            $('#point_input_p').html(v.u_point)
            user_info.u_point = v.u_point

        },
        error: function(request, status, error) {
            console.log(error);
        }
    });

}
let setDcMoney = 0;

//값 바뀔경우 최종으로 찍어주는 함수
function calcData() {
    setDcMoney = coupon_dis * 1 + $("#point_input").val() * 1
    $('.dc_money').html(comma(setDcMoney))
    let lastMoney = totalPrice * 1 + delivery_price * 1 - setDcMoney * 1;
    console.log('xxx', lastMoney);
    $('#account-price').html(comma(lastMoney) + '원')
}
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
