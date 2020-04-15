<?php
header("Content-type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");

$json = (object) [
  'data' => (object)[
    'title' => $site->title()->value(),
    'settings' => (object)[
      'color' => $site->color()->value(),
      'showNewsletter' => $site->showNewsletter()->toBool()
    ],
    'event' => (object)[
      'start' => $site->startDay() . ' ' . $site->startTime() . ':00',
      'end' => $site->endDay() . ' ' . $site->endTime() . ':00',
    ],
    'content' => (object)[
      'text' => $site->splashpagetext()->kt()->value(),
      'imprint' => $site->imprint()->kt()->value()
    ],
    'features' => []
  ]
];

echo json_encode($json, JSON_HEX_QUOT | JSON_HEX_TAG);

?>