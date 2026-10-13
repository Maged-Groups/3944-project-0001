<?php
declare (strict_types=1);
$createUser = function (string $name='', string $role='user',  $active=true) : void
{
var_dump ($name, $active);
};
$createUser (name: 'Marleen', active: false);