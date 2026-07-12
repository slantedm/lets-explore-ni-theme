<?php

if (!defined('ABSPATH')) {
    exit;
}

function leni_register_menus()
{

    register_nav_menus([

        'primary' => __('Primary Menu', 'lets-explore-ni'),

        'footer' => __('Footer Menu', 'lets-explore-ni')

    ]);

}

add_action('after_setup_theme', 'leni_register_menus');