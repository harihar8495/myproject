<?php
class Name
{
    private $first_name;

    public function __construct($first_name)
    {
        return $this->first_name = $first_name;
    }

    public function getFirstname()
    {
        return $this->first_name;
    }

}

$hari = new Name('hari', 'haran');
echo $hari->getFirstname();

class Residing
{
    private $resident_place;

    public function __construct($resident_place)
    {
        return $this->resident_place = $resident_place;
    }

    public function getResidentName()
    {
        return $this->resident_place;
    }

}

$hari = new Residing('coimbatore');
echo $hari->getResidentName();

/*
 * output:
 * haricoimbatore
 */

