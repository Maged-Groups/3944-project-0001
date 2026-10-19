<?php
declare(strict_types=1);

// ## Challenge 11: Calculate the Total Shopping Cart Price


// function sum ($carry, $item){
//     $carry += $item;
//     return $carry;
// }
$prices = [150, 250, 100, 300];

$total = array_reduce ($prices, fn ($carry, $item) => $carry +=$item);
var_dump ($total);
