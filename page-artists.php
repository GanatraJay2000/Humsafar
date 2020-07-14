
<?php get_header('new');?>

<?php
 $artists = new WP_Query(array(                
    'post_type' => 'artists',   
    'meta_query' => array(
        array(
            'key' => 'on_articles_page',
            'compare' => '==',
            'value' => 'Yes',            
        ),
    ),                            
));

 while($artists->have_posts()){
    $artists->the_post();

    $category = rwmb_meta('category');
    
?>
<p><?php echo $category; ?></p>
<?php                    
} ?>

	
<?php get_footer('new'); ?>