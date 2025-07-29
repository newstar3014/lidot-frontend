<? include_once $_SERVER["DOCUMENT_ROOT"].'/_header.php'; ?>

<div id="common-page-title"></div>

<!-- page-cart -->
<section class="flat-spacing-11">
    <div class="container">
        <div class="row">
            <? include_once '_nav.php'; ?>
            <div class="col-lg-9">
                <!-- 페이지 영역 -->
                <div class="container">
                    <div class="form-register-wrap">
                        <div>

                            <!-- <div class="btn-group w-100 mb-5" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="join-btnradio" id="join-btnradio1" autocomplete="off" value="N" checked>
                                <label class="btn btn-outline-secondary" for="join-btnradio1"><i id="join-icon-check-N" class="bi bi-check-circle join-icon-check"></i> 일반회원</label>

                                <input type="radio" class="btn-check" name="join-btnradio" id="join-btnradio2" autocomplete="off" value="B">
                                <label class="btn btn-outline-secondary" for="join-btnradio2"><i id="join-icon-check-B" class="bi bi-check-circle join-icon-check d-none"></i> 사업자회원</label>
                            </div> -->

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
                                    <input class="tf-field-input tf-input" placeholder=" " type="text" id="join-store_name" readonly>
                                    <label class="tf-field-label fw-4 text_black-2" for="join-store_name">상호명</label>
                                </div>
                                <div class="tf-field style-1 mb_15">
                                    <input class="tf-field-input tf-input" placeholder=" " type="text" id="join-bsn_num" readonly>
                                    <label class="tf-field-label fw-4 text_black-2" for="join-bsn_num">사업자번호</label>
                                </div>
                                <!-- <div class="tf-field style-1">
                                    <label class="fw-4 text_black-2 label-file" for="join-bsn_image" id="join-bsn_image-label">사업자등록증 (클릭하여 업로드)</label>
                                    <input class="form-control d-none" type="file" id="join-bsn_image">
                                </div> -->
                                <div class="tf-field style-1 mb_15">
                                    <input style="cursor:pointer;" class="tf-field-input tf-input" placeholder=" " type="text" id="join-bsn_image" readonly>
                                    <label class="tf-field-label fw-4 text_black-2" for="join-bsn_image">사업자등록증</label>
                                </div>
                            </div>

                            <h6 class="mb-3"><i class="bi bi-person-vcard"></i> 회원 정보</h6>
                            <div class="tf-field style-1 mb_15">
                                <input class="tf-field-input tf-input" placeholder=" " type="text" id="join-login_id" readonly>
                                <label class="tf-field-label fw-4 text_black-2" for="join-login_id">아이디</label>
                            </div>

                            
                            <div class="tf-field style-1 mb_15">
                                <input class="tf-field-input tf-input" placeholder=" " type="text" id="join-name">
                                <label class="tf-field-label fw-4 text_black-2" for="join-name">성함</label>
                            </div>
                            <div class="tf-field style-1 mb_15">
                                <input class="tf-field-input tf-input" placeholder=" " type="text" id="join-phone">
                                <label class="tf-field-label fw-4 text_black-2" for="join-phone">휴대폰 번호</label>
                            </div>
                            
                            <div class="tf-field style-1 mb_15">
                                <input class="tf-field-input tf-input" placeholder=" " type="email" id="join-email">
                                <label class="tf-field-label fw-4 text_black-2" for="join-email">이메일 주소</label>
                            </div>
                            <div class="tf-field style-1 mb_15 d-none">
                                <input class="tf-field-input tf-input" placeholder=" " type="text" id="join-address_postnum">
                                <label class="tf-field-label fw-4 text_black-2" for="join-address_postnum">우편번호</label>
                            </div>
                            <div class="tf-field style-1 mb_15">
                                <input class="tf-field-input tf-input pointer" placeholder=" " type="text" id="join-address" readonly>
                                <label class="tf-field-label fw-4 text_black-2" for="join-address">주소 (클릭하여 검색)</label>
                            </div>
                            <div class="tf-field style-1 mb-4">
                                <input class="tf-field-input tf-input" placeholder=" " type="text" id="join-address_detail">
                                <label class="tf-field-label fw-4 text_black-2" for="join-address_detail">상세주소</label>
                            </div>

                            <!-- <h6 class="mb-3"><i class="bi bi-check-circle"></i> 약관 및 수신동의</h6>
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
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="join-agree_all">
                                <label class="form-check-label" for="join-agree_all">
                                    <b>전체 동의하기</b>
                                </label>
                            </div>
                             -->
                            <div class="mt-5 mb_20">
                                <a href="javascript:dataCheck()" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">수정하기</a>
                            </div>
                 

                        </div>
                    </div>
                </div>
                <!-- 페이지 영역 끝 -->
            </div>
        </div>
    </div>
</section>
<!-- page-cart -->

<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script>
    $(function() {
        console.log('ㅡ PAGE READY');
        $('#mypage-my_info').addClass('active');
        setPageTitle('개인정보 수정', 'edit profile');
        dataLoad();
    });

    $('#join-address').click(function(){
        new daum.Postcode({
            oncomplete: function(data) {
                $('#join-address').val(data.address);
                $('#join-address_postnum').val(data.zonecode);
            }
        }).open();
    });

    function dataLoad(){
        ajaxCall('/common/seq', { 
            table:'users',
            seq:my_obj.user_seq,
        }, function(data) {
            console.log('data : ', data);

            if(data.type == 'B') {
                $('#join-busi-wrap').removeClass('d-none');
                loadBusiness();
            }
            $('#join-login_id').val(data.login_id);
            $('#join-name').val(data.name);
            $('#join-phone').val(data.phone);
            $('#join-email').val(data.email);
            $('#join-address').val(data.address);
            $('#join-address_detail').val(data.address_detail);
            $('#join-address_postnum').val(data.address_postnum);
            

        });
    }

    function loadBusiness(){
        ajaxCall('/common/list', { 
            table:'users_business',
            whereField:'user_seq',
            whereValue:my_obj.user_seq
        }, function(data) {
            console.log('data : ', data);
            $(`input[name="join-bsn_type"][value="${data[0].bsn_type}"]`).prop('checked', true);
            $('input[name="join-bsn_type"]').prop('disabled', true);

            $('#join-store_name').val(data[0].store_name);
            $('#join-bsn_num').val(data[0].bsn_num);
            $('#join-bsn_image').val('이미지 다운로드');
            
            $('#join-bsn_image').attr('data-image', data[0].bsn_image);

        });
    }

    $('#join-bsn_image').click(function () {
        const imageUrl = $(this).attr('data-image');

        if (!imageUrl) {
            alert('다운로드할 이미지가 없습니다.');
            return;
        }
        const link = document.createElement('a');
        link.href = imageUrl;
        link.download = imageUrl.split('/').pop();
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });

    function dataCheck(){

        
        let obj = new Object();
        obj.name = $('#join-name').val();
        obj.phone = $('#join-phone').val();
        obj.email = $('#join-email').val();
        obj.address = $('#join-address').val();
        obj.address_detail = $('#join-address_detail').val();
        obj.address_postnum = $('#join-address_postnum').val();

        if(!obj.name){
            alerts('warning', '성함을 입력해주세요.');
            return;
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
            return;
        }
        
        if(!obj.address){
            alerts('warning', '주소를 입력해주세요.');
            return;
        }

        if(!obj.address_detail){
            alerts('warning', '상세주소를 입력해주세요.');
            return;
        }


        alerts('question', '수정하시겠습니까?', () => {
            ajaxCall('/common/update', { 
                table:'users',
                seq:my_obj.user_seq,
                obj
            }, function(data) {
                console.log('data : ', data);
                alerts('success', '수정되었습니다.', () => {
                    location.reload();
                });
                
            });
        })
    }



</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>