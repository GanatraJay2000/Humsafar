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
@import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');

    body{
        background:#f7efe999;
    }
    .newsletter-page{
        margin:30px 10px;        
    }
    
    .newsletter-page h1.title{
        font-size:60px;
        font-family: "Great Vibes", "Playfair Display", "Times New Roman", serif;        
        transform:translate(-1%,0);
    }
    .tnp-field label{
        text-align:left;
        font-family: "Raleway", "Playfair Display", "Times New Roman", serif;
        font-size:18px;
        font-weight:400;
    }
    .tnp-field input{
        border-radius:5px;
        border:1px solid var(--midnight) !important;
        font-family: "Myriad Pro", "Playfair Display", "Times New Roman", serif;    
    }
    .tnp-submit{
        background-color:var(--midnight);
    }
    @media screen and (min-width:500px){
.newsletter-page{
        margin:100px 50px;
        font-size:18px;
    }
    .newsletter-page h1.title{        
        font-size:100px;
    }
    }
</style>
<?php

while(have_posts())
{
    the_post();?>
    <div class="newsletter-page">
    <center>
<article class="post">
<h1 class="title"><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>
<p><a href="<?php echo site_url('/weddings'); ?>">Return to home page</a></p>
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