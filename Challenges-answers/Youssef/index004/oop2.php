<?php

declare(strict_types=1);
require_once('oop1.php');
//child class
echo "<h2>PHP OOP Challenge – Restaurant Management System</h2>";
echo "<h4>2. Child Class: FoodMenu</h4>";

class FoodMenu extends \Restaurant
{
    //Constants
    public const MENU_VERSION = "1.0";
    public const tax = 0.14;
    //Static properties
    public static $foodName = 'shawrma';
    protected static $foodPrice = 120;
    private static $preparationCost = 5;
    //Methods
    public static function showFoodInfo()
    {
        echo self::$foodName . "<br>";
        echo self::$foodPrice;
    }
    public static function getPreparationCost()
    {
        return self::$preparationCost;
    }
    public static function getFoodPrice(): float
    {
        return self::$foodPrice;
    }
    public static function setPreparationCost(float $newPrice)
    {
        self::$preparationCost = $newPrice;
    }
    public static function showFinalPrice(): void
    {
        $tax = self::$foodPrice * 0.14;
        $finalPrice = self::$foodPrice + $tax;
        echo "Final Price: " . $finalPrice . " EGP";
    }
}
echo FoodMenu::MENU_VERSION;
echo "<hr>";
FoodMenu::showFoodInfo();
echo "<hr>";
echo "Preparation Cost: " . FoodMenu::getPreparationCost() . " EGP<br>";
FoodMenu::setPreparationCost(10);
echo "New cost :" . FoodMenu::getPreparationCost() . " EGP <br>";
echo (FoodMenu::getFoodPrice() * FoodMenu::tax) + FoodMenu::getFoodPrice() . " EGP <br>";
FoodMenu::showFinalPrice();
