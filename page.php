<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients Hover</title>
    <link rel="stylesheet" href="../vendors/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendors/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendors/owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="../vendors/css/animate.css" />
    <style>
        .carousel {
            background-color: #e1efe0 !important;
            border-radius: 5px;
            height: 200px;
            display: flex !important;
            align-items: center;
        }

        .block {
            height: 150px;
            display: flex;
            justify-content: center;
            align-items: center;

            position: relative;
        }

        .block img {
            transition: transform ease 0.38s;
        }

        .block::after {
            position: absolute;
            left: 50%;
            bottom: 10px;
            content: '';
            background: #fff;
            height: 2.5px;
            border-radius: 2px;
            width: 0%;
            transition: width ease 0.28s, left ease 0.28s;
        }

        .block:hover img {
            transform: translate(0px, -10px);
        }

        .block:hover::after {
            left: 40%;
            width: 20%;
        }
    </style>
</head>

<body>

    <h1 class="animate__animated animate__slideInDown">An animated element</h1>
    <div class=" my-5 text-center">
        <div class="carousel owl-carousel owl-theme text-dark">
            <div class="block">
                <img src="http://efactor4u.com/efactor/wordpress/wp-content/uploads/2017/08/balloon-safari-logo-2.png"
                    alt="">
            </div>
            <div class="block"><img
                    src="http://efactor4u.com/efactor/wordpress/wp-content/uploads/2017/09/pushkar-mela-logo-4.png"
                    alt=""></div>
            <div class="block"><img
                    src="http://efactor4u.com/efactor/wordpress/wp-content/uploads/2017/09/icwf-logo-2.png" alt="">
            </div>
            <div class="block">
                <img src="http://efactor4u.com/wp-content/uploads/2020/01/CBL-logo-New.png" alt="">
            </div>
            <div class="block">
                <img src="http://efactor4u.com/wp-content/uploads/2020/01/SKYWALTZ-Sailing-New.png" alt="">
            </div>
        </div>
    </div>





    <script src="../vendors/js/jquery.min.js"></script>
    <script src="../vendors/js/bootstrap.min.js"></script>
    <script src="../vendors/owl/owl.carousel.min.js"></script>
    <script>
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
    </script>
</body>

</html>