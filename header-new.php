<?php wp_head(); ?>

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
    <header class="ent-header shadow-sm">
        <div class="flexer">
            <div class="ent-nav-left">
                <div class="desktop-nav-element">
                    meow
                </div>
            </div>

            <div class="ent-nav">
                <div class="wrapper">
                    <img class="item" src="../assets/entertainment-title.png" alt="">
                    <nav class="item nav-links">
                        <?php

                        $args = array(
                            'theme_location'=>'entertainment_primary',
                        );

                        wp_nav_menu($args); 
                        
                    ?>
                    </nav>

                </div>
            </div>
            <div class="ent-nav-right">
                <div class="desktop-nav-element">
                    barks
                </div>
                <button id="entTogglerBtn" class="ent-toggle-btn btn btn-sm">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>
        </div>
        <div id="ent-responsive-nav" class="ent-responsive-nav">
            <nav class="item nav-links">
                <?php

            $args = array(
                'theme_location'=>'entertainment_primary',
            );

            wp_nav_menu($args); 
            
            ?>
            </nav>
            <div><a>Meow</a></div>
            <div class="pb-2"><a>Barks</a></div>
        </div>
    </header>
    <!-- Site Header -->

    <div class="content wrapper">