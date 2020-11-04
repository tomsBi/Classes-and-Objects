<?php

namespace App\Exercise4;

class MovieDirectory
{

    private array $movies;

    public function __constructor(array $movies = [])
    {
        $this->movies = $movies;
    }

    public function add(Movie $movie): void
    {
        $this->movies[] = $movie;
    }

    public function getAllMovies(): array
    {
        return $this->movies;
    }

    public function getPG($movies): array
    {
        return array_filter($movies, function ($movie){
       return $movie->getRating() === 'PG';
    });
    }

}