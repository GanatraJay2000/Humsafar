<!-- Hi there, nice to work with you. Try Using Git Push !
FrontEnd and Dom people do tasks in their workspace . Backend people start work on the task given to you.
Mostlikely there will be some redundant work because our database is not synced. I'm seeing what i can do.
Hello Jay, This is Abhilash.
Hii, This is Vanshika.
=======HEllo
Everyone, This is Pallavi.
Hey, This is Sarthaki :)







<?php echo "<br><br> As you try to try working on Workspace page it is showing inndex page only. this is a feature of wordpress. so for testing test it locally and then copy the file to the workspace directory.<br> You can copy the vendors folder locally. It contains nice libraries.";?> -->
<center>
<?php

while(have_posts())
{
    the_post();?>
	
<?php get_header();
get_post();
$thumbnail = get_field('image');
$names = get_field('names');
$date = get_field('date'); ?>


	
<article class="post">
    <h2><a href="<?php the_permalink(); ?>"><?php echo $names; ?></a></h2>
	 <h6><?php echo $date; ?></h6>
			<img width="400px" src="<?php echo $thumbnail['url']; ?>" alt="<?php echo $thumbnail['alt']; ?>" />
		
    <p><?php the_content(); ?></p>
</article>
<?php
}
?>
</center>
<?php get_footer(); ?>