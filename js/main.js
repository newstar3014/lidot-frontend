/**
 * selectImages
 * preloader
 * Scroll process
 * Button Quantity
 * Delete file
 * Go Top
 * color swatch product
 * change value
 * footer accordion
 * close announcement bar
 * sidebar mobile
 * tabs
 * flatAccordion
 * button wishlist
 * button loading
 * variant picker
 * switch layout
 * item checkbox
 * infinite scroll
 * stagger wrap
 * filter
 * modal second
 * header sticky
 * header change background
 * img group
 * contact form
 * subscribe mailchimp
 * auto popup
 * RTL

 */


(function ($) {
  "use strict";

  var isMobile = {
    Android: function () {
      return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function () {
      return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function () {
      return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function () {
      return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function () {
      return navigator.userAgent.match(/IEMobile/i);
    },
    any: function () {
      return (
        isMobile.Android() ||
        isMobile.BlackBerry() ||
        isMobile.iOS() ||
        isMobile.Opera() ||
        isMobile.Windows()
      );
    },
  };

  /* selectImages
  -------------------------------------------------------------------------------------*/
  var selectImages = function () {
    if ($(".image-select").length > 0) {
      const selectIMG = $(".image-select");
      selectIMG.find("option").each((idx, elem) => {
        const selectOption = $(elem);
        const imgURL = selectOption.attr("data-thumbnail");
        if (imgURL) {
          selectOption.attr(
            "data-content",
            "<img src='%i'/> %s"
              .replace(/%i/, imgURL)
              .replace(/%s/, selectOption.text())
          );
        }
      });
      selectIMG.selectpicker();
    }
  };

  /* preloader
  -------------------------------------------------------------------------------------*/
  const preloader = function () {
    if ($("body").hasClass("preload-wrapper")) {
      setTimeout(function () {
        $(".preload").fadeOut("slow", function () {
          $(this).remove();
        });
      }, 100);
    }
    
  };

  /* Scroll process
  -------------------------------------------------------------------------------------*/
  var scrollProgress = function () {
    $(".scroll-snap").on("scroll", function () {
      var val = $(this).scrollLeft();
      $(".value-process").css("width", `max(30%,${val}%)`);
    });
  };

  /* Button Quantity
  -------------------------------------------------------------------------------------*/
  var btnQuantity = function () {
    $(".minus-btn").on("click", function (e) {
      e.preventDefault();
      var $this = $(this);
      var $input = $this.closest("div").find("input");
      var value = parseInt($input.val());

      if (value > 1) {
        value = value - 1;
      }
      $input.val(value);
    });

    $(".plus-btn").on("click", function (e) {
      e.preventDefault();
      var $this = $(this);
      var $input = $this.closest("div").find("input");
      var value = parseInt($input.val());

      if (value > -1) {
        value = value + 1;
      }
      $input.val(value);
    });
  };

  /* Delete file 
  -------------------------------------------------------------------------------------*/
  var deleteFile = function (e) {
    $(".remove").on("click", function (e) {
      e.preventDefault();
      var $this = $(this);
      $this.closest(".file-delete").remove();
    });

    $('.tf-compapre-button-clear-all').on("click", function (e) {
      $(".tf-compare-item").remove();
    });
    $(".tf-compare-item .icon").on("click", function (e) {
      var $this = $(this);
      $this.closest(".tf-compare-item").remove();
    });
    $(".tf-mini-cart-remove").on("click", function (e) {
      console.log('hhh')
      $(this).closest(".tf-mini-cart-item").remove();
    });

  };

  /* Go Top
  -------------------------------------------------------------------------------------*/
  var goTop = function () {
    if ($("div").hasClass("progress-wrap")) {
      var progressPath = document.querySelector(".progress-wrap path");
      var pathLength = progressPath.getTotalLength();
      progressPath.style.transition = progressPath.style.WebkitTransition =
        "none";
      progressPath.style.strokeDasharray = pathLength + " " + pathLength;
      progressPath.style.strokeDashoffset = pathLength;
      progressPath.getBoundingClientRect();
      progressPath.style.transition = progressPath.style.WebkitTransition =
        "stroke-dashoffset 10ms linear";
      var updateprogress = function () {
        var scroll = $(window).scrollTop();
        var height = $(document).height() - $(window).height();
        var progress = pathLength - (scroll * pathLength) / height;
        progressPath.style.strokeDashoffset = progress;
      };
      updateprogress();
      $(window).scroll(updateprogress);
      var offset = 200;
      var duration = 0;
      jQuery(window).on("scroll", function () {
        if (jQuery(this).scrollTop() > offset) {
          jQuery(".progress-wrap").addClass("active-progress");
        } else {
          jQuery(".progress-wrap").removeClass("active-progress");
        }
      });
      jQuery(".progress-wrap").on("click", function (event) {
        event.preventDefault();
        jQuery("html, body").animate({ scrollTop: 0 }, duration);
        return false;
      });
    }
  };

  /* color swatch product
  -------------------------------------------------------------------------*/
  var swatchColor = function () {
    if ($(".card-product").length > 0) {
      $(".color-swatch").on("click, mouseover", function () {
        var swatchColor = $(this).find("img").attr("src");
        var imgProduct = $(this).closest(".card-product").find(".img-product");
        imgProduct.attr("src", swatchColor);
        $(this)
          .closest(".card-product")
          .find(".color-swatch.active")
          .removeClass("active");

        $(this).addClass("active");
      });
    }
  };

  /* change value
  ------------------------------------------------------------------------------------- */
  var changeValue = function () {
    if ($(".tf-dropdown-sort").length > 0) {
      $(".select-item").click(function (event) {
        $(this)
          .closest(".tf-dropdown-sort")
          .find(".text-sort-value")
          .text($(this).find(".text-value-item").text());

        $(this)
          .closest(".dropdown-menu")
          .find(".select-item.active")
          .removeClass("active");

        $(this).addClass("active");
      });
    }
  };

  /* footer accordion
  -------------------------------------------------------------------------*/
  var footer = function () {
    var args = { duration: 250 };
    $(".footer-heading-moblie").on("click", function () {
      $(this).parent(".footer-col-block").toggleClass("open");
      if (!$(this).parent(".footer-col-block").is(".open")) {
        $(this).next().slideUp(args);
      } else {
        $(this).next().slideDown(args);
      }
    });
  };

  /* close announcement bar
  -------------------------------------------------------------------------*/
  var closeAnnouncement = function () {
    $(".close-announcement-bar").on("click", function (e) {
      e.preventDefault();
      var $this = $(this);
      var $height = $(".announcement-bar").height() + "px";
      $this.closest(".announcement-bar").css("margin-top", `-${$height}`);

      $(".announcement-bar").fadeOut("slow", function () {
        $this.closest(".announcement-bar").remove();
      });
    });
  };

  /* sidebar mobile
  -------------------------------------------------------------------------*/
  var sidebarMobile = function () {
    if ($(".wrap-sidebar-mobile,.wrap-sidebar-account").length > 0) {
      var sidebar = $(".wrap-sidebar-mobile,.wrap-sidebar-account").html();
      $(".sidebar-mobile-append").append(sidebar);
      // $(".wrap-sidebar-mobile").remove();
    }
  };

  /* tabs
  -------------------------------------------------------------------------*/
  var tabs = function () {
    $(".widget-tabs").each(function () {
      $(this)
        .find(".widget-menu-tab")
        .children(".item-title")
        .on("click", function () {
          var liActive = $(this).index();
          var contentActive = $(this)
            .siblings()
            .removeClass("active")
            .parents(".widget-tabs")
            .find(".widget-content-tab")
            .children()
            .eq(liActive);
          contentActive.addClass("active").fadeIn("slow");
          contentActive.siblings().removeClass("active");
          $(this)
            .addClass("active")
            .parents(".widget-tabs")
            .find(".widget-content-tab")
            .children()
            .eq(liActive);
        });
    });
  };

  /* flatAccordion
  -------------------------------------------------------------------------*/
  var flatAccordion = function (class1, class2) {
    var args = { duration: 200 };

    $(class2 + " .toggle-title.active")
      .siblings(".toggle-content")
      .show();
    $(class1 + " .toggle-title").on("click", function () {
      $(class1 + " " + class2).removeClass("active");
      $(this).closest(class2).toggleClass("active");

      if (!$(this).is(".active")) {
        $(this).toggleClass("active");
        $(this).next().slideToggle(args);
      } else {
        $(class1 + " " + class2).removeClass("active");
        $(this).toggleClass("active");
        $(this).next().slideToggle(args);
      }
    });
  };

  /* button wishlist
  -------------------------------------------------------------------------*/
  var btnWishlist = function () {
    if ($(".btn-icon-action").length) {
      $(".btn-icon-action").on("click", function (e) {
        $(this).toggleClass("active");
      });
    }
  };

  /* button loading
  -------------------------------------------------------------------------*/
  var btnLoading = function () {
    if ($(".tf-btn-loading").length) {
      $(".tf-btn-loading").on("click", function (e) {
        $(this).addClass("loading");
        var $this = $(this);
        setTimeout(function () {
          $this.removeClass("loading");
        }, 600);
      });
    }
  };

  /* variant picker
  -------------------------------------------------------------------------*/
  var variantPicker = function () {
    if ($(".variant-picker-item").length) {
      $(".variant-picker-item label").on("click", function (e) {
        $(this)
          .closest(".variant-picker-item")
          .find(".variant-picker-label-value")
          .text($(this).data("value"));
      });
    }
    if ($(".variant-picker-item").length) {
      $(".select-size").on("click", function (e) {
        $(this)
          .closest(".variant-picker-item")
          .find(".variant-picker-label-value")
          .text($(this).data("value"));
      });
    }
  };



  /* item checkbox
  -------------------------------------------------------------------------*/
  var itemCheckbox = function () {
    if ($(".item-has-checkox").length) {
      $(".item-has-checkox input:checkbox").on("click", function (e) {
        $(this).closest(".item-has-checkox").toggleClass("check");
      });
    }
  };

  /* Check Active 
  -------------------------------------------------------------------------*/
  var checkClick = function () {
    $(".flat-check-list").on("click", ".check-item", function () {
        $(this)
            .closest(".flat-check-list")
            .find(".check-item")
            .removeClass("active");
        $(this).addClass("active");
    });
};

  /* infinite scroll
  -------------------------------------------------------------------------*/
  var infiniteScroll = function () {

    var display = $(".loadmore-item").data("display") || 8; 
    var count = $(".loadmore-item").data("count") || 4; 
    
    $(".fl-item").slice(0, display).show();
    $(".fl-item2").slice(0, display).show();
    $(".fl-item3").slice(0, display).show();

    if ($(".scroll-loadmore").length > 0) {
      $(window).scroll(function () {
        if (
          $(window).scrollTop() >=
          $(document).height() - $(window).height()
        ) {
          setTimeout(() => {
            $(".fl-item:hidden").slice(0, count).show();
            if ($(".fl-item:hidden").length == 0) {
              $(".view-more-button").hide();
            }
          }, 0);
        }
      });
    }
    if ($(".loadmore-item").length > 0) {
      $(".btn-loadmore").on("click", function () {
        setTimeout(() => {
          $(".fl-item:hidden").slice(0, count).show();
          if ($(".fl-item:hidden").length == 0) {
            $(".view-more-button").hide();
          }
        }, 600);
      });
    }
    if ($(".loadmore-item2").length > 0) {
      $(".btn-loadmore2").on("click", function () {
        setTimeout(() => {
          $(".fl-item2:hidden").slice(0, count).show();
          if ($(".fl-item2:hidden").length == 0) {
            $(".view-more-button2").hide();
          }
        }, 600);
      });
    }
    if ($(".loadmore-item3").length > 0) {
      $(".btn-loadmore3").on("click", function () {
        setTimeout(() => {
          $(".fl-item3:hidden").slice(0, count).show();
          if ($(".fl-item3:hidden").length == 0) {
            $(".view-more-button3").hide();
          }
        }, 600);
      });
    }



  };
  /* stagger wrap
  -------------------------------------------------------------------------*/
  var staggerWrap = function () {
    if ($(".stagger-wrap").length) {
      var count = $(".stagger-item").length;
      // $(".stagger-item").addClass("stagger-finished");
      for (var i = 1, time = 0.2; i <= count; i++) {
        $(".stagger-item:nth-child(" + i + ")")
          .css("transition-delay", time * i + "s")
          .addClass("stagger-finished");
      }
    }
  };

  /* filter
  -------------------------------------------------------------------------*/
  var filterTab = function () {
    var $btnFilter = $('.tf-btns-filter').click(function() {
      if (this.id == 'all') {
        $('#parent > div').show();
      } else {
        var $el = $('.' + this.id).show();
        $('#parent > div').not($el).hide();
      }
      $btnFilter.removeClass('is--active');
      $(this).addClass('is--active');
    })
  };

  /* modal second
  -------------------------------------------------------------------------*/
  var clickModalSecond = function () {
    $(".btn-choose-size").click(function () {
      $("#find_size").modal("show");
    });
    $(".btn-show-quickview").click(function () {
      $("#quick_view").modal("show");
    });
    // $(".btn-add-to-cart").click(function () {
    //   $("#shoppingCart").modal("show");
    // });

    $(".btn-add-note").click(function () {
      $(".add-note").addClass("open");
    });
    $(".btn-add-gift").click(function () {
      $(".add-gift").addClass("open");
    });
    $(".btn-estimate-shipping").click(function () {
      $(".estimate-shipping").addClass("open");
    });
    $(".tf-mini-cart-tool-close ,.tf-mini-cart-tool-close .overplay").click(
      function () {
        $(".tf-mini-cart-tool-openable").removeClass("open");
      }
    );
  };



  /* header sticky
  -------------------------------------------------------------------------*/
  var headerSticky = function () {
    let lastScrollTop = 0;
    let delta = 5;
    let navbarHeight = $("header").outerHeight();
    let didScroll = false;

    $(window).scroll(function () {
      didScroll = true;
    });

    setInterval(function () {
      if (didScroll) {
        let st = $(window).scrollTop();
        navbarHeight = $("header").outerHeight();

        if (st > navbarHeight) {
          if (st > lastScrollTop + delta) {
            $("header").css("top", `-${navbarHeight}px`);
          } else if (st < lastScrollTop - delta) {
            $("header").css("top", "0");
            $("header").addClass("header-bg");
          }
        } else {
          $("header").css("top", "unset");
          $("header").removeClass("header-bg");
        }
        lastScrollTop = st;
        didScroll = false;
      }
    }, 250);
  };

  /* bottom sticky
  -------------------------------------------------------------------------*/
  var scrollBottomSticky = function(){
    $(window).on('scroll', function () {
      var scrollPosition = $(this).scrollTop(); 
      var myElement = $('.tf-sticky-btn-atc');

      if (scrollPosition >= 500) {
          myElement.addClass('show');
      } else {
          myElement.removeClass('show');
      }
  });
  }

   /* total cart
  -------------------------------------------------------------------------*/
  var totalPriceVariant = function () {

    var basePrice = parseFloat($(".price-on-sale").data("base-price")) || parseFloat($(".price-on-sale").text().replace("$", ""));
    var quantityInput = $(".quantity-product");
    // quantityInput.on("keydown keypress input", function(event) {
    //   event.preventDefault();
    // });
    $(".color-btn, .size-btn").on("click", function () {
      var newPrice = parseFloat($(this).data("price")) || basePrice;
      quantityInput.val(1);
      $(".price-on-sale").text("$" + newPrice.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ","));
      var totalPrice = newPrice;
      $(".total-price").text("$" + totalPrice.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    });

    $(".btn-increase").on("click", function () {
      var currentQuantity = parseInt(quantityInput.val());
      quantityInput.val(currentQuantity + 1);
      updateTotalPrice();
    });

    $(".btn-decrease").on("click", function () {
      var currentQuantity = parseInt(quantityInput.val());
      if (currentQuantity > 1) {
        quantityInput.val(currentQuantity - 1);
        updateTotalPrice();
      }
    });

    function updateTotalPrice() {
      var currentPrice = parseFloat($(".price-on-sale").text().replace("$", ""));
      var quantity = parseInt(quantityInput.val());
      var totalPrice = currentPrice * quantity;
      $(".total-price").text(totalPrice.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    }

  };

  /* scroll grid product
  ------------------------------------------------------------------------------------- */
  var scrollGridProduct = function(){

    var headerHeight = $("#header").outerHeight(); 
    var activeColorBtn = null; 
    $(".btn-grid-color").on("click", function () {
        var color = $(this).data("color");
        var target = $(".item-img-color[data-color='" + color + "']"); 
        $('html, body').animate({
            scrollTop: target.offset().top - headerHeight 
        }, 100);

        $(".btn-grid-color").removeClass("active");
        $(this).addClass("active");
        activeColorBtn = $(this); 
    });

    $(window).on("scroll", function () {
        var isActiveSet = false; 
        $(".item-img-color").each(function () {
            var targetTop = $(this).offset().top - headerHeight;
            if ($(window).scrollTop() >= targetTop && $(window).scrollTop() < (targetTop + $(this).outerHeight())) {
                var color = $(this).data("color");
                if (!isActiveSet && (activeColorBtn === null || activeColorBtn.data("color") !== color)) {
                    $(".btn-grid-color").removeClass("active");
                    $(".btn-grid-color[data-color='" + color + "']").addClass("active");
                    // $('.value-currentColor').text(color);
                }
                isActiveSet = true; 
            }
        });
        if (!isActiveSet && activeColorBtn !== null) {
            $(".btn-grid-color").removeClass("active");
            activeColorBtn.addClass("active");
        }
    });
  }

  /* contact form
  ------------------------------------------------------------------------------------- */
  var ajaxContactForm = function () {
    $("#contactform").each(function () {
      $(this).validate({
        submitHandler: function (form) {
          var $form = $(form),
            str = $form.serialize(),
            loading = $("<div />", { class: "loading" });

          $.ajax({
            type: "POST",
            url: $form.attr("action"),
            data: str,
            beforeSend: function () {
              $form.find(".send-wrap").append(loading);
            },
            success: function (msg) {
              var result, cls;
              if (msg == "Success") {
                result =
                  "Email Sent Successfully. Thank you, Your application is accepted - we will contact you shortly";
                cls = "msg-success";
              } else {
                result = "Error sending email.";
                cls = "msg-error";
              }
              $form.prepend(
                $("<div />", {
                  class: "flat-alert " + cls,
                  text: result,
                }).append(
                  $(
                    '<a class="close" href="#"><i class="icon icon-close2"></i></a>'
                  )
                )
              );

              $form.find(":input").not(".submit").val("");
            },
            complete: function (xhr, status, error_thrown) {
              $form.find(".loading").remove();
            },
          });
        },
      });
    }); // each contactform
  };
  
  /* subscribe mailchimp
  ------------------------------------------------------------------------------------- */
  var ajaxSubscribe = {
    obj: {
      subscribeEmail: $("#subscribe-email"),
      subscribeButton: $("#subscribe-button"),
      subscribeMsg: $("#subscribe-msg"),
      subscribeContent: $("#subscribe-content"),
      dataMailchimp: $("#subscribe-form").attr("data-mailchimp"),
      success_message:
        '<div class="notification_ok">Thank you for joining our mailing list!</div>',
      failure_message:
        '<div class="notification_error">Error! <strong>There was a problem processing your submission.</strong></div>',
      noticeError: '<div class="notification_error">{msg}</div>',
      noticeInfo: '<div class="notification_error">{msg}</div>',
      basicAction: "mail/subscribe.php",
      mailChimpAction: "mail/subscribe-mailchimp.php",
    },

    eventLoad: function () {
      var objUse = ajaxSubscribe.obj;

      $(objUse.subscribeButton).on("click", function () {
        if (window.ajaxCalling) return;
        var isMailchimp = objUse.dataMailchimp === "true";

        // if (isMailchimp) {
        //   ajaxSubscribe.ajaxCall(objUse.mailChimpAction);
        // } else {
        //   ajaxSubscribe.ajaxCall(objUse.basicAction);
        // }
        ajaxSubscribe.ajaxCall(objUse.basicAction);
      });
    },

    ajaxCall: function (action) {
      window.ajaxCalling = true;
      var objUse = ajaxSubscribe.obj;
      var messageDiv = objUse.subscribeMsg.html("").hide();
      $.ajax({
        url: action,
        type: "POST",
        dataType: "json",
        data: {
          subscribeEmail: objUse.subscribeEmail.val(),
        },
        success: function (responseData, textStatus, jqXHR) {
          if (responseData.status) {
            objUse.subscribeContent.fadeOut(500, function () {
              messageDiv.html(objUse.success_message).fadeIn(500);
            });
          } else {
            switch (responseData.msg) {
              case "email-required":
                messageDiv.html(
                  objUse.noticeError.replace(
                    "{msg}",
                    "Error! <strong>Email is required.</strong>"
                  )
                );
                break;
              case "email-err":
                messageDiv.html(
                  objUse.noticeError.replace(
                    "{msg}",
                    "Error! <strong>Email invalid.</strong>"
                  )
                );
                break;
              case "duplicate":
                messageDiv.html(
                  objUse.noticeError.replace(
                    "{msg}",
                    "Error! <strong>Email is duplicate.</strong>"
                  )
                );
                break;
              case "filewrite":
                messageDiv.html(
                  objUse.noticeInfo.replace(
                    "{msg}",
                    "Error! <strong>Mail list file is open.</strong>"
                  )
                );
                break;
              case "undefined":
                messageDiv.html(
                  objUse.noticeInfo.replace(
                    "{msg}",
                    "Error! <strong>undefined error.</strong>"
                  )
                );
                break;
              case "api-error":
                objUse.subscribeContent.fadeOut(500, function () {
                  messageDiv.html(objUse.failure_message);
                });
            }
            messageDiv.fadeIn(500);
          }
        },
        error: function (jqXHR, textStatus, errorThrown) {
          alert("Connection error");
        },
        complete: function (data) {
          window.ajaxCalling = false;
        },
      });
    },
  };

  /* auto popup
  ------------------------------------------------------------------------------------- */
  var autoPopup = function () {
    if($("body").hasClass("popup-loader")){
      if ($(".auto-popup").length > 0) {
        let showPopup = sessionStorage.getItem("showPopup");
        if (!JSON.parse(showPopup)) {
          setTimeout(function () {
            $(".auto-popup").modal('show');
          }, 3000);
        }
      }
      $(".btn-hide-popup").on("click", function () {
        sessionStorage.setItem("showPopup", true);
      });
    };

  };
  /* toggle control
  ------------------------------------------------------------------------------------- */
  var clickControl = function () {
    // var args = { duration: 500 };

    $(".btn-address").click(function () {
      $(".show-form-address").toggle();
    });
    $(".btn-hide-address").click(function () {
      $(".show-form-address").hide();
    });

    $(".btn-edit-address").click(function () {
      $(this).closest(".account-address-item").find(".edit-form-address").toggle();
    });
    $(".btn-hide-edit-address").click(function () {
      $(this).closest(".account-address-item").find(".edit-form-address").hide();
    });
  };
  /* RTL
  ------------------------------------------------------------------------------------- */
  var RTL = function () {
    if (localStorage.getItem("dir") === "rtl") {
      $("html").attr("dir", "rtl");
      $("body").addClass("rtl");
      $('#toggle-rtl').text('ltr');
      $(".tf-slideshow .tf-btn,.view-all-demo .tf-btn, .pagination-link, .pagination-item").find(".icon").removeClass("icon-arrow-right").addClass("icon-arrow-left");    
    } else {
      $("html").attr("dir", "ltr");
      $("body").removeClass("rtl");
      $('#toggle-rtl').text('rtl');      
      
    }
    $("#toggle-rtl").on("click", function() {
      if ($("html").attr("dir") === "rtl") {
        localStorage.setItem("dir", "ltr"); 
        $('#toggle-rtl').text('rtl');      

      } else {
        localStorage.setItem("dir", "rtl");
        $('#toggle-rtl').text('ltr');      
      }
      location.reload();
    });
  };


  /* hoverPin
  -------------------------------------------------------------------------*/
  var hoverPin = function () {
    if ($(".wrap-lookbook-hover").length) {
      $(".bundle-pin-item").on("mouseover", function () {
        $(".bundle-hover-wrap").addClass("has-hover");
        var $el = $('.' + this.id).show();
        $('.bundle-hover-wrap .bundle-hover-item').not($el).addClass("no-hover");
      });
      $(".bundle-pin-item").on("mouseleave", function () {
        $(".bundle-hover-wrap").removeClass("has-hover");
        $(".bundle-hover-item").removeClass("no-hover");
      });
    }
  };

    /* write-review
  ------------------------------------------------------------------------------------- */
  var writeReview = function () {

    if ($(".write-cancel-review-wrap").length > 0) {
      $(".btn-comment-review").click(function () {
        $(this).closest(".write-cancel-review-wrap").toggleClass("write-review");
      });
    }
   
  };

  // video
  var video = function () {
    if ($("div").hasClass("widget-video")) {
        $(".popup-youtube").magnificPopup({
            type: "iframe",
        });
    }
  };

var totalVariant = function () {
  $(".tf-variant-item,.tf-cart-item").each(function () {
    var productItem = $(this);
    var basePrice = parseFloat(productItem.find(".tf-variant-item-price .price").data("base-price")) || parseFloat(productItem.find(".tf-variant-item-price .price").text().replace("원", ""));
    var quantityInput = productItem.find("input");

    productItem.find(".color-btn, .size-btn").on("click", function () {
      var newPrice = parseFloat($(this).data("price")) || basePrice;
      quantityInput.val(1);
      productItem.find(".tf-variant-item-price .price").text(newPrice.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",")
      );
      updateTotalPrice(newPrice, productItem);
    });

    productItem.find(".btnincrease").on("click", function () {
      var currentQuantity = parseInt(quantityInput.val());
      quantityInput.val(currentQuantity + 1);
      updateTotalPrice(null, productItem);
    });

    productItem.find(".btndecrease").on("click", function () {
      var currentQuantity = parseInt(quantityInput.val());
      if (currentQuantity > 1) {
        quantityInput.val(currentQuantity - 1);
        updateTotalPrice(null, productItem);
      }
    });

    function updateTotalPrice(price, scope) {
      var currentPrice = price || parseFloat(scope.find(".tf-variant-item-price .price").text().replace("$", ""));
      var quantity = parseInt(scope.find("input").val());
      var totalPrice = currentPrice * quantity;
      scope.find(".tf-variant-item-total .price").text(
        totalPrice.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",")
      );
    }
  });
};


  // Dom Ready
  $(function () {
    selectImages();
    btnQuantity();
    deleteFile();
    goTop();
    closeAnnouncement();
    preloader();
    sidebarMobile();
    tabs();
    flatAccordion(".flat-accordion", ".flat-toggle");
    flatAccordion(".flat-accordion1", ".flat-toggle1");
    swatchColor();
    changeValue();
    footer();
    btnWishlist();
    btnLoading();
    variantPicker();
    itemCheckbox();
    infiniteScroll();
    staggerWrap();
    clickModalSecond();
    scrollProgress();
    headerSticky();
    scrollBottomSticky();
    // totalPriceVariant();
    scrollGridProduct();
    checkClick();
    filterTab();
    writeReview();
    ajaxContactForm();
    ajaxSubscribe.eventLoad();
    autoPopup();
    clickControl();
    RTL();
    hoverPin();
    video();
    // totalVariant();
    new WOW().init();
  });
})(jQuery);
