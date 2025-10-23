<?php

$termine = new Structure();
foreach ($pages->find('programme')->children()->listed() as $programm) {
	$termine->add($programm->dates()->toStructure());
}
$termine->add($pages->find('termine-und-tickets')->dates()->toStructure());


$json = [];
// $json['pages'] = $data->pagination()->pages();
// $json['page']  = $data->pagination()->page();

foreach($termine as $termin) {
	// if ($termin->ausverkauft()->toBool() === false) {

		if ($termin->parent()->slug() == 'termine-und-tickets') {
	  	$programm = (string)$termin->title();
		  $programmlink = null;
	  } else {
	  	$programm = (string)$termin->parent()->title();
		  $programmlink = (string)$termin->parent()->url();
	  }

	  $json[] = array(
	    'datum'  => (string)$termin->datum(),
	    'wochentag'  => (string)$termin->wochentag(),
	    'uhrzeit'  => (string)$termin->uhrzeit(),
	    'location'  => (string)$termin->location(),
	    'ticketlink'  => (string)$termin->ticketlink(),
	    'ausverkauft' => (string)$termin->ausverkauft()->toBool(),
	    'programm'  => $programm,
		  'programmlink'  => $programmlink
	  );
	// }
}

echo json_encode($json);

?>

