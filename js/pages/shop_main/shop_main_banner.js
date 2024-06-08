$(function () {
  loadLastBanner();
  if ($(window).width() < 780) {
    MainSlideMLoadShop();
    MainSlideMLoadShop2();
    MainSlideMLoadShop3();
  } else {
    MainSlideLoadShop();
    MainSlideLoadShop2();
    MainSlideLoadShop3();
  }
  //MainMiddleSlide()
});

function MainSlideLoadShop() {
  $.ajax({
    url: SERVER_AP + "/main/mainbanner-slide",
    type: "post",
    cache: false,
    data: {},
    success: function (data) {
      console.log("data", data);
      $.each(data, function (i, v) {
        var str = `<div class="" id="banner-pc-${v.b_seq}">
                                <div class="main-slide-img bgsetting w-100" style="background-image: url(${v.b_img});"></div>
                            </div>`;
        $("#main-top-slide").append(str);

        if (v.b_link) {
          $("#banner-pc-" + v.b_seq).attr(
            "onclick",
            `bannerLink(\'${v.b_link}\')`
          );
          $("#banner-pc-" + v.b_seq).addClass("pointer");
        } else if (v.b_shop_img) {
          $("#banner-pc-" + v.b_seq).attr(
            "onclick",
            `location.href='/bannerpage.php?b_seq=${v.b_seq}'`
          );
          $("#banner-pc-" + v.b_seq).addClass("pointer");
        }
      });
      if (data.length != 1) {
        $("#main-top-slide").slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 5000,
          draggable: false,
          dots: true,
          prevArrow: $(".main-slide-prev"),
          nextArrow: $(".main-slide-next"),
        });
      }
    },
    error: function (request, status, error) {
      console.log(error);
    },
  });
}

function bannerLink(b_link) {
  location.href = b_link;
}

function MainSlideMLoadShop() {
  $.ajax({
    url: SERVER_AP + "/main/mainbanner-slide-m",
    type: "post",
    cache: false,
    data: {},
    success: function (data) {
      $.each(data, function (i, v) {
        var str = `<div class=""id="banner-m-${v.b_seq}">
                                <div class="main-slide-img bgsetting w-100" style="background-image: url(${v.b_img});"></div>
                            </div>`;
        $("#main-top-slide").append(str);

        if (v.b_link) {
          $("#banner-m-" + v.b_seq).attr(
            "onclick",
            `bannerLink(\'${v.b_link}\')`
          );
          $("#banner-m-" + v.b_seq).addClass("pointer");
        }
      });

      $("#main-top-slide").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        draggable: false,
        arrows: false,
      });

      $(".main-slide-prev, .main-slide-next").remove();
    },
    error: function (request, status, error) {
      console.log(error);
    },
  });
}

function MainMiddleSlide() {
  $.ajax({
    url: SERVER_AP + "/main/mainbanner-middle",
    type: "post",
    cache: false,
    data: {},
    success: function (data) {
      $.each(data, function (i, v) {
        var strWrap = "";
        var strWrap2 = "";
        if (i % 2 == 0) {
          strWrap = `<div class="col-12 col-md-6 pr-3 pr-md-0 mt-4">
                                    <div class="single_catagory h-100 mb-30 bgsetting" style="background-image: url(${v.b_img});">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 pl-3 pl-md-0">
                                                <div class="single_catagory mb-30">
                                                    <img src="img/product-img/cata-2.jpg" alt="">
                                                    <div class="single_cata_desc text-center bg-white align-items-center justify-content-center">
                                                        <h5 class="index_sector1_sub_title">#${v.b_title}</h5>
                                                        <p class="index_sector1_text">${v.b_text}</p>
                                                        <a href="${v.b_link}" class="btn btn-outline-dark border-dark index_sector1_btn font-weight-normal">MORE VIEW</a>
                                                    </div>
                                                </div>
                                            </div>`;
        } else {
          strWrap2 = `<div class="col-12 col-md-6 pl-3 pl-md-0 banner-wrap2-order">
                                    <div class="single_catagory mb-30">
                                        <img src="img/product-img/cata-2.jpg" alt="">
                                        <div class="single_cata_desc text-center bg-white align-items-center justify-content-center">
                                            <h5 class="index_sector1_sub_title">#${v.b_title}</h5>
                                            <p class="index_sector1_text">${v.b_text}</p>
                                            <a href="${v.b_link}" class="btn btn-outline-dark border-dark index_sector1_btn font-weight-normal">MORE VIEW</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 pr-3 pr-md-0 mt-4">
                                                    <div class="single_catagory h-100 mb-30 bgsetting" style="background-image: url(${v.b_img});">
                                                    </div>
                                                </div>`;
        }
        $("#main-middle-banner-wrap1").append(strWrap);
        $("#main-middle-banner-wrap2").append(strWrap2);
      });
    },
    error: function (request, status, error) {
      console.log(error);
    },
  });
}

function MainSlideLoadShop2() {
  $.ajax({
    url: SERVER_AP + "/main/mainbanner-slide-main2",
    type: "post",
    cache: false,
    data: {},
    success: function (data) {
      $.each(data, function (i, v) {
        var str = `<div class="" id="banner-pc-${v.b_seq}">
                                <div class="main-slide-img bgsetting w-100" style="background-image: url(${v.b_img});"></div>
                            </div>`;
        $("#main-top-slide2").append(str);

        if (v.b_link) {
          $("#banner-pc-" + v.b_seq).attr(
            "onclick",
            `bannerLink(\'${v.b_link}\')`
          );
          $("#banner-pc-" + v.b_seq).addClass("pointer");
        } else if (v.b_shop_img) {
          $("#banner-pc-" + v.b_seq).attr(
            "onclick",
            `location.href='/bannerpage.php?b_seq=${v.b_seq}'`
          );
          $("#banner-pc-" + v.b_seq).addClass("pointer");
        }
      });

      if (data.length != 1) {
        $("#main-top-slide2").slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 5000,
          draggable: false,
          dots: true,
          prevArrow: $(".main-slide-prev"),
          nextArrow: $(".main-slide-next"),
        });
      }
    },
    error: function (request, status, error) {
      console.log(error);
    },
  });
}

function MainSlideMLoadShop2() {
  console.log("여기탐?");
  $.ajax({
    url: SERVER_AP + "/main/mainbanner-slide-m-main2",
    type: "post",
    cache: false,
    data: {},
    success: function (data) {
      console.log("data타냐?", data);
      $.each(data, function (i, v) {
        var str = `<div class=""id="banner-m-${v.b_seq}">
                                <div class="main-slide-img bgsetting w-100" style="background-image: url(${v.b_img});"></div>
                            </div>`;
        $("#main-top-slide2").append(str);

        if (v.b_link) {
          $("#banner-m-" + v.b_seq).attr(
            "onclick",
            `bannerLink(\'${v.b_link}\')`
          );
          $("#banner-m-" + v.b_seq).addClass("pointer");
        }
      });

      if (data.length != 1) {
        $("#main-top-slide2").slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 5000,
          draggable: false,
          arrows: false,
        });
      }

      $(".main-slide-prev, .main-slide-next").remove();
    },
    error: function (request, status, error) {
      console.log(error);
    },
  });
}

function MainSlideLoadShop3() {
  $.ajax({
    url: SERVER_AP + "/main/mainbanner-slide-main3",
    type: "post",
    cache: false,
    data: {},
    success: function (data) {
      $.each(data, function (i, v) {
        var str = `<div class="" id="banner-pc-${v.b_seq}">
                                <img src="${v.b_img}" />
                            </div>`;
        $("#main-top-slide3").append(str);

        if (v.b_link) {
          $("#banner-pc-" + v.b_seq).attr(
            "onclick",
            `bannerLink(\'${v.b_link}\')`
          );
          $("#banner-pc-" + v.b_seq).addClass("pointer");
        } else if (v.b_shop_img) {
          $("#banner-pc-" + v.b_seq).attr(
            "onclick",
            `location.href='/bannerpage.php?b_seq=${v.b_seq}'`
          );
          $("#banner-pc-" + v.b_seq).addClass("pointer");
        }
      });
      if (data.length != 1) {
        // $("#main-top-slide3").slick({
        //   slidesToShow: 1,
        //   slidesToScroll: 1,
        //   autoplay: true,
        //   autoplaySpeed: 5000,
        //   draggable: false,
        //   dots: false,
        //   prevArrow: $(".main-slide-prev"),
        //   nextArrow: $(".main-slide-next"),
        // });
      }
    },
    error: function (request, status, error) {
      console.log(error);
    },
  });
}

function MainSlideMLoadShop3() {
  $.ajax({
    url: SERVER_AP + "/main/mainbanner-slide-m-main3",
    type: "post",
    cache: false,
    data: {},
    success: function (data) {
      $.each(data, function (i, v) {
        var str = `<div class=""id="banner-m-${v.b_seq}">
                                <img src="${v.b_img}" />
                            </div>`;
        $("#main-top-slide3").append(str);

        if (v.b_link) {
          $("#banner-m-" + v.b_seq).attr(
            "onclick",
            `bannerLink(\'${v.b_link}\')`
          );
          $("#banner-m-" + v.b_seq).addClass("pointer");
        }
      });
      if (data.length != 1) {
        // $("#main-top-slide3").slick({
        //   slidesToShow: 1,
        //   slidesToScroll: 1,
        //   autoplay: true,
        //   autoplaySpeed: 5000,
        //   draggable: false,
        //   arrows: false,
        // });
      }

      $(".main-slide-prev, .main-slide-next").remove();
    },
    error: function (request, status, error) {
      console.log(error);
    },
  });
}

function loadLastBanner() {
  $.ajax({
    url: SERVER_AP + "/main/hadanBanner",
    type: "post",
    cache: false,
    data: {},
    success: function (data) {
      $.each(data, function (i, v) {
        if ($(window).width() < 780) {
          if (v.b_location == 15) {
            $(".last_banner").attr("src", v.b_img);
            if (v.b_link) {
              $(".last_banner").attr("onclick", `bannerLink(\'${v.b_link}\')`);
              $(".last_banner").addClass("pointer");
            }
          } else if (v.b_location == 17) {
            $(".last_banner2").attr("src", v.b_img);
            if (v.b_link) {
              $(".last_banner2").attr("onclick", `bannerLink(\'${v.b_link}\')`);
              $(".last_banner2").addClass("pointer");
            }
          }
        } else {
          if (v.b_location == 14) {
            $(".last_banner").attr("src", v.b_img);
            if (v.b_link) {
              $(".last_banner").attr("onclick", `bannerLink(\'${v.b_link}\')`);
              $(".last_banner").addClass("pointer");
            }
          } else if (v.b_location == 16) {
            $(".last_banner2").attr("src", v.b_img);
            if (v.b_link) {
              $(".last_banner2").attr("onclick", `bannerLink(\'${v.b_link}\')`);
              $(".last_banner2").addClass("pointer");
            }
          }
        }
      });
    },
    error: function (request, status, error) {
      console.log(error);
    },
  });
}
