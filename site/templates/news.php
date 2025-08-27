<?php snippet('header') ?>

<main>

<div class="content-block news-list has-bg-red">
	<div class="container">

		<div class="columns is-centered has-text-centered">
			<div class="column is-12">
				<h1><?php echo $page->title() ?></h1>
			</div>
		</div>

		<div>

			<?php $items = $page->children()->listed()->sortBy('published', 'desc'); ?>
			<?php $n=1; foreach ($items as $item): ?>
			<div id="<?php echo $item->slug() ?>" class="columns is-multiline is-mobile is-centered news-list__item">

				<div class="column is-3">
				<?php if ($img = $item->img()->toFile()): ?>
					<img src="<?php echo $img->crop(500, 500)->url() ?>"
							 alt="<?php echo $img->alt() ?>"
							 srcset="<?php echo $img->srcset('square') ?>"
			  					 sizes="(max-width: 768px) 100vw, 33vw" />
				<?php endif ?>
			  </div>


				<div class="column is-8-mobile is-7-tablet is-6-desktop is-offset-1">
					<p class="published"><?php echo $item->published()->toDate('d.m.Y') ?></p>
					<div class="news-list__item-text">
						<h2><?php echo $item->title() ?></h2>
						<?php echo $item->text()->kt() ?>
					</div>
				</div>
			</div>
			<?php $n++;endforeach ?>

		</div>

		<?php if ($items->count() > 4): ?>
		<div class="columns is-centered has-text-centered">
			<div class="column is-12">
				<p><a href="javascript:void(0)" id="load-more">+ mehr laden</a></p>
			</div>
		</div>
		<?php endif ?>

	</div>
</div>

</main>

<?php snippet('footer') ?>