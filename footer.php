<footer>
  <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - <?php echo get_field('company_full_name', 'option'); ?></p>
  <?php
    wp_nav_menu(array(
      'theme_location' => 'footer',
      'container_class' => 'footer-links',
      'menu_class' => 'footer-menu'
    ));
  ?>
</footer>

<?php wp_footer(); ?>
</body>
</html> 