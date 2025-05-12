<? include_once $_SERVER["DOCUMENT_ROOT"].'/_header.php'; ?>

<div id="common-page-title"></div>

<!-- page-cart -->
<section class="flat-spacing-11">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h5 class="fw-5 mb_20"><i class="bi bi-bag-check"></i> 정상적으로 처리되었어요</h5>
                <div class="tf-page-cart-checkout">
                    <div class="d-flex align-items-center justify-content-between mb_15">
                        <div class="">주문일시</div>
                        <p>2025-03-05 19:11:20</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb_15">
                        <div class="">결제 수단</div>
                        <p>카드결제</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb_15">
                        <div class="">받으시는 분</div>
                        <p>홍길동</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb_15">
                        <div class="">연락처</div>
                        <p>010-1212-3434</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb_15">
                        <div class="">배송지 주소</div>
                        <p class="text-end">서울시 금천구 벚꽃로 278 609-133호</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb_24">
                        <div class="fs-18 fw-6">결제 합계</div>
                        <span class="fs-18 fw-6 total-value">917,000원</span>
                    </div>
                    <div class="d-flex gap-10">
                        <a href="javascript:goMyOrders()" class="tf-btn w-100 btn-outline animate-hover-btn rounded-0 justify-content-center">
                            <span>주문내역 보기</span>
                        </a>
                        <a href="/" class="tf-btn w-100 btn-fill animate-hover-btn radius-3 justify-content-center">
                            <span>메인화면 가기</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-cart -->

<script>
    $(function() {
        console.log('ㅡ PAGE READY');
        setPageTitle('주문 완료', 'order done');
    });
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>