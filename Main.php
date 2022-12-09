<?php

final class Main extends Project
{
    public function main():void
    {
        $customer1 = $this->createCustomer();
        print $customer1->__toString();
    }
}