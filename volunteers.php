<?php
/**
 * Template Name: Volunteers
 * @package NiteLine
 */

get_header();
?>

<div class="wrapper">
  <?php get_template_part('template-parts/default-header'); ?>
  <div class="content">
    <div class="container vertical-padd-2">
      <div class="col-lg-8 col-md-7 col-sm-6 col-xs-12">
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
      <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 vertical-padd-4">
        <div class="widget-area vertical-padd-1 horizontal-padd-2">
          <h2><?php the_field('public_faces_title'); ?></h2>
          <div class="yellow-divider-left bottom-margin-1"></div>
          <?php the_field('public_faces_description'); ?>
          <?php
            $my_query = new WP_Query('post_type=public-faces&posts_per_page=-1&order=ASC');
            while ($my_query->have_posts()) : $my_query->the_post();
          ?>
            <div class="public-faces vertical-padd-1">
              <div class="public-faces-img-col col-md-4 col-sm-4 col-xs-4">
                <?php the_post_thumbnail(null, array('class' => 'img-responsive img-circle')); ?>
              </div>
              <div class="col-md-8 col-sm-8 col-xs-8">
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
              </div>
            </div>
          <?
            endwhile;
            wp_reset_query();
          ?>
        </div>
    </div>
  </div>

  <?php
    get_footer();
  ?>
</div>
