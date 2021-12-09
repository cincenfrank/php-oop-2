<?php
require_once __DIR__ . "/./PersonalData.php";
require_once __DIR__ . "/./PaymentMethod.php";
require_once __DIR__ . "/./StoreData.php";

class User extends PersonalData
{
    protected $username;
    protected $email;
    protected $registrationDate;
    protected $paymentMethodsList = [];
    protected $additionalAddressesList = [];
    protected $chart = [];
    protected $reviewIdList;

    function __construct($_username, $_email)
    {
        $this->setUsername($_username)->setEmail($_email)->setRegistrationDate();
    }
    public function setUsername($_username): User
    {
        $this->username = $_username;
        return $this;
    }
    public function getUsername(): string
    {
        return $this->username;
    }
    public function setEmail($_email): User
    {
        $this->email = $_email;
        return $this;
    }
    public function setRegistrationDate()
    {

        $this->registrationDate = new DateTime();
        return $this;
    }
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }
    public function setPersonalData($_firstName, $_lastName, $_phoneNumber, $_address, $_country, $_city)
    {
        $this->setFirstName($_firstName)->setLastName($_lastName)->setPhoneNumber($_phoneNumber);
        $this->address = new Address($_address, $_country, $_city);
    }

    public function addPaymentMethod($_alias, $_address)
    {
        $this->paymentMethodsList[] = new PaymentMethod($_alias, $_address);
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function addProductToCart($_id)
    {

        foreach (StoreData::$productsList as $product) {
            if ($product->getId() === $_id) {
                $this->chart[] = $product;
                return;
            }
        }
    }
}
