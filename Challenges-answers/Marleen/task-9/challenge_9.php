<?php
declare (strict_types=1);

require_once 'helpers/index.php';

// ## Challenge 9: Calculate a Discounted Price

// The method should accept a product price and a discount percentage, then return the final price after applying the discount.

$productPrice1 = 1000;
$discount1 = 10;
dump ($productPrice1);
dump ($discount1);

$discountPrice1 = Num:: discountedPrice($productPrice1, $discount1);
dump ($discountPrice1);


$productPrice2 = 1800;
$discount2 = 15;

$discountPrice2 = Num:: discountedPrice ($productPrice2, $discount2);
dump ($discountPrice2);