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
/* .newsletter-page{
    background-color:red;
    } */
    .newsletter-page h1{
        font-family:"Playfair Display", "Times New Roman", serif;
    }
    .tnp-field label{
        text-align:left;
        font-family:"Playfair Display", "Times New Roman", serif;
        font-size:16px;
        font-weight:400;
    }
    .tnp-field input{
        border-radius:5px;
        border:1px solid var(--midnight);
        font-family:"Playfair Display", "Times New Roman", serif;    
    }
    .tnp-submit{
        background-color:var(--midnight);
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