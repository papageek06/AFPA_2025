<?php

class Humain {

        public function __construct($firstName, $name , $age , $country){
            $this->firstName = $firstName;
            $this->age = $age ;
            $this-> name = $name;
            $this -> country = $country;
        }


    public $firstName;
    public $age;
    public $name;
    public $country;

    public function introduce(){
        echo "hi , i am " . $this->firstName . " " . $this->name;
    }
}

$wajdi = new Humain("wajdi" , "rouafi" , "22" , "france");

$wajdi->introduce();


?>