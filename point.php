<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>

<style media="screen">
.post-mobile{
    border-bottom: 1px solid lightgray;
    padding: 10px 0 15px 0;
}
.row-item{
    width: 100%;
    margin-left: 0;
}
</style>
<link href="/css/orderlist.css" rel="stylesheet">

<link href="/css/mypage.css" rel="stylesheet">
<link href="/css/order.css" rel="stylesheet">
<link href="/css/point.css" rel="stylesheet">
<!-- Breadcumb Area -->
<div class="breadcrumb-wrap">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <ol class="breadcrumb mt-2 bg-white">
                    <li class="breadcrumb-item"><a href="/">홈</a></li>
                    <li class="breadcrumb-item"><a href="">포인트내역</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb Area -->

<!-- Message Now Area -->
<div class="message_now_area " id="contact">
    <div class="container mb-50">
        <h4 class="page-title text-dark text-center mb-4 font-weight-bold">POINT</h4>
        <div class="sub_mypage_menu_div pb-4 border-bottom">
            <div class="pointer" onclick="openCheck(1)">
                정보수정
            </div>
            <div class="gray_bar"></div>
            <div class="pointer" onclick="location.href='order_list.php'">
                주문내역
            </div>
            <div class="gray_bar"></div>
            <div class="pointer on" onclick="location.href='point.php'">
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
            <div class="pointer" onclick="location.href='address.php'">
                배송주소록
            </div>
        </div>

        <div class="mt-5 mb-5 px-3  point_wrap">
            <div class="w-50 p-3 border-right">
                <div class="one_div">
                    <div>
                        총 적립금
                    </div>
                    <div>
                        <span class="total_point"></span>원
                    </div>
                </div>
                <div class="one_div">
                    <div>
                        사용된 적립금
                    </div>
                    <div>
                        <span class="use_point">0</span>원
                    </div>
                </div>
                <!-- <div class="one_div">
                    <div>
                        환불예정 적립금
                    </div>
                    <div>
                        <span class="refund_point">0</span>원
                    </div>
                </div> -->
            </div>

            <div class="w-50 p-3 ">
                <div class="one_div">
                    <div>
                        사용가능 적립금
                    </div>
                    <div>
                        <span class="can_use_point"></span>원
                    </div>
                </div>
                <!-- <div class="one_div">
                    <div>
                        미가용 적립금
                    </div>
                    <div>
                        <span class="un_use_point">0</span>원
                    </div>
                </div> -->
            </div>


        </div>


        <div class="mt-5 nav_wrap">
            <div class="nav_line">

            </div>
            <div class="tab_wrap">
                <div data-val="" class="on tab_one">
                    적립내역보기
                </div>
                <div data-val="Y" class="tab_one">
                    사용내역보기
                </div>
                <div data-val="N" class="tab_one">
                    미가용쿠폰/회원등급적립내역
                </div>
            </div>
        </div>

        <table class="d-none d-md-block table table_order mt-4 text-center">
            <tr>
                <th style="width:130px">날짜</th>
                <th style="width:130px">적립금</th>
                <th>관련 주문</th>
                <th>적립내용</th>
            </tr>
            <tbody id="coupon-list-tbody">
            </tbody>
        </table>
        <div class="d-md-none table_div w-100 mt-3" id="coupon-list-tbody_m">
        </div>
        <div id="paged-wrap" class="mt-5">
            <nav aria-label="Page navigation example">
                <ul id="paged-content" class="pagination justify-content-center"></ul>
            </nav>
        </div>


        <div class="point_context_wrap">

        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="openCheck">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="">
                    비밀번호를 입력해주세요.
                </div>
                <input class="form-control" type="password" id="loginPs" placeholder="비밀번호를 입력해주세요." name="" value="">
            </div>
            <div class="modla-footer px-3 mb-3 text-center">
                <span class="btn btn-primary" onclick="$('#openCheck').modal('hide');" id="">취소</span>
                <span class="btn btn-secondary" onclick="checkLogin();" id="">확인</span>
            </div>
        </div>
    </div>
</div>

<!-- Message Now Area -->
<script type="text/javascript">
var ppp = 10;
var page = 1;

$(function() {
    LoadMyCoupon()
    loadPointData();
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
let usePoint = 0;

function LoadMyCoupon(type) {
    $.ajax({
        url: SERVER_AP + "/coupon/point-paging",
        type: "post",
        cache: false,
        async: false,
        data: {
            page: page,
            ppp: ppp,
            order: 'upl_seq desc',
            type: type,
            u_seq: user_info.u_seq
        },
        success: function(data) {
            $("#coupon-list-tbody, #coupon-list-tbody_m").html('');
            let point = 0;

            console.log('ccc', data);
            if (data.totalCount == 0) {
                var str = '<tr>\
                                  <td colspan="14" class="py-4 text-center">포인트내역이 없습니다.</td>\
                                </tr>';
                var str_m = '<div class="no-product">포인트내역이 없습니다.</div>';
                $("#coupon-list-tbody").append(str);
                $("#coupon-list-tbody_m").append(str_m);
            } else {
                $.each(data.rows, function(i, v) {
                    var number = (page * ppp) - ppp + (i + 1) //1부터 시작
                    // var number = data.totalCount - ((page-1)*ppp+(i)) //끝번호부터시작

                    var str = `<tr>
                                      <td>${formatDate(v.upl_date)}</td>
                                      <td>${v.upl_point || '-'}</td>
                                      <td>${v.o_num || '-'}</td>
                                      <td>${v.upl_text || '-'}</td>
                                    </tr>`;
                    $("#coupon-list-tbody").append(str);

                    let str_m = `<div class="coupon-mobile">
                        <div class="row row-item">
                            <table class="table-no-border w-100">
                            <td style="width:30%;"><div class="mr-2 text-center">${formatDate(v.upl_date)}</div></td>
                            <td style="width:70%;">
                                <div class="mt-2 mb-1">적립금 : ${v.upl_point || '-'}</div>
                                <div class="mb-1">관련 주문 : ${v.o_num || '-'}</div>
                                <div class="mb-2">적립내용 : ${v.upl_text || '-'}</div>
                            </td>
                        </div>
                    </div>`;
                    $('#coupon-list-tbody_m').append(str_m);

                    if (v.point_yn == 'Y') {
                        usePoint += v.upl_point * 1
                    }

                })
                $('.use_point').html(comma(usePoint))
                drawPaging(data.totalPage);
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
    LoadMyCoupon()
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

// 배송지 변경 버튼 새창 띄워짐
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

var goCheckType = ""

function openCheck(check) {
    if (check == 1) {
        location.href = 'myPageEdit.php?seq=' + user_info.u_seq + ''
    } else {
        $('#openCheck').modal('show');
    }

    goCheckType = check;

}

$('.tab_one').click(function() {
    $('.tab_one').removeClass('on');
    $(this).addClass('on');
    let scType = ''
    let val = $(this).attr('data-val')

    LoadMyCoupon(val)
})


function loadPointData() {
    var obj = new Object();
    obj.u_seq = user_info.u_seq;
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'user',
            common: obj,
        },
        success: function(data) {
            let v = data[0];
            console.log(usePoint);
            console.log('dfdf', v.u_point + usePoint * 1);
            $('.total_point').html(comma(v.u_point * 1 + usePoint * 1))
            $('.can_use_point').html(comma(v.u_point))

        },
        error: function(request, status, error) {
            console.log(error);
        }
    });

}
</script>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
