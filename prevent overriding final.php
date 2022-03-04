<?php
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

$dhoni = new Players('msdhoni','india');
$dhoni->intro();

/*
 * output:
 * didn't show final used to prevent overriding
 */