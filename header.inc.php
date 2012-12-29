<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php get_site_name(); ?> | <?php get_page_clean_title(); ?></title>
  <link href="<?php get_theme_url(); ?>/assets/css/reset.css" rel="stylesheet" type="text/css">
  <link href="<?php get_theme_url(); ?>/assets/css/global.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
<?php get_header(); ?>
</head>
<body class="<?php get_page_slug(); ?>" >
  <div class="container">
      <header class="branding">
        <h1>
          <a href="<?php get_site_url(); ?>" alt="<?php get_site_name(); ?>" title="<?php get_site_name(); ?>">
            <?php get_site_name(); ?>
          </a>
        </h1>
      <?php get_component('tagline'); ?>
      </header><!-- header .branding -->
