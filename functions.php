<?php

require_once('inc/wp_bootstrap_navwalker.php');

if (!function_exists('niteline_setup')) :
function niteline_setup() {
  add_theme_support('title-tag');

  register_nav_menus(array(
    'primary' => __('Primary', 'niteline')
  ));

  add_theme_support('post-thumbnails');
}
endif;
add_action('after_setup_theme', 'niteline_setup');

function create_public_faces_type() {
  register_post_type( 'public-faces',
    array(
      'labels' => array(
        'name' => __( 'Public Faces' ),
        'singular_name' => __( 'Public Face' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title', 'editor', 'thumbnail')
    )
  );
}
add_action('init', 'create_public_faces_type');

function niteline_resources() {
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-2.2.3.min.js');
  wp_enqueue_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js');
  wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css?family=Raleway:400,300,200,500,600,700');
  wp_enqueue_style('style', get_template_directory_uri() . '/css/main.css');
}

add_action('wp_enqueue_scripts', 'niteline_resources');

function niteline_widgets_init() {
  register_sidebar(array(
    'name'          => __('Homepage Bottom', 'niteline'),
    'id'            => 'home-social',
    'description'   => __('Add widgets here to appear in your soical section.', 'niteline'),
    'before_widget' => '<div class="row horizontal-padd-1 bottom-margin-2">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));
}
add_action( 'widgets_init', 'niteline_widgets_init' );

?>
