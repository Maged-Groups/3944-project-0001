<?php 
echo"<h2>PHP Functions, If, Switch, & Match Challenges</h2>";

echo "<b>Challenge 01 — Age Checker <br></b>";
function checkAge(int $age)
{
    if ($age < 13) {
        echo "Age: $age → Child<br>";
    } elseif ($age <= 17) {
        echo "Age: $age → Teenager<br>";
    } else {
        echo "Age: $age → Adult<br>";
    }
}
checkAge(10);
checkAge(15);
checkAge(20);
echo "<b>Challenge 02 — Grade Calculator <br></b>";
function calculateGrade(int $score)
{
    if ($score < 0 || $score > 100) {
        echo "Score: $score → Invalid Score<br>";
    } elseif ($score >= 90) {
        echo "Score: $score → Excellent<br>";
    } elseif ($score >= 80) {
        echo "Score: $score → Very Good<br>";
    } elseif ($score >= 70) {
        echo "Score: $score → Good<br>";
    } elseif ($score >= 50) {
        echo "Score: $score → Pass<br>";
    } else {
        echo "Score: $score → Fail<br>";
    }
}
calculateGrade(95);
calculateGrade(85);
calculateGrade(75);
calculateGrade(60);
calculateGrade(40);
calculateGrade(110);

echo "<b>Challenge 03 — Number Analyzer <br></b>";
function analyzeNumber(int $number)
{
    if ($number > 0) {
        $type = "Positive";
    } elseif ($number < 0) {
        $type = "Negative";
    } else {
        $type = "Zero";
    }
    if ($number == 0) {
        $evenOdd = "Zero";
    } elseif ($number % 2 == 0) {
        $evenOdd = "Even";
    } else {
        $evenOdd = "Odd";
    }
    echo "Number: $number → $type, $evenOdd<br>";
}
analyzeNumber(10);
analyzeNumber(-7);
analyzeNumber(0);

echo "<b>Challenge 04 — Login Checker <br></b>";
function checkLogin(string $username, string $password): void
{
    if ($username === "admin" && $password === "12345") {
        echo "Username: $username and Password: $password → Success <br>";
    } else {
        echo "Username: $username and Password: $password → Fail <br>";
    }
}
checkLogin("admin", "12345");
checkLogin("admin", "1111");
checkLogin("yossef", "12345");

echo "<b>Challenge 05 — Temperature Checker <br></b>";
function checkTemperature(float $temperature):void
{
    if ($temperature < 0) {
        $result = "Very Cold";
    } elseif ($temperature < 15) {
        $result = "Cold";
    } elseif ($temperature < 25) {
        $result = "Warm";
    } elseif ($temperature < 35) {
        $result = "Hot";
    } else {
        $result = "Very Hot";
    }
    echo "Temperature: {$temperature}°C → $result<br>";
}
checkTemperature(-5);
checkTemperature(10); //if i typed 0 the same result of typed 10 .
checkTemperature(20);
checkTemperature(30);
checkTemperature(40);

echo"<h2>Switch Challenges</h2>";
echo "<b>Challenge 06 — Day Name <br></b>";
function getDayName(int $day) 
{
    switch ($day) {
        case 1:
            echo "Day $day → Saturday<br>";
            break;
        case 2:
            echo "Day $day → Sunday<br>";
            break;
        case 3:
            echo "Day $day → Monday<br>";
            break;
        case 4:
            echo "Day $day → Tuesday<br>";
            break;
        case 5:
            echo "Day $day → Wednesday<br>";
            break;
        case 6:
            echo "Day $day → Thursday<br>";
            break;
        case 7:
            echo "Day $day → Friday<br>";
            break;
        default:
            echo "Day $day → Invalid day<br>";
    }
}
getDayName(1);
getDayName(4);
getDayName(7);
getDayName(10);

echo "<b>Challenge 07 — Month Name <br></b>";
function getMonthName(int $month)
{
    switch ($month) {
        case 1: echo "Month $month → January<br>"; break;
        case 2: echo "Month $month → February<br>"; break;
        case 3: echo "Month $month → March<br>"; break;
        case 4: echo "Month $month → April<br>"; break;
        case 5: echo "Month $month → May<br>"; break;
        case 6: echo "Month $month → June<br>"; break;
        case 7: echo "Month $month → July<br>"; break;
        case 8: echo "Month $month → August<br>"; break;
        case 9: echo "Month $month → September<br>"; break;
        case 10: echo "Month $month → October<br>"; break;
        case 11: echo "Month $month → November<br>"; break;
        case 12: echo "Month $month → December<br>"; break;
        default: echo "Month $month → Invalid month<br>";
    }
}
getMonthName(1);
getMonthName(6);
getMonthName(10);
getMonthName(13);

//challenge 8 cann't i do want understand how i do function?

echo "<b>challenge 08 cann't ,want understand how i do function? <br></b>";

echo "<b>Challenge 09 — Traffic Light <br></b>";
function trafficLight(string $light)
{
    switch (strtolower($light)) {
        case "red":
            echo "Red → Stop<br>";
            break;
        case "yellow":
            echo "Yellow → Get Ready<br>";
            break;
        case "green":
            echo "Green → Go<br>";
            break;
        default:
            echo "$light → Invalid light<br>";
    }
}
trafficLight("red");
trafficLight("yellow");
trafficLight("green");
trafficLight("blue");

echo "<b>Challenge 10 — User Role <br></b>";
function checkRole(string $role)
{
    switch (strtolower($role)) {
        case "admin":
            echo "Admin → Full access<br>";
            break;
        case "editor":
            echo "Editor → Can edit content<br>";
            break;
        case "author":
            echo "Author → Can create content<br>";
            break;
        case "user":
            echo "User → Basic access<br>";
            break;
        case "guest":
            echo "Guest → Limited access<br>";
            break;
        default:
            echo "$role → Unknown role<br>";
    }
}
checkRole("admin");
checkRole("editor");
checkRole("guest");
checkRole("manager");

echo"<h2>Match Challenges</h2>";
echo "<b>Challenge 11 — HTTP Status <br></b>";
function getStatusMessage(int $status) //
{
    return match ($status) { 
        200 => "OK",
        201 => "Created",
        400 => "Bad Request",
        401 => "Unauthorized",
        403 => "Forbidden",
        404 => "Not Found",
        500 => "Internal Server Error",
        default => "Unknown Status Code"
    };
}
echo "200 → " . getStatusMessage(200) . "<br>";
echo "404 → " . getStatusMessage(404) . "<br>";
echo "500 → " . getStatusMessage(500) . "<br>";
echo "999 → " . getStatusMessage(999) . "<br>";

echo "<b>Challenge 12 — User Role <br></b>";
function getRoleMessage(string $role)
{
    return match ($role) {
        "admin" => "Administrator — Full access",
        "editor" => "Editor — Can edit content",
        "author" => "Author — Can create content",
        "user" => "User — Basic access",
        "guest" => "Guest — Limited access",
        default => "Unknown role"
    };
}
echo getRoleMessage("admin") . "<br>";
echo getRoleMessage("editor") . "<br>";
echo getRoleMessage("guest") . "<br>";
echo getRoleMessage("manager") . "<br>";
//other type challenge 12 
/*
function getRoleMessage($role)
{
    return match ($role) {
        "admin" => "Administrator — Full access",
        "editor" => "Editor — Can edit content",
        "author" => "Author — Can create content",
        "user" => "User — Basic access",
        "guest" => "Guest — Limited access",
        default => "Unknown role"
    };
}
$role = "admin";
echo "Role: $role → " . getRoleMessage($role) . "<br>";

$role = "editor";
echo "Role: $role → " . getRoleMessage($role) . "<br>";

$role = "guest";
echo "Role: $role → " . getRoleMessage($role) . "<br>";

$role = "manager";
echo "Role: $role → " . getRoleMessage($role) . "<br>";*/
echo "<b>Challenge 13 — Grade Letter <br></b>";
function getGrade(int $score)
{
    return match (true) {
        $score < 0 || $score > 100 => "Invalid Score",
        $score >= 90 => "A",
        $score >= 80 => "B",
        $score >= 70 => "C",
        $score >= 60 => "D",
        default => "F"
    };
}
echo "95 → Grade " . getGrade(95) . "<br>";
echo "85 → Grade " . getGrade(85) . "<br>";
echo "75 → Grade " . getGrade(75) . "<br>";
echo "65 → Grade " . getGrade(65) . "<br>";
echo "40 → Grade " . getGrade(40) . "<br>";
echo "110 → " . getGrade(110) . "<br>";

echo "<b>Challenge 14 — Shipping Cost <br></b>";
function getShippingCost(string $country)
{
    return match ($country) {
        "Egypt" => 50,
        "Saudi Arabia" => 100,
        "UAE" => 120,
        "Kuwait" => 150,
        default => 200
    };
}
echo "Egypt → " . getShippingCost("Egypt") . " EGP<br>";
echo "Saudi Arabia → " . getShippingCost("Saudi Arabia") . " <br>";
echo "UAE → " . getShippingCost("UAE") . " <br>";
echo "Kuwait → " . getShippingCost("Kuwait") . " EGP<br>";
echo "USA → " . getShippingCost("USA") . " $ <br>";

echo "<b>Challenge 15 — Order Status <br></b>";
function getOrderMessage(string $status)
{
    return match ($status) {
        "pending" => "Order is waiting for processing",
        "shipped" => "Order has been shipped",
        "delivered" => "Order has been delivered",
        "cancelled" => "Order has been cancelled",
        default => "Unknown order status"
    };
}
echo getOrderMessage("pending") . "<br>";
echo getOrderMessage("shipped") . "<br>";
echo getOrderMessage("delivered") . "<br>";
echo getOrderMessage("cancelled") . "<br>";
echo getOrderMessage("returned") . "<br>";