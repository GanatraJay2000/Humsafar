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
        margin: 10px 0px;
        border: 0;
        outline:1px solid white;
        outline-offset:-4px;
        padding: 5px 45px;
        font-size: 20px;
        color: white;
        background-color: #cc9d5c;
        text-decoration: none !important;
    }

    .post {
        margin: 30px 0px 60px;        
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
        flex-basis: 50%;
        max-height: 300px;
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


    .post .content .heading {
        margin-left: 0 !important;
        padding-left: 0;
        text-align: left;
        font-size:22px;
        display: block;
        font-family:"Batang", serif;
    }

    .post:nth-child(even) .content .heading {
        text-align: right;
        font-family:"Batang", serif;
    }


    .post:hover .heading {
        color: #b28f5e;
        font-family:"Batang", serif;
    }
    .more{
        background-color: #b28f5e;
        color:white;
        border:1px solid white;
        padding:3px 20px;
        width:fit-content;
        }
    .post:nth-child(even) .more {
       float: right;        
    }
    .more:hover{
        background-color: white;
        color:#b28f5e;
        border:1px solid #b28f5e;
        padding:3px 20px;
        width:fit-content;
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
        /* overflow: hidden; */
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
        text-align:center;
    }

    .testimonial-card-content .detail p {
        font-size: 12px;
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
        display:block;
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
.bg-1{
    background-color: #d0f2e1;
    width:100%;
    padding:60px 0;
}
.bg{
    width:80%;
    margin:0 auto;
    padding:60px 0;
}
.testimonials-prev{
     left:-30px;
}
.testimonials-nav{
position:absolute;
    top:50%;
    transform:translate(0, -50%);
    font-size:30px;
    padding: 5px 0;
    width:30px;   
}
.testimonials-next{
    right:-30px;
}

.services-on-home{
    margin-bottom:80px;
}
.services-on-home .services-card:nth-child(2) .inner-card{
    margin-top:50px;
}
.services-on-home .services-card:nth-child(3) .inner-card{
    margin-top:100px;
}

.services-on-home .inner-card img{
    height:200px;
    width:100%;
}
.services-on-home .service-name{
    margin-top:15px;
font-family: "Playfair display", serif;
    font-size:20px;
}
.services-on-home .more-services{
    margin:35px 0 50px;
    text-align:center;
}
.services-on-home .more-services a{
    color:#444 !important;
    text-decoration:none;
    font-family: "Playfair display", serif;
    font-size:19px;
}


@media screen and (max-width:768px){
    .testimonials-nav{
        display:none;
    }
    .bg{
    width:100%;  
    padding:60px 20px;  
    }
    .banner-carousel .banner{
        height:300px;        
    }
        .banner .title{
        font-weight:600;
        font-size:30px;
    }
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


<div class="home-page">   
<div class="bg">
    <div class="heading">
        <p><i>We Plan Your Unforgettable Moments</i></p>
    </div>    
    <hr class="title">
    <h5 class="sub-title">EXCLUSIVE DESTINATION WEDDING PLANNERS & EVENT DESIGNERS</h5>
    <p class="text-lg-center text-justify">Humsafar Wedding is all about curating precisely those special moments of your life that get etched in the brain
        as beautiful and adorable memories. Whether it be the memory of Bidding farewell to the oldest Cog of the
        company or the Dream wedding that you always planned in your head, We Humsafars are always with you in every
        moment.</p>
        </div>
<div class="bg-1">
    
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

    <center><a href="<?php echo site_url('/weddings/contact-us') ?>" class="inquire text-white">Contact Us</a></center>
   
</div>
<div class="bg">
<div class="services-on-home">
    <div class="heading"><i>Services</i></div>
    <hr class="title">
    <div class="row d-flex justify-content-center align-items-flex-start mt-5">
        <div class="col-4 services-card text-center">
            <div class="inner-card">
                 <img alt="venue"
                        src="<?php echo get_template_directory_uri() . '/assets_inside/budget.jpg' ?>" />
            </div>    
            <div class="text-center service-name">
                Budget Management
            </div>    
        </div>
        <div class="col-4 services-card text-center">
            <div class="inner-card">
                <img alt="venue"
                        src="<?php echo get_template_directory_uri() . '/assets_inside/venue.jpg' ?>" />
            </div>    
            <div class="text-center service-name">
                Venues & Destination
            </div>    
        </div>
        <div class="col-4 services-card text-center">
            <div class="inner-card">
               <img alt="venue"
                       src="<?php echo get_template_directory_uri() . '/assets_inside/entertain.png' ?>" />
            </div>    
            <div class="text-center service-name">
                Entertainment Design & Planning 
            </div>    
        </div>
    </div>
    <div class="more-services">
        <a style="text-decoration:underline;" href="<?php echo site_url('/services'); ?>">Learn about our services</a>
    </div>
</div>



 <div id="wed_testimonials" class="heading mt-5"><i>Testimonials</i></div>
<hr class="title">
<div class="owl-carousel testimonials owl-theme mt-4">
   <?php
$events = new WP_Query(array(
    'posts_per_page' => 10,
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
<div class="testimonial-card-content">
             <?php foreach ( $thumbnail_image as $image ) {?>
                        <img src="<?php echo $image['url'] ?>" alt="">
                    <?php } ?>
            <div class="detail">
                <h6><?php the_title(); // Name    ?></h6>
                <p><?php echo wp_trim_words(get_the_content(), 25);// Content ?></p>
            </div>
        </div>
<?php } ?>
</div>

<div style="margin:100px 0 50px;">
 <div class="heading"><i>Find our Recent post here!</i></div>
    <hr class="title">
    <?php
$events = new WP_Query(array(
    'posts_per_page' => 2,
    'order' => 'DESC',
));
while($events->have_posts())
{
    $events->the_post();           
    $thumbnail_image = rwmb_meta('thumbnail_image', array( 'size' => 'large' ) );         

    ?>
 <a href="<?php the_permalink(  ) ?>" class="post">
        <?php foreach ( $thumbnail_image as $image ) {?>
           <img class="image" src="<?php echo $image['url'] ?>" alt="">
        <?php } ?>
        <div class="content">        
            <div class="heading"><?php the_title(); ?></div>
            <div><?php echo wp_trim_words(get_the_content(), 18); ?></div> 
            <div class="my-4 more">Read More</div>
        </div>
    </a>
<?php
}

?>
</div>
</div>

<div class="owl-navigation">
    <span class="testimonials-prev testimonials-nav"><i class=" fa fa-chevron-left"></i></span>
    <span class="testimonials-next testimonials-nav"><i class=" fa fa-chevron-right"></i></span>
</div>
</div>

<?php get_footer(); ?>