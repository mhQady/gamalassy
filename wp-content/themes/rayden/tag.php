<?php
/**
 * The template for displaying Tag Search Results pages
 */

get_header();

$rayden_blog_layout = rayden_get_theme_options( 'clapat_rayden_blog_layout' );
$rayden_navigation_type = rayden_get_theme_options( 'clapat_rayden_blog_navigation_type' );

?>
		
	<!-- Main -->
	<div id="main">
		
		<!-- Hero Section -->
        <div id="hero">
           <div id="hero-styles">
                <div id="hero-caption" class="text-align-left">
                    <div class="inner">
						<div class="hero-title"><span><?php single_tag_title('', true); ?></span></div>
                        <div class="hero-subtitle"><span><?php echo esc_html__( 'Tag Results', 'rayden'); ?></span></div> 
                    </div>
                </div>                    
            </div>
        </div>                      
        <!--/Hero Section -->
		
    	<!-- Main Content -->
    	<div id="main-content">
			<!-- Blog-->
			<div id="blog" class="<?php echo sanitize_html_class( $rayden_blog_layout ); ?>">
				<!-- Blog-Content-->
				<div data-fx="1">
				<?php 
						
					// the loop
					if( have_posts() ){
					
						while( have_posts() ){

							the_post();

							if( $rayden_blog_layout == "blog-minimal" ){
							
								get_template_part( 'sections/blog_post_minimal_section' );
							}
							else {
								
								get_template_part( 'sections/blog_post_section' );
							}
							
						}
					}
					else {
						
						echo '<h4 class="search_results">' . esc_html__('No posts found with this tag', 'rayden') . '</h4>';
					}
				?>
			
				<!-- /Blog-Content-->
				</div>
				<?php
					
				rayden_pagination( null, $rayden_navigation_type );

				?>
			</div>
			<!-- /Blog-->
		</div>
		<!--/Main Content-->
	</div>
	<!-- /Main -->
<?php

get_footer();

?>