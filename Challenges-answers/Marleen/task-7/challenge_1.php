<?php
declare (strict_types=1);
$printUserInfo = function (string $name='', float $age=0, string $job='') : void
{
    var_dump ($name, $age, $job);
};
$printUserInfo ('Marleen', job:'teacher');


