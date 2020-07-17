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
<article class="post">
    
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