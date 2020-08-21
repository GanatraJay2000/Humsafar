<?php get_header(); ?>

<style>
body{
overflow-x:hidden;}




.with_frm_style input[type=text],.with_frm_style input[type=email], .with_frm_style input[type=number],.with_frm_style input[type=tel],.with_frm_style select{


  	font-size:12px !important;
    box-shadow: none !important;
	border:none !important;
    background: transparent !important;
	border:1px solid silver !important;
	height:50px;
	width:100%;
	



}

.frm_primary_label{
display:none !important;

}


#titlereg{
	   font-family:"Playfair Display", sans-serif;
   font-size:30px;
  padding:20px;
}



.frm_style_formidable-style.with_frm_style .frm_submit{
	text-align:right !important;
}
.frm_style_formidable-style.with_frm_style .frm_submit button {
    background-color:grey !important;
	font-size:18px !important;
    color:white !important;
	width:20%;
	border:none !important;
	
	transition: transform .2s;
	
}


.frm_style_formidable-style.with_frm_style .frm_submit button:hover {
	transform: scale(1.1);
}



.with_frm_style textarea::placeholder,.with_frm_style input[type=text]::placeholder,.with_frm_style input[type=email]::placeholder,.with_frm_style input[type=number]::placeholder,.with_frm_style input[type=tel]::placeholder{
	color:#5b5b5b;
}
   @media screen and (max-width : 500px) {


	.frm_style_formidable-style.with_frm_style .frm_submit button {
		width:100%;
	}
	

    
   }
</style>
<div class="container" style=" text-align:center;">
<div class="row" >
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="titlereg">
REGISTRATION FORM
</div></div>
<div class="row" >
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
			<?php echo do_shortcode( '[formidable id=7]' ); ?>
</div>
</div>
</div>
<?php get_footer(); ?>
