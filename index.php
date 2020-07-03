<!-- Hi there, nice to work with you. Try Using Git Push !
FrontEnd and Dom people do tasks in their workspace . Backend people start work on the task given to you.
Mostlikely there will be some redundant work because our database is not synced. I'm seeing what i can do.
Hello Jay, This is Abhilash.
Hii, This is Vanshika.
=======HEllo
Everyone, This is Pallavi.
Hey, This is Sarthaki :)







<?php echo "<br><br> As you try to try working on Workspace page it is showing inndex page only. this is a feature of wordpress. so for testing test it locally and then copy the file to the workspace directory.<br> You can copy the vendors folder locally. It contains nice libraries.";?> -->

<?php get_header(); ?>

<?php

while(have_posts())
{
    the_post();?>
<article class="post">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><?php the_content(); ?></p>
</article>
<?php
}
?>

<?php get_footer(); ?>