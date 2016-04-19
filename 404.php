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
      <h1>404 - Page Not Found!</h1>
      <div class="yellow-divider-left bottom-margin-2"></div>
      <p>Oops, I screwed up and you discovered my fatal flaw.<br />
      Well, we're not all perfect, but we try. Maybe visit our <a title="Our Site" href="<?php echo get_home_url(); ?>">Home Page</a> to start fresh.  We'll do better next time.</p>
    </div>
  </div>

  <?php
    get_footer();
  ?>
</div>
