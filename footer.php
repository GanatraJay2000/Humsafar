</div>

<footer class="site-footer">
    <nav class="site-nav">
        <?php

            $args = array(
                'theme_location'=>'footer',
            );

            wp_nav_menu($args); 
            
            ?>
        <div class="rights"><?php bloginfo( 'name' ) ?> - &copy; <?php echo date('Y'); ?></div>
    </nav>




</footer>


<?php wp_footer(); ?>

</body>

</html>