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
        .m-w-1002{
            min-width: 200px;
            background: #F9F9F9;
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
            font-size: 11px;
        }
        .pro_name_elipsis{
            width: 100%;
             overflow: hidden;
             text-overflow: ellipsis;
             /* display: -webkit-box; */
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
        .m-none{
            display: none;
        }
        .one_height_line{
            width: 0.5px;
            height: 80px;
            background: #c4c4c4;
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
            .modal-title{
                font-size: 13px;
            }
            .m-none{
                display: block;
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
        .btn-sm{
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 10px;
        }
        body.modal-open {
          overflow: hidden;
          position: fixed;
          width: 100%;
        }
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
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->

    <!-- Message Now Area -->
    <div class="message_now_area section_padding_100" id="contact">
        <div class="container mb-50">

            <div class="contact_from mb-50">

                <div class="d-flex bg-dark my_page_intro py-5 pc-none mb-50">
                    <div class="w-100 text-center ">
                        <span class="font-weight-bold" id="u_name"></span><span>님</span>
                        <div class="">
                            안녕하세요!
                        </div>
                    </div>
                    <div class="w-100 text-center ">
                        <div class="fs-15">
                            등급
                        </div>
                        <span class="font-weight-bold" id="u_rank"></span>
                    </div>
                    <div class="w-100 text-center">
                        <div class="fs-15">
                            사용가능쿠폰
                        </div>
                        <div class="fs-15">
                            <span class="coupon_cnt fs-25 pointer" id="u_coupon" onclick="location.href='coupon.php'">0</span> 장
                        </div>
                    </div>
                    <div class="w-100 text-center">
                        <div class="fs-15">
                            포인트
                        </div>
                        <div class="fs-15">
                            <span class="fs-25 pointer" id="u_point" onclick="location.href='point.php'"></span> P
                        </div>
                    </div>
                </div>

                <div class="m-none">
                    <div class="row bg-dark my_page_intro pt-4 ">
                        <div class="w-100 col-12 text-center border-bottom pb-4 ">
                            <span class="font-weight-bold" id="u_name"></span><span>님</span>
                            <span class="">
                                안녕하세요!
                            </span>
                        </div>
                    </div>
                    <div class="row bg-dark my_page_intro mb-50  py-4">
                        <div class="w-100 text-center col-4">
                            <div class="fs-15">
                                등급
                            </div>
                            <div class="fs-15">
                                <span class="coupon_cnt fs-25" id="u_rank">0</span>
                            </div>
                        </div>
                        <div class="w-100 text-center col-4">
                            <div class="fs-15">
                                사용가능쿠폰
                            </div>
                            <div class="fs-15">
                                <span class="coupon_cnt fs-25" id="u_coupon">0</span> 장
                            </div>
                        </div>
                        <div class="w-100 text-center col-4">
                            <div class="fs-15">
                                포인트
                            </div>
                            <div class="fs-15">
                                <span class="fs-25" id="u_point"></span> P
                            </div>
                        </div>
                    </div>

                </div>





                <div class="d-flex border mb-50">
                    <div class="mypage_menu_box">
                        <div class="mypage_menu_head">
                            MY
                        </div>
                        <div class="mypage_menu_list">
                            <div class="pointer"  onclick="location.href='wishlist.php'">
                                관심 상품 <span class="wish_quantity">0</span>
                            </div>
                            <div class="pointer" onclick="location.href='cart.php'">
                                장바구니 <span class="cart_quantity">0</span>
                            </div>
                            <div class="pointer" onclick="location.href='review.php'">
                                리뷰관리
                            </div>
                        </div>
                    </div>


                    <div class="mypage_menu_box">
                        <div class="mypage_menu_head">
                            나의 활동
                        </div>
                        <div class="mypage_menu_list">
                            <div class="pointer" onclick="location.href='coupon.php'">
                                쿠폰내역 <span class="coupon_quantity">0</span>
                            </div>

                            <div class="pointer" onclick="location.href='point.php'">
                                포인트내역
                            </div>

                            <div class="pointer" onclick="location.href='order_list.php'">
                                주문내역
                            </div>

                            <div class="pointer" onclick="location.href='exchange.php'">
                                반품/교환 내역
                            </div>

                        </div>
                    </div>
<!--
                    <div class="mypage_menu_box">
                        <div class="mypage_menu_head">
                            쇼핑 혜택
                        </div>
                        <div class="mypage_menu_list">
                            <div class="">
                                내 문의글 보기
                            </div>
                            <div class="">
                                상품  Q&A
                            </div>
                            <div class="">
                                재고 및 배송문의
                            </div>
                            <div class="">
                                A/S및 1:1 문의
                            </div>
                        </div>
                    </div> -->
                    <div class="mypage_menu_box">
                        <div class="mypage_menu_head">
                            정보관리
                        </div>

                        <div class="mypage_menu_list">
                            <div class="pointer edit_info_btn sns_none" onclick="openCheck(1)">
                                회원정보수정
                            </div>
                            <div class="pointer" onclick="openCheck(2)">
                                회원탈퇴
                            </div>

                        </div>
                    </div>

                </div>

                <!-- <table class="table border mx-auto text-center">
                    <tr>
                        <th scope="row" class="text-center">등급</th>
                        <td id="u_rank"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">이메일</th>
                        <td id="u_email"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">휴대전화</th>
                        <td id="u_phone"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">기본 배송지</th>
                        <td id="">
                            <div class="order_whter border p-2 font-14">
                                <div class="">
                                    <div class="where_addr row m-0">
                                        <div class="col-10 p-0 text-left">
                                            배송지 명 : <span id="buyer_title"></span><br>
                                            주소 : <span id="buyer_addr"></span>
                                        </div>
                                        <div class="col-2 p-0 text-right">
                                            <span onclick="changeAddr();" class="font-10 pointer font-weight-bold">변경</span>
                                        </div>
                                    </div>
                                    <div class="text-secondary text-left where_detail_addr">
                                        이름 : <span id="buyer_name"></span>
                                        번호 : <span id="buyer_tel"></span>
                                    </div>
                                    <div class="text-left">
                                         배송시 요청사항 : <span class="dl_request"></span>
                                    </div>

                                </div>
                            </div>
                        </td>
                    </tr>
                </table> -->
            </div>

            <div class="my-5">
                <h6>나의 주문처리 현황</h6>
                <div class="row mt-3 align-items-center w-100" style="margin:0 auto;">
                    <div class="col-md col text-center py-4 px-1 ">
                        <i class="fa-solid fa-arrows-rotate" style="font-size:30px"></i>
                        <div class="my-2">
                            상품준비중
                        </div>
                        <div class="" style="font-size:25px" id="ready_num">
                            0
                        </div>
                    </div>
                    <div class="one_height_line">

                    </div>
                    <div class="col-md col text-center py-4 px-1">
                        <i class="fa-solid fa-truck-ramp-box" style="font-size:30px"></i>
                        <div class="my-2">
                            출고
                        </div>
                        <div class="" style="font-size:25px" id="out_num">
                            0
                        </div>
                    </div>
                    <div class="one_height_line">
                    </div>
                    <div class="col-md col text-center py-4 px-1 ">
                        <i class="fa-solid fa-truck" style="font-size:30px"></i>
                        <div class="my-2">
                            배송중
                        </div>
                        <div class="" style="font-size:25px" id="ing_num">
                            0
                        </div>
                    </div>
                    <div class="one_height_line">
                    </div>
                    <div class="col-md col text-center py-4 px-1 ">
                        <i class="fa-solid fa-circle-check" style="font-size:30px"></i>
                        <div class="my-2">
                            배송완료
                        </div>
                        <div class="" style="font-size:25px" id="complete_num">
                            0
                        </div>
                    </div>
                    <!-- <div class="col-md col text-center py-4 border">
                        <i class="fa-solid fa-ban" style="font-size:30px"></i>
                        <div class="my-2">
                            주문취소
                        </div>
                        <div class="" style="font-size:25px" id="cancel_num">
                            0
                        </div>
                    </div> -->
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

            <h5 class="mb-3">주문목록</h5>
            <div class="mb-3 d-flex align-items-center">
                <span class="mr-3">기간</span>
                <span class="btn btn-sm btn-primary daybtn" data-target="today">오늘</span>
                <span class="btn btn-sm btn-primary daybtn" data-target="week">1주일</span>
                <span class="btn btn-sm btn-primary daybtn" data-target="month1">1개월</span>
                <span class="btn btn-sm btn-primary daybtn" data-target="month3">3개월</span>
            </div>
            <div class="mb-3">
                <div class="d-flex align-items-center col-md-5 p-0">
                    <input type="date" name="" value="" class="form-control form-control-sm m-w-30" id="sday"> <span class="mx-2">~</span> <input type="date" name="" value="" class="form-control form-control-sm m-w-30" id="eday">
                    <span class="btn btn-sm btn-secondary ml-2 m-w-100" style="height: 31px; line-height: 31px;" onclick="LoadProduct()">검색</span>
                </div>
            </div>
            <div class="table-wrap  pc-none">
                <table class="table border text-center table_order">
                    <tr>
                        <th>주문일자<br />[주문번호]</th>
                        <th>이미지</th>
                        <th>상품정보</th>
                        <th>수량</th>
                        <th>상품구매금액</th>
                        <th>주문처리상태</th>
                        <th>취소/교환/반품</th>
                    </tr>
                    <tbody id="order-list-tbody">

                    </tbody>
                </table>
            </div>
        </div>
        <div class="order_go ">

        </div>


        <div class="order_m_go m-none">

        </div>

        <div id="paged-wrap" class="mt-3">
            <nav aria-label="Page navigation example">
                <ul id="paged-content" class="pagination justify-content-center"></ul>
            </nav>
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
                  <th></th>
              </tr>
              <tbody id="ordermodal-tbody">

              </tbody>
          </table>
          <div class="order_detail_list m-none">

          </div>

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
                                  <span class="credit-bank_name">결제방법</span>
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
                          <span class="credit-bank_name">결제방법</span>
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

<div class="modal" tabindex="-1" role="dialog" id="deleteModal">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
      <input class="form-control" type="text" placeholder="탈퇴 사유를 입력해주세요." name="" value="">
  </div>
  <div class="modla-footer px-3 mb-3 text-center">
      <span class="btn btn-primary" onclick="deleteReal()" id="">탈퇴</span>
      <span class="btn btn-danger" onclick="$('#deleteModal').modal('hide');" id="">취소</span>
  </div>
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
              <input class="form-control" type="password" id="loginPs" placeholder="비밀번호를 입력해주세요."  name="" value="">
          </div>
          <div class="modla-footer px-3 mb-3 text-center">
              <span class="btn btn-primary" onclick="$('#openCheck').modal('hide');" id="">취소</span>
               <span class="btn btn-secondary" onclick="checkLogin();" id="">확인</span>
          </div>
        </div>
    </div>
</div>



<script type="text/javascript" src="/admin/js/common.js"></script>
<script src="/js/pages/wishlist/wishlist.js"></script>
<script type="text/javascript">

    var ppp = 30;
    var page = 1;

    var ready_num = 0
    var out_num = 0
    var ing_num = 0
    var complete_num = 0
    var cancel_num = 0
    var windowWidth = $( window ).width();
    $(function(){


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

        loadMydata()
        LoadProduct()
        LoadMyCouponlist()

        if(user_info.u_type == '네이버계정' || user_info.u_type == '카카오계정'){
            //$('.sns_none').addClass('d-none');
            $(".edit_info_btn").attr('onclick', `location.href='/myPageEdit.php?seq=${user_info.u_seq}'`)
        }

    })

    function loadMydata(){
        var obj = new Object();
        obj.u_seq = user_info.u_seq;
        $.ajax({
            url: SERVER_AP+"/admin/common/condition",
            type: "post",
            cache: false,
            data:{
                table: 'user',
                common:obj,
            },
            success: function(data){
                $("#u_name").text(data[0].u_name)
                $("#u_rank").text(data[0].u_rank)
                $("#u_email").text(data[0].u_email)
                $("#u_phone").text(hyphen(data[0].u_phone))
                $("#u_point").text(comma(data[0].u_point))
            },
            error: function (request, status, error){
                console.log(error);
            }
        });
    }

    function LoadProduct(){
        ready_num = 0
        out_num = 0
        ing_num = 0
        complete_num = 0
        cancel_num = 0

        let endPoint = ``;
        if(windowWidth > 768){
            endPoint = `/order/order-paging`
        }else{
            endPoint = `/order/order-detail-paging`
        }

        $.ajax({
            url: SERVER_AP+endPoint,
            type: "post",
            cache: false,
            async:false,
            data:{
                page:page,
                ppp:ppp,
                order:'o_date desc',
                sday:$("#sday").val(),
                eday:$("#eday").val(),
                u_seq:user_info.u_seq,
            },
            success: function(data){
                $("#order-list-tbody, .order_m_go").html('');
                if(data.totalCount == 0){
                    let str = '<tr class="pc-none">\
                                  <td colspan="14" class="py-4 text-center">주문내역이 없습니다.</td>\
                                </tr>';
                    let mstr = '<div class="py-4 text-center">주문내역이 없습니다.</div>';
                    $(".order_m_go").append(mstr);

                    $("#paged-wrap").addClass('d-none')
                }else{
                    let makeArr = [];
                    let makeObj = new Object();
                    console.log('1data', data);
                    $.each(data.rows,function(i,v){
                        console.log('dfdf44', v.o_state);
                        if(windowWidth > 768){
                            if(v.o_state == '상품준비중'){
                                console.log('탄?');
                                ready_num ++
                            }
                            if(v.o_state == '출고'){
                                out_num ++;
                            }
                            if(v.o_state == '주문취소'){
                                cancel_num ++
                            }
                            if(v.o_state == '배송중'){
                                ing_num ++
                            }
                            if(v.o_state == '배송완료'){
                                complete_num ++
                            }
                        }



                        var number = (page*ppp)-ppp+(i+1) //1부터 시작
                        var number = (page*ppp)-ppp+(i+1) //1부터 시작

                        let dateStr =  ''
                        let thisdate = v.o_date.substr(0,10)

                        let exchangeState = exchangeList(v.o_seq, v.p_seq_new)


                        let stateStr = '-';
                        if(exchangeState.length != 0){
                            if(exchangeState[0].e_state == 0){
                                stateStr = '반품/교환 신청 대기중'
                            }else if(exchangeState[0].e_state == 1){
                                stateStr = '반품/교환 신청 승인'

                            }else if(exchangeState[0].e_state == -1){
                                stateStr = '반품/교환 신청 거절'
                            }else if(exchangeState[0].e_state == 2){
                                stateStr = '택배사출발'
                            }else if(exchangeState[0].e_state == 3){
                                stateStr = '반품/교환완료'
                            }
                        }
                        let trackStr = ''
                        let orderStr=`<div style="border:1px solid black;margin-top:2px;">
                                <div style="background:#000;color:#fff;">${v.o_num}</div>
                            </div>`;
                        let returnStr = ``

                        if(exchangeState.length != 0){
                            returnStr = ``;
                            if(exchangeState[0].e_state == 0){
                                stateStr = '반품/교환 신청 대기중'
                            }else if(exchangeState[0].e_state == 1){
                                stateStr = '반품/교환 신청 승인'
                            }else if(exchangeState[0].e_state == -1){
                                stateStr = '반품/교환 신청 거절'
                            }else if(exchangeState[0].e_state == 2){
                                stateStr = '택배사출발'
                            }else if(exchangeState[0].e_state == 3){
                                stateStr = '반품/교환완료'
                            }
                        }else{
                            returnStr = `<div onclick="changeAccept(${v.o_seq}, ${v.p_seq_new}, ${v.po_seq})" style="cursor:pointer; border-bottom:1px solid black;">교환/반품 신청</div>`
                        }
                        if(v.o_state == '배송완료'){
                            orderStr = `<div style="border:1px solid black;margin-top:2px;">
                                    <div style="background:#000;color:#fff;">${v.o_num}</div>
                                    ${returnStr}
                                </div>`;
                        }


                        if(v.o_tackbea && v.o_tracknum){
                            // if(v.o_tackbea){v.o_tackbea = '-';}
                            // if(v.o_tracknum){v.o_tracknum = '-';}
                            trackStr = `<div>${v.o_tackbea}</div>
                                <div style="border:1px solid black;">
                                    <div class="text-primary pointer" onclick="checkDelivery('${v.o_tracknum}', '${v.o_tackbea}')">${v.o_tracknum}</div>
                                    <div onclick='location.href="review-insert.php?p_seq=${v.p_seq_new}"' style="border-top:1px solid black; background:#000;color:#fff;cursor:pointer;">구매후기</div>
                                </div>`;
                        }
                        let optionStr = '';
                        if(v.po_option1){
                            optionStr = `<br/>[${v.po_option1} : ${v.po_option2}]`;
                        }

                        if(v.o_state == '상품준비중'){
                            trackStr = `<div style="border:1px solid black;">
                                <div onclick="orderCancel(${v.o_seq})" style="border-top:1px solid black; background:#000;color:#fff;cursor:pointer;">주문취소</div>
                            </div>`
                        }
                        console.log('orderStr', orderStr);
                        let str = `<tr>
                            <td>${thisdate}${orderStr}</td>
                            <td><img src="${JSON.parse(v.p_image)[0]}" width="50px"/></td>
                            <td class="text-left">${v.p_name}${optionStr}</td>
                            <td>${v.p_cnt}</td>
                            <td>${comma(v.p_price)}</td>
                            <td>
                                <div class="text-danger">${v.o_state}</div>
                                ${trackStr}
                            </td>
                            <td>${stateStr}</td>
                        </tr>`;

                        $('#order-list-tbody').append(str);

                        var str2 = `<div class="order_box_re mx-auto">
                            <div class="d-flex justify-content-between align-items-end order_title">
                                <div class="order_date_re">
                                    <span class="font-weight-bold">${thisdate}</span> <span>(${v.o_num})</span>
                                </div>
                                <div id="order-num-${v.o_seq}" class=" order_detail_text  pointer">
                                    상세보기 >
                                </div>
                            </div>
                            <div class="order_box_inner name_${v.o_num}">
                                ${productDrawing(v.o_num)}
                            </div>
                        </div>`
                        console.log('dfdf123', v.o_state);



                        $('.order_m_go').append(str2);


                        makeArr.push(v.p_seq);
                        $(`#order-num-${v.o_seq}`).attr('onclick',`modalOpen( "${v.o_num}", "${v.o_state}", ${v.o_seq})`)
                        $(`#m-order-num-${v.o_seq}`).attr('onclick',`modalOpen( "${v.o_num}", "${v.o_state}", ${v.o_seq})`)

                    })

                    $("#paged-wrap").removeClass('d-none')
                    drawPaging(data.totalPage);

                    $("#ready_num").text(ready_num)
                    $("#out_num").text(out_num)
                    $("#ing_num").text(ing_num)
                    $("#complete_num").text(complete_num)
                    $("#cancel_num").text(cancel_num)
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


    function modalOpen( o_num, o_state, o_seq){
        $("#ordermodal-title").text(o_num)
        $("#ordermodal-tbody").html('')
        $(".order_detail_list").html('')
        let alltotalprice = 0;

        $.ajax({
            url: SERVER_AP+"/common/condition",
            type: "post",
            cache: false,
            async:false,
            data:{
                table: 'order_list',
                common:{o_num : o_num},
            },
            success: function(data){
                $.each(data, function(i,v){
                    let proinfo = proInfo(v.p_seq_new)
                    let optionPrice = 0;
                    let optionName = "";
                    if(v.po_seq){
                        let opinfo = opInfo(v.po_seq)
                        optionPrice = opinfo.price*1
                        optionName = opinfo.name;
                    }

                    var number = (page*ppp)-ppp+(i+1) //1부터 시작
                    // var number = data.totalCount - ((page-1)*ppp+(i)) //끝번호부터시작
                    var mainimg = JSON.parse(proinfo.img);

                    let exchangeState = exchangeList(v.o_seq, v.p_seq_new)

                    ///////////////////////////배송비///////////////////////
                    let thisdelPrice_each=0;
                    let dell_each = LoadDel(proinfo.dt_seq)
                    let datatype_each = $(dell_each).attr("data-type")
                    let condition_each = $(dell_each).attr("data-condition")*1
                    let price_each = $(dell_each).attr("data-del")*1
                    let data_clac = $(dell_each).attr("data-dt_calc")

                    let proprice_each = proinfo.price*1 + optionPrice * v.p_cnt*1
                    alltotalprice += proinfo.price*1 + optionPrice * v.p_cnt*1


                    let quantynum_each = v.p_cnt*1

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
                                  <td><div class="dots">'+proinfo.name+' '+optionName+'</div></td>\
                                  <td>'+v.cnt+'</td>\
                                  <td>'+comma(proinfo.price*1 + optionPrice * v.p_cnt)+' 원</td>\
                                  <td>'+comma(thisdelPrice_each)+' 원</td>\
                                  <td id="review-td-'+v.p_seq+'">-</td>\
                                </tr>';
                    var mstr = `<div class="border p-3">
                                        <div class="d-flex pt-3">
                                            <div class="mr-2">
                                                <img src="${mainimg[0]}" style="width:64px;height:64px;" />
                                            </div>
                                            <div class="pro_info_m_box">
                                                <div class="">
                                                    <span class="pro_name_elipsis" >`+proinfo.name+` `+optionName+`  </span>,`+v.p_cnt+` 개
                                                </div>
                                                <div class="">
                                                    <span class="">총 금액 : </span>`+comma((proinfo.price * 1 + optionPrice) * v.p_cnt)+` 원
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-100">
                                            <div class="text-center" id="m-review-td-`+v.p_seq_new+`">
                                                -
                                            </div>
                                        </div>
                                    </div>`
                    $("#ordermodal-tbody").append(str);
                    $('.order_detail_list').append(mstr);

                    if(v.o_state != '상품준비중'){
                       $("#review-td-"+v.p_seq_new).html('')
                       $("#m-review-td-"+v.p_seq_new).html('')
                       console.log('exchangeState', exchangeState);
                       if(exchangeState.length == 0){
                           if(v.o_state == '배송완료'){
                               $("#review-td-"+v.p_seq_new).append('<span class="btn btn-sm btn-info rounded-0" href="review-insert.php?p_seq='+v.p_seq_new+'">후기작성</span>')
                               $("#review-td-"+v.p_seq_new).append(`<span class="btn btn-sm btn-secondary" onclick="changeAccept(${v.o_seq}, ${v.p_seq_new}, ${v.po_seq})">반품/교환 신청</span>`)

                               $("#m-review-td-"+v.p_seq_new).append('<span class="btn  btn-sm btn-info rounded-0" href="review-insert.php?p_seq='+v.p_seq_new+'">후기작성</span>')
                               $("#m-review-td-"+v.p_seq_new).append(`<span class="btn btn-sm btn-secondary" onclick="changeAccept(${v.o_seq}, ${v.p_seq_new}, ${v.po_seq})">반품/교환 신청</span>`)
                           }else if(v.o_state == '주문취소'){
                               $("#review-td-"+v.p_seq_new).append('<a class=" ml-3" >주문 취소 한 상품입니다.</a>');
                               $("#m-review-td-"+v.p_seq_new).append('<a class=" ml-3" >주문 취소 한 상품입니다.</a>')
                           }
                       }else{
                           if(exchangeState[0].e_state == 0){
                               $("#m-review-td-"+v.p_seq_new).append('<span class="text-primary btn btn-primary w-100">반품/교환 신청 대기중</span>')
                           }else if(exchangeState[0].e_state == 1){
                               $("#m-review-td-"+v.p_seq_new).append('<span class="text-success  btn btn-primary w-100">반품/교환 신청 승인</span>')
                           }else if(exchangeState[0].e_state == -1){
                               $("#m-review-td-"+v.p_seq_new).append('<span class="text-danger  btn btn-primary w-100">반품/교환 신청 거절</span>')
                           }else if(exchangeState[0].e_state == 2){
                               $("#m-review-td-"+v.p_seq_new).append('<span class="text-info  btn btn-primary w-100">택배사출발</span>')
                           }else if(exchangeState[0].e_state == 3){
                               $("#m-review-td-"+v.p_seq_new).append('<span class="text-danger  btn btn-primary w-100">반품/교환완료</span>')
                           }

                       }
                   }else if(v.o_state == '상품준비중'){
                       $("#review-td-"+v.p_seq_new).html(`<span class="btn btn-sm btn-secondary" onclick="orderCancel(${v.o_seq})">주문취소</span>`)
                       $("#m-review-td-"+v.p_seq_new).html(`<span class="btn btn-sm btn-secondary" onclick="orderCancel(${v.o_seq})">주문취소</span>`)
                   }
                })

                $(".credit-totalprice").text(comma(alltotalprice))
            },
            error: function (request, status, error){
                console.log(error);
            }
        });


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
                if(data[0].pay_method == 'vbank'){
                    data[0].pay_method = '무통장입금'
                    $(".credit-bank_name").addClass('d-none');
                }else{
                    $(".credit-bank_name").removeClass('d-none');
                }
                $(".credit-pay_method").text(data[0].pay_method || '-')
                $(".credit-vbank_name").text(data[0].vbank_name || '')
                $(".credit-bank_name").text(data[0].bank_name || '')
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

    function orderCancel(o_seq){
        if(confirm("주문 취소신청하시겠습니까?")){
            var obj = new Object();
            obj.o_state = '주문취소'
            $.ajax({
                url: SERVER_AP+"/admin/common/update",
                type: "post",
                cache: false,
                async:false,
                data:{
                    table : 'order_list',
                    whereField:"o_seq",
                    whereValue:o_seq,
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

    function orderComplete(o_seq){
        if(confirm("배송완료 처리하시겠습니까?")){
            var obj = new Object();
            obj.o_state = '배송완료'
            $.ajax({
                url: SERVER_AP+"/admin/common/update",
                type: "post",
                cache: false,
                async:false,
                data:{
                    table : 'order_list',
                    whereField:"o_seq",
                    whereValue:o_seq,
                    obj:obj,
                },
                success: function(data){location.reload()},
                error: function (request, status, error){
                    console.log(error);
                }
            });
        }
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


    function exchangeList(o_seq, p_seq){
        var result = [];
        console.log('dfdf', o_seq);
        console.log('p_seq', p_seq);
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
                console.log('ddd', data);
                result = data
            },
            error: function (request, status, error){
                console.log(error);
            }
        });
        return result;
    }

    function deleteUser(){
        $("#openCheck").modal('hide');
        $('#deleteModal').modal('show');



            // var obj = new Object();
            // obj.u_delete = 'Y'
            // obj.u_id = "";
            // obj.u_delete_reason = "";
            // $.ajax({
            //     url: SERVER_AP+"/common/update",
            //     type: "post",
            //     cache: false,
            //     async:false,
            //     data:{
            //         table : 'user',
            //         whereField:"u_seq",
            //         whereValue:user_info.u_seq,
            //         obj:obj,
            //     },
            //     success: function(data){
            //         alert('정상적으로 탈퇴되었습니다.')
            //         location.href='/logout.php';
            //     },
            //     error: function (request, status, error){
            //         console.log(error);
            //     }
            // });

    }

    function deleteReal(){
        if(confirm('정말 탈퇴하시겠습니까?')){
            var obj = new Object();
            obj.u_delete = 'Y'
            obj.u_id = "";
            obj.u_delete_reason = "";
            $.ajax({
                url: SERVER_AP+"/common/update",
                type: "post",
                cache: false,
                async:false,
                data:{
                    table : 'user',
                    whereField:"u_seq",
                    whereValue:user_info.u_seq,
                    obj:obj,
                },
                success: function(data){
                    alert('정상적으로 탈퇴되었습니다.')
                    location.href='/logout.php';
                },
                error: function (request, status, error){
                    console.log(error);
                }
            });
        }
    }
    //LargeSort();

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
    if(check == 1){
        location.href='myPageEdit.php?seq='+user_info.u_seq+''
    }else{
        $('#openCheck').modal('show');
    }

    goCheckType = check;


}


function LoadMyCouponlist(){
    $.ajax({
        url: SERVER_AP+"/admin/coupon/my-coupon-N",
        type: "post",
        cache: false,
        data:{
            u_seq : user_info.u_seq,
        },
        success: function(data){
            $("#u_coupon").text(data.length)
        },
        error: function (request, status, error){
            console.log(error);
        }
    });
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


function productDrawing(o_num){
    let str = ``

    $.ajax({
        url: SERVER_AP+"/order/order-paging2",
        type: "post",
        cache: false,
        async:false,
        data:{
            page:page,
            ppp:ppp,
            order:'o_date desc',
            sday:$("#sday").val(),
            eday:$("#eday").val(),
            u_seq:user_info.u_seq,
            o_num:o_num,
        },
        success: function(data){
            console.log('data', data);

            if(data.totalCount == 0){

            }else{
                $.each(data.rows, function(i,v){
                    if(windowWidth < 768){
                        if(v.o_state == '상품준비중'){
                            console.log('탄?');
                            ready_num ++
                        }
                        if(v.o_state == '출고'){
                            out_num ++;
                        }
                        if(v.o_state == '주문취소'){
                            cancel_num ++
                        }
                        if(v.o_state == '배송중'){
                            ing_num ++
                        }
                        if(v.o_state == '배송완료'){
                            complete_num ++
                        }
                    }

                    let exchangeState = exchangeList(v.o_seq, v.p_seq_new)


                    let textStyle = ''
                    let dateStr =  ''
                    let btnStr = `
                                    <div onclick="goCart(${v.p_seq_new},${v.po_seq});" class="order_list_btn fs-10-m">
                                        장바구니
                                    </div>`
                    let btn = ``;

                    let mbtn = ``;
                    if(v.o_state == '상품준비중'){
                        btn = `<span class="btn btn-sm btn-secondary" onclick="orderCancel(${v.o_seq})">주문취소</span>`
                         btnStr += `<div class="order_list_btn" onclick="alert('상품 준비 중입니다.')">배송조회</div>`

                    }
                    if(v.o_state == '출고'){
                        btn = `-`;
                        mbtn = `-`;

                        btnStr += `
                            <div class="order_list_btn" onclick="checkDelivery('${v.o_tracknum}', '${v.o_tackbea}')">배송조회</div>`

                    }
                    if(v.o_state == '주문취소'){
                        btn = `주문취소 신청중`;
                        mbtn = `주문취소 신청중`;
                    }
                    if(v.o_state == '배송중'){

                        btnStr += `
                            <div class="order_list_btn" onclick="checkDelivery('${v.o_tracknum}', '${v.o_tackbea}')">배송조회</div>`

                    }
                    if(v.o_state == '배송완료'){

                        btnStr += `
                            <div class="order_list_btn" onclick="changeAccept(${v.o_seq}, ${v.p_seq_new}, ${v.po_seq})">교환, 반품 신청</div>
                            <div class="order_list_btn "><a href="review-insert.php?p_seq=${v.p_seq_new}">후기작성</a></div>`

                    }

                    let stateStr = v.o_state;
                    if(exchangeState.length != 0){
                        btnStr = ``;
                        if(exchangeState[0].e_state == 0){
                            stateStr = '반품/교환 신청 대기중'
                        }else if(exchangeState[0].e_state == 1){
                            stateStr = '반품/교환 신청 승인'

                        }else if(exchangeState[0].e_state == -1){
                            stateStr = '반품/교환 신청 거절'
                        }else if(exchangeState[0].e_state == 2){
                            stateStr = '택배사출발'
                        }else if(exchangeState[0].e_state == 3){
                            stateStr = '반품/교환완료'
                        }
                    }


                    str += `<div class="buy_wrap " style="flex-wrap:wrap">
                        <div class="  inner_box_1" style="gap:5px; flex:1;">
                            <div class="d-flex align-items-center" style="gap:5px">
                                <div class="order_comp_text ${textStyle}">${status}</div>
                                ${dateStr}
                            </div>
                            <div class=" d-flex">
                                <div class="">
                                    <img src="${JSON.parse(v.p_image)[0]}" width="64" class="h-100" alt="">
                                </div>
                                <div class="ml-3" style="flex:1;">
                                    <div class="mb-2">${v.p_name}</div>
                                    <div class="d-flex order_money_wrap">
                                        <div class="">
                                            <span>${comma(v.p_price)} </span>원
                                            <span class="order_point"></span>
                                            <span>${v.p_cnt} </span>개
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-w-1002">
                            <div class="border-left p-2 d-flex  align-items-center justify-content-between h-100" >
                                <div class="font-weight-bold" style="font-size:12px;">
                                    ${stateStr}
                                </div>
                                <div class="d-flex" style="gap:10px;">
                                    ${btnStr}
                                </div>
                            </div>
                        </div>
                    </div>`

                })


            }
        }, beforeSend: function () {
                  Loading()
           }, complete: function () {
                    $("#div_ajax_load_image").remove();
           }, error: function (request, status, error){
            console.log(error);
        }
    });

    return str;
}

</script>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
