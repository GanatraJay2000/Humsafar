<?php

add_filter('jpeg_quality', function($arg){return 100;});

function website_files()
{

wp_enqueue_script( 'jquery', get_template_directory_uri() . '/library/jquery.js', null, '1.0' );
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/library/bootstrap.min.js', array( 'jquery'), '1.0' );
wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/library/owl.carousel.min.js', array( 'jquery' ), '1.0' );
wp_enqueue_script( 'main-js', get_template_directory_uri() . '/library/main.js', array( 'jquery', 'owl-js', 'date_picker_en'), '1.0' );


wp_enqueue_style( 'font-css', 'https://db.onlinewebfonts.com/c/7fdb09ff5a96f39768f311d5471d68a9?family=FuturaLig' );
wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/library/bootstrap.min.css',null, '1.0' );
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
    'primary_responsive' => __('Primary Responsive'),
    'footer'=> __( 'Footer Menu' ),
    'entertainment_primary'=> __( 'Entertainment Primary Menu' ),
    'entertainment_primary_responsive'=> __( 'Entertainment Primary Responsive' ),
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
    'has_archive' => true,
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
    'supports' => array('title','editor','thumbnail','excerpt','comments'),
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


if ( ! function_exists( 'rwmb_meta' ) ) {
    function rwmb_meta( $key, $args = '', $post_id = null ) {
        return false;
    }
}
function custom_fields( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = array(
		'id' => 'untitled',
		'title' => esc_html__( 'Custom Fields', 'metabox-online-generator' ),
		'post_types' => array('post', 'page' , 'events', 'artists'),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'gallery',
				'type' => 'image_advanced',
				'name' => esc_html__( 'Gallery', 'metabox-online-generator' ),
				'desc' => esc_html__( 'gallery of images', 'metabox-online-generator' ),
				'max_file_uploads' => '20',
			),
			array(
				'id' => $prefix . 'location',
				'type' => 'text',
				'name' => esc_html__( 'Location', 'metabox-online-generator' ),
				'desc' => esc_html__( 'location of event', 'metabox-online-generator' ),
				'placeholder' => esc_html__( 'Enter Location of Event', 'metabox-online-generator' ),
			),
			array(
				'id' => $prefix . 'event_date',
				'type' => 'date',
				'name' => esc_html__( 'Event Date', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Date of Event to be held', 'metabox-online-generator' ),
				'js_options' => array(),
				'attributes' => array(),
			),
			array(
				'id' => $prefix . 'event_type',
				'type' => 'text',
				'name' => esc_html__( 'Event Type', 'metabox-online-generator' ),
				'placeholder' => esc_html__( 'Type of Event  - Wedding / Concert', 'metabox-online-generator' ),
			),
			array(
				'id' => $prefix . 'thumbnail_image',
				'type' => 'image_advanced',
				'name' => esc_html__( 'Thumbnail Image', 'metabox-online-generator' ),
				'max_file_uploads' => '1',
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'custom_fields' );






function artists_custom_filed( $meta_boxes ) {
	$prefix = '';

	$meta_boxes[] = array(
		'id' => 'untitled',
		'title' => esc_html__( 'Artists Custom Fields', 'metabox-online-generator' ),
		'post_types' => array('artists' ),
		'context' => 'advanced',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'category',
				'name' => esc_html__( 'Category', 'metabox-online-generator' ),
				'type' => 'select',
				'desc' => esc_html__( 'category of Artists', 'metabox-online-generator' ),
				'placeholder' => esc_html__( 'Select an Item', 'metabox-online-generator' ),
				'options' => array(
					'Anchors' => esc_html__( 'Anchors', 'metabox-online-generator' ),
					'Singers' => esc_html__( 'Singers', 'metabox-online-generator' ),
					'Dancers' => esc_html__( 'Dancers', 'metabox-online-generator' ),
					'Comedians' => esc_html__( 'Comedians', 'metabox-online-generator' ),
					'TV Stars' => esc_html__( 'TV Stars', 'metabox-online-generator' ),
					'Celebrity' => esc_html__( 'Celebrity', 'metabox-online-generator' ),
					'Magicians' => esc_html__( 'Magicians', 'metabox-online-generator' ),
					'Folk Dance Groups' => esc_html__( 'Folk Dance Groups', 'metabox-online-generator' ),
					'Choreographers' => esc_html__( 'Choreographers', 'metabox-online-generator' ),
					'Foreign Artists' => esc_html__( 'Foreign Artists', 'metabox-online-generator' ),
					'DJs' => esc_html__( 'DJs', 'metabox-online-generator' ),
					'Models' => esc_html__( 'Models', 'metabox-online-generator' ),
				),
			),
			array(
				'id' => $prefix . 'on_home_page',
				'name' => esc_html__( 'On Home Page', 'metabox-online-generator' ),
				'type' => 'radio',
				'desc' => esc_html__( 'is the element to be displayed on home page', 'metabox-online-generator' ),
				'placeholder' => '',
				'options' => array(
					'No' => esc_html__( 'No', 'metabox-online-generator' ),
					'Yes' => esc_html__( 'Yes', 'metabox-online-generator' ),
				),
				'inline' => 'true',
				'std' => 'No',
			),
			array(
				'id' => $prefix . 'on_articles_page',
				'name' => esc_html__( 'On Articles Page', 'metabox-online-generator' ),
				'type' => 'radio',
				'desc' => esc_html__( 'is the element to be displayed on articles page', 'metabox-online-generator' ),
				'placeholder' => '',
				'options' => array(
					'No' => esc_html__( 'No', 'metabox-online-generator' ),
					'Yes' => esc_html__( 'Yes', 'metabox-online-generator' ),
				),
				'inline' => 'true',
				'std' => 'No',
			),
			array(
				'id' => $prefix . 'order_on_home_page',
				'type' => 'number',
				'name' => esc_html__( 'Order on Home Page', 'metabox-online-generator' ),
			),
			array(
				'id' => $prefix . 'order_on_articles_page',
				'type' => 'number',
				'name' => esc_html__( 'Order on ArticlesPage', 'metabox-online-generator' ),
			),
			array(
				'id' => $prefix . 'image_on_home_page',
				'type' => 'image_advanced',
				'name' => esc_html__( 'Image on Home Page', 'metabox-online-generator' ),
				'max_file_uploads' => '1',
			),
			array(
				'id' => $prefix . 'image_on_articles_page',
				'type' => 'image_advanced',
				'name' => esc_html__( 'Image on Articles Page', 'metabox-online-generator' ),
				'max_file_uploads' => '1',
			),
			array(
				'id' => $prefix . 'artist_thumbnail',
				'type' => 'image_advanced',
				'name' => esc_html__( 'Artist Thumbnail', 'metabox-online-generator' ),
				'max_file_uploads' => '1',
			),
			array(
				'id' => $prefix . 'artist_gallery',
				'type' => 'image_advanced',
				'name' => esc_html__( 'Artist Gallery', 'metabox-online-generator' ),
				'max_file_uploads' => '10',
			),
			array(
				'id' => $prefix . 'facebook_copy_5',
				'type' => 'url',
				'name' => esc_html__( 'Facebook', 'metabox-online-generator' ),
			),
			array(
				'id' => $prefix . 'youtube',
				'type' => 'url',
				'name' => esc_html__( 'Youtube', 'metabox-online-generator' ),
			),
			array(
				'id' => $prefix . 'instagram',
				'type' => 'url',
				'name' => esc_html__( 'Instagram', 'metabox-online-generator' ),
			),
			
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'artists_custom_filed' );

