<?php get_header(); ?>

<?php 

while( have_posts() ){ 
the_post(); 

$thumbnail_image = rwmb_meta('thumbnail_image', array( 'size' => 'large' ) );
$gallery = rwmb_meta('gallery', array( 'size' => 'large' ) );

?>

<h3><?php the_title(); ?></h3>
 <?php foreach ( $thumbnail_image as $image ) {?>
            <a href="<?php //the_permalink(); ?>"><img src="<?php echo $image['url'] ?>" alt=""></a>
<?php } ?>
<p><?php echo rwmb_meta('text_on_thumbnail_one').'<br>'; ?></p>
<p><?php echo rwmb_meta('text_on_thumbnail_two').'<br>'; ?></p>
<p><?php echo rwmb_meta('feature_title').'<br>'; ?></p>
<p><?php echo rwmb_meta('quote').'<br>'; ?></p>
<p><?php the_content(); ?></p>
 <?php foreach ( $gallery as $image ) {?>
            <a href="<?php //the_permalink(); ?>"><img src="<?php echo $image['url'] ?>" alt=""></a>
<?php } ?>


		<?php } ?>

