/*
 Write an SQL query to display customers who have placed more than 3 orders.

Display the following information:
- Customer Number
- Customer Name
- Total Orders
*/

SELECT customerNumber, COUNT(customerNumber) `Total Orders` FROM orders GROUP BY customerNumber HAVING `Total Orders` > 10 ORDER BY customerNumber ;

-- USING JOIN
SELECT c.customerNumber, c.customerName, COUNT(c.customerNumber) `Total Orders` 
FROM orders o
JOIN customers c
ON c.customerNumber = o.customerNumber
GROUP BY c.customerNumber, c.customerName HAVING `Total Orders` > 10 ORDER BY customerNumber;

-- USING Drived Table
SELECT c.customerNumber, c.customerName, `Total Orders` 
FROM `customers` c
JOIN 
(SELECT customerNumber, COUNT(customerNumber) `Total Orders` FROM orders GROUP BY customerNumber HAVING `Total Orders` > 10) AS `customers order`
ON `customers order`.customerNumber =  `c`.customerNumber;