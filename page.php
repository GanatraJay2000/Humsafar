<?php 

if(is_page(57) || $post->post_parent == 57){
    get_header( 'new' );
}
else{
    get_header();
}

?>

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
<?php 
if(is_page(57) || $post->post_parent == 57){
    get_footer( 'new' );
}
else{
    get_footer();
}
 ?>