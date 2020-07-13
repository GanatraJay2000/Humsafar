<center>
<?php

while(have_posts())
{
    the_post();?>
	
<?php get_header();
get_post();
 $thumbnail_image = rwmb_meta('thumbnail_image', array( 'size' => 'medium' ) );
 $gallery = rwmb_meta('gallery', array( 'size' => 'medium' ) );
 ?>


	
<article class="text-left">
    <h2><?php the_title(); ?></h2>
     <h6><?php echo $date; ?></h6>     
	<?php foreach ( $thumbnail_image as $image ) {?>
        <img src="<?php echo $image['url'] ?>" alt="">
    <?php } ?>
    <p><?php the_content(); ?></p>
    <p><?php echo rwmb_meta('event_date'); ?></p>
    <p><?php echo rwmb_meta('location'); ?></p>
    <?php foreach ( $gallery as $image ) {?>
        <img src="<?php echo $image['url'] ?>" alt="">
    <?php } ?>

    <?php if(is_single()) comments_template(); ?>
</article>
<?php
}
?>
</center>

<?php get_footer(); ?>