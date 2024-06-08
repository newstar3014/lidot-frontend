<!-- Style CSS -->
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php';
$c_seq = $_GET['c_seq'];
?>

<!-- CSS -->
<link rel="stylesheet" href="css/pages/community/community.css">
<!-- Header Area End -->

    <!-- Breadcumb Area -->
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>COMMUNITY</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item">Community</li>
                        <li class="breadcrumb-item active">Write</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->

    <!-- Wishlist Table Area -->
    <div class="wishlist-table section_padding_100 clearfix">
        <div class="container">
            <div class="">
                <div class="">
                    <div class="wirte_section mx-auto">
                        <h4 class="text-left pb-1">작성</h4>
                        <div style="border-bottom: 1px solid #d9d9d9;"></div>

                        <div class="row mt-5">
                            <div class="col-md-2 col-12">
                                <p class="con_title mt-3 mb-2 fs-15 font-weight-bold">종류</p>
                                <select id="c_type" class="form-control form-control-sm">
                                    <option value="자유게시판">자유게시판</option>
                                    <option class="d-none admin-dnone" value="공지사항">공지사항</option>
                                </select>
                            </div>
                        </div>

                        <div class="">
                            <p class="con_title mt-3 mb-2 fs-15 font-weight-bold">타이틀</p>
                            <input id="c_title" class="form-control col-12 requisite" type="text" name="타이틀" value="">
                        </div>

                        <p class="con_title mt-3 mb-2 fs-15 font-weight-bold">내용</p>


                        <div id="c_content" class="text-center py-2 con_bg"> </div>

                        <div class="w-100 text-right mt-4">
                            <span onclick="insertCommunity();" class=" btn-primary btn px-2 write-btn">글쓰기</span>
                            <span onclick="updateCommunity();" class=" btn-primary btn px-2 update-btn d-none">수정하기</span>
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
</script>
<script src="/js/pages/community/add.js"></script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
