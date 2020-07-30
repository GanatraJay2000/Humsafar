<?php

while(have_posts())
{
    the_post();?>
	
<?php get_header();
get_post();
 $thumbnail_image = rwmb_meta('thumbnail_image', array( 'size' => 'medium' ) ); 
 ?>


	
<article class="post">
<a href="javascript:window.history.back();">Back to all Blogs</a>
<div class="heading">
        <p><?php the_title(); ?></p>
        <h1><span>*</span></h1>
    </div>   
	<?php foreach ( $thumbnail_image as $image ) {?>
        <img style="width:100%;height:600px;object-fit:cover;" src="<?php echo $image['url'] ?>" alt="">
    <?php } ?>
    <div class="d-flex my-5">
    
    <div class="col-lg-8 col-md-8 col-12">
    <p><?php the_content(); ?></p>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <h4>Latest Blogs</h4>
    <ul class="list-group">
    <?php
    
    $blogs = new WP_Query(array(
        'post_type'=>'post',
       'posts_per_page'=>5
    ));

    while($blogs->have_posts())
{
    $blogs->the_post();       
    ?>
     <li class="list-group-item"><a class="text-dark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    
    <?php } ?>    
    </ul>
    </div>
    </div>    
</article>
<?php
}
?>

<?php get_footer(); ?>




