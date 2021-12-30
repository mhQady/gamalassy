			<!-- Filters Overlay -->
			<div id="filters-overlay">
				<div id="close-filters"></div>
				<div class="outer">
					<div class="inner">
						<ul id="filters">
							<li class="filters-timeline link"><a id="all" href="#" data-filter="*" class="active hide-ball"><?php echo wp_kses( rayden_get_theme_options( 'clapat_rayden_portfolio_filter_all_caption' ), 'rayden_allowed_html' ); ?></a></li>
							<?php
							
								// check if the category filter is specified in page options
								$rayden_portfolio_category_filter	= rayden_get_post_meta( RAYDEN_THEME_OPTIONS, get_the_ID(), 'rayden-opt-page-portfolio-filter-category' );

								$rayden_portfolio_category = null;
								if( !empty( $rayden_portfolio_category_filter ) ){
	
									$rayden_portfolio_category = array();
									$rayden_category_slugs = explode( ",", $rayden_portfolio_category_filter );
									foreach( $rayden_category_slugs as $rayden_category_slug ){
										
										$rayden_category_object = get_term_by( 'slug', $rayden_category_slug, 'portfolio_category' );
										if( $rayden_category_object ){
											
											array_push( $rayden_portfolio_category, $rayden_category_object );
										}
									}
								}
								else {

									$rayden_portfolio_category = get_terms('portfolio_category', array( 'hide_empty' => 0 ));
								}

								if( $rayden_portfolio_category ){

									foreach( $rayden_portfolio_category as $portfolio_cat ){

							?>
							<li class="filters-timeline link"><a href="#" data-filter=".<?php echo sanitize_title( $portfolio_cat->slug ); ?>" class="hide-ball"><?php echo wp_kses( $portfolio_cat->name, 'rayden_allowed_html' ); ?></a></li>
							<?php

									}
								}

							?>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Filters Overlay -->