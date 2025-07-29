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
            <li><a href="/z/mypage/request" id="mypage-request" class="my-account-nav-item">문의 내역</a></li>
            <li><a href="/z/mypage/deli_loca" id="mypage-deli_loca" class="my-account-nav-item">배송지 관리</a></li>
            <li><a href="/z/mypage/my_info" class="my-account-nav-item">개인정보 수정</a></li>
            <li class="d-none soical-hide"><a href="/z/mypage/pw_change" class="my-account-nav-item">비밀번호 변경</a></li>
            <li><a href="javascript:goLogout()" class="my-account-nav-item">로그아웃</a></li>
        </ul>
    </div>
    <select id="mypage-select-menu" class="form-select">
        <option value="/z/mypage/">마이페이지</option>
        <option value="/z/mypage/orders/">주문조회</option>
        <option value="/z/mypage/request">문의 내역</option>
        <option value="/z/mypage/deli_loca">배송지 관리</option>
        <option value="/z/mypage/my_info">개인정보 수정</option>
        <option class="d-none soical-hide" value="/z/mypage/pw_change">비밀번호 변경</option>
        <option value="/z/account/logout">로그아웃</option>
    </select>
</div>

<script>

    if(!my_obj.social){
        $('.soical-hide').removeClass('d-none');
    }
    $(function() {
        $('#mypage-nav').removeClass('d-none');
        $('#mypage-select-menu').val(now_url);
    });
    $('#mypage-select-menu').change(function(e){
        let val = $(this).val();
        location.href = val;
    });
</script>