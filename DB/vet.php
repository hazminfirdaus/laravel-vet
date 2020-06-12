<?php

require_once 'DB.php';
require_once 'DB_functions.php';

$success = connect('localhost', 'laravel-vet', 'root', 'rootroot');

DB::statement('SET FOREIGN_KEY_CHECKS=0;');

DB::statement('TRUNCATE TABLE `animals`');

DB::statement('TRUNCATE TABLE `owner`');

DB::statement('SET FOREIGN_KEY_CHECKS=1;');

$data = json_decode(file_get_contents('clients.json'), true);


//var_dump($data[0]["surname"]);
var_dump($data[0]);

// var_dump($data[0]["first_name"]["surname"]);

DB::insert("INSERT into `owner` (`firstname`, `surename`, `homeaddress`, `emailaddress`, `telephonenumber`, `info`) 
VALUES ($data[0]['firstname'], $data[0]['surename'], 'xxx' , 'emailaddress', 'telephonenumber','info')");

// $nr_of_inserted = DB::insert('INSERT into `users` (`id`, `name`) VALUES (1, "Dayle")');

//$data[0]["first_name"]




