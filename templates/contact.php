<?php
/**
 * Template For Custom Homepage
 *
 * Template Name: Contact
 * @package Krank Theme
 */
global $krank;
?>
<?php get_template_part('templates/page', 'header'); //Page Header ?>
<?php get_template_part('templates/content', 'page'); // Page Content?>

<div class="contact-info row">
	<div class="contact-form">
		<h3 class="contact-title">Send Us a Message</h3>
		<?php echo do_shortcode('[contact-form-7 id="' . $krank['contact_7'] . '"]')?>
	</div><!--/.contact-form-->
	<div class="business-info">
		<h3 class="contact-title">Where We Are</h3>
		<div id="map" class="google-map"></div>
		<h3 class="contact-title">Address</h3>
		<?php echo krank_address(); ?>
		<h3 class="contact-title">Contact Details</h3>
		<?php echo krank_contact(); ?>
		<h3 class="contact-title">Opening Hours</h3>
		<?php echo krank_opening(); ?>
	</div><!--/.business-info-->
</div>
<?php foreach ($krank['page_sidebar'] as $page):
		$side_pages .= $page.',';
	endforeach;
	echo $side_pages;
	?>

<script type="text/javascript">
	$(document).ready(function(){
		newGoogleMap ( new google.maps.LatLng( <?php echo $krank['location']; ?> ), '<?php get_template_directory(); ?>');
	});
</script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>