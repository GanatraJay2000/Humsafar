<?php get_header(); ?>
<link href="https://fonts.googleapis.com/css2?family=Rufina&display=swap" rel="stylesheet">

<style>	

		.page-numbers{
			color: black !important;			
			padding: 5px 10px;
			border-radius: 5px;
			margin: 0 5px;
			text-decoration:none !important;
		}
		.page-numbers:hover{			
			color:#cd924e !important;			
		}
		.page-numbers.current{
			color:white !important;
			border-radius:100px;
			background-color:#cd924e !important;
		}
		.page-numbers.current:hover{			
					
		}	
		body{
			background-color:#fff;
		}
		.heading-title{
			margin:60px 0 80px;
		}
		.heading-title h1{
			font-family:"Batang", serif;
		}
		.heading-title p{
			margin-top:5px;
			font-family:"Myriad Pro", sans-serif;
			font-size:18px;
		}
		.blog-post{						
			margin:0;
			margin-bottom:30px;
		}
		.blog-post .image{
			position:relative;
			width:100%;						
			cursor:pointer;	
		}
		.blog-post img{
			width:100%;
			height:400px;							
			transition:0.5s;
			position:relative;
			cursor:pointer;
		}


		.blog-post .image::after{
			position:absolute;
			top:0;
			left:0;
			display:block;
			opacity:0;
			cursor:pointer;
			content:'Read More...';
			display:grid;
			place-items:center;
			font-family:"Raleway", sans-serif;
			letter-spacing:1px;
			word-spacing:5px;
			font-size:32px;
			width:100%;
			height:100%;
			background-color:#11111bcc;
			pointer-events:none;
			color:white;
			transition:0.6s;
		}
		.blog-post .image:hover::after{
			opacity:1;
		}

		p.title a{
			color: #111111dd;
			text-decoration:none !important;
			font-size:28px;
			font-weight:500;
			font-family:"Rufina", serif;
			letter-spacing:1px;
			line-height:1.3em;
			transition:0.3s;
		}
		p.title a:hover{
			color:#b18a60;
		}
		p.content{
			font-family: "Myriad Pro", sans-serif;
			font-size:16px;
			letter-spacing:1.2px;
			word-spacing: 5px;
			font-weight:200;
		}
		.read-more{
			color:#b18a60 !important;
			font-weight:600;
			font-family: "Myriad Pro", sans-serif;
			font-size:17px;
			letter-spacing:1.2px;
			text-decoration:none !important;
			position:relative;
			
		}
		.read-more::after{
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
		.read-more:hover::after{
			width:100%;
		}

		@media screen and (max-width:768px){
			.blog-post{
				padding:0;
				margin-bottom:50px;
			}
		}
		@media screen and (max-width:400px){
			.heading-title h1{
				font-size:32px;
			}
			.blog-post img{				
			height:240px;			
		}
		}
	</style>

	<div class="post-part">
		<center>
			<div class="heading-title">
<h1>Event & Wedding Planning Blog</h1>   
<p>Real weddings, inspiration, ideas and useful planning advice to create your event your way</p>
</div>
</center>


<div class="d-flex flex-wrap justify-content-between">
<?php $i=0; while(have_posts()) {
    the_post(); 
    $thumbnail_image = rwmb_meta('thumbnail_image', array( 'size' => 'large' ) );
		if($i==0 and $paged==0){
?>
<div class="col-12 blog-post d-flex flex-wrap align-items-center">	
	<div class="col-lg-8 col-md-6 col-12 p-0 image">
		<?php foreach ( $thumbnail_image as $image ) {?>
            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image['url'] ?>" alt=""></a>
		<?php } ?>		
	</div>			
	<div class="col-lg-4 col-md-6 col-12 pl-lg-5 p-0 mt-4">
		<p class="title">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</p>
		<p class="content">
		<?php echo wp_trim_words(get_the_content(), 35); ?>
		</p>

		<a class="read-more" href="<?php the_permalink(); ?>">-Read More</a>
	</div>
</div>
<?php
		}else{
?>
	
	<div class="col-md-6 col-12 blog-post">	
		<div class="image">
		<?php foreach ( $thumbnail_image as $image ) {?>
            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image['url'] ?>" alt=""></a>
		<?php } ?>		
		</div>			
		<p class="title mt-4">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</p>
		<p class="content">
		<?php echo wp_trim_words(get_the_content(), 35); ?>
		</p>

		<a class="read-more" href="<?php the_permalink(); ?>">-Read More</a>
	</div>

<?php
		}
    ?>
<?php $i++; } 
?>
</div>
<center>
<div class="paginations m-5">


<?php echo paginate_links( array(

'prev_text' => '<span><i class="fa fa-chevron-left" aria-hidden="true"></i></span>',
'next_text' => '<span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>'

)); ?>
</div>
				</center>
<?php

?>		
	</div>
    <?php get_footer(); ?>
