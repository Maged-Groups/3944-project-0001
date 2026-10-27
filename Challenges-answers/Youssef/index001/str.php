<?php
class Str{
    public static function upper(string $str):string{
     $str=trim($str);
     return strtoupper($str);
    }
    public static function lower(string $str):string{
        $str=strtolower($str);
        return strtolower($str);
    }
    /*public static function clean(string $str):string{
        return trim($str);
    }*/
      public static function clean(string $str):string{
        $str=trim($str);
        $word=explode(" " ,$str);
        $word=array_filter($word);
        return implode(" ",$word);
      }  
      public static function ucwords(string $str): string {
          return ucwords($str);
          }
    public static function initials(string $str): string {
        $str=trim($str);
        $words=explode(" ",$str);
        $words = array_map(fn($word) => strtoupper($word[0]), $words);
        return implode(".",$words);
    }
     public static function title(string $str): string {
        return ucwords(strtolower($str));
    }
}