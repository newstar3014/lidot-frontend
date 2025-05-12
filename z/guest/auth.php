<? include_once $_SERVER["DOCUMENT_ROOT"].'/_header.php'; ?>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/z/account/logout_only.php'; ?>

<div id="common-page-title"></div>

<script>
    $(function() {
        console.log('ㅡ PAGE READY');
        setPageTitle('비회원 주문조회', 'guest orders');
    });
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>