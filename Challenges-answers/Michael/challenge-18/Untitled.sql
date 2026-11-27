USE mysql3944;

SELECT * FROM `customers`;

SELECT * FROM `payments`;

SELECT 
    c.customerNumber `Customer Number`,
    c.customerName `Customer Name`,
    COUNT(p.checkNumber) `Number of Payments`,
    SUM(p.amount) `Total Payment`
FROM customers c
JOIN payments p 
    ON c.customerNumber = p.customerNumber
GROUP BY 
    c.customerNumber, 
    c.customerName;


SELECT customerNumber, customerName, creditLimit, 'Platinum' loyality 
FROM customers WHERE creditLimit > 200000 
UNION
SELECT customerNumber, customerName, creditLimit, 'Gold' loyality 
FROM customers WHERE creditLimit BETWEEN 100000 AND 200000 
UNION
SELECT customerNumber, customerName, creditLimit, 'Silver' loyality 
FROM customers WHERE creditLimit >= 50000 AND creditLimit < 100000 
UNION
SELECT customerNumber, customerName, creditLimit, 'Bronze' loyality 
FROM customers WHERE creditLimit < 50000;
