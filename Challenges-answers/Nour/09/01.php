<?php
declare(strict_types=1);
require_once 'helpers/index.php';

$format=Str::upper(' hello world ');
Dump($format);

$format=Str::lower(' PHP DEVELOPER  ');
Dump($format);

$format=Str::clean("   Ahmed     Ali    Hassan   ");
Dump($format);

$format=Str::title("  aHMED aLI hASSAN  ");
Dump($format);

$format=Str::initials("ahmed ali hassan");
Dump($format);

$check=Num::isPassingScore(45);
Dump($check);
$check=Num::isPassingScore(70);
Dump($check);
$check=Num::isPassingScore(50);
Dump($check);

$check=Num::isAdult(16);
Dump($check);
$check=Num::isAdult(18);
Dump($check);
$check=Num::isAdult(25);
Dump($check);

$check=Num::isBetween(50, 10, 100);
Dump($check);
$check=Num::isBetween(150, 10, 100);
Dump($check);

$check=Num::discountedPrice(1000, 20);
Dump($check);

$arr=[80, 90, 70, 100];
$check=Num::average($arr);
Dump($check);
$arr=[];
$check=Num::average($arr);
Dump($check);

$scores = [75, 90, 42, 68];
$check=Arr::hasFailingScore($scores);
Dump($check);

$scores = [45, 80, 30, 95, 60];
$check=Arr::passingScores($scores);
Dump($check);

$scores = [35, 42, 65, 90];
$check=Arr::firstPassingScore($scores);
Dump($check);

$names = ["ahmed", "mONA", "omar", "sara"];
$scores = [85, 92, 78, 96];
$format=Arr::studentScores($names,$scores);
Dump($format);

$products = [
    "laptop",
    "mouse",
    "keyboard",
    "monitor",
    "printer",
    "speaker",
    "webcam"
];
$format=Arr::groupProducts($products,2);
Dump($format);