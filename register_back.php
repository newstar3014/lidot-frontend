<? include_once $_SERVER["DOCUMENT_ROOT"].'/shop_header.php'; ?>

<style media="screen">
    .joinBtn{
        padding-top: 0;
        padding-bottom: 0;
        padding-left:30px;
        padding-right:30px;
        line-height: 42px !important;
        font-weight: normal;
        border-radius: 0;
    }
    .form-group{
        align-items: center;
        border-bottom: 1px solid #ced4da;
        padding-bottom: 10px;
    }
    .text-wrap{
        background-color: white;
    }
    #all_ck_wrap{
        font-size: 16px;
    }

    @media (max-width:768px) {
        .m_title{
            font-size: 15px;
            background-color: #f3f3f3;
            border: 1px solid #ced4da;
            border-bottom: none;
        }
        .border_st{
            border: 1px solid #ced4da;
        }
        .form-group{
            padding: 0 10px;
            padding-bottom: 10px;
        }
        .border-bottom-none{
            border-bottom: none;
        }
        .section_padding_100_50{
            padding-top: 0;
        }
        .mb-50{
            margin-bottom: 20px;
        }
        #all_ck_wrap{
            font-size: 15px;
        }
        .workgonggi{
            font-size: 12px;
        }
    }

    .row{
        margin-right: 0;
        margin-left: 0;
    }

    .review_img{
        width: 350px;
        height: 200px;
        background-position: center !important;
        background-repeat: no-repeat !important;
        background-size: cover !important;
    }
    #labelCk{
        width: 49px !important;
    }
</style>

<link href="/css/register.css" rel="stylesheet">
    <!-- Breadcumb Area -->
    <div class="breadcumb_area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5>회원가입</h5>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">회원가입</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->

    <!-- Login Area -->
    <div class="bigshop_reg_log_area section_padding_100_50">
        <div class="container px-2 px-md-1">
            <div class=" h-100 align-items-center">

                <div class="col-12 m-p-0 mx-auto">
                    <div class=" mb-50">
                        <h2 class="font-weight-normal mb-4 mb-md-5">회원가입</h2>
                        <div class="border_st">
                            <div class="form-group row mb-0 py-3 border-bottom-none" style="align-items:center;">
                                <div class="col-4 col-md-2 m-p-0 font-weight-noraml fs-15 m-fs-13">회원구분 <i class="fa-solid fa-check text-danger"></i></div>
                                <div class="col-7 col-md-6 m-p-0">
                                     <input type="radio" name="u_type" class="radioClass" id="u_person" value="개인회원">
                                     <label class="fs-15 mb-0 m-fs-13 mr-4" for="u_person">개인회원</label>
                                     <input type="radio" name="u_type" class="radioClass" id="u_comp" value="사업자회원">
                                     <label class="fs-15 mb-0 m-fs-13" for="u_comp">사업자회원</label>
                                </div>
                            </div>

                            <div class="form-group row d-none workWrap py-3">
                                <div class="col-4 col-md-2 m-p-0 font-weight-noraml fs-15 m-fs-13">사업자구분</div>
                                <div class="col-7 col-md-6 m-p-0">
                                     <input type="radio" name="u_worker" class="radioWork" id="u_gain" value="개인사업자">
                                     <label class="fs-15  m-fs-13 mr-4 mb-0" for="u_gain">개인사업자</label>
                                     <input type="radio" name="u_worker" class="radioWork" id="u_law" value="법인사업자">
                                     <label class="fs-15  m-fs-13 mb-0" for="u_law">법인사업자</label>
                                </div>
                            </div>

                            <div class="form-group row d-none workWrap_detail">
                                <div class="col-4 col-md-2 m-p-0 font-weight-noraml fs-15 m-fs-13">사업자인증</div>
                                <div class="col-7 col-md-6 m-p-0">
                                    <div class="row pl-3">
                                        <div class="col-12 col-md-6">
                                            <div class="row">
                                                <label class="fs-15 m-fs-13 mr-2 mt-1 change_saup_text" for="u_company">법인명</label>
                                                <input type="text" name="" class="mr-4 form-control form-control-sm col-12 col-md-7" id="u_company" value="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="row">
                                                <label class="fs-15 m-fs-13 mr-2 mt-1 change_saup_text2" for="u_company_num">법인번호</label>
                                                <input type="text" class="form-control form-control-sm col-12 col-md-7" id="u_company_num" onkeyup="comnumCk(this, 10)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row d-none workWrap_detail">
                                <div class="col-4 col-md-2 m-p-0 font-weight-noraml fs-15 m-fs-13">
                                    사업자등록증
                                    <label class="fs-15 m-fs-13 mr-2 mt-1 btn btn-sm btn-secondary ml-2" for="u_com_img">등록</label>
                                    <input type="file" name="" class="mr-4 form-control form-control-sm col-12 col-md-7 d-none" id="u_com_img">
                                </div>
                                <div class="col-7 col-md-6 m-p-0">
                                    <div class="row pl-3">
                                        <div class="col-12 col-md-6">
                                            <div class="d-flex">
                                                <div class="" id="u_com_img_div">
                                                    사업자등록증을 등록해주세요.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="workWrap mt-3 workgonggi d-none">
                                <p class="mb-1">1업체에 1개ID만 부여가능 - 관리자가 승인한 사업자ID만 사업자단가로 구매가능</p>
                                <p class="mb-1">- 사업자는 특별사업자 할인가격으로 구매가능합니다.</p>
                                <p class="mb-1">- 사업자당 한 개의 ID만 부여되며 ‘신규가입후->사업자등록증제출->관리자승인’ 을 거치셔야 사업자가입이 됩니다.</p>
                                <p class="mb-1">- 기재된 재고는 실시간 재고이고 항시 변동이 가능합니다.</p>
                                <p class="mb-1">- 운반비 미포함에  택배, 혹은 화물 착불로 배송됩니다.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 m-p-0 mx-auto">
                    <div class=" mb-50">
                        <h4 class="mb-md-3 mb-0 py-3 px-2 py-md-0 px-md-0 font-weight-normal d-flex justify-content-between align-items-center m_title">
                            <span class="">기본정보</span>
                            <span style="font-size:14px;"><i class="fa-solid fa-check text-danger"></i> 필수입력사항</span>
                        </h4>
                        <div class="border_st py-3">
                            <div class="form-group row">
                                <div class="col-4 col-md-2 m-p-0 font-weight-normal fs-15 m-fs-13 label_name">아이디 <i class="fa-solid fa-check text-danger"></i></div>
                                <div class="col-8 col-md-9 m-p-0 d-flex align-items-center" style="flex-wrap: wrap;">
                                     <input type="text" class="form-control form-control-sm col-12 col-md-5 mr-2 float-left" id="u_id" placeholder="아이디" onkeyup="fn_press_han(this)">
                                     <div class="btn-secondary py-1 px-2 fs-12 mr-2 pointer" onclick="dupliCkClick()">
                                         중복확인
                                     </div>
                                     <span class="fs-14 m-fs-11 small_line">(영문소문자/숫자,5-16자)</span>
                                </div>
                                <!-- <div class="fs-14 col-md-4 m-fs-10 d-inline-block m-p-0 small_line"></div> -->
                            </div>
                            <div class="form-group row">
                                <div class="col-4 col-md-2 m-p-0 font-weight-normal fs-15 m-fs-13 label_name">비밀번호 <i class="fa-solid fa-check text-danger"></i></div>
                                <div class="col-8 col-md-9 m-p-0">
                                     <input type="password" class="form-control form-control-sm col-12 col-md-5 mr-2 float-left u_pw_ck" id="u_pw" placeholder="비밀번호" onkeyup="fn_press_han(this)">
                                     <span class="fs-14 m-fs-11">(영문 대소문자/특수문자 중 1가지 이상 조합, 10~16자)</span>
                                </div>
                                <!-- <div class="fs-14 m-fs-10 col-md-4 d-inline-block m-p-0 small_line">(영문 대소문자/특수문자 중 1가지 이상 조합, 10~16자)</div> -->
                            </div>
                            <div class="form-group row">
                                <div class="col-4 col-md-2 m-p-0 font-weight-normal fs-15 m-fs-13 label_name">비밀번호 확인 <i class="fa-solid fa-check text-danger"></i></div>
                                <div class="col-8 col-md-6 m-p-0">
                                     <input type="password" class="form-control form-control-sm u_pw_ck" id="u_pw_ck" placeholder="비밀번호 확인" onkeyup="fn_press_han(this)">
                                </div>
                                <div class="text-danger off_pw fs-10">비밀번호가 일치하지 않습니다.</div>
                                <div class="text-primary on_pw fs-10">비밀번호가 일치합니다.</div>
                            </div>
                            <div class="form-group row">
                                <div class="col-4 col-md-2 m-p-0 font-weight-normal fs-15 m-fs-13 label_name">이름 <i class="fa-solid fa-check text-danger"></i></div>
                                <div class="col-8 col-md-6 m-p-0">
                                     <input type="text" class="form-control form-control-sm" id="u_name" placeholder="이름">
                                </div>
                            </div>

                            <div class="form-group row mb-1" style="border-bottom:none;">
                                <div class="col-4 col-md-2 m-p-0 font-weight-normal fs-15 m-fs-13 label_name mb-2 mb-md-0">주소 <i class="fa-solid fa-check text-danger"></i></div>
                                <div class="col-12 col-md-6 m-p-0 d-flex align-items-center">
                                     <input type="text" class="form-control form-control-sm col-8 col-md-9 float-left" readonly id="u_addr" placeholder="주소">
                                     <span class="btn-secondary py-1 px-2 fs-12 pointer ml-1" onclick="findAddr()">주소찾기</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-4 col-md-2">
                                </div>
                                <div class="col-12 col-md-6 m-p-0">
                                     <input type="text" class="form-control form-control-sm" id="u_addr_detail" placeholder="상세주소">
                                </div>
                            </div>



                            <div class="form-group row">
                                <div class="col-4 col-md-2 m-p-0 font-weight-normal fs-15 m-fs-13 label_name">일반전화
                                </div>
                                <div class="col-8 col-md-6 m-p-0 d-flex align-items-center">
                                    <select class="form-control form-control-sm" name="" style="width:70px;" id="u_tel_1">
                                        <option value="02">02</option>
                                        <option value="031">031</option>
                                        <option value="032">032</option>
                                        <option value="033">033</option>
                                        <option value="041">041</option>
                                        <option value="042">042</option>
                                        <option value="043">043</option>
                                        <option value="044">044</option>
                                        <option value="051">051</option>
                                        <option value="052">052</option>
                                        <option value="053">053</option>
                                        <option value="054">054</option>
                                        <option value="055">055</option>
                                        <option value="061">061</option>
                                        <option value="062">062</option>
                                        <option value="063">063</option>
                                        <option value="064">064</option>
                                        <option value="0502">0502</option>
                                        <option value="0503">0503</option>
                                        <option value="0504">0504</option>
                                        <option value="0505">0505</option>
                                        <option value="0506">0506</option>
                                        <option value="0507">0507</option>
                                        <option value="070">070</option>
                                        <option value="010">010</option>
                                        <option value="011">011</option>
                                        <option value="016">016</option>
                                        <option value="017">017</option>
                                        <option value="018">018</option>
                                        <option value="019">019</option>
                                        <option value="0508">0508</option>
                                    </select>
                                    <span class="mx-1">-</span>
                                     <input type="number" class="form-control form-control-sm" id="u_tel" maxlength="7" placeholder="일반전화(나머지 7자리 '-'제외)" oninput="maxLengthCheck(this)">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-4 col-md-2 m-p-0 font-weight-normal fs-15 m-fs-13 label_name">휴대전화 <i class="fa-solid fa-check text-danger"></i></div>
                                <div class="col-8 col-md-6 m-p-0 d-flex align-items-center">
                                    <select class="form-control form-control-sm" name="" style="width:70px;" id="u_phone_1">
                                        <option value="010">010</option>
                                        <option value="011">011</option>
                                        <option value="016">016</option>
                                        <option value="017">017</option>
                                        <option value="018">018</option>
                                        <option value="019">019</option>
                                    </select>
                                    <span class="mx-1">-</span>
                                     <input type="number" class="form-control form-control-sm" id="u_phone" maxlength="8" placeholder="휴대전화(나머지 8자리 '-'제외)" oninput="maxLengthCheck(this)">
                                </div>
                            </div>

                            <div class="form-group row mb-0 border-bottom-none">
                                <div class="col-4 col-md-2 m-p-0 font-weight-normal fs-15 m-fs-13 label_name">이메일 <i class="fa-solid fa-check text-danger"></i></div>
                                <div class="col-8 col-md-6 m-p-0">
                                     <input type="text" class="form-control form-control-sm" id="u_email" placeholder="이메일">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 m-p-0 mx-auto">
                    <div class=" mb-50">
                        <h4 class="mb-md-3 mb-0 py-3 px-2 py-md-0 px-md-0  font-weight-normal m_title"><span class="">추가정보</span></h4>
                        <div class="border_st py-3">
                            <div class="form-group row">
                                <div class="col-4 col-md-2 font-weight-normal m-p-0 fs-15 m-fs-13 label_name">생년월일</div>
                                <div class="col-8 col-md-5 m-p-0 mb-2 mb-md-0 d-flex align-items-center">
                                    <input type="text" id="u_date" class="form-control form-control-sm mr-3" placeholder="0000-00-00"/>
                                    <input type="radio" name="u_date" class="" id="u_yang" value="양력">
                                    <label class="fs-15 m-fs-13 mb-0 ml-1" for="u_yang" style="width:50px;">양력</label>
                                    <input type="radio" name="u_date" class="ml-2" id="u_um" value="음력">
                                    <label class="fs-15 m-fs-13 mb-0 ml-1" for="u_um" style="width:50px;">음력</label>
                                </div>
                            </div>
                            <div class="form-group mb-0 row border-bottom-none">
                                <div class="col-4 col-md-2  m-p-0 font-weight-normal fs-15 m-fs-13 label_name">지역
                                </div>
                                <div class="col-8 col-md-6 m-p-0">
                                     <input type="text" class="form-control form-control-sm" id="u_area" placeholder="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-100 pt-5 align-items-center">
                <div class="col-12 m-p-0 mx-auto">
                    <div class=" mb-50">
                        <h4 class="mb-md-3 mb-0 py-3 px-2 py-md-0 px-md-0  font-weight-normal m_title"><span class="">약관 동의</span></h4>
                        <div class="container border_st py-3 mb-4" style="background:#fafafa;">
                            <div class="d-flex align-items-center py-2 border-bottom font-weight-bold" id="all_ck_wrap">
                                <label for="all_ck" class="float-left mr-2 mr-md-1">
                                    <img id="labelCk" class="chk_img mt-1" style="width:30px" src="/img/checks_off.png" />
                                </label>
                                <input type="checkbox" id="all_ck" class="d-none" />
                                <label for="all_ck" class="mb-0" style="word-break: keep-all;">이용약관 및 개인정보수집 및 이용,쇼핑정보 수신(선택)에 모두 동의합니다.</label>
                            </div>
                            <div class="mt-4 border-bottom">
                                <div class="mb-3 fs-15">[필수] 이용약관 동의</div>
                                <div class="useOkWrap text-wrap mb-2 p-3">
                                    <pre style="white-space:pre-wrap">제1조(목적)

표준약관 제10023호

이 약관은 LIDOT사이버 몰(이하 "몰"이라 한다)에서 제공하는 인터넷 관련 서비스(이하 "서비스"라 한다)를 이용함에 있어 사이버몰과 이용자의 권리·의무 및 책임사항을 규정함을 목적으로 합니다.
※ 「PC통신등을 이용하는 전자거래에 대해서도 그 성질에 반하지 않는한 이 약관을 준용합니다」


제2조(정의)

① "몰"이란 회사가 재화 또는 용역을 이용자에게 제공하기 위하여 컴퓨터등 정보통신설비를 이용하여 재화 또는 용역을 거래할 수 있도록 설정한 가상의 영업장을 말하며, 아울러 사이버몰을 운영하는 사업자의 의미로도 사용합니다.
② "이용자"란 "몰"에 접속하여 이 약관에 따라 "몰"이 제공하는 서비스를 받는 회원 및 비회원을 말합니다.
③ ‘회원’이라 함은 "몰"에 개인정보를 제공하여 회원등록을 한 자로서, "몰"의 정보를 지속적으로 제공받으며, "몰"이 제공하는 서비스를 계속적으로 이용할 수 있는 자를 말합니다.
④ ‘비회원’이라 함은 회원에 가입하지 않고 "몰"이 제공하는 서비스를 이용하는 자를 말합니다.


제3조(약관등의 명시와 설명 및 개정)

① "몰"은 이 약관의 내용과 상호 및 대표자 성명, 영업소 소재지 주소(소비자의 불만을 처리할 수 있는 곳의 주소를 포함), 전화번호·모사전송번호·전자우편주소, 사업자등록번호, 통신판매업신고번호, 개인정보 보호책임자등을 이용자가 쉽게 알 수 있도록 "몰"의 초기 서비스화면(전면)에 게시합니다. 다만, 약관의 내용은 이용자가 연결화면을 통하여 볼 수 있도록 할 수 있습니다.
② "몰"은 이용자가 약관에 동의하기에 앞서 약관에 정하여져 있는 내용 중 청약철회·배송책임·환불조건 등과 같은 중요한 내용을 이용자가 이해할 수 있도록 별도의 연결화면 또는 팝업화면 등을 제공하여 이용자의 확인을 구하여야 합니다.
③ "몰"은 전자상거래등에서의소비자보호에관한법률, 약관의규제에관한법률, 전자거래기본법, 전자서명법, 정보통신망이용촉진등에관한법률, 방문판매등에관한법률, 소비자보호법 등 관련법을 위배하지 않는 범위에서 이 약관을 개정할 수 있습니다.
④ "몰"이 약관을 개정할 경우에는 적용일자 및 개정사유를 명시하여 현행약관과 함께 몰의 초기화면에 그 적용일자 7일이전부터 적용일자 전일까지 공지합니다.
다만, 이용자에게 불리하게 약관내용을 변경하는 경우에는 최소한 30일 이상의 사전 유예기간을 두고 공지합니다. 이 경우 "몰“은 개정전 내용과 개정후 내용을 명확하게 비교하여 이용자가 알기 쉽도록 표시합니다.
⑤ "몰"이 약관을 개정할 경우에는 그 개정약관은 그 적용일자 이후에 체결되는 계약에만 적용되고 그 이전에 이미 체결된 계약에 대해서는 개정전의 약관조항이 그대로 적용됩니다. 다만 이미 계약을 체결한 이용자가 개정약관 조항의 적용을 받기를 원하는 뜻을 제3항에 의한 개정약관의 공지기간내에 "몰"에 송신하여 "몰"의 동의를 받은 경우에는 개정약관 조항이 적용됩니다.
⑥ 이 약관에서 정하지 아니한 사항과 이 약관의 해석에 관하여는 전자상거래등에서의 소비자보호에 관한 법률, 약관의 규제 등에 관한 법률, 공정거래위원회가 정하는 전자상거래 등에서의 소비자보호지침 및 관계법령 또는 상관례에 따릅니다.


제4조(서비스의 제공 및 변경)

① "몰"은 다음과 같은 업무를 수행합니다.
1. 재화 또는 용역에 대한 정보 제공 및 구매계약의 체결
2. 구매계약이 체결된 재화 또는 용역의 배송
3. 기타 "몰"이 정하는 업무
② "몰"은 재화 또는 용역의 품절 또는 기술적 사양의 변경 등의 경우에는 장차 체결되는 계약에 의해 제공할 재화 또는 용역의 내용을 변경할 수 있습니다. 이 경우에는 변경된 재화 또는 용역의 내용 및 제공일자를 명시하여 현재의 재화 또는 용역의 내용을 게시한 곳에 즉시 공지합니다.
③ "몰"이 제공하기로 이용자와 계약을 체결한 서비스의 내용을 재화등의 품절 또는 기술적 사양의 변경 등의 사유로 변경할 경우에는 그 사유를 이용자에게 통지 가능한 주소로 즉시 통지합니다.
④ 전항의 경우 "몰"은 이로 인하여 이용자가 입은 손해를 배상합니다. 다만, "몰"이 고의 또는 과실이 없음을 입증하는 경우에는 그러하지 아니합니다.


제5조(서비스의 중단)

① "몰"은 컴퓨터 등 정보통신설비의 보수점검·교체 및 고장, 통신의 두절 등의 사유가 발생한 경우에는 서비스의 제공을 일시적으로 중단할 수 있습니다.
② "몰"은 제1항의 사유로 서비스의 제공이 일시적으로 중단됨으로 인하여 이용자 또는 제3자가 입은 손해에 대하여 배상합니다. 단, "몰"이 고의 또는 과실이 없음을 입증하는 경우에는 그러하지 아니합니다.
③ 사업종목의 전환, 사업의 포기, 업체간의 통합 등의 이유로 서비스를 제공할 수 없게 되는 경우에는 "몰"은 제8조에 정한 방법으로 이용자에게 통지하고 당초 "몰"에서 제시한 조건에 따라 소비자에게 보상합니다. 다만, "몰"이 보상기준 등을 고지하지 아니한 경우에는 이용자들의 마일리지 또는 적립금 등을 "몰"에서 통용되는 통화가치에 상응하는 현물 또는 현금으로 이용자에게 지급합니다.


제6조(회원가입)

① 이용자는 "몰"이 정한 가입 양식에 따라 회원정보를 기입한 후 이 약관에 동의한다는 의사표시를 함으로서 회원가입을 신청합니다.
② "몰"은 제1항과 같이 회원으로 가입할 것을 신청한 이용자 중 다음 각호에 해당하지 않는 한 회원으로 등록합니다.
1. 가입신청자가 이 약관 제7조제3항에 의하여 이전에 회원자격을 상실한 적이 있는 경우, 다만 제7조제3항에 의한 회원자격 상실후 3년이 경과한 자로서 "몰"의 회원재가입 승낙을 얻은 경우에는 예외로 한다.
2. 등록 내용에 허위, 기재누락, 오기가 있는 경우
3. 기타 회원으로 등록하는 것이 "몰"의 기술상 현저히 지장이 있다고 판단되는 경우
③ 회원가입계약의 성립시기는 "몰"의 승낙이 회원에게 도달한 시점으로 합니다.
④ 회원은 제15조제1항에 의한 등록사항에 변경이 있는 경우, 즉시 전자우편 기타 방법으로 "몰"에 대하여 그 변경사항을 알려야 합니다.


제7조(회원 탈퇴 및 자격 상실 등)

① 회원은 "몰"에 언제든지 탈퇴를 요청할 수 있으며 "몰"은 즉시 회원탈퇴를 처리합니다.
② 회원이 다음 각호의 사유에 해당하는 경우, "몰"은 회원자격을 제한 및 정지시킬 수 있습니다.
1. 가입 신청시에 허위 내용을 등록한 경우
2. "몰"을 이용하여 구입한 재화등의 대금, 기타 "몰"이용에 관련하여 회원이 부담하는 채무를 기일에 지급하지 않는 경우
3. 다른 사람의 "몰" 이용을 방해하거나 그 정보를 도용하는 등 전자상거래 질서를 위협하는 경우
4. "몰"을 이용하여 법령 또는 이 약관이 금지하거나 공서양속에 반하는 행위를 하는 경우
③ "몰"이 회원 자격을 제한·정지 시킨후, 동일한 행위가 2회이상 반복되거나 30일이내에 그 사유가 시정되지 아니하는 경우 "몰"은 회원자격을 상실시킬 수 있습니다.
④ "몰"이 회원자격을 상실시키는 경우에는 회원등록을 말소합니다. 이 경우 회원에게 이를 통지하고, 회원등록 말소전에 최소한 30일 이상의 기간을 정하여 소명할 기회를 부여합니다.


제8조(회원에 대한 통지)

① "몰"이 회원에 대한 통지를 하는 경우, 회원이 "몰"과 미리 약정하여 지정한 전자우편 주소로 할 수 있습니다.
② "몰"은 불특정다수 회원에 대한 통지의 경우 1주일이상 "몰" 게시판에 게시함으로서 개별 통지에 갈음할 수 있습니다. 다만, 회원 본인의 거래와 관련하여 중대한 영향을 미치는 사항에 대하여는 개별통지를 합니다.


제9조(구매신청) "몰"이용자는 "몰"상에서 다음 또는 이와 유사한 방법에 의하여 구매를 신청하며, "몰"은 이용자가 구매신청을 함에 있어서 다음의 각 내용을 알기 쉽게 제공하여야 합니다. 단, 회원인 경우 제2호 내지 제4호의 적용을 제외할 수 있습니다.
1. 재화등의 검색 및 선택
2. 성명, 주소, 전화번호, 전자우편주소(또는 이동전화번호) 등의 입력
3. 약관내용, 청약철회권이 제한되는 서비스, 배송료·설치비 등의 비용부담과 관련한 내용에 대한 확인
4. 이 약관에 동의하고 위 3.호의 사항을 확인하거나 거부하는 표시(예, 마우스 클릭)
5. 재화등의 구매신청 및 이에 관한 확인 또는 "몰"의 확인에 대한 동의
6. 결제방법의 선택


제10조 (계약의 성립)

① "몰"은 제9조와 같은 구매신청에 대하여 다음 각호에 해당하면 승낙하지 않을 수 있습니다. 다만, 미성년자와 계약을 체결하는 경우에는 법정대리인의 동의를 얻지 못하면 미성년자 본인 또는 법정대리인이 계약을 취소할 수 있다는 내용을 고지하여야 합니다.
1. 신청 내용에 허위, 기재누락, 오기가 있는 경우
2. 미성년자가 담배, 주류등 청소년보호법에서 금지하는 재화 및 용역을 구매하는 경우
3. 기타 구매신청에 승낙하는 것이 "몰" 기술상 현저히 지장이 있다고 판단하는 경우
② "몰"의 승낙이 제12조제1항의 수신확인통지형태로 이용자에게 도달한 시점에 계약이 성립한 것으로 봅니다.
③ "몰"의 승낙의 의사표시에는 이용자의 구매 신청에 대한 확인 및 판매가능 여부, 구매신청의 정정 취소등에 관한 정보등을 포함하여야 합니다.


제11조(지급방법) "몰"에서 구매한 재화 또는 용역에 대한 대금지급방법은 다음 각호의 방법중 가용한 방법으로 할 수 있습니다. 단, "몰"은 이용자의 지급방법에 대하여 재화 등의 대금에 어떠한 명목의 수수료도 추가하여 징수할 수 없습니다.
1. 폰뱅킹, 인터넷뱅킹, 메일 뱅킹 등의 각종 계좌이체
2. 선불카드, 직불카드, 신용카드 등의 각종 카드 결제
3. 온라인무통장입금
4. 전자화폐에 의한 결제
5. 수령시 대금지급
6. 마일리지 등 "몰"이 지급한 포인트에 의한 결제
7. "몰"과 계약을 맺었거나 "몰"이 인정한 상품권에 의한 결제
8. 기타 전자적 지급 방법에 의한 대금 지급 등


제12조(수신확인통지·구매신청 변경 및 취소)

① "몰"은 이용자의 구매신청이 있는 경우 이용자에게 수신확인통지를 합니다.
② 수신확인통지를 받은 이용자는 의사표시의 불일치등이 있는 경우에는 수신확인통지를 받은 후 즉시 구매신청 변경 및 취소를 요청할 수 있고 "몰"은 배송전에 이용자의 요청이 있는 경우에는 지체없이 그 요청에 따라 처리하여야 합니다. 다만 이미 대금을 지불한 경우에는 제15조의 청약철회 등에 관한 규정에 따릅니다.


제13조(재화등의 공급)

① "몰"은 이용자와 재화등의 공급시기에 관하여 별도의 약정이 없는 이상, 이용자가 청약을 한 날부터 7일 이내에 재화 등을 배송할 수 있도록 주문제작, 포장 등 기타의 필요한 조치를 취합니다. 다만, "몰"이 이미 재화 등의 대금의 전부 또는 일부를 받은 경우에는 대금의 전부 또는 일부를 받은 날부터 2영업일 이내에 조치를 취합니다. 이때 "몰"은 이용자가 재화등의 공급 절차 및 진행 사항을 확인할 수 있도록 적절한 조치를 합니다.
② "몰"은 이용자가 구매한 재화에 대해 배송수단, 수단별 배송비용 부담자, 수단별 배송기간 등을 명시합니다. 만약 "몰"이 약정 배송기간을 초과한 경우에는 그로 인한 이용자의 손해를 배상하여야 합니다. 다만 "몰"이 고의·과실이 없음을 입증한 경우에는 그러하지 아니합니다.


제14조(환급)

"몰"은 이용자가 구매신청한 재화등이 품절 등의 사유로 인도 또는 제공을 할 수 없을 때에는 지체없이 그 사유를 이용자에게 통지하고 사전에 재화 등의 대금을 받은 경우에는 대금을 받은 날부터 2영업일 이내에 환급하거나 환급에 필요한 조치를 취합니다.


제15조(청약철회 등)

① "몰"과 재화등의 구매에 관한 계약을 체결한 이용자는 수신확인의 통지를 받은 날부터 7일 이내에는 청약의 철회를 할 수 있습니다.
② 이용자는 재화등을 배송받은 경우 다음 각호의 1에 해당하는 경우에는 반품 및 교환을 할 수 없습니다.
1. 이용자에게 책임 있는 사유로 재화 등이 멸실 또는 훼손된 경우(다만, 재화 등의 내용을 확인하기 위하여 포장 등을 훼손한 경우에는 청약철회를 할 수 있습니다)
2. 이용자의 사용 또는 일부 소비에 의하여 재화 등의 가치가 현저히 감소한 경우
3. 시간의 경과에 의하여 재판매가 곤란할 정도로 재화등의 가치가 현저히 감소한 경우
4. 같은 성능을 지닌 재화등으로 복제가 가능한 경우 그 원본인 재화 등의 포장을 훼손한 경우
③ 제2항제2호 내지 제4호의 경우에 "몰"이 사전에 청약철회 등이 제한되는 사실을 소비자가 쉽게 알 수 있는 곳에 명기하거나 시용상품을 제공하는 등의 조치를 하지 않았다면 이용자의 청약철회등이 제한되지 않습니다.
④ 이용자는 제1항 및 제2항의 규정에 불구하고 재화등의 내용이 표시·광고 내용과 다르거나 계약내용과 다르게 이행된 때에는 당해 재화등을 공급받은 날부터 3월이내, 그 사실을 안 날 또는 알 수 있었던 날부터 30일 이내에 청약철회 등을 할 수 있습니다.


제16조(청약철회 등의 효과)

① "몰"은 이용자로부터 재화 등을 반환받은 경우 3영업일 이내에 이미 지급받은 재화등의 대금을 환급합니다. 이 경우 "몰"이 이용자에게 재화등의 환급을 지연한 때에는 그 지연기간에 대하여 공정거래위원회가 정하여 고시하는 지연이자율을 곱하여 산정한 지연이자를 지급합니다.
② "몰"은 위 대금을 환급함에 있어서 이용자가 신용카드 또는 전자화폐 등의 결제수단으로 재화등의 대금을 지급한 때에는 지체없이 당해 결제수단을 제공한 사업자로 하여금 재화등의 대금의 청구를 정지 또는 취소하도록 요청합니다.
③ 청약철회등의 경우 공급받은 재화등의 반환에 필요한 비용은 이용자가 부담합니다. "몰"은 이용자에게 청약철회등을 이유로 위약금 또는 손해배상을 청구하지 않습니다. 다만 재화등의 내용이 표시·광고 내용과 다르거나 계약내용과 다르게 이행되어 청약철회등을 하는 경우 재화등의 반환에 필요한 비용은 "몰"이 부담합니다.
④ 이용자가 재화등을 제공받을때 발송비를 부담한 경우에 "몰"은 청약철회시 그 비용을 누가 부담하는지를 이용자가 알기 쉽도록 명확하게 표시합니다.


제17조(개인정보보호)

① "몰"은 이용자의 정보수집시 구매계약 이행에 필요한 최소한의 정보를 수집합니다. 다음 사항을 필수사항으로 하며 그 외 사항은 선택사항으로 합니다.
1. 성명
2. 주소
3. 전화번호
4. 희망ID(회원의 경우)
5. 비밀번호(회원의 경우)
6. 전자우편주소(또는 이동전화번호)
② "몰"이 이용자의 개인식별이 가능한 개인정보를 수집하는 때에는 반드시 당해 이용자의 동의를 받습니다.
③ 제공된 개인정보는 당해 이용자의 동의없이 목적외의 이용이나 제3자에게 제공할 수 없으며, 이에 대한 모든 책임은 몰이 집니다. 다만, 다음의 경우에는 예외로 합니다.
1. 배송업무상 배송업체에게 배송에 필요한 최소한의 이용자의 정보(성명, 주소, 전화번호)를 알려주는 경우
2. 통계작성, 학술연구 또는 시장조사를 위하여 필요한 경우로서 특정 개인을 식별할 수 없는 형태로 제공하는 경우
3. 재화등의 거래에 따른 대금정산을 위하여 필요한 경우
4. 도용방지를 위하여 본인확인에 필요한 경우
5. 법률의 규정 또는 법률에 의하여 필요한 불가피한 사유가 있는 경우
④ "몰"이 제2항과 제3항에 의해 이용자의 동의를 받아야 하는 경우에는 개인정보 보호책임자의 신원(소속, 성명 및 전화번호, 기타 연락처), 정보의 수집목적 및 이용목적, 제3자에 대한 정보제공 관련사항(제공받은자, 제공목적 및 제공할 정보의 내용) 등 정보통신망이용촉진등에관한법률 제22조제2항이 규정한 사항을 미리 명시하거나 고지해야 하며 이용자는 언제든지 이 동의를 철회할 수 있습니다.
⑤ 이용자는 언제든지 "몰"이 가지고 있는 자신의 개인정보에 대해 열람 및 오류정정을 요구할 수 있으며 "몰"은 이에 대해 지체없이 필요한 조치를 취할 의무를 집니다. 이용자가 오류의 정정을 요구한 경우에는 "몰"은 그 오류를 정정할 때까지 당해 개인정보를 이용하지 않습니다.
⑥ "몰"은 개인정보 보호를 위하여 관리자를 한정하여 그 수를 최소화하며 신용카드, 은행계좌 등을 포함한 이용자의 개인정보의 분실, 도난, 유출, 변조 등으로 인한 이용자의 손해에 대하여 모든 책임을 집니다.
⑦ "몰" 또는 그로부터 개인정보를 제공받은 제3자는 개인정보의 수집목적 또는 제공받은 목적을 달성한 때에는 당해 개인정보를 지체없이 파기합니다.


제18조(“몰“의 의무)

① "몰"은 법령과 이 약관이 금지하거나 공서양속에 반하는 행위를 하지 않으며 이 약관이 정하는 바에 따라 지속적이고, 안정적으로 재화·용역을 제공하는데 최선을 다하여야 합니다.
② "몰"은 이용자가 안전하게 인터넷 서비스를 이용할 수 있도록 이용자의 개인정보(신용정보 포함)보호를 위한 보안 시스템을 갖추어야 합니다.
③ "몰"이 상품이나 용역에 대하여 「표시·광고의공정화에관한법률」 제3조 소정의 부당한 표시·광고행위를 함으로써 이용자가 손해를 입은 때에는 이를 배상할 책임을 집니다.
④ "몰"은 이용자가 원하지 않는 영리목적의 광고성 전자우편을 발송하지 않습니다.


제19조(회원의 ID 및 비밀번호에 대한 의무)

① 제17조의 경우를 제외한 ID와 비밀번호에 관한 관리책임은 회원에게 있습니다.
② 회원은 자신의 ID 및 비밀번호를 제3자에게 이용하게 해서는 안됩니다.
③ 회원이 자신의 ID 및 비밀번호를 도난당하거나 제3자가 사용하고 있음을 인지한 경우에는 바로 "몰"에 통보하고 "몰"의 안내가 있는 경우에는 그에 따라야 합니다.


제20조(이용자의 의무) 이용자는 다음 행위를 하여서는 안됩니다.
1. 신청 또는 변경시 허위 내용의 등록
2. 타인의 정보 도용
3. "몰"에 게시된 정보의 변경
4. "몰"이 정한 정보 이외의 정보(컴퓨터 프로그램 등) 등의 송신 또는 게시
5. "몰" 기타 제3자의 저작권 등 지적재산권에 대한 침해
6. "몰" 기타 제3자의 명예를 손상시키거나 업무를 방해하는 행위
7. 외설 또는 폭력적인 메시지, 화상, 음성, 기타 공서양속에 반하는 정보를 몰에 공개 또는 게시하는 행위


제21조(연결"몰"과 피연결"몰" 간의 관계)

① 상위 "몰"과 하위 "몰"이 하이퍼 링크(예: 하이퍼 링크의 대상에는 문자, 그림 및 동화상 등이 포함됨)방식 등으로 연결된 경우, 전자를 연결 "몰"(웹 사이트)이라고 하고 후자를 피연결 "몰"(웹사이트)이라고 합니다.
② 연결"몰"은 피연결"몰"이 독자적으로 제공하는 재화등에 의하여 이용자와 행하는 거래에 대해서 보증책임을 지지 않는다는 뜻을 연결"몰"의 초기화면 또는 연결되는 시점의 팝업화면으로 명시한 경우에는 그 거래에 대한 보증책임을 지지 않습니다.


제22조(저작권의 귀속 및 이용제한)

① “몰“이 작성한 저작물에 대한 저작권 기타 지적재산권은 ”몰“에 귀속합니다.
② 이용자는 "몰"을 이용함으로써 얻은 정보 중 "몰"에게 지적재산권이 귀속된 정보를 "몰"의 사전 승낙없이 복제, 송신, 출판, 배포, 방송 기타 방법에 의하여 영리목적으로 이용하거나 제3자에게 이용하게 하여서는 안됩니다.
③ "몰"은 약정에 따라 이용자에게 귀속된 저작권을 사용하는 경우 당해 이용자에게 통보하여야 합니다.


제23조(분쟁해결)

① "몰"은 이용자가 제기하는 정당한 의견이나 불만을 반영하고 그 피해를 보상처리하기 위하여 피해보상처리기구를 설치·운영합니다.
② "몰"은 이용자로부터 제출되는 불만사항 및 의견은 우선적으로 그 사항을 처리합니다. 다만, 신속한 처리가 곤란한 경우에는 이용자에게 그 사유와 처리일정을 즉시 통보해 드립니다.
③ "몰"과 이용자간에 발생한 전자상거래 분쟁과 관련하여 이용자의 피해구제신청이 있는 경우에는 공정거래위원회 또는 시·도지사가 의뢰하는 분쟁조정기관의 조정에 따를 수 있습니다.


제24조(재판권 및 준거법)

① "몰"과 이용자간에 발생한 전자상거래 분쟁에 관한 소송은 제소 당시의 이용자의 주소에 의하고, 주소가 없는 경우에는 거소를 관할하는 지방법원의 전속관할로 합니다. 다만, 제소 당시 이용자의 주소 또는 거소가 분명하지 않거나 외국 거주자의 경우에는 민사소송법상의 관할법원에 제기합니다.
② "몰"과 이용자간에 제기된 전자상거래 소송에는 한국법을 적용합니다.


부칙

1. 이 약관은 2022년 08월 01일부터 적용됩니다.
</pre>
                                </div>
                                <div class="d-flex align-items-center pb-3">
                                    <input type="checkbox" id="use_ck" class="d-none ck_many" />
                                    <span class="mr-4">디자인 리닷 이용약관에 동의 하십니까?</span>
                                    <label for="use_ck" class="mb-0"><img id="useCk_img" class="ck_many chk_img" style="width:30px" src="/img/checks_off.png" /></label>
                                    <label for="use_ck" class="label_w mb-0">동의함</label>
                                </div>
                            </div>

                            <div class="mt-4 border-bottom">
                                <div class="mb-3 fs-15">[필수] 개인정보 수집 및 이용 동의</div>
                                <div class="gainOkWrap text-wrap mb-2 p-3">
                                    <pre style="white-space:pre-wrap">개인정보취급방침

LIDOT은(는) 이용자들의 개인정보보호를 매우 중요시하며, 이용자가 회사의 서비스를 이용함과 동시에 온라인상에서 회사에 제공한 개인정보가 보호 받을 수 있도록 최선을 다하고 있습니다.

이에LIDOT은 통신비밀보호법, 전기통신사업법, 정보통신망 이용촉진 및 정보보호 등에 관한 법률 등 정보통신서비스제공자가 준수하여야 할 관련 법규상의 개인정보보호 규정 및 정보통신부가 제정한 개인정보보호지침을 준수하고 있습니다.


LIDOT은 개인정보 취급방침을 통하여 이용자들이 제공하는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며 개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려 드립니다.

LIDOT은 개인정보 취급방침을 홈페이지 첫 화면에 공개함으로써 이용자들이 언제나 용이하게 보실 수 있도록 조치하고 있습니다.

회사의 개인정보 취급방침은 정부의 법률 및 지침 변경이나 회사의 내부 방침 변경 등으로 인하여 수시로 변경될 수 있고, 이에 따른 개인정보 취급방침의 지속적인 개선을 위하여 필요한 절차를 정하고 있습니다.


그리고 개인정보 취급방침을 개정하는 경우나 개인정보 취급방침 변경될 경우 쇼핑몰의 첫페이지의 개인정보취급방침을 통해 고지하고 있습니다. 이용자들께서는 사이트 방문 시 수시로 확인하시기 바랍니다.

LIDOT의 개인정보 취급방침은 다음과 같은 내용을 담고 있습니다.



1. 개인정보 수집에 대한 동의
2. 개인정보의 수집목적 및 이용목적
3. 수집하는 개인정보 항목 및 수집방법
4. 수집하는 개인정보의 보유 및 이용기간
5. 수집한 개인정보의 공유 및 제공
6. 이용자 자신의 개인정보 관리(열람,정정,삭제 등)에 관한 사항
7. 쿠키(cookie)의 운영에 관한 사항
8. 비회원 고객의 개인정보 관리
9. 개인정보의 위탁처리
10. 개인정보관련 의견수렴 및 불만처리에 관한 사항
11. 개인정보 관리책임자 및 담당자의 소속-성명 및 연락처
12. 고지의 의무


1. 개인정보 수집에 대한 동의

LIDOT은 이용자들이 회사의 개인정보 취급방침 또는 이용약관의 내용에 대하여 「동의」버튼 또는 「취소」버튼을 클릭할 수 있는 절차를 마련하여, 「동의」버튼을 클릭하면 개인정보 수집에 대해 동의한 것으로 봅니다.


2. 개인정보의 수집목적 및 이용목적

"개인정보"라 함은 생존하는 개인에 관한 정보로서 당해 정보에 포함되어 있는 성명등의 사항에 의하여 당해 개인을 식별할 수 있는 정보(당해 정보만으로는 특정 개인을 식별할 수 없더라도 다른 정보와 용이하게 결합하여 식별할 수 있는 것을 포함)를 말합니다.

대부분의 서비스는 별도의 사용자 등록이 없이 언제든지 사용할 수 있습니다.
그러나LIDOT은 회원서비스를 통하여 이용자들에게 맞춤식 서비스를 비롯한 보다 더 향상된 양질의 서비스를 제공하기 위하여 이용자 개인의 정보를 수집하고 있습니다.

LIDOT은 이용자의 사전 동의 없이는 이용자의 개인 정보를 공개하지 않으며, 수집된 정보는 아래와 같이 이용하고 있습니다.

첫째, 이용자들이 제공한 개인정보를 바탕으로 보다 더 유용한 서비스를 개발할 수 있습니다.
LIDOT은 신규 서비스개발이나 컨텐츠의 확충 시에 기존 이용자들이 회사에 제공한 개인정보를 바탕으로 개발해야 할 서비스의 우선 순위를 보다 더 효율적으로 정하고 LIDOT은 이용자들이 필요로 할 컨텐츠를 합리적으로 선택하여 제공할 수 있습니다.

둘째, 수집하는 개인정보 항목과 수집 및 이용목적은 다음과 같습니다.
· 성명 , 아이디, 비밀번호 : 회원제 서비스 이용에 따른 본인 확인 절차에 이용
· 이메일주소, 전화번호 : 고지사항 전달, 불만처리 등을 위한 원활한 의사소통 경로의 확보, 새로운 서비스 및 신상품이나 이벤트 정보 등의 안내
· 은행계좌정보, 신용카드정보 : 서비스 및 부가 서비스 이용에 대한 요금 결제
· 주소, 전화번호 : 청구서, 물품배송시 정확한 배송지의 확보
· 기타 선택항목 : 개인맞춤 서비스를 제공하기 위한 자료
· IP Address : 불량회원의 부정 이용 방지와 비인가 사용 방지



3. 수집하는 개인정보 항목 및 수집방법

LIDOT은 이용자들이 회원서비스를 이용하기 위해 회원으로 가입하실 때 서비스 제공을 위한 필수적인 정보들을 온라인상에서 입력 받고 있습니다. 회원 가입 시에 받는 필수적인 정보는 이름, 이메일 주소 등입니다.
또한 양질의 서비스 제공을 위하여 이용자들이 선택적으로 입력할 수 있는 사항으로서 전화번호 등을 입력 받고 있습니다.

또한 쇼핑몰 내에서의 설문조사나 이벤트 행사 시 통계분석이나 경품제공 등을 위해 선별적으로 개인정보 입력을 요청할 수 있습니다.
그러나, 이용자의 기본적 인권 침해의 우려가 있는 민감한 개인정보(인종 및 민족, 사상 및 신조, 출신지 및 본적지, 정치적 성향 및 범죄기록, 건강상태 및 성생활 등)는 수집하지 않으며 부득이하게 수집해야 할 경우 이용자들의 사전동의를 반드시 구할 것입니다.
그리고, 어떤 경우에라도 입력하신 정보를 이용자들에게 사전에 밝힌 목적 이외에 다른 목적으로는 사용하지 않으며 외부로 유출하지 않습니다.



4. 수집하는 개인정보의 보유 및 이용기간

이용자가 쇼핑몰 회원으로서 회사에 제공하는 서비스를 이용하는 동안 LIDOT은 이용자들의 개인정보를 계속적으로 보유하며 서비스 제공 등을 위해 이용합니다.
다만, 아래의 "6. 이용자 자신의 개인정보 관리(열람,정정,삭제 등)에 관한 사항" 에서 설명한 절차와 방법에 따라 회원 본인이 직접 삭제하거나 수정한 정보, 가입해지를 요청한 경우에는 재생할 수 없는 방법에 의하여 디스크에서 완전히 삭제하며 추후 열람이나 이용이 불가능한 상태로 처리됩니다.

그리고 "3. 수집하는 개인정보 항목 및 수집방법"에서와 같이 일시적인 목적 (설문조사, 이벤트, 본인확인 등)으로 입력 받은 개인정보는 그 목적이 달성된 이후에는 동일한 방법으로 사후 재생이 불가능한 상태로 처리됩니다.

귀하의 개인정보는 다음과 같이 개인정보의 수집목적 또는 제공받은 목적이 달성되면 파기하는 것을 원칙으로 합니다. 그리고 상법, 전자상거래등에서의 소비자보호에 관한 법률 등 관계법령의 규정에 의하여 보존할 필요가 있는 경우LIDOT은 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다.
이 경우 LIDOT은 보관하는 정보를 그 보관의 목적으로만 이용하며 보존기간은 아래와 같습니다.

- 계약 또는 청약철회 등에 관한 기록 : 5년
- 대금결제 및 재화 등의 공급에 관한 기록 : 5년
- 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년

LIDOT은 귀중한 회원의 개인정보를 안전하게 처리하며, 유출의 방지를 위하여 다음과 같은 방법을 통하여 개인정보를 파기합니다.

- 종이에 출력된 개인정보는 분쇄기로 분쇄하거나 소각을 통하여 파기합니다.
- 전자적 파일 형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다



5. 수집한 개인정보의 공유 및 제공

LIDOT은 이용자들의 개인정보를 "2. 개인정보의 수집목적 및 이용목적"에서 고지한 범위 내에서 사용하며, 이용자의 사전 동의 없이는 동 범위를 초과하여 이용하거나 원칙적으로 이용자의 개인정보를 외부에 공개하지 않습니다. 다만, 아래의 경우에는 예외로 합니다.

- 이용자들이 사전에 공개에 동의한 경우
- 서비스 제공에 따른 요금정산을 위하여 필요한 경우
- 홈페이지에 게시한 서비스 이용 약관 및 기타 회원 서비스 등의 이용약관 또는 운영원칙을 위반한 경우
- 자사 서비스를 이용하여 타인에게 정신적, 물질적 피해를 줌으로써 그에 대한 법적인 조치를 취하기 위하여 개인정보를 공개해야 한다고 판단되는 충분한 근거가 있는 경우
- 기타 법에 의해 요구된다고 선의로 판단되는 경우 (ex. 관련법에 의거 적법한 절차에 의한 정부/수사기관의 요청이 있는 경우 등)
- 통계작성, 학술연구나 시장조사를 위하여 특정개인을 식별할 수 없는 형태로 광고주, 협력업체나 연구단체 등에 제공하는 경우
- 이용자의 서비스 이용에 따른 불만사항 및 문의사항(민원사항)의 처리를 위하여 파.항의 고객센터를 운영하는 전문업체에 해당 민원사항의 처리에 필요한 개인 정보를 제공하는 경우



6. 이용자 자신의 개인정보 관리(열람,정정,삭제 등)에 관한 사항

회원님이 원하실 경우 언제라도 당사에서 개인정보를 열람하실 수 있으며 보관된 필수 정보를 수정하실 수 있습니다.
또한 회원 가입 시 요구된 필수 정보 외의 추가 정보는 언제나 열람, 수정, 삭제할 수 있습니다. 회원님의 개인정보 변경 및 삭제와 회원탈퇴는 당사의 고객센터에서 로그인(Login) 후 이용하실 수 있습니다.



7. 쿠키(cookie)의 운영에 관한 사항

당사는 회원인증을 위하여 Cookie 방식을 이용하고 있습니다. 이는 로그아웃(Logout)시 자동으로 컴퓨터에 저장되지 않고 삭제되도록 되어 있으므로 공공장소나 타인이 사용할 수 있는 컴퓨터를 사용 하 실 경우에는 로그인(Login)후 서비스 이용이 끝나시면 반드시 로그아웃(Logout)해 주시기 바랍니다.

※ 쿠키 설정 거부 방법
예: 쿠키 설정을 거부하는 방법으로는 회원님이 사용하시는 웹 브라우저의 옵션을 선택함으로써 모든 쿠키를 허용하거나 쿠키를 저장할 때마다 확인을 거치거나, 모든 쿠키의 저장을 거부할 수 있습니다.

설정방법 예(크롬의 경우)
: 설정 > 개인정보 및 보안 > 쿠키 차단

단, 귀하께서 쿠키 설치를 거부하였을 경우 서비스 제공에 어려움이 있을 수 있습니다.



8. 비회원고객의 개인정보관리

- 당사는 비회원 고객 또한 물품 및 서비스 상품의 구매를 하실 수 있습니다.
- 당사는 비회원 주문의 경우 배송 및 대금 결제, 상품 배송에 반드시 필요한 개인정보만을 고객님께 요청하고 있습니다.
- 당사에서 비회원으로 구입을 하신 경우 비회원 고객께서 입력하신 지불인 정보 및 수령인 정보는 대금 결제 및 상품 배송에 관련한 용도 외에는 다른 어떠한 용도로도 사용되지 않습니다.



9. 개인정보의 위탁처리

- 당사는 서비스 향상을 위해서 귀하의 개인정보를 필요한 경우 동의 등 법률상의 요건을 구비하여 외부에 수집 · 취급 · 관리 등을 위탁하여 처리할 있으며, 제 3자에게 제공할 수 있습니다.
- 당사는 개인정보의 처리와 관련하여 아래와 같이 업무를 위탁하고 있으며, 관계 법령에 따라 위탁계약 시 개인정보가 안전하게 관리될 수 있도록 필요한 사항을 규정하고 있습니다.
- 또한 공유하는 정보는 당해 목적을 달성하기 위하여 필요한 최소한의 정보에 국한됩니다.

· 위탁 대상자 : CJ대한통운
· 위탁업무 내용 : 택배업무
· 위탁 대상자 : 이니시스
· 위탁업무 내용 : 정산업무


- 당사는 귀하에게 편리하고 혜택이 있는 다양한 서비스를 제공하기 위하여 다음의 업체와 제휴합니다. 제공되는 개인정보의 항목은 회원가입 시 당사에 제공한 개인정보 중 아래와 같이 제공됩니다.

· 제공대상 : [대상이름]
· 제공 개인정보 항목 : [제공항목]
· 정보 이용목적 : [제공목적]
· 정보 보유 및 이용기간 : [보유기간]

- 다만, 아래의 경우에는 예외로 합니다.

· 이용자들이 사전에 동의한 경우
· 법령의 규정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우

- 개인정보의 처리를 위탁하거나 제공하는 경우에는 수탁자, 수탁범위, 공유 정보의 범위 등에관한 사항을 서면, 전자우편, 전화 또는 홈페이지를 통해 미리 귀하에게 고지합니다.



10. 개인정보관련 의견수렴 및 불만처리에 관한 사항

- 당사는 개인정보보호와 관련하여 이용자 여러분들의 의견을 수렴하고 있으며 불만을 처리하기 위하여 모든 절차와 방법을 마련하고 있습니다.
- 이용자들은 하단에 명시한 "11. 개인정보 관리책임자 및 담당자의 소속-성명 및 연락처"항을 참고하여 전화나 메일을 통하여 불만사항을 신고할 수 있고, LIDOT은 이용자들의 신고사항에 대하여 신속하고도 충분한 답변을 해 드릴 것입니다.



11. 개인정보 관리책임자 및 담당자의 소속-성명 및 연락처

- 당사는 귀하가 좋은 정보를 안전하게 이용할 수 있도록 최선을 다하고 있습니다.
- 개인정보를 보호하는데 있어 귀하께 고지한 사항들에 반하는 사고가 발생할 경우 개인정보관리책임자가 책임을 집니다.

이용자 개인정보와 관련한 아이디(ID)의 비밀번호에 대한 보안유지책임은 해당 이용자 자신에게 있습니다.
LIDOT은 비밀번호에 대해 어떠한 방법으로도 이용자에게 직접적으로 질문하는 경우는 없으므로 타인에게 비밀번호가 유출되지 않도록 각별히 주의하시기 바랍니다.
특히 공공장소에서 온라인상에서 접속해 있을 경우에는 더욱 유의하셔야 합니다.
LIDOT은 개인정보에 대한 의견수렴 및 불만처리를 담당하는 개인정보 관리책임자 및 담당자를 지정하고 있고, 연락처는 아래와 같습니다.

이름 : 김신애
소속 : 리닷
E - M A I L : lodot.official@gmail.com
전 화 번 호 : 031-891-0610
법정 대리인 : 김신애

"만 14세 미만 아동의 경우 법정대리인이 아동의 개인정보를 조회하거나 수정할 권리, 수집 및 이용 동의를 철회할 권리를 가집니다."


12. 고지의 의무

현 개인정보취급방침의 내용은 정부의 정책 또는 보안기술의 변경에 따라 내용의 추가 삭제 및 수정이 있을 시에는 홈페이지의 '공지사항'을 통해 고지할 것입니다.
</pre>
                                </div>
                                <div class="d-flex align-items-center pb-3">
                                    <input type="checkbox" id="gain_ck" class="d-none ck_many" />
                                    <span class="mr-4">개인정보 수집 및 이용에 동의 하십니까?</span>
                                    <label for="gain_ck" class="mb-0"><img id="gainCk_img" class="ck_many chk_img" style="width:30px" src="/img/checks_off.png" /></label>
                                    <label for="gain_ck" class="label_w mb-0">동의함</label>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="mb-3 fs-15">[선택] 쇼핑정보 수신 동의</div>
                                <div class="shoppingOkWrap text-wrap mb-2 p-3" style="height:150px;">
                                    <pre style="white-space:pre-wrap">다양한 이벤트 및 할인 상품 정보등 스마트한 쇼핑팁을 문자로 받아보실 수 있으며, 할인쿠폰 및 혜택, 이벤트, 신상품 소식 등 쇼핑몰에서 제공하는 유익한 쇼핑정보를 SMS 또는 카카오톡으로 받아볼 수 있습니다.

단, 주문/거래 정보 및 주요 정책과 관련된 내용은 수신동의 여부와 관계없이 발송됩니다.

제공 동의를 하지 않으셔도 서비스 이용에는 문제가 없습니다.

선택 약관에 동의하지 않으셔도 회원가입은 가능하며, 회원가입 후 회원정보수정 페이지에서 언제든지 수신여부를 변경하실 수 있습니다.
                                    </pre>
                                </div>
                                <div class="d-flex align-items-center">
                                    <input type="checkbox" id="shop_ck" class="d-none ck_many" />
                                    <span class="mr-3">SMS,MMS 수신을 동의하십니까?</span>
                                    <label for="shop_ck" class="mb-0"><img id="shopCk_img" class="ck_many chk_img" style="width:30px" src="/img/checks_off.png" /></label>
                                    <label for="shop_ck" class="label_w mb-0">동의함</label>
                                </div>
                                <div class="d-flex align-items-center">
                                    <input type="checkbox" id="email_ck" class="d-none ck_many" />
                                    <span class="mr-3">이메일 수신을 동의하십니까?</span>
                                    <label for="email_ck" class="mb-0"><img id="emailCk_img" class="ck_many chk_img" style="width:30px" src="/img/checks_off.png" /></label>
                                    <label for="email_ck" class="label_w mb-0">동의함</label>
                                </div>
                            </div>
                            <!-- <span class="btn-secondary btn font-weight-normal" onclick="userInsert()">가입버튼 테스트</span> -->
                        </div>

                        <div class="row">
                            <!-- <div class="col-6 text-right">
                                <div class="mx-auto joinBtn btn btn-secondary" onclick="goLogin()">뒤로가기</div>
                            </div> -->

                            <div class="mx-auto">
                                <div onclick="alert('비밀번호를 확인해주세요')" class="mx-auto joinBtn btn btn-secondary">회원가입</div>
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

var gainCk = "";
var useCk = "";
var shopCk = "";
var emailCk = "";

var dupliCk = false;
var dupliCk2 = false;

$(document).ready(function () {
       $('.radioClass').click(function () {
         var radioVal = $('input[name="u_type"]:checked').val();
         if(radioVal == '사업자회원'){
             $('.workWrap').removeClass('d-none');
         }else{
             $('.workWrap').addClass('d-none');
             $('.workWrap_detail').addClass('d-none');
         }
       });
       $('.on_pw').hide();
       $('.off_pw').hide();
       $('.radioWork').click(function (){
           var radioVal = $('input[name="u_worker"]:checked').val();
           if(radioVal == '개인사업자'){
               $('.workWrap_detail').removeClass('d-none');
               $('.change_saup_text').html('업체명');
               $('.change_saup_text2').html('사업자번호')
           }else{
               // 법인사업자
               $('.workWrap_detail').removeClass('d-none');
               $('.change_saup_text').html('법인명');
               $('.change_saup_text2').html('법인번호')
           }
       })
       $('#all_ck').click(function(){
 		    var checked = $('#all_ck').is(':checked');

     		if(checked){
                $('#labelCk').attr('src', '/img/checks_on.png')
                $('.ck_many').attr('src', '/img/checks_on.png')
                $('.ck_many').prop('checked',true);

                gainCk = 'Y'
                useCk = 'Y'
                shopCk = 'Y'
                emailCk = 'Y'

            }else{
                $('#labelCk').attr('src', '/img/checks_off.png')
                $('.ck_many').attr('src', '/img/checks_off.png')
                $('.ck_many').prop('checked',false);

                gainCk = 'N'
                useCk = 'N'
                shopCk = 'N'
                emailCk = 'N'
            }

     	});

        $('#use_ck').click(function(){
           var checked = $('#use_ck').is(':checked');

           if(checked){
                 $('#useCk_img').attr('src', '/img/checks_on.png')

                 $('#use_ck').prop('checked',true);
                 useCk = 'Y'
             }else{
                 $('#useCk_img').attr('src', '/img/checks_off.png')

                 $('#use_ck').prop('checked',false);
                 useCk = 'N'
             }

       });

       $('#gain_ck').click(function(){
          var checked = $('#gain_ck').is(':checked');

          if(checked){
                $('#gainCk_img').attr('src', '/img/checks_on.png')

                $('#gain_ck').prop('checked',true);
                gainCk = 'Y'
            }else{
                $('#gainCk_img').attr('src', '/img/checks_off.png')

                $('#gain_ck').prop('checked',false);
                gainCk = 'N'
            }

      });

      $('#shop_ck').click(function(){
         var checked = $('#shop_ck').is(':checked');

         if(checked){
               $('#shopCk_img').attr('src', '/img/checks_on.png')

               $('#shop_ck').prop('checked',true);
               shopCk = 'Y'
           }else{
               $('#shopCk_img').attr('src', '/img/checks_off.png')

               $('#shop_ck').prop('checked',false);
               shopCk = 'N'
           }

     });

     $('#email_ck').click(function(){
        var checked = $('#email_ck').is(':checked');

        if(checked){
              $('#emailCk_img').attr('src', '/img/checks_on.png')

              $('#email_ck').prop('checked',true);
              emailCk = 'Y'
          }else{
              $('#emailCk_img').attr('src', '/img/checks_off.png')

              $('#email_ck').prop('checked',false);
              emailCk = 'N'
          }

    });
});

function goLogin(){
    location.href="login.php";
}

$('.u_pw_ck').keyup(function(){
    var u_pw = $('#u_pw').val();
    var u_pwCk = $('#u_pw_ck').val();
    if(u_pw){
        if(u_pw == u_pwCk) {
            $('.on_pw').show();
            $('.off_pw').hide();
            $('.joinBtn').attr('onclick', 'userInsert();')
        }else{
            $('.off_pw').show();
            $('.on_pw').hide();
        }
    }else{
        $('.off_pw').show();
        $('.on_pw').hide();
        $('.joinBtn').attr('onclick', 'alert("비밀번호를 확인해주세요.");')
    }

})

$('#u_addr').click(function(){
    findAddr();
});

function findAddr(){
    new daum.Postcode({
      oncomplete: function oncomplete(data) {
        // console.log('zonecode is: ', data.zonecode);
        var strAddr = "(" + data.zonecode + ") " + data.address;
        $('#u_addr').attr('value', strAddr);
      }
    }).open();
}


function userInsert(){

    var obj = new Object();
    obj.u_id = $('#u_id').val();
    obj.u_pw = $('#u_pw').val();
    obj.u_name = $('#u_name').val();
    obj.u_addr = $('#u_addr').val();
    obj.u_addr_detail = $('#u_addr_detail').val();
    obj.u_tel = $('#u_tel_1').val()+$('#u_tel').val();
    obj.u_phone = $('#u_phone_1').val()+$('#u_phone').val();
    obj.u_email = $('#u_email').val();

    obj.u_gubun = $('input[name="u_worker"]:checked').val();

    obj.u_com_num = $('#u_com_num').val();

    obj.u_company = $('#u_company').val();

    obj.u_com_img = u_com_img;

    obj.u_type = $('input[name="u_type"]:checked').val();

    obj.u_sms_ck = shopCk;

    obj.u_email_ck = emailCk;
    obj.u_area = $('#u_area').val();
    obj.u_birth = $('#u_date').val();
    obj.u_birth_type = $('input[name="u_date"]:checked').val();
    obj.u_date = currentDate();

    if($('#u_id').val().length < 5 || $('#u_id').val().length > 16){
        alert("아이디 글자수를 확인해주세요.")
        return
    }

    if(!dupliCk){
        alert("아이디 중복확인을 해주세요.")
        return
    }

    if(!email_check(obj.u_email)){
        alert("이메일을 확인해주세요.")
        return
    }

    duplickCheck2();
    if(!dupliCk2){
        alert("이미 가입한 이력이 존재합니다.")
        return
    }else{
        if(gainCk == 'Y' && useCk == 'Y' && obj.u_id && obj.u_name && obj.u_phone && obj.u_email && obj.u_type && obj.u_addr && obj.u_addr_detail){
            $.ajax({
                type: "POST",
                url: SERVER_AP + '/user/insert',
                cache: false,
                async: false,
                data:{
                    user_info :obj,
                },
                success: function (data) {
                    //goKaKao(obj.u_id, obj.u_name,obj.u_phone);
                    alert(data.message)

                    var add_obj = new Object();
                    add_obj.dl_useq = data.insertId;
                    add_obj.dl_title = obj.u_addr
                    add_obj.dl_phone = obj.u_phone;
                    add_obj.dl_person = obj.u_name
                    add_obj.dl_address = obj.u_addr
                    add_obj.dl_address_detail = obj.u_addr_detail
                    add_obj.dl_check = 'Y'
                    add_obj.dl_request = '문앞에 놓아주세요.'
                    $.ajax({
                        url: SERVER_AP+"/common/insert",
                        type: "post",
                        cache: false,
                        data:{
                            table: 'delivery_location',
                            obj:add_obj,
                        },
                        success: function(data){
                            location.href='/login.php'
                        },
                        error: function (request, status, error){
                            console.log(error);
                        }
                    });

                }, error:function(request,status,error){
                    console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
                },
            });
        }else{
            alert("필수값을 확인해주세요.")
        }
    }



}

// 현재 날짜 리턴 format yyyy-mm-dd
function currentDate(){
    let date = new Date();
    let year = date.getFullYear();

    let month = (1 + date.getMonth());
        month = month >= 10 ? month : '0' + month;

    let day = date.getDate();
        day = day >= 10 ? day : '0' + day;

    return year + '-' + month + '-' + day;
}

function duplickCheck2(){

    $.ajax({
        type: "POST",
        url: SERVER_AP + '/user/dupli2',
        cache: false,
        async: false,
        data:{
            u_name :$('#u_name').val(),
            u_phone :$('#u_phone_1').val()+$('#u_phone').val()
        },
        success: function (data) {
            if(data.type == 'success'){
                dupliCk2 = true
            }else{
                dupliCk2 = false
            }


        }, error:function(request,status,error){
            console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
        },
    });

}


function dupliCkClick(){
    if(!$('#u_id').val()){
        alert("아이디를 입력해주세요!")
        return
    }
    if($('#u_id').val().length < 5 || $('#u_id').val().length > 16){
          alert("아이디 글자수를 확인해주세요.")
          return
      }
    $.ajax({
        type: "POST",
        url: SERVER_AP + '/user/dupli',
        cache: false,
        async: false,
        data:{
            u_id :$('#u_id').val(),
        },
        success: function (data) {
            if(data.type == 'success'){
                dupliCk = true
            }else{
                dupliCk = false
            }
            alert(data.message)

        }, error:function(request,status,error){
            console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
        },
    });
}

let tmpn = 0;
function fn_press_han(obj)
{
    //좌우 방향키, 백스페이스, 딜리트, 탭키에 대한 예외
    if(event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 37 || event.keyCode == 39
    || event.keyCode == 46 ) return;
    //obj.value = obj.value.replace(/[\a-zㄱ-ㅎㅏ-ㅣ가-힣]/g, '');
    obj.value = obj.value.replace(/[\ㄱ-ㅎㅏ-ㅣ가-힣]/g, '');

    let arr = [...obj.value]
    let arr2 = [...obj.value]
    Array.isArray(arr)
    Array.isArray(arr2)
    for(let i=0; i<arr.length; i++){
        if(arr[i] == arr2[arr2.length-1]){
            tmpn ++;
        }
    }
    if(tmpn > 2){
        alert("같은 문자는 3개이상 사용 불가능합니다")
        obj.value = ''
        tmpn = 0;
        return
    }
    tmpn = 0;
}

function maxLengthCheck(object){
    if (object.value.length > object.maxLength){
        object.value = object.value.slice(0, object.maxLength);
    }    
}



function goKaKao(id, name,phone){
    var ENDPOINT = "/kakao/allimtalk1";
    var to =phone;
    var id = id;
    var name = name;
    console.log('id', id);
    console.log('to', to);
    console.log('name', name);


    $.ajax({
        type: "POST",
        cache:false,
        url: SERVER_AP + '/kakao/allimtalk1',
        data:{
            to: to,
            name: name,
            id: id
        },
        success: function (data) {
            console.log(data);
        }, error:function(request,status,error){
            console.log("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
        },
    });
}




var u_com_img;

//이미지등록
$('#u_com_img').change(function(){
    var dir = currentDate() + 'product_review'; //파일경로
    makeFormData_com_img(this, dir);
});

function makeFormData_com_img(input, dir){
    var file = input.files;

    $.each(file, function(i, v){
        var formData = new FormData();
        formData.append('dir', dir);
        formData.append('img', v);

        var c_img = fileUpload(formData, dir);

        u_com_img = c_img
        $("#u_com_img_div").html('')
        var str = '<div class="position-relative d-inline-block mr-2 review_img" style="background:url(\''+c_img+'\')" data-img="'+c_img+'"></div>';
        $("#u_com_img_div").append(str);
    });
}
</script>
