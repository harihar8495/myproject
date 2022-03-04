<?php

//abstract class
abstract class Animal{
    public $name;
    public function __construct(string $name){
        $this->name = $name;
    }
    abstract public function intro() : string;
}
class Tiger extends Animal{
    public function  intro() : string{
        return "$this->name is carnivore";
    }
}
class Cow extends Animal{
    public function intro() : string{
        return  "$this->name is herbivore";
    }
}
$tiger = new Tiger('tiger');
echo $tiger->intro();
$cow = new Cow('cow');
echo $cow->intro();

/*
 * output
 * tiger is carnivorecow is herbivore
 */