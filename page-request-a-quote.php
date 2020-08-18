<?php get_header(); ?>
<style>
body{
	overflow-x:hidden;
background-color: #fff;
  font-family: "Myriad Pro",  "Times New Roman", Times, serif;

}
.content.wrapper{
  width:80% !important;
  margin: 0 auto !important;
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
		width:60%;
	}

.caldera-grid .form-group {

padding:10px;
	text-align:left;
	
}


.caldera-grid .form-group label {
  width:100%;
		font-size:15px;
	font-family: "Myriad Pro",  basic,sans-serif;
font-weight:normal;
	
	
}
.caldera-grid .form-group >div{
width:100%;

	
}
.caldera-grid select {
 text-align-last: center;
	font-size:1px !important;
padding:0 !important;
	
}




.caldera-grid .form-control{
	/* text-align:center; */
	height:30px !important;
  	font-size:17px !important;
    box-shadow: none !important;
	border:none !important;
    background: transparent !important;
	border-bottom:1px solid #B28F5E !important;



}
.caldera-grid .btn {
    background-color:#B28F5E !important;
	font-size:18px !important;
    color:white !important;
}
.cfdatepicker th, td{
	font-size:12px;
	
}
.caldera-grid ul.cf2-list-files .cf2-file-listed .cf2-file-control{
	font-size:10px;
	
	margin-bottom:30px;
}
.caldera-grid .form-control.cf2-file .btn{
background-color:grey !important;
	border:none !important;
}
.caldera-grid .breadcrumb:before,
.caldera-grid .breadcrumb:after {
 background-color:white;
}

.caldera-grid .breadcrumb {
 background-color:transparent !important;
}

.caldera-grid .breadcrumb li {
  background-color: white;
  width: 25%;
  padding: 10px 10px;
	text-align:center;
  float: left;
  border-bottom: 3px solid #D2BDA0;
	font-size:18px;


}

.caldera-grid .breadcrumb li.active {
  border-bottom: 3px solid black;
}

.caldera-grid .breadcrumb li a {
  color: #B28F5E;
}

.caldera-grid .breadcrumb li a:hover {
  color: #444 !important;
  text-decoration: none;
}



   @media screen and (max-width : 1000px) {
     .content.wrapper{
  width:100% !important;
  margin: 0 auto !important;
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
	
	.caldera-grid .breadcrumb li {
  background-color: transparent;
  width: 25%;
  padding: 5px 5px;
	text-align:center;
  float: left;
  border-bottom: 3px solid #B28F5E;
	font-size:12px;



    }
   }

   .frm_button_submit{
    background-color:#e1b258 !important;
    color:white !important;    
border:0 !important;
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

