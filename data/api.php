<?php

include __DIR__ . '/db.php';

header('Content-Type: application/json');

$response = [
  'albums' => $database,
  'genres' => []
];

echo json_encode($response);

?>
