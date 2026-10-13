<?php
declare (strict_types=1);
$displayProduct = function (string $name='', float $price=0, float $quantity=1, string $category=''): void
{ 
    
var_dump ($name, $price, $quantity, $category);
};
$displayProduct (name: 'cunto', quantity:3, category: 'cosmatics', price: 200);
$displayProduct (quantity: 4, name: 'Bio soft', category: 'skin care', price: 100);
