<?php get_header('new'); ?>


<?php
 while(have_posts())
{
    the_post();        
    $artist_thumbnail = rwmb_meta('artist_thumbnail', array( 'size' => 'large' ));
    $gallery = rwmb_meta('artist_gallery', array( 'size' => 'large' ) );      
    echo the_title();
    echo the_content();          
    echo rwmb_meta('category').'<br>';
    echo rwmb_meta('facebook').'<br>';
    echo rwmb_meta('youtube').'<br>';
    echo rwmb_meta('instagram').'<br>';    
}
?> 

 <?php foreach ( $artist_thumbnail as $image ) {?>             
    <img id="my_img_1" src="<?php echo $image['url'] ?>" alt="">
<?php } ?>
 <?php foreach ( $gallery as $image ) {?>             
    <img id="my_img_1" src="<?php echo $image['url'] ?>" alt="">
<?php } ?>


<?php get_footer('new'); ?>