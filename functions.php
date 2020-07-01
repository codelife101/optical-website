
<?php

//load stylesheets
function load_css(){

  wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css',array(),false,'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('wpforms',get_template_directory_uri() . '/css/wpforms.css',array(),false,'all');
	wp_enqueue_style('wpforms');
	// Custom CSS
	wp_register_style('main',get_template_directory_uri() . '/css/main.css',array(),false,'all');
	wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts','load_css');


//load javascript
function load_js()
{

		wp_enqueue_script('jquery');

		wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.5.0', true);
		wp_enqueue_script('bootstrap');

    wp_register_script('js', get_template_directory_uri() . '/js/script.js', array('jquery'), false, true);
		wp_enqueue_script('js');


}
add_action('wp_enqueue_scripts', 'load_js');


// theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menus
register_nav_menus(
  array(
    'primary' => __('Header Menu', 'optical'),
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
  )


);
//Bootstrap nav walker
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


function my_sidebars(){
	register_sidebar(
		array(
		  'name' => 'Page Sidebar',
		  'id' => 'page-sidebar',
		  'before_title' => '<h4 class="widget-title">',
		  'after_title' => '</h4>'
		)
	  );
  
	  register_sidebar(
		  array(
			'name' => 'Blog Sidebar',
			'id' => 'blog-sidebar',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		  )
		);
  }
  
  add_action('widgets_init', 'my_sidebars');








// /customizer file
require_once get_template_directory() . '/customizer.php';








// custom post type

function events_custom_post_type(){
	$labels = array(
		'name' => 'Events',
		'singular_name' => 'Event',
		'add_new' => 'Add Event',
		'all_items' => 'All Events',
		'add_new_item' => 'Add Event',
		'edit_item' => 'Edit Event',
		'new_item' => 'New Event',
		'view_item' => 'View Event',
		'search_item' => 'Search Events',
		'not_found' => 'No Events found',
		'not_found_in_trash' => 'No Events found in trash',
		'parent_item_colon' => 'Parent Event'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_icon' => 'dashicons-calendar-alt',
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
			'custom-fields'
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
	register_post_type('events',$args);
}

add_action('init','events_custom_post_type');



function events_taxonomy(){
	$args = array(
		'labels' => array(
			'name' => 'Types',
			'singular_name' => 'Type',
    	),
		'public' => true,
		'hierarchical' => true,//false works like tags, true like catgories without labels
  );
  register_taxonomy('types', array('events'),$args);

}

add_action('init', 'events_taxonomy');

// end of custom post type