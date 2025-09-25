<section id="services-carousel">
	<div class="container-large">
		<div class="inner">
			<div class="intro">
				<?php the_sub_field( 'section_intro' ); ?>
			</div>

			<?php if ( have_rows( 'carousel_items' ) ) : ?>
				<div class="carousel-outer">
					<div class="carousel-wrapper">
						<?php while ( have_rows( 'carousel_items' ) ) : the_row(); ?>
							<?php
								$link = get_sub_field( 'link_to' );
								if ( $link ) :
									$url    = $link['url'] ?? '';
									$title  = $link['title'] ?? '';
									$target = $link['target'] ?? '_self';
									$rel    = ( $target === '_blank' ) ? 'noopener noreferrer' : '';
							?>
								<a 
									class="carousel-item"
									href="<?php echo esc_url( $url ); ?>"
									target="<?php echo esc_attr( $target ); ?>"
									<?php if ( $rel ) echo 'rel="' . esc_attr( $rel ) . '"'; ?>>
									
									<div class="carousel-item-inner">
										<h3><?php the_sub_field( 'carousel_item_title' ); ?></h3>
										<p><?php the_sub_field( 'carousel_item_description' ); ?></p>
										<p class="learn-more"><?php echo esc_html( $title ); ?></p>
									</div>
								</a>
							<?php endif; ?>
						<?php endwhile; ?>
					</div>

					<div class="carousel-arrows">
						<div class="arrow arrow-prev">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
								<path d="M15.293 3.293 6.586 12l8.707 8.707 1.414-1.414L9.414 12l7.293-7.293-1.414-1.414z" />
							</svg>
						</div>
						<div class="arrow arrow-next">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24">
								<path d="M7.293 4.707 14.586 12l-7.293 7.293 1.414 1.414L17.414 12 8.707 3.293 7.293 4.707z" />
							</svg>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<div class="cta-wrapper">
				<?php
					$link = get_sub_field( 'cta' );
					if ( $link ) :
						$url    = $link['url'] ?? '';
						$title  = $link['title'] ?? '';
						$target = $link['target'] ?? '_self';
						$rel    = ( $target === '_blank' ) ? 'noopener noreferrer' : '';
				?>
					<a 
						class="btn btn-primary"
						href="<?php echo esc_url( $url ); ?>"
						target="<?php echo esc_attr( $target ); ?>"
						<?php if ( $rel ) echo 'rel="' . esc_attr( $rel ) . '"'; ?>>
						<?php echo esc_html( $title ); ?>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
