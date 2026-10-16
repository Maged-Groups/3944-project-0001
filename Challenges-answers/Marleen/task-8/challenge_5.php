<?php
declare (strict_types=1);
// ## Challenge 5: Filter Adult Users
$ages = [12, 25, 17, 30, 16, 21, 14];
$adult = array_filter ($ages, fn($age)=> $age >=18); 
var_dump ($adult);
