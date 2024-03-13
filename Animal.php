<?php
abstract class Animal {
    public $name;
    protected $age;

    function birthday(){
        $this->age++;
        return $this->age;
    }
}