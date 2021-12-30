<?php
// retrieve the path to the logo displayed in the menu bar
$rayden_logo = rayden_get_theme_options( 'clapat_rayden_logo' );
$rayden_logo_path = esc_url( $rayden_logo );
if( !$rayden_logo_path ){
	$rayden_logo_path = get_template_directory_uri() . "/images/logo.png";
}

$rayden_logo_light = rayden_get_theme_options( 'clapat_rayden_logo_light' );
$rayden_logo_light_path = esc_url( $rayden_logo_light );
if( !$rayden_logo_light_path ){
	$rayden_logo_light_path = get_template_directory_uri() . "/images/logo-white.png";
}

?>
		<!-- Header -->
		<header class="<?php if( rayden_get_theme_options( 'clapat_rayden_enable_fullscreen_menu' ) ){ echo "fullscreen-menu"; } else { echo "classic-menu"; } ?>">
			<div id="header-container">

				<!-- Logo -->
				<div id="logo" class="hide-ball disable-drag">
					<a class="ajax-link" data-type="page-transition" href="<?php echo esc_url( get_home_url() ); ?>">
						<img class="black-logo" src="<?php echo esc_url( $rayden_logo_path ); ?>" alt="<?php echo esc_attr__('Logo Black', 'rayden'); ?>">
						<img class="white-logo" src="<?php echo esc_url( $rayden_logo_light_path ); ?>" alt="<?php echo esc_attr__('Logo White', 'rayden'); ?>">
					</a>
				</div>
				<!--/Logo -->             
				
				<?php if( function_exists( "is_woocommerce" ) ){ 
						if( is_woocommerce() ){
				?>
					<!-- Shopping Cart -->            
                	<ul class="site-header-cart menu">
                
                    	<li><a class="cart-contents"></a></li>
                    
                    	<!-- Shopping Cart Dropdown -->
                    	<?php the_widget('WC_Widget_Cart'); ?>
                    	<!-- //Shopping Cart Dropdown -->
                    </ul>	
				<?php 	} 
					}
				?>
				
				<?php

				get_template_part('sections/menu_section');

				?>
		
				<!-- Menu Burger -->
				<div class="button-wrap right menu disable-drag">
					<div class="icon-wrap parallax-wrap">
						<div class="button-icon parallax-element">
							<div id="burger-wrapper">
								<div id="menu-burger">
									<span></span>
									<span></span>
									<span></span>
								</div>
							</div>
						</div>
					</div>
					<div class="button-text sticky right"><span data-hover="<?php echo esc_attr( rayden_get_theme_options('clapat_rayden_menu_btn_caption') ); ?>"><?php echo wp_kses( rayden_get_theme_options('clapat_rayden_menu_btn_caption'), 'rayden_allowed_html' ); ?></span></div>
				</div>
				<!--/Menu Burger -->

				<?php 
				$rayden_is_shop = false;
				if( function_exists( "is_woocommerce" ) ){
					
					$rayden_is_shop = is_shop();
				}
				?>
				<?php if( is_page_template( 'blog-page.php' ) || $rayden_is_shop || is_home() || is_archive() || is_search() || is_singular( 'post' ) ){
					if( !is_tax('portfolio_category') ){
				?>
				<div id="open-sidebar-nav"><i class="fa fa-arrow-left"></i></div>
				<?php 
					}
				}
				?>
			</div>
		</header>
		<!--/Header -->
		
		<?php if( is_page_template( 'blog-page.php' ) || $rayden_is_shop || is_home() || is_archive() || is_search() || is_singular( 'post' ) ){ 
			
			if( $rayden_is_shop ){
				
				// display shop sidebar section, if defined
				get_template_part('sections/shop_sidebar_section'); 
			}
			else if( !is_tax('portfolio_category') ){
				
				// display sidebar section, if defined
				get_template_part('sections/blog_sidebar_section'); 
			}
		} 
		?>
		
		<?php if( is_page_template( 'portfolio-page.php' ) || is_page_template( 'portfolio-mixed-page.php' ) ){ ?>

			<div id="show-filters" class="disable-drag" data-tooltip="<?php echo esc_attr( rayden_get_theme_options('clapat_rayden_portfolio_show_filters_caption') ); ?>" data-placement="top">
				<div class="show-filters-wrap parallax-wrap">
					<div class="open-filters parallax-element">
						<i class="fa fa-sort"></i>
					</div>
				</div>
			</div>
			
		<?php
			// display filters section, if defined
			get_template_part('sections/portfolio_filters_section'); 
		} 
		?>
		<div id="content-scroll">