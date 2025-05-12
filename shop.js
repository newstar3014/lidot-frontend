// 상품, 주문, 결제 등 쇼핑몰 관련 로직들의 공통 코드 모음

function insertSearchKeyword(keyword){
    ajaxCall('/common/insert', { table: 'search_keyword', obj: { keyword }}, function(data) {});
}

function goMyOrders(){
    if(isLogin){
        location.href = `/z/mypage/orders`;
    }else{
        location.href = `/z/guest/auth`;
    }
}


function makeProductItemStr(v){
    let imgArray = JSON.parse(v.img);
    let imgHover = imgArray[1];
    if(!imgHover) imgHover = imgArray[0];
    
    
    let priceStr = getMyPriceStr(v);

    let itemStr = `
        <div class="card-product style-4 grid">
            <div class="card-product-wrapper">
                <a href="/z/product/detail?seq=${v.seq}" class="product-img">
                    <img class="lazyload img-product" data-src="${imgArray[0]}" src="${imgArray[0]}" alt="image-product">
                    <img class="lazyload img-hover" data-src="${imgHover}" src="${imgHover}" alt="image-product">
                </a>
                <div class="list-product-btn column-right">
                    <a href="#quick_view" data-bs-toggle="modal" class="box-icon quickview bg_white round tf-btn-loading" data-seq="${v.seq}">
                        <span class="icon icon-view"></span>
                        <span class="tooltip">퀵뷰</span>
                    </a>
                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="box-icon compare bg_white round btn-icon-action" data-seq="${v.seq}">
                        <span class="icon icon-compare"></span>
                        <span class="tooltip">상품비교</span>
                        <span class="icon icon-check"></span>
                    </a>
                </div>
            </div>
            <div class="card-product-info">
                <a href="/z/product/detail?seq=${v.seq}" class="title link">${v.name}</a>
                ${priceStr}
            </div>
        </div>
    `;

    return itemStr;
}

function getMyPrice(v){
    let price_my = v.price_g;
    if(isLogin){
        if(my_obj.type == 'N'){
            price_my = v.price_n;
        }else if(my_obj.type == 'B'){
            price_my = v.price_b;
        }
    }
    return price_my;
}

function getMyPriceStr(v){
    let price_my = getMyPrice(v);
    let priceStr = `<span class="price current-price">${comma(price_my)}원</span>`;
    if(isLogin){
        if(price_my != v.price_g){
            priceStr = `
            <div class="tf-product-info-price">
                <div class="price-on-sale">${comma(price_my)}원</div>
                <div class="compare-at-price">${comma(v.price_g)}원</div>
                <div class="badges-on-sale"><span>${getPriceSalePercent(price_my, v.price_g)}</span>%</div>
            </div>`;
        }
    }
    return priceStr;
}

function getPriceSalePercent(p1, p2) {
    if (p2 <= 0) {
        return 0; // 원래 가격이 0 이하이면 할인율을 계산할 수 없음
    }
    return Math.round((p2 - p1) / p2 * 100); // 소수점 없이 반올림
}


/*
// 상품 퀵뷰 제어부분 시작 ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
*/

let quickViewSwiper = null;

// 퀵뷰 버튼 클릭 시 제어
document.addEventListener("DOMContentLoaded", function () {
    document.addEventListener("click", function (e) {
        const target = e.target.closest('a[data-bs-toggle="modal"][href="#quick_view"]');
        if (!target) return;

        e.preventDefault(); // 자동 모달 열기 막기
        const seq = target.getAttribute('data-seq');
        prepareQuickViewModal(seq);
    });
});

function prepareQuickViewModal(seq) {
    ajaxCall('/product/list', { ppp: DEFAULT_PPP, page: 1, seq }, function (data) {
        let v = data.rows[0];

        // 퀵뷰모달의 상품정보부분 생성
        $('#quick_view-info').html(makeProductInfoStr(v, 'quick_view'));

        // 이미지 슬라이드 HTML 생성
        let imgStr = ``;
        $.each(JSON.parse(v.img), function (ii, vv) {
            imgStr += `
                <div class="swiper-slide">
                    <div class="item">
                        <img src="${vv}" alt="">
                    </div>
                </div>`;
        });
        $('#quick_view-img').html(imgStr);

        // 모달 DOM 가져오기
        const modalEl = document.getElementById('quick_view');
        const modal = new bootstrap.Modal(modalEl);

        // 모달 열린 직후 실행할 Swiper 초기화 등록
        modalEl.addEventListener('shown.bs.modal', function onceOpened() {
            if (quickViewSwiper) {
                quickViewSwiper.destroy(true, true);
            }
            quickViewSwiper = new Swiper('.tf-single-slide', {
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                loop: true,
                slidesPerView: 1,
                spaceBetween: 0,
                navigation: {
                    clickable: true,
                    nextEl: ".single-slide-prev",
                    prevEl: ".single-slide-next",
                },
            });

            // 중복 리스너 방지
            modalEl.removeEventListener('shown.bs.modal', onceOpened);
        });

        // 수동으로 모달 열기
        modal.show();
    });
}

document.addEventListener("DOMContentLoaded", function () {
    const cleanUpModal = () => {
        const isAnyModalOpen = document.querySelector('.modal.show');
        if (!isAnyModalOpen) {
            document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
            document.body.classList.remove('modal-open');
            document.body.style = '';
        }
    };

    ['quick_view', 'shoppingCart'].forEach(id => {
        const modalEl = document.getElementById(id);
        if (modalEl) {
            modalEl.addEventListener('hidden.bs.modal', cleanUpModal);
        }
    });
});

/*
//  ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ 상품 퀵뷰 제어부분 끝
*/



// 상품정보부분(상품상세 우측부분) 공통 그려주는 함수
function makeProductInfoStr(v, _type){

    let myPrice = getMyPrice(v);
    let optionStr = ``;
    let priceTotal = ``;
    let countTotal = ``;
    let choiceStr = ``;
    if(v.option_yn == `Y`){
        // 옵션 있을때 처리
        optionStr = makeProductOptionStr(v, _type, myPrice);
        countTotal = `0`;
        priceTotal = 0;
    }else{
        // 옵션 없을때 처리
        countTotal = `1`;
        priceTotal = myPrice;
        choiceStr = makeProductInfoChoiceNoOptionStr(_type, myPrice, v.seq, v.name);
    }

    let tagStr = ``;
    if(v.tags.length > 0){
        tagStr = `<div class="tf-product-info-badges">`;
        $.each(v.tags, function(ii, vv){
            tagStr += `<div class="badges text-uppercase">#${vv.tag}</div>`;
        });
        tagStr += `</div>`;
    }

    let infoStr = `
        <div class="tf-product-info-list product-info-wrap-${_type}">
            <div id="quick_view-title" class="tf-product-info-title"><h5>${v.name}</h5></div>
            <div class="tf-product-info-price">
                <div class="price">${getMyPriceStr(v)}</div>
            </div>
            ${tagStr}
            <div class="tf-product-info-badges">
                <div class="product-status-content">
                    <i class="bi bi-info-circle"></i>
                    <p class="fw-5">"${v.oneline}"</p>
                </div>
            </div>
            ${optionStr}
            <div class="product-info-choice-wrap">
                ${choiceStr}
            </div>
            <div class="product-info-total-wrap">
                <div class="product-info-total-desc">선택수량 <span class="product-info-total-desc-count">${countTotal}</span>개, 총 상품금액</div>
                <div class="product-info-total-price"><span>${comma(priceTotal)}</span>원</div>
            </div>
            <div class="tf-product-info-buy-button">
                <form class="">
                    <a href="javascript:addCart('${v.seq}', '${_type}')" class="tf-btn btn-fill justify-content-center fw-6 fs-16 flex-grow-1 animate-hover-btn btn-add-to-cart"><span>장바구니 담기</span></a>
                    <a href="#compare" data-bs-toggle="offcanvas" aria-controls="offcanvasLeft" class="tf-product-btn-wishlist hover-tooltip box-icon bg_white compare btn-icon-action">
                        <span class="icon icon-compare"></span>
                        <span class="tooltip">상품비교</span>
                        <span class="icon icon-check"></span>
                    </a>
                    <div class="w-100">
                        <a href="javascript:goCheckoutDirect('${v.seq}')" class="btns-full tf-btn fs-16 fw-6 flex-grow-1 animate-hover-btn"><i class="bi bi-credit-card me-2"></i>바로구매</a>
                    </div>
                </form>
            </div>
            <div class="hide-detail">
                <a href="/z/product/detail?seq=${v.seq}" class="tf-btn fw-6 btn-line">상품 상세보러 가기<i class="icon icon-arrow1-top-left"></i></a>
            </div>
        </div>
    `;
    return infoStr;
}

function makeProductOptionStr(data, _type, myPrice){
    
    let optionStr = `<div class="product-option-wrap">`;
    
    $.each(data.options, function(i, v){

        let imgStr = ``;
        if(v.img) imgStr = `<div class="product-option-item-img" style="background-image:url('${v.img}')"></div>`;

        optionStr += `
            <div class="product-option-item product-option-item-${v.seq}" onclick="makeProductInfoChoiceStr('${_type}', this, '${myPrice}')" data-p_seq="${data.seq}" data-price="${v.price_o}" data-seq="${v.seq}" data-name="${v.name}">
                ${imgStr}
                <div class="product-option-item-name">${v.name}</div>
                <div class="product-option-item-price">+${comma(v.price_o)}원</div>
            </div>
        `;
    });

    optionStr += `</div>`;
    
    return optionStr;
}


function makeProductInfoChoiceNoOptionStr(_type, myPrice, p_seq, name){
    // 옵션 없는 상품의 경우 상품 기본정보로 한번만 그리는 함수
    let itemStr = makeProductInfoChoiceItemStr(p_seq, myPrice, name, _type, false, p_seq);
    return itemStr;
}

function makeProductInfoChoiceStr(_type, e, myPrice){
    // 상품상세에서 옵션 선택하면 해당 선택상품 그려주는 함수
    let productSeq = $(e).attr('data-p_seq');
    let optionSeq = $(e).attr('data-seq');
    let target = productSeq;
    if(optionSeq){
        target += `-${optionSeq}`;
    }
    let optionName = $(e).attr('data-name');
    let optionPrice = $(e).attr('data-price')*1 + myPrice*1;

    if($(`.product-info-wrap-${_type} .product-info-choice-item-${target}`).length == 0){
        let itemStr = makeProductInfoChoiceItemStr(target, optionPrice, optionName, _type, true, productSeq, optionSeq);
        $(`.product-info-wrap-${_type} .product-info-choice-wrap`).append(itemStr);
    }else{
        productInfoItemCount('plus', _type, target, optionPrice);
    }

    setProductInfoTotalPrice(_type);
}

function makeProductInfoChoiceItemStr(target, optionPrice, optionName, _type, isOption, p_seq, po_seq = null){
    
    let nameStr = isOption ? `<div class="product-info-choice-item-name">${optionName}</div>` : ``;
    let removeStr = isOption ? `<div class="product-info-choice-item-remove" onclick="productInfoChoiceItemRemove('${_type}', '${target}')"><i class="bi bi-trash3"></i></div>` : ``;
    let po_seqStr = po_seq ? `data-po_seq="${po_seq}"` : ``;
    
    let itemStr = `
        <div class="product-info-choice-item product-info-choice-item-${target}" data-p_seq="${p_seq}" ${po_seqStr} data-count="1" data-price="${optionPrice}">
            ${nameStr}
            <div class="product-info-choice-item-count-wrap">
                <span class="product-info-choice-item-count-minus" onclick="productInfoItemCount('minus', '${_type}', '${target}', '${optionPrice}')"><i class="bi bi-dash"></i></span>
                <span class="product-info-choice-item-count">1</span>
                <span class="product-info-choice-item-count-plus" onclick="productInfoItemCount('plus', '${_type}', '${target}', '${optionPrice}')"><i class="bi bi-plus"></i></span>
            </div>
            <div class="product-info-choice-item-price"><span>${comma(optionPrice)}</span>원</div>
            ${removeStr}
        </div>
    `;
    return itemStr;
}

function productInfoChoiceItemRemove(_type, target) {
    // 상품상세에서 선택한 옵션의 휴지통버튼 클릭시
    const selectorBase = `.product-info-wrap-${_type} .product-info-choice-item-${target}`;
    $(selectorBase).remove();
    setProductInfoTotalPrice(_type);
}

function productInfoItemCount(cal, _type, target, price) {
    // 상품상세에서 수량 더하기빼기 클릭시 실행
    const selectorBase = `.product-info-wrap-${_type} .product-info-choice-item-${target}`;
    const $item = $(selectorBase);
    const $countEl = $item.find('.product-info-choice-item-count');
    const $priceEl = $item.find('.product-info-choice-item-price span');

    let count = parseInt($countEl.text(), 10) || 1;

    if (cal === 'minus' && count > 1) {
        count--;
    } else if (cal === 'plus') {
        count++;
    } else{
        return;
    }

    $item.attr('data-count', count);
    $item.attr('data-price', count*price);
    $countEl.text(count);
    $priceEl.text(comma(count * price));

    setProductInfoTotalPrice(_type);
}

function setProductInfoTotalPrice(_type){
    let $targetTotalCount = $(`.product-info-wrap-${_type} .product-info-total-desc-count`);
    let $targetTotalPrice = $(`.product-info-wrap-${_type} .product-info-total-price span`);
    let $choice = $(`.product-info-wrap-${_type} .product-info-choice-item`);
    
    let sumCount = 0, sumPrice = 0;
    $.each($choice, function(i, v){
        sumCount += $(v).attr('data-count')*1;
        sumPrice += $(v).attr('data-price')*1;
    });

    $targetTotalCount.text(comma(sumCount));
    $targetTotalPrice.text(comma(sumPrice));
}


function goCheckoutDirect(seq){
    // 바로구매 처리
    location.href = `/z/shopping/checkout?seq=${seq}`;
}


function goCheckout(){
    // 장바구니에 주문대기 상태 & 체크Y 인 갯수 가져와서 있으면 넘어감, 비회원의 경우 배송지정보가 있어야 함
    ajaxCall('/cart/count', { user_type: getUserType(), send_value: getSendValue(), check_yn: 'Y' }, function(data) {
        const count = data?.[0]?.cnt || 0;
        if (count === 0) return alerts('warning', '결제할 상품을 체크해주세요');
        
        location.href = '/z/shopping/checkout';
    });
}



function setPageTitle(title, subtitle){
    let titleStr = `
        <div class="tf-page-title style-2">
            <div class="container-full">
                <div class="heading text-center">${title}</div>
                <div class="heading-sub text-center">${subtitle}</div>
            </div>
        </div>
    `;
    $('#common-page-title').html(titleStr);
}


function goMypage(url){
    if(isLogin){
        location.href = `/z/mypage/${url}`;
    }else{
        new bootstrap.Modal(document.getElementById('login')).show();
    }
}


// ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ
// 장바구니 관련 시작 
//


document.addEventListener('DOMContentLoaded', function () {
    const shoppingCartModal = document.getElementById('shoppingCart');
    shoppingCartModal.addEventListener('show.bs.modal', function (event) {
        if (typeof now_url !== 'undefined' && now_url === '/z/shopping/cart') {
            event.preventDefault(); // 현재 주소가 장바구니 페이지 일 경우 사이드 장바구니 열림 방지
        }else{
            loadCart(); // 장바구니 데이터 로드
        }
    });

    const searchModal = document.getElementById('canvasSearch');
    searchModal.addEventListener('show.bs.offcanvas', function (event) {
        loadSearchKeywordHot();
    });
});

function loadSearchKeywordHot(){
    ajaxCall('/etc/keyword/hot', {}, function(data) {
        $('.tf-quicklink-list').html('');
        $.each(data, function(i, v){
            let hotStr = `
                <li class="tf-quicklink-item">
                    <a href="/z/product/list?sk=${v.keyword}" class="">${v.keyword}</a>
                </li>
            `;
            $('.tf-quicklink-list').append(hotStr);
        });
    });
}


function loadCart(isPage = false){
    const send_value = isLogin ? my_obj.user_seq : guest_uuid;
    const user_type = isLogin ? 'member' : 'guest';

    ajaxCall('/cart/list', { user_type, send_value, status_type : `주문대기`, orderby: `c.seq ASC` }, function(data) {        
        console.log(data);
        
        if(!isPage){
            // 장바구니 상세페이지 아닌 사이드장바구니 처리
            $('.tf-mini-cart-items').html(``);
            if(data.rows.length == 0){
                $('.tf-mini-cart-main .no-data').removeClass('d-none');
                $('.tf-cart-totals-discounts').addClass('d-none');
            }else{
                $('.tf-mini-cart-main .no-data').addClass('d-none');
                $('.tf-cart-totals-discounts').removeClass('d-none');
                $.each(data.rows, function(i, v){
                    drawSideCartItem(v);
                });
                
                setSideCartTotalPrice();
            }
        }else{
            setPageCartList(data); // cart.php
        }
    });
}

function setSideCartTotalPrice(isPage = false){

    // isPage : true 이면 장바구니 페이지에서의 호출, false면 사이드 장바구니에서 호출

    let totalPrice = 0;

    let target = `.tf-mini-cart-item`;
    if(isPage) target = `.tf-cart-item`;

    if($(target).length == 0){
        $('.tf-mini-cart-main .no-data').removeClass('d-none');
        $('.tf-page-cart.no-data').removeClass('d-none');
        $('.tf-page-cart-wrap').addClass('d-none');
        $('.tf-cart-totals-discounts').addClass('d-none');
        return;
    }else{
        $('.tf-cart-totals-discounts').removeClass('d-none');
    }

    $(target).each(function(i, v){
        totalPrice += $(v).attr('data-price')*1;
    });
    $('.tf-mini-cart-bottom .tf-totals-total-value span').html(comma(totalPrice));
    $('.tf-page-cart-checkout .tf-cart-totals-discounts.light .total-value .total-price-product').html(comma(totalPrice));
    $('.tf-page-cart-checkout .tf-cart-totals-discounts.light .total-value .total-price-product').attr('data-price', totalPrice);
}

function drawSideCartItem(v){

    let optionStr = ``;
    let myPrice = getMyPrice(v);
    if(v.option_seq){
        myPrice += v.option_price;
        optionStr = `<div class="meta-variant">${v.option_type}: ${v.option_name}</div>`;
    }

    let checkStr = ``;
    if(v.cart_check_yn == 'Y') checkStr = `checked`;

    let itemStr = `
        <div class="tf-mini-cart-item tf-mini-cart-item-${v.cart_seq}" data-price="${myPrice*v.cart_quantity}" data-count="${v.cart_quantity}">
            <input class="form-check-input cart-check_yn" type="checkbox" ${checkStr} data-cart_seq="${v.cart_seq}">
            <div class="tf-mini-cart-image">
                <a href="/z/product/detail?seq=${v.seq}">
                    <img src="${JSON.parse(v.img)[0]}">
                </a>
            </div>
            <div class="tf-mini-cart-info">
                <a class="title link" href="/z/product/detail?seq=${v.seq}">${v.name}</a>
                ${optionStr}
                <div class="price fw-6"><span>${comma(myPrice*v.cart_quantity)}</span>원</div>
                <div class="tf-mini-cart-btns">
                    <div class="wg-quantity small">
                        <span class="product-info-choice-item-count-minus" onclick="cartItemCount('minus', '${v.cart_seq}', '${myPrice}', 'tf-mini-cart-item-')"><i class="bi bi-dash"></i></span>
                        <span class="product-info-choice-item-count">${v.cart_quantity}</span>
                        <span class="product-info-choice-item-count-plus" onclick="cartItemCount('plus', '${v.cart_seq}', '${myPrice}', 'tf-mini-cart-item-')"><i class="bi bi-plus"></i></span>
                    </div>
                    <div class="tf-mini-cart-remove" onclick="cartItemRemove('${v.cart_seq}', 'tf-mini-cart-item-')"><i class="bi bi-trash3"></i></div>
                </div>
            </div>
        </div>
    `;
    $('.tf-mini-cart-items').append(itemStr);
}

function cartItemRemove(cart_seq, target, isPage = false){
    ajaxCall('/cart/remove', { seq: cart_seq }, function(data) {

        let dt_seq;
        if(isPage){
            dt_seq = $(`.${target}${cart_seq}`).attr('data-dt_seq');
        }

        $(`.${target}${cart_seq}`).remove();

        if(isPage){
            if($(`form.delivery-${dt_seq} .${target.slice(0, -1)}`).length == 0){
                $(`form.delivery-${dt_seq}`).remove();
            }
        }

        setSideCartTotalPrice(isPage);
        setHeaderCartCount();
    });
}

function cartItemCount(cal, cart_seq, price, target, isPage = false){
    const selectorBase = `.${target}${cart_seq}`;
    const $item = $(selectorBase);
    const $countEl = $item.find('.product-info-choice-item-count');
    const $priceEl = $item.find('.price span');

    let count = parseInt($countEl.text(), 10) || 1;

    if (cal === 'minus' && count > 1) {
        count--;
    } else if (cal === 'plus') {
        count++;
    } else{
        return;
    }

    ajaxCall('/common/update', { table: 'cart', seq: cart_seq, obj: { quantity: count } }, function(data) {
        
        $item.attr('data-count', count);
        $item.attr('data-price', count*price);
        $countEl.text(count);
        $priceEl.text(comma(count * price));
    
        setSideCartTotalPrice(isPage);
        
    });
    
}

function addCart(p_seq, _type){

    let cartArray = [];

    $(`.product-info-wrap-${_type} .product-info-choice-item`).each(function(i, v){        
        
        let obj = {};
        let p_seq = $(v).attr('data-p_seq');
        let po_seq = $(v).attr('data-po_seq');
        let quantity = $(v).attr('data-count');

        obj.p_seq = p_seq;
        if(po_seq) obj.po_seq = po_seq;
        obj.quantity = quantity;

        cartArray.push(obj)
    });

    if(cartArray.length == 0){
        alerts('info', '옵션을 선택하여 최소 1개 이상 상품을 추가해주세요');
        return;
    }

    let auth_login = 'N', auth_value = guest_uuid;
    if(isLogin) {
        auth_login = 'Y';
        auth_value = my_obj.user_seq;
    }

    ajaxCall('/cart/add', { cartArray, isLogin: auth_login, auth_value }, function(data) {
        setHeaderCartCount();
        new bootstrap.Modal(document.getElementById('shoppingCart')).show();
    });

}


$(document).on('change', '.cart-check_yn', function () {
    let cart_seq = $(this).attr('data-cart_seq');
    let check_yn = 'N';
    if ($(this).prop('checked')) check_yn = 'Y';
    ajaxCall('/common/update', { table: 'cart', seq: cart_seq, obj: { check_yn } }, function(data) {});
});


//
// 장바구니 관련 끝 
// ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ


function getUsersDelivery(){
    // 회원 배송지목록 가져오기
    let return_data;
    ajaxCall('/common/list', { table: 'users_delivery', whereField: 'user_seq', whereValue: my_obj.user_seq }, function(data) {
        return_data = data;
    });
    return return_data;
}


let modalUsersDeliveryInstance, modalUsersDeliveryWriteInstance, modalCartProductImageInstance;
document.addEventListener("DOMContentLoaded", function () {
    modalUsersDeliveryInstance = new bootstrap.Modal(document.getElementById('modal-users_delivery-list'));
    modalUsersDeliveryWriteInstance = new bootstrap.Modal(document.getElementById('modal-users_delivery-write'));
    modalCartProductImageInstance = new bootstrap.Modal(document.getElementById('modal-cart-product-image'));
});


function modalOpenUsersDeliveryList(){

    let data = getUsersDelivery();
    $('#modal-users_delivery-list .modal-body').html('');
    $.each(data, function(i, v){
        let str = `
            <div class="users_delivery-wrap" data-seq="${v.seq}" data-person="${v.person}" data-phone="${v.phone}" data-address="${v.address}" data-address_detail="${v.address_detail}" data-address_postnum="${v.address_postnum}">
                <div>${v.person} / ${formatPhoneNumber(v.phone)}</div>
                <div>(${v.address_postnum}) ${v.address} ${v.address_detail}</div>
            </div>
        `;
        $('#modal-users_delivery-list .modal-body').append(str);
    });

    modalUsersDeliveryInstance.show();
}


$(document).on('click', '.users_delivery-wrap', function() {
    let ud_seq = $(this).attr('data-seq');
    let person = $(this).attr('data-person');
    let phone = $(this).attr('data-phone');
    let address = $(this).attr('data-address');
    let address_detail = $(this).attr('data-address_detail');
    let address_postnum = $(this).attr('data-address_postnum');

    ajaxCall('/user/deliveryUpdate', { user_seq: my_obj.user_seq, seq: ud_seq }, function(data) {
        drawUsersDeliveryInfo(person, phone, address_postnum, address, address_detail);
        setSideCartTotalPrice(true);
        modalUsersDeliveryInstance.hide();
    });

});


function drawUsersDeliveryInfo(person, phone, address_postnum, address, address_detail){
    nowPostnum = address_postnum;
    $('.users_delivery-wrap .name_phone').html(`${person} / ${formatPhoneNumber(phone)}`);
    $('.users_delivery-wrap .address').html(`(${address_postnum}) ${address} ${address_detail}`);
}


function modalOpenUsersDeliveryWrite(){
    if (modalUsersDeliveryInstance) modalUsersDeliveryInstance.hide();
    modalUsersDeliveryWriteInstance.show();
}


function modalUsersDeliveryWriteAddress(){
    new daum.Postcode({
        oncomplete: function(data) {
            $('#join-address').val(data.address);
            $('#join-address_postnum').val(data.zonecode);
        }
    }).open();
}


function modalUsersDeliveryWriteDone(){

    let obj = {
        default_yn: 'Y',
        person: $('#join-name').val(),
        phone: $('#join-phone').val().replace(/-/g, ''),
        address: $('#join-address').val(),
        address_detail: $('#join-address_detail').val(),
        address_postnum: $('#join-address_postnum').val(),
    };

    if(!obj.person){
        alerts('warning', '성함을 입력해주세요.');
        return false;
    }
    if(!obj.phone){
        alerts('warning', '휴대폰 번호를 입력해주세요.');
        return false;
    }
    if(!validPhone(obj.phone)){
        alerts('warning', '휴대폰 번호를 올바르게 입력해주세요.');
        return false;
    }
    if(!obj.address){
        alerts('warning', '주소를 입력해주세요.');
        return false;
    }
    if(!obj.address_detail){
        alerts('warning', '상세주소를 입력해주세요.');
        return false;
    }

    if(isLogin){
        obj.user_seq = my_obj.user_seq;
        ajaxCall('/common/insert', { table: 'users_delivery', obj }, function(data) {
            ajaxCall('/user/deliveryUpdate', { user_seq: my_obj.user_seq, seq: data.insertId }, function(data) {});
        });
    }else{
        localStorage.setItem('guestAddress', JSON.stringify(obj));
        $('.by-guest-address').removeClass('d-none');
        $('.users_delivery-wrap-no-data').addClass('d-none');
    }

    drawUsersDeliveryInfo(obj.person, obj.phone, obj.address_postnum, obj.address, obj.address_detail);
    setSideCartTotalPrice(true);
    modalUsersDeliveryWriteInstance.hide();
}















// 상품사진 모아보기 시작 ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ

let modalThumbsSwiper = null;
let modalMainSwiper = null;
function modalOpenCartProductImage(){
    if(!isLogin){
        new bootstrap.Modal(document.getElementById('login')).show();
    }else{
        const send_value = isLogin ? my_obj.user_seq : guest_uuid;
        const user_type = isLogin ? 'member' : 'guest';
        ajaxCall('/cart/list', { user_type, send_value, status_type : `주문대기`, orderby: `c.seq ASC` }, function(data) {
            console.log(data);
            
            if (modalThumbsSwiper) {
                modalThumbsSwiper.destroy(true, true);
                modalThumbsSwiper = null;
              }
              if (modalMainSwiper) {
                modalMainSwiper.destroy(true, true);
                modalMainSwiper = null;
              }

              $('#modal-cart-product-image-slide1').empty();
                $('#modal-cart-product-image-slide2').empty();

            $.each(data.rows, function(i, v){
                drawModalCartProductImageSliderItem(v);
            });

            modalThumbsSwiper = new Swiper(".mySwiper", {
                spaceBetween: 10,
                slidesPerView: 5,
                freeMode: true,
                centeredSlides: false,
                centerInsufficientSlides: true,
                watchSlidesProgress: true,
                observer: true,
                observeParents: true,
              });
              
              modalMainSwiper  = new Swiper(".mySwiper2", {
                spaceBetween: 0,
                observer: true,
                observeParents: true,
                navigation: {
                  nextEl: ".swiper-button-next",
                  prevEl: ".swiper-button-prev",
                },
                thumbs: {
                  swiper: modalThumbsSwiper,
                },
              });

              modalCartProductImageInstance.show();
            
        });
    }
}

function drawModalCartProductImageSliderItem(v){

    let img = JSON.parse(v.img)[0];

    let slide1Str = `
        <div class="swiper-slide" data-color="brown">
                <img class="lazyload" data-src="${img}" src="${img}" alt="img-product">
        </div>
    `;
    $('#modal-cart-product-image-slide1').append(slide1Str);

    let slide2Str = `
        <div class="swiper-slide stagger-item" data-color="brown">
            <div class="item">
                <img class="lazyload" data-src="${img}" src="${img}" alt="img-product">
            </div>
        </div>
    `;
    $('#modal-cart-product-image-slide2').append(slide2Str);
}

// ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ 상품사진 모아보기 끝
