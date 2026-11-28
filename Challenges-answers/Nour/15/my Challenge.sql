USE mysql3944;

SELECT customerNumber, customerName, country
FROM
    customers
WHERE
    customerNumber NOT IN (
        SELECT customerNumber
        FROM
            orders
    );

SELECT productCode, productName, buyPrice
FROM
    products
WHERE
    buyPrice > (
        SELECT AVG(buyPrice)
        FROM
            products
    ) ;

SELECT customerNumber, customerName, creditLimit
FROM
    customers
WHERE
    creditLimit > (
        SELECT AVG(creditLimit)
        FROM
            customers
    );

SELECT employeeNumber, firstName, lastName, jobTitle
FROM
    employees
WHERE
    jobTitle NOT LIKE '%Sales Rep%';

SELECT productCode, productName, productLine
FROM
    products
WHERE
    productCode NOT IN (
        SELECT DISTINCT productCode
        FROM
            orderdetails
    );

SELECT `customer orders`.customerNumber, `c`.customerName
FROM
    customers c
    JOIN (
        SELECT SUM(od.quantityOrdered * od.priceEach) `Total`, o.customerNumber
        FROM
            orderdetails od
            LEFT JOIN orders o
                ON od.orderNumber = o.orderNumber
        GROUP BY
            o.customerNumber
        HAVING
            `Total` > 50000
    ) `customer orders`
        ON `customer orders`.customerNumber = c.customerNumber;

SELECT *
FROM
    orderdetails;
SELECT *
FROM
    orders;
SELECT o.customerNumber, c.customerName, COUNT(o.customerNumber) 'totalOrders'
FROM
    orders o
    LEFT JOIN customers c
        ON o.customerNumber = c.customerNumber
GROUP BY
    o.customerNumber;

SELECT p.productCode, p.productName, `ordered`.qty 'totalQuantity'
FROM
    products p
    LEFT JOIN (
        SELECT productCode, SUM(quantityOrdered) `qty`
        FROM
            orderdetails od
        GROUP BY
            productCode
    ) `ordered`
        ON p.productCode = `ordered`.productCode ;

SELECT orderNumber, SUM(quantityOrdered * priceEach) 'totalOrderValue'
FROM
    orderdetails
GROUP BY
    orderNumber;

SELECT p.productCode, p.productName, `qtyod`.`qty` 'totalQuantity'
FROM
    products p
    LEFT JOIN (
        SELECT productCode, SUM(quantityOrdered) `qty`
        FROM
            orderdetails od
        GROUP BY
            productCode
    ) `qtyod`
        ON p.productCode = `qtyod`.productCode
ORDER BY
    totalQuantity DESC
LIMIT 5;

SELECT
    c.customerNumber, c.customerName, `customer paies`.`paies` 'totalPayments'
FROM
    customers c
    JOIN (
        SELECT customerNumber, SUM(amount) `paies`
        FROM
            payments
        GROUP BY
            customerNumber
    ) `customer paies`
        ON c.customerNumber = `customer paies`.customerNumber;
 
SELECT
    productline,
    COUNT(productCode) 'totalProducts',
    AVG(buyPrice) averagePrice,
    MAX(buyPrice) highestPrice
FROM
    products
GROUP BY
    productline;

SELECT c.customerNumber, c.customerName,count.co 'totalOrders' FROM customers c JOIN 
    (SELECT customerNumber , COUNT(orderNumber) co
        FROM
            orders
        GROUP BY
            customerNumber) count ON c.customerNumber =count.customerNumber
WHERE count.co >(SELECT AVG(od.co)
FROM
    (
        SELECT COUNT(orderNumber) co
        FROM
            orders
        GROUP BY
            customerNumber
    ) od) 
     ;
 

