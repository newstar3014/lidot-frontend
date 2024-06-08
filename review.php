<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>

<style media="screen">
table td {
    border: 1px solid #eaeaea;
}

table th {
    background-color: #f8f8f8;
}

#contact table th {
    width: 20%;
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

.delete_review_x {
    right: 13px;
    position: absolute;
    top: 10px;
}
</style>

<!-- Breadcumb Area -->
<div class="breadcumb_area">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <h5>리뷰관리</h5>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="shop_main.php">Home</a></li>
                    <li class="breadcrumb-item active">리뷰관리</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb Area -->

<!-- Message Now Area -->
<div class="message_now_area section_padding_100" id="contact">
    <div class="container">
        <h5 class="mb-3">리뷰목록</h5>
        <!-- <div class="d-flex mb-3">
                <div class="d-flex align-items-center">
                    <input type="date" name="" value="" class="form-control form-control-sm"> <span class="mx-2">~</span> <input type="date" name="" value="" class="form-control form-control-sm">
                    <span class="btn btn-sm btn-secondary ml-2" style="width:110px; height: 31px; line-height: 31px;">검색</span>
                </div>
            </div> -->
        <div class="pc_wrap">
            <table class="table border text-center review-table">
                <tr>
                    <th style="width:5%">#</th>
                    <th style="width:10%">상품이미지</th>
                    <th>상품명</th>
                    <th style="width:10%">가격</th>
                    <th style="width:10%">옵션</th>
                    <th>평점</th>
                    <th>내용</th>
                    <th style="width:10%">등록날짜</th>
                    <th style="width:10%"></th>
                </tr>
                <tbody id="review-list-tbody">

                </tbody>
            </table>
        </div>

        <div class="m_wrap">
            <div class="" id="review-list-m">


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


<script type="text/javascript">
var ppp = 10;
var page = 1;

$(function() {

    if ($(window).width() > 768) {
        $(".m_wrap").remove()
    } else {
        $(".pc_wrap").remove()
    }

    LoadMyReview()
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

function LoadMyReview() {
    $.ajax({
        url: SERVER_AP + "/review/review-paging",
        type: "post",
        cache: false,
        data: {
            page: page,
            ppp: ppp,
            order: 'pr_seq desc',
            u_seq: user_info.u_seq
        },
        success: function(data) {
            $("#review-list-tbody").html('');
            if (data.totalCount == 0) {
                var str = '<tr>\
                                  <td colspan="14" class="py-4 text-center">상품이 없습니다.</td>\
                                </tr>';
                $("#review-list-tbody").append(str);
            } else {
                // <span class="btn btn-sm btn-secondary" onclick="reviewDel(' + v.pr_seq +
                //             ')">삭제</span>\
                $.each(data.rows, function(i, v) {
                    var number = (page * ppp) - ppp + (i + 1) //1부터 시작
                    // var number = data.totalCount - ((page-1)*ppp+(i)) //끝번호부터시작
                    var mainimg = JSON.parse(v.p_image);

                    if ($(window).width() > 768) {
                        var str = '<tr>\
                                          <td>' + number + '</td>\
                                          <td>\
                                            <div class="pro-thumnail pointer mx-auto" style="background:url(\'' +
                            mainimg[0] + '\')" onclick="location.href=`product_detail.php?p_seq=' +
                            v.p_seq + '`"></div>\
                                          </td>\
                                          <td>' + v.p_name + '</td>\
                                          <td>' + comma(v.p_price) + ' 원</td>\
                                          <td>' + v.pr_options + '</td>\
                                          <td class="stars' + v.pr_seq + '" style="color:#e7eb3f;"></td>\
                                          <td class="pointer" onclick="location.href=`bestreview_detail.php?pr_seq=' +
                            v.pr_seq + '&p_seq=' + v.p_seq + '&view=Y`"><div class="dots">' + v
                            .pr_comments + '</div></td>\
                                          <td>' + v.pr_date +
                            '</td>\
                                          <td class="position-relative">\
                                            <div class="delete_review_x" onclick="reviewDel(' + v.pr_seq +
                            ')"><i class="fa-solid fa-xmark"></i></div>\
                                            <span class="btn btn-sm btn-primary mt-2" onclick="location.href=`review-insert.php?pr_seq=' +
                            v.pr_seq + '&p_seq=' + v.p_seq + '`">수정</span>\
                                          </td>\
                                        </tr>';
                        $("#review-list-tbody").append(str);

                        for (let i = 0; i < v.pr_star; i++) {
                            $(".stars" + v.pr_seq).append('<i class="fa fa-star"></i>')
                        }
                    } else {
                        let mstr = `<div class="border p-3 my-2" style="font-size:12px;">
                                            <div class="d-flex justify-content-between">
                                                <div class="dots mr-2">${v.p_name}</div>
                                                <div class="text-right">${v.pr_date}</div>
                                            </div>
                                            <hr>
                                            <div class="d-flex">
                                                <div class="mr-3">
                                                    <img src="${mainimg[0]}" alt="" onclick="location.href='product_detail.php?p_seq=${v.p_seq}'" style="min-width:120px; max-width:120px;">
                                                </div>
                                                <div class="">
                                                    <div class="mb-2">가격 : <span>${comma(v.p_price)}</span></div>
                                                    <div class="mb-2">옵션 : <span>${v.pr_options}</span></div>
                                                    <div class="mb-2">평점 : <span class="stars${v.pr_seq}" style="color:#e7eb3f;"></span></div>
                                                    <div class="mb-2">내용 : <span class="dots" onclick="location.href='bestreview_detail.php?pr_seq=${v.pr_seq}&p_seq=${v.p_seq}&view=Y'">${v.pr_comments}</span></div>
                                                </div>
                                            </div>
                                            <div class="btn btn-sm btn-primary mt-2 w-100" onclick="location.href='review-insert.php?pr_seq=${v.pr_seq}&p_seq=${v.p_seq}'">수정</div>
                                            <div class="btn btn-sm btn-secondary mt-2 w-100" onclick="reviewDel(${v.pr_seq})">삭제</div>
                                        </div>`;

                        $("#review-list-m").append(mstr);

                        for (let i = 0; i < v.pr_star; i++) {
                            $(".stars" + v.pr_seq).append('<i class="fa fa-star"></i>')
                        }
                    }
                })

                drawPaging(data.totalPage);
            }
        },
        beforeSend: function() {
            Loading()
        },
        complete: function() {
            $("#div_ajax_load_image").remove();
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
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

function reviewDel(pr_seq) {
    if (confirm("해당 리뷰를 삭제하시겠습니까?")) {
        $.ajax({
            url: SERVER_AP + "/admin/common/delete",
            type: "post",
            cache: false,
            data: {
                table: 'product_review',
                field: 'pr_seq',
                seq: pr_seq,
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

function openModal(pr_seq) {
    var obj = new Object();
    obj.pr_seq = pr_seq;
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