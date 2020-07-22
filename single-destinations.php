<?php get_header(); ?>
    <style>
        * {
            margin: 0;
        }
        body{
            background-color:white;
        }

        .banner_heading {
            text-align: center;
        }

        .banner_heading h1 {
            font-size: 72px;
            font-weight: 900px;
            font-family: "Playfair Display", "Times New Roman", serif;
        }

        .banner_destination {
            margin: 0 auto;
            width: 100%;
            position: relative;
        }

        .banner_destination img {
            width: 100%;
            height: 100%;
            min-height: 600px;

        }

        .banner_destination div {
            position: absolute;
            background-color: #ffffffda;
            padding: 30px 20px;
            font-size: 20px;
            font-family: "Playfair Display", "Times New Roman", serif;
            letter-spacing: 1px;
            line-height: 1.6em;
            max-width: 60%;
        }

        .banner_destination div.left {
            top: 5%;
            left: 0;
        }

        .banner_destination div.right {
            right: 0;
            bottom: 10%;
        }

        .title {
            margin: 20px auto;
            font-size: 32px;
            font-weight: 500;
            text-align: center;
            font-family: "Playfair Display", "Times New Roman", serif;
        }

        .complex-structure {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: repeat(6, 125px);
            grid-gap: 5px;
        }

        .complex-structure div {
            width: 100%;
        }

        .complex-structure .content {
            grid-column-start: 1;
            grid-column-end: 2;
            grid-row-start: 1;
            grid-row-end: 3;
            font-size: 17px;
            color: #555;
            text-align: justify;
            padding: 0px 10px 20px 0;
        }

        .complex-structure .quote {
            grid-column-start: 2;
            grid-column-end: 3;
            grid-row-start: 1;
            grid-row-end: 2;
            color: #333333;
            font-size: 30px;
            font-family: "Playfair Display", "Times New Roman", serif;
            margin: 0px auto 30px auto;
            text-align: center;
        }

        .complex-structure div img {
            width: 100%;
            height: 100%;
        }

        .complex-structure .left-image {
            grid-column-start: 1;
            grid-column-end: 2;
            grid-row-start: 3;
            grid-row-end: 5;
        }

        .complex-structure .right-image {
            grid-column-start: 2;
            grid-column-end: 3;
            grid-row-start: 2;
            grid-row-end: 5;
        }

        .complex-structure .full-image {
            grid-column-start: 1;
            grid-column-end: 3;
            grid-row-start: 5;
            grid-row-end: 7;
        }

        @media screen and (max-width:600px) {
            .content.wrapper{
                margin:0px !important;
                padding:0 !important;
            }
            .banner_destination div {
                position: relative;
                max-width: 100%;
                padding: 10px 10px;
                text-align: center;
                font-size:16px;
            }
            .banner_destination img{
                min-height:0;
            }

            .complex-structure {
                display: block;                
                margin-bottom: 30px;
            }
            .complex-structure div{
                padding: 0 !important;
            }

            .complex-structure div img {
                height: 230px;
                margin-bottom: 5px;
            }
        }
    </style>

<?php 

while( have_posts() ){ 
the_post(); 

$thumbnail_image = rwmb_meta('thumbnail_image', array( 'size' => 'large' ) );
$gallery = rwmb_meta('gallery', array( 'size' => 'large' ) );

?>

    <div class="banner_heading">
        <h1> <i><?php the_title(); ?></i></h1>
    </div>
    <div class="banner_destination">
         <?php foreach ( $thumbnail_image as $image ) {?>
           <img src="<?php echo $image['url'] ?>" alt="">
<?php } ?>
        <div class="left">
           <?php echo rwmb_meta('text_on_thumbnail_one'); ?>
        </div>
        <div class="right">
            <?php echo rwmb_meta('text_on_thumbnail_two'); ?>
        </div>
    </div>
    <div class="title">
        <?php echo rwmb_meta('feature_title'); ?>
    </div>
    <div class="complex-structure">
        <div class="content">
           <?php the_content(); ?>
        </div>
        <div class="quote">
            <i><b><?php echo rwmb_meta('quote'); ?></b></i>
        </div>
        <?php 
        $i=0;
        foreach ( $gallery as $image ) {
            if($i==0){
                $class="left-image";
            }
            else if($i==1){
                $class="right-image";
            }
            else if($i==2){
                $class="full-image";
            }
            ?>
        <div class="<?php echo $class; ?>">
            <img src="<?php echo $image['url'] ?>" alt="">
        </div>
           
        <?php 
    $i++;
    } ?>
    </div>
<?php } ?>
<?php get_footer(); ?>