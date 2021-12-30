<?php

get_header();

?>
	
		<!-- Hero -->
		<div id="hero" class="error">
			<div id="hero-styles">
				<!-- Hero Caption -->
				<div id="hero-caption">
					<div class="inner text-align-center">
						<div class="404caption">
							<div class="hero-title"><span><?php echo wp_kses( rayden_get_theme_options('clapat_rayden_error_title'), 'rayden_allowed_html' ); ?></span></div>
							<div class="hero-subtitle"><span><?php echo wp_kses ( rayden_get_theme_options('clapat_rayden_error_info'), 'rayden_allowed_html' ); ?></span></div>

							<a class="button-box ajax-link error-button" href="<?php echo esc_url( rayden_get_theme_options('clapat_rayden_error_back_button_url') ); ?>" data-type="page-transition">
								<div class="clapat-button-wrap parallax-wrap hide-ball">
									<div class="clapat-button parallax-element">
										<div class="button-border rounded outline parallax-element-second">
											<span data-hover="<?php echo esc_attr( rayden_get_theme_options('clapat_rayden_error_back_button_hover_caption') ); ?>"><?php echo wp_kses( rayden_get_theme_options('clapat_rayden_error_back_button'), 'rayden_allowed_html' ); ?></span>
										</div>
									</div>
								</div> 
							</a>

						</div>
					</div>
				</div>
				<!--/Hero Caption -->
			</div>
		</div>
		<!-- /Hero --> 

<?php

get_footer();

?>