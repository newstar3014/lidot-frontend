<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>

<style media="screen">
.nav-tabs .nav-link {
    border: 1px solid #eaeaea !important;
}

.pointer {
    cursor: pointer;
}

/* .p_text img{
        width: 100% !important;
    } */
.share_icon_box {
    display: flex;
    justify-content: space-evenly;
}

.modal-backdrop {
    display: none;
}

.good_review {
    padding: 7px 10px;
    border: 1px solid #eaeaea;
    border-radius: 15px;
    font-size: 12px;
}

.good_review.active {
    background: #FF5357;
    color: white;
    border: none;
}

details img {
    width: 150px !important;
}

input[type=checkbox] {
    position: relative;
    top: 1px;
}

.rightside td {
    padding: 10px;
    border: none;
}

.reviewimgClose {
    position: absolute;
    top: 5px;
    right: 3px;
    color: white;
    cursor: pointer;
    font-size: 15px;
    background-color: #bbb;
    box-shadow: 0 0 3px #888;
    padding: 3px 3px;
    border-radius: 2px;
    transition: all 0.4s;
}

.reviewimgMore {
    position: absolute;
    top: 5px;
    right: 51px;
    color: white;
    cursor: pointer;
    font-size: 15px;
    background-color: #bbb;
    box-shadow: 0 0 3px #888;
    padding: 3px 3px;
    border-radius: 2px;
    transition: all 0.4s;
}

.reviewimgChange {
    position: absolute;
    top: 5px;
    right: 27px;
    color: white;
    cursor: pointer;
    font-size: 15px;
    background-color: #bbb;
    box-shadow: 0 0 3px #888;
    padding: 3px 3px;
    border-radius: 2px;
    transition: all 0.4s;
}

.reviewimgMore:hover,
.reviewimgClose:hover,
.reviewimgChange:hover {
    opacity: 0.7;
}

.disprice {
    text-decoration: line-through;
    color: #999;
}

.dots {
    white-space: normal;
    display: -webkit-box;
    -webkit-line-clamp: 5;
    /* 텍스트를 자를 때 원하는 단위 ex) 3줄 */
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.slick-slide>div {
    transform: scale(.5);
    transition: transform .3s cubic-bezier(.4, 0, .2, 1);
}

.slick-center>div {
    transform: scale(1);
}

.slider__item>img {
    width: 100%;
    height: auto;
}


.review_img {
    width: 350px;
    height: 200px;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
}

.product_details_tab .nav-item .nav-link.active {
    color: '#000000'
}

.product_details_tab {
    z-index: 0 !important;
}

.more-product-img {
    /* width: 100px; */
    height: 15vw;
    max-height: 80px;
    background-size: cover !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
}

#optionDiv {
    align-items: center;
}

.add-option-name {
    font-size: 11px;
    color: #fff;
    font-weight: normal;
    padding: 4px 9px;
    background: #555;
    border-radius: 3px;
}

.fs-10 {
    font-size: 10px;
}

.navimg.slick-current {
    box-shadow: 0 0 0 2px #555;
}

#mainImgSliderNav .slick-track {
    padding-top: 5px;
    margin-bottom: 37px;
}

.single_user_review img {
    width: 150px !important;
}

#description img {
    width: 70% !important;
}

#description p {
    margin-bottom: 0;
}

/* #quick_menu{
        height: 100vh;
        overflow-y: scroll;
    }
    #quick_menu::-webkit-scrollbar {
      width: 2px;
    }
    #quick_menu::-webkit-scrollbar-track {
      background-color: transparent;
    }
    #quick_menu::-webkit-scrollbar-thumb {
      border-radius: 2px;
      background-color: #ccc;
    }
    #quick_menu::-webkit-scrollbar-button {
      width: 0;
      height: 0;
    } */
.single_product_thumb {
    z-index: 0 !important;
}

#soldoutdiv {
    position: absolute;
    bottom: 10px;
    left: 0;
    z-index: 999;
    font-weight: bold;
    font-size: 20px;
    color: white;
    padding: 5px 10px;
    background: rgba(0, 0, 0, 0.5);
}

#tab_boxs {
    margin-top: 180px;
}

.description_area {
    margin-top: 150px;
}

.question-table * {
    font-size: 13px;
}

.op_price_tag {
    font-size: 14px;
    width: 30%;
}

@media (max-width:760px) {

    #description img,
    #description iframe {
        width: 100% !important;
    }

    .single_user_review img {
        width: 120px !important;
    }

    .op_price_tag {
        width: auto;
    }

    .question-table * {
        font-size: 10px !important;
    }

    .m-none {
        display: none !important;
    }

    .review_img {
        width: 120px;
        height: 80px;
    }

    #product-details-tab {
        font-size: 10px;
    }

    .nav-link {
        padding: 10px;
    }

    #tab_boxs {
        margin-top: 34px;
    }

    .description_area {
        margin-top: 34px;
    }

    .p_name {
        font-size: 14px;
        color: black;
        line-height: 23px;
    }

    .p_name span {
        display: none;
    }

    .this_pp {
        font-size: 20px;
        color: black;
        line-height: 23px;
    }

    .breadcrumb {
        border-bottom: 1px solid #666;
        border-radius: 0;
        padding: 7px 5px;
    }

    .breadcrumb li a {
        color: #666;
    }

    .reviewnum_wrap span {
        font-size: 18px !important;
    }
}

@media (min-width:760px) {
    .pc-none {
        display: none !important;
    }
}

#naver {
    width: 68px;
}

.band_img img {
    width: 68px;
}

.carousel-cell {
    width: 33%;
    height: 100px !important;
    border: 1px solid black;
}

.b_bottom {
    border-bottom: 2px solid black;
}

.nav-tabs {
    display: flex !important;
}

.nav-tabs li {
    width: 25%;
    display: block !important;
}

.nav-tabs .nav-link {
    border-top-left-radius: 0 !important;
    border-top-right-radius: 0 !important;
}

details summary::-webkit-details-marker,
details summary::marker {
    display: none;
    content: "";
}

.fa-turn-up {
    transform: rotate(90deg);
}

.answertag {
    padding: 3px 5px;
    background: #666;
    color: white;
    font-size: 10px;
    border-radius: 3px;
    position: relative;
    top: -2px;
}

.besttag {
    padding: 3px 5px;
    background: red;
    color: white;
    font-size: 10px;
    border-radius: 3px;
    position: relative;
    top: -2px;
}

pre {
    color: rgb(77, 81, 89);
    font-family: '나눔고딕', 'NanumGothic', "Helvetica Neue", 'Helvetica', 'AppleSDGothicNeo-Regular', 'Arial', '맑은고딕', "malgun gothic", '돋움', 'dotum', 'sans-serif';
    font-size: 13px;
    white-space: pre-wrap;
}

.question_title {
    height: 17px;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;

}

.comment.more {
    height: 100px;
    overflow: hidden;
    vertical-align: top;
    text-overflow: ellipsis;
    word-break: break-all;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 3
}

.qa_text_wrap {
    font-size: 20px;
    width: 100%;
    padding: 10px 10px;
    background: #353A4D;
    margin-bottom: 15px;
    color: #fff;
    font-weight: bold;
}

#contact table th {
    /* width: 20%; */
    border: 1px solid #eaeaea;
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

.dots {
    white-space: normal;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    /* 텍스트를 자를 때 원하는 단위 ex) 3줄 */
    -webkit-box-orient: vertical;
    overflow: hidden;
}

@media (max-width: 769px) {
    .question_title {
        height: 10px;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;

    }



    #contact table th {
        width: 31%;
        border: 1px solid #eaeaea;
    }

    .btn-sm {
        padding: 0px 8px;
        height: 34px;
        line-height: 34px;
    }

    .th_1 {
        width: 1% !important;
    }

    .th_2 {
        width: 80% !important;
    }

    .fs_13 {
        font-size: 13px !important;
    }
}
</style>

<!-- Breadcumb Area -->
<div class="breadcumb_area">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <h5>Q&A관리</h5>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="shop_main.php">Home</a></li>
                    <li class="breadcrumb-item active">Q&A관리</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb Area -->

<!-- Message Now Area -->
<div class="message_now_area section_padding_100" id="contact">
    <div class="container">
        <h5 class="mb-3">Q&A목록</h5>
        <!-- <div class="d-flex mb-3">
                <div class="d-flex align-items-center">
                    <input type="date" name="" value="" class="form-control form-control-sm"> <span class="mx-2">~</span> <input type="date" name="" value="" class="form-control form-control-sm">
                    <span class="btn btn-sm btn-secondary ml-2" style="width:110px; height: 31px; line-height: 31px;">검색</span>
                </div>
            </div> -->
        <div class="refund_area">
            <div class="mb-4">
                <table class="table text-center question-table">
                    <tr>
                        <th class="th_1">답변상태</th>
                        <th class="th_2">내용</th>
                        <th class="m-none">작성일</th>
                        <th class="">기능</th>
                    </tr>
                    <tbody id="question-wrap">

                    </tbody>
                </table>
            </div>
        </div>

        <div id="paged-wrap" class="mt-5">
            <nav aria-label="Page navigation example">
                <ul id="paged-content" class="pagination justify-content-center"></ul>
            </nav>
        </div>
    </div>
</div>
<!-- Message Now Area -->


<div class="modal" tabindex="-1" role="dialog" id="review-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="mb-3" id="review-modal-body-img">

                </div>
                <div class="" id="review-modal-body">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="delete_modal" tabindex="-1">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body text-center pt-5">
                <p style="font-size:20px;">삭제하시겠습니까?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" style="border-radius:8px;"
                    data-dismiss="modal">취소</button>
                <button type="button" class="modal_delete_btn btn btn-danger">삭제</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
var ppp = 10;
var page = 1;

$(function() {

    if ($(window).width() > 768) {
        $(".m_wrap").remove()
    } else {
        $(".pc_wrap").remove()
    }

    LoadQues()
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
function LoadQues() {
    $.ajax({
        url: SERVER_AP + "/review/qna_ask",
        type: "post",
        cache: false,
        data: {
            page: page,
            ppp: ppp,
            order: 'pq_seq desc',
            u_seq: user_info.u_seq
        },
        success: function(data) {
            //console.log("data >>",data);
            $(".quesnum").text(data.totalCount);
            $("#question-wrap").html("");
            if (data.totalCount == 0) {
                var nstr = `<tr>
                                <td colspan="10" class="py-5">등록된 상품문의가 없습니다.</td>
                            </tr>`;
                $("#question-wrap").append(nstr);
            } else {
                $.each(data.rows, function(i, v) {
                    var name = "";
                    if (v.u_id) {
                        // var username = v.u_id;
                        // if (v.u_id.length > 2) {
                        //     name = username.slice(0, 1);
                        //     for (var j = 0; j < username.length -2; j++)
                        //         name += '*';
                        //     name += username.slice(-1);
                        // } else {
                        //     name = username.slice(0, 1);
                        //     name += username.length > 1 ? '*' : '';
                        // }
                        let maskLen = v.u_id.slice(4, v.u_id.length).length;
                        let mask = ``;
                        for (var j = 0; j < maskLen; j++) mask += "*";
                        name = v.u_id.slice(0, 4) + mask;
                    } else {
                        name = "홍길동";
                    }

                    let delbtn = ``;
                    if (user_info && user_info.u_seq == v.u_seq) {
                        delbtn =
                            `<span class="text-danger pointer" onclick="quesDel(${v.pq_seq})"><i class="fa-solid fa-trash-can"></i></span>`;
                    }

                    var imgarr = JSON.parse(v.pq_pic);
                    var picstr = ``;
                    $("#pq_pic_wrap").html("");
                    $.each(imgarr, function(ii, vv) {
                        picstr +=
                            '<div class="pointer d-inline-block mr-2 mt-2" onclick="reviewimgMoreClick(\'' +
                            vv +
                            '\',event)" ><img src="' +
                            vv +
                            '" alt=" " style="width:100%;"></div>';
                    });

                    console.log("dd", picstr);

                    let answerState = "";
                    let answerText = "";
                    if (!v.pq_answear) {
                        answerState = "대기중";
                    } else {
                        answerState = "답변완료";
                        answerText =
                            `<div class="border my-3 p-2 d-flex" style="background:#fafafa; align-items: baseline;">
                                            <i class="fa-solid fa-turn-up ml-2 mr-1"></i>
                                            <span class="answertag mr-2">답변</span>
                                            <pre class="mb-0 d-inline-block">` +
                            v.pq_answear +
                            `</pre>
                                        </div>`;
                    }

                    let rock = "";
                    let question_title = `question_title`;

                    var str =
                        `<tr>
                                    <td>${answerState}</td>
                                    <td class="text-left">
                                        <details>
                                            <summary>
                                                <h6 class="d-inline-block" style="font-size:13px;">
                                                <div class="d-flex align-items-center">
                                                    Q. <div class="${question_title}">
                                                            ${v.pq_coments.replace(
                                                              /<(\/)?([a-zA-Z]*)(\s[a-zA-Z]*=[^>]*)?(\s)*(\/)?>/gi,
                                                              ""
                                                            )}
                                                        </div>
                                                        ${rock}
                                                </div>
                                                <span class="pc-none">/ ${name} / ${v.pq_date}</span></h6>
                                            </summary>
                                            <div class="border my-3 p-2" style="background:#fafafa;">
                                                ` + v.pq_coments + picstr + `
                                            </div>
                                            ${answerText}
                                        </details>
                                    </td>
                                    <td class="m-none">${v.pq_date}</td>
                                    <td>
                                        <span onclick="quesDel(${v.pq_seq})" class=" mr-2 fs_13"><i class=" fs_13 fa-solid fa-trash-can"></i></span>
                                        <span onclick="location.href='/qna_detail.php?pq_seq=${v.pq_seq}'" class="fs_13"><i class="fs_13 fa-solid fa-pencil"></i></span>
                                    </td>
                                </tr>`;
                    $("#question-wrap").append(str);


                });



                drawPaging(data.totalPage);
            }
        },
        error: function(request, status, error) {
            console.log(error);
        },
    });
}

function quesDel(pq_seq) {
    if (confirm("해당 문의글을 삭제 하시겠습니까?")) {
        $.ajax({
            url: SERVER_AP + "/admin/common/delete",
            type: "post",
            cache: false,
            async: false,
            data: {
                table: "product_question",
                field: "pq_seq",
                seq: pq_seq,
            },
            success: function(data) {
                alert("삭제 되었습니다!");
                location.reload();
            },
            error: function(request, status, error) {
                console.log(error);
            },
        });
    }
}

function goPage(_page) {
    if (_page == 'prev') {
        page = (page * 1) - 1;
    } else if (_page == 'next') {
        page = (page * 1) + 1;
    } else {
        page = _page;
    }
    LoadProduct()
}

function reviewDel(pq_seq) {
    $('#delete_modal').modal('show');
    $('.modal_delete_btn').attr('onclick', `realDelete(${pq_seq})`)
    // if (confirm("해당 문의를 삭제하시겠습니까?")) {
    //     $.ajax({
    //         url: SERVER_AP + "/admin/common/delete",
    //         type: "post",
    //         cache: false,
    //         data: {
    //             table: 'order_ask',
    //             field: 'pq_seq',
    //             seq: pq_seq,
    //         },
    //         success: function(data) {
    //             location.reload()
    //         },
    //         error: function(request, status, error) {
    //             console.log(error);
    //         }
    //     });
    // }
}

function realDelete(pq_seq) {
    if (confirm("해당 문의를 삭제하시겠습니까?")) {
        $.ajax({
            url: SERVER_AP + "/admin/common/delete",
            type: "post",
            cache: false,
            data: {
                table: 'order_ask',
                field: 'pq_seq',
                seq: pq_seq,
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

function openModal(pq_seq) {
    var obj = new Object();
    obj.pq_seq = pq_seq;
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        data: {
            table: 'product_review',
            common: obj,
        },
        success: function(data) {

            let imgarr = JSON.parse(data[0].pr_pic)
            $.each(imgarr, function(i, v) {
                let str = `<img src="${v}" alt="" class="mx-1">`
                $("#review-modal-body-img").append(str)
            })

            $("#review-modal-body").html(data[0].pr_comments)

            $("#review-modal").modal('show')
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}
</script>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>