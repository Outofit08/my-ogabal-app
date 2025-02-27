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

    // Add this inside your ogabal_scripts() function
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

// Force dark theme through wp_head
function ogabal_force_dark_theme() {
    echo '<style>
        html, body, main, #page, #content, .site, .site-content, 
        .entry-content, article, section {
            background-color: #0f1219 !important;
            color: #f8f9fa !important;
        }
    </style>';
}
add_action('wp_head', 'ogabal_force_dark_theme', 999); // Very high priority to override other styles 

// Add background-enforcing body class 
function ogabal_body_classes($classes) {
    $classes[] = 'dark-theme-enforced';
    return $classes;
}
add_filter('body_class', 'ogabal_body_classes'); 

// Emergency background fix with absolute highest priority
function ogabal_background_fix() {
    wp_enqueue_style('ogabal-bg-fix', get_template_directory_uri() . '/background-fix.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'ogabal_background_fix', 999);

// Inline critical CSS to fix background before any other styles load
function ogabal_critical_css() {
    echo '<style>
        html, body, #page, #content, main, .content, article, section, div,
        .site, .site-content, .site-main, .entry-content {
            background-color: #0f1219 !important;
            color: #f8f9fa !important;
        }
    </style>';
}
add_action('wp_head', 'ogabal_critical_css', 0); // First priority 

// Inspect body classes to help debug
function ogabal_inspect_body_classes() {
    echo '<!-- Body classes: ' . implode(', ', get_body_class()) . ' -->';
}
add_action('wp_head', 'ogabal_inspect_body_classes', 1);

// Disable WordPress Customizer styles that might override our theme
function ogabal_disable_customizer_styles() {
    remove_action('wp_head', 'wp_custom_css_cb', 101);
}
add_action('init', 'ogabal_disable_customizer_styles');

// Override block editor styles to ensure dark theme in editor
function ogabal_override_block_editor_styles() {
    wp_add_inline_style('wp-block-library', '
        .wp-block, .block-editor-block-list__block, 
        .editor-styles-wrapper, .wp-block-cover, 
        .wp-block-group, .wp-block-column {
            background-color: #0f1219 !important;
            color: #f8f9fa !important;
        }
    ');
}
add_action('enqueue_block_editor_assets', 'ogabal_override_block_editor_styles');

// Add stronger CSS to style.css via wp_head
function ogabal_add_stronger_css() {
    echo '<style>
        body, html, #wpadminbar, #page, #content, .site, .site-content, .entry-content, 
        .wp-site-blocks, .wp-block-template-part, .wp-block-group, .wp-block-cover, 
        .entry, .post, .page, article, section, div, main, header, footer, aside, 
        .sidebar, .widget, .home, .blog {
            background-color: var(--primary) !important;
            color: var(--text) !important;
        }
        
        /* Target Twenty Twenty-Three theme specifically */
        .wp-site-blocks, .wp-site-blocks > *, .is-layout-flow, .is-layout-constrained {
            background-color: #0f1219 !important;
        }
        
        /* Target potential parent elements */
        #wrapper, #container, #main-content, .site-wrapper {
            background-color: #0f1219 !important;
        }
    </style>';
}
add_action('wp_head', 'ogabal_add_stronger_css', 999);

// Check if front-page.php is being used
function ogabal_debug_template() {
    global $template;
    echo '<!-- Current template: ' . basename($template) . ' -->';
}
add_action('wp_head', 'ogabal_debug_template', 1); 

// Ensure the main stylesheet is properly enqueued
function ogabal_enqueue_styles() {
    wp_enqueue_style('ogabal-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_style('ogabal-custom', get_template_directory_uri() . '/assets/css/custom.css', array('ogabal-style'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'ogabal_enqueue_styles'); 