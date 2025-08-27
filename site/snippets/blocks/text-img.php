<div class="content-block text-img has-bg-<?php e($block->bgcolor()->isNotEmpty(), $block->bgcolor(), 'white') ?>" <?php e($block->blockid()->isNotEmpty(), 'id="' . $block->blockid() . '"') ?>>
  <div class="container">
    <div class="columns is-variable is-8 <?php e($block->vcentered()->toBool() === true, 'is-vcentered') ?> is-justify-content-space-between <?php e($block->alignment() == 'right', 'is-flex-direction-row-reverse') ?>">

      <?php $images = $block->img()->toFiles() ?>

      <!-- Single Image -->
      <?php if($images->count() == 1): ?>
      <div class="column is-6">
        <img
        src="<?php echo $images->first()->url() ?>"
        srcset="<?php echo $images->first()->srcset('square') ?>"
        sizes="(max-width: 768px) 100vw, 50vw"
        alt="<?php echo $images->first()->alt() ?>" />
      </div>

      <!-- Galerie -->
      <?php elseif($images->count() > 1): ?>
      <div class="column is-6">
        <div class="is-gallery">

          <?php $n = 1; foreach ($images as $img): ?>
          <a <?php e($n > 4, 'class="is-hidden-tablet"') ?> title="<?php echo $img->title() ?>" href="<?php echo $img->resize(2000)->url() ?>">
            <?php if ($n <= 4): ?>
              <?php echo $img->crop(500,500) ?>
            <?php endif ?>
          </a>
          <?php $n++; endforeach ?>

        </div>
        <?php if ($images->count() > 2): ?>
        <p class="has-text-right mt-4">
          <a class="button-light open-gallery" href="javascript:void(0)">Alle Bilder ansehen (<?php echo $images->count() ?>)</a>
        </p>
        <?php endif ?>

      </div>
      <?php endif ?>

      <div class="column is-6 is-5-desktop">
        <div class="text-img__text">
          <?php echo $block->text()->kt() ?>
        </div>
      </div>
    </div>
  </div>
</div>
