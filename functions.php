<?php
// Incluindo os arquivos da TGM
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/required-plugins.php';

require get_template_directory() . '/inc/customizer.php';

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
    wp_enqueue_script(
        'fitvids',
        get_template_directory_uri() . '/js/fitvids.js',
        array('jquery'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'load_scripts');

function wpcurso_gutenberg_fonts(){
    wp_enqueue_style(
        'Source-Sans-Pro-Font',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:900&display=swap'
    );
    wp_enqueue_style(
        'Noto-Serif-Font',
        'https://fonts.googleapis.com/css?family=Noto+Serif:400,700&display=swap'
    );
}
add_action('enqueue_block_editor_assets', 'wpcurso_gutenberg_fonts');

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
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array('height' => 33, 'width' => 111));

    // Habilitando suporte à tradução
    $textdomain = 'wpcurso';
    load_theme_textdomain($textdomain, get_stylesheet_directory() . '/languages/');
    load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

    // Suporte ao Gutenberg
    add_theme_support('align-wide');
    add_theme_support('editor-color-palette', array(
        array(
            'name' => 'Blood Red',
            'slug' => 'blood-red',
            'color' => '#b9121b'
        ),
        array(
            'name' => 'White',
            'slug' => 'white',
            'color' => '#ffffff'
        ),
        array(
            'name' => 'Black',
            'slug' => 'black',
            'color' => '#000000'
        )
    ));
    add_theme_support('disable-custom-colors');
    add_theme_support('editor-styles');
    add_editor_style('css/style-editor.css');
    add_theme_support('wp-block-styles');
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
    register_sidebar(
        array(
            'name' => 'Services 1',
            'id' => 'services-1',
            'description' => 'First Services Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class"widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Services 2',
            'id' => 'services-2',
            'description' => 'Second Services Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class"widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Services 3',
            'id' => 'services-3',
            'description' => 'Third Services Area',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class"widget-title">',
            'after_title' => '</h2>'
        )
    );
}
