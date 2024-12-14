<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta content="telephone=no" name="format-detection">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="<?= assets('images/favicon-96x96.png') ?>" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="<?= assets('images/favicon.svg') ?>" />
  <link rel="shortcut icon" href="<?= assets('images/favicon.ico') ?>" />
  <link rel="apple-touch-icon" sizes="180x180" href="<?= assets('images/apple-touch-icon.png') ?>" />
  <link rel="manifest" href="/site.webmanifest" />

  <?php wp_head(); ?>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<body <?php body_class('page__body'); ?>>
  <header class="header">
    <div class="top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-9 col-lg-8">
            <ul class="top-bar__contacts">
              <li>
                <a href="tel:+79234942896">
                  <i class="icon-phone"></i> +7 (923) 494-28-96
                </a>
              </li>
              <li>
                <a href="mailto: kms-142@bk.ru">
                  <i class="icon-mail-alt"></i> kms-142@bk.ru</a>
              </li>
            </ul>
          </div>
          <div class="col-5 col-md-3 col-lg-4 d-none d-md-block">
            <ul class="top-bar__contacts justify-content-end">
              <li>
                <i class="icon-location"></i> г. Кемерово, ул Шатурская 6, офис 5
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom_bar">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <div class="site-logo">
              <a href="/">
                <img class="logo" src="<?= assets('images/logo.png') ?>" alt="Кемерово Монтаж Строй 142" />
              </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="icon-menu"></i>
            </button>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
              <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'top',
                  'depth' => 2,
                  'container' => 'ul',
                  'container_class' => 'navbar-nav mr-auto mt-2 mt-lg-0',
                  'container_id' => 'bs-example-navbar-collapse-1',
                  'menu_class' => 'navbar-nav mr-auto',
                  'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                  'walker' => new Kms142\Classes\WP_Bootstrap_Navwalker(),
                )
              );
              ?>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>


  <div class="main">