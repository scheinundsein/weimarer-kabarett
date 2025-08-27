<?php
// return function($kirby, $site, $pages, $page) {
//   $futureDates = array_filter($page->dates()->yaml(), function($var) {
//     $date = strtotime($var['datum']);
//     return $date > time();
//   });

//   $fieldData = yaml::encode($futureDates);

//   try {
//     $page->update(array('dates' => $fieldData));
//   } catch(Exception $e) {
//     return $e->getMessage();
//   }
// };
