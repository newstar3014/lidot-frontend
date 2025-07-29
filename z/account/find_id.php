<? include_once $_SERVER["DOCUMENT_ROOT"].'/_header.php'; ?>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/z/account/logout_only.php'; ?>
<link rel="stylesheet" href="/css/find.css">

<div id="common-page-title"></div>

<div class="find-id-wrapper"></div>


<script src="find.js"></script>
<script>

    $(function() {
        console.log('ㅡ PAGE READY');
        setPageTitle('아이디 찾기', 'find id');
        renderFindForm();
    });
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/_footer.php'; ?>