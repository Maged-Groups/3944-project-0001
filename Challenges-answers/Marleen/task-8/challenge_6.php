<?php
declare (strict_types=1);
// ## Challenge 6: Find the First Passing Score
$scores = [35, 45, 58, 72, 90, 40];
$certainScores = array_find ($scores, fn($score)=> $score >=60);
var_dump ($certainScores);