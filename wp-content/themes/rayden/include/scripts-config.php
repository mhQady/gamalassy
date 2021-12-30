<?php
/**
 * Created by Clapat.
 * Date: 02/06/20
 * Time: 7:26 AM
 */

if ( ! function_exists( 'rayden_load_scripts' ) ){

	function rayden_load_scripts() {

		// Register css files
		wp_enqueue_style( 'rayden-showcase', get_template_directory_uri() . '/css/showcase.css' );
		
		wp_enqueue_style( 'rayden-hero', get_template_directory_uri() . '/css/hero.css' );
		
		wp_enqueue_style( 'rayden-portfolio', get_template_directory_uri() . '/css/portfolio.css' );
		
		wp_enqueue_style( 'rayden-blog', get_template_directory_uri() . '/css/blog.css' );

		wp_enqueue_style( 'rayden-shortcodes', get_template_directory_uri() . '/css/shortcodes.css' );

		wp_enqueue_style( 'rayden-assets', get_template_directory_uri() . '/css/assets.css' );
		
		wp_enqueue_style( 'rayden-shop', get_template_directory_uri() . '/css/shop.css' );
		
		wp_enqueue_style( 'rayden-theme', get_stylesheet_uri(), array('rayden-showcase', 'rayden-hero', 'rayden-portfolio', 'rayden-blog', 'rayden-shortcodes', 'rayden-assets') );
		
		wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );

		// enqueue standard font style
		$rayden_main_font_url  = '';
		/*
		Translators: If there are characters in your language that are not supported
		by chosen font(s), translate this to 'off'. Do not translate into your own language.
		 */
		if ( 'off' !== _x( 'on', 'Google font: on or off', 'rayden') ) {
			$rayden_main_font_url = add_query_arg( 'family', urlencode( 'Poppins:300,400,500,600,700' ), "//fonts.googleapis.com/css" );
			$rayden_secondary_font_url = add_query_arg( 'family', urlencode( 'Roboto Slab:300,400,500,600,700' ), "//fonts.googleapis.com/css" );
		}
		wp_enqueue_style( 'rayden-main-font', $rayden_main_font_url, array(), '1.0.0' );
		wp_enqueue_style( 'rayden-secondary-font', $rayden_secondary_font_url, array(), '1.0.0' );
		
		// enqueue scripts
		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

		// Register scripts
        wp_enqueue_script(
            'modernizr',
            get_template_directory_uri() . '/js/modernizr.js',
            array('jquery'),
            false,
            true
        );
		
		wp_enqueue_script(
            'jquery-flexnav',
            get_template_directory_uri() . '/js/jquery.flexnav.min.js',
            array('jquery'),
            false,
            true
        );

		wp_enqueue_script(
            'jquery-waitforimages',
            get_template_directory_uri() . '/js/jquery.waitforimages.js',
            array('jquery'),
            false,
            true
        );

		wp_enqueue_script(
            'appear',
            get_template_directory_uri() . '/js/appear.js',
            array('jquery'),
            false,
            true
        );

		wp_enqueue_script(
            'jquery-magnific-popup',
            get_template_directory_uri() . '/js/jquery.magnific-popup.min.js',
            array('jquery'),
            false,
            true
        );

		wp_enqueue_script(
            'jquery-justifiedgallery',
            get_template_directory_uri() . '/js/jquery.justifiedGallery.js',
            array('jquery'),
            false,
            true
        );
		
		wp_enqueue_script(
            'isotope-pkgd',
            get_template_directory_uri() . '/js/isotope.pkgd.js',
            array('jquery'),
            false,
            true
        );
		
		wp_enqueue_script(
            'packery-mode-pkd',
            get_template_directory_uri() . '/js/packery-mode.pkgd.js',
            array('jquery'),
            false,
            true
        );
		
		wp_enqueue_script( 'imagesloaded' );
		
		wp_enqueue_script(
            'three',
            get_template_directory_uri() . '/js/three.min.js',
            array('jquery'),
            false,
            true
        );
		
		wp_enqueue_script(
            'clapatwebgl',
            get_template_directory_uri() . '/js/clapatwebgl.js',
            array('jquery'),
            false,
            true
        );
		
		wp_enqueue_script(
          'scroll-to-plugin',
          get_template_directory_uri() . '/js/scrolltoplugin.min.js',
          array('jquery'),
          false,
          true
        );
		
		wp_enqueue_script(
          'smooth-scroll-drag',
          get_template_directory_uri() . '/js/smooth-scroll-drag.min.js',
          array('jquery'),
          false,
          true
        );

        wp_enqueue_script(
          'gsap',
          get_template_directory_uri() . '/js/gsap.min.js',
          array('jquery'),
          false,
          true
        );
		
		wp_enqueue_script(
            'css-rule-plugin',
            get_template_directory_uri() . '/js/cssruleplugin.min.js',
            array('jquery'),
            false,
            true
        );
		
		wp_enqueue_script(
            'ease-pack',
            get_template_directory_uri() . '/js/easepack.min.js',
            array('jquery'),
            false,
            true
        );
		
		wp_enqueue_script(
            'scroll-magic',
            get_template_directory_uri() . '/js/scrollmagic.min.js',
            array('jquery'),
            false,
            true
        );
		
		wp_enqueue_script(
            'animation-gsap',
            get_template_directory_uri() . '/js/animation.gsap.min.js',
            array('jquery'),
            false,
            true
        );
		
		wp_enqueue_script(
            'draggable',
            get_template_directory_uri() . '/js/draggable.min.js',
            array('jquery'),
            false,
            true
        );
		
		wp_enqueue_script(
          'swiper',
          get_template_directory_uri() . '/js/swiper.min.js',
          array('jquery'),
          false,
          true
        );
		
		wp_enqueue_script(
          'js-socials',
          get_template_directory_uri() . '/js/jssocials.min.js',
          array('jquery'),
          false,
          true
        );
		
		wp_enqueue_script(
          'grid-to-fullscreen',
          get_template_directory_uri() . '/js/gridtofullscreen.min.js',
          array('jquery'),
          false,
          true
        );
		
		wp_enqueue_script(
          'smooth-scrollbar',
          get_template_directory_uri() . '/js/smooth-scrollbar.min.js',
          array('jquery'),
          false,
          true
        );
		
        wp_enqueue_script(
			'rayden-scripts',
            get_template_directory_uri() . '/js/scripts.js',
            array('jquery'),
            false,
            true
        );
		
		wp_localize_script( 'rayden-scripts',
                    'ClapatRaydenThemeOptions',
                    array( "enable_ajax" 		=> rayden_get_theme_options('clapat_rayden_enable_ajax'),
							"enable_preloader" 	=> rayden_get_theme_options('clapat_rayden_enable_preloader'),
							"share_social_network_list" 	=> rayden_get_theme_options('clapat_rayden_portfolio_share_social_networks') )
					);

		wp_localize_script( 'rayden-scripts',
							'ClapatMapOptions',
							array(  "map_marker_image"	=> esc_js( esc_url ( rayden_get_theme_options("clapat_rayden_map_marker") ) ),
									"map_address"		=> rayden_get_theme_options('clapat_rayden_map_address'),
									"map_zoom"			=> rayden_get_theme_options('clapat_rayden_map_zoom'),
									"marker_title"		=> rayden_get_theme_options('clapat_rayden_map_company_name'),
									"marker_text"		=> rayden_get_theme_options('clapat_rayden_map_company_info'),
									"map_type" 			=> rayden_get_theme_options('clapat_rayden_map_type'),
									"map_api_key"		=> rayden_get_theme_options('clapat_rayden_map_api_key') ) );
									
	}
		
}

add_action('wp_enqueue_scripts', 'rayden_load_scripts');

if ( ! function_exists( 'rayden_admin_load_scripts' ) ){

    function rayden_admin_load_scripts() {
		
		// enqueue standard font style
		$rayden_main_font_url  = '';
		/*
		Translators: If there are characters in your language that are not supported
		by chosen font(s), translate this to 'off'. Do not translate into your own language.
		 */
		if ( 'off' !== _x( 'on', 'Google font: on or off', 'rayden') ) {
			$rayden_main_font_url = add_query_arg( 'family', urlencode( 'Poppins:300,400,600,700' ), "//fonts.googleapis.com/css" );
		}
		wp_enqueue_style( 'rayden-main-font', $rayden_main_font_url, array(), '1.0.0' );
	}
}
add_action('admin_enqueue_scripts', 'rayden_admin_load_scripts');