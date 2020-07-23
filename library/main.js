jQuery(document).ready(function ($) {


    $('.carousel').owlCarousel({
        // animateIn: 'animate__slideInLeft',
        // animateOut: 'animate__slideOutRight',
        items: 4,
        loop: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 8000,
        autoplaySpeed: 4000,
        mouseDrag: false,
        touchDrag: false,
        pullDrag: false,
        rtl: true,
        dots: false,
        stagePadding: 60,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1,
            },
            // breakpoint from 480 up
            600: {
                items: 2,
            },
            // breakpoint from 768 up
            768: {
                items: 3,
            },
            1000: {
                items: 4,
            }
        }
    });
    $("#navTogglerBtn").click(function () {
        if ($("#responsive-nav").css("display") == "none") {
            $("#responsive-nav").css("display", "block");
            $("#responsive-nav").css("max-height", "1000px");
        } else {
            $("#responsive-nav").css("display", "none");
            $("#responsive-nav").css("max-height", "0px");
        }
    });
    $("#entTogglerBtn").click(function () {
        if ($("#ent-responsive-nav").css("display") == "none") {
            $("#ent-responsive-nav").css("display", "block");
            $("#ent-responsive-nav").css("max-height", "1000px");
        } else {
            $("#ent-responsive-nav").css("display", "none");
            $("#ent-responsive-nav").css("max-height", "0px");
        }
    });
    $(".ent-responsive-nav a").click(function () {
        if ($("#ent-responsive-nav").css("display") == "none") {
            $("#ent-responsive-nav").css("display", "block");
            $("#ent-responsive-nav").css("max-height", "1000px");
        } else {
            $("#ent-responsive-nav").css("display", "none");
            $("#ent-responsive-nav").css("max-height", "0px");
        }
    });




    $('.testimonials').owlCarousel({
        loop: true,
        // animateIn: 'animate__fadeIn',
        // animateOut: 'animate__fadeOut',
        margin: 10,
        stagePadding: 0,
        autoplay: true,
        autoplayTimeout: 12000,
        autoplaySpeed: 4000,
        responsiveClass: true,
        nav: true,
        navText: [$('.owl-navigation .owl-nav-prev'), $('.owl-navigation .owl-nav-next')],
        responsive: {
            0: {
                items: 1,
            },
            450: {
                items: 2,
            },
            900: {
                items: 3,
            }
        }
    });
    var banners = $('.banners');
    banners.owlCarousel({
        loop: true,
        animateIn: 'animate__fadeIn',
        animateOut: 'animate__fadeOut',
        margin: 10,
        stagePadding: 0,
        autoplay: true,
        autoplayTimeout: 12000,
        responsiveClass: true,
        dots: true,

        responsive: {
            0: {
                items: 1,
            },
            450: {
                items: 1,
                nav: false,
            },
            900: {
                items: 1,
                nav: true,
                navText: [$('.banner-prev'), $('.banner-next')],
            }
        }
    });

    banners.on('changed.owl.carousel', function (event) {
        var item = event.item.index - 2;     // Position of the current item
        $('.content').removeClass('animate__animated animate__fadeInLeft');
        $('.owl-item').not('.cloned').eq(item).find('.content').addClass('animate__animated animate__fadeInLeft');
    });



    var ent_banners = $('.ent_banners');
    ent_banners.owlCarousel({
        loop: true,
        animateIn: 'animate__fadeIn',
        animateOut: 'animate__fadeOut',
        margin: 10,
        stagePadding: 0,
        autoplay: true,
        autoplayTimeout: 6000,
        responsiveClass: true,
        dots: true,
        responsive: {
            0: {
                items: 1,
            },
            450: {
                items: 1,
            },
            900: {
                items: 1,
            }
        }
    });
    var image_container = $('.image-container');
    image_container.owlCarousel({
        loop: true,
        animateIn: 'animate__fadeIn',
        animateOut: 'animate__fadeOut',
        margin: 10,
        stagePadding: 0,
        autoplay: true,
        autoplayTimeout: 6000,
        responsiveClass: true,
        autoplayHoverPause: true,
        dots: true,
        nav: true,
        navText: [$('.banner-prev'), $('.banner-next')],
        responsive: {
            0: {
                items: 1,
            },
            450: {
                items: 1,
            },
            900: {
                items: 1,
            }
        }
    });

});