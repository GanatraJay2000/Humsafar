<?php 
$parentId = $post->post_parent;

if(is_page(57) || $parentId == 57){
    get_header( 'new' );
}
else{
    get_header();
}

?>
<style>
.newsletter-page{
    background-color:red;
    }
</style>
<?php

while(have_posts())
{
    the_post();?>
    <div class="newsletter-page">
    <center>
<article class="post">
<h1><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>
</article>
</center>
</div>
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