<?php

$queue = [];

// Start and end are fixed...
$queueStart = (object)[
  'title' => $site->title()->value(),
  'type' => 'start',
  'isValidated' => false
];
$queueEnd = (object)[
  'title' => 'Decision',
  'type' => 'decision',
  'isValidated' => false
];

array_push($queue, $queueStart);

foreach($data->mybuilder()->toBuilderBlocks() as $block):
  $blockBuilderObj = json_decode(
    snippet('queue-steps/' . $block->_key(), array('data' => $block), true)
  );
  array_push($queue, $blockBuilderObj);
endforeach;

array_push($queue, $queueEnd);

echo json_encode($queue);

?>