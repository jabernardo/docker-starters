<?php

require_once('./vendor/autoload.php');

$client = new MongoDB\Client('mongodb://root:example@mongo:27017/?ssl=false');
$database = $client->test;
$collection = $database->messages;

$insertOneResult = $collection->insertOne([
  'message' => 'World'
]);

printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
