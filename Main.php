<?php

use Project\Project;

require_once "Project.php";

$customer = new Project();

$customer1 = $customer->createCustomer();
$car1 = $customer->createCar($customer1);
$order1 = $customer1->createOrder();
$driver1 = $customer->createDriver($order1);
$manager1 = $customer->createManager();

$driver1->collectCustomer($order1);
$driver1->setCost(5.00);
$driver1->updatePrice($order1);
$driver1->dropCustomer($order1);

$complaint1 = $customer1->createComplaint($order1);
$manager1->viewComplaint($complaint1);
$manager1->resolveComplaint($complaint1);

$manager1->refund($order1);



//echo $customer1->__toString(); //this line prints out the details of the customer

//echo $car1->__toString(); //this line of code prints out the details of the car

//echo $order1->__toString(); //this line of code prints out the details of the order

//echo $driver1->__toString(); //this line of code prints out the details of the driver

//echo $manager1->__toString(); //this line of code prints out the details of the manager

//echo $complaint1->__toString(); //this line of code prints out the details of the complaint


