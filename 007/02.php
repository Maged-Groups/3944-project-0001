<?php
declare(strict_types=1);

// Rest operator (...), variadic parameters

$fullName = function ($a, ...$b) {
    var_dump ($a);
    var_dump ($b);
    // echo "<h5>S = $s</h5>";
};

$fullName('Ahmed');
$fullName('Kamal', 'Ali');
$fullName('Tamer', 'Mousa', 'Yasser');
$fullName();