<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php';
    $p_seq = $_GET['p_seq'];
    $oa_seq = $_GET['oa_seq'];
    $o_seq = $_GET['o_seq'];
    $nxt = $_GET['nxt'];
    $prv = $_GET['prv'];
?>

<style media="screen">
table td {
    border: 1px solid #eaeaea;
}

table th {
    background-color: #f8f8f8;
}

#contact table th {
    width: 30%;
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

.review_img {
    width: 150px;
    height: 100px;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
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
    right: 28px;
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

#oa_text {
    min-height: 150px;
}
</style>

<!-- Breadcumb Area -->
<div class="breadcumb_area">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <h5>문의확인</h5>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="shop_main.php">Home</a></li>
                    <li class="breadcrumb-item active">문의 확인</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb Area -->

<!-- Message Now Area -->
<div class="message_now_area section_padding_100" id="contact">
    <div class="container">

        <div class="contact_from mb-5">
            <table class="table border mx-auto text-center">
                <tr>
                    <th style="width:15%">상품 이미지</th>
                    <th>상품명</th>
                </tr>
                <tbody id="product-tbody">

                </tbody>
            </table>
        </div>

        <div class="submit_a_review_area mt-5">
            <form action="#" method="post">
                <div class="form-group">
                    <label class="font-weight-bold" for="oa_title">문의제목</label>
                    <div class="form-control " id="oa_title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="oa_text">문의내용</label>
                    <div class="comment_wrap border p-2 pt-4 mb-3  text-center" id="oa_text"></div>
                </div>


                <div class="form-group answer_wrap d-none border p-2">
                    <label for="">답변 : </label>
                    <div id="answer"></div>
                </div>


                <div class="d-flex justify-content-end">
                    <div class="prev_div">

                    </div>
                    <div class="next_div ml-3">

                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- 이미지 자세히보기 모달 공용 -->
<div class="modal" tabindex="-1" role="dialog" id="img-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="" alt=" " id="modal-img-more" class="w-100">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">닫기</button>
            </div>
        </div>
    </div>
</div>

<!-- Message Now Area -->
<script src="/js/pages/product_detail/product_detail_review.js"></script>
<script type="text/javascript">
var p_seq = '';
var oa_seq = '<?php echo $oa_seq; ?>';
var o_seq = '<?php echo $o_seq; ?>';

// var reviewtoggle;

$(function() {



    if (oa_seq) {
        loadProductReviewdata()
        findPrev();
    }

    if (o_seq) {
        updateOrderReview();
    }


})


function loadProductdata() {
    var obj = new Object();
    obj.p_seq = p_seq;
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        data: {
            table: 'product',
            common: obj,
        },
        success: function(data) {
            var v = data[0]
            ///var number = (page*ppp)-ppp+(i+1) //1부터 시작
            // var number = data.totalCount - ((page-1)*ppp+(i)) //끝번호부터시작
            var mainimg = JSON.parse(v.p_image);

            var str = '<tr>\
                              <td>\
                                <div class="pro-thumnail mx-auto" style="background:url(\'' + mainimg[0] + '\')"></div>\
                              </td>\
                              <td>' + v.p_name + '</td>\
                            </tr>';
            $("#product-tbody").append(str);
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

function loadProductReviewdata() {
    var obj = new Object();
    obj.oa_seq = oa_seq;
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        data: {
            table: 'order_ask',
            common: obj,
        },
        success: function(data) {
            var v = data[0]
            console.log('vv', v);
            $("input:radio[name ='oa_star']:input[value='" + v.oa_star + "']").attr("checked", true);
            $("#oa_options").val(v.oa_options);
            $("#oa_text").html(v.oa_text);
            $('#oa_title').html(v.oa_title)

            if (v.oa_answer) {
                $('.answer_wrap').removeClass('d-none');
                $('#answer').html(v.oa_answer)
            } else {
                $('.answer_wrap').remove();
            }
            p_seq = v.oa_p_seq;
            loadProductdata()

        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

function updateReview() {
    if (!$("#oa_text").summernote('code')) {
        alert("내용을 입력해주세요")
    } else if (confirm("문의를 수정하시겠습니까?")) {
        var obj = new Object();
        obj.oa_title = $("#oa_title").val();
        obj.oa_text = $("#oa_text").summernote('code');
        $.ajax({
            url: SERVER_AP + "/common/update",
            type: "post",
            cache: false,
            data: {
                table: 'order_ask',
                obj: obj,
                whereField: 'oa_seq',
                whereValue: oa_seq,
            },
            success: function(data) {
                history.back()
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    }
}

function findPrev() {
    $.ajax({
        url: SERVER_AP + "/common/next_prev",
        type: "post",
        cache: false,
        data: {
            table: 'order_ask',
            field: 'oa_seq',
            seq: oa_seq,
        },
        success: function(data) {
            console.log('datta', data);

            if (data.prevSeq) {

                $.each(data.prevSeq, function(i, v) {
                    let str = ` <div onclick="location.href='/order_ask_view.php?oa_seq=${v}'" class="pointer">
                                    <i class="fas fa-long-arrow-alt-left"></i>
                                    이전글
                                </div>`


                    $('.prev_div').html(str);
                })


            }

            if (data.nextSeq) {

                $.each(data.nextSeq, function(i, v) {
                    let str = ` <div onclick="location.href='/order_ask_view.php?oa_seq=${v}'" class="pointer">
                                    다음글
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </div>`


                    $('.next_div').html(str);
                })



            }


        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}
</script>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>