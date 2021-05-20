<?php

require 'Speedometer.php';

$myKmSpeed = new Speedometer();
$myMilesSpeed = new Speedometer();

echo round(Speedometer::convertKmToMiles(10), 2) . PHP_EOL;
echo round(Speedometer::convertMilesToKm(10), 2) . PHP_EOL;