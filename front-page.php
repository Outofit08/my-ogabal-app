<?php get_header(); ?>

<div class="hero">
    <h1><?php bloginfo('name'); ?></h1>
    <div class="certification">
        <span class="badge">SDVOSB</span>
    </div>
</div>

<div class="content">
    <section class="about">
        <h2>About Us</h2>
        <?php
        $about_page = get_page_by_path('about');
        if ($about_page) {
            echo apply_filters('the_content', $about_page->post_content);
        }
        ?>
    </section>
</div>

<?php get_footer(); ?> 