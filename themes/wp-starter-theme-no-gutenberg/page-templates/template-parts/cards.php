<section id="cards">
	<div class="container-large">
		<div class="inner">

			<div class="intro">
				<?php the_sub_field( 'section_intro' ); ?>
			</div>

			<?php if ( have_rows( 'cards' ) ) : ?>
				<div class="cards-wrapper">
					<?php while ( have_rows( 'cards' ) ) : the_row(); ?>

						<?php
							$button = get_sub_field( 'link' );
							if ( $button ) :
								$button_url    = $button['url'] ?? '';
								$button_title  = $button['title'] ?? '';
								$button_target = $button['target'] ?? '_self';
						?>
							<a class="card"
								 href="<?php echo esc_url( $button_url ); ?>"
								 target="<?php echo esc_attr( $button_target ); ?>">

								<?php $image = get_sub_field( 'image' ); ?>
								<?php if ( $image ) : ?>
									<picture>
										<img
											src="<?php echo esc_url( $image['url'] ); ?>"
											alt="<?php echo esc_attr( $image['alt'] ); ?>"
											title="<?php echo esc_attr( $image['title'] ); ?>" />
									</picture>
								<?php endif; ?>

								<div class="content">
									<div class="content-inner">
										<?php the_sub_field( 'content' ); ?>
										<div class="cta">
											<p class="learn-more">
												<?php echo esc_html( $button_title ); ?>
											</p>
										</div>
									</div>
								</div>

							</a>
						<?php endif; ?>

					<?php endwhile; ?>
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
