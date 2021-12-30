<?php

if ( function_exists( 'vc_set_as_theme' ) ) {

	// settings
	vc_set_as_theme( true );
	vc_disable_frontend();
	vc_set_default_editor_post_types( array( 'page', 'rayden_portfolio', 'post' ) );
	
	// Map Rayden shortcodes
	require_once ( get_template_directory() . '/include/vc_map.php');
}
	
?>