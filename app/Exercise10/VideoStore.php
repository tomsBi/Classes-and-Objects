<?php

namespace App\Exercise10;

class VideoStore
{
    private array $videos = [];

    public function addMovie(Video $video): void
    {
        $this->videos[] = $video;
    }

    public function getAll(): array
    {
        return $this->videos;
    }

    public function searchMovie($title): Video
    {
        foreach($this->videos as $video){
            if($video->getTitle() === $title){
                return $video;
            }
        }
    }

    public function rentMovie($title)
    {
        if($this->searchMovie($title)){
            if($this->searchMovie($title)->isAvailable()){
                $this->searchMovie($title)->rent();
                echo 'Movie ' . $title . ' rented!' . PHP_EOL;
            }else{
                echo 'Movie ' . $title . ' not available!' . PHP_EOL;
            }
        }else{
            echo $title . ' not found!';
        }
    }

    public function returnMovie($title)
    {
        if($this->searchMovie($title)){
            if(! $this->searchMovie($title)->isAvailable()){
                $this->searchMovie($title)->return();
                echo 'Movie ' . $title . ' returned!' . PHP_EOL;
            }else{
                echo 'Movie ' . $title . ' already returned!' . PHP_EOL;
            }
        }else{
            echo $title . ' not found!';
        }
    }
}