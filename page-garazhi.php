<?php get_header(); ?>

<div id="main-banner" class="main-banner background-lazy" data-src="<?= mix('images/main-banner.png') ?>">
  <div class="container h-100 d-flex align-items-center">
    <div class="row align-items-center">
      <div class="col-md-8">
        <h1>Строительство гаражей<br>в городе Кемерово</h1>
        <div class="main-banner__description">
          Каркасный гараж возможно изготовить на необходимое для Вас количество автомобилей. Используя широкий спектр материалов, как внутри быстровозводимого здания, так и снаружи мы предложим оптимальный для Вас вариант. При строительстве гаража многие люди используют стандартные проекты гаражей, имеющиеся у строительных организаций. Если ставится единственная задача хранения автомобиля, то стандартные проекты прекрасно с ней справляются.
        </div>

        <a href="feedback-dialog" class="btn btn-primary btn-feedback">Оформить заявку</a>
        <a href="#feedback" class="btn btn-outline-primary scrolling-to" data-scroll="#feedback">Есть вопросы?</a>
      </div>
      <div class="col-md-4">
        <img class="main-banner__home" src="<?= mix('images/main-banner-garage.png') ?>" alt="">
      </div>
    </div>
  </div>
</div>

<!--
<section id="our-service" class="section-top-100 section-bottom-100">
  <div class="container">
    <div class="title title--center">
      <span class="sub-title">Широкий спектр услуг</span>
      <h2>Наши услуги</h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 col-12 my-2">
        <div class="our-service">
          <div class="our-service__icon">
            <span>
              <svg id="Outline" viewBox="0 0 24 24">
                <path
                  d="M23.121,9.069,15.536,1.483a5.008,5.008,0,0,0-7.072,0L.879,9.069A2.978,2.978,0,0,0,0,11.19v9.817a3,3,0,0,0,3,3H21a3,3,0,0,0,3-3V11.19A2.978,2.978,0,0,0,23.121,9.069ZM15,22.007H9V18.073a3,3,0,0,1,6,0Zm7-1a1,1,0,0,1-1,1H17V18.073a5,5,0,0,0-10,0v3.934H3a1,1,0,0,1-1-1V11.19a1.008,1.008,0,0,1,.293-.707L9.878,2.9a3.008,3.008,0,0,1,4.244,0l7.585,7.586A1.008,1.008,0,0,1,22,11.19Z" />
              </svg>
            </span>
          </div>
          <h5 class="our-service__title">Билдинг инфа</h5>
          <div class="our-service__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-12 my-2">
        <div class="our-service">
          <div class="our-service__icon">
            <span>
              <svg id="Outline" viewBox="0 0 24 24">
                <path
                  d="M23.121,9.069,15.536,1.483a5.008,5.008,0,0,0-7.072,0L.879,9.069A2.978,2.978,0,0,0,0,11.19v9.817a3,3,0,0,0,3,3H21a3,3,0,0,0,3-3V11.19A2.978,2.978,0,0,0,23.121,9.069ZM15,22.007H9V18.073a3,3,0,0,1,6,0Zm7-1a1,1,0,0,1-1,1H17V18.073a5,5,0,0,0-10,0v3.934H3a1,1,0,0,1-1-1V11.19a1.008,1.008,0,0,1,.293-.707L9.878,2.9a3.008,3.008,0,0,1,4.244,0l7.585,7.586A1.008,1.008,0,0,1,22,11.19Z" />
              </svg>
            </span>
          </div>
          <h5 class="our-service__title">Билдинг инфа</h5>
          <div class="our-service__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-12 my-2">
        <div class="our-service">
          <div class="our-service__icon">
            <span>
              <svg id="Outline" viewBox="0 0 24 24">
                <path
                  d="M23.121,9.069,15.536,1.483a5.008,5.008,0,0,0-7.072,0L.879,9.069A2.978,2.978,0,0,0,0,11.19v9.817a3,3,0,0,0,3,3H21a3,3,0,0,0,3-3V11.19A2.978,2.978,0,0,0,23.121,9.069ZM15,22.007H9V18.073a3,3,0,0,1,6,0Zm7-1a1,1,0,0,1-1,1H17V18.073a5,5,0,0,0-10,0v3.934H3a1,1,0,0,1-1-1V11.19a1.008,1.008,0,0,1,.293-.707L9.878,2.9a3.008,3.008,0,0,1,4.244,0l7.585,7.586A1.008,1.008,0,0,1,22,11.19Z" />
              </svg>
            </span>
          </div>
          <h5 class="our-service__title">Билдинг инфа</h5>
          <div class="our-service__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
        </div>
      </div>
    </div>
  </div>
</section>
-->

<section id="last-projects" class="section-top-100 section-bottom-100">
  <div class="container">
    <div class="title title--center">
      <span class="sub-title">Примеры наших работ</span>
      <h2>Проекты</h2>
    </div>

    <?= do_shortcode('[list-projects category="garazhi"]') ?>
  </div>
</section>

<section id="advantages" class="section-bottom-100">
  <div class="container">
    <div class="title title--center">
      <span class="sub-title">Наши приемущества</span>
      <h2>Почему мы?</h2>
    </div>

    <p class="mb-3">
      В нашей компании вы можете заказать строительство гаражей под ключ, включая все отделочные работы.
      Мы берем на себя полный комплекс задач: от разработки проекта и выбора материалов до сдачи проекта.
      Мы занимаемся возведением гаражей любой площади и сложности.
    </p>

    <div class="row">
      <div class="col-xl-3">
        <div class="advantages-item">
          <div class="advantages-item__title">Качество</div>
          <div class="advantages-item__body">Мы гарантируем высокое качество материалов и работы</div>
        </div>
      </div>
      <div class="col-xl-3">
        <div class="advantages-item">
          <div class="advantages-item__title">Сроки</div>
          <div class="advantages-item__body">Мы не затягиваем сроки и сдаем работу вовремя</div>
        </div>
      </div>
      <div class="col-xl-3">
        <div class="advantages-item">
          <div class="advantages-item__title">Честность</div>
          <div class="advantages-item__body">Мы не накручиваем цену и не наживаемся на клиентах</div>
        </div>
      </div>
      <div class="col-xl-3">
        <div class="advantages-item">
          <div class="advantages-item__title">Профессионализм</div>
          <div class="advantages-item__body">В нашей команде сотрудники, имеющие большой опыт и квалификацию</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="advantages" class="section-bottom-100">
  <div class="container">
    <div class="title title--center">
      <span class="sub-title">Список услуг</span>
      <h2>Наши услуги</h2>
    </div>

    <div class="table-responsive">
      <table class="table table-striped">
        <tbody>
          <tr>
            <td>Строительство гаражей</td>
            <td>Строительство гаражей из пеноблоков</td>
          </tr>
          <tr>
            <td>Устройство смотровой ямы в гараже</td>
            <td>Сборка гаражей</td>
          </tr>
          <tr>
            <td>Строительство гаражей из кирпича</td>
            <td>Строительство каркасных гаражей</td>
          </tr>
          <tr>
            <td>Строительство гаражей из газобетона</td>
            <td>Граж из пенобетона под ключ</td>
          </tr>
          <tr>
            <td>Сборка гаражей из металоконструкций</td>
            <td>Строительство гаражей из ЛСТК</td>
          </tr>
          <tr>
            <td>Гаражи из СИП-панелей</td>
            <td>Гараж по индивидуальному заказу</td>
          </tr>
        </tbody>
      </table>
    </div>
</section>

<section id="feedback" class="feedback section-top-100 section-bottom-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2 class="title">Оставить заявку</h2>
        <p>Оставьте заявку и мы перезвоним Вам в течении 15 минут. Наши специалисты ответят на все вопросы, помогут определиться с заявкой, соорентируют по стоимости и т.д.</p>
      </div>
      <div class="col-lg-6">
        <div class="feedback__form">
          <?= do_shortcode('[contact-form-7 id="c492caf" title="Заявка"]'); ?>
        </div>
      </div>
    </div>
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

<section id="map">
  <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A3ac77b3d3f7d43384c52ebbfaa20c616c1a01d91253479690350b3b3432aa738&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
</section>

<?php get_footer(); ?>