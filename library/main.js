jQuery(document).ready(function ($) {

    // var myVar;
    // myVar = setTimeout(showPage, 800);

    // function showPage() {
    //     document.getElementById("load-screen").style.display = "none";
    //     document.body.style.overflow = "visible";
    // }
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

    // $(function () {
    //     $(document).scroll(function () {
    //         var $nav = $(".ent-header");
    //         $nav.toggleClass('scrolled', $(this).scrollTop() > (1.5 * $nav.height()));
    //     });
    // });



    // $('.testimonials').owlCarousel({
    //     animateIn: 'animate__slideInLeft',
    //     animateOut: 'animate__slideOutRight',
    //     autoplay: true,
    //     margin: 10,
    //     loop: true,
    //     autoplaySpeed: 300,
    //     responsive: {
    //         // breakpoint from 0 up
    //         0: {
    //             items: 1,
    //         },
    //         // breakpoint from 480 up
    //         600: {
    //             items: 2,
    //         },
    //         // breakpoint from 768 up
    //         768: {
    //             items: 3,
    //         },
    //         1000: {
    //             items: 3,
    //         }
    //     }
    // });
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
            768: {
                items: 2,
            },
            1000: {
                items: 3,
            }
        }
    })


});