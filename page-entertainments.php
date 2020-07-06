<?php get_header('new'); ?>

<?php

while(have_posts())
{
    the_post();?>
<article class="post">
    <p><?php the_content(); ?></p>
</article>
<?php
}
?>
<?php get_footer('new'); ?>