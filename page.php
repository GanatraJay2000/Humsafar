<?php get_header(); ?>

<?php

while(have_posts())
{
    the_post();?>
<article class="post">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php the_content(); ?></p>
</article>
<?php
}
?>

<?php get_footer(); ?>