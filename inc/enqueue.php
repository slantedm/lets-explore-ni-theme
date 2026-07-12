<?php

if (!defined('ABSPATH')) {
    exit;
}

function leni_enqueue_assets()
{

    wp_enqueue_style(
        'leni-style',
        get_stylesheet_uri(),
        [],
        LENI_VERSION
    );

    wp_enqueue_style(
        'leni-main',
        get_template_directory_uri() . '/assets/css/main.css',
        ['leni-style'],
        LENI_VERSION
    );

    wp_enqueue_script(
        'leni-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        LENI_VERSION,
        true
    );
}

add_action('wp_enqueue_scripts', 'leni_enqueue_assets');