<?php

if( !isset( $rayden_default_theme_options ) ){
	
	$rayden_default_theme_options = array();

	$rayden_default_theme_options['clapat_rayden_enable_ajax'] = 0;
	$rayden_default_theme_options['clapat_rayden_enable_smooth_scrolling'] = 0;
	$rayden_default_theme_options['clapat_rayden_enable_smooth_drag'] = 0;
	$rayden_default_theme_options['clapat_rayden_enable_preloader'] = 1;
	$rayden_default_theme_options['clapat_rayden_preloader_hover_first_line'] = esc_html__( 'Stay', 'rayden' );
	$rayden_default_theme_options['clapat_rayden_preloader_hover_second_line'] = esc_html__( 'Relaxed', 'rayden' );
	$rayden_default_theme_options['clapat_rayden_preloader_text'] = esc_html__( 'Please Wait', 'rayden' );
	$rayden_default_theme_options['clapat_rayden_preloader_percentage_text'] = esc_html__( 'Loaded', 'rayden' );
	$rayden_default_theme_options['clapat_rayden_enable_fullscreen_menu'] = 0;
	$rayden_default_theme_options['clapat_rayden_menu_btn_caption'] = esc_html__( 'Menu', 'rayden' );
	$rayden_default_theme_options['clapat_rayden_enable_back_to_top'] = 1;
	$rayden_default_theme_options['clapat_rayden_back_to_top_caption'] = esc_html__( 'Back Top', 'rayden' );
	$rayden_default_theme_options['clapat_rayden_primary_color'] ='#f33a3a';
	$rayden_default_theme_options['clapat_rayden_default_page_bknd_type'] = 'light-content';
	$rayden_default_theme_options['clapat_rayden_enable_page_title_as_hero'] = 1;
	$rayden_default_theme_options['clapat_rayden_enable_magic_cursor'] = 0;
	$rayden_default_theme_options['clapat_rayden_logo'] = esc_url( get_template_directory_uri() . '/images/logo.png' );
	$rayden_default_theme_options['clapat_rayden_logo_light'] = esc_url( get_template_directory_uri() . '/images/logo-white.png' );
	$rayden_default_theme_options['clapat_rayden_footer_copyright'] = wp_kses( __('2021 Copyright <a target="_blank" href="https://www.clapat.com/themes/rayden/">Rayden Theme</a>.', 'rayden'), 'rayden_allowed_html' );
	$rayden_default_theme_options['clapat_rayden_footer_social_links_prefix'] = esc_html__( 'Follow Us', 'rayden' );
	$rayden_default_theme_options['clapat_rayden_social_links_icons'] = 0;
	global $rayden_social_links;
	$social_network_ids = array_keys( $rayden_social_links );
	for( $idx = 1; $idx <= RAYDEN_MAX_SOCIAL_LINKS; $idx++ ){

		$rayden_default_theme_options['clapat_rayden_footer_social_' . $idx] = 'Fb';
		$rayden_default_theme_options['clapat_rayden_footer_social_url_' . $idx] = '';
	}
	$rayden_default_theme_options['clapat_rayden_showcase_transition_pattern_image'] = 'aqua-light';
	$rayden_default_theme_options['clapat_rayden_showcase_transition_pattern_custom_image'] = '';
	$rayden_default_theme_options['clapat_rayden_showcase_next_slide_caption'] = esc_html__('Next Slide', 'rayden');
	$rayden_default_theme_options['clapat_rayden_showcase_prev_slide_caption'] = esc_html__('Prev Slide', 'rayden');
	$rayden_default_theme_options['clapat_rayden_portfolio_custom_slug'] = '';
	$rayden_default_theme_options['clapat_rayden_view_project_caption_first'] = esc_html__('View', 'rayden');
	$rayden_default_theme_options['clapat_rayden_view_project_caption_second'] = esc_html__('Project', 'rayden');
	$rayden_default_theme_options['clapat_rayden_portfolio_autoscroll_hero'] = 1;
	$rayden_default_theme_options['clapat_rayden_portfolio_quick_menu_open_caption'] = esc_html__('All Projects', 'rayden');
	$rayden_default_theme_options['clapat_rayden_portfolio_quick_menu_close_caption'] = esc_html__('Close All', 'rayden');
	$rayden_default_theme_options['clapat_rayden_portfolio_next_caption_first_line'] = esc_html__('Next', 'rayden');
	$rayden_default_theme_options['clapat_rayden_portfolio_next_caption_second_line'] = esc_html__('Project', 'rayden');
	$rayden_default_theme_options['clapat_rayden_portfolio_filter_all_caption'] = esc_html__('All', 'rayden');
	$rayden_default_theme_options['clapat_rayden_portfolio_show_filters_caption'] = esc_html__('Show Filters', 'rayden');
	$rayden_default_theme_options['clapat_rayden_portfolio_share_social_networks_caption'] = esc_html__('Share Project:', 'rayden');
	$rayden_default_theme_options['clapat_rayden_portfolio_share_social_networks'] = '';
	$rayden_default_theme_options['clapat_rayden_portfolio_navigation_order'] = 'forward';
	$rayden_default_theme_options['clapat_rayden_blog_layout'] = 'blog-classic';
	$rayden_default_theme_options['clapat_rayden_blog_navigation_type'] = 'blog-nav-minimal';
	$rayden_default_theme_options['clapat_rayden_blog_next_post_caption'] = esc_html__('Next', 'rayden');
	$rayden_default_theme_options['clapat_rayden_blog_prev_post_caption'] = esc_html__('Prev', 'rayden');
	$rayden_default_theme_options['clapat_rayden_blog_read_more_caption'] = esc_html__('Read More', 'rayden');
	$rayden_default_theme_options['clapat_rayden_blog_prev_posts_caption'] = esc_html__('Prev', 'rayden');
	$rayden_default_theme_options['clapat_rayden_blog_next_posts_caption'] = esc_html__('Next', 'rayden');
	$rayden_default_theme_options['clapat_rayden_blog_default_title'] = esc_html__('Blog', 'rayden');
	$rayden_default_theme_options['clapat_rayden_map_address'] = esc_html__('775 New York Ave, Brooklyn, Kings, New York 11203', 'rayden');
	$rayden_default_theme_options['clapat_rayden_map_marker'] = esc_url( get_template_directory_uri() . '/images/marker.png');
	$rayden_default_theme_options['clapat_rayden_map_zoom'] = 16;
	$rayden_default_theme_options['clapat_rayden_map_company_name'] = esc_html__('Rayden', 'rayden');
	$rayden_default_theme_options['clapat_rayden_map_company_info'] = esc_html__('Here we are. Come to drink a coffee!', 'rayden');
	$rayden_default_theme_options['clapat_rayden_map_type'] = 'satellite';
	$rayden_default_theme_options['clapat_rayden_map_api_key'] = '';
	$rayden_default_theme_options['clapat_rayden_error_title'] = esc_html__('404', 'rayden');
	$rayden_default_theme_options['clapat_rayden_error_info'] = esc_html__('The page you are looking for could not be found.', 'rayden');
	$rayden_default_theme_options['clapat_rayden_error_back_button'] = esc_html__('Home Page', 'rayden');
	$rayden_default_theme_options['clapat_rayden_error_back_button_hover_caption'] = esc_html__('Go Back', 'rayden');
	$rayden_default_theme_options['clapat_rayden_error_back_button_url'] = esc_url( get_home_url() );
	$rayden_default_theme_options['clapat_rayden_error_page_bknd_type'] = 'light-content';
	$rayden_default_theme_options['clapat_rayden_shop_grid_width'] = 'boxed-shop-width';
	$rayden_default_theme_options['clapat_rayden_shop_product_caption'] = 'over-image';
	$rayden_default_theme_options['clapat_rayden_shop_product_caption_color'] = 'product-caption-black';
	$rayden_default_theme_options['clapat_rayden_shop_nav_align'] = 'center-align';
}

if( !class_exists('Clapat\Rayden\Metaboxes\Meta_Boxes') ){
	
	$rayden_default_meta_options = array (
									"rayden-opt-page-bknd-color" =>"light-content", 
									"rayden-opt-page-enable-hero" =>"", 
									"rayden-opt-page-hero-caption-title-first-row" =>"", 
									"rayden-opt-page-hero-caption-title-second-row" =>"", 
									"rayden-opt-page-hero-caption-subtitle" =>"", 
									"rayden-opt-page-hero-caption-alignment" =>"", 
									"rayden-opt-page-enable-navigation" =>"", 
									"rayden-opt-page-navigation-caption-first-line" => esc_html__('Next', 'rayden'),
									"rayden-opt-page-navigation-caption-second-line" => esc_html__('Page', 'rayden'),
									"rayden-opt-page-navigation-next-url" =>"", 
									"rayden-opt-page-navigation-next-title" =>"", 
									"rayden-opt-page-navigation-next-title-first-row" =>"", 
									"rayden-opt-page-navigation-next-title-second-row" =>"", 
									"rayden-opt-page-navigation-next-subtitle" =>"", 
									"rayden-opt-page-portfolio-filter-category" => "",
									"rayden-opt-page-portfolio-layout-type" =>"scattered-grid",
									"rayden-opt-page-portfolio-caption-type" =>"default-caption",
									"rayden-opt-page-portfolio-appear-effect-type" =>"fade-scalein-effect",
									"rayden-opt-page-showcase-filter-category" => "",
									"rayden-opt-page-showcase-intro-caption" => esc_html__('Selected Works', 'rayden'),
									"rayden-opt-page-portfolio-mixed-items" =>"",
									"rayden-opt-page-portfolio-mixed-content-position" =>"after",
									"rayden-opt-page-floating-list-all-projects-caption" => esc_html__('All Projects', 'rayden'),
									"rayden-opt-page-floating-list-all-projects-url" => esc_html__('All Projects Page URL', 'rayden'),
									"rayden-opt-blog-bknd-color" =>"light-content", 
									"rayden-opt-blog-caption-alignment" =>"text-align-left", 
									"rayden-opt-portfolio-bknd-color" =>"light-content",
									"rayden-opt-portfolio-thumbnail-type" => "normal",
									"rayden-opt-portfolio-mixed-carousel-thumbnail-type" => "normal",
									"rayden-opt-portfolio-showcase-include" =>"yes", 
									"rayden-opt-portfolio-hero-img" => "",
									"rayden-opt-portfolio-video" => false,
									"rayden-opt-portfolio-video-webm" => "",
									"rayden-opt-portfolio-video-mp4" => "",
									"rayden-opt-portfolio-hero-caption-title" =>"", 
									"rayden-opt-portfolio-hero-caption-subtitle" =>"",
									"rayden-opt-portfolio-hero-scroll-caption" => esc_html__('Scroll or drag to navigate', 'rayden'),
									"rayden-opt-portfolio-hero-project-info" => "",
									"rayden-opt-portfolio-hero-position" =>"fixed-onscroll", 
								);
}

?>
