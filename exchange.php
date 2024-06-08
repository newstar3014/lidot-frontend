<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>

    <style media="screen">
        table td{
            border: 1px solid #eaeaea;
        }
        table th{
            background-color: #f8f8f8;
        }
        #contact table th{
            /* width: 20%; */
            border: 1px solid #eaeaea;
        }

        .menu-box{
            border-radius: 5px;
            background-color: #f8f8f8;
            padding: 20px;
            text-align: center;
            font-size: 15px;
            cursor: pointer;
        }
        .pro-thumnail{
            width: 50px;
            height: 50px;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }
        .table-wrap{
            overflow-x: scroll;
        }
        .table-wrap::-webkit-scrollbar {
            display: none;
        }
        .my_page_intro{
            color: #fff;
            font-size: 20px;
            padding: 0px 20px;
            align-items: center;
            justify-content: center;
        }
        .fs-15{
            font-size: 15px;
        }
        .fs-25{
            font-size: 25px;
        }

        .dots {
          /* width: 200px; */

          /* 특정 단위로 텍스트를 자르기 위한 구문 */
          white-space: normal;
          display: -webkit-box;
          -webkit-line-clamp: 2; /* 텍스트를 자를 때 원하는 단위 ex) 3줄 */
          -webkit-box-orient: vertical;
          overflow: hidden;
        }

        .mypage_menu_head{
            background: #f9f9f9;
            font-size: 18px;
            font-weight: bold;
            padding: 20px 0px;
            border-bottom: 1px solid #dee2e6!important;
        }
        .mypage_menu_box{
            flex:1;
             text-align: center;
        }
        .mypage_menu_list div{
            padding: 15px 0px;
        }
        .pro_info_m_box{
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex: 1;
        }
        .pro_name_elipsis{
            width: 100%;
             overflow: hidden;
             text-overflow: ellipsis;
             display: -webkit-box;
             -webkit-line-clamp: 2;
             -webkit-box-orient: vertical;
        }
        .table_order, .table_order td, .table_order th{
            font-size: 12px;
        }

        .m-w-100{
            width: 100px;
        }

        .more-credit-table td{
            vertical-align: top !important;
        }

        #f_td{
            width: 15%;
        }

        @media (max-width:768px) {
            .m-w-30{
                width: 30%
            }
            .m-w-100{
                width: 70px;
            }
            #f_td{
                width: 30%;
            }
            input[type='date']{
                font-size: 12px;
            }
            .pc-none{
                display: none !important;
            }
        }

        .cart_quantity, .wish_quantity, .coupon_quantity {
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
    </style>

    <!-- Breadcumb Area -->
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>마이페이지</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="shop_main.php">Home</a></li>
                        <li class="breadcrumb-item active">마이페이지</li>
                        <li class="breadcrumb-item active">교환 환불 목록</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->

    <!-- Message Now Area -->
    <div class="message_now_area mb-5 " id="contact">
        <div class="container mb-50">

            <div class="my-5">
                <h6>나의 주문처리 현황</h6>
                <div class="row mt-3 w-100" style="margin:0 auto;">
                    <div class="col-md col-6 text-center py-4 border">
                        <i class="fa-solid fa-arrows-rotate" style="font-size:30px"></i>
                        <div class="my-2">
                            교환 / 환불 신청
                        </div>
                        <div class="" style="font-size:25px" id="ready_num">
                            0
                        </div>
                    </div>

                    <div class="col-md col-6 text-center py-4 border">
                        <i class="fa-solid fa-arrows-rotate" style="font-size:30px"></i>
                        <div class="my-2">
                            교환 / 환불 승인
                        </div>
                        <div class="" style="font-size:25px" id="ok_num">
                            0
                        </div>
                    </div>

                    <div class="col-md col-6 text-center py-4 border">
                        <i class="fa-solid fa-arrows-rotate" style="font-size:30px"></i>
                        <div class="my-2">
                            교환 / 환불 거절
                        </div>
                        <div class="" style="font-size:25px" id="no_num">
                            0
                        </div>
                    </div>

                    <div class="col-md col-6 text-center py-4 border">
                        <i class="fa-solid fa-truck" style="font-size:30px"></i>
                        <div class="my-2">
                            택배사 출발
                        </div>
                        <div class="" style="font-size:25px" id="start_num">
                            0
                        </div>
                    </div>
                    <div class="col-md col-6 text-center py-4 border">
                        <i class="fa-solid fa-circle-check" style="font-size:30px"></i>
                        <div class="my-2">
                            교환 / 환불 완료
                        </div>
                        <div class="" style="font-size:25px" id="complete_num">
                            0
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="row mb-5">
                <div class="col-4 col-md-2 mt-3">
                    <div class="menu-box border" onclick="location.href='wishlist.php'">
                        관심상품
                    </div>
                </div>
                <div class="col-4 col-md-2 mt-3">
                    <div class="menu-box border" onclick="location.href='cart.php'">
                        장바구니
                    </div>
                </div>
                <div class="col-4 col-md-2 mt-3">
                    <div class="menu-box border" onclick="location.href='coupon.php'">
                        쿠폰관리
                    </div>
                </div>
                <div class="col-4 col-md-2 mt-3">
                    <div class="menu-box border" onclick="location.href='review.php'">
                        후기관리
                    </div>
                </div>
            </div> -->

            <h5 class="mb-3">교환환불 목록</h5>
            <div class="mb-3 d-flex align-items-center">
                <span class="btn btn-sm btn-primary mr-2 daybtn" data-target="today">당일</span>
                <span class="btn btn-sm btn-primary mr-2 daybtn" data-target="week">1주일</span>
                <span class="btn btn-sm btn-primary mr-2 daybtn" data-target="month1">1개월</span>
                <span class="btn btn-sm btn-primary mr-2 daybtn" data-target="month3">3개월</span>
            </div>
            <div class="mb-3">
                <div class="d-flex align-items-center col-md-5 p-0">
                    <input type="date" name="" value="" class="form-control form-control-sm m-w-30" id="sday"> <span class="mx-2">~</span> <input type="date" name="" value="" class="form-control form-control-sm m-w-30" id="eday">
                    <span class="btn btn-sm btn-secondary ml-2 m-w-100" style="height: 31px; line-height: 31px;" onclick="LoadProduct()">검색</span>
                </div>
            </div>
            <div class="table-wrap pc-none">
                <table class="table border text-center table_order">
                    <tr>
                        <th>주문번호</th>
                        <th>총가격</th>
                        <th>교환 / 환불 신청날짜</th>
                        <th>상태</th>
                        <th>거절내용</th>
                        <th></th>
                    </tr>
                    <tbody id="order-list-tbody">

                    </tbody>
                </table>
            </div>

            <div class="order_m_go m-none">

            </div>

            <div id="paged-wrap" class="mt-3">
                <nav aria-label="Page navigation example">
                    <ul id="paged-content" class="pagination justify-content-center"></ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Message Now Area -->

    <style media="screen">
        @media (min-width: 576px){
            .modal-dialog {
                max-width: 1160px;
            }
        }
    </style>
    <div class="modal" tabindex="-1" role="dialog" id="ordermodal">
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >주문번호 : <span id="ordermodal-title"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <table class="table border text-center pc-none">
              <tr>
                  <th style="width:5%">#</th>
                  <th>썸네일</th>
                  <th>상품명</th>
                  <th>수량</th>
                  <th>가격</th>
                  <th>배송비</th>
              </tr>
              <tbody id="ordermodal-tbody">

              </tbody>
          </table>
          <div class="order_detail_list m-none">

          </div>

          </table>

          <div class="pc-none">
              <h5 class="mt-5 mb-3">주문/결제 금액 정보</h5>
              <table class="table more-credit-table">
                  <tr>
                      <td>
                          <p class="font-weight-bold">최초 주문금액</p>
                          <div class="d-flex align-items-center justify-content-between mb-1">
                              <span>상품금액</span>
                              <span><span class="credit-totalprice">0</span> 원</span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between  mb-1">
                              <span>배송비</span>
                              <span><span class="credit-delprice">0</span> 원</span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between  mb-1">
                              <span>쿠폰할인</span>
                              <span>- <span class="credit-coupon">0</span></span>
                          </div>
                          <div class="d-flex align-items-center justify-content-between  mb-1">
                              <span>포인트사용</span>
                              <span>- <span class="credit-point">0</span></span>
                          </div>
                      </td>
                      <td>
                           <p class="font-weight-bold">결제상세</p>
                          <div class="d-flex align-items-center justify-content-between  mb-1">
                              <div class="">
                                  <span class="credit-pay_method">결제방법</span>
                                  <span class="credit-vbank_name">결제방법</span>
                                  <span class="credit-vbank_num">결제방법</span>
                              </div>
                              <span><span class="credit-totalprice-all">0</span> 원</span>
                          </div>
                      </td>
                      <td style="background:#f8f8f8;">
                          <div class="d-flex align-items-center justify-content-between font-weight-bold">
                              <span>주문금액</span>
                              <span><span style="font-size:20px" class="credit-totalprice-all"></span> 원</span>
                          </div>
                      </td>
                  </tr>
              </table>
          </div>

          <div class="m-none">
              <h5 class="mt-5 mb-3">주문/결제 금액 정보</h5>
              <div class="px-1 py-3 my-2 border-top">
                  <p class="font-weight-bold">최초 주문금액</p>
                  <div class="d-flex align-items-center justify-content-between mb-1">
                      <span>상품금액</span>
                      <span><span class="credit-totalprice">0</span> 원</span>
                  </div>
                  <div class="d-flex align-items-center justify-content-between  mb-1">
                      <span>배송비</span>
                      <span><span class="credit-delprice">0</span> 원</span>
                  </div>
                  <div class="d-flex align-items-center justify-content-between  mb-1">
                      <span>쿠폰할인</span>
                      <span>- <span class="credit-coupon">0</span></span>
                  </div>
                  <div class="d-flex align-items-center justify-content-between  mb-1">
                      <span>포인트사용</span>
                      <span>- <span class="credit-point">0</span></span>
                  </div>
              </div>
              <div class="px-1 py-3 my-2 border-top">
                  <p class="font-weight-bold">결제상세</p>
                 <div class="d-flex align-items-center justify-content-between  mb-1">
                     <div class="">
                         <span class="credit-pay_method">결제방법</span>
                         <span class="credit-vbank_name">결제방법</span>
                         <span class="credit-vbank_num">결제방법</span>
                     </div>
                     <span><span class="credit-totalprice-all">0</span> 원</span>
                 </div>
              </div>
              <div class="px-2 py-3 my-2" style="background:#f8f8f8;">
                  <div class="d-flex align-items-center justify-content-between font-weight-bold">
                      <span>주문금액</span>
                      <span><span style="font-size:20px" class="credit-totalprice-all"></span> 원</span>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>




<script type="text/javascript" src="/admin/js/common.js"></script>
<script type="text/javascript">

    var ppp = 30;
    var page = 1;

    var out_num = 0
    var start_num = 0
    var ok_num = 0
    var no_num = 0
    var complete_num = 0

    $(function(){

        var windowWidth = $( window ).width();
        if(windowWidth < 760) {
            $('.pc-none').remove();
            // ppp = 3;
        } else {
            $('.m-none').remove();

        }

        var fontList = ['맑은 고딕','돋움체','굴림체','바탕체','궁서체','나눔고딕','나눔명조','나눔바른고딕','가는 나눔바른고딕'];
        $('#change_note').summernote({
            toolbar: [
                ['insert', ['picture']],
            ],
            height : 300, // set editor height
            minHeight : null, // set minimum height of editor
            maxHeight : null, // set maximum height of editor
            lang : 'ko-KR', // 기본 메뉴언어 US->KR로 변경
            fontNames: fontList, fontNamesIgnoreCheck: fontList,
        });

        LoadProduct()


    })



    function LoadProduct(){
        ready_num = 0;
        out_num = 0;
        start_num = 0;
        complete_num = 0;
        cancel_num = 0;
        ok_num = 0;
        no_num = 0;

        $.ajax({
            url: SERVER_AP+"/order/return-paging",
            type: "post",
            cache: false,
            async:false,
            data:{
                page:page,
                ppp:ppp,
                order:'e_date desc',
                sday:$("#sday").val(),
                eday:$("#eday").val(),
                u_seq:user_info.u_seq,
            },
            success: function(data){
                console.log('data', data);
                $("#order-list-tbody, .order_m_go").html('');
                if(data.totalCount == 0){
                    let str = '<tr class="pc-none">\
                                  <td colspan="14" class="py-4 text-center">주문내역이 없습니다.</td>\
                                </tr>';
                    let mstr = '<div class="py-4 text-center">주문내역이 없습니다.</div>';
                    $("#order-list-tbody, .order_m_go").append(str);
                    $(".order_m_go").append(mstr);

                    $("#paged-wrap").addClass('d-none')
                }else{
                    $.each(data.rows,function(i,v){
                        var number = (page*ppp)-ppp+(i+1) //1부터 시작
                        // var number = data.totalCount - ((page-1)*ppp+(i)) //끝번호부터시작

                        let btn = `<span class="btn btn-sm btn-secondary" onclick="orderCancel(${v.o_seq})">주문취소</span>`;
                        let mbtn = `<span class="btn btn-sm btn-secondary w-100" onclick="orderCancel(${v.o_seq})">주문취소</span>`;
                        let e_state = ''
                        if(v.e_state == '0'){
                            ready_num ++
                            e_state = '대기중'
                        }

                        if(v.e_state == '1'){
                            ok_num ++;
                            e_state = '승인'
                        }

                        if(v.e_state == '-1'){
                            no_num ++;
                            e_state = '거절'
                        }

                        if(v.e_state == '2'){
                            start_num ++
                            e_state = '택배사출발'
                        }
                        if(v.e_state == '3'){
                            complete_num ++
                            e_state = '반품/교환완료'
                        }

                        var str = `<tr>
                                      <td class=""id="order-num-${v.o_seq}">`+v.o_num+`</td>
                                      <td>`+comma(v.o_total_price + v.o_del_price)+` 원</td>
                                      <td>`+v.e_date+`</td>
                                      <td class="font-weight-bold text-danger">${e_state}</td>
                                      <td>
                                        ${v.e_no_text || "-"}
                                      </td>
                                      <td>${v.e_type}</td>
                                    </tr>`;
                        $("#order-list-tbody").append(str);


                        var mstr = `<div class="border p-3 my-2">
                                            <div class="d-flex pt-3">
                                                <div class="pro_info_m_box">
                                                    <div class="mb-3">
                                                        <span class="text-danger mr-2">${e_state}</span>
                                                    </div>
                                                    <div class="">
                                                        <span>주문번호 : </span><span class="" id="m-order-num-${v.o_seq}">`+v.o_num+`</span>
                                                    </div>
                                                    <div class="">
                                                        <span class="">총 금액 : </span>`+comma(v.o_total_price + v.o_del_price)+` 원
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 w-100">
                                                ${mbtn}
                                            </div>
                                        </div>`



                        $('.order_m_go').append(mstr);

                        $(`#order-num-${v.o_seq}`).attr('onclick',`modalOpen(${v.p_seq}, "${v.o_num}", "${v.o_state}", ${v.o_seq})`)
                        $(`#order-num-${v.o_seq}`).addClass('text-primary pointer')
                        $(`#m-order-num-${v.o_seq}`).attr('onclick',`modalOpen(${v.p_seq}, "${v.o_num}", "${v.o_state}", ${v.o_seq})`)
                        $(`#m-order-num-${v.o_seq}`).addClass('text-primary pointer')

                    })
                    $("#paged-wrap").removeClass('d-none')
                    drawPaging(data.totalPage);

                    $("#ready_num").text(ready_num)
                    $("#out_num").text(out_num)
                    $("#start_num").text(start_num)
                    $("#complete_num").text(complete_num)

                    $("#no_num").text(no_num)
                    $("#ok_num").text(ok_num)
                }
            }, beforeSend: function () {
                      Loading()
               }, complete: function () {
                        $("#div_ajax_load_image").remove();
               }, error: function (request, status, error){
                console.log(error);
            }
        });
    }

    function goPage(_page){
      if(_page == 'prev'){
        page = (page*1) - 1;
      }else if(_page == 'next'){
        page = (page*1) + 1;
      }else{
        page = _page;
      }
        LoadProduct()
    }


    function modalOpen(p_seq, o_num, o_state, o_seq){
        $("#ordermodal-title").text(o_num)
        $("#ordermodal-tbody").html('')
        $(".order_detail_list").html('')
        let alltotalprice = 0;
        $.each(p_seq, function(i,v){
            if(v.po_seq){ // 옵션상품일경우
                let proinfo = proInfo(v.p_seq)
                let opinfo = opInfo(v.po_seq)
                var number = (page*ppp)-ppp+(i+1) //1부터 시작
                // var number = data.totalCount - ((page-1)*ppp+(i)) //끝번호부터시작
                var mainimg = JSON.parse(proinfo.img);

                let exchangeState = exchangeList(o_seq, v.p_seq)

                ///////////////////////////배송비///////////////////////
                let thisdelPrice_each=0;
                let dell_each = LoadDel(proinfo.dt_seq)
                let datatype_each = $(dell_each).attr("data-type")
                let condition_each = $(dell_each).attr("data-condition")*1
                let price_each = $(dell_each).attr("data-del")*1
                let data_clac = $(dell_each).attr("data-dt_calc")

                let proprice_each = proinfo.price*1 + opinfo.price*1 * v.cnt*1
                alltotalprice += proinfo.price*1 + opinfo.price*1 * v.cnt*1
                let quantynum_each = v.cnt*1

                if(condition_each){
                    if(datatype_each == '원 이하'){
                        if(condition_each >= proprice_each){
                            thisdelPrice_each = price_each
                        }else{
                            thisdelPrice_each = 0
                        }
                    }else if(datatype_each == '개당'){
                        thisdelPrice_each = (parseInt((quantynum_each-1)/condition_each)+1) * price_each
                    }
                }else{
                    if(isNaN(price_each)){
                        thisdelPrice_each = 0
                    }else{
                        thisdelPrice_each = price_each
                    }
                }
                ///////////////////////////배송비///////////////////////

                var str = '<tr>\
                              <td>'+number+'</td>\
                              <td>\
                                <div class="pro-thumnail pointer mx-auto" style="background:url(\''+mainimg[0]+'\')" onclick="location.href=`product_detail.php?p_seq='+v.p_seq+'`"></div>\
                              </td>\
                              <td><div class="dots">'+proinfo.name+' '+opinfo.name+'</div></td>\
                              <td>'+v.cnt+'</td>\
                              <td>'+comma(proinfo.price*1 + opinfo.price*1 * v.cnt)+' 원</td>\
                              <td>'+comma(thisdelPrice_each)+' 원</td>\
                            </tr>';

                var mstr = `<div class="border p-3">
                                    <div class="d-flex pt-3">
                                        <div class="mr-2">
                                            <img src="${mainimg[0]}" style="width:64px;height:64px;" />
                                        </div>
                                        <div class="pro_info_m_box">
                                            <div class="">
                                                <span class="pro_name_elipsis" >`+proinfo.name+` `+opinfo.name+`  </span>,`+v.cnt+` 개
                                            </div>
                                            <div class="">
                                                <span class="">총 금액 : </span>`+comma(proinfo.price*1 + opinfo.price*1 * v.cnt)+` 원
                                            </div>
                                        </div>
                                    </div>
                                </div>`
                $("#ordermodal-tbody").append(str);
                $('.order_detail_list').append(mstr);


            }else{ // 단일상품일경우
                let proinfo = proInfo(v.p_seq)
                //var number = (page*ppp)-ppp+(i+1) //1부터 시작
                // var number = data.totalCount - ((page-1)*ppp+(i)) //끝번호부터시작
                var mainimg = JSON.parse(proinfo.img);

                let exchangeState = exchangeList(o_seq, v.p_seq)

                ///////////////////////////배송비///////////////////////
                let thisdelPrice_each=0;
                let dell_each = LoadDel(proinfo.dt_seq)
                let datatype_each = $(dell_each).attr("data-type")
                let condition_each = $(dell_each).attr("data-condition")*1
                let price_each = $(dell_each).attr("data-del")*1
                let data_clac = $(dell_each).attr("data-dt_calc")

                let proprice_each = proinfo.price*1  * v.cnt*1
                alltotalprice += proinfo.price*1  * v.cnt*1
                let quantynum_each = v.cnt*1

                if(condition_each){
                    if(datatype_each == '원 이하'){
                        if(condition_each >= proprice_each){
                            thisdelPrice_each = price_each
                        }else{
                            thisdelPrice_each = 0
                        }
                    }else if(datatype_each == '개당'){
                        thisdelPrice_each = (parseInt((quantynum_each-1)/condition_each)+1) * price_each
                    }
                }else{
                    thisdelPrice_each = price_each
                }
                ///////////////////////////배송비///////////////////////

                var str = '<tr>\
                              <td>'+1+'</td>\
                              <td>\
                                <div class="pro-thumnail pointer mx-auto" style="background:url(\''+mainimg[0]+'\')" onclick="location.href=`product_detail.php?p_seq='+v.p_seq+'`"></div>\
                              </td>\
                              <td><div class="dots">'+proinfo.name+'</div></td>\
                              <td>'+v.cnt+'</td>\
                              <td>'+comma(proinfo.price*1 * v.cnt)+' 원</td>\
                              <td>'+comma(thisdelPrice_each)+' 원</td>\
                            </tr>';


                var mstr = `<div class="border p-3">
                                    <div class="d-flex pt-3">
                                        <div class="mr-2">
                                            <img src="${mainimg[0]}" style="width:64px;height:64px;" />
                                        </div>
                                        <div class="pro_info_m_box">
                                            <div class="">
                                                <span class="">`+proinfo.name+`  </span>`+v.cnt+` 개
                                            </div>
                                            <div class="">
                                                <span class="">총 금액 : </span>`+comma(proinfo.price*1 * v.cnt)+` 원
                                            </div>
                                        </div>
                                    </div>
                                </div>`

                $("#ordermodal-tbody").append(str);

                $('.order_detail_list').append(mstr);


            }
        })

        $(".credit-totalprice").text(comma(alltotalprice))

        let obj = {
            o_seq : o_seq,
        }
        $.ajax({
            url: SERVER_AP+"/common/condition",
            type: "post",
            cache: false,
            async:false,
            data:{
                table: 'order_list',
                common:obj,
            },
            success: function(data){
                $(".credit-totalprice-all").text(comma(data[0].o_total_price))
                $(".credit-delprice").text(comma(data[0].o_del_price))
                $(".credit-pay_method").text(data[0].pay_method || '-')
                $(".credit-vbank_name").text(data[0].vbank_name || '')
                $(".credit-vbank_num").text(data[0].vbank_num ? '('+data[0].vbank_num+')': '')
                $(".credit-point").text(comma(data[0].o_point))
                $(".credit-coupon").text(comma(data[0].o_coupon))

                let delinfo = loadHomedataArr()
                $("#r_name").text(data[0].o_nonuser_name || delinfo.dl_person)
                $("#r_phone").text(data[0].o_phone ? hyphen(data[0].o_phone) : hyphen(delinfo.dl_phone))
                $("#r_address").text(data[0].o_nonuser_address ? (data[0].o_nonuser_address +' '+ data[0].o_nonuser_address2) : (delinfo.dl_address +' '+ delinfo.dl_address_detail))
                $("#r_text").text(data[0].o_request || delinfo.dl_request)
            },
            error: function (request, status, error){
                console.log(error);
            }
        });

        $("#ordermodal").modal('show')
    }

    //////////////////////////////////////////////////////////


    function proInfo(p_seq){
        var info = [];
        var obj = new Object();
        obj.p_seq = p_seq;
        $.ajax({
            url: SERVER_AP+"/common/condition",
            type: "post",
            cache: false,
            async:false,
            data:{
                table: 'product',
                common:obj,
            },
            success: function(data){
                info = {stock:data[0].p_stock,
                        name:data[0].p_name,
                        img:data[0].p_image,
                        price:(data[0].p_wholesale && user_info.u_type == '사업자회원' && user_info.u_status == 1) ? data[0].p_wholesale : data[0].p_price,
                        dt_seq:(data[0].dt_seq_up && user_info.u_type == '사업자회원' && user_info.u_status == 1) ? data[0].dt_seq_up : data[0].dt_seq,
                        p_purchase:data[0].p_purchase,
                        p_option:data[0].p_option
                    }
            },
            error: function (request, status, error){
                console.log(error);
            }
        });
        return info;
    }

    function opInfo(po_seq){
        var info = [];
        var obj = new Object();
        obj.po_seq = po_seq;
        $.ajax({
            url: SERVER_AP+"/common/condition",
            type: "post",
            cache: false,
            async:false,
            data:{
                table: 'product_option',
                common:obj,
            },
            success: function(data){
                info = {p_seq : data[0].p_seq, stock : data[0].po_stock, name : data[0].po_option1 +' '+ data[0].po_option2, price:data[0].po_price}
            },
            error: function (request, status, error){
                console.log(error);
            }
        });
        return info;
    }
    //////////////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////

    function LargeSort(){
        $.ajax({
            url: SERVER_AP+"/admin/common/all-ls",
            type: "post",
            cache: false,
            data:{
                table: 'large_sort',
            },
            success: function(data){
                var str = `<div class="p-3 py-3 pl-4 menu-category-menu-menu"><a href="/store.php">ALL</a></div>`;
                var mstr2 = `<li class="py-3"><span onclick="location.href="/store.php"">ALL</span></li>`
                $("#sort_menu-wrap_m").append(mstr2);



                $("#menu-category").append(str)
                $.each(data,function(i,v){
                    var str = `<div class="p-3 py-3 pl-4 menu-category-menu position-relative">
                                    <a href="/store.php?ls_seq=${v.ls_seq}">${v.ls_name}</a>
                                    <div class="menu-category-menu-menu-menu menu-category-menu-menu-menu${v.ls_seq}">
                                    </div>
                                </div>`;
                    $("#menu-category").append(str)
                    MiddleSort(v.ls_seq)
                })


                var mstr22 = `<li class="py-3"><span onclick="location.href='/login.php'">LOGIN</span></li>
                        <li class="py-3"><span onclick="location.href='/registerType.php'">JOIN</span></li>
                        <li class="py-3"><span onclick="location.href='/exhibition.php'">EVENT</span></li>
                        <li class="py-3"><span onclick="location.href='/contact.php'">입점문의</span></li>
                        <li class="py-3"><span onclick="location.href='/bestreview.php?active=베스트리뷰'">베스트리뷰</span></li>`
                $("#sort_menu-wrap_m").append(mstr22)

                var menustr = `<div class="d-inline-block py-2 px-4 af-show d-none" style="font-size:15px;"><a style="color:black;" href="exhibition.php" class=" hover_text">EVENT</a></div>
                <div class="d-inline-block py-2 px-4 af-show d-none" style="font-size:15px;"><a style="color:black;" href="contact.php" class=" hover_text">입점문의</a></div>
                <div class="d-inline-block py-2 px-4 af-show menu_btns d-none" style="font-size:15px;"><a style="color:black;" href="bestreview.php?active=베스트리뷰" class=" hover_text">베스트리뷰</a></div>`;

                $('#menu-PC').append(menustr);
            },
            error: function (request, status, error){
                console.log(error);
            }
        });
    }



    function MiddleSort(ls_seq){
        var obj = new Object();
        obj.ls_seq = ls_seq;
        $.ajax({
            url: SERVER_AP+"/admin/common/condition",
            type: "post",
            cache: false,
            data:{
                table: 'middle_sort',
                common:obj,
            },
            success: function(data){
                $.each(data,function(i,v){
                    var str = `<div class="p-3 py-3 pl-4" ><a href="/store.php?ls_seq=${ls_seq}&ms_seq=${v.ms_seq}">${v.ms_name}</a></div>`;
                    $(".menu-category-menu-menu-menu"+v.ls_seq).append(str);
                })
            },
            error: function (request, status, error){
                console.log(error);
            }
        });
    }

    function LargeSortM(){
	  $.ajax({
		  url: SERVER_AP+"/admin/common/all-ls",
		  type: "post",
		  cache: false,
		  data:{
			  table: 'large_sort',
		  },
		  success: function(data){
			  console.log('data', data.length);
			  $.each(data,function(i,v){
				  if(i == 0){
					  var str11 = `<li><a class="bg-white" href="/store.php">ALL</a></li>`
					  $("#menu-M-menu").prepend(str11);
				  }
				  var str = `<div class="draw_cate_title">
					<span class="down_cate clickcate${v.ls_seq} w-100" data-val="${v.ls_seq}">${v.ls_name}</span>
					<div class="add_arrow${v.ls_seq}"></div>
				  </div>
				  <div class="draw_ms_data${v.ls_seq} textDeco d-none"></div>`;
				  $("#menu-M-menu").append(str);

				  if(data.length == i+1){
					  var str22 = `<li><a class="bg-white" href="exhibition.php">EVENT</a></li>
					  <li><a class="bg-white" href="contact.php">입점문의</a></li>
					  <li><a class="bg-white" href="bestreview.php">베스트리뷰</a></li>`

					  $("#menu-M-menu").append(str22);

				  }
				  MiddleSortM(v.ls_seq)
			  })
		  },
		  error: function (request, status, error){
			  console.log(error);
		  }
	  });
  }


  function MiddleSortM(ls_seq){
      var obj = new Object();
      obj.ls_seq = ls_seq;
      $.ajax({
          url: SERVER_AP+"/admin/common/condition",
          type: "post",
          cache: false,
          data:{
              table: 'middle_sort',
              common:obj,
          },
          success: function(data){

              if(data.length == 0){
                  $('.clickcate'+ls_seq).attr('onclick', 'location.href="/store.php?ls_seq='+ls_seq+'"')
              }else{
                  $.each(data,function(i,v){
                      var str = '<div><a href="/store.php?ls_seq='+ls_seq+'&ms_seq='+v.ms_seq+'">'+v.ms_name+'</a></div>';
                      $(".draw_ms_data"+v.ls_seq).append(str);
                      var dd = `<i class="fa-sharp fa-solid fa-angle-down change_arrow${v.ls_seq}"></i>`
                      if(i==1){
                          $('.add_arrow'+v.ls_seq).append(dd);
                      }

                  })
              }

          },
          error: function (request, status, error){
              console.log(error);
          }
      });
  }

  function sortList(){
      $.ajax({
          url: SERVER_AP+"/admin/common/sort",
          type: "post",
          cache: false,
          async:false,
          data:{
              table: 'sort',
          },
          success: function(data){
              $.each(data,function(i,v){
                  if (i==0) {
                      var str = `<div class="py-2 pl-2 pr-4 d-inline-block menu_btns"><a style="font-size:15px; color:black" class="pointer hover_text" onclick="sortBtn(${v.st_seq}, '${v.st_name}')">${v.st_name}</a></div>`;

                  }else{
                      var str = `<div class="py-2 px-4 d-inline-block menu_btns"><a style="font-size:15px; color:black" class="pointer hover_text" onclick="sortBtn(${v.st_seq}, '${v.st_name}')">${v.st_name}</a></div>`;
                  }

                  $("#sort_menu-wrap").append(str)

                  var mstr = `<li><a onclick="sortBtn(${v.st_seq}, '${v.st_name}')">${v.st_name}</a></li>`
                  $("#sort_menu-wrap-M").append(mstr)
                  var mstr2 = `<li class="py-3"><span onclick="sortBtn(${v.st_seq}, '${v.st_name}')">${v.st_name}</span></li>`
                  $("#sort_menu-wrap_m").append(mstr2)
              })

              LargeSortM();
              LargeSort();
          },
          error: function (request, status, error){
              console.log(error);
          }
      });
  }



function checkLogin(){
    var user_info2 = {
        u_id:user_info.u_id,
        u_pw:$('#loginPs').val(),
    };

    $.ajax({
      type: "POST",
      url: SERVER_AP + '/user/login',
      cache: false,
      dataType : 'json',
      data:{
          obj : user_info2
      },
      success: function (data) {
          if(data.result == 'not_found'){
              // alert('존재하지 않는 아이디 입니다.');

          }else if(data.result == 'wrong_pwd'){
              alert('비밀번호를 확인해 주세요.')
          }else{
              if(goCheckType == 1){
                  location.href='myPageEdit.php?seq='+user_info.u_seq+''
              }else{
                  deleteUser();
              }

          }
      }, error:function(request,status,error){
          console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
      },
    });
}

var goCheckType = ""

function openCheck(check){
    goCheckType = check;
    $('#openCheck').modal('show');

}


function trackShow(){
    alert('준비중')
    //
    // $.ajax({
    //     url: 'http://info.sweettracker.co.kr/api/v1/companylist'
    //     type: "post",
    //     cache: false,
    //     async:false,
    //     data:{
    //         table: 'delivery_location',
    //         common:obj,
    //     },
    //     success: function(data){
    //         result = data[0]
    //     },
    //     error: function (request, status, error){
    //         console.log(error);
    //     }
    // });
}



$(".daybtn").click(function(){
    $(".daybtn").addClass("btn-primary")
    $(".daybtn").removeClass("btn-secondary")
    $(this).removeClass("btn-primary")
    $(this).addClass("btn-secondary")

    let target = $(this).attr('data-target')
    let today = currentDate().substr(0,10)

    let year = today.split('-')[0]
    let month = today.split('-')[1]
    let day = today.split('-')[2]

    console.log("year", year);
    console.log("month", month);
    console.log("day", day);

    if(target == 'today'){
        $("#sday").val(today)
        $("#eday").val(today)
    }else if(target == 'week'){
        $("#sday").val(lastWeek(today))
        $("#eday").val(today)
    }else if(target == 'month1'){
        $("#sday").val(lastMonth(today))
        $("#eday").val(today)
    }else if(target == 'month3'){
        $("#sday").val(lastMonth3(today))
        $("#eday").val(today)
    }

    LoadProduct()
})

function getDateStr(myDate){
    var year = myDate.getFullYear();
    var month = myDate.getMonth() + 1;
    month = month < 10 ? '0' + month.toString() : month.toString();
    var day = myDate.getDate();
    day = day < 10 ? '0' + day.toString() : day.toString();

	return (year + '-' + month + '-' + day)
}

function lastWeek() {
  var d = new Date()
  var dayOfMonth = d.getDate()
  d.setDate(dayOfMonth - 7)
  return getDateStr(d)
}

function lastMonth() {
  var d = new Date()
  var monthOfYear = d.getMonth()
  d.setMonth(monthOfYear - 1)
  return getDateStr(d)
}

function lastMonth3() {
  var d = new Date()
  var monthOfYear = d.getMonth()
  d.setMonth(monthOfYear - 3)
  return getDateStr(d)
}


function modalOpen(p_seq, o_num, o_state, o_seq){
    $("#ordermodal-title").text(o_num)
    $("#ordermodal-tbody").html('')
    $(".order_detail_list").html('')
    let alltotalprice = 0;
    $.each(p_seq, function(i,v){
        if(v.po_seq){ // 옵션상품일경우
            let proinfo = proInfo(v.p_seq)
            let opinfo = opInfo(v.po_seq)
            var number = (page*ppp)-ppp+(i+1) //1부터 시작
            // var number = data.totalCount - ((page-1)*ppp+(i)) //끝번호부터시작
            var mainimg = JSON.parse(proinfo.img);

            let exchangeState = exchangeList(o_seq, v.p_seq)

            ///////////////////////////배송비///////////////////////
            let thisdelPrice_each=0;
            let dell_each = LoadDel(proinfo.dt_seq)
            let datatype_each = $(dell_each).attr("data-type")
            let condition_each = $(dell_each).attr("data-condition")*1
            let price_each = $(dell_each).attr("data-del")*1
            let data_clac = $(dell_each).attr("data-dt_calc")

            let proprice_each = proinfo.price*1 + opinfo.price*1 * v.cnt*1
            alltotalprice += proinfo.price*1 + opinfo.price*1 * v.cnt*1
            let quantynum_each = v.cnt*1

            if(condition_each){
                if(datatype_each == '원 이하'){
                    if(condition_each >= proprice_each){
                        thisdelPrice_each = price_each
                    }else{
                        thisdelPrice_each = 0
                    }
                }else if(datatype_each == '개당'){
                    thisdelPrice_each = (parseInt((quantynum_each-1)/condition_each)+1) * price_each
                }
            }else{
                if(isNaN(price_each)){
                    thisdelPrice_each = 0
                }else{
                    thisdelPrice_each = price_each
                }
            }
            ///////////////////////////배송비///////////////////////

            var str = '<tr>\
                          <td>'+number+'</td>\
                          <td>\
                            <div class="pro-thumnail pointer mx-auto" style="background:url(\''+mainimg[0]+'\')" onclick="location.href=`product_detail.php?p_seq='+v.p_seq+'`"></div>\
                          </td>\
                          <td><div class="dots">'+proinfo.name+' '+opinfo.name+'</div></td>\
                          <td>'+v.cnt+'</td>\
                          <td>'+comma(proinfo.price*1 + opinfo.price*1 * v.cnt)+' 원</td>\
                          <td>'+comma(thisdelPrice_each)+' 원</td>\
                        </tr>';

            var mstr = `<div class="border p-3">
                                <div class="d-flex pt-3">
                                    <div class="mr-2">
                                        <img src="${mainimg[0]}" style="width:64px;height:64px;" />
                                    </div>
                                    <div class="pro_info_m_box">
                                        <div class="">
                                            <span class="pro_name_elipsis" >`+proinfo.name+` `+opinfo.name+`  </span>,`+v.cnt+` 개
                                        </div>
                                        <div class="">
                                            <span class="">총 금액 : </span>`+comma(proinfo.price*1 + opinfo.price*1 * v.cnt)+` 원
                                        </div>
                                    </div>
                                </div>
                            </div>`
            $("#ordermodal-tbody").append(str);
            $('.order_detail_list').append(mstr);



        }else{ // 단일상품일경우
            let proinfo = proInfo(v.p_seq)
            //var number = (page*ppp)-ppp+(i+1) //1부터 시작
            // var number = data.totalCount - ((page-1)*ppp+(i)) //끝번호부터시작
            var mainimg = JSON.parse(proinfo.img);

            let exchangeState = exchangeList(o_seq, v.p_seq)

            ///////////////////////////배송비///////////////////////
            let thisdelPrice_each=0;
            let dell_each = LoadDel(proinfo.dt_seq)
            let datatype_each = $(dell_each).attr("data-type")
            let condition_each = $(dell_each).attr("data-condition")*1
            let price_each = $(dell_each).attr("data-del")*1
            let data_clac = $(dell_each).attr("data-dt_calc")

            let proprice_each = proinfo.price*1  * v.cnt*1
            alltotalprice += proinfo.price*1  * v.cnt*1
            let quantynum_each = v.cnt*1

            if(condition_each){
                if(datatype_each == '원 이하'){
                    if(condition_each >= proprice_each){
                        thisdelPrice_each = price_each
                    }else{
                        thisdelPrice_each = 0
                    }
                }else if(datatype_each == '개당'){
                    thisdelPrice_each = (parseInt((quantynum_each-1)/condition_each)+1) * price_each
                }
            }else{
                thisdelPrice_each = price_each
            }
            ///////////////////////////배송비///////////////////////

            var str = '<tr>\
                          <td>'+1+'</td>\
                          <td>\
                            <div class="pro-thumnail pointer mx-auto" style="background:url(\''+mainimg[0]+'\')" onclick="location.href=`product_detail.php?p_seq='+v.p_seq+'`"></div>\
                          </td>\
                          <td><div class="dots">'+proinfo.name+'</div></td>\
                          <td>'+v.cnt+'</td>\
                          <td>'+comma(proinfo.price*1 * v.cnt)+' 원</td>\
                          <td>'+comma(thisdelPrice_each)+' 원</td>\
                        </tr>';


            var mstr = `<div class="border p-3">
                                <div class="d-flex pt-3">
                                    <div class="mr-2">
                                        <img src="${mainimg[0]}" style="width:64px;height:64px;" />
                                    </div>
                                    <div class="pro_info_m_box">
                                        <div class="">
                                            <span class="">`+proinfo.name+`  </span>`+v.cnt+` 개
                                        </div>
                                        <div class="">
                                            <span class="">총 금액 : </span>`+comma(proinfo.price*1 * v.cnt)+` 원
                                        </div>
                                    </div>
                                </div>
                            </div>`

            $("#ordermodal-tbody").append(str);

            $('.order_detail_list').append(mstr);

        }
    })

    $(".credit-totalprice").text(comma(alltotalprice))

    let obj = {
        o_seq : o_seq,
    }
    $.ajax({
        url: SERVER_AP+"/common/condition",
        type: "post",
        cache: false,
        async:false,
        data:{
            table: 'order_list',
            common:obj,
        },
        success: function(data){
            $(".credit-totalprice-all").text(comma(data[0].o_total_price))
            $(".credit-delprice").text(comma(data[0].o_del_price))
            $(".credit-pay_method").text(data[0].pay_method || '-')
            $(".credit-vbank_name").text(data[0].vbank_name || '')
            $(".credit-vbank_num").text(data[0].vbank_num ? '('+data[0].vbank_num+')': '')
            $(".credit-point").text(comma(data[0].o_point))
            $(".credit-coupon").text(comma(data[0].o_coupon))

            let delinfo = loadHomedataArr()
            $("#r_name").text(data[0].o_nonuser_name || delinfo.dl_person)
            $("#r_phone").text(data[0].o_phone ? hyphen(data[0].o_phone) : hyphen(delinfo.dl_phone))
            $("#r_address").text(data[0].o_nonuser_address ? (data[0].o_nonuser_address +' '+ data[0].o_nonuser_address2) : (delinfo.dl_address +' '+ delinfo.dl_address_detail))
            $("#r_text").text(data[0].o_request || delinfo.dl_request)
        },
        error: function (request, status, error){
            console.log(error);
        }
    });

    $("#ordermodal").modal('show')
}

function exchangeList(o_seq, p_seq){
    var result = [];
    var obj = new Object();
    obj.o_seq = o_seq;
    obj.p_seq = p_seq;
    $.ajax({
        url: SERVER_AP+"/common/condition",
        type: "post",
        cache: false,
        async:false,
        data:{
            table: 'exchange',
            common:obj,
        },
        success: function(data){
            result = data
        },
        error: function (request, status, error){
            console.log(error);
        }
    });
    return result;
}
</script>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
