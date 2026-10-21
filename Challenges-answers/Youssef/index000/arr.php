<?php
declare(strict_types= 1);
class Arr{
    public static function hasFailingScore(array $score):bool{
        return array_any($score,fn($score)=>$score>=50?true:false);
    }
      //this way important favorite
    public static function hasFailingScoree(array $score):bool{
        return array_any($score,fn($score) => !\Num::isPassingScore($score));
    }
    //this way important favorite
    public static function passingScores(array $scores):array{
        return array_filter($scores, "Num::isPassingScore");
    }
    public static function firstPassingScore(array $scores):mixed {
        return array_find($scores, "Num::isPassingScore");
    }
    public static function studentScores(array $names,array $scores):array{
        $names = array_map("Str::title", $names); 
        return array_combine($names, $scores);
    }
    public static function groupProducts(array $names){
        $m=array_map("Str::title", $names);
        return array_chunk($m,2);

    }

}