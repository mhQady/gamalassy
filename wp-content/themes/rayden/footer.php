<?php
/**
 * Created by Clapat.
 * Date: 25/06/20
 * Time: 11:14 AM
 */
?>
			<?php
				
			// display footer section
			get_template_part('sections/footer_section'); 
				
			?>
			
			<div id="app"></div>
			
			<?php if ( is_singular('rayden_portfolio') ){
				
				$rayden_next_project_image = rayden_portfolio_next_project_image();
			?>
			<div class="next-project-image-wrapper">
                <div class="next-project-image">
                    <div class="next-project-image-bg" style="background-image:url(<?php echo esc_url( $rayden_next_project_image ); ?>)"></div>
                </div>            
            </div>
			<?php } ?>
		
			</div>
			<!--/Page Content -->
		</div>
		<!--/Cd-main-content -->
	</main>
	<!--/Main -->	
	
	<div class="cd-cover-layer"></div>
	<div id="magic-cursor" <?php if( !rayden_get_theme_options('clapat_rayden_enable_magic_cursor') ){ echo "class='disable-cursor'"; } ?>>
		<div id="ball">
			<div id="ball-drag-x"></div>
			<div id="ball-drag-y"></div>
			<div id="ball-loader"></div>
		</div>
	</div>
	<div id="clone-image"></div>
	<div id="rotate-device"></div>
	
<?php wp_footer(); ?>
</body>
</html>
