<?php 

class Item{}
class Food{

    private $id;
    private $name;
    private $category;    
    private $price;
    private $seller;


    
    
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

// $newObjectSatu = new Food();

// $newObjectSatu->setName("newObjectSatu");
// $newObjectSatu->setId(5);
// $newObjectSatu->setCategory("Snacks");
// $newObjectSatu->setPrice(5000);
// $newObjectSatu->setSeller("Mas Roy");

// //var_dump($bakwan);
// $newObjectDua = new Food();

?>