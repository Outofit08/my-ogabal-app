<?php
// Ensure no output before DOCTYPE
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Direct CSS link to bypass WordPress -->
    <style>
        /* Critical styles */
        html, body, #page, #content, main, .content, article, section, div,
        .site, .site-content, .site-main, .entry-content {
            background-color: #0f1219 !important;
            color: #f8f9fa !important;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        
        /* Logo styling */
        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem 0;
            margin-bottom: 1rem;
            background-color: #1a202c !important;
            border-bottom: 1px solid #2d3748;
        }
        
        .logo-text {
            font-size: 3rem;
            font-weight: 800;
            letter-spacing: 2px;
            background: linear-gradient(90deg, #4361ee, #4895ef);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
        }
        
        .logo-tagline {
            font-size: 0.9rem;
            color: #ced4da;
            font-weight: 400;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
    </style>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<script>
    // Immediate execution JS to ensure dark background
    document.documentElement.style.backgroundColor = '#0f1219';
    document.body.style.backgroundColor = '#0f1219';
    
    // Run again after everything has loaded
    window.addEventListener('load', function() {
        document.documentElement.style.backgroundColor = '#0f1219';
        document.body.style.backgroundColor = '#0f1219';
        
        // Force all elements - more comprehensive selector
        document.querySelectorAll('body, body > *, div, section, article, main, #page, #content, .site, .site-content, .entry-content, .wp-site-blocks')
            .forEach(function(el) {
                el.style.backgroundColor = '#0f1219';
                // Log elements with non-dark backgrounds after our fix
                setTimeout(function() {
                    const style = window.getComputedStyle(el);
                    if (style.backgroundColor !== 'rgb(15, 18, 25)' && 
                        style.backgroundColor !== 'rgba(15, 18, 25, 1)' &&
                        style.backgroundColor !== 'transparent') {
                        console.log('Element with non-dark background:', el, style.backgroundColor);
                    }
                }, 500);
            });
    });
</script>

<div class="logo-container">
    <div class="centered-logo">
        <a href="<?php echo home_url(); ?>">
            <span class="logo-text">OGABAL</span>
            <span class="logo-tagline">Service-Disabled Veteran-Owned Small Business</span>
        </a>
    </div>
</div>

<nav>
    <div class="nav-content">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container_class' => 'nav-links'
            ));
        ?>
    </div>
</nav>
<main> 