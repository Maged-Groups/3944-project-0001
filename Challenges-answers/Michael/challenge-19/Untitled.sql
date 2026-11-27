USE mysql3944;

-- Challenge 1: Customers Without Orders

SELECT * FROM `customers`;

SELECT * FROM `orders`;

SELECT customerNumber, customerName, country FROM customers
WHERE customerNumber NOT IN (SELECT DISTINCT customerNumber FROM orders);


-- Challenge 2: Expensive Products

SELECT * FROM `products`;

SELECT productCode, productName, buyPrice FROM products
WHERE buyPrice > (SELECT AVG(buyPrice) FROM products);


-- Challenge 3: Customers Above Average Credit

SELECT * FROM `customers`;

SELECT customerNumber, customerName, creditLimit FROM customers
WHERE creditLimit > (SELECT AVG(creditLimit) FROM customers);


-- Challenge 4: Employees Without Customers

SELECT * FROM `employees`;

SELECT * FROM `customers`;

SELECT employeeNumber, firstName, lastName, jobTitle FROM employees
WHERE employeeNumber NOT IN (
SELECT DISTINCT salesRepEmployeeNumber 
FROM customers 
WHERE salesRepEmployeeNumber IS NOT NULL);


-- Challenge 5: Products Never Ordered

SELECT * FROM `products`;

SELECT * FROM `orderdetails`;

SELECT productCode, productName, productLine FROM products
WHERE productCode NOT IN (SELECT DISTINCT productCode FROM orderdetails);


-- Challenge 6: Customers With Large Orders

SELECT * FROM `customers`;

SELECT * FROM `orders`;

SELECT * FROM `orderdetails`;

SELECT customerNumber, customerName FROM customers
WHERE customerNumber IN (
    SELECT o.customerNumber FROM orders o
    JOIN orderdetails od ON o.orderNumber = od.orderNumber
    GROUP BY o.orderNumber, o.customerNumber
    HAVING SUM(od.quantityOrdered * od.priceEach) > 50000);


-- Challenge 7: Products Above Their Product Line Average

SELECT * FROM `products`;

SELECT p1.productCode, p1.productName, p1.productLine, p1.buyPrice
FROM products p1
WHERE p1.buyPrice > (
SELECT AVG(p2.buyPrice)
FROM products p2
WHERE p2.productLine = p1.productLine);


-- Challenge 8: Customer Orders Count

SELECT * FROM `customers`;

SELECT * FROM `orders`;

SELECT c.customerNumber, c.customerName, COALESCE(o.totalOrders, 0) totalOrders
FROM customers c
LEFT JOIN (
    SELECT customerNumber, COUNT(orderNumber) totalOrders
    FROM orders
    GROUP BY customerNumber) o ON c.customerNumber = o.customerNumber;


-- Challenge 9: Product Sales Quantity

SELECT * FROM `products`;

SELECT * FROM `orderdetails`;

SELECT p.productCode, p.productName, COALESCE(s.totalQuantity, 0) totalQuantity
FROM products p
LEFT JOIN (
    SELECT productCode, SUM(quantityOrdered) totalQuantity
    FROM orderdetails
    GROUP BY productCode) s ON p.productCode = s.productCode;


-- Challenge 10: Order Total Values

SELECT * FROM `orderdetails`;

SELECT orderNumber, totalOrderValue
FROM (
    SELECT orderNumber, SUM(quantityOrdered * priceEach) totalOrderValue
    FROM orderdetails GROUP BY orderNumber) orderTotals;


-- Challenge 11: Best Selling Products

SELECT * FROM `products`;

SELECT * FROM `orderdetails`;

SELECT p.productCode, p.productName, s.totalQuantity
FROM products p
JOIN (
    SELECT productCode, SUM(quantityOrdered) totalQuantity
    FROM orderdetails
    GROUP BY productCode
) s ON p.productCode = s.productCode
ORDER BY s.totalQuantity DESC
LIMIT 5;


-- Challenge 12: Customer Payments Summary

SELECT * FROM `customers`;

SELECT * FROM `payments`;

SELECT c.customerNumber, c.customerName, COALESCE(p.totalPayments, 0) totalPayments
FROM customers c
LEFT JOIN (
    SELECT customerNumber, SUM(amount) totalPayments
    FROM payments
    GROUP BY customerNumber
) p ON c.customerNumber = p.customerNumber;


-- Challenge 13: Product Line Statistics

SELECT * FROM `products`;

SELECT productLine, totalProducts, averagePrice, highestPrice
FROM (
    SELECT 
        productLine,
        COUNT(productCode) totalProducts,
        AVG(buyPrice) averagePrice,
        MAX(buyPrice) highestPrice
    FROM products
    GROUP BY productLine
) line_stats;


-- Challenge 14: Customers With Above Average Orders

SELECT * FROM `customers`;

SELECT * FROM `orders`;

SELECT c.customerNumber, c.customerName, o.totalOrders
FROM customers c
JOIN (
    SELECT customerNumber, COUNT(orderNumber) totalOrders
    FROM orders
    GROUP BY customerNumber
) o ON c.customerNumber = o.customerNumber
WHERE o.totalOrders > (
    SELECT AVG(totalOrders)
    FROM (
        SELECT COUNT(orderNumber) totalOrders
        FROM orders
        GROUP BY customerNumber
    ) avg_orders
);
