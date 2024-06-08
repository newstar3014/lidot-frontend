<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>

<style media="screen">
.table-wrap::-webkit-scrollbar {
    display: none;
}

.btn-sm {
    width: 100px;
    margin: 0 auto;
}
</style>
<link href="/css/order.css" rel="stylesheet">
<link href="/css/mypage.css" rel="stylesheet">
<!-- Breadcumb Area -->
<div class="breadcrumb-wrap">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <ol class="breadcrumb mt-2 bg-white">
                    <li class="breadcrumb-item"><a href="/">홈</a></li>
                    <li class="breadcrumb-item"><a href="mypage.php">비회원조회</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb Area -->
<div class="container">
    <h4 class="page-title text-left mb-4">비회원조회</h4>
    <div class="mb-3">
    </div>

    <div class="mb-5">
        <div class="d-flex justify-content-between align-items-center">
            <p class="text-black mb-1"><img src="img/mypage/folder.png" /> 주문 상품 정보</p>
        </div>

        <table class="table text-center table_order">
            <tr>
                <th style="min-width:200px">주문일자<br>[주문번호]</th>
                <th>이미지</th>
                <th>상품정보</th>
                <th>수량</th>
                <th>상품구매금액</th>
                <th>주문처리 상태</th>
            </tr>
            <tbody id="order-list-tbody">

            </tbody>
        </table>
        <div id="order-no-data" class="d-none nodata_wrap py-5 text-center">
            <p class="mb-0">주문 내역이 없습니다.</p>
        </div>
    </div>

    <!-- Message Now Area -->

    <style media="screen">
    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 700px;
        }
    }
    </style>
    <div class="modal" tabindex="-1" role="dialog" id="ordermodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ordermodal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table border text-center">
                        <tr>
                            <th style="width:5%">#</th>
                            <th>상품이미지</th>
                            <th>상품명</th>
                            <th>수량</th>
                            <th>상품가격</th>
                            <th>배송비</th>
                            <th></th>
                        </tr>
                        <tbody id="ordermodal-tbody">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Message Now Area -->

<script type="text/javascript" src="/admin/js/common.js"></script>
<script type="text/javascript">
var ppp = 10;
var page = 1;

var ready_num = 0
var out_num = 0
var ing_num = 0
var complete_num = 0
var cancel_num = 0

$(function() {
    LoadProduct()
    loadHomedata()
})


function LoadProduct() {
    var o_password = getCookie('password');
    var o_nonuser_name = getCookie('name');
    var o_phone = getCookie('phone')
    console.log('o_password', o_password);
    console.log('o_nonuser_name', o_nonuser_name);
    console.log('o_phone', o_phone);
    $.ajax({
        url: SERVER_AP + "/order/order-paging-unlogin",
        type: "post",
        cache: false,
        data: {
            page: page,
            ppp: ppp,
            order: 'o_date desc',
            sday: $("#sday").val(),
            eday: $("#eday").val(),
            o_password: o_password,
            o_nonuser_name: o_nonuser_name,
            o_phone: o_phone,
        },
        success: function(data) {
            $("#order-list-tbody").html('');
            console.log('DATA', data);
            $("#order-list-tbody, .order_m_go").html('');
            if (data.totalCount == 0) {
                $('#order-no-data').removeClass('d-none');
                $("#paged-wrap").addClass('d-none')
            } else {
                let makeArr = [];
                let makeObj = new Object();
                let preValue = '';
                $.each(data.rows, function(i, v) {

                    if (windowWidth > 768) {
                        if (v.o_state == '상품준비중') {
                            ready_num++
                        }
                        if (v.o_state == '출고') {
                            out_num++;
                        }
                        if (v.o_state == '주문취소') {
                            cancel_num++
                        }
                        if (v.o_state == '배송중') {
                            ing_num++
                        }
                        if (v.o_state == '배송완료') {
                            complete_num++
                        }
                    }

                    let new_o_num = v.o_num.substr(3);


                    var number = (page * ppp) - ppp + (i + 1) //1부터 시작


                    let dateStr = ''
                    let thisdate = v.o_date.substr(0, 10)

                    let exchangeState = exchangeList(v.o_seq, v.p_seq_new)
                    let reviewStr =
                        ``
                    let stateStr = v.o_state;
                    if (exchangeState.length != 0) {
                        if (exchangeState[0].e_state == 0) {
                            v.o_state = `${exchangeState[0].e_type} 신청 대기중`
                        } else if (exchangeState[0].e_state == 1) {
                            v.o_state = `${exchangeState[0].e_type} 신청 승인`

                        } else if (exchangeState[0].e_state == -1) {
                            v.o_state = `${exchangeState[0].e_type} 신청 거절`
                        } else if (exchangeState[0].e_state == 2) {
                            v.o_state = `택배사출발`
                        } else if (exchangeState[0].e_state == 3) {
                            v.o_state = `${exchangeState[0].e_type}완료`

                            if (v.o_state == '교환완료') {}
                        }
                    }
                    let trackStr = ''
                    let orderStr = `<div style="margin-top:2px;" class="">
                                <div id="order-num-${v.o_seq}" class="pointer" style="">[${new_o_num}]
                                
                                </div>
                            </div>`;
                    let returnStr = ``

                    if (v.o_state == '배송완료' || v.o_state == '교환완료') {
                        if (findReview(v.o_seq)) {

                            reviewStr =
                                `<div onclick='location.href="review-insert.php?pr_seq=${findReview(v.o_seq)}&&o_seq=${v.o_seq}&p_seq=${v.p_seq_new}&po_seq=${v.po_seq}"'
                                             class="btn-primary pointer btn-sm">후기수정 <i class="fa-solid fa-chevron-right"></i></div>`


                        } else {
                            reviewStr =
                                `<div onclick='location.href="review-insert.php?p_seq=${v.p_seq_new}&&o_seq=${v.o_seq}&po_seq=${v.po_seq}"'
                                         class="btn-primary btn-sm" style="border-top:1px solid black; cursor:pointer;">구매후기 <i class="fa-solid fa-chevron-right"></i></div>`
                        }



                        let poCancel = ''
                        if (v.po_seq) {
                            poCancel = v.po_seq
                        } else {
                            poCancel = 0;
                        }


                        let cancelStr =

                            `  <div onclick="changeAccept(${v.o_seq}, ${v.p_seq_new}, ${poCancel},'change')"class="btn-primary btn-sm mt-1">교환신청 <i class="fa-solid fa-chevron-right"></i></div>
                            <div onclick="changeAccept(${v.o_seq}, ${v.p_seq_new}, ${poCancel},'refund')" class="btn-primary btn-sm mt-2">반품신청 <i class="fa-solid fa-chevron-right"></i></div>
                            `

                        orderStr = `<div style="margin-top:2px;">
                                    <div id="order-num-${v.o_seq}" class="pointer" style="">${new_o_num}</div>
                                    ${cancelStr}
                                </div>`;
                    }

                    if (v.o_state == '상품준비중') {

                        let poCancel = ''
                        if (v.po_seq) {
                            poCancel = v.po_seq
                        } else {
                            poCancel = 0;
                        }


                        let cancelStr =
                            `  <div onclick="orderCancel(${v.o_seq}});"class="btn-primary btn-sm mt-2">주문취소 <i class="fa-solid fa-chevron-right"></i></div>
                            <div onclick="changeAccept(${v.o_seq}, ${v.p_seq_new}, ${poCancel},'change')"class="btn-primary btn-sm mt-1">교환신청 <i class="fa-solid fa-chevron-right"></i></div>`

                        orderStr = `<div style="margin-top:2px;">
                                    <div id="order-num-${v.o_seq}" class="pointer" style="">${new_o_num}</div>
                                    ${cancelStr}
                                </div>`;

                    }
                    if (v.o_tackbea && v.o_tracknum) {
                        if (v.o_state == '배송완료' || v.o_state == '교환완료' || v.o_state == '배송중') {
                            trackStr = `<div>${v.o_tackbea}</div>
                                <div style="">
                                    <div style="color:#5f5f5f" class=" pointer" onclick="clickDelivery('${v.o_tracknum}', '${v.o_tackcode}')">[${v.o_tracknum}]</div>
                                    ${reviewStr}
                                </div>`;
                        } else {
                            trackStr = ``;
                        }

                    }
                    let optionStr = '';
                    if (v.po_option1) {
                        optionStr =
                            `<br/><span style="color:#A8A8A8">[${v.po_option1} : ${v.po_option2}]</span>`;
                    }


                    if (v.o_tracknum && v.o_tackcode) {

                        if (v.o_state != '배송완료') {
                            let deliveryState = checkDelivery(v.o_tracknum, v.o_tackcode)
                            if (deliveryState.lastDetail) {
                                if (deliveryState.lastDetail.kind == '배달완료') {
                                    deliveryState.lastDetail.kind = '배송완료'
                                    updateComplete(v.o_seq);
                                }
                                v.o_state = deliveryState.lastDetail.kind
                            } else {
                                v.o_state = v.o_state
                            }
                        } else {
                            v.o_state = v.o_state
                        }


                    }
                    let colspanStr =
                        `<td class="pointer fs-12 order_${v.o_num}">${thisdate}${orderStr}</td>`

                    let p_Image = ''
                    let imgStr = ''
                    let priceMoney = comma(Number(v.o_total_price) + Number(v.o_del_price))
                    if (priceMoney == 'null') {
                        priceMoney = `삭제된 상품입니다.`
                    }
                    if (v.p_image) {
                        p_Image = JSON.parse(v.p_image)[0]
                        imgStr = `      <img
                                    onclick="location.href='/product_detail.php?p_seq=${v.p_seq_new}'" 
                                    src="${ p_Image }" width="100px"/>`

                    } else {
                        imgStr = `삭제된 상품입니다.`
                    }

                    if (v.o_state == '입금대기') {
                        trackStr = `<div>
                                        ${v.vbank_name}(${v.vbank_num})
                                    </div>`
                    }

                    //     ${trackStr} 이거 추가해주면됨

                    let str = `<tr>
                            ${colspanStr}
                            <td>
                                ${imgStr}
                            </td>
                            <td  onclick="location.href='/product_detail.php?p_seq=${v.p_seq_new}'" class="pc-none text-dark text-left fs-17 pointer">
                            ${v.p_name || '삭제된 상품입니다.'}${optionStr}</td>
                            <td class="pc-none">${v.p_cnt}</td>
                            <td class="pc-none">${ priceMoney }</td>
                            <td class="pc-none">
                                <div class="">${v.o_state}${trackStr}</div>
                            </td>
                        </tr>`;






                    var str2 = `<div class="order_box_re mx-auto">
                            <div id="m-order-num-${v.o_seq}" class="d-flex justify-content-between align-items-end order_title">
                                <div class="order_date_re">
                                    <span class="font-weight-bold">${thisdate}</span> <span>(${v.o_num})</span>
                                </div>
                                <div class=" order_detail_text  pointer">
                                    상세보기 >
                                </div>
                            </div>
                            <div class="order_box_inner name_${v.o_num}">
                            </div>
                        </div>`

                    $('#order-list-tbody').append(str);

                    //묶음배송 묶는 부분
                    // const elements = document.querySelectorAll('.order_' + preValue);


                    // for (let i = 1; i < elements.length; i++) {
                    //     elements[i].parentNode.removeChild(elements[i]);
                    // }
                    // const count = elements.length;
                    // if (preValue == v.o_num) {
                    //     $('.order_' + preValue).attr('rowspan', count)
                    // }
                    // 여기까지 
                    preValue = v.o_num;


                    // makeArr.push(v.p_seq);
                    $(`#order-num-${v.o_seq}`).attr('onclick',
                        `modalOpen( "${v.o_num}", "${v.o_state}", ${v.o_seq}, '${thisdate}')`
                    )
                    $(`#m-order-num-${v.o_seq}`).attr('onclick',
                        `modalOpen( "${v.o_num}", "${v.o_state}", ${v.o_seq},'${thisdate}')`
                    )

                    $("#ready_num").html(ready_num);
                    $("#out_num").html(out_num);
                    $("#ing_num").html(ing_num);
                    $("#complete_num").html(complete_num);

                })

                if (windowWidth < 768) {
                    darwProductMobile(data.rows2, scType);
                }


                $("#paged-wrap").removeClass('d-none')
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
    LoadProduct()
}


var openWin;

function exchangeList(o_seq, p_seq) {
    var result = [];

    var obj = new Object();
    obj.o_seq = o_seq;
    obj.p_seq = p_seq;
    $.ajax({
        url: SERVER_AP + "/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'exchange',
            common: obj,
        },
        success: function(data) {
            result = data
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    return result;
}

function loadHomedata() {
    var obj = new Object();
    obj.dl_useq = user_info.u_seq;
    obj.dl_check = 'Y'
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        data: {
            table: 'delivery_location',
            common: obj,
        },
        success: function(data) {
            var address = data[0].dl_address + " " + data[0].dl_address_detail
            $('#buyer_addr').html(address)
            $('#buyer_title').html(data[0].dl_title)
            $('#buyer_name').html(data[0].dl_person)
            $('#buyer_tel').html(data[0].dl_phone)
            $('.dl_request').html(data[0].dl_request)
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

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

function modalOpen(o_num, o_state, o_seq, o_date) {
    let inday = calcDay(o_date)
    let cancelCheck = ``
    $(".ordermodal-title").text(o_num || '-')
    $("#ordermodal-date").text(o_date)
    $('.in_day').html(inday)
    $("#ordermodal-tbody").html('')
    $(".order_detail_list").html('')
    let alltotalprice = 0;
    let minusPrice = 0;

    $.ajax({
        url: SERVER_AP + "/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'order_list',
            common: {
                o_num: o_num
            },
        },
        success: function(data) {
            console.log('data : ', data)
            $.each(data, function(i, v) {
                cancelCheck = ``;
                let proinfo = proInfo(v.p_seq_new)
                console.log(';dd', proinfo);
                if (proinfo.length != 0) {
                    let optionPrice = 0;
                    let optionName = "";
                    if (v.po_seq) {
                        let opinfo = opInfo(v.po_seq)
                        optionPrice = opinfo.price * 1
                        optionName = opinfo.name;
                    }

                    var number = (page * ppp) - ppp + (i + 1) //1부터 시작

                    var mainimg = JSON.parse(proinfo.img);

                    let exchangeState = exchangeList(v.o_seq, v.p_seq_new)

                    ///////////////////////////배송비///////////////////////
                    let thisdelPrice_each = 0;
                    let dell_each = LoadDel(proinfo.dt_seq)
                    let datatype_each = $(dell_each).attr("data-type")
                    let condition_each = $(dell_each).attr("data-condition") * 1
                    let price_each = $(dell_each).attr("data-del") * 1
                    let data_clac = $(dell_each).attr("data-dt_calc")

                    let proprice_each = (proinfo.price * 1 + optionPrice) * v.p_cnt * 1

                    alltotalprice += (proinfo.price * 1 + optionPrice) * v.p_cnt * 1


                    let quantynum_each = v.p_cnt * 1

                    if (condition_each) {
                        if (datatype_each == '원 이하') {
                            if (condition_each >= proprice_each) {
                                thisdelPrice_each = price_each
                            } else {
                                thisdelPrice_each = 0
                            }
                        } else if (datatype_each == '개당') {
                            thisdelPrice_each = (parseInt((quantynum_each - 1) /
                                        condition_each) +
                                    1) *
                                price_each
                        }
                    } else {
                        if (isNaN(price_each)) {
                            thisdelPrice_each = 0
                        } else {
                            thisdelPrice_each = price_each
                        }
                    }
                    ///////////////////////////배송비///////////////////////




                    var str = '<tr>\
                                  <td>' + number + '</td>\
                                  <td>\
                                    <div class="pro-thumnail pointer mx-auto" style="background:url(\'' + mainimg[0] +
                        '\')" onclick="location.href=`product_detail.php?p_seq=' + v.p_seq + '`"></div>\
                                  </td>\
                                  <td><div class="dots product_name' + v.o_seq + '">' + proinfo.name + ' ' +
                        optionName + '</div></td>\
                                  <td>' + v.p_cnt + '</td>\
                                  <td>' + comma(proinfo.price * 1 + optionPrice * v.p_cnt) + ' 원</td>\
                                  <td>' + comma(thisdelPrice_each) + ' 원</td>\
                                  <td id="review-td-' + v.p_seq_new + '">\
                                  </td>\
                                </tr>';
                    var mstr = `<div class="border p-3">
                                        <div class="d-flex pt-3">
                                            <div class="mr-2">
                                                <img src="${mainimg[0]}" style="width:64px;height:64px;" />
                                            </div>
                                            <div class="pro_info_m_box">
                                                <div class="">
                                                    <span class="pro_name_elipsis product_name${v.o_seq}" >` +
                        proinfo.name + ` ` +
                        optionName + `  </span>,` + v.p_cnt + ` 개
                                                </div>
                                                <div class="">
                                                    <span class="">총 금액 : </span>` + comma((proinfo.price * 1 +
                            optionPrice) * v.p_cnt) + ` 원
                                                </div>
                                            </div>
                                        </div>
                                    </div>`
                    $("#ordermodal-tbody").append(str);
                    $('.order_detail_list').append(mstr);

                    if (v.o_state != '상품준비중') {
                        // $("#review-td-" + v.p_seq_new).html('')
                        // $("#m-review-td-" + v.p_seq_new).html('')

                        if (exchangeState.length == 0) {
                            if (v.o_state == '입금대기') {
                                $("#review-td-" + v.p_seq_new).html(
                                    ` 
                                    <span class="btn btn-sm btn-secondary" onclick="orderCancel(${v.o_seq})">주문취소</span>
                                    `
                                )
                                $("#m-review-td-" + v.p_seq_new).html(
                                    `
                                    <span class="btn btn-sm btn-secondary w-100" onclick="orderCancel(${v.o_seq})">주문취소</span>
                                    `
                                )

                            }

                            if (v.o_state == '배송완료') {
                                $("#review-td-" + v.p_seq_new).append(
                                    '<a class="btn btn-sm btn-info rounded-0" href="review-insert.php?p_seq=' +
                                    v.p_seq_new + '&po_seq=' + v.po_seq + '">후기작성</a>')
                                $("#review-td-" + v.p_seq_new).append(
                                    `<span class="btn btn-sm btn-secondary" onclick="changeAccept(${v.o_seq}, ${v.p_seq_new}, ${v.po_seq})">반품/교환 신청</span>`
                                )

                                $("#m-review-td-" + v.p_seq_new).append(
                                    '<a class="btn  btn-sm btn-info w-100 rounded-0" href="review-insert.php?p_seq=' +
                                    v.p_seq_new + '&po_seq=' + v.po_seq + '">후기작성</a>')
                                $("#m-review-td-" + v.p_seq_new).append(
                                    `<span class="btn btn-sm btn-secondary w-100" onclick="changeAccept(${v.o_seq}, ${v.p_seq_new}, ${v.po_seq})">반품/교환 신청</span>`
                                )
                            } else if (v.o_state == '주문취소') {
                                cancelCheck = `주문취소`
                                $("#review-td-" + v.p_seq_new).html(
                                    '<a class=" ml-3" >주문 취소 한 상품입니다.</a>');
                                $("#m-review-td-" + v.p_seq_new).html(
                                    '<a class=" ml-3" >주문 취소 한 상품입니다.</a>')

                                minusPrice = (proinfo.price * 1 + optionPrice) * v.p_cnt * 1
                            }
                        } else {
                            cancelCheck = `반품/교환`
                            if (exchangeState[0].e_state == 0) {
                                $("#review-td-" + v.p_seq_new).append(
                                    '<span class="text-primary btn btn-primary w-100">반품/교환 신청 대기중</span>'
                                )
                                $("#m-review-td-" + v.p_seq_new).append(
                                    '<span class="text-primary btn btn-primary w-100">반품/교환 신청 대기중</span>'
                                )
                            } else if (exchangeState[0].e_state == 1) {
                                $("#review-td-" + v.p_seq_new).append(
                                    '<span class="text-success  btn btn-primary w-100">반품/교환 신청 승인</span>'
                                )
                                $("#m-review-td-" + v.p_seq_new).append(
                                    '<span class="text-success btn-sm  btn btn-primary w-100">반품/교환 신청 승인</span>'
                                )
                            } else if (exchangeState[0].e_state == -1) {
                                $("#review-td-" + v.p_seq_new).append(
                                    '<span class="text-danger  btn btn-primary w-100">반품/교환 신청 거절</span>'
                                )
                                $("#m-review-td-" + v.p_seq_new).append(
                                    '<span class="text-danger  btn btn-primary w-100">반품/교환 신청 거절</span>'
                                )
                            } else if (exchangeState[0].e_state == 2) {
                                $("#review-td-" + v.p_seq_new).append(
                                    '<span class="text-info  btn btn-primary w-100">택배사출발</span>'
                                )
                                $("#m-review-td-" + v.p_seq_new).append(
                                    '<span class="text-info  btn btn-primary w-100">택배사출발</span>'
                                )
                            } else if (exchangeState[0].e_state == 3) {
                                $("#review-td-" + v.p_seq_new).append(
                                    '<span class="text-danger  btn btn-primary w-100">반품/교환완료</span>'
                                )
                                $("#m-review-td-" + v.p_seq_new).append(
                                    '<span class="text-danger  btn btn-primary w-100">반품/교환완료</span>'
                                )
                            }

                        }
                    } else if (v.o_state == '상품준비중') {
                        $("#review-td-" + v.p_seq_new).html(

                            ` <span onclick="askOrder(${v.o_seq},${v.p_seq_new});" class="btn btn-sm btn-secondary">Q&A등록</span>
                        <span class="btn btn-sm btn-secondary" onclick="orderCancel(${v.o_seq})">주문취소</span>`
                        )
                        $("#m-review-td-" + v.p_seq_new).html(
                            ` <span onclick="askOrder(${v.o_seq},${v.p_seq_new});" class="btn w-100 btn-sm btn-secondary">Q&A등록</span>
                        <span class="btn btn-sm btn-secondary w-100" onclick="orderCancel(${v.o_seq})">주문취소</span>`
                        )
                    }
                }

            })

            $(".credit-totalprice").text(comma(alltotalprice))
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });


    let obj = {
        o_seq: o_seq,
    }

    $.ajax({
        url: SERVER_AP + "/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'order_list',
            common: obj,
        },
        success: function(data) {
            if (cancelCheck) {
                $(".cancelCheck").html(cancelCheck)
            } else {
                $(".credit-totalprice-all").text(comma(data[0].o_total_price * 1 + data[0].o_del_price * 1))
            }

            $(".credit-delprice").text(comma(data[0].o_del_price))
            if (data[0].pay_method == 'vbank') {
                data[0].pay_method = '무통장입금'

                $(".credit-vbank_name").text(data[0].vbank_name || '')
                $(".credit-bank_name").text(data[0].bank_name || '')
                $(".credit-vbank_num").text(data[0].vbank_num ? '(' + data[0].vbank_num + ')' : '')
                $(".credit-bank_name").addClass('d-none');
            } else {

                $(".credit-vbank_name").text(data[0].card_name || '')
                $(".credit-bank_name").text(data[0].card_number || '')
                $(".credit-vbank_num").text(data[0].vbank_num ? '(' + data[0].vbank_num + ')' : '')
                $(".credit-bank_name").removeClass('d-none');
            }
            if (data[0].pay_method == 'point') {
                data[0].card_name = '카카오페이'
            }
            $(".credit-pay_method").text(data[0].pay_method || '-')

            $(".credit-point").text(comma(data[0].o_point))
            $(".credit-coupon").text(comma(data[0].o_coupon))

            let delinfo = loadHomedataArr()
            $("#r_name").text(data[0].o_nonuser_name || delinfo.dl_person)
            $("#r_phone").text(data[0].o_phone ? hyphen(data[0].o_phone) : hyphen(delinfo.dl_phone))
            $("#r_address").text(data[0].o_nonuser_address ? (data[0].o_nonuser_address + ' ' + data[0]
                .o_nonuser_address2) : (delinfo.dl_address + ' ' + delinfo.dl_address_detail))
            $("#r_text").text(data[0].o_request || delinfo.dl_request)
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });

    $("#ordermodal").modal('show')
}


//////////////////////////////////////////////////////////
function calcDay(day) {
    // 입력받은 날짜를 Date 객체로 변환
    const date = new Date(day);

    // 2일 후 날짜 객체 생성
    const futureDate = new Date(date.getTime() + (2 * 24 * 60 * 60 * 1000));

    const weekdays = ['일', '월', '화', '수', '목', '금', '토'];
    let finalDay = ``;

    // 2일 후 날짜가 주말인 경우, 다음 평일의 날짜와 요일 출력
    if (futureDate.getDay() === 0) { // 일요일인 경우
        futureDate.setDate(futureDate.getDate() + 1); // 다음날로 변경
        finalDay = futureDate.toLocaleDateString() + '(' + weekdays[futureDate.getDay()] + ')'
    } else if (futureDate.getDay() === 6) { // 토요일인 경우
        futureDate.setDate(futureDate.getDate() + 2); // 다다음날로 변경
        finalDay = futureDate.toLocaleDateString() + '(' + weekdays[futureDate.getDay()] + ')'
    } else { // 평일인 경우
        finalDay = futureDate.toLocaleDateString() + '(' + weekdays[futureDate.getDay()] + ')'
    }

    return finalDay;
}


function proInfo(p_seq) {
    var info = [];
    var obj = new Object();
    obj.p_seq = p_seq;
    $.ajax({
        url: SERVER_AP + "/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'product',
            common: obj,
        },
        success: function(data) {
            info = {
                stock: data[0].p_stock,
                name: data[0].p_name,
                img: data[0].p_image,
                price: data[0].p_price
            }
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    return info;
}

function opInfo(po_seq) {
    var info = [];
    var obj = new Object();
    obj.po_seq = po_seq;
    $.ajax({
        url: SERVER_AP + "/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'product_option',
            common: obj,
        },
        success: function(data) {
            info = {
                p_seq: data[0].p_seq,
                stock: data[0].po_stock,
                name: data[0].po_option1 + ' ' + data[0].po_option2,
                price: data[0].po_price
            }
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
    return info;
}
//////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

function orderCancel(o_seq) {
    if (confirm("주문취소 하시겠습니까?")) {
        var obj = new Object();
        obj.o_state = '주문취소'
        $.ajax({
            url: SERVER_AP + "/admin/common/update",
            type: "post",
            cache: false,
            async: false,
            data: {
                table: 'order_list',
                whereField: "o_seq",
                whereValue: o_seq,
                obj: obj,
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

function orderComplete(o_seq) {
    if (confirm("배송완료 처리하시겠습니까?")) {
        var obj = new Object();
        obj.o_state = '배송완료'
        $.ajax({
            url: SERVER_AP + "/admin/common/update",
            type: "post",
            cache: false,
            async: false,
            data: {
                table: 'order_list',
                whereField: "o_seq",
                whereValue: o_seq,
                obj: obj,
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


function getCookie(name) {
    var value = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
    return value ? unescape(value[2]) : null;
};
</script>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>