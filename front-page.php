<?php get_header(); ?>

<style>
    body, html, main, .content {
        background-color: #121212 !important;
        color: #f5f5f5 !important;
    }
    .hero h1 {
        color: #9c27b0 !important;
        text-align: center;
    }
</style>

<div class="hero">
    <h1>OGABAL Limited</h1>
    <p class="tagline">Government Contract Solutions</p>
    <div class="certification">
        <span class="badge">SDVOSB</span>
        <p class="badge-text">Service-Disabled Veteran-Owned Small Business</p>
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

    <section class="about">
        <h2>About OGABAL</h2>
        <?php
        $about_page = get_page_by_path('about');
        if ($about_page) {
            echo apply_filters('the_content', $about_page->post_content);
        }
        ?>
    </section>
</div>

<?php get_footer(); ?> 