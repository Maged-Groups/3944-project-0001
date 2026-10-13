<?php
declare (strict_types=1);
$i=1;
do {
    var_dump ($i);
    if (TRUE){$i++;}else {'';}
}while ($i <10);
var_dump ($i);