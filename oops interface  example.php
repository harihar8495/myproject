<?php
interface Vehicles{
    public function vehicleName();
}
class Car implements Vehicles{
    public function vehicleName(){
        echo "Four Wheeler";
    }
}
class Bike implements Vehicles{
    public function vehicleName(){
        echo "Two-Wheeler";
    }
}
class Truck implements Vehicles{
    public function vehicleName(){
        echo "Heavy Loads";
    }
}
$car = new Car;
echo $car->vehicleName();
$truck = new Truck;
echo $truck->vehicleName();

/*
 * output:
 * Four WheelerHeavy Loads
 */