			<!-- Footer -->
			<?php if( is_page_template('showcase-page.php') || is_page_template('parallax-slider-page.php') || is_page_template('split-slider-page.php') ){ ?>
			</div>
			
			<?php } ?>
			<footer class="hidden">
				<div id="footer-container">

					<?php if( rayden_get_theme_options( 'clapat_rayden_enable_back_to_top' ) ){  ?>
						<?php if( rayden_display_back_to_top() ){ ?>
						<div id="backtotop" class="button-wrap left disable-drag">
							<div class="icon-wrap parallax-wrap">
								<div class="button-icon parallax-element">
									<i class="fa fa-angle-up"></i>
								</div>
							</div>
							<div class="button-text sticky left"><span data-hover="<?php echo esc_attr( rayden_get_theme_options( 'clapat_rayden_back_to_top_caption' ) ); ?>"><?php echo wp_kses( rayden_get_theme_options( 'clapat_rayden_back_to_top_caption' ), 'rayden_allowed_html' ); ?></span></div>
						</div>
						<?php } ?>
					<?php } ?>
					
					<?php if( is_page_template('floating-list-page.php') ){ 
					
					$rayden_all_projects_caption		= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-page-floating-list-all-projects-caption' );
					$rayden_all_projects_url			= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-page-floating-list-all-projects-url' );
					if( !empty( $rayden_all_projects_url ) ){
					
					?>
					<div class="button-wrap left disable-drag quickmenu">
						<a class="ajax-link" href="<?php echo esc_url( $rayden_all_projects_url ); ?>" data-type="page-transition">
							<div class="icon-wrap parallax-wrap">
								<div class="button-icon parallax-element">
									<i class="fa fa-sort"></i>
								</div>
							</div>
							<div class="button-text sticky left"><span data-hover="<?php echo esc_attr($rayden_all_projects_caption); ?>"><?php echo wp_kses( $rayden_all_projects_caption, 'rayden_allowed_html' ); ?></span></div>
						</a>
					</div>
					
					<?php }
					} 
					?>
					
					<?php if( rayden_display_copyright() ){
						if( rayden_get_theme_options('clapat_rayden_footer_copyright') ){ ?>
						<div class="footer-middle"><div class="copyright"><?php echo wp_kses( rayden_get_theme_options('clapat_rayden_footer_copyright'), 'rayden_allowed_html' ); ?></div></div>
					<?php }
					}	?>
							
					<?php if( rayden_display_swiper_page_navigation() ){ ?>
					
						<div class="button-wrap left disable-drag swiper-prev">
							<div class="icon-wrap parallax-wrap">
								<div class="button-icon parallax-element">
									<i class="fa fa-angle-left"></i>
								</div>
							</div>
							<div class="button-text sticky left">
								<span data-hover="<?php echo esc_attr( rayden_get_theme_options( 'clapat_rayden_showcase_prev_slide_caption' ) ); ?>"><?php echo wp_kses( rayden_get_theme_options( 'clapat_rayden_showcase_prev_slide_caption' ), 'rayden_allowed_html' ); ?></span>
							</div> 
						</div>

						<div class="swiper-pagination disable-drag"></div>

						<div class="button-wrap right disable-drag swiper-next">
							<div class="icon-wrap parallax-wrap">
								<div class="button-icon parallax-element">
									<i class="fa fa-angle-right"></i>
								</div>
							</div>
							<div class="button-text sticky right">
								<span data-hover="<?php echo esc_attr( rayden_get_theme_options( 'clapat_rayden_showcase_next_slide_caption' ) ); ?>"><?php echo wp_kses( rayden_get_theme_options( 'clapat_rayden_showcase_next_slide_caption' ), 'rayden_allowed_html' ); ?></span>
							</div> 
						</div>

					<?php } ?>
					
					<?php if( is_page_template('parallax-slider-page.php') ){ ?>
					
						<div class="button-wrap left disable-drag swiper-prev">
							<div class="icon-wrap parallax-wrap">
								<div class="button-icon parallax-element">
									<i class="fa fa-angle-up"></i>
								</div>
							</div>
							<div class="button-text sticky left">
								<span data-hover="<?php echo esc_attr( rayden_get_theme_options( 'clapat_rayden_showcase_prev_slide_caption' ) ); ?>"><?php echo wp_kses( rayden_get_theme_options( 'clapat_rayden_showcase_prev_slide_caption' ), 'rayden_allowed_html' ); ?></span>
							</div> 
						</div>

						<div class="swiper-pagination disable-drag"></div>

						<div class="button-wrap right disable-drag swiper-next">
							<div class="icon-wrap parallax-wrap">
								<div class="button-icon parallax-element">
									<i class="fa fa-angle-down"></i>
								</div>
							</div>
							<div class="button-text sticky right">
								<span data-hover="<?php echo esc_attr( rayden_get_theme_options( 'clapat_rayden_showcase_next_slide_caption' ) ); ?>"><?php echo wp_kses( rayden_get_theme_options( 'clapat_rayden_showcase_next_slide_caption' ), 'rayden_allowed_html' ); ?></span>
							</div> 
						</div>

					<?php } ?>
					
					<?php
						if( display_footer_social_links_section() ){
							
							get_template_part('sections/footer_social_links_section');
						}
					?>

				</div>
			</footer>
			<!--/Footer -->
			
			<?php if( !is_page_template('showcase-page.php') && !is_page_template('parallax-slider-page.php') && !is_page_template('split-slider-page.php') ){ ?>
			</div>
			<?php } ?>