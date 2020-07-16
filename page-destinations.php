 <?php get_header(); ?>





	<style>
a{
	text-decoration:none !important;
	color:#333 !important;
}
a:hover{
	color:#b28f5e !important;
}


		.col-text {
    height: 15em;
 !important}

.grid-flex {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-flex: 1;
    -webkit-flex-grow: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    flex-direction: row;
    -webkit-flex-direction: row;
    -webkit-flex-wrap: wrap;
    -webkit-justify-content: space-around;
}


.col {
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
}

.col-left {
    -webkit-box-ordinal-group: -1;
    -webkit-order: -1;
    -ms-flex-order: -1;
    order: -1;
}

.col-text {
    display: flex;
    justify-content: center;
}

.Aligner-item {
    width: 70%;
}

.col-image {
    background-size: cover;
    background-position: center center;
}

.mybox{
    padding: 50px 50px 50px 50px;
}

.myheading{
    text-align:center;
    font-size:22px;
    font-family: playfair display,serif ;
}

.playfair {
    font-family: Playbill;
} 
.mypara{
    font-size:14px;
    color:dimgray;
    font-style:italic
}

.title {
    font-size: 45px;
    font-family: playfair display,serif;
}
.sideheading{
	padding-top:5px;
    font-size: 25px;
    font-family: playfair display,serif;
}
.sideheading2{
    text-align:center;
    font-size: 12px;
    font-family: playfair display,serif;
    color:dimgrey;
}
.sideheading3{
    text-align:center;
    font-size:20px;
    font-family: playfair display,serif;
    color:darkslategrey;
}
.sideheading.sideheading{
	font-size:38px;
}

.lastpara{
font-family:"Playfair Display", serif;
font-size:16px;
letter-spacing:.75px;
}


@media (max-width: 1080px) {
	.Aligner-item {
    width: 100% !important;
}
}
@media (max-width: 780px) {
    .grid-flex {
        height: 40em;
        display: -webkit-flex;
        -webkit-flex-direction: column;
        flex-direction: column;
    }

    .col {
        order: vertical;
    }

    .col-left {
        -webkit-box-ordinal-group: 0;
        -webkit-order: 0;
        -ms-flex-order: 0;
        order: 0;
    }

    .col-text div p {
        padding:0 !important;
    }

    .Aligner-item {
        width: 90%;
    }
}

@media (max-width: 650px) {
	.mybox{
    padding: 0px !important;
}
.myheading h1{
	font-size:22px;
}
.sideheading h2, .sideheading2 h2, .sideheading3 h2{
	font-size:22px;
}
}

	</style>
</head>
<body>
    <div class="myheading">
        <h1>TIMELESS AND EXCLUSIVE</h1>
    </div>
    <div class="sideheading2">
        <h2>
            THE AESTHETIC OF HUMSAFAR WEDDINGS IS
            ONE GLAMOUR ELEGANCE.
        </h2>
    </div>
    <!--Griglia alternata testo e immagine, resposive con flexbox.-->
    <div class="mybox">
    <section class="heading mt-5">
            MODERN LUXURY LOCATIONS</p>
			<h1><span>*</span></h1>
</section>
<section>	
<?php $destinations = new WP_Query(array(
    'post_type'=>'destinations',
    'meta_key' => 'order',
    'orderby' => 'meta_value_num',
	'order' => 'ASC',
	'meta_query' => array(
        array(
            'key' => 'destination_type',
            'compare' => '==',
            'value' => 'Modern',   
		),
	),
));
$i=0; 
while( $destinations->have_posts() ){ 
$destinations->the_post(); 
$image_on_destination_page = rwmb_meta('image_on_destination_page', array( 'size' => 'large' ) );
?>
<a href="<?php the_permalink(); ?>">
<div class="grid-flex">
<?php 
foreach ( $image_on_destination_page as $image ) {?>
<div class="col col-image" style="background-image: url(<?php echo $image['url'] ?>);">
</div>						
<?php } ?> 
<div class="col col-text<?php if($i%2 == 1) {echo " col-left";} ?>
">
<div class="Aligner-item">
<div class="sideheading">
<?php the_title(); ?>
</div>
<p class="mypara">
&ldquo;<?php echo rwmb_meta('text_on_destination_page'); ?>&rdquo;
</p>
</div>
</div>
</div>
</a>
<?php $i++; } ?>
</section>

                
				    <section class="heading mt-5">
						TRADITIONAL LUXURY LOCATIONS</p>
							<h1><span>*</span></h1>
					</section>
<section>
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
$image_on_destination_page = rwmb_meta('image_on_destination_page', array( 'size' => 'large' ) );
?>
<a href="<?php the_permalink(); ?>">
<div class="grid-flex">
<?php 
foreach ( $image_on_destination_page as $image ) {?>
<div class="col col-image" style="background-image: url(<?php echo $image['url'] ?>);">
</div>						
<?php } ?> 
<div class="col col-text<?php if($i%2 == 1) {echo " col-left";} ?>
">
<div class="Aligner-item">
<div class="sideheading">
<?php the_title(); ?>
</div>
<p class="mypara">
&ldquo;<?php echo rwmb_meta('text_on_destination_page'); ?>&rdquo;
</p>
</div>
</div>
</div>
</a>
<?php $i++; } ?>
</section>

<div class="grid-flex mt-5">
	<div class="col-5 sideheading lastheading">
		<i> You will never wish to forget an unforgettable memory of your wedding.</i>
	</div>
	<div class="col-7">
	<p class="lastpara">
		Enjoying the benefit of located in India our clients engage us for perfect Indian and Traditional wedding plans along with international levels of service delivered at the destination of their choice. Working with local suppliers as well as importing those elements which cannot be reliably sourced locally is one of many things we are good at. Delivering a large destination wedding is a logistic challenge, not least because of the challenge of ensuring a flawless guest experience. We’ve built a highly experienced team of more than 50 Members, as well as a network of local partners in the most popular destinations and so are superbly well equipped to deliver the most complex multi-day destination weddings.
	</p>
</div>                            
</div>

</section>
        </div>


		<?php get_footer(); ?> 