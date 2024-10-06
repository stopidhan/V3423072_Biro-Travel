<?php
require_once 'paket.php';

class VIPPackage extends Package
{
    private $luxuryLevel;

    public function __construct($packageName, $destination, $price, $luxuryLevel)
    {
        parent::__construct($packageName, $destination, $price);
        $this->luxuryLevel = $luxuryLevel;
    }

    public function getPackageInfo()
    {
        return parent::getPackageInfo() . "<br>Kemewahan: $this->luxuryLevel";
    }
}
