<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>

<style media="screen">
.btn-primary {
    margin: 0 auto;
    cursor: pointer;
    color: #666769;
}

.table td,
.table th {
    vertical-align: top !important
}

#order-list-tbody td {
    vertical-align: middle !important
}
</style>
<link href="/css/order.css" rel="stylesheet">
<link href="/css/order_end.css" rel="stylesheet">
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
<div class="message_now_area pt-5" id="contact">
    <div class="container mb-50">
        <h4 class="page-title text-dark text-center font-weight-bold">ORDER RESULT</h4>

        <div class="order_end_fir">
            <div class="order_end_content">
                <div class="check_circle">
                    <i class="fa-solid fa-check text-danger"></i>
                </div>
                <div>
                    <div class="end_fir_title">
                        고객님의 주문이 완료되었습니다.
                    </div>
                    <div class="sub_text mt-2 mb-3">
                        주문내역 및 배송에 관한 안내는
                        <span class="find_delBtn  btn-blue">주문조회</span>
                        를 통하여 확인 가능합니다.
                    </div>
                    <div>
                        <div class="mb-1">
                            주문번호 : <span class="o_num"></span>
                        </div>
                        <div>
                            주문일자 : <span class="o_date"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="text-black mb-1">
                결제정보
            </div>
            <div class="table-wrap ">
                <table class="table border text-left table_order">
                    <tr>
                        <td style="width:130px">최종결제금액</td>
                        <td>
                            <span class="total_money_real font-weight-bold">52,000</span>원
                        </td>
                    </tr>
                    <tr>
                        <td>결제수단</td>
                        <th>
                            <div class="font-weight-bold pay_method">
                            </div>
                            <div class="font-weight-light method_data">

                            </div>
                        </th>
                    </tr>
                </table>
            </div>
        </div>


        <div class="mt-5">
            <div class="text-black mb-1">
                주문 상품 정보
            </div>
            <div class="table-wrap ">
                <table class="table border text-center table_order mb-0">
                    <tr>
                        <td>이미지</td>
                        <td>
                            상품정보
                        </td>
                        <td>판매가</td>
                        <td>수량</td>
                        <td>적립금</td>
                        <td>배송구분</td>
                        <td>합계</td>
                    </tr>

                    <tbody id="order-list-tbody" class="text-center border-top-0">

                    </tbody>

                </table>
                <div class="p-2 py-3 total_info_setting">
                    <div>
                        [기본배송]
                    </div>
                    <div class="d-flex">
                        <div class="money_add_div d-flex" style="gap:3px">
                            상품 구매금액 <span class="o_total_price">49,000</span> + 배송비 <span class="o_del_price"></span>
                            <div class="point_div">
                            </div>
                            <div class="coupon_div">
                            </div>
                        </div>
                        = 합계 :
                        <span class="font-weight-bold total_money_real"></span>원
                    </div>

                </div>

                <table class="table border text-center mt-3 table_order mb-0">
                    <tr>
                        <td>총 주문 금액</td>
                        <td>
                            총 결제금액
                        </td>
                    </tr>
                    <tbody class="text-center border-top-0">
                        <tr>
                            <td>
                                <span class="font-weight-bold total_money f-20"></span><span>원</span>
                            </td>
                            <td>
                                <span class="font-weight-bold total_money_real f-20"></span><span>원</span>
                            </td>
                        </tr>

                    </tbody>

                </table>
                <table class="table border text-left table_order">
                    <tr>
                        <td style="width:130px">총 적립예정금액</td>
                        <td>
                            <span class="point_money ">490</span>원
                        </td>
                    </tr>

                    <tr>
                        <td>상품별 적립금</td>
                        <td>
                            <span class="point_money_total point_money">490</span>원
                        </td>
                    </tr>
                </table>
            </div>


        </div>

        <div class="mt-5">
            <div class="text-black mb-1">
                배송지정보
            </div>
            <table class="table border text-left table_order">
                <tr>
                    <td style="width:130px">받으시는분</td>
                    <td>
                        <span id="r_name" class="r_name"></span>
                    </td>
                </tr>

                <tr>
                    <td style="width:130px">주소</td>
                    <td>
                        <span id="r_address" class=" "></span>
                    </td>
                </tr>
                <tr>
                    <td style="width:130px">휴대전화</td>
                    <td>
                        <span id="r_phone" class=" ">490</span>
                    </td>
                </tr>
                <tr>
                    <td style="width:130px">배송메시지</td>
                    <td>
                        <span class="" id="r_text"></span>
                    </td>
                </tr>

            </table>
        </div>
        <div class="mt-5">
            <div class="text-right">
                <div onclick="location.href='/store.php'" class="btn btn-primary mr-2">
                    쇼핑계속하기
                </div>

                <div onclick="goCheck()" class="btn btn-primary">
                    주문확인하기
                </div>
            </div>

        </div>

    </div>

</div>
<!-- Message Now Area -->



<script type="text/javascript" src="/admin/js/common.js"></script>
<script src="/js/pages/wishlist/wishlist.js"></script>
<script type="text/javascript">
var ppp = 30;
var page = 1;
var num = '<?php echo $_GET['num']; ?>';
var windowWidth = $(window).width();
$(function() {
    loadData()
})

function loadData(scType) {


    let endPoint = ``;

    if (windowWidth > 768) {
        endPoint = `/order/order-paging`
    } else {
        endPoint = `/order/order-detail-paging`
    }

    $.ajax({
        url: SERVER_AP + endPoint,
        type: "post",
        cache: false,
        async: false,
        data: {
            num: num,
            page: page,
            ppp: 10,
            order: 'o_date desc',
            u_seq: user_info.u_seq,
            search: $('#search_val').val(),
            scType: scType,
        },
        success: function(data) {
            console.log('DATA', data);
            $("#order-list-tbody, .order_m_go").html('');
            $('#order-no-data').addClass('d-none');

            if (data.totalCount == 0) {
                $('#order-no-data').removeClass('d-none');
                $("#paged-wrap").addClass('d-none')
            } else {
                let point = 0;
                let price = 0;
                let p_price = 0;
                let realPrice = 0;

                let d_price = 0;
                if (windowWidth < 768) {}
                $.each(data.rows, function(i, v) {

                    if (v.pay_method == 'vbank') {
                        $('.pay_method').html("무통장 입금")

                        let methodStr = ` 입금자 : <span class="vbank_holder">${v.vbank_holder}</span>,
                                        계좌번호 : <span class="vbank_num">${v.vbank_name + ' ' + v.vbank_num}</span>`
                        $('.method_data').html(methodStr);

                    } else {
                        $('.pay_method').html("카드 결제")
                        let methodStr = ` 카드 : <span class="vbank_holder">${v.card_name}</span>,
                                        카드번호 : <span class="vbank_num">${v.card_number}</span>`
                        $('.method_data').html(methodStr);
                    }

                    if (user_info) {
                        $('.find_delBtn').attr('onclick', `location.href='/order_list.php'`)
                    } else {
                        $('.find_delBtn').attr('onclick', `location.href='/find_order.php'`)
                    }

                    if (v.o_point > 0) {
                        let pointStr = ` - 포인트 ${comma(v.o_point)}`

                        $('.point_div').html(pointStr)
                    }

                    if (v.o_coupon > 0) {
                        let couStr = ` - 쿠폰할인가격 ${comma(v.o_coupon)}`
                        $('.coupon_div').html(couStr)
                    }


                    let p_Image = ''
                    let imgStr = ''

                    $('.o_num').html(v.o_num);
                    $('.o_date').html(v.o_date);

                    let priceMoney = comma(v.o_total_price)
                    $('.o_total_price').html(comma(v.o_total_price))
                    $('.o_del_price').html(comma(v.o_del_price))

                    realPrice = v.o_total_price * 1 + v.o_del_price * 1

                    price = v.o_total_price * 1 + v.o_del_price * 1 - v.o_point * 1 - v.o_coupon *
                        1



                    if (v.p_image) {
                        p_Image = JSON.parse(v.p_image)[0]
                        imgStr = `      <img
                                    onclick="location.href='/product_detail.php?p_seq=${v.p_seq_new}'" 
                                    src="${ p_Image }" width="50px"/>`

                    } else {
                        imgStr = `삭제된 상품입니다.`
                    }
                    d_price = v.o_del_price * 1
                    p_price = v.o_total_price * 1
                    $('.point_money').html(v.o_total_price * 0.01)
                    point = v.o_total_price * 0.01
                    $('.o_total_price').html(comma(p_price))
                    $('.o_del_price').html(comma(d_price))
                    $(".total_money").html(comma(realPrice))
                    $('.total_money_real').html(comma(price))
                    $('.point_money_total').html(point)
                    let pp_price = v.p_price * 1
                    if (v.po_price) {
                        pp_price = v.p_price * 1 + v.po_price * 1
                    }
                    let str = `<tr>
                            <td>
                                ${imgStr}
                            </td>
                            <td  onclick="location.href='/product_detail.php?p_seq=${v.p_seq_new}'" class="pc-none text-dark text-left fs-17 pointer">
                            ${v.p_name || '삭제된 상품입니다.'}</td>
                            <td class="pc-none">${comma(pp_price) }</td>
                            <td class="pc-none">${v.p_cnt}</td>
                            <td class="pc-none">${comma(pp_price * 0.01)}</td>
                            <td class="pc-none">
                                <div class="">기본배송</div>
                            </td>
                            <td class="pc-none">
                                <div class="">${comma(pp_price)}</div>
                            </td>
                        </tr>`;

                    $('#order-list-tbody').append(str);

                    loadUserInfo(v.o_seq)



                })

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

function loadUserInfo(seq) {
    let obj = {
        o_seq: seq,
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

function goCheck() {
    if (user_info) {
        location.href = '/mypage.php'
    } else {
        location.href = `/find_order.php`
    }
}
</script>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>