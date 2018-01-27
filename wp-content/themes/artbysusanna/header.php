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
		<header id="masthead" class="main-header" role="banner">

			<?php if (has_nav_menu('header')) : ?>
			<nav id="header-nav" class="header-nav-container">
				<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
					<span class="icon-toggle"></span>
				</button>

				<?php wp_nav_menu([
						'theme_location' => 'header',
						'menu_id' => 'main',
					]); ?>
			</nav>
			<?php endif; ?>

			<div class="header-logo">
				<?php
					if (has_custom_logo()) {
						the_custom_logo();
					} else {
						echo '<h1>' . get_bloginfo('name') . '</h1>';
					}
				?>
			</div>

		</header>
