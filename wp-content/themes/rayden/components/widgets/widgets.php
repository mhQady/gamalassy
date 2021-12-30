<?php

// more widgets in the (near) future...

// Register widgetized locations
if(  !function_exists('rayden_widgets_init') ){

    function rayden_widgets_init(){

		$args = 			array( 'name'		=> esc_html__( 'Blog Sidebar', 'rayden' ),
								'id'           	=> 'rayden-blog-sidebar',
								'description'  	=> '',
								'class'        	=> '',
								'before_widget'	=> '<div id="%1$s" class="widget rayden-sidebar-widget %2$s">',
								'after_widget'  => '</div>',
								'before_title'  => '<h5 class="widgettitle rayden-widgettitle">',
								'after_title'   => '</h5>' );
		
		register_sidebar( $args );
		
		if( function_exists( "is_woocommerce" ) ){
			
			$args = 			array( 'name'		=> esc_html__( 'Shop Sidebar', 'rayden' ),
									'id'           	=> 'rayden-shop-sidebar',
									'description'  	=> '',
									'class'        	=> '',
									'before_widget'	=> '<div id="%1$s" class="widget rayden-sidebar-widget %2$s">',
									'after_widget'  => '</div>',
									'before_title'  => '<h5 class="widgettitle rayden-widgettitle">',
									'after_title'   => '</h5>' );
			
			register_sidebar( $args );
		}
        
    }
}

add_action( 'widgets_init', 'rayden_widgets_init' );

?>