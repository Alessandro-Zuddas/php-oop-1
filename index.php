<?php 

class Movie {

    private $title;
    private $desc;
    private $leng;
    private $duration;
    private $is_free;

    function __construct($_title, $_desc, $_leng, $_duration)
    {
        $this->title = $_title;
        $this->desc = $_desc;
        $this->leng = $_leng;
        $this->duration = $_duration;
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

}

$first_movie = new Movie("First Movie Title", "First Movie Description", "Ita", 40);
$first_movie->setTypo();
$first_movie->getTypo();

$second_movie = new Movie("Second Movie Title", "Second Movie Description", "Eng", 120);
$second_movie->setTypo();
$second_movie->getTypo();

var_dump($first_movie);
var_dump($second_movie);

?>

<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe ‘Movie’ OK
   => all'interno della classe sono dichiarate delle variabili d'istanza OK
   => all'interno della classe è definito un costruttore OK
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->