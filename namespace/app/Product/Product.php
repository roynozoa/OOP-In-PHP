<?php

class Product{

    private $id;
    private $name;    
    private $price;
    private $publisher;

    public function __construct($id , $name , $price , $publisher ){
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->publisher = $publisher;
    }
    
    public function getId(){
        return $this->id;;
    }

    public function getName(){
        return $this->name;
    }


    public function getPrice(){
        return $this->price;
    }

    public function getPublisher(){
        return $this->publisher;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setCategory($category){
        $this->category = $category;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function setPublisher($publisher){
        $this->publisher = $publisher;
    }

    

}