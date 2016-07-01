<?php
/**
 * Template Name: Publicity
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
        <div class="yellow-divider-left"></div>
        <?php
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          $args = array(
            'posts_per_page' => 8,
            'paged'          => $paged
          );
          $my_query = new WP_Query($args);
        ?>
        <?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
          <div class="event vertical-padd-1">
            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
            <a href="<?php the_permalink(); ?>"><h3><?php the_time('h:i, M Y'); ?></h3></a>
            <p><?php the_content(); ?></p>
          </div>
        <?php endwhile; ?>
          <div class="nav-previous alignright"><?php next_posts_link('Older posts', $my_query->max_num_pages); ?></div>
          <div class="nav-next alignleft"><?php previous_posts_link('Newer posts'); ?></div>
        <?php else : ?>
          <h2 class="vertical-padd-1">No upcoming events!</h2>
        <?php
          endif;
          wp_reset_postdata();
        ?>
      </div>
      <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 vertical-padd-4">
        <div class="widget-area vertical-padd-1 horizontal-padd-2">
          <h2><?php the_field('widget_section_title'); ?></h2>
          <div class="yellow-divider-left bottom-margin-1"></div>
          <div class="vertical-padd-1">
            <aside id="secondary" class="sidebar widget-area" role="complementary">
              <?php dynamic_sidebar('home-social'); ?>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
    get_footer();
  ?>
</div>
