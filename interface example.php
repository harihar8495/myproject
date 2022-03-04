<?php

interface Animals{
    public function animalInfo();
}
class Rat implements Animals{
    public function animalInfo(){
        echo "smallest animal";
    }
}
class Elephant implements Animals{
    public function animalInfo(){
        echo "Biggest Mammal";
    }
}
class Giraffe implements Animals{
    public function animalInfo(){
        echo "Tallest Animal";
    }
}

$giraffe = new Giraffe();
echo $giraffe->animalInfo();

/*
 * output
 * Tallest Animal
 */