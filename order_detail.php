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
           .m-w-1002{
               width: 100%;
           }
           .order_list_btn{
               font-size: 10px;
           }
           .table-wrap{
               padding: 0px;
           }
           .order_text_num{
               font-size: 14px;
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
       .fs-18{font-size: 18px;}
       .order_box_inner:last-child { margin-bottom: 0px; }
   </style>
   <link href="/css/orderlist.css" rel="stylesheet">
   <!-- Breadcumb Area -->
   <div class="breadcumb_area">
       <div class="container h-100">
           <div class="row h-100 align-items-center">
               <div class="col-12">
                   <h5>마이페이지</h5>
                   <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="shop_main.php">Home</a></li>
                       <li class="breadcrumb-item active">마이페이지</li>
                       <li class="breadcrumb-item active">주문목록</li>
                   </ol>
               </div>
           </div>
       </div>
   </div>
   <!-- Breadcumb Area -->

   <!-- Message Now Area -->
   <div class="message_now_area mb-5 " id="contact">
       <div class="container mb-50">




           <h5 class="mb-3">주문목록</h5>
       </div>

           <div class="p-3 border container">
               <div class="mb-3  fs-18">
                   <span class="date_order mr-2 font-weight-bold"></span> <span class="font-weight-bold">주문</span>
                   <div class="order_text_num">
                       <span class="">주문 번호 : </span><span class="num_order"></span>
                   </div>
               </div>

               <div class="table-wrap ">

               </div>
           </div>


        <div class="container">


           <h5 class="mt-5 mb-3">받는 사람 정보</h5>
           <table class="table">
               <tr>
                   <th id="f_td">받는사람</th>
                   <td id="r_name"></td>
               </tr>
               <tr>
                   <th>연락처</th>
                   <td id="r_phone"></td>
               </tr>
               <tr>
                   <th>받는주소</th>
                   <td id="r_address"></td>
               </tr>
               <tr>
                   <th>배송요청사항</th>
                   <td id="r_text"></td>
               </tr>
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


   <div class="modal" tabindex="-1" role="dialog" id="change-modal">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title">반품/교환 사유</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div class="modal-body">
                 <select class="form-control form-control-sm mb-3" name="" id="change_type">
                     <option value="">선택</option>
                     <option value="반품">반품</option>
                     <option value="교환">교환</option>
                 </select>
                 <div class="">* 이미지 모양을 클릭하여 사진을 첨부할 수 있습니다.</div>
                 <div class="" id="change_note"></div>
             </div>
             <div class="modla-footer px-3 mb-3 text-center">
                 <span class="btn btn-primary" id="change-modal-btn">신청</span>
             </div>
           </div>
       </div>
   </div>


<script type="text/javascript" src="/admin/js/common.js"></script>
<script type="text/javascript">

   var ppp = 30;
   var page = 1;
   var this_seq = '<? echo $_GET["seq"]; ?>';
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
       console.log('seq' , this_seq);

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
   let proArr = [];


   function LoadProduct(){
       ready_num = 0;
       out_num = 0;
       start_num = 0;
       complete_num = 0;
       cancel_num = 0;
       ok_num = 0;
       no_num = 0;

       $.ajax({
           url: SERVER_AP+"/order/product_seq",
           type: "post",
           cache: false,
           async:false,
           data:{
               order:'o_date desc',
               sday:$("#sday").val(),
               eday:$("#eday").val(),
               u_seq:user_info.u_seq,
               o_seq:this_seq
           },
           success: function(data){
               console.log('data', data);

               let lastPro = 0;
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


                   $.each(data.rows2, function(i,v){


                       let status
                       console.log('여기탐?')

                       $.each(JSON.parse(v.p_seq), function(ii,vv){
                           let opname = ''

                           let proname = ''
                           let proData = loadProData(vv.p_seq);
                           if(vv.po_seq){

                               opname = loadProOption(vv.po_seq)
                           }
                           if(opname){
                               proname = proData.p_name + " " + opname.po_option1 + " " + opname.po_option2;
                           }else{
                               proname = proData.p_name;
                           }
                           let exchangeData = loadExchangeData(v.o_seq,vv.p_seq)
                           let textStyle = ''
                           let dateStr =  ''
                               let btnStr = ``
                           if(exchangeData){
                               if(exchangeData.e_state == '승인' || exchangeData.e_state == '거절'){
                                   status = '교환, 반품 신청 '+exchangeData.e_state
                               }else{
                                   status = exchangeData.e_state;
                               }

                               textStyle = 'text-danger'
                               btnStr = `<div class="order_list_btn">취소 상세보기</div><br />`
                           }else{
                               status = v.o_state
                               dateStr = `
                               <div class="order_go_date">
                               </div>`
                           }



                           if(status == '배송완료'){
                               btnStr = `
                               <div class="order_list_btn" onclick="changeAccept(${v.o_seq}, ${vv.p_seq}, ${vv.po_seq})">교환, 반품 신청</div><br />
                               <div class="order_list_btn">리뷰 작성하기</div><br />`
                           }
                           let thisdate = v.o_date.substr(0,10)

                           thisdate = thisdate.replace(/-/g, ' .')
                           $('.date_order').html(thisdate);
                           $('.num_order').html(v.o_num);

                           let proMoney = 0;
                           let proOpmoney = 0;

                           proMoney = proData.p_price * 1
                           if(opname){
                               proOpmoney = opname.po_price * 1
                           }


                           lastPro = proMoney * 1 + proOpmoney * 1

                           var str = `
                               <div class="order_box_inner" >
                                   <div class="d-flex" style="flex-wrap:wrap">
                                       <div class="  inner_box_1" style="gap:5px; flex:1;">
                                           <div class="d-flex align-items-center" style="gap:5px">
                                               <div class="order_comp_text ${textStyle}">${status}</div>
                                               ${dateStr}
                                           </div>
                                           <div class="mt-4 d-flex">
                                               <div class="">
                                                   <img src="${JSON.parse(proData.p_image)[0]}" width="64" class="h-100" alt="">
                                               </div>
                                               <div class="ml-3" style="flex:1;">
                                                   <div class="mb-2">${proname}</div>
                                                   <div class="d-flex order_money_wrap">
                                                       <div class="">
                                                           <span>${comma(lastPro)} </span>원
                                                           <span class="order_point"></span>
                                                           <span>${vv.cnt} </span>개
                                                       </div>
                                                       <div class="">
                                                           <div onclick="goCart(${vv.p_seq},${vv.po_seq});" class="order_list_btn">
                                                               장바구니 담기
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="m-w-1002">
                                           <div class="border-left inner_box_1 d-flex flex-column align-items-center justify-content-center ">
                                               ${btnStr}
                                           </div>
                                       </div>
                                   </div>
                               </div>`
                           $(".table-wrap").append(str);
                           $(".order_m_go").append(str);


                       })

                       $(".credit-totalprice-all").text(comma(v.o_total_price))
                       $(".credit-delprice").text(comma(v.o_del_price))
                       $(".credit-pay_method").text(v.pay_method || '-')
                       $(".credit-vbank_name").text(v.vbank_name || '')
                       $(".credit-vbank_num").text(v.vbank_num ? '('+v.vbank_num+')': '')
                       $(".credit-point").text(comma(v.o_point))
                       $(".credit-coupon").text(comma(v.o_coupon))
                       $('.credit-totalprice').text(comma(lastPro))
                       let delinfo = loadHomedataArr()
                       $("#r_name").text(delinfo.dl_person)
                       $("#r_phone").text(hyphen(v.o_phone))
                       $("#r_address").text((delinfo.dl_address +' '+ delinfo.dl_address_detail))
                       $("#r_text").text(v.o_request || delinfo.dl_request)


                   })


                   console.log('proArr',proArr);
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


function loadProData(seq){
   let datareturn = ''
   $.ajax({
       url: SERVER_AP+"/admin/common/condition",
       type: "post",
       cache: false,
       async:false,
       data:{
           table: 'product',
           common:{p_seq:seq},
       },
       success: function(data){
           console.log('prd', data);
           if(data.length != 0){
               datareturn = data[0];
           }

       },
       error: function (request, status, error){
           console.log(error);
       }
   });
   return datareturn
}

function loadExchangeData(o_seq,p_seq){
   console.log('탐?', o_seq);
   let datareturn = ''
   $.ajax({
       url: SERVER_AP+"/order/product_and_exchange",
       type: "post",
       cache: false,
       async:false,
       data:{
           u_seq:user_info.u_seq,
           o_seq:o_seq,
           p_seq:p_seq
       },
       success: function(data){
           if(data.length != 0){
           }
           console.log('data----', data);
           datareturn = data.rows[0]
       },
       error: function (request, status, error){
           console.log(error);
       }
   });
   return datareturn
}
function loadProOption(seq){
   let returnbval = ''
   $.ajax({
       url: SERVER_AP+"/admin/common/condition",
       type: "post",
       cache: false,
       async:false,
       data:{
           table: 'product_option',
           common:{po_seq:seq},
       },
       success: function(data){
           returnbval =  data[0];
       },
       error: function (request, status, error){
           console.log(error);
       }

   });
   return returnbval

}

function goCart(p_seq, po_seq){

   let obj = new Object();

   obj.u_seq = user_info.u_seq;
   obj.p_seq = p_seq;
   obj.po_seq = po_seq;
   obj.c_cnt = 1;
   obj.c_date = currentDate();
   obj.c_check = 0;
   if(confirm('장바구니에 등록하시겠습니까?')){
       $.ajax({
           url: SERVER_AP+"/admin/common/insert",
           type: "post",
           cache: false,
           async:false,
           data:{
               table: 'cart',
               obj:obj,
           },
           success: function(data){
               if(confirm("장바구니에 등록되었습니다. 장바구니로 이동하시겠습니까?")){
                   location.href="/cart.php"
               }
           },
           error: function (request, status, error){
               console.log(error);
           }

       });
   }

}

function goDetailOrder(o_seq){
   location.href= 'order_detail.php?seq'+o_seq
}

function loadHomedataArr(){
    let result = []
    var obj = new Object();
    obj.dl_useq = user_info.u_seq;
    obj.dl_check = 'Y'
    $.ajax({
        url: SERVER_AP+"/admin/common/condition",
        type: "post",
        cache: false,
        async:false,
        data:{
            table: 'delivery_location',
            common:obj,
        },
        success: function(data){
            result = data[0]
        },
        error: function (request, status, error){
            console.log(error);
        }
    });
    return result;
}

function changeAccept(o_seq, p_seq, po_seq){
    $("#change-modal").modal("show")
    $("#change-modal-btn").attr('onclick', `changeAcceoptClick(${o_seq}, ${p_seq}, ${po_seq})`)
}

function changeAcceoptClick(o_seq, p_seq, po_seq){
    if(!$("#change_type").val()){
        alert("반품/교환을 선택해주세요.")
        return
    }
    if($("#change_note").summernote('isEmpty')){
        alert("내용을 입력해주세요.")
        return
    }
    if(confirm("반품/교환 신청 하시겠습니까?")){
        var obj = new Object();
        obj.o_seq = o_seq;
        obj.p_seq = p_seq;
        obj.po_seq = po_seq;
        obj.e_text = $("#change_note").summernote('code');
        obj.e_type = $("#change_type").val()
        obj.e_date = currentDate();
        obj.u_seq = user_info.u_seq;

        $.ajax({
            url: SERVER_AP+"/admin/common/insert",
            type: "post",
            cache: false,
            async:false,
            data:{
                table : 'exchange',
                obj:obj,
            },
            success: function(data){
                location.reload()
            },
            error: function (request, status, error){
                console.log(error);
            }
        });
    }
}

</script>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
