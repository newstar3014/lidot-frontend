<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>
<link href="/css/mypage.css" rel="stylesheet">
<style media="screen">
.btn-primary {
    padding-top: 0;
    padding-bottom: 0;
    line-height: 42px !important;
    display: flex;
    align-items: center;
    min-width: 120px;
    justify-content: center;
}

.fa-check {
    font-size: 10px;
}

.bg-fa {
    background: #FAFAFA
}

.delete_user_wrap {
    position: absolute;
    right: 0;
    top: 0;
}
</style>

<link href="/css/register.css" rel="stylesheet">
<!-- Breadcumb Area -->
<div class="breadcrumb-wrap">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <ol class="breadcrumb mt-2 bg-white">
                    <li class="breadcrumb-item"><a href="/">홈</a></li>
                    <li class="breadcrumb-item"><a href="mypage.php">마이페이지</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Breadcumb Area -->

<!-- Login Area -->
<div class="bigshop_reg_log_area ">
    <div class="container px-2 px-md-1">
        <div class=" h-100 align-items-center">

            <div class="col-12  mx-auto">

            </div>
            <div class="col-12  mx-auto p-0">
                <div class=" mb-50">
                    <h4 class="page-title text-dark text-center mb-4 font-weight-bold">MY ADDRESS</h4>
                    <div class="sub_mypage_menu_div">
                        <div class="pointer" onclick="openCheck(1)">
                            정보수정
                        </div>
                        <div class="gray_bar"></div>
                        <div class="pointer" onclick="location.href='order_list.php'">
                            주문내역
                        </div>
                        <div class="gray_bar"></div>
                        <div class="pointer" onclick="location.href='point.php'">
                            적립금 내역
                        </div>
                        <div class="gray_bar"></div>
                        <div class="pointer" onclick="location.href='wishlist.php'">
                            관심상품
                        </div>
                        <div class="gray_bar"></div>
                        <div class="pointer" onclick="location.href='coupon.php'">
                            할인쿠폰
                        </div>
                        <div class="gray_bar"></div>
                        <div class="pointer" onclick="location.href='mypost.php'">
                            내가쓴게시물
                        </div>
                        <div class="gray_bar"></div>
                        <div class="pointer on" onclick="location.href='address.php'">
                            배송주소록
                        </div>
                    </div>
                    <div class="d-flex mt-4  pt-5 align-items-bottom justify-content-between border-top">
                        <h5 class="  text-dark font-weight-normal ">배송지등록</h5>
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-check text-danger mr-1"></i>
                            필수입력사항
                        </div>
                    </div>



                    <div class=" border-top py-4">
                        <div class="form-group mx-0 row border-bottom py-3 mb-0">
                            <div class="col-4 col-md-2  font-weight-normal fs-15 m-fs-13 label_name">
                                배송지명
                                <i class="fa-solid fa-check text-danger ml-1"></i>
                            </div>
                            <div class="col-8 col-md-9  d-flex align-items-center" style="flex-wrap: wrap;">
                                <input type="text" class="form-control form-control-sm col-12 col-md-5 mr-2 float-left"
                                    id="dl_title" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row mx-0 border-bottom py-3">
                            <div class="col-4 col-md-2  font-weight-normal fs-15 m-fs-13 label_name">성명
                                <i class="fa-solid fa-check text-danger ml-1"></i>
                            </div>
                            <div class="col-8 col-md-9  d-flex align-items-center" style="flex-wrap: wrap;">
                                <input type="text" class="form-control form-control-sm col-12 col-md-5 mr-2 float-left"
                                    id="dl_person" placeholder="성명">
                            </div>
                            <!-- <div class="fs-14 col-md-4 m-fs-10 d-inline-block  small_line"></div> -->
                        </div>

                        <div class="form-group row mx-0 ">
                            <div class="col-4 col-md-2  font-weight-normal fs-15 m-fs-13 label_name">주소
                                <i class="fa-solid fa-check text-danger ml-1"></i>
                            </div>
                            <div class="col-12 col-md-6  d-flex align-items-center">
                                <input type="text" class="form-control form-control-sm col-8 col-md-9 float-left"
                                    readonly id="dl_address" placeholder="주소">
                                <span class="btn-secondary py-1 px-2 fs-12 pointer ml-1"
                                    onclick="findAddr()">주소찾기</span>
                            </div>
                        </div>

                        <div class="form-group row mx-0 border-bottom py-3">
                            <div class="col-4 col-md-2">
                            </div>
                            <div class="col-12 col-md-6 ">
                                <input type="text" class="form-control form-control-sm" id="dl_address_detail"
                                    placeholder="상세주소">
                            </div>
                        </div>
                        <div class="form-group row mx-0  border-bottom pb-3">
                            <div class="col-4 col-md-2  font-weight-normal fs-15 m-fs-13 label_name">휴대전화
                                <i class="fa-solid fa-check text-danger ml-1"></i>
                            </div>
                            <div class="col-8 col-md-6  d-flex align-items-center">
                                <input id="dl_phone" class="form-control form-control-sm col-8 col-md-9"
                                    placeholder="'-'없이 입력해 주세요" />
                            </div>
                        </div>


                        <div class="form-group row mx-0  border-bottom pb-3">
                            <div class="col-4 col-md-2  font-weight-normal fs-15 m-fs-13 label_name">배송시 요청사항
                            </div>
                            <div class="col-8 col-md-6  align-items-center">
                                <select id="dl_request" class="form-control form-control-sm col-8 col-md-9">
                                    <option value="">선택</option>
                                    <option value="문앞에 놓아주세요.">문앞에 놓아주세요.</option>
                                    <option value="경비실에 맡겨주세요.">경비실에 맡겨주세요.</option>
                                    <option value="직접">직접입력</option>
                                </select>
                                <input type="text"
                                    class="form-control mt-2 form-control-sm col-8 col-md-9 direct_request d-none"
                                    name="" value="">
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-end">
                            <label for="dl_check" class="mb-0 mr-2">기본 배송지로 등록</label>
                            <input id="dl_check" type="checkbox">
                        </div>


                    </div>


                </div>
            </div>
        </div>
        <div class="h-100  align-items-center">
            <div class="col-12  mx-auto position-relative">
                <div class=" mb-50">
                    <div class="d-flex align-items-center justify-content-end">
                        <div class="d-flex">
                            <div class="mr-2">
                                <div onclick="insertHome();"
                                    class="d-none insert-view joinBtn btn font-weight-bold btn-primary">등록
                                </div>
                                <div onclick="updateHome();"
                                    class="d-none update-view joinBtn btn font-weight-bold btn-primary">수정
                                </div>
                            </div>
                            <div class="">
                                <div onclick="history.back()" class="  rounded-0 btn font-weight-bold  btn-primary">취소
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>

    </div>

</div>

<!-- Login Area End -->

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
<!-- Footer Area -->
<script type="text/javascript">
var seq = '<? echo $_GET["seq"]; ?>';

var dupliCk = false;

$(document).ready(function() {
    if (seq) {
        $('.update-view').removeClass('d-none');
        loadAddr();
    } else {
        $('.insert-view').removeClass('d-none');
    }
});



$('#u_addr').click(function() {
    findAddr();
});

function findAddr() {
    new daum.Postcode({
        oncomplete: function oncomplete(data) {
            // console.log('zonecode is: ', data.zonecode);
            var strAddr = "(" + data.zonecode + ") " + data.address;
            $('#dl_address').attr('value', strAddr);
        }
    }).open();
}


function loadAddr() {
    console.log('loadAddr seq : ', seq)
    $.ajax({
        url: SERVER_AP + '/admin/common/condition',
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'delivery_location',
            common: {
                dl_seq: seq
            },
        },

        success: function(data) {
            console.log('loadAddr : ', data)
            let v = data[0];
            $('#dl_title').val(v.dl_title);
            $('#dl_person').val(v.dl_person);
            $('#dl_address').val(v.dl_address);
            $('#dl_address_detail').val(v.dl_address_detail);
            $('#dl_phone').val(v.dl_phone);

            if (v.dl_request_direct == "Y") {
                $('#dl_request').val("직접입력");
                $('.direct_request').removeClass('d-none');
                $('#direct_request').val(v.dl_request);
            } else {
                $('#dl_request').val(v.dl_request);
            }

            if (v.dl_check == "Y") {
                $('#dl_check').prop('checked', true)
            }


        },
        error: function(xhr, textStatus, errorThrown) {
            console.log(xhr, textStatus, errorThrown);
        }
    });
}

function insertHome() {
    if (confirm("저장 하시겠습니까?")) {
        var obj = new Object();
        if ($('#dl_check').is(':checked')) {
            cancelHome()
            obj.dl_check = 'Y'
        }


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


function updateHome() {
    if (confirm("수정 하시겠습니까?")) {
        var obj = new Object();
        if ($('#dl_check').is(':checked')) {
            obj.dl_check = 'Y'
        } else {
            obj.dl_check = 'N'
        }


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
                url: SERVER_AP + "/admin/common/update",
                type: "post",
                cache: false,
                data: {
                    table: 'delivery_location',
                    obj: obj,
                    whereField: 'dl_seq',
                    whereValue: seq
                },
                success: function(data) {

                    alert('수정되었습니다.')
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



var goCheckType = ""

function openCheck(check) {
    if (check == 1) {
        location.href = 'myPageEdit.php?seq=' + user_info.u_seq + ''
    } else {
        $('#openCheck').modal('show');
    }

    goCheckType = check;

}

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

$('#dl_request').change(function() {

    if ($(this).val() == '직접') {
        $('.direct_request').removeClass('d-none');
    } else {
        $('.direct_request').addClass('d-none');
        $('.direct_request').val("");
    }

})
</script>