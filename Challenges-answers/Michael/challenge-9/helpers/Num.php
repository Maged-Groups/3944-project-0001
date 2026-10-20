<?php
declare(strict_types=1);

class Num {
    // Challenge 6
    static function isPassingScore($score): bool {
        return $score >= 50;
    }

    // Challenge 7
    static function isAdult($age): bool {
        return $age >= 18;
    }

    // Challenge 8
    static function isBetween($num, $min, $max): bool {
        return $num >= $min && $num <= $max;
    }

    // Challenge 9
    static function discountedPrice($price, $discountPercent) {
        return $price - ($price * ($discountPercent / 100));
    }

    // Challenge 10
    static function average(array $numbers) {
        return empty($numbers) ? 0 : array_sum($numbers) / count($numbers);
    }

    // Challenge 28 Requirement
    static function formatPrice($price): string {
        return number_format($price, 2);
    }
}