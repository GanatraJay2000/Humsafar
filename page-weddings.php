<?php get_header(); ?>
<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,300&display=swap'); */

    .home-page {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        font-family: "Myriad Pro",  "Playfair Display", sans-serif !important;
        margin: 0px 120px;
        margin-top: -30px;
    }

    .heading {
        margin-bottom: 10px !important;
        font-size: 34px;
        font-family:"Batang", serif;
    }

    hr.title {
        margin: 10px auto;
        margin-top: 0px;
        width: 100px;
        border: 1px solid #a17e4d;
        color: #a17e4d;
        font-family:"Playfair Display", serif;
    }

    .sub-title {
        text-align: center;
        margin: 10px 0;
        font-size: 17px;
        margin-bottom: 15px;
    }

    p {
        text-align: center;
        margin: 20px 0;
    }

    ul.title {
        padding: 0;
        margin: 0;
        text-align: center;
        font-family:"Playfair Display", serif;
    }

    ul.title li {
        display: inline-block;
        font-family:"Playfair Display", serif;
        margin: 0;
    }

    ul.title li::after {
        content: '|';
        margin: 0px 10px;

    }

    ul.title li:last-of-type::after {
        content: '';
        margin: 0;
    }

    .inquire {
        margin: 4px 0px;
        border: 0;
        padding: 3px 45px;
        font-size: 20px;
        color: white;
        background-color: #cc9d5c;
        text-decoration: none !important;
    }

    .post {
        margin: 20px 0px;
        border: 0.5px solid #d0d0d0;
        border-radius: 5px;
        display: flex;
        flex-direction: row;
        background: transparent;
        text-decoration: none;
        color: #444;
    }

    .post:nth-child(even) {
        flex-direction: row-reverse;
    }

    .post:hover {
        text-decoration: none;
    }

    .post .image {
        width: 50%;
        border-radius: 5px 0 0 5px;
        flex-basis: 50%;
        max-height: 300px;
    }

    .post:nth-child(even) .image {
        border-radius: 0 5px 5px 0;
    }

    .post .content {
        flex-basis: 50%;
        padding: 40px;
        color: #444;
        text-decoration: none;
        position: relative;
        text-align: left;
    }

    .post:nth-child(even) .content {
        text-align: right;
    }

    .post .content small {
        font-family: "Myriad Pro",  sans-serif;
        color: #555;
        margin-bottom: 20px;
    }

    .post .content .heading {
        margin-left: 0 !important;
        padding-left: 0;
        text-align: left;
        display: block !important;
        font-family:"Batang", serif;
    }

    .post:nth-child(even) .content .heading {
        text-align: right;
        font-family:"Batang", serif;
    }

    .post-footer {
        border-top: 0.7px solid #444444aa;
        margin-top: 26px !important;
        padding-top: 5px !important;
        font-size: 14px !important;
        display: flex;
        justify-content: space-between;
    }

    .post:hover {
        border: 0.5px solid #cc9d5c88;
    }

    .post:hover .heading {
        color: #b28f5e;
        font-family:"Batang", serif;
    }

    .post button.heart {
        border: none !important;
        background: transparent;
        padding: 0;
        outline: none !important;
        box-shadow: 0;
    }



    .testimonials {
        width: 100%;
        /* height: 300px; */
        display: flex !important;
        align-items: center;
        overflow: hidden;
    }

    .testimonial-card {
        border: 0.5px solid #cc9d5c88;
        margin: 10px;
        margin-top: 50px;
        border-radius: 5px;
    }

    .testimonial-card-content img {
        border-radius: 5px 5px 0 0;
        height: 220px;
    }

    .testimonial-card-content .detail {
        padding: 20px 5px 5px 10px;
        font-size: 14px;
    }

    .testimonial-card-content .detail p {
        font-size: 12px;
    }

    .testimonial-card-content .detail p::before {
        content: '"';
    }

    .testimonial-card-content .detail p::after {
        content: '"';
    }
.content.wrapper{
    padding-top:5px !important;
}

    .owl-nav .owl-prev .owl-nav-prev,
    .owl-nav .owl-next .owl-nav-next {
        color: #666 !important;
        background: transparent !important;
        font-size: 1.4rem !important;
        padding: 10px;        
    }

    .owl-theme .owl-nav [class*='owl-']:hover {
        background: transparent !important;
        color: var(--midnight) !important;
    }

    .owl-theme .owl-nav [class*='owl-'] {
        outline: 0;
    }

    @media screen and (max-width: 1024px) {
        .post .content .heading {
            /* //palak gajar dudhi beet */
            font-size: 24px !important;
        }

        div.content-wrapper {
            padding: 0;
            margin: 10px;
        }

        div.home-page {
            padding: 0 !important;
            margin: 10px !important;
        }

        ul.title li::after {
            content: '';
        }
    }

    @media screen and (max-width:800px) {
        div.content-wrapper {
            padding: 0;
            margin: 0px;
        }

        div.home-page {
            padding: 0 !important;
            margin: 0 !important;
        }


    }

    @media screen and (max-width:600px) {
        .post {
            flex-direction: column;
            border-radius: 5px;
        }

        .post:nth-child(even) {
            flex-direction: column;
            border-radius: 5px;
        }

        .post .content {
            padding: 20px;
            text-align: center !important;
        }

        .post .heading {
            text-align: center !important;
            font-family:"Batang", serif;
        }

        .post .image {
            width: 100%;
            border-radius: 5px 5px 0 0 !important;
        }

        .testimonials {
            padding: 5px;
        }

        .testimonial-card-content .detail {
            padding: 15px;
        }
        
        .owl-navigation{
            display:none;
        }
    }
    .content.wrapper{
        padding:0 !important;
    }
    .banner-carousel{        
        max-width:100%;
        padding:0;
        margin:0;
    }
    .banner-carousel *{
        padding:0;
        margin:0;
    }
    .banner-carousel .banner{
        width:100%;
        position:relative;
        height:100vh;        
    }
    .banner-carousel .banner img{
        width:100%;
        height:100%;
        border:0;
    }
    .banner .banner-content{
        position:absolute;
        transform:translate(-50%, -50%);
        top:40%;
        left:50%;
        width:100%;
        text-align:center;
    }
    .banner .title{
        font-weight:700;
        font-size:40px;
        color:#fff;
        text-shadow:0px 0px 8px #000;
    }
    .banner .link{
        text-decoration:none;
        padding:10px 20px;
        background:linear-gradient(to right, #c78f41 20%, #cfa757 60%, #dbb25b);
        border-radius:40px;
        color:white;
        text-shadow:0px 0px 3px #00000066;
        border:2px solid white;
    }
.banner-nav{
    position:absolute;    
    top:50%;
    transform:translate(0, -50%);
    font-size:50px;
    filter:drop-shadow(0px 0px 2px #fff);
}
.banner-prev{
    left:10px;    
}
.banner-next{
    right:10px;    
}
</style>
<?php $logos = new WP_Query(array(
    'post_type'=>'page',    
));
$i=0; 
$post_id = 5;
$slide_1 = rwmb_meta('slide_1', array( 'size' => 'large' ) , $post_id);
$slide_1 = array_values($slide_1);
?>
<div class="banner-carousel">
    <div class="owl-carousel banners owl-theme">
        <div class="banner"> 
            <img src="<?php echo $slide_1[0]['url'] ?>" alt="Post-1">
            <div class="banner-content">                
                <h3 class="mb-4 title">Explore the most awesome destinations in the World!</h3>
                <a class="link" href="<?php echo site_url('/weddings/destinations'); ?>">Explore Destinations</a>
            </div>
        </div>
        <div class="banner"> 
            <img src="<?php echo $slide_1[1]['url'] ?>" alt="Post-1">
            <div class="banner-content">
                <h3 class="mb-4 title">We will Plan Every Detail of Your Wedding</h3>              
                <a class="link" href="<?php echo site_url('/weddings/process'); ?>">Check Out Process</a>
            </div>
        </div>
        <div class="banner"> 
            <img src="<?php echo $slide_1[2]['url'] ?>" alt="Post-1">
             <div class="banner-content">
                <h3 class="mb-4 title">Plan Your Perfect Wedding & Surprise Everyone.</h3>              
                <a class="link" href="<?php echo site_url('/weddings/services'); ?>">Check Out Services</a>
            </div>
        </div>        
        <div class="banner"> 
            <img src="<?php echo $slide_1[3]['url'] ?>" alt="Post-1">
            <div class="banner-content">
                <h3 class="mb-4 title">You Will Never Forget the Incredible Memory.</h3>                
                <a class="link" href="<?php echo site_url('/weddings/testimonials'); ?>">See Testimonials</a>
            </div>
        </div>
    </div>
    <div class="owl-navigation">
        <div class="banner-next banner-nav"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
        <div class="banner-prev banner-nav"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
    </div>
</div>        
<!-- <div class="banner-carousel">
    <div class="owl-carousel banners owl-theme ">
        <div class="banner">        
            <img src="<?php echo $slide_1[0]['url'] ?>" alt="Post-1">

            <div class="static-content">
                <h2><i>Say I-Do at the Top of the World!</i></h2>
                <h6 class="my-4">Explore the most awesome destinations in the world</h6>
                <a class="button" href="<?php echo site_url('/weddings/destinations'); ?>">Explore Destinations</a>
            </div>
        </div>
        <div class="banner">        
           <img src="<?php echo $slide_1[1]['url'] ?>" alt="Post-1">
            <div class="content" style="background-color:#c3d2dcea !important;">
                <h3>We will Plan Every Detail of Your Wedding</h3>
                <p class="mb-5">We are your Humsafar in making your memories of your Dream & destination Wedding SPECIAL. Check our exclusive services,</p>
                <a class="button" href="<?php echo site_url('/weddings/services'); ?>">Check Out Services</a>
            </div>
        </div>
        <div class="banner">        
           <img src="<?php echo $slide_1[2]['url'] ?>" alt="Post-1">
            <div class="content" style="background-color:#dd3002ea !important;color:white;">
                <h3>Plan Your Perfect Wedding & Surprise Everyone.</h3>
                <p>They say there are 16 Adornments without which an Indian bride is incomplete. Check out these amazing functions of adornments.</p>
                <a class="button" href="<?php echo site_url('/weddings/functions'); ?>">Explore Functions</a>
            </div>
        </div>
        <div class="banner">        
            <img src="<?php echo $slide_1[3]['url'] ?>" alt="Post-1">

            <div class="content" style="background-color:#fec9c0ea !important;">
                <h3>You Will Never Forget the Incredible Memory.</h3>
                <p>Find our latest work of making their dream come true of having a beautiful wedding they always dreamt of.</p>
                <a class="button" href="<?php echo site_url('/weddings/events'); ?>">See Weddings</a>
            </div>
        </div>
    </div>
<div class="owl-navigation">
    <div class="banner-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
    <div class="banner-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
    </div>
</div> -->

<div class="home-page">   
    <div class="heading">
        <p><i>We Plan Your Unforgettable Moments</i></p>
    </div>    
    <hr class="title">
    <h5 class="sub-title">EXCLUSIVE DESTINATION WEDDING PLANNERS & EVENT DESIGNERS</h5>
    <p class="text-lg-center text-justify">Humsafar Wedding is all about curating precisely those special moments of your life that get etched in the brain
        as beautiful and adorable memories. Whether it be the memory of Bidding farewell to the oldest Cog of the
        company or the Dream wedding that you always planned in your head, We Humsafars are always with you in every
        moment.</p>
    <div class="sub-title">
        ALWAYS CONSIDERED
    </div>
    <hr class="title">
    <div class="sub-title">
        <ul class="title">
            <li>Dubai</li>
            <li>Mumbai</li>
            <li>Udaipur</li>
            <li>Jaipur</li>
            <li>Raigarh</li>
            <li>Raipur</li>
            <li>Bhilai</li>
        </ul>
    </div>
    <a href="<?php echo site_url('/weddings/contact-us') ?>" class="inquire text-white">Contact Us</a>
    <div class="heading"><i>Find our Recent post here!</i></div>
    <hr class="title">


    <?php
$events = new WP_Query(array(
    'posts_per_page' => 2,
    'post_type'=>'events',
    'meta_key' => 'event_date',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
));
while($events->have_posts())
{
    $events->the_post();         
    $event_date = rwmb_meta('event_date');
    $location = rwmb_meta('location');
    $event_type = rwmb_meta('event_type');
    $thumbnail_image = rwmb_meta('thumbnail_image', array( 'size' => 'large' ) );

    $eventDate = new DateTime($event_date);          
    
if($event_type === 'Wedding'){
    ?>
 <a href="<?php the_permalink(  ) ?>" class="post">
        <?php foreach ( $thumbnail_image as $image ) {?>
           <img class="image" src="<?php echo $image['url'] ?>" alt="">
        <?php } ?>
        <div class="content">
            <small><?php echo $eventDate->format('M').' '.$eventDate->format('dS').', '.$eventDate->format('Y'); ?></small>
            <div class="heading"><?php the_title(); ?></div>
            <div><?php echo wp_trim_words(get_the_content(), 18); ?></div>
            <div class="post-footer">
                <p class="m-0 p-0 mr-2"><?php echo $location; ?></p>
                <div>282 views</div>                
            </div>
        </div>
    </a>
<?php
}
}
?>


<?php $slideshow = new WP_Query(array(
    'post_type'=>'page',    
));
$i=0; 
$post_id = 5;
$list_values = rwmb_meta('list', array() , $post_id);
$slide_images = rwmb_meta('slide_images', array( 'size' => 'large' ) , $post_id);
$slide_images = array_values($slide_images);
?>
   
<div id="wed_testimonials" class="heading"><i>Testimonials</i></div>
<hr class="title">
<div class="owl-carousel testimonials owl-theme ">
<?php foreach ( $list_values as $key=>$value ) { ?>
<div class="testimonial-card">
        <div class="testimonial-card-content">
            <img src="<?php echo $slide_images[$key]['url'] ?>)"alt="">  
            <div class="detail">
                <h6><?php echo $value[0]; // Name    ?></h6>
                <p><?php echo $value[1]; // Content ?></p>
            </div>
        </div>
    </div>
     <?php } ?>
</div>


</div>
<div class="owl-navigation">
    <span class="owl-nav-prev"><i class=" fa fa-long-arrow-alt-left"></i></span>
    <span class="owl-nav-next"><i class=" fa fa-long-arrow-alt-right"></i></span>
</div>


<?php get_footer(); ?>