<? include_once $_SERVER["DOCUMENT_ROOT"].'/_header.php'; ?>

<div id="common-page-title"></div>

<!-- page-cart -->
<section class="flat-spacing-11">
    <div class="container">
        <div class="tf-page-cart-wrap layout-2">
            <div class="tf-page-cart-item">
                <h5 class="fw-5 mb_20"><i class="bi bi-truck"></i> 배송지 정보</h5>
                <form class="form-checkout">
                    <fieldset class="box fieldset">
                        <label for="name">성함</label>
                        <input type="text" id="name">
                    </fieldset>
                    <fieldset class="box fieldset">
                        <label for="phone">연락처</label>
                        <input type="text" id="phone">
                    </fieldset>
                    <fieldset class="box fieldset">
                        <label for="address">주소</label>
                        <input type="text" id="address" class="pointer" readonly>
                    </fieldset>
                    <fieldset class="box fieldset">
                        <label for="address_detail">상세주소</label>
                        <input type="text" id="address_detail">
                    </fieldset>
                    <fieldset class="box fieldset">
                        <label for="desc_text">배송메시지</label>
                        <input type="text" id="desc_text">
                    </fieldset>
                </form>
            </div>
            <div class="tf-page-cart-footer">
                <div class="tf-cart-footer-inner">
                    <h5 class="fw-5 mb_20"><i class="bi bi-credit-card"></i> 결제 정보</h5>
                    <form class="tf-page-cart-checkout widget-wrap-checkout">
                        <ul class="wrap-checkout-product"></ul>
                        <!-- <div class="coupon-box">
                            <input type="text" placeholder="Discount code">
                            <a href="#" class="tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn">Apply</a>
                        </div> -->
                        <div class="d-flex justify-content-between line pb_20">
                            <h6 class="fw-5">합계</h6>
                            <h6 class="total fw-5"></h6>
                        </div>
                        <div class="wd-check-payment">
                            <div class="fieldset-radio mb_20">
                                <input type="radio" name="payment" id="bank" class="tf-check" checked>
                                <label for="bank">무통장 입금</label>
                                
                            </div>
                            <div class="fieldset-radio mb_20">
                                <input type="radio" name="payment" id="delivery" class="tf-check">
                                <label for="delivery">카드결제</label>
                            </div>
                            <p class="text_black-2 mb_20">- 무이자할부가 적용되지 않은 상품과 무이자할부가 가능한 상품을 동시에 구매할 경우 전체 주문 상품 금액에 대해 무이자할부가 적용되지 않습니다. 무이자할부를 원하시는 경우 장바구니에서 무이자할부 상품만 선택하여 주문하여 주시기 바랍니다.<br>
                            - 최소 결제 가능 금액은 결제금액에서 배송비를 제외한 금액입니다.</p>
                            <div class="box-checkbox fieldset-radio mb_20">
                                <input type="checkbox" id="check-agree" class="tf-check">
                                <label for="check-agree" class="text_black">주문 내용을 확인하였으며 약관에 동의합니다.</label>
                            </div>
                        </div>
                        <a href="javascript:goPay()" class="tf-btn radius-3 btn-fill btn-icon animate-hover-btn justify-content-center"><i class="bi bi-credit-card me-2"></i>결제하기</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-cart -->


<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script>

    let address_postnum;

    $(function() {
        console.log('ㅡ PAGE READY');
        setPageTitle('결제하기', 'checkout');

        if(isLogin){
            $('#name').val(my_obj.name);
            $('#phone').val(my_obj.phone);
            $('#address').val(my_obj.address);
            $('#address_detail').val(my_obj.address_detail);
        }

        loadCart(true);
    });

    $('#address').click(function(){
        new daum.Postcode({
            oncomplete: function(data) {
                address_postnum = data.zonecode;
                $('#address').val(data.address);
                $('#address_detail').val('').focus();
            }
        }).open();
    });

    function setPageCartList(data){
        let freeship = cfLoad('name', '무료배송기준금액');
        freeship = freeship[0].value;
        
        $.each(data.rows, function(i, v){
            if(v.cart_check_yn == 'Y'){
                drawItem(v);
            }
        });
        setCheckoutTotalPrice();
    }

    function drawItem(v){
        console.log(v);
        
        let optionStr = ``;
        let myPrice = getMyPrice(v);
        if(v.option_seq){
            myPrice += v.option_price;
            optionStr = `<div class="variant">${v.option_name}</div>`;
        }

        let itemStr = `
            <li class="checkout-product-item" data-price="${myPrice*v.cart_quantity}">
                <figure class="img-product">
                    <img src="${JSON.parse(v.img)[0]}" alt="product">
                    <span class="quantity">${v.cart_quantity}</span>
                </figure>
                <div class="content">
                    <div class="info pe-3">
                        <p class="name">${v.name}</p>
                        ${optionStr}
                    </div>
                    <span class="price">${comma(myPrice*v.cart_quantity)}원</span>
                </div>
            </li>
        `;

        $('.wrap-checkout-product').append(itemStr);
    }

    function setCheckoutTotalPrice(){

        let totalPrice = 0;

        let target = `.checkout-product-item`;

        $(target).each(function(i, v){
            totalPrice += $(v).attr('data-price')*1;
        });
        $('.tf-page-cart-checkout .total').html(comma(totalPrice)+'원');
    }

    function goPay(){
        // 최종 결제할때 PG사 띄우는 함수
        // location.href = `/z/shopping/checkend`;
        alerts('info', '다중옵션 및 재고로직관련 수정필요로 결제로직 잠시 막아둠');
    }
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>