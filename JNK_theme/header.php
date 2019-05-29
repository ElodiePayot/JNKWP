<!doctype html>
<html lang="en">
  <head>
    <title>JNK</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/app.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:300,400,500,700|Roboto+Slab|Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@0.2.1/dist/confetti.browser.min.js"></script>

    <link rel="canonical" href="" />
    <meta name="author" content="JNK" />
    <meta name="description" content="JNK" />

    <meta property="og:title" content="JNK" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="JNK " />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="JNK" />

    <meta name="twitter:card"              content="summary" />
    <meta name="twitter:site"              content="@JNK" />
    <meta name="twitter:creator"           content="@JNK">
    <meta name="twitter:title"             content="JNK" />
    <meta name="twitter:description"       content="JNK" />

    <?php wp_head(); ?>
  </head>

  <body>
    <header class="page-header">
      <div class="container">
        <nav class="navbar">
          <?php
          wp_nav_menu([
            'menu'            => 'top',
            'theme_location'  => 'top',
            'container'       => 'div',
            'container_id'    => 'bs4navbar',
            'container_class' => 'collapse navbar-collapse ml-auto',
            'menu_id'         => false,
            'menu_class'      => 'navbar-nav',
            'depth'           => 2,
            'fallback_cb'     => 'bs4navwalker::fallback',
            'walker'          => new bs4navwalker()
          ]);
          ?>

        </nav>
      </div>
    </header>
