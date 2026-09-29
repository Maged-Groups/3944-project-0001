<?php
declare(strict_types=1);


function calc_total(float $price): float
{
    $total = $price + $price * 0.14;

    return $total;
}

$order_1 = calc_total(1000);

function greetings(string $name): void
{
    echo "Welcome $name";
}



