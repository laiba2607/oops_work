<?php

abstract class Animal{
    abstract protected function makeSound();

    public function move(){
        echo "animal can move\n";
    }
}

class Dog extends Animal{
    public function makeSound(){
        echo "dog bark\n";
    }
}
$dog = new Dog("");
$dog->makeSound();
$dog->move();

?>