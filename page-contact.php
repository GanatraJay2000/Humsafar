<?php get_header('new'); ?>
<style>
body{
	overflow-x:hidden;

  font-family: "Times New Roman", Times, serif;

}



hr{
width:60px;
background-color:black;

margin:0 auto;
}

#details{
margin-left:0;
text-align:left;}




p{
margin-right:5px;
margin-left:5px;

}
.fachange{
color:white;
background-color:black;
padding:7px;
border-radius:50%;
margin:2px;}

.sm{
margin-left:0;
bottom:0;
align:left;
position: relative;
  bottom: 0;
}

/* .wpcf7-form-control {
	border:1px solid #555;
	border-radius:2px;
	padding:3px 15px !important;
}
.wpcf7-form-control:last-of-type {
	padding-bottom:0 !important;
}

.wpcf7-submit{

} */
@media only screen and (max-width: 765px) {
#details{
margin-left:auto;
text-align:center;
}
.sm{

bottom:0;
align:center;
position: relative;
padding:20px;

}

}
.frm_button_submit{
    background-color:#579af6 !important;
    color:white !important;    
border:0 !important;
}

</style>



<h1><center>Contact Us</center></h1>
<hr style="height:1px;"></hr></br>

<div class="container">

	<div class="row">
	
		
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="details">
			
			<h4>Phone & Email </h4>
				<hr id="details"></hr>
		<p><?php echo do_shortcode('[sc name="mobile_no_ent"]'); ?>  |  
        <a target="_blank" class="text-dark" href="https://<?php echo do_shortcode('[sc name=`website_link`]'); ?>">
        <?php echo do_shortcode('[sc name=`website_link`]'); ?>
        </a> 
        </br>        <a class="text-dark" href="mailto:<?php echo do_shortcode('[sc name=`mail_link_1_wed`]'); ?>">
        <?php echo do_shortcode('[sc name=`mail_link_1_ent`]'); ?>
        </a>     </br><a  class="text-dark" href="mailto:<?php echo do_shortcode('[sc name=`mail_link_2_wed`]'); ?>">
        <?php echo do_shortcode('[sc name=`mail_link_2_ent`]'); ?>
        </a>
        <br />
        <a  class="text-dark" href="mailto:<?php echo do_shortcode('[sc name="info_humsafar_mail"]'); ?>"><?php echo do_shortcode('[sc name="info_humsafar_mail"]'); ?></a>
        </p>
			
		<div class="sm">
            <a target="_blank" href="<?php echo do_shortcode('[sc name="ent_facebook"]'); ?>"><span><i style="" class="fab fa-facebook fa-1x fachange" aria-hidden="true"></i></span></a>
            <a target="_blank" href="<?php echo do_shortcode('[sc name="ent_instagram"]'); ?>"><span><i style="" class="fab fa-instagram fa-1x fachange" aria-hidden="true"></i></span></a>
            <a target="_blank" href="<?php echo do_shortcode('[sc name="ent_twitter"]'); ?>"><span><i style="" class="fab fa-twitter fa-1x fachange" aria-hidden="true"></i></span></a>
            <a target="_blank" href="<?php echo do_shortcode('[sc name="ent_linkedin"]'); ?>"><span><i style="" class="fab fa-linkedin fa-1x fachange" aria-hidden="true"></i></span></a>                
            </div>
			<div class="my-4">
                Not a Customer ? &nbsp;&nbsp;Interested in a Partnership ?<a href="<?php echo site_url('/partners'); ?>" class="ml-3 btn-sm btn btn-secondary bg-secondary text-white">Click Here</a>
            </div>
  </div>
  
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="details">
	  <center><h4>Say Hello </h4>
	<hr></hr>
	<?php echo do_shortcode( '[formidable id=1]' ); ?></div></div></br>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<iframe style="border:1px solid slate-grey" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.52844877083!2d72.82631631485215!3d19.128331987057827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDA3JzQyLjAiTiA3MsKwNDknNDIuNiJF!5e0!3m2!1sen!2sin!4v1595094090879!5m2!1sen!2sin" 
width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

</div>
</div>
</div>

<?php get_footer('new'); ?>