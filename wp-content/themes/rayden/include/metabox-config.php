<?php

// You may replace $redux_opt_name with a string if you wish. If you do so, change loader.php
// as well as all the instances below.
$redux_opt_name = 'clapat_' . RAYDEN_THEME_ID . '_theme_options';


if ( !function_exists( "rayden_add_metaboxes" ) ){

    function rayden_add_metaboxes( $metaboxes ) {

    $metaboxes = array();


    ////////////// Page Options //////////////
    $page_options = array();
    $page_options[] = array(
        'title'         => esc_html__('General', 'rayden'),
        'icon_class'    => 'icon-large',
        'icon'          => 'el-icon-wrench',
        'desc'          => esc_html__('Options concerning all page templates.', 'rayden'),
        'fields'        => array(
			
			array(
                'id'        => 'rayden-opt-page-bknd-color',
                'type'      => 'select',
                'title'     => esc_html__('Background color', 'rayden'),
				'desc'      => esc_html__('Background color for this page.', 'rayden'),
                'options'   => array(
                    'dark-content' 	=> esc_html__('White', 'rayden'),
                    'light-content' => esc_html__('Black', 'rayden')

                ),
				'default'   => 'light-content',
            ),
			
			/**************************HERO SECTION OPTIONS**************************/
			array(
                'id'        => 'rayden-opt-page-enable-hero',
                'type'      => 'switch',
                'title'     => esc_html__('Display Hero Section', 'rayden'),
                'desc'      => esc_html__('Enable "hero" section displayed immediately below page header. Showcase and Carousel pages do not have a hero section.', 'rayden'),
				'on'       => esc_html__('Yes', 'rayden'),
				'off'      => esc_html__('No', 'rayden'),
                'default'   => false
            ),

			array(
                'id'        => 'rayden-opt-page-hero-caption-title-first-row',
                'type'      => 'text',
				'required'  => array( 'rayden-opt-page-enable-hero', '=', true ),
                'title'     => esc_html__('Hero Caption Title - First Row', 'rayden'),
                'subtitle'  => esc_html__('The first row of the title displayed over hero section.', 'rayden'),
	        ),

			array(
                'id'        => 'rayden-opt-page-hero-caption-title-second-row',
                'type'      => 'text',
				'required'  => array( 'rayden-opt-page-enable-hero', '=', true ),
                'title'     => esc_html__('Hero Caption Title - Second Row', 'rayden'),
                'subtitle'  => esc_html__('The second row of the title displayed over hero section.', 'rayden'),
	        ),
			
			array(
                'id'        => 'rayden-opt-page-hero-caption-subtitle',
                'type'      => 'text',
				'required'  => array( 'rayden-opt-page-enable-hero', '=', true ),
                'title'     => esc_html__('Hero Caption Subtitle', 'rayden'),
                'subtitle'  => esc_html__('Subtitle displayed over hero section, underneath the title.', 'rayden'),
			),
			
			array(
                 'id'       	=> 'rayden-opt-page-hero-caption-alignment',
                 'type'     	=> 'select',
				 'required'  	=> array( 'rayden-opt-page-enable-hero', '=', true ),
                 'title'    	=> esc_html__( 'Hero Caption Alignment', 'rayden'),
                 'desc' 		=> esc_html__( 'The alignment of the hero caption.', 'rayden'),
                 'options'   	=> array(
                    'text-align-left' 	=> esc_html__('Left', 'rayden'),
					'text-align-center'	=> esc_html__('Center', 'rayden'),
                 ),
				 'default'	=> 'text-align-left',
            ),
			/**************************END - HERO SECTION OPTIONS**************************/
			
			/**************************PAGE NAVIGATION SECTION OPTIONS**************************/
			array(
                'id'        => 'rayden-opt-page-enable-navigation',
                'type'      => 'switch',
                'title'     => esc_html__('Enable Page Navigation Section', 'rayden'),
                'desc'      => esc_html__('Enable page navigation section displayed above the footer. Available only in Default, Portfolio and Portfolio Mixed templates.', 'rayden'),
				'on'       => esc_html__('Yes', 'rayden'),
				'off'      => esc_html__('No', 'rayden'),
                'default'   => false
            ),
			
			array(
                'id'        => 'rayden-opt-page-navigation-caption-first-line',
                'type'      => 'text',
				'required'  => array( 'rayden-opt-page-enable-navigation', '=', true ),
                'title'     => esc_html__('Navigation Caption - First Line', 'rayden'),
                'desc'  => esc_html__('Caption displayed when hovering the page navigation - first line.', 'rayden'),
				'default' => esc_html__('Next', 'rayden'),
	        ),
			
			array(
                'id'        => 'rayden-opt-page-navigation-caption-second-line',
                'type'      => 'text',
				'required'  => array( 'rayden-opt-page-enable-navigation', '=', true ),
                'title'     => esc_html__('Navigation Caption - Second Line', 'rayden'),
                'desc'  => esc_html__('Caption displayed when hovering the page navigation - second line.', 'rayden'),
				'default' => esc_html__('Page', 'rayden'),
	        ),

			array(
                'id'        => 'rayden-opt-page-navigation-next-url',
                'type'      => 'url',
				'required'  => array( 'rayden-opt-page-enable-navigation', '=', true ),
                'title'     => esc_html__('Next Page Url', 'rayden'),
                'desc'  => esc_html__('The url of the next page in navigation.', 'rayden'),
	        ),
			
			array(
                'id'        => 'rayden-opt-page-navigation-next-title-first-row',
                'type'      => 'text',
				'required'  => array( 'rayden-opt-page-enable-navigation', '=', true ),
                'title'     => esc_html__('Next Page Title - First Row', 'rayden'),
                'desc'  => esc_html__('The first row title of the next page in navigation. Displayed in two rows with a horizontal moving effect on scroll. For an optimal transition between pages this field is the next page hero title or next page title (if hero is disabled).', 'rayden'),
	        ),

			array(
                'id'        => 'rayden-opt-page-navigation-next-title-second-row',
                'type'      => 'text',
				'required'  => array( 'rayden-opt-page-enable-navigation', '=', true ),
                'title'     => esc_html__('Next Page Title - Second Row', 'rayden'),
                'desc'  => esc_html__('The second row of the next page title.', 'rayden'),
	        ),
			
			array(
                'id'        => 'rayden-opt-page-navigation-next-subtitle',
                'type'      => 'text',
				'required'  => array( 'rayden-opt-page-enable-navigation', '=', true ),
                'title'     => esc_html__('Next Page Subtitle', 'rayden')
	        ),
			/**************************END - PAGE NAVIGATION SECTION OPTIONS**************************/
        ),
    );

	$page_options[] = array(
        'title'         => esc_html__('Portfolio and Portfolio Mixed Templates', 'rayden'),
        'icon_class'    => 'icon-large',
        'icon'          => 'el-icon-folder-open',
        'desc'          => esc_html__('Options concerning only Portfolio templates.', 'rayden'),
        'fields'        => array(

			array(
                'id'        	=> 'rayden-opt-page-portfolio-filter-category',
                'type'      	=> 'text',
				'title'     	=> esc_html__('Category Filter', 'rayden'),
                'desc'  		=> esc_html__('Paste here the portfolio category slugs you want to include in the Portfolio or Portfolio Mixed separated by comma. Do not include spaces. For example photography,branding. It will exclude the rest of the categories. The portfolio category slugs can be found in Portfolio -> Categories.', 'rayden'),
				'default'  	=> '',
	        ),
			
			array(
                 'id'       	=> 'rayden-opt-page-portfolio-layout-type',
                 'type'     	=> 'select',
                 'title'    	=> esc_html__( 'Portfolio Layout Type', 'rayden'),
                 'desc' 		=> esc_html__( 'Type of layout in this portfolio page.', 'rayden'),
                 'options'   => array(
					'bricks-grid' 		=> esc_html__('Bricks', 'rayden'),
					'scattered-grid' 	=> esc_html__('Creative', 'rayden'),
					'classic-grid'		=> esc_html__('Classic', 'rayden'),
					'ladder-grid'		=> esc_html__('Ladder', 'rayden'),
					'metro-grid'		=> esc_html__('Packery Metro', 'rayden'),
					'sided-grid'		=> esc_html__('Sided', 'rayden'),
					'spaced-grid'		=> esc_html__('Spaced Metro', 'rayden'),
					'tall-grid'			=> esc_html__('Tall', 'rayden'),
                 ),
				 'default'	=> 'scattered-grid',
            ),
			
			array(
                 'id'       	=> 'rayden-opt-page-portfolio-caption-type',
                 'type'     	=> 'select',
                 'title'    	=> esc_html__( 'Caption Type', 'rayden'),
                 'desc' 		=> esc_html__( 'How the portfolio item caption is displayed in relation with its thumbnail.', 'rayden'),
                 'options'   => array(
					'default-caption' 	=> esc_html__('Default', 'rayden'),
                    'hover-caption' 	=> esc_html__('Hover', 'rayden'),
					'tooltip-caption'	=> esc_html__('Tooltip', 'rayden'),
                 ),
				 'default'	=> 'default-caption',
            ),
			
			array(
                 'id'       	=> 'rayden-opt-page-portfolio-appear-effect-type',
                 'type'     	=> 'select',
                 'title'    	=> esc_html__( 'Appear effect', 'rayden'),
                 'desc' 		=> esc_html__( 'This type of effect is applied to portfolio thumbnails. For Sided portfolio layout, the appear effect is always Scale Width.', 'rayden'),
                 'options'   => array(
                    'fade-scalein-effect' 	=> esc_html__('Scale In', 'rayden'),
					'fade-scaleout-effect'	=> esc_html__('Scale Out', 'rayden'),
					'width-scale-effect'	=> esc_html__('Scale Width', 'rayden'),
                 ),
				 'default'	=> 'fade-scalein-effect',
            ),
			
			array(
                 'id'       => 'rayden-opt-page-portfolio-mixed-items',
                 'type'   => 'text',
                 'title'    => esc_html__( 'Maximum Number Of Items In Portfolio Mixed', 'rayden' ),
                 'desc' 	=> esc_html__( 'Available only for Portfolio Mixed Template: the maximum number of portfolio items displayed. Leave empty for ALL.', 'rayden' )
             ),
			 
			 array(
                 'id'       	=> 'rayden-opt-page-portfolio-mixed-content-position',
                 'type'     	=> 'select',
                 'title'    	=> esc_html__( 'Page Content Position', 'rayden'),
                 'desc' 		=> esc_html__( 'Available only for Portfolio Mixed Template: page content position in relation with portfolio grid.', 'rayden'),
                 'options'   => array(
                    'after' 	=> esc_html__('After Portfolio Grid', 'rayden'),
					'before'	=> esc_html__('Before Portfolio Grid', 'rayden'),
                 ),
				 'default'	=> true,
            ),
			
		),
	);
	
	$page_options[] = array(
        'title'         => esc_html__('Showcase Templates', 'rayden'),
        'icon_class'    => 'icon-large',
        'icon'          => 'el-icon-folder-open',
        'desc'          => esc_html__('Options concerning only showcase templates.', 'rayden'),
        'fields'        => array(

			array(
                'id'        	=> 'rayden-opt-page-showcase-filter-category',
                'type'      	=> 'text',
				'title'     	=> esc_html__('Category Filter', 'rayden'),
                'desc'  		=> esc_html__('Paste here the portfolio category slugs you want to include in all showcase page templates separated by comma. Do not include spaces. For example photography,branding. It will exclude the rest of the categories. The portfolio category slugs can be found in Portfolio -> Categories.', 'rayden'),
				'default'  	=> '',
	        ),
						
			array(
                'id'        	=> 'rayden-opt-page-showcase-intro-caption',
                'type'      	=> 'text',
				'title'     	=> esc_html__('Intro Caption', 'rayden'),
                'desc'  		=> esc_html__('The introductory text displayed at the top of the list. It applies to showcase floating list and vertical covers templates', 'rayden'),
				'default'  		=> esc_html__('Selected Works', 'rayden'),
	        ),
						
        ),
	);
		
	$page_options[] = array(
        'title'         => esc_html__('Floating List Template', 'rayden'),
        'icon_class'    => 'icon-large',
        'icon'          => 'el-icon-folder-open',
        'desc'          => esc_html__('Options concerning only Floating List template.', 'rayden'),
        'fields'        => array(

			array(
                'id'        	=> 'rayden-opt-page-floating-list-all-projects-caption',
                'type'      	=> 'text',
				'title'     	=> esc_html__('All Projects Caption', 'rayden'),
                'desc'  		=> esc_html__('Caption of the button displayed to the bottom left of the floating list leading to the all projects page.', 'rayden'),
				'default'  		=> esc_html__('All Projects', 'rayden'),
	        ),
			
			array(
                'id'        	=> 'rayden-opt-page-floating-list-all-projects-url',
                'type'      	=> 'text',
				'title'     	=> esc_html__('All Projects Page URL', 'rayden'),
                'desc'  		=> esc_html__('The URL of the page containing all projects. Leave empty if you do not want to display the all projects button.', 'rayden'),
				'default'  		=> '',
	        ),
        ),

    );
	
	$metaboxes[] = array(
        'id'            => 'clapat_' . RAYDEN_THEME_ID . '_page_options',
        'title'         => esc_html__( 'Page Options', 'rayden'),
        'post_types'    => array( 'page' ),
        'position'      => 'normal', // normal, advanced, side
        'priority'      => 'high', // high, core, default, low
        'sidebar'       => false, // enable/disable the sidsebar in the normal/advanced positions
        'sections'      => $page_options,
    );

    $blog_post_options = array();
    $blog_post_options[] = array(

         'icon_class'    => 'icon-large',
         'icon'          => 'el-icon-wrench',
         'fields'        => array(

			array(
                'id'        => 'rayden-opt-blog-bknd-color',
                'type'      => 'select',
                'title'     => esc_html__('Background color', 'rayden'),
				'desc'      => esc_html__('Background color for this blog post.', 'rayden'),
                'options'   => array(
                    'dark-content' 	=> esc_html__('White', 'rayden'),
                    'light-content' => esc_html__('Black', 'rayden')

                ),
				'default'   => 'light-content',
            ),
			
			array(
                 'id'       	=> 'rayden-opt-blog-hero-caption-alignment',
                 'type'     	=> 'select',
                 'title'    	=> esc_html__( 'Header Caption Alignment', 'rayden'),
                 'desc' 		=> esc_html__( 'The alignment of the blog post caption.', 'rayden'),
                 'options'   => array(
                    'text-align-left' 	=> esc_html__('Left', 'rayden'),
					'text-align-center'	=> esc_html__('Center', 'rayden'),
                 ),
				 'default'	=> 'text-align-left',
            ),
          )
        );
			/**************************END - HERO SECTION OPTIONS**************************/

    $metaboxes[] = array(
       'id'            => 'clapat_' . RAYDEN_THEME_ID . '_post_options',
       'title'         => esc_html__( 'Post Options', 'rayden'),
       'post_types'    => array( 'post' ),
       'position'      => 'normal', // normal, advanced, side
       'priority'      => 'high', // high, core, default, low
       'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
       'sections'      => $blog_post_options,
    );


    $portfolio_options = array();
    $portfolio_options[] = array(

        'icon_class'    => 'icon-large',
        'icon'          => 'el-icon-wrench',
        'fields'        => array(

			array(
                'id'        => 'rayden-opt-portfolio-bknd-color',
                'type'      => 'select',
                'title'     => esc_html__('Background color', 'rayden'),
				'desc'      => esc_html__('Background color for this page.', 'rayden'),
                'options'   => array(
                    'dark-content' 	=> esc_html__('White', 'rayden'),
                    'light-content' => esc_html__('Black', 'rayden')

                ),
				'default'   => 'light-content',
            ),
			
			array(
                'id'        => 'rayden-opt-portfolio-thumbnail-type',
                'type'      => 'select',
                'title'     => esc_html__('Thumbnail type', 'rayden'),
				'desc'      => esc_html__('The thumbnail type in portfolio pages.', 'rayden'),
                'options'   => array(
                    'normal' 	=> esc_html__('Normal', 'rayden'),
                    'tall' 		=> esc_html__('Tall', 'rayden'),
					'wide' 		=> esc_html__('Wide', 'rayden')
                ),
				'default'   => 'normal',
            ),
			
			array(
                'id'        => 'rayden-opt-portfolio-mixed-carousel-thumbnail-type',
                'type'      => 'select',
                'title'     => esc_html__('Mixed Carousel Thumbnail type', 'rayden'),
				'desc'      => esc_html__('The thumbnail type in mixed carousel page template.', 'rayden'),
                'options'   => array(
                    'normal' 	=> esc_html__('Normal', 'rayden'),
					'wide' 		=> esc_html__('Wide', 'rayden')
                ),
				'default'   => 'normal',
            ),
			
			array(
                'id'        => 'rayden-opt-portfolio-showcase-include',
                'type'      => 'select',
                'title'     => esc_html__('Include In Showcase Slider', 'rayden'),
                'desc'      => esc_html__('Include this portfolio item in the Showcase slider. The slider is displayed in Showcase page template.', 'rayden'),
				'options'   => array(
                    'yes'		=> esc_html__('Include in Showcase', 'rayden'),
                    'no'  	=> esc_html__('Exclude from Showcase', 'rayden')

                ),
                'default'   => 'yes'
            ),
			
			/**************************HERO SECTION OPTIONS**************************/
			array(
				'id'        => 'rayden-opt-portfolio-hero-img',
                'type'      => 'media',
                'url'       => true,
                'title'     => esc_html__('Hero Image', 'rayden'),
                'desc'      => esc_html__('Upload hero background image.  The hero image is being displayed in portfolio showcase. Hero section is the header section displayed at the top of the project page.', 'rayden'),
                'default'   => array(),
            ),
			
			array(
				'id'        => 'rayden-opt-portfolio-video',
				'type'      => 'switch',
				'title'     => esc_html__('Video Hero', 'rayden'),
				'desc'   	=> esc_html__('Video displayed as hero section and showcase slide. If you check this option set the Hero Image as the first frame image of the video to avoid flickering!', 'rayden'),
				'on'       	=> esc_html__('Yes', 'rayden'),
				'off'      	=> esc_html__('No', 'rayden'),
				'default'   => false
			),
			
			array(
				'id'        => 'rayden-opt-portfolio-video-webm',
				'type'      => 'text',
				'title'     => esc_html__('Webm Video URL', 'rayden'),
				'desc'   	=> esc_html__('URL of the showcase slide background webm video. Webm format is previewed in Chrome and Firefox.', 'rayden'),
				'required'	=> array('rayden-opt-portfolio-video', '=', true),
			),
			
			array(
				'id'        => 'rayden-opt-portfolio-video-mp4',
				'type'      => 'text',
				'title'     => esc_html__('MP4 Video URL', 'rayden'),
				'desc'   	=> esc_html__('URL of the showcase slide background MP4 video. MP4 format is previewed in IE, Safari and other browsers.', 'rayden'),
				'required'	=> array('rayden-opt-portfolio-video', '=', true),
			),
			
			array(
				'id'        => 'rayden-opt-portfolio-hero-caption-title',
				'type'      => 'text',
				'title'     => esc_html__('Hero Caption Title', 'rayden'),
				'subtitle'  => esc_html__('Title displayed over hero section. The hero background image is set in the hero image set in preceding option.', 'rayden'),
			),

			array(
				'id'        => 'rayden-opt-portfolio-hero-caption-subtitle',
				'type'      => 'textarea',
				'title'     => esc_html__('Hero Caption Subtitle', 'rayden'),
				'subtitle'  => esc_html__('The subtitle displayed over hero section. Enter plain text.', 'rayden')
			),
			
			array(
                'id'        => 'rayden-opt-portfolio-hero-scroll-caption',
                'type'      => 'text',
				'title'     => esc_html__('Scroll Down Caption', 'rayden'),
                'desc'  => esc_html__('Scroll down caption displayed to the left of the hero image indicating scrolling down to reveal the content. Leave empty for no scroll down button.', 'rayden'),
				'default'   => esc_html__('Scroll or drag to navigate', 'rayden'),
	        ),

			array(
                'id'        => 'rayden-opt-portfolio-hero-position',
                'type'      => 'select',
                'title'     => esc_html__('Hero Position', 'rayden'),
                'desc'      => esc_html__('Position of the "hero" section displayed as page header.', 'rayden'),
				'options'   => array(
                    'fixed-onscroll' 	=> esc_html__('Relative', 'rayden'),
                    'parallax-onscroll' => esc_html__('Parallax', 'rayden')
                ),
                'default'   => 'fixed-onscroll'
            ),
			/**************************END - HERO SECTION OPTIONS**************************/

        ),
    );

    $metaboxes[] = array(
        'id'            => 'clapat_' . RAYDEN_THEME_ID . '_portfolio_options',
        'title'         => esc_html__( 'Portfolio Item Options', 'rayden'),
        'post_types'    => array( 'rayden_portfolio' ),
        'position'      => 'normal', // normal, advanced, side
        'priority'      => 'high', // high, core, default, low
        'sidebar'       => false, // enable/disable the sidebar in the normal/advanced positions
        'sections'      => $portfolio_options,
    );

	return $metaboxes;
  }
  
}

if( class_exists('Clapat\Rayden\Metaboxes\Meta_Boxes') ){

	$metabox_definitions = array();
	$metabox_definitions = rayden_add_metaboxes( $metabox_definitions );
	do_action( 'clapat/rayden/add_metaboxes', $metabox_definitions );
}