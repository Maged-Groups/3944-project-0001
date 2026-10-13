<?php
declare(strict_types=1);

// Indexed Arrays

// Old
$firstArray = array(5,6,9,2,7,0);

// New
$secondArray = [5,6,9,2,7,0];

// var_dump($firstArray, $secondArray);

// Add to array
array_push($firstArray, 10, 20,30,0,50,60,90,9);
// var_dump($firstArray);
array_unshift($firstArray, 1,2,3,5,6,9,9);
// var_dump($firstArray);
array_unshift($firstArray, 55);
array_unshift($firstArray, 60);
array_unshift($firstArray, 70);
// var_dump($firstArray);

// Remove from array
array_pop($secondArray);
// var_dump($secondArray);

array_shift($secondArray);
// var_dump($secondArray);

// Update the array
// $cars = ['Ferrari', 'Jaguar', 'BMW', '128', '132', 'Lada', 'Mercedes', 'Logan', 'Audi'];
// var_dump($cars);

// $a1 = array_splice($cars, 2);
// var_dump($cars);
// var_dump($a1);

// $a2 = array_splice($cars, 2, 4);
// var_dump($cars);
// var_dump($a2);

// $a3 = array_splice($cars, 2, 0, ['Cadilac', 'Porsche']);
// var_dump($cars);
// var_dump($a3);

// $a4 = array_splice($cars, 2, 5, ['Cadilac', 'Porsche']);
// var_dump($cars);
// var_dump($a4);


// copy from array
$cars = ['Ferrari', 'Jaguar', 'BMW', '128', '132', 'Lada', 'Mercedes', 'Logan', 'Audi'];
var_dump($cars);
$x = array_slice($cars,1,2, true);
var_dump($cars);
var_dump($x);
