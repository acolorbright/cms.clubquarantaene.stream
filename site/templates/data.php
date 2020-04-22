<?php
// go('/panel');
header("Content-type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");

$json = (object)[];

foreach ($page->children()->unlisted() as $child) {
  $id = $child->uid();
  $json->$id = json_decode(
    snippet($child->intendedTemplate(), ['data' => $child], true)
  );
}

echo json_encode($json, JSON_HEX_QUOT | JSON_HEX_TAG);

?>