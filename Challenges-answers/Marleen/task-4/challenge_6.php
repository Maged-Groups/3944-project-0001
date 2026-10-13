<?php
declare (strict_types=1);
$getFullName = fn (string $firstName, string $middleName, string $lastName) : string => "$firstName $middleName $lastName";
$fullName1 = $getFullName ('Marleen', 'Nabil', 'Nassif');
echo "My name is $fullName1";