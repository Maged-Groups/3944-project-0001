<?php
declare (strict_types=1);
// ## Challenge 4: Format User Names


require_once 'helpers/index.php';


$userName = '   mArleen   naBil   NaSsif  ';
dump ($userName);

$userNameFormated = Str:: title ($userName);
dump ($userNameFormated);

