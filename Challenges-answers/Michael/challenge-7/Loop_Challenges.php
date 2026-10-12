<?php
declare(strict_types=1);

// Count with a for Loop
for ($i = 1; $i <= 20; $i++) {
    echo $i . " ";
}
echo "<br>";

// Count Backward with a for Loop
for ($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}
echo "<br>";

// Calculate a Sum with a for Loop
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo "The sum of numbers from 1 to 100 is: $sum<br>";

// Print Even Numbers with a while Loop
$i = 2;
while ($i <= 30) {
    echo $i . " ";
    $i += 2;
}
echo "<br>";

// Count in Steps with a while Loop
$i = 5;
while ($i <= 50) {
    echo $i . " ";
    $i += 5;
}
echo "<br>";

// Run a do...while Loop
$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i <= 10);
echo "<br>";

// Execute at Least Once
$condition = false;
do {
    echo "This message prints exactly once, even if the condition is falseecho .<br>";
} while ($condition);
echo "<br>";

// Print Array Values with a for Loop
$cities = ["Cairo","Tokyo", "Paris", "New York", "London"];
for ($i = 0; $i < count($cities); $i++) {
    echo $cities[$i] . "<br>";
}
echo "<br>";

// Calculate the Total of Array Values
$numbers =[12, 8, 25, 10, 5];
$total = 0;
for ($i = 0; $i < count($numbers); $i++) {
    $total += $numbers[$i];
}
echo "The total of array values is: $total<br>";

// Find the Largest Number in an Array
$mixedNumbers =[12, 8, 25, 10, 5, 70, 31];
$largest = $mixedNumbers[0];

for ($i = 1; $i < count($mixedNumbers); $i++) {
    if ($mixedNumbers[$i] > $largest) {
        $largest = $mixedNumbers[$i];
    }
}
echo "The largest number in the array is: $largest <br>";

// Print Array Values in Reverse
$movies = ["Inception", "The Matrix", "Interstellar", "Gladiator", "Avatar"];
for ($i = count($movies) - 1; $i >= 0; $i--) {
    echo $movies[$i] . "<br>";
}
echo "<br>";

// Display Product Names and Prices
$products = ["Laptop", "Mouse", "Keyboard", "Monitor", "Headphones"];
$prices = [899.99, 25.50, 45.00, 199.99, 79.99];
for ($i = 0; $i < count($products); $i++) {
    echo "Product: " . $products[$i] . " | Price: $" . $prices[$i] . "<br>";
}
