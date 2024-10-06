<?php
class Ticket
{
    protected $ticketNumber;
    protected $customerName;
    protected $chosenPackage;

    public function __construct($ticketNumber, $customerName, $chosenPackage)
    {
        $this->ticketNumber = $ticketNumber;
        $this->customerName = $customerName;
        $this->chosenPackage = $chosenPackage;
    }

    public function getTicketInfo()
    {
        return "Tiket #$this->ticketNumber untuk $this->customerName <br> Paket: " . $this->chosenPackage->getPackageInfo();
    }
}
