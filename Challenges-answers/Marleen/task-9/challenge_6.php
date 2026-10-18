<?php
declare (strict_types=1);
require_once 'helpers/index.php';

$scores = [45, 69, 50, 75, 90];
dump ($scores);
$scorePass = Num:: isPassingScore($scores);
dump ($scorePass);