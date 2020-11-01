<?php

require_once 'vendor/autoload.php';

use App\Exercise8\SavingAccount;
use App\Exercise8\Formatter;

$balance = readline('How much money is in the account? ');
$interest = readline('Enter the annual interest rate: ');
$months = readline('How long has the account been opened? ');

$account = new SavingAccount($balance);

$totalDeposited = 0;
$totalWithdrawal = 0;
$totalInterestEarned = 0;

for($i = 1; $i <= $months; $i++){
$deposit = (int) readline('Enter amount deposited for month ' . $i . ': ') .PHP_EOL;
$withdrawn = (int) readline('Enter amount withdrawn for month ' . $i  . ': ') . PHP_EOL;

$account->deposit($deposit);
$account->withdrawal($withdrawn);

$totalDeposited += (int) $deposit;
$totalWithdrawal += (int) $withdrawn;

$totalInterestEarned += $account->monthlyInterest($interest);
}

echo 'Total deposited: ' . Formatter::moneyFormatter($totalDeposited) . PHP_EOL;
echo 'Total withdrawn: ' . Formatter::moneyFormatter($totalWithdrawal) . PHP_EOL;
echo 'Interest earned: ' . Formatter::moneyFormatter($totalInterestEarned) .PHP_EOL;
echo 'Ending balance: ' . Formatter::moneyFormatter($account->getBalance()) . PHP_EOL;
