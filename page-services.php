<?php
/*
Template Name: Services Page
*/
get_header();
?>

<div class="content">
  <section class="services">
    <h1><?php the_title(); ?></h1>
    
    <div class="competencies-grid">
      <?php
      if(have_rows('competencies')):
        while(have_rows('competencies')): the_row();
      ?>
        <div class="competency-card">
          <div class="icon"><?php echo get_sub_field('icon'); ?></div>
          <h2><?php echo get_sub_field('title'); ?></h2>
          <p><?php echo get_sub_field('description'); ?></p>
        </div>
      <?php
        endwhile;
      endif;
      ?>
    </div>

    <section class="differentiator">
      <h2>Our Differentiator</h2>
      <?php the_content(); ?>
    </section>
  </section>
</div>

<?php get_footer(); ?> 