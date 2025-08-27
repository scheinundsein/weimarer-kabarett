<div class="content-block programm-uebersicht has-bg-yellow">
	<div class="container">

		<?php if ($block->text()->isNotEmpty()): ?>
		<div class="columns is-centered has-text-centered">
			<div class="column is-8">
				<?php echo $block->text()->kt() ?>
			</div>
		</div>
		<?php endif ?>

			<?php foreach ($pages->find('programme')->children()->listed() as $item): ?>
			<div class="programm-uebersicht__item">
				<div class="columns is-justify-content-space-between">
					<div class="column is-3">

						<?php if ($img = $item->teaserimg()->toFile()): ?>
						<div class="programm-uebersicht__item-img">
							<a href="<?php echo $item->url() ?>"><?php echo $img->crop(500, 500) ?></a>
	         	</div>
						<?php endif ?>

					</div>

					<div class="column is-5">
						<div class="programm-uebersicht__item-text">
								<h2 class="is-h3"><?php echo $item->title() ?></h2>
								<?php e($item->subline()->isNotEmpty(), '<p class="subline">' . $item->subline() . '</p>') ?>
								<?php echo $item->teasertext()->kt() ?>
								<p><a class="button-light" href="<?php echo $item->url() ?>">mehr zum Programm</a></p>
							</div>
					</div>

					<div class="column is-3">

						<?php $dates = $item->dates()->toStructure()->filterBy('gastspiel', false) ?>
						<?php if ($dates->count() > 0): ?>
						<div class="programm-uebersicht__item-termine mt-mobile">

							<h4>Nächste Termine in Weimar</h4>

							<ul>
								<?php foreach ($dates->limit(5) as $date): ?>
								<li><?php echo $date->datum()->toDate('d.m.Y') ?></li>
								<?php endforeach ?>
							</ul>


							<p>
								<a class="button" href="<?php echo url('termine-und-tickets') ?>">Tickets kaufen</a>
								<br><small>Tickets sind ab sofort erhältlich.</small>
							</p>

						</div>
						<?php endif ?>


					</div>
				</div>
			</div>
			<?php endforeach ?>

	</div>
</div>