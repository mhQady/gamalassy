				<div class="blog-navigation has-animation">
					<?php
					$big = 999999999; // need an unlikely integer

					$rayden_current_query = rayden_get_current_query();
					if ( get_query_var( 'paged' ) ) { $rayden_current_page = get_query_var( 'paged' ); }
					elseif ( get_query_var( 'page' ) ) { $rayden_current_page = get_query_var( 'page' ); }
					else { $rayden_current_page = 1; }
					
					$rayden_paginate_links = paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'type' => 'list',
						'format' => '?paged=%#%',
						'current' => $rayden_current_page,
						'total' => $rayden_current_query->max_num_pages,
						'prev_text' => wp_kses_post( rayden_get_theme_options('clapat_rayden_blog_prev_posts_caption') ),
						'next_text' => wp_kses_post( rayden_get_theme_options('clapat_rayden_blog_next_posts_caption') )
					) );
					
					if( rayden_get_theme_options( 'clapat_rayden_enable_ajax' ) ){
						
						$rayden_paginate_links = str_replace( 'a class="prev page-numbers"', 'a class="prev page-numbers ajax-link" data-type="page-transition"', $rayden_paginate_links ); 
						$rayden_paginate_links = str_replace( 'a class="page-numbers"', 'a class="page-numbers ajax-link" data-type="page-transition"', $rayden_paginate_links ); 
						$rayden_paginate_links = str_replace( 'a class="next page-numbers"', 'a class="next page-numbers ajax-link" data-type="page-transition"', $rayden_paginate_links ); 
					}
						
					echo wp_kses_post( $rayden_paginate_links ); 
					
					?>
				</div>