<?php

require_once ( get_template_directory() . '/include/defines.php' );

// Metaboxes
require_once ( get_template_directory() . '/include/metabox-config.php');

// Customizer options
require_once( get_template_directory() . '/include/admin-config.php' );

// Load the default options
require_once( get_template_directory() . '/include/default-theme-options.php' );

if( !function_exists('rayden_get_theme_options') ){

	function rayden_get_theme_options( $option_id ){

		global $rayden_default_theme_options;
		
		$default_value = false;
		if ( isset( $rayden_default_theme_options ) && isset( $rayden_default_theme_options[$option_id] ) ){

			$default_value  = $rayden_default_theme_options[$option_id];

		}

		return get_theme_mod( $option_id, $default_value );

	}
}

if( !function_exists('rayden_get_post_meta') ){

	function rayden_get_post_meta( $opt_name = "", $thePost = array(), $meta_key = "", $def_val = "" ) {

		if( class_exists('Clapat\Rayden\Metaboxes\Meta_Boxes') ){
			
			return Clapat\Rayden\Metaboxes\Meta_Boxes::get_metabox_value( $thePost, $meta_key );
		}
		
		return "";
	}
}

if( !function_exists('rayden_get_current_query') ){

	function rayden_get_current_query(){

		global $rayden_posts_query;
		global $wp_query;
		if( $rayden_posts_query == null ){
			return $wp_query;
		}
		else{
			return $rayden_posts_query;
		}

	}
}

// Portfolio Next Project Image
if( !function_exists('rayden_portfolio_next_project_image') ){

	function rayden_portfolio_next_project_image( $portfolio_image_param = null ){

		global $rayden_portfolio_image_param;
		if( isset( $portfolio_image_param ) && ( $portfolio_image_param != null ) ){
			
			$rayden_portfolio_image_param = $portfolio_image_param;
		}
		
		return $rayden_portfolio_image_param;
	}
}

// Hero properties
require_once ( get_template_directory() . '/include/hero-properties.php');
if( !function_exists('rayden_get_hero_properties') ){

	function rayden_get_hero_properties( $post_type ){

		global $rayden_hero_properties;
		if( !isset( $rayden_hero_properties ) || ( $rayden_hero_properties == null ) ){
			$rayden_hero_properties = new Rayden_Hero_Properties();
		}
		$rayden_hero_properties->getProperties( $post_type );
		return $rayden_hero_properties;
	}
}

// Display Back to Top Button
if( !function_exists('rayden_display_back_to_top') ){

	function rayden_display_back_to_top(){

		if( !is_page_template('showcase-page.php') && 
			!is_page_template('split-slider-page.php') && 
			!is_page_template('parallax-slider-page.php') && 
			!is_page_template('floating-list-page.php') && 
			!is_page_template('parallax-carousel-page.php') && 
			!is_page_template('high-columns-carousel-page.php') && 
			!is_page_template('mixed-carousel-page.php') ){
				
			return true;
		} else {
			
			return false;
		}
	}
}

// Display Copyright
if( !function_exists('rayden_display_copyright') ){

	function rayden_display_copyright(){

		if( !is_page_template('showcase-page.php') && 
			!is_page_template('split-slider-page.php') && 
			!is_page_template('parallax-slider-page.php') && 
			!is_page_template('parallax-carousel-page.php') && 
			!is_page_template('high-columns-carousel-page.php') && 
			!is_page_template('mixed-carousel-page.php') ){
				
			return true;
		} else {
			
			return false;
		}
	}
}

// Display Social Links
if( !function_exists('display_footer_social_links_section') ){

	function display_footer_social_links_section(){

		if( !is_page_template('showcase-page.php') && 
			!is_page_template('split-slider-page.php') && 
			!is_page_template('parallax-slider-page.php') && 
			!is_page_template('parallax-carousel-page.php') && 
			!is_page_template('high-columns-carousel-page.php') && 
			!is_page_template('mixed-carousel-page.php') ){
				
			return true;
		} else {
			
			return false;
		}
	}
}

// Display Swiper Page Navigation
if( !function_exists('rayden_display_swiper_page_navigation') ){

	function rayden_display_swiper_page_navigation(){

		if( is_page_template('showcase-page.php') || 
			is_page_template('parallax-carousel-page.php') || 
			is_page_template('high-columns-carousel-page.php') || 
			is_page_template('mixed-carousel-page.php') ){
				
			return true;
		} else {
			
			return false;
		}
	}
}

// Support for automatic plugin installation
require_once(  get_template_directory() . '/components/helper_classes/tgm-plugin-activation/class-tgm-plugin-activation.php');
require_once(  get_template_directory() . '/components/helper_classes/tgm-plugin-activation/required_plugins.php');

// Widgets
require_once(  get_template_directory() . '/components/widgets/widgets.php');

// Util functions
require_once ( get_template_directory() . '/include/util_functions.php');

// Add theme support
require_once ( get_template_directory() . '/include/theme-support-config.php');

// Theme setup
require_once ( get_template_directory() . '/include/setup-config.php');

// Enqueue scripts
require_once ( get_template_directory() . '/include/scripts-config.php');

// Hooks
require_once ( get_template_directory() . '/include/hooks-config.php');

// Blog comments and pagination
require_once ( get_template_directory() . '/include/blog-config.php');

// Visual Composer
if ( function_exists( 'vc_set_as_theme' ) ) {
	require_once ( get_template_directory() . '/include/vc-config.php');
}

// Editor styles
add_editor_style( 'style-editor.css' );
?>
