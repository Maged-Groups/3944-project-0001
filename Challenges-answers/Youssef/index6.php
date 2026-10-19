<?php 
declare(strict_types=1);
echo "<h3>Challenge 1</h3>";
//Create a PHP script that checks whether at least one student's score in the following array fails in the exam. A student passes if their score is 50 or above.
$scores = [55, 42, 67, 80, 30];
echo (array_any($scores, fn($score) => $score < 50)) ? "At least one student failed." : "All students passed.";
echo "<br>";

echo "<h3>Challenge 2</h3>";
//Create a PHP script that divides the following products into groups containing 3 products each. Display the resulting groups.
$products = ["Laptop", "Mouse", "Keyboard", "Monitor", "Printer", "Speaker", "Webcam"];
echo"<pre>";
print_r(array_chunk($products, 3));

echo "<h3>Challenge 3</h3>";
//Create a PHP script that combines the student names with their corresponding scores into one associative array.
$names = ["Ahmed", "Mona", "Omar", "Sara"];
$scores = [85, 92, 78, 96];
echo "<pre>";
print_r(array_combine($names, $scores));

echo "<h3>Challenge 4</h3>";
//Create a PHP script that displays the products available in the first store but not in the second store.
$store1 = ["Laptop", "Mouse", "Keyboard", "Monitor"];
$store2 = ["Mouse", "Monitor", "Printer"];
print_r(array_diff($store1, $store2));
//want in second store but not in first store
echo "<br>";     
print_r(array_diff($store2, $store1));

echo "<h3>Challenge 5</h3>";
//Create a PHP script that creates a new array containing only users whose ages are 18 or above.
$ages = [12, 25, 17, 30, 16, 21, 14];
print_r(array_filter($ages, fn($age) => $age >= 18));

echo "<h3>Challenge 6</h3>";
//Create a PHP script that finds the first score greater than or equal to 60 in the following array. Display the score if one exists.
$scores = [35, 45, 58, 72, 90, 40];
print_r(array_find($scores, fn($score) => $score >= 60) ?? "not find");//find the first score that is greater than or equal to 60, if not found return "not find"

echo "<h3>Challenge 7</h3>";
//Create a PHP script that retrieves and displays the first product in the following array.
$products = ["Laptop", "Mouse", "Keyboard", "Monitor"];
print_r(array_first($products));//retrieve the first product in the array, if not found return "not find"

echo "<h3>Challenge 8</h3>";
print_r(array_last($products));//retrieve the last product in the array, if not found return "not find"

echo "<h3>Challenge 9</h3>";
//Create a PHP script that combines the products from two shopping carts into a single array.
$cart1 = ["Laptop", "Mouse"];
$cart2 = ["Keyboard", "Monitor", "Printer"];
print_r(array_merge($cart1, $cart2));//merge two arrays into one array

echo "<h3>Challenge 10</h3>";
//Create a PHP script that randomly selects 2 different keys from the following array of participants. Display the names of the selected winners.
//important diary: array_rand() returns the keys of the selected elements, not the values. So we need to use array_map() to get the values of the selected keys.
$participants = ["Ahmed", "Mona", "Omar", "Sara", "Ali"];
print_r(array_rand($participants, 2));
print_r(array_map(fn($key) => $participants[$key], array_rand($participants, 2)));

echo "<h3>Challenge 11</h3>";
//Create a PHP script that calculates the total price of all products in the shopping cart by processing the prices one by one.
$prices = [150, 250, 100, 300];
print_r(array_reduce($prices, fn($total, $price) => $total + $price, 0));//calculate the total price of all products in the shopping cart by processing the prices one by one

echo "<h3>Challenge 12</h3>";
//Create a PHP script that calculates the total sales amount for a store.
$sales = [150, 250, 100, 300];
print_r(array_sum($sales));//calculate the total sales by summing all the values in the array

echo "<h3>Challenge 13</h3>";
//Create a PHP script that uses the keys of the following associative array to create variables with matching names and values. Display the created variables.
$name = "Ahmed";
$age = 25;
$job = "Developer";
print_r(compact("name", "age", "job"));//create variables with matching names and values from the keys of the associative array

echo "<h3>Challenge 14</h3>";
//Create a PHP script that displays the number of products available in the inventory.
$products = ["Laptop", "Mouse", "Keyboard", "Monitor", "Printer"];
var_dump (count($products));

echo "<h3>Challenge 15</h3>";
//Create a PHP script that sorts an array of scores in ascending order.
$scores = [85, 42, 96, 67, 73, 55];
print_r(sort($scores));//sort the scores in ascending order
var_dump($scores);

echo "<h3>Challenge 16</h3>";
//Create a PHP script that creates an array containing only students who scored 60 or above, then displays the number of successful students.
$scores = [45, 80, 55, 92, 60, 38, 75];
print_r(array_filter($scores, fn($score) => $score >= 60));//filter the scores to get only the scores that are greater than or equal to 60

echo "<h3>Challenge 17</h3>";
//Create a PHP script that merges the sales data from two branches into a single array.
$branch1 = [450, 200, 700];
$branch2 = [150, 900, 350];
$result=array_merge($branch1, $branch2);//merge the two arrays into one array
sort($result);//sort the merged array in ascending order
print_r($result);

echo "<h3>Challenge 18</h3>";
//Create a PHP script that calculates the average score of the students in the following array.
$scores = [80, 75, 90, 65, 100];
$avg=array_sum($scores)/count($scores);//calculate the average score by dividing the sum of the scores by the number of scores
echo " the average score of the students in the following array : $avg";

echo "<h3>Challenge 19</h3>";
//Create a PHP script that displays products that exist in the main inventory but are missing from the displayed products list.
$inventory = ["Laptop", "Mouse", "Keyboard", "Monitor", "Printer"];
$displayed = ["Laptop", "Keyboard", "Printer"];
$a=(array_diff($inventory, $displayed));//display the products that are in the inventory but not displayed
echo "The products that are in the inventory but not displayed are: " . implode(", ", $a);
/*echo "The products in the inventory but not displayed are: ";// or other type 
print_r($a);*/

echo "<h3>Challenge 20</h3>";
$scores = [35, 90, 45, 75, 60, 28, 100, 50];
$a=array_filter($scores, fn($score) => $score >= 50);//filter the scores to get only the scores that are greater than or equal to 50
echo "Filters the scores to keep only scores of 50 or above. :".implode("-",$a)."<br>"; 
// Counts the students who passed.
$c=count($a);
echo "Counts the students who passed :$c"."<br>";
//counts the students who failed =count array -count success
$failed = count($scores) - count($a)."<br>";
echo "Students who failed: $failed";
$t=array_sum($a);
echo "Calculates the total of the passing scores:$t"."<br>";
sort($a);
echo "Sorts the passing scores in ascending order :".implode("-", $a)."<br>";
print_r(array_first($a)."<br>");
print_r(array_last($a));

echo "<h3>Challenge 21</h3>";
//Create a PHP script that checks whether any product in the inventory has a price greater than 1000.
$prices = [250, 450, 1800, 1500, 300];
$a = array_any($prices, fn($price) => $price > 1000);
print_r($a);

echo "<h3>Challenge 22</h3>";
//Create a PHP script that finds the first product whose price is less than or equal to 100.
$products = [
    ["name" => "Laptop", "price" => 1500],
    ["name" => "Mouse", "price" => 80],
    ["name" => "Keyboard", "price" => 120],
    ["name" => "USB Cable", "price" => 50]
    ];
    $result = array_find($products, fn($product) => $product["price"] <= 100);
    echo $result["name"] . " - " . $result["price"];
    
echo "<h3>Challenge 23</h3>";
//Create a PHP script that divides the following student scores into groups containing 4 scores each. Display all groups.
$scores = [70, 85, 90, 65, 55, 78, 88, 92, 60, 73];
print_r(array_chunk($scores,4));

echo "<h3>Challenge 24</h3>";
$names = ["Ahmed", "Mona", "Omar", "Sara", "Ali"];
$ages = [17, 24, 19, 16, 30];
$c=(array_combine($names, $ages));
print_r($c);
$f=(array_filter($c,fn($age)=>$age<18));
print_r($f);
print_r(count($f));
print_r(array_first($f));

echo "<h3>Challenge 25</h3>";
$products = ["Laptop", "Mouse", "Keyboard", "Monitor"];
$sales = [1200, 250, 450, 700];
print_r(array_combine($products, $sales));
print_r(array_sum($sales));
echo "<br>";
print_r(array_any($sales,fn($sale)=>$sale>500));
sort($sales);
echo "<br>";
echo "Sorts the sales amounts in ascending order :" . implode("-", $sales);
echo "<br>";
print_r(count($sales));

echo "<h3>Challenge 26</h3>";
$participants = [
    "Ahmed",
    "Mona",
    "Omar",
    "Sara",
    "Ali",
    "Nour",
    "Hassan"
    ];
$random=(array_rand($participants,3));
print_r($random);
echo "<br>";
foreach ($random as $key) {
    echo $participants[$key] . "<br>";
}
echo "<br>";
print_r(count($participants));
echo "<br>";
print_r(count($random));

echo "<h3>Challenge 27 </h3>";//want more explain.
echo "<b>more important</b><br>";
$order = [
    ["price" => 100, "quantity" => 2],
    ["price" => 250, "quantity" => 3],
    ["price" => 50, "quantity" => 4]
];
$total = array_reduce($order,fn($carry, $item) => $carry + ($item["price"] * $item["quantity"]),0
);
echo "Total Order Value: " . $total;

echo "<h3>Challenge 27 </h3>";
$classroomA = ["Ahmed", "Mona", "Omar", "Sara"];
$classroomB = ["Mona", "Ali", "Sara", "Nour"];
print_r(array_diff($classroomA, $classroomB));
echo "<br>";
print_r(array_diff($classroomB, $classroomA));
echo "<br>";
$c=(array_combine($classroomA, $classroomB));
print_r($c);
echo "<br>";
// Merge both classrooms in one array meaning new array = array 1 + array 2
$c = array_merge($classroomA, $classroomB);
print_r($c);
echo "<br>";
// Remove duplicate students
$result = array_values(array_unique($c));
print_r($result);
//
print_r(array_diff($c, $classroomA));
echo "<br>";
//Counts the total number of entries in the combined array.
print_r(count(array_diff($c, $classroomB)));