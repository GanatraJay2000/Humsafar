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
    <div class="heading">
        <p><?php the_title(); ?></p>
        <h1><span>*</span></h1>
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