</div>

<footer class="footer">
  <div class="container footer__info">
    <div class="row align-self-center">
      <div class="col-md-4 d-flex align-self-center">
        <div class="text">
          <h5>Заголовок</h5>
          <p>
            Изготовления и монтаж металлоконструкции любой сложности
          <p></p>
        </div>

      </div>
      <div class="col-md-4 d-flex align-self-center justify-content-center">
        <div class="copyright">
          <img class="logo-white" src="<?= assets('images/logo-white.png') ?>" alt="Анатомия металла" />
          Анатомия металла © 2024
        </div>
      </div>
      <div class="col-md-4 d-flex align-self-center justify-content-center">
        <ul>
          <li class="mb-3"><i class="icon-mail-alt me-2"></i><a href="mailto:AM@test.ru"
              aria-label="E-mail">AM@test.ru</a></li>
          <li><i class="icon-phone me-2"></i> <a href="tel:+77777777777" aria-label="Телефон">+7 (777) 777-77-77</a>
          </li>
        </ul>
      </div>
    </div>
  </div>


</footer>

<?php wp_footer(); ?>

<?php require_once 'dialog/order-dialog.php'; ?>
<?php require_once 'dialog/feedback-dialog.php'; ?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
  (function (m, e, t, r, i, k, a) {
    m[i] = m[i] || function () {
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