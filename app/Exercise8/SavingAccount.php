<?php

namespace App\Exercise8;

class SavingAccount
{
    private $startingBalance;

    public function __construct($startingBalance)
    {
        $this->startingBalance = $startingBalance;
    }

    public function getBalance()
    {
        return $this->startingBalance;
    }

    public function withdrawal(int $amount)
    {
        $this->startingBalance -= $amount;
    }

    public function deposit(int $amount)
    {
       $this->startingBalance += $amount;
    }

    public function monthlyInterest($annualInterestRate)
    {
        $interest = $this->startingBalance * $annualInterestRate / 12;
        $this->startingBalance += $interest;
        return $interest;
    }
}