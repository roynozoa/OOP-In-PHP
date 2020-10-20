<?php

class Food{

    private $id;
    private $name;
    private $category;    
    private $price;
    private $seller;


    public function __construct($id = 0, $name = null, $category = null, $price = null, $seller = null){
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->seller = $seller;
    }
    
    public function getId(){
        return $this->id;;
    }

    public function getName(){
        return $this->name;
    }

    public function getCategory(){
        return $this->category;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getSeller(){
        return $this->seller;
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

    public function setSeller($seller){
        $this->seller = $seller;
    }


}
    $newObjectSatu = new Food(1, "Bakwan", "Snacks", 5000, "Mas Roy");


    echo $newObjectSatu->getName();