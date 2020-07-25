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

	.frm_form_fields {
		width:100%;
		margin:auto;
	}




.frm_form_field.frm_left_container .frm_primary_label{
font-size:14px !important;

}




.with_frm_style input[type=text],.with_frm_style input[type=email], .with_frm_style input[type=number],.with_frm_style select,.with_frm_style input[type=tel]{
	/* text-align:center; */

  	font-size:13px !important;
    box-shadow: none !important;
	border:none !important;
    background: transparent !important;
	border-bottom:1px solid black !important;




}

.frm_style_formidable-style.with_frm_style .frm_submit{
	text-align:Center !important;
}
.frm_style_formidable-style.with_frm_style .frm_submit button {
    background-color:black !important;
	font-size:18px !important;
    color:white !important;
	
	border:none !important;
	transition: transform .2s;
}


.frm_style_formidable-style.with_frm_style .frm_submit button:hover {
	transform: scale(1.1);
}


</style>



<h1><center>Book Artist</center></h1>
<hr style="height:1px;"></hr><br><br>

<div class="container">

	<div class="row">
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
       <center>    
<?php echo do_shortcode( '[formidable id=4]' ); ?></center>



</div>
</div>
</div>

<?php get_footer('new'); ?>