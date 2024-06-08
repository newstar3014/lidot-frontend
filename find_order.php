<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>
<link rel="stylesheet" href="css/pages/shop_main/shop_main.css">

<!-- Breadcumb Area -->
<!-- <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>비회원 주문조회</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">비회원 주문조회</li>
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
                <div class="login_form mb-50" style="background:#fff;">
                    <h5 class="mb-3">비회원 주문조회</h5>
                    <div class="form-group">
                        <input type="email" class="form-control enterput" id="u_id" placeholder="이름">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control enterput" id="u_phone" placeholder="핸드폰번호( '-' 제외 )">
                    </div>
                    <div class="form-group mb-5">
                        <input type="password" class="form-control enterput" id="u_pwd" placeholder="Password">
                    </div>
                    <!-- <div class="form-check">
                                <div class="custom-control custom-checkbox mb-3 pl-1">
                                    <input type="checkbox" class="custom-control-input" id="customChe">
                                    <label class="custom-control-label" for="customChe">아이디 저장</label>
                                </div>
                            </div> -->
                    <div class="d-flex">
                        <button class="btn btn-secondary w-100" onclick="findOrderData();"
                            style="height:60px">조회</button>
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
function goLogin() {
    var u_id = $('#u_id').val();
    var u_pwd = $('#u_pwd').val();
    if (!u_id) {
        alert('아이디를 입력해주세요.');
        $('#u_id').focus();
    } else if (!u_pwd) {
        alert('비밀번호를 입력해주세요.');
        $('#u_pwd').focus();
    } else {
        checkLogin(u_id, u_pwd);
    }
}


function findOrderData() {
    var obj = new Object();
    obj.o_nonuser_name = $('#u_id').val();
    obj.o_phone = $('#u_phone').val();
    obj.o_password = $('#u_pwd').val()

    var u_id = $('#u_id').val();
    var u_pwd = $('#u_pwd').val();
    var u_phone = $('#u_phone').val();

    if (!u_id) {
        alert('아이디를 입력해주세요.');
        $('#u_id').focus();
    } else if (!u_pwd) {
        alert('비밀번호를 입력해주세요.');
        $('#u_pwd').focus();
    } else if (!u_phone) {
        alert('번호를 입력해주세요.');
        $('#u_phone').focus();
    }

    console.log('obj', obj);
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        data: {
            table: 'order_list',
            common: obj,
        },
        success: function(data) {
            console.log('data', data);
            if (data.length != 0) {
                setCookie('name', $('#u_id').val(), '3');
                setCookie('phone', $('#u_phone').val(), '1');
                setCookie('password', $('#u_pwd').val(), '1');
                location.href = '/find_order_user.php'
            } else {
                alert('조회 가능한 주문이 없습니다.')
            }
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}


$(".enterput").on("keyup", function(key) {
    if (key.keyCode == 13) {
        findOrderData();
    }
});

function setCookie(name, value, exp) {
    var date = new Date();
    date.setTime(date.getTime() + exp * 24 * 60 * 60 * 1000);
    document.cookie = name + '=' + escape(value) + ';expires=' + date.toUTCString() + ';path=/';
};
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>