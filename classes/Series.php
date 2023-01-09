<?php

class Series {

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