<?php
declare (strict_types=1);
$convertToMinutes = fn (float $hours) : float => $hours*60;
$hour_1 = $convertToMinutes (6);
echo "6 hours are equivalent to $hour_1 minutes";