# PHP Functions, If, Switch, & Match Challenges

## Challenge 01 — Age Checker

Create a PHP function named `checkAge` that accepts `$age`.

The function should:

- Display `Child` if the age is less than 13.
- Display `Teenager` if the age is between 13 and 17.
- Display `Adult` if the age is 18 or older.

Call the function with different ages.

---

## Challenge 02 — Grade Calculator

Create a PHP function named `calculateGrade` that accepts `$score`.

The function should display:

- `Excellent` for 90–100
- `Very Good` for 80–89
- `Good` for 70–79
- `Pass` for 50–69
- `Fail` for less than 50
- `Invalid Score` for values outside 0–100

Call the function with different scores.

---

## Challenge 03 — Number Analyzer

Create a PHP function named `analyzeNumber` that accepts `$number`.

The function should determine whether the number is:

- Positive
- Negative
- Zero

It should also determine whether the number is:

- Even
- Odd

Display the results.

---

## Challenge 04 — Login Checker

Create a PHP function named `checkLogin` that accepts:

- `$username`
- `$password`

Correct username is 'admin'
Correct password is '12345'

The function should check the login information and display an appropriate message.

Test the function with different username and password combinations.

---

## Challenge 05 — Temperature Checker

Create a PHP function named `checkTemperature` that accepts `$temperature`.

Display:

- `Very Cold`
- `Cold`
- `Warm`
- `Hot`
- `Very Hot`

depending on the temperature value.

Call the function with different temperatures.

---

# Switch Challenges

## Challenge 06 — Day Name

Create a PHP function named `getDayName` that accepts `$day`.

Use `switch` to display the day name for numbers from `1` to `7`.

Handle invalid numbers.

Call the function with different values.

---

## Challenge 07 — Month Name

Create a PHP function named `getMonthName` that accepts `$month`.

Use `switch` to display the corresponding month name.

Handle invalid month numbers.

Call the function with different values.

---

## Challenge 08 — Calculator

Create a PHP function named `calculate` that accepts:

- `$number1`
- `$number2`
- `$operator`

The operator can be:

- `+`
- `-`
- `*`
- `/`

Use `switch` to perform the selected operation.

Handle:

- Invalid operators
- Division by zero

Call the function several times with different operations.

---

## Challenge 09 — Traffic Light

Create a PHP function named `trafficLight` that accepts `$light`.

Use `switch` to display:

- `Red` → `Stop`
- `Yellow` → `Get Ready`
- `Green` → `Go`

Handle invalid values.

---

## Challenge 10 — User Role

Create a PHP function named `checkRole` that accepts `$role`.

Use `switch` to handle:

- `admin`
- `editor`
- `author`
- `user`
- `guest`

Display a different message for each role.

Handle unknown roles.

---

# Match Challenges

## Challenge 11 — HTTP Status

Create a PHP function named `getStatusMessage` that accepts `$status`.

Use `match` to return a message for:

- `200`
- `201`
- `400`
- `401`
- `403`
- `404`
- `500`

Handle unknown status codes.

Display the returned result.

---

## Challenge 12 — User Role

Create a PHP function named `getRoleMessage` that accepts `$role`.

Use `match` to return a different message for:

- `admin`
- `editor`
- `author`
- `user`
- `guest`

Display the returned result.

---

## Challenge 13 — Grade Letter

Create a PHP function named `getGrade` that accepts `$score`.

Use `match` with conditions to return:

- `A` for 90 or higher
- `B` for 80–89
- `C` for 70–79
- `D` for 60–69
- `F` for less than 60

Handle invalid scores.

Display the returned grade.

---

## Challenge 14 — Shipping Cost

Create a PHP function named `getShippingCost` that accepts `$country`.

Use `match` to return the shipping cost:

- `Egypt` → `50`
- `Saudi Arabia` → `100`
- `UAE` → `120`
- `Kuwait` → `150`
- Other countries → `200`

Display the returned shipping cost.

---

## Challenge 15 — Order Status

Create a PHP function named `getOrderMessage` that accepts `$status`.

Use `match` to return a message for:

- `pending`
- `shipped`
- `delivered`
- `cancelled`

Handle unknown statuses.

Display the returned result.

---

# Mixed Challenges

## Challenge 16 — Movie Ticket

Create a PHP function named `calculateTicketPrice` that accepts:

- `$age`
- `$day`

The function should:

- Use `if` to determine the customer's age category.
- Use `switch` to determine the selected day.
- Calculate the ticket price based on the age and day.

Display the final ticket price.

---

## Challenge 17 — Product Discount

Create a PHP function named `calculateDiscount` that accepts:

- `$price`
- `$customerType`

Customer types:

- `regular`
- `vip`
- `student`

Use `match` to determine the discount.

Use `if` to calculate the final price.

Display the original price, discount, and final price.

---

## Challenge 18 — Weather Recommendation

Create a PHP function named `weatherRecommendation` that accepts:

- `$temperature`
- `$weather`

Use:

- `if` to classify the temperature.
- `switch` to determine the weather condition.

Display a suitable recommendation.

---

## Challenge 19 — E-Commerce Order

Create a PHP function named `processOrder` that accepts:

- `$total`
- `$paymentMethod`
- `$customerType`

The function should:

- Use `match` to determine the customer discount.
- Use `if` to determine whether the order qualifies for the discount.
- Use `switch` to handle the payment method.
- Calculate and display the final price.

---

## Challenge 20 — Access System

Create a PHP function named `checkAccess` that accepts:

- `$username`
- `$role`
- `$isActive`

The function should:

- Use `if` to check whether the account is active.
- Use `match` to determine the user's permissions.
- Use `switch` to handle the user's role.
- Display an appropriate access message.

---

## Challenge 21 — Restaurant Order

Create a PHP function named `calculateOrder` that accepts:

- `$category`
- `$item`
- `$quantity`

The function should:

- Use `switch` to determine the selected category.
- Use `match` to determine the item's price.
- Use `if` to calculate the total and apply a discount when appropriate.

Display the order details and final price.

---

## Challenge 22 — Exam Result

Create a PHP function named `getExamResult` that accepts:

- `$score`
- `$attendance`
- `$status`

The function should:

- Validate the score.
- Check the attendance requirement.
- Determine the student's result.
- Display an appropriate result message.

Use `if`, `switch`, and `match` where appropriate.

Call the function with different values.
