<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php';
    $pq_seq = $_GET['pq_seq'];
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

#pq_coments, #pq_answear{
    padding: 20px;
}
</style>

<!-- Breadcumb Area -->
<!-- <div class="breadcumb_area">
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
</div> -->
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
                <input type="file" name="" value="" id="pq_pic" class="d-none" multiple>
                <div class="px-2 mt-2" id="pq_pic_div">

                </div>
                <div class="form-group">
                    <label for="pq_coments">문의내용</label>
                    <div id="pq_coments" class="border"></div>
                </div>

        <div class="form-group d-none" id="answer-wrap">
            <label for="pq_answear">답변내용</label>
            <div id="pq_answear" class="border"></div>
        </div>

                <div class="mt-4  d-flex mb-4  justify-content-center">
        <span class="pointer px-3 py-2 border bg-secondary mr-3 text-white view_x" onclick="goModify()"
            id="clickBtn">수정하기</span>
        <span class="pointer px-3 py-2 border view_x  " onclick="history.back();">목록으로</span>
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
var pq_seq = '<?php echo $pq_seq; ?>';

// var reviewtoggle;

$(function() {
    var fontList = ['맑은 고딕', '돋움체', '굴림체', '바탕체', '궁서체', '나눔고딕', '나눔명조', '나눔바른고딕', '가는 나눔바른고딕'];
    // $('#pq_coments').summernote({
    //     toolbar: [
    //         // ['style', ['style']],
    //         // ['fontsize', ['fontsize']],
    //         // ['font', ['bold', 'italic', 'underline', 'clear']],
    //         // ['fontname', ['fontname']],
    //         // ['color', ['color']],
    //         // ['para', ['ul', 'ol', 'paragraph']],
    //         // ['height', ['height']],
    //         // // ['insert', ['picture', 'hr','video','link']],
    //         // ['table', ['table']]
    //     ],
    //     height: 300, // set editor height
    //     minHeight: null, // set minimum height of editor
    //     maxHeight: null, // set maximum height of editor
    //     lang: 'ko-KR', // 기본 메뉴언어 US->KR로 변경
    //     fontNames: fontList,
    //     fontNamesIgnoreCheck: fontList,
    //     callbacks: {
    //         onImageUpload: function(files, editor, welEditable) {
    //             for (var i = files.length - 1; i >= 0; i--) {
    //                 fileUploadSummernote(files[i], this);
    //             }
    //         }
    //     }
    // });

    loadProductdata()
})


function loadProductdata() {

    $.ajax({
        url: SERVER_AP + "/product/ques-one",
        type: "post",
        cache: false,
        data: {
            table: 'product_question',
            pq_seq: pq_seq,
        },
        success: function(data) {
            console.log('dddd', data);
            var v = data.rows[0]
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

            if (v.pq_pic) {
                console.log('durl?');
                $.each(JSON.parse(v.pq_pic), function(i, v) {
                    ques_picture_arr.push(v);

                    var str =
                        '<div class="position-relative d-inline-block mr-2 review_img" style="background:url(\'' +v +'\')" data-img="' +v +'"></div>';
                    $("#pq_pic_div").append(str);
                })
            }

            $("#pq_coments").html(v.pq_coments);
            if(v.pq_answear){
                $('#answer-wrap').removeClass('d-none');
                $("#pq_answear").html(v.pq_answear);
            }


        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}


function updateReview() {
    if (!$("#pq_coments").summernote('code')) {
        alert("내용을 입력해주세요")
    } else if (confirm("문의를 수정하시겠습니까?")) {
        var obj = new Object();
        obj.oa_title = $("#oa_title").val();
        obj.pq_coments = $("#pq_coments").summernote('code');
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
var ques_picture_arr = [];

//이미지등록
$("#pq_pic").change(function() {
    var dir = currentDate() + "product_review"; //파일경로
    makeFormData_productReview(this, dir);
});

function makeFormData_productReview(input, dir) {
    var file = input.files;

    $.each(file, function(i, v) {
        var formData = new FormData();
        formData.append("dir", dir);
        formData.append("img", v);

        if (ques_picture_arr.length > 5) {
            alert("이미지는 최대 6개까지 등록가능합니다.");
            return false;
        }

        var c_img = fileUpload(formData, dir);

        //$("#pq_pic_div > label").remove();
        var str =
            '<div class="position-relative d-inline-block mr-2 review_img" style="background:url(\'' +
            c_img +
            '\')" data-img="' +
            c_img +
            '">\
                        <i class="far fa-times-circle reviewimgClose"></i>\
                        <i class="fas fa-search-plus reviewimgMore" onclick="reviewimgMoreClick(\'' +
            c_img +
            "',event)\"></i>\
                    </div>";
        $("#pq_pic_div").append(str);

        //사진변경해달라하면넣기
        // <label for="review-image-change'+i+'"><i class="fas fa-sync-alt reviewimgChange"></i></label>\
        // <input type="file" name="" value="" class="d-none review-image-change" id="review-image-change'+i+'">\

        // $.each($(".review_img"),function(ii,vv){
        //     $(vv).attr('data-target',ii)
        // })

        ques_picture_arr.push(c_img);
    });
}

$(document).on("click", ".reviewimgClose", function() {
    var thisval = $(this).closest("div").attr("data-img");
    for (var i = 0; i < ques_picture_arr.length; i++) {
        if (ques_picture_arr[i] == thisval) {
            ques_picture_arr.splice(i, 1);
            i--;
        }
    }
    $(this).closest(".review_img").remove();
});


function updateQna() {
    if (!$("#pq_comments").summernote("code")) {
        alert("내용을 입력해주세요");
    } else if (confirm("문의를 수정하시겠습니까?")) {
        var filterStrings = ["씨발", "개새끼", "병신"];
        var texts = $("#pq_coments").summernote("code");

        var filterStr = "*";
        const starLeng = (str) => {
            var word = "";
            $.each(str.split(""), function(i, v) {
                word += "*";
            });
            return word;
        };
        $.each(filterStrings, function(i, v) {
            if (texts.indexOf(v) !== -1) {
                texts = texts.replace(v, starLeng(v));
            }
        });

        var obj = new Object();
        //obj.pq_title = $("#pq_title").val();
        obj.pq_coments = texts;
        ques_picture_arr.length == 0 ||
            (obj.pq_pic = JSON.stringify(ques_picture_arr));
        //obj.pq_pass = $('#pq_pass').val();
        if ($("#pq_secret").prop("checked") == true) {
            obj.pq_secret = "Y";
        }

        $.ajax({
            url: SERVER_AP + "/admin/common/update",
            type: "post",
            cache: false,
            data: {
                table: "product_question",
                obj: obj,
                whereField: 'pq_seq',
                whereValue: pq_seq
            },
            success: function(data) {
                location.reload();
            },
            error: function(request, status, error) {
                console.log(error);
            },
        });
    }
}



function goModify() {
    location.href = `/qna_detail.php?pq_seq=${pq_seq}`;
}
</script>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
