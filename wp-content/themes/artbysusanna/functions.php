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

    $starter_content = [
        'widgets' => [
            // Add the core-defined business info widget to the footer 1 area.
            'footer-left' => [
                'text_business_info',
            ],

            // Put two core-defined widgets in the footer 2 area.
            'footer-right' => [
                'text_about',
                'search',
            ],
        ],

        // // Default to a static front page and assign the front and posts pages.
        // 'options' => [
        //     'show_on_front'  => 'page',
        //     'page_on_front'  => '{{home}}',
        //     'page_for_posts' => '{{blog}}',
        // ],

        // // Set the front page section theme mods to the IDs of the core-registered pages.
        // 'theme_mods' => [
        //     'panel_1' => '{{homepage-section}}',
        //     'panel_2' => '{{about}}',
        //     'panel_3' => '{{blog}}',
        //     'panel_4' => '{{contact}}',
        // ],

        // // Set up nav menus for each of the two areas registered in the theme.
        // 'nav_menus' => [
        //     // Assign a menu to the "top" location.
        //     'top' => [
        //         'name'  => __('Top Menu', 'artbysusanna'),
        //         'items' => [
        //             'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
        //             'page_about',
        //             'page_blog',
        //             'page_contact',
        //         ],
        //     ],
        // ],
    ];

    $starter_content = apply_filters('artbysusanna_starter_content', $starter_content);

    add_theme_support('starter-content', $starter_content);
}
add_action('after_setup_theme', 'artbysusanna_setup');

function artbysusanna_scripts()
{
    wp_enqueue_style('artbysusanna-style', get_stylesheet_uri());
    wp_enqueue_script('artbysusanna-script', get_theme_file_uri('/scripts.js'));
}
add_action('wp_enqueue_scripts', 'artbysusanna_scripts');

function artbysusanna_widgets_init()
{
    register_sidebar([
        'name'          => __('Footer Left', 'artbysusanna'),
        'id'            => 'footer-left',
        'description'   => __('Add widgets here to appear in right left side of your footer.', 'artbysusanna'),
        'before_title'  => '<h3 class="footer-title">',
        'after_title'   => '</h3>',
    ]);

    register_sidebar([
        'name'          => __('Footer Right', 'artbysusanna'),
        'id'            => 'footer-right',
        'description'   => __('Add widgets here to appear in the right side of your footer.', 'artbysusanna'),
        'before_title'  => '<h3 class="footer-title">',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'artbysusanna_widgets_init');

function artbysusanna_admin_pages_init()
{
    add_options_page(
    'Site Configurations',
    'Site Configurations',
    '8',
    'site-configs.php'
    );
}
add_action('admin_menu', 'artbysusanna_admin_pages_init');
