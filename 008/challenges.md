# PHP Array Functions Challenges

## Challenge 1: Check if the Student Fails

Create a PHP script that checks whether at least one student's score in the following array fails in the exam. A student passes if their score is 50 or above.

```php
$scores = [55, 42, 67, 80, 29];
```

**Hint:** `array_any`

---

## Challenge 2: Split Products into Groups

Create a PHP script that divides the following products into groups containing 3 products each. Display the resulting groups.

```php
$products = ["Laptop", "Mouse", "Keyboard", "Monitor", "Printer", "Speaker", "Webcam"];
```

**Hint:** `array_chunk`

---

## Challenge 3: Combine Names and Scores

Create a PHP script that combines the student names with their corresponding scores into one associative array.

```php
$names = ["Ahmed", "Mona", "Omar", "Sara"];
$scores = [85, 92, 78, 96];
```

**Hint:** `array_combine`

---

## Challenge 4: Find Different Products

Create a PHP script that displays the products available in the first store but not in the second store.

```php
$store1 = ["Laptop", "Mouse", "Keyboard", "Monitor"];
$store2 = ["Mouse", "Monitor", "Printer"];
```

**Hint:** `array_diff`

---

## Challenge 5: Filter Adult Users

Create a PHP script that creates a new array containing only users whose ages are 18 or above.

```php
$ages = [12, 25, 17, 30, 16, 21, 14];
```

**Hint:** `array_filter`

---

## Challenge 6: Find the First Passing Score

Create a PHP script that finds the first score greater than or equal to 60 in the following array. Display the score if one exists.

```php
$scores = [35, 45, 58, 72, 90, 40];
```

**Hint:** `array_find`

---

## Challenge 7: Get the First Product

Create a PHP script that retrieves and displays the first product in the following array.

```php
$products = ["Laptop", "Mouse", "Keyboard", "Monitor"];
```

**Hint:** `array_first`

---

## Challenge 8: Get the Last Product

Create a PHP script that retrieves and displays the last product in the following array.

```php
$products = ["Laptop", "Mouse", "Keyboard", "Monitor"];
```

**Hint:** `array_last`

---

## Challenge 9: Merge Shopping Carts

Create a PHP script that combines the products from two shopping carts into a single array.

```php
$cart1 = ["Laptop", "Mouse"];
$cart2 = ["Keyboard", "Monitor", "Printer"];
```

**Hint:** `array_merge`

---

## Challenge 10: Select Random Winners

Create a PHP script that randomly selects 2 different keys from the following array of participants. Display the names of the selected winners.

```php
$participants = ["Ahmed", "Mona", "Omar", "Sara", "Ali"];
```

**Hint:** `array_rand`

---

## Challenge 11: Calculate the Total Shopping Cart Price

Create a PHP script that calculates the total price of all products in the shopping cart by processing the prices one by one.

```php
$prices = [150, 250, 100, 300];
```

**Hint:** `array_reduce`

---

## Challenge 12: Calculate Total Sales

Create a PHP script that calculates the total sales amount for a store.

```php
$sales = [1200, 850, 2300, 1750, 900];
```

**Hint:** `array_sum`

---

## Challenge 13: Create Variables from Array Keys

Create a PHP script that uses the keys of the following associative array to create variables with matching names and values. Display the created variables.

```php
$user = [
    "name" => "Ahmed",
    "age" => 25,
    "job" => "Developer"
];
```

**Hint:** `compact`

---

## Challenge 14: Count Available Products

Create a PHP script that displays the number of products available in the inventory.

```php
$products = ["Laptop", "Mouse", "Keyboard", "Monitor", "Printer"];
```

**Hint:** `count`

---

## Challenge 15: Sort Student Scores

Create a PHP script that sorts the following student scores in ascending order and displays the sorted array.

```php
$scores = [85, 42, 96, 67, 73, 55];
```

**Hint:** `sort`

---

## Challenge 16: Filter and Count Successful Students

Create a PHP script that creates an array containing only students who scored 60 or above, then displays the number of successful students.

```php
$scores = [45, 80, 55, 92, 60, 38, 75];
```

**Hints:** `array_filter`, `count`

---

## Challenge 17: Merge and Sort Product Prices

Create a PHP script that merges the prices from two different branches of a store, then sorts all prices in ascending order.

```php
$branch1 = [450, 200, 700];
$branch2 = [150, 900, 350];
```

**Hints:** `array_merge`, `sort`

---

## Challenge 18: Calculate the Average Score

Create a PHP script that calculates the average score of the students in the following array.

```php
$scores = [80, 75, 90, 65, 100];
```

**Hints:** `array_sum`, `count`

---

## Challenge 19: Find Products Missing from a Store

Create a PHP script that displays products that exist in the main inventory but are missing from the displayed products list.

```php
$inventory = ["Laptop", "Mouse", "Keyboard", "Monitor", "Printer"];
$displayed = ["Laptop", "Keyboard", "Printer"];
```

**Hint:** `array_diff`

---

## Challenge 20: Analyze Student Results

Create a PHP script that performs the following tasks:

- Filters the scores to keep only scores of 50 or above.
- Counts the students who passed.
- Calculates the total of the passing scores.
- Sorts the passing scores in ascending order.
- Displays the first and last passing scores.

```php
$scores = [35, 90, 45, 75, 60, 28, 100, 50];
```

**Hints:** `array_filter`, `count`, `array_sum`, `sort`, `array_first`, `array_last`

---

## Challenge 21: Check Product Availability

Create a PHP script that checks whether any product in the inventory has a price greater than 1000.

```php
$prices = [250, 450, 800, 1500, 300];
```

**Hint:** `array_any`

---

## Challenge 22: Find the First Affordable Product

Create a PHP script that finds the first product whose price is less than or equal to 100.

```php
$products = [
    ["name" => "Laptop", "price" => 1500],
    ["name" => "Mouse", "price" => 80],
    ["name" => "Keyboard", "price" => 120],
    ["name" => "USB Cable", "price" => 50]
];
```

**Hint:** `array_find`

---

## Challenge 23: Group Students by Their Scores

Create a PHP script that divides the following student scores into groups containing 4 scores each. Display all groups.

```php
$scores = [70, 85, 90, 65, 55, 78, 88, 92, 60, 73];
```

**Hint:** `array_chunk`

---

## Challenge 24: Generate a User Report

Create a PHP script that performs the following tasks:

- Combines the names and ages into an associative array.
- Filters the users who are at least 18 years old.
- Counts the users who meet the age requirement.
- Displays the first user in the filtered array.

```php
$names = ["Ahmed", "Mona", "Omar", "Sara", "Ali"];
$ages = [17, 24, 19, 16, 30];
```

**Hints:** `array_combine`, `array_filter`, `count`, `array_first`

---

## Challenge 25: Store Sales Report

Create a PHP script that performs the following tasks:

- Combines product names with their sales amounts.
- Finds the total sales amount.
- Checks whether any product has sales greater than 500.
- Sorts the sales amounts in ascending order.
- Displays the number of products.

```php
$products = ["Laptop", "Mouse", "Keyboard", "Monitor"];
$sales = [1200, 250, 450, 700];
```

**Hints:** `array_combine`, `array_sum`, `array_any`, `sort`, `count`

---

## Challenge 26: Create a Random Prize Draw

Create a PHP script that performs the following tasks:

- Selects 3 random participants from the list.
- Displays their names.
- Counts the number of participants who entered the draw.

```php
$participants = [
    "Ahmed",
    "Mona",
    "Omar",
    "Sara",
    "Ali",
    "Nour",
    "Hassan"
];
```

**Hints:** `array_rand`, `count`

---

## Challenge 27: Calculate Total Order Value

Create a PHP script that calculates the total value of an order by multiplying each product's price by its quantity and accumulating the results.

```php
$order = [
    ["price" => 100, "quantity" => 2],
    ["price" => 250, "quantity" => 3],
    ["price" => 50, "quantity" => 4]
];
```

**Hint:** `array_reduce`

---

## Challenge 28: Compare Two Classrooms

Create a PHP script that performs the following tasks:

- Finds students who are in Classroom A but not in Classroom B.
- Finds students who are in Classroom B but not in Classroom A.
- Combines the students from both classrooms into one array.
- Counts the total number of entries in the combined array.

```php
$classroomA = ["Ahmed", "Mona", "Omar", "Sara"];
$classroomB = ["Mona", "Ali", "Sara", "Nour"];
```

**Hints:** `array_diff`, `array_merge`, `count`

---

## Challenge 29: Inventory Summary

Create a PHP script that performs the following tasks:

- Filters products whose quantities are greater than zero.
- Checks whether any product has a quantity below 5.
- Calculates the total quantity of all products.
- Displays the first and last products in the filtered list.

```php
$products = [
    ["name" => "Laptop", "quantity" => 10],
    ["name" => "Mouse", "quantity" => 0],
    ["name" => "Keyboard", "quantity" => 3],
    ["name" => "Monitor", "quantity" => 7],
    ["name" => "Printer", "quantity" => 2]
];
```

**Hints:** `array_filter`, `array_any`, `array_sum` (after extracting quantities), `array_first`, `array_last`

---

## Challenge 30: Complete Student Performance Report

Create a PHP script that performs the following tasks:

- Combines student names with their scores.
- Filters students who scored 60 or above.
- Counts the students who passed.
- Calculates the total scores of the passing students.
- Checks whether any student scored 95 or above.
- Sorts the passing scores in ascending order.
- Displays the first and last passing scores.
- Divides the passing scores into groups of 3.

```php
$names = ["Ahmed", "Mona", "Omar", "Sara", "Ali", "Nour", "Hassan"];
$scores = [85, 92, 45, 78, 98, 55, 67];
```

**Hints:** `array_combine`, `array_filter`, `count`, `array_sum`, `array_any`, `sort`, `array_first`, `array_last`, `array_chunk`