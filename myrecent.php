<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>

<style media="screen">
table td {
    border: 1px solid #EBECEF;
}

table th {
    background-color: #fff;
    border: 1px solid #EBECEF;
}

.post_delete_div {
    position: absolute;
    top: 10px;
    right: 10px;
}



.menu-box {
    border-radius: 5px;
    background-color: #f8f8f8;
    padding: 20px;
    text-align: center;
    font-size: 15px;
    cursor: pointer;
}

.pro-thumnail {
    width: 50px;
    height: 50px;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
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



.row-item{
    width: 100%;
    margin-left: 0;
}

.table-item{
    width: 100%;
}
.table-item > tbody > tr{
    border-bottom: 1px solid #eee;
}
.table-item > tbody > tr:last-child{
    border-bottom: none;
}
.table-item > tbody > tr > th{
    background: white;
    text-align: center;
    width: 25%;
}

.table-item td{
    border: none;
}

.table-item-inner{

}

.table-item-inner > tbody > tr > th{
    background: white;
}

.item-mobile{
    border-bottom: 1px solid lightgray;
    padding: 10px 5px;
}

.time-mobile{
    border-bottom: 1px solid lightgray;
    padding: 10px 5px;
}

.post-mobile{
    border-bottom: 1px solid lightgray;
    padding: 10px 0 15px 0;
}

.pr_comments_m p{
    max-width: 100%;
}
.pr_comments_m img{
    width: 100% !important;
}

.tag{
    padding: 5px 10px;
    border-radius: 10px;
    background: dimgray;
    color: white;
    display: inline-block;
    margin-bottom: 10px;
}

#time-list-tbody_m{
    margin-bottom: 30px;
}

@media (max-width: 769px){
    .table_order {
        min-width: 100%;
    }
}


@media (max-width:768px) {
    .pr_comments p {
        max-width: 150px !important;
    }
}
</style>

<!-- Breadcumb Area -->
<div class="breadcrumb-wrap">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <ol class="breadcrumb mt-2 bg-white">
                    <li class="breadcrumb-item"><a href="/">홈</a></li>
                    <li class="breadcrumb-item"><a href="/myrecent.php">최근 본 상품</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb Area -->

<!-- Message Now Area -->
<div class="message_now_area" id="contact">
    <div class="container">
        <h4 class="page-title text-left mb-4">최근 본 상품</h4>
        <div class="d-none d-md-block table_div mb-5">

            <table class="table text-center mb-0">
                <thead>
                    <tr>
                        <th class="font-weight-normal">이미지</th>
                        <th class="font-weight-normal">상품명</th>
                        <th class="font-weight-normal">판매가</th>
                        <th class="font-weight-normal">주문</th>
                    </tr>
                </thead>
                <tbody id="time-list-tbody"></tbody>
            </table>
        </div>
        <div class="d-md-none w-100 table_div table_order" id="time-list-tbody_m">
        </div>
        <div id="time-no-data" class="d-none nodata_wrap py-5 text-center">
            <p class="mb-0">최근 본 상품이 없습니다.</p>
        </div>

    </div>


</div>
<!-- Message Now Area -->
<script type="text/javascript">
$(function() {
    drawRecentProduct();
})




function drawRecentProduct() {
    if (getCookie('img')) {
        let img_cookies = JSON.parse(getCookie('img'))
        if (img_cookies.length > 5) {
            img_cookies.pop();
        }
        $.each(img_cookies, function(i, v) {
            if (img_cookies[i].p_price) {
                let str = `<tr class="recent${v.p_seq}">
                <td style="max-width:60px;"><img onclick="location.href='/product_detail.php?p_seq=${v.p_seq}'" class="w-100 pointer" src="${v.img}" /></td>
                <td><div class="pointer" onclick="location.href='/product_detail.php?p_seq=${v.p_seq}'">${v.p_name}</div></td>
                <td>${img_cookies[i].p_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")} 원</td>
                <td style="max-width:100px;" class="position-relative">
                    <div>
                        <div class="pointer border py-1 px-2 fs-12 mb-1 w-50 mx-auto" onclick="location.href='/product_detail.php?p_seq=${v.p_seq}';" style="min-width:60px;">주문하기</div>
                        <span class="close_btn pointer"  onclick="removeRecent(${v.p_seq});">
                        <i class="fa-solid fa-xmark"></i>
                        </span>
                    </div>
                </td>
            </tr>`;
                $('#time-list-tbody').append(str);

                let str_m = `<div class="time-mobile">
                    <div class="row row-item">
                        <div class="col-4">
                            <img onclick="location.href='/product_detail.php?p_seq=${v.p_seq}'" class="w-100" src="${v.img}" />
                        </div>
                        <div class="col-8">
                            <div class="p_name mt-2">
                                <span class="pointer" onclick="location.href='/product_detail.php?p_seq=${v.p_seq}'">${v.p_name}</span>
                            </div>
                            판매가 : ${img_cookies[i].p_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")} 원<br>
                            <div class="mt-2">
                                <span class="border py-1 px-2 fs-12" onclick="location.href='/product_detail.php?p_seq=${v.p_seq}';" style="min-width:60px;">주문하기</span>
                                <span class="close_btn pointer"  onclick="removeRecent(${v.p_seq});">
                                <i class="fa-solid fa-xmark"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>`;
                $('#time-list-tbody_m').append(str_m);
            }

        })

    } else {
        $('#time-no-data').removeClass('d-none');
    }
}
</script>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
