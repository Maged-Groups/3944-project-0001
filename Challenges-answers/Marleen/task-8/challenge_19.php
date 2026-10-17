<?php
declare (strict_types=1);

// ## Challenge 19: Find Products Missing from a Store

$inventory = ["Laptop", "Mouse", "Keyboard", "Monitor", "Printer"];
$displayed = ["Laptop", "Keyboard", "Printer"];

var_dump ( array_diff ($inventory, $displayed));
