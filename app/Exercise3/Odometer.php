<?php

namespace App\Exercise3;

class Odometer
{
    private int $kilometers = 0;

    public function showKilometers(): int
    {
        return $this->kilometers;
    }

    public function drive()
    {
        if ($this->kilometers < 999999) {
            $this->kilometers++;
        } elseif ($this->kilometers === 999999) {
            $this->kilometers = 0;
        }

    }
}
