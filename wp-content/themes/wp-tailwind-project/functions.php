<?php

function webpack_add_theme_script() {
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/main.css');
    // wp_enqueue_style('tailwindcss', 'https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());

    //JS
    // wp_enqueue_script('index', '/dist/main.js', '', null, true);
}
add_action('wp_enqueue_scripts', 'webpack_add_theme_script');


// Menu

register_nav_menus(

    Array(
        'top-menu' => 'Top Menu',
        // 'bottom-menu' => 'Bottom Menu'
    )
);