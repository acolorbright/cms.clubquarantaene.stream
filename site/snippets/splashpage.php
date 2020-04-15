<?php

$data = (object)[
  'test'=> '123'
];
echo json_encode($data, JSON_HEX_QUOT | JSON_HEX_TAG);;


?>