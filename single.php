<?php get_header();?>
<link href="https://fonts.googleapis.com/css2?family=Rufina&display=swap" rel="stylesheet">

<style>
    body{
        background-color:white;
    }
    .content.wrapper{
        margin:0 !important;
        padding:0 !important;
        width:100% !important;
    }
    .image{
        position:relative;
        margin-top:5px;
        /* width:90%;      */
        /* margin:60px auto 0 !important;    */
        /* border-radius:5px; */
        /* box-shadow:0 0 30px 1px #0000003f; */
    }
    .image img{
        /* border-radius:5px; */
        width:100%;        
        height:600px;
        /* object-fit:cover; */        
    }
    .image .image-text{
        position:absolute;
        z-index:1;
        left:50%;
        top:45%;
        transform:translate(-50%, -50%);
        color:white;
        text-shadow:0 0 10px #000000;
        font-family:"Rufina", sans-serif;        
        font-size:46px;
        width:75%;
        text-align:center;
    }
    .content{
        font-family:"Myriad Pro",sans-serif;
        font-weight:100;
        font-size:16px;
        letter-spacing:0.7px;
        word-spacing:7px;

    }
    .content h2{
        font-family:"Rufina", serif;
        font-weight:500;
        font-size:40px;
        margin :60px 0 30px;
        position:relative;
    }
    .content h2::after{
position:absolute;
width:10%;
left:0;
bottom:-15px;
height:3.5px;
content:'';
display:block;
background-color:black;
    }
    b, strong {
    font-weight: 900;
}
.blocks-gallery-grid, .wp-block-gallery {
        margin-top:20px !important;
    }
.full-width{
    width:100%;
}
    .latest-blogs{
        width:100%;        
    }
    .latest-blogs * {
        font-family: Rufina, sans-serif;
    }
    .latest-blogs img{
        width:100%;
        height:200px;
    }
    .list-group-item{
        border:0;
        padding: 10px 0px;
        /* margin-bottom:30px; */
    }

    @media screen and (max-width:1100px){
        .image img{             
        height:auto;              
    }
    .image .image-text{        
        font-size:6vw; 
        width:85%;       
    }
    }
    @media screen and (max-width:768px){
        .image .image-text{        
        font-size:8vw; 
        width:95%;       
    }
        .content h2{
        font-size:29px;        
    }
    .content h2::after{        
        width:20%;
        left:40%;
        bottom:-15px;
        height:2.5px;        
    }
    }
</style>
<?php
while(have_posts())
{
    the_post();
 $thumbnail_image = rwmb_meta('thumbnail_image', array( 'size' => 'large' ) ); 
 ?>


	
<article class="post">
    <div class="image">
	<?php foreach ( $thumbnail_image as $image ) {?>
        <img style="" src="<?php echo $image['url'] ?>" alt="">
    <?php } ?>
    <div class="image-text">
    <?php the_title(); ?>
    </div>
    </div>
    <div class="d-flex flex-wrap my-5 mx-md-5 mx-sm-2">
    
    <div class="col-md-9 col-12 pr-lg-5 pr-md-3 text-md-left text-center pb-5 pt-0">
    <div class="content"><?php the_content(); ?></div>
    </div>
    <div class="col-md-3 col-12">
    <h3 style="font-family:playfair display">Latest Blogs</h3>
    <div class="latest-blogs">
    <?php
    
    $blogs = new WP_Query(array(
        'post_type'=>'post',
       'posts_per_page'=>5
    ));

    while($blogs->have_posts())
{
    $blogs->the_post();       
    $thumbnail_image = rwmb_meta('thumbnail_image', array( 'size' => 'large' ) );
    ?>
    <?php foreach ( $thumbnail_image as $image ) {?>
            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image['url'] ?>" alt=""></a>
		<?php } ?>	
     <li class="list-group-item"><a class="text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    
    <?php } ?>    
    </div>
    </div>
    </div>    
</article>
<?php
}
?>

<?php get_footer(); ?>




