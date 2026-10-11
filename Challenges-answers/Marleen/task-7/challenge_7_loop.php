<?php
declare (strict_types=1);
$i=1;
do{
    var_dump ($i);
    if (FALSE){$i++;}else{'';}
}while ($i<0);
var_dump($i);
