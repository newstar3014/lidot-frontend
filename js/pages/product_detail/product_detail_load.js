let drawProArr = [];
function LoadProcut() {
    $.ajax({
        url: SERVER_AP + '/product/condition',
        type: 'post',
        cache: false,
        data: {
            p_seq: p_seq,
        },
        success: function (data) {
            console.log('dataaa', data);

            var v = data[0];
            $.each($('.menu_btns'), function (ii, vv) {
                if ($(vv).children('a').text() == v.ls_name) {
                    $(vv).children('a').addClass('font-weight-bold');
                }
            });

            ////////////// 사업자회원시 도매가 가격 적용 ////////////////////
            if (
                v.p_wholesale &&
                user_info.u_type == '사업자회원' &&
                user_info.u_status == 1
            ) {
                v.p_price = v.p_wholesale;
                v.dt_seq = v.dt_seq_up;
            }

            //if(user_info.u_type == '사업자회원'){
            let str = ` / <span class="text-primary ml-1 total_product_cnt">${v.p_stock}</span>`;
            $('.admin_class').html(str);
            //}
            ////////////// 사업자회원시 도매가 가격 적용 END ////////////////////

            var lslink =
                '<a href="/store.php?ls_seq=' +
                v.p_large_sort +
                '">' +
                v.ls_name +
                '</a>';
            var mslink =
                '<a href="/store.php?ls_seq=' +
                v.p_large_sort +
                '&ms_seq=' +
                v.p_middle_sort +
                '">' +
                v.ms_name +
                '</a>';
            var sslink = '';
            if (v.ss_name) {
                sslink =
                    '<a href="/store.php?ls_seq=' +
                    v.p_large_sort +
                    '&ms_seq=' +
                    v.p_middle_sort +
                    '&ss_seq=' +
                    v.p_small_sort +
                    '">' +
                    v.ss_name +
                    '</a>';
            }
            $('#large_sort').html(lslink || '');
            $('#middle_sort').html(mslink || '');
            $('#small_sort').html(sslink || '');
            if (!v.ss_name) {
                $('#small_sort').remove();
            }

            if (v.p_option == 'N') {
                $('#optionDiv').remove();
            } else {
                $('#pro-wrap-hr').remove();
                $('#pro-wrap').removeClass('d-flex');
                $('#pro-wrap').addClass('d-none');
                $('#pro-wrap_side').removeClass('d-flex');
                $('#pro-wrap_side').addClass('d-none');
                isOption = true;
            }

            if (v.p_addtional == 'N') {
                $('#additionalDiv').remove();
            }

            //main img
            var mainimgArr = JSON.parse(v.p_image);

            shareImg = mainimgArr[0];
            $.each(mainimgArr, function (i, v) {
                var imgstr = '<img src="' + v + '" alt=" ">';
                var imgnavstr =
                    '<img src="' + v + '" alt=" " class="mx-2 navimg">';
                $('#mainImgSliderFor').append(imgstr);
                $('#mainImgSliderNav').append(imgnavstr);
            });

            ///////////cookie////////////////
            let imgObj = {
                img: mainimgArr[0],
                p_seq: p_seq,
                p_name: data[0].p_name,
                p_price: data[0].p_price,
            };
            if (img_cookies.length === 0) {
                img_cookies.unshift(imgObj);
            } else {
                let arr = [];
                for (let i = 0; i < img_cookies.length; i++) {
                    for (let key in img_cookies[i]) {
                        arr.push(img_cookies[i][key]);
                    }
                }
                if (!arr.includes(p_seq)) {
                    img_cookies.unshift(imgObj);
                }
            }
            setCookie('img', JSON.stringify(img_cookies), 1);
            ///////cookie end//////////////

            $('#mainImgSliderFor').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '#mainImgSliderNav',
                autoplayspeed: 1500,
                autoplay: true,
            });
            $('#mainImgSliderNav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '#mainImgSliderFor',
                centerMode: true,
                focusOnSelect: true,
            });

            //$('#mainImgSliderFor').zoomImage();
            const divs = document.getElementsByClassName('navimg ');
            const count = divs.length;
            console.log('count', count);
            if (count == 1) {
                $('.slick-track').addClass('no-trans');
            }
            // $('#mainImgSliderNav').slick({
            //     slidesToShow: 3,
            //      asNavFor: '#mainImgSliderFor',
            //      arrows: false,
            //      dots: false,
            //      infinite: true,
            //      centerPadding: '0px',
            //      centerMode: true,
            //      fade : false,
            //      focusOnSelect: true,
            //      swipeToSlide: true
            // });
            var disprice = -(
                ((v.p_price * 1 - v.p_consume_price * 1) / v.p_price) *
                100
            );
            var deltemprice = LoadDel(v.dt_seq);
            console.log('dt_seq', v.dt_seq);
            LoadDelType(v.dt_seq);

            if ($(deltemprice).attr('data-condition')) {
                if ($(deltemprice).attr('data-condition') * 1 < v.p_price * 1) {
                    $('#dt_del_price').text('무료');
                    $('#dt_del_price_side').text('무료');
                } else {
                    $('#dt_del_price').html(deltemprice);
                    $('#dt_del_price_side').html(deltemprice);
                }
            } else {
                $('#dt_del_price').html(deltemprice);
                $('#dt_del_price_side').html(deltemprice);
            }
            if ($('#delivery_price_span').attr('data-condition')) {
                delivery_condition =
                    $('#delivery_price_span').attr('data-condition') * 1;
            }
            if ($('#delivery_price_span').attr('data-type')) {
                delivery_type = $('#delivery_price_span').attr('data-type');
            }
            delivery_price = $('#delivery_price_span').attr('data-del') * 1;
            $('.p_text').html(v.p_text);

            if (Math.floor(disprice) != 0 || Math.floor(disprice) >= 0) {
                var textTitle = `<span>${
                    v.p_name
                }</span> <span class="title-discount font-weight-light text-danger">${Math.floor(
                    disprice,
                )}%</span>`;
            } else {
                var textTitle = `${v.p_name}`;
            }

            $('.p_name').html(textTitle);
            console.log('?? : ', textTitle);
            $('.p_name_side').html(v.p_name);

            shareTitle = v.p_name;
            shareMoney = v.p_price;
            shareDc = v.p_consume_price * 1;

            product_price = v.p_price * 1;
            $('#p_price').html(comma(v.p_consume_price));
            $('#p_consume_price').html(comma(v.p_price));
            $('#p_consume_price_side').html(comma(v.p_price));
            $('#diffprice').html(comma(v.p_consume_price - v.p_price));
            if (v.p_option == 'Y') {
                $('#p_price_c').html(comma(0));
                $('#p_price_c').attr('data-price', 0);
                $('#p_stock').val(0);

                $('#p_price_c_side').html(comma(0));
            } else {
                $('#p_price_c_side').html(comma(product_price));
                $('#p_price_c').html(comma(product_price));
                $('#p_price_c').attr('data-price', product_price);
                totalPrice = product_price;

                $('#totalPrice').html(comma(product_price));
                $('#totalNum').text(1);
                $('#p_stock').attr('min', 1);

                $('#totalPrice_side').html(comma(product_price));
                $('#totalNum_side').val(1);
            }

            if (v.p_onetext) {
                $('.p_onetext').text(v.p_onetext);
            } else {
                $('.p_onetext').remove();
            }

            $('#totalPrice').text(comma(totalPrice));

            $('#p_stock').attr('data-max', v.p_stock);
            $('#p_stock').attr('max', v.p_stock);

            if (v.p_hashtag != null) {
                $('#hashtagWrap').removeClass('d-none');
                var hashtagArr = JSON.parse(v.p_hashtag);
                $.each(hashtagArr, function (i, v) {
                    var hstr = `<a href="/store.php?sk=${v}">#${v}</a> `;
                    $('#hashtagTd').append(hstr);
                });
            }

            if (v.p_stock == 0) {
                $('.stockckBtn').text('품절');
                $('.stockckBtn').attr('onclick', 'alert("품절 되었습니다.")');
                var soldout = `<div id='soldoutdiv'>SOLDOUT</div>`;
                $('#mainImgSliderFor').append(soldout);
            }

            LoadOption();
            LoadAdditional(v.p_a_p_seq);
            LoadProInfoData();

            if (!$('#pro-wrap').hasClass('d-none')) {
                $('input[name=pronum]').val(1);
            }
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
}

$('#additionalOpen').on('click', function () {
    if (!$('#more-product-wrap').hasClass('d-none')) {
        $(this).find('i').attr('class', 'fas fa-chevron-down');
        $('#more-product-wrap').addClass('d-none');
    } else {
        $(this).find('i').attr('class', 'fas fa-chevron-up');
        $('#more-product-wrap').removeClass('d-none');
    }
});

function LoadDelType(dt_seq) {
    var obj = new Object();
    obj.dt_seq = dt_seq;
    $.ajax({
        url: SERVER_AP + '/admin/common/condition',
        type: 'post',
        cache: false,
        data: {
            table: 'delivery_template',
            common: obj,
        },
        success: function (data) {
            var v = data[0];
            $('#dt_del').text(v.dt_del_company + ' ' + v.dt_del);
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
}

function loadOpgitonGroup() {
    $.ajax({
        url: SERVER_AP + '/admin/common/group',
        type: 'post',
        cache: false,
        success: function (data) {
            drawProArr = data;
            console.log('drawProArr : ', drawProArr);
            $.each(data, function (i, v) {
                let str = `<div class="d-none optiontitle optiontitle${v.po_option1} mb-2" data-name="${v.po_option1}">
                            <div class="d-flex align-items-center">
                                <span class="" style="min-width:27%;"> ${v.po_option1}</span>
                                <select data-name='${v.po_option1}' class="select_${v.po_option1} drawoptiongo form-control form-control-sm d-inline-block ml-auto">
                                    <option>옵션을 선택해주세요.</option>
                                </select>
                            </div>
                            </div>`;
                let tempStr = `<div class="d-none optiontitle optiontitle${v.po_option1} mb-2" data-name="${v.po_option1}">

                <table class="w-100">
                <td style="width:27%;"><span class=""> ${v.po_option1}</span></td>
                <td>
                    <div data-name='${v.po_option1}' class="op_image_${v.po_option1} row text-center"></div>
                </td>
                </table>
                </div>`;

                let side_str = `<div class="d-none side_optiontitle side_optiontitle${v.po_option1} mb-2" data-name="${v.po_option1}">
                            <div class="d-flex align-items-center">
                                <span class="" style="min-width:27%;"> ${v.po_option1}</span>
                                <select data-name='${v.po_option1}' class="select_${v.po_option1} drawoptiongo form-control form-control-sm d-inline-block ml-auto">
                                    <option>옵션을 선택해주세요.</option>
                                </select>
                            </div>
                            </div>`;

                $('.option_list').append(tempStr);
                $('.option_list_side').append(side_str);
            });
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
}

function LoadOption() {
    var obj = new Object();
    obj.p_seq = p_seq;
    $.ajax({
        url: SERVER_AP + '/admin/common/condition',
        type: 'post',
        cache: false,
        data: {
            table: 'product_option',
            common: obj,
        },
        success: function (data) {
            $.each(data, function (i, v) {
                $('.optiontitle' + v.po_option1).removeClass('d-none');
                $('.optiontitle' + v.po_option1).addClass('onOption');
                $('.side_optiontitle' + v.po_option1).removeClass('d-none');

                var str =
                    '<option value="' +
                    v.po_seq +
                    '" class="op-seq' +
                    v.po_seq +
                    '"> ' +
                    v.po_option2 +
                    ' (+' +
                    comma(v.po_price) +
                    '원)</option>';
                $('.select_' + v.po_option1).append(str);

                let mainStr = `<div  class="col-4 col-md-3">
                    <div class="drawdiv pointer border d-inline-block op-seq${
                        v.po_seq
                    }" style="" data-target="${v.po_seq}" data-name="${
                    v.po_option1
                }">
                        <image class="product-img" src="${v.po_image ?? '/img/option_default.png'}" />
                    </div>
                    <div style="font-size:11px;">${v.po_option2} (+${comma(
                    v.po_price,
                )}원)</div>
                </div>`;
                $(`.op_image_${v.po_option1}`).append(mainStr);
                if (v.po_stock == 0) {
                    $('.op-seq' + v.po_seq).after('<span>(품절)</span>');
                    $('.op-seq' + v.po_seq).attr('disabled', true);
                }
            });
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
}

function LoadAdditional(p_a_p_seq) {
    var paArr = JSON.parse(p_a_p_seq);
    $.each(paArr, function (pi, pv) {
        var obj = new Object();
        obj.p_seq = pv;
        $.ajax({
            url: SERVER_AP + '/admin/common/condition',
            type: 'post',
            cache: false,
            data: {
                table: 'product',
                common: obj,
            },
            success: function (data) {
                var v = data[0];

                var noOpProduct = '';
                v.p_option == 'N' &&
                    (noOpProduct =
                        '<option value="' +
                        v.p_seq +
                        '">' +
                        v.p_name +
                        ' (' +
                        comma(v.p_price) +
                        '원)</option>');

                var mainimg = JSON.parse(v.p_image);
                console.log('v.p_wholesale : ', v.p_wholesale);
                if (
                    v.p_wholesale &&
                    user_info.u_type == '사업자회원' &&
                    user_info.u_status == 1
                ) {
                    v.p_price = v.p_wholesale;
                }

                var str =
                    `<div class="p-3 border-bottom border-left border-right d-flex">\
                                <div class="col-2 px-0">\
                                    <div class="more-product-img pointer" onclick="location.href='/product_detail.php?p_seq=` +
                    pv +
                    `'" style="background:url(` +
                    mainimg[0] +
                    `);"></div>\
                                </div>\
                                <div class="col-10 pr-0" style="font-size:12px;">\
                                    <div class="row">\
                                        <div class="col-8 text-left">\
                                            <div class="mb-2 font-weight-bold">` +
                    v.p_name +
                    `</div>\
                                        </div>\
                                        <div class="col-4 text-right">\
                                            <div class="font-weight-bold"><span>` +
                    comma(v.p_price) +
                    `</span>원</div>\
                                        </div>\
                                    </div>\
                                    <div class="mb-2">상품선택</div>\
                                    <select class="form-control form-control-sm addoption` +
                    v.p_seq +
                    ` addoption" data-target="` +
                    v.p_option +
                    `" name="" style="font-size:12px;">\
                                        <option value="">-상품 선택-</option>\
                                        ` +
                    noOpProduct +
                    `\
                                    </select>\
                                </div>\
                            </div>`;
                $('#more-product-wrap').append(str);

                var sideStr = `<div class="py-2 border-top d-flex justify-content-between align-items-center" style="gap:10px;">
                    <div class="fs-12" style="max-width:200px;">${v.p_name}</div>
                    <div>
                        <select class="form-control form-control-sm side_addoption side_addoption${v.p_seq}" data-target="${v.p_option}">
                            <option value="">-상품선택-</option>
                            ${noOpProduct}
                        </select>
                    </div>
                </div>`;

                $('#side_add').append(sideStr);

                v.p_option == 'Y' && LoadAddOption(v.p_seq);
            },
            error: function (request, status, error) {
                console.log(error);
            },
        });
    });
}

function LoadAddOption(p_seq) {
    var obj = new Object();
    obj.p_seq = p_seq;
    $.ajax({
        url: SERVER_AP + '/admin/common/condition',
        type: 'post',
        cache: false,
        data: {
            table: 'product_option',
            common: obj,
        },
        success: function (data) {
            $.each(data, function (i, v) {
                var opstr =
                    '<option value="' +
                    v.po_seq +
                    '" ' +
                    (v.po_stock == 0 ? 'disabled' : '') +
                    '>' +
                    v.po_option1 +
                    ' ' +
                    v.po_option2 +
                    ' (+' +
                    comma(v.po_price) +
                    '원) ' +
                    (v.po_stock == 0 ? ' (품절)' : '') +
                    '</option>';
                $('.addoption' + v.p_seq).append(opstr);
                $('.side_addoption' + v.p_seq).append(opstr);
            });
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
}

function LoadProInfoData() {
    var obj = new Object();
    obj.p_seq = p_seq;
    $.ajax({
        url: SERVER_AP + '/admin/common/condition',
        type: 'post',
        cache: false,
        data: {
            table: 'product_info',
            common: obj,
        },
        success: function (data) {
            var v = data[0];
            $('#pi_num').text(v.pi_num);
            $('#pi_status').text(v.pi_status);
            $('#pi_dutyfree').text(v.pi_dutyfree);
            $('#pi_bill').text(v.pi_bill);
            $('#pi_gubun').text(v.pi_gubun);
            $('#pi_origin').text(v.pi_origin);
            $('#pi_name').text(v.pi_name);
            $('#pi_kccheck').text(v.pi_kccheck);
            $('#pi_color').text(v.pi_color);
            $('#pi_component').text(v.pi_component);
            $('#pi_make').text(v.pi_make);
            $('#pi_importer').text(v.pi_importer);
            $('#pi_country').text(v.pi_country);
            $('#pi_size').text(v.pi_size);
            $('#pi_delprice').text(v.pi_delprice);
            $('#pi_pomjil').text(v.pi_pomjil);
            $('#pi_as_tel').text(v.pi_as_tel);
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
}

function bannerLoad() {
    $.ajax({
        url: SERVER_AP + '/product/banner',
        type: 'post',
        cache: false,
        data: {},
        success: function (data) {
            var str = `<img src="${data.b_img}" alt="" style='width:100%;'>`;
            $('#banner').html(data.b_img);
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
}

function LoadRebuyData() {
    var obj = new Object();
    obj.i_seq = 3;
    $.ajax({
        url: SERVER_AP + '/admin/common/condition',
        type: 'post',
        cache: false,
        async: false,
        data: {
            table: 'info',
            common: obj,
        },
        success: function (data) {
            $('#rebuy').html(data[0].i_text);
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
}

$(function () {
    $(document).on('keydown', '.procnttt', function () {
        let stockCnt = $(this).attr('data-max');
        if ($(this).val() * 1 <= stockCnt * 1) {
            $(this).val($(this).val());
        } else {
            $(this).val('1');
            alert(`${stockCnt}개 주문 가능합니다.`);
        }
    });

    $(document).on('keyup', '.procnttt', function () {
        let stockCnt = $(this).attr('data-max');
        if ($(this).val() * 1 <= stockCnt * 1) {
            $(this).val($(this).val());
        } else {
            $(this).val('1');
            alert(`${stockCnt}개 주문 가능합니다.`);
        }
    });

    $(document).on('change', '.procnttt', function () {
        let stockCnt = $(this).attr('data-max');
        if ($(this).val() * 1 <= stockCnt * 1) {
            $(this).val($(this).val());
        } else {
            $(this).val('1');
            alert(`${stockCnt}개 주문 가능합니다.`);
        }
    });
});
