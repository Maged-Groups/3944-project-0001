
SELECT * from payments;
SELECT * from customers;

SELECT
    c.customerNumber,
    c.customerName,
    COUNT(p.checkNumber) numberOfPayments,
    SUM(p.amount) totalPayment
FROM customers c
JOIN payments p
    ON c.customerNumber = p.customerNumber
GROUP BY
    c.customerNumber,
    c.customerName;


SELECT customerNumber,customerName,creditLimit,'Platinum' loyality FROM customers WHERE creditLimit>=200000 UNION
SELECT customerNumber,customerName,creditLimit,'Gold' loyality FROM customers WHERE creditLimit>=100000 AND creditLimit<200000 UNION
SELECT customerNumber,customerName,creditLimit,'Silver' loyality FROM customers WHERE creditLimit>50000 AND creditLimit<100000 UNION
SELECT customerNumber,customerName,creditLimit,'Bronze' loyality FROM customers WHERE creditLimit<=50000;