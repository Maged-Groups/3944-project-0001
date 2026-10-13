<?php
declare (strict_types=1);
$values = [12, 8, 25, 10, 5];
$total=0;
for ($i=0 ;$i <count($values)  ; $i ++ ){
    global $total;
$total += $values[$i];
}
var_dump ($total);