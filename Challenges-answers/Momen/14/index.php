<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Company\Gym;


$cairoGym = new Gym();
$cairoGym->create(
    'Smart Gym - Cairo',
    'Cairo',
    100
);


$alexandriaGym = new Gym();
$alexandriaGym->create(
    'Smart Gym - Alexandria',
    'Alexandria',
    150
);


$gizaGym = new Gym();
$gizaGym->create(
    'Smart Gym - Giza',
    'Giza',
    200
);

$cairoGym->addMember(
    101,
    'Ahmed Ali',
    '01011111111',
    'monthly'
);

$cairoGym->addMember(
    102,
    'Mohamed Samir',
    '01022222222',
    'quarterly'
);

$cairoGym->addMember(
    103,
    'Omar Hassan',
    '01033333333',
    'yearly'
);

$cairoGym->addMember(
    104,
    'Karim Adel',
    '01044444444',
    'monthly'
);



$alexandriaGym->addMember(
    201,
    'Ali Mahmoud',
    '01111111111',
    'yearly'
);

$alexandriaGym->addMember(
    202,
    'Youssef Ahmed',
    '01122222222',
    'monthly'
);

$alexandriaGym->addMember(
    203,
    'Mostafa Tarek',
    '01133333333',
    'quarterly'
);



$gizaGym->addMember(
    301,
    'Hassan Ibrahim',
    '01211111111',
    'quarterly'
);

$gizaGym->addMember(
    302,
    'Amr Khaled',
    '01222222222',
    'monthly'
);

$gizaGym->addMember(
    303,
    'Ziad Mohamed',
    '01233333333',
    'yearly'
);

$gizaGym->addMember(
    304,
    'Seif Ashraf',
    '01244444444',
    'monthly'
);



$cairoGym->renewSubscription(
    101,
    'yearly'
);

$cairoGym->renewSubscription(
    102,
    'monthly'
);

$cairoGym->removeMember(104);

$cairoGym->addExpense(5000);



$alexandriaGym->renewSubscription(
    202,
    'quarterly'
);

$alexandriaGym->addMember(
    204,
    'Peter Nabil',
    '01155555555',
    'yearly'
);

$alexandriaGym->removeMember(203);

$alexandriaGym->addExpense(7500);



$gizaGym->renewSubscription(
    301,
    'yearly'
);

$gizaGym->addMember(
    305,
    'Fady Sameh',
    '01255555555',
    'quarterly'
);

$gizaGym->addExpense(10000);


$cairoGym->membersReport();

$alexandriaGym->membersReport();

$gizaGym->membersReport();



$cairoGym->report();

$alexandriaGym->report();

$gizaGym->report();




Gym::companyMembersReport();



Gym::companyReport();
