<?php
declare (strict_types=1);
// ## Challenge 2: Split Products into Groups

$products = ["Laptop", "Mouse", "Keyboard", "Monitor", "Printer", "Speaker", "Webcam"];
var_dump (array_chunk($products, 3, true));