<?php
/*
Template Name: Start page
*/

?>

<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/page', 'header'); ?>

<div class="col-xs-12 col-md-4">
  <h2>Kort om oss</h2>
  <?php get_template_part('templates/content', 'page'); ?>
  </div>
<?php endwhile; ?>

  <div class="col-xs-12 col-md-4">
  <?php if ( is_active_sidebar( 'start_middle' ) ) : ?>
    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
      <?php dynamic_sidebar( 'start_middle' ); ?>
    </div><!-- #primary-sidebar -->
  <?php endif; ?>
  </div>

  <div class="col-xs-12 col-md-4">
  <?php if ( is_active_sidebar( 'start_right' ) ) : ?>
    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
      <?php dynamic_sidebar( 'start_right' ); ?>
    </div><!-- #primary-sidebar -->
  <?php endif; ?>
  </div>
