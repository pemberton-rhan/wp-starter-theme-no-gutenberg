<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header id="header">
		<div class="container-large">
			<div class="inner">

				<div class="logo-wrapper">
					<h4><?php esc_html_e( "Pemberton's Cabinetry", 'your-textdomain' ); ?></h4>
				</div>

				<?php
					wp_nav_menu( array(
						'theme_location'  => 'main-menu',
						'container'       => 'nav',
						'container_class' => 'main-menu-container',
						'menu_class'      => 'main-menu',
						'fallback_cb'     => false,
						'walker'          => new Custom_Walker_Nav_Menu(),
					) );
				?>

			</div>
		</div>
	</header>
