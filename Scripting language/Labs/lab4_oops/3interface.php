<?php

interface Vehicle {
    public function start();
    public function stop();
}

class Car implements Vehicle {
    public function start() {
        echo "Car started\n";
    }

    public function stop() {
        echo "Car stopped\n";
    }
}

$car = new Car();
$car->start(); // Outputs: Car started
$car->stop(); // Outputs: Car stopped
?>
