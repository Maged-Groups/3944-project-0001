<?php
declare (strict_types=1);
$printUserInfo = fn (string $name, float $age, string $job) : string|float => "My name is $name, I'm $age, I work as $job";
$printUserInfo_1 = $printUserInfo ('Sandra', 40, 'English teacher');
echo $printUserInfo_1;
