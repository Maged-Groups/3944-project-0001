<?php
declare(strict_types=1);
class Num{
    static function isPassingScore (float|array $num) : bool|array {
$num = array_map(fn($num)=> $num >=50, $num);
return ($num);
    } 
    static function isAdult (float|array $num) : array|bool {
        $num = array_map (fn($num) => $num >=18, $num );
        return ($num);
    }
    static function isBetween(int|float $num, int|float $min, int|float $max): bool{
        $num = $num >= $min && $num <=$max;
        return ($num);
    }
    static function discountedPrice(float $price, float $discount): float{

    $finalPrice = $price - ($price*($discount/100));
    return ($finalPrice);
    }
    static function average (float ...$num): float{
        $total = array_sum ($num);
        $howMany = count($num);
        $average = $total/$howMany;
        return ($average);

    }
}
