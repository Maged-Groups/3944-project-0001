<?php
declare (strict_types=1);
require_once 'helpers/index.php';
// ## Challenge 8: Check a Numeric Range

$numRange1 = [50, 10, 100];
dump ($numRange1);

$numRange2 = [150, 10, 100];
dump ($numRange2);

$isBetween1 = Num:: isBetween (...$numRange1);
dump ($isBetween1);


$isBetween2 = Num:: isBetween (...$numRange2);
dump ($isBetween2);