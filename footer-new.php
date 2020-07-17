</div>

<footer class="ent-footer mask">

    <div class="wrapper d-flex justify-content-around w-100 flex-wrap">
        <div class="d-flex flex-column align-items-center">
            <a href="<?php echo site_url('/entertainments'); ?>"><img class="item" style="width:70px;"
                    src="<?php echo get_template_directory_uri().'/assets_inside/white-logo.png' ?>" alt=""></a>
            <div class="item">
                Jp Road, Opposite Gurudwara, Four Bunglows, Andheri West Mumbai, Maharashtra 400053
            </div>
            <ul class="item">
                <li><a href="http://www.humsafar.co">www.humsafar.co</a> </li>
                <li><a href="mailto:info@humsafar.co">info@humsafar.co</a></li>
                <li> +91 83053 77774</li>
            </ul>
            <div class="item">
                <div class="text-lg-center">
                    <a target="_blank" href="<?php echo do_shortcode('[sc name="ent_facebook"]'); ?>"><span><i style="" class="fab fa-facebook" aria-hidden="true"></i></span></a>
                <a target="_blank" href="<?php echo do_shortcode('[sc name="ent_instagram"]'); ?>"><span><i style="" class="fab fa-instagram" aria-hidden="true"></i></span></a>
                <a target="_blank" href="<?php echo do_shortcode('[sc name="ent_twitter"]'); ?>"><span><i style="" class="fab fa-twitter" aria-hidden="true"></i></span></a>
                <a target="_blank" href="<?php echo do_shortcode('[sc name="ent_linkedin"]'); ?>"><span><i style="" class="fab fa-linkedin" aria-hidden="true"></i></span></a>
                <a target="_blank" href="<?php echo do_shortcode('[sc name="event_youtube"]'); ?>"><span><i style="" class="fab fa-youtube" aria-hidden="true"></i></span></a>
                </div>
            </div>
            <div class="rights item"><?php bloginfo( 'name' ) ?>.co @ <?php echo date('Y'); ?> &nbsp;&nbsp;
                <!-- Created and Designed by the TEAM -->
            </div>
        </div>
    </div>
    <div class="background"></div>
    <div class="overlay"></div>
</footer>
<?php wp_footer(); ?>


</body>

</html>