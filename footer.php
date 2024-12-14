</div>

<footer class="footer">
  <div class="container footer__info">
    <div class="row">
      <div class="col-md-4">
        <p>
          Строительная компания "Кемерово Монтаж Строй 142" уже более 10 лет успешно работает в сфере строительства, предоставляя широкий спектр услуг, включая возведение домов, модульных зданий, гаражей и выполнение общестроительных работ. Мы гордимся своим опытом и надежностью, которые позволяют нам создавать качественные и долговечные объекты для наших клиентов.
        <p>
      </div>
      <div class="col-md-4">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'bottom',
            'depth' => 2,
            'container' => 'ul',
            'container_class' => 'navbar-nav mr-auto mt-2 mt-lg-0',
            'container_id' => 'bs-example-navbar-collapse-1',
            'menu_class' => 'navbar-nav mr-auto',
            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
            'walker' => new Kms142\Classes\WP_Bootstrap_Navwalker()
          )
        );
        ?>
      </div>
      <div class="col-md-4">
        <ul>
          <li class="mb-3"><i class="icon-mail-alt me-2"></i><a href="mailto:kms-142@bk.ru" aria-label="E-mail">kms-142@bk.ru</a></li>
          <li><i class="icon-phone me-2"></i> <a href="tel:+79234942896" aria-label="Телефон">+7 (923) 494-28-96</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="copyright">
    <div class="container">
      Кемерово Монтаж Строй 142 © 2024
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<?php require_once 'dialog/order-dialog.php'; ?>
<?php require_once 'dialog/feedback-dialog.php'; ?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
  (function(m, e, t, r, i, k, a) {
    m[i] = m[i] || function() {
      (m[i].a = m[i].a || []).push(arguments)
    };
    m[i].l = 1 * new Date();
    for (var j = 0; j < document.scripts.length; j++) {
      if (document.scripts[j].src === r) {
        return;
      }
    }
    k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
  })
  (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

  ym(99158042, "init", {
    clickmap: true,
    trackLinks: true,
    accurateTrackBounce: true,
    webvisor: true
  });
</script>
<noscript>
  <div><img src="https://mc.yandex.ru/watch/99158042" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->
</body>

</html>