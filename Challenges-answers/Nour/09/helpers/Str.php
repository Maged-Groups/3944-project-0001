<?php 
declare(strict_types=1);
class Str{
    static function upper(string $str):string {
        $str=trim($str);
        $str=strtoupper($str);
        return $str;
    }
    static function lower(string $str):string {
        $str=trim($str);
        $str=strtolower($str);
        return $str;
    }
    static function clean(string $str):string {
        $str=trim($str);
        $str=explode(' ',$str);
        $str=array_filter($str);
        $str=implode(' ',$str);
        return $str;
    }
    static function title(string $str):string{
        $str=Str::clean($str);
        $str=strtolower($str);
        $str=ucwords($str);
        return $str;
    }
    static function initials(string $str):string{
        $str=explode(' ',$str);
        $str=array_map(fn($str)=> $str[0],$str);
        $str=implode('.',$str);
        $str=Str::upper($str);
        return $str;
    }

}