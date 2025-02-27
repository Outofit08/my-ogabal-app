<?php get_header(); ?>

<div class="content">
    <?php while (have_posts()) : the_post(); ?>
        <section class="page-content">
            <h1 class="page-title"><?php the_title(); ?></h1>
            
            <?php if (has_post_thumbnail()): ?>
                <div class="page-featured-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>
            
            <div class="page-text-content">
                <?php the_content(); ?>
            </div>
            
            <?php if (is_page() && !is_page_template()): ?>
                <div class="service-cta">
                    <h3>Interested in our <?php the_title(); ?> services?</h3>
                    <p>Contact us today to learn how OGABAL can help your agency.</p>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="button">Get in Touch</a>
                </div>
            <?php endif; ?>
        </section>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?> 