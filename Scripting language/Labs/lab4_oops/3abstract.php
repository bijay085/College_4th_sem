<?php

abstract class Animal {
    abstract public function makeSound();

    public function sleep() {
        echo "Sleeping\n";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Bark\n";
    }
}

$dog = new Dog();
$dog->makeSound(); // Outputs: Bark
$dog->sleep(); // Outputs: Sleeping
?>
