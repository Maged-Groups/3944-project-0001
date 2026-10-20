<?php
declare (strict_types=1);
require_once 'helpers/index.php';
// ## Challenge 10: Calculate an Average

$array = [10, 20, 45, 80];
dump ($array);

$average = Num:: average(...$array);
dump ($average);