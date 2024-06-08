<!-- Style CSS -->
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php';
    $b_seq = $_GET['b_seq'];
?>

<!-- CSS -->
<link rel="stylesheet" href="css/pages/community/community.css">
<!-- Header Area End -->

    <!-- Breadcumb Area -->
    <!-- <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>공지사항</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">공지사항</li>
                    </ol>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Breadcumb Area -->

    <!-- Wishlist Table Area -->
    <div class="wishlist-table section_padding_100 clearfix">
        <div class="container" id="bp_con">

        </div>
    </div>


<!-- JS -->
<script type="text/javascript">
    var b_seq = '<?php echo $b_seq; ?>';

    $(function(){
        loadBanner()
    })

    function loadBanner(){
        obj = {
            b_seq:b_seq,
        }
        $.ajax({
            url: SERVER_AP+"/admin/common/condition",
            type: "post",
            cache: false,
            async:false,
            data:{
                table: 'banner',
                common:obj,
            },
            success: function(data){
                let str = `<img src="${data[0].b_shop_img}" alt="" class="w-100">`
                $("#bp_con").append(str)
            },
            error: function (request, status, error){
                console.log(error);
            }
        });
    }
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
