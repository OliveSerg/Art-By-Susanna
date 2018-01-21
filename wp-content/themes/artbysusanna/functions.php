<?php

function artbysusanna_setup()
{
	register_nav_menus([
		'header' => __('Header menu', 'artbysusanna'),
		'footer' => __('Footer menu', 'artbysusanna')
	]);

	add_theme_support('post-thumbnails');
	add_image_size('xlarge', 1200, 1200, true);
}
add_action('after_setup_theme', 'artbysusanna_setup');

function artbysusanna_scripts()
{
	wp_enqueue_style('artbysusanna-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'artbysusanna_scripts');
