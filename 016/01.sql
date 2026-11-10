-- Make a database active
USE `mysql3944`;

-- List all tables in the database
SHOW TABLES;

-- Show table structure
DESCRIBE `employees`;

-- List table records
SELECT * FROM `employees`;

-- List all employees, get only employNumber, first name, last name, job title
SELECT `employeeNumber`, `firstName`, `lastName`, `jobTitle` FROM `employees`;

-- List all employees sorted alphabetically by first names
SELECT * FROM `employees` ORDER BY `firstname`;
-- OR
SELECT * FROM `employees` ORDER BY `firstname` ASC;
-- OR desc
SELECT * FROM `employees` ORDER BY `firstname` DESC;

-- List all employees sorted by office code and job titles
SELECT * FROM `employees` ORDER BY `officeCode` DESC, `jobTitle` DESC;

-- List all sales rep employees
SELECT * FROM `employees` WHERE `jobTitle` = 'Sales Rep';

-- List all sales rep employees in San Francisco
SELECT * FROM `employees` WHERE `jobTitle` = 'Sales Rep' AND `officeCode` = '1';

-- List all sales team
SELECT * FROM `employees` WHERE `jobTitle` LIKE '%Sale%';

-- List all job titles in the company
SELECT DISTINCT `jobTitle` FROM `employees`;
