<?php get_header('new'); ?>

<?php

while(have_posts())
{
    the_post();?>
<article class="post">
    <p><?php the_content(); ?></p>
    <div>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates dicta deleniti autem facere nihil ducimus
        itaque laudantium optio eius, illum doloremque distinctio voluptatem quia laborum molestiae nesciunt totam illo
        ea neque atque earum id aliquam ex. Sint veniam ipsam earum perferendis animi suscipit illum adipisci dolor
        similique. Eos debitis tempora esse distinctio, nemo iusto sequi odio inventore praesentium odit facilis rem
        minus reiciendis maxime totam repudiandae. Nulla distinctio nemo alias commodi fugit, rem ipsam assumenda
        perferendis, similique perspiciatis vitae incidunt laboriosam, nobis quisquam molestiae atque libero rerum
        beatae qui? Nam minus veritatis esse modi corrupti optio sed quos deserunt autem.
    </div>
</article>
<?php
}
?>
<?php get_footer('new'); ?>