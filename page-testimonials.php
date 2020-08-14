<?php get_header(); ?>
<style>
    .container {
        padding-top: 40px;
    }

    .title {
        font-family: 'Times New Roman';
        font-size: 30px;
        margin-top:10px;
    }

    .title::first-letter {
        font-family: 'Times New Roman';
        font-size: 100px;
    }

    .box {
        padding-bottom: 150px;
    }    
    .flex-row-reverse .text{
        margin-left:80px;        
    }
    .flex-row .text{
        margin-right:80px;        
    }
    @media screen and (max-width:990px){
        .text{
            margin:0 !important;
        }
    }

    .para p{
        font-family: "Myriad Pro", sans-serif;
        color: #888;
        line-height: 30px;
        text-align: justify;  
        text-align-last:left;      
    }

    .first-letter {
        font-family: 'Times New Roman';
        font-size: 100px;
    }

    .image {
        position: relative;
        width: 100%;
        height: 350px;        
    }

    .image img { 
        width:100%;       
        height: 100%;
        position: relative;           
    }

    .flex-row-reverse .image::after {
        content: "";
        display: block;
        height: 100%;
        width: 100%;
        z-index: -1;
        position: absolute;
        top: -60px;
        right: -80px;
        /* background-image: url('<?php echo get_template_directory_uri() . "/assets_inside/greenbg1.png" ?>'); */
         background-color: #f7efe9;
    }

    .flex-row .image::after {
        content: "";
        display: block;
        height: 100%;
        width: 100%;
        z-index: -1;
        position: absolute;
        top: -60px;
        left: -80px;
        background-color: #f7efe9;
    }
    .content.wrapper{
        margin:0 !important;
        width:100% !important;
    }
    @media screen and (max-width:768px){
         .title {
        text-align:center;
        font-family: 'Times New Roman';
        font-size: 24px;
        margin-top:10px;    
    }

    .title::first-letter {
        font-family: 'Times New Roman';
        font-size: 50px !important;
    }
    .para p{        
        text-align-last:center;      
    }
        .image {
            height:220px;
            width:260px;
            margin:0 auto;
        }
        .flex-row .image::after{
            top:-20px;
            right:-20px;
            left:auto;
        }
        .flex-row-reverse .image::after{
            top:-20px;
            right:-20px;
            left:auto;
        }
        .container{
            padding-top:0;
        }
        .box{
            padding-bottom:50px;
        }  
        .title{
            margin-top:30px;
        }      
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
    @media screen and (max-width:318px){
         .image::after {
            display:none !important;
        }
    }
</style>
<div class="container">
    <br />
    <br /><br />
     <?php
$events = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type'=>'events',
    'meta_key' => 'event_date',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
));
$i=0;
while($events->have_posts())
{
    $events->the_post();             
    $thumbnail_image = rwmb_meta('thumbnail_image', array( 'size' => 'large' ) );
    ?>
    
    <div class="box">
        <div class="row d-flex flex-row<?php 
        if($i%2==0){
            echo "-reverse";
        }
        ?> justify-content-between">
            <div class="col-md-6 col-lg-6 col-xs-6 col-md-6">
                <div class="image">
                     <?php foreach ( $thumbnail_image as $image ) {?>
                        <img src="<?php echo $image['url'] ?>" alt="">
                    <?php } ?>
                    <br /><br />
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xs-4 col-md-4 text">
                <div class="title">
                    <p>
                        <i><?php the_title(); ?></i>
                        <p>
                </div>

                <div class="para">
                   <?php the_excerpt(); ?>
                </div>
                <a href="<?php echo site_url('/portfolio#').str_replace(' ','',strtolower(get_the_title())); ?>" class="read-more">See our portfolio</a>
            </div>        
        </div>
    </div>
    
    <?php
    $i++;
}      ?>        
</div>
<?php get_footer(); ?>