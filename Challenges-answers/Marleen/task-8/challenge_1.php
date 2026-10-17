<?php 
declare (strict_types=1);
// ## Challenge 1: Check if the Student Fails

$studentScores =
 [
    'Student 1' => 55,
    'Student 2' => 42,
    'Student 3' => 67,
    'Student 4' => 80,
    'Student 5' =>29
    ];
var_dump (array_any($studentScores, function (int $value): bool {
    return ($value)<=50;
}));