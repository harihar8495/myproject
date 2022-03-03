<?php
interface Vehicles{
    public function vehicleName();
}
interface Owner{
    public function ownerName();
}
class Car implements Vehicles,Owner{

    public function vehicleName(){
        echo "Four Wheeler";
    }
    public function OwnerName(){
        echo "selva";
    }
}
class Bike implements Vehicles{
    public function vehicleName(){
        echo "Two-Wheeler";
    }
}

$car = new Car;
echo $car->vehicleName();
echo "<br>";
echo $car->OwnerName();

/*
 * output:
 * Four Wheeler
 * selva
 */