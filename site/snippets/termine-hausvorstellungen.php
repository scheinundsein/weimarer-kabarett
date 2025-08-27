<?php foreach($items->sortBy('datum', 'asc', 'uhrzeit', 'asc') as $item): ?>
<div class="termin hausvorstellung ?>">
	<div class="columns is-mobile is-multiline">
		<?php if ($item->ausverkauft()->toBool() === true): ?>
		<div class="column is-12 pb-0">
			<p class="alert">Ausverkauft</p>
		</div>
		<?php elseif ($item->restkarten()->toBool() === true): ?>
		<div class="column is-12 pb-0">
			<p class="alert medium">Restkarten verfügbar</p>
		</div>
		<?php endif ?>
		<div class="column pb-0-mobile is-6-mobile is-3-tablet">

			<p class="is-h3"><?php echo $item->datum()->toDate('d.m.Y') ?></p>

			<?php if ($item->ausverkauft()->toBool() === false): ?>
			<a class="button small is-hidden-mobile" href="<?php echo $item->ticketlink() ?>">Ticket kaufen</a>
			<?php endif ?>
		</div>
		<div class="column pb-0-mobile is-6-mobile is-3-tablet">

			<p class="has-text-right-mobile">
				<span><?php echo $item->wochentag() ?>,</span>
				<span class="time"><?php echo $item->uhrzeit() ?></span>
			</p>
			<p class="is-hidden-mobile mt-1"><?php echo $item->location() ?></p>

		</div>
		<div class="column is-8-mobile is-4-tablet">
			<p class="mb-2 is-hidden-tablet"><?php echo $item->location() ?></p>

			<h3 class="mt-0">
  			<?php if ($item->parent()->intendedTemplate() == 'programm'): ?>
  			<a href="<?php echo $item->parent()->url() ?>"><?php echo $item->parent()->title() ?></a>
  			<?php else: ?>
  			<?php echo $item->title()->kti() ?>
  			<?php endif ?>
			</h3>

			<?php if ($item->ausverkauft()->toBool() === false): ?>
			<a class="button small is-hidden-tablet" href="<?php echo $item->ticketlink() ?>">Ticket kaufen</a>
			<?php endif ?>

		</div>
		<div class="column is-4-mobile is-2-tablet">
			<?php if ($img = $item->parent()->teaserimg()->toFile()): ?>
			<a href="<?php echo $item->parent()->url() ?>"><?php echo $img->crop(500, 500) ?></a>
			<?php elseif($img = $item->img()->toFile()): ?>
			<?php echo $img->crop(500, 500) ?>
			<?php endif ?>
		</div>
	</div>
</div>
<?php endforeach ?>