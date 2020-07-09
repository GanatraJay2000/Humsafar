<?php wp_head(); ?>
<!DOCTYPE html>
<html <?php language_attributes( ); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ) ?></title>
    <?php wp_head(); ?>
    <style>
        html {
            margin: 0 !important;
        }
    </style>
</head>

<body <?php body_class(); ?>>

    <!-- Site Header -->
    <header class="ent-header shadow-sm">
        <div class="flexer">
            <div class="desktop-nav-element">
                <div class="ent-nav-left">
                    <button class="book-artist">BOOK ARTIST</button>
                </div>
            </div>

            <div class="ent-nav">
                <div class="wrapper">
                    <img class="item" src="../assets/entertainment-title.png" alt="">
                    <nav class="item nav-links">
                        <?php

                        $args = array(
                            'theme_location'=>'entertainment_primary',
                            'link_before'=> '<label style="width:100%;">',
                                'link_after'=> '</label>',
                        );

                        wp_nav_menu($args); 
                        
                    ?>
                    </nav>

                </div>
            </div>
            <div class="ent-nav-right">
                <div class="desktop-nav-element">
                    <div class="social-icons">
                        <span><i style="" class="fab fa-facebook" aria-hidden="true"></i></span>
                        <span><i style="" class="fab fa-instagram" aria-hidden="true"></i></span>
                        <span><i style="" class="fab fa-twitter" aria-hidden="true"></i></span>
                        <span><i style="" class="fab fa-youtube" aria-hidden="true"></i></span>
                    </div>
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
                'link_before'=> '<label style="width:100%;">',
                    'link_after'=> '</label>',
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