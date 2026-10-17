<?php
declare (strict_types=1);
// ## Challenge 17: Merge and Sort Product Prices

$branch1 = [450, 200, 700];
$branch2 = [150, 900, 350];

$allBranches = array_merge($branch1, $branch2);
var_dump ($allBranches);
sort ($allBranches);
var_dump($allBranches);
