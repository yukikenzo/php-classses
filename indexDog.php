<?php
require_once "Dog.php";
$dog = new Dog("Reksis", 6 );

echo $dog->name . "<br>";



Dog::woof();
?>