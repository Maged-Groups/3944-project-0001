<?php 
$sum=0;
for($i= 1; $i <= 100; $i++){
    $sum += $i;
     $average = $sum/$i;
}
echo $sum;
echo "<br>";
echo $average;

$i=2;
while($i<= 30){
    echo $i . "<br>";
    $i+=2;
};
/////////////////////////////////////////////////////////////
$cars=array('BMW','Toyota','Honda','Mercedes','Kia','Hyundai');
for($i= 0; $i<count($cars); $i++){
    echo $cars[$i] . "<br>";
}
// want in for loop to print only the even index of the array numbers
for($i= 0; $i<count($cars); $i++){
    echo $cars[$i] . "<br>";
    $i+=2;
}
$numbers=array(1,2,3,4,5,6,7,8,9,10);
//want in for loop to print only the numbers that are even %==0
for($i= 0; $i<count($numbers); $i++){
    if($numbers[$i]%2==0){
        echo $numbers[$i] . "<br>";
    }
    else{
        echo "This number is odd" . "<br>";
    }
}
///////////////////////////////////////// want print largest number in the array
$largest=$numbers[0];
for($i= 1; $i<count($numbers); $i++){
    if($numbers[$i]>$largest){
        $largest=$numbers[$i];
    }
}
echo "The largest number is: " . $largest . "<br>";
/////////////////////////////////////////////////////
$products = array(
    ['name' => 'Laptop', 'price' => 1000],
    ['name' => 'Phone', 'price' => 500],
    ['name' => 'Tablet', 'price' => 300],
    ['name' => 'Monitor', 'price' => 200],
    ['name' => 'Keyboard', 'price' => 50]
);
for($i= 0; $i<count($products); $i++){
    echo "Product Name: " . $products[$i]['name'] . "<br>";
    echo "Product Price: " . $products[$i]['price'] . "<br>";
}
function createUser(string $name, $role = "user", $active = true)  {
    echo "Name: $name <br>";
    echo "Role: $role <br>";
    echo "Active: " . ($active ? "true" : "false") . "<br>";
}
createUser(name: "Youssef");