<!-- Style CSS -->
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php';
    $p_seq = $_GET['p_seq'];
?>

<style media="screen">
.w-50 {
    width: 50%;
}

.nav-tabs li.active {
    background-color: #000 !important;
}

.nav-tabs li.active a {
    color: white !important;
    background-color: #000 !important;
}

.nav-tabs li:hover {
    background-color: #000;
}

.nav-tabs li:hover a {
    color: white !important;
    background-color: #000 !important;
}

.bg_setting {
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
    width: 150px;
    height: 150px;
}

.bg_setting_small {
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
    width: 50px;
    height: 50px;
}

.cont_div {
    font-size: 13px;
}

.comment {
    font-size: 12px;
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

.more_btn {
    font-size: 11px;
}

.bg_setting_photo {
    background-position: center !important;
    background-repeat: no-repeat !important;
    background-size: cover !important;
    width: 100%;
    padding-bottom: 100%;
}

.d-flex2 {
    display: flex;
}

@media (min-width: 576px) {
    #img-modal .modal-dialog {
        max-width: 850px;
    }
}

@media (max-width: 576px) {
    .bg_setting {
        width: 80px;
        height: 80px;
    }

    .cont_div {
        font-size: 12px;
    }

    .cont_div .mb-4,
    .cont_div p {
        margin-bottom: 5px !important;
    }

    .bg_setting_small {
        width: 30px;
        height: 30px;
    }

    .nav-tabs {
        margin-top: 100px;
    }

    #content_wrap_row {
        font-size: 12px;
    }

    .form-control {
        font-size: 10px;
    }

    .btn-sm {
        padding: 0 18px;
        height: 25px;
        line-height: 25px;
        font-size: 10px;
    }
}
</style>

<!-- Header Area End -->
<!-- Wishlist Table Area -->
<div class="wishlist-table section_padding_100 clearfix container">

    <!-- Tabs -->
    <ul class="nav nav-tabs d-block border-0 mb-5 text-center w-100 d-flex" role="tablist">
        <li class="w-50 border active" onclick="loadData('font')">
            <a href="#description" class="nav-link font-weight-normal" data-toggle="tab" role="tab">베스트후기</a>
        </li>
        <li class="w-50 border" onclick="loadData('photo')">
            <a href="#reviews" class="nav-link font-weight-normal" data-toggle="tab" role="tab">베스트 포토후기</a>
        </li>
    </ul>
    <!-- Tabs end -->

    <div class="p-2 d-flex2 align-items-center border-top border-bottom" style="background:#efefef;" id="search_wrap">
        <!-- <select class="form-control form-control-sm mr-2" name="" id="p_large_sort">
                <option value="">대분류</option>
            </select> -->
        <select class="form-control form-control-sm mr-2" name="" id="order_sel">
            <option value="pr_date">최신순</option>
            <option value="pr_star">평점순</option>
            <option value="pr_good">추천순</option>
        </select>
        <select class="form-control form-control-sm mr-2" name="" id="type_sel">
            <option value="p.p_name">상품명</option>
            <option value="pr_comments">리뷰내용</option>
        </select>
        <input type="text" name="" value="" class="form-control form-control-sm mr-2" id="keyword">
        <span class="btn btn-sm btn-secondary" onclick="loadData('font')">검색</span>
    </div>

    <div class="" id="content_wrap">

    </div>

    <div id="paged-wrap" class="mb-5" style="margin-top:100px;">
        <nav aria-label="Page navigation example">
            <ul id="paged-content" class="pagination justify-content-center"></ul>
        </nav>
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
                <div class="" id="mdoal-img-wrap">

                </div>
                <div class="" id="mdoal-img-wrap-cont">

                </div>
            </div>
        </div>
    </div>
</div>


<!-- JS -->
<script type="text/javascript">
var page = 1;
var ppp = 20
let viewType = ``
$(function() {
    //LargeSort_review()
    loadData('font')
})

$('li').click(function() {
    $('li').removeClass('active')
    $(this).addClass('active')
})

function loadData(type) {
    let obj = new Object()
    viewType = type
    if (type == 'font') {
        $("#search_wrap").removeClass('d-none')

        if ($("#p_large_sort").val()) {
            obj.p_large_sort = $("#p_large_sort").val()
        }

        if ($("#keyword").val()) {
            obj.keyword = $("#keyword").val()
        }

        if ($("#order_sel").val()) {
            obj.order_sel = $("#order_sel").val()
        }

        if ($("#type_sel").val()) {
            obj.type_sel = $("#type_sel").val()
        }
    } else {
        $("#search_wrap").addClass('d-none')
    }

    $.ajax({
        url: SERVER_AP + "/review/review-paging-best",
        type: "post",
        cache: false,
        data: {
            page: page,
            ppp: ppp,
            obj: obj,
        },
        success: function(data) {
            console.log("data >>", data);
            $("#content_wrap").html('')
            if (data.rows.length == 0) {
                $("#paged-wrap").addClass('d-none')
                let str = `<div class="py-5 text-center">베스트 후기가 없습니다.</div>`;
                $("#content_wrap, #content_wrap_row").append(str)
            } else {
                if ($(window).width() < 768) {
                    let firstSTr = `<div class="row m_content_wrap mx-0">

                        </div>`

                    $('#content_wrap').html(firstSTr);
                }



                $.each(data.rows, function(i, v) {
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

                    let p_image = JSON.parse(v.p_image)

                    let starArr = ['불만족', '미흡', '보통', '만족', '아주만족']
                    // ${starArr[v.pr_star-1]}
                    if (type == 'font') {

                        //if($(window).width() > 768){
                        let str = `<div class="p-2 py-4 border-bottom">
                                                <div class="d-flex justify-content-between cont_div">
                                                    <div class="d-flex w-100">
                                                        <div class="bg_setting w-100 mr-3 pointer" style="background:url('${p_image[0]}')" onclick="location.href='product_detail.php?p_seq=${v.p_seq}'"></div>
                                                        <div class="w-100">
                                                            <p class="pointer" onclick="reviewimgMoreClickLoaded('${JSON.parse(v.pr_pic)[0]}', event, ${v.pr_seq})">${v.p_name}</p>
                                                            <div class="mb-4">${star(v.pr_star)}</div>
                                                            <div class="comment pointer comment${v.pr_seq}" onclick="reviewimgMoreClickLoaded('${JSON.parse(v.pr_pic)[0]}', event, ${v.pr_seq})">${v.pr_comments}</div>
                                                        </div>
                                                    </div>
                                                    <div class="w-50">
                                                        <div>작성자 : ${name}</div>
                                                        <div class="mb-4">조회수 : ${v.pr_cnt}</div>
                                                        <div class="d-flex">${prPic(v.pr_pic)}</div>
                                                    </div>
                                                </div>
                                            </div>`;


                        $("#content_wrap").append(str)

                        if ($(`.comment${v.pr_seq}`).height() > 100) {
                            $(`.comment${v.pr_seq}`).addClass('more')
                            let str =
                                `<div class="text-right mt-2 md-mt-0"><span class="pointer more_btn more_btn${v.pr_seq} text-secondary" onclick="moreClick(${v.pr_seq})">더보기 ></span></div>`
                            $(`.comment${v.pr_seq}`).after(str)
                        }
                        //}else{


                        // let str = `<div class="col-6 pointer">
                        //     <div onclick="location.href='product_detail.php?p_seq=${v.p_seq}'" class="productWrap-img position-relative" style="background: url('${p_image[0]}'); width: 100%; padding-bottom: 100%; height: 150px;background-position: center; background-size: cover;">
                        //     </div>
                        //     <div class="py-1 py-md-2 font-weight-bold productWrap-titleWrap oneline"  onclick="reviewimgMoreClickLoaded('${JSON.parse(v.pr_pic)[0]}', event, ${v.pr_seq})">${v.p_name}</div>
                        //     <div class="mb-2">${star(v.pr_star)} ${starArr[v.pr_star-1]}</div>
                        //     <div>작성자 : ${name}</div>
                        //     <div class="mb-4">조회수 : ${v.pr_cnt}</div>
                        // </div>`
                        //
                        // $('.m_content_wrap').append(str);

                        //    }



                    } else if (type == 'photo') {
                        let wrap = `<div id="content_wrap_row" class="row mx-0"></div>`
                        $("#content_wrap").append(wrap)

                        let pr_pic = JSON.parse(v.pr_pic)
                        let picStr = ``
                        if (pr_pic[0].includes('mp4')) {
                            picStr =
                                `<div class="bg_setting_photo pointer mb-2" style="background:url('/img/icon/movie_btn.jpg')" onclick="location.href='bestreview_detail.php?pr_seq=${v.pr_seq}'"></div>`
                        } else {
                            picStr =
                                `<div class="bg_setting_photo pointer mb-2" style="background:url('${pr_pic[0]}')" onclick="location.href='bestreview_detail.php?pr_seq=${v.pr_seq}'"></div>`
                        }

                        let str = `<div class="col-6 col-md-3 mb-3 mb-md-0">
                                            <div>
                                               ${picStr}
                                                <div class="text-center"><span class="font-weight-bold"> ${v.p_name} </span><br>${name}고객님</div>
                                            </div>
                                        </div>`;
                        $("#content_wrap_row").append(str)
                    }

                    function star(pr_star) {
                        let star = ``
                        for (let i = 0; i < pr_star; i++) {
                            star +=
                                `<i class="fa fa-star" aria-hidden="true" style="color:orange"></i>`;
                        }
                        return star
                    }

                    function prPic(pr_pic) {
                        let result = ``
                        pr_pic = JSON.parse(pr_pic)
                        for (let i = 0; i < pr_pic.length; i++) {
                            if (i < 2) result +=
                                `<div class="bg_setting_small mr-2 pointer" style="background:url('${pr_pic[i]}')" onclick="reviewimgMoreClickLoaded('${pr_pic[i]}', event, ${v.pr_seq})"></div>`;
                        }
                        return result
                    }

                })
                $("#paged-wrap").removeClass('d-none')
                drawPaging(data.totalPage);
            }
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
    loadData(viewType)
}


//이미지 자세히보기
function reviewimgMoreClickLoaded(src, e, pr_seq) {

    // 기존 모달 형식

    // e.preventDefault()
    //
    // if( $('#mdoal-img-wrap').hasClass('slick-initialized') ){
    //     $('#mdoal-img-wrap').slick('unslick');//슬릭해제
    // }
    //
    // $.ajax({
    //     url: SERVER_AP+"/product/review-condition",
    //     type: "post",
    //     cache: false,
    //     async:false,
    //     data:{
    //         table: 'product_review',
    //         pr_seq:pr_seq,
    //     },
    //     success: function(data){
    //
    //         $("#modal-img-more").remove()
    //
    //         $('#mdoal-img-wrap, #mdoal-img-wrap-cont').html('')
    //
    //         let imgArr = JSON.parse(data[0].pr_pic)
    //         $.each(imgArr, function(i,v){
    //             let str = `<div><img src="${v}" class="mx-auto" /></div>`;
    //             $('#mdoal-img-wrap').append(str)
    //         })
    //
    //         $('#mdoal-img-wrap').slick({
    //             slide: 'div',
    //           slidesToShow: 1,
    //           slidesToScroll: 1,
    //           arrows: false,
    //           fade: true,
    //           dots:true,
    //         });
    //
    //         let imgIndex = imgArr.indexOf(src)
    //         $('#mdoal-img-wrap').slick('slickGoTo', imgIndex);
    //
    //         var name = '';
    //         if(data[0].u_id){
    //             let username = data[0].u_id
    //             let username_rear = data[0].u_id.slice(4, data[0].u_id.length)
    //             let masking = ''
    //             for(let i=0; i<username_rear.length; i++){
    //                 masking += '*'
    //             }
    //             name = data[0].u_id.substr(0, 4) + masking
    //         }else{
    //             name = '홍길동'
    //         }
    //
    //         let starArr = ['불만족', '미흡', '보통', '만족', '아주만족']
    //
    //         let goodBtn = ``
    //         // if(data[0].pr_user){
    //         //     let arr = JSON.parse(data[0].pr_user)
    //         //     if(arr.includes(user_info.u_seq)){
    //         //         goodBtn = `<div class="pointer good_review ml-auto d-inline-block active" onclick=badReview(${data[0].pr_seq})>좋아요 <span>${data[0].pr_good}</span></div>`
    //         //     }else{
    //         //         goodBtn = `<div class="pointer good_review ml-auto d-inline-block" onclick=goodReview(${data[0].pr_seq})>좋아요 <span>${data[0].pr_good}</span></div>`
    //         //     }
    //         // }else{
    //         //     goodBtn = `<div class="pointer good_review ml-auto d-inline-block" onclick=goodReview(${data[0].pr_seq})>좋아요 <span>${data[0].pr_good}</span></div>`
    //         // }
    //
    //         let contstr = `<div class="mt-3">
    //                             <div>${star(data[0].pr_star)} ${starArr[data[0].pr_star-1]}</div>
    //                             <div class="mt-2 text-secondary" style="font-size:12px;">${name} ${data[0].pr_date}</div>
    //                             <div class="mt-4">${data[0].pr_comments}</div>
    //                             <div class="mt-2 d-flex">${goodBtn}</div>
    //                         </div>`
    //
    //         function star(pr_star){
    //             var star = ``
    //             for(let i=0; i<pr_star; i++){
    //                 star += `<i class="fa fa-star" aria-hidden="true" style="color:orange"></i>`;
    //             }
    //             return star
    //         }
    //
    //
    //         $('#mdoal-img-wrap-cont').append(contstr)
    //     },
    //     error: function (request, status, error){
    //         console.log(error);
    //     }
    // });
    // $("#img-modal").modal("show");


    // 그냥 링크 이동
    location.href = '/bestreview_detail.php?pr_seq=' + pr_seq;
}
////////




//대중소분류 샐랙트
// function LargeSort_review(){
//     $.ajax({
//         url: SERVER_AP+"/admin/common/all",
//         type: "post",
//         cache: false,
//         async:false,
//         data:{
//             table: 'large_sort',
//         },
//         success: function(data){
//             $.each(data,function(i,v){
//                 var str = '<option value="'+v.ls_seq+'">'+v.ls_name+'</option>';
//                 $("#p_large_sort").append(str);
//             })
//         },
//         error: function (request, status, error){
//             console.log(error);
//         }
//     });
// }


function moreClick(pr_seq) {
    $(`.comment${pr_seq}`).removeClass('more')
    $(`.more_btn${pr_seq}`).text('< 닫기')
    $(`.more_btn${pr_seq}`).attr('onclick', 'closeClick(' + pr_seq + ')')
}

function closeClick(pr_seq) {
    $(`.comment${pr_seq}`).addClass('more')
    $(`.more_btn${pr_seq}`).text('더보기 >')
    $(`.more_btn${pr_seq}`).attr('onclick', 'moreClick(' + pr_seq + ')')
}
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>