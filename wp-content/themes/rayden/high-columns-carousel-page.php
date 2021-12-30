<?php
/*
Template name: High Columns Carousel Template
*/

get_header();

if ( have_posts() ){

the_post();
	
$rayden_showcase_tax_query = null;
$rayden_showcase_category_filter	= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-page-showcase-filter-category' );

if( !empty( $rayden_showcase_category_filter ) ){
	
	$rayden_array_terms = explode( ",", $rayden_showcase_category_filter );
	$rayden_showcase_tax_query = array(
										array(
											'taxonomy' 	=> 'portfolio_category',
											'field'		=> 'slug',
											'terms'		=> $rayden_array_terms,
											),
									);
}
?>
		<!-- Main -->
		<div id="main">
			<!-- Main Content -->
			<div id="main-content">
			
				<!-- Showcase Slider Holder -->
				<div id="showcase-carousel-holder" class="columns-carousel disable-drag"> 
					<div id="itemsWrapperLinks">
					
						<!-- Showcase Slider -->
						<div id="showcase-slider" class="swiper-container">
							<div id="itemsWrapper" class="swiper-wrapper">
							
							 <?php

								$rayden_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
								$rayden_args = array(
															'post_type' => 'rayden_portfolio',
															'paged' => $rayden_paged,
															'tax_query' => $rayden_showcase_tax_query,
															'posts_per_page' => 1000,
															 );

								$rayden_portfolio = new WP_Query( $rayden_args );

								$rayden_slides_count = 0;
								$rayden_portfolio_items = array();
								while( $rayden_portfolio->have_posts() ){

									$rayden_portfolio->the_post();
													
									$rayden_showcase_include	= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-portfolio-showcase-include' );
									$rayden_bknd_color			= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-portfolio-bknd-color' );
													
									if( $rayden_showcase_include == "yes" ){
													
										$rayden_hero_properties = new Rayden_Hero_Properties();
										$rayden_hero_properties->getProperties( get_post_type( get_the_ID() ) );
														
							?>
							
							<div class="swiper-slide<?php if( $rayden_bknd_color == "dark-content" ) { echo " change-header"; } ?>">                                    
								<div class="img-mask">
									<div class="section-image" data-swiper-parallax="0%" data-swiper-parallax-scale="1.1">
										<img class="item-image grid__item-img" src="<?php echo esc_url( $rayden_hero_properties->image['url'] ); ?>" alt="<?php echo esc_attr__('Slide Image', 'rayden'); ?>">
										<?php if( $rayden_hero_properties->video ) { ?>
										<div class="hero-video-wrapper">
											<video loop muted class="bgvid">
											<?php if( !empty( $rayden_hero_properties->video_mp4 ) ) { ?>
												<source src="<?php echo esc_url( $rayden_hero_properties->video_mp4 ); ?>" type="video/mp4">
											<?php } ?>
											<?php if( !empty( $rayden_hero_properties->video_webm ) ) { ?>
												<source src="<?php echo esc_url( $rayden_hero_properties->video_webm ); ?>" type="video/webm">
											<?php } ?>
											</video>
										</div>
										<?php } ?>
									</div>                                                
									<img class="grid__item-img grid__item-img--large" src="<?php echo esc_url( $rayden_hero_properties->image['url'] ); ?>" alt="<?php echo esc_attr__('Slide Image', 'rayden'); ?>" />                                    
								</div>
								<a data-type="page-transition" href="<?php the_permalink(); ?>"></a>
								<div class="outer">
									<div class="inner">
										<div class="slide-title-wrapper trigger-slide-link" data-firstline="<?php echo esc_attr( rayden_get_theme_options( 'clapat_rayden_view_project_caption_first' ) ); ?>" data-secondline="<?php echo esc_attr( rayden_get_theme_options( 'clapat_rayden_view_project_caption_second' ) ); ?>">
											<div class="slide-title"><span><?php echo wp_kses( $rayden_hero_properties->caption_title, 'rayden_allowed_html' ); ?></span></div>
										</div>
										<div class="subtitle"><span><?php echo wp_kses( $rayden_hero_properties->caption_subtitle, 'rayden_allowed_html' ); ?></span></div>
									</div>
								</div>
							</div>
							
							<?php
							
										$rayden_portfolio_items[] = $rayden_hero_properties;
														
										$rayden_slides_count++;
										
									}

								}

								wp_reset_postdata();
												
							?>
							</div>
						</div>
						<!-- Showcase Slider -->
						
					</div> 
				</div>    
				<!-- Showcase Slider Holder -->
		
			</div>
		</div>
<?php
	
}

get_footer();

?>
