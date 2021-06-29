<?php
/**
 * @since TwentyTwentyOneChild 1.0.001
 */

add_action( 'wp_enqueue_scripts', 'load_bootstrap', PHP_INT_MAX);
function load_bootstrap(){
	wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri().'/css/bootstrap.min.css');
	}
  
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', PHP_INT_MAX);
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );
}

function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
}
add_action('wp_head', 'favicon_link');

function page_title_sc( ){
   return wp_get_document_title();
}
add_shortcode( 'page_title', 'page_title_sc' );


function mayak_wp_title($title){
$title = trim(preg_replace('/&(.+?);/','',$title));
return $title.' | '.esc_attr(get_bloginfo('name'));
}
add_filter('wp_title', 'mayak_wp_title');

?>