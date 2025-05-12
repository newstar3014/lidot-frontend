<? include_once $_SERVER["DOCUMENT_ROOT"].'/_header.php'; ?>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/z/account/logout_only.php'; ?>

<style>
    .btn-group .btn{
        padding-top: 12px;
        padding-bottom: 12px;
    }
    .form-check-label{
        font-weight: 400;
    }

</style>

<div id="common-page-title"></div>

<section class="flat-spacing-10">
    <div class="container">
        <div class="form-register-wrap">
            <div class="flat-title align-items-start gap-0 mb_30 px-0">
                <p class="text_black-2">간단한 절차로 <span class="fw-bold">회원가입</span>을 진행해주세요!<br> 소셜 로그인을 희망하신다면 로그인화면에서 <span class="text-naver fw-bold">네이버</span> 또는 <span class="text-kakao fw-bold">카카오</span>로 간편 가입 및 로그인을 해보세요!</p>
            </div>
            <div>

                <div class="btn-group w-100 mb-5" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="join-btnradio" id="join-btnradio1" autocomplete="off" value="N" checked>
                    <label class="btn btn-outline-secondary" for="join-btnradio1"><i id="join-icon-check-N" class="bi bi-check-circle join-icon-check"></i> 일반회원</label>

                    <input type="radio" class="btn-check" name="join-btnradio" id="join-btnradio2" autocomplete="off" value="B">
                    <label class="btn btn-outline-secondary" for="join-btnradio2"><i id="join-icon-check-B" class="bi bi-check-circle join-icon-check d-none"></i> 사업자회원</label>
                </div>

                <div id="join-busi-wrap" class="d-none mb-4">
                    <h6 class="mb-3"><i class="bi bi-building"></i> 사업자 정보</h6>

                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="join-bsn_type" id="join-bsn_type1" value="개인" checked>
                            <label class="form-check-label" for="join-bsn_type1">개인</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="join-bsn_type" id="join-bsn_type2" value="법인">
                            <label class="form-check-label" for="join-bsn_type2">법인</label>
                        </div>
                    </div>
                    <div class="tf-field style-1 mb_15">
                        <input class="tf-field-input tf-input" placeholder=" " type="text" id="join-store_name">
                        <label class="tf-field-label fw-4 text_black-2" for="join-store_name">상호명</label>
                    </div>
                    <div class="tf-field style-1 mb_15">
                        <input class="tf-field-input tf-input" placeholder=" " type="text" id="join-bsn_num">
                        <label class="tf-field-label fw-4 text_black-2" for="join-bsn_num">사업자번호</label>
                    </div>
                    <div class="tf-field style-1">
                        <label class="fw-4 text_black-2 label-file" for="join-bsn_image" id="join-bsn_image-label">사업자등록증 (클릭하여 업로드)</label>
                        <input class="form-control d-none" type="file" id="join-bsn_image">
                    </div>
                </div>

                <h6 class="mb-3"><i class="bi bi-shield-lock"></i> 로그인 정보</h6>
                <div class="tf-field style-1">
                    <input class="tf-field-input tf-input" placeholder=" " type="text" id="join-login_id">
                    <label class="tf-field-label fw-4 text_black-2" for="join-login_id">아이디</label>
                </div>
                <div class="form-text mb_15">아이디는 4자이상 20자이내로 영문+숫자 사용가능해요</div>
                <div class="tf-field style-1">
                    <input class="tf-field-input tf-input" placeholder=" " type="password" id="join-pwd">
                    <label class="tf-field-label fw-4 text_black-2" for="join-pwd">비밀번호</label>
                </div>
                <div class="form-text mb_15">비밀번호는 8자이상 20자이내로 영문+숫자+특수문자를 조합해주세요</div>
                <div class="tf-field style-1 mb-4">
                    <input class="tf-field-input tf-input" placeholder=" " type="password" id="join-pwd2">
                    <label class="tf-field-label fw-4 text_black-2" for="join-pwd2">비밀번호 확인</label>
                </div>

                <h6 class="mb-3"><i class="bi bi-person-vcard"></i> 회원 정보</h6>
                <div class="tf-field style-1 mb_15">
                    <input class="tf-field-input tf-input" placeholder=" " type="text" id="join-name">
                    <label class="tf-field-label fw-4 text_black-2" for="join-name">성함</label>
                </div>
                <div class="tf-field style-1">
                    <input class="tf-field-input tf-input" placeholder=" " type="text" id="join-phone">
                    <label class="tf-field-label fw-4 text_black-2" for="join-phone">휴대폰 번호</label>
                </div>
                <div class="form-text mb_15">주문, 배송정보 등을 알림톡으로 보내드려요</div>
                <div class="tf-field style-1 mb_15">
                    <input class="tf-field-input tf-input" placeholder=" " type="email" id="join-email">
                    <label class="tf-field-label fw-4 text_black-2" for="join-email">이메일 주소</label>
                </div>
                <div class="tf-field style-1 mb_15">
                    <input class="tf-field-input tf-input pointer" placeholder=" " type="text" id="join-address" readonly>
                    <label class="tf-field-label fw-4 text_black-2" for="join-address">주소 (클릭하여 검색)</label>
                </div>
                <div class="tf-field style-1 mb-4">
                    <input class="tf-field-input tf-input" placeholder=" " type="text" id="join-address_detail">
                    <label class="tf-field-label fw-4 text_black-2" for="join-address_detail">상세주소</label>
                </div>

                <h6 class="mb-3"><i class="bi bi-check-circle"></i> 약관 및 수신동의</h6>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="join-agree_term">
                    <label class="form-check-label" for="join-agree_term">
                        사이트 이용약관 동의 (필수)
                    </label>
                    <a href="javascript:openTerm('이용약관')" class="text-primary ms-2"><i class="bi bi-box-arrow-up-right"></i> 약관보기</a>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="join-agree_privacy">
                    <label class="form-check-label" for="join-agree_privacy">
                        개인정보 처리방침 동의 (필수)
                    </label>
                    <a href="javascript:openTerm('개인정보처리방침')" class="text-primary ms-2"><i class="bi bi-box-arrow-up-right"></i> 약관보기</a>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="join-agree_third">
                    <label class="form-check-label" for="join-agree_third">
                        개인정보 제3자 제공 동의 (필수, 배송서비스 등에 필요)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="join-agree_shopping_yn">
                    <label class="form-check-label" for="join-agree_shopping_yn">
                        쇼핑정보 수신 동의 (SMS, 알림톡, 이메일)
                    </label>
                </div>
                
                <div class="mt-5 mb_20">
                    <a href="javascript:dataCheck()" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">회원 등록</a>
                </div>
                <div class="text-center">
                    <a href="#login" data-bs-toggle="modal" class="tf-btn btn-line">이미 가입하셨나요? 로그인 하기<i class="icon icon-arrow1-top-left"></i></a>
                </div>

            </div>
        </div>
    </div>
</section>

<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script>

    var join_social = '<? echo $_GET['social']; ?>';
    var join_type = 'N';
    var join_address_postnum, join_bsn_image;
    var join_login_id = '<? echo $_GET['login_id']; ?>';;

    $(function() {
        console.log('ㅡ PAGE READY');
        setPageTitle('회원가입', 'JOIN');
    });
    
    $('input[name="join-btnradio"]').change(function () {
        join_type = $(this).val();
        $('.join-icon-check').addClass('d-none');
        $('#join-icon-check-'+join_type).removeClass('d-none');
        if(join_type == 'B'){
            $('#join-busi-wrap').removeClass('d-none');
        }else{
            $('#join-busi-wrap').addClass('d-none');
        }
    });

    $('#join-address').click(function(){
        new daum.Postcode({
            oncomplete: function(data) {
                join_address_postnum = data.zonecode;
                $('#join-address').val(data.address);
            }
        }).open();
    });


    $('#join-bsn_image').change(function(){

        let v = this.files[0];
        if (!v) {
            return;
        }

        let formData = new FormData();
        formData.append('dir', 'users');
        formData.append('files', v);

        let imageArray = fileUpload(formData);
        join_bsn_image = imageArray[0];
        $('#join-bsn_image-label').html(v.name);
    });

    function openTerm(_name){
        let text = cfLoad('name', _name);
        
        $('#modal-common-title').html(_name);
        $('#modal-common-body').html(text[0].value);
        $('#modal-common').modal('show');
    }

    function dataCheck(){

        let obj = {
            user_status: 'Y',
            type: join_type,
            name: $('#join-name').val(),
            phone: $('#join-phone').val().replace(/-/g, ''),
            email: $('#join-email').val(),
            address: $('#join-address').val(),
            address_detail: $('#join-address_detail').val(),
            address_postnum: join_address_postnum,
        };

        let obj2 = {};
        let obj3 = {};
        let agree_shopping_yn = $('#join-agree_shopping_yn').is(':checked') ? 'Y' : 'N';

        if(join_social) {
            obj.social = join_social;
            obj.login_id = join_login_id;
        }else{
            obj.login_id = $('#join-login_id').val();
            obj.pwd = $('#join-pwd').val();
        }

        let pwd2 = $('#join-pwd2').val().trim();

        if(obj.type == 'B'){
            obj2.bsn_type = $('input[name="join-bsn_type"]:checked').val();
            obj2.store_name = $('#join-store_name').val();
            obj2.bsn_num = $('#join-bsn_num').val();
            obj2.bsn_image = join_bsn_image;
            obj2.agree_shopping_yn = agree_shopping_yn;
        }else{
            obj3.agree_shopping_yn = agree_shopping_yn;
        }

        for (let key in obj) {
            if (typeof obj[key] === 'string') {
                obj[key] = obj[key].trim();
            }
        }
        for (let key in obj2) {
            if (typeof obj2[key] === 'string') {
                obj2[key] = obj2[key].trim();
            }
        }

        if(obj.type == 'B'){
            console.log(obj2);
            if(!obj2.store_name){
                alerts('warning', '상호명을 입력해주세요.');
                return false;
            }

            if(!obj2.bsn_num){
                alerts('warning', '사업자번호를 입력해주세요.');
                return false;
            }
            if(!validBizNumber(obj2.bsn_num)){
                alerts('warning', '사업자번호를 000-00-00000 형식으로 입력해주세요.');
                return false;
            }

            if(!obj2.bsn_image){
                alerts('warning', '사업자등록증을 업로드해주세요.');
                return false;
            }
        }

        if(!join_social){
            if(!obj.login_id){
                alerts('warning', '아이디를 입력해주세요.');
                return false;
            }
            if(!validId(obj.login_id)){
                alerts('warning', '아이디는 영문숫자만 사용, 4자이상 20자이하로 입력해주세요. 영문으로 시작해야 합니다.');
                return false;
            }
            if(!userDupli(obj.login_id)){
                alerts('warning', '중복된 아이디입니다, 아이디를 수정해주세요.');
                return false;
            }
            if(!obj.pwd){
                alerts('warning', '비밀번호를 입력해주세요.');
                return false;
            }
            if(!validPw(obj.pwd)){
                alerts('warning', '비밀번호는 8자이상 20자이하, 영문+숫자+특수문자를 조합해 주세요.');
                return false;
            }
            if(!pwd2){
                alerts('warning', '비밀번호 확인란을 입력해주세요.');
                return false;
            }
            if(obj.pwd != pwd2){
                alerts('warning', '비밀번호와 비밀번호 확인을 동일하게 입력해주세요.');
                return false;
            }
        }

        if(!obj.name){
            alerts('warning', '성함을 입력해주세요.');
            return false;
        }
        if(!obj.phone){
            alerts('warning', '휴대폰 번호를 입력해주세요.');
            return false;
        }
        if(!validPhone(obj.phone)){
            alerts('warning', '휴대폰 번호를 올바르게 입력해주세요.');
            return false;
        }
        if(!obj.email){
            alerts('warning', '이메일 주소를 입력해주세요.');
            return false;
        }
        if(!validEmail(obj.email)){
            alerts('warning', '이메일 주소를 올바르게 입력해주세요.');
            return false;
        }
        if(!obj.address){
            alerts('warning', '주소를 입력해주세요.');
            return false;
        }
        if(!obj.address_detail){
            alerts('warning', '상세주소를 입력해주세요.');
            return false;
        }
        

        if (!$('#join-agree_term').is(':checked')) {
            alerts('warning', '사이트 이용약관에 동의해주세요.');
            return;
        }

        if (!$('#join-agree_privacy').is(':checked')) {
            alerts('warning', '개인정보 처리방침에 동의해주세요.');
            return;
        }

        if (!$('#join-agree_third').is(':checked')) {
            alerts('warning', '제3자 정보제공에 동의해주세요.');
            return;
        }

        insertUser(obj, obj2, obj3);
    }

    function insertUser(obj, obj2, obj3){
        console.log(obj);
        
        let sendObj1 = obj;
        let sendObj2;

        if(obj.type == 'N'){
            console.log(obj3);
            sendObj2 = obj3;
        }else if(obj.type == 'B'){
            console.log(obj2);
            sendObj2 = obj2;
        }

        ajaxCall('/user/join', { obj: sendObj1, obj2: sendObj2 }, function(data) {
            alerts("success", "회원 가입이 완료되었습니다.<br>로그인하여 회원 혜택을 받아보세요!", () => {
                location.href = `/`;
            });
        });
    }

    function userDupli(id){
        let returnValue;
        ajaxCall('/user/dupli', { id }, function(data) {
            if(data.cnt == 0) {
                returnValue = true;
            }else{
                returnValue = false;
            }
        });
        return returnValue;
    }
</script>


<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>