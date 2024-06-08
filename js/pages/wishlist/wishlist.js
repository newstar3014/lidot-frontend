$(document).ready(function () {
  console.log("Wishlist Session Start");

  // if ($(window).width() > 768) {
  //   $(".wish_div_m").remove();
  // } else {
  //   $(".wish_div_pc").remove();
  // }

  LoadWishList();
});

function LoadWishList() {
  $.ajax({
    url: SERVER_AP + "/wishlist/list",
    type: "post",
    cache: false,
    data: {
      u_seq: user_info.u_seq,
    },
    success: function (data) {
      $("#w_t_body").html("");
      if (data.length == 0) {
        var nstr = `<tr>\
                            <td colspan='6' class="py-5">등록된 관심상품이 없습니다</td>\
                        </tr>`;
        $("#w_t_body").append(nstr);

        var mnstr = `
        <div colspan='6' class="py-5 text-center">등록된 관심상품이 없습니다</div>`;

        $(".wish_div_m_body").append(mnstr);
        $('.no-data').remove();
      }
      $.each(data, function (i, v) {
        var img = JSON.parse(v.p_image);
        if (img) {
          img = img[0];
        } else {
          img = "";
        }
        var str =
          `<tr class="wish-tr" data-target="` +
          v.w_seq +
          `">\
                            <td>\
                                <input data-p_seq="${v.p_seq}" type="checkbox" name="" value="` +
          v.w_seq +
          `" class="tr-ck">\
                            </td>\
                            <td>\
                                <img src="` +
          img +
          `" alt="삭제된 상품입니다." class="wish_img">\
                            </td>\
                            <td>\
                                <div class="dots">\
                                    <a href="/product_detail.php?p_seq=` +
          v.p_seq +
          `">` +
          v.p_name +
          `</a>\
                                </div>\
                            </td>\
                            <td>` +
          comma(v.p_price) +
          `원</td>\
                            </td>\
                            <td style="width:140px;" class="position-relative">
                                <div class="d-flex" style="flex-wrap:wrap;gqp:5px;">
                                <span class="d-block normal_btn mx-auto mb-1" style="width:100px;" onclick="goCart(${v.p_seq})">장바구니담기</span>
                                <span class="close_btn pointer"  onclick="wishDel(${v.w_seq});">
                                  <i class="fa-solid fa-xmark"></i>
                                </span>
                                </div>
                            </td>
                        </tr>`;
        $("#w_t_body").append(str);

        var mstr =
          `<div class="my-3 p-2 py-3 border class="wish-tr" data-target="` +
          v.w_seq +
          `"">
                                    <div class="mb-3 pb-2 border-bottom d-flex align-items-center justify-content-between">
                                        <input type="checkbox" name="" value="` +
          v.w_seq +
          `" class="tr-ck">\
                                        <i class="icofont-close" onclick="wishDel(` +
          v.w_seq +
          `)"></i>
                                    </div>
                                    <div class="d-flex">
                                        <div class="mr-3">
                                            <img src="` +
          img +
          `" alt="Product" class="wish_img">\
                                        </div>
                                        <div class="">
                                            <p class="font-weight-bold mb-1"><a href="/product_detail.php?p_seq=` +
          v.p_seq +
          `">` +
          v.p_name +
          `</a>\</p>
                                            <p>` +
          comma(v.p_price) +
          `원</p>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="btn btn-secondary d-block" onclick="goCart(${v.p_seq})">장바구니 추가</div>
                                    </div>
                                </div>`;
        $(".wish_div_m_body").append(mstr);
      });
    },
    error: function (request, status, error) {
      console.log(error);
    },
  });
}

$("#all-ck").click(function () {
  $(".tr-ck").prop("checked", $(this).prop("checked"));
});

$("#all-ck-m").click(function () {
  $(".tr-ck").prop("checked", $(this).prop("checked"));
});

// 전체삭제
$(".all_delete_btn").click(function () {
  if (confirm("전체 상품을 삭제하시겠습니까?")) {
    $.each($(".wish-tr"), function (i, v) {
      $.ajax({
        url: SERVER_AP + "/common/delete",
        type: "post",
        cache: false,
        data: {
          table: "wishlist",
          field: "w_seq",
          seq: $(v).attr("data-target"),
        },
        success: function (data) {
          location.reload();
        },
        error: function (request, status, error) {
          console.log(error);
        },
      });
    });
  }
});

// 해당 리스트삭제
function wishDel(w_seq) {
  if (confirm("해당 상품을 삭제하시겠습니까?")) {
    $.ajax({
      url: SERVER_AP + "/common/delete",
      type: "post",
      cache: false,
      data: {
        table: "wishlist",
        field: "w_seq",
        seq: w_seq,
      },
      success: function (data) {
        location.reload();
      },
      error: function (request, status, error) {
        console.log(error);
      },
    });
  }
}

function wishAllDel() {
  if (confirm("관심상품을 비우시겠습니까?")) {
    $(".tr-ck").each(function (i, v) {
      $.ajax({
        url: SERVER_AP + "/common/delete",
        type: "post",
        cache: false,
        data: {
          table: "wishlist",
          field: "w_seq",
          seq: $(v).val(),
        },
        success: function (data) {},
        error: function (request, status, error) {
          console.log(error);
        },
      });
    });
    location.reload();
  }
}

function chooseDel() {
  if ($('input[class="tr-ck"]:checked').length == 0) {
    alert("상품을 한개이상 선택해주세요.");
  } else {
    if (confirm("선택하신 상품을 삭제하시겠습니까?")) {
      $.each($('input[class="tr-ck"]:checked'), function (i, v) {
        $.ajax({
          url: SERVER_AP + "/wishlist/delete",
          type: "post",
          cache: false,
          async: false,
          data: {
            seq: $(v).val(),
          },
          success: function (data) {},
          error: function (request, status, error) {
            console.log(error);
          },
        });
      });
      location.reload();
    }
  }
}

var po_seq_arr = [];
function goCart(p_seq) {
  if (confirm("해당 상품을 장바구니에 담으시겠습니까?")) {
    var obj = new Object();
    obj.p_seq = p_seq;
    obj.u_seq = user_info.u_seq;
    obj.c_cnt = 1;
    obj.c_date = currentDate();

    let opYn = proInfo(p_seq).p_option;
    if (opYn == "Y") {
      obj.po_seq = proOptionInfo(p_seq);
    }

    $.ajax({
      url: SERVER_AP + "/cart/dupli",
      type: "post",
      cache: false,
      data: {
        p_seq: p_seq,
        u_seq: user_info.u_seq,
        po_seq_arr: JSON.stringify(po_seq_arr),
      },
      success: function (data) {
        if (data.c_cnt == 0) {
          $.ajax({
            url: SERVER_AP + "/admin/common/insert",
            type: "post",
            cache: false,
            data: {
              table: "cart",
              obj: obj,
            },
            success: function (data) {
              location.href = "/cart.php";
            },
            error: function (request, status, error) {
              console.log(error);
            },
          });
        } else {
          alert("이미 장바구니에 등록된 상품이 있습니다.");
        }
      },
      error: function (request, status, error) {
        console.log(error);
      },
    });
  }
}

function setCart() {
  if ($(".tr-ck:checked").length == 0) {
    alert("상품을 한개이상 선택해주세요.");
    return false;
  }
  if (confirm("해당 상품을 장바구니에 담으시겠습니까?")) {
    $(".tr-ck:checked").each(function (i, v) {
      var obj = new Object();
      obj.p_seq = $(v).attr("data-p_seq");
      obj.u_seq = user_info.u_seq;
      obj.c_cnt = 1;
      obj.c_date = currentDate();

      let opYn = proInfo($(v).attr("data-p_seq")).p_option;
      if (opYn == "Y") {
        obj.po_seq = proOptionInfo($(v).attr("data-p_seq"));
      }

      $.ajax({
        url: SERVER_AP + "/cart/dupli",
        type: "post",
        cache: false,
        data: {
          p_seq: $(v).attr("data-p_seq"),
          u_seq: user_info.u_seq,
          po_seq_arr: JSON.stringify(po_seq_arr),
        },
        success: function (data) {
          if (data.c_cnt == 0) {
            $.ajax({
              url: SERVER_AP + "/admin/common/insert",
              type: "post",
              cache: false,
              data: {
                table: "cart",
                obj: obj,
              },
              success: function (data) {},
              error: function (request, status, error) {
                console.log(error);
              },
            });
          }
        },
        error: function (request, status, error) {
          console.log(error);
        },
      });
    });
  }

  location.href = "/cart.php";
}

function proInfo(p_seq) {
  var info = [];
  var obj = new Object();
  obj.p_seq = p_seq;
  $.ajax({
    url: SERVER_AP + "/common/condition",
    type: "post",
    cache: false,
    async: false,
    data: {
      table: "product",
      common: obj,
    },
    success: function (data) {
      info = {
        stock: data[0].p_stock,
        name: data[0].p_name,
        img: data[0].p_image,
        price: data[0].p_price,
        dt_seq: data[0].dt_seq,
        p_purchase: data[0].p_purchase,
        p_option: data[0].p_option,
      };
    },
    error: function (request, status, error) {
      console.log(error);
    },
  });
  return info;
}

function proOptionInfo(p_seq) {
  var info = [];
  var obj = new Object();
  obj.p_seq = p_seq;
  $.ajax({
    url: SERVER_AP + "/common/condition",
    type: "post",
    cache: false,
    async: false,
    data: {
      table: "product_option",
      common: obj,
    },
    success: function (data) {
      info = data[0].po_seq;
    },
    error: function (request, status, error) {
      console.log(error);
    },
  });
  return info;
}
