<?php
/*SELECT
    e.employeeNumber,
    CONCAT(e.firstName, ' ', e.lastName) AS employeeFullName,
    e.email,
    e.officeCode,
    e.reportsTo,
    e.jobTitle,
    o.city,
    o.country,
    o.phone,
    CONCAT_WS(' ', o.addressLine1, o.addressLine2) AS officeAddress,

    CONCAT(em.firstName, ' ', em.lastName) AS managerFullName,

    c.customerNumber,
    c.customerName,
    CONCAT(c.contactFirstName, ' ', c.contactLastName) AS customerContactFullName,
    c.phone AS customerPhone,
    c.city AS customerCity,
    c.country AS customerCountry,
    c.creditLimit

FROM employees e

JOIN offices o
    ON e.officeCode = o.officeCode

LEFT JOIN employees em
    ON e.reportsTo = em.employeeNumber

LEFT JOIN customers c
    ON c.salesRepEmployeeNumber = e.employeeNumber;

SELECT
    CONCAT(firstName, ' ', lastName) AS fullName,
    UPPER(firstName) AS upperName,
    LOWER(lastName) AS lowerName,
    LTRIM(firstName) AS cleanName,
    CONCAT(
    REPLACE(firstName, 'Diane', 'Youssef'),
    ' ',
    REPLACE(lastName, 'Murphy', 'Ehab')
) AS fullName
FROM employees;

SELECT 
    CURTIME() AS Time_Now,
    CURDATE() AS Date_Today,
    DAYNAME(CURDATE()) AS Day_Name;

SELECT
    ROUND(125.678, 2),
    CEIL(12.3),
    FLOOR(12.9),
    ABS(-100);

SELECT
    NOW() Date,
    CURDATE(),
    YEAR(NOW()),
    MONTH(NOW()),
    DAY(NOW());
    
SELECT
    customerName,
    creditLimit,
    IF(creditLimit >= 50000, 'VIP', 'Normal') AS customerType
FROM customers;

SELECT
    country,
    COUNT(*) AS totalCustomers,
    AVG(creditLimit) AS averageCredit,
    MAX(creditLimit) AS highestCredit
FROM customers
GROUP BY country
HAVING COUNT(*) > 5
ORDER BY totalCustomers DESC;

SELECT COUNT(*) AS Total_Employees FROM employees;
SELECT * FROM employees;
SELECT jobTitle ,officeCode,count(jobTitle) count FROM employees GROUP BY jobTitle,officeCode ORDER BY jobTitle ,officeCode;

SELECT country,count(country) NumberCustomers FROM customers GROUP BY country ORDER BY country ;

SELECT 'employees',count(*) employees from employees
UNION
SELECT 'customers',count(*) customers from customers;

SELECT * from orderdetails;
SELECT orderNumber ,sum(quantityOrdered*priceEach) totalQuantity_Price FROM orderdetails GROUP BY orderNumber WITH ROLLUP;
DESCRIBE orderdetails;*/

/*SELECT * FROM customers;
SELECT customerNumber, customerName, creditLimit, 'Platinum' Loyality FROM customers WHERE creditLimit > 200000
UNION
SELECT customerNumber, customerName, creditLimit, 'Gold' FROM customers WHERE creditLimit BETWEEN 100000 AND 200000
UNION
SELECT customerNumber, customerName, creditLimit, 'silver' FROM customers WHERE creditLimit BETWEEN 50000 AND 100000
UNION
SELECT customerNumber, customerName, creditLimit, 'Platinum' Loyality FROM customers WHERE creditLimit < 50000;*/

