<div class="content-block text-logo has-bg-<?php e($block->bgcolor()->isNotEmpty(), $block->bgcolor(), 'white') ?>" <?php e($block->blockid()->isNotEmpty(), 'id="' . $block->blockid() . '"') ?>>
  <div class="container">
    <div class="columns is-variable is-8 is-justify-content-space-between is-vcentered">

      <div class="column is-4 is-hidden-mobile">
        <img src="<?php echo url('assets/images/logo-weimarer-kabarett-bunt.svg') ?>" alt="Logo Weimarer Kabarett" />
      </div>

      <div class="column is-7">
        <div class="text-img__text">
          <?php echo $block->text()->kt() ?>
        </div>
      </div>
    </div>
  </div>
</div>
