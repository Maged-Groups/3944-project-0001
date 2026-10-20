<?php
declare(strict_types=1);
require_once 'helpers/index.php';

// Part 1: String Utility Class
Dump ( "Ch 1 (upper): " . Str::upper(" hello world "));
Dump ( "Ch 2 (lower): " . Str::lower(" PHP DEVELOPER "));
Dump ( "Ch 3 (clean): " . Str::clean("   Ahmed    Ali   Hassan   "));
Dump ( "Ch 4 (title): " . Str::title(" aHMED aLI hASSAN "));
Dump ( "Ch 5 (initials): " . Str::initials("ahmed ali hassan"));

// Part 2: Numeric Utility Class
Dump ( "Ch 6 (isPassingScore - 45): " . (Num::isPassingScore(45) ? 'true' : 'false'));
Dump ( "Ch 6 (isPassingScore - 70): " . (Num::isPassingScore(70) ? 'true' : 'false'));
Dump ( "Ch 7 (isAdult - 16): " . (Num::isAdult(16) ? 'true' : 'false'));
Dump ( "Ch 7 (isAdult - 25): " . (Num::isAdult(25) ? 'true' : 'false'));
Dump ( "Ch 8 (isBetween - 50): " . (Num::isBetween(50, 10, 100) ? 'true' : 'false'));
Dump ( "Ch 8 (isBetween - 150): " . (Num::isBetween(150, 10, 100) ? 'true' : 'false'));
Dump ( "Ch 9 (discountedPrice): " . Num::discountedPrice(1000, 20));
Dump ( "Ch 10 (average): " . Num::average([80, 90, 70, 100]));
Dump ( "Ch 10 (average - empty): " . Num::average([]));

// Part 3: Array Utility Class
Dump ( "Ch 11 (hasFailingScore): " . (Arr::hasFailingScore([75, 90, 42, 68]) ? 'true' : 'false'));
Dump ( "Ch 12 (passingScores): " . json_encode(Arr::passingScores([45, 80, 30, 95, 60])));
Dump ( "Ch 13 (firstPassingScore): " . (Arr::firstPassingScore([35, 42, 65, 90]) ?? 'null'));

$names = ["ahmed", "mONA", "omar", "sara"];
$scores = [85, 92, 78, 96];
Dump ( "Ch 14 (studentScores): " . json_encode(Arr::studentScores($names, $scores), JSON_PRETTY_PRINT));

$products = ["laptop", "mouse", "keyboard", "monitor", "printer", "speaker", "webcam"];
Dump ( "Ch 15 (groupProducts): " . json_encode(Arr::groupProducts($products, 3), JSON_PRETTY_PRINT));

$store1 = ["Laptop", "Mouse", "Keyboard", "Monitor"];
$store2 = ["Mouse", "Printer", "Monitor"];
Dump ( "Ch 16 (uniqueProducts): " . json_encode(Arr::uniqueProducts($store1, $store2)));

$cart1 = ["laptop", "wireless mouse"];
$cart2 = ["mechanical keyboard", "usb cable"];
Dump ( "Ch 17 (mergeCarts): " . json_encode(Arr::mergeCarts($cart1, $cart2)));

$participants = ["ahmed", "mona", "omar", "sara", "ali"];
Dump ( "Ch 18 (randomWinners): " . json_encode(Arr::randomWinners($participants, 2)));

$order = [
    ["price" => 100, "quantity" => 2],
    ["price" => 250, "quantity" => 3],
    ["price" => 50, "quantity" => 4]
];
Dump ( "Ch 19 (orderTotal): " . Arr::orderTotal($order));

$users = [
    ["name" => "ahmed ali", "age" => 17],
    ["name" => "mONA hassan", "age" => 24],
    ["name" => "omar adel", "age" => 19],
    ["name" => "sara mohamed", "age" => 16]
];
Dump ( "Ch 20 (adultUsers): " . json_encode(Arr::adultUsers($users), JSON_PRETTY_PRINT));

$ch21Products = [
    ["name" => "laptop", "price" => 1500],
    ["name" => "mouse", "price" => 80],
    ["name" => "keyboard", "price" => 120],
    ["name" => "usb cable", "price" => 50]
];
Dump ( "Ch 21 (firstAffordableProduct): " . json_encode(Arr::firstAffordableProduct($ch21Products, 100)));

$ch22Products = [
    ["name" => "laptop", "quantity" => 10],
    ["name" => "mouse", "quantity" => 0],
    ["name" => "keyboard", "quantity" => 3],
    ["name" => "monitor", "quantity" => 7],
    ["name" => "printer", "quantity" => 2]
];
Dump ( "Ch 22 (inventoryReport): " . json_encode(Arr::inventoryReport($ch22Products), JSON_PRETTY_PRINT));

$classroomA = ["ahmed", "mona", "omar", "sara"];
$classroomB = ["mona", "ali", "sara", "nour"];
Dump ( "Ch 23 (compareClassrooms): " . json_encode(Arr::compareClassrooms($classroomA, $classroomB), JSON_PRETTY_PRINT));

$salesProducts = ["laptop", "mouse", "keyboard", "monitor"];
$salesAmounts = [1200, 250, 450, 700];
Dump ( "Ch 24 (salesReport): " . json_encode(Arr::salesReport($salesProducts, $salesAmounts), JSON_PRETTY_PRINT));

$studentNames = ["ahmed", "mona", "omar", "sara", "ali"];
$studentScores = [85, 42, 78, 55, 96];
Dump ( "Ch 25 (passingStudentsReport): " . json_encode(Arr::passingStudentsReport($studentNames, $studentScores), JSON_PRETTY_PRINT));

$duplicateProducts = [" laptop ", "MOUSE", "Laptop", " keyboard ", "mouse"];
Dump ( "Ch 26 (normalizeProducts): " . json_encode(Arr::normalizeProducts($duplicateProducts)));

Dump ( "Ch 27 (discountedOrderTotal): " . Arr::discountedOrderTotal($order, 10));

$catalogProducts = [
    ["name" => " wireless MOUSE ", "price" => 250],
    ["name" => "mechanical keyboard", "price" => 750.5]
];
Dump ( "Ch 28 (formatCatalog): " . json_encode(Arr::formatCatalog($catalogProducts), JSON_PRETTY_PRINT));

$completeInventory = [
    ["name" => "laptop", "price" => 1000, "quantity" => 10],
    ["name" => "mouse", "price" => 50, "quantity" => 0],
    ["name" => "keyboard", "price" => 80, "quantity" => 3]
];
Dump ( "Ch 29 (completeInventoryReport): " . json_encode(Arr::completeInventoryReport($completeInventory), JSON_PRETTY_PRINT));
