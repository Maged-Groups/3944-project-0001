<?php
declare(strict_types=1);

//  Named arguments

$calc_total = function ( $price, $discount = 0, $service = 0, $tax = 0, $qty = 1) {
    // var_dump($price);
    // var_dump($discount);
    // var_dump($service);
    // var_dump($tax);
    // var_dump($qty);

    var_dump($price, $discount, $service, $tax, $qty);
};

$calc_total(1500, 100, qty: 5);