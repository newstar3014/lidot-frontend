<? include_once $_SERVER["DOCUMENT_ROOT"].'/_header.php'; ?>

<div id="common-page-title"></div>

<!-- page-cart -->
<section class="flat-spacing-11">
    <div class="container">
        <div class="row">
            <? include_once '_nav.php'; ?>
            <div class="col-lg-9">
                <div id="product_request-wrap"></div>
            </div>
        </div>
    </div>
</section>
<!-- page-cart -->


<script>
    $(function() {
        console.log('ㅡ PAGE READY');
        $('#mypage-request').addClass('active');
        setPageTitle('문의 내역', 'request');
    });
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>