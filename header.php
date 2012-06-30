<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">

  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

  <?php roots_head(); ?>
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <?php ie_chrome_frame(); ?>

  <?php roots_header_before(); ?>
  <?php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header', 'top-navbar');
    } else {
      get_template_part('templates/header', 'default');
    }
  ?>
  <?php roots_header_after(); ?>

  <?php roots_wrap_before(); ?>
  <div id="wrap" class="<?php echo WRAP_CLASSES; ?>" role="document">