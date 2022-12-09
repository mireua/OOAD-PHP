<?php

use People\Customer;
final class Car
{
    private Customer $owner;
    private string $ownerName;
    private string $make;
    private string $carReg;
    private bool $manual = true;

    public function getOwner(): Customer
    {
        return $this->owner;
    }
    public function setOwner(Customer $owner): void
    {
        $this->owner = $owner;
    }
    public function getOwnerName(): string
    {
        return $this->ownerName;
    }
    public function setOwnerName(string $ownerName): void
    {
        $this->ownerName = $this->owner->getName();
    }
    public function getMake(): string
    {
        return $this->make;
    }
    public function setMake(string $make): void
    {
        $this->make = $make;
    }
    public function getCarReg(): string
    {
        return $this->carReg;
    }
    public function setCarReg(string $carReg): void
    {
        $this->carReg = $carReg;
    }
    public function isManual(): bool
    {
        return $this->manual;
    }
    public function setManual(bool $manual): void
    {
        $this->manual = $manual;
    }


}