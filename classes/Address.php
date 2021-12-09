<?php
class Address
{

    protected $country;
    protected $city;
    protected $address;

    function __construct($_address, $_country, $_city)
    {
        $this->address = $_address;
        $this->country = $_country;
        $this->city = $_city;
    }

    public function setCountry($_country)
    {
        $this->country = $_country;
        return $this;
    }
    public function setCity($_city)
    {
        $this->city = $_city;
        return $this;
    }
    public function setAddress($_address)
    {
        $this->address = $_address;
        return $this;
    }
}
