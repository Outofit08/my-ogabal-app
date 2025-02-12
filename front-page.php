<?php get_header(); ?>

<div class="hero">
    <h1>OGABAL Limited</h1>
    <p class="tagline">Government Contract Solutions</p>
    <div class="certification">
        <span class="badge">SDVOSB</span>
        <p class="badge-text">Service-Disabled Veteran-Owned Small Business</p>
    </div>
</div>

<div class="content">
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