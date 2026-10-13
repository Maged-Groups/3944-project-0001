<?php
declare (strict_types=1);
$isAdult = fn (int $age): string =>  $age >= 18 ? 'True': 'False';
$personage_1 = $isAdult (20);
$personage_2 = $isAdult (14);
echo "Sameh is 20. is he an adult? $personage_1. <br>";
echo "Sarah is 14 is she an adult? $personage_2 .";