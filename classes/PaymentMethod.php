<?php
class PaymentMethod
{
    protected $alias;
    // protected $creationDate;
    protected Address $billingAddress;

    function __construct($_alias, $_address)
    {
        $this->alias = $_alias;
        $this->billingAddress = $_address;
    }
}
