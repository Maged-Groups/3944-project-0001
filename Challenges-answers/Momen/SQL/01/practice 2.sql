USE mysql3944;

-- SELECT *
-- FROM
--     customers
--     INNER JOIN payments
--         ON customers.customerNumber = payments.customerNumber;

-- SELECT *
-- FROM
--     customers;

-- SELECT *
-- FROM
--     customers
-- WHERE
--     salesRepEmployeeNumber IS NULL;

-- SELECT *
-- FROM
--     customers
--     INNER JOIN employees
--         ON customers.salesRepEmployeeNumber = employees.employeeNumber;

-- SELECT *
-- FROM
--     customers
--     JOIN employees
--         ON customers.salesRepEmployeeNumber = employees.employeeNumber;

-- SELECT *
-- FROM
--     customers
--     LEFT OUTER JOIN employees
--         ON customers.salesRepEmployeeNumber = employees.employeeNumber;

-- SELECT *
-- FROM
--     customers
--     RIGHT OUTER JOIN employees
--         ON customers.salesRepEmployeeNumber = employees.employeeNumber;

-- SELECT *
-- FROM
--     customers
--     LEFT JOIN employees
--         ON customers.salesRepEmployeeNumber = employees.employeeNumber;

-- SELECT *
-- FROM
--     customers
--     RIGHT JOIN employees
--         ON customers.salesRepEmployeeNumber = employees.employeeNumber;

-- SELECT *
-- FROM
--     customers
--     LEFT JOIN payments
--         ON customers.customerNumber = payments.customerNumber;

-- SELECT e.employeeNumber, e.firstName, e.lastName
-- FROM
--     employees AS e
--     JOIN offices AS o
--         ON e.officeCode = o.officeCode
-- WHERE
--     o.city = 'London';

-- SELECT e.employeeNumber, e.firstName, e.lastName
-- FROM
--     employees e
--     JOIN offices o
--         ON e.officeCode = o.officeCode
-- WHERE
--     o.city = 'London';

-- SELECT
--     e.officeCode AS officeID,
--     employeeNumber AS employeeID,
--     firstName AS `First Name`,
--     lastName `Last Name`,
--     city
-- FROM
--     employees e
--     JOIN offices o
--         ON e.officeCode = o.officeCode;

-- SELECT *
-- FROM
--     employees e
--     JOIN employees m
--         ON e.reportsTo = m.employeeNumber;

-- SELECT *
-- FROM
--     employees e
--     LEFT JOIN employees m
--         ON e.reportsTo = m.employeeNumber;

-- SELECT
--     customerNumber,
--     customerName,
--     CONCAT(addressLine1, " ", addressLine2, ", ", state, ", ", city, ", ", country) `Full Address`
-- FROM
--     customers;

-- Get each employee Full Name, Job Title, Full office Addreess, Manager Full Name, Manager Full Address

SELECT
    e.employeeNumber,
    CONCAT(e.firstName, ' ', e.lastName) `Full Name`,
    e.jobTitle,
    CONCAT(
        o.addressLine1, " ", o.addressLine2, ", ", o.state, ", ", o.city, ", ", o.country
    ) `Employee Full Office Address`,
    CONCAT(m.firstName, ' ', m.lastName) `Manager Full Name`,
    CONCAT(
        mo.addressLine1, " ", mo.addressLine2, ", ", mo.state, ", ", mo.city, ", ", mo.country
    ) `Manager Full Office Address`
FROM
    employees e
    LEFT JOIN employees m
        ON e.reportsTo = m.employeeNumber
    LEFT JOIN offices o
        ON e.officeCode = o.officeCode
    LEFT JOIN offices mo
        ON m.officeCode = mo.officeCode;

-- SELECT * From employees;
