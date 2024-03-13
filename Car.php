<?php
class Car {
    public $Brand;
    private $mileage;

    function __construct($b, $m){
        echo $this->Brand = $b . "  ";
        echo $this->mileage = $m . "  ";
    }

    function __destruct(){
        echo $this->Brand . " is dead!";
    }

    public function makeNoise(){
        echo "Beep, beep!!";
    }

}