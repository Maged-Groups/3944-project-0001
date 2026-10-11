<?php
declare(strict_types=1);

// 1. greet
$greet = fn ($name) => "Hello $name";
$greet_1 = $greet("Michael");
echo "$greet_1<br>";

// 2. square
$square = fn ($num) => $num * $num;
$square_1 = $square(4);
echo "$square_1<br>";

// 3. add
$add = fn ($a, $b) => $a + $b;
$add_1 = $add(4 , 17);
echo "$add_1<br>";

// 4. calculatePrice
$calculatePrice = fn ($price, $quantity) => $price * $quantity;
$calculatePrice_1 = $calculatePrice(40 , 5);
echo "total price is $calculatePrice_1<br>";

// 5. isAdult
$isAdult = fn ($age) => $age >= 18 ? 'true' : 'false';
$isAdult_1 = $isAdult(14);
echo "$isAdult_1<br>";

// 6. getFullName
$getFullName = fn ($firstName, $lastName) => "full name : $firstName $lastName";
$getFullName_1 = $getFullName("Michael" , "Victor");
echo "$getFullName_1<br>";

// 7. calculateDiscount
$calculateDiscount = fn ($price, $discount) => $price - ($price * $discount);
$calculateDiscount_1 = $calculateDiscount(400 , 0.25);
echo "final price = $calculateDiscount_1<br>";

// 8. convertToMinutes
$convertToMinutes = fn ($hours) => $hours * 60;
$convertToMinutes_1 = $convertToMinutes(4);
echo "$convertToMinutes_1 m <br>";

// 9. printUserInfo
$printUserInfo = fn ($name, $age, $job) => "My Name is $name, I am $age year old, my role is $job";
$printUserInfo_1 = $printUserInfo("Michael" , 26 , "web dev");
echo "$printUserInfo_1<br>";
