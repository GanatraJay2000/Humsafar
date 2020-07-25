

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

.caldera-grid .form-group {
display:flex;
width:100%;

}


.caldera-grid .form-group label {
	width:100%;
		font-size:15px;
	font-family: basic,sans-serif;
font-weight:normal;
	
	
}


.caldera-grid .form-group >div{

width:100%;
	
}




.caldera-grid .form-control{
	width:100%;
	height:30px !important;
  	font-size:17px !important;
    box-shadow: none !important;
	border:none !important;
    background: transparent !important;
	border:1px solid #B28F5E !important;



}
.caldera-grid .btn {
    background-color:#B28F5E !important;
	font-size:20px !important;
    color:white !important;
	
	
}

.caldera-grid input[type=submit]{
	font-size:20px !important;
	transition: transform .2s;
	width:100%;
	margin-top:100px !important;
	
}
.caldera-grid input[type=submit]:hover{
	transform: scale(1.1);
	
}


.caldera-grid .form-control.cf2-file
{
	border:0px !important;
}

.caldera-grid ul.cf2-list-files .cf2-file-listed .cf2-file-control{
	font-size:10px;
margin-bottom:30px;

}
.caldera-grid .form-control.cf2-file .btn{
background-color:transparent !important;
	border:2px solid #B28F5E !important;
	color:#B28F5E !important;
	font-size:13px !important;
	height:100px;

	
	




}

   @media screen and (max-width : 900px) {


	.caldera-grid .form-group {
display:block;
	
}
   }



   @media screen and (max-width : 500px) {

        .heading h1::before,
        .heading h1::after {
            width: 60px;
        }
		
			.caldera-grid{
		width:100%;
		
	}
	
	.caldera-grid .form-group {
display:block;
	
}
   }
   
     @media screen and (max-width : 350px){
		    .heading h1::before,
        .heading h1::after {
            width: 60px;
        }
		
			.caldera-grid{
		width:100%;
		
	}
	
	.caldera-grid .form-group {
display:block;
	
}

.caldera-grid .form-control{


  	font-size:12px !important;
    



}
   
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
			
	<!-- <?php //echo do_shortcode( '[caldera_form id="CF5f1b5b815dc39"]' ); ?> -->
	<?php echo do_shortcode( '[contact-form-7 id="280" title="Partner"]' ); ?>
	

			
</div>
</div>
</div>

<?php get_footer(); ?>

