# PHP Practice: Employee Salary Calculator

Create a PHP program that calculates an employee’s final salary.

## Requirements

### 1. Strict Type Enforcement

At the beginning of the PHP file, enable **strict type enforcement**.

### 2. Constant

Create a constant called `TAX_RATE` with a value of `0.10`.

### 3. Global Variable

Create a global variable called `$companyName` containing the name of the company.

### 4. Functions

Create the following functions:

#### `displayCompanyName()`

- Takes no parameters.
- Returns `void`.
- Uses the global variable `$companyName`.
- Displays the company name.

#### `calculateBonus()`

- Takes a salary as a parameter.
- The parameter must be of type `float`.
- Returns a `float`.
- Return a bonus of `25%`.

#### `calculateFinalSalary()`

- Takes two parameters:
  - `$salary`: `int|float`
  - `$bonus`: `int|float`
- Returns a `float`.
- Use the `TAX_RATE` constant to calculate the tax.
- The final salary should be:

```text
salary + bonus - tax
```

#### `displaySalary()`

- Takes one parameter that can be either a `string` or an `int`.
- Returns `void`.
- Displays the value received.

## Main Program

In the main part of the program:

1. Call `displayCompanyName()`.
2. Create a variable `$employeeName` containing an employee's name.
3. Create a variable `$salary` containing an integer salary.
4. Call `calculateBonus()` using `$salary`.
5. Call `calculateFinalSalary()` using the salary and bonus.
6. Display the employee's name and final salary.
7. Add at least two more employees with different salaries.
8. Use the same functions to calculate their final salaries.

## Additional Challenge

Without changing the function definitions:

- Try calling `calculateBonus()` with an `int`.
- Try calling it with a `float`.
- Try calling it with a `string` containing a number.
- Observe what happens when strict type enforcement is enabled.
