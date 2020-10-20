<?php

class Book extends Product implements ProductInfo{
    
    private $pages;

    public function __construct($id , $name , $price , $publisher , $pages ){
        parent::__construct($id , $name , $price , $publisher);
        $this->pages = $pages;
    }

    public function getPages(){
        return $this->pages;
    }

    public function setPages($pages){
        $this->pages = $pages;
    }

    public function getInfo(){
        return "Book: " . $this->getName() . " {$this->getPages()} Halaman";

    }
}