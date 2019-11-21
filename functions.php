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

function wpcurso_config() {
    register_nav_menus(
        array(
            'main_menu' => 'Main Menu',
            'footer_menu' => 'Footer Menu'
        )
    );

    $args = array(
        'height'    => 425,
        'width'     => 1920
    );
    add_theme_support('custom-header', $args);
    
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(300, 220, true);
    add_theme_support('post-formats', array('video', 'image'));
}
add_action('after_setup_theme', 'wpcurso_config', 0);

add_action('widgets_init', 'wpcurso_sidebars');
function wpcurso_sidebars() {
    register_sidebar(
        array(
            'name' => 'Home Page Sidebar',
            'id' => 'sidebar-1',
            'description' => 'Sidebar to be used on Home Page',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class"widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-2',
            'description' => 'Sidebar to be used on Blog Page',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class"widget-title">',
            'after_title' => '</h2>'
        )
    );
}
