<?php
declare (strict_types=1);

// ## Challenge 16: Filter and Count Successful Students

$scores = [45, 80, 55, 92, 60, 38, 75];

$highScores = array_filter ($scores, fn($score) => $score >= 60);
var_dump ($highScores);

var_dump (count ($highScores));