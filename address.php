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
    margin-right: 0px;
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

.pr_comments {}

.pr_comments p {

    margin-bottom: 0;
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


@media (max-width:768px) {
    .pr_comments p {
        max-width: 150px !important;
    }
    .table_order {
        min-width: 100%;
    }
}

.table_div {
    overflow: auto;
}

.table_div table {
    min-width: 500px;
}
</style>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
<link href="/css/mypage.css" rel="stylesheet">
<!-- Breadcumb Area -->
<div class="breadcrumb-wrap">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <ol class="breadcrumb mt-2 bg-white mr-2">
                    <li class="breadcrumb-item"><a href="/">홈</a></li>
                    <li class="breadcrumb-item"><a href="mypost.php">게시물 관리</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb Area -->

<!-- Message Now Area -->
<div class="message_now_area" id="contact">
    <div class="container">
        <h4 class="page-title text-dark text-center mb-4 font-weight-bold">MY ADDRESS</h4>
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
            <div class="pointer" onclick="location.href='wishlist.php'">
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
            <div class="pointer on" onclick="location.href='address.php'">
                배송주소록
            </div>
        </div>
        <div class="text-right border-top mt-4 pt-3 mb-3">

        </div>
        <div class="d-none d-md-block table_div">
            <table class="table table_order text-center">
                <tr>
                    <th class="font-weight-normal">
                        <input type="checkbox" id="all-ck" class="check_all">
                    </th>
                    <!-- <th class="font-weight-normal as_none">상품명</th> -->
                    <th class="font-weight-normal">배송지명</th>
                    <th class="font-weight-normal">수령인</th>
                    <th class="font-weight-normal">휴대전화</th>
                    <th class="font-weight-normal">주소</th>
                    <th class="font-weight-normal">
                        수정
                    </th>
                </tr>
                <tbody id="post-list-tbody">

                </tbody>
            </table>
        </div>
        <div class="d-md-none">
            <table class="table table_order">
                <tr>
                    <th class="font-weight-normal">
                        <input type="checkbox" id="all-ck_m" class="check_all">
                    </th>
                    <th class="font-weight-normal">배송지 정보</th>
                    <th class="font-weight-normal">
                        수정
                    </th>
                </tr>
                <tbody id="post-list-tbody_m">

                </tbody>
            </table>
        </div>

        <div id="post-no-data" class="nodata_wrap py-5 text-center">
            <p class="mb-0">게시물이 없습니다.</p>
        </div>
        <div id="paged-wrap" class="my-5">
            <nav aria-label="Page navigation example">
                <ul id="paged-content" class="pagination justify-content-center"></ul>
            </nav>
        </div>


    </div>

    <div class="wish_div_pc container mb-5">
        <div class="d-flex">
            <div class="col-6 text-left">
                <span class="pointer d-flex align-items-center justify-content-center normal_btn none_cart_div "
                    style="font-size:13px; max-width:140px" onclick="chooseDel();">
                    선택주소록삭제
                </span>
            </div>
            <div class="col-6 text-right">
                <span class="pointer normal_btn none_cart_div " style="font-size:13px"
                    onclick="location.href='address_detail.php'">
                    배송지등록
                </span>
            </div>
        </div>
    </div>
</div>
<!-- Message Now Area -->
<script type="text/javascript">
var page = '<?php echo $_GET['page'];?>';
var ppp = 10;
if (!page) {
    page = 1;
}

var c_kind = '';
var order = '';
var sk = '<?php echo $_GET['sk'];?>';
var st = '<?php echo $_GET['st'];?>';
$(function() {
    loadAddress();
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
function goSearch() {
    location.href = `mypost.php?page=${page}&&ppp=${ppp}&sk=${sk}&st=${st}`;
}

$('#table-select').change(function() {
    page = 1;

    loadAddress();
})

function loadAddress() {
    console.log('실행하긴함');
    $.ajax({
        url: SERVER_AP + "/common/pagingAddr",
        type: "post",
        cache: false,
        async: true,
        data: {
            table: 'delivery_location',
            page: page,
            ppp: ppp,
            u_seq: user_info.u_seq,
            order: 'dl_seq'
        },
        success: function(data) {
            console.log('loadAddress : ', data)
            $('#post-list-tbody').html('');
            if (data.rows.length == 0) {
                $('#post-no-data').removeClass('d-none');
            } else {
                $('#post-no-data').addClass('d-none');


                $.each(data.rows, function(i, v) {
                    let defaultAddr = ``
                    console.log('xxx', v.dl_check);

                    if (v.dl_check == 'Y') {
                        console.log('dksxk');
                        defaultAddr =
                            `<span class="df_addr bg-primary text-white mr-1 p-1" style="font-size:11px">기본</span>`
                    }

                    let str = `<tr>
                        <td class="">
                            <input class="tr-ck" value="${v.dl_seq}" type="checkbox" />
                        </td>
                        <td>${defaultAddr}${v.dl_title}</td>
                        <td class="">
                          ${v.dl_person}
                        </td>
                        <td>${v.dl_phone}</td>
                        <td>${v.dl_address + v.dl_address_detail}</td>
                        <td class="position-relative">
                            <div class="d-flex align-items-center pointer mx-auto border pl-2 pr-1 fs-12" style="width:53px; height:35px"
                                onclick="changeAddr(${v.dl_seq})">수정 <i class="ml-1 df-cnb-item-subicon"></i>
                            </div>
                        </td>
                    </tr>`;
                    $('#post-list-tbody').append(str);

                    let str_m = `<tr>
                        <td class="">
                            <input class="tr-ck_m" value="${v.dl_seq}" type="checkbox" />
                        </td>
                        <td>
                            ${defaultAddr} 배송지명 : ${v.dl_title}<br>
                            수령인 : ${v.dl_person}<br>
                            휴대전화 : ${v.dl_phone}<br>
                            주소 : ${v.dl_address + v.dl_address_detail}<br>
                        </td>
                        <td class="position-relative">
                            <div class="d-flex align-items-center pointer mx-auto border pl-2 pr-1 fs-12" style="width:53px; height:35px"
                                onclick="changeAddr(${v.dl_seq})">수정 <i class="ml-1 df-cnb-item-subicon"></i>
                            </div>
                        </td>
                    </tr>`;
                    $('#post-list-tbody_m').append(str_m);


                })



                drawPaging(data.totalPage);

            }
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

function deletePost(seq, table) {
    let fieldStr = ''

    if (table == 'product_review') {
        fieldStr = 'pr_seq'
    } else if (table == 'order_ask') {
        fieldStr = 'oa_seq'
    } else {
        fieldStr = 'c_seq'
    }

    if (confirm("해당 항목을 삭제하시겠습니까?")) {
        $.ajax({
            url: SERVER_AP + "/common/delete",
            type: "post",
            cache: false,
            data: {
                table: table,
                field: fieldStr,
                seq: seq,
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

function changeAddr(seq) {
    // if (openWin != null) openWin.close();
    // var _url = `/orderplus.php?seq=${seq}`;
    // var _width = '500';
    // var _height = '700';
    // var _left = Math.ceil((window.screen.width - _width) / 2);
    // var _top = Math.ceil((window.screen.width - _height) / 2);

    // openWin = window.open(_url, 'ORDER', 'width=' + _width + ', height=' + _height + ', left=' + _left + ', top=' +
    //     _top);
    location.href = '/address_detail.php?seq=' + seq;
}


function openInsertAddr() {
    if (openWin != null) openWin.close();
    var _url = `/orderplus.php`;
    var _width = '500';
    var _height = '700';
    var _left = Math.ceil((window.screen.width - _width) / 2);
    var _top = Math.ceil((window.screen.width - _height) / 2);

    openWin = window.open(_url, 'ORDER', 'width=' + _width + ', height=' + _height + ', left=' + _left + ', top=' +
        _top);
}


$("#all-ck").click(function() {
    $(".tr-ck").prop("checked", $(this).prop("checked"));
});

$("#all-ck_m").click(function() {
    $(".tr-ck_m").prop("checked", $(this).prop("checked"));
});

function chooseDel() {

    var width = $( window ).width();
    console.log(width);

    var target = '';
    if(width < 768){
        console.log('모바일');
        target = 'tr-ck_m';
    }else{
        console.log('PC');
        target = 'tr-ck';
    }

    if ($('input[class="'+target+'"]:checked').length == 0) {
        alert("주소록을 한개이상 선택해주세요.");
    } else {
        if (confirm("선택하신 주소록을 삭제하시겠습니까?")) {
            $.each($('input[class="'+target+'"]:checked'), function(i, v) {
                $.ajax({
                    url: SERVER_AP + "/common/delete",
                    type: "post",
                    cache: false,
                    async: false,
                    data: {
                        seq: $(v).val(),
                        table: 'delivery_location',
                        field: 'dl_seq'
                    },
                    success: function(data) {},
                    error: function(request, status, error) {
                        console.log(error);
                    },
                });
            });
            location.reload();
        }
    }
}

function openCheck(check) {
    if (check == 1) {
        location.href = 'myPageEdit.php?seq=' + user_info.u_seq + ''
    } else {
        $('#openCheck').modal('show');
    }

    goCheckType = check;

}


function cancelHome(addSeq) {
    var obj = new Object();
    obj.dl_check = 'N'

    $.ajax({
        url: SERVER_AP + '/admin/common/update',
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'delivery_location',
            obj: obj,
            whereField: 'dl_useq',
            whereValue: user_info.u_seq
        },

        success: function(data) {
            writehome(addSeq, user_info.u_seq);
        },
        error: function(xhr, textStatus, errorThrown) {
            console.log(xhr, textStatus, errorThrown);
        }
    });
}

function writehome(dSeq, uSeq) {
    var obj = new Object();

    obj.dl_check = 'Y';
    obj.dl_useq = uSeq

    $.ajax({
        url: SERVER_AP + '/admin/common/update',
        type: "post",
        cache: false,
        data: {
            table: 'delivery_location',
            obj: obj,
            whereField: 'dl_seq',
            whereValue: dSeq
        },

        success: function(data) {
            window.close();
        },
        error: function(xhr, textStatus, errorThrown) {
            console.log(xhr, textStatus, errorThrown);
        }
    });
}
</script>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
