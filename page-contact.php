<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<div class="content">
  <section class="contact">
    <h1><?php the_title(); ?></h1>
    
    <div class="contact-grid">
      <div class="contact-card">
        <h2>Get in Touch</h2>
        <div class="contact-info">
          <?php if (get_field('phone')): ?>
          <div class="info-item">
            <h3>Phone</h3>
            <p><a href="tel:<?php echo get_field('phone'); ?>"><?php echo get_field('phone'); ?></a></p>
          </div>
          <?php endif; ?>
          
          <div class="info-item">
            <h3>Website</h3>
            <p><a href="<?php echo home_url(); ?>"><?php echo str_replace('https://', '', home_url()); ?></a></p>
          </div>
          
          <?php if (get_field('email')): ?>
          <div class="info-item">
            <h3>Email</h3>
            <p><a href="mailto:<?php echo get_field('email'); ?>"><?php echo get_field('email'); ?></a></p>
          </div>
          <?php endif; ?>
          
          <?php if (get_field('contact_person')): ?>
          <div class="info-item">
            <h3>Contact Person</h3>
            <p><?php echo get_field('contact_person'); ?></p>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?> 