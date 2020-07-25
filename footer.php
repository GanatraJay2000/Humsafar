</div>
<style>
div.newsletter p{
    margin:0 !important; 
    margin-bottom:5px !important;
}
.site-footer .caldera-grid{
width:100% !important;
margin:0 !important;
background-color:transparent !important ;
    
}
.site-footer .caldera-grid .form-group label {
display:none !important;
}
.site-footer .caldera-grid .form-control{
	
	height:35px !important;
  	font-size:17px !important;
    box-shadow: none !important;
    background: white !important;
	border:1px solid black !important;
}
.site-footer .caldera-grid .form-group, .cf-color-picker .form-group {
    margin-bottom: 0px !important;
}
.site-footer .caldera-grid .btn.btn-default{
	 background-color:transparent !important;
	font-size:13px !important;
    color:#FFE375 !important;
	border:1px solid #FFE375 !important;
    padding:3px 10px !important;
    margin-top:0 !important;
    width:fit-content;
	
}
</style>
<?php $logos = new WP_Query(array(
    'post_type'=>'page',    
));
$i=0; 
$post_id = 5;
$slide_2 = rwmb_meta('slide_2', array( 'size' => 'large' ) , $post_id);
?>
<div class="text-center">
    <div class="carousel owl-carousel owl-theme text-dark">
    


<?php 
foreach ( $slide_2 as $image ) {?>
    <div class="block">
        <img src="<?php echo $image['url'] ?>" alt="">                
    </div>
<?php } ?> 
    </div>
</div>

<footer class="site-footer">
    <div class="wrapper">
        <div class=" text-lg-center">
            <div class=" text-lg-center">
                <h2>Explore</h2>
            </div>
            <nav class="site-nav text-lg-center">
                <?php
            $args = array(
                'theme_location'=>'footer',
            );
            wp_nav_menu($args);      
            ?>
            </nav>
        </div>
        <div class="newsletter " data-aos="fade-right" data-aos-delay="300">
            <div>
                <h2>Join Mailing List</h2>
            </div>
            <p>Stay Updated with our latest</p>
            <!-- <form action="add_to_mail_list.php" method="POST" class="form-element d-flex align-items-center">
                <input type="email" maxlength="100" name="email" required class="input-element" placeholder="Email">
                <button type="submit" class="btn"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
            </form> -->
            <?php echo do_shortcode( '[caldera_form id="CF5f1b9632f19a4"]' ); ?>
        </div>
        <div class="social-links text-lg-center">
            <div>
                <h2>Connects</h2>
            </div>
            <div>
                <a target="_blank" href="<?php echo do_shortcode('[sc name="wedding_facebook"]'); ?>"><span><i style="" class="fab fa-facebook" aria-hidden="true"></i></span></a>
                <a target="_blank" href="<?php echo do_shortcode('[sc name="wedding_instagram"]'); ?>"><span><i style="" class="fab fa-instagram" aria-hidden="true"></i></span></a>
                <a target="_blank" href="<?php echo do_shortcode('[sc name="wedding_twitter"]'); ?>"><span><i style="" class="fab fa-twitter" aria-hidden="true"></i></span></a>
                <a target="_blank" href="<?php echo do_shortcode('[sc name="wedding_linkedin"]'); ?>"><span><i style="" class="fab fa-linkedin" aria-hidden="true"></i></span></a>
                <a target="_blank" href="<?php echo do_shortcode('[sc name="event_youtube"]'); ?>"><span><i style="" class="fab fa-youtube" aria-hidden="true"></i></span></a>
            </div>
            <div class="mt-3">
            <a href="<?php echo do_shortcode('[sc name="weddings_wedmegood"]'); ?>" target="_blank" >       
            <?php require 'wedmegoodlogo.php'; ?>
            </a> 
            </div>
        </div>
        <div class="reach-us text-lg-center" data-aos="fade-left" data-aos-delay="200">
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