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
#myModal{
    min-height:20vh;
}
.modal {
    position: absolute;
    top: -21;
    left: 0;
    z-index: 1050;
    display: none;
    width: 100%;
    height: 150%;
    overflow: hidden;
    outline: 0;
}
    </style>
</head>

<body <?php body_class(); ?>>

    <!-- Site Header -->
    <header class="ent-header shadow-sm">
        <div class="flexer">
            <div class="desktop-nav-element">
                <div class="ent-nav-left">
                    <button type="button" data-toggle="modal" data-target="#myModal" class="book-artist my-2 ml-1">BOOK
                        ARTIST</button>
                </div>
            </div>

            <div class="ent-nav">
                <div class="wrapper">
                    <a href="<?php echo site_url('/entertainments'); ?>"><img class="item" src="<?php echo get_template_directory_uri().'/assets_inside/entertainment-title.png' ?>" alt=""></a>
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
                         <a target="_blank" href="<?php echo do_shortcode('[sc name="ent_facebook"]'); ?>"><span><i style="" class="fab fa-facebook" aria-hidden="true"></i></span></a>
                <a target="_blank" href="<?php echo do_shortcode('[sc name="ent_instagram"]'); ?>"><span><i style="" class="fab fa-instagram" aria-hidden="true"></i></span></a>
                <a target="_blank" href="<?php echo do_shortcode('[sc name="ent_twitter"]'); ?>"><span><i style="" class="fab fa-twitter" aria-hidden="true"></i></span></a>                
                <a target="_blank" href="<?php echo do_shortcode('[sc name="event_youtube"]'); ?>"><span><i style="" class="fab fa-youtube" aria-hidden="true"></i></span></a>
                    </div>
                </div>
            </div>
            <button id="entTogglerBtn" class="ent-toggle-btn btn btn-sm">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>

        </div>
        <div id="ent-responsive-nav" class="ent-responsive-nav">
            <nav class="item nav-links">
                <?php

            $args = array(
                'theme_location'=>'entertainment_primary_responsive',
                'link_before'=> '<label style="width:100%;">',
                    'link_after'=> '</label>',
            );

            wp_nav_menu($args); 
            
            ?>
            </nav>
            <div>
                <button type="button" data-toggle="modal" data-target="#myModal" class="book-artist my-2 ml-1">BOOK
                    ARTIST</button>
            </div>

            <div class="pb-2">
                <div class="social-icons ml-2">
                    <a target="_blank" href="<?php echo do_shortcode('[sc name="wedding_facebook"]'); ?>"><span><i style="" class="fab fa-facebook" aria-hidden="true"></i></span></a>
                <a target="_blank" href="<?php echo do_shortcode('[sc name="wedding_instagram"]'); ?>"><span><i style="" class="fab fa-instagram" aria-hidden="true"></i></span></a>
                <a target="_blank" href="<?php echo do_shortcode('[sc name="wedding_twitter"]'); ?>"><span><i style="" class="fab fa-twitter" aria-hidden="true"></i></span></a>                
                <a target="_blank" href="<?php echo do_shortcode('[sc name="event_youtube"]'); ?>"><span><i style="" class="fab fa-youtube" aria-hidden="true"></i></span></a>
                <a>
            </div></a>
        </div>
    </header>
    <!-- Site Header -->    
    <div id="myModal" class="modal fade book-artist-modal" role="dialog" >
        <div class="modal-dialog" >
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close mt-5 text-white" data-dismiss="modal">&times;</button>

                    <div class="mt-3 text-center">
                        <h1>Book Artist
                            <hr>
                        </h1>
                        <!-- <form action="" method="">
                            <div class="d-flex flex-wrap text-left px-lg-5 mx-lg-5">
                                <div class="form-group col-lg-6 col-12">
                                    <div class="form-group">Name<input type="text" required class="form-control"
                                            autocomplete="off" name="name">
                                    </div>
                                    <div class="form-group">Company Name<input type="text" required class="form-control"
                                            autocomplete="off" name="company_name">
                                    </div>
                                    <div class="form-group">Phone Number<input type="number" required
                                            class="form-control" autocomplete="off" name="phone_no">
                                    </div>
                                    <div class="form-group">Email Id<input type="email" required class="form-control"
                                            name="email_id" autocomplete="off">
                                    </div>
                                    <div class="form-group">Address<textarea rows="1" class="form-control"
                                            name="address" autocomplete="off"></textarea>
                                    </div>
                                </div>
                                <div class="form-group col-lg-6 col-12">
                                    <div class="form-group">
                                        Date of Event <input type="date" required type='text' name="date_of_event"
                                            autocomplete="off" class="form-control datepicker-here"
                                            data-position="top right" data-date-format="yyyy-mm-dd">
                                    </div>
                                    <div class="form-group">Event Venu/City<input type="text" required
                                            class="form-control" autocomplete="off" name="venue">
                                    </div>
                                    <div class="form-group">Event Type<input type="text" required class="form-control"
                                            autocomplete="off" name="event_type">
                                    </div>
                                    <div class="form-group">Artist Type<select class="form-control" autocomplete="off"
                                            name="artist_type"></select>
                                    </div>
                                    <div class="form-group">Artist Name<input type="text" required class="form-control"
                                            autocomplete="off" name="artist_name">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-dark" style="border-radius:0">Submit</button>
                            </div>
                        </form> -->
                        <?php echo do_shortcode( '[caldera_form id="CF5f178516e74f3"]' ); ?>
                    </div>
                    </div>
                </div>
            </div>
        </div>    
    <?php
if(!is_page(7)) { ?><div class="content wrapper"><?php } ?>
    

