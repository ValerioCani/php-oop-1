<?php

class Movie {
    public $title;
    public $director;
    public $release_year;
    public $review;
    public $movie_age;

    public function __construct($Title, $Director, $Release_Year, $Review){
        $this->title = $Title;
        $this->director = $Director;
        $this->release_year = $Release_Year;
        $this->review = $Review;
    } 

    public function visualizeMovie(){
        echo    "<ul>
        <li> Titolo: 
            $this->title 
        </li>  
        <li> Diretto da 
            $this->director 
        </li>
        <li> Uscito nelle sale nel 
            $this->release_year 
        </li>
        <li> Con un voto complessivo di 
            $this->review 
        </li>   
    </ul>";
    }

    public function getMovieAge(){
        $movie_age = 2022 - $this->release_year;
        echo "<h2>This Movie is $movie_age years old!!</h2>";
    }
}


$Avatar = new Movie("Avatar", "James Cameron", 2009, 7.5);
$Avatar->visualizeMovie(); 
$Avatar->getMovieAge();

$NoCountryForOldMan = new Movie("NoCountryForOldMan", "Joel Coen", 2007, 7.9);
$NoCountryForOldMan->visualizeMovie(); 
$NoCountryForOldMan->getMovieAge();