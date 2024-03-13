<?php
require_once "Animal.php";
class Dog extends Animal {

    function __construct($n, $a){
        $this->name = $n;
        $this->age = $a;
    }


     static function eat(){
        echo "I like bones! <br>";
    }
}

