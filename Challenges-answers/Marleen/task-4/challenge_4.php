<?php
declare (strict_types=1);
$calculatePrice = fn (float $price, int $quantity): float => $price*$quantity;
$total_price_1 = $calculatePrice (500, 2);
echo "Total money paid is $total_price_1";
