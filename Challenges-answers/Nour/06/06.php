<?php
declare(strict_types=1);

$greet = fn (string $name)=> "Hello, $name!";

$square =fn (float $num)=> $num * $num ;

$add=fn (float $num_1,float $num_2) => $num_1+$num_2;

$calculatePrice =fn (float $price,int $quantity)=>$price*$quantity;

$isAdult=fn (int $age) => $age>=18? true : false;

$getFullName=fn (string $fName,string $lName)=> $fName.$lName;

$calculateDiscount=fn (float $price ,float $dis)=>$price-$price*$dis;

$convertToMinutes=fn(int $hours)=>$hours*60;

$printUserInfo= fn (string $name,int $age,string $job) => "My Name is $name, I am $age year old, my role is $job";
           