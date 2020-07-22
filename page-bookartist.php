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
	font-family: basic,sans-serif;
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
	text-align:center;
	height:30px !important;
  	font-size:17px !important;
    box-shadow: none !important;
	border:none !important;
    background: transparent !important;
	border-bottom:1px solid black !important;



}
.caldera-grid .btn {
    background-color:black !important;
	font-size:18px !important;
    color:white !important;
	align:center;
}
.cfdatepicker th, td{
	font-size:12px;
	
}

div#fld_4617457_1-wrap.form-group{
text-align:Center;}

   @media screen and (max-width : 500px) {

      .caldera-grid{
		width:100%;
	}
    }

</style>



<h1><center>Book Artist</center></h1>
<hr style="height:1px;"></hr><br><br>

<div class="container">

	<div class="row">
	
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">	
       <center>    
<?php echo do_shortcode( '[caldera_form id="CF5f178516e74f3"]' ); ?></center>



</div>
</div>
</div>

<?php get_footer('new'); ?>