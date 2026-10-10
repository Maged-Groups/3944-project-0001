<?php
declare(strict_types=1);

// Loops (do While loop)

$i = 100; 

do { 
    var_dump ("Inside For Loop i = $i"); 

    if (false) {
        $i += 2;
    } else {
        $i += 3;
    }
} while( $i <= 10 );

var_dump($i);