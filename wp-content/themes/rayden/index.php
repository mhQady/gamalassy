<?php

get_header();

if ( have_posts() ){

$rayden_blog_layout = rayden_get_theme_options( 'clapat_rayden_blog_layout' );
$rayden_navigation_type = rayden_get_theme_options( 'clapat_rayden_blog_navigation_type' );

?>
	
	<!-- Main -->
	<div id="main">
	
		<!-- Hero Section -->
		<div id="hero">
			<div id="hero-styles" class="parallax-onscroll">
				<div id="hero-caption" class="text-align-center">
					<div class="inner">
						<div class="scale-wrapper">
							<div class="hero-title"><?php echo wp_kses( rayden_get_theme_options('clapat_rayden_blog_default_title'), 'rayden_allowed_html' ); ?></div> 
						</div>
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
					while( have_posts() ){

						the_post();

						if( $rayden_blog_layout == "blog-minimal" ){
							
							get_template_part( 'sections/blog_post_minimal_section' );
						}
						else {
							
							get_template_part( 'sections/blog_post_section' );
						}
					
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

}

get_footer();

?>