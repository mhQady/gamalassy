<?php
/*
Template name: Split Slider Template
*/

get_header();

if ( have_posts() ){

the_post();

$rayden_showcase_transition_pattern_image_id = rayden_get_theme_options('clapat_rayden_showcase_transition_pattern_image');
$rayden_showcase_transition_pattern_image = "";
	
$rayden_showcase_transition_pattern_image_custom = rayden_get_theme_options('clapat_rayden_showcase_transition_pattern_custom_image');
if( $rayden_showcase_transition_pattern_image_custom ){
		
	$rayden_showcase_transition_pattern_image = $rayden_showcase_transition_pattern_image_custom;
}
else{
			
	global $rayden_slide_transitions;
			
	$rayden_showcase_transition_pattern_image = $rayden_slide_transitions[ $rayden_showcase_transition_pattern_image_id ];
}

$rayden_intro_caption	= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-page-showcase-intro-caption' );

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

		<!-- Showcase Slider Holder -->
		<div id="showcase-slider-webgl-holder" class="disable-drag <?php if( !rayden_get_theme_options('clapat_rayden_enable_ajax') ) { echo 'thumb-no-ajax'; } ?>" data-pattern-img="<?php echo esc_url( $rayden_showcase_transition_pattern_image ); ?>">

			<!-- Split WebGl Slider -->
			<div id="slider-split-webgl">
			
				<div class="outer">
					<div class="inner">
						<div id="slider-split-scroll">   
							<ul id="slider-split-projects">
								<li class="split-slider-intro"><span><?php echo wp_kses( $rayden_intro_caption, 'rayden_allowed_html' ); ?></span></li>
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
								<li class="hide-ball <?php if( $rayden_bknd_color == "dark-content" ) { echo " change-header"; } ?>">
									<div class="split-caption">
										<div class="slide-wrap<?php if( $rayden_slides_count == 0 ){ echo " active"; } ?>" data-slide="<?php echo esc_attr( $rayden_slides_count ); ?>">
										<?php if( !rayden_get_theme_options('clapat_rayden_enable_ajax') ){ ?>
										<a class="quick-link" data-type="page-transition" href="<?php the_permalink(); ?>"></a>
										<?php } ?>
										</div>
										<div class="split-title"><span><?php echo wp_kses( $rayden_hero_properties->caption_title, 'rayden_allowed_html' ); ?></span></div>
										<div class="split-subtitle"><span><?php echo wp_kses( $rayden_hero_properties->caption_subtitle, 'rayden_allowed_html' ); ?></span></div>
										<?php if( rayden_get_theme_options('clapat_rayden_enable_ajax') ){ ?>
										<a class="quick-link" data-type="page-transition" href="<?php the_permalink(); ?>"></a>
										<?php } ?>
									</div>
								</li>

					<?php
					
								$rayden_portfolio_items[] = $rayden_hero_properties;
												
								$rayden_slides_count++;
								
							}

						}

						wp_reset_postdata();
										
					?>
							</ul>
						</div>
					</div>
				</div>
			</div> 
			<!-- Split WebGl Slider -->
		</div>    
		<!-- Showcase Slider Holder -->
		
		
		<!-- canvas slider -->
		<div id="canvas-slider" class="canvas-slider split">
			<?php
			$rayden_slides_count = 0;
			foreach( $rayden_portfolio_items as $rayden_portfolio_item ){
				
			?>
			<div class="slider-img" data-slide="<?php echo esc_attr( $rayden_slides_count ); ?>">
				<img class="slide-img" src="<?php echo esc_url( $rayden_portfolio_item->image['url'] ); ?>" alt="<?php echo esc_attr__('Slide Image', 'rayden'); ?>" />
			</div>
			<?php
			
				$rayden_slides_count++;
			}
			?>
		</div>
		<!--/canvas slider -->

<?php
	
}

get_footer();

?>
