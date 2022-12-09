<?php

namespace OrderAndComplaints;
abstract class OrderStatus
{
    const Pending = "Pending";
    const Complete = "Complete";
    const InProcess = "In Process";
    const Refunded = "Refunded";

}
