<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php';
 $seq = $_GET['seq'];
?>

<style media="screen">
.header_area {
    display: none;
}

.footer_area {
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

.pc_none {
    height: 0px !important;
}
</style>


<header class=" row text-center find_header">

    <div class="col-12 text-center mt-5 title_text">
        배송지 추가하기
    </div>

</header>
<div class="container py-3">
    <div class="row m-0">
        <div class="col-3 mt-2 font-weight-bold">배송지명
            <span class="text-danger"> *</span>
        </div>
        <div class="col-12">
            <input id="dl_title" class="form-control" placeholder="배송지를 입력해 주세요" />
        </div>
    </div>

    <div class="row m-0 mt-3">
        <div class="col-3 mt-2 font-weight-bold">받는 분 <span class="text-danger"> *</span></div>
        <div class="col-12">
            <input id="dl_person" class="form-control" placeholder="배송지를 입력해 주세요" />
        </div>
    </div>

    <div class="row m-0 mt-3">
        <div class="col-3 mt-2 font-weight-bold">연락처 <span class="text-danger"> *</span></div>
        <div class="col-12">
            <input id="dl_phone" class="form-control" placeholder="'-'없이 입력해 주세요" />
        </div>
    </div>

    <div class="row m-0 mt-3">
        <div class="col-12 mt-2 font-weight-bold">주소 <span class="text-danger"> *</span></div>
        <div class="col-9 pr-0">
            <input id="dl_address" class="form-control" placeholder="" />
        </div>
        <div class="col-3">
            <span onclick="openDaumZipAddress()" class="btn btn-primary">주소찾기</span>
        </div>
        <div class="col-12 mt-2">
            <input id="dl_address_detail" class="form-control" placeholder="" />
        </div>

        <div class="col-12 mt-3 font-weight-bold">배송시 요청사항</div>
        <div class="col-12">
            <select id="dl_request" class="form-control mt-2 col-12">
                <option value="">선택</option>
                <option value="문앞에 놓아주세요.">문앞에 놓아주세요.</option>
                <option value="경비실에 맡겨주세요.">경비실에 맡겨주세요.</option>
                <option value="직접">직접입력</option>
            </select>
            <input type="text" class="form-control mt-2 direct_request d-none" name="" value="">
        </div>

        <div class="d-flex col-12 mt-2 align-items-center justify-content-end">
            <label for="dl_check" class="mb-0 mr-2">기본 배송지로 등록</label>
            <input id="dl_check" type="checkbox">
        </div>


    </div>

    <div class="footer_btn mt-5 text-center row mx-0">
        <div class="col-6">
            <div onclick="insertHome()" class="col-12 save_btn  btn-dark  btn n ">저장</div>
        </div>

        <div class="col-6">
            <div onclick="cancel();" class="col-12  btn border btn-primary">취소</div>
        </div>


    </div>


</div>

<!-- Message Now Area -->
<script type="text/javascript">
var openWin;
var dlseq = '<?php echo $seq; ?>';
$(document).ready(function() {
    console.log('dlseq', dlseq);
    if (dlseq) {
        loadHome();
        $('.title_text').html('배송지 수정하기')
        $('.save_btn').attr('onclick', 'updateHome()');
        $('.save_btn').html('수정');
    }

});

function insertHome() {
    if (confirm("저장 하시겠습니까?")) {
        var obj = new Object();
        obj.dl_useq = user_info.u_seq;
        obj.dl_title = $('#dl_title').val();
        obj.dl_phone = $('#dl_phone').val();
        obj.dl_person = $('#dl_person').val();
        obj.dl_address = $('#dl_address').val();
        obj.dl_address_detail = $('#dl_address_detail').val();
        obj.dl_num = $('#dl_address').attr('dl_num');
        if ($('.direct_request').val()) {
            obj.dl_request = $('.direct_request').val();
            obj.dl_request_direct = 'Y';
        } else {
            obj.dl_request = $('#dl_request').val();
            obj.dl_request_direct = 'N';
        }

        if (obj.dl_title && obj.dl_phone && obj.dl_person && obj.dl_address && obj.dl_address_detail) {
            $.ajax({
                url: SERVER_AP + "/admin/common/insert",
                type: "post",
                cache: false,
                data: {
                    table: 'delivery_location',
                    obj: obj,
                },
                success: function(data) {
                    alert('배송지가 추가되었습니다.')
                    history.back();
                },
                error: function(request, status, error) {
                    console.log(error);
                }
            });

        } else {
            alert('필수정보를 입력해주세요.')
        }
    }
}

function cancel() {
    if (confirm("취소 하시겠습니까?")) {
        history.back();
    }
}

function loadHome() {
    var obj = new Object();
    obj.dl_seq = dlseq;

    $.ajax({
        url: SERVER_AP + '/admin/common/condition',
        type: "post",
        cache: false,
        data: {
            common: obj,
            table: 'delivery_location'
        },
        success: function(data) {
            $('#dl_title').val(data[0].dl_title);

            $('#dl_person').val(data[0].dl_person);
            $('#dl_phone').val(data[0].dl_phone);
            $('#dl_address').val(data[0].dl_address);
            $('#dl_address_detail').val(data[0].dl_address_detail);

            if (data[0].dl_check == 'Y') {
                $('#dl_check').attr('checked', true)
            }

            if (data[0].dl_request_direct == 'Y') {
                $('.direct_request').val(data[0].dl_request);
                $('#dl_request').val('직접');
                $('.direct_request').removeClass('d-none');
            } else {
                $('#dl_request').val(data[0].dl_request);
            }


        },
        error: function(xhr, textStatus, errorThrown) {
            console.log(xhr, textStatus, errorThrown);
        }
    });
}



function openDaumZipAddress() {
    new daum.Postcode({
        oncomplete: function(data) {
            post = data.zonecode;
            jQuery("#dl_address").val(data.address);
            jQuery("#dl_address").attr('dl_num', post);
        }
    }).open();
}


function updateHome() {
    var obj = new Object();
    obj.dl_useq = user_info.u_seq;
    obj.dl_title = $('#dl_title').val();
    obj.dl_phone = $('#dl_phone').val();
    obj.dl_person = $('#dl_person').val();
    obj.dl_address = $('#dl_address').val();
    obj.dl_num = $('#dl_address').attr('dl_num');
    obj.dl_address_detail = $('#dl_address_detail').val();
    if ($('.direct_request').val()) {
        obj.dl_request = $('.direct_request').val();
        obj.dl_request_direct = 'Y';
    } else {
        obj.dl_request = $('#dl_request').val();
        obj.dl_request_direct = 'N';
    }
    if ($('#dl_check').is(':checked')) {
        cancelHome()
        obj.dl_check = 'Y'
    }


    console.log('obj', obj);
    if (obj.dl_title && obj.dl_phone && obj.dl_person && obj.dl_address && obj.dl_address_detail) {

        $.ajax({
            url: SERVER_AP + '/admin/common/update',
            type: "post",
            cache: false,
            data: {
                table: 'delivery_location',
                obj: obj,
                whereField: 'dl_seq',
                whereValue: dlseq
            },

            success: function(data) {
                alert('수정 되었습니다.')
                //location.href = "/ordermanage.php"
                window.close();
            },
            error: function(xhr, textStatus, errorThrown) {
                console.log(xhr, textStatus, errorThrown);
            }
        });

    } else {
        alert('필수정보를 입력하여 주세요.');
    }
}

$('#dl_request').change(function() {

    if ($(this).val() == '직접') {
        $('.direct_request').removeClass('d-none');
    } else {
        $('.direct_request').addClass('d-none');
        $('.direct_request').val("");
    }

})

function cancelHome() {
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
            // writehome(addSeq, user_info.u_seq);
        },
        error: function(xhr, textStatus, errorThrown) {
            console.log(xhr, textStatus, errorThrown);
        }
    });
}

window.onunload = function() {
    opener.loadAddress();
}
</script>
<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>