USE mysql3944;
SELECT c.customerNumber , c.customerName , COUNT(p.checkNumber) 'Number of Payments', SUM(p.amount) 'Total Payment' FROM customers c
LEFT JOIN payments p ON c.customerNumber = p.customerNumber
GROUP BY c.customerNumber, c.customerName;