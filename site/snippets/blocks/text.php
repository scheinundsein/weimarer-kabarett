<div class="content-block text is-centered has-bg-<?php e($block->bgcolor()->isNotEmpty(), $block->bgcolor(), 'white') ?>">
	<div class="container">
		<div class="columns">
			<div class="column is-9-desktop">
				<?php echo $block->text()->kt() ?>
			</div>
		</div>
	</div>
</div>