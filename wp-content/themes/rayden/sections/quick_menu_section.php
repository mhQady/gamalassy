			<!-- Quick Menu -->
			<div id="quickmenu" class="<?php if( rayden_get_theme_options('clapat_rayden_enable_ajax') ){ echo 'thumb-with-ajax'; } else { echo 'thumb-no-ajax'; } ?>">
				<div class="outer">
					<div class="inner">
						<div id="quickmenu-scroll">
							<div id="close-quickmenu"></div>
							<ul id="quick-projects">
								<?php

										$rayden_showcase_tax_query = null;
										if( is_page_template('showcase-page.php') ){
											
											$rayden_showcase_category_filter	= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-page-showcase-filter-category' );

											if( !empty( $rayden_showcase_category_filter ) ){
												
												$rayden_array_terms = explode( ",", $rayden_showcase_category_filter );
												$rayden_showcase_tax_query = array(
																					array(
																						'taxonomy' 	=> 'portfolio_category',
																						'field'  	=> 'slug',
																						'terms'  	=> $rayden_array_terms,
																					),
																				);
											}
										}
										
										$rayden_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
										$rayden_args = array(
													'post_type' => 'rayden_portfolio',
													'paged' => $rayden_paged,
													'tax_query' => $rayden_showcase_tax_query,
													'posts_per_page' => 1000,
													 );

										$rayden_portfolio = new WP_Query( $rayden_args );

										$rayden_slides_count = 0;
										while( $rayden_portfolio->have_posts() ){

											$rayden_portfolio->the_post();
											
											$rayden_showcase_include	= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-portfolio-showcase-include' );
											
											if( $rayden_showcase_include == "yes" ){
											
												$rayden_hero_properties = new Rayden_Hero_Properties();
												$rayden_hero_properties->getProperties( get_post_type( get_the_ID() ) );
												
												?>
												<li class="hide-ball">
													<div class="quick-title">
														<div class="slide-wrap<?php if( $rayden_slides_count == 0 ){ echo " active"; } ?>" data-slide="<?php echo esc_attr( $rayden_slides_count ); ?>">
														<?php if( !rayden_get_theme_options('clapat_rayden_enable_ajax') ){ ?>
														<a class="quick-link" href="<?php the_permalink(); ?>"></a>
														<?php }  ?>
														</div>
														<div class="q-timeline" data-number="<?php echo esc_attr( sprintf("%02d", $rayden_slides_count+1) ); ?>"><?php echo wp_kses( $rayden_hero_properties->caption_title, 'rayden_allowed_html' ); ?></div>
														<?php if( rayden_get_theme_options('clapat_rayden_enable_ajax') ){ ?>
														<a class="quick-link" data-type="page-transition" href="<?php the_permalink(); ?>"></a>
														<?php } ?>
													</div>
												</li>
												<?php
												
												$rayden_slides_count++;
											}

										}

										wp_reset_postdata();
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- /Quick Menu -->