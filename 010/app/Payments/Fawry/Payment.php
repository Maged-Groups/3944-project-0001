<?php

declare(strict_types=1);

require_once 'Fawry.php';

class Payment extends Fawry
{
    static function process(float $amount): void
    {
        echo 'Payment -> Fawry -> Payment -> process<br>';
    }
}
