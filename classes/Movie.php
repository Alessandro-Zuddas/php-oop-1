<?php

class Movie {

    private $title;
    private $desc;
    private $leng;
    private $duration;
    private $category;
    private $is_free;

    function __construct($_title, $_desc, $_leng, $_duration, $_category)
    {
        $this->title = $_title;
        $this->desc = $_desc;
        $this->leng = $_leng;
        $this->duration = $_duration;
        $this->category = $_category;
    }

    public function setTypo(){
        
        if($this->duration > 60){
            $this->is_free = false;
        }else{
            $this->is_free = true;
        }

    }

    public function getTypo(){
        
        return $this->is_free;

    }

    public function addCategory($string){
        $this->category .= " / ";
        $this->category .= $string;
    }

}

?>

<!-- $first_movie = new Movie("First Movie Title", "First Movie Description", "Ita", 40, "Action");
$first_movie->setTypo();
$first_movie->getTypo();

$second_movie = new Movie("Second Movie Title", "Second Movie Description", "Eng", 120, "Dramatic");
$second_movie->setTypo();
$second_movie->getTypo();

$first_movie->addCategory("Adventure");
$second_movie->addCategory("Romantic");

$first_series = new Series("First Series Title", "First Series Description", "Ita", 40, "Action");
$first_series->setTypo();
$first_series->getTypo();

$second_series = new Series("Second Series Title", "Second Series Description", "Eng", 120, "Dramatic");
$second_series->setTypo();
$second_series->getTypo();

$first_series->addCategory("Adventure");
$second_series->addCategory("Romantic"); -->