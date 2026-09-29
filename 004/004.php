<?php
declare(strict_types=1);

function calc_total(float $price)
{
    $vat = $price * 0.14;

    $total = $price + $vat;

    echo "Total: $total<br>";
}


calc_total(1000);
calc_total(500.50);
// calc_total('2440');



function user(string $name, int $age)
{

}


function student(string $name, float|string $grade)
{

}