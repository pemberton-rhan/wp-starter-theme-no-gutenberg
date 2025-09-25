<?php
/**
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>

<?php if ( have_rows( 'homepage' ) ) : ?>
	<?php while ( have_rows( 'homepage' ) ) : the_row(); ?>

		<!-- Hero -->
		<?php if ( get_row_layout() === 'hero' ) : ?>
			<?php get_template_part( 'page-templates/template-parts/hero' ); ?>
		<?php endif; ?>
		
		<!-- Service carousel -->
		<?php if ( get_row_layout() === 'services_carousel' ) : ?>
			<?php get_template_part( 'page-templates/template-parts/services-carousel' ); ?>
		<?php endif; ?>
		
		<!-- Our process -->
		<?php if ( get_row_layout() === 'our_process' ) : ?>
			<?php get_template_part( 'page-templates/template-parts/our-process' ); ?>
		<?php endif; ?>
		
		<!-- Cards -->
		<?php if ( get_row_layout() === 'cards' ) : ?>
			<?php get_template_part( 'page-templates/template-parts/cards' ); ?>
		<?php endif; ?>
		
		<!-- Featured images -->
		<?php if ( get_row_layout() === 'featured_images' ) : ?>
			<?php get_template_part( 'page-templates/template-parts/featured-images' ); ?>
		<?php endif; ?>
		
		<!-- Testimonial slider -->
		<?php if ( get_row_layout() === 'testimonial_carousel' ) : ?>
			<?php get_template_part( 'page-templates/template-parts/testimonial-carousel' ); ?>
		<?php endif; ?>

	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
