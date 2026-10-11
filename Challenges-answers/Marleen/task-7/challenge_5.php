<?php
declare (strict_types=1);

$calculateSalary = function (float $basicSalary=1, float $bonus=0, float $deduction=0) : void
{
    var_dump ($basicSalary, $bonus, $deduction);

};
$calculateSalary (basicSalary: 10000, deduction: 100);