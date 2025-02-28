<?php
// Ensure no output before DOCTYPE
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- All CSS consolidated inline to avoid external file loading -->
    <style>
        /* Base styles - Professional dark theme with refined accents */
        :root {
            --primary: #0f1219;
            --secondary: #1a202c;
            --accent: #4361ee;
            --accent-light: #4895ef;
            --accent-dark: #3a0ca3;
            --text: #f8f9fa;
            --text-muted: #ced4da;
            --border: #2d3748;
            --success: #2ecc71;
            --warning: #f39c12;
            --danger: #e74c3c;
            --card-bg: #1e293b;
            --gradient-start: #4361ee;
            --gradient-end: #3a0ca3;
        }

        /* Global styles - Force dark theme */
        html, body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.5;
            color: var(--text) !important;
            background-color: var(--primary) !important;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            max-width: 100%;
            overflow-x: hidden;
        }

        /* Force all containers to have dark background */
        body > *, 
        main, 
        .content, 
        .content > *,
        article,
        section {
            background-color: var(--primary) !important;
            color: var(--text) !important;
        }

        /* Center the entire page content */
        main {
            width: 100%;
            max-width: 1200px;
            padding: 0 2rem;
            margin: 0 auto;
            background-color: var(--primary) !important;
        }

        .content {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem;
            background-color: var(--primary) !important;
        }

        /* Modern hero section with gradient overlay */
        .hero {
            width: 100%;
            background-color: var(--secondary) !important;
            background-image: linear-gradient(135deg, rgba(26, 32, 44, 0.95), rgba(15, 18, 25, 0.98));
            background-size: 300px 300px;
            background-position: center;
            padding: 3rem 2rem;
            text-align: center;
            border-bottom: 1px solid var(--border);
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            border: 1px solid var(--border);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            margin-bottom: 2rem;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 2.8rem;
            font-weight: 800;
            margin-bottom: 1rem;
            line-height: 1.2;
            color: var(--text) !important;
        }

        .hero h1 span {
            color: var(--accent-light) !important;
            position: relative;
            display: inline-block;
        }

        .hero .tagline {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 1.5rem;
            color: var(--text-muted) !important;
        }

        /* Logo styling with warfighter drone background */
        .logo-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0.75rem 0;
            margin-bottom: 0.5rem;
            background-color: var(--secondary) !important;
            border-bottom: 1px solid var(--border);
            position: relative;
            overflow: hidden;
        }
        
        /* Add warfighter drone background */
        .logo-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/warfighterDrone.webp'); ?>');
            background-size: cover;
            background-position: center center;
            opacity: 0.15;
            z-index: 0;
            filter: brightness(0.6) contrast(1.1);
        }
        
        /* Add dark overlay to ensure text readability */
        .logo-container::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(26, 32, 44, 0.85), rgba(15, 18, 25, 0.9));
            z-index: 1;
        }

        .centered-logo {
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .centered-logo a {
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .logo-text {
            font-size: 2.5rem;
            font-weight: 800;
            letter-spacing: 2px;
            background: linear-gradient(90deg, var(--accent), var(--accent-light));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;
            margin-bottom: 0.25rem;
        }

        .logo-tagline {
            font-size: 0.8rem;
            color: var(--text-muted);
            font-weight: 400;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* Navigation styling */
        nav {
            width: 100%;
            background-color: var(--secondary) !important;
            border-bottom: 1px solid var(--border);
            margin-bottom: 1rem;
        }

        .nav-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0.5rem 2rem;
            display: flex;
            justify-content: center;
        }

        .nav-links {
            display: flex;
            gap: 1.5rem;
        }

        .nav-links ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            gap: 1.5rem;
        }

        .nav-links li {
            position: relative;
        }

        .nav-links a {
            color: var(--text) !important;
            text-decoration: none;
            font-weight: 500;
            padding: 0.25rem 0;
            transition: color 0.3s;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--accent-light) !important;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--accent), var(--accent-light));
            transition: width 0.3s;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Certification badge */
        .certification {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 1rem;
        }

        .badge {
            font-weight: 700;
            color: var(--accent-light);
            margin-right: 1rem;
            padding: 0.25rem 0.5rem;
            background-color: rgba(67, 97, 238, 0.2);
            border-radius: 4px;
        }

        .badge-text {
            margin: 0;
            font-size: 0.9rem;
        }

        /* Enhanced Section Titles with Borders */
        h1, h2, h3, .section-title {
            position: relative;
            padding-bottom: 0.75rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        h2.section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, var(--accent), var(--accent-light));
            border-radius: 3px;
        }

        h2.section-title::before {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 10px;
            height: 10px;
            background: var(--accent);
            border-radius: 50%;
            z-index: 1;
        }

        /* Add border around section containers */
        section {
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            background-color: var(--secondary) !important;
        }

        /* Feature grid and card styling */
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .feature-card {
            height: 100%;
            display: flex;
            flex-direction: column;
            background-color: var(--card-bg) !important;
            border-radius: 8px;
            padding: 1.5rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            border: 1px solid var(--border);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .feature-icon {
            font-size: 2rem;
            margin-bottom: 0.75rem;
            background: linear-gradient(90deg, var(--accent), var(--accent-light));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Button styling */
        .button {
            display: inline-block;
            padding: 0.8rem 1.6rem;
            background: linear-gradient(90deg, var(--accent), var(--accent-dark));
            color: white !important;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
        }

        .button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.4);
        }

        /* Make sure all headings have accent color */
        h1, h2, h3, h4, h5, h6 {
            color: var(--accent-light) !important;
        }

        /* Extra strong background enforcement */
        html, body, #wpadminbar, #page, #content, .site, .site-content, .entry-content, 
        .wp-site-blocks, .wp-block-template-part, .wp-block-group, .wp-block-cover, 
        .entry, .post, .page, article, section, div, main, header, footer, aside, 
        .sidebar, .widget, .home, .blog, #wrapper, #container, #main-content, .site-wrapper {
            background-color: var(--primary) !important;
            color: var(--text) !important;
        }

        /* Force WordPress Twenty Twenty-Three theme elements */
        .wp-site-blocks, .wp-site-blocks > *, .is-layout-flow, .is-layout-constrained {
            background-color: var(--primary) !important;
        }

        /* Force WordPress Twenty Twenty-Two theme elements */
        .wp-container-1, .wp-container-2, .wp-container-3, .wp-container-4, .wp-container-5,
        .wp-container-6, .wp-container-7, .wp-container-8, .wp-container-9, .wp-container-10 {
            background-color: var(--primary) !important;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            main, .content {
                padding: 0.5rem;
            }
            
            section {
                padding: 1rem;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .hero .tagline {
                font-size: 1rem;
            }
        }
        
        /* Header acronym styling - more compact */
        .header-acronym {
            padding: 0;
            margin: 0;
        }
        
        .header-acronym .acronym-title {
            font-size: 1.8rem;
            margin-bottom: 0.1rem;
            letter-spacing: 1px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .header-acronym .acronym-explanation {
            font-size: 0.6rem;
            letter-spacing: 0.5px;
            margin: 0;
            padding: 0;
            line-height: 1.2;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
        }
        
        .header-acronym .acronym-explanation::after {
            display: none;
        }
    </style>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="bg-pattern"></div>
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
            <div class="acronym-container header-acronym">
                <h1 class="acronym-title">OGABAL</h1>
                <p class="acronym-explanation">OFFICIAL GOVERNMENT ASSISTANCE FOR BUSINESSES AND APPLICATION LOGISTICS</p>
            </div>
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
</main>

<?php wp_footer(); ?>
</body>
</html> 