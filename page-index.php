<?php get_header(); ?>

<div id="main-banner" class="main-banner background-lazy" data-src="<?= mix('images/main-banner.png') ?>">
  <div class="container h-100 d-flex align-items-center">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-8 col-12">
        <h1>Строительство домов,<br>гаражей и модульных зданий </h1>
        <div class="main-banner__description">
          Более 10 лет успешно работаетм сфере строительства, предоставляя широкий
          спектр услуг,включая возведение домов, модульных зданий, гаражей и выполнение общестроительных работ.
        </div>

        <a href="feedback-dialog" class="btn btn-primary btn-feedback">Оформить заявку</a>
        <a href="#coll-form" class="btn btn-outline-primary scrolling-to" data-scroll="#coll-form">Есть вопросы?</a>
      </div>
      <div class="col-md-4 d-none d-md-block">
        <img class="main-banner__home" src="<?= mix('images/main-banner-index.png') ?>" alt="">
      </div>
    </div>
  </div>
</div>

<section id="about-us" class="background-lazy section-top-100" data-src="<?= mix('images/bg-map.png') ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-12">
        <div class="coll-form">
          <div class="title">
            <span class="sub-title">Коротко о нас</span>
            <h2>О компании</h2>
          </div>

          <div class="coll-form__content">
            Строительная компания "Кемерово Монтаж Строй 142" уже более 10 лет успешно работает в сфере строительства, предоставляя широкий спектр услуг, включая возведение домов, модульных зданий, гаражей и выполнение общестроительных работ. Мы гордимся своим опытом и надежностью, которые позволяют нам создавать качественные и долговечные объекты для наших клиентов.
          </div>

          <a href="feedback-dialog" class="btn btn-primary btn-feedback mt-4">Оформить заявку</a>
        </div>
      </div>
      <div class="col-lg-5 col-12 d-flex justify-content-center">
        <div class="coll-form__img ">
          <img loading="lazy" decoding="async" width="623" height="700"
            src="<?= mix('images/about-us__image.png') ?>"
            class="attachment-full size-full wp-image-13368" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<section id="our-numbers" class="section-top-100">
  <div class="container">
    <div class="title title--center">
      <span class="sub-title">Цифры о нас</span>
      <h2>Почему мы?</h2>
    </div>

    <div class="row justify-content-between">

      <div class="col-lg-3 col-md-6 col-12 my-2">
        <div class="our-numbers">
          <div class="our-numbers__value">
            <h3>10 <span>лет</span></h3>
          </div>

          <div class="our-numbers__title">
            <h6>Опыта</h6>
          </div>

          <div class="our-numbers__content">
            <p>Мы имеем большой опыт в данной сфере и действительно знаем, как Вам угодить.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12 my-2">
        <div class="our-numbers">
          <div class="our-numbers__value">
            <h3>100 <sup>+</sup></h3>
          </div>

          <div class="our-numbers__title">
            <h6>Сданных объектов</h6>
          </div>

          <div class="our-numbers__content">
            <p>Множество клиентов уже оценили приемущества работы с нами.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12 my-2">
        <div class="our-numbers">
          <div class="our-numbers__value">
            <h3>50 <sup>+</sup></h3>
          </div>

          <div class="our-numbers__title">
            <h6>Клиентов</h6>
          </div>

          <div class="our-numbers__content">
            <p>Множество клиентов по всей области.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12 my-2">
        <div class="our-numbers">
          <div class="our-numbers__value">
            <h3>5 <span>лет</span></h3>
          </div>

          <div class="our-numbers__title">
            <h6>Гарантия</h6>
          </div>

          <div class="our-numbers__content">
            <p>Мы гарантируем высокое качество оказываемых услуг.</p>
          </div>
        </div>
      </div>

    </div>
</section>

<section id="our-directions" class="section-top-100 section-bottom-100">
  <div class="container">
    <div class="title title--center">
      <span class="sub-title">Широкий спектр услуг</span>
      <h2>Наши направления</h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-3 col-md-6 col-12">
        <a class="our-directions" href="/garazhi">
          <div class="our-directions__img">
            <img src="<?= mix('images/our-directions-1.jpeg') ?>" alt="Строительство гаражей">
          </div>

          <h5 class="our-directions__content">
            Строительство<br>гаражей
          </h5>
        </a>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <a class="our-directions" href="/doma">
          <div class="our-directions__img">
            <img src="<?= mix('images/our-directions-2.jpeg') ?>" alt="Строительство домов">
          </div>

          <h5 class="our-directions__content">
            Строительство<br>домов
          </h5>
        </a>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <a class="our-directions" href="/modulnye-zdaniya">
          <div class="our-directions__img">
            <img src="<?= mix('images/our-directions-3.jpeg') ?>" alt="Модульные здания">
          </div>

          <h5 class="our-directions__content">
            Модульные<br>здания
          </h5>
        </a>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-3 col-md-6 col-12">
        <a class="our-directions" href="/obshhestroitelnye-raboty">
          <div class="our-directions__img">
            <img src="<?= mix('images/our-directions-4.jpeg') ?>" alt="Общестроительные работы">
          </div>

          <h5 class="our-directions__content">
            Общестроительные<br>работы
          </h5>
        </a>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <a class="our-directions" href="/geodeziya">
          <div class="our-directions__img">
            <img src="<?= mix('images/our-directions-5.jpeg') ?>" alt="Общестроительные работы">
          </div>

          <h5 class="our-directions__content">
            Геодезические<br>работы
          </h5>
        </a>
      </div>
    </div>
</section>

<section id="coll-form" class="background-lazy" data-src="<?= mix('images/request-background.jpg') ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-12">
        <div class="coll-form">
          <div class="coll-form__sub-title">
            Мы Вам перезвоним
          </div>
          <h2 class="coll-form__title">
            Оставить заявку
          </h2>
          <div class="coll-form__content">
            Оставьте заявку и мы перезвоним Вам в течении 15 минут. Наши специалисты ответят на все вопросы, помогут определиться с заявкой, соорентируют по стоимости и т.д.
          </div>

          <div class="form">
            <?= do_shortcode('[contact-form-7 id="c492caf" title="Заявка"]'); ?>
          </div>
        </div>
      </div>
      <div class="col-md-6 	d-none d-md-block"></div>
    </div>
  </div>
</section>

<section id="last-projects" class="section-top-100 section-bottom-100">
  <div class="container">
    <div class="title title--center">
      <span class="sub-title">Примеры наших работ</span>
      <h2>Проекты</h2>
    </div>

    <?= do_shortcode('[list-projects]') ?>
  </div>
</section>

<section id="reviews" class="section-top-100 section-bottom-100">
  <div class="container">
    <div class="title title--center">
      <span class="sub-title">Клиенты о нас</span>
      <h2>Отзывы о нас</h2>
    </div>

    <?= do_shortcode('[list-reviews]') ?>
  </div>
</section>


<?php get_footer(); ?>