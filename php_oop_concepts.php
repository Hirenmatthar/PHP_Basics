<?php
// Encapsulation
class Car {
  private $brand;
  private $color;

  public function __construct($brand, $color) {
    $this->brand = $brand;
    $this->color = $color;
  }

  public function getBrand() {
    return $this->brand;
  }

  public function getColor() {
    return $this->color;
  }

  public function startEngine() {
    echo "The {$this->color} {$this->brand} car engine is started.";
  }
}

// Inheritance
class ElectricCar extends Car {
  public function startEngine() {
    echo "The {$this->getColor()} {$this->getBrand()} electric car is started.";
  }
}

// Polymorphism
function startCarEngine(Vehicle $vehicle) {
  $vehicle->startEngine();
}

// Abstraction
interface Vehicle {
  public function startEngine();
}

class Motorcycle implements Vehicle {
  public function startEngine() {
    echo "The motorcycle engine is started.";
  }
}

// Usage
$car = new Car("Toyota", "Red");
$car->startEngine(); // Output: The Red Toyota car engine is started.

$electricCar = new ElectricCar("Tesla", "Blue");
$electricCar->startEngine(); // Output: The Blue Tesla electric car is started.

$startableMotorcycle = new Motorcycle();
startCarEngine($startableMotorcycle); // Output: The motorcycle engine is started.
?>
