<section id="featured-images">
	<div class="inner">
		
		<picture>
			<?php $image = get_sub_field('image_1'); ?>
			<?php if ($image): ?>
				<img
					src="<?php echo esc_url($image['url']); ?>"
					alt="<?php echo esc_attr($image['alt']); ?>"
					title="<?php echo esc_attr($image['title']); ?>"
				/>
			<?php endif; ?>
		</picture>
		
		<picture>
			<?php $image = get_sub_field('image_2'); ?>
			<?php if ($image): ?>
				<img
					src="<?php echo esc_url($image['url']); ?>"
					alt="<?php echo esc_attr($image['alt']); ?>"
					title="<?php echo esc_attr($image['title']); ?>"
				/>
			<?php endif; ?>
		</picture>
		
		<picture>
			<?php $image = get_sub_field('image_3'); ?>
			<?php if ($image): ?>
				<img
					src="<?php echo esc_url($image['url']); ?>"
					alt="<?php echo esc_attr($image['alt']); ?>"
					title="<?php echo esc_attr($image['title']); ?>"
				/>
			<?php endif; ?>
		</picture>
		
		<picture>
			<?php $image = get_sub_field('image_4'); ?>
			<?php if ($image): ?>
				<img
					src="<?php echo esc_url($image['url']); ?>"
					alt="<?php echo esc_attr($image['alt']); ?>"
					title="<?php echo esc_attr($image['title']); ?>"
				/>
			<?php endif; ?>
		</picture>
		
	</div>
</section>