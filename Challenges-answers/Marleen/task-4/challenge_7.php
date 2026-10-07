<?php
declare (strict_types=1);
$calculateDiscount = fn (float $price, float $discount) : float => $price + ($price*$discount);
$finalPrice1 = $calculateDiscount (300, 0.1);
echo "The final price for item 1 is $finalPrice1";