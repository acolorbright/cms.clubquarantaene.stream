<?php

$buttonArray = [];

foreach ($data->buttons()->toStructure() as $button) {
  array_push($buttonArray, (object)[
    'label' => $button->buttonLabel()->value(),
    'type' => $button->buttonType()->value()
  ]);
}


$infoObj = (object)[
  'title' => $data->title()->value(),
  'text' => $data->text()->value(),
  'type' => $data->_key()->value(),
  'callbackName' =>
    $data->callbackName()->isNotEmpty() ? $data->callbackName()->value() : null,
  'buttons' => $buttonArray,
  'isValidated' => false
];

echo json_encode($infoObj);

?>