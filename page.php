<?php get_header(); ?>

<?php

while(have_posts())
{
    the_post();?>
<article class="post">
    <div class="page-title">
        <h1><?php the_title(); ?>
            <div class="bow">
                <div><i class="fas fa-icons"></i></div>
            </div>
        </h1>

    </div>
    <p><?php the_content(); ?></p>
</article>
<?php
}
?>
<?php get_footer(); ?>