<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php';
$buyon = $_GET['buyon'];
?>
    <link rel="stylesheet" href="css/pages/shop_main/shop_main.css">
    <style media="screen">
        /* #naverIdLogin{
            width: 220px !important;
        } */
        .logbt1{
            width: 100px;
        }
        .logbt2{
            width: 130px;
        }
        @media (max-width: 769px){
            .logbt1{
                width: 49.3%;
            }
            .logbt2{
                width: 100%;
            }
        }
        .just_register_btn{
            /* height: 49px;
            font-size: 15px;
            font-weight:bold;
            border-radius: 10px;
            border:1px solid #c4c4c4; */
            width: 222px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
    </style>
    <!-- Breadcumb Area -->
    <!-- <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>회원가입</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">회원가입</li>
                    </ol>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Breadcumb Area -->

    <!-- Login Area -->
    <div class="bigshop_reg_log_area section_padding_100_50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mx-auto">
                    <div class="login_form mb-50 text-center mx-auto" style="background:#fff; max-width: 430px">

                            <div class="font-weight-normal" style="font-size:30px; margin-bottom:50px;">회원가입</div>

                            <p>안녕하세요, 리닷입니다.</p>

                            <div class="btn-secondary btn just_register_btn w-100" onclick="location.href='/register.php'" style="margin-bottom:100px;">
                                가입하기
                            </div>

                            <div class="d-flex mt-5 justify-content-center">
                                <div id="naver_id_login"></div>

                                <div class="" id="message">

                                </div>
                                <div id="naverIdLogin" onclick="setLoginStatus()"></div>
                                <!-- <div id="naverLogout" onclick="naverLogout()">네이버로그아웃</div> -->
                            </div>

                            <div class="d-flex mt-3 justify-content-center">
                                <a id="kakao-login-btn"></a>
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Login Area End -->

<script src="https://developers.kakao.com/sdk/js/kakao.min.js"></script>

<!-- <script type="text/javascript" src="https://static.nid.naver.com/js/naverLogin_implicit-1.0.3.js" charset="utf-8"></script> -->
<script src="https://static.nid.naver.com/js/naveridlogin_js_sdk_2.0.2.js" charset="utf-8"></script>

<script type="text/javascript">

var buyon = '<?php echo $buyon; ?>';
var product = JSON.parse(sessionStorage.getItem("product"));
console.log('product', product);

if(buyon){
    if(product){
        $('.buy_no_reg').removeClass('d-none');
    }
}



function goLogin(){
    var u_id = $('#u_id').val();
    var u_pwd = $('#u_pwd').val();
    if(!u_id){
        alert('아이디를 입력해주세요.');
        $('#u_id').focus();
    }else if(!u_pwd){
        alert('비밀번호를 입력해주세요.');
        $('#u_pwd').focus();
    }else{
        checkLogin(u_id,u_pwd);
    }
}

function checkLogin(u_id,u_pwd){
    var user_info = {
        u_id:u_id,
        u_pw:u_pwd,
    };

    $.ajax({
        type: "POST",
        url: SERVER_AP + '/user/login',
        cache: false,
        dataType : 'json',
        data:{
            obj : user_info
        },
        success: function (data) {
            if(data.result == 'not_found'){
                alert('존재하지 않는 아이디 입니다.');

            }else if(data.result == 'wrong_pwd'){
                alert('비밀번호를 확인해 주세요.')

            }else{
                var obj = data.result;
                sessionSet(obj);
            }
        }, error:function(request,status,error){
            console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
        },
    });
}
function sessionSet(dataUser){
    var isAutoLogin = ""
    $.ajax({
        type: "POST",
        url:  '/login_ok.php',
        cache: false,
        data:{
            user_info:JSON.stringify(dataUser),
        },
        success: function (data) {
            alert(dataUser.u_name + '님의 로그인이 성공하였습니다.');
            userNumberUpdate(dataUser.u_seq, 'u_come_cnt')
            location.href="/";
        }, error:function(request,status,error){
            console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
        },
    });
}

function sessionSet_naver(dataUser){
    var isAutoLogin = ""
    $.ajax({
        type: "POST",
        url:  '/login_ok.php',
        cache: false,
        data:{
            user_info:JSON.stringify(dataUser),
        },
        success: function (data) {
            alert(dataUser.u_name + '님의 로그인이 성공하였습니다.');
            userNumberUpdate(dataUser.u_seq, 'u_come_cnt')
        }, error:function(request,status,error){
            console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
        },
    });
}

$(".enterput").on("keyup",function(key){
  if(key.keyCode==13) {
      goLogin();
  }
});

function userNumberUpdate(u_seq, field){
    $.ajax({
      url : SERVER_AP+'/admin/common/user_num_update',
      type: "post",
      cache: false,
      async:false,
      data: {
          u_seq:u_seq,
          field:field,
      },
      success : function(data) {},
      error : function(xhr, textStatus, errorThrown){
          console.log(xhr, textStatus, errorThrown);
      }
    });
}





///kakao

Kakao.init('f4a147eb3472a6ed818e355288e4d0c4');
Kakao.Auth.createLoginButton({
  container: '#kakao-login-btn',
  success: function(authObj) {
    Kakao.API.request({
      url: '/v2/user/me',
      success: function(result) {
          console.log('result', result.kakao_account.phone_number.replace(/-/g, ''));

          var number = result.kakao_account.phone_number.replace(/-/g, '');
          number = number.replace('+82 ', '0');
          console.log('number', number);

          duplickCheck2(result.kakao_account.profile.nickname,number);
        let obj = {
            u_id : result.id,
            u_name : result.kakao_account.profile.nickname,
            u_email : result.kakao_account.email || '',
            u_type : '카카오계정',
            u_birth : result.kakao_account.birthday || '',
            u_phone : number,
            u_birth_type : result.kakao_account.profile.birthday_type && result.kakao_account.profile.birthday_type == "SOLAR" ? '양력' : '음력',
            u_date : currentDate(),
        }

          if(dupliCk2){
              $.ajax({
                  type: "POST",
                  url: SERVER_AP + '/user/dupli',
                  cache: false,
                  async: false,
                  data:{
                      u_id :result.id,
                  },
                  success: function (data) {
                      if(data.type == 'success'){
                          $.ajax({
                              type: "POST",
                              url: SERVER_AP + '/user/insert',
                              cache: false,
                              async: false,
                              data:{
                                  user_info :obj,
                              },
                              success: function (data) {
                                  alert(data.message)
                                  let nobj = {
                                      ...obj,
                                      u_seq : data.insertId,
                                  }
                                  sessionSet(nobj);

                              }, error:function(request,status,error){
                                  console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
                              },
                          });
                      }else{
                          //이미있는 아이디
                          var user_info = {
                              u_id:result.id,
                          };

                          $.ajax({
                              type: "POST",
                              url: SERVER_AP + '/user/login',
                              cache: false,
                              dataType : 'json',
                              data:{
                                  obj : user_info
                              },
                              success: function (data) {
                                  if(data.result == 'not_found'){
                                      alert('존재하지 않는 아이디 입니다.');
                                  }else{
                                      var obj = data.result;
                                      sessionSet(obj);
                                  }
                              }, error:function(request,status,error){
                                  console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
                              },
                          });
                      }

                  }, error:function(request,status,error){
                      console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
                  },
              });
          }else{
              alert('이미 가입하신 이력이 존재합니다');
              location.href='/login.php'
          }


      },
      fail: function(error) {
        alert(
          'login success, but failed to request user information: ' +
            JSON.stringify(error)
        )
      },
    })
  },
  fail: function(err) {
    alert('failed to login: ' + JSON.stringify(err))
  },
})
      //naver
      const naverLogin = new naver.LoginWithNaverId(
  			{
  				clientId: "mGvpKEJoPS5Sd3ZjIsir",
  				callbackUrl: "http://lidot.co.kr/naver_login_success.php",
  				loginButton: {color: "green", type: 3, height: 40}
  			}
  		);

     naverLogin.init();



       //기존

      // function setLoginStatus(){
      //     naverLogin.getLoginStatus(function (status) {
      //          if (status) {
      //              // const nickName=naverLogin.user.getNickName();
      //              // const age=naverLogin.user.getAge();
      //              // const birthday=naverLogin.user.getBirthday();
      //              //
      //              // if(nickName===null||nickName===undefined ){
      //              //       alert("별명이 필요합니다. 정보제공을 동의해주세요.");
      //              //       naverLogin.reprompt();
      //              //       return ;
      //              //  }
      //
      //              let obj = {
      //                  u_id : naverLogin.user.id,
      //                  u_name : naverLogin.user.name,
      //                  u_email : naverLogin.user.email,
      //                  u_type : '네이버계정',
      //                  u_birth : naverLogin.user.birthyear +'-'+ naverLogin.user.birthday,
      //                  u_birth_type : '양력',
      //                  u_phone: naverLogin.user.mobile.replace(/-/gi,""),
      //                  u_date : currentDate(),
      //              }
      //
      //              $.ajax({
      //                  type: "POST",
      //                  url: SERVER_AP + '/user/dupli',
      //                  cache: false,
      //                  async: false,
      //                  data:{
      //                      u_id :naverLogin.user.id,
      //                  },
      //                  success: function (data) {
      //                      if(data.type == 'success'){
      //                          $.ajax({
      //                              type: "POST",
      //                              url: SERVER_AP + '/user/insert',
      //                              cache: false,
      //                              async: false,
      //                              data:{
      //                                  user_info :obj,
      //                              },
      //                              success: function (data) {
      //                                  alert(data.message)
      //                                  let nobj = {
      //                                      ...obj,
      //                                      u_seq : data.insertId,
      //                                  }
      //                                  sessionSet_naver(nobj);
      //
      //                              }, error:function(request,status,error){
      //                                  console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
      //                              },
      //                          });
      //                      }else{
      //                          //이미있는 아이디
      //                          var user_info = {
      //                              u_id:naverLogin.user.id,
      //                          };
      //
      //                          $.ajax({
      //                              type: "POST",
      //                              url: SERVER_AP + '/user/login',
      //                              cache: false,
      //                              dataType : 'json',
      //                              data:{
      //                                  obj : user_info
      //                              },
      //                              success: function (data) {
      //                                  if(data.result == 'not_found'){
      //                                      alert('존재하지 않는 아이디 입니다.');
      //                                  }else{
      //                                      var obj = data.result;
      //                                      sessionSet_naver(obj);
      //                                  }
      //                              }, error:function(request,status,error){
      //                                  console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
      //                              },
      //                          });
      //                      }
      //
      //                  }, error:function(request,status,error){
      //                      console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
      //                  },
      //              });
      //        	}else{
      //               console.log("@@@@@@@@@@@@@@@");
      //           }
      //        });
      //   }

    function naverLogout(){
        naverLogin.logout();
        location.replace("http://lidot.co.kr/login.php");
    }

    function duplickCheck2(name,mobile){

        $.ajax({
            type: "POST",
            url: SERVER_AP + '/user/dupli2',
            cache: false,
            async: false,
            data:{
                u_name :name,
                u_phone :mobile,
            },
            success: function (data) {
                if(data.type == 'success'){
                    dupliCk2 = true
                }else{
                    dupliCk2 = false
                }


            }, error:function(request,status,error){
                console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
            },
        });

    }


    $("#kakao-login-btn img").attr('src','/img/kakao_join.png')

    $("#kakao-login-btn img").hover(function(){
        $("#kakao-login-btn img").attr('src','/img/kakao_join.png')
    }, function(){
        $("#kakao-login-btn img").attr('src','/img/kakao_join.png')
    })

    $("#naverIdLogin_loginButton img").attr('src','/img/naver_join.png')

</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
