<?php global $krank; // Global variable for custom options ?>

<footer class="content-info container" role="contentinfo">
  <div class="row">
    <div class="col-lg-12">
	  <?php echo krank_address(); ?>
	  <?php echo krank_contact(); ?>
	  <?php echo krank_opening(); ?>
      <?php
        if (has_nav_menu('footer_navigation')) :
          wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'nav'));
        endif;
      ?><!--/#menu-footer-navigation-->
    </div>
  </div>
  <div class="row copywrite">
	  &copy; <?php echo date('Y').' '.$krank['name']; ?> | <a href="http://www.krankcreative.co.uk">Website Design by Krank Creative Kendal, Cumbria</a>
  </div>
</footer>

<?php wp_footer(); ?>
