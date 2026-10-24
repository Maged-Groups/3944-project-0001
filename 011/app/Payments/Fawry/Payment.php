<?php

declare(strict_types=1);

require_once 'Fawry.php';

class Payment extends Fawry
{
    static function process(float $amount): void
    {

        $commissionAmount = $amount * self::getCommission();

        $gross = $amount + $commissionAmount;

        echo "Payment -> Fawry -> Payment -> process with amount of $gross<br>";

        self::generateInvoice($gross);
    }
}
