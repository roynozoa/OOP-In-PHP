<?php

require_once 'app/init.php';

$komikSatu = new Book(1, "Naruto", 20000, "Shonen Jump", 500);
$gameSatu = new Game(1, "Pac-Man", 40000, "Bandai Namco", "unlimited");

echo $komikSatu->getInfo();
echo "<br>";
echo $gameSatu->getInfo();



?>