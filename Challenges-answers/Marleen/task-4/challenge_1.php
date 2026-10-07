<?php
declare (strict_types=1);
$greeting = fn (string $name) : string => "Hello! $name";
$greeting1 = $greeting ('Marleen');
echo $greeting1;