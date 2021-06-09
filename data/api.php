<?php

include __DIR__ . '/db.php';

$genres =[];

foreach($database as $album){
  if(!in_array($album['genre'],$genres)){
    $genres[] = $album['genre'];
  }
}
var_dump($genres);die;




header('Content-Type: application/json');

$response = [
  'albums' => $database,
  'genres' => []
];

echo json_encode($response);

?>
