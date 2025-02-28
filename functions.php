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

// Remove all CSS file loading
function ogabal_scripts() {
    // Only load Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), null);
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
        'Advanced Custom Fields' => array('slug' => 'advanced-custom-fields', 'essential' => true),
        'Yoast SEO' => array('slug' => 'wordpress-seo', 'essential' => true),
        'WP Super Cache' => array('slug' => 'wp-super-cache', 'essential' => false),
        'Wordfence Security' => array('slug' => 'wordfence', 'essential' => true),
        'Contact Form 7' => array('slug' => 'contact-form-7', 'essential' => true),
        'Really Simple SSL' => array('slug' => 'really-simple-ssl', 'essential' => true),
        'WP Accessibility' => array('slug' => 'wp-accessibility', 'essential' => true),
        'Schema Pro' => array('slug' => 'schema-pro', 'essential' => false),
        'Smush Image Compression' => array('slug' => 'wp-smushit', 'essential' => false),
        'WP Mail SMTP' => array('slug' => 'wp-mail-smtp', 'essential' => false)
    );
    
    $installed_plugins = get_plugins();
    $missing_plugins = array();
    $essential_missing = false;
    
    foreach ($plugins as $name => $plugin_data) {
        $slug = $plugin_data['slug'];
        if (!array_key_exists($slug . '/' . $slug . '.php', $installed_plugins) && 
            !array_key_exists($slug . '-pro/' . $slug . '-pro.php', $installed_plugins)) {
            $missing_plugins[$name] = $plugin_data['essential'];
            if ($plugin_data['essential']) {
                $essential_missing = true;
            }
        }
    }
    
    if (!empty($missing_plugins)) {
        $notice_class = $essential_missing ? 'notice-warning' : 'notice-info';
        echo '<div class="notice ' . $notice_class . ' is-dismissible">';
        echo '<p><strong>OGABAL Theme:</strong> ' . ($essential_missing ? 'For government compliance and optimal performance, please install these recommended plugins:' : 'Consider these plugins to enhance your site:') . '</p>';
        echo '<ul style="list-style-type: disc; padding-left: 20px;">';
        foreach ($missing_plugins as $name => $essential) {
            echo '<li>' . esc_html($name) . ($essential ? ' <span style="color:#e74c3c;">⭐ Essential</span>' : '') . '</li>';
        }
        echo '</ul>';
        echo '<p><small>⭐ Essential plugins are particularly important for government contractor websites.</small></p>';
        echo '<p><a href="' . admin_url('plugin-install.php') . '" class="button button-primary">Go to Plugin Installer</a></p>';
        echo '</div>';
    }
}
add_action('admin_notices', 'ogabal_admin_notice_plugins');

// Add background-enforcing body class 
function ogabal_body_classes($classes) {
    $classes[] = 'dark-theme-enforced';
    return $classes;
}
add_filter('body_class', 'ogabal_body_classes'); 

// Check if front-page.php is being used
function ogabal_debug_template() {
    global $template;
    echo '<!-- Current template: ' . basename($template) . ' -->';
}
add_action('wp_head', 'ogabal_debug_template', 1); 