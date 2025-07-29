<? include_once $_SERVER["DOCUMENT_ROOT"].'/_header.php'; ?>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/z/account/logout_only.php'; ?>
<link rel="stylesheet" href="/css/find.css">

<div id="common-page-title"></div>

<div class="find-id-wrapper"></div>

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


<script src="find.js"></script>
<script>

    $(function() {
        console.log('ㅡ PAGE READY');
        setPageTitle('비밀번호 재설정', 'password reset');
        renderFindForm();
    });

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