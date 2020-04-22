<?php
// go('/panel');
header("Content-type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");

$json = (object) [
  'activeStepIndex' => 0,
  'steps' => json_decode(snippet('queueSteps', ['data' => $page], true))
];

echo json_encode($json, JSON_HEX_QUOT | JSON_HEX_TAG);

?>