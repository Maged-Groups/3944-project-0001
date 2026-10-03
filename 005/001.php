<?php
declare(strict_types=1);

// Ternary Operator ___ ? __ : __;


$status = 550;

// Status codes


// $status_text =  $status === 200 ? 'Success' : 'Bad request';

$status_text =  $status >= 200 && $status <= 299 ? 'Success' : 'Not Success';


echo $status_text;