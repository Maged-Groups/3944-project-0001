<?php
/* Given a number, calculate and display its half, quarter, double, square, and cube. */

$num_1 = 2;
$half_1 = $num_1 / 2;
$quarter_1 = $num_1 / 4;
$double_1 = $num_1 * 2;
$square_1 = $num_1 * $num_1;
$cube_1 = $num_1 * $num_1 * $num_1;
$msg_1 = "Number $num_1 has these results: its half is $half_1, its quarter is $quarter_1, its double is $double_1, its square is $square_1, and its cube is $cube_1.";
echo "$msg_1<br>";

$num_2 = 5;
$half_2 = $num_2 / 2;
$quarter_2 = $num_2 / 4;
$double_2 = $num_2 * 2;
$square_2 = $num_2 * $num_2;
$cube_2 = $num_2 * $num_2 * $num_2;
$msg_1 = "Number $num_1 has these results: its half is $half_1, its quarter is $quarter_1, its double is $double_1, its square is $square_1, and its cube is $cube_1.";
echo "$msg_1<br>";

$num_3 = 10;
$half_3 = $num_3 / 2;
$quarter_3 = $num_3 / 4;
$double_3 = $num_3 * 2;
$square_3 = $num_3 * $num_3;
$cube_3 = $num_3 * $num_3 * $num_3;
$msg_1 = "Number $num_1 has these results: its half is $half_1, its quarter is $quarter_1, its double is $double_1, its square is $square_1, and its cube is $cube_1.";
echo "$msg_1<br>";

$num_4 = 12;
$half_4 = $num_4 / 2;
$quarter_4 = $num_4 / 4;
$double_4 = $num_4 * 2;
$square_4 = $num_4 * $num_4;
$cube_4 = $num_4 * $num_4 * $num_4;
$msg_1 = "Number $num_1 has these results: its half is $half_1, its quarter is $quarter_1, its double is $double_1, its square is $square_1, and its cube is $cube_1.";
echo "$msg_1<br>";

$num_5 = 15;
$half_5 = $num_5 / 2;
$quarter_5 = $num_5 / 4;
$double_5 = $num_5 * 2;
$square_5 = $num_5 * $num_5;
$cube_5 = $num_5 * $num_5 * $num_5;
$msg_1 = "Number $num_1 has these results: its half is $half_1, its quarter is $quarter_1, its double is $double_1, its square is $square_1, and its cube is $cube_1.";
echo "$msg_1<br>";

$num_6 = 50;
$half_6 = $num_6 / 2;
$quarter_6 = $num_6 / 4;
$double_6 = $num_6 * 2;
$square_6 = $num_6 * $num_6;
$cube_6 = $num_6 * $num_6 * $num_6;
$msg_1 = "Number $num_1 has these results: its half is $half_1, its quarter is $quarter_1, its double is $double_1, its square is $square_1, and its cube is $cube_1.";
echo "$msg_1<br>";


// Functions

function sample_function($num)
{
    echo "I received from you number: $num<br>";
}


sample_function(2);
sample_function(20);
sample_function(10);
sample_function(15);

function calculate($num)
{
    $half = $num / 2;
    $quarter = $num / 4;
    $double = $num * 2;
    $square = $num * $num;
    $cube = $num * $num * $num;
    $powered = $num ** $num;
    $msg = "Number $num has these results: its half is $half, its quarter is $quarter, its double is $double, its square is $square, its cube is $cube, and its powered is $powered.";
    echo "$msg<br>";
}

calculate(2);
calculate(5);
calculate(10);
calculate(100);
calculate(50);
calculate(20);
calculate(200);
calculate(3);
calculate(9);
calculate(7);
calculate(8);

