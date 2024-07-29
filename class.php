<?php

class student{
    private $name;
    private $age;
    private $city;

    public function __construct($name, $age, $city) {
        $this->name = $name;
        $this->age = $age;
        $this->city = $city;
    }
    public function get_name() {
        return $this->name . ',' . $this->age . ',' . $this->city;
    }
}
$stu = new student("ali", 22, "khi");
echo $stu->get_name();
?>