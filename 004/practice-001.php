<?php
declare(strict_types=1);

/*
 Create a function "sales" that:
    - receives an amount
    - Calculate the vat_amount based on the global constant = 0.14
    - Update the "total" global variable with the amount + the vat_amount
    - Print the total after the update

    total = 0;
    call the function with 1000
    total will be 1140

    call the function again with 2000
    total will be 1140 + 2280 = 3420
*/

$total = 100;
const VAT = 0.14;

function sales($amount)
{
    global $total;

    $vat_amount = $amount * VAT;

    $sales_total = $amount + $vat_amount;

    $total = $total + $sales_total;

    echo "Total inside the function is: $total<br>";

}

echo "Total in the start of the day is: $total<br>";

sales(1000);
// echo "Total outside the function is: $total<br>";

sales(2000);
sales(1000);
sales(400);