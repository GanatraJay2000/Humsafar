<?php 
$parentId = $post->post_parent;

if(is_page(57) || $parentId == 57){
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
    <center>
<article class="post">
<h1><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>
<br>
<a href="javascript:window.history.back();"> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back</a>
</article>
</center>
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