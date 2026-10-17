<?php
declare(strict_types=1);

// ## Challenge 18: Calculate the Average Score

$scores = [80, 75, 90, 65, 100];
$total = array_sum ($scores);
var_dump ($total);

$howMany = (count($scores));

var_dump ($howMany);

$average = $total/$howMany;
var_dump ($average);