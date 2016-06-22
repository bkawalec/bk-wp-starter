<header class="banner">
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
	<div class="site-header">
		<div class="container">
			
<?php
// Display the Custom Logo
the_custom_logo();

// No Custom Logo, just display the site's name
if (!has_custom_logo()) {
    ?>
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <?php
}
?>

		</div> <!-- /container -->
  </div><!-- /site-header -->
</header>