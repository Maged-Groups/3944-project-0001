<?php
declare (strict_types=1);
// ## Challenge 20: Analyze Student Results

$scores = [35, 90, 45, 75, 60, 28, 100, 50];


$passScores = array_filter ($scores, fn ($score)=> $score >=50);
var_dump ($passScores);
echo ('---------------------------');
$passStudents = count ($passScores);
var_dump ($passStudents);

$sumPassingScores = array_sum ($passScores);
var_dump ($sumPassingScores);

$sorting = sort($passScores);
var_dump ($passScores);

$leastPassScore = array_first($passScores);
var_dump($leastPassScore);

$greatestPassScore = array_last($passScores);
var_dump($greatestPassScore);

