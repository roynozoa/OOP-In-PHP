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

    // public function getInfo(){
    //     return "{$this->name} | {$this->publisher} (Rp. {$this->price})";
    // }

}


class Book extends Product{
    
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

    // public function getInfo(Product $product){
    //     return "{$product->getName()} | {$product->getPublisher()} (Rp. {$product->getPrice()})";
    // }

}

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



$komikSatu = new Book(1, "Naruto", 20000, "Shonen Jump", 500);
$gameSatu = new Game(1, "Pac-Man", 40000, "Bandai Namco", "unlimited");


var_dump($komikSatu->getName());
echo "<br>";
var_dump($gameSatu);

?>  