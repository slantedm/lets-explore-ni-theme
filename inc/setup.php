<?php

if (!defined('ABSPATH')) {
    exit;
}

function leni_theme_setup()
{

    load_theme_textdomain(
        'lets-explore-ni',
        get_template_directory() . '/languages'
    );

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo');

    add_theme_support('menus');

    add_theme_support('html5', [
        'search-form',
        'gallery',
        'caption',
        'style',
        'script'
    ]);

    add_theme_support('wp-block-styles');

    add_theme_support('responsive-embeds');

    add_theme_support('editor-styles');

    add_theme_support('align-wide');

    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'leni_theme_setup');