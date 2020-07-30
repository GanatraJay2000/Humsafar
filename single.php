<?php

while(have_posts())
{
    the_post();?>
	
<?php get_header();
get_post();
 $thumbnail_image = rwmb_meta('thumbnail_image', array( 'size' => 'medium' ) ); 
 ?>


	
<article class="post">
    <h1><?php the_title(); ?></h1>	 
	<?php foreach ( $thumbnail_image as $image ) {?>
        <img src="<?php echo $image['url'] ?>" alt="">
    <?php } ?>
    <p><?php the_content(); ?></p>
</article>
<?php
}
?>

<?php get_footer(); ?>




