<?php
$rayden_post_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>
				<!-- Article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
					<div class="article-wrap">
						<div class="article-head">
							<?php if( $rayden_post_image  ){ ?>
							<a class="article-link-img ajax-link-post" data-type="page-transition" href="<?php the_permalink(); ?>">
								<div class="article-img-wrap">
									<div class="article-img">
										<img src="<?php echo esc_url( $rayden_post_image[0] ); ?>" alt="<?php esc_attr_e("Post Image", "rayden"); ?>">
									</div>
								</div>
							</a>
							<?php } ?>
						</div>
						<div class="article-content">
							<a class="post-title hide-ball ajax-link" href="<?php echo esc_url( the_permalink() ); ?>" data-type="page-transition"><?php the_title(); ?></a>
							<ul class="entry-meta entry-date">
								<li class="link"><a class="ajax-link" href="<?php the_permalink(); ?>"><span data-hover="<?php the_time('j F Y'); ?>"><?php the_time('j F Y'); ?></span></a></li>
							</ul>
							<div class="entry-meta entry-categories">
								<ul class="post-categories">
								<?php 
									$rayden_categories = get_the_category();
									if ( ! empty( $rayden_categories ) ) {
										
										foreach( $rayden_categories as $rayden_category ) {
											
											echo '<li class="link">';
											echo wp_kses( '<a class="ajax-link" data-type="page-transition" href="' . esc_url( get_category_link( $rayden_category->term_id ) ) . '" rel="category tag"><span data-hover="' . esc_attr( $rayden_category->name ) . '">' . esc_html( $rayden_category->name ) . '</span></a>', 'rayden_allowed_html' );
											echo '</li>';
										}
									}
								?>
								</ul>
							</div>
							<div class="button-box">
								<a class="ajax-link" data-type="page-transition" href="<?php the_permalink(); ?>">
									<div class="clapat-button-wrap parallax-wrap hide-ball">
										<div class="clapat-button parallax-element">
											<div class="button-border outline rounded parallax-element-second">
												<span data-hover="<?php echo esc_attr( rayden_get_theme_options( 'clapat_rayden_blog_read_more_caption' ) ); ?>"><?php echo wp_kses( rayden_get_theme_options( 'clapat_rayden_blog_read_more_caption' ), 'rayden_allowed_html' ); ?></span>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="page-links">
							<?php
								wp_link_pages();
							?>
							</div>
						</div>
					</div>
				</article>
				<!--/Article -->