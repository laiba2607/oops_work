<?php

class Animal {
    public function makeSound(){
        echo "animal makes a sound\n";
    }
}
class Dog extends Animal{
    public function makeSound(){
        echo "dog bark\n";
    }
}
class Cat extends Animal{
    public function makeSound(){
        echo "cat meow\n";
    }
}
$dog = new Dog("");
$dog->makeSound();
// $dog->makeSound();

$cat = new Cat("");
$cat->makeSound();
?>