<?php

if( !function_exists('rayden_render_footer_social_links' ) )
{
	function rayden_render_footer_social_links(){

		global $rayden_social_links_icons;
		$rayden_social_links = "";
		for( $idx = 1; $idx <= RAYDEN_MAX_SOCIAL_LINKS; $idx++ ){

			$social_name = rayden_get_theme_options( 'clapat_rayden_footer_social_' . $idx );
			$social_url  = rayden_get_theme_options( 'clapat_rayden_footer_social_url_' . $idx );

			if( $social_url ){

				if( rayden_get_theme_options( 'clapat_rayden_social_links_icons' ) ){
					
					$rayden_social_links .= '<li><span class="parallax-wrap"><a class="parallax-element" href="' . esc_url( $social_url ) . '" target="_blank"><i class="fa fa-'. esc_attr( $rayden_social_links_icons[ $social_name ] ) . '"></i></a></span></li>';
				}
				else {
					
					$rayden_social_links .= '<li><span class="parallax-wrap"><a class="parallax-element" href="' . esc_url( $social_url ) . '" target="_blank">' . wp_kses( $social_name, 'rayden_allowed_html' ) . '</a></span></li>';
				}

			}

		}
		
		if( !empty( $rayden_social_links ) ){
?>
						<div class="socials-wrap disable-drag">
							<div class="socials-icon"><i class="fa fa-share-alt" aria-hidden="true"></i></div>
							<div class="socials-text"><?php echo wp_kses( rayden_get_theme_options('clapat_rayden_footer_social_links_prefix'), 'rayden_allowed_html' ); ?></div>
							<ul class="socials">
								<?php echo wp_kses( $rayden_social_links, 'rayden_allowed_html' ); ?>
							</ul>
						</div>
<?php			
		
		}

	}
}

rayden_render_footer_social_links();

?>
