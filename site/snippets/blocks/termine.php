
<?php

$termine = new Structure();
foreach ($pages->find('programme')->children()->listed() as $programm) {
	$termine->add($programm->dates()->toStructure());
}
$termine->add($pages->find('termine-und-tickets')->dates()->toStructure());

$hausvorstellungen = $termine->filterBy('gastspiel', '==', 'false');
$gastspiele = $termine->filterBy('gastspiel', '==', 'true');

?>



<div class="content-block termine has-bg-white">
	<div class="container">

		<?php if ($block->text()->isNotEmpty()): ?>
		<div class="columns is-centered has-text-centered">
			<div class="column is-8">
				<?php echo $block->text()->kt() ?>
			</div>
		</div>
		<?php endif ?>

		<!-- Filter -->
		<?php if ($hausvorstellungen->count() > 0 && $gastspiele->count() > 0): ?>
		<div id="termine-navi" class="termine__filter mb-6">
			<div>
				<p><a href="#hausvorstellungen">Hausvorstellungen</a></p>
			<p><a href="#gastspiele">Gastspiele</a></p>
			</div>

	  	<!-- <label class="radio">
	  	  <input value="hausvorstellung" type="radio" name="filter" checked />
	  	  Hausvorstellungen
	  	</label>
	  	<label class="radio">
	  	  <input value="gastspiel" type="radio" name="filter" />
	  	  Gastspiele
	  	</label>
	  	<label class="radio">
	  	  <input value="all" type="radio" name="filter" />
	  	  Alle
	  	</label> -->
		</div>
		<?php endif ?>

		<!-- Termine -->
		<?php if ($hausvorstellungen->count() > 0): ?>
		<div class="termine__category" id="hausvorstellungen">
			<h2>Hausvorstellungen</h2>
			<?php snippet('termine-hausvorstellungen', ['items' => $hausvorstellungen]) ?>
		</div>
		<?php endif ?>

		<?php if ($gastspiele->count() > 0): ?>
		<div class="termine__category" id="gastspiele">
			<h2>Gastspiele</h2>
			<?php snippet('termine-gastspiele', ['items' => $gastspiele]) ?>
		</div>
		<?php endif ?>



	</div>
</div>