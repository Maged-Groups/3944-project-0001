<?php
declare (strict_types=1);
$addition = fn (float $num1, float $num2) : float => $num1+$num2;
$addition_1 = $addition (45,60);
echo "Adding 45 and 60 equals $addition_1";