<?php
class Details
{
    private $full_name;
    private $address;
    private $account;


    public function __construct($full_name, $address, $account)
    {
        $this->full_name = $full_name;
        $this->address = $address;
        $this->account = $account;

    }

    public function getDetails()
    {
        echo "Name: $this->full_name address: $this->address account number: $this->account";
    }
}
$hari = new Details('hari','erode','344656655');
$hari->getDetails();

/*
 * output:
 * Name: hari address: erode account number: 344656655
 */