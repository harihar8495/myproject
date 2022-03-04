<?php
class Name
{
    private $firstname;
    private $lastname;
    public function __construct(string $firstname, string $lastname)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
    function get_firstname(){
        return $this->firstname;
    }
    function get_lastname(){
        return $this->lastname;
    }

}

$hari = new Name('hari','haran');
echo  $hari->get_firstname();
echo   $hari->get_lastname();

/*
 * output:
 * hariharan
 */