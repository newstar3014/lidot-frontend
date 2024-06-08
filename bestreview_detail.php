<!-- Style CSS -->
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php';
    $pr_seq = $_GET['pr_seq'];
    $view = $_GET['view'];
?>

<style media="screen">
.title {
    border-left: 2px solid black;
}

.y-center {
    display: flex;
    align-items: center;
}

.x-center {
    display: flex;
    justify-content: center;
    text-align: center;
}

.review_img_wrap {
    width: 60%;
}

.comment_wrap p {
    margin-bottom: 0px;
}

.list__btn {
    background: #000;
    color: #fff;
    width: 90%;
    display: block;
    padding: 10px;
    font-size: 15px;
    font-weight: bold;
    text-align: center;
    margin: 0 auto;
    margin-bottom: 20px;

}

.review_img {
    max-width: 400px;
}

@media (max-width:768px) {
    .title {
        margin-top: 100px;
    }

    .container {
        width: 90%;
    }

    .review_img_wrap {
        width: 100%;
    }


    h3 {
        font-size: 20px;
    }

    .title p {
        font-size: 14px;
    }

    .review_img {
        max-width: 100%;
    }

}

.like_count.active {
    color: #FF5357;
}

/* @media (min-width: 1200px){
        .container, .container-lg, .container-md, .container-sm, .container-xl {
            max-width: 1024px !important;
        }
    } */
h3 {
    color: #212121;
}
</style>

<!-- CSS -->
<link rel="stylesheet" href="css/pages/community/community.css">
<!-- Header Area End -->
<!-- Wishlist Table Area -->
<div class="wishlist-table container section_padding_100 clearfix">
    <div class="title pl-4 mb-5">
        <p class="change_title">BEST PHOTO REVIEW</p>
        <h3 class=""><span class="view_x">포토 후기 당첨자</span> <br class="view_x"> <span id="name"></span>고객님 리뷰</h3>
        <div>
            조회수 : <span id="pr_cnt"></span>
        </div>
    </div>
    <div class="product_wrap mt-3">

    </div>

    <div class="star_wrap mb-3 border p-2">

    </div>

    <div class="comment_wrap border p-2 mb-3 text-center">

    </div>

    <div class="cont_wrap">

    </div>

    <div class="border p-2 sell_talk">
        판매자의 한마디 :
        <div class="answer_wrap">

        </div>
    </div>

    <div class="d-flex justify-content-end mt-3">
        <div class="prev_div">

        </div>
        <div class="next_div ml-3">

        </div>
    </div>

    <div class="mt-2 d-flex justify-content-center align-items-center">
        리뷰가 도움이 되었나요?
        <div class="border rounded good_btn  ml-2 p-2 px-3">
            <i class="far fa-thumbs-up"></i>
            <span class="like_count ">
                0
            </span>
        </div>


    </div>



</div>

<div class="mt-lg-0 mt-5 container mb-2">
    * 포토후기 내용은 리닷 홈페이지, 블로그, SNS 등의 홍보자료로 사용될 수 있습니다.
</div>
<div onclick="location.href='/bestreview.php'" class="list__btn container">
    목록
</div>


<!-- JS -->
<script type="text/javascript">
var pr_seq = '<?php echo $pr_seq; ?>';
var view = '<?php echo $view; ?>';
$(function() {
    loadData()
    findPrev();
    if (view) {
        $('.view_x').remove();
        $('.change_title').html('REVIEW')
    }
})

function loadData() {
    $.ajax({
        url: SERVER_AP + "/review/best-review-condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            pr_seq: pr_seq,
        },
        success: function(data) {
            console.log("data >>", data);
            let v = data[0]
            $(".comment_wrap ").html('');
            $(".product_wrap").html('');
            $(".comment_wrap").html('')
            $('.answer_wrap').html('')

            let name = '';
            if (v.u_id) {
                let username = v.u_id
                let username_rear = v.u_id.slice(4, v.u_id.length)
                let masking = ''
                for (let i = 0; i < username_rear.length; i++) {
                    masking += '*'
                }
                name = v.u_id.substr(0, 4) + masking
            } else {
                name = '홍길동'
            }

            $('#pr_cnt').html(v.pr_cnt)
            $("#name").text(name)


            let starArr = ['불만족', '미흡', '보통', '만족', '아주만족']
            $(".star_wrap").html(star(v.pr_star))

            // $(".comment_wrap").html(v.pr_comments)\


            let pr_pic = JSON.parse(v.pr_pic)
            $.each(pr_pic, function(i, v) {
                let str
                if (v.includes("mp4")) {
                    str = `<video controls class=" mb-3 review_img">
              <source src="${v}" type="video/mp4">
              </video><br>`;
                } else {
                    str = `<img src="${v}" alt="" style="" class="mb-3 review_img"> <br>`;;
                }

                $(".comment_wrap ").append(str)
            })


            let p_image = JSON.parse(v.p_image)
            let prostr = `<div class="d-flex pointer p-2 mb-3 relate-div" style="border:1px solid #eaeaea;" onclick="location.href='product_detail.php?p_seq=${v.p_seq}'">
                                <div class="col-3 y-center x-center px-1 border-right">
                                    <div class="review_img_wrap"><img src="${p_image[0]}" alt=" " style="width:100%;"></div>
                                </div>
                                <div class="col-6 y-center x-center px-1">${v.p_name}</div>
                                <div class="col-3 y-center x-center px-1 font-weight-bold">${comma(v.p_price)}원</div>
                            </div>`
            $(".product_wrap").append(prostr);

            let testStr = `<div>${v.pr_comments}</div>`

            $(".comment_wrap").append(testStr)

            let answerStr = `<div>
                ${v.pr_answer}
            </div>`
            if (v.pr_answer) {
                $('.answer_wrap').append(answerStr)
            } else {
                $('.sell_talk').remove()
            }
            $('.good_btn').attr('onclick', 'goodReview(' + v.pr_seq + ')')


            if (v.pr_user) {
                let arr = JSON.parse(v.pr_user);
                $('.like_count').html(arr.length);

                if (arr.includes(user_info.u_seq)) {
                    $('.like_count').addClass('active');
                    $('.good_btn').attr('onclick', 'badReview(' + v.pr_seq + ')')
                }
            } else {

            }


        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}


function star(pr_star) {
    let star = ``
    for (let i = 0; i < pr_star; i++) {
        star += `<i class="fa fa-star" aria-hidden="true" style="color:orange"></i>`;
    }
    return star
}

$(window).on('beforeunload', function() {
    $.ajax({
        url: SERVER_AP + "/review/best-review-cnt",
        type: "post",
        cache: false,
        data: {
            pr_seq: pr_seq,
        },
        success: function(data) {},
        error: function(request, status, error) {
            console.log(error);
        }
    });
});

function goodReview(pr_seq) {
    if (!user_info) {
        alert("로그인을 먼저 해주세요!");
        return;
    }

    if (confirm("해당 리뷰에 좋아요를 하시겠습니까?")) {
        $.ajax({
            url: SERVER_AP + "/product/review-good",
            type: "post",
            cache: false,
            data: {
                pr_seq: pr_seq,
                u_seq: user_info.u_seq,
            },
            success: function(data) {
                loadData();
            },
            error: function(request, status, error) {
                console.log(error);
            },
        });
    }
}

function badReview(pr_seq) {
    if (!user_info) {
        alert("로그인을 먼저 해주세요!");
        return;
    }

    if (confirm("해당 리뷰에 좋아요를 취소하시겠습니까?")) {
        $.ajax({
            url: SERVER_AP + "/product/review-bad",
            type: "post",
            cache: false,
            data: {
                pr_seq: pr_seq,
                u_seq: user_info.u_seq,
            },
            success: function(data) {
                loadData();
            },
            error: function(request, status, error) {
                console.log(error);
            },
        });
    }
}

function findPrev() {
    $.ajax({
        url: SERVER_AP + "/common/next_prev",
        type: "post",
        cache: false,
        data: {
            table: 'product_review',
            field: 'pr_seq',
            seq: pr_seq,
            best: 'y'
        },
        success: function(data) {
            console.log('datta', data);


            if (data.prevSeq) {

                $.each(data.prevSeq, function(i, v) {
                    let str = ` <div onclick="location.href='/bestreview_detail.php?pr_seq=${v}'" class="pointer">
                    <i class="fas fa-long-arrow-alt-left"></i>
                    이전글
                </div>`


                    $('.prev_div').html(str);
                })


            }

            if (data.nextSeq) {

                $.each(data.nextSeq, function(i, v) {
                    let str = ` <div onclick="location.href='/bestreview_detail.php?pr_seq=${v}'" class="pointer">
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