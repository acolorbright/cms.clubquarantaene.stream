<?php

$timetable = [];

foreach ($data->timetable()->toStructure() as $artist) {
  array_push($timetable, (object)[
    'name' => $artist->name()->value(),
    'start' => $artist->start()->value(),
    'end' => $artist->end()->value(),
    'day' => $artist->day()->value()
  ]);
}

echo json_encode($timetable, JSON_HEX_QUOT | JSON_HEX_TAG);

?>