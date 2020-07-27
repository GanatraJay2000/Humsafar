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

.tnp-subscription input[type=text], .tnp-subscription input[type=email], .tnp-subscription input[type=submit], .tnp-subscription select {
    height:fit-content !important;
}
.modal{
    height:auto !important;
}
/* @media screen and (max-width:600px){
.modal .close{
    right:5px;
}
} */

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
            <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModal">
                Newsletter
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
            <span aria-hidden="true">&times;</span>
        </button>
                <div class="modal-dialog" role="document">                
                    <div class="modal-content">       
                        <div class="modal-header bg-secondary">
                        <h5 class="modal-title">Subscribe to Newsletter</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span class="text-white" aria-hidden="true">&times;</span>
        </button>
                        </div>                  
                    <div class="modal-body bg-secondary">
                    <?php echo do_shortcode( '[newsletter]' ); ?>
                    </div>     
                    </div>
                </div>
            </div>
            
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
                <div><a target="_blank" href="https://<?php echo do_shortcode('[sc name="website_link"]'); ?>"><?php echo do_shortcode('[sc name="website_link"]'); ?></a></div>
                <div><a href="mailto:<?php echo do_shortcode('[sc name="info_humsafar_mail"]'); ?>"><?php echo do_shortcode('[sc name="info_humsafar_mail"]'); ?></a></div>
                <div><?php echo do_shortcode('[sc name="mobile_no_wed"]'); ?></div>
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