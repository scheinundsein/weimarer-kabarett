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
	  $json[] = array(
	    'datum'  => (string)$termin->datum(),
	    'wochentag'  => (string)$termin->wochentag(),
	    'uhrzeit'  => (string)$termin->uhrzeit(),
	    'location'  => (string)$termin->location(),
	    'ticketlink'  => (string)$termin->ticketlink(),
	    'programm'  => (string)$termin->parent()->title(),
	    'programmlink'  => (string)$termin->parent()->url(),
	    'ausverkauft' => (string)$termin->ausverkauft()->toBool(),
	  );
	// }
}

echo json_encode($json);

?>

