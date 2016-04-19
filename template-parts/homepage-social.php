<section class="container horizontal-padd-2">
  <div class="col-md-7 col-sm-6 col-xs-12 top-padd-4 bottom-padd-2">
    <h2><?php the_field('posts_section_title'); ?></h2>
    <div class="yellow-divider-left"></div>
    <?php $my_query = new WP_Query('showposts=3'); ?>
    <?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <div class="event vertical-padd-1">
        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
        <a href="<?php the_permalink(); ?>"><h3><?php the_time('h:i, M Y'); ?></h3></a>
        <p><?php the_content(); ?></p>
      </div>
    <?php endwhile; else : ?>
      <h2 class="vertical-padd-1">No upcoming events!</h2>
    <?php
      endif;
      wp_reset_query();
    ?>
  </div>
  <div class="col-md-5 col-sm-6 col-xs-12 vertical-padd-4">
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
</section>
