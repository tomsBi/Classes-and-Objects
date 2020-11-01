<?php

namespace App\Exercise9;

class BankAccount
{

    private string $name;
    private int $balance;

    public function __construct(string $name, int $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function showUserNameAndBalance(): string
    {
        if ($this->balance < 0) {
            return $this->name . ', -$' . Formatter::formatter($this->balance);
        }
        return $this->name . ', $' . Formatter::formatter($this->balance);
    }

}