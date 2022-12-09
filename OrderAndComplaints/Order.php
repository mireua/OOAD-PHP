<?php

namespace OrderAndComplaints;
class Order {
    public string $driverName;
    private string $customerName;
    private string $pickUpAddress;
    private string $dropOffAddress;
    private int $orderID;
    private float $orderCost = 3.00;
    private bool $wasPayed = false;
    private string $dateOfOrder;
    private string $orderStatus = OrderStatus::Pending;

    public function __construct($dateOfOrder)
    {
        $d = time();
        $this->$dateOfOrder = date("Y-m-d",$d);
    }

    public function getDateOfOrder(): string
    {
        return $this->dateOfOrder;
    }


    public function getDriverName(): string
    {
        return $this->driverName;
    }
    public function setDriverName(mixed $driverName): void
    {
        $this->driverName = $driverName;
    }
    public function getCustomerName(): string
    {
        return $this->customerName;
    }
    public function setCustomerName(mixed $customerName): void
    {
        $this->customerName = $customerName;
    }
    public function getPickUpAddress(): string
    {
        return $this->pickUpAddress;
    }
    public function setPickUpAddress(mixed $pickUpAddress): void
    {
        $this->pickUpAddress = $pickUpAddress;
    }
    public function getDropOffAddress(): string
    {
        return $this->dropOffAddress;
    }
    public function setDropOffAddress(mixed $dropOffAddress): void
    {
        $this->dropOffAddress = $dropOffAddress;
    }
    public function getOrderID(): int
    {
        return $this->orderID;
    }
    public function setOrderID(mixed $orderID): void
    {
        $this->orderID = $orderID;
    }
    public function getOrderCost(): float
    {
        return $this->orderCost;
    }
    public function setOrderCost(float $orderCost): void
    {
        $this->orderCost = $orderCost;
    }
    public function isWasPayed(): bool
    {
        return $this->wasPayed;
    }
    public function setWasPayed(bool $wasPayed): void
    {
        $this->wasPayed = $wasPayed;
    }
    public function getOrderStatus(): string
    {
        return $this->orderStatus;
    }
    public function setOrderStatus(string $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

    public function __toString(): string
    {
        return "Order ID = " . $this->orderID . ", Date of Order = " . $this->dateOfOrder . ", Customer Name = " . $this->customerName . ", Driver Name = " . $this->driverName
        . ", Pick Up Address = " . $this->pickUpAddress . ", Drop-off Address = " . $this->dropOffAddress . ", Order Cost = " . $this->orderCost . ", Payed = " . $this->wasPayed
        . ", Order Status = " . $this->orderStatus;
    }


}
