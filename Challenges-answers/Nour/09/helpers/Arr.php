<?php
declare(strict_types=1);
class Arr{
    static function hasFailingScore(array $arr):bool{
        $res=array_any($arr,function($i){return $i>=50;});
        return $res;
    }
    static function passingScores(array $arr):array{
        $res=array_filter($arr,function($i){return Num::isPassingScore($i);});
        return $res;
    }
    static function firstPassingScore(array $arr):float{
        $res=array_find($arr,function($i){return Num::isPassingScore($i);});
        return $res;
    }
    static function studentScores(array $arr1,array $arr2):array{
        $narr1=array_map(function($i){
            return Str::title($i);
        },$arr1);
        return array_combine($narr1,$arr2);
    }
    static function groupProducts(array $arr,int $size):array{
        $res=array_map(function($i){
            return Str::title($i);
        },$arr);
        return array_chunk($res,$size);
    }
    

}