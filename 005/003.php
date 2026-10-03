<?php
declare(strict_types=1);


// $en_day_name = 'sat';
// // Get Arabic Day Name
// $ar_day_name = '';

// if ($en_day_name === 'sun')
//     $ar_day_name = 'الأحد';
// elseif ($en_day_name === 'mon')
//     $ar_day_name = 'الإثنين';
// elseif ($en_day_name === 'tue')
//     $ar_day_name = 'الثلاثاء';
// elseif ($en_day_name === 'wed')
//     $ar_day_name = 'الأربعاء';
// elseif ($en_day_name === 'thu')
//     $ar_day_name = 'الخميس';
// elseif ($en_day_name === 'fri')
//     $ar_day_name = 'الجمعة';
// elseif ($en_day_name === 'sat')
//     $ar_day_name = 'السبت';
// else 
//       $ar_day_name = 'أسم اليوم غير صحيح';


// echo $ar_day_name;


$en_day_name = 'jan';

$ar_day_name = match ($en_day_name) {
    'sat' => 'السبت',
    'sun' => 'الأحد',
    'mon' => 'الإثنين',
    'tue' => 'الثلاثاء',
    'wed' => 'الأربعاء',
    'thu' => 'الخميس',
    'fri' => 'الجمعة',
    default => 'أسم اليوم غير صحيح'
};
echo $ar_day_name;