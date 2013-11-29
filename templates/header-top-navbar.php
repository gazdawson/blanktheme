<?php global $krank; // Global variable for custom options ?>

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <a class="logo" href="<?php echo home_url(); ?>/"><img src="<?php echo $krank['logo']['url']; ?>" alt="<?php bloginfo('name'); ?>" class="logo" /></a>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
	  <h1 class="tagline"><?php bloginfo('description'); ?></h1>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
	<button class="btn btn-primary contact-modal" data-toggle="modal" data-target="#contact-modal">
	  Contact Us
	</button>
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>
