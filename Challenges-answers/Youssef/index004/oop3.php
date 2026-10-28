<?php

declare(strict_types=1);
require_once('oop2.php');
//parent class
echo "<h2>PHP OOP Challenge – Restaurant Management System</h2>";
echo "<h4>3. Child Class: Order</h4>";

class Order extends \FoodMenu
{
    //Constants
    public const MINIMUM_ORDER = 1;
    //Static Properties
    public static $quantity = 10;
    protected static $discountRate = 5;
    private static $deliveryFee = 0.1;
    //Methods
    public static function showOrderInfo()
    {
        echo self::$foodName . "<br>";
        echo self::$quantity . "<br>";
        echo self::$quantity * self::$discountRate * self::$deliveryFee . "<br>";
    }
    public static function getDeliveryFee()
    {
        return self::$deliveryFee;
    }
    public static function setDeliveryFee(float $newDeliveryFee): void
    {
        if ($newDeliveryFee < 0) {
            throw new InvalidArgumentException('Invalid delivery fee. The fee must be greater than 0.');
        }
        self::$deliveryFee = $newDeliveryFee;
    }
}
Order::showOrderInfo();
echo Order::getDeliveryFee();
echo "<br>";
Order::setDeliveryFee(1);
echo Order::getDeliveryFee();
