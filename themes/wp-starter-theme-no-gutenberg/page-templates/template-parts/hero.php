<section id="hero">
	<div class="container-large">
		<div class="inner">
			<div class="content">
				<?php if ( get_sub_field( 'hero_content' ) ) : ?>
					<?php the_sub_field( 'hero_content' ); ?>
				<?php endif; ?>
			</div>

			<div class="buttons-wrapper">
				<?php
					$cta_fields = [
						'cta_1' => 'btn-primary',
						'cta_2' => 'btn-secondary',
					];

					foreach ( $cta_fields as $field => $class ) :
						$link = get_sub_field( $field );
						if ( $link ) :
							$url    = $link['url'] ?? '';
							$title  = $link['title'] ?? '';
							$target = $link['target'] ?? '_self';
							$rel    = ( $target === '_blank' ) ? 'noopener noreferrer' : '';
				?>
					<a class="btn <?php echo esc_attr( $class ); ?>"
						 href="<?php echo esc_url( $url ); ?>"
						 target="<?php echo esc_attr( $target ); ?>"
						 <?php if ( $rel ) echo 'rel="' . esc_attr( $rel ) . '"'; ?>>
						<?php echo esc_html( $title ); ?>
					</a>
				<?php
						endif;
					endforeach;
				?>
			</div>
		</div>
	</div>

	<?php $image = get_sub_field( 'hero_image' ); ?>
	<?php if ( $image ) : ?>
		<picture>
			<img 
				src="<?php echo esc_url( $image['url'] ); ?>"
				alt="<?php echo esc_attr( $image['alt'] ); ?>" 
				title="<?php echo esc_attr( $image['title'] ); ?>" />
		</picture>
	<?php endif; ?>
</section>
