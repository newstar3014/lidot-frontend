<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>

<style media="screen">
table td {
    border: 1px solid #EBECEF;
}

table th {
    background-color: #fff;
    border: 1px solid #EBECEF;
}

.post_delete_div {
    position: absolute;
    top: 10px;
    right: 10px;
}


.menu-box {
    border-radius: 5px;
    background-color: #f8f8f8;
    padding: 20px;
    text-align: center;
    font-size: 15px;
    cursor: pointer;
}

.pro-thumnail {
    width: 50px;
    height: 50px;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
}

.breadcrumb {
    float: right;
    padding-right: 0;
    margin-right: 0px;
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

.btn-khaki {
    background: #747794 !important;
    color: #fff;
}

.coupon-detail {
    padding: 10px;
}

.coupon-detail li {
    margin-bottom: 10px;
}

.coupon-detail li:last-child {
    margin-bottom: 0;
}

.pr_comments {}

.pr_comments p {

    margin-bottom: 0;
}

.ell {
    width: 300px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.fr_td {
    width: 200px;
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
}

.nodata_wrap {
    /* padding: */
    border: 1px solid #EBECEF;
    border-top: 0;
}


@media (max-width:768px) {
    .pr_comments p {
        max-width: 150px !important;
    }
}

.table_div {
    overflow: auto;
}

.table_div table {
    min-width: 500px;
}



.row-item{
    width: 100%;
    margin-left: 0;
}

.table-item{
    width: 100%;
}
.table-item > tbody > tr{
    border-bottom: 1px solid #eee;
}
.table-item > tbody > tr:last-child{
    border-bottom: none;
}
.table-item > tbody > tr > th{
    background: white;
    text-align: center;
    width: 25%;
}

.table-item td{
    border: none;
}

.table-item-inner{

}

.table-item-inner > tbody > tr > th{
    background: white;
}

.item-mobile{
    border-bottom: 1px solid lightgray;
    padding: 10px 5px;
}

.time-mobile{
    border-bottom: 1px solid lightgray;
    padding: 10px 5px;
}

.post-mobile{
    border-bottom: 1px solid lightgray;
    padding: 10px 0 15px 0;
}

.pr_comments_m p{
    max-width: 100%;
}
.pr_comments_m img{
    width: 100% !important;
}

#table-select{
    padding: 5px;
}
@media (max-width: 769px){
    .table_order {
        min-width: 100%;
    }
    #board-search-wrap #board-sk{
        max-width: 120px;
    }
}

</style>
<link href="/css/mypage.css" rel="stylesheet">
<!-- Breadcumb Area -->
<div class="breadcrumb-wrap">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <ol class="breadcrumb mt-2 bg-white mr-2">
                    <li class="breadcrumb-item"><a href="/">홈</a></li>
                    <li class="breadcrumb-item"><a href="mypost.php">게시물 관리</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb Area -->

<!-- Message Now Area -->
<div class="message_now_area" id="contact">
    <div class="container">
        <h4 class="page-title text-dark text-center mb-4 font-weight-bold">MY POST</h4>
        <div class="sub_mypage_menu_div">
            <div class="pointer" onclick="openCheck(1)">
                정보수정
            </div>
            <div class="gray_bar"></div>
            <div class="pointer" onclick="location.href='order_list.php'">
                주문내역
            </div>
            <div class="gray_bar"></div>
            <div class="pointer" onclick="location.href='point.php'">
                적립금 내역
            </div>
            <div class="gray_bar"></div>
            <div class="pointer" onclick="location.href='wishlist.php'">
                관심상품
            </div>
            <div class="gray_bar"></div>
            <div class="pointer" onclick="location.href='coupon.php'">
                할인쿠폰
            </div>
            <div class="gray_bar"></div>
            <div class="pointer on" onclick="location.href='mypost.php'">
                내가쓴게시물
            </div>
            <div class="gray_bar"></div>
            <div class="pointer" onclick="location.href='address.php'">
                배송주소록
            </div>
        </div>
        <div class="text-right border-top mt-4 pt-3 mb-3">
            <select name="" id="table-select" class="border">
                <option value="product_review" attr-name="상품후기">상품후기</option>
                <option value="product_question" attr-name="상품문의">상품문의</option>
                <option value="community" attr-name="A/S문의">A/S문의</option>
            </select>
        </div>
        <div class="d-none d-md-block table_div">
            <table class="table text-center table_order">
                <tr>
                    <th class="font-weight-normal">분류</th>
                    <th class="font-weight-normal">이미지</th>
                    <!-- <th class="font-weight-normal as_none">상품명</th> -->
                    <th class="font-weight-normal">제목</th>
                    <th class="font-weight-normal">작성일</th>
                    <th class="font-weight-normal change_th">조회수</th>
                </tr>
                <tbody id="post-list-tbody">

                </tbody>
            </table>
        </div>
        <div class="d-md-none table_div w-100" id="post-list-tbody_m">
        </div>

        <div id="post-no-data" class="nodata_wrap py-5 text-center">
            <p class="mb-0">게시물이 없습니다.</p>
        </div>
        <div id="paged-wrap" class="my-5">
            <nav aria-label="Page navigation example">
                <ul id="paged-content" class="pagination justify-content-center"></ul>
            </nav>
        </div>

        <div id="board-search-wrap" class="mb-5 text-center">
            <select id="board-st">
                <option value="제목">제목</option>
                <option value="내용">내용</option>
            </select>
            <input type="text" id="board-sk">
            <span class="btn-search" onclick="goSearch();">찾기</span>
        </div>
    </div>


</div>
<!-- Message Now Area -->
<script type="text/javascript">
var page = '<?php echo $_GET['page'];?>';
var ppp = 10;
if (!page) {
    page = 1;
}

var c_kind = '';
var order = '';
var sk = '<?php echo $_GET['sk'];?>';
var st = '<?php echo $_GET['st'];?>';
$(function() {
    drawMyPost();
    //loadHomedata()
})

// function loadMydata(){
//     var obj = new Object();
//     obj.u_seq = user_info.u_seq;
//     $.ajax({
//         url: SERVER_AP+"/admin/common/condition",
//         type: "post",
//         cache: false,
//         data:{
//             table: 'user',
//             common:obj,
//         },
//         success: function(data){
//             $("#u_name").text(data[0].u_name)
//             $("#u_rank").text(data[0].u_rank)
//             $("#u_email").text(data[0].u_email)
//             $("#u_phone").text(data[0].u_phone)
//             $("#u_point").text(data[0].u_point)
//         },
//         error: function (request, status, error){
//             console.log(error);
//         }
//     });
// }
function goSearch() {
    location.href = `mypost.php?page=${page}&&ppp=${ppp}&sk=${sk}&st=${st}`;
}

$('#table-select').change(function() {
    page = 1;

    drawMyPost();
})

function drawMyPost() {
    let table = $('#table-select').val();

    if (table == 'community') {
        c_kind = 'AS';
    } else {
        c_kind = '';
    }

    if (table == 'community') {
        $('.as_none').addClass('d-none')
        order = 'c_date';
    } else if (table == 'product_question') {
        order = 'pq_date';
        $('.as_none').removeClass('d-none')
        $('.change_th').html('답변')
    } else {
        order = 'pr_date';
        $('.as_none').removeClass('d-none')
    }

    sk = $('#board-sk').val();

    if ($('#board-st').val() == '제목') {

        if (table == 'community') {
            st = 'c_title';
        } else if (table == 'product_question') {
            st = 'oa_title';
        } else {
            st = 'pr_comments';
        }

    } else if ($('#board-st').val() == '내용') {

        if (table == 'community') {
            st = 'c_content';
        } else if (table == 'product_question') {
            st = 'oa_text';
        } else {
            st = 'pr_comments';
        }

    }


    if (table == 'product_question') {
        $('.change_th').html('답변')
    } else {
        $('.change_th').html('조회수')
    }

    let obj = {
        sk: sk,
        st: st
    }
    $.ajax({
        url: SERVER_AP + "/api/review_paging",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: table,
            page: page,
            ppp: ppp,
            u_seq: user_info.u_seq,
            c_kind: c_kind,
            obj: obj,
            order: order
        },
        success: function(data) {
            console.log('drawMyPost : ', data)
            $('#post-list-tbody, #post-list-tbody_m').html('');
            if (data.rows.length == 0) {
                $('#post-no-data').removeClass('d-none');
            } else {
                $('#post-no-data').addClass('d-none');

                let imgStr = '';
                let str = '';
                let str_m = '';
                if (table == 'community') {
                    $.each(data.rows, function(i, v) {

                        let pic = '<div class="width:60px;height:60px;background:#ddd;"></div>';

                        if (v.c_thum) {

                            pic = `<img class="w-100" src="${v.c_thum}">`;

                        }

                        str += `<tr>
                        <td>A/S문의</td>
                        <td style="max-width:60px;">${pic}</td>
                        <td class="">
                            <div>
                                <div>
                                    <span class="truncate-text">${v.c_title}</span>
                                </div>
                            </div>
                        </td>
                        <td class="fr_td">${v.c_date.slice(0,11)}</td>
                        <td class="position-relative">
                            <div class="post_delete_div pointer" onclick="deletePost(${v.c_seq},'${table}')">
                                <i class="fa-solid fa-xmark"></i>
                            </div
                        </td>
                    </tr>`;


                    })

                } else if (table == 'product_question') {
                    console.log('xxxxx', data.rows);

                    $.each(data.rows, function(i, v) {

                        let checkAnswer = `X`;
                        let answerStr = ``;
                        if (v.pq_answear) {
                            checkAnswer = `O`;
                            answerStr = `<span class="tag answer">답변완료</span>`;
                        }




                        if (v.p_image) {
                            p_Image = JSON.parse(v.p_image)[0]
                            imgStr = `      <img class="pointer"
                                    onclick="location.href='/product_detail.php?p_seq=${v.p_seq}'"
                                    src="${ p_Image }" width="100px"/>`

                        } else {
                            imgStr = `삭제된 상품입니다.`
                        }
                        str += `<tr>
                        <td>상품문의</td>
                        <td style="max-width:60px;">${imgStr}</td>
                        <td class="">
                            <div>
                                <div onclick="location.href='/qna_view.php?pq_seq=${v.pq_seq}'"  class="pointer">
                                    <span class="truncate-text">${v.pq_coments}</span>
                                </div>
                            </div>
                        </td>
                        <td class="fr_td">${v.pq_date.slice(0,11)}</td>
                        <td class="position-relative">
                        ${checkAnswer}
                            <div class="post_delete_div pointer" onclick="deletePost(${v.pq_seq},'${table}')">
                            <i class="fa-solid fa-xmark"></i>
                            </div
                        </td>
                    </tr>`;

                    str_m += `<div class="post-mobile">
                        <div class="row row-item">
                            <div class="col-4">
                                ${imgStr}
                            </div>
                            <div class="col-8 position-relative">
                                <div class="p_name mt-2">
                                    <span class="tag">상품문의</span>${answerStr}
                                </div>
                                <div class="mb-2">작성일 : ${v.pq_date.slice(0,11)}</div>
                                <div class="td_p_">
                                    <div class="">
                                        <div  onclick="location.href='/qna_view.php?pq_seq=${v.pq_seq}'">
                                            <span class="truncate-text">${v.pq_coments}</span>
                                        </div>
                                    </div>
                                </div>
                                <span class="close_btn pointer" style="top:0" onclick="deletePost(${v.pq_seq},'${table}');">
                                <i class="fa-solid fa-xmark"></i>
                                </span>
                            </div>
                        </div>
                    </div>`;

                    })

                } else {
                    $.each(data.rows, function(i, v) {

                        let pic = '<div class="width:60px;height:60px;background:#ddd;"></div>';

                        if (v.p_image) {
                            p_Image = JSON.parse(v.p_image)[0]
                            imgStr = `      <img class="pointer"
                                    onclick="location.href='/product_detail.php?p_seq=${v.p_seq}'"
                                    src="${ p_Image }" width="100px"/>`

                        } else {
                            imgStr = `삭제된 상품입니다.`
                        }

                        console.log('ccc', v.pr_comments);
                        str += `<tr>
                            <td>상품후기</td>
                            <td style="max-width:60px;">${imgStr}</td>
                            <td>
                                <div>
                                    <div onclick='location.href="review-view.php?pr_seq=${v.pr_seq}&p_seq=${v.p_seq}&o_seq=${v.po_seq}"' class="pointer">
                                        <span class="truncate-text">${removeEmptyTags(v.pr_comments)}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="fr_td">${v.pr_date.slice(0,11)}</td>
                            <td class="position-relative">
                            ${v.pr_cnt}
                                <div class="post_delete_div pointer" onclick="deletePost(${v.pr_seq},'${table}')">
                                <i class="fa-solid fa-xmark"></i>
                                </div>
                            </td>
                        </tr>`;

                        str_m += `<div class="post-mobile">
                            <div class="row row-item">
                                <div class="col-4">
                                    ${imgStr}
                                </div>
                                <div class="col-8 position-relative">
                                    <div class="p_name mt-2">
                                        <span class="tag">상품후기</span>
                                    </div>
                                    <div class="mb-2">작성일 : ${v.pr_date.slice(0,11)}</div>
                                    <div class="td_p_" onclick='location.href="review-insert.php?pr_seq=${v.pr_seq}&p_seq=${v.p_seq}&po_seq=${v.po_seq}"'>
                                        <div>
                                            <div>
                                                <span class="truncate-text pr_comments_m">${removeEmptyTags(v.pr_comments)}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="close_btn pointer" style="top:0;" onclick="deletePost(${v.pr_seq},'product_review');">
                                        <i class="fa-solid fa-xmark"></i>
                                        </span>
                                </div>
                            </div>
                        </div>`;


                    })

                }

                $('#post-list-tbody').append(str);
                $('#post-list-tbody_m').append(str_m);


                drawPaging(data.totalPage);

            }
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

function removeEmptyTags(input) {
    // 사용자 입력에서 <p><br></p> 문자열을 삭제합니다.
    var cleanedInput = input.replace(/<p><br><\/p>/g, '');

    return cleanedInput;
}

function goPage(_page) {
    if (_page == 'prev') {
        page = (page * 1) - 1;
    } else if (_page == 'next') {
        page = (page * 1) + 1;
    } else {
        page = _page;
    }
    drawMyPost()
}

function couponDel(uc_seq) {
    if (confirm("해당 쿠폰을 삭제하시겠습니까?")) {
        $.ajax({
            url: SERVER_AP + "/admin/common/delete",
            type: "post",
            cache: false,
            data: {
                table: 'user_coupon',
                field: 'uc_seq',
                seq: uc_seq,
            },
            success: function(data) {
                location.reload()
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }
}

function deletePost(seq, table) {
    let fieldStr = ''

    if (table == 'product_review') {
        fieldStr = 'pr_seq'
    } else if (table == 'product_question') {
        fieldStr = 'pq_seq'
    } else {
        fieldStr = 'c_seq'
    }

    if (confirm("해당 항목을 삭제하시겠습니까?")) {
        $.ajax({
            url: SERVER_AP + "/common/delete",
            type: "post",
            cache: false,
            data: {
                table: table,
                field: fieldStr,
                seq: seq,
            },
            success: function(data) {
                location.reload()
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }
}
var openWin;

function changeAddr() {
    if (openWin != null) openWin.close();
    var _url = '/ordermanage.php';
    var _width = '500';
    var _height = '700';
    var _left = Math.ceil((window.screen.width - _width) / 2);
    var _top = Math.ceil((window.screen.width - _height) / 2);

    openWin = window.open(_url, 'ORDER', 'width=' + _width + ', height=' + _height + ', left=' + _left + ', top=' +
        _top);
}


var goCheckType = ""

function openCheck(check) {
    if (check == 1) {
        location.href = 'myPageEdit.php?seq=' + user_info.u_seq + ''
    } else {
        $('#openCheck').modal('show');
    }

    goCheckType = check;

}
</script>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
