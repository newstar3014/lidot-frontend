<!-- Style CSS -->
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php';
    $p_seq = $_GET['p_seq'];
?>

<style media="screen">
.y-center {
    display: flex;
    align-items: center;
}

.x-center {
    display: flex;
    justify-content: center;
    text-align: center;
}

/* img {
    max-width: 400px;
} */

@media (max-width:768px) {
    .relate-div {
        font-size: 12px;
    }
}
</style>

<!-- CSS -->
<link rel="stylesheet" href="css/pages/community/community.css">
<!-- Header Area End -->
<!-- Wishlist Table Area -->
<div class="wishlist-table section_padding_100 clearfix">
    <div class="container text-center" id="bp_con">

    </div>
    <div class="container" id="product_wrap">

    </div>
</div>


<!-- JS -->
<script type="text/javascript">
var p_seq = '<?php echo $p_seq; ?>';

$(function() {
    loadBanner()
})

function loadBanner() {
    obj = {
        p_seq: p_seq,
    }
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'project',
            common: obj,
        },
        success: function(data) {
            let str = `<img src="${data[0].p_img}" alt="" class="w-100">
                            <h5 class="mt-5">${data[0].p_title}</h5>
                            <h6 class="my-5">${data[0].p_text}</h6>
                            <div id="p_info"><div>`
            $("#bp_con").append(str)

            $("#p_info").html(data[0].p_info)

            if (data[0].p_p_seq) {
                LoadProRelate(data[0].p_p_seq)
            }
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

function LoadProRelate(p_p_seq) {
    let productArr = JSON.parse(p_p_seq)
    $.each(productArr, function(i, v) {
        var obj = new Object();
        obj.p_seq = v;
        $.ajax({
            url: SERVER_AP + "/admin/common/condition",
            type: "post",
            cache: false,
            async: false,
            data: {
                table: 'product',
                common: obj,
            },
            success: function(data) {
                //console.log("data >>",data);
                var relateMainimgArr = JSON.parse(data[0].p_image);
                var str =
                    '<div class="d-flex pointer p-2 mb-3 mx-auto relate-div" style="border:1px solid #eaeaea; width:80%;" onclick="goPro(' +
                    data[0].p_seq + ')">\
                                    <div class="col-3 y-center x-center px-1 border-right">\
                                        <div style="width:60%;"><img src="' + relateMainimgArr[0] + '" alt=" " style="width:100%;"></div>\
                                    </div>\
                                    <div class="col-6 y-center x-center px-1">' + data[0].p_name + '</div>\
                                    <div class="col-3 y-center x-center px-1 font-weight-bold">' + comma(data[0]
                        .p_price) + '원</div>\
                                </div>';
                $("#product_wrap").append(str);
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
    })
}

function goPro(p_seq) {
    location.href = "product_detail.php?p_seq=" + p_seq
}
</script>

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>