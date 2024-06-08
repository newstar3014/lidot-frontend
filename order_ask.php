<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>

<style media="screen">
table td {
    border: 1px solid #eaeaea;
}

table th {
    background-color: #f8f8f8;
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

.w-15 {

    width: 15%;
}

._line {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
}
</style>

<!-- Breadcumb Area -->
<div class="breadcumb_area">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <h5>문의관리</h5>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="shop_main.php">Home</a></li>
                    <li class="breadcrumb-item active">문의관리</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb Area -->

<!-- Message Now Area -->
<div class="message_now_area section_padding_100" id="contact">
    <div class="container">
        <h5 class="mb-3">문의목록</h5>
        <!-- <div class="d-flex mb-3">
                <div class="d-flex align-items-center">
                    <input type="date" name="" value="" class="form-control form-control-sm"> <span class="mx-2">~</span> <input type="date" name="" value="" class="form-control form-control-sm">
                    <span class="btn btn-sm btn-secondary ml-2" style="width:110px; height: 31px; line-height: 31px;">검색</span>
                </div>
            </div> -->
        <div class="pc_wrap">
            <table class="table border text-center review-table">
                <tr>
                    <th style="width:3%">#</th>
                    <th>주문번호</th>
                    <th class="w-25">상품명</th>
                    <th>상품이미지</th>
                    <th>제목</th>
                    <th class="w-15">등록날짜</th>
                    <th class="w-15">구매일</th>
                    <th>답변상태</th>
                    <th></th>
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
        url: SERVER_AP + "/review/order_ask",
        type: "post",
        cache: false,
        data: {
            page: page,
            ppp: ppp,
            order: 'oa_seq desc',
            u_seq: user_info.u_seq
        },
        success: function(data) {
            console.log('dfd', data);
            $("#review-list-tbody").html('');

            if (data.totalCount == 0) {
                var str = '<tr>\
                                  <td colspan="14" class="py-4 text-center">상품이 없습니다.</td>\
                                </tr>';
                $("#review-list-tbody").append(str);
            } else {
                $.each(data.rows, function(i, v) {
                    var number = (page * ppp) - ppp + (i + 1) //1부터 시작
                    // var number = data.totalCount - ((page-1)*ppp+(i)) //끝번호부터시작
                    var mainimg = "";

                    let answerCk = '대기중'

                    if (v.oa_answer) {
                        answerCk = '답변완료'
                    }



                    var curr_val = v.oa_seq;
                    var next_val = data.rows[i - 1] !== undefined ? data.rows[i -
                        1].oa_seq : null;
                    console.log('data.rows[i + 1]', data.rows[i + 1]);
                    if (data.rows[i + 1]) {
                        var prev_val = data.rows[i + 1].oa_seq !== undefined ? data.rows[i + 1]
                            .oa_seq :
                            null;
                    }

                    var mainimg = JSON.parse(v.p_image);


                    if ($(window).width() > 768) {
                        var str = `<tr>
                                          <td>${number }</td>
                                          <td>${v.o_num }</td>
                                          <td><div class="pointer text-primary _line" onclick="location.href='product_detail.php?p_seq=${v.p_seq}'">${v.p_name }</div></td>
                                          <td>  <img class="pointer text-primary" src="${mainimg[0]}" alt="" onclick="location.href='product_detail.php?p_seq=${v.p_seq}'" style="width:120px;"></td>
                                          <td class="w-25">
                                            <span class="text-primary pointer _line" 
                                                onclick="goDetailPage(${curr_val},${v.p_seq_new},${next_val},${prev_val})">${v.oa_title }
                                            </span>
                                            </td>
                                          <td>${v.oa_date }</td>
                                          <td>${v.o_date }</td>
                                          <td>${answerCk }</td>
                                          <td>
                                            <span class="btn btn-sm btn-light rounded-0" onclick="reviewDel(${v.oa_seq })">삭제</span>
                                            <span class="btn btn-sm btn-secondary mt-2" onclick="location.href='order_ask_detail.php?oa_seq=${v.oa_seq}&p_seq=${v.p_seq }'">수정</span>
                                          </td>
                                        </tr>`;
                        $("#review-list-tbody").append(str);


                    } else {
                        let mstr = `<div class="border p-3 my-2" style="font-size:12px;">
                                            <div class="d-flex justify-content-between">
                                                <div class="dots mr-2">${v.p_name}</div>
                                                <div>${v.oa_date}</div>
                                            </div>
                                            <hr>
                                            <div class="d-flex">
                                                <div class="mr-3">
                                                    <img src="${mainimg[0]}" alt="" onclick="location.href='product_detail.php?p_seq=${v.p_seq}'" style="width:120px;">
                                                </div>
                                                <div class="">
                                                    <div class="mb-2">제목 : <span>${v.oa_title}</span></div>
                                                    <div class="mb-2">답변 : <span>${answerCk}</span></div>
                                                    <div class="mb-2">구매일 : <span>${v.o_date}</span></div>
                                                </div>
                                            </div>
                                            <div class="btn btn-sm btn-primary mt-2 w-100" onclick="location.href='order_ask_detail.php?oa_seq=${v.oa_seq}&p_seq=${v.p_seq}'">수정</div>
                                            <div class="btn btn-sm btn-secondary mt-2 w-100" onclick="reviewDel(${v.oa_seq})">삭제</div>
                                        </div>`;

                        $("#review-list-m").append(mstr);



                        for (let i = 0; i < v.pr_star; i++) {
                            $(".stars" + v.oa_seq).append('<i class="fa fa-star"></i>')
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

function reviewDel(oa_seq) {
    $('#delete_modal').modal('show');
    $('.modal_delete_btn').attr('onclick', `realDelete(${oa_seq})`)
    // if (confirm("해당 문의를 삭제하시겠습니까?")) {
    //     $.ajax({
    //         url: SERVER_AP + "/admin/common/delete",
    //         type: "post",
    //         cache: false,
    //         data: {
    //             table: 'order_ask',
    //             field: 'oa_seq',
    //             seq: oa_seq,
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

function realDelete(oa_seq) {
    if (confirm("해당 문의를 삭제하시겠습니까?")) {
        $.ajax({
            url: SERVER_AP + "/admin/common/delete",
            type: "post",
            cache: false,
            data: {
                table: 'order_ask',
                field: 'oa_seq',
                seq: oa_seq,
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

function openModal(oa_seq) {
    var obj = new Object();
    obj.oa_seq = oa_seq;
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


function goDetailPage(seq, p_seq, next, prev) {
    location.href = `order_ask_view.php?oa_seq=${seq}&p_seq=${p_seq}&nxt=${next}&prv=${prev}`
}
</script>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>