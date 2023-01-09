<?php

require_once __DIR__ . '/classes/Movie.php';
require_once __DIR__ . '/classes/Series.php';

$movies = [];
$series = [];

function fillMovies($arr){

    for($i = 0; $i < 10; $i++){

        $movie = new Movie("Movie Title", "Movie Description", "Ita", 40, "Action");
        $movie->setTypo();
        $movie->getTypo();
        $movie->addCategory("Adventure");

        array_push($arr, $movie);

    }

}

function fillSeries($arr){
    
    for($i = 0; $i < 10; $i++){

        $show = new Series("Show Title", "Show Description", "Ita", 40, "Action");
        $show->setTypo();
        $show->getTypo();
        $show->addCategory("Adventure");

        array_push($arr, $show);

    }

}

?>