<?php get_header(); ?>

<?php while(have_posts()) {
    the_post(); ?>
<article class="post my-5">
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>    
</article>
<hr>
<?php
}
?>
                  
<?php get_footer(); ?>