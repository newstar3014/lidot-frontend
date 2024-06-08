$(document).ready(function () {
    console.log('Shop Main Session Start');
    loadProduct(3, 3);
    LoadBestReview(4);
    LoadHashtag(3);
});

$('.cate_btn').click(function () {
    $('.cate_btn').removeClass('active');
    $(this).addClass('active');
});

function loadProduct(_grid1, _grid2) {
    $.ajax({
        type: 'POST',
        url: SERVER_AP + '/product/allCateProduct',
        cache: false,
        success: function (data) {
            console.log('loadProduct : ', data);
            //신상품
            $('.new_product').html('');
            let j_str = ``;

            $.each(data[0], function (i, v) {
                var h_img;
                if (v.p_hover == null) {
                    h_img = '/img/common/hover_bg.png';
                } else {
                    h_img = v.p_hover;
                }

                ////////////// 사업자회원시 도매가 가격 적용 ////////////////////
                if (v.p_wholesale && user_info.u_type == '사업자회원') {
                    v.p_price = v.p_wholesale;
                    j_str = `<span class="ml-2 text-primary">재고수량 : ${v.p_stock}개</span>`;
                }
                ////////////// 사업자회원시 도매가 가격 적용 END ////////////////////

                var pmark;
                // if(v.p_mark){
                //     pmark = JSON.parse(v.p_mark);
                // }else{
                //     pmark = '';
                // }
                if (v.pm_seq) {
                    pmark = marktemImg(v.pm_seq);
                }

                var sticker;
                if (v.p_sticker) {
                    sticker = v.p_sticker;
                } else {
                    sticker = '';
                }

                // v.p_name.length > 25 && (v.p_name = v.p_name.substr(0,25)+'...')

                var disprice = -(
                    ((v.p_price * 1 - v.p_consume_price * 1) / v.p_price) *
                    100
                );

                var mainimgArr = JSON.parse(v.p_image);

                var checkBookData = checkBook(v.p_seq);

                var checkCartData = checkCart(v.p_seq);

                var onclickVal;
                var onclickVal2;
                var colorYellow = 'color:#999';
                let cart_img = `cart_no_bg`;
                if (checkBookData) {
                    onclickVal = `deleteWist(${v.p_seq})`;
                    colorYellow = 'color:#d31c0c';
                } else {
                    onclickVal = `Wishlist(${v.p_seq})`;
                }

                if (checkCart) {
                    onclickVal2 = `deleteWist(${v.p_seq})`;
                } else {
                    onclickVal2 = `cartList(${v.p_seq})`;
                }

                var markNone;
                if (!pmark) {
                    markNone = 'd-none';
                }

                let proTextStr = ``;
                if ($(window).width() > 768) {
                    proTextStr = `
                                    <div class=" d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="font-weight-bold">
                                                ${comma(v.p_price)}원
                                            </span>
                                            <span class="ml-2" style="text-decoration: line-through; color:#ccc;">
                                                ${comma(v.p_consume_price)}원
                                            </span>
                                            ${j_str}
                                        </div>
                                        <span class="text-danger ml-2 p-1" style="font-size:13px; border:1px solid red;">${Math.floor(
                                            disprice,
                                        )}%</span>
                                        
                                    </div>`;
                } else {
                    proTextStr = `<div class=" d-flex justify-content- align-items-center">
                                        <span class="font-weight-bold">${comma(
                                            v.p_price,
                                        )}원</span>
                                        <span class="text-danger ml-2" style="font-size:13px;">${Math.floor(
                                            disprice,
                                        )}%</span>
                                    </div>`;
                }

                let colStr = 'col-md-4';
                if (_grid1 == 2) {
                    colStr = 'col-md-6';
                } else if (_grid1 == 4) {
                    colStr = 'col-md-3';
                }

                var str = `<div class="${colStr} col-6 pointer mb-md-5 mb-3 px-md-3 px-0">
                                <div class="productWrap fs-14 position-relative view_item">
                                    <div class="position-relative">
                                    
                                        <div  onclick="location.href='/product_detail.php?p_seq=${
                                            v.p_seq
                                        }'" class="productWrap-img position-relative" 
                                        style="background:url('${
                                            mainimgArr[0]
                                        }'); width:100%; padding-bottom:100%;">
                                            <img class="${markNone} pmark" src="${pmark}" alt="" style="width:50px; position:absolute; top:10px; left:0; z-index:9;"/>
                                        </div>
                                        <div class="hoverimage pointer" style="background:url('${
                                            mainimgArr[0]
                                        }'); 
                                        width:100%; padding-bottom:100%; position:absolute; top:0; left:0;" 
                                        onclick="location.href='/product_detail.php?p_seq=${
                                            v.p_seq
                                        }'">
                                        </div>
                                      
                                    </div>
                                    <div class="view_ab view_arrivals">
                                      <div class="px-2 icon_wrap">
                                        <div class="pointer mt-2 text-secondary headrt_and_cart_wrap">\
                                            <i onclick = ${onclickVal} class="fa-solid fa-heart" style="${colorYellow}; font-size:17px"></i>
                                        </div>
                                      </div>
                                      <div class="px-2 font-weight-bold productWrap-titleWrap ">${
                                          v.p_name
                                      }</div>\
                                      <div class="px-2 d-flex justify-content-between">
                                          <div class="mt-2 onetext">${
                                              v.p_onetext || ''
                                          }</div>\
                                      </div>
                                      <div class="px-2 py-2">\
                                          ${proTextStr}
                                      </div>\
                                    </div>
                                </div>\
                            </div>`;

                // <div class="product_add_to_cart">
                //     <a href="#"><i class="fas fa-shopping-cart"></i> 장바구니 담기</a>
                // </div>

                $('.new_product').append(str);

                if (!v.p_sticker) {
                    $('.product_wishlist' + v.p_seq).remove();
                }

                // if(v.p_mark){
                //     if(pmark.shape != 'ribbon'){
                //         $(".product_badge"+v.p_seq+" div").addClass('px-2')
                //         $(".product_badge"+v.p_seq+" div span").remove();
                //     }
                // }else{
                //     $(".product_badge"+v.p_seq).remove();
                // }

                // if(v.p_name.length >= 25){
                //     $('.twoline'+v.p_seq).addClass('twoline')
                // }
            });

            // 추천상품
            $('.recommend_product_wrap').html('');
            $.each(data[2], function (i, v) {
                var h_img;
                if (v.p_hover == null) {
                    h_img = '/img/common/hover_bg.png';
                } else {
                    h_img = v.p_hover;
                }

                var sticker;
                if (v.p_sticker) {
                    sticker = v.p_sticker;
                } else {
                    sticker = '';
                }

                ////////////// 사업자회원시 도매가 가격 적용 ////////////////////
                if (v.p_wholesale && user_info.u_type == '사업자회원') {
                    v.p_price = v.p_wholesale;
                }
                ////////////// 사업자회원시 도매가 가격 적용 END ////////////////////

                var pmark;
                // if(v.p_mark){
                //     pmark = JSON.parse(v.p_mark);
                // }else{
                //     pmark = '';
                // }
                if (v.pm_seq) {
                    pmark = marktemImg(v.pm_seq);
                }

                // v.p_name.length > 25 && (v.p_name = v.p_name.substr(0,25)+'...')

                var disprice = -(
                    ((v.p_price * 1 - v.p_consume_price * 1) / v.p_price) *
                    100
                );

                var mainimgArr = JSON.parse(v.p_image);

                var checkBookData = checkBook(v.p_seq);

                var onclickVal;
                var colorYellow;

                if (checkBookData) {
                    onclickVal = `deleteWist(${v.p_seq})`;
                    colorYellow = 'color:#d31c0c';
                } else {
                    onclickVal = `Wishlist(${v.p_seq})`;
                }

                var markNone;
                if (!pmark) {
                    markNone = 'd-none';
                }

                let proTextStr = ``;
                if ($(window).width() > 768) {
                    proTextStr = `
                                    <div class=" d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="font-weight-bold">
                                                ${comma(v.p_price)}원
                                            </span>
                                            <span class="ml-2" style="text-decoration: line-through; color:#ccc;">
                                                ${comma(v.p_consume_price)}원
                                            </span>
                                        </div>
                                        <span class="text-danger ml-2 p-1" style="font-size:13px; border:1px solid red;">${Math.floor(
                                            disprice,
                                        )}%</span>
                                    </div>`;
                } else {
                    proTextStr = `<div class=" d-flex justify-content- align-items-center">
                                        <span class="font-weight-bold">${comma(
                                            v.p_price,
                                        )}원</span>
                                        <span class="text-danger ml-2" style="font-size:13px;">${Math.floor(
                                            disprice,
                                        )}%</span>
                                    </div>`;
                }

                var str = `<div class="col-md-4 col-6 pointer mb-md-5 mb-3">
        <div class="productWrap fs-14 position-relative">
            <div class="position-relative">
            
                <div  onclick="location.href='/product_detail.php?p_seq=${
                    v.p_seq
                }'" class="productWrap-img position-relative" 
                style="background:url('${
                    mainimgArr[0]
                }'); width:100%; padding-bottom:100%;">
                    <img class="${markNone} pmark" src="${pmark}" alt="" style="width:50px; position:absolute; top:10px; left:0; z-index:9;"/>
                </div>
                <div class="hoverimage pointer" style="background:url('${
                    mainimgArr[0]
                }'); 
                width:100%; padding-bottom:100%; position:absolute; top:0; left:0;" 
                onclick="location.href='/product_detail.php?p_seq=${v.p_seq}'">
                </div>
            </div>
            <div>
                <div class="icon_wrap">
                  <div class="pointer mt-2 text-secondary headrt_and_cart_wrap">\
                    <i onclick = ${onclickVal} class="fa-solid fa-heart" style="${colorYellow}; font-size:17px"></i>
                </div>
                </div>
                <div class="font-weight-bold productWrap-titleWrap ">${
                    v.p_name
                }</div>\
              <div class="d-flex justify-content-between">
                  <div class="mt-2 onetext">${v.p_onetext || ''}</div>\
              </div>
              <div class="py-2">\
                  ${proTextStr}
              </div>\
            </div>
        </div>\
    </div>`;

                $('.recommend_product_wrap').append(str);

                if (!v.p_sticker) {
                    $('.product_wishlist' + v.p_seq).remove();
                }

                // if(v.p_mark){
                //     if(pmark.shape != 'ribbon'){
                //         $(".recom_product_badge"+v.p_seq+" div").addClass('px-2')
                //         $(".recom_product_badge"+v.p_seq+" div span").remove();
                //     }
                // }else{
                //     $(".recom_product_badge"+v.p_seq).remove();
                // }

                // if(v.p_name.length >= 25){
                //     $('.twoline'+v.p_seq).addClass('twoline')
                // }

                // 여기까지만 할게
            });

            console.log('contentInfo 1 : ', contentInfo);
            console.log('list_count 2 : ', list_count);

            // 인기상품
            $('.best_product_wrap').html('');
            $.each(data[1], function (i, v) {
                var h_img;
                if (v.p_hover == null) {
                    h_img = '/img/common/hover_bg.png';
                } else {
                    h_img = v.p_hover;
                }

                var sticker;
                if (v.p_sticker) {
                    sticker = v.p_sticker;
                } else {
                    sticker = '';
                }

                ////////////// 사업자회원시 도매가 가격 적용 ////////////////////
                if (v.p_wholesale && user_info.u_type == '사업자회원') {
                    v.p_price = v.p_wholesale;
                }
                ////////////// 사업자회원시 도매가 가격 적용 END ////////////////////

                var pmark;
                // if(v.p_mark){
                //     pmark = JSON.parse(v.p_mark);
                // }else{
                //     pmark = '';
                // }
                if (v.pm_seq) {
                    pmark = marktemImg(v.pm_seq);
                }

                // v.p_name.length > 25 && (v.p_name = v.p_name.substr(0,25)+'...')

                var disprice = -(
                    ((v.p_price * 1 - v.p_consume_price * 1) / v.p_price) *
                    100
                );

                var mainimgArr = JSON.parse(v.p_image);

                var checkBookData = checkBook(v.p_seq);

                var onclickVal;
                var colorYellow;
                var colorBlack;

                if (checkBookData) {
                    onclickVal = `deleteWist(${v.p_seq})`;
                    colorYellow = 'color:#d31c0c';
                    colorBlack = 'color:#000000';
                } else {
                    onclickVal = `Wishlist(${v.p_seq})`;
                }

                var markNone;
                if (!pmark) {
                    markNone = 'd-none';
                }

                let proTextStr = ``;
                if ($(window).width() > 768) {
                    proTextStr = `
                                      <div class=" d-flex justify-content-between align-items-center">
                                          <div>
                                              <span class="font-weight-bold bbTest${
                                                  v.p_seq
                                              }">
                                                  ${comma(v.p_price)}원
                                              </span>
                                              <span class="ml-2 bbTest${
                                                  v.p_seq
                                              }" style="text-decoration: line-through; color:#ccc;">
                                                  ${comma(v.p_consume_price)}원
                                              </span>
                                              ${j_str}
                                          </div>
                                          <span class="text-danger ml-2 p-1 bbTest${
                                              v.p_seq
                                          }" style="font-size:13px; border:1px solid red;">${Math.floor(
                        disprice,
                    )}%</span>
                                      </div>`;
                } else {
                    proTextStr = `<div class=" d-flex justify-content- align-items-center">
                                          <span class="font-weight-bold bbTest${
                                              v.p_seq
                                          }">${comma(v.p_price)}원</span>
                                          <span class="text-danger ml-2 bbTest${
                                              v.p_seq
                                          }" style="font-size:13px;">${Math.floor(
                        disprice,
                    )}%</span>
                                      </div>`;
                }
                let colStr = 'col-md-4';
                if (_grid2 == 2) {
                    colStr = 'col-md-6';
                } else if (_grid2 == 4) {
                    colStr = 'col-md-3';
                }

                var str = `<div class="${colStr} col-6 pointer mb-md-5 mb-3 px-md-3 px-0">
          <div class="productWrap fs-14 position-relative best_class_gradation" data-pseq=${
              v.p_seq
          }>
              <div class="position-relative view_item">

                  <div  onclick="location.href='/product_detail.php?p_seq=${
                      v.p_seq
                  }'" class="productWrap-img position-relative"
                  style="background:url('${
                      mainimgArr[0]
                  }'); width:100%; padding-bottom:100%;">
                      <img class="${markNone} pmark" src="${pmark}" alt="" style="width:50px; position:absolute; top:10px; left:0; z-index:9;"/>
                  </div>
                  <div class="hoverimage pointer" style="background:url('${
                      mainimgArr[0]
                  }');
                  width:100%; padding-bottom:100%; position:absolute; top:0; left:0;"
                  onclick="location.href='/product_detail.php?p_seq=${
                      v.p_seq
                  }'">
                  </div>
                <div class="view_ab view_product">
                  <div class="px-2 best_class_text icon_wrap">
                      <div class="pointer mt-2 text-secondary headrt_and_cart_wrap aaTest${
                          v.p_seq
                      }">\
                        <i onclick = ${onclickVal} class="fa-solid fa-heart" style="${colorYellow}; font-size:17px"></i>
                        </div>

                        <div class="pointer mt-2 text-secondary headrt_and_cart_wrap aaTest${
                            v.p_seq
                        }">\
                          <i class="fa-sharp fa-solid fa-cart-shopping" style="${colorBlack}; font-size:17px"></i>
                      </div>
                  </div>
                  <div class="px-2 font-weight-bold productWrap-titleWrap">
                    ${v.p_name}
                  </div>\
                  <div class="px-2 d-flex justify-content-between bbTest${
                      v.p_seq
                  }">
                    <div class="mt-2 onetext bbTest${v.p_seq}">${
                    v.p_onetext || ''
                }</div>\
                  </div>
                  <div class="px-2 py-2">\
                    ${proTextStr}
                  </div>\
                </div>
          </div>
          </div>\
      </div>`;

                // <div class="section4ImgText pb-0">
                //           <div class=" font-weight-bold productWrap-titleWrap"><p class="mb-0">${v.p_name}</p></div>\
                // </div>

                // <div class=" font-weight-bold productWrap-titleWrap">${v.p_name}</div>\
                // <div class="section4ImgText text-center p-3 pb-0"><p class="mb-0">${v.p_name}</p></div>
                //    testColor

                //          text-secondary

                // <i class="fa-regular fa-heart" style="${colorYellow}; font-size:17px" onclick = ${onclickVal}></i>

                //    style="position: relative; top: 58px; display: flex;"

                if (contentInfo == 'best' && Number(list_count) != 1) {
                    var num = 0;
                    num = i + 1;

                    if (Number(list_count) >= num) {
                        $('.best_product_wrap').append(str);
                    }
                } else {
                    $('.best_product_wrap').append(str);
                }

                /* 그라데이이션 */
                if (chkBlean == true) {
                    $('.best_class_gradation').addClass('selectedGradient');
                    $('.best_class_text').addClass('section4ImgText');
                } else {
                    $('.best_class_gradation').removeClass('selectedGradient');
                    $('.best_class_text').removeClass('section4ImgText');
                }

                //        text-white

                if (!v.p_sticker) {
                    $('.product_wishlist' + v.p_seq).remove();
                }

                // 마우스 올렸을 때
                $('.selectedGradient').mouseover(function () {
                    var aa = $(this).data('pseq');

                    $(`.aaTest${aa}`).addClass('text-white');
                    $(`.aaTest${aa}`).removeClass('text-secondary');

                    $(`.bbTest${aa}`).addClass('testColor');
                });

                // 마우스 안 올렸을 때
                $('.selectedGradient').mouseleave(function () {
                    var aa = $(this).data('pseq');
                    $(`.aaTest${aa}`).addClass('text-secondary');
                    $(`.aaTest${aa}`).removeClass('text-white');

                    $(`.bbTest${aa}`).removeClass('testColor');
                });

                // if(v.p_mark){
                //     if(pmark.shape != 'ribbon'){
                //         $(".best_product_badge"+v.p_seq+" div").addClass('px-2')
                //         $(".best_product_badge"+v.p_seq+" div span").remove();
                //     }
                // }else{
                //     $(".best_product_badge"+v.p_seq).remove();
                // }

                // if(v.p_name.length >= 25){
                //     $('.twoline'+v.p_seq).addClass('twoline')
                // }
            });

            //$(".best_product_wrap").slick();
        },
        beforeSend: function () {
            Loading();
        },
        complete: function () {
            $('#div_ajax_load_image').remove();
        },
        error: function (request, status, error) {
            console.log(
                'code:' +
                    request.status +
                    '\n' +
                    'message:' +
                    request.responseText +
                    '\n' +
                    'error:' +
                    error,
            );
        },
    });
}

function marktemImg(seq) {
    var marktemimg;
    var obj = new Object();
    obj.pm_seq = seq;
    $.ajax({
        url: SERVER_AP + '/admin/common/condition',
        type: 'post',
        cache: false,
        async: false,
        data: {
            table: 'product_mark',
            common: obj,
        },
        success: function (data) {
            marktemimg = data[0].pm_img;
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
    return marktemimg;
}

////////////////////////////////////관심상품
function Wishlist(p_seq) {
    if (!user_info) {
        alert('로그인을 먼저 해주세요.');
    } else {
        if (confirm('관심상품으로 등록하시겠습니까?')) {
            $.ajax({
                url: SERVER_AP + '/wishlist/dupli',
                type: 'post',
                cache: false,
                data: {
                    p_seq: p_seq,
                    u_seq: user_info.u_seq,
                },
                success: function (data) {
                    if (data.w_cnt == 0) {
                        var obj = new Object();
                        obj.p_seq = p_seq;
                        obj.u_seq = user_info.u_seq;
                        obj.w_date = currentDate();
                        $.ajax({
                            url: SERVER_AP + '/admin/common/insert',
                            type: 'post',
                            cache: false,
                            data: {
                                table: 'wishlist',
                                obj: obj,
                            },
                            success: function (data) {
                                // location.href="/wishlist.php"
                                loadProduct(3, 3);
                                LoadHashtag(3);
                                countHash = 0;
                                wishNum();
                            },
                            error: function (request, status, error) {
                                console.log(error);
                            },
                        });
                    } else {
                        alert('이미 관심상품으로 등록된 상품입니다.');
                    }
                },
                error: function (request, status, error) {
                    console.log(error);
                },
            });
        }
    }
}

function checkBook(pseq) {
    var obj = new Object();
    obj.p_seq = pseq;
    obj.u_seq = user_info.u_seq;
    var bookOk = '';
    $.ajax({
        url: SERVER_AP + '/common/condition',
        type: 'post',
        cache: false,
        async: false,
        data: {
            table: 'wishlist',
            common: obj,
        },
        success: function (data) {
            if (user_info) {
                if (data.length != 0) {
                    bookOk = 'Y';
                }
            } else {
                bookOk = '';
            }
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
    return bookOk;
}

function checkCart(pseq) {
    var obj = new Object();
    obj.p_seq = pseq;
    obj.u_seq = user_info.u_seq;
    var cartOk = '';
    $.ajax({
        url: SERVER_AP + '/common/condition',
        type: 'post',
        cache: false,
        async: false,
        data: {
            table: 'cart',
            common: obj,
        },
        success: function (data) {
            if (user_info) {
                if (data.length != 0) {
                    cartOk = 'Y';
                }
            } else {
                cartOk = '';
            }
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
    return cartOk;
}

function deleteWist(pseq) {
    var obj = new Object();
    obj.p_seq = pseq;
    obj.u_seq = user_info.u_seq;
    var bookOk = '';
    if (confirm('관심상품에서 삭제하시겠습니까?')) {
        $.ajax({
            url: SERVER_AP + '/product/deleteWish',
            type: 'post',
            cache: false,
            async: false,
            data: {
                table: 'wishlist',
                useq: user_info.u_seq,
                pseq: pseq,
            },
            success: function (data) {
                loadProduct(3, 3);
                LoadHashtag(3);
                countHash = 0;
                wishNum();
            },
            error: function (request, status, error) {
                console.log(error);
            },
        });
    }
}

function LoadHashtag(_grid) {
    $.ajax({
        url: SERVER_AP + '/main/hashtag-list-main',
        type: 'post',
        cache: false,
        data: { table: 'hashtag' },
        success: function (data) {
            $('#hashtag-wrap').html('');
            $('#productlist-Wrap').html('');
            if (data.length == 0) {
                var nstr = `<div class='py-5 text-center'>금주의 해쉬태그가 없습니다.</div>`;
                $('#hashtag-wrap').append(nstr);
            } else {
                $.each(data, function (i, v) {
                    var str = `<div class="position-relative px-3 py-1 mx-1 my-2 border hashtag pointer" onclick="brClickMain('${v.h_name}')">
                                <span class="">#${v.h_name}</span>
                            </div>`;
                    $('#hashtag-wrap').append(str);
                    console.log('_grid : ', _grid);
                    loadHash(v.h_name, _grid);
                });
            }
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
}

var countHash = 0;
function loadHash(name, _grid) {
    var order;

    order = 'p_seq';

    $.ajax({
        url: SERVER_AP + '/product/list-paging2',
        type: 'post',
        cache: false,
        async: false,
        data: {
            table: 'product',
            order: order,
            sk: name,
        },
        success: function (data) {
            $('#pronumber').text(data.rows.length);

            if (data.rows.length == 0) {
                // var nstr = '<div class="col py-5 text-center">상품이 없습니다.</div>';
                // $("#productlist-Wrap").append(nstr);
            } else {
                $.each(data.rows, function (i, v) {
                    countHash++;
                    var h_img;
                    if (v.p_hover == null) {
                        h_img = '/img/common/hover_bg.png';
                    } else {
                        h_img = v.p_hover;
                    }

                    var sticker;
                    if (v.p_sticker) {
                        sticker = v.p_sticker;
                    } else {
                        sticker = '';
                    }

                    ////////////// 사업자회원시 도매가 가격 적용 ////////////////////
                    if (v.p_wholesale && user_info.u_type == '사업자회원') {
                        v.p_price = v.p_wholesale;
                    }
                    ////////////// 사업자회원시 도매가 가격 적용 END ////////////////////

                    var pmark;
                    // if(v.p_mark){
                    //     pmark = JSON.parse(v.p_mark);
                    // }else{
                    //     pmark = '';
                    // }
                    if (v.pm_seq) {
                        pmark = marktemImg(v.pm_seq);
                    }

                    // v.p_name.length > 25 && (v.p_name = v.p_name.substr(0,25)+'...')

                    var disprice = -(
                        ((v.p_price * 1 - v.p_consume_price * 1) / v.p_price) *
                        100
                    );

                    var mainimgArr = JSON.parse(v.p_image);

                    var checkBookData = checkBook(v.p_seq);

                    var onclickVal;
                    var colorYellow;
                    if (user_info) {
                        if (checkBookData) {
                            onclickVal = `deleteWist(${v.p_seq})`;
                            colorYellow = 'color:#d31c0c';
                        } else {
                            onclickVal = `Wishlist(${v.p_seq})`;
                        }
                    }

                    var markNone;
                    if (!pmark) {
                        markNone = 'd-none';
                    }

                    let proTextStr = ``;
                    if ($(window).width() > 768) {
                        proTextStr = `
                                            <div class=" d-flex justify-content-between align-items-center">
                                                <div>
                                                    <span class="font-weight-bold">
                                                        ${comma(v.p_price)}원
                                                    </span>
                                                    <span class="ml-2" style="text-decoration: line-through; color:#ccc;">
                                                        ${comma(
                                                            v.p_consume_price,
                                                        )}원
                                                    </span>
                                                </div>
                                                <span class="text-danger ml-2 p-1" style="font-size:13px; border:1px solid red;">${Math.floor(
                                                    disprice,
                                                )}%</span>
                                            </div>`;
                    } else {
                        proTextStr = `<div class=" d-flex justify-content- align-items-center">
                                                <span class="font-weight-bold">${comma(
                                                    v.p_price,
                                                )}원</span>
                                                <span class="text-danger ml-2" style="font-size:13px;">${Math.floor(
                                                    disprice,
                                                )}%</span>
                                            </div>`;
                    }

                    let colStr = 'col-md-4';
                    if (_grid == 2) {
                        colStr = 'col-md-6';
                    } else if (_grid == 4) {
                        colStr = 'col-md-3';
                    }

                    var str = `<div class="${colStr} col-6 pointer mb-md-5 mb-3  px-md-3 px-0">
          <div class="productWrap fs-14 position-relative view_item">
              <div class="position-relative">
              
                  <div  onclick="location.href='/product_detail.php?p_seq=${
                      v.p_seq
                  }'" class="productWrap-img position-relative" 
                  style="background:url('${
                      mainimgArr[0]
                  }'); width:100%; padding-bottom:100%;">
                      <img class="${markNone} pmark" src="${pmark}" alt="" style="width:50px; position:absolute; top:10px; left:0; z-index:9;"/>
                  </div>
                  <div class="hoverimage pointer" style="background:url('${
                      mainimgArr[0]
                  }'); 
                  width:100%; padding-bottom:100%; position:absolute; top:0; left:0;" 
                  onclick="location.href='/product_detail.php?p_seq=${
                      v.p_seq
                  }'">
                  </div>
                 
              </div>
              <div class="view_ab view_hashtag">
                <div class="px-2 icon_wrap">
                  <div class="pointer mt-2 text-secondary headrt_and_cart_wrap">\
                      <i onclick = ${onclickVal} class="fa-solid fa-heart" style="${colorYellow}; font-size:17px"></i>
                  </div>
                </div>
                <div class="px-2 font-weight-bold productWrap-titleWrap ">${
                    v.p_name
                }</div>\
                <div class="px-2 d-flex justify-content-between">
                    <div class="mt-2 onetext">${v.p_onetext || ''}</div>\
                </div>
                <div class="px-2 py-2">\
                    ${proTextStr}
                </div>\
              </div>
          </div>\
      </div>`;

                    if (countHash < 9) {
                        $('#productlist-Wrap').append(str);
                    }

                    // $("#productlist-Wrap").append(str);
                    // <div class="pt-3 pb-2 text-secondary productWrap-btnWrap">\
                    //     <span onClick="Zzim('+v.p_seq+', this)">찜하기</span>\
                    // </div>\

                    // if(v.p_mark){
                    //     if(pmark.shape != 'ribbon'){
                    //         $(".product_badge"+v.p_seq+" div").addClass('px-2')
                    //         $(".product_badge"+v.p_seq+" div span").remove();
                    //     }
                    // }else{
                    //     $(".product_badge"+v.p_seq).remove();
                    // }
                    //
                    // LoadDel(v.dt_seq, v.p_seq)
                });

                $('.productWrap-img').css({
                    height: $('.productWrap-img').width(),
                });

                // drawPaging(data.totalPage);
            }
        },
        error: function (request, status, error) {
            console.log(error);
        },
    });
}
