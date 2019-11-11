<?php

function load_scripts() {
    wp_enqueue_script(
        'bootstrap-js',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
        array('jquery'),
        '4.3.1',
        true
    );
    wp_enqueue_style(
        'Source-Sans-Pro-Font',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:900&display=swap',
        array(),
        '',
        'all'
    );
    wp_enqueue_style(
        'Noto-Serif-Font',
        'https://fonts.googleapis.com/css?family=Noto+Serif:400,700&display=swap',
        array(),
        '',
        'all'
    );
    wp_enqueue_style(
        'bootstrap-css',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
        array(),
        '4.3.1',
        'all'
    );
    wp_enqueue_style(
        'template',
        get_template_directory_uri() . '/css/template.css',
        array(),
        '1.0',
        'all'
    );
    wp_enqueue_style(
        'reset',
        get_template_directory_uri() . '/css/reset.css',
        array(),
        '1.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'load_scripts');

register_nav_menus(
    array(
        'main_menu' => 'Main Menu',
        'footer_menu' => 'Footer Menu'
    )
);