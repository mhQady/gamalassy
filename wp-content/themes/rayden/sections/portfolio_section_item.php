<?php

$full_image = rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-portfolio-hero-img' );
$rayden_portfolio_thumbnail_type = rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-portfolio-thumbnail-type' );

if( $full_image && isset( $full_image['url'] ) ){

	$rayden_item_classes 	= '';
	$rayden_item_categories 	= '';
	$rayden_item_cats = get_the_terms($post->ID, 'portfolio_category');
	if($rayden_item_cats){

		foreach($rayden_item_cats as $item_cat) {
			$rayden_item_classes 	.= $item_cat->slug . ' ';
			$rayden_item_categories 	.= $item_cat->name . ', ';
		}

		$rayden_item_categories = rtrim($rayden_item_categories, ', ');

	}
	
	$rayden_item_classes .= $rayden_portfolio_thumbnail_type;
	$rayden_current_item_count = get_query_var('rayden_query_var_item_count');
	
	$item_url = get_the_permalink();

?>
						<div class="item <?php echo esc_attr( $rayden_item_classes ); ?> disable-drag">
							<div class="item-parallax">
								<div class="item-appear">
									<div class="item-content">
										<a class="item-wrap ajax-link-project" data-type="page-transition" href="<?php echo esc_url( $item_url ); ?>"></a>
										<div class="item-wrap-image">
											<img src="<?php echo esc_url( $full_image['url'] ); ?>" class="item-image grid__item-img" alt="<?php esc_attr_e('Portfolio Thumbnail Image', 'rayden') ?>">
											<?php if( rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-portfolio-video' ) ){ 
												
												$rayden_video_webm_url 	= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-portfolio-video-webm' );
												$rayden_video_mp4_url 	= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-portfolio-video-mp4' );
											?>
											<div class="hero-video-wrapper">
												<video loop muted class="bgvid">
												<?php if( !empty( $rayden_video_mp4_url ) ) { ?>
													<source src="<?php echo esc_url( $rayden_video_mp4_url ); ?>" type="video/mp4">
												<?php } ?>
												<?php if( !empty( $rayden_video_webm_url ) ) { ?>
													<source src="<?php echo esc_url( $rayden_video_webm_url ); ?>" type="video/webm">
												<?php } ?>
												</video>
											</div>
										<?php } ?>
										</div>
										<img class="grid__item-img grid__item-img--large" src="<?php echo esc_url( $full_image['url'] ); ?>" alt="<?php esc_attr_e('Portfolio Image Large', 'rayden') ?>" />
									</div>
								</div>
								<div class="item-caption-wrapper">
									<div class="item-caption">
										<div class="item-title"><?php the_title(); ?></div>
										<div class="item-cat"><?php echo wp_kses( $rayden_item_categories, 'rayden_allowed_html' ); ?></div>
									</div>
								</div>
							</div>
						</div>

<?php

}
?>
