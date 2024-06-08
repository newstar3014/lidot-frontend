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

.border-bold-top {
    border-top: 2px solid black !important;
}

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
        max-width: 50px;
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
    .f_td {
        width: 30%;
    }
}
</style>
<!-- Header Area End -->

<!-- Breadcumb Area -->
<div class="breadcumb_area">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <h5>결제하기</h5>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">결제하기</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb Area -->

<!-- Wishlist Table Area -->
<div class="wishlist-table  clearfix">
    <div class="container mt-5">
        <div class="mb-5 div_none d-none">
            <div class="d-flex choice_btn_wrap mb-2">
                <div class="text-secondary choice_title">구매자 정보 </div>
            </div>

            <div class="where_addr border row m-0">
                <div class="p-0 text-left d-flex">
                    <div class="">
                        <div class="loca_list_title">
                            이름
                        </div>
                        <div class="loca_list_title">
                            번호
                        </div>

                    </div>
                    <div class="">
                        <div class="ml-1 loca_list_content">
                            <span id="user_name"></span>
                        </div>
                        <div class="ml-1 loca_list_content">
                            <span id="user_phone"></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row mt-3" id="nonuserdiv2">
            <div class="ml-auto col-12 mb-5">
                <div class="">
                    <div class="d-flex choice_btn_wrap mb-2">
                        <div class="text-primary choice_title">받는사람 정보 </div>
                        <div class="">
                            <span onclick="changeAddr();" class="font-10 pointer ml-3 font-weight-bold">변경</span>
                        </div>
                    </div>

                    <div class="where_addr border row m-0">
                        <div class="p-0 text-left d-flex">
                            <div class="">
                                <div class="loca_list_title">
                                    배송지 명
                                </div>
                                <div class="loca_list_title">
                                    주소<br>
                                    <span style="opacity:0">상세</span>
                                </div>
                                <div class="loca_list_title">
                                    받는 사람
                                </div>
                                <div class="loca_list_title">
                                    휴대폰번호
                                </div>
                                <div class="loca_list_title">
                                    배송시 요청사항

                                </div>
                            </div>
                            <div class="">
                                <div class="ml-1 loca_list_content">
                                    <span id="buyer_title"></span>
                                </div>
                                <div class="ml-1 loca_list_content">
                                    <span id="buyer_addr"></span>
                                </div>
                                <div class="ml-1 loca_list_content">
                                    <span id="buyer_name"></span>
                                </div>
                                <div class="ml-1 loca_list_content">
                                    <span id="buyer_tel"></span>
                                </div>

                                <div class="ml-1 loca_list_content">
                                    <span id="dl_request"></span>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="d-flex mb-2 mt-3">
                        <input type="checkbox" name="" value="" id="direct_ck">
                        <label for="direct_ck" class="mb-0 ml-2 pointer">배송지 직접 입력하기</label>
                    </div>
                    <table class="table d-none" id="direct_table">
                        <tr>
                            <th class="f_td">주소</th>
                            <td>
                                <input type="text" name="" value="" class="form-control form-control-sm"
                                    id="direct_address" readonly placeholder="클릭하여 주소를 입력해주세요." onclick="addressAdd2()">
                            </td>
                        </tr>
                        <tr>
                            <th>상세 주소</th>
                            <td>
                                <input type="text" name="" value="" class="form-control form-control-sm"
                                    id="direct_address2">
                            </td>
                        </tr>
                        <tr>
                            <th>받는 사람</th>
                            <td>
                                <input type="text" name="" value="" class="form-control form-control-sm"
                                    id="direct_name">
                            </td>
                        </tr>
                        <tr>
                            <th>휴대폰번호</th>
                            <td>
                                <input type="number" name="" value="" maxlength="11"
                                    class="form-control form-control-sm" id="direct_phone" placeholder="( '-' 제외 11자리 )"
                                    oninput="maxLengthCheck(this)">
                            </td>
                        </tr>
                        <tr>
                            <th>배송시 요청사항</th>
                            <td>
                                <input type="text" name="" value="" class="form-control form-control-sm"
                                    id="direct_request">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="cart-table wishlist-table">
                    <div class="table-responsive " id="cart-table-list">
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


                </div>


                <div id="account-div" class="mt-5">
                    <table class="table table-bordered text-center mb-0">
                        <thead style="background:#fafafa;">
                            <tr>
                                <th>총 상품금액</th>
                                <th scope="col">총 배송비</th>
                                <th scope="col">결제예정금액</th>
                            </tr>
                        </thead>
                        <tr>
                            <td id="all-pro-price" style="font-size:15px;" class="font-weight-bold"></td>
                            <td id="all-pro-del-price" style="font-size:15px;" class="font-weight-bold"></td>
                            <td id="account-price" style="font-size:18px;" class="font-weight-bold"></td>
                        </tr>
                    </table>
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

                <div class="text-danger mt-3">
                    * 도서산간 지역의 경우 추후 수령 시 추가 배송비가 과금될 수 있습니다.
                </div>

                <div class="ml-auto my-3 div_none d-none">
                    <div class="p-3 border">
                        <h6>쿠폰/포인트 적용</h6>
                        <hr>
                        <select class="form-control form-control-sm" name="" id="coupon_select">

                        </select>
                        <div class="d-flex align-items-center mt-3">
                            포인트
                            <input type="number" name="" value="0" min="0" class="form-control form-control-sm mx-2"
                                id="point_input" style="width:100px;">
                            <span class="text-danger">사용가능한 포인트 :<span id="point_input_p"></span> </span>
                        </div>
                    </div>
                </div>


                <div class="cart-footer text-right my-4">
                    <div class="back-to-shop">
                        <span class="border py-3 text-center pointer d-inline-block btn-secondary"
                            onclick="goBuy('card')" style="width:150px;">결제하기</span>
                        <span class="border py-3 text-center pointer d-inline-block btn-secondary"
                            onclick="goBuy('vbank')" style="width:150px;">무통장입금</span>
                    </div>
                </div>
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

var randomseq;

var regPass = /^(?=.*[a-zA-Z])(?=.*[!@#$%^*+=-])(?=.*[0-9]).{8,25}$/;

var IMP = window.IMP; // 생략 가능
IMP.init("imp20004137"); // 예: imp00000000

$(function() {
    //console.log('buytype', buytype);
    if (!user_info.u_seq) {
        $("#nonuserdiv2").remove()
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
        LoadMyCouponlist()
        $("#point_input_p").text(comma(user_info.u_point))
        $("#point_input").attr('max', user_info.u_point)
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


$(document).on({
    mouseenter: function() {
        $(this).closest(".deltem-table").find('.delinfobox').addClass('on')
    },
    mouseleave: function() {
        $(this).closest(".deltem-table").find('.delinfobox').removeClass('on')
    }
}, ".fa-question-circle");


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
        },
        success: function(data) {
            $("#cart-table-list").html('');
            //console.log("dtaa >>>",data.rows);
            if (data.rows.length == 0) {
                var nstr = `<div class="py-5 text-center">등록된 장바구니가 없습니다</div>`;
                $("#cart-table-list").append(nstr);
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
                    `<table class="table table-bordered border-bold-top mb-4 deltem-table deltem-table` +
                    dtv + `">\
                                    <thead class="">\
                                        <tr>\
                                            <th scope="col" class="">썸네일</th>\
                                            <th scope="col">상품명/선택사항</th>\
                                            <th scope="col">수량</th>\
                                            <th scope="col">상품금액</th>\
                                            <th scope="col">배송비</th>\
                                        </tr>\
                                    </thead>\
                                    <tbody class="cart-tbody` + dtv + `"></tbody>\
                                </table>`;
                $("#cart-table-list").append(str);
            })
            ////////////////////////////////////////////////////////////////////////
            $.each(data.rows, function(ci, cv) {
                console.log('cv', cv);
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

                    var opstr = `<tr class="check_tr" data-dt=` + proinfo.dt_seq + `>\
                                        <td class="">\
                                            <img src="` + opimg[0] +
                        `" alt="Product" onclick="location.href='/product_detail.php?p_seq=` +
                        opinfo.p_seq + `'" class="pointer">\
                                        </td>\
                                        <td>\
                                            <div class="dots">` + proinfo.name + ` / ` + opinfo.name + ` ${equip}</div>\
                                        </td>\
                                        <td>\
                                            <div class="quantity">\
                                                <div>\
                                                    <span>${cv.c_cnt}</span>
                                                </div>\
                                            </div>\
                                        </td>\
                                        <td class="price_infoTd" data-price='` + ((opinfo.price * 1 + proinfo.price *
                            1) * cv.c_cnt * 1 + equip_price) + `'>\
                                        <span class="price-info price-info-` + cv.c_seq + `" data-c_check="` + cv
                        .c_check + `" data-default='` + (opinfo.price * 1 + proinfo.price * 1) +
                        equip_price + `' data-price='` + ((opinfo.price * 1 + proinfo.price * 1) *
                            cv.c_cnt * 1 + equip_price) + `'>` + comma((opinfo.price * 1 + proinfo
                            .price * 1) * cv.c_cnt * 1 + equip_price) + `</span>원</td>\
                                        <td class="delTd delTd` + cv.dt_seq + ` delTd-cseq` + cv.c_seq +
                        `" data-c_check="` + cv.c_check + `"></td>\
                                    </tr>`;


                    pname.push(proinfo.name)

                    if (cv.c_check) {
                        $(".cart-tbody" + proinfo.dt_seq).append(opstr);
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

                    var prostr = `<tr class="check_tr" data-dt=` + proinfo.dt_seq + `>\
                                        <td class="">\
                                            <img src="` + proimg[0] +
                        `" alt="Product" onclick="location.href='/product_detail.php?p_seq=` + cv
                        .p_seq + `'" class="pointer">\
                                        </td>\
                                        <td>\
                                            <div class="dots">` + proinfo.name + `</div>\
                                        </td>\
                                        <td>\
                                            <div class="quantity">\
                                                <div>\
                                                    <span>${cv.c_cnt}</span>
                                                </div>\
                                            </div>\
                                        </td>\
                                        <td class="price_infoTd" data-price='` + (proinfo.price * 1 * cv.c_cnt * 1) +
                        `'><span class="price-info price-info-` + cv.c_seq + `" data-default="` +
                        proinfo.price * 1 + `" data-c_check="` + cv.c_check + `" data-price='` + (
                            proinfo.price * 1 * cv.c_cnt * 1) + `'>` + comma(proinfo.price * 1 * cv
                            .c_cnt * 1) + `</span>원</td>\
                                        <td class="delTd delTd` + cv.dt_seq + ` delTd-cseq` + cv.c_seq +
                        `" data-c_check="` + cv.c_check + `"></td>\
                                    </tr>`;


                    pname.push(proinfo.name)

                    if (cv.c_check) {
                        $(".cart-tbody" + cv.dt_seq).append(prostr)
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

                $(".delTd-cseq" + cv.c_seq).text(comma(thisdelPrice_each) + '원')
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
                $(".del-all-span" + cv.dt_seq).text(comma(alldelp) + '원')
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

                        $(".delTd" + dv.dt_seq).text(comma(thisdelPrice) + '원')
                        $(".delTd" + dv.dt_seq).attr('data-price', thisdelPrice * 1)

                        $(".del-all-span" + dv.dt_seq).text(comma(thisdelPrice) + '원')
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


            $("#account-price").text(comma(allproPrice + alldelPrice) + '원')
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
                        console.log('j : ', calcGroup[j])
                        tmpArr.push(calcGroup[j])
                    }
                }
            }
            console.log('df', tmpArr);
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
        console.log('tmp.p_seq', atmp);
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

    if (!$("#direct_ck").prop('checked') && isdelLocation() == 0) {
        alert("마이페이지에서 배송지정보를 입력해주세요.")
        return
    }

    if ($("#direct_ck").prop('checked') && !$("#direct_address").val()) {
        alert("주소를 입력해주세요.")
        return
    }

    if ($("#direct_ck").prop('checked') && !$("#direct_address2").val()) {
        alert("상세 주소를 입력해주세요.")
        return
    }

    if ($("#direct_ck").prop('checked') && !$("#direct_name").val()) {
        alert("받는 사람 성함을 입력해주세요.")
        return
    }

    if ($("#direct_ck").prop('checked') && !$("#direct_phone").val()) {
        alert("번호를 입력해주세요.")
        return
    }

    if (confirm("결제 하시겠습니까?")) {
        let date = new Date();
        let ordernum =
            `ORD${date.getFullYear()}${date.getMonth()}${date.getDay()}${date.getHours()}${date.getMinutes()}-${Math.random().toString(16).substr(2, 9)}`

        let person = ``
        let phone = ``
        let address = ``
        let request = ``

        if ($("#direct_ck").prop('checked')) {
            person = $("#direct_name").val()
            phone = $("#direct_phone").val()
            address = $("#direct_address").val() + $("#direct_address2").val()
            request = $("#direct_request").val()
        } else {
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
        }
        console.log('proObjRealFinalarr', proObjRealFinalarr);
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

        console.log('delivery_price', delivery_price);


        // IMP.request_pay(param, callback) 결제창 호출
        IMP.request_pay({ // param
            pg: "html5_inicis.MOIlidot88",
            pay_method: method,
            merchant_uid: ordernum,
            name: pname.length == 1 ? pname[0] : pname[0] + `외 ${pname.length-1}건`,
            amount: totalPrice + delivery_price,
            //amount: 101,
            buyer_email: user_info.u_email || $("#o_nonuser_email").val(),
            buyer_name: person,
            buyer_tel: phone,
            buyer_addr: address,
            buyer_postcode: "01181",
            m_redirect_url: "https://lidot.co.kr/payment_m.php", // 예: https://www.myservice.com/payments/complete/mobile
        }, function(rsp) { // callback


            if (rsp.success) { // 결제 성공 시: 결제 승인 또는 가상계좌 발급에 성공한 경우
                // console.log("rsp >>>",rsp);
                // jQuery로 HTTP 요청

                $.each(insertArr, function(i, v) {
                    $.ajax({
                        url: SERVER_AP + "/order/payments",
                        type: "POST",
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

                        },
                        success: function(data) {
                            console.log("data >>", data);
                            if (data.status === "success" || data.status ===
                                "vbankIssued") {
                                $.ajax({
                                    url: SERVER_AP + "/admin/common/delete",
                                    type: "post",
                                    cache: false,
                                    async: false,
                                    data: {
                                        table: 'cart',
                                        field: 'u_seq',
                                        seq: user_info.u_seq || randomseq,
                                    },
                                    success: function(data) {


                                        goKaKao(phone, currentDate(), person,
                                            ordernum);

                                        userNumberUpdate(user_info.u_seq,
                                            'u_buy')

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

                                        if (user_info.u_seq) {
                                            // location.href = "/mypage.php"
                                        } else {
                                            location.href = "/"
                                        }
                                    },
                                    error: function(request, status, error) {
                                        console.log(error);
                                    }
                                });
                            } else if (data.status === "forgery") {
                                alert("위조된 결제시도입니다!")
                                location.href = "/"
                            }
                        },
                        error: function(request, status, error) {
                            console.log(error);
                        }
                    })

                })
                                            alert("주문이 정상적으로 접수되었습니다!")


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
            $("#o_nonuser_address").val(strAddr)
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
            $("#coupon_select").html('');
            if (data.length == 0) {
                var str2 = '<option value="">쿠폰을 선택해주세요.</option>';
                $("#coupon_select").append(str2);

                var nstr = '<option value="">사용가능한 쿠폰이 없습니다.</option>';
                $("#coupon_select").append(nstr);
            } else {
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

$("#point_input").on('change keyup', function() {
    if ($(this).val() * 1 > $(this).attr('max') * 1) {
        $(this).val($(this).attr('max') * 1)
    }
    if ($(this).val() * 1 > totalPrice_tmp) {
        $(this).val(totalPrice_tmp)
    }
    if (totalPrice_coupon != 0) {
        totalPrice = totalPrice_coupon
        $("#point_input_p").text(comma(user_info.u_point * 1 - $(this).val() * 1))
        totalPrice = totalPrice - $(this).val() * 1
        $("#account-price").text(comma(totalPrice + delivery_price) + '원')
    } else {
        totalPrice = totalPrice_tmp
        $("#point_input_p").text(comma(user_info.u_point * 1 - $(this).val() * 1))
        totalPrice = totalPrice - $(this).val() * 1
        $("#account-price").text(comma(totalPrice + delivery_price) + '원')
    }
})

var totalPrice_coupon = 0
$(document).on("change", "#coupon_select", function() {
    totalPrice = totalPrice_tmp

    uc_seq = $(this).val()

    $("#point_input").val(0)
    $("#point_input_p").text(comma(user_info.u_point * 1))

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
        $("#account-price").text(comma(totalPrice + delivery_price) + '원')
    } else {
        coupon_dis = 0
        totalPrice_coupon = 0
        $("#account-price").text(comma(totalPrice + delivery_price) + '원')
    }
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
            calcMoney();
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
            var address = data[0].dl_address + "<br> " + data[0].dl_address_detail
            $('#buyer_addr').html(address);

            //도서산간 지역 체크
            $('#buyer_title').html(data[0].dl_title)
            $('#buyer_name').html(data[0].dl_person)
            $('#buyer_tel').html(data[0].dl_phone)
            $('#dl_request').html(data[0].dl_request)
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





$("#direct_ck").click(function() {
    if ($(this).prop('checked')) {
        $("#direct_table").removeClass('d-none')
    } else {
        $("#direct_table").addClass('d-none')
    }
})

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
            if (data.length != 0) {
                add_money = data[0].da_addmoney;
                let lastMoney = 0;
                let totalPrice2 = 0;
                let money = $('#all-pro-del-price').attr('data-money');
                lastMoney = money * 1 + add_money * 1
                delivery_price = delivery_price * 1 + lastMoney;
                totalPrice2 = totalPrice * 1 + lastMoney
                $('#all-pro-del-price').html(comma(lastMoney) + '원')
                $('#account-price').html(comma(totalPrice2) + '원')

            } else {
                let lastMoney = 0;
                let totalPrice2 = 0;
                let money = $('#all-pro-del-price').attr('data-money');
                lastMoney = money * 1 + add_money * 1
                delivery_price = delivery_price * 1;
                totalPrice2 = totalPrice * 1 + lastMoney
                $('#all-pro-del-price').html(comma(lastMoney) + '원')
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
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
