<!-- Style CSS -->
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>

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

.table-board {
    border-top: 1px solid #EBECEF;
    border-bottom: 1px solid #EBECEF;
}

.table tbody+tbody {
    border-top: 0 !important;
}

#notice tr {
    background: #FAFAFA;
}

#notice td {
    font-weight: bold;
}

.table-board>tbody>tr {
    cursor: pointer;
}

#board-search-wrap select {
    padding: 3px;
    border-color: #ebebeb;
}

#board-search-wrap #board-sk {
    padding: 1px;
    border: 1px solid #ebebeb;
    outline: none;
}

.btn-search {
    background: #84868B;
    color: white;
    padding: 5px 20px;
    border-radius: 3px;
    cursor: pointer;
}
</style>

<!-- CSS -->
<link rel="stylesheet" href="css/pages/community/community.css">
<!-- Header Area End -->

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
        <h4 class="page-title text-left mb-4">A/S 안내</h4>

        <div class="row commu_inner">
            <div class="col-12">
                <table class="table table-board">
                    <thead>
                        <tr>
                            <td>번호</td>
                            <td>제목</td>
                            <td>작성자</td>
                            <td>작성일</td>
                            <td>조회</td>
                        </tr>
                    </thead>
                    <tbody id="notice"></tbody>
                    <tbody id="normal"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="paged-wrap" class="mt-3 mb-5">
    <nav aria-label="Page navigation example">
        <ul id="paged-content" class="pagination justify-content-center"></ul>
    </nav>
</div>


<div class="container mb-5">
    <div id="board-search-wrap">
        <select id="board-sd">
            <option value="">전체</option>
            <option value="1">최근 일주일</option>
            <option value="4">최근 한달</option>
        </select>
        <select id="board-st">
            <option value="c_title">제목</option>
            <option value="c_content">내용</option>
        </select>
        <div class="d-md-inline-block mt-md-0 mt-2">
            <input type="text" id="board-sk" />
            <span class="btn-search" onclick="goSearch();">찾기</span>
        </div>
    </div>
</div>

<!-- JS -->
<script>
var sk = '<? echo $_GET["sk"]; ?>';
var st = '<? echo $_GET["st"]; ?>';
var sd = '<? echo $_GET["sd"]; ?>';
var ppp = 30;
var page = '<? echo $_GET["page"]; ?>';
if (!page) page = 1;
</script>
<script src="/js/pages/as/as.js"></script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>