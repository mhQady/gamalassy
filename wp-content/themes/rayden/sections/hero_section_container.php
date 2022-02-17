<?php

/**
 * Created by Clapat.
 * Date: 18/11/20
 * Time: 1:34 PM
 */
$rayden_hero_properties = rayden_get_hero_properties(get_post_type());

$hero_styles = $rayden_hero_properties->position;

if ($rayden_hero_properties->enabled) {

?>

	<?php if ($rayden_hero_properties->image && !empty($rayden_hero_properties->image['url'])) { ?>
		<!-- Hero Section -->
		<div id="hero" class="has-image<?php if (rayden_get_theme_options('clapat_rayden_portfolio_autoscroll_hero')) {
											echo " autoscroll";
										} ?>">
			<div id="hero-styles">
				<div id="hero-caption" class="reverse-parallax-onscroll text-align-center">
					<div class="inner">
						<div class="hero-title"><?php

												//echo wp_kses( $rayden_hero_properties->caption_title, 'rayden_allowed_html' ); 
												?></div>
						<div class="hero-subtitle"><?php echo wp_kses($rayden_hero_properties->caption_subtitle, 'rayden_allowed_html'); ?></div>
					</div>
				</div>
				<div id="hero-footer">
					<div class="hero-footer-left">
						<div class="button-wrap left disable-drag scroll-down">
							<div class="icon-wrap parallax-wrap">
								<div class="button-icon parallax-element">
									<i class="fa fa-angle-down"></i>
								</div>
							</div>
							<?php if (!empty($rayden_hero_properties->scroll_down_caption)) { ?>
								<div class="button-text sticky left"><span data-hover="<?php echo esc_attr($rayden_hero_properties->scroll_down_caption); ?>"><?php echo wp_kses($rayden_hero_properties->scroll_down_caption, 'rayden_allowed_html'); ?></span></div>
							<?php } ?>
						</div>
					</div>
					<?php if (rayden_get_theme_options('clapat_rayden_portfolio_share_social_networks')) { ?>
						<div class="hero-footer-right">
							<div id="share" class="page-action-content disable-drag" data-text="<?php echo esc_attr(rayden_get_theme_options('clapat_rayden_portfolio_share_social_networks_caption')); ?>"></div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div id="hero-image-wrapper">
			<div id="hero-background-layer" class="parallax-scroll-effect">
				<div id="hero-bg-image" style="background-image:url(<?php echo esc_url($rayden_hero_properties->image['url']); ?>)">
					<?php if ($rayden_hero_properties->video) { ?>
						<div class="hero-video-wrapper">
							<video loop muted class="bgvid">
								<?php if (!empty($rayden_hero_properties->video_mp4)) { ?>
									<source src="<?php echo esc_url($rayden_hero_properties->video_mp4); ?>" type="video/mp4">
								<?php } ?>
								<?php if (!empty($rayden_hero_properties->video_webm)) { ?>
									<source src="<?php echo esc_url($rayden_hero_properties->video_webm); ?>" type="video/webm">
								<?php } ?>
							</video>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<!--/Hero Section -->
	<?php } else { ?>

		<!-- Hero Section -->
		<div id="hero">
			<div id="hero-styles">
				<div id="hero-caption" class="parallax-onscroll <?php echo sanitize_html_class($rayden_hero_properties->alignment); ?>">
					<div class="inner">
						<div class="hero-title"><?php echo wp_kses($rayden_hero_properties->caption_title, 'rayden_allowed_html'); ?></div>
						<div class="hero-subtitle"><?php echo wp_kses($rayden_hero_properties->caption_subtitle, 'rayden_allowed_html'); ?></div>
					</div>
				</div>
			</div>
		</div>
		<!--/Hero Section -->
	<?php } ?>

<?php
}
?>