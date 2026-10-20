<?php
declare (strict_types=1);

class Str {
static function upper (string $str): string {
    $str = trim ($str);
    $str = strtoupper ($str);
    return ($str);

}
static function lower (string $str): string {
    $str = trim ($str);
    $str = strtolower ($str);
    return ($str);
}

static function clean (string $str): array|string {
$str = trim ($str);
$str = explode (' ', $str);
$str = array_filter ($str);
$str = implode (' ', $str);

return ($str);
}

static function title (string $str): array|string {
    $str = Str:: clean($str);
    $str = strtolower ($str);
    $str = ucwords ($str);
    return ($str);
}
static function initials (string $str) : array|string {
    $str = Str:: upper($str);
    $str = explode(' ', $str);
    $str = array_map (fn($word)=> $word[0], $str);
    $str = implode ('.', $str);
    return ($str);
}
}