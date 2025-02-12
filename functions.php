<?php
function ogabal_setup() {
    register_nav_menus(array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu'
    ));
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'ogabal_setup');

function ogabal_scripts() {
    wp_enqueue_style('ogabal-style', get_stylesheet_uri());
    wp_enqueue_style('ogabal-custom', get_template_directory_uri() . '/assets/css/custom.css');
}
add_action('wp_enqueue_scripts', 'ogabal_scripts');

// Register Custom Post Types
function ogabal_post_types() {
    register_post_type('competencies', array(
        'labels' => array(
            'name' => 'Competencies',
            'singular_name' => 'Competency'
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-awards',
        'supports' => array('title', 'editor', 'thumbnail')
    ));

    register_post_type('experiences', array(
        'labels' => array(
            'name' => 'Experiences',
            'singular_name' => 'Experience'
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-businessman',
        'supports' => array('title', 'editor')
    ));
}
add_action('init', 'ogabal_post_types');

function ogabal_required_plugins() {
    $plugins = array(
        array(
            'name' => 'Advanced Custom Fields',
            'slug' => 'advanced-custom-fields',
            'required' => true
        ),
        array(
            'name' => 'Yoast SEO',
            'slug' => 'wordpress-seo',
            'required' => true
        ),
        array(
            'name' => 'WP Super Cache',
            'slug' => 'wp-super-cache',
            'required' => false
        )
    );

    tgmpa($plugins);
}
add_action('tgmpa_register', 'ogabal_required_plugins'); 