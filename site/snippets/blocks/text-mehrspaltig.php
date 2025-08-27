<div class="content-block text-mehrspaltig has-bg-<?php e($block->bgcolor()->isNotEmpty(), $block->bgcolor(), 'white') ?>" <?php e($block->blockid()->isNotEmpty(), 'id="' . $block->blockid() . '"') ?>>
	<div class="container">
		<?php if ($block->headline()->isNotEmpty()): ?>
		<div class="columns has-text-centered is-centered">
			<div class="column is-8">
				<?php echo $block->headline()->kt() ?>
			</div>
		</div>
		<?php endif ?>
		<div class="columns is-variable is-6 is-multiline is-centered">
			<?php if ($block->blockId() == 'kontakt') {
				$columnCount = 5;
			} else {
				$columnCount = 12/$block->textblocks()->toStructure()->count();
			} ?>
			<?php $n = 1; foreach ($block->textblocks()->toStructure() as $item): ?>
			<div class="column is-6 is-<?php echo $columnCount ?>-desktop">
				<?php echo $item->text()->kt() ?>

				<?php if ($block->blockid() == 'kontakt' && $n == 1): ?>
					<?php e($site->instagram()->isNotEmpty(), '<a href="' . $site->instagram()->html() . '" class="social-icon instagram" target="_blank"></a>') ?>
	        <?php e($site->youtube()->isNotEmpty(), '<a href="' . $site->youtube()->html() . '" class="social-icon youtube" target="_blank"></a>') ?>
	        <?php e($site->facebook()->isNotEmpty(), '<a href="' . $site->facebook()->html() . '" class="social-icon facebook" target="_blank"></a>') ?>
				<?php endif ?>

			</div>
			<?php $n++; endforeach ?>
		</div>
	</div>
</div>