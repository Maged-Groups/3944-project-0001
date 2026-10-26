<?php
class Num{
    public static function isPassingScore(int $score): bool {
        return $score >= 50;
    }
    public static function isAdult(int $score): bool {
        return $score >= 18;
    }
    public static function isBetween(int $number , int $min, int $max): bool {
        return $number >= $min && $number <= $max;
    }
    public static function discountedPrice(float $price,float $discountedPrice) :float {
        $discountedPrice = $price * ($discountedPrice/100);
        $finalPrice = $price - $discountedPrice;
        return $finalPrice;
    }
    public static function average(array $group){
         array_sum($group);
         return array_sum($group)/count($group);

    }
}
