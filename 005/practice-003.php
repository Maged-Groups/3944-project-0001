<?php

$day = 'mon';

// Messages:
//  Happy Weekend OR Enjoy your work

$msg = match ($day) {
    'sun', 'mon', 'tue', 'wed', 'thu' => 'Enjoy your work',
    'sat', 'fri' => 'Happy Weekend',
    default => 'Invalid day name'
};


echo $msg;