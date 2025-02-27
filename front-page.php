<?php
// Debug which template is being used
echo '<!-- Using front-page.php template -->';
?>

<?php get_header(); ?>

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
</style>

<div class="hero">
    <div class="hero-content">
        <h1>Innovative <span>Software Solutions</span> for Government Agencies</h1>
        <p class="tagline">OGABAL Limited delivers secure, scalable, and compliant technology solutions tailored for federal and defense requirements</p>
        
        <div class="certification">
            <span class="badge">SDVOSB</span>
            <p class="badge-text">Service-Disabled Veteran-Owned Small Business</p>
        </div>
    </div>
</div>

<div class="content">
    <section class="company-overview">
        <h2>Technology Solutions for Government</h2>
        <div class="overview-content">
            <p>OGABAL stands at the forefront of delivering innovative technology solutions 
            tailored to the evolving needs of the DoD and other government agencies. With a 
            focus on efficiency, security, and scalability, we leverage cutting-edge technologies 
            and a robust understanding of mission-critical operations to empower clients to 
            achieve their objectives.</p>
            
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
        
        <div style="text-align: center; margin-top: 2rem;">
            <a href="<?php echo home_url('/about'); ?>" class="button">Learn More About Us</a>
        </div>
    </section>
</div>

<?php get_footer(); ?> 