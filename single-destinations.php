
<?php get_header(); ?>
<style>

body{
	font-family: "Myriad Pro", sans-serif;
			font-size:15px;
			letter-spacing:1.2px;
			/* line-height:30px; */
		
}

h2,h4{
	font-family:"Playfair Display", sans-serif;
}
.columns{
	 column-count: 2;
  column-gap: 50px;
	letter-spacing:0.6px;
	line-height:25px;
	font-size:16px;
	word-spacing:6px;
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
			width:fit-content;
			
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

#gimg{
	transition:0.5s;
	filter:brightness(80%);
}
#gimg:hover{
	filter:brightness(40%);
}

.dest-content-image{
	 width:100%;height:400px;
}

 @media screen and (max-width : 700px) {
.dest-content-image{
	 width:100%;height:300px;
}
       .columns{
	 column-count: 1;

  text-align:justify;
}
	

    	#title {
  display:none;
} 
   }

   .content.wrapper{
	   padding:0 !important;
   }

   .destinations img{
	   height:200px;
	   width:200px;
	   border:0;
   }
   .dest-next, .dest-prev{
	   margin:25px 50px;
	   outline:0 !important;
	   border:0 !important;
	   box-shadow:0 !important;
	   font-size:30px;
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

<?php 

while( have_posts() ){ 
the_post(); 

$thumbnail_image = rwmb_meta('thumbnail_image', array( 'size' => 'large' ) );
$gallery = rwmb_meta('gallery', array( 'size' => 'large' ) );
$gallery =array_values($gallery);
$content = get_the_content();
$text = explode('-br-', $content);                

?>


<div class="container" style="padding:30px; padding-top:50px;" >
<div class="row" >
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
<h2><?php the_title(); ?></h2></br>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
<div class="columns">
<?php echo $text[0]; ?>
<!-- <br></br><a href="<?php //echo site_url('/weddings/portfolio'); ?>"  class="more">VIEW OUR PORTFOLIO</a></br> -->

</div>

</div>

</div>
</div>




<div class="container" style="padding-top:30px;">
<div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin:auto;">
<img src="<?php echo $gallery[0]['url'] ?>" class="dest-content-image">
</div>


            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin:auto">
			


<p style="font-size:13px"><?php echo $text[1]; ?></p>
<!-- <div class="more">DISCOVER MORE VENUES WITH US</div> -->
</div>
</div>
</div>

<div class="container" style="padding-top:30px;">
<div class="row d-flex flex-row-reverse">
	            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin:auto;">
<img src="<?php echo $gallery[1]['url'] ?>" class="dest-content-image">



</div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin:auto">
				
			<p style="font-size:13px"><?php echo $text[2]; ?> 
</p>
</div>




</div>
</div>
<div class="container" style="padding-top:30px;" >
<div class="row d-flex flex-row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin:auto;">
<img src="<?php echo $gallery[2]['url'] ?>" class="dest-content-image">
</div>


            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin:auto">		

<p style="font-size:13px"><?php echo $text[3]; ?></p>
<!-- <div class="more">BOOK A WORLD-CLASS ACT</div> -->
</div>
</div>
</div>


<div class="container" style="padding-top:50px;">

<center class="mb-5">
	<h5 class="locations">View Other Locations</h5>
	<div class="destinations-carousel">
<div class="owl-carousel owl-theme destinations">
<?php $destinations = new WP_Query(array(
'post_type'=>'destinations',
'meta_key' => 'order',
'orderby' => 'meta_value_num',
'order' => 'ASC',
'meta_query' => array(
    array(
        'key' => 'destination_type',
        'compare' => '==',
        'value' => 'Traditional',   
    ),
),
));
$i=0; 
while( $destinations->have_posts() ){ 
$destinations->the_post(); 
 $thumbnail = rwmb_meta('image_on_destination_page', array( 'size' => 'large' ) );
?>
<div>
	<a href="<?php the_permalink(); ?>">
		<div class="g">
			<?php foreach ( $thumbnail as $image ) {?>		   
			<img id="gimg" src="<?php echo $image['url'] ?>">
			<?php } ?>		
			<div class="centered">
				<?php the_title(); ?>
				<hr id="imghr">
				<div class="vv">VIEW</div>
			</div>
		</div>
	</a>
</div>
	<?php } ?>
</div>
<div class="dest-nav">
    <div class="dest-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
    <div class="dest-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
</div>
</div>
</center>
</div>

<?php } ?>

<?php get_footer(); ?>



<!-- 
	<div class="gallery mb-5">
<div class="g">
<img id="gimg" src="<?php echo get_template_directory_uri() . '/images/goa.jpg' ?>"><div class="centered">Goa<hr id="imghr"><div class="vv">VIEW</div></div></img>
</div>
<div class="g">
<img id="gimg" src="<?php echo get_template_directory_uri() . '/images/udaipur.jpg' ?>"><div class="centered">Udaipur<hr id="imghr"><div class="vv">VIEW</div></div></img>
</div>
<div class="g">
<img id="gimg" src="<?php echo get_template_directory_uri() . '/images/kerela.jpg' ?>"><div class="centered">Kerela<hr id="imghr"><div class="vv">VIEW</div></div></img>
</div>
<div class="g">
<img id="gimg" src="<?php echo get_template_directory_uri() . '/images/andaman.jpg' ?>"><div class="centered">Andaman & Nicobar Islands<hr id="imghr"><div class="vv">VIEW</div></div></img>
</div>
</div>
 -->