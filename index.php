<?php get_header(); ?>
<center><h1>Blog</h1></center>
<?php while(have_posts()) {
    the_post(); ?>
<article class="post my-5">
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <p><?php echo wp_trim_words(get_the_content(), 25); ?></p>   
</article>
<?php
}
?>
                  
<?php get_footer(); ?>