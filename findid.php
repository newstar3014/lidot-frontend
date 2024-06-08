<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php';
$type = $_GET['type'];
?>
    <link rel="stylesheet" href="css/pages/shop_main/shop_main.css">
    <style media="screen">
        #naverIdLogin{
            width: 220px !important;
        }
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
    </style>


    <!-- Login Area -->
    <div class="bigshop_reg_log_area section_padding_100_50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mx-auto">
                    <div class="login_form mb-50" style="background:#fff;">
                        <h5 class="mb-3" id="title"></h5>

                        <div class="form-group find_id">
                            <input type="text" class="form-control enterput" id="u_id" placeholder="아이디">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control enterput" id="u_name" placeholder="이름">
                        </div>
                        <div class="form-group mb-5">
                            <input type="number" class="form-control enterput" id="u_phone" placeholder="핸드폰번호('-' 제외)">
                        </div>

                        <div class="d-flex">
                            <button type="submit" onclick="goFind()" class="btn btn-secondary logbt1 w-100" style="height:60px;">확인</button>
                        </div>
                    </div>

                    <div class="border p-3 px-4 d-none" style="background:#fafafa;" id="text_box"></div>

                    <div class="border p-3 px-4 d-none login_form" style="background:#fafafa;" id="password_box">
                        <div class="form-group">
                            <input type="password" class="form-control enterput" id="u_pwd" placeholder="새 비밀번호">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control enterput" id="u_pwd2" placeholder="비밀번호 확인">
                        </div>
                        <div class="d-flex">
                            <span class="btn btn-secondary mx-auto" onclick="changePassword()">비밀번호 변경</span>
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

var type = '<?php echo $type; ?>';
var u_seq = ''

$(function(){
    if(type == 'id'){
        $("#title").text('아이디 찾기')
        $(".find_id").remove()
    }else{
        $("#title").text('비밀번호 찾기')
    }
})

function goFind(){

    if(type != 'id' && !$("#u_id").val()){
        alert("아이디를 입력해주세요.")
        return
    }

    if(!$("#u_name").val()){
        alert("이름을 입력해주세요.")
        return
    }

    if(!$("#u_phone").val()){
        alert("핸드폰번호를 입력해주세요.")
        return
    }

    if(confirm("찾으시겠습니까?")){
        $.ajax({
          url : SERVER_AP+'/user/find',
          type: "post",
          cache: false,
          data: {
              u_id:$("#u_id").val(),
              u_name:$("#u_name").val(),
              u_phone:$("#u_phone").val(),
              type:type,
          },
          success : function(data) {
              if(type == 'id'){
                   $("#text_box").removeClass('d-none')
                   if(data.length == 0){
                       $("#text_box").text(`아이디가 존재하지 않습니다.`)
                   }else{
                       $("#text_box").text(`${data.u_name}님의 아이디는 '${data.u_id}' 입니다.`)
                   }
              }else{
                  if(data.length == 0){
                      $("#text_box").removeClass('d-none')
                      $("#text_box").text(`아이디가 존재하지 않습니다.`)
                  }else{
                      $("#text_box").addClass('d-none')
                      $("#password_box").removeClass('d-none')
                      u_seq = data.u_seq
                  }
              }

          },
          error : function(xhr, textStatus, errorThrown){
              console.log(xhr, textStatus, errorThrown);
          }
        });
    }
}

function changePassword(){
    if(!$("#u_pwd").val()){
        alert("새 비밀번호를 입력해주세요.")
        return
    }

    if(!$("#u_pwd2").val()){
        alert("비밀번호 확인을 입력해주세요.")
        return
    }

    if($("#u_pwd").val() != $("#u_pwd2").val()){
        alert("새 비밀번호와 비밀번호 확인을 똑같이 입력해주세요.")
        return
    }

    if(confirm("변경 하시겠습니까?")){
        $.ajax({
          url : SERVER_AP+'/user/newpassword',
          type: "post",
          cache: false,
          data: {
              u_pwd:$("#u_pwd").val(),
              u_seq:u_seq,
          },
          success : function(data) {
              if(data == 'success'){
                  alert("비밀번호 변경에 성공하였습니다!")
                  location.href = 'login.php'
              }
          },
          error : function(xhr, textStatus, errorThrown){
              console.log(xhr, textStatus, errorThrown);
          }
        });
    }
}


</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
