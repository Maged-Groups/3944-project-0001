<?php
declare (strict_types=1);

$i=5;
while ($i <50){
    var_dump ($i);
    if (TRUE){$i +=5;}else{'';}
}
var_dump ($i);