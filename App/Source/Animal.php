<?php 

    class Animal {
        
        protected $name, $legs = 2, $cold_blooded = false;


        public function __construct($nama = "Binatang"){
            $this->name = $nama;
        }

        public function get_name(){
            return $this->name."<br>";
        }

        public function get_legs(){
            return $this->legs."<br>";
        }

        public function get_cold_blooded(){
            if($this->cold_blooded == true){
                return "true<br>";
            }
                return "false<br>";
        }

        public function get_info(){
            echo "<br>Name : {$this->name}<br>Legs : {$this->legs}<br>Cold Blooded : {$this->get_cold_blooded()}";
        }

    }