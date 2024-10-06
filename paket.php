<?php
class Package
{
    protected $packageName;
    protected $destination;
    protected $price;

    public function __construct($packageName, $destination, $price)
    {
        $this->packageName = $packageName;
        $this->destination = $destination;
        $this->price = $price;
    }

    public function getPackageInfo()
    {
        return "$this->packageName <br>Destinasi: $this->destination <br>Harga: $this->price ";
    }

    public function getPrice()
    {
        return $this->price;
    }
}
