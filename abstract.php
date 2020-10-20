<?php 


abstract class Product{

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

    abstract public function getInfo();

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

    public function getInfo(){
        return "Book: " . $this->getName() . " {$this->getPages()} Halaman";

    }
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

    public function getInfo(){
        return "Game: " . $this->getName() . " ~{$this->getPlayTime()} Jam";

    }

}

$komikSatu = new Book(1, "Naruto", 20000, "Shonen Jump", 500);
$gameSatu = new Game(1, "Pac-Man", 40000, "Bandai Namco", "unlimited");

echo $komikSatu->getInfo();
echo "<br>";
echo $gameSatu->getInfo();



?>  