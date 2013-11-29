<?php global $krank; // Global variable for custom options ?>

<footer class="content-info container" role="contentinfo">
  <div class="row">
    <div class="col-lg-12">
      <?php dynamic_sidebar('sidebar-footer'); ?>
	  <?php echo krank_address(); ?>

      <p class="copywrite">&copy; <?php echo date('Y').' '.$krank['name']; ?> | <a href="http://www.krankcreative.co.uk">Website Design by Krank Creative Kendal, Cumbria</a></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
