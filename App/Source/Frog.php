<?php 

    class Frog extends Animal {

        public function __construct($nama = "Binatang"){
            $this->name = $nama;
            $this->legs = 4;
        }

        public function jump(){
            echo "<br>hop hop<br>";
        }

    }