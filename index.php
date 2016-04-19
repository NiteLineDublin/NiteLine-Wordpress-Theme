<?php
/**
 * Template Name: Default
 * @package NiteLine
 */

get_header();
?>

<div class="wrapper">
  <?php get_template_part('template-parts/default-header'); ?>
  <div class="content">
    <div class="container top-padd-2 bottom-padd-4 horizontal-padd-2">
      <h1><?php the_title(); ?></h1>
      <div class="yellow-divider-left bottom-margin-2"></div>
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="entry-content-page">
          <?php the_content(); ?>
        </div>
      <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
      ?>
    </div>
  </div>

  <?php
    get_footer();
  ?>
</div>
