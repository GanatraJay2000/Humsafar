jQuery(document).ready(function ($) {
    $('.owl-carousel').owlCarousel({
        animateIn: 'animate__slideInLeft',
        animateOut: 'animate__slideOutRight',
        items: 4,
        loop: true,
        margin: 30,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        stagePadding: 60,
    });

});