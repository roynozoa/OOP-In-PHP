<?php

class Game extends Product implements ProductInfo{
    
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

    public function getInfo(){
        return "Game: " . $this->getName() . " ~{$this->getPlayTime()} Jam";

    }

}