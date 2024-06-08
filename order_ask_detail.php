<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php';
    $p_seq = $_GET['p_seq'];
    $oa_seq = $_GET['oa_seq'];
    $o_seq = $_GET['o_seq'];
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
</style>

<!-- Breadcumb Area -->
<div class="breadcumb_area">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <h5>문의작성</h5>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="shop_main.php">Home</a></li>
                    <li class="breadcrumb-item active">문의 작성</li>
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
                    <label for="oa_title">문의제목</label>
                    <input type="text" class="form-control" id="oa_title" placeholder="제목">
                </div>
                <div class="form-group">
                    <label for="oa_text">문의내용</label>
                    <div id="oa_text"></div>
                </div>
                <div class="mt-4 d-flex">
                    <span class="pointer px-3 py-2 border mb-4" onclick="addReview()" id="inset-btn">문의작성</span>
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
var oa_seq = '<?php echo $oa_seq; ?>';
var o_seq = '<?php echo $o_seq; ?>';
// var reviewtoggle;

$(function() {
    var fontList = ['맑은 고딕', '돋움체', '굴림체', '바탕체', '궁서체', '나눔고딕', '나눔명조', '나눔바른고딕', '가는 나눔바른고딕'];
    $('#oa_text').summernote({
        toolbar: [
            // ['style', ['style']],
            // ['fontsize', ['fontsize']],
            // ['font', ['bold', 'italic', 'underline', 'clear']],
            // ['fontname', ['fontname']],
            // ['color', ['color']],
            // ['para', ['ul', 'ol', 'paragraph']],
            // ['height', ['height']],
            // // ['insert', ['picture', 'hr','video','link']],
            // ['table', ['table']]
        ],
        height: 300, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        lang: 'ko-KR', // 기본 메뉴언어 US->KR로 변경
        fontNames: fontList,
        fontNamesIgnoreCheck: fontList,
        callbacks: {
            onImageUpload: function(files, editor, welEditable) {
                for (var i = files.length - 1; i >= 0; i--) {
                    fileUploadSummernote(files[i], this);
                }
            }
        }
    });


    if (oa_seq) {
        loadProductReviewdata()
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
            $("input:radio[name ='oa_star']:input[value='" + v.oa_star + "']").attr("checked", true);
            $("#oa_options").val(v.oa_options);
            $("#oa_text").summernote('code', v.oa_text);
            $('#oa_title').val(v.oa_title)
            $("#inset-btn").text('문의수정')
            $("#inset-btn").attr('onclick', 'updateReview()')

            p_seq = v.oa_p_seq
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
</script>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>