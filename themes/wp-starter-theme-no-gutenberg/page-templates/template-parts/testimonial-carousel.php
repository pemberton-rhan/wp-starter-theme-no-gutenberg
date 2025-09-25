<section id="testimonial-carousel">
	<div class="container-large">
		<div class="inner">

			<div class="intro">
				<div class="quote">
					<svg fill="#eaae50" width="60px" height="auto" viewBox="0 -5 34 34" xmlns="http://www.w3.org/2000/svg">
						<path d="m2.4 24h7.2l4.8-9.6v-14.4h-14.4v14.4h7.2zm19.2 0h7.2l4.8-9.6v-14.4h-14.4v14.4h7.2z" />
					</svg>
				</div>
				<?php the_sub_field( 'section_intro' ); ?>
			</div>

			<div class="carousel-outer">
				<div class="carousel-wrapper">

					<?php if ( have_rows( 'testimonials' ) ) : ?>
						<?php while ( have_rows( 'testimonials' ) ) : the_row(); ?>
							<div class="testimonial">
								<div class="testimonial-inner">
									<div class="testimonial-content">
										<?php the_sub_field( 'testimonial' ); ?>
									</div>
									<?php
										$client = get_sub_field( 'client_name' );
										if ( $client ) :
									?>
										<p class="client"><?php echo esc_html( $client ); ?></p>
									<?php endif; ?>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>

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

		</div>
	</div>
</section>
