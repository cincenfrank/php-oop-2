<?php
require_once __DIR__ . "/./Address.php";

trait PersonalData
{
    protected string $firstName;
    protected string $lastName;
    protected int $phoneNumber;
    protected Address $address;


    // function __construct($_firstName, $_lastName, $_phoneNumber, $_address, $_country, $_city)
    // {
    //     $this->setFirstName($_firstName)->setLastName($_lastName)->setPhoneNumber($_phoneNumber);
    // }

    public function setFirstName($_name)
    {
        $this->firstName = $_name;
        return $this;
    }

    public function setLastName($_lastName)
    {
        $this->lastName = $_lastName;
        return $this;
    }

    public function setPhoneNumber($number)
    {
        $this->phoneNumber = $number;
        return $this;
    }
}
