<?php
declare(strict_types=1);
const TAX_RATE = 0.10;
$companyName = 'Nova Tech';
$employee1 = 'Asser Gamal';
$employee2 = 'Mark Sameh';
$employee3 = 'Julie Francois';
$bonus = 0.25;

function displayCompanyName(string $name): void
{
    global $companyName;
    $msg = "My company's name is $companyName";
    echo "$msg <br>";
}
displayCompanyName('Nova Tech');


function calculateBonus(float $salary): float
{

    $bonus = ($salary / 100) * 25;
    // echo " $msg <br>";
    return $bonus;

}
//  global $employee1;
//    global $employee2;
//    global $employee3;
// $employee1_bonus = calculateBonus(1000);
// $employee2_bonus = calculateBonus(2000);
// $employee3_bonus = calculateBonus(3000);


function display_bonus_msg(string $name, float $salary): void
{
    $employee_bonus = calculateBonus($salary);
    echo "The bonus for salary related to $name is $employee_bonus.<br>";
}

display_bonus_msg($employee1, 10000);
display_bonus_msg($employee2, 20000);
display_bonus_msg($employee3, 25000);



// echo "Bonus for salary related to $employee1 is $employee1_bonus.<br>";
// echo "Bonus for salary related to $employee2 is $employee2_bonus.<br>";
// echo "Bonus for salary related to $employee3 is $employee3_bonus.<br>";
function calculateFinalSalary(int|float $salary, int|float $bonus): float
{
    // global $employee1;
// global $employee2;
    $final_salary = $salary + $bonus - ($bonus * TAX_RATE);
    // $msg1 = "The final salary for $employee1 is $final_salary.";

    // echo "$msg1 <br>";

    return $final_salary;

}
global $bonus;
$salary1 = calculateFinalSalary(1000, 1000 * $bonus);
$salary2 = calculateFinalSalary(2000, 2000 * $bonus);
$salary3 = calculateFinalSalary(3000, 3000 * $bonus);
echo "The final salary for $employee1 is $salary1<br>";

echo "The final salary for $employee2 is $salary2<br>";
echo "The final salary for $employee3 is $salary3<br>";
// $employee1_final_salary = calculateFinalSalary ($salary1, 0.25);
// calculateFinalSalary (2000, )
function displaySalary(string|int $salary): string|int|float
{
    global $bonus;
    $total_paid = $salary + ($salary * $bonus);
    return $total_paid;
}
$total_paid_salary1 = displaySalary(1000);
$total_paid_salary2 = displaySalary(2000);
$total_paid_salary3 = displaySalary(3000);
echo "The total salary for $employee1 is $total_paid_salary1. <br>";
echo "The total salary for $employee2 is $total_paid_salary2. <br>";
echo "The total salary for $employee3 is $total_paid_salary3. <br>";
