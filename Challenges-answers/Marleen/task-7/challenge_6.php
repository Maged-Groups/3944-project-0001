<?php
declare (strict_types=1);
$bookTrip = function (string $destination='', int $days=1, string $travelClass='economy', $includeHotel=true): void
{
    var_dump ($destination, $days, $travelClass, $includeHotel);
};
$bookTrip (destination: 'Hurghada', days:3);
$bookTrip (destination: 'Greece', includeHotel: false);
$bookTrip (includeHotel:false, destination: 'Morcco', travelClass: 'vip' );