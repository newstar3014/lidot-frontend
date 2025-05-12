<? include_once $_SERVER["DOCUMENT_ROOT"].'/_header.php'; ?>

<div id="common-page-title"></div>

<!-- page-cart -->
<section class="flat-spacing-11">
    <div class="container">
        <div class="row">
            <? include_once '_nav.php'; ?>
            <div class="col-lg-9">
                <div class="my-account-content account-order">
                    <div class="wrap-account-order">
                        <table>
                            <thead>
                                <tr>
                                    <th class="fw-6">주문번호</th>
                                    <th class="fw-6">주문일시</th>
                                    <th class="fw-6">주문상태</th>
                                    <th class="fw-6">결제금액</th>
                                    <th class="fw-6">상세보기</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tf-order-item">
                                    <td>
                                        20250101-78540003
                                    </td>
                                    <td>
                                        2025-01-01 13:20:03
                                    </td>
                                    <td>
                                        확인대기중
                                    </td>
                                    <td>
                                        319,000원
                                    </td>
                                    <td>
                                        <a href="my-account-orders-details.html" class="tf-btn btn-fill animate-hover-btn rounded-0 justify-content-center">
                                            <span>상세보기</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="tf-order-item">
                                    <td>
                                    20250101-78540002
                                    </td>
                                    <td>
                                    2025-01-01 13:20:03
                                    </td>
                                    <td>
                                        배송중
                                    </td>
                                    <td>
                                    1,279,000원
                                    </td>
                                    <td>
                                        <a href="my-account-orders-details.html" class="tf-btn btn-fill animate-hover-btn rounded-0 justify-content-center">
                                            <span>상세보기</span>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="tf-order-item">
                                    <td>
                                    20250101-78540001
                                    </td>
                                    <td>
                                    2025-01-01 13:20:03
                                    </td>
                                    <td>
                                        배송완료
                                    </td>
                                    <td>
                                    175,000원
                                    </td>
                                    <td>
                                        <a href="my-account-orders-details.html" class="tf-btn btn-fill animate-hover-btn rounded-0 justify-content-center">
                                            <span>상세보기</span>
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
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
        $('#mypage-orders').addClass('active');
        setPageTitle('주문조회', 'orders');
    });
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>