<?php

function roots_scripts() {
  wp_enqueue_style('roots_style', get_template_directory_uri() . '/css/style.css', false, null);
  wp_enqueue_style('roots_bootstrap_style', get_template_directory_uri() . '/css/bootstrap.css', array('roots_style'), null);

  if (BOOTSTRAP_RESPONSIVE) {
    wp_enqueue_style('roots_bootstrap_responsive_style', get_template_directory_uri() . '/css/bootstrap-responsive.css', array('roots_bootstrap_style'), null);
  }

  wp_enqueue_style('roots_app_style', get_template_directory_uri() . '/css/app.css', false, null);

  if (is_child_theme()) {
    wp_enqueue_style('roots_child_style', get_stylesheet_uri(), array('roots_style'), null);
  }

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

}

add_action('wp_enqueue_scripts', 'roots_scripts', 100);
