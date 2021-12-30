<?php
/**
 * Created by Clapat.
 * Date: 04/02/19
 * Time: 6:21 AM
 */

// register navigation menus
if ( ! function_exists( 'rayden_register_nav_menus' ) ){
	
	function rayden_register_nav_menus() {
		
	  register_nav_menus(
		array(
		  'primary-menu' => esc_html__( 'Primary Menu', 'rayden')
		)
	  );
	}
}
add_action( 'init', 'rayden_register_nav_menus' );
 
// custom excerpt length
if( !function_exists('rayden_custom_excerpt_length') ){

	function rayden_custom_excerpt_length( $length ) {

		return intval( rayden_get_theme_options( 'clapat_rayden_blog_excerpt_length' ) );
	}
}

// theme setup
if ( ! function_exists( 'rayden_theme_setup' ) ){

	function rayden_theme_setup() {

		// Set content width
		if ( ! isset( $content_width ) ) $content_width = 1180;

		// add support for multiple languages
		load_theme_textdomain( 'rayden', get_template_directory() . '/languages' );
			
	}

} // rayden_theme_setup

/**
 * Tell WordPress to run rayden_theme_setup() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'rayden_theme_setup' );