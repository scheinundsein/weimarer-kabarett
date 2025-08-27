<div id="kontaktformular" class="content-block kontaktformular">
	<div class="container">
		<div class="columns">
			<div class="column is-3">
				<?php echo $block->kontaktdaten()->kt() ?>
			</div>

			<div class="column is-9 mt-mobile">
				<?php if($success): ?>
				<div class="columns">
					<div class="column is-8">
						<?php echo $block->formsuccess()->kt() ?>
					</div>
				</div>
				<?php else: ?>
				<?php echo $block->formheadline()->kt() ?>
				<?php snippet('kontaktformular') ?>
				<?php endif ?>
			</div>

		</div>
	</div>
</div>

