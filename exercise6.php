<?php

require_once 'vendor/autoload.php';

use App\Exercise6\EnergyDrinks;

$survey = new EnergyDrinks(12467,0.14,0.64);

echo round($survey->calculateEnergyDrinkers(),0,PHP_ROUND_HALF_DOWN);
echo PHP_EOL;
echo round($survey->calculatePreferCitrus(),0,PHP_ROUND_HALF_DOWN);
