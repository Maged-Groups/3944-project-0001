<?php
declare(strict_types=1);

// $old_prices = [1000,2000,1500,5000,10000];

// $add_100 = fn ($price) => $price + 100;


// // Add 100 to all prices
// $new_prices = array_map($add_100 , $old_prices );

// var_dump($new_prices);


// OR


$old_prices = [1000,2000,1500,5000,10000];

// Add 100 to all prices
$new_prices = array_map( fn ($price) => $price + 100 , $old_prices );

var_dump($new_prices);
