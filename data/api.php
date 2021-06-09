<?php

include __DIR__ . '/db.php';

$genres =[];
$albums = empty($_GET['genre']) || $_GET['genre'] === 'all' ? $database : [];

foreach($database as $album){
  if(!in_array($album['genre'],$genres)){
    $genres[] = $album['genre'];
  }
}
//var_dump($genres);die;

if(count($albums) === 0){

  foreach($database as $album){
    if($album['genre'] === $_GET['genre']){
      $albums[] = $album;
    }
  }
}



header('Content-Type: application/json');

$response = [
  'albums' => $albums,
  'genres' => $genres
];

echo json_encode($response);

?>
