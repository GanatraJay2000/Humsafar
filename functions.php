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
    'entertainment_primary'=> __( 'Entertainment Primary Menu' ),
) );


function add_custom_post() {
    $labels = array(
    'name' => _x('Events', 'post type general name'),
    'singular_name' => _x('Event', 'post type singular name'),
    'add_new' => _x('Add New', 'Events'),
    'add_new_item' => __('Add New Event'),
    'edit_item' => __('Edit Event'),
    'new_item' => __('New Event'),
    'view_item' => __('View Event'),
    'search_items' => __('Search Event'),
    'not_found' => __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => '',

    );

    $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => false,
    'query_var' => true,
    'rewrite' => array('slug','pages'),
    'capability_type' => 'post',
    'hierarchical' => true,
    'menu_position' => 5,
    'supports' => array('title','editor','thumbnail','excerpt',),
    'menu_icon' => 'dashicons-calendar'
    );

    register_post_type( 'events' , $args );

    $labels = array(
    'name' => _x('Artists', 'post type general name'),
    'singular_name' => _x('Artist', 'post type singular name'),
    'add_new' => _x('Add New', 'artists'),
    'add_new_item' => __('Add New artist'),
    'edit_item' => __('Edit Artist'),
    'new_item' => __('New Artist'),
    'view_item' => __('View Artist'),
    'search_items' => __('Search Artist'),
    'not_found' => __('Nothing found'),
    'not_found_in_trash' => __('Nothing found in Trash'),
    'parent_item_colon' => ''
    );

    $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => false,
    'query_var' => true,
    'rewrite' => array('slug','pages'),
    'capability_type' => 'post',
    'hierarchical' => true,
    'menu_position' => 5,
    'supports' => array('title','editor','thumbnail','excerpt',),
    'menu_icon'=>'dashicons-groups',
    );

    register_post_type( 'artists' , $args );

    $labels = array(
        'name' => _x('Destinations', 'post type general name'),
        'singular_name' => _x('Destination', 'post type singular name'),
        'add_new' => _x('Add New', 'Destinations'),
        'add_new_item' => __('Add New Destination'),
        'edit_item' => __('Edit Destination'),
        'new_item' => __('New Destination'),
        'view_item' => __('View Destination'),
        'search_items' => __('Search Destination'),
        'not_found' =>  __('Nothing found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => false,
        'query_var' => true,
        'rewrite' => array('slug','pages'),
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_position' => 5,
        'supports' => array('title','editor','thumbnail','excerpt',),
        'menu_icon' => 'dashicons-location-alt',
      );

    register_post_type( 'destinations' , $args );
}
add_action( 'init', 'add_custom_post' );