<? include_once $_SERVER["DOCUMENT_ROOT"].'/_header.php'; ?>

<style>
    .nav-cart a{
        cursor: default;
    }
</style>

<div id="common-page-title"></div>

<!-- page-cart -->
<section class="flat-spacing-11">
    <div class="container">
        <div class="no-data tf-page-cart text-center mb-5 d-none">
            <h5 class="mb_24">장바구니가 비어있어요</h5>
            <p class="mb_24">메인페이지에서 베스트, 신상품 등 마음에 드는 상품을 장바구니에 담아보세요!</p>
            <a href="/" class="tf-btn btn-sm radius-3 btn-fill btn-icon animate-hover-btn">메인페이지로 가기<i class="icon icon-arrow1-top-left"></i></a>
        </div>

        <div class="tf-page-cart-wrap d-none">
            <div class="tf-page-cart-item"></div>
            <div class="tf-page-cart-footer">
                <div class="tf-cart-footer-inner">
                    <!-- <div class="tf-free-shipping-bar">
                        <div class="mb-4 position-relative">
                            <h6 class="mb-2">배송지 정보</h6>
                            <div class="users_delivery-wrap">
                                <div class="name_phone"></div>
                                <div class="address"></div>
                            </div>
                            <div class="users_delivery-wrap-no-data d-none">
                                배송지 정보를 입력해주세요.<br>정보가 입력된 뒤에 배송비와 결제합계 확인 가능해요.
                            </div>
                            <div class="delivery-change user" onclick="modalOpenUsersDeliveryList()">변경</div>
                            <div class="delivery-change guest d-none" onclick="modalOpenUsersDeliveryWrite()">입력</div>
                        </div>
                        <div class="tf-progress-bar">
                            <span style="width: 100%;">
                                <div class="progress-car">
                                    <i class="bi bi-truck"></i>
                                </div>
                            </span>
                        </div>
                        <div class="tf-progress-msg normal-info">
                            평균적으로 <span class="fw-6">1일</span> 이내에 상품을 받아볼 수 있어요
                        </div>
                        <div class="tf-progress-msg extra-shipping-info d-none">
                            <span class="fw-6">도서산간</span> 지역으로, 추가배송비가 발생해요
                        </div>
                    </div> -->
                    <div class="tf-page-cart-checkout">
                        <div class="tf-cart-totals-discounts light">
                            <h3>상품합계</h3>
                            <span class="total-value"><span class="total-price-product"></span>원</span>
                        </div>
                        <div class="tf-cart-totals-discounts light by-guest-address">
                            <h3>배송비합계</h3>
                            <span class="total-value"><span class="total-price-delivery"></span></span>
                        </div>
                        <div class="tf-cart-totals-discounts by-guest-address">
                            <h3>총결제합계</h3>
                            <span class="total-value"><span class="total-price"></span>원</span>
                        </div>
                        <div class="cart-checkout-btn">
                            <a href="javascript:goCheckout()" class="tf-btn w-100 btn-fill animate-hover-btn radius-3 justify-content-center">
                                <span><i class="bi bi-credit-card me-2"></i>결제하기</span>
                            </a>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 col-md-6 pe-md-1 mb-2">
                                <a href="javascript:modalOpenCartProductImage()" class="tf-btn btn-outline animate-hover-btn radius-3 link w-100 justify-content-center">상품사진 모아보기</a>
                            </div>
                            <div class="col-12 col-md-6 ps-md-1">
                                <a href="javascript:under()" class="tf-btn btn-outline animate-hover-btn radius-3 link w-100 justify-content-center">견적서 출력</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-cart -->

<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script>

    let nowPostnum;
    let guestAddress = localStorage.getItem('guestAddress');

    $(function() {
        console.log('ㅡ PAGE READY');
        setPageTitle('장바구니', 'cart');

        if(isLogin){
            let ud = getUsersDelivery().filter(item => item.default_yn === "Y")[0];
            drawUsersDeliveryInfo(ud.person, ud.phone, ud.address_postnum, ud.address, ud.address_detail);
        }else{
            $('.delivery-change.user').addClass('d-none');
            $('.delivery-change.guest').removeClass('d-none');
            if(guestAddress){
                guestAddress = JSON.parse(guestAddress);
                nowPostnum = guestAddress.address_postnum;
                drawUsersDeliveryInfo(guestAddress.person, guestAddress.phone, guestAddress.address_postnum, guestAddress.address, guestAddress.address_detail);
            }else{
                $('.by-guest-address').addClass('d-none');
                $('.users_delivery-wrap-no-data').removeClass('d-none');
            }
        }

        loadCart(true); // shop.js
    });    
    

    function setPageCartList(data){
        let freeship = cfLoad('name', '무료배송기준금액');
        freeship = freeship[0].value;
        
        $('#tbody-list').html(``);
        if(data.rows.length == 0){
            $('.tf-page-cart.no-data').removeClass('d-none');
        }else{
            $('.tf-page-cart-wrap').removeClass('d-none');

            let formStr = `
                <form class="delivery-bundle">
                    <table class="tf-table-page-cart">
                        <tbody class="tbody-list"></tbody>
                    </table>
                    <div class="delivery-info-wrap">
                        ${comma(freeship)}원 이상 구매시 무료배송
                    </div>
                </form>
            `;
            $('.tf-page-cart-item').append(formStr);

            $.each(data.rows, function(i, v){
                drawItem(v);
            });
            setSideCartTotalPrice(true); // shop.js
        }
    }


    function drawItem(v){

        let optionStr = ``;
        let myPrice = getMyPrice(v);
        if(v.option_seq){
            myPrice += v.option_price;
            optionStr = `<div class="cart-meta-variant">${v.option_type}: ${v.option_name}</div>`;
        }

        let checkStr = ``;
        if(v.cart_check_yn == 'Y') checkStr = `checked`;

        let itemStr = `
            <tr class="tf-cart-item file-delete tf-cart-item-${v.cart_seq}" data-price="${myPrice*v.cart_quantity}" data-count="${v.cart_quantity}" data-dt_seq="${v.dt_seq}">
                <td class="tf-cart-item_product">
                    <a href="/z/product/detail?seq=${v.seq}" class="img-box">
                        <img src="${JSON.parse(v.img)[0]}" alt="img-product">
                    </a>
                    <div class="cart-info">
                        <input class="form-check-input cart-check_yn" type="checkbox" ${checkStr} data-cart_seq="${v.cart_seq}">
                        <a href="/z/product/detail?seq=${v.seq}" class="cart-title link">${v.name}</a>
                        ${optionStr}
                        <span class="remove-cart link remove" onclick="cartItemRemove('${v.cart_seq}', 'tf-cart-item-', true)"><i class="bi bi-trash3"></i></span>
                    </div>
                </td>
                <td class="tf-cart-item_price tf-variant-item-price" cart-data-title="가격">
                    <div class="cart-price price">${comma(myPrice)}원</div>
                </td>
                <td class="tf-cart-item_quantity" cart-data-title="수량">
                    <div class="cart-quantity">
                        <div class="wg-quantity">
                            <span class="product-info-choice-item-count-minus" onclick="cartItemCount('minus', '${v.cart_seq}', '${myPrice}', 'tf-cart-item-', true)"><i class="bi bi-dash"></i></span>
                            <span class="product-info-choice-item-count">${v.cart_quantity}</span>
                            <span class="product-info-choice-item-count-plus" onclick="cartItemCount('plus', '${v.cart_seq}', '${myPrice}', 'tf-cart-item-', true)"><i class="bi bi-plus"></i></span>
                        </div>
                    </div>
                </td>
                <td class="tf-cart-item_total tf-variant-item-total" cart-data-title="합계">
                    <div class="cart-total price"><span>${comma(myPrice*v.cart_quantity)}</span>원</div>
                </td>
            </tr>
        `;
        $(`form.delivery-bundle .tbody-list`).append(itemStr);
    }

    function setPageCartTotalPrice(){
        // 상품가격 + 배송비 최종 찍어주기
        let productTotal = $('.tf-page-cart-checkout .tf-cart-totals-discounts.light .total-value .total-price-product').attr('data-price')*1;
        $('.tf-page-cart-checkout .tf-cart-totals-discounts .total-value .total-price').html(comma(productTotal));
        $('.tf-page-cart-checkout .tf-cart-totals-discounts.light .total-value .total-price-delivery').html('무료');
    }



</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>