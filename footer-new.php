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
                <li><a target="_blank" href="https://<?php echo do_shortcode('[sc name="website_link"]'); ?>"><?php echo do_shortcode('[sc name="website_link"]'); ?></a></li>
                <li><a href="mailto:<?php echo do_shortcode('[sc name="mail_link_1_wed"]'); ?>"><?php echo do_shortcode('[sc name="mail_link_1_ent"]'); ?></a></li>
                <li><?php echo do_shortcode('[sc name="mobile_no_ent"]'); ?></li>
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