<!-- Style CSS -->
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>

<!-- CSS -->
<link rel="stylesheet" href="css/pages/privacy_policy/privacy_policy.css">
<!-- Header Area End -->

<style>
.breadcrumb {
    float: right;
    padding-right: 0;
    margin-right: -10px;
}

.breadcrumb-item a {
    color: #999999;
}

.breadcrumb-item+.breadcrumb-item::before {
    content: ">";
}

.page-title {
    border-bottom: 1px solid #EBECEF;
    padding-bottom: 30px;
}
</style>

<!-- Breadcumb Area -->
<div class="breadcrumb-wrap">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <ol class="breadcrumb mt-2 bg-white">
                    <li class="breadcrumb-item"><a href="/">홈</a></li>
                    <li class="breadcrumb-item"><a href="introduce.php">회사소개</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb Area -->
<style>
#b_sub_content p {
    color: #000 !important;
}
</style>
<!-- Wishlist Table Area -->
<div class="wishlist-table clearfix">
    <div class="container">
        <h4 class="page-title text-left mb-4">회사소개</h4>
        <div class="row">
            <div class="col-12">
                <div class="" id="intro-section">

                </div>
                <div id="b_sub_content" class="border p-3 privacy_con">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5 text-right">
    <!-- <span class="btn-link font-weight-noraml" style="cursor: pointer;">이용약관 보러가기</span> -->
</div>

<script type="text/javascript">
$(function() {
    MainIntroLoad();
})

function MainIntroLoad() {
    $.ajax({
        url: SERVER_AP + "/main/mainbanner-intro",
        type: "post",
        cache: false,
        data: {},
        success: function(data) {
            var str = `<img src="${data[0].b_img}" alt="" class="w-100">`
            $("#intro-section").append(str);
            console.log('체크 : ', data[0])
            $('#b_sub_content').html(data[0].b_sub_content)
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>