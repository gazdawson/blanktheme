<?php global $krank; // Global variable for custom options ?>

<footer class="content-info container" role="contentinfo">
  <div class="row">
    <div class="col-lg-12">
      <?php dynamic_sidebar('sidebar-footer'); ?>
	  
		<address itemscope itemtype="http://schema.org/LocalBusiness" class="footer-address">
			<span itemprop="name"><?php echo $krank['name']; ?>,</span>
			<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
			<span itemprop="streetAddress"><?php echo $krank['street']; ?>,</span>
			<span itemprop="addressLocality"><?php echo $krank['town']; ?>,</span>
			<span itemprop="addressRegion"><?php echo $krank['county']; ?>,</span>
			<span itemprop="postalCode"><?php echo $krank['postcode']; ?></span>
		
			<ul class="contact">
				<li><abbr title="Landline">T: </abbr><a itemprop="telephone" href="tel:<?php echo $krank['tel']; ?>" title="Call <?php echo $krank['name']; ?> Today"><?php echo $krank['tel']; ?></a></li>
				<li><abbr title="Mobile">M: </abbr><a itemprop="telephone" href="tel:<?php echo $krank['mob']; ?>" title="Call <?php echo $krank['name']; ?> Today"><?php echo $krank['mob']; ?></a></li>
				<li><abbr title="Website">W: </abbr><a itemprop="url" href="<?php echo site_url(); ?>"><?php echo site_url(); ?></a></li>
				<li><abbr title="Email">E: </abbr><a itemprop="email" href="<?php echo $krank['email']; ?>" title="Get In Contact With <?php echo $krank['name']; ?> Today"><?php echo $krank['email']; ?></a></li>
			</ul>
		</address>

      <p>&copy; <?php echo date('Y').' '.$krank['name']; ?> | <a href="http://www.krankcreative.co.uk">Website Design by Krank Creative Kendal, Cumbria</a></p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
