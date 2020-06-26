<?php

$services = [];

foreach ($data->services()->toStructure() as $service) {

  $linksArr = [];
  foreach ($service->buttons()->toStructure() as $link) {
    array_push($linksArr, (object)[
      'linkText' => $link->linkText()->value(),
      'link' => $link->link()->value()
    ]);
  }

  array_push($services, (object)[
    'title' => $service->title()->value(),
    'text' => $service->text()->kt()->value(),
    'links' => $linksArr
  ]);
}

$textpage = (object)[
  'backgroundVideo' =>
  $data->backgroundVideo()->isNotEmpty() ? $data->backgroundVideo()->value() : null,
  'title' => $data->contentTitle()->value(),
  'services' => $services
];

echo json_encode($textpage);

?>