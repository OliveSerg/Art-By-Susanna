<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;
charset=<?php bloginfo('charset'); ?>" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
        <?php if (function_exists('is_tag') && is_tag()) {
    single_tag_title('Tag Archive for &quot;');
    echo '&quot; - ';
} elseif (is_archive()) {
    wp_title('');
    echo ' Archive - ';
} elseif (is_search()) {
    echo 'Search for &quot;' . wp_specialchars($s) . '&quot; - ';
} elseif (!(is_404()) && (is_single()) || (is_page())) {
    wp_title('');
    echo ' - ';
} elseif (is_404()) {
    echo 'Not Found - ';
}
        if (is_home()) {
            bloginfo('name');
            echo ' - ';
            bloginfo('description');
        } else {
            bloginfo('name');
        }
        if ($paged > 1) {
            echo ' - page ' . $paged;
        } ?>
    </title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="page-wrapper">
        <header id="header-main" class="header-main at-top" data-off-canvas-wrapper>
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
