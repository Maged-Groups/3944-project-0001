<?php
declare(strict_types=1);


// Parameter with default value

$total = function (float $price, float $discount = 0) :void {
    var_dump($price);
    var_dump($discount);
};

$total(1000,100);
$total(500);