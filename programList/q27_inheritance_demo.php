<?php
// Parent class
class Vehicle {
    public string $brand;
    
    public function __construct(string $brand) {
        $this->brand = $brand;
    }

    public function startEngine(): void {
        echo "The engine of the {$this->brand} is starting...<br>";
    }
}

// Child class inheriting from Vehicle
class Car extends Vehicle {
    public string $model;

    public function __construct(string $brand, string $model) {
        // Call parent constructor
        parent::__construct($brand);
        $this->model = $model;
    }

    public function displayDetails(): void {
        echo "Car Details: {$this->brand} {$this->model}<br>";
    }
}

// Usage
$myCar = new Car("Toyota", "Camry");
$myCar->displayDetails();  // Method defined in child class
$myCar->startEngine();     // Method inherited from parent class
?>