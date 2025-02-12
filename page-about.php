<?php
/*
Template Name: About Page
*/
get_header();
?>

<div class="content">
  <section class="about">
    <h1><?php the_title(); ?></h1>
    
    <div class="founder-section">
      <div class="founder-card">
        <h2>Brashad Hasley</h2>
        <p class="founder-title">Founder & CEO</p>
        <p class="founder-company">OGABAL Limited</p>
      </div>
      <div class="founder-bio">
        <?php the_content(); ?>
      </div>
    </div>

    <?php if (get_field('company_mission')): ?>
    <div class="company-mission">
      <h2>Our Mission</h2>
      <?php echo get_field('company_mission'); ?>
    </div>
    <?php endif; ?>
  </section>
</div>

<?php get_footer(); ?> 