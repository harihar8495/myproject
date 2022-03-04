<?php
////multiple classes and class as parameters to another class
class Name
{
    private $firstname;
    private $lastname;

    public function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
    public function first_getting(){
        return $this->firstname;
    }
}
class City{
    private $region;
    private $district;

    public function  __construct(string $region,string $district)
    {
        $this->region = $region;
        $this->district= $district;

    }
    public function second_getting(){
        return $this->district;
    }
}
Class Questionnaire{
    public function __construct(Name $name,city $city){
        $this->name = $name;
        $this->city = $city;
    }
    public function get_name(){
        return $this->name->first_getting();
    }
    public function get_city(){
        return $this->city->second_getting();
    }
}
$hari = new Questionnaire(new Name('hari','haran'),new City('erode','erode'));
echo $hari->get_name();
echo "<br>";
echo $hari->get_city();

/*
 * output:
 * hari
   erode
 */