console.log('ㅡㅡㅡ COMMON.JS READY');

const SERVER_IP = 'https://lidot.co.kr:3001';
const DEFAULT_PPP = 12;

const MSG_FAIL = '오류가 발생하였습니다. 잠시 후 새로고침하여 다시 시도해주세요. 오류가 계속되면 고객센터에 문의해주시기 바랍니다.';
const MSG_SUCCESS = '성공적으로 처리되었습니다.';

$(function() {
	$('input').attr('autocomplete', 'off');
});

function goLogout(){
    confirms('question', '로그아웃', '로그아웃하시겠습니까?', ()=>{
        location.href = `/logout`;
    });
}

function ajaxCall(url, param = {}, callBack = null, _async = false) {
    let result = null;

    $.ajax({
        type: "POST",
        url: SERVER_IP + url,
        cache: false,
        async: _async,
        data: param,
        success: function (data) {
            if (callBack && typeof callBack === "function") {
                callBack(data);
            }
            result = data;
        },
        error: function (request, status, error) {
            alerts('error', MSG_FAIL);
            if (callBack && typeof callBack === "function") {
                callBack(null);
            }
            result = null;
        },
    });

    return result;
}


function getSeq(table, seq) {
    return ajaxCall('/common/seq', { table: table, seq: seq });
}


// 공통 중복검사
function goDupli(_table, _field, _value){
    var res = true;
    ajaxCall('/common/list', { table: _table, whereField: _field, whereValue: _value }, function(data) {
        if(data.length > 0) res = false;
    });
    return res;
}

function isPositiveInteger(value) {
    // 정규식: 1 이상의 정수
    const regex = /^[1-9]\d*$/;
    return regex.test(value);
}

function isPositiveInteger99(value) {
    // 정규식: 1에서 99까지의 정수
    const regex = /^[1-9]$|^[1-9]\d$/;
    return regex.test(value);
}

function validPhone(phoneNumber) {
	const phoneRegex = /^010-?\d{4}-?\d{4}$/;
	return phoneRegex.test(phoneNumber);
}

function validId(str){
    // 정규식: 영문숫자만 사용, 4자이상 20자이하
	const regex = /^[a-z0-9]{4,20}$/i;
	return regex.test(str);
}

function validBizNumber(str) {
    const regex = /^\d{3}-\d{2}-\d{5}$/;
    return regex.test(str);
}

function hasNumber(str) {
	const regex = /\d+/;
	return regex.test(str);
}

function validPw(password) {
    /*
        비밀번호 정규식검사
        길이 8자 이상 ~ 20자 이내
        영문자+숫자+특수문자 모두 필수
    */
	const passwordRegex = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()_+=\-]).{8,20}$/;
	return passwordRegex.test(password);
}

function validEmail(str) {
    const regex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i;
    return regex.test(str);
}


// SweetAlert2 alerts 함수 (확인 버튼 하나)
function alerts(type, html, confirmCallback, confirmButtonText = '확인') {
	Swal.fire({
		icon: type, // 알림 유형 ('info', 'warning', 'error', 'success', 'question')
		html: html,   // 다이얼로그 내용
		showCancelButton: false, // 취소 버튼 표시 안 함
		confirmButtonText: confirmButtonText, // 확인 버튼 텍스트
        allowOutsideClick: false,
        showClass: {
            popup: `
                animate__animated
                animate__fadeIn
                animate__faster
            `
        },
        hideClass: {
            popup: `
                animate__animated
                animate__fadeOut
                animate__faster
            `
        }
	}).then((result) => {
		if (result.isConfirmed && typeof confirmCallback === 'function') {
			confirmCallback(); // 확인 버튼 클릭 시 콜백 함수 실행
		}
	});
}

// SweetAlert2 confirms 함수 (확인 및 취소 버튼)
function confirms(type, html, confirmCallback, cancelCallback, confirmButtonText = '확인', cancelButtonText = '취소') {

console.log('confirms 인자 확인:', {
  type,
  html,
  confirmCallback,
  cancelCallback,
  confirmButtonText,
  cancelButtonText
});
    

	Swal.fire({
		icon: type, // 알림 유형 ('info', 'warning', 'error', 'success', 'question')
		html: html,   // 다이얼로그 내용
		showCancelButton: true, // 취소 버튼 표시
		confirmButtonText: confirmButtonText, // 확인 버튼 텍스트
		cancelButtonText: cancelButtonText,    // 취소 버튼 텍스트
        allowOutsideClick: false,
        showClass: {
            popup: `
                animate__animated
                animate__fadeIn
                animate__faster
            `
        },
        hideClass: {
            popup: `
                animate__animated
                animate__fadeOut
                animate__faster
            `
        }
	}).then((result) => {
		if (result.isConfirmed && typeof confirmCallback === 'function') {
			confirmCallback(); // 확인 버튼 클릭 시 콜백 함수 실행
		} else if (result.isDismissed && typeof cancelCallback === 'function') {
			cancelCallback(); // 취소 버튼 클릭 시 콜백 함수 실행
		}
	});
}

// 스윗얼럿 공통함수 용법
/*
	alerts("success", "데이터가 성공적으로 저장되었습니다.", () => {
		console.log('사용자가 확인 버튼을 눌렀습니다.');
	});
	confirms("warning", "이 작업을 수행하시겠습니까?", () => {
		console.log('사용자가 확인 버튼을 눌렀습니다.');
	});
*/



function drawPaging(totalCount, totalPage) {
    if (totalCount == 0) {
        $('#paged-wrap').addClass('d-none');
    } else {
        $('#paged-wrap').removeClass('d-none');
        var pagedStr1 =
            '<li class="page-item">\
            <a class="page-link text-dark btn btn-arrow" href="javascript:void(0);" aria-label="Previous" onclick="goPage(1);">\
                <span aria-hidden="true"><i class="bi bi-chevron-double-left"></i></span>\
            </a>\
        </li><li class="page-item">\
            <a class="page-link text-dark btn btn-arrow" href="javascript:void(0);" aria-label="Previous" onclick="goPage(\'prev\');">\
                <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>\
            </a>\
        </li>';
        var pagedStr3 =
            '<li class="page-item">\
            <a class="page-link text-dark btn btn-arrow" href="javascript:void(0);" aria-label="Next" onclick="goPage(\'next\');">\
                <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>\
            </a>\
        </li><li class="page-item">\
            <a class="page-link text-dark btn btn-arrow" href="javascript:void(0);" aria-label="Next" onclick="goPage(' +
            totalPage +
            ');">\
                <span aria-hidden="true"><i class="bi bi-chevron-double-right"></i></span>\
            </a>\
        </li>';

        var pagedStr2 = '';
        var count = 0;

        var i = 1;
        var target = totalPage % 10;

        var now_page;
        if (page <= 10) {
            now_page = 1;
        } else {
            var temp = page - 1;
            temp = temp.toString();
            now_page = temp.substr(0, 1);
            now_page *= 10;
            now_page++;
        }
        var end_page = now_page + 9;

        for (var i = now_page; i <= end_page; i++) {
            count++;
            if (i <= totalPage) {
                if (count <= 10) {
                    var activeStr = '';
                    if (i == page) {
                        activeStr = ' active';
                    }
                    pagedStr2 +=
                        '<li class="page-item' +
                        activeStr +
                        '"><a class="page-link text-dark btn" href="javascript:void(0);" onclick="goPage(' +
                        i +
                        ');">' +
                        i +
                        '</a></li>';
                }
            }
        }

        if (page == 1) {
            pagedStr1 = '';
        }
        if (page == totalPage) {
            pagedStr3 = '';
        }
        $('#paged-content').html(pagedStr1 + pagedStr2 + pagedStr3);
    }
}

function goPage(_page){
    if(_page == 'prev'){
        page = (page*1) - 1;
    }else if(_page == 'next'){
        page = (page*1) + 1;
    }else{
        page = _page;
    }
    goReload();
}


function loggingSave(type, product_seq = null) {
    const obj = {
        type,
        url: now_url,
        user_seq: my_obj.seq,
        product_seq,
        ip: my_ip,
        device: getDevice(),
        browser: getBrowser(),
        viewport: getViewportWidth()
    };
    ajaxCall('/common/insert', { table: 'logging', obj });
}

function getDevice(){
    const user = navigator.userAgent;
    if ( user.indexOf("iPhone") > -1 || user.indexOf("Android") > -1 ) {
        return 'MO';
    }else{
        return 'PC';
    }
}

function getBrowser() {
    const browsers = [
        'Chrome', 'Opera',
        'WebTV', 'Whale',
        'Beonex', 'Chimera',
        'NetPositive', 'Phoenix',
        'Firefox', 'Safari',
        'SkipStone', 'Netscape', 'Mozilla',
    ];

    const userAgent = window.navigator.userAgent.toLowerCase();

    if (userAgent.includes("edg")) {
        return "Edge";
    }

    if (userAgent.includes("trident") || userAgent.includes("msie")) {
        return "Internet Explorer";
    }

    return browsers.find((browser) => userAgent.includes(browser.toLowerCase())) || 'Other';
}

function getViewportWidth() {
    return window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
}


// 이미지 업로드 후 url 주소 리턴
function fileUpload(formData) {
    var url = '';
    $.ajax({
        type: "POST",
        url: SERVER_IP + '/common/upload',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        async: false,
        timeout: 600000,
        success: function (data) {
            url = data;
        },
        error: function (request, status, error) {
            console.log(error);
        }
    });
    return url;
}



function formatDate(date, isTime = false) {
    let year = date.getFullYear();
    let month = String(date.getMonth() + 1).padStart(2, '0');  // 월은 0부터 시작하므로 +1
    let day = String(date.getDate()).padStart(2, '0');  // 일자를 두 자리로

    if(!isTime){
        return `${year}-${month}-${day}`;
    }else{
        const hours = String(today.getHours()).padStart(2, '0');
        const minutes = String(today.getMinutes()).padStart(2, '0');
        const seconds = String(today.getSeconds()).padStart(2, '0');
        return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
    }
}


// 세자리수 콤마
function comma(num) {
    if (num === null || num === undefined || isNaN(num)) return '0';
    return Number(num).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

// 빈값 검사
function isEmptyValue(val) {
    return (
        val === null ||
        val === undefined ||
        (typeof val === 'string' && (val.trim() === '' || val.trim() === '[]')) ||
        (Array.isArray(val) && val.length === 0)
    );
}


const LocalStorageUtil = {
    set(key, value) {
        localStorage.setItem(key, JSON.stringify(value));
    },
    get(key) {
        const item = localStorage.getItem(key);
        try {
            return item ? JSON.parse(item) : null;
        } catch (e) {
            return null;
        }
    },
    remove(key) {
        localStorage.removeItem(key);
    },
    clear() {
        localStorage.clear();
    }
};


// 커스텀필드 값 가져오기
function cfLoad(_whereField, _value){
    var res;
    ajaxCall('/common/list', { table: 'custom_field', whereField: _whereField, whereValue: _value }, function(data) {
        res = data;
    });
    return res;
}



function wrongPage(){
    location.replace(`/`);
    // alerts("error", "잘못된 접근입니다. 메인화면으로 이동합니다.", () => {
    //     location.replace(`/`);
	// });
}

function under(){
    alerts("info", "준비중인 기능입니다.", () => {});
}

function getImageSize(url, callback) {
    const img = new Image();
    img.onload = function () {
        callback(this.width, this.height);
    };
    img.src = url;
}


function formatPhoneNumber(phone) {
    if (!phone) return '';
    return phone.replace(/(\d{3})(\d{4})(\d{4})/, '$1-$2-$3');
}

function renderFindForm(){
    $('.find-id-wrapper').html(`<form class="find-id-form">
        <div class="form-group">
            <label for="name">이름</label>
            <input type="text" id="name" placeholder="이름을 입력하세요">
        </div>
        <div class="form-group">
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
    <div class="result" style="margin-top:20px; font-weight: bold;"></div>`);
}