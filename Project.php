<?php

use People\Customer;
use People\Driver;
use People\Manager;

use OrderAndComplaints\Order;

class Project
{
    public function createDriver(Order $order):Driver
    {
        $driver = new Driver();

        //TODO: this might not work
        $currentOrder = $order;

        $driver->setName("Bob");
        $driver->setPhoneNo("087 321 4567");

        return $driver;
    }

    public function createManager():Manager
    {
        $manager = new Manager();

        $manager->setName("Manny");
        $manager->setPhoneNo("087 987 1234");
        return $manager;
    }

    public function createCar(Customer $customer):Car
    {
        //TODO: MIGHT NOT WORK
        $owner = $customer;

        $car1 = new Car();
        $car1->setCarReg("141D22660");
        $car1->setMake("Volkswagen");
        $car1->setManual(true);
        $car1->setOwner($owner);
        $car1->setOwnerName($owner->getName());

        return $car1;
    }

    public function createCustomer():Customer
    {
        $customer1 = new Customer();

        $customer1->setName("Pete");
        $customer1->setPhoneNo("087 123 4567");
        $customer1->setCardNo("123456789");
        $customer1->setHomeAddress("123 Dublin Rd");

        return $customer1;
    }
}
