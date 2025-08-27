<?php snippet('header') ?>

<main class="has-bg-yellow">

	<?php echo $page->blocks()->toBlocks() ?>

	<div class="content-block pt-0">
		<div class="container">
			<div class="columns">
				<div class="column is-8">
					<?php if($success): ?>
					<?php echo $page->textsuccess()->kt() ?>
					<?php else: ?>
						<?php if(isset($alerts['error'])): ?>
						<p class="has-bg-red p-2 has-text-white mb-5"><?php echo $alerts['error'] ?></p>
						<?php endif ?>
						<?php snippet('formular-broadcast') ?>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>

</main>

<?php snippet('footer') ?>