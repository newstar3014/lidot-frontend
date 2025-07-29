<? include_once $_SERVER["DOCUMENT_ROOT"].'/_header.php'; ?>
<link rel="stylesheet" href="/css/find.css">

<style>
.result{
    display:none !important;
}
</style>
<div id="common-page-title"></div>

<!-- page-cart -->
<section class="flat-spacing-11">
    <div class="container">
        <div class="row">
            <? include_once '_nav.php'; ?>
            <div class="col-lg-9">
                <!-- 페이지 영역 -->
                
                <div class="find-id-wrapper">
                    <form class="find-id-form">
                        <div class="form-group d-none">
                            <label for="name">이름</label>
                            <input type="text" id="name" placeholder="이름을 입력하세요">
                        </div>
                        <div class="form-group d-none">
                            <label for="phone">휴대폰 번호</label>
                            <input type="text" id="phone" placeholder="휴대폰 번호를 입력하세요">
                        </div>
                        <div class="form-group" id="auth-wrap" style="display:none;">
                            <label for="auth_code">인증번호</label>
                            <div class="position-relative">
                                <input class="pe-4" type="text" id="auth_code" placeholder="인증번호 6자리 입력">
                                <span id="timer" style="color:red; font-weight: bold; display:none;">03:00</span>
                            </div>
                            
                        </div>

                        <button type="button" id="send-auth-btn" class="find-btn" onclick="sendAuth();">인증번호 발송</button>
                        <button type="button" id="check-auth-btn" class="find-btn" style="display:none;" onclick="checkAuth();">인증번호 확인</button>
                    </form>
                    <div class="result" style="margin-top:20px; font-weight: bold;"></div>
                </div>

                <div class="find-password-wrapper d-none">
                    <div class="result mt-0" style="margin-bottom:20px; font-weight: bold;"></div>
                    <form class="find-password-form">
                        <div class="form-group">
                            <label for="name">비밀번호(8자이상 20자이하, 영문+숫자+특수문자 조합)</label>
                            <input type="password" id="pwd" placeholder="비밀번호를 입력하세요">
                        </div>
                        <div class="form-group">
                            <label for="phone">비밀번호 확인</label>
                            <input type="password" id="pwd_check" placeholder="비밀번호 확인을 입력하세요">
                        </div>

                        <button id="password-btn" type="button" class="find-btn" onclick="changePwd();">비밀번호 변경</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-cart -->


<script src="/z/account/find.js"></script>
<script>
    $(function() {
        console.log('ㅡ PAGE READY');
        $('#mypage-pw_change').addClass('active');
        setPageTitle('비밀번호 변경', 'password change');
        setInfo();
    });


    function setInfo(){
        $('#name').val(my_obj.name);
        $('#phone').val(my_obj.phone);
    }

    function changePwd(){
        let pwd = $('#pwd').val();
        let pwd_check = $('#pwd_check').val();

        if(!pwd){ alerts("warning", "비밀번호를 입력하세요."); return; }
        if(!pwd_check){ alerts("warning", "비밀번호 확인을 입력하세요."); return; }
        if(pwd != pwd_check){ alerts("warning", "비밀번호와 비밀번호 확인을 동일하게 입력하세요."); return; }

        if(!validPw(pwd)){ alerts('warning', '비밀번호는 8자이상 20자이하, 영문+숫자+특수문자를 조합해 주세요.'); return; }

         ajaxCall('/user/update/pw', { 
            seq:$('#name').attr('data-seq'),
            pw:pwd
        }, function(data) {
            console.log('data : ', data);
            $('#password-btn').addClass('d-none');
            alerts("success", "성공적으로 비밀번호가 재설정 되었습니다.", () => {
                openLogin();
            });
        });
    }
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>