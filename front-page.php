<?php
// No output here - just PHP
get_header();
?>

<style>
    /* Extra-strength background enforcement with direct color values */
    html, body, #page, #content, main, .content, .entry-content, .site, .site-content,
    .wp-site-blocks, article, section, div {
        background-color: #0f1219 !important;
        color: #f8f9fa !important;
    }
    
    /* Make sure WordPress blocks don't override our styles */
    .wp-block-group, .wp-block-cover, .wp-block-column {
        background-color: #0f1219 !important;
    }
    
    /* Ensure WordPress admin bar doesn't break our styling */
    body.admin-bar {
        background-color: #0f1219 !important;
    }
    
    /* Full page background wrapper */
    .full-page-background {
        position: relative;
        width: 100%;
        min-height: 100vh;
        z-index: 1;
    }
    
    /* Background image */
    .full-page-background::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/MainpageBack.webp'); ?>');
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
        opacity: 0.4;
        z-index: -1;
    }
    
    /* Add dark overlay to ensure text readability */
    .full-page-background::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, rgba(15, 18, 25, 0.6), rgba(15, 18, 25, 0.5));
        z-index: -1;
    }
    
    /* Compact layout styles */
    .hero {
        padding: 2.5rem 2rem !important;
        background-color: transparent !important;
        position: relative;
        z-index: 2;
    }
    
    .hero h2 {
        font-size: 2.5rem !important;
        margin-bottom: 0.75rem !important;
    }
    
    .tagline {
        margin-bottom: 1rem !important;
    }
    
    .section-title {
        margin-top: 0 !important;
        margin-bottom: 1rem !important;
    }
    
    .feature-grid {
        margin: 1.5rem 0 !important;
    }
    
    section {
        padding: 1.25rem !important;
        margin-bottom: 1.5rem !important;
        background-color: rgba(45, 45, 53, 0.6) !important;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
    }
    
    .company-overview h2 {
        margin-bottom: 0.75rem !important;
    }
    
    p {
        margin-bottom: 0.75rem !important;
    }
    
    /* Give cards semi-transparent background for better visibility against the page background */
    .feature-card {
        background-color: rgba(30, 41, 59, 0.7) !important;
        position: relative;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
    }
    
    /* Cybersecurity card with background image */
    .cybersecurity-card {
        position: relative;
        z-index: 1;
        overflow: hidden;
    }
    
    .cybersecurity-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('<?php echo esc_url(get_template_directory_uri() . '/assets/cybersecurity.webp'); ?>');
        background-size: cover;
        background-position: center;
        opacity: 0.15;
        z-index: -1;
        filter: brightness(0.7) contrast(1.1);
    }
    
    .cybersecurity-card .feature-icon,
    .cybersecurity-card h3,
    .cybersecurity-card p {
        position: relative;
        z-index: 2;
        text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
    }
    
    .cybersecurity-card::after {
        background: linear-gradient(90deg, #4361ee, #3a0ca3) !important;
        opacity: 1;
    }
    
    /* Content container */
    .content {
        position: relative;
        z-index: 2;
        background-color: transparent !important;
    }
    
    /* Make GIF container semi-transparent */
    .gif-container {
        background-color: rgba(30, 41, 59, 0.7) !important;
        border-radius: 8px;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
    }
</style>

<div class="full-page-background">
    <div class="hero">
        <div class="hero-content">
            <h2>Innovative <span>Software Solutions</span> for Government Agencies</h2>
            <p class="tagline">OGABAL Limited delivers secure, scalable, and compliant technology solutions tailored for federal and defense requirements</p>
            
            <div class="certification">
                <span class="badge">SDVOSB</span>
                <p class="badge-text">Service-Disabled Veteran-Owned Small Business</p>
            </div>
        </div>
    </div>

    <div class="content">
        <h2 class="section-title">Our Services</h2>
        <div class="feature-grid">
            <div class="feature-card cybersecurity-card">
                <div class="feature-icon">🔒</div>
                <h3>Cybersecurity Solutions</h3>
                <p>CMMC-compliant security systems designed specifically for government contractors and agencies.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🖥️</div>
                <h3>Custom Software Development</h3>
                <p>Tailored applications built to meet the unique requirements of federal and defense operations.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3>Data Analytics</h3>
                <p>Advanced analytics solutions that transform government data into actionable intelligence.</p>
            </div>
        </div>

        <section class="company-overview">
            <h2>Technology Solutions for Government</h2>
            <div class="overview-content">
                <p>OGABAL stands at the forefront of delivering innovative technology solutions 
                tailored to the evolving needs of the DoD and other government agencies. With a 
                focus on efficiency, security, and scalability, we leverage cutting-edge technologies 
                and a robust understanding of mission-critical operations to empower clients.</p>
                
                <p>Founded by a Navy veteran and experienced software engineer, OGABAL combines technical expertise with a commitment to excellence 
                and service.</p>
            </div>
        </section>

        <section class="feature-grid">
            <div class="feature-card">
                <div class="feature-icon">🔒</div>
                <h3>Security-First Approach</h3>
                <p>Our solutions are built with security at their core, meeting rigorous federal compliance standards including NIST, FedRAMP, and CMMC requirements.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🔄</div>
                <h3>Agile Development</h3>
                <p>We employ modern agile methodologies tailored to government contracting, ensuring rapid delivery while maintaining quality and compliance.</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">🛠️</div>
                <h3>Custom Solutions</h3>
                <p>From legacy system modernization to custom software development, we create purpose-built solutions that address unique government challenges.</p>
            </div>
        </section>

        <section class="about">
            <h2>About OGABAL</h2>
            <?php
            $about_page = get_page_by_path('about');
            if ($about_page) {
                echo apply_filters('the_content', $about_page->post_content);
            } else {
            ?>
                <p>OGABAL Limited is a Service-Disabled Veteran-Owned Small Business (SDVOSB) dedicated to providing exceptional technology solutions for government agencies. Our team combines military experience with technical expertise to deliver secure, reliable, and innovative software that meets the unique needs of federal clients.</p>
            <?php
            }
            ?>
            
            <div style="text-align: center; margin-top: 1rem;">
                <a href="<?php echo home_url('/about'); ?>" class="button">Learn More About Us</a>
            </div>
        </section>
    </div>

    <div class="gif-container">
        <div class="gif-title">Team Collaboration</div>
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/teamwork.gif'); ?>" alt="Team Collaboration" class="gif-image" />
    </div>
</div>

<?php get_footer(); ?> 