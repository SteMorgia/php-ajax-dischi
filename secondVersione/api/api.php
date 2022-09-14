<?php

header("Content-Type: application/json");

include __DIR__ . '/../database.php';

$api = $database;

echo json_encode($api);

?>