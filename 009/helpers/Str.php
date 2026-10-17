<?php
class Str {
    static function upper (string $str): string{
        $str = trim($str);
        $str = strtoupper($str);

        return $str;
    }

    static function lower (string $str): string{
        $str = trim($str);
        $str = strtolower($str);

        return $str;
    }

}