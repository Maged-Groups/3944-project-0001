-- Practice: Find Customers Who Have Placed Orders

-- Display the following information for customers who have placed at least one order:
-- 1. Customer Number
-- 2. Customer Name
-- 3. Country

-- Requirements:
-- Use the customers table.
-- Use a Subquery with the orders table.
-- Use the IN operator.

-- USING JOIN
SELECT DISTINCT `c`.`customerNumber`, `c`.`customerName`, `country` FROM `orders` `o`
JOIN `customers` `c`
ON `c`.`customerNumber` = `o`.`customerNumber`;

-- USING Sub-query
SELECT `customerNumber`, `customerName`, `country` FROM `customers` WHERE `customerNumber` IN (SELECT DISTINCT `customerNumber` FROM `orders`);

SELECT DISTINCT `customerNumber` FROM `orders`;