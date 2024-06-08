<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>

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

.pc_none {
    height: 0 !important
}

.menu-box {
    border-radius: 5px;
    background-color: #f8f8f8;
    padding: 20px;
    text-align: center;
    font-size: 15px;
    cursor: pointer;
}

.header_area {
    display: none;
    height: 0;
}

. .footer_area {
    display: none;
}

#bottom_menu {
    display: none;
}

.note-popover.popover {
    display: none;
}

.bigshop-main-menu {
    display: none !important;
}
</style>



<!-- Message Now Area -->
<div class="message_now_area section_padding_100" id="contact">
    <div class="container">
        <header class=" row text-center find_header">

            <div class="col-12 text-center title_text">
                배송지 관리하기
            </div>

        </header>
        <div class="container py-3">
            <div class="text-secondary pointer add_addr border p-3 text-center">
                + 새 배송지 추가
            </div>

            <div class="mt-3 mx-0 border py-3 home_load">

            </div>

            <div class="d-flex align-items-center mt-3">
                <div class="ml-auto d-flex align-items-center">
                    <!-- <div class="save_btn">
                            <div class="btn btn-primary add_addr">+ 새 배송지 추가</div>
                        </div> -->

                    <div class="save_btn ml-2">
                        <div onclick="closeDraw();" class="btn btn-primary">기본배송지로설정</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Message Now Area -->
<script type="text/javascript">
$(function() {
    loadMydata()
})
$('.add_addr').click(function() {
    location.href = '/orderplus.php';
});

function loadMydata() {
    var obj = new Object();
    obj.dl_useq = user_info.u_seq;
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        data: {
            table: 'delivery_location',
            common: obj,
        },
        success: function(data) {
            $('.home_load').html("");

            if (data.length != 0) {
                $.each(data, function(i, v) {
                    var address = v.dl_address + v.dl_address_detail;
                    var name = v.dl_person + v.dl_phone;
                    var dl_request = "";
                    if (!v.dl_request) {
                        dl_request = "선택하여 주세요."
                    } else {
                        dl_request = v.dl_request;
                    }

                    var str = '<div class="d-flex px-2 w-100">\
                        <div class="mr-2">\
                            <input id="aick' + i + '" name="dl_check" value="' + v.dl_seq + '" type="radio" />\
                        </div>\
                        <div class="" style="flex:1">\
                            <label for="aick' + i + '" class="font-weight-bold mb-1 font-13 pointer"> 배송지</label>\
                            <span class="font-11 text-secondary">' + v.dl_title + '</span>\
                            <div class="order_whter pl-0 py-3   font-14">\
                                <div class="">\
                                    <div class="font-weight-bold where_addr row m-0">\
                                        <div class="w-100">\
                                            ' + address + '\
                                        </div>\
                                    </div>\
                                    <div class="text-secondary where_detail_addr">\
                                        ' + v.dl_person + ' ' + hyphen(v.dl_phone) + '\
                                    </div>\
                                    <div class="mt-3 row m-0 border-bottom pb-3">\
                                        <div class="col-8 p-0 text-secondary">\
                                            ' + dl_request + '\
                                        </div>\
                                        <div class="col-4 text-secondary text-right pr-0">\
                                            <span onclick="goupdate(' + v.dl_seq +
                        ')" class="pointer">수정</span> | <span onclick="goDeleteHome(' + v.dl_seq + ');" class="pointer">삭제</span>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>\
                        </div>\
                        </div>';
                    $('.home_load').append(str);

                    if (v.dl_check == 'Y') {
                        $("input:radio[name='dl_check']:radio[value='" + v.dl_seq + "']").prop(
                            'checked', true);
                    }



                });

            } else {
                var str = '<div class="w-100 text-center py-3">배송지를 선택하여 주세요</div>';

                $('.home_load').html(str);

            }

        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

function goDeleteHome(myseq) {
    confirm('정말 삭제 하시겠습니까?')
    if (confirm) {

        $.ajax({
            type: "POST",
            url: SERVER_AP + '/admin/common/delete',
            cache: false,
            async: false,
            data: {
                table: 'delivery_location',
                field: 'dl_seq',
                value: myseq
            },
            success: function(data) {
                alert('삭제되었습니다.')
                location.reload();
            },
            error: function(request, status, error) {
                console.log("code:" + request.status + "\n" + "message:" + request.responseText + "\n" +
                    "error:" + error);
            },
        });



    }
}

function goupdate(seq) {
    location.href = '/orderplus.php?seq=' + seq;
}

function closeDraw() {
    if (confirm("저장 하시겠습니까?")) {
        addSeq = $('input[name=dl_check ]:checked').val();
        cancelHome(addSeq);
    }
}

function cancelHome(addSeq) {
    var obj = new Object();
    obj.dl_check = 'N'

    $.ajax({
        url: SERVER_AP + '/admin/common/update',
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'delivery_location',
            obj: obj,
            whereField: 'dl_useq',
            whereValue: user_info.u_seq
        },

        success: function(data) {
            writehome(addSeq, user_info.u_seq);
        },
        error: function(xhr, textStatus, errorThrown) {
            console.log(xhr, textStatus, errorThrown);
        }
    });
}

function writehome(dSeq, uSeq) {
    var obj = new Object();

    obj.dl_check = 'Y';
    obj.dl_useq = uSeq

    $.ajax({
        url: SERVER_AP + '/admin/common/update',
        type: "post",
        cache: false,
        data: {
            table: 'delivery_location',
            obj: obj,
            whereField: 'dl_seq',
            whereValue: dSeq
        },

        success: function(data) {
            window.close();
        },
        error: function(xhr, textStatus, errorThrown) {
            console.log(xhr, textStatus, errorThrown);
        }
    });
}
window.onunload = function() {
    opener.loadHomedata();
}
</script>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>