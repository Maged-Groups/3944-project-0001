USE mysql3944;

SELECT COUNT( * ) `Total Employees` FROM employees;

SELECT DISTINCT jobTitle FROM employees;

SELECT jobTitle, COUNT(jobTitle) FROM employees GROUP BY jobTitle;

SELECT jobTitle, officeCode, COUNT(jobTitle) FROM employees GROUP BY jobTitle, officeCode;

SELECT country, count(country) `Number of Customers` From customers GROUP BY country ORDER BY country;

SELECT country, city, count(country) `Number of Customers` From customers GROUP BY country, city ORDER BY country, city;

-- -

SELECT  5 + 4;
SELECT 'Maged';
SELECT 'Maged',  5 + 4; 

SELECT 'Employees' Record, COUNT(*) Total FROM employees 
UNION
SELECT 'Customers', COUNT(*) FROM customers
UNION
SELECT 'Products', COUNT(*) FROM products;

-- List all products as follow
/*
|   ProductCode    |  Product      |  Status              |   QTY   |
|   X987           |  Product A    |  Out of Stock < 200  |   XXX   |
|   TY3878387      |  Product B    |  Neer Limit   < 500  |   XXX   |
|   UY##8338       |  Product V    |  Good         < 2000 |   XXX   |
|   IU#37839849    |  Product K    |  Fine         > 2000 |   XXX   |
*/


-- List order details (items count and order total)
/*
| Order Number    |   Items in Order  |   Total   |
| 1001            |    5              |   15000   |
| 1002            |    10             |   25000   |
| 1003            |    12             |   10000   |
| 1004            |    4              |   11000   |
| 1005            |    8              |   14000   |
| 1006            |    5              |   22000   |
*/

SELECT * FROM orderDetails;

SELECT *, quantityOrdered * priceEach 'total'  FROM orderDetails;

SELECT orderNumber, COUNT(orderNumber) `Items in Order`, SUM(quantityOrdered * priceEach) 'total'  FROM orderDetails GROUP BY orderNumber;

SELECT 'Total', COUNT(orderNumber) `Items in Order`, SUM(quantityOrdered * priceEach) 'total'  FROM orderDetails;

SELECT orderNumber, COUNT(orderNumber) `Items in Order`, SUM(quantityOrdered * priceEach) 'total'  FROM orderDetails GROUP BY orderNumber
UNION
SELECT 'Total', COUNT(orderNumber) `Items in Order`, SUM(quantityOrdered * priceEach) 'total'  FROM orderDetails;

SELECT orderNumber, COUNT(orderNumber) `Items in Order`, SUM(quantityOrdered * priceEach) 'total'  FROM orderDetails GROUP BY orderNumber WITH ROLLUP;

-- https://www.mysqltutorial.org/mysql-basics/mysql-rollup/