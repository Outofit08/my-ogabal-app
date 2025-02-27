<footer>
  <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> 
  <?php 
    // Check if ACF is active before using get_field
    if (function_exists('get_field')) {
      echo '- ' . get_field('company_full_name', 'option');
    }
  ?>
  </p>
  <?php
    wp_nav_menu(array(
      'theme_location' => 'footer',
      'container_class' => 'footer-links',
      'menu_class' => 'footer-menu'
    ));
  ?>
</footer>

<script>
    // Final check to ensure dark background
    document.addEventListener('DOMContentLoaded', function() {
        document.body.style.backgroundColor = '#0f1219';
        document.documentElement.style.backgroundColor = '#0f1219';
    });
</script>

<?php wp_footer(); ?>
</body>
</html> 