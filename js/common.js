const SERVER_AP = "https://lidot.co.kr:3000";
const DEFAULT_PPP = 10;

let valueCheck = {
  CJ대한통운: "https://www.cjlogistics.com/ko/tool/parcel/tracking?gnbInvcNo=",
  로젠택배: "https://www.ilogen.com/web/personal/trace/",
  옐로우캡: " http://www.bookimpact.com/delivery/?mnu=1&num=6&number=",
  우체국택배:
    "https://service.epost.go.kr/trace.RetrieveDomRigiTraceList.comm?sid1=",
  한진택배:
    "https://www.hanjin.co.kr/kor/CMS/DeliveryMgr/WaybillResult.do?mCode=MN038&schLang=KR&wblnumText2=",
  롯데택배:
    "https://www.lotteglogis.com/home/reservation/tracking/linkView?InvNo=",
  KGB택배: "http://www.kgbls.co.kr//sub5/trace.asp?f_slipno=",
  대신택배:
    "http://home.daesinlogistics.co.kr/daesin/jsp/d_freight_chase/d_general_process2.jsp?billno1=",
  일양로지스:
    "http://www.ilyanglogis.com/functionality/card_form_waybill.asp?hawb_no=",
  경동택배: "http://kdexp.com/basicNewDelivery.kd?barcode==",
  천일택배: "http://www.chunil.co.kr/HTrace/HTrace.jsp?transNo=",
  합동택배: "https://hdexp.co.kr/basic_delivery.hd?barcode=",
  CVSnet편의점택배:
    "http://www.doortodoor.co.kr/jsp/cmn/TrackingCVS.jsp?pTdNo=",
  건영택배: "https://www.kunyoung.com/goods/goods_01.php?mulno=",
  EMS: "https://service.epost.go.kr/trace.RetrieveEmsRigiTraceList.comm?POST_CODE=",
  DHL: "https://www.dhl.com/kr-ko/home/tracking.html?tracking-id=",
  FedEx: "https://www.fedex.com/fedextrack/?trknbr=",
  // 'TNT Express': 'string E',
  // '한의사랑택배': 'string A',
  // 'GSMNtoN(인로스)': 'string B',
  // '에어보이익스프레스': 'string C',
  // 'DHL Global Mail': 'string D',
  // 'i-Paracel': 'string E',
  // '범한판토스': 'string B',
  // '굿투럭': 'string C',
  // '기타발송': 'string D',
};

function checkDelivery(o_num, value) {
  const apiKey = "6gLZu0r4nyCAi6wmGsZVrA";
  const companyCode = value; // 셀렉트 박스에서 선택된 택배사 코드
  let data = "";
  $.ajax({
    url: `https://info.sweettracker.co.kr/api/v1/trackingInfo?t_key=${apiKey}&t_code=${companyCode}&t_invoice=${o_num}`,
    method: "GET",
    dataType: "json",
    async: false,
    success: function (response) {
      // console.log(response);
      // 응답 결과를 처리하는 코드 작성
      //   if (response.code == "104") {
      //     alert("유효하지 않은 송장번호입니다.");
      //   }
      data = response;
    },
    error: function (jqXHR, textStatus, errorThrown) {
      console.log(textStatus, errorThrown);
      // 에러 처리 코드 작성
    },
  });
  return data;
}
function clickDelivery(o_num, value) {
  const companyCode = value; // 셀렉트 박스에서 선택된 택배사 코드

  //   o_num = "654804479050";
  $("#t_code").val(companyCode);
  $("#t_invoice").val(o_num);
  console.log("tcode", $("#t_code").val());
  console.log("t_invoice", $("#t_invoice").val());
  // document.getElementById("actionSweet").submit();
  openPopDelivery();
}

// 현재 날짜 리턴 format yyyy-mm-dd
function currentDate() {
  var date = new Date();
  var year = date.getFullYear().toString();
  var month = date.getMonth() + 1;
  month = month < 10 ? "0" + month.toString() : month.toString();
  var day = date.getDate();
  day = day < 10 ? "0" + day.toString() : day.toString();
  var hour = date.getHours();
  hour = hour < 10 ? "0" + hour.toString() : hour.toString();
  var minites = date.getMinutes();
  minites = minites < 10 ? "0" + minites.toString() : minites.toString();
  var seconds = date.getSeconds();
  seconds = seconds < 10 ? "0" + seconds.toString() : seconds.toString();
  return (
    year + "-" + month + "-" + day + " " + hour + ":" + minites + ":" + seconds
  );
}
function formatDate(dateString) {
  const date = new Date(dateString);
  const year = date.getFullYear();
  const month = String(date.getMonth() + 1).padStart(2, "0");
  const day = String(date.getDate()).padStart(2, "0");

  return `${year}-${month}-${day}`;
}

function drawPaging(totalPage, _maxPerPage) {
  var maxPerPage;
  if (_maxPerPage) {
    maxPerPage = _maxPerPage;
  } else {
    maxPerPage = 10;
  }

  $("#paged-wrap").removeClass("d-none");
  var pagedStr1 =
    '<li class="page-item">\
        <a class="page-link text-dark btn btn-sm btn-arrow" href="javascript:void(0);" aria-label="Previous" onclick="goPage(1);">\
            <span aria-hidden="true"><i class="fas fa-angle-double-left"></i></span>\
        </a>\
    </li><li class="page-item">\
        <a class="page-link text-dark btn btn-sm btn-arrow" href="javascript:void(0);" aria-label="Previous" onclick="goPage(\'prev\');">\
            <span aria-hidden="true"><i class="fas fa-angle-left"></i></span>\
        </a>\
    </li>';
  var pagedStr3 =
    '<li class="page-item">\
        <a class="page-link text-dark btn btn-sm btn-arrow" href="javascript:void(0);" aria-label="Next" onclick="goPage(\'next\');">\
            <span aria-hidden="true"><i class="fas fa-angle-right"></i></span>\
        </a>\
    </li><li class="page-item">\
        <a class="page-link text-dark btn btn-sm btn-arrow" href="javascript:void(0);" aria-label="Next" onclick="goPage(' +
    totalPage +
    ');">\
            <span aria-hidden="true"><i class="fas fa-angle-double-right"></i></span>\
        </a>\
    </li>';

  var pagedStr2 = "";
  var count = 0;

  var start_paged;
  if (page <= maxPerPage) {
    start_paged = 1;
  } else {
    start_paged = page;
    var paged_minus = (page % maxPerPage) - 1;

    if (paged_minus < 0) {
      start_paged = page - (maxPerPage - 1);
    } else {
      start_paged -= paged_minus;
    }
  }
  var end_page = start_paged + (maxPerPage - 1);

  for (var i = start_paged; i <= end_page; i++) {
    count++;
    if (i <= totalPage) {
      if (count <= 10) {
        var activeStr = "";
        if (i == page) {
          activeStr = " active";
        }
        pagedStr2 +=
          '<li class="page-item' +
          activeStr +
          '"><a class="page-link text-dark btn btn-sm" href="javascript:void(0);" onclick="goPage(' +
          i +
          ');">' +
          i +
          "</a></li>";
      }
    }
  }

  if (page == 1) {
    pagedStr1 = "";
  }
  if (page == totalPage) {
    pagedStr3 = "";
  }
  $("#paged-content").html(pagedStr1 + pagedStr2 + pagedStr3);
}

//파일 업로드
function fileUpload(formData) {
  console.log("formData", formData);
  var url;
  $.ajax({
    type: "POST",
    url: SERVER_AP + "/admin/common/image",
    data: formData,
    dataType: "json",
    cache: false,
    async: false,
    contentType: false,
    processData: false,
    timeout: 600000,
    success: function (data) {
      // var path = data.path;
      // path = path.replace('/root/codeb/public', '');
      // url = "https://lidot.co.kr:3000"+path;
      // console.log("data", data);

      url = data.path;
    },
    error: function (request, status, error) {
      console.log("error : ", error);
    },
  });
  return url;
}

//섬머노트 파일 업로드
function fileUploadSummernote(file, el) {
  var form_data = new FormData();
  form_data.append("img", file);
  $.ajax({
    type: "POST",
    url: SERVER_AP + "/admin/common/image",
    data: form_data,
    dataType: "json",
    cache: false,
    async: false,
    contentType: false,
    enctype: "multipart/form-data",
    processData: false,
    timeout: 600000,
    success: function (data) {
      // var path = data.path;
      // path = path.replace('/root/codeb/public', '');
      // url = "https://lidot.co.kr:3000"+path;
      let url = data.path;
      $(el).summernote("editor.insertImage", url);
    },
    error: function (request, status, error) {
      console.log("error : ", error);
    },
  });
}

function comma(str) {
  str = String(str);
  return str.replace(/(\d)(?=(?:\d{3})+(?!\d))/g, "$1,");
}

function hyphen(str) {
  str = String(str);
  return str.replace(
    /(^02.{0}|^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/,
    "$1-$2-$3"
  );
}

//배송비
function LoadDel(dt_seq) {
  var deltemprice;

  var obj = new Object();
  obj.dt_seq = dt_seq;
  $.ajax({
    url: SERVER_AP + "/admin/common/condition",
    type: "post",
    cache: false,
    async: false,
    data: {
      table: "delivery_template",
      common: obj,
    },
    success: function (data) {
      if (data.length != 0) {
        var v = data[0];
        if (v.dt_type == "유료") {
          deltemprice =
            "<span data-del='" +
            v.dt_type_text +
            "' data-dt_calc='" +
            v.dt_calc +
            "' id='delivery_price_span'>" +
            comma(v.dt_type_text) +
            "원</span>";
        } else if (v.dt_type == "무료") {
          deltemprice =
            "<span data-del='0' data-dt_calc='" +
            v.dt_calc +
            "' id='delivery_price_span'>무료</span>";
        } else if (v.dt_type == "조건부배송비") {
          deltemprice =
            '<span data-type="' +
            v.dt_type_text +
            '" data-condition="' +
            v.dt_type_first +
            '" data-del="' +
            v.dt_type_second +
            '" data-dt_calc="' +
            v.dt_calc +
            '" id="delivery_price_span">' +
            comma(v.dt_type_first) +
            v.dt_type_text +
            " " +
            comma(v.dt_type_second) +
            "원</span>";
        }
      }
    },
    error: function (request, status, error) {
      console.log(error);
    },
  });

  return deltemprice;
}

function Loading() {
  // var before_width = 0;
  // var before_height = 0;
  // var before_left = 0;
  // var before_top = 0;
  // before_width = 100;
  // before_height = 100;
  // before_top = ($(window).height() - before_height) / 2 + $(window).scrollTop();
  // before_left = ($(window).width() - before_width) / 2 + $(window).scrollLeft();
  // if ($("#div_ajax_load_image").length != 0) {
  //   // $("#div_ajax_load_image").css({
  //   //        "top": before_top+"px",
  //   //        "left": before_left+"px"
  //   // });
  //   $("#div_ajax_load_image").show();
  // } else {
  //   // $('body').append('<div id="div_ajax_load_image" style="border-radius: 15px; position:absolute; top:' + before_top + 'px; left:' + before_left + 'px; width:' + before_width + 'px; height:' + before_height + 'px; z-index:9999; background:#fff; filter:alpha(opacity=50); opacity:alpha*0.5; margin:auto; padding:0;"><img src="/img/loadings.gif" style="width:100px; height:100px; border-radius: 10px;"></div>');
  //   $("body").append(
  //     '<div id="div_ajax_load_image" style="border-radius: 15px; position:absolute; top:50%; left:50%; width:100px; height:100px; z-index:9999; background:#fff; opacity:0.5; margin:auto; padding:0; transform:translate(-50%,-50%);"><img src="/img/loadings.gif" style="width:100px; height:100px; border-radius: 10px;"></div>'
  //   );
  // }
}

function Loading2() {
  var before_width = 0;
  var before_height = 0;
  var before_left = 0;
  var before_top = 0;

  before_width = 100;
  before_height = 100;

  before_top = ($(window).height() - before_height) / 2 + $(window).scrollTop();
  before_left = ($(window).width() - before_width) / 2 + $(window).scrollLeft();

  if ($("#div_ajax_load_image").length != 0) {
    // $("#div_ajax_load_image").css({
    //        "top": before_top+"px",
    //        "left": before_left+"px"
    // });
    $("#div_ajax_load_image").show();
  } else {
    // $('body').append('<div id="div_ajax_load_image" style="border-radius: 15px; position:absolute; top:' + before_top + 'px; left:' + before_left + 'px; width:' + before_width + 'px; height:' + before_height + 'px; z-index:9999; background:#fff; filter:alpha(opacity=50); opacity:alpha*0.5; margin:auto; padding:0;"><img src="/img/loadings.gif" style="width:100px; height:100px; border-radius: 10px;"></div>');
    $("body").append(
      '<div id="div_ajax_load_image" style="border-radius: 15px; position:absolute; top:50%; left:50%; width:100px; height:100px; z-index:9999; background:#fff; opacity:0.5; margin:auto; padding:0; transform:translate(-50%,-50%);"><img src="/img/loadings.gif" style="width:100px; height:100px; border-radius: 10px;"></div>'
    );
  }
}

function userNumberUpdate(u_seq, field) {
  $.ajax({
    url: SERVER_AP + "/admin/common/user_num_update",
    type: "post",
    cache: false,
    async: false,
    data: {
      u_seq: u_seq,
      field: field,
    },
    success: function (data) {},
    error: function (xhr, textStatus, errorThrown) {
      console.log(xhr, textStatus, errorThrown);
    },
  });
}
// 입력시 하이픈 찍어주기 (ex 핸드폰,fax)
function phoneHyphen(p) {
  p.replace(/[^0-9]/g, "")
    .replace(
      /(^02|^0505|^1[0-9]{3}|^0[0-9]{2})([0-9]+)?([0-9]{4})$/,
      "$1-$2-$3"
    )
    .replace("--", "-");
  return p;
}

function email_check(email) {
  var regex =
    /([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
  return email != "" && email != "undefined" && regex.test(email);
}

function comnumCk(e, len) {
  if ($(e).val().length > len) {
    $(e).val($(e).val().substr(0, len));
  }
}

function removeORD(inputString) {
  if (inputString.startsWith("ORD")) {
    return inputString.substring(3);
  }
  return inputString;
}
