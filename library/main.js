jQuery(document).ready(function ($) {

    // var myVar;
    // myVar = setTimeout(showPage, 800);

    // function showPage() {
    //     document.getElementById("load-screen").style.display = "none";
    //     document.body.style.overflow = "visible";
    // }
    $('.owl-carousel').owlCarousel({
        animateIn: 'animate__slideInLeft',
        animateOut: 'animate__slideOutRight',
        items: 4,
        loop: true,
        margin: 30,
        autoplay: true,
        autoplaySpeed: 2300,
        mouseDrag: false,
        touchDrag: false,
        pullDrag: false,

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









});