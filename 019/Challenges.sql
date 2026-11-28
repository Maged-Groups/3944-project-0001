-- ==========================================
-- Subquery Challenges
-- ==========================================

-- Challenge 1: Customers Without Orders
-- Display customers who have never placed an order.
-- Display: customerNumber, customerName, country.
-- Hint: NOT IN, Subquery.


-- Challenge 2: Expensive Products
-- Display products whose buyPrice is higher than
-- the average buyPrice of all products.
-- Display: productCode, productName, buyPrice.
-- Hint: AVG(), Subquery.


-- Challenge 3: Customers Above Average Credit
-- Display customers whose creditLimit is greater
-- than the average creditLimit of all customers.
-- Display: customerNumber, customerName, creditLimit.
-- Hint: AVG(), Subquery.


-- Challenge 4: Employees Without Customers
-- Display employees who are not assigned as sales representatives
-- to any customer.
-- Display: employeeNumber, firstName, lastName, jobTitle.
-- Hint: NOT IN, Subquery.


-- Challenge 5: Products Never Ordered
-- Display products that have never been included
-- in any order.
-- Display: productCode, productName, productLine.
-- Hint: NOT IN, Subquery.


-- Challenge 6: Customers With Large Orders
-- Display customers who have at least one order
-- with a total value greater than 50,000.
-- Display: customerNumber, customerName.
-- Hint: IN, Subquery, orderdetails.


-- ==========================================
-- Derived Table Challenges
-- ==========================================

-- Challenge 8: Customer Orders Count
-- Display the number of orders placed by each customer.
-- Display: customerNumber, customerName, totalOrders.
-- Hint: Derived Table, COUNT(), GROUP BY, JOIN.


-- Challenge 9: Product Sales Quantity
-- Display each product with its total sold quantity.
-- Display: productCode, productName, totalQuantity.
-- Hint: Derived Table, SUM(), GROUP BY, JOIN.


-- Challenge 10: Order Total Values
-- Calculate the total value of each order.
-- Display: orderNumber, totalOrderValue.
-- Hint: Derived Table, SUM(), GROUP BY.
-- Formula: quantityOrdered * priceEach.


-- Challenge 11: Best Selling Products
-- Display the top 5 products based on total sold quantity.
-- Display: productCode, productName, totalQuantity.
-- Hint: Derived Table, SUM(), GROUP BY, ORDER BY, LIMIT.


-- Challenge 12: Customer Payments Summary
-- Display each customer with their total payments.
-- Display: customerNumber, customerName, totalPayments.
-- Hint: Derived Table, SUM(), GROUP BY, JOIN.


-- Challenge 13: Product Line Statistics
-- Display each product line with:
-- 1. Number of products.
-- 2. Average buy price.
-- 3. Maximum buy price.
-- Display: productLine, totalProducts, averagePrice, highestPrice.
-- Hint: Derived Table, COUNT(), AVG(), MAX(), GROUP BY.


-- Challenge 14: Customers With Above Average Orders
-- Display customers whose number of orders is greater
-- than the average number of orders per customer.
-- Display: customerNumber, customerName, totalOrders.
-- Hint: Derived Table, COUNT(), GROUP BY, AVG().