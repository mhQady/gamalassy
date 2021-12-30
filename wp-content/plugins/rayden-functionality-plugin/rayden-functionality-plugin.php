<?php
/*
Plugin Name: Rayden Functionality Plugin
Plugin URI: http://themeforest.net/user/ClaPat/portfolio
Description: Shortcodes and Custom Post Types for Rayden WordPress Theme
Version: 1.2
Author: Clapat
Author URI: http://themeforest.net/user/ClaPat/
*/

if( !defined('RAYDEN_SHORTCODES_DIR_URL') ) define('RAYDEN_SHORTCODES_DIR_URL', plugin_dir_url(__FILE__));
if( !defined('RAYDEN_SHORTCODES_DIR') ) define('RAYDEN_SHORTCODES_DIR', plugin_dir_path(__FILE__));

// metaboxes
require_once( RAYDEN_SHORTCODES_DIR . '/metaboxes/init.php' );

// load plugin's text domain
add_action( 'plugins_loaded', 'rayden_shortcodes_load_textdomain' );
function rayden_shortcodes_load_textdomain() {
    load_plugin_textdomain( 'clapat_rayden_plugin_text_domain', false, dirname( plugin_basename( __FILE__ ) ) . '/include/langs' );
}

// custom post types
require_once( RAYDEN_SHORTCODES_DIR . '/include/custom-post-types-config.php' );

// rayden shortcodes
require_once( RAYDEN_SHORTCODES_DIR . '/include/shortcodes.php' );

?>