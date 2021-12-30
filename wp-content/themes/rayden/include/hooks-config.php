<?php
/**
 * Created by Clapat
 * Date: 17/12/20
 * Time: 11:00 AM
 */

 // Extra classes to the body
if ( ! function_exists( 'rayden_body_class' ) ){

	function rayden_body_class( $classes ) {

		$classes[] = 'hidden';
		$classes[] = 'hidden-ball';

		if( rayden_get_theme_options( 'clapat_rayden_enable_smooth_scrolling' ) ){
			
			$classes[] = 'smooth-scroll';
		}
		
		if( rayden_get_theme_options( 'clapat_rayden_enable_smooth_drag' ) ){
			
			$classes[] = 'drag-scroll';
		}
		
		if( !rayden_get_theme_options( 'clapat_rayden_enable_ajax' ) ){
			
			$classes[] = 'load-no-ajax';
		}
		
		// return the $classes array
		return $classes;
	}
}
add_filter( 'body_class', 'rayden_body_class' );

// site/blog title
if ( ! function_exists( '_wp_render_title_tag' ) ) {

	function rayden_wp_title() {

		echo wp_title( '|', false, 'right' );

	}
	add_action( 'wp_head', 'rayden_wp_title' );
}

if ( ! function_exists( 'rayden_menu_classes' ) ){

	function rayden_menu_classes(  $classes , $item, $args ){

		$classes[] = 'link';
		if( $item->menu_item_parent == "0" ){
			
			$classes[] = 'menu-timeline';
		}
		if( in_array( 'current-menu-item', $item->classes ) || in_array( 'current-menu-ancestor', $item->classes ) ){

			$classes[] = 'active';
		}
				
		return $classes;
	}

}
if ( ! function_exists( 'rayden_menu_link_attributes' ) ){

	function rayden_menu_link_attributes(  $atts, $item, $args ){

		$arr_classes = array();
		
		if( !empty($item->classes) ){

			if( !in_array( 'menu-item-type-custom', $item->classes ) && !in_array( 'menu-item-has-children', $item->classes ) ){
				
				// if the menu item is not a custom link
				$atts['data-type'] = 'page-transition';	
				$arr_classes[] = 'ajax-link';
			}
		}
		
		if( !empty($item->classes) ){
			if( in_array( 'current-menu-item', $item->classes ) || in_array( 'current-menu-ancestor', $item->classes ) ){

				$arr_classes[] = 'active';
			}
		}

		if( !empty($item->classes) ){

			if( in_array( 'menu-item-has-children', $item->classes ) ){
				// if the menu item is a parent item, just use an empty <a> tag
				if( isset( $atts['data-type'] ) ){
					$atts['data-type'] = null;
				}
			}
		}
		if( !empty( $arr_classes ) ){

			$atts['class'] = implode( ' ', $arr_classes );
		}

		return $atts;
	}

}
if ( ! function_exists( 'rayden_menu_item_title' ) ){

	function rayden_menu_item_title(  $title, $item, $args, $depth ){

		if( $depth === 0 ){
			
			$title = '<div class="before-span"><span data-hover="' . esc_attr( $title ) . '">' . $title . '</span></div>';
		}
		return $title;
	}

}
// change priority here if there are more important actions associated with the hook
add_action('nav_menu_css_class', 'rayden_menu_classes', 10, 3);
add_filter('nav_menu_link_attributes', 'rayden_menu_link_attributes', 10, 3 );
add_filter( 'nav_menu_item_title', 'rayden_menu_item_title', 10, 4 );

// hooks to add extra classes for next & prev portfolio projects and single blog posts
if ( ! function_exists( 'rayden_prev_post_link' ) ){

	function rayden_prev_post_link( $output, $format, $link, $post ){

			if( $format == 'rayden_portfolio' ){

				$output = '';
				$next_post = $post;

				if( $post ){

					$next_post = $post;
				}
				else{ // could not find the next post so rewind to the oldest one

					$args = array(
							'posts_per_page'	=> 2,
							'order'           => 'DESC',
							'post_type'       => 'rayden_portfolio',
						);

					$find_query = new WP_Query( $args );
					if ( $find_query->have_posts() && ($find_query->found_posts > 1) )  {

						$find_query->the_post();

						$next_post = $find_query->post;

					} else {
						// no posts found
					}

					wp_reset_postdata();
				}

				if( $next_post ){

					$rayden_hero_image = rayden_get_post_meta( RAYDEN_THEME_OPTIONS, $next_post->ID, 'rayden-opt-portfolio-hero-img' );
					$rayden_hero_title = rayden_get_post_meta( RAYDEN_THEME_OPTIONS, $next_post->ID, 'rayden-opt-portfolio-hero-caption-title' );
					$rayden_hero_subtitle = rayden_get_post_meta( RAYDEN_THEME_OPTIONS, $next_post->ID, 'rayden-opt-portfolio-hero-caption-subtitle' );
					$rayden_bknd_color = rayden_get_post_meta( RAYDEN_THEME_OPTIONS, $next_post->ID, 'rayden-opt-portfolio-bknd-color' );
					if( $rayden_bknd_color == "dark-content" ){
						
						$rayden_nav_class = "change-header";
					}
					else{
						
						$rayden_nav_class = "light-content";
					}
					if( !rayden_get_theme_options('clapat_rayden_enable_ajax') ) { $rayden_nav_class = ' thumb-no-ajax'; }
					
					$output = '<!-- Project Navigation -->';
					$output .= '<div id="project-nav" class="' . $rayden_nav_class . '">';
					$output .= '<div class="next-project-wrap">';
					$output .= '<div class="next-project-caption">';
					$output .= '<div class="next-caption-wrapper disable-drag">';
					$output .= '<a class="next-ajax-link-project" data-type="page-transition" href="'. esc_url( get_permalink( $next_post ) ) . '" data-firstline="' . esc_attr( rayden_get_theme_options( 'clapat_rayden_portfolio_next_caption_first_line' ) ) . '" data-secondline="' . esc_attr( rayden_get_theme_options( 'clapat_rayden_portfolio_next_caption_second_line' ) ) .'"></a>';
					$output .= '<div class="next-caption">';
					$output .= '<div class="hero-title">' . wp_kses( $rayden_hero_title, 'rayden_allowed_html' ) . '</div>';
					$output .= '<div class="hero-subtitle"><span>' . wp_kses( $rayden_hero_subtitle, 'rayden_allowed_html' ) . '</span></div>';
					$output .= '</div>';
					$output .= '</div>';
					$output .= '</div>';
					$output .= '</div>';
					$output .= '</div>'; 
					$output .= '<!--/Project Navigation -->';
					
					rayden_portfolio_next_project_image( esc_url( $rayden_hero_image['url'] ) );

				}

			}
			else if(  $format == 'blog-post' ){

				$output = '';
				if( $post ){

					$output .= '<div class="post-next">';
					$output .= wp_kses( rayden_get_theme_options( 'clapat_rayden_blog_next_post_caption' ), 'rayden_allowed_html' );
					$output .= '<div class="post-next-title">';
					$output .= '<a href="' . get_permalink( $post ) . '" class="ajax-link hide-ball" data-type="page-transition">';
					$output .= '<span>' . get_the_title( $post ) . '</span>';
					$output .= '</a>';
					$output .= '</div>';
					$output .= '</div>';
					
				}

				return $output;
			}
			else {

				if( $post ){

					$output = get_permalink( $post );
				}
			}

			return $output;
	}

}
if ( ! function_exists( 'rayden_next_post_link' ) ){

	function rayden_next_post_link( $output, $format, $link, $post ){

			if( $format == 'rayden_portfolio' ){

				$output = '';
				$next_post = $post;

				if( $post ){

					$next_post = $post;
				}
				else{ // could not find the next post so rewind to the oldest one

					$args = array(
								'posts_per_page'   => 2,
								'order'            => 'ASC',
								'post_type'        => 'rayden_portfolio',
							);

					$find_query = new WP_Query( $args );
					if ( $find_query->have_posts() && ($find_query->found_posts > 1) )  {

						$find_query->the_post();

						$next_post = $find_query->post;

					} else {
						// no posts found
					}

					wp_reset_postdata();
				}

				if( $next_post ){

					$rayden_hero_image = rayden_get_post_meta( RAYDEN_THEME_OPTIONS, $next_post->ID, 'rayden-opt-portfolio-hero-img' );
					$rayden_hero_title = rayden_get_post_meta( RAYDEN_THEME_OPTIONS, $next_post->ID, 'rayden-opt-portfolio-hero-caption-title' );
					$rayden_hero_subtitle = rayden_get_post_meta( RAYDEN_THEME_OPTIONS, $next_post->ID, 'rayden-opt-portfolio-hero-caption-subtitle' );
					$rayden_bknd_color = rayden_get_post_meta( RAYDEN_THEME_OPTIONS, $next_post->ID, 'rayden-opt-portfolio-bknd-color' );
					if( $rayden_bknd_color == "dark-content" ){
						
						$rayden_nav_class = "change-header";
					}
					else{
						
						$rayden_nav_class = "light-content";
					}
					if( !rayden_get_theme_options('clapat_rayden_enable_ajax') ) { $rayden_nav_class = ' thumb-no-ajax'; }
					
					$output = '<!-- Project Navigation -->';
					$output .= '<div id="project-nav" class="' . $rayden_nav_class . '">';
					$output .= '<div class="next-project-wrap">';
					$output .= '<div class="next-project-caption">';
					$output .= '<div class="next-caption-wrapper disable-drag">';
					$output .= '<a class="next-ajax-link-project" data-type="page-transition" href="'. esc_url( get_permalink( $next_post ) ) . '" data-firstline="' . esc_attr( rayden_get_theme_options( 'clapat_rayden_portfolio_next_caption_first_line' ) ) . '" data-secondline="' . esc_attr( rayden_get_theme_options( 'clapat_rayden_portfolio_next_caption_second_line' ) ) .'"></a>';
					$output .= '<div class="next-caption">';
					$output .= '<div class="hero-title">' . wp_kses( $rayden_hero_title, 'rayden_allowed_html' ) . '</div>';
					$output .= '<div class="hero-subtitle"><span>' . wp_kses( $rayden_hero_subtitle, 'rayden_allowed_html' ) . '</span></div>';
					$output .= '</div>';
					$output .= '</div>';
					$output .= '</div>';
					$output .= '</div>';
					$output .= '</div>'; 
					$output .= '<!--/Project Navigation -->';
					
					rayden_portfolio_next_project_image( esc_url( $rayden_hero_image['url'] ) );

				}

			}
			else if(  $format == 'blog-post' ){

				$output = '';
				if( $post ){

					$output .= '<div class="post-prev">';
					$output .= wp_kses( rayden_get_theme_options( 'clapat_rayden_blog_prev_post_caption' ), 'rayden_allowed_html' );
					$output .= '<div class="post-next-title">';
					$output .= '<a href="' . get_permalink( $post ) . '" class="ajax-link hide-ball" data-type="page-transition">';
					$output .= '<span>' . get_the_title( $post ) . '</span>';
					$output .= '</a>';
					$output .= '</div>';
					$output .= '</div>';
					
				}
				
				return $output;
			}
			else {

				if( $post ){

					$output = get_permalink( $post );
				}
			}

		return $output;
	}

}
// change priority here if there are more important actions associated with the hook
add_filter('next_post_link', 'rayden_next_post_link', 10, 4);
add_filter('previous_post_link', 'rayden_prev_post_link', 10, 4);

// hooks to add extra classes for next & prev blog posts
if ( ! function_exists( 'rayden_next_posts_link_attributes' ) ){

	function rayden_next_posts_link_attributes(){

		return 'class="ajax-link" data-type="page-transition"';
	}
}
if ( ! function_exists( 'rayden_prev_posts_link_attributes' ) ){

	function rayden_prev_posts_link_attributes(){

		return 'class="ajax-link" data-type="page-transition"';
	}
}
// change priority here if there are more important actions associated with the hook
add_filter('next_posts_link_attributes', 'rayden_next_posts_link_attributes', 10, 4);
add_filter('previous_posts_link_attributes', 'rayden_prev_posts_link_attributes', 10, 4);

if ( ! function_exists( 'rayden_comment_reply_link' ) ){

	function rayden_comment_reply_link($link, $args, $comment, $post){

		return str_replace("class='comment-reply-link", "class='comment-reply-link reply hide-ball", $link);
	}
}
// change priority here if there are more important actions associated with the hook
add_filter('comment_reply_link', 'rayden_comment_reply_link', 99, 4);

// category filter
if ( ! function_exists( 'rayden_category' ) ){
	
	function rayden_category( $thelist, $separator, $parents ){
		
		return str_replace('<a href="', '<a class="ajax-link link" data-type="page-transition" href="', $thelist);
	}
}
add_filter('the_category', 'rayden_category', 10, 3);

// tags filter
if ( ! function_exists( 'rayden_tags' ) ){
	
	function rayden_tags( $tag_list, $before, $sep, $after, $id ){
		
		return str_replace('<a href="', '<a class="ajax-link link" data-type="page-transition" href="', $tag_list);
	}
}
add_filter('the_tags', 'rayden_tags', 10, 5);

// search filter
if( !function_exists('rayden_searchfilter') ){

	function rayden_searchfilter( $query ) {

		if ( !is_admin() && $query->is_main_query() ) {

			if ($query->is_search ) {

				$post_types = get_query_var('post_type');

				if( empty( $post_types ) ){

					$query->set('post_type', array('post'));
				}
			}

		}

		return $query;

	}
	add_filter('pre_get_posts','rayden_searchfilter');

}

// allowable HTML tags in theme options
if( !function_exists('rayden_kses_allowed_html') ){

	function rayden_kses_allowed_html($tags, $context) {
		
		switch($context) {
			case 'rayden_allowed_html':
				$tags = array(
					'a' => array(
								'id' => array(),
								'href' => array(),
								'title' => array(),
								'rel' => array(),
								'target' => array(),
								'class' => array(),
								'data-type' => array(),
								'data-filter' => array()
							),
					'div' => array(
								'id' => array(),
								'class' => array()
								),
					'span' => array(
								'id' => array(),
								'class' => array(),
								'data-hover' => array()
								),
					'img' => array(
								'src' => array(),
								'alt' => array(),
								'width' => array(),
								'height' => array(),
								'class' => array()
								),
					'h1' => array(),
					'h2' => array(),
					'h3' => array(),
					'h4' => array(),
					'h5' => array(),
					'h6' => array(),
					'ul' => array(
							'id' => array(),
							'class' => array()
							),
					'li' => array(
							'class' => array()
							),
					'br' => array(),
					'em' => array(),
					'strong' => array(),
					'b' => array(),
					'i' => array(
							'id' => array(),
							'class' => array()
							),
					'u' => array(),
					'p' => array(
							'id' => array(),
							'class' => array()
							),
					'hr' => array(),
					'figure' => array(
							'id' => array(),
							'class' => array()
							)
				);
				return $tags;
			default: 
				return $tags;
		}

	}

	add_filter( 'wp_kses_allowed_html', 'rayden_kses_allowed_html', 10, 2 );

}
