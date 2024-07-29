<?php

class Person {
    // Private property
    private $name;
    private $age;

    // Constructor
    public function __construct($name, $age) {
        $this->setName($name);
        $this->setAge($age);
    }

    // Getter for name
    public function getName() {
        return $this->name;
    }

    // Setter for name
    public function setName($name) {
        // You can add validation here
        if (is_string($name) && strlen($name) > 0) {
            $this->name = $name;
        } else {
            throw new Exception("Invalid name");
        }
    }

    // Getter for age
    public function getAge() {
        return $this->age;
    }

    // Setter for age
    public function setAge($age) {
        // You can add validation here
        if (is_numeric($age) && $age > 0) {
            $this->age = $age;
        } else {
            throw new Exception("Invalid age");
        }
    }

    // Public method
    public function displayPersonInfo() {
        echo "Name: " . $this->getName() . "\n";
        echo "Age: " . $this->getAge() . "\n";
    }
}

// Usage
try {
    $person = new Person("John Doe", 30);
    $person->displayPersonInfo();

    // Trying to set an invalid age
    $person->setAge(-5); // This will throw an exception
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

?>
