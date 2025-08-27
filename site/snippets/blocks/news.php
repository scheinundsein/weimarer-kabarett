<div class="content-block news">
	<div class="container">

		<div class="columns is-centered has-text-centered">
			<div class="column is-8">
				<?php echo $block->headline()->kt() ?>
			</div>
		</div>

		<div class="news-items columns is-mobile is-multiline">
			<?php foreach ($pages->find('neuigkeiten')->children()->listed()->limit(4) as $item): ?>
			<div class="column is-9-mobile is-9-tablet is-5-desktop news-item">
				<div class="news-item__inner">
					<div class="columns is-mobile">

						<?php if ($img = $item->img()->toFile()): ?>
						<div class="news-item__img column is-10 is-offset-2">
							<img src="<?php echo $img->crop(500, 500)->url() ?>"
									 alt="<?php echo $img->alt() ?>"
									 srcset="<?php echo $img->srcset('square') ?>"
	      					 sizes="(max-width: 768px) 100vw, 50vw" />
		       	</div>
						<?php endif ?>

						<div class="news-item__text column is-11-mobile is-9-tablet is-11-desktop">
							<p><?php echo $item->published()->toDate('d.m.Y') ?></p>
							<h3><a href="<?php echo url('neuigkeiten') ?>#<?php echo $item->slug() ?>"><?php echo $item->title() ?></a></h3>
							<p>
								<a class="button" href="<?php echo url('neuigkeiten') ?>#<?php echo $item->slug() ?>">Mehr lesen</a>
							</p>
						</div>

					</div>
				</div>
			</div>
			<?php endforeach ?>
		</div>

		<div class="columns has-text-centered">
			<div class="column is-12">
				<p><a class="button" href="<?php echo url('neuigkeiten') ?>">Alle Neuigkeiten</a></p>
			</div>
		</div>
	</div>
</div>