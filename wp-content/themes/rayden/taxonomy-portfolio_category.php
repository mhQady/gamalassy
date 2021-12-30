<?php
// archive template for portfolio categories

get_header();

$rayden_page_container_list = array();
?>
				
		<!-- Main -->
		<div id="main">
		
			<!-- Hero Section -->
			<div id="hero">
				<div id="hero-styles">
					<div id="hero-caption" class="parallax-onscroll text-align-center">
						<div class="inner">
							<div class="hero-title"><div><?php single_cat_title(); ?></div></div>
						</div>
					</div>
				</div>
			</div>
			<!--/Hero Section -->   
						
			<!-- Main Content -->
			<div id="main-content">
				<div id="main-page-content">
				
					<!-- Portfolio Wrap -->
					<div id="itemsWrapperLinks" class="portfolio-wrap">                
						<!-- Portfolio Columns -->
						<div id="itemsWrapper" class="portfolio scattered-grid <?php if( !rayden_get_theme_options('clapat_rayden_enable_ajax') ){ echo 'thumb-no-ajax'; } ?>">
						<?php

							$rayden_current_item_count = 1;

							while( have_posts() ){

								the_post();
								
								set_query_var('rayden_query_var_item_count', $rayden_current_item_count);

								get_template_part('sections/portfolio_section_item');
								
								$rayden_current_item_count++;
								
							}
							
							wp_reset_postdata();
							
						?>
						</div>
					</div>
					<!--/Portfolio -->
					
				</div>
                <!--/Main Page Content -->
			</div>
			<!-- /Main Content -->
		</div>
        <!--/Main -->
<?php
	
get_footer();

?>