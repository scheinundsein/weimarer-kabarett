<div class="content-block py-0 hero <?php e($block->splitscreen()->toBool() === true, 'is-splitscreen') ?> has-bg-<?php echo $block->bgcolor() ?>">

		<?php if ($page->intendedTemplate() == 'home'): ?>
		<div class="hero__logo">
			<!-- <img src="<?php echo url('assets/images/weimarerkabarett-logo-animation.svg') ?>" alt=""> -->
			<img src="<?php echo url('assets/images/logo-weimarer-kabarett-bunt.svg') ?>" alt="">
		</div>
		<?php endif ?>

		<?php if ($bg = $block->bg()->toFile()): ?>
		<div class="hero__img">
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

		<div class="hero__text container">
			<div class="columns">
				<div class="column <?php e($block->splitscreen()->toBool() === true, 'is-5 is-offset-7', 'is-6 is-offset-3') ?>">
					<div class="hero__text-inner">
						<?php echo $block->text()->kt() ?>
					</div>
				</div>
			</div>
		</div>

</div>