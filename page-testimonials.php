<?php get_header(); ?>
<style>
    .container {
        padding-top: 40px;
    }

    .title {
        font-family: 'Times New Roman';
        font-size: 30px;
    }

    .title::first-letter {
        font-family: 'Times New Roman';
        font-size: 100px;
    }

    .box {
        padding-bottom: 150px;
    }

    .para p{
        font-family: "Myriad Pro", sans-serif;
        color: #888;
        line-height: 30px;
        text-align: justify;
    }

    .first-letter {
        font-family: 'Times New Roman';
        font-size: 100px;
    }


    .image {
        position: relative;
        width: 400px;
        height: 400px;
    }



    .image img {        
        height: 100%;
        position: relative;        
    }


    .flex-row .image::after {
        content: "";
        display: block;
        height: 100%;
        width: 140%;
        z-index: -1;
        position: absolute;
        top: -60px;
        right: -240px;
        background-color: #f7efe9;
    }

    .flex-row-reverse .image::after {
        content: "";
        display: block;
        height: 100%;
        width: 140%;
        z-index: -1;
        position: absolute;
        top: -60px;
        left: -80px;
        background-color: #f7efe9;
    }
</style>
<div class="container">
    <br />
    <br /><br />
     <?php
$events = new WP_Query(array(
    'posts_per_page' => 2,
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
        if($i%2==1){
            echo "-reverse";
        }
        ?> justify-content-between">

            <div class="col-md-6 col-lg-4 col-xs-4 col-md-4">
                <div class="title">
                    <p>
                        <i><?php the_title(); ?></i>
                        <p>
                </div>

                <div class="para">
                   <?php the_excerpt(); ?>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xs-6 col-md-6">
                <div class="image">
                     <?php foreach ( $thumbnail_image as $image ) {?>
           <img src="<?php echo $image['url'] ?>" alt="">
        <?php } ?>
                    <br /><br />
                </div>
            </div>
        </div>
    </div>
    
    <?php
    $i++;
}      ?>
    <br><br><br>       
</div>
<?php get_footer(); ?>