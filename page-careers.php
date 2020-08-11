<?php get_header(); ?>

<style>
body{
overflow-x:hidden;}

		#title {
   width: 100%; 
   text-align: center; 
   border-bottom: 1px solid #000; 
   line-height: 0.1em;
   margin: 10px 0 20px; 
   font-family:"Playfair Display", sans-serif;
   font-size:35px;
  
} 


.with_frm_style input[type=text],.with_frm_style input[type=email], .with_frm_style input[type=number],.with_frm_style input[type=tel]{


  	font-size:15px !important;
    box-shadow: none !important;
	border:none !important;
    background: transparent !important;
	border:1px solid silver !important;
	height:50px;
	width:100%;



}


.frm_form_field.frm_left_container .frm_primary_label{
display:none !important;

}

.with_frm_style input[type=text] placeholder{
	color:black;
}

.with_frm_style textarea{
		font-size:15px !important;
    box-shadow: none !important;
	border:none !important;
    background: transparent !important;
	border:1px solid silver !important;
	height:150px !important;
	width:100%;
}



#title span { 
    background:#fff; 
    padding:0 10px; 
}

#careerp{
	 font-family:"Playfair Display", sans-serif;
   font-size:23px;
   margin-top:20px;
	margin-left:120px;
	margin-right:120px;
   text-align:Center;
}

#cform{
	width:60%;
}
.frm_style_formidable-style.with_frm_style .frm_submit{
	text-align:Center !important;
}
.frm_style_formidable-style.with_frm_style .frm_submit button {
    background-color:#e1b258 !important;
	font-size:18px !important;
    color:white !important;
	width:20%;
	border:none !important;
	border-radius:50px !important;
	transition: transform .2s;
	
}


.frm_style_formidable-style.with_frm_style .frm_submit button:hover {
	transform: scale(1.1);
}

.frm_style_formidable-style.with_frm_style textarea::placeholder{
	color:#5b5b5b;
}

.with_frm_style textarea::placeholder,.with_frm_style input[type=text]::placeholder,.with_frm_style input[type=email]::placeholder,.with_frm_style input[type=number]::placeholder,.with_frm_style input[type=tel]::placeholder{
	color:#5b5b5b;
}
   @media screen and (max-width : 500px) {

    #cform{
	width:100%;
}
	.frm_style_formidable-style.with_frm_style .frm_submit button {
		width:100%;
	}
	
	#careerp{
	 font-family:"Playfair Display", sans-serif;
   font-size:23px;
   margin-top:20px;
	margin-left:auto;
	margin-right:auto;
   text-align:Center;
}
    
   }
</style>

<div class="container" style="padding:20px; text-align:center;">
<div class="row" >
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
<div id="title"><span><b>Careers</b></span></div>
</div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
		  <p id="careerp">For career opportunities with Humsafar Weddings & Co., please fill in the details below and our team will get in touch.</p>
</div>
</div>
</div>
<div class="container" style=" text-align:center" id="cform">
<div class="row" >
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
<?php echo do_shortcode( '[formidable id=6]' ); ?>
</div>
</div>
</div>


<?php get_footer(); ?>