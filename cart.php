<!-- Style CSS -->
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>

<!-- CSS -->
<style media="screen">

</style>
<!-- Header Area End -->
<link href="/css/cart.css" rel="stylesheet">
<!-- Breadcumb Area -->
<div class="breadcrumb-wrap">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <ol class="breadcrumb mt-2 bg-white">
                    <li class="breadcrumb-item"><a href="/">홈</a></li>
                    <li class="breadcrumb-item"><a href="cart.php">장바구니</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb Area -->

<!-- Wishlist Table Area -->
<div class="wishlist-table  clearfix">
    <div class="container mt-md-5">
        <h4 class="page-title text-dark text-center mb-4 font-weight-bold">CART</h4>

        <div class="u_wrap d-none bg_f4">
            <div class="give_info ">
                <div class="l w-100 d-flex align-items-center p-4">
                    <div class="px-md-3 px-2 py-md-4 py-2 w-50 ">
                        <p class="text-black mb-0"><span class="u_name font-weight-bold"></span> 회원님은 <span
                                class="font-weight-bold">[</span><span class="u_rank font-weight-bold"></span><span
                                class="font-weight-bold">]</span> 등급 회원이십니다.</p>
                    </div>
                    <div class="gray_bar">

                    </div>

                    <div class="px-md-3 px-2 py-md-4 py-2 d-flex align-items-center w-50 justify-content-center">
                        <div class="text-center mr-4 mr-md-5">
                            <div class="fs-11">
                                가용적립금
                            </div>
                            <span class="u_point number_text font-weight-bold"></span>원
                        </div>
                        <div class="text-center">
                            <div class="fs-11">
                                쿠폰
                            </div>
                            <span class="u_coupon number_text font-weight-bold"></span>개
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-flex col-12 align-items-center mt-3 mb-1 justify-content-between">
                <p class="px-3 mb-0 text-black">일반상품 (<span class="total"></span>)</p>
                <div class="pointer" onclick="chooseAll()">
                    전체선택
                </div>
            </div>

            <div class="col-12">
                <div class="cart-table wishlist-table">
                    <div class="table-responsive cart_div_pc" id="cart-table-list">
                        <!-- <div class="flex pc_none">
                                <div class="borderOne" style="width:10%;">
                                    <input type="checkbox" />
                                </div>
                                <div class="borderOne" style="width:30%;">
                                    상품명
                                </div>
                                <div class="borderOne" style="width:10%;">
                                    수량
                                </div>
                                <div class="borderOne" style="width:30%;">
                                    상품가격
                                </div>
                                <div class="borderOne" style="width:20%;">
                                    배송비
                                </div>
                            </div>
                            <div class="m_cart_div  flex pc_none">

                            </div> -->
                    </div>

                    <div class="cart_div_m" id="cart-table-list-m">

                        <!-- <div class="my-2 p-2 border">
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                                    <input type="checkbox" name="" value="">
                                    <p class="mb-0">상품명</p>
                                </div>
                                <div class="d-flex align-items-center py-2">
                                    <div class="mr-2"></div>
                                    <div class="text-left">
                                        <p class="mb-1">가격 : 12323123</p>
                                        <p class="mb-1">배송비 : 12323123</p>
                                        <p class="mb-1">수량<input type="number" name="" min="0" value="" class="form-control form-control-sm d-inline-block ml-2" style="width:70px;"></p>
                                    </div>
                                </div>
                            </div> -->

                    </div>


                </div>
                <div class="cart-footer d-flex justify-content-between align-items-center bg_f4 p-4"
                    style="height:90px;">
                    <div class="fs-11">
                        선택상품을
                        <span class=" ml-2 normal_btn fs-11 bg-white" onclick="chooseDel()">선택삭제</span>
                        <span class=" normal_btn fs-11 bg-white " onclick="goBuy(0);">상품주문</span>
                    </div>
                </div>

                <div id="account-div" class="mt-4 mb-3">
                    <table class="table table-bordered text-center mb-0">
                        <thead>
                            <tr>
                                <th>총 상품금액</th>
                                <th scope="col">총 배송비</th>
                                <th scope="col">결제예정금액</th>
                            </tr>
                        </thead>
                        <tr>
                            <td id="all-pro-price" style="font-size:15px;" class="font-weight-bold"></td>
                            <td id="all-pro-del-price" style="font-size:15px;" class="font-weight-bold"></td>
                            <td id="account-price" style="font-size:18px;" class="font-weight-bold account-price"></td>
                        </tr>
                    </table>
                </div>

                <div class="">
                    <div class=" my-5 cart_ff_wrap">
                        <div>
                            <div class="">
                                <div class="normal_btn   mr-2" style="width:125px;" onclick="emptyCart();">장바구니 비우기
                                </div>
                                <div class="normal_btn  " style="width:125px;" onclick="location.href='/';">쇼핑 계속하기
                                </div>

                            </div>
                            <div class="mt-2" style="width:262px">
                                <div class="normal_btn px-4 py-2 w-100 text-center" id="estimateShow">견적서출력</div>
                            </div>
                        </div>

                        <div>
                            <div class="font-weight-bold f-17 justify-content-between d-flex pb-2 border-bottom py-2">
                                <div class="">
                                    총 결제금액
                                </div>
                                <div>
                                    <div class="account-price">

                                    </div>
                                </div>

                            </div>

                            <div class="mt-2 " style="width:262px; height:50px">
                                <div class="normal_btn_dark px-4 f-17 d-flex font-weight-bold justify-content-center align-items-center py-2 w-100 h-100 text-center"
                                    onclick="goBuy(0);">주문하기</div>
                            </div>

                        </div>


                    </div>
                </div>


                <div class="text-right mb-5">

                </div>


                <div class="use_info mb-5">
                    <div class="font-weight-bold bt p-3">이용안내</div>
                    <div class="p-3">
                        <p class="text-black">장바구니 이용안내</p>

                        <p class="text-black mb-1">1.해외배송 상품과 국내배송 상품은 함께 결제하실 수 없으니 장바구니 별로 따로 결제해 주시기 바랍니다.</p>
                        <p class="text-black mb-1">2.해외배송 가능 상품의 경우 국내배송 장바구니에 담았다가 해외배송 장바구니로 이동하여 결제하실 수 있습니다.</p>
                        <p class="text-black mb-1">3.선택하신 상품의 수량을 변경하시려면 수량변경 후 [변경] 버튼을 누르시면 됩니다.</p>
                        <p class="text-black mb-1">4.[쇼핑계속하기] 버튼을 누르시면 쇼핑을 계속 하실 수 있습니다.</p>
                        <p class="text-black mb-1">5.장바구니와 관심상품을 이용하여 원하시는 상품만 주문하거나 관심상품으로 등록하실 수 있습니다.</p>
                        <p class="text-black">6.파일첨부 옵션은 동일상품을 장바구니에 추가할 경우 마지막에 업로드 한 파일로 교체됩니다.</p>

                        <p class="text-black">무이자할부 이용안내</p>

                        <p class="text-black mb-1">1.상품별 무이자할부 혜택을 받으시려면 무이자할부 상품만 선택하여 [주문하기] 버튼을 눌러 주문/결제 하시면 됩니다.</p>
                        <p class="text-black mb-1">2.[전체 상품 주문] 버튼을 누르시면 장바구니의 구분없이 선택된 모든 상품에 대한 주문/결제가 이루어집니다.</p>
                        <p class="text-black mb-1">3.단, 전체 상품을 주문/결제하실 경우, 상품별 무이자할부 혜택을 받으실 수 없습니다.</p>
                        <p class="text-black mb-1">4.무이자할부 상품은 장바구니에서 별도 무이자할부 상품 영역에 표시되어, 무이자할부 상품 기준으로 배송비가 표시됩니다.실제
                            배송비는 함께 주문하는 상품에 따라 적용되오니 주문서 하단의 배송비 정보를 참고해주시기 바랍니다.</p>

                    </div>
                </div>

                <div class="col-12 px-0 ml-auto mt-5" id="nonuserdiv">
                    <table class="table border text-center">
                        <tr>
                            <th class="f_td">받으시는분 이름</th>
                            <td>
                                <input type="text" name="" value="" class="form-control form-control-sm"
                                    id="o_nonuser_name">
                            </td>
                        </tr>
                        <tr>
                            <th>번호</th>
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
                            <th>이메일</th>
                            <td>
                                <input type="email" name="" value="" class="form-control form-control-sm"
                                    placeholder="e-mail" id="o_nonuser_email">
                            </td>
                        </tr>
                        <tr>
                            <th>주소</th>
                            <td>
                                <input type="text" name="" value="" class="form-control form-control-sm" readonly
                                    placeholder="클릭하여 주소를 입력해주세요." onclick="addressAdd()" id="o_nonuser_address">
                            </td>
                        </tr>
                        <tr>
                            <th>상세 주소</th>
                            <td>
                                <input type="text" name="" value="" class="form-control form-control-sm"
                                    id="o_nonuser_address2">
                            </td>
                        </tr>
                        <tr>
                            <th>비밀번호</th>
                            <td>
                                <input type="password" name="" value="" maxlength="20"
                                    class="form-control form-control-sm" id="o_pass">
                            </td>
                        </tr>

                        <tr>
                            <th>
                                비밀번호 확인
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
            </div>
        </div>
    </div>
</div>

<!-- JS  -->
<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script type="text/javascript" src="https://cdn.iamport.kr/js/iamport.payment-1.2.0.js"></script>
<script type="text/javascript">
$("#estimateShow").click(function() {
    window.open(`estimate.php?u_seq=${user_info.u_seq}`)
})

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

var randomseq;
var allpseq = [];

var regPass = /^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,25}$/;

var firstcnt = '';

var IMP = window.IMP; // 생략 가능
IMP.init("imp20004137"); // 예: imp00000000

$(function() {



    if ($(window).width() > 768) {
        $(".cart_div_m").remove()
    } else {
        $(".cart_div_pc").remove()
    }

    if (!user_info.u_seq) {
        $("#nonuserdiv2").remove()
        $("#nonuserdiv").remove()
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
    } else {
        $('.u_name').text(user_info.u_name);
        $('.u_point').text(comma(user_info.u_point));
        $('.u_rank').text(user_info.u_rank);
        $('.u_wrap').removeClass('d-none');
        $("#nonuserdiv").remove()
        LoadMyCouponlist()
        $("#point_input_p").text(user_info.u_point)
        $("#point_input").attr('max', user_info.u_point)
    }

    LoadMyCart();

    loadHomedata()
})


$(document).on({
    mouseenter: function() {
        $(this).closest(".deltem-table").find('.delinfobox').addClass('on')
    },
    mouseleave: function() {
        $(this).closest(".deltem-table").find('.delinfobox').removeClass('on')
    }
}, ".fa-question-circle");


function LoadMyCart() {
    $.ajax({
        url: SERVER_AP + "/cart/list",
        type: "post",
        cache: false,
        async: false,
        data: {
            u_seq: user_info.u_seq || randomseq,
        },
        success: function(data) {
            console.log(';111', data);
            $("#cart-table-list").html('');
            $("#cart-table-list-m").html('');
            if (data.rows.length == 0) {
                var nstr = `<div class="py-5 text-center">장바구니가 비어있습니다.</div>`;
                $("#cart-table-list, #cart-table-list-m").append(nstr);
                $(".cart-footer, .none_cart_div, #account-div, #nonuserdiv, #nonuserdiv2").remove();
            } else {
                firstcnt = data.rows[0].c_check
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

                if ($(window).width() < 768) {
                    var mstr =
                        `<table class="table table-bordered mb-4 deltem-table deltem-table` +
                        dtv + `">\
                                        <tbody>\
                                            <tr>\
                                                <td>\
                                                    <div class="cart-tbody` + dtv +
                        `"></div>\
                                                </td>\
                                            </tr>\
                                        </tbody>\
                                        <tr class="py-3 text-right overflow-hidden" style="background:#f5f5f5;">\
                                            <td colspan="7" class="table-account"><div class="border p-2 mb-2 bg-white">` +
                        delteminfo + `</div>\
                                            상품구매금액 : \
                                            <span class="totalprice-span totalprice-span` + dtv +
                        `"></span> + 배송비 : <span class="del-all-span del-all-span` + dtv + `">\
                                            </span> = <br class="d-md-none">합계 : <span class="totalprice-all-span totalprice-all-span` +
                        dtv + `"></span> 원</td>\
                                        </tr>\
                                    </table>`;
                    $("#cart-table-list-m").append(mstr);
                } else {
                    var str =
                        `<table class="table table-bordered mb-4 deltem-table deltem-table` +
                        dtv + `">\
                                        <thead class="">\
                                            <tr>\
                                                <th scope="col" style="width:50px;"></th>\
                                                <th scope="col" style="width:150px;">이미지</th>\
                                                <th scope="col" style="width:30%;">상품정보</th>\
                                                <th scope="col" style="width:80px;">수량</th>\
                                                <th scope="col" style="width:160px;">상품구매금액</th>\
                                                <th scope="col" style="width:160px;">배송비</th>\
                                                <th scope="col">선택</th>
                                            </tr>\
                                        </thead>\
                                        <tbody class="cart-tbody` + dtv +
                        `"></tbody>\
                                        <tr class="py-3 text-right overflow-hidden" style="background:#f5f5f5;">\
                                            <td colspan="7" class="table-account"><span class="delinfobox border px-3 py-2">` +
                        delteminfo + `</span>\
                                            <i class="far fa-question-circle` + dtv + ` fa-question-circle text-primary pointer"></i> 상품구매금액 : \
                                            <span class="totalprice-span totalprice-span` + dtv +
                        `"></span> + 배송비 : <span class="del-all-span del-all-span${dtv}">
                                            </span> = <br class="d-md-none">합계 : <span class="totalprice-all-span totalprice-all-span${dtv}"></span> 원</td>
                                        </tr>
                                    </table>`;
                    $("#cart-table-list").append(str);
                }

            })
            ////////////////////////////////////////////////////////////////////////
            $('.total').text(data.rows.length)
            $.each(data.rows, function(ci, cv) {
                ////////////// 사업자회원시 도매가 가격 적용 ////////////////////
                if (cv.dt_seq_up && user_info.u_type == '사업자회원' && user_info.u_status == 1) {
                    cv.dt_seq = cv.dt_seq_up
                    cv.deltem = cv.deltem_up
                }

                var onclickVal
                var onclickText;
                var colorYellow
                var checkBookData = checkBook(cv.p_seq);

                if (checkBookData) {
                    onclickVal = `deleteWist(${cv.p_seq})`;
                    onclickText = '관심상품해제';
                    colorYellow = 'color:#d31c0c';
                } else {
                    onclickVal = `Wishlist(${cv.p_seq})`;
                    onclickText = '관심상품';
                }

                ////////////// 사업자회원시 도매가 가격 적용 END ////////////////////

                let tmpObjarr = new Object()
                let opYn = proInfo(cv.p_seq).p_option

                if (opYn == 'Y') { // 옵션상품 일때
                    var opinfo = opInfo(cv.po_seq)
                    if (!opinfo) {
                        // alert("변경된 옵션값이 있습니다. 관리자에게 문의하세요.")
                        return
                    }
                    var proinfo = proInfo(opinfo.p_seq)
                    opimg = JSON.parse(proinfo.img)

                    let equip = ''
                    let equip_price = 0
                    if (cv.c_equip) {
                        if (cv.c_equip != cv.po_seq) {
                            equip = ` / ${opInfo(cv.c_equip).name}`
                            equip_price = opInfo(cv.c_equip).price * 1
                        }
                    }

                    // 만약 옵션 선택 해달라고하면
                    // onchange="optionChange(${cv.c_seq}, this)"
                    allpseq.push(cv.c_seq)


                    if ($(window).width() < 768) {
                        var mopstr = `<div class="check_tr my-2 p-2 border" data-dt=` + proinfo
                            .dt_seq + `">
                                            <div class="d-flex align-items-center border-bottom pb-2">
                                                <input type="checkbox" name="tr-ck" value="` + cv.c_seq +
                            `" data-dt=` + proinfo.dt_seq + ` class="tr-ck tr-ck-${cv.c_seq}" data-check='${cv.c_check}'>
                                                <p class="mb-0 ml-3"><div class="dots text-left">` + proinfo.name + ` ${equip}</div></p>
                                                <i class="icofont-close ml-auto" onclick="cartDel(` + cv.c_seq + `)"></i>
                                            </div>
                                            <div class="d-flex align-items-center py-2">
                                                <div class="mr-3">
                                                    <img src="` + opimg[0] +
                            `" alt="Product" onclick="location.href='/product_detail.php?p_seq=` +
                            opinfo.p_seq + `'" class="pointer">\
                                                </div>
                                                <div class="text-left">
                                                    <p class="mb-1 text-black">옵션 : ${opinfo.name}</p>
                                                    <p class="text-black price_infoTd mb-1" data-price='` + ((opinfo
                                .price * 1 +
                                proinfo.price * 1) * cv.c_cnt * 1 + equip_price) + `'>가격 :
                                                    <span class="text-black price-info price-info-` + cv.c_seq +
                            `" data-c_check="` + cv.c_check + `" data-default='` + (opinfo.price *
                                1 + proinfo.price * 1 + equip_price) + `'\
                                                    data-price='` + ((opinfo.price * 1 + proinfo.price * 1) * cv
                                .c_cnt * 1 + equip_price) + `'>` + comma((opinfo.price * 1 + proinfo
                                .price * 1) * cv.c_cnt * 1 + equip_price) + `</span>원</p>
                                                    <p class="mb-1 text-black">배송비 : <span class="delTd delTd` + cv
                            .dt_seq +
                            ` delTd-cseq` + cv.c_seq + `" data-c_check="` + cv.c_check +
                            `"></span></p>
                                                    <p class="mb-1 quantity text-black justify-content-start">수량<input type="number" class="qty-text qty-text-${cv.c_seq} form-control form-control-sm d-inline-block ml-2" step="1" min="1" max="` +
                            opinfo.stock + `" name="quantity" value="` + cv.c_cnt +
                            `" onchange="changeQuantityonchange(` + cv.c_seq + `, this)" style="width:70px;"></p>
                                                    <div class="mt-3 d-none">
                                                        <select class="form-control form-control-sm op_sel" id="op_sel_${cv.c_seq}" onchange="optionChange(${cv.c_seq}, this)"  style="font-size:12px">
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>`;
                        $(".cart-tbody" + proinfo.dt_seq).append(mopstr);
                    } else {


                        var opstr = `<tr class="check_tr" data-dt=` + proinfo.dt_seq + `>\
                                            <th scope="row">\
                                                <input type="checkbox" name="tr-ck" value="` + cv.c_seq +
                            `" data-dt=` + proinfo.dt_seq + ` class="tr-ck tr-ck-${cv.c_seq}" data-check='${cv.c_check}'>\
                                            </th>\
                                            <td class="">\
                                                <img src="` + opimg[0] +
                            `" alt="Product" onclick="location.href='/product_detail.php?p_seq=` +
                            opinfo.p_seq +
                            `'" class="pointer">\
                                            </td>\
                                            <td class="text-left">\
                                                <div class="dots">${ proinfo.name + equip}</div>\
                                                <div class="text-secondary">
                                                    [${opinfo.name}]
                                                </div>
                                                <div class="mt-3 d-none">
                                                    <select class="form-control form-control-sm op_sel" id="op_sel_${cv.c_seq}" onchange="optionChange(${cv.c_seq}, this)">
                                                    </select>
                                                </div>\
                                            </td>\
                                            <td>\
                                                <div class="quantity">\
                                                    <div>\
                                                        <input type="number" class="qty-text qty-text-${cv.c_seq}" step="1" min="1" max="` +
                            opinfo.stock +
                            `" name="quantity" value="` + cv.c_cnt +
                            `" onchange="changeQuantityonchange(` + cv.c_seq + `, this)">\
                                                    </div>\
                                                </div>\
                                            </td>\
                                            <td class="price_infoTd"
                                                data-price='${((opinfo.price * 1 + proinfo.price * 1) * cv.c_cnt * 1 + equip_price)}'>
                                                <span class="price-info price-info-` + cv.c_seq + `" data-c_check="` +
                            cv.c_check + `" data-default='` + (opinfo.price * 1 + proinfo.price *
                                1 + equip_price) + `'\
                                                data-price='` + ((opinfo.price * 1 + proinfo.price * 1) * cv.c_cnt *
                                1 + equip_price) + `'>` + comma((opinfo.price * 1 + proinfo.price *
                                1) * cv.c_cnt * 1 + equip_price) + `</span>원\
                                            </td>\
                                            <td class="delTd delTd` + cv.dt_seq + ` delTd-cseq` + cv.c_seq +
                            `" data-c_check="` + cv.c_check + `"></td>
                            <td style="width:140px;" class="position-relative">
                                <div class="d-flex justify-content-center" style="flex-wrap:wrap;gqp:5px;">
                                    <div class="mb-1 normal_btn font-weight-light cart_btn" onclick="goBuy(${cv.c_seq})">주문하기</div>
                                    <span class=" normal_btn mb-1 font-weight-light" onclick="${onclickVal}">${onclickText}</span>
                                </div>
                                <div>
                                    <span class="close_btn pointer d-md-block d-none"  onclick="targetDelete(${cv.c_seq});">
                                        <i class="fa-solid fa-xmark"></i>
                                    </span>
                                </div>
                            </td>
                                        </tr>`;
                        $(".cart-tbody" + proinfo.dt_seq).append(opstr);
                    }

                    //////////////////////option 넣기 //////////////////////////
                    $.each(cv.options, function(oi, ov) {

                        let op_str =
                            `<option data-target="${ov.po_option1}" value="${ov.po_seq}">${ov.po_option1} ${ov.po_option2}</option>`
                        $("#op_sel_" + cv.c_seq).append(op_str)
                    })

                    $("#op_sel_" + cv.c_seq).val(cv.po_seq).prop("selected", true)

                    pname.push(proinfo.name)

                    if (cv.c_check) {
                        $(`.tr-ck-${cv.c_seq}`).prop("checked", true)
                    }

                    if (!user_info) {
                        $(`.qty-text-${cv.c_seq}`).attr('disabled', true)
                    }

                    tmpObjarr.tack = loadTackbea(cv.p_seq)
                    tmpObjarr.p_seq = cv.p_seq
                    tmpObjarr.po_seq = cv.po_seq
                    tmpObjarr.cnt = cv.c_cnt
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

                    allpseq.push(cv.c_seq)

                    if ($(window).width() < 768) {
                        var mprostr = `<div class="check_tr my-2 p-2 border" data-dt=` + proinfo
                            .dt_seq + `">
                                            <div class="d-flex align-items-center border-bottom pb-2">
                                                <input type="checkbox" name="tr-ck" value="` + cv.c_seq +
                            `" data-dt=` + proinfo.dt_seq + ` class="tr-ck tr-ck-${cv.c_seq}" data-check='${cv.c_check}'>
                                                <p class="mb-0 ml-3"><div class="dots text-left">` + proinfo.name + `</div></p>
                                                <i class="icofont-close ml-auto" onclick="cartDel(` + cv.c_seq + `)"></i>
                                            </div>
                                            <div class="d-flex align-items-center py-2">
                                                <div class="mr-3">
                                                    <img src="` + proimg[0] +
                            `" alt="Product" onclick="location.href='/product_detail.php?p_seq=` +
                            cv.p_seq + `'" class="pointer">\
                                                </div>
                                                <div class="text-left">
                                                    <p class="text-black price_infoTd mb-1" data-price='` + (proinfo
                                .price * 1 *
                                cv.c_cnt * 1) + `'>가격 :
                                                    <span class="text-black price-info price-info-` + cv.c_seq +
                            `" data-c_check="` + cv.c_check + `" data-default="` + proinfo.price *
                            1 + `" data-price='` + (proinfo.price * 1 * cv.c_cnt * 1) + `'>` +
                            comma(proinfo.price * 1 * cv.c_cnt * 1) + `</span>원</p>
                                                    <p class="mb-1 text-black">배송비 : <span class="mb-1 delTd delTd` +
                            cv.dt_seq +
                            ` delTd-cseq` + cv.c_seq + `" data-c_check="` + cv.c_check +
                            `"></span></p>
                                                    <p class="mb-1 quantity text-black">수량<input type="number" class="qty-text qty-text-${cv.c_seq} form-control form-control-sm d-inline-block ml-2" step="1" min="1" max="` +
                            proinfo.stock + `" name="quantity" value="` + cv.c_cnt +
                            `" onchange="changeQuantityonchange(` + cv.c_seq + `, this)" style="width:70px;"></p>
                                                </div>
                                            </div>
                                        </div>`;
                        $(".cart-tbody" + proinfo.dt_seq).append(mprostr);
                    } else {


                        var prostr = `<tr class="check_tr" data-dt=` + proinfo.dt_seq + `>
                                            <th scope="row">
                                                <input type="checkbox" name="tr-ck" value="` + cv.c_seq +
                            `" data-dt=` + proinfo.dt_seq + ` class="tr-ck tr-ck-${cv.c_seq}" data-check='${cv.c_check}'>
                                            </th>
                                            <td class="">
                                                <img src="` + proimg[0] +
                            `" alt="Product" onclick="location.href='/product_detail.php?p_seq=` +
                            cv.p_seq + `'" class="pointer">
                                            </td>
                                            <td class="text-left">
                                                <div class="dots">` + proinfo.name +
                            `</div>
                                            </td>
                                            <td>
                                                <div class="quantity">
                                                    <div>
                                                        <input type="number" class="qty-text qty-text-${cv.c_seq}" step="1" min="1" max="` +
                            proinfo.stock +
                            `" name="quantity" value="` + cv.c_cnt +
                            `" onchange="changeQuantityonchange(` + cv.c_seq + `, this)">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="price_infoTd" data-price='` + (proinfo.price * 1 * cv.c_cnt *
                                1) + `'>
                                            <span class="price-info price-info-` + cv.c_seq + `" data-default="` +
                            proinfo.price * 1 + `" data-c_check="` + cv.c_check + `" data-price='` +
                            (proinfo.price * 1 * cv.c_cnt * 1) + `'>` + comma(proinfo.price * 1 * cv
                                .c_cnt * 1) + `</span>원</td>
                                            <td class="delTd delTd` + cv.dt_seq + ` delTd-cseq` + cv.c_seq +
                            `  position-relative" data-c_check="` + cv.c_check + `">
                                                <span class="close_btn pointer"  onclick="targetDelete(${cv.c_seq});">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </span>
                                            </td>
                                            <td style="width:140px;" class="position-relative">
                                <div class="d-flex justify-content-center" style="flex-wrap:wrap;gqp:5px;">
                                    <div class="mb-1 normal_btn font-weight-light cart_btn" onclick="goBuy(${cv.c_seq})">주문하기</div>
                                    <span class=" normal_btn  mb-1 font-weight-light" onclick="${onclickVal}">${onclickText}</span>
                                </div>
                                <div>
                                    <span class="close_btn pointer d-md-block d-none"  onclick="targetDelete(${cv.c_seq});">
                                        <i class="fa-solid fa-xmark"></i>
                                    </span>
                                </div>
                            </td>
                                        </tr>`;
                        $(".cart-tbody" + cv.dt_seq).append(prostr)
                    }

                    pname.push(proinfo.name)

                    if (cv.c_check) {
                        $(`.tr-ck-${cv.c_seq}`).prop("checked", true)
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

                $('.cart-tbody' + cv.dt_seq).attr("data-type", datatype_each)
                $('.cart-tbody' + cv.dt_seq).attr("data-condition", condition_each)
                $('.cart-tbody' + cv.dt_seq).attr("data-del", price_each)
                $('.cart-tbody' + cv.dt_seq).attr("data-dt_calc", data_clac)

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
                console.log('thisdelPrice_each', thisdelPrice_each);
                $(".delTd-cseq" + cv.c_seq).text(comma(thisdelPrice_each) + '원')
                let deleteStr =
                    `<span class="close_btn pointer d-md-block d-none"  onclick="targetDelete(${cv.c_seq});">
                        <i class="fa-solid fa-xmark"></i>
                    </span>`
                $(".delTd-cseq" + cv.c_seq).append(deleteStr);
                $(".delTd-cseq" + cv.c_seq).attr('data-price', thisdelPrice_each * 1)
                $(".delTd-cseq" + cv.c_seq).attr('data-dt_calc', data_clac)


                var alldelp = 0;
                $.each($(".deltem-table" + cv.dt_seq), function(i, v) {
                    $.each($(v).find(".delTd"), function(ii, vv) {
                        if ($(vv).attr('data-c_check') == 1) {
                            alldelp += $(vv).attr('data-price') * 1
                        }
                    })
                })
                $(".del-all-span" + cv.dt_seq).text(comma(alldelp))
                $(".del-all-span" + cv.dt_seq).attr('data-price', alldelp * 1)


                $(".del-all-span" + cv.dt_seq).attr('data-dt_calc', data_clac)

                /////////////////////////
                tmpObjarr.delprice = thisdelPrice_each
                if (cv.c_check) {
                    proObjFinalarr.push(tmpObjarr)
                }
                console.log('dfd', cv.deltem);
                $.each(cv.deltem, function(di, dv) { /////////////////묶음배송비일때
                    if (dv.dt_calc == 'Y') {
                        if ($(window).width() > 768) {
                            $(".delTd" + dv.dt_seq).not($(".delTd" + dv.dt_seq).first())
                                .remove();
                            $(".delTd" + dv.dt_seq).attr('rowspan', $(".cart-tbody" + dv
                                .dt_seq).find('tr').length);
                        }

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

                        $.each($(".delTd"), function(ii, vv) {
                            if ($(vv).attr('data-c_check') == 1) {
                                if (condition) {
                                    if (datatype == '원 이하') {
                                        if (condition >= proprice) {
                                            thisdelPrice = price

                                        } else {
                                            thisdelPrice = 0
                                        }
                                    } else if (datatype == '개당') {
                                        thisdelPrice = (parseInt((quantynum - 1) /
                                            condition) + 1) * price
                                    }
                                } else {
                                    thisdelPrice = price
                                }
                            } else {
                                thisdelPrice = 0
                            }
                        })
                        console.log('thisdelPrice', thisdelPrice);
                        $.each($(".deltem-table" + dv.dt_seq), function(i, v) {
                            $.each($(v).find(".price-info"), function(ii, vv) {
                                if ($(vv).attr('data-c_check') != 1) {
                                    //thisdelPrice = 0;
                                }
                            })
                        })

                        if ($(window).width() > 768) {
                            $(".delTd" + dv.dt_seq).text(comma(thisdelPrice) + '원')
                            $(".delTd" + dv.dt_seq).attr('data-price', thisdelPrice * 1)


                            $(".del-all-span" + dv.dt_seq).text(comma(thisdelPrice))
                            $(".del-all-span" + dv.dt_seq).attr('data-price', thisdelPrice *
                                1)
                        }


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
                $(".totalprice-span" + cv.dt_seq).attr('data-price', dellallprice);

                $(".totalprice-all-span" + cv.dt_seq).text(comma(dellallprice + $(".del-all-span" +
                    cv.dt_seq).attr('data-price') * 1))
            })

            //맨밑에 총정산 테이블계산////////////////////////
            var allproPrice = 0
            $.each($(".totalprice-span"), function(i, v) {
                allproPrice += $(v).attr('data-price') * 1
            })
            $("#all-pro-price").html(
                `<span class="fs-md-20">${comma(allproPrice)}</span><span> 원</span>`)
            totalPrice = allproPrice;
            totalPrice_tmp = allproPrice;

            var alldelPrice = 0
            $.each($(".del-all-span"), function(i, v) {
                // if($(v).attr('data-dt_calc') == 'N'){
                //     alldelPrice += $(v).attr('data-price')*1
                // }
                alldelPrice += $(v).attr('data-price') * 1
            })

            $("#all-pro-del-price").html(
                `<span class="fs-md-20">+${comma(alldelPrice)}</span><span> 원</span>`)
            delivery_price = alldelPrice;

            $(".account-price").html(
                `<span class="fs-md-20">= ${comma(allproPrice+alldelPrice)}</span><span style="font-size:15px;"> 원</span>`
            )
            //////////////////////////////////////////////////


            ////////////////////////////////////////// 같은 택배사일경우 묶음설정
            let teackObj = new Object()
            let priceArr = []
            let bind_total_price = 0
            for (let i = 0; i < data.rows.length; i++) {
                teackObj[data.rows[i].deltem[0].dt_del_company] = []
            }

            for (let i = 0; i < data.rows.length; i++) {
                for (let key in teackObj) {
                    if (data.rows[i].deltem[0].dt_del_company == key && data.rows[i].deltem[0].dt_calc ==
                        'Y') {
                        teackObj[key].push(data.rows[i])
                    }
                }
            }

            //console.log("teackObj >>",teackObj);

            bind_number = 0;
            for (let key in teackObj) {
                if (teackObj[key].length > 1) {
                    bind_number++;
                }
            }

            if (data.rows.filter((v) => v.deltem[0].dt_calc == 'Y').length > 0 && bind_number > 0) {
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


                //bind_total_price = Math.max(...priceArr)
                for (let i = 0; i < priceArr.length; i++) {
                    if (priceArr[i] === 0) {
                        bind_total_price = 0
                    }
                }

                if (priceArr.length == 0) {
                    bind_total_price = 0
                }

                $.each($(".del-all-span"), function(i, v) {

                    bind_total_price += $(v).attr('data-price') * 1

                })

                $("#all-pro-del-price").text(comma(bind_total_price) + '원')

                $(".account-price").text(comma(allproPrice + bind_total_price) + '원')
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


function tt(tmpArr) {
    $.each(tmpArr, function(i, v) {
        let tmp = new Object()
        let atmp = []
        if (!Array.isArray(v)) {
            let obj = {
                p_seq: v.p_seq,
                po_seq: v.po_seq,
                cnt: v.cnt,
            }
            atmp.push(obj)
            tmp.p_seq = atmp
            tmp.totalprice = v.totalprice
            tmp.delprice = v.delprice
            tmp.tack = v.tack
            tmp.p_purchase = v.p_purchase
        } else {
            let atmp = []
            let totalprice = 0;
            let delprice = 0;
            let total_purchase = 0;
            let dptmp = []
            for (let i = 0; i < v.length; i++) {
                let obj = {
                    p_seq: v[i].p_seq,
                    po_seq: v[i].po_seq,
                    cnt: v[i].cnt,
                }
                atmp.push(obj)
                totalprice += v[i].totalprice
                total_purchase += v[i].p_purchase
                dptmp.push(v[i].delprice)
            }

            delprice = Math.max(...dptmp)

            for (let i = 0; i < dptmp.length; i++) {
                if (dptmp[i] == 0) {
                    delprice = 0
                }
            }

            tmp.p_seq = atmp
            tmp.totalprice = totalprice
            tmp.delprice = delprice
            tmp.tack = v[0].tack
            tmp.p_purchase = total_purchase
        }

        proObjRealFinalarr.push(tmp)
    })
}

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

            if (data.length == 0) {
                info = false
            } else {
                info = {
                    p_seq: data[0].p_seq,
                    stock: data[0].po_stock,
                    name: data[0].po_option1 + ' ' + data[0].po_option2,
                    price: data[0].po_price
                }
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
                info = `${v.dt_del_company} / ` + type + " ( " + comma(v.dt_type_first) + v.dt_type_text +
                    ' ' + comma(v.dt_type_second) + '원 )';
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
    if ($(e).val() == 0) {
        alert("상품을 한개이상 선택해주세요.")
        $(e).val(1)
        return
    } else {
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
                calcMoney();
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }
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
                    success: function(data) {},
                    error: function(request, status, error) {
                        console.log(error);
                    }
                });
            })
            location.reload()
        }
    }
}

function targetDelete(_target) {
    if (confirm("선택하신 상품을 삭제하시겠습니까?")) {
        $.ajax({
            url: SERVER_AP + "/cart/delete",
            type: "post",
            cache: false,
            async: false,
            data: {
                seq: _target
            },
            success: function(data) {},
            error: function(request, status, error) {
                console.log(error);
            }
        });
        location.reload()
    }

}

/////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////

function goBuy(ccseq) {

    // if(!user_info.u_seq && !$("#o_nonuser_name").val()){
    //     alert("받으시는분 이름을 입력해주세요.")
    //     return
    // }
    //
    // if(!user_info.u_seq && !$("#u_phone").val()){
    //     alert("핸드폰번호를 입력해주세요.")
    //     return
    // }
    //
    // if(!user_info.u_seq && !$("#o_nonuser_email").val()){
    //     alert("이메일을 입력해주세요.")
    //     return
    // }
    //
    // if(!user_info.u_seq && !$("#o_nonuser_address").val()){
    //     alert("주소를 입력해주세요.")
    //     return
    // }
    //
    // if(!user_info.u_seq && !$("#o_nonuser_address2").val()){
    //     alert("상세주소를 입력해주세요.")
    //     return
    // }
    //
    // if(!user_info.u_seq && !$("#o_pass").val()){
    //     alert("비밀번호를 입력해주세요.")
    //     return
    // }
    //
    // if (!user_info.u_seq && !regPass.test($("#o_pass").val())){
    //     alert("영문, 숫자, 특수기호 조합으로 8-20자리 이상 입력해주세요.")
    //     return
    // }
    //
    // if(!user_info.u_seq && $("#o_pass").val() != $("#o_pass2").val()){
    //     alert("비밀번호확인을 동일하게 입력해주세요.")
    //     return
    // }
    //
    // if(isdelLocation() == 0){
    //     alert("마이페이지에서 배송지정보를 입력해주세요.")
    //     return
    // }
    //
    // if(confirm("결제 하시겠습니까?")){
    //     let date = new Date();
    //     let ordernum = `ORD${date.getFullYear()}${date.getMonth()}${date.getDay()}${date.getHours()}${date.getMinutes()}-${Math.random().toString(16).substr(2, 9)}`
    //     // IMP.request_pay(param, callback) 결제창 호출
    //       IMP.request_pay({ // param
    //           pg: "html5_inicis",
    //           pay_method: "card",
    //           merchant_uid: ordernum,
    //           name: pname.length == 1 ? pname[0] : pname[0]+`외 ${pname.length-1}건`,
    //           //amount: totalPrice + delivery_price,
    //           amount:101,
    //           buyer_email: user_info.u_email || $("#o_nonuser_email").val(),
    //           buyer_name: delinfoArr.dl_person || $("#o_nonuser_name").val(),
    //           buyer_tel: delinfoArr.dl_phone || ($('#u_phone_1').val()+$('#u_phone').val()),
    //           buyer_addr: delinfoArr.dl_address ? (delinfoArr.dl_address + ' ' + delinfoArr.dl_address_detail) : ($("#o_nonuser_address").val() + $("#o_nonuser_address2").val()),
    //           buyer_postcode: "01181"
    //       }, function (rsp) { // callback
    //           if (rsp.success) { // 결제 성공 시: 결제 승인 또는 가상계좌 발급에 성공한 경우
    //               //console.log("rsp >>>",rsp);
    //             // jQuery로 HTTP 요청
    //             $.ajax({
    //                 url: SERVER_AP+"/order/payments",
    //                 type: "POST",
    //                 data: {
    //                     imp_uid: rsp.imp_uid,
    //                     merchant_uid: rsp.merchant_uid,
    //                     amount:rsp.paid_amount,
    //                     o_num : ordernum,
    //                     p_seq : JSON.stringify(proObjarr),
    //                     u_seq : user_info.u_seq || ' ',
    //                     o_total_price : totalPrice,
    //                     o_del_price : delivery_price,
    //                     o_date : currentDate(),
    //                     o_nonuser_name:$("#o_nonuser_name").val(),
    //                     o_nonuser_address:$("#o_nonuser_address").val(),
    //                     o_nonuser_address2:$("#o_nonuser_address2").val(),
    //                     o_phone:delinfoArr.dl_phone || ($('#u_phone_1').val()+$('#u_phone').val()),
    //                     o_nonuser_email:$('#o_nonuser_email').val(),
    //                     o_password:$('#o_pass').val(),
    //                     point:$("#point_input").val(),
    //                     coupon_dis:coupon_dis,
    //                     proObjRealFinalarr:JSON.stringify(proObjRealFinalarr),
    //                     apply_num:rsp.apply_num,
    //                     bank_name:rsp.bank_name,
    //                     card_name:rsp.card_name,
    //                     card_number:rsp.card_number,
    //                     card_quota:rsp.card_quota,
    //                     currency:rsp.currency,
    //                     pay_method:rsp.pay_method,
    //                     pg_type:rsp.pg_type,
    //                 },
    //                 success: function(data){
    //                     if(data.status === "success"){
    //                         $.ajax({
    //                             url: SERVER_AP+"/admin/common/delete",
    //                             type: "post",
    //                             cache: false,
    //                             async:false,
    //                             data:{
    //                                 table: 'cart',
    //                                 field:'u_seq',
    //                                 seq:user_info.u_seq || randomseq,
    //                             },
    //                             success: function(data){
    //                                 alert("주문이 정상적으로 접수되었습니다!")
    //                                 goKaKao(delinfoArr.dl_phone || ($('#u_phone_1').val()+$('#u_phone').val()), currentDate(), delinfoArr.dl_person || $("#o_nonuser_name").val(), ordernum);
    //
    //                                 userNumberUpdate(user_info.u_seq, 'u_buy')
    //
    //                                 let obj_coupon = new Object();
    //                                 obj_coupon.uc_use = 'Y';
    //                                 $.ajax({
    //                                     url: SERVER_AP+"/common/update",
    //                                     type: "post",
    //                                     cache: false,
    //                                     async:false,
    //                                     data:{
    //                                         table: 'user_coupon',
    //                                         whereField:'uc_seq',
    //                                         whereValue:uc_seq,
    //                                         obj:obj_coupon,
    //                                     },
    //                                     success: function(data){},
    //                                     error: function (request, status, error){
    //                                         console.log(error);
    //                                     }
    //                                 });
    //
    //                                 if(user_info.u_seq){
    //                                     location.href="/mypage.php"
    //                                 }else{
    //                                     location.href="/"
    //                                 }
    //                             },
    //                             error: function (request, status, error){
    //                                 console.log(error);
    //                             }
    //                         });
    //                     }else if(data.status === "forgery"){
    //                         alert("위조된 결제시도입니다!")
    //                         location.href="/"
    //                     }
    //                 },
    //                 error: function (request, status, error){
    //                      console.log(error);
    //                  }
    //             })
    //           } else {
    //             alert("결제에 실패하였습니다. 에러 내용: " +  rsp.error_msg);
    //           }
    //       });
    // }

    location.href = '/order.php?seq=' + ccseq
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
            $("#o_nonuser_address").val(strAddr)
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
    if ($('#o_pass').val()) {
        if ($('#o_pass').val() == $('#o_pass2').val()) {
            $('.pass_text').html('비밀번호가 일치합니다.');
            $('.pass_text').removeClass('text-danger');
            $('.pass_text').addClass('text-primary');
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




function LoadMyCouponlist() {
    $.ajax({
        url: SERVER_AP + "/admin/coupon/my-coupon-N",
        type: "post",
        cache: false,
        data: {
            u_seq: user_info.u_seq,
        },
        success: function(data) {
            console.log('LoadMyCouponlist : ', data);
            $("#coupon_select").html('');
            if (data.length == 0) {
                var str2 = '<option value="">쿠폰을 선택해주세요.</option>';
                $("#coupon_select").append(str2);

                var nstr = '<option value="">사용가능한 쿠폰이 없습니다.</option>';
                $("#coupon_select").append(nstr);

                $('.u_coupon').text('0');
            } else {


                console.log('data.length : ' + data.length);
                $('.u_coupon').text(data.length);
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

                    var str = '<option value="' + v.uc_seq + '" data-c_type="' + v.c_type +
                        '" data-c_money="' + v.c_money + '" data-c_percent="' + v.c_percent +
                        '" data-c_maxmoney="' + v.c_maxmoney + '" data-c_money2="' + v.c_money2 +
                        '" data-c_discount="' + v.c_discount + '">' + content + '</option>';
                    $("#coupon_select").append(str);
                });
            }
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

$("#point_input").on('change keyup', function() {
    if ($(this).val() * 1 > $(this).attr('max') * 1) {
        $(this).val($(this).attr('max') * 1)
    }
    if (totalPrice_coupon != 0) {
        totalPrice = totalPrice_coupon
        $("#point_input_p").text(user_info.u_point * 1 - $(this).val() * 1)
        totalPrice = totalPrice - $(this).val() * 1
        $(".account-price").text(comma(totalPrice + delivery_price) + '원')
    } else {
        totalPrice = totalPrice_tmp
        $("#point_input_p").text(user_info.u_point * 1 - $(this).val() * 1)
        totalPrice = totalPrice - $(this).val() * 1
        $(".account-price").text(comma(totalPrice + delivery_price) + '원')
    }
})

var totalPrice_coupon = 0
$(document).on("change", "#coupon_select", function() {
    totalPrice = totalPrice_tmp

    uc_seq = $(this).val()

    $("#point_input").val(0)
    $("#point_input_p").text(user_info.u_point * 1)

    if ($(this).val()) {
        let c_type = $(this).find(':selected').attr('data-c_type')
        let c_money = $(this).find(':selected').attr('data-c_money')
        let c_percent = $(this).find(':selected').attr('data-c_percent')
        let c_maxmoney = $(this).find(':selected').attr('data-c_maxmoney')
        let c_money2 = $(this).find(':selected').attr('data-c_money2')
        let c_discount = $(this).find(':selected').attr('data-c_discount')

        if (c_type == 1) {
            if (totalPrice >= c_money) {
                if (totalPrice - totalPrice * c_percent / 100 >= c_maxmoney) {
                    totalPrice = totalPrice - c_maxmoney
                    coupon_dis = c_maxmoney
                } else {
                    totalPrice = totalPrice - totalPrice * c_percent / 100
                    coupon_dis = totalPrice * c_percent / 100
                }
            }
        } else if (c_type == 2) {
            if (totalPrice >= c_money2) {
                totalPrice = totalPrice - c_discount
                coupon_dis = c_discount
            }
        }

        totalPrice_coupon = totalPrice
        $(".account-price").text(comma(totalPrice + delivery_price) + '원')
    } else {
        coupon_dis = 0
        totalPrice_coupon = 0
        $(".account-price").text(comma(totalPrice + delivery_price) + '원')
    }
})
let choose = 0;
$(function() {
    let _chk = true;
    $.each($('.deltem-table'), function(i, v) {
        if ($(v).find('input[name=tr-ck]').length == $(v).find('input[name=tr-ck]:checked').length) {
            $(v).find('input[class=all-ck]').prop("checked", true)
        } else {
            $(v).find('input[class=all-ck]').prop("checked", false)
            _chk = false;
            choose = 1;
        }
    })

    if (_chk) {
        $('#all_checked').prop("checked", true)
    }
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

    if ($(this).prop("checked") == true) {
        val = 1
    } else {
        val = 0
    }

    var obj = new Object();

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
            calcMoney();
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    let _chk = true;
    $('input[name=tr-ck]').each(function(i, v) {
        if (!$(v).is(':checked')) {
            _chk = false;
        }
    })

    if (_chk) {
        $('#all_checked').prop('checked', true);
    } else {
        $('#all_checked').prop('checked', false);
    }
})


function chooseAll() {
    let val = '';

    if (firstcnt) {
        val = 0
    } else {
        val = 1
    }

    if (choose == 0) {
        choose = 1;
    } else if (choose == 1) {
        choose = 0;
    }

    var obj = new Object();
    obj.c_check = val;

    $.each(allpseq, function(i, v) {
        $.ajax({
            url: SERVER_AP + "/common/update",
            type: "post",
            cache: false,
            async: false,
            data: {
                table: 'cart',
                whereField: 'c_seq',
                whereValue: v,
                obj: obj,
            },
            success: function(data) {},
            error: function(request, status, error) {
                console.log(error);
            }
        });
    })
    console.log('choose', choose);
    if (choose == 0) {
        $('input[name=tr-ck]').prop('checked', true);
    } else {
        $('input[name=tr-ck]').prop('checked', false);
    }



    calcMoney();

}


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
                    var v = data2[0]
                    result = v.dt_del_company
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
                    var v = data2[0]
                    result = v.dt_calc
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
            console.log('loadHomedata()');
            console.log(data);
            if(data.length){
                var address = data[0].dl_address + " " + data[0].dl_address_detail
                $('#buyer_addr').html(address)
                $('#buyer_title').html(data[0].dl_title)
                $('#buyer_name').html(data[0].dl_person)
                $('#buyer_tel').html(data[0].dl_phone)
                $('.dl_request').html(data[0].dl_request)
                delinfoArr = data[0]
            }

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

    openWin = window.open(_url, 'ORDER', 'width=' + _width + ', height=' + _height + ', left=' + _left + ', top=' +
        _top);
}

function calcMoney() {
    let totalmoney = 0;
    let delMoney = 0;
    let dtv = ""
    let beforeBtv = ""
    let divVal = 0;
    let cnt = 0;
    let proCnt = 0;
    $.each($('input[name="tr-ck"]'), function(i, v) {
        let proOneMoney = 0;
        let proOneDelMoney = 0;
        divVal = $(v).val();

        $('.totalprice-span' + dtv).html(comma(0));
        $('.totalprice-all-span' + dtv).html(comma(0))


        $('.totalprice-span' + dtv).attr('data-price', comma(0));
        $('.totalprice-all-span' + dtv).attr('data-price', comma(0))
        $('.del-all-span' + dtv).attr('data-price', comma(0));
        $('.del-all-span' + dtv).html(comma(0));


    })

    $.each($('input[name="tr-ck"]:checked'), function(i, v) {
        let proOneMoney = 0;
        let proOneDelMoney = 0;

        divVal = $(v).val();
        dtv = $(v).attr('data-dt');

        if (i == 0) {
            beforeBtv = $(v).attr('data-dt');
        }

        if (beforeBtv != $(v).attr('data-dt')) {
            beforeBtv = $(v).attr('data-dt');
            totalmoney = 0;
            delMoney = 0;
        }

        cnt = $('.qty-text-' + divVal).val();
        proOneMoney = $('.price-info-' + divVal).attr('data-default') * 1 * cnt;

        let divaPrice = 0;

        var datatype_each = $('.cart-tbody' + dtv).attr("data-type")
        var condition_each = $('.cart-tbody' + dtv).attr("data-condition") * 1
        var price_each = $('.cart-tbody' + dtv).attr("data-del") * 1;
        var data_clac = $('.cart-tbody' + dtv).attr("data-dt_calc");

        $('.price-info-' + divVal).attr('data-price', proOneMoney);
        $('.price-info-' + divVal).html(comma(proOneMoney));

        totalmoney += proOneMoney;

        if (condition_each) {
            if (datatype_each == '원 이하') {
                if (condition_each >= totalmoney) {
                    thisdelPrice_each = price_each
                } else {
                    thisdelPrice_each = 0
                }
            } else if (datatype_each == '개당') {
                thisdelPrice_each = (parseInt((quantynum_each - 1) / condition_each) + 1) * price_each
            }
        } else {
            thisdelPrice_each = price_each
        }

        $('.delTd' + dtv).html(comma(thisdelPrice_each) + '원');
        $('.del-all-span' + dtv).html(comma(thisdelPrice_each))
        $('.del-all-span' + dtv).attr('data-price', thisdelPrice_each)


        $('.totalprice-span' + dtv).attr('data-price', totalmoney);
        $('.totalprice-span' + dtv).html(comma(totalmoney));

        let lasttotalmoney = $('.totalprice-span' + dtv).attr('data-price') * 1 + $('.del-all-span' + dtv).attr(
            'data-price') * 1;
        $('.totalprice-all-span' + dtv).html(comma(lasttotalmoney))
        $('.totalprice-all-span' + dtv).attr('data-price', lasttotalmoney);
    })

    goLastCalc()

}

function goLastCalc() {
    var allproPrice = 0;
    var alldelPrice = 0;
    $.each($('.totalprice-span'), function(i, v) {
        allproPrice += $(v).attr('data-price') * 1
        $("#all-pro-price").text(comma(allproPrice) + '원')
    });

    $.each($('.del-all-span'), function(i, v) {
        alldelPrice += $(v).attr('data-price') * 1

        $("#all-pro-del-price").text(comma(alldelPrice) + '원')
    });

    var lastPrice = 0;
    lastPrice = allproPrice * 1 + alldelPrice * 1

    $('.account-price').text(comma(lastPrice) + '원')
}




function optionChange(c_seq, e) {
    if (confirm("옵션을 변경 하시겠습니까?")) {
        var obj = new Object();
        if ($(e).find(':selected').attr("data-target") == '설치방법') {
            obj.po_seq = $(e).val();
            obj.c_equip = $(e).val();
        } else {
            obj.po_seq = $(e).val();
        }
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
                LoadMyCart()
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    } else {

    }
}

function cartDel(c_seq) {
    if (confirm('해당 상품을 장바구니에서 삭제하시겠습니까?')) {
        $.ajax({
            url: SERVER_AP + "/common/delete",
            type: "post",
            cache: false,
            data: {
                table: 'cart',
                field: 'c_seq',
                seq: c_seq
            },
            success: function(data) {
                location.reload();
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }
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
                                alert("등록 되었습니다!")
                                location.reload()
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

function loadCartOne(cartSeq) {
    let obj = new Object();
    obj.u_seq = user_info.u_seq;
    obj.c_seq = cartSeq;
    let returnData = ''
    $.ajax({
        url: SERVER_AP + "/cart/listOne",
        type: "post",
        cache: false,
        async: false,
        data: {
            u_seq: user_info.u_seq,
            c_seq: cartSeq,
        },
        success: function(data) {

            returnData = data.rows[0];
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    return returnData
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
                location.reload()
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }

}


function emptyCart() {
    if (confirm('장바구니를 비우시겠습니까?')) {
        $.each($('input[name="tr-ck"]'), function(i, v) {
            $.ajax({
                url: SERVER_AP + "/cart/delete",
                type: "post",
                cache: false,
                async: false,
                data: {
                    seq: $(v).val()
                },
                success: function(data) {},
                error: function(request, status, error) {
                    console.log(error);
                }
            });
        })
        location.reload();
    }
}
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
