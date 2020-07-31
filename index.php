<?php 

require_once("App/Source/Animal.php");

$sheep = new Animal("shaun");

echo $sheep->get_name(); // "shaun"
echo $sheep->get_legs(); // 2
echo $sheep->get_cold_blooded(); // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())