<?php

namespace App\Exercise10;

class Video
{
    private string $title;
    private bool $available = true;
    private float $rating = 0.0;
    private array $ratings = [];

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getRating(): float
    {
        return $this->rating;
    }

    public function isAvailable()
    {
        return $this->available;
    }

    public function rent()
    {
        $this->available = false;
    }

    public function return()
    {
        $this->available = true;
    }

    public function updateRating($rating)
    {
        $this->ratings[] = $rating;
        $this->rating = array_sum($this->ratings) / count($this->ratings);
    }
}