<?php

require_once 'vendor/autoload.php';

use App\Exercise9\BankAccount;

$ben = new BankAccount('Benson',1725);
$john = new BankAccount('Johnson', -1725);

echo $john->showUserNameAndBalance() . PHP_EOL;
echo $ben->showUserNameAndBalance() . PHP_EOL;
