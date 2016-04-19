<section class="pillars container vertical-padd-2">
  <div class="row text-center">
    <div class="vertical-padd-2 col-md-3 col-sm-6 col-xs-12">
      <?php
        $image = get_field('pillar1_image');
        if(!empty($image)): ?>
          <img class="pillar-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
      <h3><?php the_field('pillar1_title'); ?></h3>
      <div class="yellow-divider"></div>
      <p><?php the_field('pillar1_text'); ?></p>
    </div>
    <div class="vertical-padd-2 col-md-3 col-sm-6 col-xs-12">
      <?php
        $image = get_field('pillar2_image');
        if(!empty($image)): ?>
          <img class="pillar-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
      <h3><?php the_field('pillar2_title'); ?></h3>
      <div class="yellow-divider"></div>
      <p><?php the_field('pillar2_text'); ?></p>
    </div>
    <div class="clearfix visible-sm-block"></div>
    <div class="vertical-padd-2 col-md-3 col-sm-6 col-xs-12">
      <?php
        $image = get_field('pillar3_image');
        if(!empty($image)): ?>
          <img class="pillar-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
      <h3><?php the_field('pillar3_title'); ?></h3>
      <div class="yellow-divider"></div>
      <p><?php the_field('pillar3_text'); ?></p>
    </div>
    <div class="vertical-padd-2 col-md-3 col-sm-6 col-xs-12">
      <?php
        $image = get_field('pillar4_image');
        if(!empty($image)): ?>
          <img class="pillar-image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
      <?php endif; ?>
      <h3><?php the_field('pillar4_title'); ?></h3>
      <div class="yellow-divider"></div>
      <p><?php the_field('pillar4_text'); ?></p>
    </div>
  </div>
</section>
