<?php

namespace App\Exercise1;

class Product
{

    private $name;
    private $price;
    private $amount;

    public function __construct(string $name, int $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function price(): int
    {
        return $this->price;
    }

    public function amount(): int
    {
        return $this->amount;
    }

    public function setPrice($price): int
    {
        return $this->price = $price;
    }

    public function setAmount($amount): int
    {
        return $this->amount = $amount;
    }
}