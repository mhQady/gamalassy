<?php
/*
Template name: Showcase Sticky Template
*/
get_header();

if ( have_posts() ){

the_post();

$rayden_portfolio_tax_query = null;
$rayden_portfolio_category_filter	= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-page-portfolio-filter-category' );

$rayden_array_terms = null;
if( !empty( $rayden_portfolio_category_filter ) ){
	
	$rayden_array_terms = explode( ",", $rayden_portfolio_category_filter );
	$rayden_portfolio_tax_query = array(
										array(
											'taxonomy' 	=> 'portfolio_category',
											'field'		=> 'slug',
											'terms'		=> $rayden_array_terms,
											),
									);
}

$rayden_portfolio_layout_type	= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-page-portfolio-layout-type' );
$rayden_portfolio_caption_type	= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-page-portfolio-caption-type' );
?>
				
		<!-- Main -->
		<div id="main">
		
			<?php
		
			// display hero section
			get_template_part('sections/hero_section'); 
		
			?>
			
			<!-- Main Content -->
			<div id="main-content">
				<div id="main-page-content portfolio-page">
				
					<!-- VP Portfolio -->
					<div id="vp-portfolio-wrapper">
						<div id="vp-portfolio">
						
							<div id="fixed" class="vp-portfolio-images not-in-view">
							<?php

								$rayden_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
								$rayden_args = array(
											'post_type' => 'rayden_portfolio',
											'paged' => $rayden_paged,
											'tax_query' => $rayden_portfolio_tax_query,
											'posts_per_page' => 1000,
											 );

								$rayden_portfolio = new WP_Query( $rayden_args );
								
								$rayden_slides_count = 1;
								$rayden_portfolio_items = array();
						
								while( $rayden_portfolio->have_posts() ){

									$rayden_portfolio->the_post();
									
									$rayden_hero_properties = new Rayden_Hero_Properties();
									$rayden_hero_properties->getProperties( get_post_type( get_the_ID() ) );
									$rayden_hero_properties->item_permalink = get_the_permalink();
									
									$rayden_portfolio_items[] = $rayden_hero_properties;
									
									?>
									<div class="vp-slide<?php if( $rayden_slides_count == 1 ) echo " first-image"?>">
										<div class="vp-img-mask" data-aux="image-<?php echo sprintf("%02d", $rayden_slides_count); ?>">
											<img class="vp-img" src="<?php echo esc_url( $rayden_hero_properties->image['url'] ); ?>" alt="<?php echo esc_attr__('Image Title', 'rayden'); ?>">
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
									</div>
									<?php
									
									$rayden_slides_count++;
								}
								
								wp_reset_postdata();
							?>
							</div>
						
							<div class="vp-portfolio-captions not-in-view">
								<div class="vp-spacer"></div>
								<?php
									$rayden_slides_count = 1;
									foreach( $rayden_portfolio_items as $rayden_portfolio_item ){
									
								?>
								<div class="vp-slide autocenter<?php if( $rayden_slides_count == 1 ){ echo " first-title"; } else if( $rayden_slides_count == count( $rayden_portfolio_items ) ){ echo " last-title"; }?> disable-drag" data-aux="image-<?php echo sprintf("%02d", $rayden_slides_count); ?>">
									<div class="vp-title" data-firstline="<?php echo esc_attr( rayden_get_theme_options( 'clapat_rayden_view_project_caption_first' ) ); ?>" data-secondline="<?php echo esc_attr( rayden_get_theme_options( 'clapat_rayden_view_project_caption_second' ) ); ?>">
									<?php echo wp_kses( $rayden_portfolio_item->caption_title, 'rayden_allowed_html' ); ?>
									</div>
									<a class="slide-link" data-type="page-transition" href="<?php echo esc_url( $rayden_portfolio_item->item_permalink ); ?>"></a>
									<div class="vp-cat"><?php echo wp_kses( $rayden_portfolio_item->caption_subtitle, 'rayden_allowed_html' ); ?></div>
								</div>
								<?php
								
										$rayden_slides_count++;
									}
								?>
								<div class="vp-spacer"></div>
							</div>
							
							<div id="fixed-borders">
								<div class="caption-border left"></div>
								<div class="caption-border right"></div>
							</div>
									
						</div>
					</div>
					<!-- /VP Portfolio -->
					
					<?php the_content(); ?>
					
				</div>
				<!--/Main Page Content -->
				
			</div>
			<!-- /Main Content -->
		</div>
		<!--/Main -->
<?php

}

get_footer();

?>