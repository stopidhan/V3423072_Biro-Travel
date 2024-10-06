<?php
class BusAgency
{
    private $agencyName;
    private $availablePackages = [];

    public function __construct($name)
    {
        $this->agencyName = $name;
    }

    public function addPackage($package)
    {
        $this->availablePackages[] = $package;
    }

    public function listPackages()
    {
        return $this->availablePackages;
    }

    public function getAgencyName()
    {
        return $this->agencyName;
    }
}