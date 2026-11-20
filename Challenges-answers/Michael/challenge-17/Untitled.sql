USE mysql3944;

SELECT * FROM employees;

SELECT * FROM offices;

-- Get each employee Full Name, Job Title, Full office Addreess, Manager Full Name, Manager Full Address

SELECT 
    CONCAT(e.firstName, ' ', e.lastName) `Employee Full Name`,
    e.jobTitle `Job Title`,
    CONCAT_WS(', ', eo.addressLine1, eo.addressLine2, eo.city, eo.state, eo.postalCode, eo.country) `Employee Full Office Address`,
    CONCAT(m.firstName, ' ', m.lastName) `Manager Full Name`,
    CONCAT_WS(', ', mo.addressLine1, mo.addressLine2, mo.city, mo.state, mo.postalCode, mo.country) `Manager Full Office Address`
FROM employees e
JOIN offices eo 
    ON e.officeCode = eo.officeCode
LEFT JOIN employees m 
    ON e.reportsTo = m.employeeNumber
LEFT JOIN offices mo 
    ON m.officeCode = mo.officeCode;
