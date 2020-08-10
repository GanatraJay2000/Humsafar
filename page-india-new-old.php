




<?php get_header(); ?>
<style>
.columns{
	 column-count: 2;
  column-gap: 50px;
  text-align:justify;
}

#l{

margin:auto;

}



.g{
	
  position: relative;
  text-align: center;
  color: white;
  font-size:25px;
text-shadow: 1px 1px grey;
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
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

img:hover{
filter: brightness(20%); 
}
 @media screen and (max-width : 700px) {

       .columns{
	 column-count: 1;

  text-align:justify;
}
		

    
   }
</style>
<div class="container">
<div class="row" >
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>
</div>
</div>
</div>

<div class="container" style="padding:30px" >
<div class="row" >
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
<h2>Your journey starts here...</h2></br>
</div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
			<div class="columns">
Host your luxury party or dream wedding anywhere in the world. Perhaps at an international destination with beautiful weather and breath-taking views! We are a team of international wedding and party planners, with years of experience when it comes to planning the perfect wedding or event. Our distinguished portfolio means that we’ve worked at some of the most exclusive international venues around the world. Scarlet is a leading events company who will plan your party anywhere; from a luxury Yacht off the coast

 of Monte Carlo to a Grand Palace in Rajasthan. Whether you are an international client wanting to hold your event in London, or you’re looking to go abroad, we’ll organise everything so you don’t have to. From the suppliers, logistics, flights, transport to the accommodation no request is too small. Bespoke marquee for a wedding in the South of France? No problem. Private dinner at a Palazzo in Rome? Your wish is our command! Find the perfect destination for your wedding or event with us today.
</div>
</div>
</div>
</div>
<hr>
<div class="container">
<center>
<div class="gallery">
<div class="g">
<img src="<?php echo get_template_directory_uri() . '/images/goa.jpg' ?>"><div class="centered">Goa</div>
</div>
<div class="g">
<img src="<?php echo get_template_directory_uri() . '/images/udaipur.jpg' ?>"><div class="centered">Udaipur</div>
</div>
<div class="g">
<img src="<?php echo get_template_directory_uri() . '/images/kerela.jpg' ?>"><div class="centered">Kerela</div>
</div>
<div class="g">
<img src="<?php echo get_template_directory_uri() . '/images/andaman.jpg' ?>"><div class="centered">Andaman & Nicobar Islands</div>
</div>
</div>
</center>
</div>
<hr>
<div class="container" >
<div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin:auto; padding:10px">
<img src="http://localhost/wordpress/wp-content/uploads/2020/08/dest.jpg" width="100%">
</div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin:auto;padding:10px;">
<h2>Destination Parties</h2>


Scarlet Events are experienced in organising a vast range of events in different locations across the World. We have become accustomed to local culture and customs in many countries, and are proud of our black book of foreign venues and contacts. We’ll ensure that your event is delivered with a World-class finish, irrespective of size or location.
</div>
</div>
</div>
<hr>
<div class="container" >
<div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin:auto; padding:10px;">
			<h2>Destination Weddings</h2>
			Marriage laws vary from country to country and we can take the stress out of organising the paperwork. Our destination wedding planners will work with the local government to legalise your marriage in the location of your choice and organise a translator, whether in English, Chinese or other. Organising a wedding can be challenging for most couples and organising one abroad even more so. Scarlet has the experience in destination weddings and whatever the request, wherever the location, we are here to make it happen.

</div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin:auto;padding:10px;">
<img src="http://localhost/wordpress/wp-content/uploads/2020/08/destination2.jpg" width="100%">



</div>
</div>
</div>

<?php get_footer(); ?>



