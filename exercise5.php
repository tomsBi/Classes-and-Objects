<?php

require_once 'vendor/autoload.php';

use App\Exercise5\Date;

$date = new Date(10,31,2020);

echo $date->displayDate() . PHP_EOL;

$date->setMonth(3);
$date->setDay(12);
$date->setYear(1995);

echo $date->displayDate() . PHP_EOL;