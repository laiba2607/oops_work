<?php

class animal{
    protected $name;
    public function __construct($name){
        $this->name =$name;
    }
    public function getName(){
        return "{$this->name}. animal can eat";
    }
}

class dog extends animal{
    public function bark() {
        return "{$this->name} is barking";
    }
}
$ani = new animal("both");
$d = new dog("single");

echo $ani->getName(). "<br>";
echo $d->bark(). "<br>";
echo $d->getName()
?>