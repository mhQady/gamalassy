<?php
/**
 * Rayden Theme Config File
 */

if ( ! function_exists( 'rayden_options_config' ) ) {

	function rayden_options_config( $wp_customize ){

		$rayden_before_default_section = 40; // Before Colors.
		
		/*** General Settings section ***/
		$wp_customize->add_section(
			'general_settings',
			array(
				'title'    => esc_html__( 'General Settings', 'rayden' ),
				'priority' => ($rayden_before_default_section - 8),
			)
		);
	
		// Enable AJAX
		$wp_customize->add_setting(
			'clapat_rayden_enable_ajax',
			array(
				'default'           	=> 0,
				'sanitize_callback' 	=> 'absint',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_enable_ajax',
			array(
				'label'   		=> esc_html__( 'Load Pages With Ajax', 'rayden' ),
				'description'  	=> esc_html__( 'When navigates to another page it loads the target content without reloading the current page.', 'rayden' ),
				'section' 		=> 'general_settings',
				'type'    		=> 'checkbox',
			)
		);
		
		// Enable Smooth Scroll
		$wp_customize->add_setting(
			'clapat_rayden_enable_smooth_scrolling',
			array(
				'default'           	=> 0,
				'sanitize_callback' 	=> 'absint',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_enable_smooth_scrolling',
			array(
				'label'   		=> esc_html__( 'Enable Smooth Scrolling', 'rayden' ),
				'section' 		=> 'general_settings',
				'type'    		=> 'checkbox',
			)
		);
		
		// Enable Preloader
		$wp_customize->add_setting(
			'clapat_rayden_enable_preloader',
			array(
				'default'           	=> 1,
				'sanitize_callback' 	=> 'absint',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_enable_preloader',
			array(
				'label'   		=> esc_html__( 'Enable Preloader', 'rayden' ),
				'description'  	=> esc_html__( 'Enable preloader mask while the page is loading.', 'rayden' ),
				'section' 		=> 'general_settings',
				'type'    		=> 'checkbox',
			)
		);
		
		$wp_customize->add_setting(
			'clapat_rayden_preloader_hover_first_line',
			array(
				'default'           	=> esc_html__( 'Stay', 'rayden' ),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_preloader_hover_first_line',
			array(
				'label'   		=> esc_html__( 'Preloader Hover Text - First Line', 'rayden' ),
				'description'	=> esc_html__( 'First line of the view caption displayed on hover in preloader.', 'rayden' ),
				'section' 		=> 'general_settings',
				'type'    		=> 'text',
			)
		);
		
		$wp_customize->add_setting(
			'clapat_rayden_preloader_hover_second_line',
			array(
				'default'           	=> esc_html__( 'Relaxed', 'rayden' ),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_preloader_hover_second_line',
			array(
				'label'   		=> esc_html__( 'Preloader Hover Text - Second Line', 'rayden' ),
				'description'	=> esc_html__( 'Second line of the view caption displayed on hover in preloader.', 'rayden' ),
				'section' 		=> 'general_settings',
				'type'    		=> 'text',
			)
		);
		
		$wp_customize->add_setting(
			'clapat_rayden_preloader_text',
			array(
				'default'           	=> esc_html__( 'Please Wait', 'rayden' ),
				'sanitize_callback' 	=> 'wp_kses_post',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_preloader_text',
			array(
				'label'   		=> esc_html__( 'Preloader text', 'rayden' ),
				'description'	=> esc_html__( 'Text displayed while preloader is shown.', 'rayden' ),
				'section' 		=> 'general_settings',
				'type'    		=> 'text',
			)
		);
		
		$wp_customize->add_setting(
			'clapat_rayden_preloader_percentage_text',
			array(
				'default'           	=> esc_html__( 'Loaded', 'rayden' ),
				'sanitize_callback' 	=> 'wp_kses_post',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_preloader_percentage_text',
			array(
				'label'   		=> esc_html__( 'Loading percentage text', 'rayden' ),
				'description'	=> esc_html__( 'Text displayed in addition to loading percentage.', 'rayden' ),
				'section' 		=> 'general_settings',
				'type'    		=> 'text',
			)
		);
		
		// Enable Fullscreen Menu
		$wp_customize->add_setting(
			'clapat_rayden_enable_fullscreen_menu',
			array(
				'default'           	=> 0,
				'sanitize_callback' 	=> 'absint',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_enable_fullscreen_menu',
			array(
				'label'   		=> esc_html__( 'Enable Fullscreen menu on desktop', 'rayden' ),
				'section' 		=> 'general_settings',
				'type'    		=> 'checkbox',
			)
		);
		
		// Menu button caption
		$wp_customize->add_setting(
			'clapat_rayden_menu_btn_caption',
			array(
				'default'           	=> esc_html__( 'Menu', 'rayden' ),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_menu_btn_caption',
			array(
				'label'   		=> esc_html__( 'Menu button caption', 'rayden' ),
				'description'	=> esc_html__( 'Text preceding the burger menu button.', 'rayden' ),
				'section' 		=> 'general_settings',
				'type'    		=> 'text',
			)
		);
		
		// Enable Back To Top button
		$wp_customize->add_setting(
			'clapat_rayden_enable_back_to_top',
			array(
				'default'          		=> 1,
				'sanitize_callback' 	=> 'absint',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_enable_back_to_top',
			array(
				'label'   		=> esc_html__( 'Enable Back To Top Button', 'rayden' ),
				'section' 		=> 'general_settings',
				'type'    		=> 'checkbox',
			)
		);
		
		$wp_customize->add_setting(
			'clapat_rayden_back_to_top_caption',
			array(
				'default'          		=> esc_html__( 'Back Top', 'rayden' ),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_back_to_top_caption',
			array(
				'label'   		=> esc_html__( 'Back To Top Caption', 'rayden' ),
				'description'	=> esc_html__( 'Caption displayed next to the back to top button in the footer.', 'rayden' ),
				'section' 		=> 'general_settings',
				'type'    		=> 'text',
			)
		);
		
		// Primary color
		$wp_customize->add_setting(
			'clapat_rayden_primary_color',
			array(
				'default'           	=> '#f33a3a',
				'sanitize_callback' 	=> 'sanitize_hex_color',
			)
		);
		
		$wp_customize->add_control( new WP_Customize_Color_Control( 
			$wp_customize, 
			'clapat_rayden_primary_color', 
			array(
				'label'      => esc_html__( 'Primary Color', 'rayden' ),
				'description' => esc_html__('Set the primary color.', 'rayden'),
				'section'    => 'header_settings'
			)
		));
		
		// Global background page type
		$wp_customize->add_setting(
			'clapat_rayden_default_page_bknd_type',
			array(
				'default'           	=> 'light-content',
				'sanitize_callback' 	=> 'rayden_sanitize_default_page_bknd_type',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_default_page_bknd_type',
			array(
				'label'   		=> esc_html__('Default Background Type', 'rayden'),
				'description'	=> esc_html__('Default background type for pages, posts and category pages. The background type set in page options will overwrite this option.', 'rayden'),
				'section' 		=> 'general_settings',
				'type'    		=> 'select',
				'choices'   	=> array( 'dark-content' => esc_html__('White', 'rayden'),
										'light-content' => esc_html__('Black', 'rayden') ),
			)
		);
		
		// Enable page title as hero caption
		$wp_customize->add_setting(
			'clapat_rayden_enable_page_title_as_hero',
			array(
				'default'           	=> 1,
				'sanitize_callback' 	=> 'absint',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_enable_page_title_as_hero',
			array(
				'label'   		=> esc_html__( 'Display Page Title When Hero Section Is Disabled', 'rayden' ),
				'section' 		=> 'general_settings',
				'type'    		=> 'checkbox',
			)
		);
		
		// Enable Magic Cursor
		$wp_customize->add_setting(
			'clapat_rayden_enable_magic_cursor',
			array(
				'default'           	=> 0,
				'sanitize_callback' 	=> 'absint',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_enable_magic_cursor',
			array(
				'label'   		=> esc_html__( 'Enable Magic Cursor', 'rayden' ),
				'section' 		=> 'general_settings',
				'type'    		=> 'checkbox',
			)
		);
		/*** End General Settings section ***/
		
		
		/*** Header Settings section ***/
		$wp_customize->add_section(
			'header_settings',
			array(
				'title'    => esc_html__( 'Header Settings', 'rayden' ),
				'priority' => ($rayden_before_default_section - 7),
			)
		);
		
		// Logo (default)
		$wp_customize->add_setting(
			'clapat_rayden_logo',
			array(
				'default'           		=> get_template_directory_uri() . '/images/logo.png',
				'sanitize_callback' 	=> 'esc_url_raw',
			)
		);
		
		$wp_customize->add_control( new WP_Customize_Image_Control( 
			$wp_customize, 
			'clapat_rayden_logo', 
			array(
				'label'      => esc_html__( 'Header Logo', 'rayden' ),
				'description' => esc_html__('Upload your logo to be displayed at the left side of the header menu.', 'rayden'),
				'section'    => 'header_settings'
			)
		));
		
		// Logo (light version)
		$wp_customize->add_setting(
			'clapat_rayden_logo_light',
			array(
				'default'           	=> get_template_directory_uri() . '/images/logo-white.png',
				'sanitize_callback' 	=> 'esc_url_raw',
			)
		);
		
		$wp_customize->add_control( new WP_Customize_Image_Control( 
			$wp_customize, 
			'clapat_rayden_logo_light', 
			array(
				'label'      => esc_html__( 'Header Logo Light', 'rayden' ),
				'description' => esc_html__('Light logo displayed on dark backgrounds.', 'rayden'),
				'section'    => 'header_settings'
			)
		));
		/*** End Header Settings section ***/
		
		
		/*** Footer Settings section ***/
		$wp_customize->add_section(
			'footer_settings',
			array(
				'title'    => esc_html__( 'Footer Settings', 'rayden' ),
				'priority' => ($rayden_before_default_section - 6),
			)
		);
		
		// Copyright
		$wp_customize->add_setting(
			'clapat_rayden_footer_copyright',
			array(
				'default'           	=> wp_kses( __('2021 Copyright <a target="_blank" href="https://www.clapat.com/themes/rayden/">Rayden Theme</a>.', 'rayden'), 'rayden_allowed_html' ),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_footer_copyright',
			array(
				'label'   		=> esc_html__( 'Copyright text', 'rayden' ),
				'description'	=> esc_html__( 'This is the copyright text displayed in the footer.', 'rayden' ),
				'section' 		=> 'footer_settings',
				'type'    		=> 'textarea',
			)
		);
		
		// Social links
		$wp_customize->add_setting(
			'clapat_rayden_footer_social_links_prefix',
			array(
				'default'           	=> esc_html__( 'Follow Us', 'rayden' ),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_footer_social_links_prefix',
			array(
				'label'   		=> esc_html__( 'Social Links Prefix', 'rayden' ),
				'description'	=> esc_html__('Text preceding the social links.', 'rayden'),
				'section' 		=> 'footer_settings',
				'type'    		=> 'text',
			)
		);
		
		// Social Links Display
		$wp_customize->add_setting(
			'clapat_rayden_social_links_icons',
			array(
				'default'           	=> 0,
				'sanitize_callback' 	=> 'absint',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_social_links_icons',
			array(
				'label'   		=> esc_html__( 'Display Social Links As Fontawesome Icons', 'rayden' ),
				'description'  	=> esc_html__( 'If unchecked will display the social networks acronyms.', 'rayden' ),
				'section' 		=> 'footer_settings',
				'type'    		=> 'checkbox',
			)
		);
		
		global $rayden_social_links;
		$social_network_ids = array_keys( $rayden_social_links );
		for( $idx = 1; $idx <= RAYDEN_MAX_SOCIAL_LINKS; $idx++ ){

			$wp_customize->add_setting(
				'clapat_rayden_footer_social_' . $idx,
				array(
					'default'           	=> 'Fb',
					'sanitize_callback' 	=> 'rayden_sanitize_social_links',
				)
			);
			
			$wp_customize->add_control(
				'clapat_rayden_footer_social_' . $idx,
				array(
					'label'   		=>  esc_html__('Social Network Name ', 'rayden' ) . $idx,
					'section' 		=> 'footer_settings',
					'type'    		=> 'select',
					'choices'   	=> $rayden_social_links,
				)
			);
			
			$wp_customize->add_setting(
				'clapat_rayden_footer_social_url_' . $idx,
				array(
					'default'           	=> '',
					'sanitize_callback' 	=> 'esc_url_raw',
				)
			);
			
			$wp_customize->add_control(
				'clapat_rayden_footer_social_url_' . $idx,
				array(
					'label'   		=>  esc_html__('Social Link URL ', 'rayden' ) . $idx,
					'section' 		=> 'footer_settings',
					'type'    		=> 'url',
				)
			);
			
		}
		/*** End Footer Settings section ***/
		
		/*** Showcase Settings section ***/
		$wp_customize->add_section(
			'showcase_settings',
			array(
				'title'    => esc_html__( 'Showcase Settings', 'rayden' ),
				'priority' => ($rayden_before_default_section - 5),
			)
		);
		
		// Showcase transition image
		$wp_customize->add_setting(
			'clapat_rayden_showcase_transition_pattern_image',
			array(
				'default'           	=> 'aqua-light',
				'sanitize_callback' 	=> 'rayden_sanitize_showcase_transition_pattern_image',
			)
		);
		
		global $rayden_slide_transitions_labels;
		$wp_customize->add_control(
			'clapat_rayden_showcase_transition_pattern_image',
			array(
				'label'   		=> esc_html__('Showcase Transition Pattern Image', 'rayden'),
				'section' 		=> 'showcase_settings',
				'type'    		=> 'select',
				'choices'   	=> $rayden_slide_transitions_labels,
			)
		);
		
		// Showcase custom transition image
		$wp_customize->add_setting(
			'clapat_rayden_showcase_transition_pattern_custom_image',
			array(
				'default'           	=> '',
				'sanitize_callback' 	=> 'esc_url_raw',
			)
		);
		
		$wp_customize->add_control( new WP_Customize_Image_Control( 
			$wp_customize, 
			'clapat_rayden_showcase_transition_pattern_custom_image', 
			array(
				'label'      => esc_html__( 'Showcase Transition Pattern Image - Custom', 'rayden' ),
				'description' => esc_html__('Upload your custom showcase transition pattern image.', 'rayden'),
				'section'    => 'showcase_settings'
			)
		));
		
		// Next, Prev Slide caption
		$wp_customize->add_setting(
			'clapat_rayden_showcase_next_slide_caption',
			array(
				'default'           	=> esc_html__( 'Next Slide', 'rayden' ),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_showcase_next_slide_caption',
			array(
				'label'   		=> esc_html__( 'Next Slide Caption', 'rayden' ),
				'description'	=> esc_html__( 'The caption of the next slide navigation button in showcase templates.', 'rayden' ),
				'section' 		=> 'showcase_settings',
				'type'    		=> 'text',
			)
		);
		
		$wp_customize->add_setting(
			'clapat_rayden_showcase_prev_slide_caption',
			array(
				'default'           	=> esc_html__( 'Prev Slide', 'rayden' ),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_showcase_prev_slide_caption',
			array(
				'label'   		=> esc_html__( 'Prev Slide Caption', 'rayden' ),
				'description'	=> esc_html__( 'The caption of the previous slide navigation button in showcase templates.', 'rayden' ),
				'section' 		=> 'showcase_settings',
				'type'    		=> 'text',
			)
		);
		/*** End Showcase Settings section ***/
		
		/*** Portfolio Settings section ***/
		$wp_customize->add_section(
			'portfolio_settings',
			array(
				'title'    => esc_html__( 'Portfolio Settings', 'rayden' ),
				'priority' => ($rayden_before_default_section - 4),
			)
		);
		
		// Custom portfolio slug
		$wp_customize->add_setting(
			'clapat_rayden_portfolio_custom_slug',
			array(
				'default'           	=> '',
				'sanitize_callback' 	=> 'rayden_sanitize_slug_field',
				'transport'         	=> 'postMessage',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_portfolio_custom_slug',
			array(
				'label'   		=> esc_html__( 'Custom Slug', 'rayden' ),
				'description'	=> esc_html__('If you want your portfolio post type to have a custom slug in the url, please enter it here. You will still have to refresh your permalinks after saving this! This is done by going to Settings > Permalinks and clicking save.', 'rayden'),
				'section' 		=> 'portfolio_settings',
				'type'    		=> 'text',
			)
		);
		
		// Portfolio Enable Hero Autoscroll
		$wp_customize->add_setting(
			'clapat_rayden_portfolio_autoscroll_hero',
			array(
				'default'           	=> 1,
				'sanitize_callback' 	=> 'absint',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_portfolio_autoscroll_hero',
			array(
				'label'   		=> esc_html__( 'Autoscroll Hero Image', 'rayden' ),
				'description'	=> esc_html__( 'When entering the portfolio page, slightly scroll down the hero image.', 'rayden' ),
				'section' 		=> 'portfolio_settings',
				'type'    		=> 'checkbox',
			)
		);
		
		// View Project caption
		$wp_customize->add_setting(
			'clapat_rayden_view_project_caption_first',
			array(
				'default'           	=> esc_html__( 'View', 'rayden' ),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_view_project_caption_first',
			array(
				'label'   		=> esc_html__( 'View Project Caption - First Line', 'rayden' ),
				'description'	=> esc_html__( 'First line of the view caption displayed on hover in showcase or carousel templates.', 'rayden' ),
				'section' 		=> 'portfolio_settings',
				'type'    		=> 'text',
			)
		);
		
		$wp_customize->add_setting(
			'clapat_rayden_view_project_caption_second',
			array(
				'default'           	=> esc_html__( 'Project', 'rayden' ),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_view_project_caption_second',
			array(
				'label'   		=> esc_html__( 'View Project Caption - Second Line', 'rayden' ),
				'description'	=> esc_html__( 'Second line of the view caption displayed on hover in showcase or carousel templates.', 'rayden' ),
				'section' 		=> 'portfolio_settings',
				'type'    		=> 'text',
			)
		);
		
		
		// Next Project caption
		$wp_customize->add_setting(
			'clapat_rayden_portfolio_next_caption_first_line',
			array(
				'default'           	=> esc_html__('Next', 'rayden'),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_portfolio_next_caption_first_line',
			array(
				'label'   		=> esc_html__( 'Next Project Caption - First Line', 'rayden' ),
				'description'	=> esc_html__('Caption of the next project in portfolio navigation displayed on hover - on two lines.', 'rayden'),
				'section' 		=> 'portfolio_settings',
				'type'    		=> 'text',
			)
		);
		
		$wp_customize->add_setting(
			'clapat_rayden_portfolio_next_caption_second_line',
			array(
				'default'           	=> esc_html__('Project', 'rayden'),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_portfolio_next_caption_second_line',
			array(
				'label'   		=> esc_html__( 'Next Project Caption - Second Line', 'rayden' ),
				'description'	=> esc_html__('Caption of the next project in portfolio navigation displayed on hover - on two lines.', 'rayden'),
				'section' 		=> 'portfolio_settings',
				'type'    		=> 'text',
			)
		);
			
		// 'Quick Menu' portfolio items list caption
		$wp_customize->add_setting(
			'clapat_rayden_portfolio_quick_menu_open_caption',
			array(
				'default'           	=> esc_html__('All Projects', 'rayden'),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_portfolio_quick_menu_open_caption',
			array(
				'label'   		=> esc_html__('Quick Menu Open Caption', 'rayden'),
				'description'	=> esc_html__('The caption the quick menu button in the showcase slider that will open the portfolio items list.', 'rayden'),
				'section' 		=> 'portfolio_settings',
				'type'    		=> 'text',
			)
		);
		
		$wp_customize->add_setting(
			'clapat_rayden_portfolio_quick_menu_close_caption',
			array(
				'default'           	=> esc_html__('Close All', 'rayden'),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_portfolio_quick_menu_close_caption',
			array(
				'label'   		=> esc_html__('Quick Menu Close Caption', 'rayden'),
				'description'	=> esc_html__('The caption the quick menu button in the showcase slider that will close the portfolio items list.', 'rayden'),
				'section' 		=> 'portfolio_settings',
				'type'    		=> 'text',
			)
		);
		
		// 'All' portfolio category caption
		$wp_customize->add_setting(
			'clapat_rayden_portfolio_filter_all_caption',
			array(
				'default'           	=> esc_html__('All', 'rayden'),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_portfolio_filter_all_caption',
			array(
				'label'   		=> esc_html__('All Category Caption', 'rayden'),
				'description'	=> esc_html__('The caption the All category displaying all portfolio items in portfolio page templates.', 'rayden'),
				'section' 		=> 'portfolio_settings',
				'type'    		=> 'text',
			)
		);
		
		// Portfolio Show Filters caption
		$wp_customize->add_setting(
			'clapat_rayden_portfolio_show_filters_caption',
			array(
				'default'           	=> esc_html__('Show Filters', 'rayden'),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_portfolio_show_filters_caption',
			array(
				'label'   		=> esc_html__( 'Portfolio Grid - Show Filters Caption', 'rayden' ),
				'description'	=> esc_html__('Caption of the Show Filters button displayed in Portfolio Grid layout.', 'rayden'),
				'section' 		=> 'portfolio_settings',
				'type'    		=> 'text',
			)
		);
		
		// Portfolio Share Social Networks caption
		$wp_customize->add_setting(
			'clapat_rayden_portfolio_share_social_networks_caption',
			array(
				'default'           		=> esc_html__('Share Project:', 'rayden'),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_portfolio_share_social_networks_caption',
			array(
				'label'   			=> esc_html__( 'Share This Project Caption', 'rayden' ),
				'section' 		=> 'portfolio_settings',
				'type'    		=> 'text',
			)
		);	
		
		// Portfolio Share Social Networks list
		$wp_customize->add_setting(
			'clapat_rayden_portfolio_share_social_networks',
			array(
				'default'           		=> '',
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_portfolio_share_social_networks',
			array(
				'label'   		=> esc_html__( 'Share This Project On', 'rayden' ),
				'description'	=> esc_html__('This is a list of social networks you can share the project on, displayed at the bottom right of the hero image. Leave this field empty if you do not want to show it. Type in the social lower case social networks names, separated by comma (,). The list of available networks: twitter, facebook, googleplus, linkedin, pinterest, email, stumbleupon, whatsapp, telegram, line, viber, pocket, messenger, vkontakte, rss', 'rayden'),
				'section' 		=> 'portfolio_settings',
				'type'    		=> 'text',
			)
		);	
			
		// Portfolio navigation order
		$wp_customize->add_setting(
			'clapat_rayden_portfolio_navigation_order',
			array(
				'default'           	=> 'forward',
				'sanitize_callback' 	=> 'rayden_sanitize_portfolio_navigation_order',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_portfolio_navigation_order',
			array(
				'label'   		=> esc_html__('Portfolio Items Navigation Order', 'rayden'),
				'section' 		=> 'portfolio_settings',
				'type'    		=> 'select',
				'choices'   	=> array( 'forward' => esc_html__('Forward in time (next item is newer or loops to the oldest if current item is the newest)', 'rayden'),
											  'backward' => esc_html__('Backward in time (next item is older or loops to the newest if current item is the oldest)', 'rayden') ),
			)
		);
		/*** End Portfolio Settings section ***/
		
		/*** Blog Settings section ***/
		$wp_customize->add_section(
			'blog_settings',
			array(
				'title'    => esc_html__( 'Blog Settings', 'rayden' ),
				'priority' => ($rayden_before_default_section - 3),
			)
		);
		
		// Blog pages layout
		$wp_customize->add_setting(
			'clapat_rayden_blog_layout',
			array(
				'default'           	=> 'blog-classic',
				'sanitize_callback' 	=> 'rayden_sanitize_blog_pages_layout',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_blog_layout',
			array(
				'label'   		=> esc_html__('Blog Pages Layout', 'rayden'),
				'section' 		=> 'blog_settings',
				'type'    		=> 'select',
				'choices'   	=> array( 'blog-classic' => esc_html__('Classic', 'rayden'),
										  'blog-minimal' => esc_html__('Minimal', 'rayden') ),
			)
		);
		
		// Blog pages navigation type
		$wp_customize->add_setting(
			'clapat_rayden_blog_navigation_type',
			array(
				'default'           	=> 'blog-nav-minimal',
				'sanitize_callback' 	=> 'rayden_sanitize_blog_navigation_type',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_blog_navigation_type',
			array(
				'label'   		=> esc_html__('Blog Pages Navigation Type', 'rayden'),
				'section' 		=> 'blog_settings',
				'type'    		=> 'select',
				'choices'   	=> array( 'blog-nav-classic' => esc_html__('Classic', 'rayden'),
										  'blog-nav-minimal' => esc_html__('Minimal', 'rayden') ),
			)
		);
		
		// Navigation caption
		$wp_customize->add_setting(
			'clapat_rayden_blog_next_post_caption',
			array(
				'default'           	=> esc_html__('Next', 'rayden'),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_blog_next_post_caption',
			array(
				'label'   		=> esc_html__('Next Post Caption', 'rayden'),
				'description'	=> esc_html__('Caption of the button linking to the next single blog post page.', 'rayden'),
				'section' 		=> 'blog_settings',
				'type'    		=> 'text',
			)
		);
		
		$wp_customize->add_setting(
			'clapat_rayden_blog_prev_post_caption',
			array(
				'default'           	=> esc_html__('Prev', 'rayden'),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_blog_prev_post_caption',
			array(
				'label'   		=> esc_html__('Prev Post Caption', 'rayden'),
				'description'	=> esc_html__('Caption of the button linking to the previous single blog post page.', 'rayden'),
				'section' 		=> 'blog_settings',
				'type'    		=> 'text',
			)
		);
		
		$wp_customize->add_setting(
			'clapat_rayden_blog_read_more_caption',
			array(
				'default'           	=> esc_html__('Read More', 'rayden'),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_blog_read_more_caption',
			array(
				'label'   		=> esc_html__('Read More Caption', 'rayden'),
				'description'	=> esc_html__('Caption of the button linking to the single blog post page from the blog index.', 'rayden'),
				'section' 		=> 'blog_settings',
				'type'    		=> 'text',
			)
		);
		
		$wp_customize->add_setting(
			'clapat_rayden_blog_prev_posts_caption',
			array(
				'default'           	=> esc_html__('Prev', 'rayden'),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_blog_prev_posts_caption',
			array(
				'label'   		=> esc_html__('Previous Posts Page Caption', 'rayden'),
				'description'	=> esc_html__('Caption of the button linking to the previous blog posts page.', 'rayden'),
				'section' 		=> 'blog_settings',
				'type'    		=> 'text',
			)
		);
		
		$wp_customize->add_setting(
			'clapat_rayden_blog_next_posts_caption',
			array(
				'default'           	=> esc_html__('Next', 'rayden'),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_blog_next_posts_caption',
			array(
				'label'   		=> esc_html__('Next Posts Page Caption', 'rayden'),
				'description'	=> esc_html__('Caption of the button linking to the next blog posts page.', 'rayden'),
				'section' 		=> 'blog_settings',
				'type'    		=> 'text',
			)
		);
		
		// Blog pages default title
		$wp_customize->add_setting(
			'clapat_rayden_blog_default_title',
			array(
				'default'           	=> esc_html__('Blog', 'rayden'),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_blog_default_title',
			array(
				'label'   		=> esc_html__('Default Posts Page Title', 'rayden'),
				'description'	=> esc_html__('Title of the default blog posts page. The default blog posts page is the page displaying blog posts when there is no front page set in Settings -> Reading.', 'rayden'),
				'section' 		=> 'blog_settings',
				'type'    		=> 'text',
			)
		);
		/*** End Blog Settings section ***/
		
		/*** Map Settings section ***/
		$wp_customize->add_section(
			'map_settings',
			array(
				'title'    => esc_html__( 'Map Settings', 'rayden' ),
				'priority' => ($rayden_before_default_section - 2),
			)
		);
		
		// Map address
		$wp_customize->add_setting(
			'clapat_rayden_map_address',
			array(
				'default'           	=>  esc_html__('775 New York Ave, Brooklyn, Kings, New York 11203', 'rayden'),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_map_address',
			array(
				'label'   		=> esc_html__('Google Map Address', 'rayden'),
				'description'  	=> esc_html__('Example: 775 New York Ave, Brooklyn, Kings, New York 11203. Or you can enter latitude and longitude for greater precision. Example: 41.40338, 2.17403 (in decimal degrees - DDD)', 'rayden'),
				'section' 		=> 'map_settings',
				'type'    		=> 'text',
			)
		);
		
		// Map marker image
		$wp_customize->add_setting(
			'clapat_rayden_map_marker',
			array(
				'default'           	=> get_template_directory_uri() . '/images/marker.png',
				'sanitize_callback' 	=> 'esc_url_raw',
			)
		);
		
		$wp_customize->add_control( new WP_Customize_Image_Control( 
			$wp_customize, 
			'clapat_rayden_map_marker', 
			array(
				'label'      => esc_html__( 'Map Marker', 'rayden' ),
				'description' => esc_html__('Please choose an image file for the marker.', 'rayden'),
				'section'    => 'map_settings'
			)
		));
		
		// Map zoom
		$wp_customize->add_setting(
			'clapat_rayden_map_zoom',
			array(
				'default'           	=> 16,
				'sanitize_callback' 	=> 'absint',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_map_zoom',
			array(
				'label'   		=> esc_html__( 'Map Zoom Level', 'rayden' ),
				'description'  	=> esc_html__('Higher number will be more zoomed in.', 'rayden'),
				'section' 		=> 'map_settings',
				'type'    		=> 'number',
				'input_attrs' 	=> array( 'min' => 0, 'max' => 30, 'step'  => 1 )
			)
		);
		
		// Pop-up marker title
		$wp_customize->add_setting(
			'clapat_rayden_map_company_name',
			array(
				'default'           	=> esc_html__('Rayden', 'rayden'),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_map_company_name',
			array(
				'label'   		=> esc_html__('Pop-up marker title', 'rayden'),
				'section' 		=> 'map_settings',
				'type'    		=> 'text',
			)
		);
		
		// Pop-up marker text
		$wp_customize->add_setting(
			'clapat_rayden_map_company_info',
			array(
				'default'           	=> esc_html__('Here we are. Come to drink a coffee!', 'rayden'),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_map_company_info',
			array(
				'label'   		=> esc_html__('Pop-up marker text', 'rayden'),
				'section' 		=> 'map_settings',
				'type'    		=> 'text',
			)
		);
		
		// Map type
		$wp_customize->add_setting(
			'clapat_rayden_map_type',
			array(
				'default'           	=> 'satellite',
				'sanitize_callback' 	=> 'rayden_sanitize_map_type',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_map_type',
			array(
				'label'   		=> esc_html__('Map Type', 'rayden'),
				'description'	=> esc_html__('Set the map type as road map or satellite.', 'rayden'),
				'section' 		=> 'map_settings',
				'type'    		=> 'select',
				'choices'   	=> array( 'satellite' => esc_html__('Satellite', 'rayden'),
										'roadmap' => esc_html__('Roadmap', 'rayden') ),
			)
		);
		
		// Google maps API key
		$wp_customize->add_setting(
			'clapat_rayden_map_api_key',
			array(
				'default'           	=> '',
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_map_api_key',
			array(
				'label'   		=> esc_html__('Google Maps API Key', 'rayden'),
				'description'	=> esc_html__('Without it, the map may not be displayed. If you have an api key paste it here. More information on how to obtain a google maps api key: https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key', 'rayden'),
				'section' 		=> 'map_settings',
				'type'    		=> 'text',
			)
		);
		/*** End Map Settings section ***/
		
		/*** Error Page section ***/
		$wp_customize->add_section(
			'error_page_settings',
			array(
				'title'    => esc_html__( 'Error Page Settings', 'rayden' ),
				'priority' => ($rayden_before_default_section - 1),
			)
		);
		
		// Error page title
		$wp_customize->add_setting(
			'clapat_rayden_error_title',
			array(
				'default'           	=> esc_html__('404', 'rayden'),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_error_title',
			array(
				'label'   		=> esc_html__('Error Page Title', 'rayden'),
				'section' 		=> 'error_page_settings',
				'type'    		=> 'text',
			)
		);
		
		// Error page info
		$wp_customize->add_setting(
			'clapat_rayden_error_info',
			array(
				'default'           	=> esc_html__('The page you are looking for could not be found.', 'rayden'),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_error_info',
			array(
				'label'   		=> esc_html__('Error Page Info Text', 'rayden'),
				'section' 		=> 'error_page_settings',
				'type'    		=> 'text',
			)
		);
		
		// Error back button
		$wp_customize->add_setting(
			'clapat_rayden_error_back_button',
			array(
				'default'           	=> esc_html__('Home Page', 'rayden'),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_error_back_button',
			array(
				'label'   		=> esc_html__('Back Button Caption', 'rayden'),
				'section' 		=> 'error_page_settings',
				'type'    		=> 'text',
			)
		);
		
		// Error back button - caption on hover
		$wp_customize->add_setting(
			'clapat_rayden_error_back_button_hover_caption',
			array(
				'default'           	=> esc_html__('Go Back', 'rayden'),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_error_back_button_hover_caption',
			array(
				'label'   		=> esc_html__('Back Button Caption On Hover', 'rayden'),
				'section' 		=> 'error_page_settings',
				'type'    		=> 'text',
			)
		);
		
		// Error back button url
		$wp_customize->add_setting(
			'clapat_rayden_error_back_button_url',
			array(
				'default'           	=> esc_url( get_home_url() ),
				'sanitize_callback' 	=> 'rayden_sanitize_text_field',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_error_back_button_url',
			array(
				'label'   		=> esc_html__('Back Button URL', 'rayden'),
				'section' 		=> 'error_page_settings',
				'type'    		=> 'text',
			)
		);
		
		// 404 page background type
		$wp_customize->add_setting(
			'clapat_rayden_error_page_bknd_type',
			array(
				'default'           	=> 'light-content',
				'sanitize_callback' 	=> 'rayden_sanitize_error_page_bknd_type',
			)
		);
		
		$wp_customize->add_control(
			'clapat_rayden_error_page_bknd_type',
			array(
				'label'   		=> esc_html__('Background Type', 'rayden'),
				'description'	=> esc_html__('Background type for the 404 error page.', 'rayden'),
				'section' 		=> 'error_page_settings',
				'type'    		=> 'select',
				'choices'   	=> array( 'dark-content' 	=> esc_html__('White', 'rayden'),
										'light-content' => esc_html__('Black', 'rayden') ),
			)
		);
		/*** End Error Page Settings section ***/
		
		if( function_exists("is_woocommerce") ){
			
			/*** Shop Page section ***/
			$wp_customize->add_section(
				'shop_page_settings',
				array(
					'title'    => esc_html__( 'Shop Page Settings', 'rayden' ),
					'priority' => $rayden_before_default_section,
				)
			);
			
			// Shop Grid Width
			$wp_customize->add_setting(
				'clapat_rayden_shop_grid_width',
				array(
					'default'           	=> 'boxed-shop-width',
					'sanitize_callback' 	=> 'rayden_sanitize_shop_grid_width',
				)
			);
			
			$wp_customize->add_control(
				'clapat_rayden_shop_grid_width',
				array(
					'label'   		=> esc_html__('Grid Width', 'rayden'),
					'description'	=> esc_html__('Products grid width in shop page.', 'rayden'),
					'section' 		=> 'shop_page_settings',
					'type'    		=> 'select',
					'choices'   	=> array( 'boxed-shop-width' 	=> esc_html__('Boxed', 'rayden'),
											'full-shop-width' => esc_html__('Full Width', 'rayden') ),
				)
			);
			
			// Shop Product Caption
			$wp_customize->add_setting(
				'clapat_rayden_shop_product_caption',
				array(
					'default'           	=> 'over-image',
					'sanitize_callback' 	=> 'rayden_sanitize_shop_product_caption',
				)
			);
			
			$wp_customize->add_control(
				'clapat_rayden_shop_product_caption',
				array(
					'label'   		=> esc_html__('Product Caption', 'rayden'),
					'description'	=> esc_html__('Products caption position in relation to their image.', 'rayden'),
					'section' 		=> 'shop_page_settings',
					'type'    		=> 'select',
					'choices'   	=> array( 'over-image' 	=> esc_html__('Over Image', 'rayden'),
											'below-image' => esc_html__('Below Image', 'rayden') ),
				)
			);
			
			// Product Caption Color
			$wp_customize->add_setting(
				'clapat_rayden_shop_product_caption_color',
				array(
					'default'           	=> 'product-caption-black',
					'sanitize_callback' 	=> 'rayden_sanitize_shop_product_caption_color',
				)
			);
			
			$wp_customize->add_control(
				'clapat_rayden_shop_product_caption_color',
				array(
					'label'   		=> esc_html__('Product Caption Color', 'rayden'),
					'description'	=> esc_html__('The color of product thumbnail captions in shop page.', 'rayden'),
					'section' 		=> 'shop_page_settings',
					'type'    		=> 'select',
					'choices'   	=> array( 'product-caption-white' 	=> esc_html__('White', 'rayden'),
											'product-caption-black' => esc_html__('Black', 'rayden') ),
				)
			);
			
			// Shop Products Navigation Alignment
			$wp_customize->add_setting(
				'clapat_rayden_shop_nav_align',
				array(
					'default'           	=> 'center-align',
					'sanitize_callback' 	=> 'rayden_sanitize_shop_nav_align',
				)
			);
			
			$wp_customize->add_control(
				'clapat_rayden_shop_nav_align',
				array(
					'label'   		=> esc_html__('Navigation Alignment', 'rayden'),
					'description'	=> esc_html__('Products navigation alignment in shop page.', 'rayden'),
					'section' 		=> 'shop_page_settings',
					'type'    		=> 'select',
					'choices'   	=> array( 'center-align' 	=> esc_html__('Center', 'rayden'),
											'left-align' => esc_html__('Left', 'rayden') ),
				)
			);
			
			/*** End Shop Page Settings section ***/
		
		}
		
	}

	add_action( 'customize_register', 'rayden_options_config' );
}

/**
 * Sanitize a text or textarea field
 *
 * @param string $input - the text
 */
function rayden_sanitize_text_field( $input ) {
	
	return wp_kses( $input, 'rayden_allowed_html' );
}

/**
 * Sanitize a custom slug field
 *
 * @param string $input - the input slug
 */
function rayden_sanitize_slug_field( $input ) {
	
	return sanitize_title( $input );
}


/**
 * Sanitize the social network options.
 *
 * @param string $input social network id.
 */
function rayden_sanitize_social_links( $input ) {
	
	global $rayden_social_links;
	$valid = array_keys( $rayden_social_links );
	
	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}

	return 'Fb';
}


/**
 * Sanitize the portfolio navigation order.
 *
 * @param string $input - portfolio navigation order
 */
function rayden_sanitize_portfolio_navigation_order( $input ) {
	
	$valid = array( 'forward', 'backward' );
	
	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}

	return 'forward';
}

/**
 * Sanitize the blog layout types.
 *
 * @param string $input - blog layout type
 */
function rayden_sanitize_blog_pages_layout( $input ) {
	
	$valid = array( 'blog-classic', 'blog-minimal' );
	
	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}

	return 'forward';
}

/**
 * Sanitize the blog navigation types.
 *
 * @param string $input - blog layout type
 */
function rayden_sanitize_blog_navigation_type( $input ) {
	
	$valid = array( 'blog-nav-classic', 'blog-nav-minimal' );
	
	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}

	return 'forward';
}

/**
 * Sanitize the showcase transition pattern settings.
 *
 * @param string $input - showcase transition
 */
function rayden_sanitize_showcase_transition_pattern_image( $input ) {
	
	global $rayden_slide_transitions;
	$valid = array_keys( $rayden_slide_transitions );
	
	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}

	return 'first';
}

/**
 * Sanitize the map type
 *
 * @param string $input - map type
 */
function rayden_sanitize_map_type( $input ) {
	
	$valid = array( 'satellite', 'roadmap' );
	
	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}

	return 'satellite';
}

/**
 * Sanitize the global page background type
 *
 * @param string $input - background type
 */
function rayden_sanitize_default_page_bknd_type( $input ) {
	
	$valid = array( 'dark-content', 'light-content' );
	
	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}

	return 'light-content';
}

/**
 * Sanitize the error page background type
 *
 * @param string $input - background type
 */
function rayden_sanitize_error_page_bknd_type( $input ) {
	
	$valid = array( 'dark-content', 'light-content' );
	
	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}

	return 'light-content';
}

/**
 * Sanitize the product caption color
 *
 * @param string $input - product caption color
 */
function rayden_sanitize_shop_product_caption_color( $input ) {
	
	$valid = array( 'product-caption-white', 'product-caption-black' );
	
	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}

	return 'product-caption-black';
}

/**
 * Sanitize the shop page grid width
 *
 * @param string $input - grid width type
 */
function rayden_sanitize_shop_grid_width( $input ) {
	
	$valid = array( 'boxed-shop-width', 'full-shop-width' );
	
	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}

	return 'boxed-shop-width';
}

/**
 * Sanitize the shop page product caption
 *
 * @param string $input - product caption position
 */
function rayden_sanitize_shop_product_caption( $input ) {
	
	$valid = array( 'over-image', 'below-image' );
	
	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}

	return 'over-image';
}

/**
 * Sanitize the shop page navigation alignment
 *
 * @param string $input - nav align type
 */
function rayden_sanitize_shop_nav_align( $input ) {
	
	$valid = array( 'center-align', 'left-align' );
	
	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}

	return 'center-align';
}