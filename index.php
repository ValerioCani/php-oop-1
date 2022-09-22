<?php

class Movie {
    public $title;
    public $director;
    public $release_year;
    public $review;
    public $movie_age;


    public function __construct($Title, $Director, $Release_Year, $Review){
        echo    "<ul>
                    <li> Titolo: 
                        $Title 
                    </li>  
                    <li> Diretto da 
                        $Director 
                    </li>
                    <li> Uscito nelle sale nel 
                        $Release_Year 
                    </li>
                    <li> Con un voto complessivo di 
                        $Review 
                    </li>   
                </ul>";
    } 

    public function getMovieAge($release_year){
        $movie_age = 2022 - $release_year;
        echo "<h2>This Movie is $movie_age years old!!</h2>";

    }
}


$Avatar = new Movie("Avatar", "James Cameron", 2009, 7.5);
$Avatar->getMovieAge(2009);

$NoCountryForOldMan = new Movie("NoCountryForOldMan", "Joel Coen", 2007, 7.9);
$NoCountryForOldMan->getMovieAge(2007);