<?php

require_once 'helpers/index.php';

$fullName = 'maged m. yaseen';
dump($fullName);

$exploded = explode(' ', $fullName);

dump($exploded);


$addrees  = [45, 'Roushdi street', 'Alexandria', 'Egypt'];
dump($addrees);

$fullAddress = implode(', ', $addrees);
dump($fullAddress);