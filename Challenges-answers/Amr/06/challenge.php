<?php

// 1. greet
$greet = fn($name) => "Hello, $name!";
echo $greet("Ahmed") . "<br>";

// 2. square
$square = fn($num) => $num * $num;
echo $square(5) . "<br>";

// 3. add
$add = fn($a, $b) => $a + $b;
echo $add(3, 7) . "<br>";

// 4. calculatePrice
$calculatePrice = fn($price, $quantity) => $price * $quantity;
echo $calculatePrice(20, 3) . "<br>";

// 5. isAdult
$isAdult = fn($age) => $age >= 18;
echo $isAdult(20) ? "true<br>" : "false<br>";
echo $isAdult(15) ? "true<br>" : "false<br>";

// 6. getFullName
$getFullName = fn($firstName, $lastName) => "$firstName $lastName";
echo $getFullName("Ali", "Hassan") . "<br>";

// 7. calculateDiscount
$calculateDiscount = fn($price, $discount) => $price - ($price * $discount / 100);
echo $calculateDiscount(100, 20) . "<br>";

// 8. convertToMinutes
$convertToMinutes = fn($hours) => $hours * 60;
echo $convertToMinutes(2) . "<br>";

// 9. printUserInfo
$printUserInfo = fn($name, $age, $job) =>
    "My Name is $name, I am $age year old, my role is $job";
echo $printUserInfo("Sara", 25, "Developer") . "<br>";