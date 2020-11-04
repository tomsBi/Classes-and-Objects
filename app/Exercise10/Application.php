<?php

namespace App\Exercise10;

class Application
{

    private VideoStore $store;

    public function __construct(VideoStore $store)
    {
        $this->store = $store;
    }

    function run()
    {
        while (true) {
            echo 'Choose the operation you want to perform' . PHP_EOL;
            echo 'Choose 0 for EXIT' . PHP_EOL;
            echo 'Choose 1 to fill video store' . PHP_EOL;
            echo 'Choose 2 to rent video (as user)' . PHP_EOL;
            echo 'Choose 3 to return video (as user)' . PHP_EOL;
            echo 'Choose 4 to list inventory' . PHP_EOL;

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->addMovies();
                    break;
                case 2:
                    $this->rentVideo();
                    break;
                case 3:
                    $this->returnVideo();
                    break;
                case 4:
                    $this->listInventory();
                    break;
                default:
                    echo 'Sorry, I don\'t understand you..' . PHP_EOL;
            }
        }
    }

    private function addMovies()
    {
        $movie = readline('Enter title of the movie: ');
        $this->store->addMovie(new Video($movie));
    }

    private function rentVideo()
    {
        $title = readline('Enter movie you want to rent: ');
        $this->store->rentMovie($title);
    }

    private function returnVideo()
    {
        $title = readline('Enter movie you want to return: ');
        $this->store->returnMovie($title);
        if (!$this->store->searchMovie($title)->isAvailable()) {
            $rating = readline('Rate this movie: ');
            $this->store->searchMovie($title)->updateRating($rating);
        }
    }

    private function listInventory()
    {
        foreach ($this->store->getAll() as $video) {
            /** @var Video $video */
            echo 'Movie ' . $video->getTitle() . ' is ';
            if ($video->isAvailable() === true) {
                echo 'available. ';
            } else {
                echo 'not available. ';
            }
            echo 'Rating: ' . number_format($video->getRating(), 1) . PHP_EOL;
        }
    }
}