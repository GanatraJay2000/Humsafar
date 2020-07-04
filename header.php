<!DOCTYPE html>
<html <?php language_attributes( ); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ) ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Site Header -->
    <header class="site-header">


        <div class="site-nav">
            <nav class="item nav-links">
                <?php

            $args = array(
                'theme_location'=>'primary_one',
            );

            wp_nav_menu($args); 
            
            ?>
            </nav>
            <div class="item nav-brand">
                <img src="<?php echo get_template_directory_uri() . '/icon.png' ?>" alt="">
            </div>
            <nav class="item nav-links">
                <?php

            $args = array(
                'theme_location'=>'primary_two',
            );

            wp_nav_menu($args); 
            
            ?>
            </nav>
        </div>
        <!--         
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        <h5><?php bloginfo( 'description' ); ?></h5>

        <nav class="site-nav">
            <?php

            $args = array(
                'theme_location'=>'primary',
            );

            wp_nav_menu($args); 
            
            ?>
        </nav> -->

    </header>
    <!-- Site Header -->

    <div class="container m-lg-5 my-3 mx-0">