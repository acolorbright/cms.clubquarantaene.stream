<?php
// go('/panel');
header("Content-type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");

$json = (object) [
  'testExample' => (object) [
    '123' => '456'
  ],
  'test' => json_decode(snippet('test', [], true))
];

echo json_encode($json, JSON_HEX_QUOT | JSON_HEX_TAG);

?>