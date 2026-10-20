<?php
declare(strict_types=1);

class Str {
    // Challenge 1
    static function upper(string $str): string {
        return strtoupper(trim($str));
    }

    // Challenge 2
    static function lower(string $str): string {
        return strtolower(trim($str));
    }

    // Challenge 3
    static function clean(string $str): string {
        $trimmed = trim($str);
        return implode(' ', array_filter(explode(' ', $trimmed), fn($val) => $val !== ''));
    }

    // Challenge 4
    static function title(string $str): string {
        return ucwords(strtolower(self::clean($str)));
    }

    // Challenge 5
    static function initials(string $str): string {
        $words = explode(' ', self::clean($str));
        $initials = array_map(fn($word) => self::upper($word[0]), $words);
        return implode('.', $initials);
    }
}