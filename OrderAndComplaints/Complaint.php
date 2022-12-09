<?php

namespace OrderAndComplaints;
class Complaint {
    private int $orderId;
    private string $complaint;
    private bool $resolved = false;

    public function getOrderId(): int
    {
        return $this->orderId;
    }
    public function setOrderId(int $orderId): void
    {
        $this->orderId = $orderId;
    }
    public function getComplaint(): string
    {
        return $this->complaint;
    }
    public function setComplaint(string $complaint): void
    {
        $this->complaint = $complaint;
    }
    public function isResolved(): bool
    {
        return $this->resolved;
    }
    public function setResolved(bool $resolved): void
    {
        $this->resolved = $resolved;
    }

    public function __toString(): string
    {
        return "OrderID = " . $this->orderId . ", Complaint = " . $this->complaint . ", Resolved = " . ($this->resolved ? 'True' : 'False');
    }


}
