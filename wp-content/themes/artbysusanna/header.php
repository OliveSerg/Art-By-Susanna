<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content">
			<?php _e('Skip to content', 'twentyseventeen'); ?>
		</a>

		<header id="masthead" class="site-header" role="banner">

			<?php //get_template_part( 'template-parts/header/header', 'image' );?>
			<?php if (has_nav_menu('header')) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php wp_nav_menu([
						'theme_location' => 'header',
						'menu_id' => 'main',
					]); ?>
				</div>
			</div>
			<?php endif; ?>

		</header>
