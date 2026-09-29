<?php

// Global Varibles in Global Scope
$vat_percent = 0.14;
$service_percent = 0.15;

function calculate($price)
{

    // Allow to use the global variable
    global $vat_percent;
    global $service_percent;

    $vat = $price * $vat_percent;
    $serv = $price * $service_percent;
    $total = $price + $vat + $serv;
    $msg = "Your VAT is $vat<br> 
    Your service is $serv <br> 
    Your total is $total";
    echo "$msg<br>";
}
calculate(1000);

function calculateInvoice($price1, $price2, $price3)
{

    // Allow to use the global variable
    global $vat_percent;
    global $service_percent;

    $totalprice = $price1 + $price2 + $price3;

    $vat = $totalprice * $vat_percent;
    $serv = $totalprice * $service_percent;
    $total = $totalprice + $vat + $serv;

    $msg = "Your total price is $totalprice<br>
            Your VAT is $vat<br>
            Your service is $serv<br>
            Your grand total is $total";

    echo "$msg<br>";
}
calculateInvoice(1000, 2000, 3000);

function greet(string $Fname, string $Lname)
{
    $msg = "Hello, $Fname $Lname ";
    echo "$msg<br>";
}
greet("Amr", "Fathy");