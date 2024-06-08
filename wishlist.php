<!-- Style CSS -->
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>

<!-- CSS -->
<link rel="stylesheet" href="css/pages/wishlist/wishlist.css">
<!-- Header Area End -->

<style media="screen">
@media (max-width:760px) {
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

    .wish_img {
        max-width: 80px !important;
    }

    p {
        line-height: normal;
    }

    .wish_table {
        min-width: 1000px;
    }

    .wish_table,
    .wish_table td,
    .wish_table th {
        font-size: 12px;
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

.cart-table thead {
    background: #fff;
}

.table td,
.table th {
    font-weight: 100;
}
</style>
<link href="/css/mypage.css" rel="stylesheet">

<!-- Breadcumb Area -->
<div class="breadcrumb-wrap">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <ol class="breadcrumb mt-2 bg-white">
                    <li class="breadcrumb-item"><a href="/">홈</a></li>
                    <li class="breadcrumb-item"><a href="wishlist.php">관심상품</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb Area -->

<!-- Wishlist Table Area -->
<div class="wishlist-table clearfix wish_div_pc ">
    <div class="container">
        <h4 class="page-title text-dark text-center mb-4 font-weight-bold">WISH LIST</h4>
        <div class="sub_mypage_menu_div">
            <div class="pointer" onclick="openCheck(1)">
                정보수정
            </div>
            <div class="gray_bar"></div>
            <div class="pointer" onclick="location.href='order_list.php'">
                주문내역
            </div>
            <div class="gray_bar"></div>
            <div class="pointer" onclick="location.href='point.php'">
                적립금 내역
            </div>
            <div class="gray_bar"></div>
            <div class="pointer on" onclick="location.href='wishlist.php'">
                관심상품
            </div>
            <div class="gray_bar"></div>
            <div class="pointer" onclick="location.href='coupon.php'">
                할인쿠폰
            </div>
            <div class="gray_bar"></div>
            <div class="pointer" onclick="location.href='mypost.php'">
                내가쓴게시물
            </div>
            <div class="gray_bar"></div>
            <div class="pointer" onclick="location.href='address.php'">
                배송주소록
            </div>
        </div>

        <div class="row mt-4 border-top">
            <div class="col-12 no-data">
                <div class="text-left d-none">
                    <label for="all-ck" class="pointer border py-2 px-3 none_cart_div">전체선택</label>
                </div>
                <div class="cart-table wishlist-table mt-5">
                    <div class="table-responsive">
                        <table class="table table_order mb-30 wish_table">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <input type="checkbox" id="all-ck" />
                                    </th>
                                    <th scope="col">이미지</th>
                                    <th scope="col">상품정보</th>
                                    <th scope="col">판매가</th>
                                    <th scope="col">선택</th>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="w_t_body">
                                <!-- <tr>
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
                                        <td>
                                            <div class="quantity">
                                                <input type="number" class="qty-text" id="qty2" step="1" min="1" max="99" name="quantity" value="1">
                                            </div>
                                        </td>
                                        <td><a href="#" class="btn btn-primary btn-sm">장바구니 담기</a></td>
                                    </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- <div class="cart-footer text-right">
                        <div class="back-to-shop">
                            <a href="#" class="btn btn-primary">모든 상품 담기</a>
                        </div>
                    </div> -->
            </div>
        </div>
    </div>
</div>

<div class="wish_div_m px-2">
    <div class="mb-3 d-flex align-items-center no-data">
        <input type="checkbox" name="" class="d-none" value="" id="all-ck-m">
        <label for="all-ck-m" class="pointer border  py-2 px-3 none_cart_div">전체선택</label>
    </div>
    <div class="wish_div_m_body">

    </div>
    <!-- <div class="my-2 p-2 border">
            <div class="d-flex">
                <div class="">

                </div>
                <div class="">
                    <p class="font-weight-bold">상품명</p>
                    <p>가격</p>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-2">
                <span class="btn btn-primary">장바구니 추가</span>
                <span class="btn btn-secondary ml-2">삭제</span>
            </div>
        </div> -->
</div>

<div class="wish_div_m container mb-5 no-data">
    <div class="row">
        <div class="col-12 fs-11">
            선택상품을
            <span class="pointer normal_btn px-3 mr-1 none_cart_div" onclick="chooseDel()">선택삭제</span>
            <span class="pointer normal_btn none_cart_div" onclick="setCart();">장바구니 담기</span>
        </div>
        <div class="col-6">
        </div>
        <div class="col-6 text-right">
            <span class="pointer normal_btn none_cart_div" onclick="wishAllDel();">관심상품 비우기</span>
        </div>
    </div>
</div>

<div class="wish_div_pc container mb-5 no-data">
    <div class="row">
        <div class="col-6 fs-11">
            선택상품을
            <span class="pointer normal_btn ml-2 mr-1 none_cart_div" onclick="chooseDel()">선택삭제</span>
            <span class="pointer normal_btn none_cart_div" onclick="setCart();">장바구니 담기</span>
        </div>
        <div class="col-6 text-right">
            <span class="pointer normal_btn none_cart_div " style="font-size:13px" onclick="wishAllDel();">
                관심상품 비우기
            </span>
        </div>
    </div>
</div>


<!-- JS  -->
<script src="/js/pages/wishlist/wishlist.js"></script>

<script>
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
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
