<?php
declare(strict_types=1);

$score = 95;

if ($score >= 90)
    echo 'Excellent';
elseif ($score >= 75)
    echo 'Ver Good';
elseif ($score >= 65)
    echo 'Good';
elseif ($score >= 50)
    echo 'Pass';
else
    echo 'Fail';
