<?php
declare(strict_types=1);

// Print User Information
function printUserInfo(string $name, int $age, string $job): void {
    echo "Name: $name, Age: $age, Job: $job <br><br>";
}
printUserInfo(name: "Ahmed", age: 28, job: "Web Developer");

// Calculate the Final Price
function calculatePrice(float $price, float $tax, float $discount): float {
    return $price + ($price * $tax ) - ($price * $discount);
} 
$finalPrice = calculatePrice(discount: 0.05, price: 100, tax: 0.14);
echo "Final Price: $" . $finalPrice ."<br><br>";

// Create a User
function createUser(string $name, string $role = "user", bool $active = true): void {
    $status = $active ? "Active" : "Inactive";
    echo "User Created - Name: $name, Role: $role, Status: $status <br><br>";
}
createUser("Sara", active: false);

// Display Product Details
function displayProduct(string $name, float $price, int $quantity, string $category): void {
    echo "Product: $name | Category: $category | Price: $$price | Qty: $quantity <br><br>";
}
displayProduct(category: "Electronics", quantity: 2, price: 999.99, name: "Smartphone");

// Calculate Employee Salary
function calculateSalary(float $basicSalary, float $bonus = 0, float $deduction = 0): float {
    return $basicSalary + $bonus - $deduction;
}
$netSalary = calculateSalary(basicSalary: 5000.0, deduction: 250.0);
echo "Net Salary: $" . $netSalary ."<br><br>";

// Book a Trip
function bookTrip(string $destination, int $days, string $travelClass = "Economy", bool $includeHotel = true): void {
    $hotelStatus = $includeHotel ? "Yes" : "No";
    echo "Trip to $destination for $days days $travelClass Class Hotel Included: $hotelStatus <br><br>";
}
bookTrip(includeHotel: false, days: 7, destination: "Paris");
