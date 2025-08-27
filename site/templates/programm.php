<?php snippet('header') ?>

<main>

	<!-- HERO -->
	<div class="content-block hero-programm py-0 has-bg-red">
		<div class="hero-programm__text container">
			<div class="columns">
				<div class="column is-5 is-offset-7">
					<div class="hero__text-inner">
						<p>Programm</p>
						<h1><?php echo $page->title() ?></h1>
					</div>
				</div>
			</div>
		</div>

		<?php if ($bg = $page->teaserimg()->toFile()): ?>
		<div class="hero-programm__img">
			<?php if ($bg->type() == 'image'): ?>
			<img src="<?php echo $bg->resize(1500)->url() ?>"
			 		 alt="<?php echo $bg->alt() ?>"
			 		 sizes="100vw"
			 		 srcset="<?php echo $bg->srcset() ?>" />
			<?php elseif($bg->type() == 'video'): ?>
			<video src="<?php echo $bg->url() ?>" autoplay muted></video>
			<?php endif ?>

		</div>
		<?php endif ?>


	</div>

	<div class="content-block programm-info has-bg-yellow">
		<div class="container">
			<div class="columns is-variable is-8 is-flex-direction-row-reverse is-justify-content-space-between">
				<div class="column is-9 is-8-fullhd">

					<!-- INTRO -->
					<?php if ($page->intro()->isNotEmpty()): ?>
					<div class="columns">
						<div class="programm__intro column is-10">
							<?php echo $page->intro()->kt() ?>
						</div>
					</div>
					<?php endif ?>

					<!-- TEXT -->
					<div class="columns is-variable is-8">
						<div class="column is-8">
							<?php echo $page->text()->kt() ?>
						</div>

						<?php if($page->dates()->isNotEmpty() || $page->downloads()->isNotEmpty()): ?>

						<div class="column is-4 mt-mobile">

							<?php $dates = $page->dates()->toStructure()->filterBy('gastspiel', false) ?>
							<?php if ($dates->count() > 0): ?>
							<div class="programm__termine">
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

							<?php if ($page->downloads()->isNotEmpty()): ?>
								<div class="programm__downloads">
									<h4>Downloads</h4>
									<?php foreach ($page->downloads()->toStructure() as $item): ?>
									<a class="button" href="<?php echo $item->file()->toFile()->url() ?>" target="_blank"><?php echo $item->text()->kti() ?></a>
									<?php endforeach ?>
								</div>
							<?php endif ?>

						</div>
						<?php endif ?>
					</div>

				</div>

				<!-- GALERIE -->
				<?php $images = $page->galerie()->toFiles(); ?>
				<?php $n=1; if ($images->count() > 0): ?>
				<div class="column is-3 mt-mobile">
					<h2 class="is-hidden-tablet">Galerie</h2>
					<div class="programm__galerie is-gallery">
						<?php foreach ($images as $img): ?>
							<a <?php e($n == 4, 'class="is-hidden-tablet"') ?> title="<?php echo $img->title() ?>" href="<?php echo $img->resize(2000)->url() ?>">
								<?php if ($n <= 4): ?>
									<?php echo $img->crop(500,500) ?>
								<?php endif ?>
							</a>
						<?php $n++; endforeach ?>
					</div>

					<?php if ($images->count() > 2): ?>
					<a class="open-gallery button-light" href="javascript:void(0)">Alle Bilder ansehen (<?php echo $images->count() ?>)</a>
					<?php endif ?>

				</div>
				<?php endif ?>
			</div>

			<!-- CREDITS -->
			<?php if ($page->credits()->isNotEmpty()): ?>
				<div class="columns">
					<div class="column is-5 programm__credits">
						<?php echo $page->credits()->kt() ?>
					</div>
				</div>
				<?php endif ?>
		</div>
	</div>



	<!-- TICKETS -->
	<?php echo $page->parent()->blocks()->toBlocks()->filterBy('blockid', 'tickets') ?>

</main>

<?php snippet('footer') ?>