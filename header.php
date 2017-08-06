<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header>
      <h1><?php bloginfo('title'); ?></h1>
      <h4><i><?php bloginfo('description'); ?></i></h4>
      <div class="navbar">
        <div class="nav-info text-right">
          <p><?php echo date('l, F j, Y'); ?></p>
        </div>
        <?php wp_nav_menu(); ?>
        <div class="nav-info text-left">
          <p><?php echo wp_count_posts()->publish; ?> Posts</p>
        </div>
      </div>
    </header>
