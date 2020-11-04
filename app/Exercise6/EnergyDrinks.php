<?php

namespace App\Exercise6;

class EnergyDrinks
{
    private int $surveyed;
    private float $purchasedEnergyDrinks;
    private float $preferCitrusDrinks;

    public function __construct(
        int $surveyed,
        float $purchasedEnergyDrinks,
        float $preferCitrusDrinks
    )
    {
        $this->surveyed = $surveyed;
        $this->purchasedEnergyDrinks = $purchasedEnergyDrinks;
        $this->preferCitrusDrinks = $preferCitrusDrinks;

    }

    function calculateEnergyDrinkers(): int
    {
        return $this->surveyed * $this->purchasedEnergyDrinks;
    }

    function calculatePreferCitrus(): int
    {
        return $this->calculateEnergyDrinkers() * $this->preferCitrusDrinks;
    }
}