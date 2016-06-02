<?php
/**
 * Template Name: Full Width With Hero Image
 */
?>

	
<?php while (have_posts()) : the_post(); ?>
	<div class="featured-hero-img">
      <?php
	// If a feature image is set, get the id, so it can be injected as a css background property
	if ( has_post_thumbnail( $post->ID ) ) :
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$image = $image[0];
		?>

	<div id="featured-hero" role="banner" style="background-image: url('<?php echo $image ?>'); height: 400px; width:100%;">
	</div>
	<?php endif;  ?>
    </div>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
