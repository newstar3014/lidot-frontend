<?
if ($_SESSION['my_port'] != "shop") {
    ?>
        <script>
            wrongPage();
        </script>
    <?
}
?>

<div id="mypage-nav" class="col-lg-3 d-none">
    <div class="wrap-sidebar-account">
        <ul class="my-account-nav">
            <li><a href="/z/mypage" id="mypage-index" class="my-account-nav-item">마이페이지</a></li>
            <li><a href="/z/mypage/orders" id="mypage-orders" class="my-account-nav-item">주문조회</a></li>
            <li><a href="#" class="my-account-nav-item">배송지 관리</a></li>
            <li><a href="#" class="my-account-nav-item">개인정보 수정</a></li>
            <li><a href="javascript:goLogout()" class="my-account-nav-item">로그아웃</a></li>
        </ul>
    </div>
    <select id="mypage-select-menu" class="form-select">
        <option value="/z/mypage/">마이페이지</option>
        <option value="/z/mypage/orders/">주문조회</option>
        <option value="/z/account/logout">로그아웃</option>
    </select>
</div>

<script>
    $(function() {
        $('#mypage-nav').removeClass('d-none');
        $('#mypage-select-menu').val(now_url);
    });
    $('#mypage-select-menu').change(function(e){
        let val = $(this).val();
        location.href = val;
    });
</script>