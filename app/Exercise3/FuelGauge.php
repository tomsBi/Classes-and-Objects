<?php

namespace App\Exercise3;

class FuelGauge
{
    private int $fuel = 0;
    private int $tankCapacity = 70;

    public function currentFuel(): int
    {
        return $this->fuel;
    }

    public function getTankCapacity(): int
    {
        return $this->tankCapacity;
    }

    public function useFuel()
    {
        if ($this->fuel > 0) {
            $this->fuel--;
        }
    }

    public function fillTank(): void
    {
        if ($this->fuel < 70) {
            $this->fuel++;
        }
    }

}