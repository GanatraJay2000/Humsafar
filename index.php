<?php get_header(); ?>
<center><h1>Blog</h1></center>
<?php while(have_posts()) {
    the_post(); ?>
<article class="post my-5">
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <p><?php the_content(); ?></p>    
</article>
<hr>
<?php
}
?>
                  
<?php get_footer(); ?>