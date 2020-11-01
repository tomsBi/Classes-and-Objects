<?php

namespace App\Exercise11;

class Account
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {

        $this->name = $name;
        $this->balance = $balance;
    }

    public function accountInfo(): string
    {
        return 'Account name: ' . $this->name . ', Balance: $' . number_format($this->balance, 2);
    }

    public function withdrawal($amount)
    {
        $this->balance -= $amount;
    }

    public function deposit($amount)
    {
        $this->balance += $amount;
    }

    public function balance()
    {
        return '$' . number_format($this->balance, 2);
    }

    public static function transfer(Account $from, Account $to, int $amount)
    {
        $from->withdrawal($amount);
        $to->deposit($amount);
    }
}