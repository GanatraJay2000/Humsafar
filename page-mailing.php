

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
        color: #2f2e2e;
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
		width:100%;
	margin:0;
	background-color:transparent;
			
	}



.caldera-grid .form-group label {
display:none;
	
	
}







.caldera-grid .form-control{
	
	height:40px !important;
  	font-size:17px !important;
    box-shadow: none !important;
	
    background: white !important;
	border:1px solid black !important;



}



#fld_3918970_1{
	 background-color:transparent !important;
	font-size:15px !important;
    color:#FFE375 !important;
	border:1px solid #FFE375 !important;
	padding:3px !important;
	
}

  

</style>




			
	<?php echo do_shortcode( '[caldera_form id="CF5f1b9632f19a4"]' ); ?>
	

			

<?php get_footer(); ?>

