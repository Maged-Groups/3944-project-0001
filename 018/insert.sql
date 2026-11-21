USE mysql3944;

SELECT * FROM payments;

DESCRIBE payments;

INSERT INTO `payments` VALUES(103, 'IOPen12300', '2026-11-21', 1000);

INSERT INTO `payments` VALUES
    (495, 'IOPen12301', '2026-11-22', 1500),
    (103, 'IOPen12302', '2026-11-22', 1500),
    (487, 'IOPen12303', '2026-11-22', 1500),
    (362, 'IOPen12305', '2026-11-22', 1500);


DESCRIBE employees;

DESCRIBE offices;

DESCRIBE products;
/*
'officeCode','varchar(10)','NO','PRI',NULL,''
'city','varchar(50)','NO','',NULL,''
'phone','varchar(50)','NO','',NULL,''
'addressLine1','varchar(50)','NO','',NULL,''
'addressLine2','varchar(50)','YES','',NULL,''
'state','varchar(50)','YES','',NULL,''
'country','varchar(50)','NO','',NULL,''
'postalCode','varchar(15)','NO','',NULL,''
'territory','varchar(10)','NO','',NULL,''
*/
SELECT * FROM offices;

INSERT INTO offices (officeCode, phone, addressLine1, city, country,territory, postalCode) 
VALUES
 (8, '+20352000', '45 dr. Ahmed Str', 'Alexandria', 'Egypt', 'Roushdi', '12345');
