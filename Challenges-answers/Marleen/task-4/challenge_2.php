<?php
declare (strict_types=1);
$square_num = fn (float $num) : float => $num * $num;
$square_num1 = $square_num (5);
$square_num2 = $square_num (6);
echo  "The square of 5 is $square_num1 <br>";
echo  "The square of 6 is $square_num2";
