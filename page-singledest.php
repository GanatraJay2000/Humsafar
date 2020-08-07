
<?php get_header(); ?>
<style>

body{
	font-family: "Myriad Pro", sans-serif;
			font-size:15px;
			letter-spacing:1.2px;
			line-height:30px;
		
}

h2,h4{
	font-family:"Playfair Display", sans-serif;
}
.columns{
	 column-count: 2;
  column-gap: 50px;

}





.g{
	
  position: relative;
  text-align: center;
  color: white;
  font-size:25px;


}


.gallery {
  justify-content: center;
  display: flex;
  flex-wrap:wrap;

}
.gallery img{
	height:270px;
	width:270px;
	border:7px solid transparent;
	
	
}
.centered {
		font-family:"Playfair Display", sans-serif;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  pointer-events:none;
}

   #imghr {
        width:100px;
        background-color: white;
	margin-left:auto;
	margin-right:auto;
		
      }
	  
.more{
			color:#b18a60 !important;
			font-weight:600;
			font-family: "Myriad Pro", sans-serif;
			font-size:15px;
			letter-spacing:1.2px;
			text-decoration:none !important;
			position:relative;
			
		}
		.more::after{
			content:'';
			display:block;
			width:0;
			height:2px;
			border-radius:4px;
			background-color:#b18a60;
			position:absolute;
			bottom:-5px;
			left:0;
			transition:ease-in-out width .3s;
		}
		.more:hover::after{
			width:100%;
		}
		
		.vv{
			font-size:20px;
		}
		
		#title {
   width: 100%; 
   text-align: center; 
   border-bottom: 1px solid #000; 
   line-height: 0.1em;
   margin: 10px 0 20px; 
   font-family:"Playfair Display", sans-serif;
   font-size:17px;
} 




#title span { 
    background:#fff; 
    padding:0 10px; 
}

.locations{
	padding:50px;
	text-align:center;
	font-size:25px;
	 font-family:"Playfair Display", sans-serif;
	 color:#b18a60 !important;
}

#gimg:hover{
	filter:brightness(20%);
}


 @media screen and (max-width : 700px) {

       .columns{
	 column-count: 1;

  text-align:justify;
}
	

    	#title {
  display:none;
} 





   }
</style>
<div class="container">
<div class="row" >
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<?php
echo do_shortcode('[smartslider3 slider="3"]');
?>
</div>
</div>
</div>


<div class="container" style="padding:30px; padding-top:50px;" >
<div class="row" >
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
<h2>Your journey starts here...</h2></br>
</div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
			<div class="columns">
Host your luxury party or dream wedding anywhere in the world. Perhaps at an international destination with beautiful weather and breath-taking views! We are a team of international wedding and party planners, with years of experience when it comes to planning the perfect wedding or event. Our distinguished portfolio means that we’ve worked at some of the most exclusive international venues around the world. Scarlet is a leading events company who will plan your party anywhere; from a luxury Yacht off the coast

 of Monte Carlo to a Grand Palace in Rajasthan. Whether you are an international client wanting to hold your event in London, or you’re looking to go abroad, we’ll organise everything so you don’t have to. From the suppliers, logistics, flights, transport to the accommodation no request is too small. Bespoke marquee for a wedding in the South of France? No problem. Private dinner at a Palazzo in Rome? Your wish is our command! Find the perfect destination for your wedding or event with us today.
<br></br><div class="more">VIEW OUR PORTFOLIO</div></br>

</div>

</div>

</div>
</div>





<div class="container" style="padding-top:30px;" >
<div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin:auto;">
<img src="http://localhost/wordpress/wp-content/uploads/2020/08/udaipur1.jpg" width="100%">
</div>


            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin:auto">
			
<h4>Luxury Wedding & Party Venues in Udaipur</h4>


<p style="font-size:13px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. </p>
<div class="more">DISCOVER MORE VENUES WITH US</div></div>
</div>
</div>

<div class="container" style="padding-top:30px;">
<div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin:auto">
	
			<h4>Explore Venice</h4>
			<p style="font-size:13px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. 
</p><div class="more">CONSIDERING OTHER DESTINATIONS?</div></div>



            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin:auto;">
<img src="http://localhost/wordpress/wp-content/uploads/2020/08/udaipur2.jpg" width="100%">



</div>
</div>
</div>
<div class="container" style="padding-top:30px;" >
<div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin:auto;">
<img src="http://localhost/wordpress/wp-content/uploads/2020/08/udaipur3.jpeg" width="100%">
</div>


            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin:auto">
			
<h4>World-Class Entertainment & Design</h4>


<p style="font-size:13px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. </p>
<div class="more">BOOK A WORLD-CLASS ACT</div></div>
</div>
</div>


<div class="container" style="padding-top:50px;">

<center>
<div class="gallery">
<div class="g">
<img id="gimg" src="http://localhost/wordpress/wp-content/uploads/2020/08/goa.jpg"><div class="centered">Goa<hr id="imghr"><div class="vv">VIEW</div></div></img>
</div>
<div class="g">
<img id="gimg" src="http://localhost/wordpress/wp-content/uploads/2020/08/udaipur.jpg"><div class="centered">Udaipur<hr id="imghr"><div class="vv">VIEW</div></div></img>
</div>
<div class="g">
<img id="gimg" src="http://localhost/wordpress/wp-content/uploads/2020/08/kerela.jpg"><div class="centered">Kerela<hr id="imghr"><div class="vv">VIEW</div></div></img>
</div>
<div class="g">
<img id="gimg" src="http://localhost/wordpress/wp-content/uploads/2020/08/andaman.jpg"><div class="centered">Andaman & Nicobar Islands<hr id="imghr"><div class="vv">VIEW</div></div></img>
</div>
</div>
<div id="title" style="padding-top:50px;"><span><b>SOME OF OUR FAVOURITE INDIAN LOCATIONS INCLUDE</b></span></div>
<div class="locations">
Goa - Udaipur - Kerela
</div>
</center>
</div>



<?php get_footer(); ?>