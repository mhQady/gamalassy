<?php

/**
 * Created by Clapat.
 * Date: 08/06/20
 * Time: 11:33 AM
 */

// hero section container properties
$rayden_hero_properties = rayden_get_hero_properties(get_post_type());

if ($rayden_hero_properties->enabled) {

	get_template_part('sections/hero_section_container');
} else {

?>

	<?php

	?>
	<!-- Hero Section -->
	<div id="hero" <?php if (!rayden_get_theme_options('clapat_rayden_enable_page_title_as_hero')) {
						echo 'class="hero-hidden"';
					} ?>>
		<div id="hero-styles">
			<div id="hero-caption" class="parallax-onscroll text-align-center">
				<div class="inner">
					<div class="hero-title"><span>
							<?php
							echo the_title();
							?>
						</span></div>
				</div>
			</div>
		</div>
	</div>
	<!--/Hero Section -->

<?php

}
?>