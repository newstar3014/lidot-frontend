<!-- Style CSS -->
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php';
    $imp_uid = $_GET['imp_uid'];
    $merchant_uid = $_GET['merchant_uid'];
    $imp_success = $_GET['imp_success'];
?>

<style media="screen">

</style>

<!-- CSS -->
<link rel="stylesheet" href="css/pages/community/community.css">
<!-- Header Area End -->
<!-- Wishlist Table Area -->
<div class="wishlist-table section_padding_100 clearfix">

</div>


<!-- JS -->
<script type="text/javascript">
var imp_uid = '<?php echo $imp_uid; ?>';
var merchant_uid = '<?php echo $merchant_uid; ?>';
var imp_success = '<?php echo $imp_success; ?>';

$(function() {
    console.log('imp_success', imp_success);
    var m_info_obj = JSON.parse(sessionStorage.getItem('m_info_obj'));
    if (imp_success == 'true') {
        console.log('성공');
        $.ajax({
            url: SERVER_AP + "/order/payments/mobile",
            type: "post",
            cache: false,
            data: {
                imp_uid: imp_uid,
                merchant_uid: merchant_uid,
            },
            success: function(rsp) {
                console.log("rsp >>", rsp);
                console.log("m_info_obj >>", m_info_obj);

                $.each(m_info_obj.insertArr, function(i, v) {

                    $.ajax({
                        url: SERVER_AP + "/order/payments",
                        type: "POST",
                        data: {
                            imp_uid: rsp.imp_uid,
                            merchant_uid: rsp.merchant_uid,
                            amount: rsp.amount,
                            o_num: m_info_obj.o_num,
                            p_seq: m_info_obj.p_seq,
                            u_seq: m_info_obj.u_seq,
                            o_total_price: m_info_obj.o_total_price,
                            o_del_price: m_info_obj.o_del_price,
                            o_date: m_info_obj.o_date,
                            o_nonuser_name: m_info_obj.o_nonuser_name,
                            o_nonuser_address: m_info_obj.o_nonuser_address,
                            o_nonuser_address2: m_info_obj.o_nonuser_address2,
                            o_phone: m_info_obj.o_phone,
                            o_nonuser_email: m_info_obj.o_nonuser_email,
                            o_password: m_info_obj.o_password,
                            o_request: m_info_obj.o_request,
                            point: m_info_obj.point,
                            coupon_dis: m_info_obj.coupon_dis,
                            proObjRealFinalarr: m_info_obj.proObjRealFinalarr,
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
                            tack: v.tack,
                            totalprice: v.totalprice,
                            p_purchase: v.p_purchase,
                            delprice: v.delprice,
                            defaultPseq: v.default,
                        },
                        success: function(data) {
                            console.log("data >>", data);
                            if (data.status === "success" || data.status ===
                                "vbankIssued") {
                                $.ajax({
                                    url: SERVER_AP +
                                        "/admin/common/delete",
                                    type: "post",
                                    cache: false,
                                    async: false,
                                    data: {
                                        table: 'cart',
                                        field: 'u_seq',
                                        seq: user_info.u_seq ||
                                            randomseq,
                                    },
                                    success: function(data) {
                                        sessionStorage.removeItem(
                                            'm_info_obj')


                                        goKaKao(rsp.buyer_tel,
                                            currentDate(), rsp
                                            .buyer_name, rsp
                                            .merchant_uid);

                                        userNumberUpdate(user_info
                                            .u_seq, 'u_buy')

                                        let obj_coupon =
                                            new Object();
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
                                                whereValue: m_info_obj
                                                    .uc_seq,
                                                obj: obj_coupon,
                                            },
                                            success: function(
                                                data
                                            ) {},
                                            error: function(
                                                request,
                                                status,
                                                error) {
                                                console
                                                    .log(
                                                        error
                                                    );
                                            }
                                        });

                                        if (user_info.u_seq) {
                                            location.href =
                                                `/order_end.php?num=${ordernum}`
                                        } else {
                                            location.href =
                                                `/order_end.php?num=${ordernum}`
                                        }
                                    },
                                    error: function(request, status,
                                        error) {
                                        console.log(error);
                                    }
                                });
                            } else if (data.status === "forgery") {
                                //alert("위조된 결제시도입니다!")
                                //location.href = "/"
                            }
                        },
                        error: function(request, status, error) {
                            console.log(error);
                        }
                    })
                })
                //alert("주문이 정상적으로 접수되었습니다!")

            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    } else {
        alert('결제에 실패하였습니다.');
        location.href = "/"
    }



})


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
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>