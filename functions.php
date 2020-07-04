<?php

function website_files()
{

wp_enqueue_script( 'jquery', get_template_directory_uri() . '/library/jquery.js', null, '1.0' );
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/library/bootstrap.min.js', array( 'jquery'), '1.0' );
wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/library/owl.carousel.min.js', array( 'jquery', ), '1.0' );
wp_enqueue_script( 'main-js', get_template_directory_uri() . '/library/main.js', array( 'jquery', 'owl-js'), '1.0' );


wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/library/bootstrap.min.css',
null, '1.0' );
wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/library/animate.css', null, '1.0' );
wp_enqueue_style( 'owl-css', get_template_directory_uri() . '/library/owl.carousel.min.css', null, '1.0' );
wp_enqueue_style( 'owl-css', get_template_directory_uri() . '/library/owl.default.theme.min.css', null, '1.0' );
wp_enqueue_style( 'fa', get_template_directory_uri() . '/library/font_awesome.css', null, '1.0' );
wp_enqueue_style( 'fonts', get_template_directory_uri() . '/library/fonts.css', null, '1.0' );
wp_enqueue_style( 'style', get_stylesheet_uri( ), array('fonts'));

}

add_action('wp_enqueue_scripts','website_files');

// Navigation Menus
register_nav_menus( array(
    'primary_one' => __( 'Primary One Menu' ),
    'primary_two'=>__( 'Primary Two Menu' ),
    'footer'=> __( 'Footer Menu' ),
) );

// Our custom post type function
function create_posttype() {
 
    register_post_type( 'movies',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Movies' ),
                'singular_name' => __( 'Movie' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'movies'),
            'show_in_rest' => true,
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );