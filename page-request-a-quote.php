<?php get_header(); ?>

<?php

while(have_posts())
{
    the_post();?>
<article class="post">
    <p><?php the_title(); ?></p>
    <?php echo do_shortcode('[caldera_form id="CF5f1727fabd5da"]'); ?>
</article>
<?php
}
?>



<?php get_footer(); ?>