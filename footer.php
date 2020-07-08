</div>

<div class="text-center">
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
            <div>
                <h2>Explore</h2>
            </div>
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
            <div>
                <h2>Join Mailing List</h2>
            </div>
            <p>Stay Updated with our latest</p>
            <form action="add_to_mail_list.php" method="POST" class="form-element d-flex align-items-center">
                <input type="email" maxlength="100" name="email" required class="input-element" placeholder="Email">
                <button type="submit" class="btn"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
            </form>
        </div>
        <div class="social-links">
            <div>
                <h2 class="text-lg-center">Connects</h2>
            </div>
            <div class="text-lg-center">
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
                <div><a href="https://www.humsafar.co">www.humsafar.co</a></div>
                <div><a href="mailto:weddings@humsafar.co">weddings@humsafar.co</a></div>
                <div>+91 83053 77774</div>
            </div>
        </div>
    </div>

    <div class="rights"><?php bloginfo( 'name' ) ?>.co @ <?php echo date('Y'); ?> &nbsp;&nbsp;
        <!-- Created and Designed by the TEAM -->
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>