<!-- modal compare -->
<div class="offcanvas offcanvas-bottom canvas-compare" id="compare">
    <div class="canvas-wrapper">
        <header class="canvas-header">
            <div class="close-popup">
                <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
            </div>
        </header>
        <div class="canvas-body">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tf-compare-list">
                            <div class="tf-compare-head">
                                <div class="title"><i class="bi bi-list-check"></i> 상품 비교 목록</div>
                            </div>
                            <div class="tf-compare-offcanvas">
                                <div class="tf-compare-item" title="상품명">
                                    <div class="position-relative">
                                        <div class="icon">
                                            <i class="icon-close"></i>
                                        </div>
                                        <a href="#">
                                            <img class="radius-3" src="https://lidot-s3.s3.ap-northeast-2.amazonaws.com/images/2022-04-18product/20220418111741VA8900CRmain7.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="tf-compare-item">
                                    <div class="position-relative">
                                        <div class="icon">
                                            <i class="icon-close"></i>
                                        </div>
                                        <a href="#">
                                            <img class="radius-3" src="https://lidot-s3.s3.ap-northeast-2.amazonaws.com/images/2023-10-19%2013%3A47%3A39product/20231019134739F1340main12.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="tf-compare-item">
                                    <div class="position-relative">
                                        <div class="icon">
                                            <i class="icon-close"></i>
                                        </div>
                                        <a href="#">
                                            <img class="radius-3" src="https://lidot-s3.s3.ap-northeast-2.amazonaws.com/images/2023-10-19%2013%3A47%3A39product/20231019134739F1340main12.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="tf-compare-item">
                                    <div class="position-relative">
                                        <div class="icon">
                                            <i class="icon-close"></i>
                                        </div>
                                        <a href="#">
                                            <img class="radius-3" src="https://lidot-s3.s3.ap-northeast-2.amazonaws.com/images/2023-10-19%2013%3A47%3A39product/20231019134739F1340main12.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="tf-compare-item">
                                    <div class="position-relative">
                                        <div class="icon">
                                            <i class="icon-close"></i>
                                        </div>
                                        <a href="#">
                                            <img class="radius-3" src="https://lidot-s3.s3.ap-northeast-2.amazonaws.com/images/2023-10-19%2013%3A47%3A39product/20231019134739F1340main12.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="tf-compare-item">
                                    <div class="position-relative">
                                        <div class="icon">
                                            <i class="icon-close"></i>
                                        </div>
                                        <a href="#">
                                            <img class="radius-3" src="https://lidot-s3.s3.ap-northeast-2.amazonaws.com/images/2023-10-19%2013%3A47%3A39product/20231019134739F1340main12.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="tf-compare-item">
                                    <div class="position-relative">
                                        <div class="icon">
                                            <i class="icon-close"></i>
                                        </div>
                                        <a href="#">
                                            <img class="radius-3" src="https://lidot-s3.s3.ap-northeast-2.amazonaws.com/images/2023-10-19%2013%3A47%3A39product/20231019134739F1340main12.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="tf-compare-item">
                                    <div class="position-relative">
                                        <div class="icon">
                                            <i class="icon-close"></i>
                                        </div>
                                        <a href="#">
                                            <img class="radius-3" src="https://lidot-s3.s3.ap-northeast-2.amazonaws.com/images/2023-10-19%2013%3A47%3A39product/20231019134739F1340main12.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tf-compare-buttons">
                                <div class="tf-compare-buttons-wrap">
                                    <a href="#" class="tf-btn radius-3 btn-fill justify-content-center fw-6 fs-14 flex-grow-1 animate-hover-btn">비교 보기</a>
                                    <div class="tf-compapre-button-clear-all link">
                                    <i class="bi bi-trash3"></i> 목록 비우기
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /modal compare -->



<!-- modal quick_view -->
<div class="modal fade modalDemo" id="quick_view">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="wrap">
                <div class="tf-product-media-wrap">
                    <div dir="ltr" class="swiper tf-single-slide">
                        <div class="swiper-wrapper" id="quick_view-img"></div>
                        <div class="swiper-button-next button-style-arrow single-slide-prev"></div>
                        <div class="swiper-button-prev button-style-arrow single-slide-next"></div>
                    </div>
                </div>
                <div id="quick_view-info" class="tf-product-info-wrap position-relative"></div>
            </div>
        </div>
    </div>
</div>
<!-- /modal quick_view -->



<!-- modal login -->
<div class="modal modalCentered fade form-sign-in modal-part-content" id="login">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="header">
                <div class="demo-title"><i class="bi bi-shield-lock"></i> 로그인</div>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <div class="tf-login-form">
                <form class="">
                    <div class="tf-field style-1">
                        <input id="modal-login-login_id" class="tf-field-input tf-input" type="text" placeholder=" ">
                        <label class="tf-field-label" for="modal-login-login_id">아이디</label>
                    </div>
                    <div class="tf-field style-1">
                        <input id="modal-login-pwd" class="tf-field-input tf-input" type="password" placeholder=" ">
                        <label class="tf-field-label" for="modal-login-pwd">비밀번호</label>
                    </div>
                    <div>
                        <a href="/z/account/pw_reset" class="btn-link link">비밀번호 분실 재설정</a>
                    </div>
                    <div class="bottom">
                        <div class="w-100">
                            <a href="javascript:goLogin()" class="tf-btn btn-fill animate-hover-btn radius-3 w-100 justify-content-center"><span><i class="bi bi-key"></i> 로그인</span></a>
                        </div>
                        <div class="row mt-2">
                            <div class="col pe-1">
                                <a href="javascript:goLoginSocial('N')" class="tf-btn btn-naver animate-hover-btn radius-3 w-100 justify-content-center"><span>네이버 로그인</span></a>
                            </div>
                            <div class="col ps-1">
                                <a href="javascript:goLoginSocial('K')" class="tf-btn btn-kakao animate-hover-btn radius-3 w-100 justify-content-center"><span>카카오 로그인</span></a>
                            </div>
                        </div>

                        <div class="w-100 mt-4 text-center">
                            <a href="/z/account/join"><i class="bi bi-person-add"></i> 회원가입</a><span class="mx-3">|</span><a href="/z/account/find_id">아이디찾기</a><span class="mx-3">|</span><a href="/z/guest/auth">비회원 주문조회</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /modal login -->



<!-- 공통모달 -->

<div id="modal-common" class="modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h6 id="modal-common-title" class="modal-title"></h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="modal-common-body" class="modal-body"></div>
        </div>
    </div>
</div>

<!-- /공통모달 -->




<!-- 회원 배송지 목록 모달 -->
<div id="modal-users_delivery-list" class="modal">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">배송지 선택</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" onclick="modalOpenUsersDeliveryWrite()">새 배송지 등록</button>
            </div>
        </div>
    </div>
</div>

<!-- /회원 배송지 목록 모달 -->



<!-- 배송지 등록 모달 -->
<div id="modal-users_delivery-write" class="modal">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">배송지 입력</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="tf-field style-1 mb_15">
                    <input class="tf-field-input tf-input" placeholder=" " type="text" id="join-name">
                    <label class="tf-field-label fw-4 text_black-2" for="join-name">받는이 성함</label>
                </div>
                <div class="tf-field style-1">
                    <input class="tf-field-input tf-input" placeholder=" " type="text" id="join-phone">
                    <label class="tf-field-label fw-4 text_black-2" for="join-phone">휴대폰 번호</label>
                </div>
                <div class="form-text mb_15">주문, 배송정보 등을 알림톡으로 보내드려요</div>
                <div class="tf-field style-1 mb_15" onclick="modalUsersDeliveryWriteAddress()">
                    <input class="tf-field-input tf-input pointer" placeholder=" " type="text" id="join-address" readonly>
                    <label class="tf-field-label fw-4 text_black-2 pointer">주소 (클릭하여 검색)</label>
                </div>
                <div class="tf-field style-1 mb-4">
                    <input class="tf-field-input tf-input" placeholder=" " type="text" id="join-address_detail">
                    <label class="tf-field-label fw-4 text_black-2" for="join-address_detail">상세주소</label>
                </div>
                <input class="d-none" type="text" id="join-address_postnum">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">취소</button>
                <button type="button" class="btn btn-dark" onclick="modalUsersDeliveryWriteDone();">입력 완료</button>
            </div>
        </div>
    </div>
</div>

<!-- /배송지 등록 모달 -->



<!-- 상품사진 모아보기 모달 -->
<div id="modal-cart-product-image" class="modal">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                    <div id="modal-cart-product-image-slide1" class="swiper-wrapper">
                    </div>
                    <div class="swiper-button-next button-style-arrow thumbs-next"></div>
                    <div class="swiper-button-prev button-style-arrow thumbs-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div id="modal-cart-product-image-slide2" class="swiper-wrapper mt-3">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">닫기</button>
            </div>
        </div>
    </div>
</div>

<!-- /상품사진 모아보기 모달 -->