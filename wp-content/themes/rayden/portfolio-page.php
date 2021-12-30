<?php
/*
Template name: Portfolio Template
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

$rayden_portfolio_layout_type			= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-page-portfolio-layout-type' );
$rayden_portfolio_caption_type			= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-page-portfolio-caption-type' );
$rayden_portfolio_appear_effect_type	= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-page-portfolio-appear-effect-type' );
if( $rayden_portfolio_layout_type == 'sided-grid' ){
	
	$rayden_portfolio_appear_effect_type = 'width-scale-effect';
}

?>
				
		<!-- Main -->
		<div id="main">
		
			<?php
		
			// display hero section
			get_template_part('sections/hero_section'); 
		
			?>
			
			<!-- Main Content -->
			<div id="main-content">
				<div id="main-page-content">
				
					<!-- Portfolio Wrap -->
					<div id="itemsWrapperLinks" class="portfolio-wrap <?php echo sanitize_html_class( $rayden_portfolio_layout_type ); ?> <?php echo sanitize_html_class( $rayden_portfolio_appear_effect_type ); ?> <?php echo sanitize_html_class( $rayden_portfolio_caption_type ); ?> <?php if( !rayden_get_theme_options('clapat_rayden_enable_ajax') ){ echo 'thumb-no-ajax'; } ?>">
						<!-- Portfolio Columns -->
						<div id="itemsWrapper" class="portfolio">
						
						<?php

							$rayden_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$rayden_args = array(
										'post_type' => 'rayden_portfolio',
										'paged' => $rayden_paged,
										'tax_query' => $rayden_portfolio_tax_query,
										'posts_per_page' => 1000,
										 );

							$rayden_portfolio = new WP_Query( $rayden_args );
							
							while( $rayden_portfolio->have_posts() ){

								$rayden_portfolio->the_post();
								
								get_template_part('sections/portfolio_section_item');

							}
							
							wp_reset_postdata();
						?>
						</div>
						<!--/Portfolio Columns-->
					</div>
					<!--/Portfolio Wrap-->
					
				</div>
				<!--/Main Page Content -->
				
				<?php
		
					// display hero section
					get_template_part('sections/page_navigation_section'); 
		
				?>
			</div>
			<!-- /Main Content -->
		</div>
		<!--/Main -->
<?php

}

get_footer();

?>