<?php

$textpage = (object)[
  'backgroundVideo' =>
    $data->backgroundVideo()->isNotEmpty() ? $data->backgroundVideo()->value() : null,
  'title' => $data->title()->value(),
  'text' => $data->text()->kt()->value()
];

echo json_encode($textpage);

?>