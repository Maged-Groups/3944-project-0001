<?php
declare(strict_types=1);

// Checks if at least one score is under 50
$scores =[55, 42, 67, 80, 29];
$hasFailed = array_any($scores, fn($score) => $score < 50);
var_dump( $hasFailed ? "At least one student failed." : "All students passed.");


//Split Products into Groups
$products = ["Laptop", "Mouse", "Keyboard", "Monitor", "Printer", "Speaker", "Webcam"];
$groups = array_chunk($products, 3);
var_dump($groups);


//Combine Names and Scores
$names = ["Ahmed", "Mona", "Omar", "Sara"];
$scores = [85, 92, 78, 96];
$studentRecords = array_combine($names, $scores);
var_dump($studentRecords);


//Find Different Products
$store1 = ["Laptop", "Mouse", "Keyboard", "Monitor"];
$store2 = ["Mouse", "Monitor", "Printer"];
$uniqueToStore1 = array_diff($store1, $store2);
var_dump($uniqueToStore1);


//Filter Adult Users
$ages = [12, 25, 17, 30, 16, 21, 14];
$adults = array_filter($ages, fn($age) => $age >= 18);
var_dump($adults);


//Find the First Passing Score
$scores = [35, 45, 58, 72, 90, 40];
$firstPassing = array_find($scores, fn($score) => $score >= 60);
var_dump ($firstPassing !== null ? "First passing score: $firstPassing" : "No passing score found.");


//Get the First Product    =>
$products = ["Laptop", "Mouse", "Keyboard", "Monitor"];
$first_products = array_first($products);
var_dump ($first_products);


//Get the Last Product     =>
$products = ["Laptop", "Mouse", "Keyboard", "Monitor"];
$last_products = array_last($products);
var_dump ($last_products);


//Merge Shopping Carts
$cart1 = ["Laptop", "Mouse"];
$cart2 = ["Keyboard", "Monitor", "Printer"];
$mergedCart = array_merge($cart1, $cart2);
var_dump($mergedCart);


//Select Random Winners
$participants = ["Ahmed", "Mona", "Omar", "Sara", "Ali"];
$randomKeys = array_rand($participants, 2);
foreach ($randomKeys as $key) {
    var_dump ("Winner: " . $participants[$key]);
}


//Calculate the Total Shopping Cart Price
$prices = [150, 250, 100, 300];
$totalPrice = array_reduce($prices, fn($carry, $price) => $carry += $price);
var_dump ("Total Price: $totalPrice");


//Calculate Total Sales
$sales = [1200, 850, 2300, 1750, 900];
var_dump ("Total Sales: " . array_sum($sales));


//Create Variables from Array Keys
    $name = "Ahmed";
    $age = 25;
    $job = "Developer";
$user = compact('name', 'age', 'job');
var_dump($user);


//Count Available Products
$products = ["Laptop", "Mouse", "Keyboard", "Monitor", "Printer"];
var_dump ("Total Products: " . count($products));


//Sort Student Scores
$scores = [85, 42, 96, 67, 73, 55];
sort($scores);
var_dump ($scores);


//Filter and Count Successful Students
$scores = [45, 80, 55, 92, 60, 38, 75];
$successful = array_filter($scores, fn($score) => $score >= 60);
var_dump ("Number of successful students: " . count($successful));


//Merge and Sort Product Prices
$branch1 = [450, 200, 700];
$branch2 = [150, 900, 350];
$allPrices = array_merge($branch1, $branch2);
sort ($allPrices);
var_dump ($allPrices);


//Calculate the Average Score
$scores =[80, 75, 90, 65, 100];
$average = array_sum($scores) / count($scores);
var_dump ("Average Score: $average");


//Find Products Missing from a Store
$inventory = ["Laptop", "Mouse", "Keyboard", "Monitor", "Printer"];
$displayed = ["Laptop", "Keyboard", "Printer"];
$missingProducts = array_diff($inventory, $displayed);
var_dump ($missingProducts);


//Analyze Student Results
$scores = [35, 90, 45, 75, 60, 28, 100, 50];
// 1. Filter 
$passingScores = array_filter($scores, fn($score) => $score >= 50);

// 2. Count
var_dump ("Passing Students Count: " . count($passingScores));

// 3. Sum
var_dump ("Total of Passing Scores: " . array_sum($passingScores));

// 4. Sort
sort($passingScores);

// 5. First and Last
var_dump ("First passing score: " . array_first($passingScores));
var_dump ("Last passing score: " . array_last($passingScores));


//Check Product Availability
$prices = [250, 450, 800, 1500, 300];
$hasExpensiveItem = array_any($prices, fn($price) => $price > 1000);
var_dump ($hasExpensiveItem ? "Yes, items over 1000 exist." : "No items over 1000.");


//Find the First Affordable Product
$products = [
    ["name" => "Laptop", "price" => 1500],
    ["name" => "Mouse", "price" => 80],
    ["name" => "Keyboard", "price" => 120],
    ["name" => "USB Cable", "price" => 50]
];
$affordable = array_find($products, fn($item) => $item['price'] <= 100);
var_dump ($affordable);


//Group Students by Their Scores
$scores = [70, 85, 90, 65, 55, 78, 88, 92, 60, 73];
$groupedScores = array_chunk($scores, 4);
var_dump ($groupedScores);


//Generate a User Report
$names = ["Ahmed", "Mona", "Omar", "Sara", "Ali"];
$ages = [17, 24, 19, 16, 30];

// 1. Combine
$users = array_combine($names, $ages);

// 2. Filter
$adults = array_filter($users, fn($age) => $age >= 18);

// 3. Count
var_dump ("Adult count: " . count($adults));

// 4. Display First User
var_dump ("First adult is " . array_first($adults) . " with age " . array_first($adults));


//Store Sales Report
$products = ["Laptop", "Mouse", "Keyboard", "Monitor"];
$sales = [1200, 250, 450, 700];

// 1. Combine
$report = array_combine($products, $sales);

// 2. Total sales
var_dump ("Total Sales: " . array_sum($report));

// 3. Check if any product > 500
$hasHighSales = array_any($report, fn($sale) => $sale > 500);
var_dump ("Has item with sales > 500: " . ($hasHighSales ? 'Yes' : 'No'));

// 4. Sort sales amounts
sort($sales); 

// 5. Total unique products
var_dump ("Total items: " . count($report));


//Create a Random Prize Draw
$participants = ["Ahmed", "Mona", "Omar", "Sara", "Ali", "Nour", "Hassan"];
$winnerKeys = array_rand($participants, 3);
foreach ($winnerKeys as $key) {
    var_dump ("Winners:" . $participants[$key]);
}
var_dump ("Total entries in draw: " . count($participants));


//Calculate Total Order Value
$order = [
    ["price" => 100, "quantity" => 2],
    ["price" => 250, "quantity" => 3],
    ["price" => 50, "quantity" => 4]
];
$totalOrderValue = array_reduce($order, fn ($carry, $item) => $carry += ($item['price'] * $item['quantity']), 0);
var_dump ("Total Order Value: $totalOrderValue");


//Compare Two Classrooms
$classroomA = ["Ahmed", "Mona", "Omar", "Sara"];
$classroomB = ["Mona", "Ali", "Sara", "Nour"];

$onlyInA = array_diff($classroomA, $classroomB);
$onlyInB = array_diff($classroomB, $classroomA);
$allStudents = array_merge($classroomA, $classroomB);
var_dump ($onlyInA);
var_dump ($onlyInB);
var_dump ("Total Entries:" . count($allStudents));


//Inventory Summary
$products = [
    ["name" => "Laptop", "quantity" => 10],
    ["name" => "Mouse", "quantity" => 0],
    ["name" => "Keyboard", "quantity" => 3],
    ["name" => "Monitor", "quantity" => 7]
];

// 1. Filter quantities > 0
$inStock = array_filter($products, fn($p) => $p['quantity'] > 0);

// 2. Check if any quantity < 5
$hasLowStock = array_any($products, fn($p) => $p['quantity'] < 5);
var_dump ("Is any product running low (< 5)? " . ($hasLowStock ? 'Yes' : 'No'));

// 3. Calculate total quantity
$totalQuantity = array_sum(array_column($products, 'quantity'));
var_dump ("Total combined stock items: $totalQuantity");

// $totalQuantity = 0;
// foreach ($products as $product) {
//     extract($product); 
//     $totalQuantity += $quantity;
//     }
// var_dump ("Total combined stock items: $totalQuantity");

// 4. First and last products in filtered list
var_dump (array_first($inStock));
var_dump (array_last($inStock));


//Complete Student Performance Report
$names = ["Ahmed", "Mona", "Omar", "Sara", "Ali", "Nour", "Hassan"];
$scores = [85, 92, 45, 78, 98, 55, 67];

// 1. Combine student names with their scores
$studentReport = array_combine($names, $scores);

// 2. Filter students who scored 60 or above
$passingStudents = array_filter($studentReport, fn($score) => $score >= 60);

// 3. Count the students who passed
$passingCount = count($passingStudents);
var_dump ("Number of students who passed: $passingCount");

// 4. Calculate the total scores of the passing students
$totalPassingScores = array_sum($passingStudents);
var_dump ("Total scores of passing students: $totalPassingScores");

// 5. Check whether any student scored 95 or above
$hasTopStudent = array_any($studentReport, fn($score) => $score >= 95);
var_dump ("Did any student score 95 or above? " . ($hasTopStudent ? "Yes" : "No"));

// 6. Sort the passing scores in ascending order
asort($passingStudents);
var_dump($passingStudents);

// 7. Display the first and last passing scores
var_dump ("First passing score: " . array_first($passingScoresArray));
var_dump ("Last passing score: " . array_last($passingScoresArray));

// 8. Divide the passing scores into groups of 3
$groupedPassingStudents = array_chunk($passingStudents, 3);
var_dump($groupedPassingStudents);
