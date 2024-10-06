<?php
require_once 'tiket.php';

class PremiumTicket extends Ticket
{
    private $extraServices;

    public function __construct($ticketNumber, $customerName, $chosenPackage, $extraServices)
    {
        parent::__construct($ticketNumber, $customerName, $chosenPackage);
        $this->extraServices = $extraServices;
    }

    public function getTicketInfo()
    {
        return parent::getTicketInfo() . ", Extra Services: " . implode(", ", $this->extraServices);
    }
}
