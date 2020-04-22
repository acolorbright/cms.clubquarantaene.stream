<?php

$infoObj = (object)[
  'title' => $data->title()->value(),
  'text' => $data->text()->value(),
  'type' => $data->_key()->value(),
  'callbackName' =>
    $data->callbackName()->isNotEmpty() ? $data->callbackName()->value() : null,
  'buttons' => [
    (object)[
      'label' => $data->buttonLabel()->value(),
      'type' => 'yes'
    ]
  ],
  'isValidated' => false
];

echo json_encode($infoObj);

?>