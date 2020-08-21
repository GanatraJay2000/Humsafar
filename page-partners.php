<!-- <?php //get_header(); ?>
<center><h1 style="font-family: "Myriad Pro", Playfair Display,serif;" class="display-4 mb-5">Partners</h1>
<p style="font-family: "Myriad Pro", Playfair Display,serif;letter-spacing:1px;font-size:16px;">All our events are a sum total of meticulous planning, 100% dedication and great partners. If you think you reflect and reciprocate to our identity then feel free to fill the form below and send us your details. We would love to have you n our panel and recommend to families where there’s a right fit.</p>
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
  font-family: "Myriad Pro",  "Times New Roman", Times, serif;

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
        font-family: "Myriad Pro",  sans-serif;
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
    background-color:#215a54 !important;
    color:white !important;    
border:0 !important;


}	
@media screen and (max-width:600px){
    .frm_forms{
        width:100% !important;
    }
}

</style>



  <div class="heading">
            <p>Become a Partner</p>
            <h1><span>*</span></h1>
        </div>
<br>
<div class="container mb-5">

	<div class="row">
	
		
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
	
	<?php echo do_shortcode( '[formidable id=2]' ); ?>
	
	

			
</div>
</div>
</div>

<?php get_footer(); ?>



