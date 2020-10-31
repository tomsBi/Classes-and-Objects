<?php

require_once 'vendor/autoload.php';

use App\Exercise4\Movie;
use App\Exercise4\MovieDirectory;

$movieDirectory = new MovieDirectory();

$casinoRoyale = new Movie('Casino Royale', 'Eon Productions', 'PG13');
$glass = new Movie('Glass', 'Buena Vista International', 'PG13');
$spiderMan = new Movie('Spider-Man: Into the Spider-Verse', 'Columbia Pictures', 'PG');

$movieDirectory->add($casinoRoyale);
$movieDirectory->add($glass);
$movieDirectory->add($spiderMan);

var_dump($movieDirectory->getPG($movieDirectory->getAllMovies()));