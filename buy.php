<!-- Style CSS -->
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>

<!-- CSS -->
<style media="screen">
    .table-account{
        font-weight: normal;
    }
    .table-account span{
        font-weight: bold;
    }
    .table-account span:last-child{
        font-size: 25px;
    }
    @media (max-width:760px) {
        .mobile{
            display: none;
        }
    }
</style>
<!-- Header Area End -->

    <!-- Breadcumb Area -->
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>바로구매</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">바로구매</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->

    <!-- Wishlist Table Area -->
    <div class="wishlist-table section_padding_100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cart-table wishlist-table">
                        <div class="table-responsive" id="cart-table-list">
                            <!-- <table class="table table-bordered mb-30 my-3">
                                <thead>
                                    <tr>
                                        <th scope="col"><div class="col-12 all_delete_btn"><i class="icofont-ui-delete"></i></div></th>
                                        <th scope="col">이미지</th>
                                        <th scope="col">상품명</th>
                                        <th scope="col">상품 가격</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="col-12 wish_del"><i class="icofont-close"></i></div>
                                        </th>
                                        <td>
                                            <img src="img/product-img/onsale-1.png" alt="Product">
                                        </td>
                                        <td>
                                            <a href="#">상품1</a>
                                        </td>
                                        <td>9,000원</td>
                                    </tr>
                                </tbody>
                            </table> -->
                        </div>
                    </div>

                    <div class="cart-footer text-right my-5">
                        <div class="back-to-shop">
                            <span class="border py-3 text-center pointer d-inline-block" onclick="goBuy()" style="width:150px;">결제하기</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- JS  -->
<script type="text/javascript" src="https://cdn.iamport.kr/js/iamport.payment-1.2.0.js"></script>
<script type="text/javascript">
var productArr = [];

var totalPrice = 0;
var delivery_price = 0;
var pname = [];
var proObjarr = []

var IMP = window.IMP; // 생략 가능
IMP.init("imp20004137"); // 예: imp00000000



    $(document).ready(function(){
        var product = sessionStorage.getItem("product");
        productArr = JSON.parse(product);
        LoadBuyList()
    });

    // $(document).on("click",".all-ck",function(){
    //     if($(this).prop("checked")){
    //         $(this).closest('table').find('.tr-ck').prop("checked",true)
    //     }else{
    //         $(this).closest('table').find('.tr-ck').prop("checked",false)
    //     }
    // })

    function LoadBuyList(){
        //<th scope="col"><div class="col-12"><input type="checkbox" name="" value="" class="all-ck"></div></th>\
        //<span class="pointer btn float-left" onclick="chooseDel(this)">선택삭제</span>
        //console.log("productArr >>",productArr);
        var v = productArr
        totalPrice = v.os_totalprice*1
        delivery_price = v.os_delivery_price*1
        var str = `<table class="table table-bordered mb-30 my-3">\
                        <thead>\
                            <tr>\
                                <th scope="col" class="mobile">이미지</th>\
                                <th scope="col">상품명</th>\
                                <th scope="col">수량</th>\
                                <th scope="col">상품 가격</th>\
                            </tr>\
                        </thead>\
                        <tbody class="cart-tbody"></tbody>\
                        <tr class="py-3 text-right overflow-hidden" style="background:#fafafa;">\
                            <td colspan="5" class="table-account">상품구매금액 : <span id="totalprice-span">`+comma(totalPrice)+`</span> + 배송비 : <span>`+comma(delivery_price)+`</span> = 합계 : <span id="totalprice-all-span">`+comma(totalPrice+delivery_price)+`</span> 원</td>\
                        </tr>\
                    </table>`;
        $("#cart-table-list").append(str);

        //상품 뿌리기
        if(v.os_pro_data){
            var proArr = JSON.parse(v.os_pro_data)
            var proinfo = proInfo(proArr.p_seq)
            var proimg = JSON.parse(proinfo.img);
            var prostr = `<tr>\
                            <td class="mobile">\
                                <img src="`+proimg[0]+`" alt="Product">\
                            </td>\
                            <td>\
                                <span>`+proinfo.name+`</span>\
                            </td>\
                            <td>\
                                <div class="quantity">\
                                    <input type="number" class="qty-text" step="1" min="1" max="`+proinfo.stock+`" name="quantity" value="`+proArr.cnt+`" data-wonprice="`+proinfo.price*1+`" disabled>\
                                </div>\
                            </td>\
                            <td><span class="price-info" data-price='`+proinfo.price*1 * proArr.cnt*1+`'>`+comma(proinfo.price*1 * proArr.cnt*1)+`</span>원</td>\
                        </tr>`;
            $(".cart-tbody").append(prostr)

            let opobj = {
                p_seq:proArr.p_seq,
                po_seq:null,
                cnt:proArr.cnt,
            }
            pname.push(proinfo.name)
            proObjarr.push(opobj)
        }

        //옵션있으면 뿌리기
        if(v.os_option_data){
            var opArr = JSON.parse(v.os_option_data)
            let opobj=[]
            $.each(opArr, function(opi, opv){
                var opinfo = opInfo(opv.op_seq)
                var proinfo = proInfo(opinfo.p_seq)
                opimg = JSON.parse(proinfo.img)
                var opstr = `<tr>\
                                <td class="mobile">\
                                    <img src="`+opimg[0]+`" alt="Product">\
                                </td>\
                                <td>\
                                    <span>`+proinfo.name+` / `+opinfo.name+`</span>\
                                </td>\
                                <td>\
                                    <div class="quantity">\
                                        <input type="number" class="qty-text" step="1" min="1" max="`+opinfo.stock+`" name="quantity" value="`+opv.cnt+`" data-wonprice="`+(opinfo.price*1 + proinfo.price*1)+`" disabled>\
                                    </div>\
                                </td>\
                                <td><span class="price-info" data-price='`+(opinfo.price*1 + proinfo.price*1)*opv.cnt*1+`'>`+comma((opinfo.price*1 + proinfo.price*1)*opv.cnt*1)+`</span>원</td>\
                            </tr>`;
                $(".cart-tbody").append(opstr)

                opobj = {
                    p_seq:opv.p_seq,
                    po_seq:opv.op_seq,
                    cnt:opv.cnt,
                }
                pname.push(proinfo.name+` / `+opinfo.name)
                proObjarr.push(opobj)
            })

        }

        //추가구성상품있으면 뿌리기
        if(v.os_addoption_data){
            // <th scope="row">\
            //     <div class="col-12"><input type="checkbox" name="" value="" class="tr-ck"></div>\
            // </th>\
            let opobj=[];
            var addopArr = JSON.parse(v.os_addoption_data)
            $.each(addopArr, function(aopi, aopv){

                var addopinfo;
                var addinfo;
                var addimg;

                var name;
                var price;

                if(aopv.p_seq){
                    //옵션상품
                    addopinfo = opInfo(aopv.addop_seq)
                    addinfo = proInfo(addopinfo.p_seq)
                    addimg = JSON.parse(addinfo.img)

                    name = addinfo.name+` / `+addopinfo.name;
                    price = addopinfo.price*1 + addinfo.price*1
                }else{
                    //단일상품
                    addopinfo = opProInfo(aopv.addop_seq)
                    addimg = JSON.parse(addopinfo.img)

                    name = addopinfo.name;
                    price = addopinfo.price*1
                }

                var addopstr = `<tr>\
                                <td class="mobile">\
                                    <img src="`+addimg[0]+`" alt="Product">\
                                </td>\
                                <td>\
                                    <span>`+name+`</span>\
                                </td>\
                                <td>\
                                    <div class="quantity">\
                                        <input type="number" class="qty-text" step="1" min="1" max="`+addopinfo.stock+`" name="quantity" value="`+aopv.cnt+`" data-wonprice="`+price+`" disabled>\
                                    </div>\
                                </td>\
                                <td><span class="price-info" data-price='`+price*aopv.cnt*1+`'>`+comma(price*aopv.cnt*1)+`</span>원</td>\
                            </tr>`;
                $(".cart-tbody").append(addopstr)

                opobj = {
                    p_seq:aopv.p_seq,
                    po_seq:aopv.addop_seq,
                    cnt:aopv.cnt,
                }
                pname.push(name)
                proObjarr.push(opobj)
            })
        }
    }


    //단일상품일경우 정보 가져오기
    function opProInfo(p_seq){
        var info = [];
        var obj = new Object();
        obj.p_seq = p_seq;
        $.ajax({
            url: SERVER_AP+"/common/condition",
            type: "post",
            cache: false,
            async:false,
            data:{
                table: 'product',
                common:obj,
            },
            success: function(data){
                info = {p_seq : data[0].p_seq, stock : data[0].p_stock, img:data[0].p_image, price:data[0].p_price, name:data[0].p_name}
            },
            error: function (request, status, error){
                console.log(error);
            }
        });
        return info;
    }
    //////////////////////////////////////////////////////////


    function proInfo(p_seq){
        var info = [];
        var obj = new Object();
        obj.p_seq = p_seq;
        $.ajax({
            url: SERVER_AP+"/common/condition",
            type: "post",
            cache: false,
            async:false,
            data:{
                table: 'product',
                common:obj,
            },
            success: function(data){
                info = {stock:data[0].p_stock, name:data[0].p_name, img:data[0].p_image, price:data[0].p_price}
            },
            error: function (request, status, error){
                console.log(error);
            }
        });
        return info;
    }

    function opInfo(po_seq){
        var info = [];
        var obj = new Object();
        obj.po_seq = po_seq;
        $.ajax({
            url: SERVER_AP+"/common/condition",
            type: "post",
            cache: false,
            async:false,
            data:{
                table: 'product_option',
                common:obj,
            },
            success: function(data){
                info = {p_seq : data[0].p_seq, stock : data[0].po_stock, name : data[0].po_option1 +' '+ data[0].po_option2, price:data[0].po_price}
            },
            error: function (request, status, error){
                console.log(error);
            }
        });
        return info;
    }
    //////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////

    $(document).on("change","input[name=quantity]",function(){
        var parent = $(this).closest('tr').find('.price-info')
        var thisprice = ($(this).attr("data-wonprice")*1)*$(this).val()
        $(parent).attr('data-price',thisprice*1)
        $(parent).text(comma(thisprice))

        CalcTotalPrice()
    })

    function CalcTotalPrice(){
        var price=0;
        $.each($(".price-info"),function(i,v){
            price += $(v).attr('data-price')*1
        })
        totalPrice = price
        $("#totalprice-span").text(comma(totalPrice))
        $("#totalprice-all-span").text(comma(totalPrice*1 + delivery_price*1))
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////

    // function chooseDel(e){
    //     var ckedtr = $(e).closest("table").find('input[class=tr-ck]:checked')
    //     if(ckedtr.length == 0){
    //         alert("상품을 한개이상 선택해주세요.")
    //     }else{
    //         if(confirm("선택한 상품을 삭제하시겠습니까?")){
    //             if(ckedtr.length == $(e).closest("table").find('input[class=tr-ck]').length){
    //                 alert("상품이 한개이상 있어야합니다")
    //             }else{
    //                 $.each(ckedtr, function(i,v){
    //                     $(v).closest('tr').remove();
    //                 })
    //             }
    //         }
    //     }
    //
    //     CalcTotalPrice()
    // }

    function goBuy2(){
        $.ajax({
            url: SERVER_AP+"/order/payments",
            type: "POST",
            data: {
                imp_uid: 123,
                merchant_uid: 12345,
                o_num : '12312313123',
                p_seq : JSON.stringify(proObjarr),
                u_seq : user_info.u_seq,
                o_total_price : totalPrice,
                o_del_price : delivery_price,
                o_date : currentDate()
            },
            success: function(data){},
            error: function (request, status, error){
                 console.log(error);
             }
        })
    }

    function goBuy(){
        if(confirm("결제 하시겠습니까?")){
            let ordernum = Math.random().toString(16).substr(2, 9)
            // IMP.request_pay(param, callback) 결제창 호출
              IMP.request_pay({ // param
                  pg: "html5_inicis",
                  pay_method: "card",
                  merchant_uid: ordernum,
                  name: pname.length == 1 ? pname[0] : pname[0]+`외 ${pname.length-1}건`,
                  amount: totalPrice + delivery_price,
                  buyer_email: user_info.u_email,
                  buyer_name: user_info.u_name,
                  buyer_tel: user_info.u_phone,
                  buyer_addr: user_info.u_addr + ' ' + user_info.u_addr_detail,
                  buyer_postcode: "01181"
              }, function (rsp) { // callback
                  if (rsp.success) { // 결제 성공 시: 결제 승인 또는 가상계좌 발급에 성공한 경우
                    // jQuery로 HTTP 요청
                    $.ajax({
                        url: SERVER_AP+"/order/payments",
                        type: "POST",
                        data: {
                            imp_uid: rsp.imp_uid,
                            merchant_uid: rsp.merchant_uid,
                            o_num : ordernum,
                            p_seq : JSON.stringify(proObjarr),
                            u_seq : user_info.u_seq,
                            o_total_price : totalPrice,
                            o_del_price : delivery_price,
                            o_date : currentDate()
                        },
                        success: function(data){
                            if(data.status === "success"){
                                alert("주문이 정상적으로 접수되었습니다!")
                                location.href="/mypage.php"
                            }else if(data.status === "forgery"){
                                alert("위조된 결제시도입니다!")
                                location.href="/"
                            }
                        },
                        error: function (request, status, error){
                             console.log(error);
                         }
                    })
                  } else {
                    alert("결제에 실패하였습니다. 에러 내용: " +  rsp.error_msg);
                  }
              });
        }
    }
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
