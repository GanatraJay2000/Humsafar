<?php get_header(); ?>
<style>

.frm_button_submit{
    background-color:#215a54 !important;
    color:white !important;    
border:0 !important;
}	
   
body{
	overflow-x:hidden;
background-color: #fff;
font-family: "Myriad Pro",sans-serif !important;
}

.heading {
        padding-top: 10px;
        margin-bottom: 0;
        text-align: center;
        color: #215a54;
        font-size: 45px;
    }

    .heading p {
        margin: 0;
    }

    .heading h1 {
        font-family: "Myriad Pro",sans-serif !important;
        margin: auto;
        text-align: center;
        font-size: 40px;
        max-width: 600px;
        position: relative;
        color: #215a54;

    }

    .heading h1::before,
    .heading h1::after {
        content: "";
        display: block;
        width: 150px;
        height: 3px;
        background: #000;
        position: absolute;
        top: 30%;
        z-index: -2;
        background-color: #215a54;
    }

    .heading h1::before {
        left: 0;
        margin-left: 20%;
    }

    .heading h1:after {
        right: 0;
        margin-right: 20%;
    }

hr{
width:60px;
background-color:#215a54;
height:1.5px;
margin:15px auto;
}

#details{
margin-left:0;
padding: 0 ;
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



.wpcf7{
	width:100%;
	height:auto;
	
	
}
.wpcf7-form{
margin:15;

}

span.wpcf7-not-valid-tip {
    display: none;
}



#contactmessege{
	height:150;


}
div.wpcf7 .ajax-loader {

margin-top:30px;
}

input[type=submit]{
	background-color:#B28F5E;
	color:white;
	padding:15 40;
	font-size:22;
	border:0px;
	margin-top:-40;
		 position: absolute;
margin-left:-50;
	

	
	
}
#contactname,#contactemail,#contactsubject,#contactmessege{
	width:100%;
	border:2px solid #B28F5E;
	font-size:14;
	padding:4;

	
	
}



::-webkit-input-placeholder { /* WebKit browsers */
color: #B28F5E;


}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
color: #B28F5E;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
color: #B28F5E; 
}
:-ms-input-placeholder { /* Internet Explorer 10+ */
color: #B28F5E;
}
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
   @media screen and (max-width : 500px) {

        .heading h1::before,
        .heading h1::after {
            width: 60px;
        }
    }
.iframe_maps{
    border:0px solid #333;border-radius:10px;box-shadow:0px 0px 3px #33333388;
}
</style>



  <div class="heading">
            <p>Contact Us</p>
            <h1><span>*</span></h1>
        </div>

<div class="container mb-5">

	<div class="row">
	
		
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="details">
			
			<h4>Phone & Email </h4>
				<hr id="details"></hr>
		<p>
        <br>
        <?php echo do_shortcode('[sc name="mobile_no_wed"]'); ?>  |  
        <a target="_blank" class="text-dark" href="https://<?php echo do_shortcode('[sc name=`website_link`]'); ?>">
        <?php echo do_shortcode('[sc name=`website_link`]'); ?>
        </a> 
        </br>
        <a  class="text-dark" href="mailto:<?php echo do_shortcode('[sc name="mail_link_1_wed"]'); ?>"><?php echo do_shortcode('[sc name="mail_link_1_wed"]'); ?></a> 
        
        </p>
			
			<div class="sm">
            <a target="_blank" href="<?php echo do_shortcode('[sc name="wedding_facebook"]'); ?>"><span><i style="" class="fab fa-facebook fa-1x fachange" aria-hidden="true"></i></span></a>
            <a target="_blank" href="<?php echo do_shortcode('[sc name="wedding_instagram"]'); ?>"><span><i style="" class="fab fa-instagram fa-1x fachange" aria-hidden="true"></i></span></a>
            <a target="_blank" href="<?php echo do_shortcode('[sc name="wedding_twitter"]'); ?>"><span><i style="" class="fab fa-twitter fa-1x fachange" aria-hidden="true"></i></span></a>
            <a target="_blank" href="<?php echo do_shortcode('[sc name="wedding_linkedin"]'); ?>"><span><i style="" class="fab fa-linkedin fa-1x fachange" aria-hidden="true"></i></span></a>                
            </div>
            
            <!-- <div class="mt-4">
                Want an estimate of the budget for the event ? <a href="<?php //echo site_url('/weddings/request-a-quote'); ?>" class="ml-3 btn-sm btn btn-secondary bg-secondary text-white">Click Here</a>
            </div>
            <div class="my-4">
                Not a Customer ? &nbsp;&nbsp;Interested in a Partnership ?<a href="<?php //echo site_url('/partners'); ?>" class="ml-3 btn-sm btn btn-outline-secondary bg-white text-secondary">Click Here</a>
            </div> -->
  </div>
  
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="details">
	  <center><h4>Say Hello </h4>
	<hr></hr>
<?php //echo do_shortcode( '[contact-form-7 id="319" title="Contact"]' ); ?></center>
<?php echo do_shortcode( '[formidable id=5]' ); ?></center>
</div></div></br>
<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  >
<h4>Head Office ( Delhi )</h4>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224279.75113561423!2d77.02630593275573!3d28.55861679104418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d023dd22ce9fd%3A0xb8e3e7b8d274f7fa!2sMahavir%20Bhawan!5e0!3m2!1sen!2sin!4v1597759951573!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
<h4>Mumbai Office</h4>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.356217069699!2d72.8509356144014!3d19.17963773702848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b701971c370f%3A0x346fa17c4b6f8f5b!2sRohini%20Building!5e0!3m2!1sen!2sin!4v1596183114830!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
<h4>Raipur Office</h4>
<iframe style="border:1px solid slate-grey" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d232.47986879284244!2d81.3227863!3d21.2049507!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x59dd171d40678beb!2sHumsafar%20Weddings%20%7C%20Best%20Wedding%20Planner%20and%20Destination%20Wedding%20Planner%20in%20budget!5e0!3m2!1sen!2sin!4v1595118914250!5m2!1sen!2sin"  
width="100%" height="300" frameborder="0" class="iframe_maps" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

</div>
</div>


<?php get_footer(); ?>

