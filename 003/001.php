<?php

// Variables

/*
total income = 1500

total customers = 0

customer 1 order = 1500


\\ For each new order 
total income = total income + new order

total customers = total customers + 1

total income = 0 + 100

total income = 1500

total customers = 0 + 1

total customers = 1

// Variable namings
totalincome // lowercase
TOTALINCOME // UPPERCASE

// Best practices
total_income // snake_case -> Best for varibales and functions
totalIncome // camelsCase -> Best for varibales and functions
TOTAL_INCOME // UPPER_SNAKE_CASE -> Best for constants
TotalIncome // PascalCase -> Best for classes

*/


// define a variable 
$user_name = 'Marleen Nabil'; // Best in general string "text"
$user_title = "Full-Stack Web Developer"; // Best in mixed string and variables

// $msg = 'My Name is $user_name, I am a $user_title';
$msg = "My Name is $user_name, I am a $user_title";

echo $msg;