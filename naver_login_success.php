<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>
<script src="https://static.nid.naver.com/js/naveridlogin_js_sdk_2.0.2.js" charset="utf-8"></script>
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
    </style>

    <!-- Breadcumb Area -->
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>로그인</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="shop_main.php">네이버</a></li>
                        <li class="breadcrumb-item active">로그인</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->

    <!-- Message Now Area -->
    <div class="message_now_area section_padding_100" id="contact">
        <div class="container">

            <div class="contact_from mb-50">

            </div>

        </div>
    </div>



</div>
<script type="text/javascript" src="/admin/js/common.js"></script>
<script type="text/javascript" src="https://static.nid.naver.com/js/naveridlogin_js_sdk_2.0.2-nopolyfill.js" charset="utf-8"></script>
<script type="text/javascript">

    window.name='opener';
    var dupliCk2 = false;
    var naverLogin = new naver.LoginWithNaverId(
        {
            clientId: "mGvpKEJoPS5Sd3ZjIsir",
            callbackUrl: "",
            isPopup: true,
        }
    );
    /* (4) 네아로 로그인 정보를 초기화하기 위하여 init을 호출 */
    naverLogin.init();


    /* (5) 현재 로그인 상태를 확인 */
    window.addEventListener('load', function () {
        naverLogin.getLoginStatus(function (status) {
            console.log('naverLogin', naverLogin.user.mobile);
            console.log('status', status);
            if (status) {
                console.log('status true');
                /* (6) 로그인 상태가 "true" 인 경우 로그인 버튼을 없애고 사용자 정보를 출력합니다. */
//                setLoginStatus();
            }
        });
    });

    /* (6) 로그인 상태가 "true" 인 경우 로그인 버튼을 없애고 사용자 정보를 출력합니다. */
    // function setLoginStatus() {
    //     let obj = {
    //          u_id : naverLogin.user.id,
    //          u_name : naverLogin.user.name,
    //          u_type : '네이버계정',
    //          u_birth_type : '양력',
    //          u_phone: naverLogin.user.mobile.replace(/-/gi,""),
    //          u_date : currentDate(),
    //      }
    //      console.log('여긴?');

    //      duplickCheck2();
    //      if(dupliCk2){
    //          $.ajax({
    //              type: "POST",
    //              url: SERVER_AP + '/user/dupli',
    //              cache: false,
    //              async: false,
    //              data:{
    //                  u_id :naverLogin.user.id,
    //              },
    //              success: function (data) {

    //                  if(data.type == 'success'){
    //                                      console.log('data', data);
    //                      $.ajax({
    //                          type: "POST",
    //                          url: SERVER_AP + '/user/insert',
    //                          cache: false,
    //                          async: false,
    //                          data:{
    //                              user_info :obj,
    //                          },
    //                          success: function (data) {

    //                              alert(data.message)
    //                              let nobj = {
    //                                  ...obj,
    //                                  u_seq : data.insertId,
    //                              }
    //                              sessionSet_naver(nobj);

    //                          }, error:function(request,status,error){
    //                              console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
    //                          },
    //                      });
    //                  }else{
    //                      //이미있는 아이디
    //                      var user_info = {
    //                          u_id:naverLogin.user.id,
    //                      };

    //                      $.ajax({
    //                          type: "POST",
    //                          url: SERVER_AP + '/user/login',
    //                          cache: false,
    //                          dataType : 'json',
    //                          data:{
    //                              obj : user_info
    //                          },
    //                          success: function (data) {
    //                              if(data.result == 'not_found'){
    //                                  alert('존재하지 않는 아이디 입니다.');
    //                              }else{
    //                                  var obj = data.result;
    //                                  sessionSet_naver(obj);
    //                              }
    //                          }, error:function(request,status,error){
    //                              console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
    //                          },
    //                      });
    //                  }

    //              }, error:function(request,status,error){
    //                  console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
    //              },
    //          });

    //      }else{
    //          // alert('이미 가입하신 이력이 존재합니다');
    //          // location.href='/login.php'
    //          //이미있는 아이디
    //          var user_info = {
    //              u_id:naverLogin.user.id,
    //          };

    //          $.ajax({
    //              type: "POST",
    //              url: SERVER_AP + '/user/login',
    //              cache: false,
    //              dataType : 'json',
    //              data:{
    //                  obj : user_info
    //              },
    //              success: function (data) {
    //                  if(data.result == 'not_found'){
    //                      $.ajax({
    //                          type: "POST",
    //                          url: SERVER_AP + '/user/dupli2',
    //                          cache: false,
    //                          async: false,
    //                          data:{
    //                              u_name :naverLogin.user.name,
    //                              u_phone :naverLogin.user.mobile.replace(/-/gi,""),
    //                          },
    //                          success: function (data) {
    //                              if(data.type == 'fail'){
    //                                  alert(`${data.u_type}으로 가입하신 이력이 존재합니다.`);
    //                                  location.href='/login.php'
    //                              }
    //                          }, error:function(request,status,error){
    //                              console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
    //                          },
    //                      });
    //                  }else{
    //                      var obj = data.result;
    //                      sessionSet_naver(obj);
    //                  }
    //              }, error:function(request,status,error){
    //                  console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
    //              },
    //          });
    //      }

    // }


    // function sessionSet_naver(dataUser){
    //     var isAutoLogin = ""
    //     $.ajax({
    //         type: "POST",
    //         url:  '/login_ok.php',
    //         cache: false,
    //         data:{
    //             user_info:JSON.stringify(dataUser),
    //         },
    //         success: function (data) {
    //             alert(dataUser.u_name + '님의 로그인이 성공하였습니다.');
    //             location.href="http://lidot.co.kr"
    //         }, error:function(request,status,error){
    //             console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
    //         },
    //     });
    // }

    // function duplickCheck2(){

    //     $.ajax({
    //         type: "POST",
    //         url: SERVER_AP + '/user/dupli2',
    //         cache: false,
    //         async: false,
    //         data:{
    //             u_name :naverLogin.user.name,
    //             u_phone :naverLogin.user.mobile.replace(/-/gi,""),
    //         },
    //         success: function (data) {
    //             if(data.type == 'success'){
    //                 dupliCk2 = true
    //             }else{
    //                 dupliCk2 = false
    //             }


    //         }, error:function(request,status,error){
    //             console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
    //         },
    //     });

    // }



</script>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
