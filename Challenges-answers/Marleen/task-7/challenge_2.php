<?php
declare (strict_types=1);
$calculatePrice = function (float $price, float $tax, float $discount) : float
{
$totalPaid = ($price+($price * $tax) - ($price*$discount));

return $totalPaid;

};
$price_1 = $calculatePrice (price: 300, tax: 0.14, discount: 0.1);
var_dump ($price_1);