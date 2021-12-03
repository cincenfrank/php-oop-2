<?php
require_once "./PersonalData.php";

class User extends PersonalData
{
    protected $username;
    protected $email;
    protected $registrationDate;
    protected $lastLogin;
    protected $paymentMethodsList = [];
    protected $additionalAddressesList = [];
    protected $chart = [];
    protected $reviewIdList;

    function __construct($_username, $_email)
    {
        $this->setUsername($_username)->setEmail($_email);
    }
    public function setUsername($_username): User
    {
        $this->username = $_username;
        return $this;
    }
    public function setEmail($_email): User
    {
        $this->email = $_email;
        return $this;
    }
}
