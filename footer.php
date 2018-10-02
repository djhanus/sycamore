</main>
  <footer>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slt-logo-vertical.png">
    <?php wp_nav_menu( array( 'theme_location' => 'footer-social-menu' ) ); ?>
    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
    <p>Sycamore Land Trust, <?php echo date("Y"); ?>. All rights reserved.</p>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>