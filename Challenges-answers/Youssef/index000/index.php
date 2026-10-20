<?php
require_once('str.php');
require_once('num.php');
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
var_dump(\Num::isPassingScore(45)); // false
var_dump(\Num::isPassingScore(70)); // true
var_dump(\Num::isPassingScore(50)); // true

echo"<h3>Challenge 7: Check Adult Ages</h3>";
var_dump(\Num::isAdult(16)); // fale
var_dump(\Num::isAdult(18)); // true
var_dump(\Num::isAdult(25)); // true

echo"<h3>Challenge 8: Check a Numeric Range</h3>";


