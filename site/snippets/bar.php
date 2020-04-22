<?php

$services = [];

foreach ($data->services()->toStructure() as $service) {
  array_push($services, (object)[
    'title' => $service->title()->value(),
    'text' => $service->text()->kt()->value(),
    'linkText' => $service->linkText()->value(),
    'link' => $service->link()->value()
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