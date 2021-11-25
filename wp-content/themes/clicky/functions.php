<?php
// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

// Register scripts & styles
function theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'bootstrap', get_bloginfo('stylesheet_directory').'/css/bootstrap.min.css', 'Bootstrap', '4.0.0', 'screen, projection');
  wp_enqueue_style( 'transitions', get_bloginfo('stylesheet_directory').'/css/transitions.css', 'Transitions', '1.0.0', 'screen, projection');	

  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
  wp_enqueue_script('bootstrap', get_bloginfo('stylesheet_directory').'/js/bootstrap.min.js', array(), '4.0.0', true);
	wp_enqueue_script('slick','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.8.1', true);
	wp_enqueue_script('ajax', get_template_directory_uri() . '/js/ajax.js', array(), '1.0.0', true);
	wp_enqueue_script('waypoint', get_template_directory_uri() . '/js/waypoint.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

// Register Nav
function register_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_menu' );

add_filter('use_block_editor_for_post', '__return_false', 10);

// Admin Wysywig Styles
function wpb_mce_buttons_2($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');
/*
* Callback function to filter the MCE settings
*/ 
function my_mce_before_init_insert_formats( $init_array ) {  
// Define the style_formats array 
    $style_formats = array(
      array(
        'title' => 'Paragraph Styles',
        'items' => array(
          	array(  
            	'title' => 'Sub Heading',  
            	'selector' => 'p',  
            	'classes' => 'sub_heading',
          	),
        )
      ),
      array(
        'title' => 'Buttons',
        'items' => array(
          	array(  
            	'title' => 'Blue Button',  
            	'selector' => 'a',  
            	'classes' => 'button_blue',
          	),
          	array(  
            	'title' => 'White Button',  
            	'selector' => 'a',  
            	'classes' => 'button_white',
          	),        
        )
      ),
      array(
        'title' => 'Text Colour',
        'items' => array(
          	array(  
            	'title' => 'White',
            	'selector' => 'p',
            	'classes' => 'text_white',            
          	),
          	array(  
            	'title' => 'Black',
            	'selector' => 'p',
            	'classes' => 'text_black',
          	),
          	array(  
            	'title' => 'Sea Blue',
            	'selector' => 'p',
            	'classes' => 'text_sea_blue',
          	),
          	array(  
            	'title' => 'Navy Blue',
            	'selector' => 'p',
            	'classes' => 'text_navy_blue',
          	),
          	array(  
            	'title' => 'Light Navy Blue',
            	'selector' => 'p',
            	'classes' => 'text_light_navy_blue',
          	),
          	array(  
            	'title' => 'Dark Grey',
            	'selector' => 'p',
            	'classes' => 'text_dark_grey',
          	),
          	array(  
            	'title' => 'Light Grey',
            	'selector' => 'p',
            	'classes' => 'text_light_grey',
          	),          
        )
      ),
        
    );  
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );  
     
    return $init_array;  
   
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 

//Add custom editor stylesheet
function mte_add_editor_styles() {
  add_editor_style( 'custom-editor-style.css' );
}
add_action( 'init', 'mte_add_editor_styles' );

// Add ACF options page
if( function_exists('acf_add_options_page') ) {  
  acf_add_options_page();  
}
?>