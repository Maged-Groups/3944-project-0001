<?php
declare (strict_types=1);
require_once 'helpers/index.php';
// ## Challenge 7: Check Adult Ages

$ages = [15, 18, 7, 70, 30, 14];
dump ($ages);

$isAdult = Num:: isAdult($ages);
dump ($isAdult);
