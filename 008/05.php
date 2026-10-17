<?php
declare(strict_types=1);


// Array loop


// $cars = [
//     0 => 'Ferrari',
//     1 => 'Jaguar',
//     2 => 'BMW'
// ];

// foreach ( $cars as $key => $value  ){
//     var_dump($key, $value);
// }


$products = [
    'Laptop' => '55000',
    'iPhone 18 Pro Max' => '100000',
    'Mouse' => '125',
    'keyboard' => '220'
];

foreach ( $products as $key => $value  ){
    var_dump($key, $value);
}

var_dump($products);


$users = [
    'Marleen',
    'Youssef',
    'Nour',
    'Michael',
    'Momen'
];


foreach ( $users as $key => $value  ){
    var_dump($key, $value);
}
