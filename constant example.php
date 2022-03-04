<?php
class Country{
    const HOMETOWN = "India";
    public function native(){
        echo self::HOMETOWN;

    }
}
$country = new Country();
$country->native();

/*
 * output
 * India
 */