<?php
declare(strict_types=1);

// Loops (for loop)

var_dump ("Before For Loop");

for(  $i = 1  ;  $i <= 10   ;  $i++   ) { //  1
    var_dump ("Inside For Loop i = $i"); // 1
}
    
var_dump ("After For Loop");

var_dump($i);