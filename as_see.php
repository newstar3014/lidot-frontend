<!-- Style CSS -->
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php';
    $c_seq = $_GET['c_seq'];
    $u_seq = $_GET['u_seq'];
?>

<!-- CSS -->
<link rel="stylesheet" href="css/pages/community/community.css">

<style media="screen">
    .breadcrumb{
        float:right;
        padding-right: 0;
        margin-right: -10px;
    }
    .breadcrumb-item a{
        color:#999999;
    }
    .breadcrumb-item+.breadcrumb-item::before {
        content: ">";
    }
</style>

    <!-- Breadcumb Area -->
    <div class="breadcrumb-wrap">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <ol class="breadcrumb mt-2 bg-white">
                        <li class="breadcrumb-item"><a href="/">홈</a></li>
                        <li class="breadcrumb-item"><a href="/as.php">A/S 안내</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->

    <!-- Wishlist Table Area -->
    <div class="wishlist-table clearfix">
        <div class="container">
            <div class="">
                <div class="">
                    <div class="wirte_section mx-auto">
                        <div class="d-flex" style="justify-content:space-between; align-items:center;">
                            <h4 class="text-left" id="c_title"></h4>
                        </div>
                        <div class="mt-2 text-secondary">
                            <span>작성자 : <span id="c_user"></span></span>
                            <span class="ml-2">작성일 : <span id="c_date"></span></span>
                            <span class="ml-2">조회수 : <span id="c_view">0</span></span>
                        </div>
                        <div style="border-bottom: 1px solid #d9d9d9;" class="mb-5 mt-1"></div>

                        <div id="c_content" class="p-2 con_bg"></div>

                        <div style="border-bottom: 1px solid #d9d9d9;" class="my-5"></div>

                        <div class="w-100 text-right mt-4" id="btn-wrap">
                            <span onclick="updateCommunityBtn();" class=" btn-primary btn px-2 write-btn">수정하기</span>
                            <span onclick="deleteCommunity();" class=" btn-secondary btn px-2 write-btn">삭제하기</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5 text-right">

    </div>

<!-- JS -->
<script type="text/javascript">
    var c_seq = '<?php echo $c_seq; ?>';
    var u_seq = '<?php echo $u_seq; ?>';

    $(function(){
        if(u_seq != user_info.u_seq){
            $("#btn-wrap").remove()
        }

        loadCommunity();
    })

    function loadCommunity(){
        $.ajax({
            url: SERVER_AP+"/community/condition",
            type: "post",
            cache: false,
            data:{
                c_seq:c_seq,
            },
            success: function(data){
                $('#c_title').text(data[0].c_title);
                $('#c_content').html(data[0].c_content)
                $('#c_type').text(data[0].c_type)
                $('#c_date').text(data[0].c_date)
                $('#c_view').text(data[0].c_view)
                $('#c_user').text(data[0].u_name)

                updateView(data[0].c_view);
            },
            error: function (request, status, error){
                console.log(error);
            }
        });
    }

    function updateView(view){
        var plusview = view*1 + 1
        var obj = new Object();
        obj.c_view = plusview
        $.ajax({
            url: SERVER_AP+"/common/update",
            type: "post",
            cache: false,
            data:{
                table: 'community',
                obj : obj,
                whereField:"c_seq",
                whereValue:c_seq,
            },
            success: function(data){
            },
            error: function (request, status, error){
                console.log(error);
            }
        });
    }

    function updateCommunityBtn(){
        location.href = '/community_add.php?c_seq='+c_seq
    }

    function deleteCommunity(){
        if(confirm("삭제 하시겠습니까?")){
            $.ajax({
                url: SERVER_AP+"/common/delete",
                type: "post",
                cache: false,
                data:{
                    table: 'community',
                    field:"c_seq",
                    seq:c_seq,
                },
                success: function(data){
                    location.href="/community.php"
                },
                error: function (request, status, error){
                    console.log(error);
                }
            });
        }
    }

</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
