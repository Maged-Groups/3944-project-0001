# PHP Utility Classes Challenges

## General Requirements

Create three PHP classes:

- `Str`: Responsible for string operations.
- `Num`: Responsible for numeric operations and checks.
- `Arr`: Responsible for array operations.

Follow these requirements in all challenges:

- Create `static` methods inside the appropriate classes.
- Use methods by calling the class name, such as `Str::upper()`, `Num::isPassingScore()`, and `Arr::passingScores()`.
- Return results from methods whenever possible instead of printing them directly.
- Use methods from one class inside another class when needed.
- Keep each method focused on a specific task or a related group of operations.
- Test your methods using different input values.

---

# Part 1: String Utility Class

## Challenge 1: Create a String Formatter

Create a `Str` class containing a static method called `upper()`.

The method should accept a string, remove whitespace from its beginning and end, and convert the string to uppercase.

**Example Input:**

```php
"  hello world  "
```

**Expected Result:**

```text
HELLO WORLD
```

**Hint:** `trim`, `strtoupper`

---

## Challenge 2: Create a Lowercase Converter

Create a static method called `lower()` inside the `Str` class.

The method should remove whitespace from the beginning and end of a string, then convert it to lowercase.

**Example Input:**

```php
"  PHP DEVELOPER  "
```

**Expected Result:**

```text
php developer
```

**Hint:** `trim`, `strtolower`

---

## Challenge 3: Normalize Text

Create a static method called `clean()` inside the `Str` class.

The method should:

- Remove whitespace from the beginning and end of a string.
- Replace multiple consecutive spaces inside the string with a single space.

**Example Input:**

```php
"   Ahmed     Ali    Hassan   "
```

**Expected Result:**

```text
Ahmed Ali Hassan
```

**Hint:** `trim`, `array_filter`, `explode`

---

## Challenge 4: Format User Names

Create a static method called `title()` inside the `Str` class.

The method should clean a given string and capitalize the first letter of each word.

**Example Input:**

```php
"  aHMED aLI hASSAN  "
```

**Expected Result:**

```text
Ahmed Ali Hassan
```

**Hint:** `Str::clean()`, `strtolower`, `ucwords`

---

## Challenge 5: Generate Name Initials

Create a static method called `initials()` inside the `Str` class.

The method should accept a full name and return the first letter of each word in uppercase, separated by dots.

**Example Input:**

```php
"ahmed ali hassan"
```

**Expected Result:**

```text
A.A.H
```

**Hint:** `explode`, `array_map`, `Str::upper()`, `implode`

---

# Part 2: Numeric Utility Class

## Challenge 6: Check Passing Scores

Create a `Num` class containing a static method called `isPassingScore()`.

The method should accept a score and return whether the score is 50 or above.

**Example Inputs:**

```php
45
70
50
```

**Expected Results:**

```text
false
true
true
```

**Hint:** Comparison operators, `bool`

---

## Challenge 7: Check Adult Ages

Create a static method called `isAdult()` inside the `Num` class.

The method should accept an age and return whether the age is 18 or above.

**Example Inputs:**

```php
16
18
25
```

**Expected Results:**

```text
false
true
true
```

**Hint:** Comparison operators

---

## Challenge 8: Check a Numeric Range

Create a static method called `isBetween()` inside the `Num` class.

The method should accept three arguments:

- A number.
- A minimum value.
- A maximum value.

Return whether the number falls within the given range, including both boundaries.

**Example Inputs:**

```php
Num::isBetween(50, 10, 100);
Num::isBetween(150, 10, 100);
```

**Expected Results:**

```text
true
false
```

**Hint:** Comparison operators, logical operators

---

## Challenge 9: Calculate a Discounted Price

Create a static method called `discountedPrice()` inside the `Num` class.

The method should accept a product price and a discount percentage, then return the final price after applying the discount.

**Example Input:**

```php
Num::discountedPrice(1000, 20);
```

**Expected Result:**

```text
800
```

**Hint:** Arithmetic operators, percentage calculation

---

## Challenge 10: Calculate an Average

Create a static method called `average()` inside the `Num` class.

The method should accept an array of numbers and return their average.

Return `0` when the array is empty.

**Example Input:**

```php
[80, 90, 70, 100]
```

**Expected Result:**

```text
85
```

**Hint:** `array_sum`, `count`

---

# Part 3: Array Utility Class

## Challenge 11: Check for Failing Students

Create a static method called `hasFailingScore()` inside the `Arr` class.

The method should accept an array of scores and return whether at least one student failed.

A student fails when their score is below 50.

Use the existing `Num::isPassingScore()` method instead of repeating the passing-score condition.

**Example Input:**

```php
$scores = [75, 90, 42, 68];
```

**Expected Result:**

```text
true
```

**Hint:** `array_any`, `Num::isPassingScore()`

---

## Challenge 12: Get Passing Scores

Create a static method called `passingScores()` inside the `Arr` class.

The method should accept an array of scores and return a new array containing only scores of 50 or above.

Use `Num::isPassingScore()` to check each score.

**Example Input:**

```php
$scores = [45, 80, 30, 95, 60];
```

**Expected Result:**

```php
[80, 95, 60]
```

**Hint:** `array_filter`, `Num::isPassingScore()`

---

## Challenge 13: Find the First Passing Score

Create a static method called `firstPassingScore()` inside the `Arr` class.

The method should return the first score of 50 or above, or `null` if no score passes.

Use the existing numeric validation method.

**Example Input:**

```php
$scores = [35, 42, 65, 90];
```

**Expected Result:**

```text
65
```

**Hint:** `array_find`, `Num::isPassingScore()`

---

## Challenge 14: Create a Student Score List

Create a static method called `studentScores()` inside the `Arr` class.

The method should accept two arrays:

```php
$names = ["ahmed", "mONA", "omar", "sara"];
$scores = [85, 92, 78, 96];
```

Return an associative array where:

- Each student's name is a key.
- Each student's score is its corresponding value.
- Every student name is formatted using `Str::title()`.

**Expected Result:**

```php
[
    "Ahmed" => 85,
    "Mona" => 92,
    "Omar" => 78,
    "Sara" => 96
]
```

**Hint:** `array_map`, `array_combine`, `Str::title()`

---

## Challenge 15: Split Products into Groups

Create a static method called `groupProducts()` inside the `Arr` class.

The method should accept an array of products and a group size, then return an array containing the resulting groups.

**Example Input:**

```php
$products = [
    "laptop",
    "mouse",
    "keyboard",
    "monitor",
    "printer",
    "speaker",
    "webcam"
];
```

The method should also format every product name using `Str::title()` before grouping the products.

**Hint:** `array_map`, `array_chunk`, `Str::title()`

---

## Challenge 16: Compare Two Stores

Create a static method called `uniqueProducts()` inside the `Arr` class.

The method should accept two arrays representing two stores and return products that exist in the first store but not in the second.

**Example Input:**

```php
$store1 = ["Laptop", "Mouse", "Keyboard", "Monitor"];
$store2 = ["Mouse", "Printer", "Monitor"];
```

**Expected Result:**

```php
["Laptop", "Keyboard"]
```

**Hint:** `array_diff`

---

## Challenge 17: Merge and Format Shopping Carts

Create a static method called `mergeCarts()` inside the `Arr` class.

The method should:

- Accept two shopping cart arrays.
- Merge the two arrays.
- Format each product name using `Str::title()`.
- Return the resulting array.

**Example Input:**

```php
$cart1 = ["laptop", "wireless mouse"];
$cart2 = ["mechanical keyboard", "usb cable"];
```

**Expected Result:**

```php
[
    "Laptop",
    "Wireless Mouse",
    "Mechanical Keyboard",
    "Usb Cable"
]
```

**Hint:** `array_merge`, `array_map`, `Str::title()`

---

## Challenge 18: Select Random Winners

Create a static method called `randomWinners()` inside the `Arr` class.

The method should accept an array of participants and the number of winners to select.

Return the names of randomly selected participants without selecting the same participant more than once.

Return an empty array if the requested number of winners is zero or negative.

**Example Input:**

```php
$participants = ["ahmed", "mona", "omar", "sara", "ali"];
```

**Hint:** `array_rand`, `count`, `Str::title()`

---

## Challenge 19: Calculate an Order Total

Create a static method called `orderTotal()` inside the `Arr` class.

The method should calculate the total order value by multiplying the price of each product by its quantity, then accumulating all the results.

**Example Input:**

```php
$order = [
    ["price" => 100, "quantity" => 2],
    ["price" => 250, "quantity" => 3],
    ["price" => 50, "quantity" => 4]
];
```

**Expected Result:**

```text
1150
```

**Hint:** `array_reduce`

---

## Challenge 20: Filter Adult Users

Create a static method called `adultUsers()` inside the `Arr` class.

The method should accept an array of users and return only users who are at least 18 years old.

The method should also format each remaining user's name using `Str::title()`.

**Example Input:**

```php
$users = [
    ["name" => "ahmed ali", "age" => 17],
    ["name" => "mONA hassan", "age" => 24],
    ["name" => "omar adel", "age" => 19],
    ["name" => "sara mohamed", "age" => 16]
];
```

**Hint:** `array_filter`, `array_map`, `Num::isAdult()`, `Str::title()`

---

# Part 4: Combining Multiple Utility Methods

## Challenge 21: Find the First Affordable Product

Create a static method called `firstAffordableProduct()` inside the `Arr` class.

The method should accept a list of products and return the first product whose price is less than or equal to a given maximum price.

Format the selected product's name using `Str::title()`.

Return `null` if no product meets the requirement.

**Example Input:**

```php
$products = [
    ["name" => "laptop", "price" => 1500],
    ["name" => "mouse", "price" => 80],
    ["name" => "keyboard", "price" => 120],
    ["name" => "usb cable", "price" => 50]
];
```

**Hint:** `array_find`, `Num::isBetween()` or a suitable numeric comparison method, `Str::title()`

---

## Challenge 22: Generate an Inventory Report

Create a static method called `inventoryReport()` inside the `Arr` class.

The method should accept an array of products containing names and quantities.

Return an associative array containing:

- `available_products`: Products whose quantity is greater than zero.
- `has_low_stock`: Whether any product has a quantity below 5.
- `total_quantity`: The sum of all product quantities.
- `first_available`: The first available product.
- `last_available`: The last available product.

Format the product names using `Str::title()`.

**Example Input:**

```php
$products = [
    ["name" => "laptop", "quantity" => 10],
    ["name" => "mouse", "quantity" => 0],
    ["name" => "keyboard", "quantity" => 3],
    ["name" => "monitor", "quantity" => 7],
    ["name" => "printer", "quantity" => 2]
];
```

**Hints:** `array_filter`, `array_any`, `array_column`, `array_sum`, `array_first`, `array_last`, `Str::title()`

---

## Challenge 23: Compare Two Classrooms

Create a static method called `compareClassrooms()` inside the `Arr` class.

The method should accept two arrays of student names and return an associative array containing:

- `only_a`: Students who are in Classroom A but not in Classroom B.
- `only_b`: Students who are in Classroom B but not in Classroom A.
- `all_students`: Students from both classrooms in one array.
- `total_entries`: The number of entries in the combined array.

Format all student names using `Str::title()` before comparing and combining them.

**Example Input:**

```php
$classroomA = ["ahmed", "mona", "omar", "sara"];
$classroomB = ["mona", "ali", "sara", "nour"];
```

**Hints:** `array_map`, `array_diff`, `array_merge`, `count`, `Str::title()`

---

## Challenge 24: Create a Sales Summary

Create a static method called `salesReport()` inside the `Arr` class.

The method should accept two arrays: product names and their sales amounts.

Return an associative array containing:

- `product_sales`: An associative array of product names and sales amounts.
- `total_sales`: The sum of all sales.
- `has_high_sales`: Whether any product has sales greater than 500.
- `sorted_sales`: All sales amounts sorted in ascending order.
- `product_count`: The number of products.

Format every product name using `Str::title()`.

**Example Input:**

```php
$products = ["laptop", "mouse", "keyboard", "monitor"];
$sales = [1200, 250, 450, 700];
```

**Hints:** `array_map`, `array_combine`, `array_sum`, `array_any`, `sort`, `count`, `Str::title()`

---

## Challenge 25: Generate a Passing Students Report

Create a static method called `passingStudentsReport()` inside the `Arr` class.

The method should accept student names and scores, then return an associative array containing:

- `passing_students`: An associative array containing the names and scores of passing students.
- `passing_count`: The number of passing students.
- `total_passing_scores`: The sum of passing scores.
- `average_passing_score`: The average score of passing students.
- `sorted_scores`: Passing scores sorted in ascending order.
- `first_score`: The lowest passing score.
- `last_score`: The highest passing score.

Use the methods available in the `Str` and `Num` classes whenever appropriate.

**Example Input:**

```php
$names = ["ahmed", "mona", "omar", "sara", "ali"];
$scores = [85, 42, 78, 55, 96];
```

**Hints:** `array_combine`, `array_filter`, `array_sum`, `count`, `sort`, `array_first`, `array_last`, `Num::isPassingScore()`, `Num::average()`, `Str::title()`

---

## Challenge 26: Normalize and Remove Duplicate Products

Create a static method called `normalizeProducts()` inside the `Arr` class.

The method should:

- Clean all product names.
- Convert product names to title case.
- Remove duplicate product names.
- Sort the final array alphabetically.

**Example Input:**

```php
$products = [
    " laptop ",
    "MOUSE",
    "Laptop",
    "  keyboard  ",
    "mouse"
];
```

**Expected Result:**

```php
[
    "Keyboard",
    "Laptop",
    "Mouse"
]
```

**Hints:** `array_map`, `array_unique`, `sort`, `Str::clean()`, `Str::title()`

---

## Challenge 27: Calculate Total Values with a Discount

Create a static method called `discountedOrderTotal()` inside the `Arr` class.

The method should accept an order containing product prices and quantities, along with a discount percentage.

The method should:

- Calculate the total price of all products.
- Apply the given discount to the total.
- Return the final amount.

Use a method from `Num` to calculate the discounted price.

**Example Input:**

```php
$order = [
    ["price" => 100, "quantity" => 2],
    ["price" => 250, "quantity" => 3],
    ["price" => 50, "quantity" => 4]
];
```

**Hint:** `array_reduce`, `Num::discountedPrice()`

---

## Challenge 28: Format a Product Catalog

Create a static method called `formatCatalog()` inside the `Arr` class.

The method should accept an array of products, where each product contains a name and a price.

Return a new array in which:

- Product names are cleaned and formatted using `Str`.
- Prices are formatted using `Num::formatPrice()`.
- The original product data remains unchanged.

Create the `formatPrice()` method inside the `Num` class. It should return a formatted price string containing two decimal places.

**Example Input:**

```php
$products = [
    ["name" => "  wireless MOUSE ", "price" => 250],
    ["name" => "mechanical keyboard", "price" => 750.5]
];
```

**Hints:** `array_map`, `Str::clean()`, `Str::title()`, `Num::formatPrice()`, `number_format`

---

# Part 5: Advanced Integration Challenges

## Challenge 29: Generate a Complete Inventory Report

Create a static method called `completeInventoryReport()` inside the `Arr` class.

The method should accept an array of products containing names, prices, and quantities.

Return an associative array containing:

- `available_products`: Products with a quantity greater than zero.
- `out_of_stock`: Products with a quantity equal to zero.
- `has_low_stock`: Whether any product has fewer than 5 units.
- `total_quantity`: The total quantity of all products.
- `inventory_value`: The total value