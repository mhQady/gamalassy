<?php
/*
Template name: Blog Template
*/
get_header();

while ( have_posts() ){

the_post();

$rayden_blog_layout = rayden_get_theme_options( 'clapat_rayden_blog_layout' );
$rayden_navigation_type = rayden_get_theme_options( 'clapat_rayden_blog_navigation_type' );

?>
			
	<!-- Main -->
	<div id="main">
	
	<?php 
		
		// display hero section, if any
		get_template_part('sections/hero_section'); 
		
	?>
		<!-- Main Content -->
		<div id="main-content">
			<!-- Blog-->
			<div id="blog" class="<?php echo sanitize_html_class( $rayden_blog_layout ); ?>">
				<!-- Blog-Content-->
				<div data-fx="1">
				<?php 
						
					$rayden_paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
					
					$rayden_args = array(
						'post_type' => 'post',
						'paged' => $rayden_paged
					);
					$rayden_posts_query = new WP_Query( $rayden_args );

					// the loop
					while( $rayden_posts_query->have_posts() ){

						$rayden_posts_query->the_post();

						if( $rayden_blog_layout == "blog-minimal" ){
							
							get_template_part( 'sections/blog_post_minimal_section' );
						}
						else {
							
							get_template_part( 'sections/blog_post_section' );
						}
						
					}
							
				?>
				</div>
				<!-- /Blog-Content -->
					
				<?php
						
					rayden_pagination( $rayden_posts_query, $rayden_navigation_type );

					wp_reset_postdata();
				?>
			</div>
			<!-- /Blog-->
		</div>
		<!--/Main Content-->
	
	<!-- /Main -->
	</div>
	
<?php

}

get_footer();

?>
