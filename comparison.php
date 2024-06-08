<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php';
    $p_seq = $_GET['p_seq'];
    $pr_seq = $_GET['pr_seq'];
    $p_seq_first = $_GET['p_seq_first'];
    $p_seq_second = $_GET['p_seq_second'];

?>
<style>
th,
td {
    text-align: center;
}

th {
    width: 130px;
    padding: 8px;
}

.product-img-info {
    max-width: 120px;
    max-height: 160px;
}

.number-input {
    width: 100px;
    text-align: center;
    margin: 0 auto;
}

.color-box-info {
    width: 200px;
    margin: 0 auto;
}

.border-top-wrap {
    border-top: 0px !important;
}

.buy-btn {
    width: 120px;
    height: 40px;
    background-color: black;
    color: white;
    border: 1px solid black;
}

.btn-two-wrap {
    width: 100px;
    height: 38px;
    background-color: white;
    color: black;
    border: 1px solid #eee;
}


.table {
    margin: 0px;
}

.border-info-wrap:last-child {
    border-bottom: 0px !important;
}

td {
    padding: 0px !important;
}

input[type="radio"] {
    margin-top: -1px;
    width: 25px;
    height: 25px;
    border: 0;
    cursor: pointer;
    border-radius: 50%;
    background: url('/img/checks_off.png') no-repeat 0 0;
    background-size: 100% 100%;
    -webkit-appearance: none;
    -moz-appearance: none;
    image-rendering: -webkit-optimize-contrast;
}

input[type="radio"]:checked {
    background-image: url('/img/checks_on.png');
    -webkit-appearance: none;
    -moz-appearance: none;
}

@media (max-width: 769px) {
    .btn-two-wrap {
        font-size: 12px;
    }

    .buy-btn {
        width: 76px;
        font-size: 12px;
    }
}
</style>

<div class="container">
    <div class="mt-5 mb-4">
        <h2 class="mt-80">상품 비교</h2>
    </div>

    <div class="border border-top-wrap" style="overflow:auto">
        <table class="table" style="min-width:600px">
            <tbody>
                <tr>
                    <th scope="row" class="border-right">상품 이미지</th>
                    <td id="img_first" class="border-right"></td>
                    <td id="img_second"></td>
                </tr>
                <tr>
                    <th scope="row" class="border-right">상품명</th>
                    <td id="title_fist" class="border-right"></td>
                    <td id="title_second"></td>
                </tr>
                <tr>
                    <th scope="row" class="border-right">판매가</th>
                    <td id="priceFirst" class="border-right"></td>
                    <td id="priceSecond"></td>
                </tr>
                <tr>
                    <th scope="row" class="border-right" id="disPriceText">할인 판매가</th>
                    <td id="disPriceFirst" class="border-right"></td>
                    <td id="disPriceSecond"></td>
                </tr>
                <tr>
                    <th scope="row" class="border-right">배송방법</th>
                    <td id="delMethodFirst" class="border-right"></td>
                    <td id="delMethodSecond"></td>
                </tr>
                <tr>
                    <th scope="row" class="border-right">배송비</th>
                    <td id="delPriceFirst" class="border-right"></td>
                    <td id="delPriceSecond"></td>
                </tr>
                <tr>
                    <th scope="row" class="border-right">재고</th>
                    <td id="productCntFirst" class="border-right"></td>
                    <td id="productCntSecond"></td>
                </tr>

                <tr id="optionid" class="d-none">
                    <th scope="row" class="border-right">옵션</th>
                    <td class="border-right">
                        <select id="colorFirst" class="form-control form-control-sm color-box-info optionBox">
                            <option value="0">옵션을 선택해주세요</option>
                        </select>
                    </td>
                    <td>
                        <select id="colorSecond" class="form-control form-control-sm color-box-info optionBox">
                            <option value="0">옵션을 선택해주세요</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <th scope="row" class="border-right">수량</th>
                    <td id="cntFirst" class="border-right"><input type='number' id="inputFirstNum"
                            class="form-control form-control-sm number-input cntChange" value="1" /></td>
                    <td id="cntSecond"><input type='number' id="inputSecondNum"
                            class="form-control form-control-sm number-input cntChange" value="1" /></td>
                </tr>

                <tr id="addTrId" class="d-none">
                    <th scope="row" class="border-right">추가구성 상품</th>
                    <td class="border-right">
                        <div id="addProductFirst"></div>
                    </td>
                    <td>
                        <div class="" id="addProductSecond"></div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="border-right">원산지</th>
                    <td class="border-right">
                        <div id="fromFirst"></div>
                    </td>
                    <td>
                        <div class="" id="fromSecond"></div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="border-right">제조사</th>
                    <td class="border-right">
                        <div id="companyFirst"></div>
                    </td>
                    <td>
                        <div class="" id="companySecond"></div>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="border-right">브랜드</th>
                    <td class="border-right">
                        <div id="brandFirst"></div>
                    </td>
                    <td>
                        <div class="" id="brandSecond"></div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="pt-4 pb-5 d-flex justify-content-between">
        <div class="d-flex">
            <button class="btn-two-wrap" onclick="Cart();">장바구니</button>
            <button class="ml-2 btn-two-wrap" onclick="wishlistFn();">관심상품</button>
        </div>
        <div>
            <button class="buy-btn" onclick="buyFn();">바로구매하기</button>
        </div>

    </div>
</div>

<script>
var p_seq_first = '<?php echo $p_seq_first; ?>';
var p_seq_second = '<?php echo $p_seq_second; ?>';
var firstOptionChk = true;
var secondOptionChk = true;
var usertype = `개인회원`;

$(document).ready(function() {
    console.log("START");

    if (user_info) {
        if (user_info.u_status == 1) {
            usertype = `사업자회원`;
            $('#disPriceText').text('사업자판매가');
        }
    }

    loadFn();
});


function loadFn() {

    if (user_info) {

        if (user_info.u_status == 1) {
            var dt_seq = `dt_seq_up`;
        } else {
            var dt_seq = `dt_seq`;
        }
    } else {
        var dt_seq = `dt_seq`;
    }


    $.ajax({
        url: SERVER_AP + '/product/v1/productBetweenInfo',
        type: 'post',
        cache: false,
        data: {

            p_seq_first: p_seq_first,
            p_seq_second: p_seq_second,
            dt_seq: dt_seq,
        },
        success: function(data) {

            for (var i = 0; i < data.row.length; i++) {
                var v = data.row[i];

                console.log("CHECK 132 : ", v);

                if (v.p_option == 'Y') {
                    $('#optionid').removeClass('d-none');
                }

                // if (v.p_addtional == 'Y') {
                //     $('#addTrId').removeClass('d-none');
                // }

                if (v.p_seq == p_seq_first) {

                    //                        var disprice = -(((v.p_price * 1 - v.p_consume_price * 1) / v.p_price) *100);
                    $('#fromFirst').html(v.p_born);

                    $('#companyFirst').html(v.p_company);
                    $('#brandFirst').html(v.p_brand);


                    $('#inputFirstNum').addClass(`numberClass_${v.p_seq}`);

                    // <input type="checkbox" id="checkId${v.p_seq}" value="${v.p_seq}" class="form-control form-control-sm checkClass" style="height: 20px;" />

                    $('#title_fist').text(v.p_name);
                    var parseImg = JSON.parse(v.p_image);
                    $('#img_first').append(
                        `<a href="https://lidot.co.kr:90/product_detail.php?p_seq=${v.p_seq}"><img class="product-img-info" src='${parseImg[0]}' /></a>
                                                <input type="radio" id="checkId${v.p_seq}" name="radioBtn" value="${v.p_seq}" class="form-control form-control-sm checkClass mx-auto my-2"  />`
                    );

                    $('#priceFirst').text(comma(v.p_consume_price) + '원');


                    if (usertype == '사업자회원') {

                        if (!v.p_wholesale) {
                            $('#disPriceFirst').text(comma(v.p_price) + '원');
                            $(`#checkId${v.p_seq}`).attr('data-p_price', v.p_price);
                        } else {
                            $('#disPriceFirst').text(comma(v.p_wholesale) + '원');
                            $(`#checkId${v.p_seq}`).attr('data-p_price', v.p_wholesale);
                        }


                    } else {
                        $('#disPriceFirst').text(comma(v.p_price) + '원');

                        $(`#checkId${v.p_seq}`).attr('data-p_price', v.p_price);
                    }

                    $('#productCntFirst').text(v.p_stock + '개');


                    $('#delMethodFirst').append(
                        `<span>${v.dt_del_company}</span><span> ${v.dt_del}</span>`);
                    $('#delPriceFirst').append(
                        `<span id="delPriceFirst_limit">${comma(v.dt_type_first)}</span><span>${v.dt_type_text}</span><span id="delPriceFirst_price"> ${comma(v.dt_type_second)}</span><span>원</span>`
                    );

                    if (v.p_option == 'Y') {

                        if (v.optionInfo.length != 0) {

                            $('#colorFirst').addClass(`selectBoxClass_${v.p_seq}`);

                            $('#colorFirst').attr(`data-p_seq`, v.p_seq);

                            for (var y = 0; y < v.optionInfo.length; y++) {
                                var vv = v.optionInfo[y];

                                if (vv.po_stock == 0) {
                                    $('#colorFirst').append(
                                        `<option data-po_price="${vv.po_price}" value="${vv.po_seq}">${vv.po_option2}(+${vv.po_price}원)<span> 품절</span></option>`
                                    );
                                } else {
                                    $('#colorFirst').append(
                                        `<option data-po_price="${vv.po_price}" value="${vv.po_seq}">${vv.po_option2}(+${vv.po_price}원)</option>`
                                    );
                                }
                            }
                        }
                    } else {
                        $('#colorFirst').addClass('d-none');
                        firstOptionChk = false;
                    }


                    if (v.p_addtional == 'Y') {

                        for (var y = 0; y < v.addInfo.length; y++) {
                            var vv = v.addInfo[y];

                            var image = JSON.parse(vv.p_image);

                            // <div class="pr-2">
                            //     <input id="addProductChk${vv.p_seq}" type="checkbox" data-main_seq=${v.p_seq} value="${vv.p_seq}" data-p_cnt="1" class="form-control form-control-sm addProductClass" style="width:15px;" />
                            // </div>

                            $('#addProductFirst').append(`
                                <div class="border-bottom d-flex pt-3 border-info-wrap" style="justify-content:center;">
                                    <img style="max-width: 120px; max-height: 160px;" src="${image}" />
                                <div class="p-1">
                                    <div style="font-size: 16px;">
                                        <span>${vv.p_name}</span>
                                    </div>

                                    <div class="pt-2">
                                        <select style="width: 200px;" class="form-control addBoxChange" data-p_seq=${vv.p_seq} id="addProductBox${vv.p_seq}">
                                                <option value="0">옵션을 선택해주세요</option>
                                        </select>
                                    </div>
                                    <div class="pt-2">
                                        <input type="number" id="addProductNumberId${vv.p_seq}" data-p_seq=${vv.p_seq} value="1" class="form-control form-control-sm addClassNumChange" style="width:200px; text-align: center;" />
                                    </div>
                                    <div class="pt-2 d-flex" style="justify-content:right; font-size:17px;">
                                        <span class="">${vv.p_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}원</span>
                                    </div>
                                </div>

                            </div>`);

                            if (vv.option.length == 0) {
                                $(`#addProductBox${vv.p_seq}`).append(
                                    `<option data-add_price="0" value="${vv.p_seq}">${vv.p_name}(+0)원)</option>`
                                );
                            } else {
                                for (var z = 0; z < vv.option.length; z++) {
                                    var vvv = vv.option[z];
                                    $(`#addProductBox${vv.p_seq}`).append(
                                        `<option data-add_price="${vvv.po_price}" value="${vvv.po_seq}">${vvv.po_option1} ${vvv.po_option2}(+${vvv.po_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}원)</option>`
                                    );

                                }

                            }

                            $(`#addProductChk${vv.p_seq}`).attr('data-p_price', vv.p_price);

                        }

                    }

                }

                if (v.p_seq == p_seq_second) {

                    // <input type="checkbox" id="checkId${v.p_seq}" value="${v.p_seq}" class="form-control form-control-sm checkClass" style="height: 20px;" />

                    $('#inputSecondNum').addClass(`numberClass_${v.p_seq}`);
                    $('#fromSecond').html(v.p_born);

                    $('#companySecond').html(v.p_company);
                    $('#brandSecond').html(v.p_brand);
                    $('#title_second').text(v.p_name);
                    var parseImg = JSON.parse(v.p_image);
                    $('#img_second').append(
                        `<a href="https://lidot.co.kr:90/product_detail.php?p_seq=${v.p_seq}"><img class="product-img-info" src='${parseImg[0]}' /></a>
                                                 <input type="radio" id="checkId${v.p_seq}" name="radioBtn" value="${v.p_seq}" class="form-control form-control-sm checkClass mx-auto my-2"  />`
                    );

                    $('#priceSecond').text(v.p_consume_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g,
                        ",") + '원');



                    if (usertype == '사업자회원') {

                        if (v.p_wholesale) {
                            $('#disPriceSecond').text(v.p_wholesale.toString().replace(
                                /\B(?=(\d{3})+(?!\d))/g, ",") + '원');

                            $(`#checkId${v.p_seq}`).attr('data-p_price', v.p_wholesale);
                        } else {
                            $('#disPriceSecond').text(v.p_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g,
                                ",") + '원');

                            $(`#checkId${v.p_seq}`).attr('data-p_price', v.p_price);
                        }


                    } else {
                        $('#disPriceSecond').text(v.p_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g,
                            ",") + '원');
                        $(`#checkId${v.p_seq}`).attr('data-p_price', v.p_price);
                    }

                    $('#productCntSecond').text(v.p_stock + '개');


                    $('#delMethodSecond').append(
                        `<span>${v.dt_del_company}</span><span> ${v.dt_del}</span>`);
                    $('#delPriceSecond').append(
                        `<span id="delPriceSecond_limit">${comma(v.dt_type_first)}</span><span>${v.dt_type_text}</span><span id="delPriceSecond_price"> ${comma(v.dt_type_second)}</span><span>원</span>`
                    );


                    if (v.p_option == 'Y') {

                        if (v.optionInfo.length != 0) {

                            $('#colorSecond').addClass(`selectBoxClass_${v.p_seq}`);
                            $('#colorSecond').attr(`data-p_seq`, v.p_seq);

                            for (var y = 0; y < v.optionInfo.length; y++) {
                                var vv = v.optionInfo[y];

                                if (vv.po_stock == 0) {
                                    $('#colorSecond').append(
                                        `<option data-po_price="${vv.po_price}" value="${vv.po_seq}">${vv.po_option2}(+${vv.po_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}원)<span> 품절</span></option>`
                                    );
                                } else {
                                    $('#colorSecond').append(
                                        `<option data-po_price="${vv.po_price}" value="${vv.po_seq}">${vv.po_option2}(+${vv.po_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}원)</option>`
                                    );
                                }
                            }
                        }

                    } else {
                        $('#colorSecond').addClass('d-none');
                        secondOptionChk = false;
                    }

                    if (v.p_addtional == 'Y') {

                        for (var y = 0; y < v.addInfo.length; y++) {
                            var vv = v.addInfo[y];

                            var image = JSON.parse(vv.p_image);

                            $('#addProductSecond').append(`
                                <div class="border-bottom d-flex pt-3 border-info-wrap" style="justify-content:center;">
                                    <img style="max-width: 120px; max-height: 160px;" src="${image}" />
                                <div class="p-1">
                                    <div style="font-size: 16px;">
                                        <span>${vv.p_name}</span>
                                    </div>
                                    <div class="pt-2">
                                        <select style="width: 200px;" class="form-control addBoxChange" data-p_seq=${vv.p_seq} id="addProductBox${vv.p_seq}">
                                                <option data-add_price="0" value="0">옵션을 선택해주세요</option>
                                        </select>
                                    </div>

                                    <div class="pt-2">
                                        <input type="number" id="addProducNumbertId${vv.p_seq}" data-p_seq=${vv.p_seq} value="1" class="form-control form-control-sm addClassNumChange" style="width:200px; text-align: center;" />
                                    </div>

                                    <div class="pt-2 d-flex" style="justify-content:right; font-size:17px;">
                                        <span class="">${comma(vv.p_price)}원</span>
                                    </div>
                                </div>

                                <div>
                                    <input id="addProductChk${vv.p_seq}" type="checkbox" data-main_seq=${v.p_seq} value="${vv.p_seq}" data-p_cnt="1" class="form-control form-control-sm addProductClass" style="width:15px;" />
                                </div>
                            </div>`);

                            if (vv.option.length == 0) {
                                $(`#addProductBox${vv.p_seq}`).append(
                                    `<option data-add_price="0" value="${vv.p_seq}">${vv.p_name}(+0)원)</option>`
                                );
                            } else {

                                for (var z = 0; z < vv.option.length; z++) {
                                    var vvv = vv.option[z];
                                    $(`#addProductBox${vv.p_seq}`).append(
                                        `<option data-add_price="${vvv.po_price}" value="${vvv.po_seq}">${vvv.po_option1} ${vvv.po_option2}(+${comma(vvv.po_price)}원)</option>`
                                    );

                                }

                            }

                            $(`#addProductChk${vv.p_seq}`).attr('data-p_price', vv.p_price);

                        }

                    }
                }
            }
        },
        error: function(request, status, error) {
            console.log(error);
        },
    });
}


$(document).on('change', '.cntChange', function() {

    var num = $(this).val();

    if (Number(num) <= 0) {
        alert("수량은 0보다 커야 합니다");
        var idcheck = $(this).attr('id');
        $(`#${idcheck}`).val(1);
        return false;
    }
});

$(document).on('change', '.addClassNumChange', function() {

    var num = $(this).val();
    var p_seq = $(this).data('p_seq');

    if (Number(num) <= 0) {
        alert("수량은 0보다 커야 합니다");
        var idcheck = $(this).attr('id');
        $(`#${idcheck}`).val(1);
        return false;
    } else {
        $(`#addProductChk${p_seq}`).attr('data-p_cnt', num);
    }
});

$(document).on('change', '.optionBox', function() {

    var po_seq = $(this).val();
    var p_seq = $(this).data('p_seq');
    var p_price = $(`#checkId${p_seq}`).data('p_price');
    var po_price = $(`.selectBoxClass_${p_seq} option:selected`).data('po_price');
    var num = Number(p_price) + Number(po_price);

    if (po_seq == 0) {
        $(`#checkId${p_seq}`).attr('data-product_price', p_price);
    } else {
        $(`#checkId${p_seq}`).attr('data-product_price', num);
    }

});

$(document).on('change', '.addBoxChange', function() {
    console.log("ADD CHANGE");
    var p_seq = $(this).data('p_seq');
    var po_seq = $(this).val();
    var p_price = $(`#addProductChk${p_seq}`).data('p_price');
    var po_price = $(`#addProductBox${p_seq} option:selected`).data('add_price');
    var num = Number(p_price) + Number(po_price);

    if (po_seq == 0) {
        $(`#addProductChk${p_seq}`).attr('data-add_price', p_price);
    } else {
        $(`#addProductChk${p_seq}`).attr('data-add_price', num);
    }

});


function Cart() {

    if (!user_info) {
        alert('로그인 해주세요');
        return false;
    }

    if ($('.checkClass').is(':checked') == false) {
        alert('상품을 선택해주세요');
        return false;
    }


    var cartArr = [];

    $(".checkClass").each(function(i, v) {

        var obj = {};

        if (v.checked == true) {
            var p_seq = $(this).val();
            obj.p_seq = p_seq;
            cartArr.push(obj);
        }
    });

    for (var i = 0; i < cartArr.length; i++) {

        var v = cartArr[i];

        var number = $(`.numberClass_${v.p_seq}`).val();
        var colorOption = $(`.selectBoxClass_${v.p_seq} option:selected`).val();

        if (firstOptionChk == true && colorOption == 0) {
            alert('옵션을 선택해주세요');
            return false;
        }

        if (secondOptionChk == true && colorOption == 0) {
            alert('옵션을 선택해주세요');
            return false;
        }

        if (colorOption) {
            v.po_seq = colorOption;
        }

        v.c_cnt = number;
        v.u_seq = user_info.u_seq;
        v.c_date = currentDate();
    }

    $.ajax({
        url: SERVER_AP + '/common/v1/arrInsert',
        type: 'post',
        cache: false,
        data: {

            table: 'cart',
            arrInfo: cartArr,

        },
        success: function(data) {
            alert("선택하신 상품이 장바구니에 담겼습니다");
        },
        error: function(request, status, error) {
            console.log(error);
        },
    });
}


function wishlistFn() {

    if (!user_info) {
        alert('로그인 해주세요');
        return false;
    }

    if ($('.checkClass').is(':checked') == false) {
        alert('상품을 선택해주세요');
        return false;
    }


    var cartArr = [];

    $(".checkClass").each(function(i, v) {

        var obj = {};

        if (v.checked == true) {
            var p_seq = $(this).val();
            obj.p_seq = p_seq;
            obj.u_seq = user_info.u_seq;
            obj.w_date = currentDate();
            cartArr.push(obj);
        }
    });

    $.ajax({
        url: SERVER_AP + '/common/v1/arrInsert',
        type: 'post',
        cache: false,
        data: {

            table: 'wishlist',
            arrInfo: cartArr,

        },
        success: function(data) {
            alert("선택하신 상품이 관심상품에 저장 되었습니다");
        },
        error: function(request, status, error) {
            console.log(error);
        },
    });
}


function buyFn() {

    if (!user_info) {
        alert('로그인 해주세요');
        return false;
    }


    if ($('.checkClass').is(':checked') == false) {
        alert('상품을 선택해주세요');
        return false;
    }


    for (var i = 0; i < $('.checkClass').length; i++) {
        var v = $('.checkClass')[i];

        var valueInfo = $(v).val();

        if ($(v).is(':checked') == true) {

            var boxCheck = $(`.selectBoxClass_${valueInfo}`).val();

            if (boxCheck) {

                if (boxCheck == 0) {
                    alert('옵션을 선택해주세요');
                    return false;
                }
            }
        }
    }

    var firstArr = [];
    var secondArr = [];
    var addFirstArr = [];
    var addSecondArr = [];
    var totalArr = [];

    var totalObj = {};
    var totalObj2 = {};

    var first_price = 0;
    var second_price = 0;
    var add_first_price = 0;
    var add_second_price = 0;

    var p_seq = "";

    var proNumber = 1;

    let randomseq = Math.random().toString(16).substr(2, 9);

    $(".checkClass").each(function(i, v) {

        var obj = {};
        var obj2 = {};

        if (v.checked == true) {

            p_seq = $(this).val();
            var p_price = $(`#checkId${p_seq}`).data('product_price');
            proNumber = $(`.numberClass_${p_seq}`).val();
            var op_seq = $(`.selectBoxClass_${p_seq}`).val();

            if (!p_price) {
                var p_price = $(`#checkId${p_seq}`).data('p_price');
                var p_price = Number(p_price) * Number(proNumber);
            } else {
                var p_price = Number(p_price) * Number(proNumber);
            }

            first_price = p_price;

            if (op_seq) {

                obj.randomseq = randomseq;
                obj.p_seq = p_seq;
                obj.op_seq = op_seq;
                obj.cnt = proNumber;
                firstArr.push(obj);
                totalObj.os_option_data = firstArr;
                totalArr.push(totalObj);

            } else {

                obj.p_seq = p_seq;
                obj.u_seq = randomseq;
                totalArr.push(obj);
            }
        }
    });

    var addProductChk = true;

    $(".addProductClass").each(function(i, v) {
        var obj = {};
        var obj2 = {};

        if (v.checked == true) {

            var option_p_seq = $(this).val();
            var main_seq = $(this).data('main_seq');
            var po_seq = $(`#addProductBox${option_p_seq} option:selected`).val();
            var add_price = $(`#addProductChk${option_p_seq}`).data('add_price');
            var number = $(`#addProductChk${option_p_seq}`).data('p_cnt');

            if (!add_price) {
                var add_price = $(`#addProductChk${option_p_seq}`).data('p_price');
                var add_price = Number(add_price) * Number(number);
            } else {
                var add_price = Number(add_price) * Number(number);
            }

            if (p_seq == main_seq) {

                add_first_price += add_price;

                if (po_seq == 0) {
                    addProductChk = false;
                }

                if (po_seq == option_p_seq) {

                    obj.addop_seq = po_seq;

                } else {

                    obj.p_seq = option_p_seq;
                    obj.addop_seq = po_seq;
                }

                obj.randomseq = randomseq;
                obj.cnt = number;

                addFirstArr.push(obj);

                if (!totalArr[0]) {
                    var aaObj = {
                        os_addoption_data: addFirstArr
                    };
                    totalArr.push(aaObj);
                } else {
                    totalArr[0].os_addoption_data = addFirstArr;
                }
            }
        }
    });


    if (addProductChk == false) {
        alert("추가 구성상품 옵션을 선택해주세요");
        return false;
    }

    for (var i = 0; i < totalArr.length; i++) {

        var v = totalArr[i];


        if (p_seq == p_seq_first) {
            var del_limit = Number($("#delPriceFirst_limit").text().replace(',', ''));
            var del_price = Number($("#delPriceFirst_price").text().replace(',', ''));
            var totalPrice = Number(first_price) + Number(add_first_price);
        }

        if (p_seq == p_seq_second) {
            var del_limit = Number($("#delPriceSecond_limit").text().replace(',', ''));
            var del_price = Number($("#delPriceSecond_price").text().replace(',', ''));
            var totalPrice = Number(first_price) + Number(add_first_price);
        }



        if (del_limit < totalPrice) {
            v.os_delivery_price = 0;
        } else {
            v.os_delivery_price = del_price;
        }


        if (v.os_addoption_data) {
            v.os_addoption_data = JSON.stringify(v.os_addoption_data);
        } else {
            delete v.os_addoption_data;
        }

        v.os_totalprice = totalPrice;
        v.p_seq = p_seq;
        v.u_seq = randomseq;



        if (v.os_option_data) {
            v.os_option_data = JSON.stringify(v.os_option_data);
        } else {

            var bbObj = {
                "randomseq": v.u_seq,
                "p_seq": v.p_seq,
                "cnt": proNumber
            };
            v.os_pro_data = JSON.stringify(bbObj);
        }
    }

    sessionStorage.setItem("product", JSON.stringify(totalArr[0]));

    $.ajax({
        url: SERVER_AP + "/cart/cart-insert",
        type: "post",
        cache: false,
        async: false,
        data: {

            obj: totalArr[0],
        },
        success: function(data) {},
        error: function(request, status, error) {
            console.log(error);
        }
    });


    location.href = "/order.php?buy=direct";
}
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
