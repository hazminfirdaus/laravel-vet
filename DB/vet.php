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
//var_dump($data[0]);
var_dump($data);
echo gettype($data[0]["first_name"]);
// var_dump($data[0]["first_name"]["surname"]);

// DB::insert("INSERT into `owner` (`firstname`, `surname`, `homeaddress`, `emailaddress`, `telephonenumber`, `info`) VALUES ('" . $data[$i]['first_name'] . " ' , ' " . $data[$i]['surname'] . " ', 'xxx', 'emailaddress', 'telephonenumber', 'info')");

for($i = 0; $i < 2000; $i++){
     DB::insert("INSERT into `owner` (`firstname`, `surname`, `homeaddress`, `emailaddress`, `telephonenumber`, `info`) VALUES ('" . $data[$i]['first_name'] . " ' , ' " . $data[$i]['surname'] . " ', 'xxx', 'emailaddress', 'telephonenumber', 'info')");
}

//DB::insert("INSER")

// $nr_of_inserted = DB::insert('INSERT into `users` (`id`, `name`) VALUES (1, "Dayle")');

//$data[0]["first_name"]




