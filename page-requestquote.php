<?php get_header(); ?>
<style>
body{
	overflow-x:hidden;
background-color: #fff;
  font-family: "Times New Roman", Times, serif;

}

.heading {
        padding-top: 10px;
        margin-bottom: 0;
        text-align: center;
        color: #2f2e2e;
        font-size: 45px;
    }

    .heading p {
        margin: 0;
    }

    .heading h1 {
        font-family: sans-serif;
        margin: auto;
        text-align: center;
        font-size: 40px;
        max-width: 600px;
        position: relative;
        color: #b28f5e;

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
        background-color: #b28f5e;
    }

    .heading h1::before {
        left: 0;
        margin-left: 20%;
    }

    .heading h1:after {
        right: 0;
        margin-right: 20%;
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
	border-bottom:1px solid #B28F5E !important;




}

.frm_style_formidable-style.with_frm_style .frm_submit{
	text-align:Center !important;
}
.frm_style_formidable-style.with_frm_style .frm_submit button {
    background-color:#B28F5E !important;
	font-size:18px !important;
    color:white !important;
	width:20%;
	border:none !important;
	transition: transform .2s;
}


.frm_style_formidable-style.with_frm_style .frm_submit button:hover {
	transform: scale(1.1);
}

   @media screen and (max-width : 500px) {

        .heading h1::before,
        .heading h1::after {
            width: 60px;
        }
		
	
    
   }

</style>



  <div class="heading">
            <p>Request A Quote</p>
            <h1><span>*</span></h1>
        </div>
<br>
<div class="container">

	<div class="row">
	
		
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
	<center><?php echo do_shortcode( '[formidable id=3]' ); ?></center>
	

			
</div>
</div>
</div>

<?php get_footer(); ?>

