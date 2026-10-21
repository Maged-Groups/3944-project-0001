<?php
require_once('str.php');
require_once('num.php');
require_once('arr.php');
echo"<h3>Challenge 1: Create a String Formatter</h3>";
$txt="hello world";
$upper=\Str::upper($txt);
echo"$upper";

echo"<h3>Challenge 2: Create a Lowercase Converter</h3>";
$txt="PHP DEVELOPER";
$lower=\Str::lower($txt);
echo"$lower";

echo"<h3>Challenge 3: Normalize Text</h3>";
$txt= "Ahmed     Ali    Hassan ";
$clean=\Str::clean($txt);
echo "$clean";

echo"<h3>Challenge 4: Format User Names</h3>";
$txt= " aHMED aLI hASSAN";
$clean=\Str::clean($clean);
echo "$clean";
echo "<br>";
$lower=\Str::lower($txt);
echo"$lower";
echo "<br>";
$ucwords=\Str::ucwords($lower);
echo "$ucwords";

echo"<h3>Challenge 5: Generate Name Initials</h3>";
$txt= "ahmed ali hassan";
$initials=\Str::initials($txt);
echo "$initials";

echo"<h3>Challenge 6: Check Passing Scores</h3>";
var_dump(\num::isPassingScore(45)); // false
var_dump(\num::isPassingScore(70)); // true
var_dump(\num::isPassingScore(50)); // true

echo"<h3>Challenge 7: Check Adult Ages</h3>";
var_dump(\num::isAdult(16)); // fale
var_dump(\num::isAdult(18)); // true
var_dump(\num::isAdult(25)); // true

echo"<h3>Challenge 8: Check a Numeric Range</h3>";
echo (\num::isBetween(50, 10, 100) ? "true" : "false") . "<br>" .
(\num::isBetween(150, 10, 100) ? "true" : "false");

echo"<h3>Challenge 9: Calculate a Discounted Price</h3>";
echo(\num::discountedPrice(1000,20));

echo"<h3>Challenge 10: Calculate an Average</h3>";
echo \num::average([80, 90, 70, 100]);

echo"<h3>Challenge 11: Check for Failing Students</h3>";
var_dump(\arr::hasFailingScore([75, 90, 42, 68]));
echo"<br>";  
var_dump(\num::isPassingScore(42));

echo"<h3>Challenge 12: Get Passing Scores</h3>";
print_r(\arr::passingScores([45, 80, 30, 95, 60]));

echo"<h3>Challenge 13: Find the First Passing Score</h3>";
print_r(\arr::firstPassingScore([35, 42, 65, 90]));

echo"<h3>Challenge 14: Create a Student Score List</h3>";
$names = ["ahmed", "mONA", "omar", "sara"];
$scores = [85, 92, 78, 96];
print_r(\arr::studentScores($names, $scores));

echo"<h3>Challenge 15: Split Products into Groups</h3>";
$products = [
    "laptop",
    "mouse",
    "keyboard",
    "monitor",
    "printer",
    "speaker",
    "webcam"
];
echo "<pre>";
var_dump(\arr::groupProducts($products));
echo "</pre>";
