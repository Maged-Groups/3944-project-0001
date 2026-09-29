<?php

const VAT = 0.14;

function calc_vat_value($price)
{
    $vat_amount = $price * VAT;

    echo "Vat = $vat_amount<br>";
}

calc_vat_value(1000);
calc_vat_value(2000);
calc_vat_value(1500);
calc_vat_value(300);