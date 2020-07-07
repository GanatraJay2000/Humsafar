<?php get_header(); ?>

<?php

while(have_posts())
{
    the_post();?>
<article class="post">
    <p><?php the_title(); ?></p>
    <p><?php the_content(); ?></p>
</article>
<?php
}
?>
<?php get_footer(); ?>