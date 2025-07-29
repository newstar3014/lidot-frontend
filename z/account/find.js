let timerInterval;

function sendAuth(){
    let name = $('#name').val().trim();
    let phone = $('#phone').val().trim().replace(/-/g, '');
    if(!name){ alerts("warning", "이름을 입력하세요."); return; }
    if(!phone){ alerts("warning", "휴대폰 번호 입력하세요."); return; }

    let whereArray = [
        {whereField:'name',whereValue:name},
        {whereField:'phone',whereValue:phone}
    ]
    ajaxCall('/common/list/whereArray', { 
        table:'users',
        whereArray
    }, function(data) {
        console.log('data : ', data);
        
        if(data.length > 0){
            $('#name').attr('data-login_id', data[0].login_id);
            $('#name').attr('data-seq', data[0].seq);
            sendMessage({to:phone});
        }else{
            alerts("warning", '일치하는 회원정보가 존재하지 않습니다.');
        }
    });

    
}

function sendMessage(obj){
    ajaxCall('/send_sms/smsSend', { 
        obj
    }, function(data) {
        console.log('sendMessage data : ', data);
        if(data.type == 'success'){
            alerts("success", "인증번호가 발송되었습니다.");
            $('#timer').attr('data-auth_code', data.auth_code);
            $('#auth-wrap').show();
            $('#send-auth-btn').hide();
            $('#check-auth-btn').show();
            $('#timer').show();
            startTimer(180);
        }else{
            alerts("warning", "인증번호 발송에 실패했습니다. 관리자에게 문의해주세요.");
        }
        

    });
}
function checkAuth(){
    let auth_code = $('#timer').attr('data-auth_code');
    if($('#auth_code').val() == auth_code){

        if(window.location.href.includes('find_id')){
            $('.result').html(`
                회원님의 아이디는 <b>${$('#name').attr('data-login_id')}</b> 입니다.<br><br>
                <button class="find-btn" onclick="openLogin();" style="margin-top:15px; width: 200px;">
                    로그인 하러가기
                </button>`).show();
        }else{
            $('.result').html(`
                회원님의 아이디는 <b>${$('#name').attr('data-login_id')}</b> 입니다.<br>`).show();
            $('.find-id-wrapper').addClass('d-none');
            $('.find-password-wrapper').removeClass('d-none');
        }
        

        $('#auth-wrap').hide();
        $('#check-auth-btn').hide();
        $('#timer').hide();
        $('#auth_code').val('');
    }else{
        alerts("warning", "인증번호가 일치하지 않습니다.");
    }
}


function startTimer(duration){
    clearInterval(timerInterval);
    let timer = duration, minutes, seconds;
    $('#timer').text(formatTime(timer));

    timerInterval = setInterval(function(){
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);
        $('#timer').text(formatTime(timer));

        if (--timer < 0) {
            clearInterval(timerInterval);
            alerts("warning", "인증시간이 만료되었습니다. 다시 시도해주세요.");
            $('#check-auth-btn').hide();
            $('#send-auth-btn').show();
            $('#auth-wrap').hide();
            $('#timer').hide();
            $('#auth_code').val('');
        }
    }, 1000);
}

function formatTime(t){
    let minutes = String(parseInt(t / 60)).padStart(2, '0');
    let seconds = String(t % 60).padStart(2, '0');
    return `${minutes}:${seconds}`;
}