<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
      integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk="
      crossorigin="anonymous"
    />
    <!-- Bootstrap CSS -->
    <?php wp_head(); ?>
    <title>Optical</title>
  </head>

  <body <?php body_class(); ?> >

<!-- NAVBAR -->
  <div class="container-fluid bg-custom sticky-top">
  <nav class="navbar navbar-expand-md navbar-light bg-custom container" role="navigation">
  <div class="container">
    <!-- Icon -->
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
      <?php  the_custom_logo(); ?>
    </a>
    <!-- Brand and toggle get grouped for better mobile display -->
    <button class="navbar-toggler hamburgerNav" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav ml-auto text-center',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>

      


    
  </div>