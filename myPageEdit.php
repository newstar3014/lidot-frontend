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

@media (max-width: 768px) {
    .btn-primary {
        min-width: auto;
        font-size: 12px;
        height: 36px;
    }

    #bt-wrap {
        justify-content: start !important;
    }
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
                    <h4 class="page-title text-dark text-center mb-4 font-weight-bold">EDIT INFO</h4>
                    <div class="sub_mypage_menu_div">
                        <div class="pointer on" onclick="openCheck(1)">
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
                        <div class="pointer" onclick="location.href='address.php'">
                            배송주소록
                        </div>
                    </div>
                    <div class="d-flex mt-4  pt-5 align-items-bottom justify-content-between border-top">
                        <h5 class="  text-dark font-weight-normal ">기본정보</h5>
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-check text-danger mr-1"></i>
                            필수입력사항
                        </div>
                    </div>



                    <div class=" border-top py-4">
                        <div class="form-group mx-0 row border-bottom py-3 mb-0">
                            <div class="col-4 col-md-2  font-weight-normal fs-15 m-fs-13 label_name">
                                계정종류
                                <i class="fa-solid fa-check text-danger ml-1"></i>
                            </div>
                            <div class="col-8 col-md-9  d-flex align-items-center" style="flex-wrap: wrap;">
                                <input type="text" readonly
                                    class="form-control form-control-sm col-12 col-md-5 mr-2 float-left" id="u_type"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="form-group row mx-0 border-bottom py-3">
                            <div class="col-4 col-md-2  font-weight-normal fs-15 m-fs-13 label_name">아이디
                                <i class="fa-solid fa-check text-danger ml-1"></i>
                            </div>
                            <div class="col-8 col-md-9  d-flex align-items-center" style="flex-wrap: wrap;">
                                <input type="text" readonly
                                    class="form-control form-control-sm col-12 col-md-5 mr-2 float-left" id="u_id"
                                    placeholder="아이디">
                            </div>
                            <!-- <div class="fs-14 col-md-4 m-fs-10 d-inline-block  small_line"></div> -->
                        </div>

                        <div class="form-group row mx-0 border-bottom pb-3">
                            <div class="col-4 col-md-2  font-weight-normal fs-15 m-fs-13 label_name">비밀번호
                                <i class="fa-solid fa-check text-danger ml-1"></i>
                            </div>
                            <div class="col-8 col-md-9 ">
                                <input type="password"
                                    class="form-control form-control-sm col-12 col-md-5 mr-2 float-left u_pw_ck"
                                    id="u_pwd" placeholder="비밀번호" onkeyup="fn_press_han(this)">
                                <span class="fs-14 m-fs-11 small_line">(영문 대소문자/특수문자 중 1가지 이상 조합, 10~16자)</span>
                            </div>
                        </div>
                        <div class="form-group row mx-0 border-bottom pb-3">
                            <div class="col-4 col-md-2  font-weight-normal fs-15 m-fs-13 label_name">비밀번호 확인
                                <i class="fa-solid fa-check text-danger ml-1"></i>
                            </div>
                            <div class="col-8 col-md-6 ">
                                <input type="password" class="form-control form-control-sm u_pw_ck" id="u_pwd2"
                                    placeholder="비밀번호 확인" onkeyup="fn_press_han(this)">
                            </div>
                            <div class="text-danger off_pw fs-10">비밀번호가 일치하지 않습니다.</div>
                            <div class="text-primary on_pw fs-10">비밀번호가 일치합니다.</div>
                        </div>
                        <div class="form-group row mx-0 border-bottom pb-3">
                            <div class="col-4 col-md-2  font-weight-normal fs-15 m-fs-13 label_name">이름
                                <i class="fa-solid fa-check text-danger ml-1"></i>
                            </div>
                            <div class="col-8 col-md-6 ">
                                <input type="text" class="form-control form-control-sm" id="u_name" placeholder="이름">
                            </div>
                        </div>

                        <div class="form-group row mx-0 ">
                            <div class="col-4 col-md-2  font-weight-normal fs-15 m-fs-13 label_name">주소
                                <i class="fa-solid fa-check text-danger ml-1"></i>
                            </div>
                            <div class="col-12 col-md-6  d-flex align-items-center">
                                <input type="text" class="form-control form-control-sm col-8 col-md-9 float-left"
                                    readonly id="u_addr" placeholder="주소">
                                <span class="btn-secondary py-1 px-2 fs-12 pointer ml-1"
                                    onclick="findAddr()">주소찾기</span>
                            </div>
                        </div>

                        <div class="form-group row mx-0 border-bottom py-3">
                            <div class="col-4 col-md-2">
                            </div>
                            <div class="col-12 col-md-6 ">
                                <input type="text" class="form-control form-control-sm" id="u_addr_detail"
                                    placeholder="상세주소">
                            </div>
                        </div>



                        <div class="form-group row mx-0 border-bottom pb-3">
                            <div class="col-4 col-md-2  font-weight-normal fs-15 m-fs-13 label_name">일반전화
                            </div>
                            <div class="col-8 col-md-6  d-flex align-items-center">
                                <input type="number" class="form-control form-control-sm" maxlength="10" id="u_tel"
                                    oninput="maxLengthCheck(this)">
                            </div>
                        </div>

                        <div class="form-group row mx-0  border-bottom pb-3">
                            <div class="col-4 col-md-2  font-weight-normal fs-15 m-fs-13 label_name">휴대전화
                                <i class="fa-solid fa-check text-danger ml-1"></i>
                            </div>
                            <div class="col-8 col-md-6  d-flex align-items-center">
                                <select class="form-control form-control-sm" name="" style="width:70px;" id="u_phone_1">
                                    <option value="010">010</option>
                                    <option value="011">011</option>
                                    <option value="016">016</option>
                                    <option value="017">017</option>
                                    <option value="018">018</option>
                                    <option value="019">019</option>
                                </select>
                                <span class="mx-1">-</span>
                                <input type="number" class="form-control form-control-sm" id="u_phone" maxlength="8"
                                    placeholder="휴대전화(나머지 8자리 '-'제외)" oninput="maxLengthCheck(this)">
                            </div>
                        </div>

                        <div class="form-group row mx-0 border-bottom mb-0 py-3">
                            <div class="col-4 col-md-2  font-weight-normal fs-15 m-fs-13 label_name">이메일
                                <i class="fa-solid fa-check text-danger ml-1"></i>
                            </div>
                            <div class="col-8 col-md-6 ">
                                <input type="text" class="form-control form-control-sm" id="u_email" placeholder="이메일">
                            </div>
                        </div>

                        <div class="form-group row mx-0  bg-fa border-bottom py-3 mb-0">
                            <div class="col-4 col-md-2 font-weight-normal  fs-15 m-fs-13 label_name">생년월일
                            </div>
                            <div class="col-8 col-md-5 day_wrap  mb-2 mb-md-0 d-flex align-items-center">
                                <input type="text" id="year" maxlength="4" class="form-control form-control-sm mb-2" />
                                년
                                <input type="text" id="month" maxlength="2" class="form-control form-control-sm mb-2" />
                                월
                                <input type="text" id="day" maxlength="2" class="form-control form-control-sm mb-2" />
                                일
                                <input type="radio" name="u_date" checked class="ml-md-4 ml-0" id="u_yang" value="양력">
                                <label class="fs-15 m-fs-13 mb-0" for="u_yang">양력</label>
                                <input type="radio" name="u_date" class="ml-4" id="u_um" value="음력">
                                <label class="fs-15 m-fs-13 mb-0" for="u_um">음력</label>
                            </div>
                        </div>
                        <div class="form-group mb-0 row mx-0 py-3 bg-fa ">
                            <div class="col-4 col-md-2  font-weight-normal fs-15 m-fs-13 label_name">지역
                            </div>
                            <div class="col-8 col-md-6 ">
                                <input type="text" class="form-control form-control-sm" id="u_area" placeholder="">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- <div class="col-12  mx-auto">
                <div class=" mb-50">
                    <h4 class="mb-3 font-weight-normal">추가정보</h4>
                    <div class="px-4 border_st py-4">

                    </div>
                </div>

                <table class="table border mx-auto text-center">
                    <tr>
                        <th scope="row" class="text-center">기본 배송지</th>
                        <td id="">
                            <div class="order_whter border p-2 font-14">
                                <div class="">
                                    <div class="where_addr row m-0">
                                        <div class="col-10 p-0 text-left">
                                            배송지 명 : <span id="buyer_title"></span><br>
                                            주소 : <span id="buyer_addr"></span>
                                        </div>
                                        <div class="col-2 p-0 text-right">
                                            <span onclick="changeAddr();"
                                                class="font-10 pointer font-weight-bold">변경</span>
                                        </div>
                                    </div>
                                    <div class="text-secondary text-left where_detail_addr">
                                        이름 : <span id="buyer_name"></span>
                                        번호 : <span id="buyer_tel"></span>
                                    </div>
                                    <div class="text-left">
                                        배송시 요청사항 : <span class="dl_request"></span>
                                    </div>

                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div> -->
        </div>
        <div class="h-100 align-items-center">
            <div class="px-0 col-12  mx-auto position-relative">
                <div class="mb-50">
                    <div id="bt-wrap" class="d-flex align-items-center justify-content-center">
                        <div class="d-flex">
                            <div class="mr-2">
                                <div onclick="history.back()" class="  rounded-0 btn font-weight-bold  btn-primary">취소
                                </div>
                            </div>
                            <div class="">
                                <div onclick="userUpdate();" class=" joinBtn btn font-weight-bold btn-primary">회원정보수정
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="delete_user_wrap">
                    <div onclick="openCheck();" class="  rounded-0 btn font-weight-bold  btn-primary text-secondary">
                        회원탈퇴
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

<div class="modal" tabindex="-1" role="dialog" id="openCheck">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="">
                    비밀번호를 입력해주세요.
                </div>
                <input class="form-control" type="password" id="loginPs" placeholder="비밀번호를 입력해주세요." name="" value="">
            </div>
            <div class="modla-footer px-3 mb-3 text-center">
                <span class="btn btn-primary" onclick="$('#openCheck').modal('hide');" id="">취소</span>
                <span class="btn btn-secondary" onclick="checkLogin();" id="">확인</span>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="deleteModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input class="form-control" type="text" placeholder="탈퇴 사유를 입력해주세요." name="" value="">
            </div>
            <div class="modla-footer px-3 mb-3 text-center">
                <span class="btn btn-primary" onclick="deleteReal()" id="">탈퇴</span>
                <span class="btn btn-danger rounded-0" onclick="$('#deleteModal').modal('hide');" id="">취소</span>
            </div>
        </div>
    </div>
</div>
<!-- Login Area End -->

<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_footer.php'; ?>
<!-- Footer Area -->
<script type="text/javascript">
var u_seq = '<? echo $_GET["seq"]; ?>';

var dupliCk = false;

$(document).ready(function() {
    loadUser()
    loadHomedata()
    $('.radioClass').click(function() {
        var radioVal = $('input[name="u_type"]:checked').val();
        if (radioVal == '사업자회원') {
            $('.workWrap').removeClass('d-none');
        } else {
            $('.workWrap').addClass('d-none');
            $('.workWrap_detail').addClass('d-none');
        }
    });
    $('.on_pw').hide();
    $('.off_pw').hide();
    $('.radioWork').click(function() {
        var radioVal = $('input[name="u_worker"]:checked').val();
        if (radioVal == '개인사업자') {
            $('.workWrap_detail').removeClass('d-none');
            $('.change_saup_text').html('업체명');
            $('.change_saup_text2').html('사업자번호')
        } else {
            // 법인사업자
            $('.workWrap_detail').removeClass('d-none');
            $('.change_saup_text').html('법인명');
            $('.change_saup_text2').html('법인번호')
        }
    })
    $('#all_ck').click(function() {
        var checked = $('#all_ck').is(':checked');

        if (checked) {
            $('#labelCk').attr('src', '/img/checks_on.png')
            $('.ck_many').attr('src', '/img/checks_on.png')
            $('.ck_many').prop('checked', true);


            $("#all_ck_wrap").addClass('bg-dark').addClass('text-white')

        } else {
            $('#labelCk').attr('src', '/img/checks_off.png')
            $('.ck_many').attr('src', '/img/checks_off.png')
            $('.ck_many').prop('checked', false);

            $("#all_ck_wrap").removeClass('bg-dark').removeClass('text-white')
        }

    });

    $('#use_ck').click(function() {
        var checked = $('#use_ck').is(':checked');

        if (checked) {
            $('#useCk_img').attr('src', '/img/checks_on.png')

            $('#use_ck').prop('checked', true);
            useCk = 'Y'
        } else {
            $('#useCk_img').attr('src', '/img/checks_off.png')

            $('#use_ck').prop('checked', false);
            useCk = 'N'
        }

    });

    $('#gain_ck').click(function() {
        var checked = $('#gain_ck').is(':checked');

        if (checked) {
            $('#gainCk_img').attr('src', '/img/checks_on.png')

            $('#gain_ck').prop('checked', true);
            gainCk = 'Y'
        } else {
            $('#gainCk_img').attr('src', '/img/checks_off.png')

            $('#gain_ck').prop('checked', false);
            gainCk = 'N'
        }

    });

    $('#shop_ck').click(function() {
        var checked = $('#shop_ck').is(':checked');

        if (checked) {
            $('#shopCk_img').attr('src', '/img/checks_on.png')

            $('#shop_ck').prop('checked', true);
            shopCk = 'Y'
        } else {
            $('#shopCk_img').attr('src', '/img/checks_off.png')

            $('#shop_ck').prop('checked', false);
            shopCk = 'N'
        }

    });

    $('#email_ck').click(function() {
        var checked = $('#email_ck').is(':checked');

        if (checked) {
            $('#emailCk_img').attr('src', '/img/checks_on.png')

            $('#email_ck').prop('checked', true);
            emailCk = 'Y'
        } else {
            $('#emailCk_img').attr('src', '/img/checks_off.png')

            $('#email_ck').prop('checked', false);
            emailCk = 'N'
        }

    });
});



$('#u_addr').click(function() {
    findAddr();
});

function findAddr() {
    new daum.Postcode({
        oncomplete: function oncomplete(data) {
            // console.log('zonecode is: ', data.zonecode);
            var strAddr = "(" + data.zonecode + ") " + data.address;
            $('#u_addr').attr('value', strAddr);
        }
    }).open();
}

function loadUser() {
    var obj = new Object();
    obj.u_seq = u_seq;
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        async: false,
        data: {
            table: 'user',
            common: obj,
        },
        success: function(data) {
            console.log('data-=', data);
            let v = data[0]
            if (data[0].u_type == '네이버계정' || data[0].u_type == '카카오계정') {
                $('#u_id').val(data[0].u_type);
                $('#u_type').val(data[0].u_type);
            } else {
                $('#u_type').val(data[0].u_type);
                $('#u_id').val(data[0].u_id);
            }
            var u_phone_1 = data[0].u_phone.substr(0, 3);
            var u_phone_2 = data[0].u_phone.substr(3);

            $('#u_name').val(data[0].u_name);
            $('#u_addr').val(data[0].u_addr);
            $('#u_addr_detail').val(data[0].u_addr_detail);
            $('#u_phone_1').val(u_phone_1);
            $('#u_phone').val(u_phone_2);
            $('#u_tel').val(data[0].u_tel);
            $('#u_email').val(data[0].u_email);

            $('#u_area').val(data[0].u_area);

            if (v.u_birth_type == '양력') {
                $('#u_yang').attr('checked', 'true')
            } else {
                $('#u_um').attr('checked', 'true')
            }

            if (v.u_birth) {
                let birth = splitDate(v.u_birth);

                if (birth.year) {
                    $('#year').val(birth.year);
                    $('#month').val(birth.month);
                    $('#day').val(birth.day);
                }

            }


        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}

function splitDate(dateString) {
    const dateParts = dateString.split('-');
    if (dateParts.length === 3) {
        const year = dateParts[0];
        const month = dateParts[1];
        const day = dateParts[2];
        return {
            year,
            month,
            day
        };
    } else {
        return null; // 잘못된 형식의 날짜 문자열인 경우 null을 반환합니다.
    }
}


function userUpdate() {

    var obj = new Object();
    obj.u_name = $('#u_name').val();
    obj.u_addr = $('#u_addr').val();
    obj.u_addr_detail = $('#u_addr_detail').val();
    obj.u_tel = $('#u_tel').val();
    obj.u_phone = $('#u_phone_1').val() + $('#u_phone').val();
    obj.u_email = $('#u_email').val();

    obj.u_gubun = $('input[name="u_worker"]:checked').val();

    obj.u_com_num = $('#u_com_num').val();

    obj.u_company = $('#u_company').val();

    obj.u_type = $('input[name="u_type"]:checked').val();


    obj.u_area = $('#u_area').val();
    obj.u_birth = $('#year').val() + '-' + $('#month').val() + '-' + $('#day').val();
    obj.u_birth_type = $('input[name="u_date"]:checked').val();
    obj.u_date = currentDate();

    if ($("#u_pwd2").val() && $("#u_pwd").val()) {
        if ($("#u_pwd").val() != $("#u_pwd2").val()) {
            return
        } else {
            if (chkPW()) {
                changePassword();
            } else {
                return
            }

        }

    }


    if (obj.u_name && obj.u_phone) {
        $.ajax({
            type: "POST",
            url: SERVER_AP + '/common/update',
            cache: false,
            async: false,
            data: {
                obj: obj,
                table: 'user',
                whereField: 'u_seq',
                whereValue: u_seq
            },
            success: function(data) {
                //goKaKao(obj.u_id, obj.u_name,obj.u_phone);
                alert('정상적으로 수정 되었습니다.')
                location.href = '/mypage.php';

            },
            error: function(request, status, error) {
                console.log("code:" + request.status + "\n" + "message:" + request.responseText + "\n" +
                    "error:" + error);
            },
        });
    } else {
        alert("필수값을 확인해주세요.")
    }

}

// 현재 날짜 리턴 format yyyy-mm-dd
function currentDate() {
    let date = new Date();
    let year = date.getFullYear();

    let month = (1 + date.getMonth());
    month = month >= 10 ? month : '0' + month;

    let day = date.getDate();
    day = day >= 10 ? day : '0' + day;

    return year + '-' + month + '-' + day;
}



let tmpn = 0;

function fn_press_han(obj) {
    //좌우 방향키, 백스페이스, 딜리트, 탭키에 대한 예외
    if (event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 || event.keyCode == 39 ||
        event.keyCode == 46) return;
    //obj.value = obj.value.replace(/[\a-zㄱ-ㅎㅏ-ㅣ가-힣]/g, '');
    obj.value = obj.value.replace(/[\ㄱ-ㅎㅏ-ㅣ가-힣]/g, '');

    let arr = [...obj.value]
    let arr2 = [...obj.value]
    Array.isArray(arr)
    Array.isArray(arr2)
    for (let i = 0; i < arr.length; i++) {
        if (arr[i] == arr2[arr2.length - 1]) {
            tmpn++;
        }
    }
    if (tmpn > 2) {
        alert("같은 문자는 3개이상 사용 불가능합니다")
        obj.value = ''
        tmpn = 0;
        return
    }
    tmpn = 0;
}

function maxLengthCheck(object) {
    console.log("object.value.length >>", object.value.length);
    console.log("object.maxLength >>", object.maxLength);
    if (object.value.length > object.maxLength) {
        object.value = object.value.slice(0, object.maxLength);
    }
}




var openWin;


function loadHomedata() {
    var obj = new Object();
    obj.dl_useq = user_info.u_seq;
    obj.dl_check = 'Y'
    $.ajax({
        url: SERVER_AP + "/admin/common/condition",
        type: "post",
        cache: false,
        data: {
            table: 'delivery_location',
            common: obj,
        },
        success: function(data) {
            var address = data[0].dl_address + " " + data[0].dl_address_detail
            $('#buyer_addr').html(address)
            $('#buyer_title').html(data[0].dl_title)
            $('#buyer_name').html(data[0].dl_person)
            $('#buyer_tel').html(hyphen(data[0].dl_phone))
            $('.dl_request').html(data[0].dl_request)
        },
        error: function(request, status, error) {
            console.log(error);
        }
    });
}
var openWin;

function changeAddr() {
    if (openWin != null) openWin.close();
    var _url = '/ordermanage.php';
    var _width = '500';
    var _height = '700';
    var _left = Math.ceil((window.screen.width - _width) / 2);
    var _top = Math.ceil((window.screen.width - _height) / 2);

    window.name = "parentForm";

    openWin = window.open(_url, 'ORDER', 'width=' + _width + ', height=' + _height + ', left=' + _left + ', top=' +
        _top);
}

function changePassword() {
    $.ajax({
        url: SERVER_AP + '/user/newpassword',
        type: "post",
        cache: false,
        data: {
            u_pwd: $("#u_pwd").val(),
            u_seq: u_seq,
        },
        success: function(data) {},
        error: function(xhr, textStatus, errorThrown) {
            console.log(xhr, textStatus, errorThrown);
        }
    });

}

$('.u_pw_ck').keyup(function() {
    var u_pw = $('#u_pwd').val();
    var u_pwCk = $('#u_pwd2').val();
    if (u_pw) {
        if (u_pw == u_pwCk) {
            $('.on_pw').show();
            $('.off_pw').hide();
        } else {
            $('.off_pw').show();
            $('.on_pw').hide();
        }
    } else {
        $('.off_pw').show();
        $('.on_pw').hide();
    }

})


function chkPW() {

    var pw = $("#u_pwd").val();
    var num = pw.search(/[0-9]/g);
    var eng = pw.search(/[a-z]/ig);
    var spe = pw.search(/[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi);

    if (pw.length < 10 || pw.length > 16) {
        alert("10자리 ~ 16자리 이내로 입력해주세요.");
        return false;
    } else if (pw.search(/\s/) != -1) {
        alert("비밀번호는 공백 없이 입력해주세요.");
        return false;
    } else if (num < 0 || eng < 0 || spe < 0) {
        alert("영문,숫자, 특수문자를 혼합하여 입력해주세요.");
        return false;
    } else {
        console.log("통과");
        return true;
    }

}

function openCheck(check) {
    if (user_info.u_type == '개인회원' || user_info.u_type == '사업자회원') {

        $('#openCheck').modal('show');
    } else {
        deleteReal()
    }



    goCheckType = check;
}

function checkLogin() {
    var user_info2 = {
        u_id: user_info.u_id,
        u_pw: $('#loginPs').val(),
    };

    $.ajax({
        type: "POST",
        url: SERVER_AP + '/user/login',
        cache: false,
        dataType: 'json',
        data: {
            obj: user_info2
        },
        success: function(data) {
            if (data.result == 'not_found') {
                // alert('존재하지 않는 아이디 입니다.');

            } else if (data.result == 'wrong_pwd') {
                alert('비밀번호를 확인해 주세요.')
            } else {
                if (goCheckType == 1) {
                    location.href = 'myPageEdit.php?seq=' + user_info.u_seq + ''
                } else {
                    deleteUser();
                }

            }
        },
        error: function(request, status, error) {
            console.log("code:" + request.status + "\n" + "message:" + request.responseText + "\n" +
                "error:" + error);
        },
    });
}


function deleteUser() {
    $("#openCheck").modal('hide');
    $('#deleteModal').modal('show');



    // var obj = new Object();
    // obj.u_delete = 'Y'
    // obj.u_id = "";
    // obj.u_delete_reason = "";
    // $.ajax({
    //     url: SERVER_AP+"/common/update",
    //     type: "post",
    //     cache: false,
    //     async:false,
    //     data:{
    //         table : 'user',
    //         whereField:"u_seq",
    //         whereValue:user_info.u_seq,
    //         obj:obj,
    //     },
    //     success: function(data){
    //         alert('정상적으로 탈퇴되었습니다.')
    //         location.href='/logout.php';
    //     },
    //     error: function (request, status, error){
    //         console.log(error);
    //     }
    // });

}


function deleteReal() {
    if (confirm('정말 탈퇴하시겠습니까?')) {
        var obj = new Object();
        obj.u_delete = 'Y'
        obj.u_id = "";
        obj.u_delete_reason = "";
        $.ajax({
            url: SERVER_AP + "/common/update",
            type: "post",
            cache: false,
            async: false,
            data: {
                table: 'user',
                whereField: "u_seq",
                whereValue: user_info.u_seq,
                obj: obj,
            },
            success: function(data) {
                alert('정상적으로 탈퇴되었습니다.')
                location.href = '/logout.php';
            },
            error: function(request, status, error) {
                console.log(error);
            }
        });
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
</script>