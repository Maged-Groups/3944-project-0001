<?php

require_once 'helpers/index.php';
 
$username = '  maged Yaseen   ';
dump($username);

// turn this username into clean uppercase

// $username = trim($username);
// dump($username);

// $username = strtoupper($username);
// dump($username);

// $username = strtolower($username);
// dump($username);


$usernameL = Str::lower($username);
dump($usernameL);

$usernameU = Str::upper($username);
dump($usernameU);