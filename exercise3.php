<?php

require_once 'vendor/autoload.php';

use App\Exercise3\FuelGauge;
use App\Exercise3\Odometer;

$fuelGauge = new FuelGauge();
$odometer = new Odometer();


while ($fuelGauge->currentFuel() < $fuelGauge->getTankCapacity()) {
    $fuelGauge->fillTank();
    echo 'Current fuel:' . $fuelGauge->currentFuel() . ' ';
}
echo PHP_EOL;

while($fuelGauge->currentFuel() > 0)
{
    $odometer->drive();
    echo $odometer->showKilometers().PHP_EOL;
    if($odometer->showKilometers() % 10 === 0)
    {
        $fuelGauge->useFuel();
        echo 'Current fuel: ' . $fuelGauge->currentFuel() . PHP_EOL;
    }
}

