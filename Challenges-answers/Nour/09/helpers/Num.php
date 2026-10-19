<?php
declare(strict_types=1);
class Num{
    static function isPassingScore(float $i):bool{
        if($i>=50) return true;
        else return false;
    }
    static function isAdult(int $i):bool {
        if($i>=18) return true;
        else return false;
    }
    static function isBetween(float $i,float $min,float $max):bool {
        if($i>$min){
            if($i<$max){
                return true;
            }
            else return false;
        }
        else return false;
    }
    static function discountedPrice(float $i,float $dis){
        return $i=$i-$i*$dis/100;
    }
    static function average(array $arr):float{
        if(count($arr)==0) return 0;
        $i=array_sum($arr)/count($arr);
        return $i;
    }
}