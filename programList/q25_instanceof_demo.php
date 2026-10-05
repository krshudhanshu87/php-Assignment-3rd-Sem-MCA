<?php
// Define base and derived classes
class Vehicle {}
class Car extends Vehicle {}
class Bike {}

// Instantiate an object of class Car
$myCar = new Car();

echo "<h3>instanceof Verification Results:</h3>";

// 1. Check if object belongs to its own class
if ($myCar instanceof Car) {
    echo "1. \$myCar is an instance of Car.<br>";
}

// 2. Check if object belongs to its parent class (Inheritance)
if ($myCar instanceof Vehicle) {
    echo "2. \$myCar is an instance of Vehicle (Parent Class).<br>";
}

// 3. Check against an unrelated class
if ($myCar instanceof Bike) {
    echo "3. \$myCar is an instance of Bike.<br>";
} else {
    echo "3. \$myCar is NOT an instance of Bike.<br>";
}
