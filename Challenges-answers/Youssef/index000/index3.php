<?php 
//loops 
echo "1/Create a PHP script that uses a for loop to print the numbers from 1 to 20. <br>";
for ($i = 1; $i <= 20; $i++) {
    echo "The number is: $i <br>";
}
////////////////////////////////////////////////
echo "2/Create a PHP script that uses a for loop to print the numbers from 10 down to 1.";
for($i = 10; $i >= 1; $i--) {
    echo "The number is: $i <br>";
}
///////////////////////////////////////////////
echo "3/Create a PHP script that uses a for loop to calculate and print the sum of the numbers from 1 to 100. <br>";
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo "The sum is: $sum <br>";
////////////////////////////////////////////
echo "4/Create a PHP script that uses a while loop to print all even numbers from 2 to 30. <br>";
$i = 2;
while ($i <= 30) {
    echo "The even number is: $i <br>";
    $i += 2;
}
//////////////////////////////////////////
echo "5/Create a PHP script that uses a while loop to print the numbers from 5 to 50, increasing by 5 each time. <br>";
$i = 5;
while ($i <= 50) {
    echo "The number is: $i <br>";
    $i += 5;
}
/////////////////////////////////////////
echo"6/Create a PHP script that uses a do...while loop to print the numbers from 1 to 10. <br>";
$i = 1;
do {
    echo "The number is: $i <br>";
    $i++;
} while ($i <= 10);
////////////////////////////////////////
echo "6/Create a PHP script with a do...while loop whose condition is initially false. Print a message inside the loop and observe how many times the loop body executes. <br>";
$i = 0;
do {
    echo "This message will be printed at least once. <br>";
} while ($i > 0);
/////////////////////////////////////////
echo "7/Create a PHP script with a do...while loop whose condition is initially false. Print a message inside the loop and observe how many times the loop body executes. <br>";
do{
    echo "hello world <br>";
}while(false);

////////////////////////////////////////////////////
/*echo "Create a PHP script that uses a for loop to print the multiplication table of 5 from 1 to 10. <br>";//add diary
for ($i = 1; $i <= 10; $i++) {
    $result = 5 * $i;
    echo "5 x $i = $result <br>";
} while ($i > 0);*/

///////////////////////////////////////////////////
/*$cities = array("New York", "Los Angeles", "Chicago", "Houston", "Phoenix");
foreach ($cities as $city) {
    echo "City: $city <br>";
}*/ //the same of result of the code for .
echo "8/Create an indexed array containing five city names. Use a for loop to print each city on a separate line.<br>";
$cities = array("New York", "Los Angeles", "Chicago", "Houston", "Phoenix");
for($i = 0; $i < count($cities); $i++) {
    echo "City: " . $cities[$i] . "<br>";
}
////////////////////////////////////////////////
echo "9/Create an indexed array containing these numbers: 12, 8, 25, 10, and 5. Use a for loop to calculate and print their total.<br>";
$numbers = array(12, 8, 25, 10, 5);
$sum = 0;
for($i = 0; $i < count($numbers); $i++) {
    $sum += $numbers[$i];
}
echo "The total is: $sum <br>";
////////////////////////////////////////////////
echo "10/Create an indexed array containing at least six numbers. Use a for loop to find and print the largest number in the array.<br>";// important for loop to find the largest number in an array
$numbers = array(12, 8, 25, 10, 5, 30);
$largest = $numbers[0];
for($i = 1; $i < count($numbers); $i++) {
    if($numbers[$i] > $largest) {
        $largest = $numbers[$i];
    }
}
echo "The largest number is: $largest <br>";
////////////////////////////////////////////////
echo "11/Create an indexed array containing five favorite movies. Use a for loop to print the movie names in reverse order.<br>";
$movies = array("The Shawshank Redemption", "The Godfather", "Pulp Fiction", "The Dark Knight", "Forrest Gump");
for($i = count($movies) - 1; $i >= 0; $i--) {
    echo "Movie: $movies[$i] <br>";
}
/////////////////////////////////////////////////
echo "12/Create an indexed array containing at least five product names and a second indexed array containing their prices in the same order. Use a for loop to print each product name alongside its price.<br>";//like it
$products = array("Laptop", "Mouse", "Keyboard", "Monitor", "Headphones");
$prices = array(1000, 25, 100, 300, 150);
for($i = 0; $i < count($products); $i++) {
    echo "Product: $products[$i] - Price: $$prices[$i] <br>";
}
/////////////////////////////////////////////////
echo "13/Create an indexed array containing at least five numbers. Use a for loop to calculate and print the average of the numbers.<br>";//like it 
$numbers = array(12, 8, 25, 10, 5);
$sum = 0;
for($i = 0; $i < count($numbers); $i++) {
    $sum += $numbers[$i];
}
$average = $sum / count($numbers);
echo "The average is: $average <br>";
//////////////////////////////////////////////////
function createUser(string $name, $role = "user", $active = true)  {
    echo "Name: $name <br>";
    echo "Role: $role <br>";
    echo "Active: " . ($active ? "true" : "false") . "<br>";
}
createUser(name: "Youssef");
