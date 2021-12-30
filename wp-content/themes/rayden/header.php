<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-primary-color="<?php echo esc_attr( rayden_get_theme_options('clapat_rayden_primary_color') ); ?>">
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>

	<main>
	<?php if( rayden_get_theme_options('clapat_rayden_enable_preloader') ){ ?>
		<!-- Preloader -->
		<div class="preloader-wrap" data-firstline="<?php echo esc_attr( rayden_get_theme_options('clapat_rayden_preloader_hover_first_line') ); ?>" data-secondline="<?php echo esc_attr( rayden_get_theme_options('clapat_rayden_preloader_hover_second_line') ); ?>" data-cursor-default-color="#f33a3a" data-cursor-hover-color="#f33a3a">
			<div class="outer">
                <div class="inner">                    
                    <div class="trackbar">
                    	<div class="preloader-intro"><?php echo wp_kses( rayden_get_theme_options('clapat_rayden_preloader_text'), 'rayden_allowed_html' ); ?></div>
                        <div class="loadbar"></div>
                    </div>
                    <div class="percentage-intro"><?php echo wp_kses( rayden_get_theme_options('clapat_rayden_preloader_percentage_text'), 'rayden_allowed_html' ); ?></div>
                    <div class="percentage-wrapper"><div class="percentage" id="precent"></div></div>                     
                </div>
            </div>
		</div>
		<!--/Preloader -->
	<?php } ?>
		
		<!--Cd-main-content -->
		<div class="cd-index cd-main-content">
			
		<?php
		$rayden_bknd_color = "";
		if( is_singular( 'rayden_portfolio' ) ){
	
			$rayden_bknd_color = rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-portfolio-bknd-color' );
			
		}
		else if( is_singular( 'post' ) ){
	
			$rayden_bknd_color = rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-blog-bknd-color' );
			
		}
		else if( is_404() ){
			
			$rayden_bknd_color = rayden_get_theme_options( 'clapat_rayden_error_page_bknd_type' );
			
		}
		else if( is_page() ){
	
			$rayden_bknd_color = rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-page-bknd-color' );

		}
		if( empty( $rayden_bknd_color ) ){
			
			$rayden_bknd_color = rayden_get_theme_options( 'clapat_rayden_default_page_bknd_type' );
		}
		
		$rayden_bknd_color_attribute = "#ffffff";
		if( $rayden_bknd_color == "light-content" ){
			
			$rayden_bknd_color_attribute = "#141414";
		}
		
		?>
	
		<?php $rayden_page_content_classes = ""; ?>
		
		<?php
		if( function_exists("is_woocommerce") ){
			
			if( is_shop() ){
				
				$rayden_page_content_classes	.= "woocommerce";
				
				$rayden_shop_grid_width 		= rayden_get_theme_options( 'clapat_rayden_shop_grid_width' );
				$rayden_page_content_classes	.= " " . $rayden_shop_grid_width;
				
				$rayden_shop_product_caption 	= rayden_get_theme_options( 'clapat_rayden_shop_product_caption' );
				$rayden_page_content_classes	.= " " . $rayden_shop_product_caption;
				
				$rayden_shop_product_caption_color	= rayden_get_theme_options( 'clapat_rayden_shop_product_caption_color' );
				$rayden_page_content_classes		.= " " . $rayden_shop_product_caption_color;
				
				$rayden_shop_nav_align 			= rayden_get_theme_options( 'clapat_rayden_shop_nav_align' );
				$rayden_page_content_classes	.= " " . $rayden_shop_nav_align;
			}
		}
		?>
		
		<?php if( is_page_template( 'blog-page.php' ) || is_home() || is_archive() || is_search() ){ ?>
			<!-- Page Content -->
			<div id="page-content" class="blog-template <?php echo sanitize_html_class( $rayden_bknd_color ); if( !rayden_get_theme_options( 'clapat_rayden_enable_magic_cursor' ) ){ echo " magic-cursor-disabled"; } ?> <?php echo esc_attr( $rayden_page_content_classes ); ?>" data-bgcolor="<?php echo esc_attr( $rayden_bknd_color_attribute ); ?>" >
		<?php } else { ?>
			<!-- Page Content -->
			<div id="page-content" class="<?php echo sanitize_html_class( $rayden_bknd_color ); if( !rayden_get_theme_options( 'clapat_rayden_enable_magic_cursor' ) ){ echo " magic-cursor-disabled"; } ?> <?php echo esc_attr( $rayden_page_content_classes ); ?>" data-bgcolor="<?php echo esc_attr( $rayden_bknd_color_attribute ); ?>" >
		<?php } ?>
		
			<?php 
				// display header section
				get_template_part('sections/header_section'); 		
			?>