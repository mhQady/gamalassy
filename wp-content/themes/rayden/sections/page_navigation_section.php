<?php

	$rayden_page_nav_enable				= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-page-enable-navigation' );
	$rayden_page_caption_first_line		= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-page-navigation-caption-first-line' );
	$rayden_page_caption_second_line	= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-page-navigation-caption-second-line' );
	$rayden_next_url					= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-page-navigation-next-url' );
	$rayden_next_title_first_row		= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-page-navigation-next-title-first-row' );
	$rayden_next_title_second_row		= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-page-navigation-next-title-second-row' );
	$rayden_next_title_subtitle			= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-page-navigation-next-subtitle' );
	
	if( $rayden_page_nav_enable ){
?>

				<!-- Page Navigation --> 
				<div id="page-nav">
					<div class="next-page-wrap">
						<div class="next-page-title">
							<div class="inner">
								<div class="page-title-wrapper has-animation text-align-center">
									<a class="page-title next-ajax-link-page disable-drag" href="<?php echo esc_url( $rayden_next_url	); ?>" data-type="page-transition" data-firstline="<?php echo esc_attr( $rayden_page_caption_first_line ); ?>" data-secondline="<?php echo esc_attr( $rayden_page_caption_second_line ); ?>">
										<div class="next-hero-title">
											<?php if( !empty( $rayden_next_title_first_row ) ){ ?>
											<span><?php echo wp_kses( $rayden_next_title_first_row, 'rayden_allowed_html' ); ?></span>
											<?php } ?>
											<?php if( !empty( $rayden_next_title_second_row ) ){ ?>
											<span><?php echo wp_kses( $rayden_next_title_second_row, 'rayden_allowed_html' ); ?></span>
											<?php } ?>
										</div>
										<div class="next-hero-subtitle"><span><?php echo wp_kses( $rayden_next_title_subtitle	, 'rayden_allowed_html' ); ?></span></div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>      
				<!--/Page Navigation -->
<?php } ?>