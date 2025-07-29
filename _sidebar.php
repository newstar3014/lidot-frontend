<!-- mobile menu -->
<div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
    <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
    <div class="mb-canvas-content">
        <div class="mb-body">
            <ul class="nav-ul-mb" id="wrapper-menu-navigation"></ul>
            
        </div>
        <div class="mb-bottom">
            <div class="mb-other-content">
                <div class="mb-notice">
                    <img src="/img/logo.png" alt="">
                </div>
                <ul class="mb-info">
                    <li>Address: 수원시 권선구 서수원로 523번길 20-1</li>
                    <!-- <li>Email: <b>lidot.official@gmail.com</b></li> -->
                    <!-- <li>Phone: <b>031-891-0610</b></li> -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /mobile menu -->


<!-- shoppingCart -->
<div class="modal fullRight fade modal-shopping-cart" id="shoppingCart">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="header">
                <div class="title fw-5">장바구니</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="wrap">
                <div class="tf-mini-cart-threshold">
                    <div class="tf-progress-bar">
                        <span style="width: 100%;">
                            <div class="progress-car">
                                <i class="bi bi-truck"></i>
                            </div>
                        </span>
                    </div>
                    <div class="tf-progress-msg">
                        평균적으로 <span class="fw-6">1일</span> 이내에 상품을 받아볼 수 있어요
                    </div>
                </div>
                <div class="tf-mini-cart-wrap">
                    <div class="tf-mini-cart-main">
                        <div class="tf-mini-cart-sroll">
                            <div class="tf-mini-cart-items"></div>
                            <div class="no-data d-none">
                                <i class="no-data bi bi-cart-dash"></i>
                                장바구니에 상품이 없어요.
                            </div>
                        </div>
                    </div>
                    <div class="tf-mini-cart-bottom">
                        <div class="tf-mini-cart-bottom-wrap">
                            <div class="tf-cart-totals-discounts">
                                <div class="tf-cart-total"><i class="bi bi-cash-stack"></i> 합계</div>
                                <div class="tf-totals-total-value fw-6"><span></span>원</div>
                            </div>
                            <div class="tf-cart-tax">한눈에 크게 보려면 <a href="/z/shopping/cart">장바구니 상세보기</a> 에서 확인하세요!</div>
                            <div class="tf-mini-cart-line"></div>
                            <div class="tf-mini-cart-view-checkout">
                                <a href="/z/shopping/cart" class="tf-btn btn-outline animate-hover-btn radius-3 link w-100 justify-content-center">장바구니 상세보기</a>
                                <a href="javascript:goCheckout()" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span><i class="bi bi-credit-card me-2"></i>결제하기</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /shoppingCart -->



<!-- canvasSearch -->
<div class="offcanvas offcanvas-end canvas-search" id="canvasSearch">
    <div class="canvas-wrapper">
        <header class="tf-search-head">
            <div class="title fw-5">
                상품 검색
                <div class="close">
                    <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
                </div>
            </div>
            <div class="tf-search-sticky">
                <form class="tf-mini-search-frm" action="/z/product/list">
                    <fieldset class="text">
                        <input type="text" placeholder="검색어를 입력하세요" class="" name="sk" tabindex="0" value="" aria-required="true" required="">
                    </fieldset>
                    <button class="" type="submit"><i class="icon-search"></i></button>
                </form>
            </div>
        </header>
        <div class="canvas-body p-0">
            <div class="tf-search-content">
                <div class="tf-cart-hide-has-results">
                    <div class="tf-col-quicklink">
                        <div class="tf-search-content-title fw-5"><i class="bi bi-fire"></i> 인기 검색어</div>
                        <ul class="tf-quicklink-list"></ul>
                    </div>
                    <div class="tf-col-content">
                        <div class="tf-search-content-title fw-5"><i class="bi bi-box2-heart"></i> 인기 상품</div>
                        <div class="tf-search-hidden-inner">
                            <div class="tf-loop-item">
                                <div class="image">
                                    <a href="#">
                                        <img src="https://lidot-s3.s3.ap-northeast-2.amazonaws.com/images/2022-04-18product/20220418111741VA8900CRmain7.jpg" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="#">[바노테크] 욕실 악세사리 휴지걸이/컵대/수건걸이/비누대/옷걸이 VA-8900CR 5품세트 크롬</a>
                                    <div class="tf-product-info-price">
                                        <div class="price fw-6">200,000원</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-loop-item">
                                <div class="image">
                                    <a href="#">
                                        <img src="https://lidot-s3.s3.ap-northeast-2.amazonaws.com/images/2025-02-10%2010%3A52%3A54product/20250210105254_img.jpg" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="#">[아메리칸스탠다드] AAACACIAAA 4H 아카시아 ACACIA 4H 아카시아 욕조 수전 FB3180</a>
                                    <div class="tf-product-info-price">
                                        <div class="price fw-6">396,100원</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-loop-item">
                                <div class="image">
                                    <a href="#">
                                        <img src="https://lidot-s3.s3.ap-northeast-2.amazonaws.com/images/2022-04-18product/20220418111741VA8900CRmain7.jpg" alt="">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="#">[바노테크] 욕실 악세사리 휴지걸이/컵대/수건걸이/비누대/옷걸이 VA-8900CR 5품세트 골드</a>
                                    <div class="tf-product-info-price">
                                        <div class="price fw-6">220,000원</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /canvasSearch -->



<script>

    $(function() {
        menuLoad();
    });

    function menuLoad(){
        ajaxCall('/category/menu', {}, function(data) {
            menuDraw(data);
        });
    }

    function menuDraw(data){
        let str = ``;
        let strm = ``;
        
        str += `
            <li class="menu-item"><a href="/z/product/list" class="item-link">ALL</a></li>
            <li class="menu-item"><a href="/z/product/list?target=best" class="item-link">BEST</a></li>
            <li class="menu-item"><a href="/z/product/list?target=new" class="item-link">NEW</a></li>
        `;
        strm += `
            <li class="nav-mb-item"><a href="/z/product/list" class="mb-menu-link">ALL</a></li>
            <li class="nav-mb-item"><a href="/z/product/list?target=best" class="mb-menu-link">BEST</a></li>
            <li class="nav-mb-item"><a href="/z/product/list?target=new" class="mb-menu-link">NEW</a></li>
        `;

        $.each(data, function(i, v){
            let url = `/z/product/list?sc1=`;

            strm += `<li class="nav-mb-item">`;

            // if(v.children.length > 0){
            //     str += `
            //         <li class="menu-item position-relative">
            //             <a href="${url+v.seq}" class="item-link">${v.name}<i class="icon icon-arrow-down"></i></a>
            //             <div class="sub-menu submenu-default">
            //             <ul class="menu-list">`;
                
            //     strm += `<a href="#dropdown-menu-${v.seq}" class="collapsed mb-menu-link current" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-four">
            //         <span>${v.name}</span>
            //         <span class="btn-open-sub"></span>
            //     </a>
            //         <div id="dropdown-menu-${v.seq}" class="collapse">
            //             <ul class="sub-nav-menu" id="sub-menu-navigation">`;
                
            //     $.each(v.children, function(ii, vv){
                    
            //         if(vv.children.length > 0){
            //             str += `
            //                 <li class="menu-item-2">
            //                     <a href="${url+vv.seq}" class="menu-link-text link text_black-2">${vv.name}</a>
            //                     <div class="sub-menu submenu-default">
            //                     <ul class="menu-list">
            //             `;

            //             strm += `
            //                 <li>
            //                     <a href="#sub-${vv.seq}" class="sub-nav-link collapsed"  data-bs-toggle="collapse" aria-expanded="true" aria-controls="sub-account">
            //                         <span>${vv.name}</span>
            //                         <span class="btn-open-sub"></span>
            //                     </a>
            //                     <div id="sub-${vv.seq}" class="collapse">
            //                         <ul class="sub-nav-menu sub-menu-level-2">`;
                        
            //             $.each(vv.children, function(iii, vvv){
            //                 str += `<li><a href="${url+vvv.seq}" class="menu-link-text link text_black-2">${vvv.name}</a></li>`;
            //                 strm += `<li><a href="${url+vvv.seq}" class="sub-nav-link">${vvv.name}</a></li>`;
            //             });

            //             str += `</ul></div></li>`;
            //             strm += `</ul></div></li>`;
            //         }else{
            //             str += `<li><a href="${url+vv.seq}" class="menu-link-text link text_black-2">${vv.name}</a></li>`;
            //             strm += `<li><a href="${url+vv.seq}" class="sub-nav-link">${vv.name}</a></li>`;
            //         }
            //     });
            //     str += `</ul></div>`;
            //     strm += `</ul></div>`;
            // }else{
            //     str += `<li class="menu-item"><a href="${url+v.seq}" class="item-link">${v.name}</a></li>`;
            //     strm += `<a href="${url+v.seq}" class="mb-menu-link">${v.name}</a>`;
            // }
            str += `<li class="menu-item"><a href="${url+v.seq}" class="item-link">${v.name}</a></li>`;
            strm += `<a href="${url+v.seq}" class="mb-menu-link">${v.name}</a>`;
            strm += `</li>`;
        });

        str += `<li class="menu-item"><a href="/z/project" class="item-link">PROJECT</a></li>`;
        strm += `<a href="/z/project" class="mb-menu-link">PROJECT</a>`;
        strm += `</li>`;

        $('#menu-pc-wrap').html(str);
        $('#wrapper-menu-navigation').html(strm);
    }
</script>