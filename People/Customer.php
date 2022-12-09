<?php

namespace People;

use OrderAndComplaints\Complaint;
use OrderAndComplaints\Order;

class Customer extends Person
{
    private string $homeAddress;
    private string $cardNo;
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(mixed $name): void
    {
        $this->name = $name;
    }
    public function getPhoneNo(): string
    {
        return $this->phoneNo;
    }
    public function setPhoneNo(mixed $phoneNo): void
    {
        $this->phoneNo = $phoneNo;
    }
    public function getHomeAddress(): string
    {
        return $this->homeAddress;
    }
    public function setHomeAddress(mixed $homeAddress): void
    {
        $this->homeAddress = $homeAddress;
    }
    public function getCardNo(): string
    {
        return $this->cardNo;
    }
    public function setCardNo(string $cardNo): void
    {
        $this->cardNo = $cardNo;
    }

    public function createOrder():Order
    {
        $order = new Order();

        $order->setCustomerName($this->name);
        $order->setPickUpAddress("TU Dublin Blanch");
        $order->setDropOffAddress($this->homeAddress);

        return $order;
    }

    public function createComplaint(Order $order):Complaint
    {
        $complaint = new Complaint();
        $complaint->setComplaint("Driver was rude!");
    }

    public function __toString(): string
    {
        return "Customer Name = " . $this->name . ", Home Address = " . $this->homeAddress . ", Card Number = " . $this->cardNo . "Phone Number = " . $this->phoneNo;
    }


}