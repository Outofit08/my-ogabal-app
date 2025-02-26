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
    // Enqueue the main stylesheet with higher priority
    wp_enqueue_style('ogabal-style', get_stylesheet_uri(), array(), '1.0.1');
    
    // Enqueue the custom CSS with dependency on the main stylesheet
    wp_enqueue_style('ogabal-custom', get_template_directory_uri() . '/assets/css/custom.css', array('ogabal-style'), '1.0.1');
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

// Recommend plugins but don't require TGMPA
function ogabal_admin_notice_plugins() {
    $plugins = array(
        'Advanced Custom Fields' => 'advanced-custom-fields',
        'Yoast SEO' => 'wordpress-seo',
        'WP Super Cache' => 'wp-super-cache'
    );
    
    $installed_plugins = get_plugins();
    $missing_plugins = array();
    
    foreach ($plugins as $name => $slug) {
        if (!array_key_exists($slug . '/' . $slug . '.php', $installed_plugins) && 
            !array_key_exists($slug . '-pro/' . $slug . '-pro.php', $installed_plugins)) {
            $missing_plugins[] = $name;
        }
    }
    
    if (!empty($missing_plugins)) {
        echo '<div class="notice notice-warning is-dismissible">';
        echo '<p><strong>OGABAL Theme:</strong> For best experience, please install these plugins:</p>';
        echo '<ul style="list-style-type: disc; padding-left: 20px;">';
        foreach ($missing_plugins as $plugin) {
            echo '<li>' . esc_html($plugin) . '</li>';
        }
        echo '</ul>';
        echo '<p><a href="' . admin_url('plugin-install.php') . '" class="button button-primary">Go to Plugin Installer</a></p>';
        echo '</div>';
    }
}
add_action('admin_notices', 'ogabal_admin_notice_plugins'); 