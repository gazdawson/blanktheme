<?php
/**
 * Krank Custom Shortcodes
 */
global $krank;

//[address title="title"]
function krank_address( $atts ) {
	global $krank;
	
   extract(shortcode_atts(array(
       'title' => '',
   ), $atts));
   
   if($krank['mob'] != ""):
	   $mob = '<abbr title="Mobile">M: </abbr><a class="mob" itemprop="telephone" href="tel:'.$krank['mob'].'" title="Call ' .$krank['name'].' Today">'.$krank['mob'].'</a>';
   endif;
   
   $address = 
   	'<address class="vcard" itemtype="http://schema.org/LocalBusiness" itemscope="">
   		<a class="org" href="'.site_url().'"><span itemprop="name">'.$krank['name'].'</span></a>
   		<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
	   		<span class="street-address" itemprop="streetAddress">'.$krank['street'].'</span>
	   		<span class="locality" itemprop="addressLocality">'.$krank['town'].'</span>
	   		<span class="region" itemprop="addressRegion">'.$krank['region'].'</span>
	   		<span class="postal-code" itemprop="postalCode">'.$krank['postcode'].'</span>
		
	    	<abbr title="Landline">T: </abbr><a class="tel" itemprop="telephone" href="tel:'.$krank['tel'].'" title="Call '. $krank['name'].' Today">'.$krank['tel'].'</a>'
	    	.$mob.
	    	'<abbr title="Website">W: </abbr><a class="url" itemprop="url" href="'.site_url().'">'.site_url().'</a>
	    	<abbr title="Email">E: </abbr><a class="email" href="'.$krank['email'].'" title="Get In Contact With '.$krank['name'].' Today"><meta itemprop="email" content="'.$krank['email'].'">'.$krank['email'].'</a>
		</span>
   	</address><!--/address-->';
	
	return $address;
}
add_shortcode('address', 'krank_address');