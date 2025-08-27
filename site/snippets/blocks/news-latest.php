<?php $newsItem = $pages->find('neuigkeiten')->children()->listed()->sortBy('published', 'desc')->first() ?>

<div class="content-block news-latest has-bg-<?php e($block->bgcolor()->isNotEmpty(), $block->bgcolor(), 'white') ?>">
	<div class="container">

		<div class="columns is-centered has-text-centered">
			<div class="column is-12">
				<?php echo $block->headline()->kt() ?>
			</div>
		</div>

		<div class="columns is-justify-content-space-between is-vcentered news-latest__wrapper">
			<div class="column is-5">
				<div class="news-latest__text">
					<?php echo $newsItem->teasertext()->kt() ?>
					<p><a class="button" href="<?php echo url('neuigkeiten') ?>#<?php echo $newsItem->slug() ?>">Beitrag lesen</a></p>
				</div>
			</div>

			<?php if ($img = $newsItem->img()->toFile()): ?>
			<div class="column is-3">
				<img src="<?php echo $img->crop(500, 500)->url() ?>"
						 alt="<?php echo $img->alt() ?>"
						 srcset="<?php echo $img->srcset('square') ?>"
  					 sizes="(max-width: 768px) 100vw, 33vw" />
			<?php endif ?>
			</div>

			<div class="column is-narrow is-hidden-mobile">
				<a class="button-circle" href="<?php echo url('neuigkeiten') ?>">Mehr Neuigkeiten aus dem Weimarer Kabarett findet ihr hier</a>
			</div>

		</div>
	</div>
</div>