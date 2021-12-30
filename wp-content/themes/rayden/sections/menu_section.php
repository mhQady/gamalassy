			<?php
				
				$rayden_menu_breakpoint = "1025";
				$rayden_menu_additionaL_text = "";
				if( rayden_get_theme_options( 'clapat_rayden_enable_fullscreen_menu' ) ){
					
					$rayden_menu_breakpoint = "10025";
				}
				
				$rayden_theme_location = '';
				if( has_nav_menu( 'primary-menu' ) ){
					
					$rayden_theme_location = 'primary-menu';
				}
				wp_nav_menu(array(
					'theme_location' 	=> $rayden_theme_location,
					'container' 			=> 'nav',
					'items_wrap' 		=> '<div class="nav-height"><div class="outer"><div class="inner"><ul id="%1$s" data-breakpoint="' . esc_attr( $rayden_menu_breakpoint ) . '" class="flexnav %2$s">%3$s</ul></div>' . wp_kses( $rayden_menu_additionaL_text, 'rayden_allowed_html' ) . '</div></div>'
				));

			?>
