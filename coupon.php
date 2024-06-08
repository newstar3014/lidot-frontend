<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>

<style media="screen">
table td {
    border: 1px solid #EBECEF;
}

table th {
    background-color: #fff;
    border: 1px solid #EBECEF;
}

#contact table th {
    width: 20%;
    border: 1px solid #eaeaea;
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

.cart_quantity,
.wish_quantity,
.coupon_quantity {
    background-color: #0f99f3;
    border-radius: 50%;
    color: #ffffff;
    font-size: 10px;
    height: 20px;
    line-height: 20px;
    text-align: center;
    width: 20px;
    font-weight: 700;
    display: inline-block;
    position: relative;
    top: -2px;
}

@media (max-width: 769px){
    .contact_from {
        margin-top: 100px !important;
    }
    #coupon-list-tbody img{
        width: 100%;
    }
    .table_order {
        min-width: 100%;
    }
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
                    <li class="breadcrumb-item"><a href="coupon.php">쿠폰내역</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb Area -->

<!-- Message Now Area -->
<div class="message_now_area " id="contact">
    <div class="container">
        <h4 class="page-title text-dark text-center mb-4 font-weight-bold">COUPON</h4>
        <div class="sub_mypage_menu_div">
            <div class="pointer" onclick="location.href='myPageEdit.php'">
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
            <div class="pointer" onclick="location.href='wishlist.php'">
                관심상품
            </div>
            <div class="gray_bar"></div>
            <div class="pointer on" onclick="location.href='coupon.php'">
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
        <div class="mt-4 mb-5 border-top">

        </div>
        <table class="table table_order mt-4 text-center">
            <tr>
                <th class="font-weight-light" style="width:5%">번호</th>
                <th class="font-weight-light">쿠폰명</th>
                <!-- <th class="font-weight-light" style="width:15%">사용기간</th> -->
                <th class="font-weight-light" style="width:5%">
                    사용여부
                </th>
            </tr>
            <tbody id="coupon-list-tbody">

            </tbody>
        </table>
        <div id="paged-wrap" class="mt-5 mb-3">
            <nav aria-label="Page navigation example">
                <ul id="paged-content" class="pagination justify-content-center"></ul>
            </nav>
        </div>




        <div class="mb-5">
            <h6>쿠폰 이용 안내</h6>
            <ul class="coupon-detail border">
                <li>
                    쿠폰인증번호 등록하기에서 쇼핑몰에서 발행한 종이쿠폰/시리얼쿠폰/모바일쿠폰 등의 인증번호를 등록하시면 온라인쿠폰으로 발급되어 사용이 가능합니다.
                </li>
                <li>쿠폰은 주문 시 1회에 한해 적용되며, 1회 사용 시 재 사용이 불가능합니다.</li>
                <li>쿠폰은 적용 가능한 상품이 따로 적용되어 있는 경우 해당 상품 구매 시에만 사용이 가능합니다.</li>
                <li>기본 배송비 할인쿠폰은 배송구분이 '기본배송'인 상품에 부과된 배송비만 할인이 적용됩니다.</li>
            </ul>
        </div>
    </div>
</div>
<!-- Message Now Area -->
<script type="text/javascript">
var ppp = 10;
var page = 1;

$(function() {
    LoadMyCoupon()
    //loadHomedata()
})

// function loadMydata(){
//     var obj = new Object();
//     obj.u_seq = user_info.u_seq;
//     $.ajax({
//         url: SERVER_AP+"/admin/common/condition",
//         type: "post",
//         cache: false,
//         data:{
//             table: 'user',
//             common:obj,
//         },
//         success: function(data){
//             $("#u_name").text(data[0].u_name)
//             $("#u_rank").text(data[0].u_rank)
//             $("#u_email").text(data[0].u_email)
//             $("#u_phone").text(data[0].u_phone)
//             $("#u_point").text(data[0].u_point)
//         },
//         error: function (request, status, error){
//             console.log(error);
//         }
//     });
// }

function LoadMyCoupon() {
    $.ajax({
        url: SERVER_AP + "/coupon/coupon-paging",
        type: "post",
        cache: false,
        data: {
            page: page,
            ppp: '99999',
            order: 'c.c_money2 desc',
            u_seq: user_info.u_seq
        },
        success: function(data) {
            //console.log("data >>",data);
            $("#coupon-list-tbody").html('');
            if (data.totalCount == 0) {
                var str = '<tr>\
                                  <td colspan="14" class="py-4 text-center">사용가능 쿠폰이 없습니다.</td>\
                                </tr>';
                $("#coupon-list-tbody").append(str);
            } else {
                $.each(data.rows, function(i, v) {
                    var number = (page * ppp) - ppp + (i + 1) //1부터 시작
                    // var number = data.totalCount - ((page-1)*ppp+(i)) //끝번호부터시작

                    var content = '';
                    if (v.c_type == 1) {
                        content = '<td>' + comma(v.c_money) + '원 이상 구매시 ' + v.c_percent +
                            '%할인 최대 ' + comma(v.c_maxmoney) + '원 까지 적용</td>';
                    } else {
                        content = '<td>' + comma(v.c_money2) + '원 이상 구매시 ' + comma(v.c_discount) +
                            '원 할인</td>';
                    }

                    let btn = ``
                    if (v.uc_use == 'Y') {
                        btn = `
                        <span class="close_btn pointer" onclick="couponDel(${v.uc_seq});">
                                <i class="fa-solid fa-xmark"></i>
                            </span>
                        사용완료
                        `
                    } else {
                        btn =
                            `
                            <span class="close_btn pointer" onclick="couponDel(${v.uc_seq});">
                                <i class="fa-solid fa-xmark"></i>
                            </span>
                            사용가능
                            `
                    }

                    // 기존껀 이거   ${content}

                    var str = `<tr class=${(v.uc_use == 'Y' && "bg-gray")}>
                                      <td>${number }</td>
                                      <td><img src="${v.c_img}" /></td>
                                      <td class="position-relative">${btn}</td>
                                    </tr>`;
                    $("#coupon-list-tbody").append(str);

                })
                //drawPaging(data.totalPage);
            }
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

function goPage(_page) {
    if (_page == 'prev') {
        page = (page * 1) - 1;
    } else if (_page == 'next') {
        page = (page * 1) + 1;
    } else {
        page = _page;
    }
    LoadProduct()
}

function couponDel(uc_seq) {
    if (confirm("해당 쿠폰을 삭제하시겠습니까?")) {
        $.ajax({
            url: SERVER_AP + "/admin/common/delete",
            type: "post",
            cache: false,
            data: {
                table: 'user_coupon',
                field: 'uc_seq',
                seq: uc_seq,
            },
            success: function(data) {
                location.reload()
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }
}
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
