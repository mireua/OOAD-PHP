<?php

namespace People;

use OrderAndComplaints\Order;
use OrderAndComplaints\OrderStatus;
use OrderAndComplaints\Complaint;
class Manager extends Person
{
    private Complaint $complaint;
    private Order $order;

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

    public function resolveComplaint(Complaint $complaint): void
    {
        $complaint->setResolved(true);
    }
    public function viewComplaint(Complaint $complaint): void
    {
        $complaint->getComplaint();
    }
    public function refund(Order $order): void
    {
        $order->setOrderStatus(OrderStatus::Refunded);
    }

    public function __toString(): string
    {
        return "Manager's Name = " . $this->name . ", Phone Number = " . $this->phoneNo;
    }
}