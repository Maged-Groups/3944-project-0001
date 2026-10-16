<?php
declare (strict_types=1);
// ## Challenge 13: Create Variables from Array Keys

    $name = "Ahmed";
    $age = 25;
    $job = "Developer";

$keys = array ("name", "age");

$users = compact($keys, "job");
var_dump ($users);