<?php
/*
Template Name: Start page
*/

?>

<?php while (have_posts()) : the_post(); ?>

<div class="row">
  <div class="col-xs-12">
    <?php //get_template_part('templates/page', 'header'); ?>
  </div>
</div>

<div class="row">

  <div class="col-xs-12 col-md-4">
    <h2>Kort om Totte</h2>
    <?php get_template_part('templates/content', 'page'); ?>
  </div>

  <div class="col-xs-12 col-sm-6 col-md-4">
    <div id="start-sidebar-2" class="start-sidebar widget-area" role="complementary">
      <?php dynamic_sidebar( 'start_middle' ); ?>
    </div><!-- #primary-sidebar -->
  </div>

  <div class="col-xs-12 col-sm-6 col-md-4">
    <div id="start-sidebar-3" class="start-sidebar widget-area" role="complementary">
      <?php dynamic_sidebar( 'start_right' ); ?>
    </div><!-- #primary-sidebar -->
  </div>

</div>

<div class="row">

  <div class="col-md-6">

  </div>

</div>

<?php endwhile; ?>