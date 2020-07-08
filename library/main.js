jQuery(document).ready(function ($) {
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

    $(function () {
        $(document).scroll(function () {
            var $nav = $(".ent-header");
            $nav.toggleClass('scrolled', $(this).scrollTop() > (1.5 * $nav.height()));
        });
    });










    // LighBox
    const divs = document.querySelectorAll('main.lightbox-wrapper div');
    const body = document.body;
    const prev = document.querySelector('.lightboxNav.prev');
    const next = document.querySelector('.lightboxNav.next');

    function checkPrev() {
        if (document.querySelector('.lightbox-wrapper div:first-child').classList.contains('show')) {
            prev.style.display = 'none';
            // body.classList.toggle('overflow');

        } else {
            prev.style.display = 'flex';
        }
    }

    function checkNext() {
        if (document.querySelector('.lightbox-wrapper div:last-child').classList.contains('show')) {
            next.style.display = 'none';
            // body.classList.toggle('overflow');
        } else {
            next.style.display = 'flex';
        }
    }

    Array.prototype.slice.call(divs).forEach(function (el) {
        el.addEventListener('click', function () {
            this.classList.toggle('show');
            // body.classList.toggle('overflow');
            body.classList.toggle('active');
            checkNext();
            checkPrev();
        });
    });

    prev.addEventListener('click', function () {
        const show = document.querySelector('.show');
        const event = document.createEvent('HTMLEvents');
        event.initEvent('click', true, false);

        show.previousElementSibling.dispatchEvent(event);
        show.classList.remove('show');
        body.classList.toggle('active');
        checkNext();
    });

    next.addEventListener('click', function () {
        const show = document.querySelector('.show');
        const event = document.createEvent('HTMLEvents');
        event.initEvent('click', true, false);

        show.nextElementSibling.dispatchEvent(event);
        show.classList.remove('show');
        body.classList.toggle('active');
        checkPrev();
    });

});