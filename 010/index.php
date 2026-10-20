<?php
declare(strict_types=1);

require_once 'app/Payments/Fawry/Payment.php';
require_once 'app/Payments/Fawry/Refund.php';

Payment::print();
Refund::generateInvoice();