<?php

require_once 'vendor/autoload.php';

use App\Exercise11\Account;

$bartosAccount = new Account('Barto\'s account', 100.00);
$bartoSwissAccount = new Account('Barto\'s account in Switzerland', 1000000.00);

echo 'Initial state' . PHP_EOL;
echo $bartosAccount->accountInfo() . PHP_EOL;
echo $bartoSwissAccount->accountInfo() . PHP_EOL;

$bartosAccount->withdrawal(20);
echo 'Barto\'s account balance is now: ' . $bartosAccount->balance() . PHP_EOL;
$bartoSwissAccount->deposit(200);
echo 'Barto\'s Swiss account balance is now: ' . $bartoSwissAccount->balance() . PHP_EOL;

echo 'Final state' . PHP_EOL;
echo $bartosAccount->accountInfo() . PHP_EOL;
echo $bartoSwissAccount->accountInfo() . PHP_EOL;
echo PHP_EOL;

$mattsAccount = new Account('Matt\'s account', 1000);
$myAccount = new Account('My Account', 0);

$mattsAccount->withdrawal(100);
$myAccount->deposit(100);

echo $mattsAccount->accountInfo() . PHP_EOL;
echo $myAccount->accountInfo() . PHP_EOL;
echo PHP_EOL;

$a = new Account('A',100);
$b = new Account('B',0);
$c = new Account('C',0);

Account::transfer($a,$b,50);
Account::transfer($b,$c,25);

echo $a->accountInfo() . PHP_EOL;
echo $b->accountInfo() . PHP_EOL;
echo $c->accountInfo() . PHP_EOL;



