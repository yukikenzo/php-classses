<?php
require_once "Animal.php";
class Cat extends Animal {

    function setName($name){
        $this->name = $name;
    }

    function __construct(){
        echo "Puss in Boots <br>";
    }

    static function eat(){
        echo "I like whiskas!";
    }
}