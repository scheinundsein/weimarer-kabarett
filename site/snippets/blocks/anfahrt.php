<div class="content-block py-0 anfahrt has-bg-<?php echo $block->bgcolor() ?>" <?php e($block->blockid()->isNotEmpty(), 'id="' . $block->blockid() . '"') ?>>
  <a href="https://goo.gl/maps/LZBLb39qdWkZsocU9" target="_blank"></a>
  <div class="anfahrt__text">
    <?php echo $block->text()->kt() ?>
  </div>
</div>
