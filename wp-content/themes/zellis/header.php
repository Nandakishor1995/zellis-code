<!DOCTYPE html>
<html lang="en">
<head>

  <?php wp_head(); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zelis Web Test - R.E.D.D</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
  <?php get_header(); ?>
</head>
<body>
  <div class="container-fluid bg-dark text-light top-bar px-2">
    <p class="topbar-content"><?php the_field('top_bar_content', 'option'); ?></p>
    <!-- <p class="topbar-content topbar-right-content">From the labs of</p> -->
  </div>

  <nav class="navbar navbar-expand-lg bg-light navbar-light sticky-top">
    <div class="container-fluid">

      <a class="navbar-brand" href="/"><img src="<?php the_field('header_logo', 'option'); ?>"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo get_site_url(); ?>/shop-page">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo get_site_url(); ?>/">Locations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cart</a>
          </li>
        </ul>
        <div class="right-side">
            <img class="right-image" src="<?php the_field('labs_logo', 'option'); ?>" alt="LesserEvil company logo">
        </div>
      </div>
    </div>
  </nav>