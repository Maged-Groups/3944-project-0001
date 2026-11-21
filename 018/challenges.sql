-- Get the total payment for each customer with the number of payments
/*
|   Customer Number    |  Customer Name    |   Number of Payments    |   Total Payment    |
|    2233              |    Custeomre A    |       5                 |     145000         |
*/

SELECT * FROM customers;

/*
 List all customers by loyality as follow:

More than 200000 -> Platinum
Between 100000 and 200000 -> Gold
Between 50000 and 100000 -> Sliver
Less than 50000 -> Bronze

*/

/*
|   Customer Number  |   Customer Name    |   Credit Limit        |   Loyality    |
|   Customer Number  |  Customer Name     |       xxxxx           |   Platinum    |
|   Customer Number  |  Customer Name     |       xxxxx           |   Platinum    |
|   Customer Number  |  Customer Name     |       xxxxx           |   Platinum    |
|   Customer Number  |  Customer Name     |       xxxxx           |   Gold        |
|   Customer Number  |  Customer Name     |       xxxxx           |   Gold        |
|   Customer Number  |  Customer Name     |       xxxxx           |   Gold        |
|   Customer Number  |  Customer Name     |       xxxxx           |   Sliver      |
|   Customer Number  |  Customer Name     |       xxxxx           |   Sliver      |
|   Customer Number  |  Customer Name     |       xxxxx           |   Sliver      |
|   Customer Number  |  Customer Name     |       xxxxx           |   Sliver      |
|   Customer Number  |  Customer Name     |       xxxxx           |   Bronze      |
|   Customer Number  |  Customer Name     |       xxxxx           |   Bronze      |
*/