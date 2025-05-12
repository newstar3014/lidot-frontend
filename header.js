/*
// _header.php 에 스크립트가 너무 길어지므로 이곳과 나눔
*/


function openLogin(){
    console.log('openLogin');
    
    if(isLogin){
        location.href = `/z/mypage`;
    }else{
        new bootstrap.Modal(document.getElementById('login')).show();
    }
}

function goLogin(){
    let login_id = $('#modal-login-login_id').val();
    let pwd = $('#modal-login-pwd').val();

    if(!login_id || !pwd){
        alerts('warning', '로그인 아이디와 비밀번호를 모두 입력해주세요.');
        return;
    }
    
    ajaxCall('/user/login', { login_id, pwd, guest_uuid }, function(data) {

        if(data.type == 'not_found' || data.type == 'wrong_pw'){
            alerts('warning', '아이디 또는 비밀번호를 다시 확인해주세요.');
        }else if(data.type == 'waiting'){
            alerts('warning', '관리자가 가입정보 확인중에 있습니다.<br>승인이 완료되면 알림을 보내드려요.');
        }else{
            console.log(data);
            
            $.ajax({
                type: "POST",
                url: '/z/account/login_ok.php',
                cache: false,
                data: {
                    obj: JSON.stringify(data[0])
                },
                success: function(data2) {
                    const modalEl = document.getElementById('login');
                    const modalInstance = bootstrap.Modal.getInstance(modalEl);
                    if (modalInstance) modalInstance.hide();
                    alerts("success", `${data[0].name}님, 어서오세요!<br>즐거운 쇼핑 되시기 바랍니다.`, () => {
                        location.reload();
                    });
                },
                error: function(request, status, error) {
                    console.log(error);
                },
            });
        }
    });
}

function goLoginSocial(social){

    console.log("social : ", social);
    under();

    /* naver */
    if(social == 'N'){

        console.log("네이버");

        // const naverLogin = new naver.LoginWithNaverId({
        //     clientId: "mGvpKEJoPS5Sd3ZjIsir",
        //     callbackUrl: "http://lidot.co.kr/naver_login_success.php",
        //     loginButton: {
        //         color: "green",
        //         type: 3,
        //         height: 40
        //     }
        // });

        // naverLogin.init();
        // console.log('navvv', naverLogin);

    } /* IF END */


    if(social == 'K'){

        console.log("카카오");
        
    }
}





// // kakao
// Kakao.init('f4a147eb3472a6ed818e355288e4d0c4');
// Kakao.Auth.createLoginButton({
//     container: '#kakao-login-btn',
//     success: function(authObj) {
//         Kakao.API.request({
//             url: '/v2/user/me',
//             success: function(result) {
//                 console.log('result', result.kakao_account.phone_number.replace(/-/g, ''));

//                 var number = result.kakao_account.phone_number.replace(/-/g, '');
//                 number = number.replace('+82 ', '0');
//                 console.log('number', number);

//                 duplickCheck2(result.kakao_account.profile.nickname, number);
//                 let obj = {
//                     u_id: result.id,
//                     u_name: result.kakao_account.profile.nickname,
//                     u_email: result.kakao_account.email || '',
//                     u_type: '카카오계정',
//                     u_birth: result.kakao_account.birthday || '',
//                     u_phone: number,
//                     u_birth_type: result.kakao_account.profile.birthday_type && result
//                         .kakao_account.profile.birthday_type == "SOLAR" ? '양력' : '음력',
//                     u_date: currentDate(),
//                 }

//                 if (dupliCk2) {
//                     $.ajax({
//                         type: "POST",
//                         url: SERVER_AP + '/user/dupli',
//                         cache: false,
//                         async: false,
//                         data: {
//                             u_id: result.id,
//                         },
//                         success: function(data) {
//                             if (data.type == 'success') {
//                                 $.ajax({
//                                     type: "POST",
//                                     url: SERVER_AP + '/user/insert',
//                                     cache: false,
//                                     async: false,
//                                     data: {
//                                         user_info: obj,
//                                     },
//                                     success: function(data) {
//                                         alert(data.message)
//                                         let nobj = {
//                                             ...obj,
//                                             u_seq: data.insertId,
//                                         }
//                                         sessionSet(nobj);

//                                     },
//                                     error: function(request, status,
//                                         error) {
//                                         console.log("code:" + request
//                                             .status + "\n" +
//                                             "message:" + request
//                                             .responseText + "\n" +
//                                             "error:" + error);
//                                     },
//                                 });
//                             } else {
//                                 //이미있는 아이디
//                                 var user_info = {
//                                     u_id: result.id,
//                                 };

//                                 $.ajax({
//                                     type: "POST",
//                                     url: SERVER_AP + '/user/login',
//                                     cache: false,
//                                     dataType: 'json',
//                                     data: {
//                                         obj: user_info
//                                     },
//                                     success: function(data) {
//                                         if (data.result ==
//                                             'not_found') {
//                                             alert('존재하지 않는 아이디 입니다.');
//                                         } else {
//                                             var obj = data.result;
//                                             sessionSet(obj);
//                                         }
//                                     },
//                                     error: function(request, status,
//                                         error) {
//                                         console.log("code:" + request
//                                             .status + "\n" +
//                                             "message:" + request
//                                             .responseText + "\n" +
//                                             "error:" + error);
//                                     },
//                                 });
//                             }

//                         },
//                         error: function(request, status, error) {
//                             console.log("code:" + request.status + "\n" +
//                                 "message:" + request.responseText + "\n" +
//                                 "error:" + error);
//                         },
//                     });
//                 } else {
//                     //alert('이미 가입하신 이력이 존재합니다');
//                     //이미있는 아이디
//                     var user_info = {
//                         u_id: result.id,
//                     };

//                     $.ajax({
//                         type: "POST",
//                         url: SERVER_AP + '/user/login',
//                         cache: false,
//                         dataType: 'json',
//                         data: {
//                             obj: user_info
//                         },
//                         success: function(data) {
//                             if (data.result == 'not_found') {
//                                 $.ajax({
//                                     type: "POST",
//                                     url: SERVER_AP + '/user/dupli2',
//                                     cache: false,
//                                     async: false,
//                                     data: {
//                                         u_name: result.kakao_account.profile
//                                             .nickname,
//                                         u_phone: number.replace(/-/gi, ""),
//                                     },
//                                     success: function(data) {
//                                         if (data.type == 'fail') {
//                                             alert(
//                                                 `${data.u_type}으로 가입하신 이력이 존재합니다.`
//                                             );
//                                             location.href = '/login'
//                                         }
//                                     },
//                                     error: function(request, status,
//                                         error) {
//                                         console.log("code:" + request
//                                             .status + "\n" +
//                                             "message:" + request
//                                             .responseText + "\n" +
//                                             "error:" + error);
//                                     },
//                                 });
//                             } else {
//                                 var obj = data.result;
//                                 sessionSet(obj);
//                             }
//                         },
//                         error: function(request, status, error) {
//                             console.log("code:" + request.status + "\n" +
//                                 "message:" + request.responseText + "\n" +
//                                 "error:" + error);
//                         },
//                     });
//                     //location.href='/login'
//                 }


//             },
//             fail: function(error) {
//                 alert(
//                     'login success, but failed to request user information: ' +
//                     JSON.stringify(error)
//                 )
//             },
//         })
//     },
//     fail: function(err) {
//         alert('failed to login: ' + JSON.stringify(err))
//     },
// })

function goLogout(){
    confirms("question", "로그아웃 하시겠습니까?<br>확인 버튼을 누르면 즉시 로그아웃 됩니다.", () => {
		location.href = `/z/account/logout.php`;
	});
}


// PV 저장, 상품조회의 경우 seq까지 저장
if(now_url != '/z/product/detail'){
    loggingSave('PV');

    // 최근 24시간 이내 접속 이력이 없을 경우 UV값도 저장
    const lastUV = localStorage.getItem('lastUV');
    const now = Date.now();
    if (!lastUV || now - parseInt(lastUV) > 24 * 60 * 60 * 1000) {
        loggingSave('UV');
        localStorage.setItem('lastUV', now.toString());
    }
}else{
    let urlParams = new URLSearchParams(window.location.search);
    let product_seq = urlParams.get('seq');
    loggingSave('PV', product_seq);
}

function setHeaderTopbar(){
    // 최상단 검은바 문구영역 셋팅 및 노출여부 제어
    var closedTime = localStorage.getItem('topbarClosed');
    var now = new Date().getTime();

    if (!closedTime || now - closedTime > 86400000) {
        let topBarTextArray = cfLoad('type', '탑바문구');
        let str = ``;

        const value1 = topBarTextArray.find(item => item.name === "공통1")?.value || '';
        const value2 = topBarTextArray.find(item => item.name === "공통2")?.value || '';
        const value3 = topBarTextArray.find(item => item.name === "사업자")?.value || '';

        if(my_obj.type == 'B'){
            for (let i = 0; i < 10; i++) {
                str += `<div class="announcement-bar-item"><p>${value1}</p></div>`;
                str += `<div class="announcement-bar-item"><p>${value3}</p></div>`;
                str += `<div class="announcement-bar-item"><p>${value2}</p></div>`;
            }
        }else{
            for (let i = 0; i < 10; i++) {
                str += `<div class="announcement-bar-item"><p>${value1}</p></div>`;
                str += `<div class="announcement-bar-item"><p>${value2}</p></div>`;
            }
        }
        $(`#header-topbar-item-wrap`).html(str);
        
        $('#header-topbar').removeClass('d-none'); // 닫은 적이 없거나 24시간 경과 시 보이기
    }
    
    $('.close-announcement-bar').on('click', function(){
        localStorage.setItem('topbarClosed', new Date().getTime());
    });
}

function setHeaderCartCount(){
    ajaxCall('/cart/count', { user_type: getUserType(), send_value: getSendValue() }, function(data) {
        $('.cart-count').html(data[0].cnt);
    });
}

function getUserType(){
    return isLogin ? 'member' : 'guest';
}
function getSendValue(){
    return isLogin ? my_obj.user_seq : guest_uuid;
}