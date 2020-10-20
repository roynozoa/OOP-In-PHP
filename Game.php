<?php
class Game extends Product{
    
    private $playTime;

    public function __construct($id, $name , $price, $publisher, $playTime ){
        parent::__construct($id , $name , $price , $publisher);
        $this->playTime = $playTime;
    }

    public function getPlayTime(){
        return $this->playTime;
    }

    public function setPlayTime($playTime){
        $this->playTime = $playTime;
    }

}


?>