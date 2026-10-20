<?php

declare(strict_types=1);

class Fawry
{
    static function print(): void
    {
        echo 'Payment -> Fawry -> Fawry -> print<br>';
    }

    static function generateInvoice(): void
    {
        $timestamp = date('Ymdhis');

        echo "Payment -> Fawry -> Fawry -> generateInvoice -> $timestamp<br>";
    }
}
