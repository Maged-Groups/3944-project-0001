<?php

declare(strict_types=1);
//parent class
echo "<h2>PHP OOP Challenge – Restaurant Management System</h2>";
echo "<h4>1. Parent Class: Restaurant</h4>";

class Restaurant
{
    // Constants
    public const RESTAURANT_NAME = "Youssef Restaurant";
    public const CURRENCY = "EGP";
    protected const TAX_RATE = 0.14;
    // Static Properties
    public static $address = "Alexandria, Egypt";
    protected static $openingTime = "09:00 AM";
    private static $secretCode = "REST123";
    // 1. Display restaurant information
    public static function showRestaurantInfo(): void
    {
        echo "Restaurant Name: " . self::RESTAURANT_NAME . "<br>";
        echo "Address: " . self::$address . "<br>";
        echo "Opening Time: " . self::$openingTime . "<br>";
    }
    // 2. Display secret code
    public static function showSecretCode(): void
    {
        echo "Secret Code: " . self::$secretCode . "<br>";
    }
    // 3. Display tax rate
    protected static function showTaxRate(): void
    {
        echo "Tax Rate: " . (self::TAX_RATE * 100) . "%<br>";
    }
    // 4. Display opening time
    public static function showOpeningTime(): void
    {
        echo "Opening Time: " . self::$openingTime . "<br>";
    }
    //Set and Get
    public static function setSecretCode(string $secretCode): void
    {
        if (strlen($secretCode) < 10) {
            throw new InvalidArgumentException("The setter must reject a secret code less than 10 characters.");
        }
        self::$secretCode = $secretCode;
    }
    public static function getSecretCode(): string
    {
        return self::$secretCode;
    }
}
// Calling public static methods
Restaurant::showRestaurantInfo();
echo "<hr>";
Restaurant::showSecretCode();
echo "<hr>";
Restaurant::showOpeningTime();
echo "<hr>";
echo Restaurant::getSecretCode();
echo "<hr>";
Restaurant::setSecretCode('Yossef1233');
echo Restaurant::getSecretCode();
