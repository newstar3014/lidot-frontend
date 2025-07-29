function setSliderMain(){

    ajaxCall('/banner/slider-list', { 
        ppp: 99999, page:1, show_yn:'Y'
    }, function(data) {
        $.each(data.rows, function(i, v){

            let buttonStr = '';
            if(v.link_yn == 'Y'){
                let hrefStr = '';
                let targetStr = '';
                if(v.href){
                    hrefStr = v.href;
                }

                if(v.target){
                    targetStr = `target="${v.target}"`;
                }

                buttonStr = `<a href="${hrefStr}" ${targetStr} class="fade-item fade-item-3 tf-btn btn-fill animate-hover-btn rounded-0"><span>${v.button}</span></a>`;
            }
            $('#main-slider-wrapper').append(`<div class="swiper-slide" lazy="true">
                <div class="wrap-slider">
                    <img class="lazyload" data-src="${v.img}" src="${v.img}" alt="swm-slideshow">
                    <div class="box-content">
                        <div class="container">
                            <h1 class="fade-item fade-item-1 text-white heading font-libre-baskerville">${v.title}</h1>
                            <p class="fade-item fade-item-2 text-white">${v.subtitle}</p>
                            ${buttonStr}
                        </div>
                    </div>
                </div>
            </div>`);
        });
    });

    var preview = $(".tf-sw-slideshow").data("preview");
    var tablet = $(".tf-sw-slideshow").data("tablet");
    var mobile = $(".tf-sw-slideshow").data("mobile");
    var spacing = $(".tf-sw-slideshow").data("space");
    var centered = $(".tf-sw-slideshow").data("centered");
    var swiper = new Swiper(".tf-sw-slideshow", {
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        slidesPerView: mobile,
        loop: true,
        spaceBetween: 0,
        speed: 1000,
        pagination: {
            el: ".sw-pagination-slider",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        centeredSlides: false,
        breakpoints: {
            768: {
            slidesPerView: tablet,
            spaceBetween: spacing,
            centeredSlides: false,
    
            },
            1150: {
            slidesPerView: preview,
            spaceBetween: spacing,
            centeredSlides: centered,
            },
        },
    });
    
}

function setSliderBest(){

    var preview = $(".tf-sw-product-sell").data("preview");
    var tablet = $(".tf-sw-product-sell").data("tablet");
    var mobile = $(".tf-sw-product-sell").data("mobile");
    var spacingLg = $(".tf-sw-product-sell").data("space-lg");
    var spacingMd = $(".tf-sw-product-sell").data("space-md");
    var swiper = new Swiper(".tf-sw-product-sell", {
        autoplay: {
            delay: 3000, // 3초마다 자동 슬라이드
            disableOnInteraction: false, // 사용자가 슬라이드해도 자동 재생 계속
            pauseOnMouseEnter: true,
        },
        slidesPerView: mobile,
        spaceBetween: spacingMd,
        speed: 1000,
        loop: true, // 무한 슬라이드
        pagination: {
            el: ".sw-pagination-product",
            clickable: true,
        },
        slidesPerGroup: 1,
        navigation: {
            clickable: true,
            nextEl: ".nav-prev-product",
            prevEl: ".nav-next-product",
        },
        breakpoints: {
            768: {
                slidesPerView: tablet,
                spaceBetween: spacingLg,
                slidesPerGroup: 1,
            },
            1150: {
                slidesPerView: preview,
                spaceBetween: spacingLg,
                slidesPerGroup: 1,
            },
        },
        on: {
            init: function () {
                if (this.params.loop) {
                    $(".nav-prev-product, .nav-next-product").removeClass("swiper-button-disabled").attr("aria-disabled", "false");
                }
            },
            slideChange: function () {
                if (this.params.loop) {
                    $(".nav-prev-product, .nav-next-product").removeClass("swiper-button-disabled").attr("aria-disabled", "false");
                }
            }
        }
    });
    
}

function setSliderCate(){

    var preview = $(".tf-sw-collection").data("preview");
    var tablet = $(".tf-sw-collection").data("tablet");
    var mobile = $(".tf-sw-collection").data("mobile");
    var spacingLg = $(".tf-sw-collection").data("space-lg");
    var spacingMd = $(".tf-sw-collection").data("space-md");
    var spacing = $(".tf-sw-collection").data("space");
    var swiper = new Swiper(".tf-sw-collection", {
        loop: true, // 무한 슬라이드
        autoplay: {
            delay: 3000, // 3초마다 자동 슬라이드
            disableOnInteraction: false, // 사용자가 슬라이드해도 자동 재생 계속
            pauseOnMouseEnter: true,
        },
        slidesPerView: mobile,
        spaceBetween: spacing,
        speed: 1000,
        pagination: {
            el: ".sw-pagination-collection",
            clickable: true,
        },
        slidesPerGroup: 1,
        navigation: {
            clickable: true,
            nextEl: ".nav-prev-collection",
            prevEl: ".nav-next-collection",
        },
        breakpoints: {
            768: {
            slidesPerView: tablet,
            spaceBetween: spacingMd,
            slidesPerGroup: 1,
            },
            1150: {
            slidesPerView: preview,
            spaceBetween: spacingLg,
            slidesPerGroup: 1,
            },
        },
    });
}



function setSliderSns(){
    var preview = $(".tf-sw-shop-gallery").data("preview");
    var tablet = $(".tf-sw-shop-gallery").data("tablet");
    var mobile = $(".tf-sw-shop-gallery").data("mobile");
    var spacingLg = $(".tf-sw-shop-gallery").data("space-lg");
    var spacingMd = $(".tf-sw-shop-gallery").data("space-md");
    var swiper = new Swiper(".tf-sw-shop-gallery", {
        loop: true, // 무한 슬라이드
        autoplay: {
            delay: 3000, // 3초마다 자동 슬라이드
            disableOnInteraction: false, // 사용자가 슬라이드해도 자동 재생 계속
            pauseOnMouseEnter: true,
        },
        slidesPerView: mobile,
        spaceBetween: spacingMd,
        speed: 1000,
        pagination: {
            el: ".sw-pagination-gallery",
            clickable: true,
        },
        slidesPerGroup: 1,
        breakpoints: {
        768: {
            slidesPerView: tablet,
            spaceBetween: spacingLg,
            slidesPerGroup: 1,
        },
        1150: {
            slidesPerView: preview,
            spaceBetween: spacingLg,
            slidesPerGroup: 1,
        },
        },
    });
}


function setSliderReview(){
    var preview = $(".tf-sw-testimonial").data("preview");
    var tablet = $(".tf-sw-testimonial").data("tablet");
    var mobile = $(".tf-sw-testimonial").data("mobile");
    var spacingLg = $(".tf-sw-testimonial").data("space-lg");
    var spacingMd = $(".tf-sw-testimonial").data("space-md");
    var swiper = new Swiper(".tf-sw-testimonial", {
        autoplay: {
            delay: 5000, // 5초마다 자동 슬라이드
            disableOnInteraction: false, // 사용자가 슬라이드해도 자동 재생 계속
            pauseOnMouseEnter: true,
        },
        loop: true, // 무한 슬라이드
        slidesPerView: mobile,
        spaceBetween: spacingMd,
        speed: 1000,
        navigation: {
            clickable: true,
            nextEl: ".nav-prev-testimonial",
            prevEl: ".nav-next-testimonial",
        },
        breakpoints: {
            768: {
                slidesPerView: tablet,
                spaceBetween: spacingLg,
            },
            1150: {
                slidesPerView: preview,
                spaceBetween: spacingLg,
            },
        },
    });
}