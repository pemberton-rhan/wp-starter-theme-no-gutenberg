<section id="our-process">
	<div class="container-large">
		<div class="inner">
			
			<?php $image = get_sub_field( 'image' ); ?>
			<?php if ( $image ) : ?>
				<picture>
					<img 
						src="<?php echo esc_url( $image['url'] ); ?>"
						alt="<?php echo esc_attr( $image['alt'] ); ?>" 
						title="<?php echo esc_attr( $image['title'] ); ?>" />
				</picture>
			<?php endif; ?>
			
			<div class="our-process-content">
				<div class="intro">
					<?php the_sub_field('our_process_content'); ?>
				</div>
			</div>
			
		</div>
	</div>
</section>