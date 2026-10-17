<?php
declare(strict_types=1);
// ## Challenge 9: Merge Shopping Carts
$cart1 = ["Laptop", "Mouse"];
$cart2 = ["Keyboard", "Monitor", "Printer"];
$allCarts = array_merge ($cart1, $cart2);
var_dump ($allCarts);