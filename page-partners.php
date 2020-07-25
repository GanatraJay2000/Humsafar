<!-- <?php //get_header(); ?>
<center><h1 style="font-family:Playfair Display,serif;" class="display-4 mb-5">Partners</h1>
<p style="font-family:Playfair Display,serif;letter-spacing:1px;font-size:16px;">All our events are a sum total of meticulous planning, 100% dedication and great partners. If you think you reflect and reciprocate to our identity then feel free to fill the form below and send us your details. We would love to have you n our panel and recommend to families where there’s a right fit.</p>
<h1 class="display-1">
    Form
</h1>
</center>
<?php //get_footer(); ?> -->




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
	
	.caldera-grid{
		width:70%;
		margin:auto;
			align:center;
	}
.frm_forms{
    width:60% !important;
    margin: 0 auto;
}
.frm_button_submit{
    background-color:var(--primary-color) !important;
    color:#000 !important;
}	


</style>



  <div class="heading">
            <p>Become a Partner</p>
            <h1><span>*</span></h1>
        </div>
<br>
<div class="container">

	<div class="row">
	
		
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
	
	<?php echo do_shortcode( '[formidable id=2]' ); ?>
	
	

			
</div>
</div>
</div>

<?php get_footer(); ?>



