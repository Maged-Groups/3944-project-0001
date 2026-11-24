<?php

const DB_HOST = 'localhost';
const DB_NAME = 'mysql3944';
const DB_USER = 'root';
const DB_PASSWORD = '';

$db = new mysqli(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);


$limit = rand(1,5);
$skip = rand(1,5);

var_dump($skip);
var_dump($limit);

$result = $db->query("SELECT * FROM `customers` LIMIT $limit,$skip");
// $result = $db->query("SELECT * FROM `customers` WHERE `customerNumber` IN(112,121,128)");

$customers = $result->fetch_all(MYSQLI_ASSOC);

echo '<pre>';

var_dump($result);
var_dump($customers);


