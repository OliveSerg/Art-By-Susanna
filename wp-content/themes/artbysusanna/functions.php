<?php

function artbysusanna_setup()
{
    register_nav_menus([
        'header' => __('Header menu', 'artbysusanna'),
        'footer' => __('Footer menu', 'artbysusanna')
    ]);

    add_theme_support('post-thumbnails');
    add_image_size('xlarge', 1200, 1200, true);

    add_theme_support('post-formats', [
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ]);

    add_theme_support('custom-logo', [
        'width'       => 250,
        'height'      => 250,
        'flex-width'  => true,
        'header-text' => ['Art By Susanna']
    ]);

    if (function_exists('register_sidebar')) {
        register_sidebar();
    }

    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'artbysusanna_setup');

function artbysusanna_scripts()
{
    wp_enqueue_style('artbysusanna-style', get_stylesheet_uri());
    wp_enqueue_script('artbysusanna-script', get_theme_file_uri('/scripts.js'));
}
add_action('wp_enqueue_scripts', 'artbysusanna_scripts');

if (is_admin()) {
    require 'SiteConfigurationsPage.php';

    new SiteConfigurationsPage();
}
