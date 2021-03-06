<?php
//nullcoalescing example program
$animalname = $_GET['animalname'] ?? 'not passed';
print($animalname);




//default arguments
function createmicrobrewery(string $breweryName= 'Hipster brew'):void
{
    echo $breweryName;
}
createmicrobrewery('haldee');









//functions and object
class Name
{
    private $firstname;
    private $lastname;

    public function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    function get_firstname()
    {
        return $this->firstname;
    }

    function get_lastname()
    {
        return $this->lastname;
    }

}

$hari = new Name('hari', 'haran');
echo $hari->get_firstname();
echo $hari->get_lastname();







//multiple classes and class as parameters to another class
class Name
{
    private $firstname;
    private $lastname;

    public function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function first_getting()
    {
        return $this->firstname;
    }
}

class City
{
    private $region;
    private $district;

    public function __construct(string $region, string $district)
    {
        $this->region = $region;
        $this->district = $district;

    }

    public function second_getting()
    {
        return $this->district;
    }
}

class Questionnaire
{
    public function __construct(Name $name, city $city)
    {
        $this->name = $name;
        $this->city = $city;
    }

    public function get_name()
    {
        return $this->name->first_getting();
    }

    public function get_city()
    {
        return $this->city->second_getting();
    }
}

$hari = new Questionnaire(new Name('hari', 'haran'), new City('erode', 'erode'));
echo $hari->get_name();
echo "<br>";
echo $hari->get_city();







//side effects example
function spilitingName(string $name): array
{
    return explode(' ', $name);
}

$name = 'kavin kumar';
$newName = spilitingName($name);


//oops interface concepts
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


//coding standards avoid type checking
function addition(int $value1,int $value2):int
{
    return $value1 + $value2;
}
$add = addition(3,3);
print($add);


//oops inheritance example
class Players
{
    private $name;
    private $country;
    public function __construct(string $name,string $country){
        $this->name = $name;
        $this->country = $country;

    }
    final public function intro(){
        echo "{$this->name} and he represents the country {$this->country}";
    }
}
class Virat extends Players{ //virat inherited from parents class players
    public function attitude(){
        echo "Most passionated player is ";
    }
}
class Dhoni extends Players{//overriding inherited methods
    private $city;
    public function __construct(string $name,string $country,string $city){
        $this->name =$name;
        $this->country = $country;
        $this->city = $city;
    }
    public function intro(){
        echo "{$this->name} ,he represents {$this->country} and from {$this->city}";
    }
}

$dhoni = new Dhoni('msdhoni','india','raipur');
$dhoni->intro();



class Country{
    const HOMETOWN = "India";
    public function native(){
        echo self::HOMETOWN;

    }
}
$country = new Country();
$country->native();


abstract class Animals{
    private $name;
    public function __construct($name){
        this->name = $name;
    }
    abstract public function intro():string;
}
class Tiger extends Animals{
    public function  intro():string{
        return "$this->name is carnivore";
    }
}
$tiger = new Animals("tiger");
echo $tiger->intro();


//traits
trait communicate{
    public function telegram(){
        echo "message sent";
    }
}
class Dial{
    use communicate;
}
class Contact{
    use communicate;
}
$dial = new Dial();
$dial->telegram();
$contact = new Contact();
$contact->telegram();
