<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
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
<nav>
    <div class="nav-content">
        <div class="logo">
            <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
        </div>
        <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container_class' => 'nav-links'
            ));
        ?>
    </div>
</nav>
<main> 