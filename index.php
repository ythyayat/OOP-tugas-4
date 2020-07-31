<?php 

//startOfRelease1 
//Karena kelasnya masih sedikit saya memutuskan untuk membuat require_once nya di dalam 1 file yang sama

echo "Release 1 <br>";

require_once("App/Source/Animal.php");
require_once("App/Source/Ape.php");
require_once("App/Source/Frog.php");


$sheep = new Animal("shaun");

echo $sheep->get_name(); // "shaun"
echo $sheep->get_legs(); // 2
echo $sheep->get_cold_blooded(); // false

//endOfRelease1

//startOfRelease2

echo "<br>Release 2<br>";

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
$sungokong->get_info();

$kodok = new Frog("buduk");
$kodok->jump(); // "hop hop"
$kodok->get_info();

//endOfRelease2