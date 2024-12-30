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
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet">
</head>

<body <?php body_class('page__body'); ?>>
  <header id="header" class="header">
    <div class="top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-9 col-lg-8">
            <ul class="top-bar__contacts">
              <li>
                <a href="tel:+79609064488">
                  <i class="icon-phone"></i> +7 (960) 906-44-88
                </a>
              </li>
              <li>
                <a href="mailto:anatomiay-metalla@bk.ru">
                  <i class="icon-mail-alt"></i>anatomiay-metalla@bk.ru</a>
              </li>
            </ul>
          </div>
          <div class="col-5 col-md-3 col-lg-4 d-none d-md-block">
            <ul class="top-bar__contacts justify-content-end">
              <li>
                <i class="icon-location"></i> г. Кемерово, ул октябрьский 34а
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
                <img class="logo-black" src="<?= assets('images/logo-black.png') ?>" alt="Кемерово Монтаж Строй 142" />
                <img class="logo-white" src="<?= assets('images/logo-white.png') ?>" alt="Кемерово Монтаж Строй 142" />
                <img class="logo" src="<?= assets('images/logo-black.png') ?>" alt="Кемерово Монтаж Строй 142" />
              </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="icon-menu"></i>
            </button>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
              <ul>
                <li><a href="#about-us">О нас</a></li>
                <li><a href="#why-me">Почему мы</a></li>
                <li><a href="#our-directions">Виды работ</a></li>
                <li><a href="#coll-form">Подать заявку</a></li>
                <li><a href="#last-projects">Проекты</a></li>
                <li><a href="#reviews">Отзывы</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>


  <div class="main">