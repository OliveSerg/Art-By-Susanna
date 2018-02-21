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

// function artbysusanna_assign_widget($sidebar, $widgetId, $widgetData = [])
// {
//     $sidebarsWidgets = get_option('sidebars_widgets', []);
//     $widgetInstances = get_option('widget_' . $widgetId, []);

//     $numericKeys = array_filter(array_keys($widgetInstances), 'is_int');
//     $nextKey     = $numericKeys ? max($numericKeys) + 1 : 2;

//     if (!isset($sidebarsWidgets[$sidebar])) {
//         $sidebarsWidgets[$sidebar] = [];
//     }

//     $sidebarsWidgets[$sidebar][] = $widgetId . '-' . $nextKey;
//     $widgetInstances[$nextKey]   = $widgetData;
//     var_dump($widgetInstances);
//     update_option('sidebars_widgets', $sidebarsWidgets);
//     update_option('widget_' . $widgetId, $widgetInstances);
// }

// function artbysusanna_widgets_init()
// {
//     register_sidebar([
//         'name'          => __('Footer Left', 'artbysusanna'),
//         'id'            => 'footer-left',
//         'description'   => __('Add widgets here to appear in right left side of your footer.', 'artbysusanna'),
//         'before_title'  => '<h3 class="footer-title">',
//         'after_title'   => '</h3>',
//     ]);
//     artbysusanna_assign_widget('footer-left', 'contactInfo', ['text' => 'This works!\n\nAmazing!']);

//     register_sidebar([
//         'name'          => __('Footer Right', 'artbysusanna'),
//         'id'            => 'footer-right',
//         'description'   => __('Add widgets here to appear in the right side of your footer.', 'artbysusanna'),
//         'before_title'  => '<h3 class="footer-title">',
//         'after_title'   => '</h3>',
//     ]);
// }
// add_action('widgets_init', 'artbysusanna_widgets_init');
function register_site_config_settings()
{
    register_setting('site-configurations', 'contact_email');
    register_setting('site-configurations', 'contact_phone');
}

function artbysusanna_site_config_content()
{
    ?>
    <div class="wrap">
        <h1>Site Configurations</h1>
        <form method="post" action="options.php">
            <?php wp_nonce_field('update-options') ?>
            <?php register_site_config_settings(); ?>
            <p>
                <strong>
                    <?php echo __('Contact Email:'); ?>
                </strong>
                <br />
                <input type="email" name="contact_email" value="<?php echo esc_attr(get_option('contact_email')); ?>" />
            </p>
            <p>
                <strong>
                    <?php echo __('Contact Phone Number:'); ?>
                </strong>
                <br />
                <input type="tel" name="contact_phone" value="<?php echo esc_attr(get_option('contact_phone')); ?>" />
            </p>
            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

function artbysusanna_admin_pages_init()
{
    add_options_page(
        'Site Configurations',
        'Site Configurations',
        '8',
        'site-configurations',
        'artbysusanna_site_config_content'
    );
}
add_action('admin_menu', 'artbysusanna_admin_pages_init');
