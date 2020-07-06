<?php global $wpdb; ?>
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
            <nav class="item nav-links pri1">
                <?php

            $args = array(
                'theme_location'=>'primary_one',
            );

            wp_nav_menu($args); 
            
            ?>
            </nav>
            <div class="item nav-brand d-flex">
                <img src="<?php echo get_template_directory_uri() . '/icon.png' ?>" alt="">
                <div class="brand-title">
                    <img src="<?php echo get_template_directory_uri() . '/title.png' ?>" alt="">
                </div>
            </div>
            <nav class="item nav-links pri2">
                <?php

            $args = array(
                'theme_location'=>'primary_two',
            );

            wp_nav_menu($args); 
            
            ?>
            </nav>
            <button id="navTogglerBtn" class="nav-toggle-btn btn btn-sm"><i class="fa fa-bars"
                    aria-hidden="true"></i></button>
        </div>
        <div id="responsive-nav" class="my-responsive-nav bg-dark">
            <nav class="item nav-links">
                <?php

            $args = array(
                'theme_location'=>'primary_one',
            );

            wp_nav_menu($args); 
            
            ?>
            </nav>
            <nav class="item nav-links">
                <?php

            $args = array(
                'theme_location'=>'primary_two',
            );

            wp_nav_menu($args); 
            
            ?>

            </nav>
        </div>


    </header>

    <!-- Site Header -->

    <div class="content wrapper">