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

$car = new Car;
echo $car->vehicleName();


/*
 * output:
 * Four Wheeler
 */