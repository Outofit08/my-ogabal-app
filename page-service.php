<?php
/*
Template Name: Service Page
*/
get_header();
?>

<div class="content">
    <?php while (have_posts()) : the_post(); ?>
        <section class="service-page">
            <h1 class="page-title"><?php the_title(); ?></h1>
            
            <?php if (has_post_thumbnail()): ?>
                <div class="page-featured-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>
            
            <div class="service-intro">
                <?php 
                // Check if ACF is installed and the field exists
                if (function_exists('get_field') && get_field('service_intro')) {
                    echo '<p class="service-highlight">' . get_field('service_intro') . '</p>';
                }
                ?>
            </div>
            
            <div class="page-text-content">
                <?php the_content(); ?>
            </div>
            
            <?php if (function_exists('get_field')): ?>
                <?php if (have_rows('service_features')): ?>
                    <div class="service-features">
                        <h2>Key Features</h2>
                        <div class="feature-grid">
                            <?php while (have_rows('service_features')): the_row(); ?>
                                <div class="feature-card">
                                    <div class="feature-icon"><?php echo get_sub_field('icon'); ?></div>
                                    <h3><?php echo get_sub_field('title'); ?></h3>
                                    <p><?php echo get_sub_field('description'); ?></p>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            
            <div class="service-cta">
                <h3>Ready to enhance your operations with our <?php the_title(); ?> services?</h3>
                <p>Contact OGABAL today to discuss how our solutions can meet your agency's specific needs.</p>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="button">Request Information</a>
            </div>
            
            <!-- Related Services -->
            <?php
            $current_id = get_the_ID();
            $services = new WP_Query(array(
                'post_type' => 'page',
                'posts_per_page' => 3,
                'post__not_in' => array($current_id),
                'meta_query' => array(
                    array(
                        'key' => '_wp_page_template',
                        'value' => 'page-service.php'
                    )
                )
            ));
            
            if ($services->have_posts()): ?>
                <div class="related-services">
                    <h2>Explore Our Other Services</h2>
                    <div class="feature-grid">
                        <?php while ($services->have_posts()): $services->the_post(); ?>
                            <div class="feature-card">
                                <h3><?php the_title(); ?></h3>
                                <?php if (has_excerpt()): ?>
                                    <p><?php echo get_the_excerpt(); ?></p>
                                <?php endif; ?>
                                <a href="<?php the_permalink(); ?>" class="button">Learn More</a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php 
            endif;
            wp_reset_postdata();
            ?>
        </section>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?> 