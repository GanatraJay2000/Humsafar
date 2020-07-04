</div>

<div class="mt-5 text-center">
    <div class="carousel owl-carousel owl-theme text-dark">
        <div class="block">
            <img src="http://efactor4u.com/efactor/wordpress/wp-content/uploads/2017/08/balloon-safari-logo-2.png"
                alt="">
        </div>
        <div class="block"><img
                src="http://efactor4u.com/efactor/wordpress/wp-content/uploads/2017/09/pushkar-mela-logo-4.png" alt="">
        </div>
        <div class="block">
            <a href="#"><img src="http://efactor4u.com/efactor/wordpress/wp-content/uploads/2017/09/icwf-logo-2.png"
                    alt=""></a>
        </div>
        <div class="block">
            <img src="http://efactor4u.com/wp-content/uploads/2020/01/CBL-logo-New.png" alt="">
        </div>
        <div class="block">
            <img src="http://efactor4u.com/wp-content/uploads/2020/01/SKYWALTZ-Sailing-New.png" alt="">
        </div>
    </div>
</div>

<footer class="site-footer">
    <div class="wrapper">
        <div>
            <h2>Explore</h2>
            <nav class="site-nav">
                <?php
            $args = array(
                'theme_location'=>'footer',
            );
            wp_nav_menu($args);      
            ?>
            </nav>
        </div>
        <div class="newsletter" data-aos="fade-right" data-aos-delay="300">
            <h2>Join Mailing List</h2>
            <p>Stay Updated with our latest</p>
            <div class="form-element d-flex align-items-center">
                <input type="text" class="input-element" placeholder="Email">
                <button class="btn"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
            </div>
        </div>
        <div class="social-links">
            <h2 class="text-center">Connects</h2>
            <div class="text-center">
                <span><i style="" class="fab fa-facebook" aria-hidden="true"></i></span>
                <span><i style="" class="fab fa-instagram" aria-hidden="true"></i></span>
                <span><i style="" class="fab fa-twitter" aria-hidden="true"></i></span>
                <span><i style="" class="fab fa-linkedin" aria-hidden="true"></i></span>
                <span><i style="" class="fab fa-youtube" aria-hidden="true"></i></span>
            </div>
        </div>
        <div class="reach-us" data-aos="fade-left" data-aos-delay="200">
            <h2>Reach Us</h2>
            <div>
                <div><a href="mailto:www.humsafar.co">www.humsafar.co</a></div>
                <div><a href="mailto:humsafarweddings@gmail.com">humsafarweddings@gmail.com</a></div>
                <div><a href="mailto:contact@humsafar.co">contact@humsafar.co</a></div>
                <div>+91 83053 77774</div>
            </div>
        </div>
    </div>

    <div class="rights"><?php bloginfo( 'name' ) ?>.co &copy; <?php echo date('Y'); ?> &nbsp;&nbsp;
        <!-- Created and Designed by the TEAM -->
    </div>
</footer>


<?php wp_footer(); ?>

</body>

</html>