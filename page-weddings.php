<?php get_header(); ?>
<style>
    /* @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,300&display=swap'); */

    .home-page {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        font-family: "Playfair Display", sans-serif !important;
        margin: 0px 120px;
        margin-top: -30px;
    }

    .heading {
        margin-bottom: 10px !important;
        font-size: 34px;
    }

    hr.title {
        margin: 10px auto;
        margin-top: 0px;
        width: 100px;
        border: 1px solid #a17e4d;
        color: #a17e4d;
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
    }

    ul.title li {
        display: inline-block;
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

    button.inquire {
        margin: 4px 0px;
        border: 0;
        padding: 3px 45px;
        font-size: 20px;
        color: white;
        background-color: #cc9d5c;
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
        font-family: sans-serif;
        color: #555;
        margin-bottom: 20px;
    }

    .post .content .heading {
        margin-left: 0 !important;
        padding-left: 0;
        text-align: left;
        display: block !important;
    }

    .post:nth-child(even) .content .heading {
        text-align: right;
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

    .owl-nav {
        position: absolute;
        top: 0;
        left: calc(50% - 50px);
        text-align: center;
        width: 100px;
        margin: 0;
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
    }
</style>

<div class="home-page">
    <div class="heading">
        <p><i>We Plan Your Unforgettable Moments</i></p>
    </div>
    <hr class="title">
    <h5 class="sub-title">EXCLUSIVE DESTINATION WEDDING PLANNERS & EVENT DESIGNERS</h5>
    <p>Humsafar Wedding is all about curating precisely those special moments of your life that get etched in the brain
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
    <button class="inquire">Inquire</button>
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
 <a href="#" class="post">
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
   
<div class="heading"><i>Testimonials</i></div>
<hr class="title">
<div class="owl-carousel testimonials owl-theme ">
    <div class="testimonial-card">
        <div class="testimonial-card-content">
            <img src="https://images.unsplash.com/flagged/photo-1566150217714-ebfea356f885?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"
                alt="Post-1">
            <div class="detail">
                <h6>Prem & Varsha</h6>
                <p>Thanks for your hardwwork.</p>
            </div>
        </div>
    </div>
    <div class="testimonial-card">
        <div class="testimonial-card-content">
            <img src="https://images.unsplash.com/photo-1460364157752-926555421a7e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60"
                alt="Post-3">
            <div class="detail">
                <h6>Prem & Varsha</h6>
                <p>Thanks for your hardwwork.</p>
            </div>
        </div>
    </div>
    <div class="testimonial-card">
        <div class="testimonial-card-content">
            <img src="https://images.unsplash.com/photo-1519307212971-dd9561667ffb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60"
                alt="Post-2">
            <div class="detail">
                <h6>Prem & Varsha</h6>
                <p>Thanks for your hardwwork.</p>
            </div>
        </div>
    </div>
    <div class="testimonial-card">
        <div class="testimonial-card-content">
            <img src="https://images.unsplash.com/photo-1507874915569-4a58ec33669b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60"
                alt="Post-5">
            <div class="detail">
                <h6>Prem & Varsha</h6>
                <p>Thanks for your hardwwork.</p>
            </div>
        </div>
    </div>
</div>


</div>
<div class="owl-navigation">
    <span class="owl-nav-prev"><i class=" fa fa-long-arrow-alt-left"></i></span>
    <span class="owl-nav-next"><i class=" fa fa-long-arrow-alt-right"></i></span>
</div>


<?php get_footer(); ?>