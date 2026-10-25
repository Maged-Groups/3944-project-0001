<?php
declare (strict_types=1);
require_once 'challenge-1/helpers/dump.php';

require_once 'challenge-1/Restaurant/Restaurant.php';
require_once 'challenge-1/Restaurant/FoodMenu.php';
echo Restaurant::showRestaurantInfo();
echo '<br>------------------<br>';
echo Restaurant:: getSecretCode();
echo '<br>------------------<br>';

Restaurant:: setSecretCode('gfgfhftdrrrrrrrrrr');
echo Restaurant:: getSecretCode();
echo '<br>------------------<br>';
echo FoodMenu:: showFinalPrice();

echo '<br>------------------<br>';

echo FoodMenu:: getFoodPrice();
echo '<br>------------------<br>';
FoodMenu:: setFoodPrice(300);
echo FoodMenu:: getFoodPrice();