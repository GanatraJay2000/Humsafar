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