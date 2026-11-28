USE `mysql3944`;

SHOW TABLES;

DESCRIBE `employees`;

SELECT *
FROM
    `employees`
WHERE
    `jobTitle` LIKE '%Sales%';

SELECT *
FROM
    customers;

SELECT *
FROM
    customers
    INNER JOIN payments
        ON customers.customerNumber = payments.customerNumber;

SELECT *
FROM
    customers
    LEFT JOIN payments
        ON customers.customerNumber = payments.customerNumber;

SELECT *
FROM
    customers
    JOIN employees
        ON customers.salesRepEmployeeNumber = employees.employeeNumber;

SELECT *
FROM
    customers
    LEFT OUTER JOIN employees
        ON customers.salesRepEmployeeNumber = employees.employeeNumber;


SELECT *
FROM
    `offices`;

SELECT *
FROM
    `employees`;

SELECT
    CONCAT_WS(" ", e.firstName, e.lastName) `Full Name`,
    e.jobTitle,
    CONCAT_WS(" ", em.firstName, em.lastName) `Full Maneger Name`,
    CONCAT_WS(" ", o.addressLine1, o.addressLine2) `Full office Address`
FROM
    `employees` e
    JOIN `offices` o
        ON e.officeCode = o.officeCode
    LEFT JOIN `employees` em
        ON e.reportsTo = em.employeeNumber ;

SELECT c.customerNumber, c.customerName, c.country
FROM
    customers c
WHERE
    c.customerNumber IN (
        SELECT DISTINCT o.customerNumber
        FROM
            orders o
    );
    
