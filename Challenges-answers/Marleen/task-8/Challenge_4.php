<?php
declare(strict_types=1);
// ## Challenge 4: Find Different Products
$store1 = ["Laptop", "Mouse", "Keyboard", "Monitor"];
$store2 = ["Mouse", "Monitor", "Printer"];
var_dump (array_diff ($store1, $store2));