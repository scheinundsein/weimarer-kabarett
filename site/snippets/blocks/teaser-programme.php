<div class="content-block teaser-programme has-bg-yellow">
	<div class="container">

		<div class="columns is-centered has-text-centered">
			<div class="column is-8">
				<?php echo $block->text()->kt() ?>
			</div>
		</div>

		<div class="columns is-variable is-8 is-multiline">
			<?php foreach ($pages->find('programme')->children()->listed() as $item): ?>
			<div class="column is-12 is-4-desktop">
				<div class="programm-item">

						<?php if ($img = $item->teaserimg()->toFile()): ?>
							<div class="programm-item__img">
								<a href="<?php echo $item->url() ?>"><?php echo $img->crop(500, 500) ?></a>
	           	</div>
						<?php endif ?>

						<div class="programm-item__text">
							<h3><?php echo $item->title() ?></h3>
							<?php e($item->subline()->isNotEmpty(), '<p class="subline">' . $item->subline() . '</p>') ?>
							<?php echo $item->teasertext()->kt() ?>
						</div>

						<div class="programm-item__btn">
							<a class="button" href="<?php echo $item->url() ?>">mehr zum Programm</a>
							<?php if ($item->dates()->isNotEmpty()): ?>
							<br><small>Tickets sind ab sofort erhältlich.</small>
							<?php endif ?>
						</div>


				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</div>