<?php

$timetable = [];

foreach ($data->timetable()->toStructure() as $artist) {
  array_push($timetable, (object)[
    'name' => $artist->name()->value(),
    'start' => $artist->start()->value(),
    'end' => $artist->end()->value(),
    'startDay' => $artist->startDay()->value(),
    'endDay' => $artist->day()->value(),
    'img' => $artist->portrait()->first()->toFile()->filename()
  ]);
}

echo json_encode($timetable, JSON_HEX_QUOT | JSON_HEX_TAG);

?>