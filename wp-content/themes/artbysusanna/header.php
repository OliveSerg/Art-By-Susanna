<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="page-wrapper">
		<header class="header-main" data-off-canvas-wrapper>
			<?php if (has_nav_menu('header')) : ?>
			<div class="nav-menu-mobile" id="nav-menu-off-canvas" data-position="right" data-transition="overlay" data-off-canvas>
				<?php wp_nav_menu([
                        'theme_location' => 'header',
                        'menu_id'        => 'main',
                        'menu_class'     => 'vertical menu'
                    ]); ?>
			</div>
			<?php endif; ?>

			<div class="off-canvas-content" data-off-canvas-content>
				<div class="header-bar">
					<div class="header-logo">
						<?php
                            if (has_custom_logo()) {
                                the_custom_logo();
                            } else {
                                echo '<h1>' . get_bloginfo('name') . '</h1>';
                            }
                        ?>
					</div>
					<div class="header-nav-container">
						<button class="menu-icon" type="button" data-open="nav-menu-off-canvas"></button>
						<?php if (has_nav_menu('header')) : ?>
						<div class="nav-menu-desktop">
							<?php wp_nav_menu([
                                'theme_location' => 'header',
                                'menu_id'        => 'main',
                                'menu_class'     => 'menu'
                            ]); ?>
						</div>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</header>
