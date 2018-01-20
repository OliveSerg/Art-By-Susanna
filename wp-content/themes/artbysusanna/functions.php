<?php

function artbysusanna_scripts() {
    wp_enqueue_style('artbysusanna-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'artbysusanna_scripts');
