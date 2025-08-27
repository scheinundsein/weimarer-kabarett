  <footer class="site-footer">
    <div class="container">

      <div class="site-footer__inner">
        <ul class="site-footer__nav">
          <?php foreach ($pages->listed() as $item): ?>
          <li><a href="<?php echo $item->url() ?>"><?php echo $item->title() ?></a></li>
          <?php endforeach ?>
        </ul>

        <a class="site-footer__logo" href="<?php echo $site->url() ?>">
          <img src="<?php echo url('assets/images/logo-weimarer-kabarett-bunt.svg') ?>" alt="Logo Weimarer Kabarett">
        </a>

        <div class="site-footer__contact has-text-right">
          <?php echo $site->footertext()->kt() ?>

          <div class="site-footer__icons">
            <?php e($site->instagram()->isNotEmpty(), '<a href="' . $site->instagram()->html() . '" class="social-icon instagram" target="_blank"></a>') ?>
            <?php e($site->youtube()->isNotEmpty(), '<a href="' . $site->youtube()->html() . '" class="social-icon youtube" target="_blank"></a>') ?>
            <?php e($site->facebook()->isNotEmpty(), '<a href="' . $site->facebook()->html() . '" class="social-icon facebook" target="_blank"></a>') ?>
          </div>
        </div>
      </div>

      <div class="site-footer__meta has-text-centered">
        <a href="<?php echo url('impressum') ?>">Impressum</a>
        <span class="px-2">|</span>
        <a href="<?php echo url('datenschutz') ?>">Datenschutz</a>
      </div>

    </div>
  </footer>

</div>
<!-- Site Wrapper End -->


<!-- Scripts -->
<?php echo js('assets/js/min/script-min.js') ?>

</body>
</html>
