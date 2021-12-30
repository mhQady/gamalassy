<?php

if ( ! class_exists( 'Rayden_Hero_Properties' ) ) {

	class Rayden_Hero_Properties
	{
		public $enabled;
		public $caption_title;
		public $caption_subtitle;
		public $position;
		public $alignment;
		public $opacity;
		public $image;
		public $foreground;
		public $video;
		public $video_webm;
		public $video_mp4;
		public $scroll_down_caption;
		public $project_info;

		public function __construct(){

			$this->enabled = false;
			$this->caption_title = "";
			$this->caption_subtitle = "";
			$this->position = esc_attr("fixed-onscrol");
			$this->alignment = esc_attr("text-align-left");
			$this->image = true;
			$this->foreground= esc_attr('light-content');
			$this->text_alignment = "";
			$this->video = false;
			$this->video_webm = "";
			$this->video_mp4 = "";
			$this->scroll_down_caption = "";
			$this->project_info = "";
		}

		public function getProperties( $post_type ){

			if( $post_type == 'rayden_portfolio' ){

				$this->enabled 			= true; // in portfolio projects hero is always enabled and the hero image will be displayed in showcase slider
				$this->caption_title	= $this->titleWrap( rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-portfolio-hero-caption-title' ) );
				$this->caption_subtitle = $this->subtitleWrap( rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-portfolio-hero-caption-subtitle' ) );
				$this->position 		= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-portfolio-hero-position' );
				$this->alignment 		= esc_attr("text-align-center");
				$this->foreground 		= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-portfolio-bknd-color' );
				$this->image		 	= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-portfolio-hero-img' );
				$this->video 			= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-portfolio-video' );
				$this->video_webm 		= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-portfolio-video-webm' );
				$this->video_mp4 		= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-portfolio-video-mp4' );
				$this->scroll_down_caption = rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-portfolio-hero-scroll-caption' );
				$this->project_info 	= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-portfolio-hero-project-info' );

			} else if( $post_type == 'post' ){

				$this->enabled = true; // the hero section is always enabled in case of blog posts, displaying post title and categories
				$this->caption_title 	= get_the_title();
				$this->caption_subtitle	= rayden_blog_post_hero_caption();
				$this->position 		= esc_attr("parallax-onscroll");
				$this->alignment 		= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-blog-hero-caption-alignment' );
				$this->foreground 		= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-blog-bknd-color' );
				$this->image		 	= null;

			} 
			else if( !empty( $post_type ) ){

				$page_id = "";
				if( function_exists( "is_woocommerce" ) ){

					if( is_shop() ){
						
						$page_id = wc_get_page_id('shop');
					}
				}
				
				if( empty( $page_id ) ){
					
					$page_id = get_the_ID();
				}
				
				$this->enabled 			= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, $page_id, 'rayden-opt-page-enable-hero' );
				$title_first_row		= $this->titleWrap( rayden_get_post_meta( RAYDEN_THEME_OPTIONS, $page_id, 'rayden-opt-page-hero-caption-title-first-row' ) );
				$title_second_row		= $this->titleWrap( rayden_get_post_meta( RAYDEN_THEME_OPTIONS, $page_id, 'rayden-opt-page-hero-caption-title-second-row' ) );
				if( !empty( $title_second_row ) && !empty( $title_first_row ) ){
					
					$title_second_row = ' ' . $title_second_row;
				}
				$this->caption_title	= $title_first_row . $title_second_row;;
				$this->caption_subtitle = $this->subtitleWrap( rayden_get_post_meta( RAYDEN_THEME_OPTIONS, $page_id, 'rayden-opt-page-hero-caption-subtitle' ) );
				$this->position 		= esc_attr("parallax-onscroll");
				$this->alignment 		= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, $page_id, 'rayden-opt-page-hero-caption-alignment' );
				$this->foreground 		= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, $page_id, 'rayden-opt-page-bknd-color' );
				$this->image		 	= null;

			}
			
		}

		protected function titleWrap( $title ){
			
			if( !empty( $title ) ){
					
				$title	= '<span>' . $title . '</span>';
			}
			
			return $title;
		}
		
		protected function subtitleWrap( $subtitle ){
			
			if( !empty( $subtitle ) ){
					
				$subtitle	= '<span>' . $subtitle . '</span>';
			}
			
			return $subtitle;
		}
	}
}

$rayden_hero_properties = new Rayden_Hero_Properties();

?>
