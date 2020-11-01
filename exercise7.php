<?php

require_once 'vendor/autoload.php';

use App\Exercise7\DogTest;

$max = new DogTest('Max','male','Lady','Rocky');
$rocky = new DogTest('Rocky','male','Molly','Sam');
$sparky = new DogTest('Sparky','male');
$buster = new DogTest('Buster','male','Lady','Sparky');
$sam = new DogTest('Sam','male');
$lady = new DogTest('Lady','female');
$molly = new DogTest('Molly','female');
$coco = new DogTest('Coco','female','Molly','Sparky');


echo $coco->fathersName();
echo PHP_EOL;
echo $sparky->fathersName();
echo PHP_EOL;
echo $coco->hasSameMother($rocky);