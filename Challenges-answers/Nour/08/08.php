<?php
declare(strict_types=1);

$scores = [55, 42, 67, 80, 29];
var_dump(array_any($scores,function ($num){
    return $num <50;
}));

$products = ["Laptop", "Mouse", "Keyboard", "Monitor", "Printer", "Speaker", "Webcam"];
var_dump(array_chunk($products,3));

$names = ["Ahmed", "Mona", "Omar", "Sara"];
$scores = [85, 92, 78, 96];
var_dump(array_combine($names,$scores));

$store1 = ["Laptop", "Mouse", "Keyboard", "Monitor"];
$store2 = ["Mouse", "Monitor", "Printer"];
var_dump(array_diff($store1,$store2));

$ages = [12, 25, 17, 30, 16, 21, 14];
var_dump(array_filter($ages,function ($num){
    return $num>=18;
}));

$scores = [35, 45, 58, 72, 90, 40];
var_dump(array_find($scores,function ($num){
    return $num>=60;
}));

$products = ["Laptop", "Mouse", "Keyboard", "Monitor"];
var_dump(array_last($products));

$cart1 = ["Laptop", "Mouse"];
$cart2 = ["Keyboard", "Monitor", "Printer"];
var_dump(array_merge($cart1,$cart2));

$participants = ["Ahmed", "Mona", "Omar", "Sara", "Ali"];
$participant=array_rand($participants,2);
var_dump($participant);

$prices = [150, 250, 100, 300];
var_dump(array_reduce($prices,function($sum,$i){
    $sum+=$i;
    return $sum;
}));

$sales = [1200, 850, 2300, 1750, 900];
var_dump(array_sum($sales));

$keys = ["name", "age", "job"];
$values = ["Ahmed", 25, "Developer"];
$ary = array_combine($keys, $values);
var_dump($ary);

$products = ["Laptop", "Mouse", "Keyboard", "Monitor", "Printer"];
var_dump(count($products));

$scores = [85, 42, 96, 67, 73, 55];
var_dump(sort($scores));

