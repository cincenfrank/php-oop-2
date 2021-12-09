<?php
class Product
{
    protected string $id;
    // protected Manufacturer $manufacturer;
    protected float $price;
    protected string $description;
    // protected $reviewsList;

    function __construct($_id, $_price, $_description)
    {
        $this->id = $_id;
        $this->price = $_price;
        $this->description = $_description;
    }
    public function getId()
    {
        return $this->id;
    }
}
