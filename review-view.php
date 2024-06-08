<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php';
    $p_seq = $_GET['p_seq'];
    $pr_seq = $_GET['pr_seq'];
    $o_seq = $_GET['o_seq'];
?>
<style>
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


/* .img_box::after {
    display: block;
    content: "";
    padding-bottom: 100%;
} */

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
    width: 100%;
    height: 100px;
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
    cursor: pointer;
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

.fa-star {
    color: #e7eb3f;
    font-size: 25px;

}

.btn-sm {
    max-width: 300px
}

.fs-10 {
    font-size: 10px;
}

.delete_mark {
    display: none;
    position: absolute;
    z-index: 99;
    cursor: pointer;
    font-size: 16px;
    right: 3px;
    top: 5px;
    color: #fff;
}

#summernote {
    padding: 20px;
}
#summernote * {
    word-break: break-word !important;
}

/* 이미지 팝업 css */


/* 이미지 팝업 css */

@media (max-width: 768px) {
    .review_img {
        width: 100%;
    }

    .delete_mark {
        right: 22px;
    }
}

.backboard {
    position: absolute;
    left: 0;
    right: 0;
    z-index: 111111;
    height: 30px;
    top: 0;
}


</style>

<div class="container">

    <div class="contact_from my-5">
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
                <span>별점</span>
                <div class="stars position-relative">
                    <input type="radio" name="pr_star" class="star-1" id="star-1" value="1" readonly disabled>
                    <label class="star-1" for="star-1">1</label>
                    <input type="radio" name="pr_star" class="star-2" id="star-2" value="2" readonly disabled>
                    <label class="star-2" for="star-2">2</label>
                    <input type="radio" name="pr_star" class="star-3" id="star-3" value="3" readonly disabled>
                    <label class="star-3" for="star-3">3</label>
                    <input type="radio" name="pr_star" class="star-4" id="star-4" value="4" readonly disabled>
                    <label class="star-4" for="star-4">4</label>
                    <input type="radio" name="pr_star" class="star-5" id="star-5" value="5" readonly disabled>
                    <label class="star-5" for="star-5">5</label>
                    <span></span>
                    <div class="backboard"></div>
                </div>

            </div>
        </form>
    </div>

    <div>
        <div id="boxId" class="mb-1">
        </div>
        <div id="titleVal" class="mb-1"></div>

        <div id="summernote" class="border" style="overflow:hidden;"></div>
    </div>

    <div>
        <!-- <input type="file" id="imageValue" class="imageValue my-4" multiple /> -->
    </div>
    <div id="imageViewsAppend" class="row mt-3"></div>
    <!-- <div>
        <button type="button" class="form-control" id="clickBtn" onclick="commentSave()">저장</button>
    </div> -->

    <div class="mt-4 d-flex mb-5 justify-content-center">
        <span class="pointer px-3 py-2 border bg-secondary mr-3 text-white view_x" onclick="goModify()"
            id="clickBtn">수정하기</span>
        <span class="pointer px-3 py-2 border view_x  " onclick="history.back();">목록으로</span>
    </div>
</div>


<?php include_once $_SERVER["DOCUMENT_ROOT"].'/popup.php'; ?>

<script type="text/javascript">
var p_seq = '<?php echo $p_seq; ?>';
var pr_seq = '<?php echo $pr_seq; ?>';
var o_seq = '<?php echo $o_seq; ?>';
var ajaxUrl = "";
var attachArr = [];
$(document).ready(function() {


    reviewInfo();
    loadProductdata();
});


function reviewimgMoreClick(src, e) {
    $('#common_bg_wrap').html('');
    e.preventDefault();
    console.log('reviewimgMoreClicksrc : ', src);

    let dynamiAttatch = [];
    let nowIndex = 0;
    $.each(attachArr, function(i, v) {
        if (src == v) {
            nowIndex = i;
        }
        dynamiAttatch.push({
            src: v,
            thumb: v
        })

    })





    const lgContainer = document.getElementById('common_bg_wrap');
    console.log('lgContainer: ', lgContainer);
    const inlineGallery = lightGallery(lgContainer, {
        container: lgContainer,
        dynamic: true,
        // Turn off hash plugin in case if you are using it
        // as we don't want to change the url on slide change
        hash: false,
        // Do not allow users to close the gallery
        closable: false,
        thumbnail: true,
        // Add maximize icon to enlarge the gallery
        showMaximizeIcon: true,
        // Append caption inside the slide item
        // to apply some animation for the captions (Optional)
        appendSubHtmlTo: '.lg-item',
        // Delay slide transition to complete captions animations
        // before navigating to different slides (Optional)
        // You can find caption animation demo on the captions demo page
        slideDelay: 400,
        dynamicEl: dynamiAttatch,
        thumbWidth: 60,
        thumbHeight: '40px',
        thumbMargin: 4,
    });

    //console.log('inlineGallery : ', inlineGallery);

    // Since we are using dynamic mode, we need to programmatically open lightGallery
    inlineGallery.openGallery(nowIndex);

    $('#common-bg-back').removeClass('d-none');
    $('#common-popup').removeClass('d-none');
}



function goModify() {
    location.href = `/review-insert.php?pr_seq=${pr_seq}&p_seq=${p_seq}&o_seq=${o_seq}`
}

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


function reviewInfo() {


    var dataImgInfo = "";

    $.ajax({
        type: "POST",
        url: SERVER_AP + "/common/condition",
        data: {

            table: 'product_review',
            common: {

                pr_seq: pr_seq
            }
        },
        success: function(data) {
            console.log('ddd', data);
            if (data.length > 0) {

                for (var i = 0; i < data.length; i++) {
                    var v = data[0];

                    if (v.pr_pic) {
                        dataImgInfo = JSON.parse(v.pr_pic);
                        for (var i = 0; i < dataImgInfo.length; i++) {
                            var image = dataImgInfo[i];
                            imageInfo.push(image);
                        }

                        if (imageInfo.length > 0) {
                            attachArr = [...imageInfo];
                        }

                        for (var i = 0; i < imageInfo.length; i++) {
                            var vi = imageInfo[i];

                            if (vi.includes("mp4")) {
                                $('#imageViewsAppend').append(
                                    `<div class="col-6 img_box col-md-2 position-relative">
                                    <i onclick="imgDelete(this,'${vi}')" class="delete_mark fa-solid fa-xmark"></i>
                                    <video controls class=" mb-3 review_img" onclick="reviewimgMoreClick('${vi}', event);"><source src="${vi}" type="video/mp4"></video></div> `
                                );
                            } else {
                                $('#imageViewsAppend').append(
                                    `
                                    <div
                                        class="col-6 img_box col-md-2 position-relative">
                                            <i onclick="imgDelete(this,'${vi}')" class="delete_mark fa-solid fa-xmark"></i>
                                            <div class="review_img" onclick="reviewimgMoreClick('${vi}', event);" style="background: url('${vi}'); background-size:cover;">
                                            </div>
                                    </div>
                                    `
                                );
                            }
                        }

                    }

                    $('#titleVal').text(`제목 : ${v.pr_title}`);
                    $('#summernote').html(v.pr_comments);
                    $('#boxId').text(`구분 : ${v.pr_options}`);
                    $("input:radio[name ='pr_star']:input[value='" + v.pr_star + "']").attr("checked",
                        true);
                }


                ajaxUrl = "update";
            } else {
                ajaxUrl = "insert";
            }

        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("통신 실패.")
        }
    });
}


var imageInfo = [];

$(document).on('change', '.imageValue', function(event) {

    var fileLength = event.target.files;

    for (var i = 0; i < fileLength.length; i++) {

        var v = fileLength[i];

        var formData = new FormData();
        formData.set('dir', 'review');
        formData.set('img', v);

        var url = fileUpload(formData);

        imageInfo.push(url);

        $('#imageViewsAppend').append(
            `<img onclick="imgDeleteFn(this, '${url}');" style="width:200px;" src="${url}" />`);
    }
});

function imgDeleteFn(tagInfo, url) {
    imageInfo.splice(imageInfo.indexOf(url), 1);
    $(tagInfo).remove();
}

function imgDelete(tagInfo, url) {
    console.log('xxx', $(tagInfo).closest('.img_box'));
    imageInfo.splice(imageInfo.indexOf(url), 1);

    $(tagInfo).closest('.img_box').remove();
}


function commentSave() {

    var obj = {};


    if (ajaxUrl == "update") {
        obj.pr_title = $('#titleVal').val();
        obj.pr_comments = $('#summernote').summernote('code');
        obj.pr_options = $('#boxId option:selected').val();
        obj.pr_star = $('input[name=pr_star]:checked').val();
        obj.o_seq = o_seq;
        obj.pr_pic = JSON.stringify(imageInfo);
        obj.pr_date = currentDate();

        var whereField = "pr_seq";
        var whereValue = pr_seq;

        $.ajax({
            url: SERVER_AP + "/common/" + ajaxUrl,
            type: "post",
            cache: false,
            data: {
                obj: obj,
                table: 'product_review',
                whereField: whereField,
                whereValue: whereValue,
            },
            success: function(data) {

                alert("수정 되었습니다");
                location.href = `/mypost.php`

            },
            error: function(request, status, error) {
                console.log(error);
            }
        });

    } else {

        obj.u_seq = user_info.u_seq;
        obj.p_seq = p_seq;
        obj.pr_title = $('#titleVal').val();
        obj.o_seq = o_seq;
        obj.pr_comments = $('#summernote').summernote('code');
        obj.pr_options = $('#boxId option:selected').val();
        obj.pr_pic = JSON.stringify(imageInfo);
        obj.pr_date = currentDate();


        $.ajax({
            url: SERVER_AP + "/common/" + ajaxUrl,
            type: "post",
            cache: false,
            data: {
                obj: obj,
                table: 'product_review'
            },
            success: function(data) {
                console.log('dd', data);
                //alert("등록 되었습니다");

            },
            error: function(request, status, error) {
                console.log(error);
            }
        });

    }
}
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
