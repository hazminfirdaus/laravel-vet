<?php

require_once './DB.php';
require_once './DB_functions.php';

$success = connect('localhost', 'laravel_vet', 'root', 'rootroot');

DB::statement('SET FOREIGN_KEY_CHECKS=0;');

DB::statement('TRUNCATE TABLE `clients`');

DB::statement('TRUNCATE TABLE `pets`');

DB::statement('SET FOREIGN_KEY_CHECKS=1;');

$data = json_decode(file_get_contents('clients.json'), true);

//CLIENTS
$query_clients = 'INSERT INTO `clients` (`first_name`, `surname`) VALUES (?,?)';

$query_pets = 'INSERT INTO `pets` (`name`, `breed`, `weight`, `age`, `photo`, `client_id`) VALUES (?,?,?,?,?,?)';

foreach ($data as $client) {
  $first_name = $client['first_name'];
  $surname = $client['surname'];
  $test = insert($query_clients, [$first_name, $surname]);
  $client_id = DB::getPdo()->lastInsertId();
  foreach ($client['pets'] as $pet) {
    $name = $pet['name'];
    $breed = $pet['breed'];
    $weight = $pet['weight'];
    $age = $pet['age'];
    $photo = $pet['photo'];
    insert($query_pets, [$name, $breed, $weight, $age, $photo, $client_id]);
  }
}

echo "FINISHED \n";