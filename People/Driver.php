<?php

namespace People;

use OrderAndComplaints\Order;
use OrderAndComplaints\OrderStatus;

class Driver extends Person
{
    
    private float $cost;
    private Order $order;

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function getPhoneNo(): string
    {
        return $this->phoneNo;
    }
    public function setPhoneNo(string $phoneNo): void
    {
        $this->phoneNo = $phoneNo;
    }
    public function collectCustomer(Order $order): void
    {
        $order->setOrderStatus(OrderStatus::InProcess);
        $order->setDriverName($this->getName());
    }

    public function collectPayment(Order $order): void
    {
        $order->setWasPayed(true);
    }

    public function dropCustomer(Order $order): void
    {
        $order->setOrderStatus(OrderStatus::Complete);
        $this->collectPayment($order);
    }

    public function setCost(float $cost): void
    {
        $this->cost = $cost;
    }
    public function updatePrice(Order $order): void
    {
        $price = $order->getOrderCost() + $this->getCost();
        $order->setOrderCost($price);
    }
    public function getCost(): float
    {
        return $this->cost;
    }

    public function __toString(): string
    {
        return "Driver Name = " . $this->name . ", Phone Number = " . $this->phoneNo;
    }


}