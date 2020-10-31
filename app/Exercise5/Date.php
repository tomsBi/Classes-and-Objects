<?php

namespace App\Exercise5;

class Date
{
    private int $month;
    private int $day;
    private int $year;

    public function __construct(int $month, int $day, int $year)
    {

        $this->month = $month;
        $this->day = $day;
        $this->year = $year;
    }

    public function getMonth(): int
    {
        return $this->month;
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setMonth($month): int
    {
        return $this->month = $month;
    }

    public function setDay($day): int
    {
        return $this->day = $day;
    }

    public function setYear($year): int
    {
        return $this->year = $year;
    }

    public function displayDate(): string
    {
        return $this->month . '/' . $this->day . '/' . $this->year;
    }

}